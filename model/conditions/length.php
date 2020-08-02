<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 02.08.2020
 * Time: 18:15
 */

namespace Model\Conditions;
use Model\Abstracts\AbstractCondition;
use Model\Exceptions\ConditionTypeException;
use Model\Exceptions\ConditionException;
class Length extends AbstractCondition
{
    /**
     * Минимальная длина
     *
     * @var int
     */
    private $min;

    /**
     * Максимальная длина
     *
     * @var int
     */
    private $max;

    /**
     * Length validation rule constructor.
     *
     * @param int $min
     * @param int $max
     * @param string $charset
     * @throws ConditionTypeException
     * @throws ConditionException
     */
    public function __construct($min = null,$max = null)
    {
        if ($min === null && $max === null) {
            throw new ConditionTypeException();
        }

        if ($min !== null && $max !== null && $min > $max) {
            throw new ConditionException('Минимальное значение не может быть больше максимального,спасибо Капитан');
        }


        $this->min = $min;
        $this->max = $max;

    }



    /**
     * Валидирует данные, проверяет достаточно ли длинная или короткая строка во входящем значении
     *
     * @param mixed $data
     *
     * @return bool
     * @throws ConditionTypeException
     */
    public function isOk($data = null,$message = 'Недопустимая длина значения')
    {
        if (!is_string ($data)) {
            throw new ConditionTypeException();
        }
        if ($data === null || $data === '') {
            $this->errorMessage ='Поле не может быть пустым';
            return false;
        }


        $length = mb_strlen($data);

        if ($this->max !== null && $length > $this->max) {
            $this->errorMessage =$message;

            return false;
        }

        if ($this->min !== null && $length < $this->min) {
            $this->errorMessage =$message;
            return false;
        }

        return true;
    }


}