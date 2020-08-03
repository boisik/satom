<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 02.08.2020
 * Time: 22:37
 */
use Model\Interfaces\ConditionInterface;
use Model\Abstracts\AbstractValidator;
use Model\Exceptions\ValidatorException;
class Validator  extends  AbstractValidator
{
    /**
     * Производит валидацию данных, помещает отшибки в массив $errors
     * @return void
     */
     function validate()
     {


        foreach ($this->data as $fieldAlias=>$fieldValue){

            if (isset($this->data[$fieldAlias])){

                foreach ($this->conditions[$fieldAlias] as $condition){

                    $keys = array_keys($condition);
                    $className = $keys[0];
                  //  $className = array_key_first($condition);    При версии PHP < 7.3  не канает
                    $data = $fieldValue;
                    $specialParams = $condition[$className];
                    $conditionObject = new $className($specialParams);
                    $message = (isset($this->messages[$fieldAlias])) ? $this->messages[$fieldAlias] : null;
                    if ($conditionObject instanceof ConditionInterface){
                        if ($conditionObject->isOk($data,$message)){
                            continue;
                        }else{
                            $this->addError($fieldAlias,$conditionObject->errorMessage);
                        }
                    }else{
                        throw new ValidatorException('Не верно задано правило',0,null, $className);
                    }

                }

            }

        }

     }


}