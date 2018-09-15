<?php
    include 'db/dbhelper.php';

    Class Story extends DBHelper{
        private $table = "stories";
        private $fields = array(
            "diary_id",
            "story_date",
            "owner_id",
            "story_title",
            "story_content"
        );
        //constructor
    function __construct(){
        return DBHelper::__construct();
    }
    // Create
    function addStory($data){
        return DBHelper::insertRecord($data,$this->fields,$this->table); 
    }
    // Retreive
    function getAllStory(){
        return DBHelper::getAllRecord($this->table);
    }
    function getStoryById($ref_id){
        return DBHelper::getRecordById($this->table,'story_id',$ref_id);
    }
    function getStory($ref_id){
        return DBHelper::getRecord($this->table,'story_id',$ref_id);
    }
    // Update
    function updateStory($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'story_id',$ref_id); 
    }
    // Delete
    function deleteStory($ref_id){
            return DBHelper::deleteRecord($this->table,'story_id',$ref_id);
    }
    }
?>