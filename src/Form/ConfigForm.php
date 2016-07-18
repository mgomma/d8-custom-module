<?php

/**
 * @file
 * Contains \Drupal\custom\Form\ConfigForm.
 */

namespace Drupal\custom\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Custom form.
 */
class ConfigForm extends FormBase {

  public function getFormId() {
    return 'config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
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
  public function validateForm(array &$form, FormStateInterface $form_state) {

    // Validate title URL.
    $title = $form_state->getValue('title');
    if (!UrlHelper::isValid($title, TRUE)) {
      $form_state->setErrorByName('video', $this->t("The title '%url' is invalid url.", array('%url' => $title)));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }
  }

}
