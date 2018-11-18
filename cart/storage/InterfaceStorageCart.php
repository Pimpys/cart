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

namespace app\cart\storage;

/**
 * Interface InterfaceStorageCart
 * @package app\cart\storage
 */
interface InterfaceStorageCart {
    /*Сохраняет значение в хранилище*/
    /**
     * @param array $value
     * @return mixed
     */
    public function set(array $value);
    /*Получает значение из хранилища*/
    /**
     * @return array
     */
    public function get(): array;
}
