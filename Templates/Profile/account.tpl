<h1>پروفایل بازیکن</h1>

<?php include("menu.tpl"); ?>
<form action="spieler.php" method="POST">
<input type="hidden" name="ft" value="p3">
<table cellpadding="1" cellspacing="1" id="change_pass" class="account">
<thead><tr>
    <th colspan="2">تغییر رمز عبور</th>
</tr></thead><tbody>
<tr>
    <th>رمز عبور فعلی</th>
    <td><input class="text" type="password" name="pw1" maxlength="30" /></td>
</tr>

<tr>
    <th>رمز عبور جدید</th>
    <td><input class="text" type="password" name="pw2" maxlength="30" /></td>
</tr>
<tr>
    <th>تکرار رمز عبور جدید</th>
    <td><input class="text" type="password" name="pw3" maxlength="30" /></td>
</tr></tbody></table>
<?php
if(!empty($passError = $form->getError("pw"))) {
    echo "<span class=\"error\">".$passError."</span>";
}
?>
<table cellpadding="1" cellspacing="1" id="change_mail" class="account"><thead><tr>
        <th colspan="2">تغییر ایمیل</th>

    </tr></thead>
    <tbody><tr>
        <td class="note" colspan="2">ایمیل فعلی و ایمیل جدید خود را وارد کنید. سپس یک کد تایید به هر دو ایمیل ارسال می‌شود که باید آن را در این بخش وارد کنید.</td></tr>
    <tr>
        <th>ایمیل فعلی</th>
        <td><input class="text" type="text" name="email_alt" /></td>
    </tr>
    <tr>

        <th>ایمیل جدید</th>
        <td><input class="text" type="text" name="email_neu" /></td>
    </tr></tbody></table>
<?php
if(!empty($emailError = $form->getError("email"))) {
echo "<span class=\"error\">".$emailError."</span>";
}
?>
    <table cellpadding="1" cellspacing="1" id="sitter" class="account"><thead>
<tr>
    <th colspan="2">نشسته‌های حساب</th>
</tr></thead>
<tbody><tr>
    <td class="note" colspan="2">نشسته می‌تواند با نام شما و رمز عبور خودش وارد حساب‌تان شود. شما می‌توانید حداکثر دو نشسته داشته باشید.</td>
</tr>
    <?php
    $count = 0;
    if($session->userinfo['sit1'] != 0) $count +=1; if($session->userinfo['sit2'] !=0) $count += 1;
    if($count < 2) {
    ?>
<tr>
    <th>نام نشسته</th>
    <td><input class="text" type="text" name="v1" maxlength="15"><span class="count">(<?php echo $count; ?>/2)</span></td>
</tr>
<?php 
}
?><tr><td colspan="2" class="sitter">
<?php if($count == 0) { echo "<span class=\"none\">هیچ نشسته‌ای ندارید.</span></td>"; }
if($session->userinfo['sit1'] != 0) {
	echo "<div>";
    echo "<a href=\"spieler.php?s=3&e=3&id=".$session->userinfo['sit1']."&a=".$session->checker."&type=1\"><img class=\"del\" src=\"img/x.gif\" title=\"حذف نشسته\" alt=\"حذف نشسته\" /></a>";
    echo "<a href=\"spieler.php?uid=".$session->userinfo['sit1']."\">".$database->getUserField($session->userinfo['sit1'],"username",0)."</a>";
    echo "</div>";
}
if($session->userinfo['sit2'] != 0) {
echo "<div>";
echo "<a href=\"spieler.php?s=3&e=3&id=".$session->userinfo['sit2']."&a=".$session->checker."&type=2\"><img class=\"del\" src=\"img/x.gif\" title=\"حذف نشسته\" alt=\"حذف نشسته\" /></a>";
echo "<a href=\"spieler.php?uid=".$session->userinfo['sit2']."\">".$database->getUserField($session->userinfo['sit2'],"username",0)."</a>";
    echo "</div>";
}
?></tr>
<tr><td class="note" colspan="2">شما به‌عنوان نشسته در حساب‌های زیر ثبت شده‌اید. با کلیک روی ضربدر قرمز می‌توانید آن را لغو کنید.</td></tr><tr><td colspan="2" class="sitter">
<?php 
$sitee = $database->getSitee($session->uid);
if(count($sitee) == 0) {
echo "<span class=\"none\">هیچ موردی ثبت نشده است.</span>";
}
else {
foreach($sitee as $sit) {
echo "<div>";
echo "<a href=\"spieler.php?s=3&e=2&id=".$sit['id']."&a=".$session->checker."\"><img class=\"del\" src=\"img/x.gif\" title=\"حذف نشسته\" alt=\"حذف نشسته\" /></a>";
echo "<a href=\"spieler.php?uid=".$sit['id']."\">".$database->getUserField($sit['id'],"username",0)."</a>";
    echo "</div>";
}
}
?>
</td></tr></table>
<?php
if(!empty($sitterError = $form->getError("sit"))) {
    echo "<span class=\"error\">".$sitterError."</span>";
}
?>
    <table cellpadding="1" cellspacing="1" id="del_acc" class="account"><thead>
<tr>
    <th colspan="2">حذف حساب کاربری</th>
</tr>
</thead><tbody>
<tr>
	<td class="note" colspan="2">در این بخش می‌توانید حساب کاربری خود را حذف کنید. پس از شروع فرایند حذف، تکمیل آن 3 روز زمان می‌برد و فقط در 24 ساعت اول می‌توانید آن را لغو کنید.</td>
</tr><tr>
<?php
$timestamp = $database->isDeleting($session->uid);
if($timestamp) {
echo "<td colspan=\"2\" class=\"count\">";
echo "<a href=\"spieler.php?s=3&id=".$session->uid."&a=1&e=4\"><img
		class=\"del\" src=\"img/x.gif\" alt=\"لغو فرایند\"
		title=\"لغو فرایند\" /> </a>";
		$time=$generator->getTimeFormat(($timestamp-time()));
        echo "حساب کاربری تا <span
		id=\"timer".++$session->timer."\">".$time."</span> دیگر حذف خواهد شد.</td>";
}
else {
?>
<th>حساب حذف شود؟</th>
        <td class="del_selection">
            <label><input class="radio" type="radio" name="del" value="1" /> بله</label>
            <label><input class="radio" type="radio" name="del" value="0" checked /> خیر</label>
        </td>
    </tr>
    <tr>
        <th>تایید با رمز عبور:</th>

        <td><input class="text" type="password" name="del_pw" maxlength="30" /></td>
        <?php 
        }
        ?>
    </tr></tbody></table>
    <?php
if(!empty($deleteError = $form->getError("del"))) {
    echo "<span class=\"error\">".$deleteError."</span>";
}
?>
    <p class="btn"><input type="image" value="" name="s1" id="btn_save" class="dynamic_img" src="img/x.gif" alt="ذخیره" /></p>
</form>
