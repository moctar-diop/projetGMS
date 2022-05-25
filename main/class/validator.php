<?php
class Validator{
    private $data;
    private $errors;

    public function __construct($data){
        $this->data = $data;
    }


    private function getField($field){
        if(!isset($this->data[$field])){
            return null;
        }
        return $this->data[$field];
    }


    public function alphanumeriq($field, $errorMsg){
         if(!preg_match('/^[a-zA-Z ]+$/', $this->getField($field))){
            $this->errors[$field] = $errorMsg;
         }
    }

    public function isAlpha($field, $errorMsg){
        if(!preg_match('//^[a-zA-Z0-9_]+$/', $this->getField($field))){
            $this->errors[$field] = $errorMsg;
        }
    }

    public function isUnniq($field, $db, $table, $errorMsg){
        $record = $db->query("SELECT id FROM $table WHERE $field = ?", [$this->getField($field)])->fetch();
        if($record){
            $this->errors[$field] = $errorMsg;
        }
    }

    public function isEmail($field,$errorMsg){
        if(!filter_var($this->getField($field), FILTER_VALIDATE_EMAIL)){
            $this->errors[$field] = $errorMsg;
         }
    }

    public function isConfirm($field, $errorMsg=''){
        $value = $this->getField($field);
        if(empty($value) || $value != $this->getField($field . "_confirm")){
            $this->errors[$field] = $errorMsg;

        }
    }

    public function isNumber($field, $errorMsg){
        if(!preg_match("/^[0-9]+$/", $this->getField($field))){
            $this->errors[$field] = $errorMsg;
        }
    }

    public function isValid(){
        return empty($this->errors);
    }

    public function getErrors(){
        return  $this->errors;
    }
}

?>