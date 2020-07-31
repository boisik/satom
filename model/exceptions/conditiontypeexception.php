<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 31.07.2020
 * Time: 3:12
 */
namespace Model\Exceptions;
class conditionTypeException extends conditionException
{
    protected $extra_info = '';

    function __construct($message = 'Не верный тип данных', $code = 0, \Exception $previous = null, $extra_info = '')
    {
        $this->extra_info = $extra_info;
        parent::__construct($message, $code, $previous);
    }



}