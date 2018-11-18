<?php

namespace app\models\products;

use Yii;

/**
 * This is the model class for table "system_products".
 *
 * @property int $id
 * @property string $name
 * @property string $body
 * @property int $price
 */
class SystemProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'system_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'body', 'price'], 'required'],
            [['price'], 'integer'],
            [['name', 'body'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'body' => 'Body',
            'price' => 'Price',
        ];
    }
}
