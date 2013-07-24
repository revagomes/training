<?php

/**
 * @file
 * Definition of Drupal\sitesurvey\Plugin\Block\SitesurveyBlock.
 */

namespace Drupal\sitesurvey\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a Site Survey link block.
 *
 * @Plugin(
 *   id = "sitesurvey_block",
 *   admin_label = @Translation("Site Survey"),
 *   module = "sitesurvey"
 * )
 */
class SiteSurveyBlock extends BlockBase {

  /**
   * Overrides \Drupal\block\BlockBase::access().
   */
  public function access() {
    // @TODO: This construction will go away.
    // See https://drupal.org/node/2049309
    return user_access('respond to site survey');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => l(t('Take our site survey'), 'sitesurvey'),
    );
  }

}
