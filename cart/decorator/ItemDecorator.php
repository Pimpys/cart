<?php

/*
 * http://maxsuccess.ru/
 * https://vk.com/pimpys
 * https://www.facebook.com/the.web.lessons/
 * Веб разработка на Yii2 Framework
 * +7-978-051-57-37
 * Кодируй так, как будто человек,
 * поддерживающий твой код, - буйный психопат,
 * знающий, где ты живешь.
 * Created by NetBeans IDE 8.2
 * User: Max
 */

namespace app\cart\decorator;

/**
 * Class ItemDecorator
 * @package app\cart\decorator
 */
abstract class ItemDecorator extends Item{

    /**
     * @var Item
     */
    protected $item;

    /**
     * ItemDecorator constructor.
     * @param Item $item
     */
    public function __construct(Item $item) {
        $this->item = $item;
    }
}
