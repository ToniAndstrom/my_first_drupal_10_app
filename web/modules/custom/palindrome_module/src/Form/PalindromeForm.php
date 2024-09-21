<?php

namespace Drupal\palindrome_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PalindromeForm extends FormBase
{
    public function getFormId()
    {
        return 'palindrome_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Your name'),
            '#required' => true,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('submit'),
        ];
        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $name = $form_state->getValue('name');
       
            
            $form_state->setRedirect('palindrome_module.result', ['name' => $name]);
        
    }
}
