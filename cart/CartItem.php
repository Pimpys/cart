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

namespace app\cart;

use app\models\products\SystemProducts;

/**
 * Class CartItem
 * @package app\cart
 */
class CartItem {

    /**
     * @var SystemProducts
     */
    private $product;
    /**
     * @var
     */
    private $quantity;

    /**
     * CartItem constructor.
     * @param SystemProducts $products
     * @param $quantity
     */
    public function __construct(SystemProducts $products, $quantity)
    {
        $this->product = $products;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return md5(serialize([$this->product->id]));
    }

    /**
     * @return SystemProducts
     */
    public function getProduct(): SystemProducts
    {
        return $this->product;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->product->price;
    }

    /**
     * @return int
     */
    public function getCost(): int
    {
        return $this->getPrice() * $this->quantity;
    }

    /**
     * @param $quantity
     * @return CartItem
     */
    public function plus($quantity): CartItem
    {
        return new static($this->product, $this->quantity + $quantity);
    }

    /**
     * @param $quantity
     * @return CartItem
     */
    public function changeQuantity($quantity): CartItem
    {
        return new static($this->product, $quantity);
    }
}
