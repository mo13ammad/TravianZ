<?php if(NEW_FUNCTIONS_VACATION){
?>
<h1>پروفایل بازیکن</h1>

<?php 

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       nalooti      					       		 		  	   ##
##  Version:       01.09.2013 						       	 				   ##
##  Filename       vacation.php                                                ##
##  Developed by:  Advocaite                                                   ##
##  Fixed by:      Shadow / Skype : cata7007                                   ##
##  License:       nalooti Project                                            ##
##  Copyright:     nalooti (c) 2010-2013. All rights reserved.                ##
##  URLs:          https://Nalooti.ir 				       	 		   ##
##  Source code:   https://Nalooti.ir         	       	   ##
##                                                                             ##
#################################################################################

include("menu.tpl"); ?>
<form action="spieler.php" method="POST">
<input type="hidden" name="ft" value="p4">

<table cellpadding="1" cellspacing="1" id="del_acc" class="account"><thead>
<tr>
    <th colspan="2">حالت تعطیلات</th>

</tr>
</thead><tbody>
<tr>
	<td class="note" colspan="2">اگر برای مدتی طولانی از بازی دور هستید و نمی‌خواهید نشسته تعیین کنید، می‌توانید حساب خود را وارد حالت تعطیلات کنید. در این مدت تولید منابع، امتیاز فرهنگی، پژوهش، آموزش نیرو و بیشتر فعالیت‌های حساب متوقف می‌شود و عملاً حساب شما فریز خواهد شد. توجه داشته باشید زمان متوقف نمی‌شود و اگر عضو Gold Club باشید، مدت آن همچنان سپری می‌شود. حداقل زمان تعطیلات 2 روز و حداکثر 14 روز است.</td>
		</tr><tr>
		

<div>
<h4 class="round">توضیح کلی</h4>
	از حالت تعطیلات برای محافظت از دهکده‌های خود هنگام غیبت استفاده کنید.<br/>
	در مدت تعطیلات، این فعالیت‌ها غیرفعال خواهند بود:<br/>
<ul>
<li>ارسال یا دریافت نیرو</li>
<li>شروع ساخت‌وساز جدید</li>
<li>استفاده از بازار</li>
<li>آموزش نیروی جدید</li>
<li>عضویت در اتحاد</li>
<li>حذف حساب کاربری</li>
</ul></div>

<h4 class="round">شرایط</h4>
        <ul>
           <li>هیچ نیرویی در حال حرکت نباشد</li>
		   <li>هیچ نیرویی در مسیر دهکده‌های دیگر نباشد</li>
		   <li>هیچ نیروی کمکی به دهکده‌های دیگر ارسال نشده باشد</li>
		   <li>هیچ بازیکنی نیروی کمکی در دهکده‌های شما نداشته باشد</li>
		   <li>شگفتی جهان نداشته باشید</li>
		   <li>هیچ آرتیفکتی در اختیار نداشته باشید</li>
		   <li>از محافظت بازیکن تازه‌وارد خارج شده باشید</li>
		   <li>هیچ نیرویی در تله‌های شما نباشد</li>
		   <li>حساب شما در فرایند حذف نباشد</li>        
		   </ul>
    </div>
	</div>
</div>


<th>مایل به فعال‌سازی حالت تعطیلات هستید؟</th>
        <td class="del_selection">
            <label><input class="radio" type="radio" name="vac" value="1" /> بله</label>
            <label><input class="text" type="text" name="vac_days" value="2" /></label>
        </td>
    </tr>
  
     </tbody></table>
    <?php
if($form->getError("vac") != "") {
echo "<span class=\"error\">".$form->getError("vac")."</span>";
}
?>
    <p class="btn"><input type="image" value="" name="s1" id="btn_save" class="dynamic_img" src="img/x.gif" alt="ذخیره" /></p>
</form>
<?php
}else{
	header("Location: ".$_SERVER['PHP_SELF']."?uid=".$session->uid);
	exit;
}
?>
