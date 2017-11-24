<?php

namespace Drupal\commerce_gls_hu\Plugin\Field\FieldType;

use Drupal\Component\Utility\Random;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'gls_point' field type.
 *
 * @FieldType(
 *   id = "gls_point",
 *   label = @Translation("Gls point"),
 *   description = @Translation("GLS Point") * )
 */
class GlsPoint extends FieldItemBase {

  // /**
  //  * {@inheritdoc}
  //  */
  // public static function defaultStorageSettings() {
  //   return [
  //     'shop_id' => 255,
  //     'store_gmap_address' => FALSE,
  //     'case_sensitive' => FALSE,
  //   ] + parent::defaultStorageSettings();
  // }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties = [];
    $properties['shop_id'] = DataDefinition::create('string')
      ->setLabel(t('The shop id.'));
    $properties['store_gmap_address'] = DataDefinition::create('string')
      ->setLabel(t('The gmap address.'));
    $properties['pclshopid'] = DataDefinition::create('string')
      ->setLabel(t('The pclshop id.'));
    $properties['name'] = DataDefinition::create('string')
      ->setLabel(t('The name.'));
    $properties['ctrcode'] = DataDefinition::create('string')
      ->setLabel(t('The ctrcode.'));
    $properties['zipcode'] = DataDefinition::create('integer')
      ->setLabel(t('The zipcode.'));
    $properties['city'] = DataDefinition::create('string')
      ->setLabel(t('The city.'));
    $properties['address'] = DataDefinition::create('string')
      ->setLabel(t('The address.'));
    $properties['contact'] = DataDefinition::create('string')
      ->setLabel(t('The contact.'));
    $properties['phone'] = DataDefinition::create('string')
      ->setLabel(t('The phone.'));
    $properties['email'] = DataDefinition::create('string')
      ->setLabel(t('The email.'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    $schema = [
      'columns' => [
        'shop_id' => [
          'type' => 'varchar',
          'length' => 50,
          'description' => 'The ID of the GLS Point.',
        ],
        'store_gmap_address' => [
          'type' => 'varchar',
          'length' => 255,
          'description' => 'The gmap address of the GLS Point',
        ],
        'pclshopid' => [
          'type' => 'varchar',
          'length' => 50,
          'description' => 'The ID of the pclshop.',
        ],
        'name' => [
          'type' => 'varchar',
          'length' => 50,
          'description' => 'The zipcode of the GLS Point.',
        ],
        'ctrcode' => [
          'type' => 'varchar',
          'length' => 2,
          'description' => 'The ctrcode of the GLS Point.',
        ],
        'zipcode' => [
          'type' => 'int',
          'unsigned' => TRUE,
          'description' => 'The zipcode of the GLS Point.',
        ],
        'city' => [
          'type' => 'varchar',
          'length' => 50,
          'description' => 'The city of the GLS Point.',
        ],
        'address' => [
          'type' => 'varchar',
          'length' => 255,
          'description' => 'The address of the GLS Point.',
        ],
        'contact' => [
          'type' => 'varchar',
          'length' => 60,
          'description' => 'The contact of the GLS Point.',
        ],
        'phone' => [
          'type' => 'varchar',
          'length' => 20,
          'description' => 'The phone of the GLS Point.',
        ],
        'email' => [
          'type' => 'varchar',
          'length' => 255,
          'description' => 'The email of the GLS Point.',
        ],
      ],
    ];

    return $schema;
  }

  // /**
  //  * {@inheritdoc}
  //  */
  // public function getConstraints() {
  //   $constraints = parent::getConstraints();

  //   if ($max_length = $this->getSetting('max_length')) {
  //     $constraint_manager = \Drupal::typedDataManager()->getValidationConstraintManager();
  //     $constraints[] = $constraint_manager->create('ComplexData', [
  //       'value' => [
  //         'Length' => [
  //           'max' => $max_length,
  //           'maxMessage' => t('%name: may not be longer than @max characters.', [
  //             '%name' => $this->getFieldDefinition()->getLabel(),
  //             '@max' => $max_length
  //           ]),
  //         ],
  //       ],
  //     ]);
  //   }

  //   return $constraints;
  // }

  // /**
  //  * {@inheritdoc}
  //  */
  // public static function generateSampleValue(FieldDefinitionInterface $field_definition) {
  //   $random = new Random();
  //   $values['value'] = $random->word(mt_rand(1, $field_definition->getSetting('max_length')));
  //   return $values;
  // }

  // /**
  //  * {@inheritdoc}
  //  */
  // public function storageSettingsForm(array &$form, FormStateInterface $form_state, $has_data) {
  //   $elements = [];

  //   $elements['max_length'] = [
  //     '#type' => 'number',
  //     '#title' => t('Maximum length'),
  //     '#default_value' => $this->getSetting('max_length'),
  //     '#required' => TRUE,
  //     '#description' => t('The maximum length of the field in characters.'),
  //     '#min' => 1,
  //     '#disabled' => $has_data,
  //   ];

  //   return $elements;
  // }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $value1 = $this->get('shop_id')->getValue();
    $value2 = $this->get('store_gmap_address')->getValue();
    $value3 = $this->get('pclshopid')->getValue();
    $value4 = $this->get('name')->getValue();
    $value5 = $this->get('ctrcode')->getValue();
    $value6 = $this->get('zipcode')->getValue();
    $value7 = $this->get('city')->getValue();
    $value8 = $this->get('address')->getValue();
    $value9 = $this->get('contact')->getValue();
    $value10 = $this->get('phone')->getValue();
    $value11 = $this->get('email')->getValue();

    return empty($value1) && empty($value2) && empty($value3) && empty($value4) && empty($value5) && empty($value6)
      && empty($value7) && empty($value8) && empty($value9)&& empty($value10) && empty($value11);
  }

}
