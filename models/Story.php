<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_story".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $content_tattoo
 * @property string $content_past
 * @property string $content_present
 * @property string $content_future
 * @property integer $time_deleted
 * @property integer $time_created
 * @property string $uId
 */
class Story extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_story';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'time_deleted', 'time_created'], 'integer'],
            [['content_tattoo', 'content_past', 'content_present', 'content_future'], 'string'],
            [['uId'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'content_tattoo' => 'Your Tattoo',
            'content_past' => 'About your Past',
            'content_present' => 'Your Present',
            'content_future' => 'For your Future',
            'time_deleted' => 'Time Deleted',
            'time_created' => 'Time Created',
            'uId' => 'U ID',
        ];
    }
}
