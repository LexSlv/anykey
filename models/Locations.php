<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "locations".
 *
 * @property int $id
 * @property string $title
 * @property string $big_image
 * @property string $small_image1
 * @property string $small_image2
 * @property string $small_image3
 */
class Locations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'locations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'big_image', 'small_image1', 'small_image2', 'small_image3', 'position'], 'required'],
            [['title', 'big_image', 'small_image1', 'small_image2', 'small_image3'], 'string', 'max' => 250],
            [['position'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'big_image' => 'Big Image',
            'small_image1' => 'Small Image1',
            'small_image2' => 'Small Image2',
            'small_image3' => 'Small Image3',
            'Position' => 'Position',
        ];
    }
}
