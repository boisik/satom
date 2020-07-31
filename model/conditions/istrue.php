<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 29.07.2020
 * Time: 16:32
 */

namespace Model\Conditions;
use Model\Abstracts\AbstractCondition;
use Model\Exceptions\ConditionTypeException;
class istrue extends AbstractCondition
{
    /**
     * Валидирует данные, проверяет является ли входящее значение
     * равным булевой функции true
     *
     * @param mixed $data
     *
     * @return bool
     */
    public function isOk($data = null)
    {
        if (!is_bool ($data)) {
            throw new ConditionTypeException();
        }
        return $data === true;
    }

}