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
    private
    $defaultMessage = 'Значение не является тождественно верным';
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
    public function isOk($data = null,$message = null)
    {
        $message = (isset($message)) ? $message : $this->defaultMessage;

        if ($data === true || $data=='1' || $data == 'true'){
            return true;
        }else{
            $this->errorMessage = $message;
        }
        return false;
    }

}