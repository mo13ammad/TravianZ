<?php


#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       nalooti      					       		 		  	   ##
##  Version:       01.09.2013 						       	 				   ##
##  Filename       medal.php                                                   ##
##  Developed by:  Dzoki                                                       ##
##  Fixed by:      Shadow / Skype : cata7007                                   ##
##  License:       nalooti Project                                            ##
##  Copyright:     nalooti (c) 2010-2013. All rights reserved.                ##
##  URLs:          https://Nalooti.ir 				       	 		   ##
##  Source code:   https://Nalooti.ir	       	   ##
##                                                                             ##
#################################################################################


    $separator=isset($separator)? $separator:"";
    $gpack_load=isset($user['gpack'])? $user['gpack']:$database->getUserField($_SESSION['username'], 'gpack', 1);
    if($gpack_load== null || GP_ENABLE == false) {
    $gpack= $separator.GP_LOCATE;
    } else {
    $gpack= $separator.$gpack_load;
    }

if($displayarray['protect'] > time()){
$secondsDiff      = $displayarray['protect'] - time();
$remainingDay     = floor($secondsDiff/(3600*24));

$left = \App\Utils\DateTime::getTimeFormat($secondsDiff);
$profiel = preg_replace("/\[#0]/is",'<img src="'.$gpack.'img/t/tn.gif" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>این بازیکن '.$left.' دیگر تحت محافظت تازه‌وارد است.</td></tr></table>\')">', $profiel, 1);
} else {
$geregistreerd=date('d.m.Y', ($displayarray['regtime']));
$profiel = preg_replace("/\[#0]/is",'<img src="'.$gpack.'img/t/tnd.gif" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>این بازیکن در تاریخ '.$geregistreerd.' ثبت‌نام کرده است.</td></tr></table>\')">', $profiel, 1);
}

if($displayarray['username'] == "Natars"){
$profiel = preg_replace("/\[#natars]/is",'<img src="'.$gpack.'img/t/t10_2.jpg" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>حساب رسمی ناتارها</td></tr></table>\')">', $profiel, 1);
$profiel = preg_replace("/\[#WW]/is",'<img src="'.$gpack.'img/t/g40_11-ltr.png" width="250" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>دهکده رسمی شگفتی جهان</td></tr></table>\')">', $profiel, 1);
}

if(NEW_FUNCTIONS_TRIBE_IMAGES){
    if($displayarray['tribe'] == "1"){
        $profiel = preg_replace("/\[#roman]/is",'<img src="'.$gpack.'../../img/rpage/Roman1.jpg" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>رومی‌ها: به دلیل پیشرفت اجتماعی و فناوری بالا، در ساخت‌وساز و هماهنگی بسیار قدرتمند هستند. نیروهای آن‌ها از واحدهای نخبه تراوین به‌شمار می‌روند و در حمله و دفاع تعادل خوبی دارند.</td></tr></table>\')">', $profiel, 1);
    }elseif($displayarray['tribe'] == "2"){
        $profiel = preg_replace("/\[#teuton]/is",'<img src="'.$gpack.'../../img/rpage/Teuton1.jpg" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>توتون‌ها: تهاجمی‌ترین قوم بازی هستند. نیروهایشان به خشم و قدرت یورش معروف‌اند و مانند یک گروه غارتگر بی‌باک حرکت می‌کنند.</td></tr></table>\')">', $profiel, 1);
    }elseif($displayarray['tribe'] == "3"){
        $profiel = preg_replace("/\[#gaul]/is",'<img src="'.$gpack.'../../img/rpage/Gaul1.jpg" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>گل‌ها: صلح‌طلب‌ترین قوم تراوین هستند. نیروهایشان در دفاع عالی‌اند، اما در حمله هم توان رقابت دارند. سواره‌نظام آن‌ها به سرعت بالا و ضربات دقیق مشهور است.</td></tr></table>\')">', $profiel, 1);
    }
}

if($displayarray['username'] == "Shadow"){
$profiel = preg_replace("/\[#SHADOW]/is",'<img src="'.$gpack.'img/t/shadow.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>مدیر رسمی سرور</td></tr></table>\')">', $profiel, 1);
$profiel = preg_replace("/\[#MH]/is",'<img src="'.$gpack.'img/t/MH.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>مولتی‌هانتر یکی از نقش‌های رسمی تراوین برای نظارت بر اجرای قوانین سرور است. مولتی‌هانترها معمولاً با حسابی مخصوص فعالیت می‌کنند و اجازه بازی عادی روی همان سرور را ندارند.</td></tr></table>\')">', $profiel, 1);
$profiel = preg_replace("/\[#TEAM]/is",'<img src="'.$gpack.'img/t/team.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>عضو تیم رسمی تراوین</td></tr></table>\')">', $profiel, 1);
$profiel = preg_replace("/\[#EVENT]/is",'<img src="'.$gpack.'img/t/t10_1.jpg" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>شما در رویداد Travian Hammelburg شرکت کرده‌اید. تبریک!</td></tr></table>\')">', $profiel, 1);
}

if($displayarray['username'] == "Shadow"){
$profiel = preg_replace("/\[#WWBUILDER]/is",'<img src="'.$gpack.'img/t/builderWW.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>کشور:</td><td>Romania</td></tr><tr><td>دسته:</td><td>شگفتی جهان</td></tr><tr><td>نام:</td><td>Shadow</td></tr><tr><td>قوم:</td><td>رومی‌ها</td></tr><tr><td>مرحله شگفتی:</td><td>80</td></tr></table>\')">', $profiel, 1);
$profiel = preg_replace("/\[#WINNERWW]/is",'<img src="'.$gpack.'img/t/winnerww.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>کشور:</td><td>Romania</td></tr><tr><td>دسته:</td><td>شگفتی جهان</td></tr><tr><td>نام:</td><td>Shadow</td></tr><tr><td>قوم:</td><td>رومی‌ها</td></tr><tr><td>مرحله شگفتی:</td><td>100</td></tr></table>\')">', $profiel, 1);
$profiel = preg_replace("/\[#OFFENSIVE]/is",'<img src="'.$gpack.'img/t/Offensive_1.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>کشور:</td><td>Romania</td></tr><tr><td>دسته:</td><td>تهاجمی</td></tr><tr><td>نام:</td><td>Shadow</td></tr><tr><td>قوم:</td><td>رومی‌ها</td></tr><tr><td>رتبه:</td><td>1</td></tr></table>\')">', $profiel, 1);
$profiel = preg_replace("/\[#DEFENSIVE]/is",'<img src="'.$gpack.'img/t/Defensive_1.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>کشور:</td><td>Romania</td></tr><tr><td>دسته:</td><td>دفاعی</td></tr><tr><td>نام:</td><td>Shadow</td></tr><tr><td>قوم:</td><td>رومی‌ها</td></tr><tr><td>رتبه:</td><td>1</td></tr></table>\')">', $profiel, 1);
$profiel = preg_replace("/\[#POPULATION]/is",'<img src="'.$gpack.'img/t/Population_1.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>کشور:</td><td>Romania</td></tr><tr><td>دسته:</td><td>جمعیت</td></tr><tr><td>نام:</td><td>Shadow</td></tr><tr><td>قوم:</td><td>رومی‌ها</td></tr><tr><td>رتبه:</td><td>1</td></tr></table>\')">', $profiel, 1);
}

if(NEW_FUNCTIONS_MHS_IMAGES){
	if($displayarray['access'] == "9"){
		$profiel = preg_replace("/\[#MULTIHUNTER]/is",'<img src="'.$gpack.'img/t/t6_1.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>مولتی‌هانتر رسمی سراسری سرور</td></tr></table>\')">', $profiel, 1);
		$profiel = preg_replace("/\[#MH]/is",'<img src="'.$gpack.'img/t/MH.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>مولتی‌هانتر یکی از نقش‌های رسمی تراوین برای نظارت بر اجرای قوانین سرور است.</td></tr></table>\')">', $profiel, 1);
		$profiel = preg_replace("/\[#TEAM]/is",'<img src="'.$gpack.'img/t/team.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>عضو تیم رسمی تراوین</td></tr></table>\')">', $profiel, 1);
	}elseif($displayarray['access'] == "8"){
		$profiel = preg_replace("/\[#MULTIHUNTER]/is",'<img src="'.$gpack.'img/t/t6_1.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>مولتی‌هانتر رسمی سراسری سرور</td></tr></table>\')">', $profiel, 1);
		$profiel = preg_replace("/\[#MH]/is",'<img src="'.$gpack.'img/t/MH.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>مولتی‌هانتر یکی از نقش‌های رسمی تراوین برای نظارت بر اجرای قوانین سرور است.</td></tr></table>\')">', $profiel, 1);
		$profiel = preg_replace("/\[#TEAM]/is",'<img src="'.$gpack.'img/t/team.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>عضو تیم رسمی تراوین</td></tr></table>\')">', $profiel, 1);
	}
}

if($displayarray['username'] == "Nature"){
$profiel = preg_replace("/\[#NATURE]/is",'<img src="'.$gpack.'img/t/nature.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>نیروهای طبیعت همان حیوانات ساکن در اُسیس‌های اشغال‌نشده هستند. برای سنجش شانس پیروزی روی آن‌ها می‌توانید از شبیه‌ساز نبرد استفاده کنید.</td></tr></table>\')">', $profiel, 1);
}

if($displayarray['username'] == "Taskmaster"){
$profiel = preg_replace("/\[#TASKMASTER]/is",'<img src="'.$gpack.'img/t/taskmaster.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>حساب Taskmaster</td></tr></table>\')">', $profiel, 1);
}

if(NEW_FUNCTIONS_MEDAL_3YEAR){
	$profiel = preg_replace("/\[#g2300]/is",'<img src="'.$gpack.'img/t/Veteran_Medal.jpg" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>بازیکن کهنه‌سرباز<br><br>مدالی برای 3 سال بازی در تراوین.</td></tr></table>\')">', $profiel, 1);
}
if(NEW_FUNCTIONS_MEDAL_5YEAR){
	$profiel = preg_replace("/\[#g2301]/is",'<img src="'.$gpack.'img/t/5year_medal.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>بازیکن کهنه‌سرباز 5 ساله<br><br>مدالی برای 5 سال بازی در تراوین.</td></tr></table>\')">', $profiel, 1);
}
if(NEW_FUNCTIONS_MEDAL_10YEAR){
	$profiel = preg_replace("/\[#g2302]/is",'<img src="'.$gpack.'img/t/10_year_medal.png" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>بازیکن کهنه‌سرباز 10 ساله<br><br>مدالی برای 10 سال بازی در تراوین.</td></tr></table>\')">', $profiel, 1);
}

foreach($varmedal as $medal) {

switch ($medal['categorie']) {
    case "1":
        $titel="مهاجمان هفته";
		$woord="امتیاز";
        break;
    case "2":
        $titel="مدافعان هفته";
 		$woord="امتیاز";
       break;
    case "3":
        $titel="بیشترین رشد جمعیت هفته";
 		$woord="جمعیت";
       break;
    case "4":
        $titel="غارتگران هفته";
		$woord="منابع";
        break;
	case "5":
        $titel="این مدال نشان می‌دهد که شما همزمان در بین 10 مهاجم و 10 مدافع برتر هفته بوده‌اید.";
        $bonus[$medal['id']]=1;
		break;
	case "6":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 3 مهاجم برتر بوده‌اید.";
        $bonus[$medal['id']]=1;
		break;
	case "7":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 3 مدافع برتر بوده‌اید.";
        $bonus[$medal['id']]=1;
		break;
	case "8":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 3 بازیکن برتر رشد جمعیت بوده‌اید.";
        $bonus[$medal['id']]=1;
		break;
	case "9":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 3 غارتگر برتر بوده‌اید.";
        $bonus[$medal['id']]=1;
		break;
    case "10":
        $titel="بیشترین صعود رتبه در هفته";
        $woord="رتبه";
        break;
    case "11":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 3 صعودکننده برتر رتبه بوده‌اید.";
        $bonus[$medal['id']]=1;
        break;
    case "12":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 10 مهاجم برتر بوده‌اید.";
        $bonus[$medal['id']]=1;
        break;
    case "13":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 10 مدافع برتر بوده‌اید.";
        $bonus[$medal['id']]=1;
        break;
    case "14":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 10 بازیکن برتر رشد جمعیت بوده‌اید.";
        $bonus[$medal['id']]=1;
        break;
    case "15":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 10 غارتگر برتر بوده‌اید.";
        $bonus[$medal['id']]=1;
        break;
    case "16":
        $titel="این مدال نشان می‌دهد که شما ".$medal['points']." هفته پیاپی جزو 10 صعودکننده برتر رتبه بوده‌اید.";
        $bonus[$medal['id']]=1;
        break;
}

if(isset($bonus[$medal['id']])){
$profiel = preg_replace("/\[#".$medal['id']."]/is",'<img src="'.$gpack.'img/t/'.$medal['img'].'.jpg" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>'.$titel.'<br /><br />دریافت در هفته: '.$medal['week'].'</td></tr></table>\')">', $profiel, 1);
} else {
$profiel = preg_replace("/\[#".$medal['id']."]/is",'<img src="'.$gpack.'img/t/'.$medal['img'].'.jpg" border="0" onmouseout="med_closeDescription()" onmousemove="med_mouseMoveHandler(arguments[0],\'<table><tr><td>دسته:</td><td>'.$titel.'</td></tr><tr><td>هفته:</td><td>'.$medal['week'].'</td></tr><tr><td>رتبه:</td><td>'.$medal['plaats'].'</td></tr><tr><td>'.$woord.':</td><td>'.$medal['points'].'</td></tr></table>\')">', $profiel, 1);
}
}

?>
