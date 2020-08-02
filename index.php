<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 31.07.2020
 * Time: 2:38
 */
include('model/bootstrap/autoloader.php');


$rule = 'Model\\Conditions\\Email';
$data = 'frfr';
$obj = new $rule();
//var_dump($obj->isOk($data));

/**
 * Предполагаю, что код ниже, это код ACTION функции контроллера( да я не воссоздал иерархию папок и тд,
 * это чтобы не писать MVC велосипед с роутингом итд)
 */

$form = new Model\Forms\FeedBackForm();
$conditions = $form->getConditions();//получаем список неких условий которым должны соответсвовать поля, при этом если я хочу
// кастомные условия для конкретно этой формы обратной связи я могу накидать условия прямо тут, или добавить в полученному массиву свои.


//Дальше, например проверка условия что пришли данные $_POST. и вызов вункции setData(), которая поместит в $form->data данные.
// в данном случае я хардкодом подготовлю данные, но предполагается что данные помещены в переменную $data, методом getData
// который можно реализовать у модели формы
$data = array(
    "emailAlias"=>'viktorSOBAKAmail.ru',

    "nameAlias"=>'Ivan',

    "confirmAlias"=>'true',
);

// кастомные уведомления для пользователя
$messages = array(
    "confirmAlias"=>'Согласитесь с правилами, установленными 82ФЗ, без вашего подтверждения, мы не можем проолжить',
);

$fbValidator = new Validator($data,$conditions,$messages);
$fbValidator ->validate();
$errors = $fbValidator->getErrors();

// ну и выведу ошибки, специально допустив невалидные данные в $data
echo ('<pre>');
var_dump($errors);