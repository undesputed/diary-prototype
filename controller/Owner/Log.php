<?php
 require '../../model/logModel.php';
unset($_SESSION['owner_id']);
unset($_SESSION['owner']);
session_destroy();
header("location:../../index.php?success_logout");
?>