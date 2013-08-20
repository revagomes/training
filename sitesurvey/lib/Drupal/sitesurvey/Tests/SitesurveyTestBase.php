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
      $query = db_select('sitesurvey');
      return $query->countQuery()->execute()->fetchField();
    }
    return 0;
  }

  /**
   * Helper method to generate a test item.
   */
  public function getTestItem() {
    return array(
      'name' => array(
        'label' => 'Your name',
        'input' => 'Jane Doe',
      ),
      'purpose' => array(
        'label' => 'Why did you visit the site today?',
        'input' => 'To find a phone number.',
      ),
      'success' => array(
        'label' => 'Did you find what you were looking for?',
        'input' => '1',
      ),
      'recommend' => array(
        'label' => 'Would you recommend the site to your friends?',
        'input' => '1',
      ),
      'improve' => array(
        'label' => 'What one thing could we do to improve the site?',
        'input' => 'Use black text for easier reading.',
      ),
      'hear' => array(
        'label' => 'How did you hear about the site?',
        'input' => 'Search engine',
      )
    );
  }

  /**
   * Helper function to save test items.
   */
  public function saveTestItem(array $item) {
    $values = array();
    foreach ($item as $key => $value) {
      $values[$key] = $value['input'];
    }
    // @TODO: Fix this call to OOP.
    if (db_table_exists('sitesurvey')) {
      drupal_write_record('sitesurvey', $values);
    }
  }

}
