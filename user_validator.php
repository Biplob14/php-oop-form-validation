<?php

class IserValidator {

    private $data;
    private $error = [];
    private static $fields = ['username', 'email'];

    public function __construct($post-data) {
        $this->data = $post_data;
    }

    public function validateForm() {
        foreach(self::$fields as $field) {
            if(!array_key_exists($field, $this->data)) {
                trigger_error("$field is not present in data");
            }
        }

        $this->validateUsername();
        $this->validateEmail();
    }

    private function validateUsername() {
        $val = trim($this->data['username']);

        if(empty($val)) {
            $this->addError('username', 'username cannot be empty');
        } else {
            if(preg_match('/^[a-zA-Z0-9]{6,12}$/'))
        }
    }
    private function validateEmail() {

    }
    private function addError($key, $val) {
        $this->errors[$key] = $val;
    }
}

?>