<?php

namespace User\Form;

use Zend\Form\Form;

class RegisterForm extends Form {

    public function __construct($name = null) {
        // we want to ignore the name passed
        parent::__construct('register');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'firstname',
            'attributes' => array(
                'type' => 'text',
            ),
        ));
        $this->add(array(
            'name' => 'lastname',
            'attributes' => array(
                'type' => 'text',
            ),
        ));
        $this->add(array(
            'name' => 'username',
            'attributes' => array(
                'type' => 'text',
            ),
        ));
        $this->add(array(
            'type' => 'radio',
            'name' => 'gender',
            'options' => array(
                'value_options' => array(
                    '1' => 'Male',
                    '2' => 'Female',
                ),
            ),
            'attributes' => array(
                'value' => '1' //set checked to '1'
            )      
        ));
        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type' => 'password',
            ),
        ));
        $this->add(array(
            'name' => 'conpasswd',
            'attributes' => array(
                'type' => 'password',
                'id'  => 'conpasswd'
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'submit',
                'class' => 'btn btn-success',
            ),
        ));
    }

}