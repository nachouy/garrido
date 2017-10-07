<?php

/**
 * @file
 * Contains \Drupal\blocktabs\Entity\Blocktabs.
 */

namespace Drupal\blocktabs\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityWithPluginCollectionInterface;
use Drupal\blocktabs\BlocktabsInterface;
use Drupal\blocktabs\TabInterface;
use Drupal\blocktabs\TabPluginCollection;

/**
 * Defines a blocktabs configuration entity.
 *
 * @ConfigEntityType(
 *   id = "blocktabs",
 *   label = @Translation("Blocktabs"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\blocktabs\Form\BlocktabsAddForm",
 *       "edit" = "Drupal\blocktabs\Form\BlocktabsEditForm",
 *       "delete" = "Drupal\blocktabs\Form\BlocktabsDeleteForm",
 *     },
 *     "list_builder" = "Drupal\blocktabs\BlocktabsListBuilder",
 *   },
 *   admin_permission = "administer blocktabs",
 *   config_prefix = "blocktabs",
 *   entity_keys = {
 *     "id" = "name",
 *     "label" = "label"
 *   },
 *   links = {
 *     "edit-form" = "/admin/structure/blocktabs/manage/{blocktabs}",
 *     "delete-form" = "/admin/structure/blocktabs/manage/{blocktabs}/delete",
 *     "collection" = "/admin/structure/blocktabs",
 *   },
 *   config_export = {
 *     "name",
 *     "label",
 *     "tabs",
 *   }
 * )
 */
class Blocktabs extends ConfigEntityBase implements BlocktabsInterface, EntityWithPluginCollectionInterface {


  /**
   * The name of the blocktabs.
   *
   * @var string
   */
  protected $name;

  /**
   * The blocktabs label.
   *
   * @var string
   */
  protected $label;

  /**
   * The array of tabs for this blocktabs.
   *
   * @var array
   */
  protected $tabs = array();

  /**
   * Holds the collection of tabs that are used by this blocktabs.
   *
   * @var \Drupal\blocktabs\TabPluginCollection
   */
  protected $tabsCollection;

  /**
   * {@inheritdoc}
   */
  public function id() {
    return $this->name;
  }

  /**
   * {@inheritdoc}
   */
  public function postSave(EntityStorageInterface $storage, $update = TRUE) {
    parent::postSave($storage, $update);

    if ($update) {
      if (!empty($this->original) && $this->id() !== $this->original->id()) {
        // Update field settings if necessary.
        if (!$this->isSyncing()) {
          //static::replaceBlockTabs($this);
        }
      }
      else {

      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function postDelete(EntityStorageInterface $storage, array $entities) {
    parent::postDelete($storage, $entities);

    foreach ($entities as $blocktabs) {
    }
  }

  /**
   * {@inheritdoc}
   */
  public function deleteTab(TabInterface $tab) {
    $this->getTabs()->removeInstanceId($tab->getUuid());
    $this->save();
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getTab($tab) {
    return $this->getTabs()->get($tab);
  }

  /**
   * {@inheritdoc}
   */
  public function getTabs() {
    if (!$this->tabsCollection) {
      $this->tabsCollection = new TabPluginCollection($this->getTabPluginManager(), $this->tabs);
      $this->tabsCollection->sort();
    }
    return $this->tabsCollection;
  }

  /**
   * {@inheritdoc}
   */
  public function getPluginCollections() {
    return array('tabs' => $this->getTabs());
  }

  /**
   * {@inheritdoc}
   */
  public function addTab(array $configuration) {
    $configuration['uuid'] = $this->uuidGenerator()->generate();
    $this->getTabs()->addInstanceId($configuration['uuid'], $configuration);
    return $configuration['uuid'];
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->get('name');
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('name', $name);
    return $this;
  }

  /**
   * Returns the tab plugin manager.
   *
   * @return \Drupal\Component\Plugin\PluginManagerInterface
   *   The tab plugin manager.
   */
  protected function getTabPluginManager() {
    return \Drupal::service('plugin.manager.blocktabs.tab');
  }



}
