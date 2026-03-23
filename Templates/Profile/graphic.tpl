<?php if(GP_ENABLE) {
?>
<h1>پروفایل بازیکن</h1>

<?php include("menu.tpl"); ?>
<?php if(isset($_POST["custom_url"])) {
$database->updateUserField($session->uid,gpack,$_POST["custom_url"],1);
 } ?>
<?php if(isset($_GET["custom_url"])) {
?>
<link href="<?php echo $_GET["custom_url"]; ?>lang/en/gp_check.css" rel="stylesheet" type="text/css">
<div id="gpack_popup">
		
		<div id="gpack_error">
			<img class="logo unknown" src="img/x.gif" alt="unknown" title="unknown"><span class="error">بسته گرافیکی پیدا نشد. این مشکل می‌تواند یکی از دلایل زیر را داشته باشد:</span><br>
<ul>
<li>مسیر باید به پوشه‌ای اشاره کند که فایل '<b>travian.css</b>' و پوشه‌های '<b>img</b>'، '<b>lang</b>' و '<b>modules</b>' داخل آن قرار دارند.</li>
<li>ممکن است مرورگر شما از بسته‌های گرافیکی محلی پشتیبانی نکند و لازم باشد مسیر با '<b>http://</b>' یا یک آدرس آنلاین معتبر شروع شود.</li>
</ul>			<form action="spieler.php" method="post">
				<input type="hidden" name="s" value="4">
				<div class="btn"><button alt="تایید" value="ok" class="trav_buttons" id="btn_ok"> تایید </button></div>
			</form>
		</div>

		
		<div id="gpack_activate">
			<span class="info">بسته گرافیکی پیدا شد.</span><br>
			<img id="preview" src="img/x.gif"><br>

			مسیر '<span class="path"><?php echo $_GET["custom_url"]; ?></span>' یک بسته گرافیکی معتبر را نشان می‌دهد. برای فعال‌سازی، انتخاب خود را ذخیره کنید. هر زمان بخواهید می‌توانید این تنظیم را تغییر دهید.
			
			<form action="spieler.php" method="post">
				<input type="hidden" name="s" value="4">
				<input type="hidden" name="custom_url" value="<?php echo $_GET["custom_url"]; ?>">
				<div class="btn"><button alt="ذخیره" value="save" class="trav_buttons" id="btn_save" name="gp_activate_button"> ذخیره </button></div>
			</form>
		</div>
	</div>
<?php } ?>

<form action="spieler.php" method="post" name="gp_selection">
<input type="hidden" name="s" value="4" />
<table cellpadding="1" cellspacing="1" id="gpack">
    <thead>
        <tr>
            <th>تنظیمات بسته گرافیکی</th>
        </tr>
	</thead>
 
			<tbody>
	        <tr>
	        	<td class="info">
	        		با بسته گرافیکی می‌توانید ظاهر تراوین را تغییر دهید. می‌توانید یکی از گزینه‌های موجود را انتخاب کنید یا مسیر یک بسته گرافیکی روی سیستم خود را وارد کنید. استفاده از بسته گرافیکی محلی ممکن است زمان بارگذاری صفحات را کمتر کند.<br />
	        		<span class="alert">توجه: فقط از بسته‌های گرافیکی قابل اعتماد استفاده کنید.</span>
	        	</td>
	        </tr>
	        <tr>
	        	<th class="empty"></th>
	        </tr>
	        <tr>
	            <td>
	            	<label>

                        <input type="radio" class="radio" name="gp_type" value="custom" checked="checked" />
                        بسته گرافیکی سفارشی                    </label>
                    <input class="text" type="text" name="custom_url" value="<?php echo $session->gpack; ?>" onclick="document.gp_selection.gp_type[1].checked = true" /><br />
                                        <div class="example">نمونه: <span class="path">file:///C:/Travian/gpack/</span> یا <span class="path">http://www.travian.org/user/gpack/</span></div>
										<center><div class="example">پیش‌فرض: <span class="path"><?php echo GP_LOCATE; ?></span></div></center>
                </td>

            </tr>
        </tbody>
    </table>
    <p class="btn"><button alt="تایید" name="gp_selection_button" value="ok" class="trav_buttons" id="btn_ok" /> تایید </button></p>
    </form>


    <table cellpadding="1" cellspacing="1" id="download">
        <thead>
            <tr>

                <th colspan="4">بسته‌های گرافیکی بیشتر</th>
            </tr>
            <tr>
                <td>نام</td>
                <td>حجم (MB)</td>
                <td>فعال‌سازی</td>
                <td>دانلود</td>

            </tr>
        </thead>
        <tbody>
                <tr>
                    <td class="nam">پیش‌فرض تراوین</td>
                                        <td class="size">4</td>
                    <td class="act"><a href="spieler.php?s=4&gp_type=custom&custom_url=gpack/travian_default/">فعال‌سازی</a></td>

                    <td class="down"><a href="gpack/download/travian_default.zip" target="_blank">دانلود</a></td>
                </tr>
                    </tbody>
    </table>
    <?php
    }else{
	header("Location: ".$_SERVER['PHP_SELF']."?uid=".$session->uid);
	exit;
	}
    ?>
