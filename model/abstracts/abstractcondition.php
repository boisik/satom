<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 29.07.2020
 * Time: 1:29
 */

namespace Model\Abstracts;
use Model\Interfaces\ConditionInterface;

abstract class AbstractCondition implements ConditionInterface
{
    public $errorMessage;


    public function __construct($specialParams = [] )
    {

    }

    /**
     * Возвращает текст с описанием ошибки
     *
     * @return array
     */
    public function getViolations()
    {
        return $this->errorMessage;
    }


}