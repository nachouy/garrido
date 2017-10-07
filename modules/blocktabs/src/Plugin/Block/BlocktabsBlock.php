<?php

/**
 * @file
 * Contains \Drupal\blocktabs\Plugin\Block\BlocktabsBlock.
 */

namespace Drupal\blocktabs\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Block\BlockBase;
use Drupal\blocktabs\BlocktabsInterface;
use Drupal\Core\Block\BlockManagerInterface;
use Drupal\Core\Entity\EntityManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a blocktabs block.
 *
 * @Block(
 *   id = "blocktabs_block",
 *   admin_label = @Translation("blocktabs block"),
 *   category = @Translation("blocktabs"),
 *   deriver = "Drupal\blocktabs\Plugin\Derivative\BlocktabsBlock"
 * )
 */
class BlocktabsBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The Plugin Block Manager.
   *
   * @var \Drupal\Core\Block\BlockManagerInterface.
   */
  protected $blockManager;

  /**
   * The entity manager service.
   *
   * @var \Drupal\Core\Entity\EntityManagerInterface
   */
  protected $entityManager;
  
  /**
   * The menu link tree service.
   *
   * @var \Drupal\blocktabs\BlocktabsInterface
   */
  protected $blocktabs;

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

  /**
   * Constructs a new SystemMenuBlock.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param array $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\blocktabs\BlocktabsInterface $blocktabs
   *   The blocktabs service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, BlockManagerInterface $block_manager, EntityManagerInterface $entity_manager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->blockManager = $block_manager;
    $this->entityManager = $entity_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('plugin.manager.block'),
      $container->get('entity.manager')
    );
  }  

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array(
    );
  }

  /**
   * Overrides \Drupal\Core\Block\BlockBase::blockForm().
   *
   * Adds body and description fields to the block configuration form.
   */
  public function blockForm($form, FormStateInterface $form_state) {

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {

  }
  
  
  /**
   * {@inheritdoc}
   */
  public function build() {
  /*
    if ($blocktabs = $this->getEntity()) {
      //return $this->entityManager->getViewBuilder($block->getEntityTypeId())->view($block, $this->configuration['view_mode']);
      $build = array(
	    '#markup' => 'blocktabs content',
	  );
	}
	*/
	$blocktabs_entity = $this->getEntity();
	$build['block'] = array(
	  '#theme' => 'blocktabs',
	  '#blocktabs' => $blocktabs_entity,
	);
	/*
	$tabs = $blocktabs_entity->getTabs();
    $tabs_id = 'blocktabs-' . $blocktabs_entity->id();
	$titles = '';
	$titles .= '<ul>';
	foreach ($tabs as $tab) {
	  $tab_id = $tabs_id . '-' . $tab->getWeight();
	  $titles .= '<li><a href="#'. $tab_id .'">' . $tab->getTitle() .'</a></li>';
	}
	$titles .= '</ul>';
	
	$content = '';
	//$content .= '<div>';
	foreach ($tabs as $tab) {
	  $tab_id = $tabs_id . '-' . $tab->getWeight();
	  $tab_content_array = $tab->getContent();
	  $tab_content =  \Drupal::service('renderer')->renderPlain($tab_content_array);
	  $content .= '<div id="'. $tab_id .'">' . $tab_content .'</div>';
	}
	//$content .= '</div>';	
	//drupal_set_message(var_export($btabs));
    $build['block'] = array(
	    '#markup' => '<div id="' . $tabs_id . '" class="blocktabs">' . $titles . $content . '</div>',
	);
	*/
    $build['block']['#attached']['library'][] = 'blocktabs/blocktabs';
    return $build;
  }
  
  /**
   * Loads the block content entity of the block.
   *
   * @return \Drupal\block_content\BlockContentInterface|null
   *   The block content entity.
   */
  protected function getEntity() {
    $id = $this->getDerivativeId();
	//drupal_set_message('123456:' . $id);
    if (!isset($this->blocktabs)) {
      $this->blocktabs = $this->entityManager->getStorage('blocktabs')->load($id);
	  //drupal_set_message('123456abc:' . $id);
    }
    return $this->blocktabs;
  }  

}