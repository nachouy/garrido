<?php

/**
 * @file
 * Contains \Drupal\blocktabs\Plugin\Tab\BlockContentTab.
 */

namespace Drupal\blocktabs\Plugin\Tab;

use Drupal\Core\Form\FormStateInterface;
use Drupal\blocktabs\ConfigurableTabBase;
use Drupal\blocktabs\BlocktabsInterface;

/**
 * block content tab.
 *
 * @Tab(
 *   id = "block_content_tab",
 *   label = @Translation("block content tab"),
 *   description = @Translation("block content tab.")
 * )
 */
class BlockContentTab extends ConfigurableTabBase {

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
      'block_uuid' => NULL,
    );
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $sql = "SELECT bd.info, b.uuid FROM {block_content_field_data} bd LEFT JOIN {block_content} b ON bd.id = b.id";
    $result = db_query($sql);
    $block_uuid_options = array(
      '' => t('- Select -'),
    );
    foreach ($result as $block_content) {
      $block_uuid_options[$block_content->uuid] = $block_content->info;
    }  
    $form['block_uuid'] = array(
      '#type' => 'select',
      '#title' => t('Block uuid'),
      '#options' => $block_uuid_options,
      '#default_value' => $this->configuration['block_uuid'],
      '#required' => TRUE,
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    $this->configuration['block_uuid'] = $form_state->getValue('block_uuid');
  }
  
  public function getContent() {
    $tab_content = '';
	$block_render_array = null;
    $block_uuid = $this->configuration['block_uuid'];
	if(!empty($block_uuid)){
    $block = \Drupal::entityManager()->loadEntityByUuid('block_content', $block_uuid);
	
    $block_render_array = \Drupal::entityManager()->getViewBuilder($block->getEntityTypeId())->view($block, 'default');
    $tab_content = \Drupal::service('renderer')->render($block_render_array);
	}
    return $block_render_array;
  }
}
