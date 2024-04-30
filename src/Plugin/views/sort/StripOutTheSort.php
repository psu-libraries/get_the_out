<?php

namespace Drupal\get_the_out\Plugin\views\sort;

use Drupal\views\Plugin\views\sort\SortPluginBase;

/**
 * Basic sort handler for Titles without articles.
 *
 * @ViewsSort("strip_out_the_sort")
 */
class StripOutTheSort extends SortPluginBase {

  /**
   * Called to add the sort to a query.
   */
  public function query() {
    $this->ensureMyTable();

    /** @var \Drupal\views\Plugin\views\query\Sql $query */
    $query = $this->query;
    $query->addOrderBy(NULL, "REPLACE(node_field_data.title, 'The ', '')", $this->options['order'], 'strip_the_sort');
  }

}
