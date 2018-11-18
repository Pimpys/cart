<?php

use yii\db\Migration;

/**
 * Class m180910_203737_system_data_insert
 */
class m180910_203737_system_data_insert extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute(
            "INSERT INTO `system_products` (`id`, `name`, `body`, `price`) "
                . "VALUES (NULL, 'Книга', 'Нет подключения к интернету.\r\nПопробуйте сделать следующее:\r\n\r\nПроверьте сетевые кабели, модем и маршрутизатор.\r\nПодключиться к Wi-Fi заново.\r\nВыполните диагностику сети', '1200'),"
                . "(NULL, 'Рюкзак', 'В нем можно носить книги, которые говорят об интернет. По желанию можно положить бутерброд.', '2500'),"
                . "(NULL, 'Сплит-Система', 'Делает с комнаты, холодильник. Надо закрывать двери и окна!', '13500'),"
                . "(NULL, 'Samsung A3 2016', 'Телефон нужен для того, чтоб звонить провайдеру и спрашивать почему нет интернета...', '14000'),"
                . "(NULL, 'Роутер', 'Для того, чтоб был интернет', '1300');"
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('system_products');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180910_203737_system_data_insert cannot be reverted.\n";

        return false;
    }
    */
}
