<?php

use yii\db\Migration;

/**
 * Class m180910_202644_system_products
 */
class m180910_202644_system_products extends Migration
{
    private $table = 'system_products';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'body' => $this->string(255)->notNull(),
            'price' => $this->integer(7)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180910_202644_system_products cannot be reverted.\n";

        return false;
    }
    */
}
