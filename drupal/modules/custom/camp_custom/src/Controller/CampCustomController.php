<?php

namespace Drupal\camp_custom\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Camp custom routes.
 */
class CampCustomController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#theme' => 'camp_custom_ecommerce_page',
    ];

    return $build;
  }

}
