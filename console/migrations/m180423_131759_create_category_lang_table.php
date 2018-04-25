<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category_lang`.
 */
class m180423_131759_create_category_lang_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category_lang', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category_lang');
    }
}
