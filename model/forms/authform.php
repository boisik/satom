<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 02.08.2020
 * Time: 17:37
 */

namespace Model\Forms;
use Model\Abstracts\AbstractForm;


class authForm extends AbstractForm
{
    /**
     * @return array  список правил
     */
    function getConditions()
    {


        return array(

            "loginAlias"=>array(
                 array('Model\\Conditions\\Length'=>['3','10']),

             ),
            "passwordAlias"=>array(
                array('Model\\Conditions\\Length'=>['6','10']),

            ),
        );
    }
}