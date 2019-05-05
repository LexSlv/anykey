<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "start_page".
 *
 * @property int $id
 * @property string $date_create
 * @property string $background
 * @property string $video
 * @property string $go_away_link
 * @property int $is_active
 */
class StartPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'start_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_create'], 'safe'],
            [['background','title'], 'required'],
            [['is_active'], 'integer'],
            [['background'], 'string', 'max' => 250],
            [['video', 'go_away_link'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'title',
            'date_create' => 'Date Create',
            'background' => 'Background',
            'video' => 'Video',
            'go_away_link' => 'Go Away Link',
            'is_active' => 'Is Active',
        ];
    }
}
