<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%text_blocks}}`.
 */
class m190504_035354_create_text_blocks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%text_blocks}}', [
            'id' => $this->primaryKey(),
            'alias' => $this->string(12)->notNull()->unique(),
            'text' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%text_blocks}}');
    }
}
