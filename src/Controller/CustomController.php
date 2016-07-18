<?php

/**
 * Description of CustomController
 *
 * @author mhmd
 */
/**
 * @file
 * Contains \Drupal\custom\Controller\CustomController.
 */

namespace Drupal\custom\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Custom module.
 */
class CustomController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function page() {
    $element = array(
      '#markup' => 'Hello, world page',
    );
    return $element;
  }
}
