<?php
    SESSION_START();
    if(!isset($_SESSION['owner_id']))
		{
			header("location:../../index.php");
        }
    include '../../model/diaryModel.php';
    $diary = new Diary();
    $id = $_GET['id'];
    $diary->deleteDiary($id);
    header("location:../../view/diary.php");

?>