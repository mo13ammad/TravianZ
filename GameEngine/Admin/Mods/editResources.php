<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       editResources.php                                           ##
##  Developed by:  aggenkeech                                                  ##
##  License:       nalooti Project                                            ##
##  Copyright:     nalooti (c) 2010-2025. All rights reserved.                ##
##                                                                             ##
#################################################################################
if (!isset($_SESSION)) session_start();
if($_SESSION['access'] < 9) die("Access Denied: You are not Admin!");
include_once("../../config.php");

// go max 5 levels up - we don't have folders that go deeper than that
$autoprefix = '';
for ($i = 0; $i < 5; $i++) {
    $autoprefix = str_repeat('../', $i);
    if (file_exists($autoprefix.'autoloader.php')) {
        // we have our path, let's leave
        break;
    }
}

include_once($autoprefix."GameEngine/Database.php");

$adminId = (int) $_POST['admid'];
$id = (int) $_POST['did'];
$wood = max(0, (int) $_POST['wood']);
$clay = max(0, (int) $_POST['clay']);
$iron = max(0, (int) $_POST['iron']);
$crop = max(0, (int) $_POST['crop']);
$maxstore = max(1, (int) $_POST['maxstore']);
$maxcrop = max(1, (int) $_POST['maxcrop']);

$sql = mysqli_query($GLOBALS["link"], "SELECT * FROM ".TB_PREFIX."users WHERE id = ".$adminId."");
$access = mysqli_fetch_array($sql);
$sessionaccess = $access['access'];

if($sessionaccess != 9) die("<h1><font color=\"red\">Access Denied: You are not Admin!</font></h1>");

$village = $database->getVillage($id);
if (empty($village)) {
    die("<h1><font color=\"red\">Village not found.</font></h1>");
}

$wood = min($wood, $maxstore);
$clay = min($clay, $maxstore);
$iron = min($iron, $maxstore);
$crop = min($crop, $maxcrop);

mysqli_query($GLOBALS["link"], "UPDATE ".TB_PREFIX."vdata SET 
	wood = ".$wood.", 
	clay = ".$clay.", 
	iron = ".$iron.", 
	crop = ".$crop.", 
	maxstore = ".$maxstore.", 
	maxcrop = ".$maxcrop."
	WHERE wref = ".$id) or die(mysqli_error($database->dblink));

$database->updateVillage($id);
$database->query("INSERT INTO ".TB_PREFIX."admin_log VALUES (0,".$adminId.",'Edited village resources (did ".$id.")',".time().")");

header("Location: ../../../Admin/admin.php?p=village&did=".$id."");
?>
