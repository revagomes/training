<?php

/**
 * @file
 * Definition of Drupal\sitesurvey\Tests\SitesurveyTestBase.
 */

namespace Drupal\sitesurvey\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Basic test routine for the Site Survey module.
 */
abstract class SitesurveyTestBase extends WebTestBase {

  /**
   * @var string
   */
  public $path;

  /**
   * @var string
   */
  public $admin_path;

  /**
   * @var string
   */
  public $permission;

  /**
   * @var string
   */
  public $admin_permission;

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('sitesurvey');

  /**
   * Setup the test conditions, if necessary.
   */
  protected function setUp() {
    parent::setUp();

    // Common variables used in tests.
    $this->path = 'sitesurvey';
    $this->admin_path = 'admin/reports/sitesurvey';
    $this->permission = 'respond to site survey';
    $this->admin_permission = 'view site survey results';

  }

  /**
   * Helper method for counting database records.
   */
  public function getRows() {
    if (db_table_exists('sitesurvey')) {
      return db_query("SELECT COUNT(1) FROM {sitesurvey}")->fetchCol();
    }
    return 0;
  }

}
