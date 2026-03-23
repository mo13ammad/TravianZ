<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       nalooti                                                    ##
##  Filename       Math.php                                                    ##
##  Developed by:  martinambrus                                                ##
##  License:       nalooti Project                                            ##
##  Copyright:     nalooti (c) 2010-2017. All rights reserved.                ##
##  URLs:          https://travian.martinambrus.com                		       ##
##  Source code:   https://Nalooti.ir		                   ##
##                                                                             ##
#################################################################################

namespace App\Utils;

/**
 *
 * Mathematics-related helpers.
 *
 * @author martinambrus
 *
 */
class Math {

    public static function isInt($val) {
        return (is_numeric($val) && intval($val) === $val);
    }

    public static function isFloat($val) {
        return (is_numeric($val) && floatval($val) === $val);
    }

}