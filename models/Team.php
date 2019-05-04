<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $person_name
 * @property string $position
 * @property string $email
 * @property int $show_position
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['person_name', 'position', 'email', 'show_position'], 'required'],
            [['show_position'], 'integer'],
            [['person_name', 'position', 'email'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'person_name' => 'Person Name',
            'position' => 'Position',
            'email' => 'Email',
            'show_position' => 'Show Position',
        ];
    }
}
