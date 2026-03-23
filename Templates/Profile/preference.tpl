<?php
if(isset($_GET['del']) && is_numeric($_GET['del'])){
	$database->removeLinks($_GET['del'],$session->uid);
	header("Location: spieler.php?s=2");
	exit;
}
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       nalooti      					       		 		  	   ##
##  Version:       01.09.2013 						       	 				   ##
##  Filename       preference.php                                              ##
##  Developed by:  Dzoki                                                       ##
##  Fixed by:      Shadow / Skype : cata7007                                   ##
##  License:       nalooti Project                                            ##
##  Copyright:     nalooti (c) 2010-2013. All rights reserved.                ##
##  URLs:          https://Nalooti.ir 				       	 		   ##
##  Source code:   https://Nalooti.ir	       	               ##
##                                                                             ##
$query = mysqli_query($database->dblink,'SELECT * FROM `' . TB_PREFIX . 'links` WHERE `userid` = ' . (int) $session->uid . ' ORDER BY `pos` ASC') or die(mysqli_error($database->dblink));
$links = [];
while($data = mysqli_fetch_assoc($query)) $links[] = $data;
$last_pos = count($links) > 0 ? end($links)['pos'] : 0;
?>

<h1>پروفایل بازیکن</h1>

<?php include("menu.tpl"); ?>
<?php if(isset($_GET['saved'])) { ?>
<p class="notice">تنظیمات با موفقیت ذخیره شد.</p>
<?php } ?>
<form action="spieler.php?s=2" method="POST">
  <input type="hidden" name="ft" value="p2">
  <table cellpadding="1" cellspacing="1" id="links">
    <thead>
      <tr>
	<th colspan="4">لینک‌های مستقیم</th>
      </tr>
      <tr>
	<td>حذف</td>
	<td>ردیف</td>
	<td>نام لینک</td>
	<td>آدرس لینک</td>
      </tr>
    </thead>      
    <tbody>
	  <?php $i = 0; foreach($links as $link): ?>
      <tr>
	  <td>
	  <a href="spieler.php?del=<?php echo $link['id']; ?>&s=2"><img class="del" src="img/x.gif" alt="حذف" title="حذف"></a>
	  </td>
	 <td class="nr"><input <?php if(!$session->plus){echo"disabled";} ?> class="text" type="text" name="nr<?php print $i; ?>" value="<?php print $link['pos']; ?>" size="1" maxlength="3" /><input type="hidden" name="id<?php print $i; ?>" value="<?php print $link['id']; ?>" /></td>
	 <td class="nam"><input <?php if(!$session->plus){echo"disabled";} ?> class="text" type="text" name="linkname<?php print $i; ?>" value="<?php print $link['name']; ?>" maxlength="30" /></td>
	 <td class="txt"><input <?php if(!$session->plus){echo"disabled";} ?> class="text" type="text" name="linkziel<?php print $i; ?>" value="<?php print $link['url']; ?>" maxlength="255" /></td>          
      </tr>
      <?php ++$i; $last_pos = $link['pos']; endforeach; ?>
      <tr>
	<td></td>
	<td class="nr"><input <?php if(!$session->plus){echo"disabled";} ?> class="text" type="text" name="nr<?php print $i; ?>" value="<?php print ($last_pos + 1); ?>" size="1" maxlength="3"></td>
	<td class="nam"><input <?php if(!$session->plus){echo"disabled";} ?> class="text" type="text" name="linkname<?php print $i; ?>" value="" maxlength="30"></td>
	<td class="txt"><input <?php if(!$session->plus){echo"disabled";} ?> class="text" type="text" name="linkziel<?php print $i; ?>" value="" maxlength="255"></td>
      </tr>
      <tr>
       <td colspan="4"><input type="image" value="" name="s1" id="btn_ok" class="dynamic_img" src="img/x.gif" alt="تایید" /></td>
      </tr>
    </tbody>
  </table>
<table cellpadding="1" cellspacing="1" id="completion" class="set"><thead>
    <tr>
	<th colspan="2">تکمیل خودکار</th>
    </tr>
    <tr>
	<td colspan="2">برای میدان تجمع و بازار استفاده می‌شود.</td>

    </tr>
    </thead><tbody>
    <tr>
	<td class="sel"><input class="check" type="checkbox" name="v1" value="1" <?php if(!isset($session->userinfo['pref_autocomplete_own']) || $session->userinfo['pref_autocomplete_own']) echo 'checked'; ?>></td>
	<td>دهکده‌های خودی</td>
    </tr>
    <tr>
	<td class="sel"><input class="check" type="checkbox" name="v2" value="1" <?php if(!empty($session->userinfo['pref_autocomplete_near'])) echo 'checked'; ?>></td>

	<td>دهکده‌های اطراف</td>
    </tr>
    <tr>
	<td class="sel"><input class="check" type="checkbox" name="v3" value="1" <?php if(!empty($session->userinfo['pref_autocomplete_alliance'])) echo 'checked'; ?>></td>
	<td>دهکده‌های اعضای اتحاد</td>
    </tr>
    </tbody></table><table cellpadding="1" cellspacing="1" id="big_map" class="set"><thead>
    <tr>

	<th colspan="2">نقشه بزرگ</th>
    </tr>
    </thead><tbody>
    <tr>
	<td class="sel"><input class="check" type="checkbox" name="map" <?php if(!empty($session->userinfo['pref_large_map'])) echo 'checked'; ?>></td>
	<td>نمایش نقشه بزرگ در یک پنجره جداگانه.</td>
    </tr>
    </tbody>

    </table><table cellpadding="1" cellspacing="1" id="report_filter" class="set"><thead>
    <tr>
	<th colspan="2">فیلتر گزارش‌ها</th>
    </tr>
    </thead><tbody>
    <tr>
	<td class="sel"><input class="check" type="checkbox" name="v4" value="1" <?php if(!empty($session->userinfo['pref_report_own'])) echo 'checked'; ?>></td>
	<td>برای ارسال منابع به دهکده‌های خودی گزارش نمایش داده نشود.</td>

    </tr>
    <tr>
	<td class="sel"><input class="check" type="checkbox" name="v5" value="1" <?php if(!empty($session->userinfo['pref_report_foreign_to'])) echo 'checked'; ?>></td>
	<td>برای ارسال منابع به دهکده‌های دیگران گزارش نمایش داده نشود.</td>
    </tr>
    <tr>
	<td class="sel"><input class="check" type="checkbox" name="v6" value="1" <?php if(!empty($session->userinfo['pref_report_foreign_from'])) echo 'checked'; ?>></td>
	<td>برای دریافت منابع از دهکده‌های دیگران گزارش نمایش داده نشود.</td>

    </tr>
    </tbody>
    </table><table cellpadding="1" cellspacing="1" id="time" class="set"><thead>
<tr>
    <th colspan="2">تنظیمات زمان</th>
</tr>
<tr>
    <td colspan="2">در این بخش می‌توانید زمان نمایش داده‌شده در تراوین را با منطقه زمانی خود هماهنگ کنید.</td>
</tr>
</thead><tbody>

<tr>
    <th>منطقه‌های زمانی</th>
    <td><select name="timezone" class="dropdown">
	<?php $selectedTimezone = isset($session->userinfo['pref_timezone']) ? (string)$session->userinfo['pref_timezone'] : '99'; ?>
	<optgroup label="منطقه‌های زمانی محلی"><option value="495" <?php if($selectedTimezone === '495') echo 'selected="selected"'; ?>>اروپا</option>
<option value="99" <?php if($selectedTimezone === '99') echo 'selected="selected"'; ?>>بریتانیا</option>
<option value="492" <?php if($selectedTimezone === '492') echo 'selected="selected"'; ?>>ترکیه</option>
<option value="328" <?php if($selectedTimezone === '328') echo 'selected="selected"'; ?>>Asia/Kolkata</option>
<option value="345" <?php if($selectedTimezone === '345') echo 'selected="selected"'; ?>>Asia/Bangkok</option>

<option value="257" <?php if($selectedTimezone === '257') echo 'selected="selected"'; ?>>USA/New York</option>
<option value="189" <?php if($selectedTimezone === '189') echo 'selected="selected"'; ?>>USA/Chicago</option>
<option value="474" <?php if($selectedTimezone === '474') echo 'selected="selected"'; ?>>نیوزیلند</option></optgroup><optgroup label="منطقه‌های زمانی عمومی"><option value="12" <?php if($selectedTimezone === '12') echo 'selected="selected"'; ?>>UTC-11</option>
	   <option value="13">UTC-10</option>
	   <option value="14">UTC-9</option>
	   <option value="15">UTC-8</option>
	   <option value="16">UTC-7</option>

	   <option value="17">UTC-6</option>
	   <option value="18">UTC-5</option>
	   <option value="19">UTC-4</option>
	   <option value="20">UTC-3</option>
	   <option value="21">UTC-2</option>
	   <option value="22">UTC-1</option>

	   <option value="23">UTC</option>
	   <option value="0">UTC+1</option>
	   <option value="1">UTC+2</option>
	   <option value="2">UTC+3</option>
	   <option value="3">UTC+4</option>
	   <option value="4">UTC+5</option>

	   <option value="5">UTC+6</option>
	   <option value="6">UTC+7</option>
	   <option value="7">UTC+8</option>
	   <option value="8">UTC+9</option>
	   <option value="9">UTC+10</option>
	   <option value="10">UTC+11</option>

	   <option value="11">UTC+12</option>
	   
	</optgroup></select>

    </td>
</tr><tr>
    <th>فرمت تاریخ</th>
    <td>
	<?php $selectedTimeFormat = isset($session->userinfo['pref_tformat']) ? (string)$session->userinfo['pref_tformat'] : '0'; ?>
	<label><input class="radio" type="Radio" name="tformat" value="0" <?php if($selectedTimeFormat === '0') echo 'checked'; ?>> اروپا (dd.mm.yy 24h)</label><br />

	<label><input class="radio" type="Radio" name="tformat" value="1" <?php if($selectedTimeFormat === '1') echo 'checked'; ?>> آمریکا (mm/dd/yy 12h)</label><br />
	<label><input class="radio" type="Radio" name="tformat" value="2" <?php if($selectedTimeFormat === '2') echo 'checked'; ?>> بریتانیا (dd/mm/yy 12h)</label><br />
	<label><input class="radio" type="Radio" name="tformat" value="3" <?php if($selectedTimeFormat === '3') echo 'checked'; ?>> ISO (yy/mm/dd 24h)</label>
    </td>
</tr>
</tbody>
</table>
<p class="btn"><input type="image" value="" name="s1" id="btn_ok" class="dynamic_img" src="img/x.gif" alt="تایید" /></p>

</form> 
