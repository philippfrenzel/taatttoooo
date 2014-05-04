<?php

namespace app\models;

use \DateTime;
use \phpthumb;

/**
 * This is the model class for table "tbl_dmsys". Which represents a physical file stored locally or uploaded to the server.
 * Most of the fields can be filled automatically as they "belong" to the file.
 *
 * @todo Pls wrap the filehandling to gaufrette, which allows to access all different places of filestorage like Dropbox, etc.
 *
 * @property integer $id The primary key of this record, autoincrement
 * @property integer $parent If this is a "new" copy of an existing document, the id of the parent will be stored inside
 * @property integer $owner_id Who is the document owner (Example Devision)
 * @property string $source_path The local source path for this document. If you enter one, pls make it absolute!
 * @property integer $source_security Maybe a login must be "handed out"
 * @property string $used_space How big the file is.
 * @property integer $time_expired If you wanna ensure this document will not get to old, pls enter an expiry date.
 * @property string $status Current workflow status of this document.
 * @property string $filename The filename of this document.
 * @property string $filetype Mime-Type of this document.
 * @property integer $dms_module Reference to the module -> pls. check CONST MODULE_<NAME> for available ones.
 * @property integer $dms_id The primary key of the record referenced by the module.
 * @property integer $creator_id Who created (uploaded) the document to the server.
 * @property integer $time_deleted When was the document deleted.
 * @property integer $time_created When was the docuemnt uploaded to the server (registration start).
 */

class Dmsys extends \yii\db\ActiveRecord
{

 /**
  * @var const MODULE_TIMETABLE
  * is used for managing workflow
  */
  const MODULE_STORY       = 1;
  
  public static $appmodules = array(
      self::MODULE_STORY   => '/story'
  );

  public static $appinternals = array(
      self::MODULE_STORY  => array('table'=>'tbl_dmpaper','field'=>'status'),
  );

  /**
   * This will return the Module Options as an Array
   * 
   * @return array with all current modules
   */
  public static function getModuleOptions(){
      return self::$appmodules;
  }

  public static function getModuleInternals(){
      return self::$appinternals;
  }

  /**
   * Returns a string representation of the model's module table name
   *
   * @return string The module table name of this workflow as a string
   */
  public static function getModuleAsString($id=NULL)
  {
      $options = self::getModuleOptions();
      if(!is_null($id))
          return isset($options[$id]) ? $options[$id] : '';
      return 'Unknown';
  }

  /**
   * Returns a string representation of the model's module table name
   *
   * @return string The module table name of this workflow as a string
   */
  public static function getModuleAsController($id)
  {
      $options = self::getModuleOptions();
      if(isset($options[$id])){ 
          $cleanme = $options[$id];
          //cut table shortcut
          $cleanme = str_replace(\Yii::$app->db->tablePrefix, '', $cleanme);
          $cleanme = implode('',explode('_',$cleanme));
          return $cleanme;
      }
      return 'site';
  }


	public $fileattachement = NULL;

  /**
   * will include the custom scopes for this model
   * @return object enhanced query object
   */
  public static function find()
  {
    return new DmsysQuery(get_called_class());
  }

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_dmsys';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			['fileattachement', 'file', 'types'=>'pdf,jpeg,png,jpg,xls,ppt,doc,txt,bmp', 'skipOnEmpty' => true],
			[['parent', 'owner_id', 'source_security', 'time_expired', 'dms_module','dms_id','creator_id', 'time_deleted', 'time_created'], 'integer'],
			[['dms_module','dms_id'], 'required'],
      [['filetype'], 'string', 'max' => 40],
			[['source_path','filename','uId'], 'string', 'max' => 255],
			[['used_space', 'status'], 'string', 'max' => 200]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id'              => \Yii::t('app','ID'),
			'parent'          => \Yii::t('app','Parent'),
			'owner_id'        => \Yii::t('app','Owner'),
			'source_path'     => \Yii::t('app','Source Path'),
			'source_security' => \Yii::t('app','Source Security'),
			'used_space'      => \Yii::t('app','Used Space'),
			'time_expired'    => \Yii::t('app','Time Expired'),
			'status'          => \Yii::t('app','Status'),
      'filename'        => \Yii::t('app','Filename'),
      'filetype'        => \Yii::t('app','Filetype'),
			'dms_module'      => \Yii::t('app','Module'),
			'dms_id'          => \Yii::t('app','Module ID'),
      'uId'             => \Yii::t('app','Creator'),
			'creator_id'      => \Yii::t('app','Creator'),
			'time_deleted'    => \Yii::t('app','Time Deleted'),
			'time_created'     => \Yii::t('app','Time Create'),
		];
	}

	 /**
    * @return query to get the workflow logs for a special entry
    * @param integer the id of the module - workflow table - see static params from Workflow Model
    * @param integer the primarey key value of the record within the linked table
    */
    public static function getAdapterForFiles($module,$id)
    {
      return static::find()->where('dms_module = '.$module.' AND dms_id = '.$id)->active()->orderBy('time_created DESC');
    }

    /**
     * [getReadableFileSize description]
     * @param  [type] $retstring [description]
     * @return [type]            [description]
     */
    public function getReadableFileSize($size,$retstring = null) {
      // adapted from code at http://aidanlister.com/repos/v/function.size_readable.php
      $sizes = array('bytes', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

      if ($retstring === null) { $retstring = '%01.2f %s'; }

      $lastsizestring = end($sizes);

      foreach ($sizes as $sizestring) {
              if ($size < 1024) { break; }
              if ($sizestring != $lastsizestring) { $size /= 1024; }
      }
      if ($sizestring == $sizes[0]) { $retstring = '%01d %s'; } // Bytes aren't normally fractional
      return sprintf($retstring, $size, $sizestring);
    }

  /**
   * [beforeSave description]
   * @param  [type] $insert [description]
   * @return [type]         [description]
   */
  public function beforeSave($insert)
  {
    $date = new DateTime('now');
    if(parent::beforeSave($insert))
    {
      if(\Yii::$app->user->isGuest)
      {
        $this->creator_id = 0; //external system writer
        $this->uId = Yii::$app->session->id;
      }
      else
      {
        $this->creator_id = \Yii::$app->user->identity->id;
        $this->uId = \Yii::$app->session->id;
      }      
    }
    if(is_null($this->time_created))
    {
      $this->time_created = $date->format("U");
    }
    return parent::beforeSave($insert);
  }

  public static function generateThumb($model)
  {
    //generate the preview of the uploaded file
    $thumbler = new phpthumb();
    $thumbler->setSourceData(file_get_contents(\Yii::$app->basePath."/attachements/".$model->dms_module."/".$model->id));
    $thumbler->setParameter('w', '150');
    
    $output_filename = \Yii::$app->basePath."/attachements/".$model->dms_module."/".$model->id."_thumb_sm.jpg";
    if ($thumbler->GenerateThumbnail()) { // this line is VERY important, do not remove it!
      if ($thumbler->RenderToFile($output_filename)) {
              // do something on success
              //echo 'Successfully rendered to "'.$output_filename.'"';
      } else {
              // do something with debug/error messages
              echo 'Failed:<pre>'.implode("\n\n", $thumbler->debugmessages).'</pre>';                          
      }
      $thumbler->purgeTempFiles();
    }
  }

}
