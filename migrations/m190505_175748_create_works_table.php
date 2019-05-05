<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%works}}`.
 */
class m190505_175748_create_works_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%works}}', [
            'id' => $this->primaryKey(),
            'alias' => $this->string(255)->unique(),
            'image' => $this->string(255),
            'title' => $this->string(255)->unique(),
            'description' => $this->text(),
            'key_words' => $this->text(),
            'team'=>text(),
            'vedios'=>text(),
            'images'=>text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%works}}');
    }
}
