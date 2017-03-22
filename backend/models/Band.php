<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "band".
 *
 * @property integer $id
 * @property integer $status
 * @property string $description
 * @property integer $time
 */
class Band extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'band';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status', 'time'], 'integer'],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'time' => Yii::t('app', 'Time'),
        ];
    }
}
