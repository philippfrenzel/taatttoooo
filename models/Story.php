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
            //[['user_id'], 'required'],
            [['user_id', 'time_deleted', 'time_created'], 'integer'],
            [['content_tattoo', 'content_past', 'content_present', 'content_future'], 'string'],
            [['content_present'],'email'],
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
            'content_tattoo' => 'Your Story',
            'content_past' => 'Name',
            'content_present' => 'eMail',
            'content_future' => 'For your Future',
            'time_deleted' => 'Time Deleted',
            'time_created' => 'Time Created',
            'uId' => 'U ID',
        ];
    }

    /**
     * This is invoked before the record is saved.
     * @return boolean whether the record should be saved.
     */
    public function beforeSave($insert)
    {       
        if (parent::beforeSave($insert)) 
        {
            if ($insert) 
            {
                $this->time_created = time();
            }
            else
            {
                $a = strptime($this->time_created, '%Y-%m-%d');
                $timestamp = mktime(0, 0, 0, $a['tm_mon']+1, $a['tm_mday']+1, $a['tm_year']+1900);              
                $this->time_created = $timestamp;        
            }
            return true;
        } 
        return false;
    }
}
