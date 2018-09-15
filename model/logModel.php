<?php
require 'db/dbhelper.php';
Class Log extends DBHelper{
    function __construct(){
        return DBHelper::__construct();
    }
    function login($data){
        return DBHelper::logginUser($data);
    }
}