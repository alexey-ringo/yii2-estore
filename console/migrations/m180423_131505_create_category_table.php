<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180423_131505_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id_category' => $this->primaryKey(),
            'id_parent' => $this->integer(10)->notNull(),
            'id_shop_default' => $this->integer(10)->notNull()->defaultValue(1),
            'level_depth' => $this->tinyInteger(3)->notNull()->defaultValue(0),
            'nleft' => $this->integer(10)->notNull()->defaultValue(0),
            'nright' => $this->integer(10)->notNull()->defaultValue(0),
            'active' => $this->tinyInteger(1)->notNull()->defaultValue(0),
            'date_add' => $this->dateTime()->notNull(),
            'date_upd' => $this->dateTime()->notNull(),
            'position' => $this->integer(10)->notNull()->defaultValue(0),
            'is_root_category' => $this->tinyInteger(1)->notNull()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
