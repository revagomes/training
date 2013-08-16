<?php

/**
 * Views definition file for Site Survey.
 */

/**
 * Implements hook_views_data().
 */
function sitesurvey_views_data() {

  $data['sitesurvey']['table']['group'] = t('Site Survey');

  $data['sitesurvey']['table']['base'] = array(
    'field' => 'id',
    'title' => t('Site Survey'),
    'help' => t('Results from your site survey.'),
  );

  $data['sitesurvey']['name'] = array(
    'title' => t('Name'),
    'help' => t('Respondent name.'),
    'field' => array(
      'id' => 'standard',
    ),
    'sort' => array(
      'id' => 'standard',
    ),
    'filter' => array(
      'id' => 'string',
    ),
    'argument' => array(
      'id' => 'string',
    ),
  );

  $data['sitesurvey']['purpose'] = array(
    'title' => t('Purpose'),
    'help' => t('Reason for visit.'),
    'field' => array(
      'id' => 'standard',
    ),
    'sort' => array(
      'id' => 'standard',
    ),
    'filter' => array(
      'id' => 'string',
    ),
    'argument' => array(
      'id' => 'string',
    ),
  );

  $data['sitesurvey']['success'] = array(
    'title' => t('Success'),
    'help' => t('Found what they were looking for.'),
    'field' => array(
      'id' => 'boolean',
    ),
    'filter' => array(
      'id' => 'boolean',
      // Note that you can override the field-wide label:
      'label' => t('Success'),
      // This setting is used by the boolean filter handler, as possible option.
      'type' => 'yes-no',
      // use boolean_field = 1 instead of boolean_field <> 0 in WHERE statment.
      'use_equal' => TRUE,
    ),
    'sort' => array(
      'id' => 'standard',
    ),
  );

  $data['sitesurvey']['recommend'] = array(
    'title' => t('Recommend'),
    'help' => t('Would recommend the site to a fried,'),
    'field' => array(
      'id' => 'boolean',
    ),
    'filter' => array(
      'id' => 'boolean',
      // Note that you can override the field-wide label:
      'label' => t('Recommend'),
      // This setting is used by the boolean filter handler, as possible option.
      'type' => 'yes-no',
      // use boolean_field = 1 instead of boolean_field <> 0 in WHERE statment.
      'use_equal' => TRUE,
    ),
    'sort' => array(
      'id' => 'standard',
    ),
  );

  $data['sitesurvey']['improve'] = array(
    'title' => t('Improve'),
    'help' => t('Feature improvements.'),
    'field' => array(
      'id' => 'standard',
    ),
    'sort' => array(
      'id' => 'standard',
    ),
    'filter' => array(
      'id' => 'string',
    ),
    'argument' => array(
      'id' => 'string',
    ),
  );

  $data['sitesurvey']['hear'] = array(
    'title' => t('Hear'),
    'help' => t('How they heard about the site.'),
    'field' => array(
      'id' => 'standard',
    ),
    'sort' => array(
      'id' => 'standard',
    ),
    'filter' => array(
      'id' => 'string',
    ),
    'argument' => array(
      'id' => 'string',
    ),
  );

  $data['sitesurvey']['submitted'] = array(
    'title' => t('Submitted'),
    'help' => t('Date submitted.'),
    'field' => array(
      'id' => 'date',
    ),
    'sort' => array(
      'id' => 'date',
    ),
    'filter' => array(
      'id' => 'date',
    ),
  );

  return $data;
}
