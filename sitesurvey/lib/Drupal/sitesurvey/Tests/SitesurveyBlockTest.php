<?php

/**
 * @file
 * Definition of Drupal\sitesurvey\Tests\SitesurveyBlockTest.
 */

namespace Drupal\sitesurvey\Tests;

use Drupal\sitesurvey\Tests\SitesurveyTestBase;

class SitesurveyBlockTest extends SitesurveyTestBase {

  /**
   * Test information.
   */
  public static function getInfo() {
    return array(
      'name' => 'Sitesurvey Block',
      'description' => 'Test the Site Survey block.',
      'group' => 'Site Survey',
    );
  }

  /**
   * Test the form handler.
   */
  public function testSitesurveyBlock() {
    // Let anonymous users view the form.
    user_role_grant_permissions(DRUPAL_ANONYMOUS_RID, array($this->permission));

    // Place the block.
    $this->drupalPlaceBlock('sitesurvey_block');

    // Go to the home page.
    $this->drupalGet('');

    // Look for the block.
    $this->assertText('Site Survey', 'Site survey block loaded for privileged users.');
    $this->assertRaw('sitesurvey">Take our site survey</a>', 'Site survey link shown to privileged users.');

    // Take away the permission.
    user_role_revoke_permissions(DRUPAL_ANONYMOUS_RID, array($this->permission));

    // Go to the home page.
    $this->drupalGet('');

    // Look for the block.
    $this->assertNoText('Site Survey', 'Site survey block not shown to unprivileged users.');
    $this->assertNoRaw('sitesurvey">Take our site survey</a>', 'Site survey link not shown to unprivileged users.');

  }
}
