<div id="textmenu">
   <a href="spieler.php?uid=<?php if(isset($_GET['uid'])) { echo $_GET['uid']; } else { echo $session->uid; } ?>" <?php if(isset($_GET['uid'])) { echo "class=\"selected\""; } ?>>نمای کلی</a>
 | <span class=none><b>پروفایل</b></span>
 | <span class=none><b>تنظیمات</b></span>
 | <span class=none><b>حساب کاربری</b></span>
 <?php
  if(NEW_FUNCTIONS_VACATION){
 ?>
 | <span class=none><b>حالت تعطیلات</b></span>
 <?php
 }
 if(GP_ENABLE) {
 ?>
 | <span class=none><b>بسته گرافیکی</b></span>
 <?php
 }
 ?>

</div>
