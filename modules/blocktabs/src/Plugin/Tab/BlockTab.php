<?php

/**
 * @file
 * Contains \Drupal\blocktabs\Plugin\Tab\BlockTab.
 */

namespace Drupal\blocktabs\Plugin\Tab;

use Drupal\Core\Form\FormStateInterface;
use Drupal\blocktabs\ConfigurableTabBase;
use Drupal\blocktabs\BlocktabsInterface;

/**
 * block tab.
 *
 * @Tab(
 *   id = "block_tab",
 *   label = @Translation("block plugin tab"),
 *   description = @Translation("block plugin tab.")
 * )
 */
class BlockTab extends ConfigurableTabBase {

  /**
   * {@inheritdoc}
   */
   
  public function addTab(BlocktabsInterface $blocktabs) {

    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function getSummary() {
    $summary = array(
      '#theme' => 'tab_summary',
      '#data' => $this->configuration,
    );
    $summary += parent::getSummary();

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array(
      'block_id' => NULL,
    );
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    /*
	$sql = "SELECT bd.info, b.uuid FROM {block_content_field_data} bd LEFT JOIN {block_content} b ON bd.id = b.id";
    $result = db_query($sql);
    $block_uuid_options = array(
      '' => t('- Select -'),
    );
    foreach ($result as $block_content) {
      $block_uuid_options[$block_content->uuid] = $block_content->info;
    } 
*/	
    $form['block_id'] = array(
      '#type' => 'textfield',
      '#title' => t('Block id'),
      //'#options' => $block_uuid_options,
      '#default_value' => $this->configuration['block_id'],
      '#required' => TRUE,
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    $this->configuration['block_id'] = $form_state->getValue('block_id');
  }
  
  public function getContent() {
    $tab_content = '';
    $block_id = $this->configuration['block_id'];

    $block_manager = \Drupal::service('plugin.manager.block');
    // You can hard code configuration or you load from settings.
    $config = [];
    $plugin_block = $block_manager->createInstance($block_id, $config);
    // Some blocks might implement access check.

    $render = $plugin_block->build();
	//$tab_content = \Drupal::service('renderer')->render($render);
	
    return $render;
  }
}
