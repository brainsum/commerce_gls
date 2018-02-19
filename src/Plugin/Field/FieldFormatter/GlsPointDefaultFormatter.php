<?php

namespace Drupal\commerce_gls_hu\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

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
      $rows = [];
      // Render each element as markup.
      foreach (_commerce_gls_hu_get_gls_fields() as $key => $value) {
        if ($value['visible'] === TRUE && !empty($item[$key])) {
          $label = isset($value['label']) ? $value['label'] : $this->t(ucfirst(str_replace('_', ' ', $key)));
          $rows[] = [
            $label,
            $item[$key],
          ];
        }
      }
      $elements[$delta] = [
        '#type' => 'table',
        '#header' => [],
        '#rows' => $rows,
      ];
    }

    return $elements;
  }

}
