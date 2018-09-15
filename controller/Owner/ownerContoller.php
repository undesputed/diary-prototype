<?php
    require '../../model/ownerModel.php';
$owner=new Owner();
    if(isset($_POST['signin']))
    {
        $flag = true;
        $last=$_POST['lastname'];
        $first=$_POST['firstname'];
        $mi=$_POST['mi'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirm=$_POST['confirm'];  
        $ownerArray = array($last,$first,$mi,$email,$password);

        for($i=0;$i<count($ownerArray);$i++){
            if($ownerArray[$i] == ""){
                $flag = false;
                break;
            }
        }
        
        if($flag){
            $owner->addOwner($ownerArray);
        }
        else{
            $message = "Invalid Credentials";
        }
        header('location:../../index.php');
    }
?>