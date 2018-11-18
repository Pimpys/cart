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

namespace app\controllers;

class CartController extends \yii\web\Controller{
    public function actionIndex() {
        return $this->render('index');
    }
    
    public function actionAdd($id) {
        $product = $this->findProducts($id);
		\Yii::$app->session->setFlash('success', 'Товар успешно добавлен в корзину!');
        return $this->actionIndex();
    }
    
    private function findProducts($id){
        if(($findOne = \app\models\products\SystemProducts::findOne($id)) === null){
            throw new \yii\web\NotFoundHttpException('products not found!');
        }
        return $findOne;
    }
}
