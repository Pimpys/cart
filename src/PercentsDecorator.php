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

namespace src;


class PercentsDecorator extends ItemDecorator
{
    protected $percent = 20;

    public function getPrice()
    {
        return $this->item->getPrice() - ($this->item->getPrice() * $this->percent / 100);
    }

}