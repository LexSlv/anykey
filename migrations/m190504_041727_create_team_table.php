<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%team}}`.
 */
class m190504_041727_create_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%team}}', [
            'id' => $this->primaryKey(),
            'person_name' => $this->string(250)->notNull(),
            'position' => $this->string(250)->notNull(),
            'email' => $this->string(250)->notNull(),
            'show_position'=>$this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%team}}');
    }
}
