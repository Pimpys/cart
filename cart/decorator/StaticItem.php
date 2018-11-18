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
 * Time: 23:25
 */

namespace app\cart\decorator;

use app\cart\CartItem;

/**
 * Class StaticItem
 * @package app\cart\decorator
 */
class StaticItem extends Item
{
    /**
     * @param array $items
     * @return int
     */
    public function getPrice(array $items): int
    {
        $cost = 0;
        /* @var $item CartItem */
        foreach ($items as $item) {
            $cost += $item->getCost();
        }
        return $cost;
    }
}