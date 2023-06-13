<?php
namespace Drupal\sailpoint\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the sailpoint module.
 */
class SailpointController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function get_pullrequest() {
    return [
      '#markup' => 'Hello, world',
    ];
  }

}