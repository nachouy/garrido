<?php

/**
 * @file
 * Contains \Drupal\blocktabs\Form\TabFormBase.
 */

namespace Drupal\blocktabs\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormState;
use Drupal\Core\Form\FormStateInterface;
use Drupal\blocktabs\ConfigurableTabInterface;
use Drupal\blocktabs\BlockTabsInterface;
use Drupal\Component\Plugin\Exception\PluginNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Provides a base form for tab.
 */
abstract class TabFormBase extends FormBase {

  /**
   * The blockTabs.
   *
   * @var \Drupal\blocktabs\BlockTabsInterface
   */
  protected $blocktabs;

  /**
   * The tab.
   *
   * @var \Drupal\blocktabs\TabInterface
   */
  protected $tab;

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'tab_form';
  }

  /**
   * {@inheritdoc}
   *
   * @param \Drupal\blocktabs\BlockTabsInterface $blocktabs
   *   The block tabs.
   * @param string $tab
   *   The tab ID.
   *
   * @return array
   *   The form structure.
   *
   * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
   */
  public function buildForm(array $form, FormStateInterface $form_state, BlockTabsInterface $blocktabs = NULL, $tab = NULL) {
    $this->blocktabs = $blocktabs;
    try {
      $this->tab = $this->prepareTab($tab);
    }
    catch (PluginNotFoundException $e) {
      throw new NotFoundHttpException("Invalid tab id: '$tab'.");
    }
    $request = $this->getRequest();

    if (!($this->tab instanceof ConfigurableTabInterface)) {
      throw new NotFoundHttpException();
    }

    $form['#attached']['library'][] = 'blocktabs/admin';
    $form['uuid'] = array(
      '#type' => 'hidden',
      '#value' => $this->tab->getUuid(),
    );
    $form['id'] = array(
      '#type' => 'hidden',
      '#value' => $this->tab->getPluginId(),
    );
	
    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Tab title'),
      '#default_value' => $this->tab->getTitle(),
      '#required' => TRUE,
    );	
	
    $form['data'] = $this->tab->buildConfigurationForm(array(), $form_state);
    $form['data']['#tree'] = TRUE;
	
	//drupal_set_message('term_id:' . var_export($form['data']));

    // Check the URL for a weight, then the tab, otherwise use default.
    $form['weight'] = array(
      '#type' => 'hidden',
      '#value' => $request->query->has('weight') ? (int) $request->query->get('weight') : $this->tab->getWeight(),
    );

    $form['actions'] = array('#type' => 'actions');
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#button_type' => 'primary',
    );
    $form['actions']['cancel'] = array(
      '#type' => 'link',
      '#title' => $this->t('Cancel'),
      '#url' => $this->blocktabs->urlInfo('edit-form'),
      '#attributes' => ['class' => ['button']],
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // The tab configuration is stored in the 'data' key in the form,
    // pass that through for validation.
    $tab_data = (new FormState())->setValues($form_state->getValue('data'));
    $this->tab->validateConfigurationForm($form, $tab_data);
    // Update the original form values.
    $form_state->setValue('data', $tab_data->getValues());
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $form_state->cleanValues();

    // The tab configuration is stored in the 'data' key in the form,
    // pass that through for submission.
    $tab_data = (new FormState())->setValues($form_state->getValue('data'));
    $this->tab->submitConfigurationForm($form, $tab_data);
    // Update the original form values.
    $form_state->setValue('data', $tab_data->getValues());
    $this->tab->setTitle($form_state->getValue('title'));
    $this->tab->setWeight($form_state->getValue('weight'));
    if (!$this->tab->getUuid()) {
      $this->blocktabs->addTab($this->tab->getConfiguration());
    }
    $this->blocktabs->save();

    drupal_set_message($this->t('The tab was successfully applied.'));
    $form_state->setRedirectUrl($this->blocktabs->urlInfo('edit-form'));
  }

  /**
   * Converts a tab ID into an object.
   *
   * @param string $tab
   *   The tab ID.
   *
   * @return \Drupal\blocktabs\TabInterface
   *   The tab object.
   */
  abstract protected function prepareTab($tab);

}
