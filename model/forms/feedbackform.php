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
            "NameAlias"=>array(
                array('Model\\Conditions\\Length' => ['3','10']),

            ),
            "confirmAlias"=>array(
                array('Model\\Conditions\\IsTrue' => null),

            ),
        );
    }
}