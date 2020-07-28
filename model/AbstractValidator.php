<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 28.07.2020
 * Time: 12:59
 */

namespace Model;


abstract class AbstractValidator
{
    private $errors = array();


    /**
     * Производит валидацию данных, помещает отшибки в массив $errors
     * @return void
     */
    abstract function validate();


    /**
     * @param $message array массив входящих данных
     * @return void
     */
    public function addError($message) {
        $this -> errors[] = $message;
    }

    /**
     * Возвращает информацию об ошибках
     * @return array|bool
     */
    public function getErrors() {
        return $this -> errors;
    }
}