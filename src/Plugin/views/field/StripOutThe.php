<?php

namespace Drupal\get_the_out\Plugin\views\field;

use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * A handler to provide custom displays for subscription dates.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("strip_out_the")
 */
class StripOutThe extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function render(ResultRow $values) {
    $node = $values->_entity;
    $value = $node->label();
    $value = str_replace("The ", "", $value);
    return $this->sanitizeValue($value);
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    // This function exists to override parent query function.
    // Do nothing.
  }

}
