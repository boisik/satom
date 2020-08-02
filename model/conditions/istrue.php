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
class isTrue extends AbstractCondition
{
    /**
     * Валидирует данные, проверяет является ли входящее значение
     * равным булевой функции true
     *
     * @param mixed $data
     * @param string $message
     *
     * @return bool
     * @throws ConditionTypeException
     */
    public function isOk($data = null,$message = 'Значение не является тождественно верным')
    {
        if (!is_bool ($data)) {
            throw new ConditionTypeException();
        }
        if ($data === true){
            return true;
        }else{
            $this->errorMessage = $message;
        }
        return false;
    }

}