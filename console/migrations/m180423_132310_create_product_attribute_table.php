<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_attribute`.
 */
class m180423_132310_create_product_attribute_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_attribute', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_attribute');
    }
}
