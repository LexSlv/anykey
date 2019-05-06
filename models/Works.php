<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "works".
 *
 * @property int $id
 * @property string $image
 * @property string $alias
 * @property string $title
 * @property string $description
 * @property string $key_words
 * @property string $team
 * @property string $videos
 * @property string $images
 */
class Works extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'works';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'alias', 'title', 'description', 'key_words', 'team', 'videos', 'images'], 'required'],
            [['description', 'key_words', 'team', 'videos', 'images'], 'string'],
            [['image', 'alias', 'title'], 'string', 'max' => 255],
            [['date_create', 'is_active'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_create'=>'date_create',
            'image' => 'Image',
            'alias' => 'Alias',
            'is_active'=>'Is_active',
            'title' => 'Title',
            'description' => 'Description',
            'key_words' => 'Key Words',
            'team' => 'Team',
            'videos' => 'Videos',
            'images' => 'Images',
        ];
    }
}
