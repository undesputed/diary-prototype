<?php
    include '../../model/storyModel.php';

    $story = new Story();
    if(isset($_POST['AddStory']))
    {
        $owner = $_SESSION['owner_id'];
        $date = htmlentities($_POST['date']);
        $diary = htmlentities($_POST['diary']);
        $title = htmlentities($_POST['title']);
        $content = htmlentities($_POST['cotent']);
        $diary_id=htmlentities($_POST['diary_id']);
        $ok=$story->addStory(array($diary_id,$date,$owner,$title,$content));
        if($ok){
            header("location:../../view/stories.php?&Success_Add_sotries");
        }else{
            echo 'shit hsith ihst';
        }
    }