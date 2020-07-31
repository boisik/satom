<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 31.07.2020
 * Time: 2:17
 */

namespace Model\Conditions;
use Model\Abstracts\AbstractCondition;


class Email extends  AbstractCondition
{

    /**
     * Валидирует данные, проверяет является ли входящее значение
     * адресом электронной почты
     *
     * @param mixed $data
     *
     * @return bool
     */
    public function isOk($data = null)
    {
        if (!preg_match('/^.+\@\S+\.\S+$/', $data)) {
            return false;
        }
        return true;
    }

}