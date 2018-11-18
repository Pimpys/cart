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
 * Time: 22:43
 */

namespace app\cart;


/**
 * Class ControllerCart
 * @package app\cart
 */
class ControllerCart
{
    /**
     * @var Cart
     */
    private $cart;

    /**
     * ControllerCart constructor.
     * @param Cart $cart
     */
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    /**
     * @return Cart
     */
    public function getCart(): Cart
    {
        return $this->cart;
    }

    /**
     * @param CartItem $items
     */
    public function addToCart(CartItem $items)
    {
        $this->cart->add($items);
    }

    /**
     * @param $id
     * @param $quantity
     */
    public function changeQuantity($id, $quantity)
    {
        if ($quantity <= 0){
            $quantity = 1;
        }
        $this->cart->changeQuantity($id, $quantity);
    }

    /**
     * @param $id
     */
    public function remove($id)
    {
        $this->cart->remove($id);
    }

    public function clear()
    {
        $this->cart->clear();
    }
}