<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "text_blocks".
 *
 * @property int $id
 * @property string $alias
 * @property string $text
 */
class TextBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'text_blocks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alias'], 'required'],
            [['text'], 'string'],
            [['alias'], 'string', 'max' => 12],
            [['alias'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'text' => 'Text',
        ];
    }
}
