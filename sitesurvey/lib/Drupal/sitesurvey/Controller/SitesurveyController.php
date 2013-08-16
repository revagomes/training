<?php
/**
 * @file
 * Contains \Drupal\sitesurvey\Controller\SitesurveyController.
 */

namespace Drupal\sitesurvey\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for Site Survey routes.
 */
class SitesurveyController extends ControllerBase {

  /**
   * Generates the report page.
   */
  public function reportPage() {
    $query = db_select('sitesurvey');
    $count = $query->countQuery()->execute()->fetchField();
    return "$count records exist.";
  }

}
