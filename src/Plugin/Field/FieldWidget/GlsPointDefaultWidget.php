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
    $element += array(
      '#type' => 'fieldset',
    );
    $element['shop_id'] = [
      '#title' => t('Shop id'),
      '#type' => 'textfield',
      '#default_value' => isset($values['shop_id']) ? $values['shop_id'] : '',
      '#size' => 20,
    ];
    $element['store_gmap_address'] = [
      '#title' => t('Gmap address'),
      '#type' => 'textfield',
      '#default_value' => isset($values['store_gmap_address']) ? $values['store_gmap_address'] : '',
      '#size' => 60,
    ];
    $element['pclshopid'] = [
      '#title' => t('Pclshop id'),
      '#type' => 'textfield',
      '#default_value' => isset($values['pclshopid']) ? $values['pclshopid'] : '',
      '#size' => 20,
    ];
    $element['name'] = [
      '#title' => t('Name'),
      '#type' => 'textfield',
      '#default_value' => isset($values['name']) ? $values['name'] : '',
      '#size' => 60,
    ];
    $element['ctrcode'] = [
      '#title' => t('Ctrcode'),
      '#type' => 'textfield',
      '#default_value' => isset($values['ctrcode']) ? $values['ctrcode'] : '',
      '#size' => 10,
    ];
    $element['zipcode'] = [
      '#title' => t('Zipcode'),
      '#type' => 'textfield',
      '#default_value' => isset($values['zipcode']) ? $values['zipcode'] : '',
      '#size' => 10,
    ];
    $element['city'] = [
      '#title' => t('City'),
      '#type' => 'textfield',
      '#default_value' => isset($values['city']) ? $values['city'] : '',
      '#size' => 20,
    ];
    $element['address'] = [
      '#title' => t('Address'),
      '#type' => 'textfield',
      '#default_value' => isset($values['address']) ? $values['address'] : '',
      '#size' => 60,
    ];
    $element['contact'] = [
      '#title' => t('Contact'),
      '#type' => 'textfield',
      '#default_value' => isset($values['contact']) ? $values['contact'] : '',
      '#size' => 60,
    ];
    $element['phone'] = [
      '#title' => t('Phone'),
      '#type' => 'textfield',
      '#default_value' => isset($values['phone']) ? $values['phone'] : '',
      '#size' => 20,
    ];
    $element['email'] = [
      '#title' => t('Email'),
      '#type' => 'textfield',
      '#default_value' => isset($values['email']) ? $values['email'] : '',
      '#size' => 20,
    ];

    // If cardinality is 1, ensure a label is output for the field by wrapping
    // it in a details element.
    if ($this->fieldDefinition->getFieldStorageDefinition()->getCardinality() == 1) {
      $element += array(
        '#type' => 'fieldset',
        '#attributes' => array('class' => array('container-inline')),
      );
    }

    return $element;
  }

}
