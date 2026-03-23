<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       header.tpl                                                  ##
##  Developed by:  Dzoki                                                       ##
##  License:       nalooti Project                                            ##
##  Copyright:     nalooti (c) 2010-2025. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>

<style>
#header {
    height: 72px;
    min-width: 980px;
    width: 100%;
    position: relative;
}
#mtop {
    width: 700px;
    height: 72px;
    margin: 0 auto;
    position: relative;
    top: -7px;
    z-index: 3;
    direction: ltr;
}
#mtop a#n1,
#mtop a#n2,
#mtop a#n3,
#mtop a#n4,
#mtop #n5 {
    float: left;
    display: block;
    margin: 0;
    padding: 0;
}
#mtop a#n1 img,
#mtop a#n2 img,
#mtop a#n3 img,
#mtop a#n4 img {
    display: block;
    width: 70px;
    height: 67px;
    background-repeat: no-repeat;
    background-position: 0 -21px;
}
body.v35 #mtop a#n1 img { background-image: url("<?php echo GP_LOCATE; ?>images/n1-ltr.gif"); }
body.v35 #mtop a#n2 img { background-image: url("<?php echo GP_LOCATE; ?>images/n2-ltr.gif"); }
body.v35 #mtop a#n3 img { background-image: url("<?php echo GP_LOCATE; ?>images/n3-ltr.gif"); }
body.v35 #mtop a#n4 img { background-image: url("<?php echo GP_LOCATE; ?>images/n4-ltr.gif"); }
#mtop a#n1:hover img,
#mtop a#n2:hover img,
#mtop a#n3:hover img,
#mtop a#n4:hover img {
    background-position: 0 -121px;
}
#mtop #n5 {
    width: 70px;
    height: 67px;
    background-repeat: no-repeat;
    background-position: 0 -21px;
}
body.v35 #mtop #n5.i1 { background-image: url("<?php echo GP_LOCATE; ?>images/m1-ltr.gif"); }
body.v35 #mtop #n5.i2 { background-image: url("<?php echo GP_LOCATE; ?>images/m2-ltr.gif"); }
body.v35 #mtop #n5.i3 { background-image: url("<?php echo GP_LOCATE; ?>images/m3-ltr.gif"); }
body.v35 #mtop #n5.i4 { background-image: url("<?php echo GP_LOCATE; ?>images/m4-ltr.gif"); }
#mtop #n5 a {
    float: left;
    display: block;
}
#mtop #n5 a img {
    display: block;
    width: 35px;
    height: 67px;
}
#mtop a#plus {
    float: left;
    display: block;
    height: 40px;
    margin: 16px 0 0 135px;
    padding: 0;
    background: transparent url("<?php echo GP_LOCATE; ?>images/plus_bg.gif") repeat-x 0 0;
}
#mtop a#plus span.plus_text {
    display: block;
    float: left;
    height: 29px;
    padding: 6px 14px;
    background: transparent url("<?php echo GP_LOCATE; ?>images/plus_start-ltr.gif") no-repeat left top;
    cursor: pointer;
}
#mtop a#plus span span {
    display: inline;
    cursor: pointer;
}
#mtop img#btn_plus {
    float: left;
    width: 36px;
    height: 29px;
    background-position: left top;
    background-repeat: no-repeat;
}
#mtop #plus img.active { background-image: url("<?php echo GP_LOCATE; ?>images/plus_active-ltr.gif"); }
#mtop #plus img.inactive { background-image: url("<?php echo GP_LOCATE; ?>images/plus_inactive-ltr.gif"); }
#stime {
    display: inline;
    width: 0;
    height: 0;
}
#ltime {
    position: absolute;
    top: 108px;
    left: 50%;
    width: 220px;
    margin-left: -335px;
    min-width: 0;
    z-index: 2;
    text-align: left;
    direction: ltr;
}
#ltimeWrap {
    position: relative;
}
#res {
    position: absolute;
    top: 168px;
    left: 0;
    width: 100%;
    min-width: 980px;
    z-index: 2;
}
#resWrap {
    position: relative;
    width: 552px;
    margin: 0 auto;
    left: auto;
}
</style>

<div id="header">
    <div id="mtop">
        <a href="<?php echo ($_SESSION['id_user'] != 1 ? 'dorf1.php' : '#'); ?>" id="n1" accesskey="1"><img src="img/x.gif" title="Village overview" alt="Village overview" /></a>
        <a href="<?php echo ($_SESSION['id_user'] != 1 ? 'dorf2.php' : '#'); ?>" id="n2" accesskey="2"><img src="img/x.gif" title="Village centre" alt="Village centre" /></a>
        <a href="karte.php" id="n3" accesskey="3"><img src="img/x.gif" title="Map" alt="Map" /></a>
        <a href="statistiken.php" id="n4" accesskey="4"><img src="img/x.gif" title="Statistics" alt="Statistics" /></a>
        <?php
        if($message->unread && !$message->nunread) {
        $class = "i2";
        }
        else if(!$message->unread && $message->nunread) {
        $class = "i3";
        }
        else if($message->unread && $message->nunread) {
        $class = "i1";
        }
        else {
        $class = "i4";
        }
        ?>
          <div id="n5" class="<?php echo $class ?>">
            <a href="<?php echo ($_SESSION['id_user'] != 1 ? 'berichte.php' : '#'); ?>" accesskey="5"><img src="img/x.gif" class="l" title="Reports" alt="Reports"/></a>
            <a href="nachrichten.php" accesskey="6"><img src="img/x.gif" class="r" title="Messages" alt="Messages" /></a>
        </div>

		<?php
			// no PLUS needed for Support
			if ($_SESSION['id_user'] != 1) {
		?>
        <a href="plus.php" id="plus">
        <span class="plus_text">
            <span class="plus_g">P</span>
            <span class="plus_o">l</span>
            <span class="plus_g">u</span>
            <span class="plus_o">s</span>
       </span><img src="img/x.gif" id="btn_plus" class="<?php echo ($session->plus == 1 && strtotime("NOW") <= $session->userinfo['plus'])? 'active' : 'inactive';?>" title="Plus menu" alt="Plus menu" /></a>
       <?php
       		}
       ?>
<style>

.day_image {
    background-image: url("../gpack/travian_default/img/l/day.gif");
width: 18px;
height:18px;
}
.night_image {
      background-image: url("../gpack/travian_default/img/l/night.gif");
width: 18px;
height:18px;
}
  #container {
    width: 30px;
    height: 60px;
    position: relative;
  }
  #wrapper > #container {
    display: table;
    position: static;
  }
  #container div {
    position: absolute;
    top: 50%;
  }
  #container div div {
    position: relative;
    top: -50%;
  }
  #container > div {
    display: table-cell;
    vertical-align: middle;
    position: static;
  }
</style>
<?php
$hour = date('Hi'); 
if ($hour > 1759 or $hour < 500) {
$day_night_img = 'night_image';
} elseif ($hour > 1200) {
$day_night_img = 'day_image';
} else {
$day_night_img = 'day_image';
}
?>
<div id="wrapper">
  <div id="container">
 <div><div><p><img src="img/x.gif" style="display: block; margin: 0 auto; vertical-align:middle;" class="<?php echo $day_night_img;?>"  /></p></div></div>
  </div>
</div>
        <div class="clear"></div>
    </div>
</div>
