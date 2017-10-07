<?php

/**
 * @file
 * Contains \Drupal\blocktabs\Form\BlocktabsEditForm.
 */

namespace Drupal\blocktabs\Form;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\blocktabs\ConfigurableTabInterface;
use Drupal\blocktabs\TabManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for blocktabs edit form.
 */
class BlocktabsEditForm extends BlocktabsFormBase {

  /**
   * The tab manager service.
   *
   * @var \Drupal\blocktabs\TabManager
   */
  protected $tabManager;

  /**
   * Constructs an BlockTabsEditForm object.
   *
   * @param \Drupal\Core\Entity\EntityStorageInterface $entity_storage
   *   The storage.
   * @param \Drupal\blocktabs\TabManager $tab_manager
   *   The tab manager service.
   */
  public function __construct(EntityStorageInterface $entity_storage, TabManager $tab_manager) {
    parent::__construct($entity_storage);
    $this->tabManager = $tab_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.manager')->getStorage('blocktabs'),
      $container->get('plugin.manager.blocktabs.tab')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $user_input = $form_state->getUserInput();
    $form['#title'] = $this->t('Edit blocktabs %name', array('%name' => $this->entity->label()));
    $form['#tree'] = TRUE;
    $form['#attached']['library'][] = 'blocktabs/admin';


    // Build the list of existing tabs for this blocktabs.
    $form['tabs'] = array(
      '#type' => 'table',
      '#header' => array(
        $this->t('Tab'),
        $this->t('Weight'),
        $this->t('Operations'),
      ),
      '#tabledrag' => array(
        array(
          'action' => 'order',
          'relationship' => 'sibling',
          'group' => 'tab-order-weight',
        ),
      ),
      '#attributes' => array(
        'id' => 'blocktabs-tabs',
      ),
      '#empty' => t('There are currently no tabs in this blocktabs. Add one by selecting an option below.'),
      // Render tabs below parent elements.
      '#weight' => 5,
    );
    foreach ($this->entity->getTabs() as $tab) {
      $key = $tab->getUuid();
      $form['tabs'][$key]['#attributes']['class'][] = 'draggable';
      $form['tabs'][$key]['#weight'] = isset($user_input['tabs']) ? $user_input['tabs'][$key]['weight'] : NULL;
      $form['tabs'][$key]['tab'] = array(
        '#tree' => FALSE,
        'data' => array(
          'label' => array(
            '#plain_text' => $tab->label(),
          ),
        ),
      );

      $summary = $tab->getSummary();

      if (!empty($summary)) {
        $summary['#prefix'] = ' ';
        $form['tabs'][$key]['tab']['data']['summary'] = $summary;
      }

      $form['tabs'][$key]['weight'] = array(
        '#type' => 'weight',
        '#title' => $this->t('Weight for @title', array('@title' => $tab->label())),
        '#title_display' => 'invisible',
        '#default_value' => $tab->getWeight(),
        '#attributes' => array(
          'class' => array('tab-order-weight'),
        ),
      );

      $links = array();
      $is_configurable = $tab instanceof ConfigurableTabInterface;
      if ($is_configurable) {
        $links['edit'] = array(
          'title' => $this->t('Edit'),
          'url' => Url::fromRoute('blocktabs.tab_edit_form', [
            'blocktabs' => $this->entity->id(),
            'tab' => $key,
          ]),
        );
      }
      $links['delete'] = array(
        'title' => $this->t('Delete'),
        'url' => Url::fromRoute('blocktabs.tab_delete', [
          'blocktabs' => $this->entity->id(),
          'tab' => $key,
        ]),
      );
      $form['tabs'][$key]['operations'] = array(
        '#type' => 'operations',
        '#links' => $links,
      );
    }

    // Build the new tab addition form and add it to the tab list.
    $new_tab_options = array();
    $tabs = $this->tabManager->getDefinitions();
    uasort($tabs, function ($a, $b) {
      return strcasecmp($a['id'], $b['id']);
    });
    foreach ($tabs as $tab => $definition) {
      $new_tab_options[$tab] = $definition['label'];
    }
    $form['tabs']['new'] = array(
      '#tree' => FALSE,
      '#weight' => isset($user_input['weight']) ? $user_input['weight'] : NULL,
      '#attributes' => array('class' => array('draggable')),
    );
    $form['tabs']['new']['tab'] = array(
      'data' => array(
        'new' => array(
          '#type' => 'select',
          '#title' => $this->t('Tab'),
          '#title_display' => 'invisible',
          '#options' => $new_tab_options,
          '#empty_option' => $this->t('Select a new tab'),
        ),
        array(
          'add' => array(
            '#type' => 'submit',
            '#value' => $this->t('Add'),
            '#validate' => array('::tabValidate'),
            '#submit' => array('::submitForm', '::tabSave'),
          ),
        ),
      ),
      '#prefix' => '<div class="blocktabs-new">',
      '#suffix' => '</div>',
    );

    $form['tabs']['new']['weight'] = array(
      '#type' => 'weight',
      '#title' => $this->t('Weight for new tab'),
      '#title_display' => 'invisible',
      '#default_value' => count($this->entity->getTabs()) + 1,
      '#attributes' => array('class' => array('tab-order-weight')),
    );
    $form['tabs']['new']['operations'] = array(
      'data' => array(),
    );

    return parent::form($form, $form_state);
  }

  /**
   * Validate handler for tab.
   */
  public function tabValidate($form, FormStateInterface $form_state) {
    if (!$form_state->getValue('new')) {
      $form_state->setErrorByName('new', $this->t('Select an tab to add.'));
    }
  }

  /**
   * Submit handler for tab.
   */
  public function tabSave($form, FormStateInterface $form_state) {
    $this->save($form, $form_state);

    // Check if this field has any configuration options.
    $tab = $this->tabManager->getDefinition($form_state->getValue('new'));

    // Load the configuration form for this option.
    if (is_subclass_of($tab['class'], '\Drupal\blocktabs\ConfigurableTabInterface')) {
      $form_state->setRedirect(
        'blocktabs.tab_add_form',
        array(
          'blocktabs' => $this->entity->id(),
          'tab' => $form_state->getValue('new'),
        ),
        array('query' => array('weight' => $form_state->getValue('weight')))
      );
    }
    // If there's no form, immediately add the tab.
    else {
      $tab = array(
        'id' => $tab['id'],
        'data' => array(),
        'weight' => $form_state->getValue('weight'),
      );
      $tab_id = $this->entity->addTab($tab);
      $this->entity->save();
      if (!empty($tab_id)) {
        drupal_set_message($this->t('The tab was successfully added.'));
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    // Update tab weights.
    if (!$form_state->isValueEmpty('tabs')) {
      $this->updateTabWeights($form_state->getValue('tabs'));
    }

    parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    parent::save($form, $form_state);
    drupal_set_message($this->t('Changes to the blocktabs have been saved.'));
  }

  /**
   * {@inheritdoc}
   */
  public function actions(array $form, FormStateInterface $form_state) {
    $actions = parent::actions($form, $form_state);
    $actions['submit']['#value'] = $this->t('Update blocktabs');

    return $actions;
  }

  /**
   * Updates tab weights.
   *
   * @param array $tabs
   *   Associative array with tabs having tab uuid as keys and array
   *   with tab data as values.
   */
  protected function updateTabWeights(array $tabs) {
    foreach ($tabs as $uuid => $tab_data) {
      if ($this->entity->getTabs()->has($uuid)) {
        $this->entity->getTab($uuid)->setWeight($tab_data['weight']);
      }
    }
  }

}
