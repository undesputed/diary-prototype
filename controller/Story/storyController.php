<?php
    include '../../model/storyModel.php';

    $story = new Story();
    if(isset($_POST['AddStory']))
    {
        $owner = $_SESSION['owner_id'];
        $date = htmlentities($_POST['date']);
        $diary = htmlentities($_POST['diary']);
        $title = htmlentities($_POST['title']);
        $content = htmlentities($_POST['content']);
        $diary_id=htmlentities($_POST['diary_id']);
        $ok=$story->addStory(array($diary_id,$date,$owner,$title,$content));
        if($ok){
            header("location:../../view/vstories.php?id=".$diary_id."&Success_Add_sotries");
        }else{
            echo 'shit hsith ihst';
        }
        
    }

    if(isset($_POST['update']))
    {
        $diary_id = $_POST['diary_id'];
        $owner_id = $_SESSION['owner_id'];
        $date=$_POST['date'];
        $content = $_POST['content'];
        $title=$_POST['title'];
        $story->updateStory(array($diary_id,$date,$owner_id,$title,$content),$_GET['id']);
        header('location:../../view/diary.php');
    }