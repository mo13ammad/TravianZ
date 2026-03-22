<?php
if(!isset($_SESSION)) session_start();
if($_SESSION['access'] < 9) die("Access Denied");
include_once("../../Database.php");
include_once("../../config.php");

if(isset($_POST['submit'])) {
    $text = $_POST['text'];
    $time = time();
    $database->query("INSERT INTO " . TB_PREFIX . "announcements (`text`, `time`) VALUES ('".$database->escape($text)."', $time)");
    header("Location: ../../../Admin/admin.php?p=announcements");
}

if(isset($_GET['del'])) {
    $id = (int)$_GET['del'];
    $database->query("DELETE FROM " . TB_PREFIX . "announcements WHERE id = $id");
    header("Location: ../../../Admin/admin.php?p=announcements");
}
?>
