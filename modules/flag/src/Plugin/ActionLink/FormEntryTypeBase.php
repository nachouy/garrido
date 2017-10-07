<?php

namespace Drupal\flag\Plugin\ActionLink;

use Drupal\Core\Form\FormStateInterface;
use Drupal\flag\ActionLink\ActionLinkTypeBase;

/**
 * Base class for link types using form entry.
 */
abstract class FormEntryTypeBase extends ActionLinkTypeBase implements FormEntryInterface {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $options = parent::defaultConfiguration();

    $options += [
      'flag_confirmation' => $this->t('Flag this content?'),
      'unflag_confirmation' => $this->t('Unflag this content?'),
    ];

    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    $plugin_id = $this->getPluginId();
    $plugin_description = $this->pluginDefinition['label'];

    $form['display']['settings']['link_options_' . $plugin_id] = [
      '#type' => 'details',
      '#open' => TRUE,
      '#title' => $this->t('Options for the "@label" link type', ['@label' => $plugin_description]),
      // Any "link type" provider module must put its settings fields inside
      // a fieldset whose HTML ID is link-options-LINKTYPE, where LINKTYPE is
      // the machine-name of the link type. This is necessary for the
      // radiobutton's JavaScript dependency feature to work.
      '#id' => 'link-options-confirm',
    ];

    $form['display']['settings']['link_options_' . $plugin_id]['flag_confirmation'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Flag confirmation message'),
      '#default_value' => $this->getFlagQuestion(),
      '#description' => $this->t('Message displayed if the user has clicked the "flag this" link and confirmation is required. Usually presented in the form of a question such as, "Are you sure you want to flag this content?"'),
      // This will get changed to a state by flag_link_type_options_states().
      '#required' => TRUE,
    ];

    $form['display']['settings']['link_options_' . $plugin_id]['unflag_confirmation'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Unflag confirmation message'),
      '#default_value' => $this->getUnflagQuestion(),
      '#description' => $this->t('Message displayed if the user has clicked the "unflag this" link and confirmation is required. Usually presented in the form of a question such as, "Are you sure you want to unflag this content?"'),
      // This will get changed to a state by flag_link_type_options_states().
      '#required' => TRUE,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    $form_values = $form_state->getValues();

    if ($form_values['link_type'] == 'confirm') {
      if (empty($form_values['flag_confirmation'])) {
        $form_state->setErrorByName('flag_confirmation', $this->t('A flag confirmation message is required when using the "@label" link type.', ['@label' => $this->pluginDefinition['label']]));
      }
      if (empty($form_values['unflag_confirmation'])) {
        $form_state->setErrorByName('unflag_confirmation', $this->t('An unflag confirmation message is required when using the "@label" link type.', ['@label' => $this->pluginDefinition['label']]));
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    foreach (array_keys($this->defaultConfiguration()) as $key) {
      $this->configuration[$key] = $form_state->getValue($key);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getFlagQuestion() {
    return $this->configuration['flag_confirmation'];
  }

  /**
   * {@inheritdoc}
   */
  public function getEditFlaggingTitle() {
    return $this->configuration['edit_flagging'];
  }

  /**
   * {@inheritdoc}
   */
  public function getUnflagQuestion() {
    return $this->configuration['unflag_confirmation'];
  }

}
