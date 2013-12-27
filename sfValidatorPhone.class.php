<?php

/**
 * sfValidatorTnPhone validates a phone number in Tunisia. 
 *
 * @author     Haithem RIHANE <haithem.rihane@gmail.com>
 */
class sfValidatorTnPhone extends sfValidatorRegex {

    protected $_options = array('pattern' => "/^((\+|00)216)?([2579][0-9]{7}|(3[012]|4[01]|8[0128])[0-9]{6}|42[16][0-9]{5})$/");
    protected $_messages = array('invalid' => 'S\'il vous plaît entrer un numéro de téléphone valide en Tunisie');

    public function __construct($options = array(), $messages = array()) {
        return parent::__construct(array_merge($this->_options, $options), array_merge($this->_messages, $messages));
    }

}
