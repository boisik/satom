<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 28.07.2020
 * Time: 22:08
 */

namespace Model\Abstracts;


/**
 * конечно можно реализовать одним методом и то и то, ассоциативный массив сделать большой,
 * но в даннйо ситуации я разделил, чтобы не усложнять излишне свою часть задачи
 */

abstract class AbstractForm
{
    /**
     * @return array  список правил
     */
   function getConditions()
    {

    }


    /**
     * @return array  список полей и их типов
     */
   function  getFields()
    {

    }

}