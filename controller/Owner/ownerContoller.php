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
        header('location:../../view/index.php');
    }

    if(isset($_POST['update']))
    {
        $flag=true;
        $owner_id=$_SESSION['owner_id'];
        $lastname=$_POST['lastname'];
        $firstname=$_POST['firstname'];
        $mi=$_POST['mi'];
        $email=$_POST['email'];
        $password=$_POST['password'];    

            $owner->updateOwner(array($lastname,$firstname,$mi,$email,$password,$owner_id),$owner_id);
            header('location:../../view/diary.php');
    }
?>