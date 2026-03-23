<div class="menu">
<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       nalooti                                                    ##
##  Version:       22.06.2015                    			       ## 
##  Filename       menu.tpl                                                    ##
##  Developed by:  Mr.php , Advocaite , brainiacX , yi12345 , Shadow , ronix   ## 
##  Fixed by:      Shadow - STARVATION , HERO FIXED COMPL.  		       ##
##  Fixed by:      InCube - double troops				       ##
##  License:       nalooti Project                                            ##
##  Copyright:     nalooti (c) 2010-2015. All rights reserved.                ##
##  URLs:          https://Nalooti.ir                		       ##
##  Source code:   https://Nalooti.ir		               ## 
##                                                                             ##
#################################################################################

	switch($_GET['s']) {
		case 0:
		echo "<li class=\"c2 f9\">Intro</li><li class=\"c1 f9\">Configuration</li><li class=\"c1 f9\">Database</li><li class= \"c1 f9\">World Data</li><li class=\"c1 f9\">Accounts</li><li class=\"c1 f9\">End</li>";
		break;
		case 1:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c2 f9\">Configuration</li><li class=\"c1 f9\">Database</li><li class= \"c1 f9\">World Data</li><li class=\"c1 f9\">Accounts</li><li class=\"c1 f9\">End</li>";
		break;
		case 2:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c2 f9\">Database</li><li class= \"c1 f9\">World Data</li><li class=\"c1 f9\">Accounts</li><li class=\"c1 f9\">End</li>";
		break;
		case 3:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c3 f9\">Database</li><li class= \"c2 f9\">World Data</li><li class=\"c1 f9\">Accounts</li><li class=\"c1 f9\">End</li>";
		break;
		case 4:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c3 f9\">Database</li><li class= \"c3 f9\">World Data</li><li class=\"c2 f9\">Accounts</li><li class=\"c1 f9\">End</li>";
		break;
		case 5:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c3 f9\">Database</li><li class= \"c3 f9\">World Data</li><li class=\"c3 f9\">Accounts</li><li class=\"c2 f9\">End</li>";
		break;
	}

?></div>
