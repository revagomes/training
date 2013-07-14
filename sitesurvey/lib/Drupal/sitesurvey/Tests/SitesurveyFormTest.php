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
    $this->drupalGet($this->path);
    $this->assertResponse(200);

    $items = array(
      'name' => array(
        'label' => 'Your name',
      ),
      'purpose' => array(
        'label' => 'Why did you visit the site today?',
      ),
      'success' => array(
        'label' => 'Did you find what you were looking for?',
      ),
      'recommend' => array(
        'label' => 'Would you recommend the site to your friends?',
      ),
      'improve' => array(
        'label' => 'What one thing could we do to improve the site?',
      ),
      'hear' => array(
        'label' => 'How did you hear about the site?',
      )
    );
    foreach ($items as $key => $value) {
      $this->assertText($value['label'], format_string('Form field label for %field found.', array('%field' => $value['label'])));
      $this->assertRaw("name=\"$key\"", format_string('Form markup for %html field found.', array('%html' => $key)));
    }

  }

}
