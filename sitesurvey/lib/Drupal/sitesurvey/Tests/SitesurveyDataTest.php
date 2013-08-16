<?php

/**
 * @file
 * Definition of Drupal\sitesurvey\Tests\SitesurveyDataTest.
 */

namespace Drupal\sitesurvey\Tests;

use Drupal\sitesurvey\Tests\SitesurveyTestBase;

class SitesurveyDataTest extends SitesurveyTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('sitesurvey', 'views');

  /**
   * Test information.
   */
  public static function getInfo() {
    return array(
      'name' => 'Sitesurvey Data',
      'description' => 'Test the Site Survey data view.',
      'group' => 'Site Survey',
    );
  }

  /**
   * Test the administrative view.
   */
  public function testSitesurveyData() {
    // Visit the report page as anonymous; should be access denied.
    $this->drupalGet($this->admin_path);
    $this->assertResponse(403);

    // Login as a privileged user.
    $this->admin_user = $this->drupalCreateUser(array($this->admin_permission));
    $this->drupalLogin($this->admin_user);

    // Visit the report page.
    $this->drupalGet($this->admin_path);
    $this->assertResponse(200);
    $this->assertText('There are no survey results.');

    // Data table should be empty.
    $count = $this->getRows();
    $this->assertTrue(empty($count), 'No database records exist.');

    // Save a sample item 25 times.
    for ($i = 0; $i < 25; $i++) {
      $item = $this->getTestItem();
      $this->saveTestItem($item);
    }

    // Data table should have 25 rows.
    $count = $this->getRows();
    $this->assertTrue($count == 25, '25 database records exist.');

    // HTML output should contain...
    $this->drupalGet($this->admin_path);
    // Header test.
    $this->assertText('Success');
    // Row test.
    $this->assertText('Jane Doe');
    // Pager test.
    $this->assertText('next');
    $this->assertText('last');

  }

}
