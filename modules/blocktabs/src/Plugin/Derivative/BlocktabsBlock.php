<?php

/**
 * @file
 * Contains \Drupal\blocktabs\Plugin\Derivative\BlocktabsBlock.
 */

namespace Drupal\blocktabs\Plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DeriverBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Plugin\Discovery\ContainerDeriverInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides block plugin definitions for blocktabs.
 *
 * @see \Drupal\blocktabs\Plugin\Block\BlocktabsBlock
 */
class BlocktabsBlock extends DeriverBase implements ContainerDeriverInterface {

  /**
   * The menu storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $entityStorage;

  /**
   * Constructs new SystemMenuBlock.
   *
   * @param \Drupal\Core\Entity\EntityStorageInterface $menu_storage
   *   The menu storage.
   */
  public function __construct(EntityStorageInterface $entity_storage) {
    $this->entityStorage = $entity_storage;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, $base_plugin_id) {
    return new static(
      $container->get('entity.manager')->getStorage('blocktabs')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {
    foreach ($this->entityStorage->loadMultiple() as $blocktabs => $entity) {
	  //drupal_set_message('123:' . $blocktabs);
      $this->derivatives[$blocktabs] = $base_plugin_definition;
      $this->derivatives[$blocktabs]['admin_label'] = 'Blocktabs:' . $entity->label();
      $this->derivatives[$blocktabs]['config_dependencies']['config'] = array($entity->getConfigDependencyName());
    }
    return $this->derivatives;
  }

}
