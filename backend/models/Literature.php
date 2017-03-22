<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "literature".
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $description
 * @property string $content
 * @property integer $status
 * @property integer $view
 * @property string $type
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_create
 * @property integer $user_update
 * @property string $comments
 */
class Literature extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'literature';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'img', 'type', 'created_at', 'user_create'], 'required'],
            [['content', 'comments'], 'string'],
            [['status', 'view', 'created_at', 'updated_at', 'user_create', 'user_update'], 'integer'],
            [['title', 'img', 'description'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 32],
            [['title'], 'unique'],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'img' => Yii::t('app', 'Img'),
            'description' => Yii::t('app', 'Description'),
            'content' => Yii::t('app', 'Content'),
            'status' => Yii::t('app', 'Status'),
            'view' => Yii::t('app', 'View'),
            'type' => Yii::t('app', 'Type'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'user_create' => Yii::t('app', 'User Create'),
            'user_update' => Yii::t('app', 'User Update'),
            'comments' => Yii::t('app', 'Comments'),
            'file' => Yii::t('app', 'file'),
        ];
    }
}
