<?php
    require '../../model/logModel.php';
    $log = new Log();
    if(isset($_POST['login'])){
        $email=htmlentities($_POST['email']);
        $password=htmlentities($_POST['password']);
        $data=array($email,$password);
        $ok=$log->login($data);
        if($ok){
            header("location:../../view/index.php?id=".$_SESSION['owner_id']."&?info=".$_SESSION['owner']);
        }else{
            header("location:../../index.php?failed_login");
        }
    }
    if(isset($_POST['logout'])){
        unset($_SESSION['owner_id']);
        unset($_SESSION['owner']);
        session_destroy();
        header("location:../../index.php?success_logout");
    }