<h1>پروفایل بازیکن</h1>

<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       nalooti      					       		 		  	   ##
##  Version:       01.09.2013 						       	 				   ##
##  Filename       profile.php                                                 ##
##  Developed by:  Dzoki                                                       ##
##  Fixed by:      Shadow / Skype : cata7007                                   ##
##  License:       nalooti Project                                            ##
##  Copyright:     nalooti (c) 2010-2013. All rights reserved.                ##
##  URLs:          https://Nalooti.ir 				       	 		   ##
##  Source code:   https://Nalooti.ir		    	       	   ##
##                                                                             ##
#################################################################################


$varmedal = $database->getProfileMedal($session->uid);

include("menu.tpl"); ?>
<form action="spieler.php" method="POST">
    <input type="hidden" name="ft" value="p1" />
    <input type="hidden" name="id" value="<?php echo (isset($id) ? $id : ''); ?>" />

    <table cellpadding="1" cellspacing="1" id="edit" ><thead>
    <tr>
        <th colspan="3">بازیکن <?php echo $session->username; ?> </th>
    </tr>
    <tr>
        <td colspan="2">مشخصات</td>

        <td>توضیحات</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="2" class="empty"></td><td class="empty"></td></tr>
    <tr>
    <?php
    if($session->userinfo['birthday'] != 0) {
   $bday = explode("-",$session->userinfo['birthday']);
   }
   else {
   $bday = array('','','');
   }
   ?>
    <th>تاریخ تولد</th><td class="birth"><input tabindex="1" class="text day" type="text" name="tag" value="<?php echo $bday[2]; ?>" maxlength="2" /> <select tabindex="2" name="monat" size="" class="dropdown">

                <option value="0"></option><option value="1" <?php if($bday[1] == 1) { echo "selected"; } ?>>ژانویه</option><option value="2"<?php if($bday[1] == 2) { echo "selected"; } ?>>فوریه</option><option value="3"<?php if($bday[1] == 3) { echo "selected"; } ?>>مارس</option><option value="4"<?php if($bday[1] == 4) { echo "selected"; } ?>>آوریل</option><option value="5"<?php if($bday[1] == 5) { echo "selected"; } ?>>مه</option><option value="6"<?php if($bday[1] == 6) { echo "selected"; } ?>>ژوئن</option><option value="7"<?php if($bday[1] == 7) { echo "selected"; } ?>>ژوئیه</option><option value="8"<?php if($bday[1] == 8) { echo "selected"; } ?>>اوت</option><option value="9"<?php if($bday[1] == 9) { echo "selected"; } ?>>سپتامبر</option><option value="10"<?php if($bday[1] == 10) { echo "selected"; } ?>>اکتبر</option><option value="11"<?php if($bday[1] == 11) { echo "selected"; } ?>>نوامبر</option><option value="12"<?php if($bday[1] == 12) { echo "selected"; } ?>>دسامبر</option></select> <input tabindex="3" type="text" name="jahr" value="<?php echo $bday[0]; ?>" maxlength="4" class="text year"></td>
    <?php
	$varray = $database->getProfileVillages($session->uid);
	$rowspan = 7+count($varray);
	?>
    <td rowspan="<?php echo $rowspan; ?>" class="desc1"><textarea tabindex="7" name="be1"><?php echo $session->userinfo['desc2']; ?></textarea></td></tr>

    <tr><th>جنسیت</th>
    <td class="gend">
        <label><input class="radio" type="radio" name="mw" value="0" <?php if($session->userinfo['gender'] == 0) { echo "checked"; } ?> tabindex="4">نامشخص</label>
        <label><input class="radio" type="radio" name="mw" value="1" <?php if($session->userinfo['gender'] == 1) { echo "checked"; } ?> >مرد</label>
        <label><input class="radio" type="radio" name="mw" value="2" <?php if($session->userinfo['gender'] == 2) { echo "checked"; } ?> >زن</label>
    </td></tr>

    <tr><th>موقعیت</th><td><input tabindex="5" type="text" name="ort" value="<?php echo $session->userinfo['location']; ?>" maxlength="30" class="text"></td></tr>


    <tr><td colspan="2" class="empty"></td></tr>
    <?php
    for($i=0;$i<=count($varray)-1;$i++) {
    echo "<tr><th>نام دهکده</th><td><input tabindex=\"6\" type=\"text\" name=\"dname$i\" value=\"".$varray[$i]['name']."\" maxlength=\"30\" class=\"text\"></td></tr>";
    }
    ?>
    <tr><td colspan="2" class="desc2"><textarea tabindex="8" name="be2"><?php echo $session->userinfo['desc1']; ?></textarea></td></tr>
    </table>


	<p>
		<table cellspacing="1" cellpadding="2" class="tbg">
		<tr><td class="rbg" colspan="4">مدال‌ها</td></tr>
		<tr>
			<td>دسته‌بندی</td>
			<td>رتبه</td>
			<td>هفته</td>
			<td>BB-Code</td>
		</tr>
				<?php

	foreach($varmedal as $medal) {
	$titel="پاداش";
	switch ($medal['categorie']) {
    case "1":
        $titel="مهاجم هفته";
        break;
    case "2":
        $titel="مدافع هفته";
        break;
    case "3":
        $titel="بیشترین رشد جمعیت هفته";
        break;
    case "4":
        $titel="غارتگر هفته";
        break;
    case "5":
        $titel="جزو 10 نفر برتر همزمان در مهاجمان و مدافعان";
        break;
    case "6":
        $titel="3 مهاجم برتر برای ".$medal['points']." هفته پیاپی";
        break;
    case "7":
        $titel="3 مدافع برتر برای ".$medal['points']." هفته پیاپی";
        break;
    case "8":
        $titel="3 بازیکن برتر رشد جمعیت برای ".$medal['points']." هفته پیاپی";
        break;
    case "9":
        $titel="3 غارتگر برتر برای ".$medal['points']." هفته پیاپی";
        break;
    case "10":
        $titel="بیشترین صعود رتبه در هفته";
        break;
    case "11":
        $titel="3 صعودکننده برتر رتبه برای ".$medal['points']." هفته پیاپی";
        break;
    case "12":
        $titel="10 مهاجم برتر برای ".$medal['points']." هفته پیاپی";
        break;
	case "13":
        $titel="10 مدافع برتر برای ".$medal['points']." هفته پیاپی";
        break;
	case "14":
        $titel="10 بازیکن برتر رشد جمعیت برای ".$medal['points']." هفته پیاپی";
        break;
	case "15":
        $titel="10 غارتگر برتر برای ".$medal['points']." هفته پیاپی";
        break;
	case "16":
        $titel="10 صعودکننده برتر رتبه برای ".$medal['points']." هفته پیاپی";
        break;
	}
				 echo"<tr>
				   <td> ".$titel."</td>
				   <td>".$medal['plaats']."</td>
				   <td>".$medal['week']."</td>
				   <td>[#".$medal['id']."]</td>
			 	 </tr>";
				 } ?>
				 <tr>
				   <td>محافظت تازه‌وارد</td>
				   <td></td>
				   <td></td>
				   <td>[#0]</td>
			 	 </tr>
				 <?php
				 if(NEW_FUNCTIONS_MEDAL_3YEAR){
					 echo "<tr>
						<td>کهنه‌سرباز</td>
						<td></td>
						<td></td>
						<td>[#g2300]</td>
					 </tr>";
				 }
				 
				 if(NEW_FUNCTIONS_MEDAL_5YEAR){
					 echo "<tr>
						<td>کهنه‌سرباز 5 ساله</td>
						<td></td>
						<td></td>
						<td>[#g2301]</td>
					 </tr>";
				 }
				 
				 if(NEW_FUNCTIONS_MEDAL_10YEAR){
					 echo "<tr>
						<td>کهنه‌سرباز 10 ساله</td>
						<td></td>
						<td></td>
						<td>[#g2302]</td>
					 </tr>";
				 }
				 
				if(NEW_FUNCTIONS_TRIBE_IMAGES){
					if($session->userinfo['tribe'] == 1){
						echo"<tr><td>قوم رومی‌ها</td><td></td><td></td><td>[#roman]</td></tr>";
					}elseif($session->userinfo['tribe'] == 2){
						echo"<tr><td>قوم توتون‌ها</td><td></td><td></td><td>[#teuton]</td></tr>";
					}elseif($session->userinfo['tribe'] == 3){
						echo"<tr><td>قوم گل‌ها</td><td></td><td></td><td>[#gaul]</td></tr>";
					}
				}
				if(NEW_FUNCTIONS_MHS_IMAGES){
					if($session->userinfo['access'] == 9){
						echo"<tr><td>مدیر</td><td></td><td></td><td>[#MULTIHUNTER]</td></tr>";
						echo"<tr><td>مدیر</td><td></td><td></td><td>[#MH]</td></tr>";
						echo"<tr><td>مدیر</td><td></td><td></td><td>[#TEAM]</td></tr>";
					}elseif($session->userinfo['access'] == 8){
						echo"<tr><td>مولتی‌هانتر</td><td></td><td></td><td>[#MULTIHUNTER]</td></tr>";
						echo"<tr><td>مولتی‌هانتر</td><td></td><td></td><td>[#MH]</td></tr>";
						echo"<tr><td>مولتی‌هانتر</td><td></td><td></td><td>[#TEAM]</td></tr>";
					}
				}
				if($session->userinfo['username'] == "Shadow"){
					echo"<tr><td>Shadow</td><td></td><td></td><td>[#SHADOW]</td></tr>";
					echo"<tr><td>Shadow</td><td></td><td></td><td>[#MH]</td></tr>";
					echo"<tr><td>Shadow</td><td></td><td></td><td>[#TEAM]</td></tr>";
					echo"<tr><td>Shadow</td><td></td><td></td><td>[#EVENT]</td></tr>";
				}?>
				 </table></p>


	<p class="btn"><input type="image" value="" tabindex="9" name="s1" id="btn_ok" class="dynamic_img" src="img/x.gif" alt="تایید" /></p>
    </form>
