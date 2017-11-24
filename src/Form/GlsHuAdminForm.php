<?php

/**
 * @file
 * Contains Drupal\commerce_gls_hu\Form\GlsHuAdminForm.
 */

namespace Drupal\commerce_gls_hu\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class GlsHuAdminForm.
 *
 * @package Drupal\commerce_gls_hu\Form
 */
class GlsHuAdminForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'commerce_gls_hu.glshuadmin',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'gls_hu_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('commerce_gls_hu.glshuadmin');
    $form['gls_map_api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Gls map API key'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => $config->get('gls_map_api_key'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('commerce_gls_hu.glshuadmin')
        ->set('gls_map_api_key', $form_state->getValue('gls_map_api_key'))
        ->save();

    drupal_flush_all_caches();
  }

}
