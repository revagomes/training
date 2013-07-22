<?php

/**
 * @file
 * Definition of Drupal\sitesurvey\Form\SitesurveyForm.
 */

namespace Drupal\sitesurvey\Form;

use Drupal\Core\Form\FormInterface;

/**
 * Displays the Site Survey form.
 */
class SitesurveyForm implements FormInterface {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'sitesurvey_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {
    return $form;
  }


  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {

  }

}
