<?php
    include '../../model/diaryModel.php';

    $diary = new Diary();
    if (isset($_POST['createDia']))
    {
        $id=$_SESSION['owner_id'];
        $date=htmlentities($_POST['date']);
        $label=htmlentities($_POST['label']);
        $status=htmlentities($_POST['status']);
        $ok=$diary->addDiary(array($id,$date,$label,$status));
        if($ok){

            header("location:../../view/diary.php?Success_Add_Diary");
        }
        else{
            echo 'shit hsith ihst';
        }
    }

    if(isset($_POST['update']))
    {
        $id=htmlentities($_POST['diary_id']);
        $date = htmlentities($_POST['date']);
        $label= htmlentities($_POST['label']);
        $status = htmlentities($_POST['status']);
        $ok = $diary->updateDiary(array($id,$date,$label,$status),$_SESSION['owner_id'],$id);
        header("location:../../view/diary.php?Update_Success");
    }

?>