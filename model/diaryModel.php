<?php
 include 'db/dbhelper.php';

    Class Diary extends DBHelper{
        private $table = "diary";
        private $fields = array(        
            "owner_id",
            "diary_datecreated",
            "diary_label",
            "diary_status"
        );

        //constructor
    function __construct(){
        return DBHelper::__construct();
    }
    // Create
    function addDiary($data){
        return DBHelper::insertRecord($data,$this->fields,$this->table); 
    }
    // Retreive
    function getAllDiary(){
        return DBHelper::getAllRecord($this->table);
    }
    function getDiaryById($ref_id){
        return DBHelper::getRecordById($this->table,'diary_id',$ref_id);
    }
    function getDiary($ref_id){
        return DBHelper::getRecord($this->table,'owner_id',$ref_id);
    }
    // Update
    function updateDiary($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'diary_id',$ref_id); 
    }
    // Delete
    function deleteDiary($ref_id){
            return DBHelper::deleteRecord($this->table,'diary_id',$ref_id);
    }
    }