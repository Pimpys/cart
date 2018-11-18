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
 * Date: 13.09.2018
 * Time: 0:39
 */

namespace app\models\products;


use yii\base\Model;

class CartForm extends Model
{
    public $quantity;
    public $id;

    public function rules(): array
    {
        return [
            [['quantity', 'id'], 'required'],
            [['quantity'], 'integer'],
        ];
    }
}