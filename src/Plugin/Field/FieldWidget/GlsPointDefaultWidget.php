<?php

namespace Drupal\commerce_gls_hu\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'gls_point_default_widget' widget.
 *
 * @FieldWidget(
 *   id = "gls_point_default_widget",
 *   label = @Translation("Gls point default widget"),
 *   field_types = {
 *     "gls_point"
 *   }
 * )
 */
class GlsPointDefaultWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $values = $items[$delta]->getValue();
    $element += [
      '#type' => 'fieldset',
    ];
    $element['shop_id'] = [
      '#title' => $this->t('Shop id'),
      '#type' => 'textfield',
      '#default_value' => isset($values['shop_id']) ? $values['shop_id'] : '',
      '#size' => 20,
    ];
    $element['store_gmap_address'] = [
      '#title' => $this->t('Gmap address'),
      '#type' => 'textfield',
      '#default_value' => isset($values['store_gmap_address']) ? $values['store_gmap_address'] : '',
      '#size' => 60,
    ];
    $element['pclshopid'] = [
      '#title' => $this->t('Pclshop id'),
      '#type' => 'textfield',
      '#default_value' => isset($values['pclshopid']) ? $values['pclshopid'] : '',
      '#size' => 20,
    ];
    $element['name'] = [
      '#title' => $this->t('Name'),
      '#type' => 'textfield',
      '#default_value' => isset($values['name']) ? $values['name'] : '',
      '#size' => 60,
    ];
    $element['ctrcode'] = [
      '#title' => $this->t('Ctrcode'),
      '#type' => 'textfield',
      '#default_value' => isset($values['ctrcode']) ? $values['ctrcode'] : '',
      '#size' => 10,
    ];
    $element['zipcode'] = [
      '#title' => $this->t('Zipcode'),
      '#type' => 'textfield',
      '#default_value' => isset($values['zipcode']) ? $values['zipcode'] : '',
      '#size' => 10,
    ];
    $element['city'] = [
      '#title' => $this->t('City'),
      '#type' => 'textfield',
      '#default_value' => isset($values['city']) ? $values['city'] : '',
      '#size' => 20,
    ];
    $element['address'] = [
      '#title' => $this->t('Address'),
      '#type' => 'textfield',
      '#default_value' => isset($values['address']) ? $values['address'] : '',
      '#size' => 60,
    ];
    $element['contact'] = [
      '#title' => $this->t('Contact'),
      '#type' => 'textfield',
      '#default_value' => isset($values['contact']) ? $values['contact'] : '',
      '#size' => 60,
    ];
    $element['phone'] = [
      '#title' => $this->t('Phone'),
      '#type' => 'textfield',
      '#default_value' => isset($values['phone']) ? $values['phone'] : '',
      '#size' => 20,
    ];
    $element['email'] = [
      '#title' => $this->t('Email'),
      '#type' => 'textfield',
      '#default_value' => isset($values['email']) ? $values['email'] : '',
      '#size' => 20,
    ];

    // If cardinality is 1, ensure a label is output for the field by wrapping
    // it in a details element.
    if ($this->fieldDefinition->getFieldStorageDefinition()->getCardinality() == 1) {
      $element += [
        '#type' => 'fieldset',
        '#attributes' => ['class' => ['container-inline']],
      ];
    }

    return $element;
  }

}
