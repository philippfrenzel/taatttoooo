<?php

use yii\db\Schema;

/**
 * creates the dmsys table to store the uploads and the story table to store the users stories
 * @author Philipp Frenzel <philipp@frenzel.net>
 * @version 0.1
 */

class m140503_161721_story extends \yii\db\Migration
{
    public function up()
    {
      $this->createTable('tbl_dmsys',array(
            'id'             => 'INTEGER PRIMARY KEY AUTO_INCREMENT',
            'parent'         => 'INTEGER DEFAULT NULL',
            'owner_id'       => 'INTEGER NULL',
            'source_path'    => 'VARCHAR (255) DEFAULT "C:"',
            'source_security'=> 'INTEGER DEFAULT 0',
            'used_space'     => 'VARCHAR(200) DEFAULT "0Kb"',
            'time_expired'   => 'INTEGER DEFAULT NULL',
            'status'         => 'VARCHAR(200) DEFAULT "created" NOT NULL',        
            'dms_module'     => 'INTEGER NOT NULL', //integer based module id, defined within dms model
            'dms_id'         => 'INTEGER NOT NULL', //integer id of the referenced module record
            'creator_id'     => 'INTEGER NOT NULL',
            'time_deleted'   => 'INTEGER DEFAULT NULL',
            'time_created'    => 'INTEGER DEFAULT NULL'
      ),'CHARACTER SET utf8 COLLATE utf8_bin ENGINE = InnoDB;');

      $this->addColumn('tbl_dmsys','filename','VARCHAR(255) DEFAULT "tmp.txt" NOT NULL');
      $this->addColumn('tbl_dmsys','filetype','VARCHAR(30) DEFAULT "image/png"');
      $this->addColumn('tbl_dmsys','uId','VARCHAR(255)'); //the session id will be stored in here

      $this->createTable('tbl_story',array(
            'id'             => 'INTEGER PRIMARY KEY AUTO_INCREMENT',
            'user_id'        => 'INTEGER NULL',
            'content_tattoo' => 'TEXT NULL',
            'content_past'   => 'TEXT NULL',
            'content_present'=> 'TEXT NULL',
            'content_future' => 'TEXT NULL',
            'time_deleted'   => 'INTEGER DEFAULT NULL',
            'time_created'   => 'INTEGER DEFAULT NULL'
      ),'CHARACTER SET utf8 COLLATE utf8_bin ENGINE = InnoDB;');

      $this->addColumn('tbl_story','uId','VARCHAR(255)'); //the session id will be stored in here
    }

    public function down()
    {
        $this->dropTable('tbl_dmsys');
        $this->dropTable('tbl_story');
    }
}
