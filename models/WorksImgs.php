<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "works_imgs".
 *
 * @property int $id
 * @property string $img
 */
class WorksImgs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'works_imgs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img'], 'string'],
            [['id'], 'unique'],
            [['img'], 'file',  'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
        ];
    }
}
