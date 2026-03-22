<?php
if($_SESSION['access'] < 9) die(ACCESS_DENIED_ADMIN);

$announcements = $database->query_return("SELECT * FROM " . TB_PREFIX . "announcements ORDER BY time DESC");
?>
<h2><center>Manage Announcements</center></h2>
<form action="../GameEngine/Admin/Mods/announcements.php" method="POST">
    <table id="profile" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th colspan="2">Create New Announcement</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Announcement Text (HTML allowed):</td>
                <td><textarea name="text" style="width: 90%; height: 100px;"></textarea></td>
            </tr>
        </tbody>
    </table>
    <center>
        <input type="submit" name="submit" value="Add Announcement">
    </center>
</form>

<br>
<table id="profile" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Text</th>
            <th>Time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($announcements) {
            foreach($announcements as $ann) {
                echo "<tr>";
                echo "<td>".$ann['id']."</td>";
                echo "<td>".$ann['text']."</td>";
                echo "<td>".date('Y-m-d H:i', $ann['time'])."</td>";
                echo "<td><a href='../GameEngine/Admin/Mods/announcements.php?del=".$ann['id']."'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No announcements found</td></tr>";
        }
        ?>
    </tbody>
</table>
