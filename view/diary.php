<?php
    include '../model/diaryModel.php';
    
    if($_SESSION){
        date_default_timezone_set("Asia/Manila");
        $date=date("Y-m-d");
        $diary = new Diary();
        $dia=$diary->getDiary($_SESSION['owner_id']);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diary</title>
</head>
<body>
    <form action="../controller/Diary/diaryController.php" method="post">
        <input type="text" name="date"  value="<?php echo $date?>" readOnly>
        <input type="text" name="label" placeholder="label">

        <select name="status">
            <option value="Active">Active</option>
            <option value="Forgotten">Forgotten</option>
        </select>
        <input type="submit" name="createDia" value="Create">
    </form>
    <table>
        <thead>
            <th>ID</th>
            <th>Date</th>
            <th>Title</th>
            <td>Status</th>
        </thead>
        <tbody>
            <?php foreach($dia as $d){?>
            <tr>
                <td><?php echo $d['diary_id'];?></td>
                <td><?php echo $d['diary_datecreated'];?></td>
                <td><?php echo $d['diary_label'];?></td>
                <td><?php echo $d['diary_status'];?></td>
                <td><a href="stories.php?id=<?php echo $d['diary_id'];?>">View story</a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
<?php
    }else{
        header("location:pleaselogin.php");
    }
?>