<?php

/**
 * @file
 * Contains \Drupal\blocktabs\Form\BlocktabsDeleteForm.
 */

namespace Drupal\blocktabs\Form;

use Drupal\Core\Entity\EntityDeleteForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Creates a form to delete blocktabs.
 */
class BlocktabsDeleteForm extends EntityDeleteForm {

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return $this->t('Optionally select a blocktabs before deleting %blocktabs', array('%blocktabs' => $this->entity->label()));
  }
  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return $this->t('If this block tabs is in use on the site, this block tabs will be permanently deleted.');
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    return parent::form($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    parent::submitForm($form, $form_state);
  }

}
