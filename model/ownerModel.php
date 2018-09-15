<?php
    require 'db/DBHelper.php';

    Class Owner extends DBHelper
    {
        private $table = 'owner';
        private $fields = array(
            'owner_lastname',
            'owner_firstname',
            'owner_mi',
            'owner_username',
            'owner_password'
        );

        //constructor
    function __construct(){
        return DBHelper::__construct();
    }
    // Create
    function addOwner($data){
        return DBHelper::insertRecord($data,$this->fields,$this->table); 
    }
    // Retreive
    function getAllOwner(){
        return DBHelper::getAllRecord($this->table);
    }
    function getOwnerById($ref_id){
        return DBHelper::getRecordById($this->table,'owner_id',$ref_id);
    }
    function getOwner($ref_id){
        return DBHelper::getRecord($this->table,'owner_id',$ref_id);
    }
    // Update
    function updateOwner($data,$ref_id){
        return DBHelper::updateRecord($this->table,$this->fields,$data,'owner_id',$ref_id); 
    }
    // Delete
    function deleteOwner($ref_id){
            return DBHelper::deleteRecord($this->table,'owner_id',$ref_id);
    }
    }
?>