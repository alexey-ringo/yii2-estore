<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category_group`.
 */
class m180423_131720_create_category_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category_group', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category_group');
    }
}
