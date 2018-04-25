<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category_product`.
 */
class m180423_131846_create_category_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category_product', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category_product');
    }
}
