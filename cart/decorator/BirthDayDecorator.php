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
 * Date: 20.08.2018
 * Time: 0:50
 */

namespace app\cart\decorator;


/**
 * Class BirthDayDecorator
 * @package app\cart\decorator
 */
class BirthDayDecorator extends Decorator
{
    /**
     * @param array $item
     * @return int
     */
    public function getPrice(array $item): int
    {
        return (\Yii::$app->user->identity->username === 'admin') ? $this->item->getPrice($item) - ($this->item->getPrice($item) * 10 / 100) :
            $this->item->getPrice($item);
    }
}