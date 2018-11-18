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
 * Date: 11.09.2018
 * Time: 23:15
 */

namespace app\cart;

use app\cart\decorator\BirthDayDecorator;
use app\cart\decorator\Decorator;
use app\cart\decorator\PercentsDecorator;
use app\cart\decorator\StaticItem;
use Yii;
use app\cart\storage\SessionStorage;
use yii\base\Application;
use yii\base\BootstrapInterface;

class RegistryCart implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        Yii::$container->setSingleton(Cart::class, function () {
            return new Cart(
                new SessionStorage('basket', Yii::$app->session),
                $this->getDecoratorClass()
            );
        });
    }

    private function getDecoratorClass()
    {
        return Yii::$app->user->identity ? new BirthDayDecorator(
            new PercentsDecorator(new Decorator(new StaticItem()))
        ) : new Decorator(new StaticItem());
    }
}