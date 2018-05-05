<?php

use yii\db\Migration;

/**
 * Class m180430_213551_create_category_tables
 */
class m180430_213551_create_category_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id_category' => $this->primaryKey()->notNull()->unsigned(),
            'id_parent' => $this->integer(10)->notNull()->unsigned(),
            'id_shop_default' => $this->integer(10)->notNull()->defaultValue(1)->unsigned(),
            'level_depth' => $this->tinyInteger(3)->notNull()->defaultValue(0),
            'nleft' => $this->integer(10)->notNull()->defaultValue(0),
            'nright' => $this->integer(10)->notNull()->defaultValue(0),
            'active' => $this->tinyInteger(1)->notNull()->defaultValue(0),
            'date_add' => $this->dateTime(),
            'date_upd' => $this->dateTime(),
            'position' => $this->integer(10)->notNull()->defaultValue(0),
            'is_root_category' => $this->tinyInteger(1)->notNull()->defaultValue(0),
            'id_image' => $this->integer(10)->notNull()->defaultValue(0),
            'sort_order' => $this->integer(10)->notNull()->defaultValue(0),
        ]);
         
        $this->createIndex('category_parent', 'category', 'id_parent');
        $this->createIndex('nleftrightactive', 'category', ['nleft','nright','active']);
        $this->createIndex('level_depth', 'category', 'level_depth');
        $this->createIndex('nright', 'category', 'nright');
        $this->createIndex('activenleft', 'category', ['active', 'nleft']);
        $this->createIndex('activenright', 'category', ['active', 'nright']);
        $this->createIndex('id_image', 'category', 'id_image');
            
        $this->createTable('category_lang', [
            'id_category' => $this->integer(10)->notNull()->unsigned(),
            'id_shop' => $this->integer(11)->notNull()->defaultValue(1)->unsigned(),
            'id_lang' => $this->integer(10)->notNull()->defaultValue(1)->unsigned(),
            'name' => $this->string(128)->notNull(),
            'description' => $this->text(),
            'link_rewrite' => $this->string(128)->notNull(),
            'meta_title' => $this->string(128),
            'meta_keywords' => $this->string(255),
            'meta_description' => $this->string(255),
        ]);
        
        $this->addPrimaryKey('category_lang_pk', 'category_lang', ['id_category', 'id_shop', 'id_lang']);
        $this->createIndex('category_name', 'category_lang', 'name');
        $this->createIndex('meta_description', 'category_lang', 'meta_description');
        
        $this->insert('category', [
            'id_category' => 1,
            'id_parent' => 0,
            'id_shop_default' => 1,
            'level_depth' => 0,
            'nleft' => 0,
            'nright' => 0,
            'active' => 0,
            //'date_add' => $this->dateTime(),
            //'date_upd' => $this->dateTime(),
            'position' => 0,
            'is_root_category' => 0,
            'id_image' => 0,
            'sort_order' => 0,
        ]);
        
        $this->insert('category_lang', [
            'id_category' => 1,
            'id_shop' => 1,
            'id_lang' => 1,
            'name' => 'women',
            'description' => 'fashion',
            'link_rewrite' => '',
        ]);
        
        

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
        $this->dropTable('category_lang');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180430_213551_create_category_tables cannot be reverted.\n";

        return false;
    }
    */
}
