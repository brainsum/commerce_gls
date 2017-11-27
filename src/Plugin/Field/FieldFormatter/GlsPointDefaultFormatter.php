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

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $it = $items->getValue();
    foreach ($it as $delta => $item) {
      // Render each element as markup.
      $elements[$delta] = [
        '#type' => 'table',
      ];

      $i = 0;
      foreach ($item as $key => $item_value) {
        if ($key != "_attributes") {
          $elements[$delta][$i]['label'] = [
            '#type' => 'label',
            '#title' => t(ucfirst(str_replace('_', ' ', $key))),
          ];
          $elements[$delta][$i]['value'] = [
            '#type' => 'label',
            '#title' => $item_value,
          ];
          $i++;
        }
      }
    }
    return $elements;
  }

}
