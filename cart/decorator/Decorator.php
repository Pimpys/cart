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
 * Date: 12.09.2018
 * Time: 23:15
 */

namespace app\cart\decorator;

/**
 * Class StaticDecorator
 * @package app\cart\decorator
 */
class Decorator extends ItemDecorator
{
    /**
     * @param array $items
     * @return int
     */
    public function getPrice(array $items): int
    {
        return $this->item->getPrice($items);
    }
}