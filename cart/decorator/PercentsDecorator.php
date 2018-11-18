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
 * Class PercentsDecorator
 * @package app\cart\decorator
 */
class PercentsDecorator extends Decorator {
    /**
     * @param array $item
     * @return int
     */
    public function getPrice(array $item): int
    {
        return $this->item->getPrice($item) - ($this->item->getPrice($item) * 5 / 100);
    }
}
