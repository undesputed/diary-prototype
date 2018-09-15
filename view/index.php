<?php
include '../model/ownerModel.php';

if($_SESSION){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<a href="diary.php">Diary</a>
<form action="../controller/owner/ownerLog.php" method="post">
    <input type="submit" value="logout" name="logout">
</form>    
</body>
</html>
<?php
}else{
    header("location:pleaselogin.php");
}
?>