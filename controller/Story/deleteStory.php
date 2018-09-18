<?php
        include '../../model/storyModel.php';
        $story=new Story();
        $id=$_GET['id'];
        $story->deleteStory($id);
        header("location:../../view/diary.php");
?>