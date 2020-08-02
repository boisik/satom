<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 02.08.2020
 * Time: 19:51
 */

namespace Model\Forms;
use Model\Abstracts\AbstractForm;

class FeedBackForm extends AbstractForm
{
    /**
     * @return array  список правил
     */
    function getConditions()
    {


        return array(
            "emailAlias"=>array(
                array('Model\\Conditions\\Email' => null)
            ),
            "nameAlias"=>array(
                array('Model\\Conditions\\Length' => ['min' => '3','max' => '10']),
                array('Model\\Conditions\\Length' => ['min' => '5','max' => '8']),  //да правило такоеже, это для наглядности.

            ),
            "confirmAlias"=>array(
                array('Model\\Conditions\\IsTrue' => null),

            ),
        );
    }
}