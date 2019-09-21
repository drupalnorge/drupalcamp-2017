<?php

namespace Drupal\camp_custom\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\views\Entity\View;
use Drupal\views\Views;

/**
 * Returns responses for Camp custom routes.
 */
class CampCustomController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    /** @var \Drupal\views\ViewExecutable $view */
    $view = Views::getView('sessions');
    $rendered = $view->render('page_2');
    $nids = [
      100,
      98,
      96,
      101,
      99,
      97,
      102,
    ];
    foreach ($rendered['#rows'] as $delta => $row) {
      if (empty($row["#rows"][$delta]["#node"])) {
        unset($rendered['#rows'][$delta]);
        continue;
      }
      /** @var \Drupal\node\Entity\Node $node */
      $node = $row["#rows"][$delta]["#node"];
      if (in_array($node->id(), $nids)) {
        continue;
      }
      unset($rendered['#rows'][$delta]);
    }

    $build['content'] = [
      '#theme' => 'camp_custom_ecommerce_page',
      '#view' => $rendered,
    ];

    return $build;
  }

}
