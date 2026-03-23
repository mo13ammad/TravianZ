<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       nalooti      					       		 		  	   ##
##  Version:       01.09.2013 						       	 				   ##
##  Filename       overview.php                                                ##
##  Developed by:  Dzoki                                                       ##
##  Fixed by:      Shadow / Skype : cata7007                                   ##
##  License:       nalooti Project                                            ##
##  Copyright:     nalooti (c) 2010-2013. All rights reserved.                ##
##  URLs:          https://Nalooti.ir 				       	 		   ##
##  Source code:   https://Nalooti.ir	       	   			   ##
##                                                                             ##
#################################################################################

$ranking->procRankReq($_GET);
$_GET['uid'] = preg_replace("/[^0-9]/","",$_GET['uid']);
$displayarray = $database->getUserArray($_GET['uid'],1);


$varmedal = $database->getProfileMedal($_GET['uid']);

$profiel="".$displayarray['desc1']."".md5('skJkev3')."".$displayarray['desc2']."";
require("medal.php");
$profiel=explode("".md5('skJkev3')."", $profiel);

$varray = $database->getProfileVillages($_GET['uid']);
$totalpop = 0;
foreach($varray as $vil) {
    $totalpop += $vil['pop'];
}
?>
<h1>پروفایل بازیکن</h1>

<?php
if($_GET['uid'] == $session->uid) {
if($session->sit == 0){
include("menu.tpl");
}else{
include("menu2.tpl");
}
}
?>
<table id="profile" cellpadding="1" cellspacing="1" >
    <thead>
    <tr>
        <th colspan="2">بازیکن <?php echo $displayarray['username']; ?></th>
    </tr>
<?php 
if($displayarray['access'] == ADMIN) echo "<tr><th colspan='2'><font color='Red'><center><b>این بازیکن مدیر است.</b></font></center></th></tr>";  
if($displayarray['access'] == MULTIHUNTER) echo "<tr><th colspan='2'><font color='Blue'><center><b>این بازیکن مولتی‌هانتر است.</b></font></center></th></tr>";
if($displayarray['access'] == BANNED) echo "<tr><th colspan='2'><font color='Green'><center><b>این بازیکن مسدود شده است.</b></font></center></th></tr>";
if($displayarray['vac_mode'] == 1) echo "<tr><th colspan='2'><font color='Maroon'><center><b>این بازیکن در حالت تعطیلات است.</b></font></center></th></tr>"; 
?>
    <tr>
        <td>مشخصات</td>
        <td>توضیحات</td>

    </tr>
    </thead><tbody>
    <tr>
        <td class="empty"></td><td class="empty"></td>
    </tr>
    <tr>
        <td class="details">
            <table cellpadding="0" cellspacing="0">
 
<?php if($displayarray['access'] == BANNED){ echo "<tr><td colspan='2'><center><b>مسدود</b></center></td></tr>"; } ?>

			<tr>

                <th>رتبه</th>
                <td><?php echo $ranking->getUserRank($displayarray['id']); ?></td>
            </tr>
            <tr>
                <th>قوم</th>
                <td><?php 
                $tribeArrays = [TRIBE1, TRIBE2, TRIBE3, TRIBE4, TRIBE5];
                echo $tribeArrays[$displayarray['tribe'] - 1];
                ?></td>
            </tr>

            <tr>
                <th>اتحاد</th>
                <td><?php
                if($displayarray['alliance'] == 0) echo "-";
                else 
                {
                $displayalliance = $database->getAllianceName($displayarray['alliance']);
                echo "<a href=\"allianz.php?aid=".$displayarray['alliance']."\">".$displayalliance."</a>";
                } ?></td>
            </tr>
            <tr>
                <th>دهکده‌ها</th>
                <td><?php echo count($varray);?></td>

            </tr>
            <tr>
                <th>جمعیت</th>
                <td><?php echo $totalpop; ?></td>
            </tr>
            <?php 
			if(isset($displayarray['birthday']) && $displayarray['birthday'] != 0) {
			    $age = date('Y') - substr($displayarray['birthday'], 0, 4);
				if ((date('m') - substr($displayarray['birthday'], 5, 2)) < 0) $age --;
				elseif ((date('m') - substr($displayarray['birthday'], 5, 2)) == 0){
					if(date('d') < substr($displayarray['birthday'], 8, 2)) $age --;
				}
            echo "<tr><th>سن</th><td>$age</td></tr>";
            }
            if(isset($displayarray['gender']) && $displayarray['gender'] != 0) {
                $gender = ($displayarray['gender']== 1)? "مرد" : "زن";
                echo "<tr><th>جنسیت</th><td>".$gender."</td></tr>";
            }
            if($displayarray['location'] != "") {
                echo "<tr><th>موقعیت</th><td>".$displayarray['location']."</td></tr>";
            }
            ?>
            <tr>
                <td colspan="2" class="empty"></td>
            </tr>
            <tr>
				<?php if(preg_replace("/[^0-9]/","",$_GET['uid']) == $session->uid) {
				if($session->sit == 0){
                echo "<td colspan=\"2\"> <a href=\"spieler.php?s=1\">&raquo; ویرایش پروفایل</a></td>";
				}else{
                echo "<td colspan=\"2\"> <span class=none><b>&raquo; ویرایش پروفایل</b></span></td>";
				}
                } else {
             echo "<td colspan=\"2\"> <a href=\"nachrichten.php?t=1&amp;id=".$_GET['uid']."\">&raquo; ارسال پیام</a></td>";
			 }
                ?>                
            </tr>
            <tr>
							<td colspan="2" class="desc2">
								<div class="desc2div"><?php echo nl2br($profiel[0]); ?></div>
							</td>
						</tr>
            </table>

        </td>
        <td class="desc1" >
            <div class="desc1div"><?php echo nl2br($profiel[1]); ?>
            
            </div>
        </td>
    </tr>
    </tbody>
</table>

<table cellpadding="1" cellspacing="1" id="villages">
<thead>
	 <tr>
		<th colspan="<?php echo NEW_FUNCTIONS_OASIS ? 4 : 3; ?>">دهکده‌ها</th>
     </tr>
     <tr>
    	<td>نام</td>
    	<?php if(NEW_FUNCTIONS_OASIS){ ?> 	
    	<td>اُسیس</td>
    	<?php } ?>	
    	<td>جمعیت</td>
    	<td>مختصات</td>	
	</tr>
</thead>
<tbody>
<?php 
        foreach($varray as $vil) {
            $hasArtifact = $database->villageHasArtefact($vil['wref']);
            $coor = $database->getCoor($vil['wref']);
            echo "<tr><td class=\"nam\"><a href=\"karte.php?d=".$vil['wref']."&amp;c=".$generator->getMapCheck($vil['wref'])."\">".$vil['name']."</a>";
            if($vil['capital'] == 1) echo "<span class=\"none3\"> (پایتخت)</span>";
            if(NEW_FUNCTIONS_DISPLAY_ARTIFACT){
                if($hasArtifact) echo "<span class=\"none3\"> (آرتیفکت)</span>";
            }
			if(NEW_FUNCTIONS_DISPLAY_WONDER){
				if($vil['natar'] == 1) echo "<span class=\"none3\"> (شگفتی جهان)</span>";
			}
            
            if(NEW_FUNCTIONS_OASIS){
                echo "<td class=\"hab\">";
                $oases = $database->getOasis($vil['wref']);
                foreach ($oases as $oasis) {
                    switch ($oasis['type']) {
                        case 1:
                        case 2:
                            echo "<img class='r100' src='img/x.gif' title='+25% چوب'> ";
                            break;
                        case 3:
                            echo "<img class='r200' src='img/x.gif' title='+25% چوب +25% گندم'> ";
                            break;
                        case 4:
                        case 5:
                            echo "<img class='r400' src='img/x.gif' title='+25% خشت'> ";
                            break;
                        case 6:
                            echo "<img class='r500' src='img/x.gif' title='+25% خشت +25% گندم'> ";
                            break;
                        case 7:
                        case 8:
                            echo "<img class='r700' src='img/x.gif' title='+25% آهن'> ";
                            break;
                        case 9:
                            echo "<img class='r800' src='img/x.gif' title='+25% آهن +25% گندم'> ";
                            break;
                        case 10:
                        case 11:
                            echo "<img class='r1000' src='img/x.gif' title='+25% گندم'> ";
                            break;
                        case 12:
                            echo "<img class='r1100' src='img/x.gif' title='+50% گندم'> ";
                            break;
                    }
                }
                echo "</td>";
            }      
            echo "<td class=\"hab\">".$vil['pop']."</td><td class=\"aligned_coords\">";
            echo "<div class=\"cox\">(".$coor['x']."</div><div class=\"pi\">|</div><div class=\"coy\">".$coor['y'].")</div></td></tr>";
        }
        echo "</tbody></table>";
?>
