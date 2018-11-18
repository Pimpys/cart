<?php
/**
 *Copyright (c)
 *http://maxsuccess.ru/
 *https://vk.com/pimpys
 *https://www.facebook.com/the.web.lessons/
 *Веб разработка на Yii2 Framework
 * +7-978-051-57-37
 * Кодируй так, как будто человек,
 * поддерживающий твой код, - буйный психопат,
 * знающий, где ты живешь.
 * Created by PhpStorm.
 * User: Max
 * Date: 21.08.2018
 * Time: 2:55
 */

namespace src;


use Throwable;

class AutoloadException extends \Exception
{
    public function __construct($path)
    {
        parent::__construct("Файл {$path} не найден!");
    }
}