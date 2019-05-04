<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%start_page}}`.
 */
class m190504_080428_create_start_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%start_page}}', [
            'id' => $this->primaryKey(),
            'date_create' => $this->date(),
            'background' => $this->string(250)->notNull(),
            'video' => $this->string(500),
            'go_away_link' => $this->string(500),
            'is_active' => $this->boolean()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%start_page}}');
    }
}
