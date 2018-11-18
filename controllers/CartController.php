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
use app\cart\CartItem;
use app\cart\ControllerCart;
use app\models\products\CartForm;
use Yii;
use yii\web\Response;

class CartController extends \yii\web\Controller{

    private $controllerCart;

    public function __construct($id, $module, ControllerCart $controllerCart, $config = [])
    {
        $this->controllerCart = $controllerCart;
        parent::__construct($id, $module, $config);
    }

    public function actionIndex() : string
    {
        return $this->render('index', [
            'model' => $this->controllerCart->getCart(),
        ]);
    }
    
    public function actionAdd($id): Response
    {
        $product = $this->findProducts($id);
	    Yii::$app->session->setFlash('success', 'Товар успешно добавлен в корзину!');
        $this->controllerCart->addToCart(new CartItem($product, 1));
        return $this->redirect(['cart/index']);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     */
    public function actionRemove($id): Response
    {
        try{
            Yii::$app->session->setFlash('success', 'Товар успешно удален!');
            $this->controllerCart->remove($id);
            return $this->redirect(['cart/index']);
        }catch (\DomainException $e){
            Yii::$app->session->setFlash('danger', $e->getMessage());
            return $this->redirect(Yii::$app->request->referrer);
        }
    }

    /**
     * @return Response
     */
    public function actionPlus(): Response
    {
        try{
            $form = CartForm::instance();
            if ($form->load(Yii::$app->request->post()) && $form->validate()){
                Yii::$app->session->setFlash('success', 'Кол-во успешно изменилось!');
                $this->controllerCart->changeQuantity($form->id, $form->quantity);
            }
            return $this->redirect(['cart/index']);
        }catch (\DomainException $e){
            Yii::$app->session->setFlash('danger', $e->getMessage());
            return $this->redirect(Yii::$app->request->referrer);
        }
    }

    public function actionClear(): Response
    {
        Yii::$app->session->setFlash('success', 'Товары успешно удалены!');
        $this->controllerCart->clear();
        return $this->redirect(['/']);
    }

    /**
     * @param $id
     * @return \app\models\products\SystemProducts|null
     * @throws \yii\web\NotFoundHttpException
     */
    private function findProducts($id){
        if(($findOne = \app\models\products\SystemProducts::findOne($id)) === null){
            throw new \yii\web\NotFoundHttpException('products not found!');
        }
        return $findOne;
    }
}
