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
  }

}
