<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       news.tpl                                                    ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianZ Project                                            ##
##  Copyright:     TravianZ (c) 2010-2025. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>
<?php
if(NEWSBOX1){
	include "News/newsbox1.tpl";
	}
if(NEWSBOX2){
	include "News/newsbox2.tpl";
	}
if(NEWSBOX3){
	include "News/newsbox3.tpl";
	}

$announcements = $database->query_return("SELECT * FROM " . TB_PREFIX . "announcements ORDER BY time DESC LIMIT 5");
if($announcements) {
    foreach($announcements as $ann) {
        echo '<div class="news"><b>' . ANNOUNCEMENT . ':</b><br>' . $ann['text'] . '</div><br>';
    }
}
?>