<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%location}}`.
 */
class m190504_052625_create_location_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%locations}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(250)->notNull(),
            'big_image' => $this->string(250)->notNull(),
            'small_image1' => $this->string(250)->notNull(),
            'small_image2' => $this->string(250)->notNull(),
            'small_image3' => $this->string(250)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%locations}}');
    }
}
