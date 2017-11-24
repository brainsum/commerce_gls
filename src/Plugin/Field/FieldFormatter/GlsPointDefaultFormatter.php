<?php

namespace Drupal\commerce_gls_hu\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\Html;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'gls_point_default_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "gls_point_default_formatter",
 *   label = @Translation("Gls point default formatter"),
 *   field_types = {
 *     "gls_point"
 *   }
 * )
 */
class GlsPointDefaultFormatter extends FormatterBase {

  // /**
  //  * {@inheritdoc}
  //  */
  // public static function defaultSettings() {
  //   return [
  //     // Implement default settings.
  //   ] + parent::defaultSettings();
  // }

  // /**
  //  * {@inheritdoc}
  //  */
  // public function settingsForm(array $form, FormStateInterface $form_state) {
  //   return [
  //     // Implement settings form.
  //   ] + parent::settingsForm($form, $form_state);
  // }

  // /**
  //  * {@inheritdoc}
  //  */
  // public function settingsSummary() {
  //   $summary = [];
  //   // Implement settings summary.
  //   $settings = $this->getSettings();

  //   $summary[] = t('Displays the random string.');
  //   return $summary;
  // }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $it = $items->getValue();
    foreach ($it as $delta => $item) {
      // Render each element as markup.
      $elements[$delta] = [
        '#type' => 'markup',
        '#markup' => $item,
      ];
    }
    dpm($elements);
    return $elements;
  }

  // /**
  //  * Generate the output appropriate for one field item.
  //  *
  //  * @param \Drupal\Core\Field\FieldItemInterface $item
  //  *   One field item.
  //  *
  //  * @return string
  //  *   The textual output generated.
  //  */
  // protected function viewValue(FieldItemInterface $item) {
  //   // The text value has no text format assigned to it, so the user input
  //   // should equal the output, including newlines.
  //   return nl2br(Html::escape($item->value));
  // }

}
