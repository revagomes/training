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
 /* * Name
  * Why did you visit the site today?
  * Did you find what you were looking for?
    * Yes
    * No
  * Would you recommend the site to your friends?
    * Yes
    * No
  * What one thing could we do to improve the site?
  * How did you hear about the site?
    * Search engine
    * Friend recommended
    * Advertisement  */
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Your name'),
    );
    $form['purpose'] = array(
      '#type' => 'textarea',
      '#title' => t('Why did you visit the site today?'),
    );
    $form['success'] = array(
      '#type' => 'radios',
      '#title' => t('Did you find what you were looking for?'),
      '#options' => array(1 => t('Yes'), 0 => t('No')),
      '#required' => TRUE,
    );
    $form['recommend'] = array(
      '#type' => 'radios',
      '#title' => t('Would you recommend the site to your friends?'),
      '#options' => array(1 => t('Yes'), 0 => t('No')),
      '#required' => TRUE,
    );
    $form['improve'] = array(
      '#type' => 'textarea',
      '#title' => t('What one thing could we do to improve the site?'),
    );
    $form['hear'] = array(
      '#type' => 'select',
      '#title' => t('How did you hear about the site?'),
      '#options' => drupal_map_assoc(array(
        'Search engine',
        'Friend recommended',
        'Advertisement',
      )),
      '#required' => TRUE,
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
    return $form;
  }


  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {
    // Deliberately left blank.
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
    $values = $form_state['values'];
    $allowed = array('name', 'purpose', 'success', 'recommend', 'improve', 'hear');
    foreach ($allowed as $item) {
      $record[$item] = $values[$item];
    }
    sitesurvey_save($record);
    drupal_set_message(t('Thank you!'));
  }

}
