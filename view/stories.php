<?php
    include '../model/storyModel.php';

    if($_SESSION){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diary</title>
</head>
<body>
    <form action="../controller/story/storyController.php" method="post">
        <input type="number" name="diary_id" hidden value="<?php echo $_GET['id'];?>">
        <input type="date" name = "date">
        <input type="text" placeholder="Title" name="title">
        <textarea name="Content" id="content" cols="30" rows="10"></textarea>
        <input type="submit" name="AddStory" value="Add Story">
    </form>
</body>
</html>

<?php
    } else {
        header("location:pleaselogin.php");
    }
?>