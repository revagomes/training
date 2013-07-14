<?php

/**
 * @file
 * Definition of Drupal\sitesurvey\Tests\SitesurveyFormTest.
 */

namespace Drupal\sitesurvey\Tests;

use Drupal\sitesurvey\Tests\SitesurveyTestBase;

class SitesurveyFormTest extends SitesurveyTestBase {

  /**
   * Test information.
   */
  public static function getInfo() {
    return array(
      'name' => 'Sitesurvey Form',
      'description' => 'Test the Site Survey form.',
      'group' => 'Site Survey',
    );
  }

  /**
   * Test the form handler.
   */
  public function testSitesurveyForm() {
    // Let anonymous users view the form.
    user_role_grant_permissions(DRUPAL_ANONYMOUS_RID, array($this->permission));

    $this->drupalGet($this->path);
    $this->assertResponse(200);

    // Data table should be empty.
    $count = $this->getRows();
    $this->assertTrue(empty($count), 'No database records exist.');

    $items = array(
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
    foreach ($items as $key => $value) {
      $this->assertText($value['label'], format_string('Form field label for %field found.', array('%field' => $value['label'])));
      $this->assertRaw("name=\"$key\"", format_string('Form markup for %html field found.', array('%html' => $key)));
      // Set up edit data.
      $edit[$key] = $value['input'];
    }

    // Post the form.
    $this->drupalPost($this->path, $edit, 'Submit');

    // Check the response message.
    $this->assertText('Thank you!', 'Thank you message shown.');

    // Data table should have 1 row.
    $count = $this->getRows();
    $this->assertTrue($count == 1, 'One database record exists.');
  }

}
