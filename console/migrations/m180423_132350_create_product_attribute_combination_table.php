<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_attribute_combination`.
 */
class m180423_132350_create_product_attribute_combination_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_attribute_combination', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_attribute_combination');
    }
}
