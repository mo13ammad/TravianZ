<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             NALOOTI                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (nalooti)                                 //
//                              - nalooti = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//                                Adding tasks, constructions and artefact  by: Armando             //
//                                Modified , added , fixed , implementd  by: Shadow and ronix       //
//////////////////////////////////////////////////////////////////////////////////////////////////////
									//                         //
									//         Chinese         //
									//   Author: muchen.fan    //
									//                         //
									/////////////////////////////

//MAIN MENU
define('TRIBE1', 'Ã§Â½â€”Ã©Â©Â¬');
define('TRIBE2', 'Ã¦ÂÂ¡Ã©Â¡Â¿');
define('TRIBE3', 'Ã©Â«ËœÃ¥ÂÂ¢');
define('TRIBE4', 'Ã¨â€¡ÂªÃ§â€žÂ¶');
define('TRIBE5', 'Ã§ÂºÂ³Ã¥Â¡â€');
define('TRIBE6', 'Ã©â€¡Å½Ã¥â€¦Â½');

define('HOME', 'Ã¤Â¸Â»Ã©Â¡Âµ');
define('INSTRUCT', 'Ã¨Â¯Â´Ã¦ËœÅ½');
define('ADMIN_PANEL', 'Ã§Â®Â¡Ã§Ââ€ Ã¥â€˜ËœÃ©ÂÂ¢Ã¦ÂÂ¿');
define('MH_PANEL', 'Multihunter Panel');
define('MASS_MESSAGE', 'Ã§Â¾Â¤Ã¥Ââ€˜Ã¦Â¶Ë†Ã¦ÂÂ¯');
define('LOGOUT', 'Ã§â„¢Â»Ã¥â€¡Âº');
define('PROFILE', 'Ã¦Â¡Â£Ã¦Â¡Ë†');
define('SUPPORT', 'Ã¦â€Â¯Ã¦Å’Â');
define('UPDATE_T_10', 'Ã¦â€ºÂ´Ã¦â€“Â°Ã¥â€°ÂÃ¥ÂÂ');
define('SYSTEM_MESSAGE', 'Ã§Â³Â»Ã§Â»Å¸Ã¤Â¿Â¡Ã¦ÂÂ¯');
define('TRAVIAN_PLUS', 'Travian <b><span class="plus_g">P</span><span class="plus_o">l</span><span class="plus_g">u</span><span class="plus_o">s</span></span></span></b>');
define('CONTACT', 'Ã¨Ââ€Ã§Â³Â»Ã¦Ë†â€˜Ã¤Â»Â¬');
define('GAME_RULES', 'Ã¦Â¸Â¸Ã¦Ë†ÂÃ¨Â§â€žÃ¥Ë†â„¢');

//MENU
define('REG', 'Ã¦Â³Â¨Ã¥â€ Å’');
define('FORUM', 'Ã¨Â®ÂºÃ¥Ââ€º');
define('CHAT', 'Ã¨ÂÅ Ã¥Â¤Â©');
define('IMPRINT', 'Ã¤Â¿Â¡Ã¦ÂÂ¯');
define('MORE_LINKS', 'Ã¦â€ºÂ´Ã¥Â¤Å¡Ã©â€œÂ¾Ã¦Å½Â¥');
define('TOUR', 'Ã¨Â§â€šÃ¥â€¦â€°');


//ERRORS
define('USRNM_EMPTY', '(Ã§â€Â¨Ã¦Ë†Â·Ã¥ÂÂÃ¤Â¸ÂºÃ§Â©Âº)');
define('USRNM_TAKEN', '(Ã§â€Â¨Ã¦Ë†Â·Ã¥ÂÂÃ¥Â·Â²Ã¨Â¢Â«Ã¥ÂÂ Ã§â€Â¨)');
define('USRNM_SHORT', '(Ã§â€Â¨Ã¦Ë†Â·Ã¥ÂÂÃ¦Å“â‚¬Ã¥Â°â€˜ '.USRNM_MIN_LENGTH.' Ã¤Â¸ÂªÃ¥Â­â€”Ã§Â¬Â¦)');
define('USRNM_CHAR', '(Ã¥ÂÂ«Ã¦Å“â€°Ã¤Â¸ÂÃ¥ÂÂ¯Ã§â€Â¨Ã¥Â­â€”Ã§Â¬Â¦)');
define('PW_EMPTY', '(Ã¥Â¯â€ Ã§Â ÂÃ¤Â¸ÂºÃ§Â©Âº)');
define('PW_SHORT', '(Ã§â€Â¨Ã¦Ë†Â·Ã¥ÂÂÃ¦Å“â‚¬Ã¥Â°â€˜ '.PW_MIN_LENGTH.' Ã¤Â¸ÂªÃ¥Â­â€”Ã§Â¬Â¦)');
define('PW_INSECURE', '(Ã¥Â¯â€ Ã§Â ÂÃ¤Â¸ÂÃ¥Â®â€°Ã¥â€¦Â¨Ã¯Â¼Å’Ã¨Â¯Â·Ã©â€¡â€¡Ã§â€Â¨Ã¦â€ºÂ´Ã¥Â¤ÂÃ¦Ââ€šÃ§Å¡â€žÃ¥Â¯â€ Ã§Â Â)');
define('EMAIL_EMPTY', '(Ã©â€šÂ®Ã§Â®Â±Ã¥Å“Â°Ã¥Ââ‚¬Ã¤Â¸ÂºÃ§Â©Âº)');
define('EMAIL_INVALID', '(Ã¤Â¸ÂÃ¥ÂÂ¯Ã§â€Â¨Ã§Å¡â€žÃ©â€šÂ®Ã§Â®Â±Ã¥Å“Â°Ã¥Ââ‚¬)');
define('EMAIL_TAKEN', '(Ã©â€šÂ®Ã§Â®Â±Ã¥Å“Â°Ã¥Ââ‚¬Ã¥Â·Â²Ã¨Â¢Â«Ã¤Â½Â¿Ã§â€Â¨)');
define('TRIBE_EMPTY', '<li>Ã¨Â¯Â·Ã©â‚¬â€°Ã¦â€¹Â©Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ§Â§ÂÃ¦â€”ÂÃ£â‚¬â€š</li>');
define('AGREE_ERROR', '<li>Ã¨â€¹Â¥Ã¨Â¦ÂÃ¦Â³Â¨Ã¥â€ Å’Ã¯Â¼Å’Ã¨Â¯Â·Ã¥â€¦Ë†Ã¥ÂÅ’Ã¦â€žÂÃ¦Â¸Â¸Ã¦Ë†ÂÃ¨Â§â€žÃ¥Ë†â„¢Ã¥â€™Å’T&CÃ£â‚¬â€š</li>');
define('LOGIN_USR_EMPTY', 'Ã¨Â¯Â·Ã¨Â¾â€œÃ¥â€¦Â¥Ã§â€Â¨Ã¦Ë†Â·Ã¥ÂÂÃ£â‚¬â€š');
define('LOGIN_PASS_EMPTY', 'Ã¨Â¯Â·Ã¨Â¾â€œÃ¥â€¦Â¥Ã¥Â¯â€ Ã§Â ÂÃ£â‚¬â€š');
define('EMAIL_ERROR', 'Ã©â€šÂ®Ã§Â®Â±Ã¥Å“Â°Ã¥Ââ‚¬Ã¦Å“ÂªÃ§Å¸Â¥Ã£â‚¬â€š');
define('PASS_MISMATCH', 'Ã¥Â¯â€ Ã§Â ÂÃ¤Â¸ÂÃ¥Å’Â¹Ã©â€¦ÂÃ£â‚¬â€š');
define('ALLI_OWNER', 'Ã¥Å“Â¨Ã¥Ë†Â Ã©â„¢Â¤Ã¥â€°ÂÃ¯Â¼Å’Ã¨Â¯Â·Ã¥â€¦Ë†Ã¦Å’â€¡Ã¦Â´Â¾Ã¦â€“Â°Ã§â€ºÅ¸Ã¤Â¸Â»Ã£â‚¬â€š');
define('SIT_ERROR', 'Ã¤Â»Â£Ã§Â®Â¡Ã¤ÂºÂºÃ¥Â·Â²Ã§Â»ÂÃ¨Â®Â¾Ã§Â½Â®Ã¦Ë†â€“Ã¤Â¸ÂÃ¥Â­ËœÃ¥Å“Â¨Ã£â‚¬â€š');
define('USR_NT_FOUND', 'Ã§â€Â¨Ã¦Ë†Â·Ã¥ÂÂÃ¤Â¸ÂÃ¥Â­ËœÃ¥Å“Â¨Ã£â‚¬â€š');
define('LOGIN_PW_ERROR', 'Ã¥Â¯â€ Ã§Â ÂÃ©â€â„¢Ã¨Â¯Â¯Ã£â‚¬â€š');
define('WEL_TOPIC', 'Ã¥Â®Å¾Ã§â€Â¨Ã¨Â®Â¯Ã¦ÂÂ¯');
define('ATAG_EMPTY', 'Ã¦Â â€¡Ã§Â­Â¾Ã¤Â¸ÂºÃ§Â©Âº');
define('ANAME_EMPTY', 'Ã¥ÂÂÃ§Â§Â°Ã¤Â¸ÂºÃ§Â©Âº');
define('ATAG_EXIST', 'Ã¦Â â€¡Ã§Â­Â¾Ã¥Â·Â²Ã¥ÂÂ Ã§â€Â¨');
define('ANAME_EXIST', 'Ã¥ÂÂÃ§Â§Â°Ã¥Â·Â²Ã¥ÂÂ Ã§â€Â¨');
define('ALREADY_ALLY_MEMBER', 'Ã¤Â½Â Ã¥Â·Â²Ã§Â»ÂÃ¥Å“Â¨Ã¨Ââ€Ã§â€ºÅ¸Ã¤Â¸Â­');
define('ALLY_TOO_LOW', 'Ã¤Â½Â Ã¥Â¿â€¦Ã©Â¡Â»Ã¦â€¹Â¥Ã¦Å“â€°3Ã§ÂºÂ§Ã¦Ë†â€“Ã¦â€ºÂ´Ã©Â«ËœÃ§Â­â€°Ã§ÂºÂ§Ã§Å¡â€žÃ¥Â¤Â§Ã¤Â½Â¿Ã©Â¦â€ ');
define('USER_NOT_IN_YOUR_ALLY', 'Ã¨Â¯Â¥Ã§â€Â¨Ã¦Ë†Â·Ã¤Â¸ÂÃ¥Å“Â¨Ã¤Â½Â Ã§Å¡â€žÃ¨Ââ€Ã§â€ºÅ¸Ã¤Â¸Â­Ã£â‚¬â€š');
define('CANT_EDIT_YOUR_PERMISSIONS', 'Ã¤Â½Â Ã¤Â¸ÂÃ¨Æ’Â½Ã¦â€ºÂ´Ã¦â€Â¹Ã¨â€¡ÂªÃ¥Â·Â±Ã§Å¡â€žÃ¦ÂÆ’Ã©â„¢Â');
define('CANT_EDIT_LEADER_PERMISSIONS', 'Ã§â€ºÅ¸Ã¤Â¸Â»Ã§Å¡â€žÃ¦ÂÆ’Ã©â„¢ÂÃ¤Â¸ÂÃ¨Æ’Â½Ã¦â€ºÂ´Ã¦â€Â¹Ã£â‚¬â€š');
define('NO_PERMISSION', 'Ã¤Â½Â Ã§Å¡â€žÃ¦ÂÆ’Ã©â„¢ÂÃ¤Â¸ÂÃ¥Â¤Å¸Ã£â‚¬â€š');
define('NAME_OR_DIPL_EMPTY', 'Ã¥ÂÂÃ§Â§Â°Ã¦Ë†â€“Ã¥Â¤â€“Ã¤ÂºÂ¤Ã¥â€¦Â³Ã§Â³Â»Ã¤Â¸ÂºÃ§Â©Âº');
define('ALLY_DOESNT_EXISTS', 'Ã¨Ââ€Ã§â€ºÅ¸Ã¤Â¸ÂÃ¥Â­ËœÃ¥Å“Â¨');
define('CANNOT_INVITE_SAME_ALLY', 'Ã¤Â½Â Ã¤Â¸ÂÃ¨Æ’Â½Ã©â€šâ‚¬Ã¨Â¯Â·Ã¤Â½Â Ã¨â€¡ÂªÃ¥Â·Â±Ã§Å¡â€žÃ¨Ââ€Ã§â€ºÅ¸');
define('WRONG_DIPLOMACY', 'Ã©â‚¬â€°Ã¦â€¹Â©Ã©â€â„¢Ã¨Â¯Â¯');
define('INVITE_ALREADY_SENT', 'Ã¥ÂÂÃ¥Â®Å¡Ã©â€šâ‚¬Ã¨Â¯Â·Ã¥Â·Â²Ã¥Ââ€˜Ã¥â€¡ÂºÃ£â‚¬ÂÃ¦Ë†â€“Ã¥Â¯Â¹Ã¦â€“Â¹Ã¥Â·Â²Ã¥Ââ€˜Ã¥â€¡ÂºÃ©â€šâ‚¬Ã¨Â¯Â·Ã£â‚¬ÂÃ¦Ë†â€“Ã¤Â½Â Ã¥Â·Â²Ã§Â»ÂÃ¤Â¸Å½Ã¥Â¯Â¹Ã¦â€“Â¹Ã¥Â­ËœÃ¥Å“Â¨Ã¥ÂÂÃ¥Â®Å¡Ã¥â€¦Â³Ã§Â³Â»Ã£â‚¬â€š');
define('INVITE_SENT', 'Ã©â€šâ‚¬Ã¨Â¯Â·Ã¥Â·Â²Ã¥Ââ€˜Ã¥â€¡Âº');
define('DECLARED_WAR_ON', 'Ã¥Â®Â£Ã¥â€˜Å Ã¦Ë†ËœÃ¤Âºâ€°Ã¯Â¼Å’Ã¥Ââ€˜');
define('OFFERED_NON_AGGRESION_PACT_TO', 'Ã¥Ââ€˜Ã¥â€¡ÂºÃ¤Âºâ€™Ã¤Â¸ÂÃ¤Â¾ÂµÃ§â€¢Â¥Ã¥ÂÂÃ¥Â®Å¡Ã©â€šâ‚¬Ã¨Â¯Â·Ã¯Â¼Å’Ã¥Ââ€˜');
define('OFFERED_CONFED_TO', 'Ã¥Ââ€˜Ã¥â€¡ÂºÃ¨Ââ€Ã¥ÂË†Ã©â€šâ‚¬Ã¨Â¯Â·Ã¯Â¼Å’Ã¥Ââ€˜');
define('ALLY_TOO_MUCH_PACTS', 'Ã¤Â½Â Ã¤Â¸ÂÃ¨Æ’Â½Ã¥Ââ€˜Ã¥â€¡ÂºÃ¦â€ºÂ´Ã¥Â¤Å¡Ã¦Â­Â¤Ã§Â±Â»Ã¥ÂÂÃ¥Â®Å¡Ã§Å¡â€žÃ©â€šâ‚¬Ã¨Â¯Â·Ã£â‚¬ÂÃ¦Ë†â€“Ã¨Ââ€Ã§â€ºÅ¸Ã¥Â·Â²Ã§Â»ÂÃ¥Ë†Â°Ã¨Â¾Â¾Ã§Â­Â¾Ã¨Â®Â¢Ã¦Â­Â¤Ã§Â§ÂÃ¥ÂÂÃ¥Â®Å¡Ã¦â€¢Â°Ã©â€¡ÂÃ§Å¡â€žÃ¤Â¸Å Ã©â„¢ÂÃ£â‚¬â€š');
define('ALLY_PERMISSIONS_UPDATED', 'Ã¦ÂÆ’Ã©â„¢ÂÃ¥Â·Â²Ã¦â€ºÂ´Ã¦â€“Â°');
define('ALLY_FORUM_LINK_UPDATED', 'Ã¨Â®ÂºÃ¥Ââ€ºÃ©â€œÂ¾Ã¦Å½Â¥Ã¥Â·Â²Ã¦â€ºÂ´Ã¦â€“Â°');
define('NO_FORUMS_YET', 'Ã§â€ºÂ®Ã¥â€°ÂÃ¨Â¿ËœÃ¦Â²Â¡Ã¦Å“â€°Ã¨Â®ÂºÃ¥Ââ€º');
define('ALLY_USER_KICKED', ' Ã¥Â·Â²Ã§Â»ÂÃ¨Â¢Â«Ã¨Â¸Â¢Ã¥â€¡ÂºÃ¨Ââ€Ã§â€ºÅ¸');
define('NOT_OPENED_YET', 'Ã¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã¥Â°Å¡Ã¦Å“ÂªÃ¥ÂÂ¯Ã¥Å Â¨');
define('REGISTER_CLOSED', 'Ã¦Â³Â¨Ã¥â€ Å’Ã¥Â·Â²Ã¥â€¦Â³Ã©â€”Â­Ã¯Â¼Å’Ã¤Â½Â Ã¤Â¸ÂÃ¨Æ’Â½Ã¥Å“Â¨Ã¦Â­Â¤Ã¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã¤Â¸Å Ã¦Â³Â¨Ã¥â€ Å’Ã£â‚¬â€š');
define('NAME_EMPTY', 'Ã¨Â¯Â·Ã¨Â¾â€œÃ¥â€¦Â¥Ã¥ÂÂÃ§Â§Â°');
define('NAME_NO_EXIST', 'Ã¨Â¯Â¥Ã¥ÂÂÃ§Â§Â°Ã¤Â¸ÂÃ¥Â­ËœÃ¥Å“Â¨ ');
define('ID_NO_EXIST', 'Ã¨Â¯Â¥IDÃ¤Â¸ÂÃ¥Â­ËœÃ¥Å“Â¨ ');
define('SAME_NAME', 'Ã¤Â½Â Ã¤Â¸ÂÃ¨Æ’Â½Ã©â€šâ‚¬Ã¨Â¯Â·Ã¤Â½Â Ã¨â€¡ÂªÃ¥Â·Â±');
define('ALREADY_INVITED', ' Ã¥Â·Â²Ã¨Â¢Â«Ã©â€šâ‚¬Ã¨Â¯Â·');
define('ALREADY_IN_ALLY', ' Ã¥Â·Â²Ã§Â»ÂÃ¥Å“Â¨Ã¨Ââ€Ã§â€ºÅ¸Ã¤Â¸Â­');
define('ALREADY_IN_AN_ALLY', ' Ã¥Â·Â²Ã§Â»ÂÃ¥Å“Â¨Ã¥â€¦Â¶Ã¤Â»â€“Ã¨Ââ€Ã§â€ºÅ¸Ã¤Â¸Â­');
define('NAME_OR_TAG_CHANGED', 'Ã¥ÂÂÃ§Â§Â°Ã¦Ë†â€“Ã¦Â â€¡Ã§Â­Â¾Ã¥Â·Â²Ã¨Â¢Â«Ã¦â€ºÂ´Ã¦â€Â¹');
define('VAC_MODE_WRONG_DAYS', 'Ã¤Â½Â Ã¨Â¾â€œÃ¥â€¦Â¥Ã¤Âºâ€ Ã©â€â„¢Ã¨Â¯Â¯Ã§Å¡â€žÃ¥Â¤Â©Ã¦â€¢Â°');

//COPYRIGHT
define('TRAVIAN_COPYRIGHT', 'nalooti 100% Ã¥Â¼â‚¬Ã¦ÂºÂ Travian Ã¥â€¦â€¹Ã©Å¡â€ Ã£â‚¬â€š');

//BUILD.TPL
define('CUR_PROD', 'Ã¥Â½â€œÃ¥â€°ÂÃ¤ÂºÂ§Ã©â€¡Â');
define('NEXT_PROD', 'Ã¤ÂºÂ§Ã©â€¡ÂÃ¯Â¼Å’Ã§Â­â€°Ã§ÂºÂ§ ');
define('CONSTRUCT_BUILD', 'Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â»ÂºÃ§Â­â€˜');

//DORF1
define('LUMBER', 'Ã¦Å“Â¨Ã¦ÂÂ');
define('CLAY', 'Ã©Â»ÂÃ¥Å“Å¸');
define('IRON', 'Ã©â€œÂÃ§Å¸Â¿');
define('CROP', 'Ã§Â²Â®Ã©Â£Å¸');
define('LEVEL', 'Ã§Â­â€°Ã§ÂºÂ§');
define('CROP_COM', CROP.'Ã¦Â¶Ë†Ã¨â‚¬â€”');
define('PER_HR', 'Ã¦Â¯ÂÃ¥Â°ÂÃ¦â€”Â¶');
define('PRODUCTION', 'Ã¤ÂºÂ§Ã©â€¡Â');
define('CAPITAL1', 'Capital');
define('VILLAGES', 'Ã¦Ââ€˜Ã¦Â°â€˜');
define('ANNOUNCEMENT', 'Ã¥â€¦Â¬Ã¥â€˜Å ');
define('GO2MY_VILLAGE', 'Ã¨Â¿â€Ã¥â€ºÅ¾Ã¦Ë†â€˜Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€ž');
define('VILLAGE_CENTER', 'Ã¦Ââ€˜Ã¥Âºâ€žÃ¥Â¤Â§Ã¦Â¥Â¼');
define('FINISH_GOLD', 'Ã¥Â°â€ Ã¤Â½Â¿Ã§â€Â¨ 2 Ã©â€¡â€˜Ã¥Â¸ÂÃ§Å¾Â¬Ã©â€”Â´Ã¥Â®Å’Ã¦Ë†ÂÃ¦Å“Â¬Ã¦Ââ€˜Ã§Å¡â€žÃ¦â€°â‚¬Ã¦Å“â€°Ã¥Â»ÂºÃ§Â­â€˜Ã¥â€™Å’Ã§Â â€Ã§Â©Â¶Ã©ËœÅ¸Ã¥Ë†â€”');
define('WAITING_LOOP', '(Ã©ËœÅ¸Ã¥Ë†â€”Ã¤Â¸Â­)');
define('CROP_NEGATIVE', 'Ã¤Â½Â Ã§Å¡â€žÃ§Â²Â®Ã©Â£Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¤Â¸ÂºÃ¨Â´Å¸Ã¯Â¼Å’Ã¥â€ºÂ Ã¦Â­Â¤Ã¤Â¸ÂÃ¥ÂÂ¯Ã¨Æ’Â½Ã¦Å ÂµÃ¨Â¾Â¾Ã©Å“â‚¬Ã¦Â±â€šÃ§Å¡â€žÃ§Â²Â®Ã©Â£Å¸Ã¦â€¢Â°Ã§â€ºÂ®Ã£â‚¬â€š');
define('HR', 'h.');
define('HRS', '(Ã¥Â°ÂÃ¦â€”Â¶)');
define('DONE_AT', 'Ã¥Â®Å’Ã¦Ë†ÂÃ¤ÂºÅ½');
define('CANCEL', 'Ã¥Ââ€“Ã¦Â¶Ë†');
define('LOYALTY', 'Ã¥Â¿Â Ã¨Â¯Å¡Ã¥ÂºÂ¦');
define('CALCULATED_IN', 'Ã¥â€œÂÃ¥Âºâ€Ã¥Â»Â¶Ã¨Â¿Å¸');
define('HI', 'Ã¥â€”Â¨');
define('P_IN', 'Ã¥Å“Â¨');
define('MS', 'ms');
define('SERVER_TIME', 'Ã¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã¦â€”Â¶Ã©â€”Â´:');
define('REMAINING_GOLD', 'Remaining gold');

// HEADER && MENU && Messages && Reports
define('REPORTS', 'Reports');
define('MESSAGES', 'Messages');
define('PLUS_MENU', 'Plus menu');
define('LINKS', 'Links');
define('CANCEL_PROCESS', 'Cancel process');
define('ACCOUNT_DELETING', 'The account will be deleted in');
define('INBOX', 'Inbox');
define('WRITE', 'Write');
define('SENT', 'Sent');
define('SEND', 'Send');
define('ARCHIVE', 'Archive');
define('NOTES', 'Notes');
define('SUBJECT', 'Subject');
define('SENDER', 'Sender');
define('RECIPIENT', 'Recipient');
define('BACK', 'Back');
define('NEW', 'new');
define('UNREAD', 'unread');
define('NO_MESS', 'There are no messages available');
define('NO_MESS_IN_ARCHIVE', NO_MESS.' in the archive');
define('NO_MESS_SENT', 'There are no sent messages available');
define('MESS_FOR_SUP', 'Message for Support');
define('MESS_FOR_MH', 'Message for Multihunter');
define('SEND_AS_SUP', 'Send as Support');
define('SEND_AS_MH', 'Send as Multihunter');
define('SAVE', 'Save');
define('ANSWER', 'Answer');
define('REPLY', 'Reply');
define('ADDRESSBOOK', 'Addressbook');
define('CLOSE_ADDRESSBOOK', 'Close Addressbook');
define('ONLINE_S1', 'Now online');
define('ONLINE_S2', 'Offline');
define('ONLINE_S3', 'Last 3 days');
define('ONLINE_S4', 'Last 7 days');
define('ONLINE_S5', 'Inactive');
define('WAIT_FOR_CONFIRM', 'Wait for confirm');
define('CONFIRM', 'Confirm');
define('WRITE_MESS_WARN', '<b>Warning:</b> you can&#39;t use the values <b>[message]</b> or <b>[/message]</b> in your message because it can cause problem with bbcode system');
define('NO_REPORTS', 'There are no reports available');
define('ATTACKER', 'Attacker');
define('NATAR_COUNTERFORCE', 'Natar Counterforce');
define('FROM_THE_VILL', 'from the village');
define('CASUALTIES', 'Casualties');
define('INFORMATION', 'Information');
define('CARRY', 'carry');
define('DEFENDER', 'Defender');
define('VISITED', 'visited');
define('HIS_TROOPS', '&#39;s troops');
define('WISHES_YOU', 'wishes you');
define('X_MAS', 'Merry Christmas');
define('NEW_YEAR', 'Happy New Year');
define('EASTER', 'Happy Easter');
define('PEACE', 'Peace');

define('GOLD', 'Ã©â€¡â€˜Ã¥Â¸Â');
define('GOLD_IMG', '<img src=\"/img/x.gif\" class=\"gold\" alt=\"'.GOLD.'\" title=\"'.GOLD.'\">');

//QUEST
define('Q_CONTINUE', 'Ã§Â»Â§Ã§Â»Â­Ã¤Â¸â€¹Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¤Â»Â»Ã¥Å Â¡Ã£â‚¬â€š');
define('Q_REWARD', 'Ã¤Â½Â Ã§Å¡â€žÃ¥Â¥â€“Ã¥Å Â±:');
define('Q_BUTN', 'Ã¥Â®Å’Ã¦Ë†ÂÃ¤Â»Â»Ã¥Å Â¡');
define('Q0', 'Ã¦Â¬Â¢Ã¨Â¿Å½Ã¦ÂÂ¥Ã¥Ë†Â°');
define('Q0_DESC', 'Ã¥ËœÂ¿Ã¯Â¼Å’Ã§Å“â€¹Ã¨ÂµÂ·Ã¦ÂÂ¥Ã¤Â½Â Ã¥Â°Â±Ã¦ËœÂ¯Ã¨Â¿â„¢Ã¥ÂºÂ§Ã¥Â°ÂÃ¦Ââ€˜Ã¥Âºâ€žÃ§Å¡â€žÃ©Â¦â€“Ã©Â¢â€ Ã£â‚¬â€šÃ¥Å“Â¨Ã¥Ë†Å¡Ã¥Â¼â‚¬Ã¥Â§â€¹Ã§Å¡â€žÃ¨Â¿â„¢Ã¦Â®ÂµÃ¦â€”Â¶Ã©â€”Â´Ã©â€¡Å’Ã¦Ë†â€˜Ã¦ÂÂ¥Ã¦Å’â€¡Ã¥Â¯Â¼Ã¤Â½Â Ã¥Â¦â€šÃ¤Â½â€¢Ã¥Ââ€˜Ã¥Â±â€¢Ã¤Â½Â Ã§Å¡â€žÃ©Æ’Â¨Ã¨ÂÂ½Ã£â‚¬â€š');
define('Q0_OPT1', 'Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¤Â»Â»Ã¥Å Â¡');
define('Q0_OPT2', 'Ã¦Ë†â€˜Ã¦Æ’Â³Ã¨â€¡ÂªÃ¥Â·Â±Ã§Å“â€¹Ã§Å“â€¹');
define('Q0_OPT3', 'Ã¨Â·Â³Ã¨Â¿â€¡Ã¤Â»Â»Ã¥Å Â¡');

define('Q1', 'Ã¤Â»Â»Ã¥Å Â¡ 1: Ã¤Â¼ÂÃ¦Å“Â¨Ã¥Å“Âº');
define('Q1_DESC', 'Ã¤Â½Â Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€žÃ©â€¡Å’Ã¦Å“â€°Ã¥â€ºâ€ºÃ§â€°â€¡Ã§Â»Â¿Ã¨â€°Â²Ã§Å¡â€žÃ¦Â£Â®Ã¦Å¾â€”Ã£â‚¬â€šÃ¥Å“Â¨Ã¤Â¸â‚¬Ã§â€°â€¡Ã¦Â£Â®Ã¦Å¾â€”Ã¤Â¸Â­Ã¥Â»ÂºÃ©â‚¬Â Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¤Â¼ÂÃ¦Å“Â¨Ã¥Å“ÂºÃ¯Â¼Å’Ã¥â€ºÂ Ã¤Â¸ÂºÃ¦Å“Â¨Ã¦ÂÂÃ¦ËœÂ¯Ã¦Ë†â€˜Ã¤Â»Â¬Ã¦â€“Â°Ã¨ÂÅ¡Ã¥Â±â€¦Ã§â€šÂ¹Ã§Å¡â€žÃ©â€¡ÂÃ¨Â¦ÂÃ¨Âµâ€žÃ¦ÂºÂÃ£â‚¬â€š');
define('Q1_ORDER', 'Ã§â€ºÂ®Ã¦Â â€¡:</p>Ã¥Â»ÂºÃ©â‚¬Â Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¤Â¼ÂÃ¦Å“Â¨Ã¥Å“ÂºÃ£â‚¬â€š');
define('Q1_RESP', 'Ã¥Â°Â±Ã¦ËœÂ¯Ã¨Â¿â„¢Ã¦Â Â·Ã¯Â¼Å’Ã§Å½Â°Ã¥Å“Â¨Ã¦Ââ€˜Ã¥Âºâ€žÃ¨Æ’Â½Ã§â€Å¸Ã¤ÂºÂ§Ã¦â€ºÂ´Ã¥Â¤Å¡Ã¦Å“Â¨Ã¦ÂÂÃ¤Âºâ€ Ã£â‚¬â€šÃ¦Ë†â€˜Ã¥Â¸Â®Ã§â€šÂ¹Ã¥Â°ÂÃ¥Â¿â„¢Ã¯Â¼Å’Ã¦Å Å Ã¥Â»ÂºÃ©â‚¬Â Ã§Å¾Â¬Ã©â€”Â´Ã¥Â®Å’Ã¦Ë†ÂÃ£â‚¬â€š');
define('Q1_REWARD', 'Ã¤Â¼ÂÃ¦Å“Â¨Ã¥Å“ÂºÃ§Å¾Â¬Ã©â€”Â´Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ£â‚¬â€š');

define('Q2', 'Ã¤Â»Â»Ã¥Å Â¡ 2: Ã§Â²Â®Ã©Â£Å¸');
define('Q2_DESC', 'Ã¤Â½Â Ã§Å¡â€žÃ¤ÂºÂºÃ¦Â°â€˜Ã¨Â¾â€ºÃ¥â€¹Â¤Ã¥Å Â³Ã¤Â½Å“Ã¯Â¼Å’Ã¤Â»â€“Ã¤Â»Â¬Ã§Å¡â€žÃ¤Â¼â„¢Ã©Â£Å¸Ã¤Â¿ÂÃ©Å¡Å“Ã¨â€¡Â³Ã¥â€¦Â³Ã©â€¡ÂÃ¨Â¦ÂÃ£â‚¬â€šÃ¥Â¼â‚¬Ã¥Ââ€˜Ã¤Â¸â‚¬Ã§â€°â€¡Ã¥â€ Å“Ã§â€Â°Ã¦ÂÂ¥Ã¦Â»Â¡Ã¨Â¶Â³Ã§Â²Â®Ã©Â£Å¸Ã©Å“â‚¬Ã¦Â±â€šÃ£â‚¬â€šÃ¥Â½â€œÃ¥Â»ÂºÃ§Â­â€˜Ã¥Â®Å’Ã¦Ë†ÂÃ¤Âºâ€ Ã¥â€ ÂÃ¥â€ºÅ¾Ã¦ÂÂ¥Ã£â‚¬â€š');
define('Q2_ORDER', 'Ã§â€ºÂ®Ã¦Â â€¡:</p>Ã¥Â¼â‚¬Ã¥Ââ€˜Ã¤Â¸â‚¬Ã§â€°â€¡Ã¥â€ Å“Ã§â€Â°Ã£â‚¬â€š');
define('Q2_RESP', 'Ã¥Â¾Ë†Ã¥Â¥Â½Ã¯Â¼Å’Ã¤Â½Â Ã§Å¡â€žÃ¤ÂºÂºÃ¦Â°â€˜Ã¥ÂÆ’Ã¥Â¾â€”Ã©Â¥Â±Ã©Â¥Â­Ã¤Âºâ€ Ã£â‚¬â€š');
define('Q2_REWARD', 'Ã¤Â½Â Ã§Å¡â€žÃ¥Â¥â€“Ã¥Å Â±:</p>1 Ã¥Â¤Â© Travian');

define('Q3', 'Ã¤Â»Â»Ã¥Å Â¡ 3: Ã¤Â½Â Ã¦Ââ€˜Ã¥Âºâ€žÃ§Å¡â€žÃ¥ÂÂÃ¥Â­â€”');
define('Q3_DESC', 'Creative as you are you can grant your village the ultimate name.<br><br>Click on &#39;profile&#39; in the left hand menu and then select &#39;change profile&#39;...');
define('Q3_ORDER', 'Order:</p>Change your village&#39;s name to something nice.');
define('Q3_RESP', 'Wow, a great name for their village. It could have been the name of my village!...');

define('Q4', 'Ã¤Â»Â»Ã¥Å Â¡ 4: Other Players');
define('Q4_DESC', 'In '.SERVER_NAME.' you play along with billions of other players. Click &#39;statistics&#39; in the top menu to look up your rank and enter it here.');
define('Q4_ORDER', 'Order:</p>Look for your rank in the statistics and enter it here.');
define('Q4_BUTN', 'complete task');
define('Q4_RESP', 'Exactly! That&#39;s your rank.');

define('Q5', 'Ã¤Â»Â»Ã¥Å Â¡ 5: Two Building Orders');
define('Q5_DESC', 'Build an iron mine and a clay pit. Of iron and clay one can never have enough.');
define('Q5_ORDER', 'Order:</p><ul><li>Extend one iron mine.</li><li>Extend one clay pit.</li></ul>');
define('Q5_RESP', 'As you noticed, building orders take rather long. The world of '.SERVER_NAME.' will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.<br><br>The best thing to do is occasionally checking your village and giving you subjects new tasks to do.');

define('Q6', 'Ã¤Â»Â»Ã¥Å Â¡ 6: Messages');
define('Q6_DESC', 'You can talk to other players using the messaging system. I sent a message to you. Read it and come back here.<br><br>P.S. Don&#39;t forget: on the left the reports, on the right the messages.');
define('Q6_ORDER', 'Order:</p>Read your new message.');
define('Q6_RESP', 'You received it? Very good.<br><br>Here is some Gold. With Gold you can do several things, e.g. extend your   in the left hand menu.');
define('Q6_RESP1', '-Account or increase your resource production.To do so click ');
define('Q6_RESP2', 'in the left hand menu.');
define('Q6_SUBJECT', 'Message From The Taskmaster');
define('Q6_MESSAGE', 'You are to be informed that a nice reward is waiting for you at the taskmaster.<br><br>Hint: The message has been generated automatically. An answer is not necessary.');

define('Q7', 'Ã¤Â»Â»Ã¥Å Â¡ 7: One Each!');
define('Q7_DESC', 'Now we should increase your resource production a bit. Build an additional woodcutter, clay pit, iron mine and cropland to level 1.');
define('Q7_ORDER', 'Order:</p>Extend one more of each resource tile to level 1.');
define('Q7_RESP', 'Very good, great develop of resources production.');

define('Q8', 'Ã¤Â»Â»Ã¥Å Â¡ 8: Huge Army!');
define('Q8_DESC', 'Now I&#39;ve got a very special quest for you. I am hungry. Give me 200 crop!<br><br>In return I will try to organize a huge army to protect your village.');
define('Q8_ORDER', 'Order:</p>Send 200 crop to the taskmaster.');
define('Q8_BUTN', 'Send crop');
define('Q8_NOCROP', 'No Enough Crop!');

define('Q9', 'Ã¤Â»Â»Ã¥Å Â¡ 9: Everything to 1.');
define('Q9_DESC', 'In Travian there is always something to do! While you are waiting for incoming the huge army, Now we should increase your resource production a bit. Extend all your resource tiles to level 1.');
define('Q9_ORDER', 'Order:</p>Extend all resource tiles to level 1.');
define('Q9_RESP', 'Very good, your resource production just thrives.<br><br>Soon we can start with constructing buildings in the village.');

define('Q10', 'Ã¤Â»Â»Ã¥Å Â¡ 10: Dove of Peace');
define('Q10_DESC', 'The first days after signing up you are protected against attacks by your fellow players. You can see how long this protection lasts by adding the code <b>[#0]</b> to your profile.');
define('Q10_ORDER', 'Order:</p>Write the code <b>[#0]</b> into your profile by adding it to one of the two description fields.');
define('Q10_RESP', 'Well done! Now everyone can see what a great warrior the world is approached by.');
define('Q10_REWARD', 'Your reward:</p>2 day Travian');

define('Q11', 'Ã¤Â»Â»Ã¥Å Â¡ 11: Neighbours!');
define('Q11_DESC', 'Around you, there are many different villages. One of them is named. ');
define('Q11_DESC1', ' Click on &#39;map&#39; in the header menu and look for that village. The name of your neighbours&#39; villages can be seen when hovering your mouse over any of them.');
define('Q11_ORDER', 'Order:</p>Look for the coordinates of ');
define('Q11_ORDER1', 'and enter them here.');
define('Q11_RESP', 'Exactly, there ');
define('Q11_RESP1', ' Village! As many resources as you reach this village. Well, almost as much ...');
define('Q11_BUTN', 'complete task');

define('Q12', 'Ã¤Â»Â»Ã¥Å Â¡ 12: Cranny');
define('Q12_DESC', 'It&#39;s getting time to erect a cranny. The world of '.SERVER_NAME.' is dangerous.<br><br>Many players live by stealing other players&#39; resources. Build a cranny to hide some of your resources from enemies.');
define('Q12_ORDER', 'Order:</p>Construct a Cranny.');
define('Q12_RESP', 'Well done, now it&#39;s way harder for your mean fellow players to plunder your village.<br><br>If under attack, your villagers will hide the resources in the Cranny all on their own.');

define('Q13', 'Ã¤Â»Â»Ã¥Å Â¡ 13: To Two.');
define('Q13_DESC', 'In '.SERVER_NAME.' there is always something to do! Extend one woodcutter, one clay pit, one iron mine and one cropland to level 2 each.');
define('Q13_ORDER', 'Order:</p>Extend one of each resource tile to level 2.');
define('Q13_RESP', 'Very good, your village grows and thrives!');

define('Q14', 'Ã¤Â»Â»Ã¥Å Â¡ 14: Instructions');
define('Q14_DESC', 'In the ingame instructions you can find short information texts about different buildings and types of units.<br><br>Click on &#39;instructions&#39; at the left to find out how much lumber is required for the barracks.');
define('Q14_ORDER', 'Order:</p>Enter how much lumber barracks cost');
define('Q14_BUTN', 'complete task');
define('Q14_RESP', 'Exactly! Barracks cost 210 lumber.');

define('Q15', 'Ã¤Â»Â»Ã¥Å Â¡ 15: Main Building');
define('Q15_DESC', 'Your master builders need a main building level 3 to erect important buildings such as the marketplace or barracks.');
define('Q15_ORDER', 'Order:</p>Extend your main building to level 3.');
define('Q15_RESP', 'Well done. The main building level 3 has been completed.<br><br>With this upgrade your master builders cannot only construct more types of buildings but also do so faster.');

define('Q16', 'Ã¤Â»Â»Ã¥Å Â¡ 16: Advanced!');
define('Q16_DESC', 'Look up your rank in the player statistics again and enjoy your progress.');
define('Q16_ORDER', 'Order:</p>Look for your rank in the statistics and enter it here.');
define('Q16_RESP', 'Well done! That&#39;s your current rank.');

define('Q17', 'Ã¤Â»Â»Ã¥Å Â¡ 17: Weapons or Dough');
define('Q17_DESC', 'Now you have to make a decision: Either trade peacefully or become a dreaded warrior.<br><br>For the marketplace you need a granary, for the barracks you need a rally point.');
define('Q17_BUTN', 'Economy');
define('Q17_BUTN1', 'Military');

define('Q18', 'Ã¤Â»Â»Ã¥Å Â¡ 18: Military');
define('Q18_DESC', 'A brave decision. To be able to send troops you need a rally point.<br><br>The rally point must be built on a specific building site. The ');
define('Q18_DESC1', ' building site.');
define('Q18_DESC2', ' is located on the right side of the main building, slightly below it. The building site itself is curved.');
define('Q18_ORDER', 'Order:</p>Construct a rally point.');
define('Q18_RESP', 'Your rally point has been erected! A good move towards world domination!');

define('Q19', 'Ã¤Â»Â»Ã¥Å Â¡ 19: Barracks');
define('Q19_DESC', 'Now you have a main building level 3 and a rally point. That means that all prerequisites for building barracks have been fulfilled.<br><br>You can use the barracks to train troops for fighting.');
define('Q19_ORDER', 'Order:</p>Construct barracks.');
define('Q19_RESP', 'Well done... The best instructors from the whole country have gathered to train your men\u2019s fighting skills to top form.');

define('Q20', 'Ã¤Â»Â»Ã¥Å Â¡ 20: Train.');
define('Q20_DESC', 'Now that you have barracks you can start training troops. Train two ');
define('Q20_ORDER', 'Please train 2 ');
define('Q20_RESP', 'The foundation for your glorious army has been laid.<br><br>Before sending your army off to plunder you should check with the.');
define('Q20_RESP1', 'Combat Simulator');
define('Q20_RESP2', 'to see how many troops you need to successfully fight one rat without losses.');

define('Q21', 'Ã¤Â»Â»Ã¥Å Â¡ 18: Economy');
define('Q21_DESC', 'Trade & Economy was your choice. Golden times await you for sure!');
define('Q21_ORDER', 'Order:</p>Construct a Granary.');
define('Q21_RESP', 'Well done! With the Granary you can store more wheat.');

define('Q22', 'Ã¤Â»Â»Ã¥Å Â¡ 19: Warehouse');
define('Q22_DESC', 'Not only Crop has to be saved. Other resources can go to waste as well if they are not stored correctly. Construct a Warehouse!');
define('Q22_ORDER', 'Order:</p>Construct Warehouse.');
define('Q22_RESP', ';Well done, your Warehouse is complete...&rdquo;</i><br>Now you have fulfilled all prerequisites required to construct a Marketplace.');

define('Q23', 'Ã¤Â»Â»Ã¥Å Â¡ 20: Marketplace.');
define('Q23_DESC', ';Construct a Marketplace so you can trade with your fellow players.');
define('Q23_ORDER', 'Order:</p>Please build a Marketplace.');
define('Q23_RESP', ';The Marketplace has been completed. Now you can make offers of your own and accept foreign offers! When creating your own offers, you should think about offering what other players need most to get more profit.');

define('Q24', 'Ã¤Â»Â»Ã¥Å Â¡ 21: Everything to 2.');
define('Q24_DESC', 'Now we should increase your resource production a bit. Build an additional woodcutter, clay pit, iron mine and cropland to level 1.');
define('Q24_ORDER', 'Order:</p>Extend all resource tiles to level 2.');
define('Q24_RESP', 'Congratulations! Your village grows and thrives...');

define('Q28', 'Ã¤Â»Â»Ã¥Å Â¡ 22: Alliance.');
define('Q28_DESC', 'Teamwork is important in Travian. Players who work together organise themselves in alliances. Get an invitation from an alliance in your region and join this alliance. Alternatively, you can found your own alliance. To do this, you need a level 3 embassy.');
define('Q28_ORDER', 'Order:</p>Join an alliance or found one on your own.');
define('Q28_RESP', 'Is good! Now you&#39;re in a union called');
define('Q28_RESP1', ', and you&#39;re a member of their alliance with the faster you&#39;ll progress...');

define('Q29', 'Ã¤Â»Â»Ã¥Å Â¡ 23: Main Building to Level 5');
define('Q29_DESC', 'To be able to build a palace or residence, you will need a main building at level 5.');
define('Q29_ORDER', 'Order:</p>Upgrade your main building to level 5.');
define('Q29_RESP', 'The main building is level 5 now and you can build palace or residence...');

define('Q30', 'Ã¤Â»Â»Ã¥Å Â¡ 24: Granary to Level 3.');
define('Q30_DESC', 'That you do not lose crop, you should upgrade your granary.');
define('Q30_ORDER', 'Order:</p>Upgrade your granary to level 3.');
define('Q30_RESP', 'Granary is level 3 now...');

define('Q31', 'Ã¤Â»Â»Ã¥Å Â¡ 25: Warehouse to Level 7');
define('Q31_DESC', ' To make sure your resources won&#39;t overflow, you should upgrade your warehouse.');
define('Q31_ORDER', 'Order:</p>Upgrade your warehouse to level 7.');
define('Q31_RESP', 'Warehouse has upgraded to level 7...');

define('Q32', 'Ã¤Â»Â»Ã¥Å Â¡ 26: All to five!');
define('Q32_DESC', 'You will always need more resources. Resource tiles are quite expensive but will always pay out in the long term.');
define('Q32_ORDER', 'Order:</p>Upgrade all resources tiles to level 5.');
define('Q32_RESP', 'All resources are at level 5, very good, your village grows and thrives!');

define('Q33', 'Ã¤Â»Â»Ã¥Å Â¡ 27: Palace or Residence?');
define('Q33_DESC', 'To found a new village, you will need settlers. Those you can train in either a palace or a residence.');
define('Q33_ORDER', 'Order:</p>Build a palace or residence to level 10.');
define('Q33_RESP', 'had reached to level 10, you can now train settlers and found your second village. Notice the cultural points...');

define('Q34', 'Ã¤Â»Â»Ã¥Å Â¡ 28: 3 settlers.');
define('Q34_DESC', 'To found a new village, you will need settlers. They can be trained  in either a palace or a residence.');
define('Q34_ORDER', 'Order:</p>Train 3 settlers.');
define('Q34_RESP', '3 settlers were trained. To found new village you need at least');
define('Q34_RESP1', 'culture points...');

define('Q35', 'Ã¤Â»Â»Ã¥Å Â¡ 29: New Village.');
define('Q35_DESC', 'There are a lot of empty tiles on the map. Find one that suits you and found a new village');
define('Q35_ORDER', 'Order:</p>Found a new village.');
define('Q35_RESP', 'I am proud of you! Now you have two villages and have all the possibilities to build a mighty empire. I wish you luck with this.');

define('Q36', ' Ã¤Â»Â»Ã¥Å Â¡ 30: Build a ');
define('Q36_DESC', 'Now that you have trained some soldiers, you should build a ');
define('Q36_DESC1', ' too. It increases the base defence and your soldiers will receive a defensive bonus.');
define('Q36_ORDER', 'Order:</p>Build a ');
define('Q36_RESP', 'That&#39;s what I&#39;m talking about. A ');
define('Q36_RESP1', ' Very useful. It increases the defence of the troops in the village.');

define('Q37', 'Tasks');
define('Q37_DESC', 'All tasks achieved!');

define('RESOURCES_OVERVIEW', 'Resource overview');
define('YOUR_RES_DELIVERIES', 'Your resource deliveries');
define('DELIVERY', 'Delivery');
define('DELIVERY_TIME', 'Delivery time');
define('STATUS', 'Status');
define('FETCH', 'fetch');
define('FETCHED', 'fetched');
define('ON_HOLD', 'on hold');
define('ONE_DAY_OF_TRAVIAN', '1 day Travian ');
define('TWO_DAYS_OF_TRAVIAN', '2 days Travian ');

//Quest 25
define('Q25_7', 'Ã¤Â»Â»Ã¥Å Â¡ 7: Neighbours!');
define('Q25_7_DESC', 'Around you, there are many different villages. One of them is named. ');
define('Q25_7_DESC1', 'Click &#39;Map&#39; in the head menu and look for that village. The name of your neighbours&#39; villages can be seen once you hover your mouse over any of them.');
define('Q25_7_ORDER', '</p><b>Order:</b><br>Look for the coordinates of ');
define('Q25_7_ORDER1', 'and enter them here.');
define('Q25_7_RESP', 'Exactly, there ');
define('Q25_7_RESP1', ' Village! As many resources as you reach this village. Well, almost as much ...');

define('Q25_8', 'Ã¤Â»Â»Ã¥Å Â¡ 8: Huge Army!');
define('Q25_8_DESC', 'Now I&#39;ve got a very special Quest for you. I am hungry. Give me 200 crop!<br><br>In return I will try to organize a huge army to protect your village.');
define('Q25_8_ORDER', 'Order:</p>Send 200 crop to the taskmaster.');
define('Q25_8_BUTN', 'Send crop');
define('Q25_8_NOCROP', 'No Enough Crop!');

define('Q25_9', 'Ã¤Â»Â»Ã¥Å Â¡ 9: One each!');
define('Q25_9_DESC', 'In '.SERVER_NAME.' there is always something to do! While you are waiting for your new army,<br><br>extend one additional woodcutter, clay pit, iron mine and cropland to level 1');
define('Q25_9_ORDER', 'Order:</p>Extend one more of each resource tile to level 1.');
define('Q25_9_RESP', 'Very good, great development of resource production.');

define('Q25_10', 'Ã¤Â»Â»Ã¥Å Â¡ 10: Comming Soon!');
define('Q25_10_DESC', 'Now there is time for a small break until the gigantic army I sent you arrives.<br><br>Until then you can explore the map or extend a few resource tiles.');
define('Q25_10_ORDER', 'Order:</p>Wait for the taskmaster&#39;s army to arrive');
define('Q25_10_RESP', 'Now a huge army from taskmaster has arrive to protect your village');
define('Q25_10_REWARD', 'Your reward:</p>2 days more of Travian');

define('Q25_11', 'Ã¤Â»Â»Ã¥Å Â¡ 11: Reports');
define('Q25_11_DESC', 'Every time something important happens to your account you will receive a report.<br><br>You can see these by clicking on the left half of the 5th button (from left to right). Read the report and come back here.');
define('Q25_11_ORDER', 'Order:</p>Read your latest report.');
define('Q25_11_RESP', 'You received it? Very good. Here is your reward.');

define('Q25_12', 'Ã¤Â»Â»Ã¥Å Â¡ 12: Everything to 1.');
define('Q25_12_DESC', 'Now we should increase your resource production a bit.');
define('Q25_12_ORDER', 'Order:</p>Extend all resource tiles to level 1.');
define('Q25_12_RESP', 'Very good, your resource production just thrives.<br><br>Soon we can start with constructing buildings in the village.');

define('Q25_13', 'Ã¤Â»Â»Ã¥Å Â¡ 13: Dove of Peace');
define('Q25_13_DESC', 'The first days after signing up you are protected against attacks by your fellow players. You can see how long this protection lasts by adding the code <b>[#0]</b> to your profile.');
define('Q25_13_ORDER', 'Order:</p>Write the code <b>[#0]</b> into your profile by adding it to one of the two description fields.');
define('Q25_13_RESP', 'Well done! Now everyone can see what a great warrior the world is approached by.');

define('Q25_14', 'Ã¤Â»Â»Ã¥Å Â¡ 14: Cranny');
define('Q25_14_DESC', 'It&#39;s getting time to erect a cranny. The world of <b>'.SERVER_NAME.'</b> is dangerous.<br><br>Many players live by stealing other players&#39; resources. Build a cranny to hide some of your resources from enemies.');
define('Q25_14_ORDER', 'Order:</p>Construct a Cranny.');
define('Q25_14_RESP', 'Well done, now it&#39;s way harder for your mean fellow players to plunder your village.<br><br>If under attack, your villagers will hide the resources in the Cranny all on their own.');

define('Q25_15', 'Ã¤Â»Â»Ã¥Å Â¡ 15: To Two.');
define('Q25_15_DESC', 'In <b>'.SERVER_NAME.'</b> there is always something to do! Extend one woodcutter, one clay pit, one iron mine and one cropland to level 2 each.');
define('Q25_15_ORDER', 'Order:</p>Extend one of each resource tile to level 2.');
define('Q25_15_RESP', 'Very good, your village grows and thrives!');

define('Q25_16', 'Ã¤Â»Â»Ã¥Å Â¡ 16: Instructions');
define('Q25_16_DESC', 'In the ingame instructions you can find short information texts about different buildings and types of units.<br><br>Click on &#39;instructions&#39; at the left to find out how much lumber is required for the barracks.');
define('Q25_16_ORDER', 'Order:</p>Enter how much lumber barracks cost');
define('Q25_16_BUTN', 'complete task');
define('Q25_16_RESP', 'Exactly! Barracks cost 210 lumber.');

define('Q25_17', 'Ã¤Â»Â»Ã¥Å Â¡ 17: Main Building');
define('Q25_17_DESC', 'Your master builders need a main building level 3 to erect important buildings such as the marketplace or barracks.');
define('Q25_17_ORDER', 'Order:</p>Extend your main building to level 3.');
define('Q25_17_RESP', 'Well done. The main building level 3 has been completed.<br><br>With this upgrade your master builders can construct more types of buildings and also do so faster.');

define('Q25_18', 'Ã¤Â»Â»Ã¥Å Â¡ 18: Advanced!');
define('Q25_18_DESC', 'Look up your rank in the player statistics again and enjoy your progress.');
define('Q25_18_ORDER', 'Order:</p>Look for your rank in the statistics and enter it here.');
define('Q25_18_RESP', 'Well done! That&#39;s your current rank.');

define('Q25_19', 'Ã¤Â»Â»Ã¥Å Â¡ 19: Weapons or Dough');
define('Q25_19_DESC', 'Now you have to make a decision: Either trade peacefully or become a dreaded warrior.<br><br>For the marketplace you need a granary, for the barracks you need a rally point.');
define('Q25_19_BUTN', 'Economy');
define('Q25_19_BUTN1', 'Military');

define('Q25_20', 'Ã¤Â»Â»Ã¥Å Â¡ 19: Economy');
define('Q25_20_DESC', 'Trade & Economy was your choice. Golden times await you for sure!');
define('Q25_20_ORDER', 'Order:</p>Construct a Granary.');
define('Q25_20_RESP', 'Well done! With the Granary you can store more wheat.');

define('Q25_21', 'Ã¤Â»Â»Ã¥Å Â¡ 20: Warehouse');
define('Q25_21_DESC', 'Not only Crop has to be saved. Other resources can go to waste as well if they are not stored correctly. Construct a Warehouse!');
define('Q25_21_ORDER', 'Order:</p>Construct Warehouse.');
define('Q25_21_RESP', ';Well done, your Warehouse is complete...&rdquo;</i><br>Now you have fulfilled all prerequisites required to construct a Marketplace.');

define('Q25_22', 'Ã¤Â»Â»Ã¥Å Â¡ 21: Marketplace.');
define('Q25_22_DESC', ';Construct a Marketplace so you can trade with your fellow players.');
define('Q25_22_ORDER', 'Order:</p>Please build a Marketplace.');
define('Q25_22_RESP', 'The Marketplace has been completed. Now you can make offers of your own and accept foreign offers! When creating your own offers, you should think about offering what other players need most to get more profit.');

define('Q25_23', 'Ã¤Â»Â»Ã¥Å Â¡ 19: Military');
define('Q25_23_DESC', 'A brave decision. To be able to send troops you need a rally point.<br><br>The rally point must be built on a specific building site. The ');
define('Q25_23_DESC1', ' building site.');
define('Q25_23_DESC2', ' is located on the right side of the main building, slightly below it. The building site itself is curved.');
define('Q25_23_ORDER', 'Order:</p>Construct a rally point.');
define('Q25_23_RESP', 'Your rally point has been erected! A good move towards world domination!');

define('Q25_24', 'Ã¤Â»Â»Ã¥Å Â¡ 20: Barracks');
define('Q25_24_DESC', 'Now you have a main building level 3 and a rally point. That means that all prerequisites for building barracks have been fulfilled.<br><br>You can use the barracks to train troops for fighting.');
define('Q25_24_ORDER', 'Order:</p>Construct barracks.');
define('Q25_24_RESP', 'Well done... The best instructors from the whole country have gathered to train your men\u2019s fighting skills to top form.');

define('Q25_25', 'Ã¤Â»Â»Ã¥Å Â¡ 21: Train.');
define('Q25_25_DESC', 'Now that you have barracks you can start training troops. Train two ');
define('Q25_25_ORDER', 'Please train 2 ');
define('Q25_25_RESP', 'The foundation for your glorious army has been laid.<br><br>Before sending your army off to plunder you should check with the');
define('Q25_25_RESP1', 'Combat Simulator');
define('Q25_25_RESP2', 'to see how many troops you need to successfully fight one rat without losses.');

define('Q25_26', 'Ã¤Â»Â»Ã¥Å Â¡ 22: Everything to 2.');
define('Q25_26_DESC', 'Now it&#39;s time again to extend the cornerstones of might and wealth! This time level 1 is not enough... it will take a while but in the end it will be worth it. Extend all your resource tiles to level 2!');
define('Q25_26_ORDER', 'Order:</p>Extend all resource tiles to level 2.');
define('Q25_26_RESP', 'Congratulations! Your village grows and thrives...');

define('Q25_27', 'Ã¤Â»Â»Ã¥Å Â¡ 23: Friends.');
define('Q25_27_DESC', 'As single player it is hard to compete with attackers. It is to your advantage if your neighbours like you.<br><br>It is even better if you play together with friends. Did you know that you can earn '.GOLD_IMG.' by inviting friends?');
define('Q25_27_ORDER', 'Order:</p>How much '.GOLD_IMG.' do you earn for inviting a friend?');
define('Q25_27_RESP', 'Correct! You get 50 '.GOLD_IMG.' if your invited friend have 2 village.');

define('Q25_28', 'Ã¤Â»Â»Ã¥Å Â¡ 24: Construct Embassy.');
define('Q25_28_DESC', 'The world of Travian is dangerous. You already built a cranny to protect you against attackers.<br><br>A good alliance will give you even better protection.');
define('Q25_28_ORDER', 'Order:</p>To accept invitations from alliances, build an embassy.');
define('Q25_28_RESP', 'Yes! You can wait invitation from an alliance or create you own if embassy has level 3');

define('Q25_29', 'Ã¤Â»Â»Ã¥Å Â¡ 25: Alliance.');
define('Q25_29_DESC', 'Teamwork is important in Travian. Players who work together organise themselves in alliances. Get an invitation from an alliance in your region and join this alliance. Alternatively, you can found your own alliance. To do this, you need a level 3 embassy.');
define('Q25_29_ORDER', 'Order:</p>Join an alliance or found your own alliance.');
define('Q25_29_RESP', 'Well done! Now you&#39;re in a union called');
define('Q25_29_RESP1', ', and you&#39;re a member of their alliance.<br>Working together you will all progress faster...');

define('Q25_30', 'Ã¤Â»Â»Ã¥Å Â¡');
define('Q25_30_DESC', 'Ã¦â€°â‚¬Ã¦Å“â€°Ã¤Â»Â»Ã¥Å Â¡Ã©Æ’Â½Ã¥Â·Â²Ã§Â»ÂÃ¥Â®Å’Ã¦Ë†Â!');


//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
define('U0', 'Ã¨â€¹Â±Ã©â€ºâ€ž');

//ROMAN UNITS
define('U1', 'Ã¥ÂÂ¤Ã§Â½â€”Ã©Â©Â¬Ã¦Â­Â¥Ã¥â€¦Âµ');
define('U2', 'Ã§Â¦ÂÃ¥ÂÂ«Ã¥â€¦Âµ');
define('U3', 'Ã¥Â¸ÂÃ¥â€ºÂ½Ã¥â€¦Âµ');
define('U4', 'Ã¤Â½Â¿Ã¨Å â€šÃ©Âªâ€˜Ã¥Â£Â«');
define('U5', 'Ã¥Â¸ÂÃ¥â€ºÂ½Ã©Âªâ€˜Ã¥Â£Â«');
define('U6', 'Ã¥Â°â€ Ã¥â€ â€ºÃ©Âªâ€˜Ã¥Â£Â«');
define('U7', 'Ã¦â€Â»Ã¥Å¸Å½Ã©â€Â¤');
define('U8', 'Ã§ÂÂ«Ã§â€žÂ°Ã¦Å â€¢Ã§Å¸Â³Ã¦Å“Âº');
define('U9', 'Ã¥Ââ€šÃ¨Â®Â®Ã¥â€˜Ëœ');
define('U10', 'Ã¦â€¹â€œÃ¨Ââ€™Ã¨â‚¬â€¦');

//TEUTON UNITS
define('U11', 'Ã¦Â£ÂÃ¦Â£â€™Ã¥â€¦Âµ');
define('U12', 'Ã§Å¸â€ºÃ¥â€¦Âµ');
define('U13', 'Ã¦â€“Â§Ã¥Â¤Â´Ã¥â€¦Âµ');
define('U14', 'Ã¦Å½Â¢Ã¥Â­Â');
define('U15', 'Ã¦Â¸Â¸Ã©Âªâ€˜Ã¥â€¦Âµ');
define('U16', 'Ã¦ÂÂ¡Ã©Â¡Â¿Ã©Âªâ€˜Ã¥Â£Â«');
define('U17', 'Ã¥â€ Â²Ã¨Â½Â¦');
define('U18', 'Ã§Â®â‚¬Ã¦Ëœâ€œÃ¦Å â€¢Ã§Å¸Â³Ã¦Å“Âº');
define('U19', 'Ã¥ÂÂ¸Ã¤Â»Â¤Ã¥Â®Ëœ');
define('U20', 'Ã¦â€¹â€œÃ¨Ââ€™Ã¨â‚¬â€¦');

//GAUL UNITS
define('U21', 'Ã¦â€“Â¹Ã©ËœÂµÃ¥â€¦Âµ');
define('U22', 'Ã¥â€°â€˜Ã¥Â®Â¢');
define('U23', 'Ã¥Â¯Â»Ã¨Â·Â¯Ã¨â‚¬â€¦');
define('U24', 'Ã©â€ºÂ·Ã¦Â³â€¢Ã¥Â¸Ë†');
define('U25', 'Ã¥Â¾Â·Ã©Â²ÂÃ¤Â¼Å Ã©Âªâ€˜Ã¥â€¦Âµ');
define('U26', 'Ã¦ÂµÂ·Ã©Â¡Â¿Ã©Âªâ€˜Ã¥Â£Â«');
define('U27', 'Ã¥â€ Â²Ã¨Â½Â¦');
define('U28', 'Ã¦Å â€¢Ã§Å¸Â³Ã¦Å“Âº');
define('U29', 'Ã¦â€”ÂÃ©â€¢Â¿');
define('U30', 'Ã¦â€¹â€œÃ¨Ââ€™Ã¨â‚¬â€¦');
define('U99', 'Ã©â„¢Â·Ã©ËœÂ±');

//NATURE UNITS
define('U31', 'Ã¨â‚¬ÂÃ©Â¼Â ');
define('U32', 'Ã¨Å“ËœÃ¨â€ºâ€º');
define('U33', 'Ã¨â€ºâ€¡');
define('U34', 'Ã¨Ââ„¢Ã¨ÂÂ ');
define('U35', 'Ã©â€¡Å½Ã§Å’Âª');
define('U36', 'Ã§â€¹Â¼');
define('U37', 'Ã§â€ Å ');
define('U38', 'Ã©Â³â€žÃ©Â±Â¼');
define('U39', 'Ã¨â‚¬ÂÃ¨â„¢Å½');
define('U40', 'Ã¥Â¤Â§Ã¨Â±Â¡');

//NATARS UNITS
define('U41', 'Ã©â€¢Â¿Ã¦Å¾ÂªÃ¥â€¦Âµ');
define('U42', 'Ã¨Ââ€ Ã¦Â£ËœÃ¦Ë†ËœÃ¥Â£Â«');
define('U43', 'Ã§Â¦ÂÃ¥ÂÂ«Ã¥â€¦Âµ');
define('U44', 'Ã§Å’Å½Ã©Â¹Â°');
define('U45', 'Ã¦â€“Â§Ã¥Â¤Â´Ã©Âªâ€˜Ã¥â€¦Âµ');
define('U46', 'Ã§ÂºÂ³Ã¥Â¡â€Ã©Âªâ€˜Ã¥Â£Â«');
define('U47', 'Ã¦Ë†ËœÃ¨Â±Â¡');
define('U48', 'Ã¥Â°â€žÃ§Å¸Â³Ã¦Å“Âº');
define('U49', 'Ã§ÂºÂ³Ã¥Â¡â€Ã¥Â¸ÂÃ§Å½â€¹');
define('U50', 'Ã§ÂºÂ³Ã¥Â¡â€Ã¦â€¹â€œÃ¨Ââ€™Ã¨â‚¬â€¦');

//MONSTER UNITS
define('U51', 'Monster Peon');
define('U52', 'Monster Hunter');
define('U53', 'Monster Warrior');
define('U54', 'Ghost');
define('U55', 'Monster Steed');
define('U56', 'Monster War Steed');
define('U57', 'Monster Ram');
define('U58', 'Monster Catapult');
define('U59', 'Monster Chief');
define('U60', 'Monster Settler');

//INDEX.php
define('LOGIN', 'Ã§â„¢Â»Ã¥Â½â€¢');
define('PLAYERS', 'Ã§Å½Â©Ã¥Â®Â¶');
define('MODERATOR', 'Ã§Â®Â¡Ã§Ââ€ Ã¥â€˜Ëœ');
define('ACTIVE', 'Ã¦Â´Â»Ã¨Â·Æ’');
define('ONLINE', 'Ã¥Å“Â¨Ã§ÂºÂ¿');
define('TUTORIAL', 'Ã¦â€¢â„¢Ã§Â¨â€¹');
define('FAQ', 'Faq');
define('SPIELREGELN', 'Game Rules');
define('PLAYER_STATISTICS', 'Ã§Å½Â©Ã¥Â®Â¶Ã¦â€¢Â°Ã¦ÂÂ®');
define('TOTAL_PLAYERS', 'Ã¥â€¦Â±Ã¦Å“â€° '.PLAYERS.' Ã¥ÂÂÃ§Å½Â©Ã¥Â®Â¶');
define('ACTIVE_PLAYERS', 'Ã¦Â´Â»Ã¨Â·Æ’Ã§Å½Â©Ã¥Â®Â¶');
define('ONLINE_PLAYERS', PLAYERS.' Ã§Å½Â©Ã¥Â®Â¶Ã¥Å“Â¨Ã§ÂºÂ¿');
define('MP_STRATEGY_GAME', SERVER_NAME.' - Ã¥Â¤Å¡Ã¤ÂºÂºÃ¥Å“Â¨Ã§ÂºÂ¿Ã§Â­â€“Ã§â€¢Â¥Ã¦Â¸Â¸Ã¦Ë†Â');
define('WHAT_IS', SERVER_NAME.' Ã¦ËœÂ¯Ã©Â£Å½Ã©ÂÂ¡Ã¥â€¦Â¨Ã¤Â¸â€“Ã§â€¢Å’Ã§Å¡â€žÃ§Â½â€˜Ã©Â¡ÂµÃ¦Â¸Â¸Ã¦Ë†ÂÃ£â‚¬â€š Ã¤Â½Å“Ã¤Â¸Âº '.SERVER_NAME.' Ã§Å¡â€žÃ¤Â¸â‚¬Ã¥â€˜ËœÃ¯Â¼Å’Ã¤Â½Â Ã¥Â°â€ Ã¥Â»ÂºÃ§Â«â€¹Ã¤Â½Â Ã¨â€¡ÂªÃ¥Â·Â±Ã§Å¡â€žÃ¥Â¸ÂÃ¥â€ºÂ½Ã£â‚¬ÂÃ§Â»â€žÃ¥Â»ÂºÃ¥Â¼ÂºÃ¥Â¤Â§Ã§Å¡â€žÃ¥â€ â€ºÃ©ËœÅ¸Ã£â‚¬ÂÃ¤Â¸Å½Ã¤Â½Â Ã§Å¡â€žÃ§â€ºÅ¸Ã¥Ââ€¹Ã¥Â¹Â¶Ã¨â€šÂ©Ã¤Â½Å“Ã¦Ë†ËœÃ¥Â¹Â¶Ã¦Å“â‚¬Ã§Â»Ë†Ã§Â§Â°Ã©Å“Â¸Ã¤Â¸â€“Ã§â€¢Å’Ã£â‚¬â€š');
define('REGISTER_FOR_FREE', 'Ã¥Å“Â¨Ã¦Â­Â¤Ã¥â€¦ÂÃ¨Â´Â¹Ã¦Â³Â¨Ã¥â€ Å’!');
define('LATEST_GAME_WORLD', 'Ã¦Å“â‚¬Ã¦â€“Â°Ã¦Â¸Â¸Ã¦Ë†ÂÃ¤Â¸â€“Ã§â€¢Å’');
define('LATEST_GAME_WORLD2', 'Register on the latest<br>game world and enjoy<br>the advantages of<br>being one of the<br>first players.');
define('PLAY_NOW', 'Play '.SERVER_NAME.' now');
define('LEARN_MORE', 'Ã¤Âºâ€ Ã¨Â§Â£Ã¦â€ºÂ´Ã¥Â¤Å¡ <br>Ã¦Å“â€°Ã¥â€¦Â³ '.SERVER_NAME.'!');
define('LEARN_MORE2', 'Now with a revolutionised<br>server system, completely new<br>graphics <br>This clone is The Shiz!');
define('COMUNITY', 'Community');
define('BECOME_COMUNITY', 'Become part of our community now!');
define('BECOME_COMUNITY2', 'Become a part of one of<br>the biggest gaming<br>communities in the<br>world.');
define('NEWS', 'Ã¦â€“Â°Ã©â€”Â»');
define('SCREENSHOTS', 'Ã¦Â¸Â¸Ã¦Ë†ÂÃ¦Ë†ÂªÃ¥â€ºÂ¾');
define('FAQ', 'FAQ');
define('SPIELREGELN', 'Ã¨Â§â€žÃ¥Ë†â„¢');
define('AGB', 'Ã¦ÂÂ¡Ã¦Â¬Â¾Ã¥Â£Â°Ã¦ËœÅ½');
define('LEARN1', 'Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers.');
define('LEARN2', 'Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops.');
define('LEARN3', 'View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger.');
define('LEARN4', 'Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.');
define('LEARN5', 'Receive detailed reports about your adventures, trades and battles. Don&#39;t forget to check the brand new reports about the happenings taking place in your surroundings.');
define('LEARN6', 'Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.');
define('LOGIN_TO', 'Ã§â„¢Â»Ã¥Â½â€¢Ã¨â€¡Â³ '.SERVER_NAME);
define('REGIN_TO', 'Ã¦Â³Â¨Ã¥â€ Å’Ã¤ÂºÅ½ '.SERVER_NAME);
define('P_ONLINE', 'Ã¥Å“Â¨Ã§ÂºÂ¿Ã§Å½Â©Ã¥Â®Â¶: ');
define('P_TOTAL', 'Ã¦â€°â‚¬Ã¦Å“â€°Ã§Å½Â©Ã¥Â®Â¶: ');
define('CHOOSE', 'Ã¨Â¯Â·Ã©â‚¬â€°Ã¦â€¹Â©Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨');
define('STARTED', ' Ã¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã¥ÂÂ¯Ã¥Å Â¨Ã¤ÂºÅ½ '.round((time() - COMMENCE) / 86400).' Ã¥Â¤Â©Ã¥â€°ÂÃ£â‚¬â€š');

//ANMELDEN.php
define('NICKNAME', 'Ã¦ËœÂµÃ§Â§Â°');
define('EMAIL', 'Ã©â€šÂ®Ã§Â®Â±');
define('PASSWORD', 'Ã¥Â¯â€ Ã§Â Â');
define('NW', 'Ã¨Â¥Â¿Ã¥Å’â€”');
define('NE', 'Ã¤Â¸Å“Ã¥Å’â€”');
define('SW', 'Ã¨Â¥Â¿Ã¥Ââ€”');
define('SE', 'Ã¤Â¸Å“Ã¥Ââ€”');
define('RANDOM', 'Ã©Å¡ÂÃ¦Å“Âº');
define('ACCEPT_RULES', ' Ã¦Ë†â€˜Ã¦Å½Â¥Ã¥Ââ€”Ã¦Â¸Â¸Ã¦Ë†ÂÃ¨Â§â€žÃ¥Ë†â„¢Ã¥â€™Å’Ã¦ÂÂ¡Ã§ÂºÂ¦Ã¦ÂÂ¡Ã¦Â¬Â¾Ã£â‚¬â€š');
define('ONE_PER_SERVER', 'Ã¦Â¯ÂÃ¤Â½ÂÃ§Å½Â©Ã¥Â®Â¶Ã¥Å“Â¨Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã¤Â¸Å Ã¨â€¡Â³Ã¥Â¤Å¡Ã¥ÂÂªÃ¨Æ’Â½Ã¦â€¹Â¥Ã¦Å“â€°1Ã¤Â¸ÂªÃ¨Â´Â¦Ã¥ÂÂ·Ã£â‚¬â€š');
define('BEFORE_REGISTER', 'Ã¥Å“Â¨Ã¦Â³Â¨Ã¥â€ Å’Ã¨Â´Â¦Ã¥ÂÂ·Ã¥â€°ÂÃ¤Â½Â Ã¥Âºâ€Ã©Ëœâ€¦Ã¨Â¯Â» Travian <a href="/anleitung.php" target="_blank">Ã¦Â¸Â¸Ã¦Ë†ÂÃ¦Å’â€¡Ã¥Ââ€”</a> Ã¦ÂÂ¥Ã¤Âºâ€ Ã¨Â§Â£Ã¤Â¸â€°Ã¤Â¸ÂªÃ§Â§ÂÃ¦â€”ÂÃ¥Ââ€žÃ¨â€¡ÂªÃ§Å¡â€žÃ¤Â¼ËœÃ¥Å Â¿Ã¥â€™Å’Ã¥Å Â£Ã¥Å Â¿Ã£â‚¬â€š');
define('BUILDING_UPGRADING', 'Ã¥Â»ÂºÃ©â‚¬Â Ã¤Â¸Â­:');
define('HOURS', 'Ã¥Â°ÂÃ¦â€”Â¶');


//ATTACKS ETC.
define('TROOP_MOVEMENTS', 'Ã¨Â¡Å’Ã¥â€ â€ºÃ¤Â¸Â­:');
define('ARRIVING_REINF_TROOPS', 'Ã¥Ë†Â°Ã¦ÂÂ¥Ã§Å¡â€žÃ¥Â¢Å¾Ã¦ÂÂ´Ã©Æ’Â¨Ã©ËœÅ¸');
define('ARRIVING_ATTACKING_TROOPS', 'Ã¥Ë†Â°Ã¦ÂÂ¥Ã§Å¡â€žÃ¨Â¿â€ºÃ¦â€Â»Ã©Æ’Â¨Ã©ËœÅ¸');
define('ARRIVING_REINF_TROOPS_SHORT', 'Ã¥Â¢Å¾Ã¦ÂÂ´');
define('OWN_ATTACKING_TROOPS', 'Ã¥Â·Â±Ã¦â€“Â¹Ã¨Â¿â€ºÃ¦â€Â»Ã©Æ’Â¨Ã©ËœÅ¸');
define('ATTACK', 'Ã¨Â¿â€ºÃ¦â€Â»');
define('OWN_REINFORCING_TROOPS', 'Ã¥Â·Â±Ã¦â€“Â¹Ã¥Â¢Å¾Ã¦ÂÂ´Ã©Æ’Â¨Ã©ËœÅ¸');
define('NEWVILLAGE', 'Ã¦â€“Â°Ã¦Ââ€˜Ã¥Âºâ€ž');
define('FOUNDNEWVILLAGE', 'Ã¥Â»ÂºÃ§Â«â€¹Ã¦â€“Â°Ã¦Ââ€˜Ã¥Âºâ€ž');
define('UNDERATTACK', 'Ã¦Ââ€˜Ã¥Âºâ€žÃ©ÂÂ­Ã¥Ââ€”Ã¦â€Â»Ã¥â€¡Â»');
define('OASISATTACK', 'Ã§Â»Â¿Ã¦Â´Â²Ã©ÂÂ­Ã¥Ââ€”Ã¦â€Â»Ã¥â€¡Â»');
define('OASISATTACKS', 'Ã§Â»Â¿Ã¦Â´Â²Ã¦â€Â»Ã¥â€¡Â»');
define('RETURNFROM', 'Ã¨Â¿â€Ã¥â€ºÅ¾Ã¨â€¡Âª');
define('REINFORCEMENTFOR', 'Ã¥Â¢Å¾Ã¦ÂÂ´Ã¨â€¡Â³');
define('ATTACK_ON', 'Ã¨Â¿â€ºÃ¦â€Â»Ã¨â€¡Â³');
define('RAID_ON', 'Ã¦Å½Â Ã¥Â¤ÂºÃ¨â€¡Â³');
define('SCOUTING', 'Ã¤Â¾Â¦Ã¦Å¸Â¥');
define('PRISONERS', 'Ã¤Â¿ËœÃ¨â„¢Â');
define('PRISONERSIN', 'Ã¤Â¿ËœÃ¨â„¢ÂÃ¥Å“Â¨');
define('PRISONERSFROM', 'Ã¤Â¿ËœÃ¨â„¢ÂÃ¤Â»Å½');
define('TROOPS', 'Ã©Æ’Â¨Ã©ËœÅ¸');
define('BOUNTY', 'Ã¨ÂµÂÃ©â€¡â€˜');
define('ARRIVAL', 'Ã¦Å ÂµÃ¨Â¾Â¾');
define('CATAPULT_TARGET', 'Ã¦â€Â»Ã¥Å¸Å½Ã¥â„¢Â¨Ã§â€ºÂ®Ã¦Â â€¡');
define('INCOMING_TROOPS', 'Ã¥Ë†Â°Ã¦ÂÂ¥Ã§Å¡â€žÃ©Æ’Â¨Ã©ËœÅ¸');
define('TROOPS_ON_THEIR_WAY', 'Ã©â‚¬â€Ã¤Â¸Â­Ã§Å¡â€žÃ©Æ’Â¨Ã©ËœÅ¸');
define('OWN_TROOPS', 'Ã¥Â·Â±Ã¦â€“Â¹Ã©Æ’Â¨Ã©ËœÅ¸');
define('ON', 'Ã¥Å“Â¨');
define('AT', 'Ã¥Å“Â¨');
define('UPKEEP', 'Ã¦Â¶Ë†Ã¨â‚¬â€”');
define('SEND_BACK', 'Ã©â‚¬ÂÃ¨Â¿Ëœ');
define('TROOPS_IN_THE_VILLAGE', 'Ã¦Ââ€˜Ã¥Âºâ€žÃ¤Â¸Â­Ã§Å¡â€žÃ©Æ’Â¨Ã©ËœÅ¸');
define('TROOPS_IN_OTHER_VILLAGE', 'Ã¥â€¦Â¶Ã¤Â»â€“Ã¦Ââ€˜Ã¥Âºâ€žÃ§Å¡â€žÃ©Æ’Â¨Ã©ËœÅ¸');
define('TROOPS_IN_OASIS', 'Ã§Â»Â¿Ã¦Â´Â²Ã¤Â¸Â­Ã§Å¡â€žÃ©Æ’Â¨Ã©ËœÅ¸');
define('KILL', 'Ã¥â€¡Â»Ã¦Ââ‚¬');
define('FROM', 'Ã¤Â»Å½');
define('SEND_TROOPS', 'Ã¦Â´Â¾Ã©ÂÂ£Ã©Æ’Â¨Ã©ËœÅ¸');
define('TASKMASTER', 'Ã¤Â»Â»Ã¥Å Â¡Ã¥Â®Ëœ');
define('TO_THE_TASK', 'To the task');
define('VILLAGE_OF_THE_ELDERS', 'village of the elders');
define('VILLAGE_OF_THE_ELDERS_TROOPS', 'Ã¦â€”Â§Ã©Æ’Â¨Ã©ËœÅ¸Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€ž');

//SEND TROOP
define('REINFORCE', 'Ã¥Â¢Å¾Ã¦ÂÂ´');
define('NORMALATTACK', 'Ã¥Â¼ÂºÃ¦â€Â»');
define('RAID', 'Ã¦Å½Â Ã¥Â¤Âº');
define('OR', 'Ã¦Ë†â€“');
define('SENDTROOP', 'Ã¦Â´Â¾Ã©ÂÂ£Ã©Æ’Â¨Ã©ËœÅ¸');
define('NOTROOP', 'Ã¦â€”Â Ã©Æ’Â¨Ã©ËœÅ¸');

//map
define('DETAIL', 'Ã¨Â¯Â¦Ã¦Æ’â€¦');
define('ABANDVALLEY', 'Ã¨Ââ€™Ã¥Å“Â°');
define('OCCUPIED', 'Ã¥Â·Â²Ã¨Â¢Â«Ã¥ÂÂ Ã©Â¢â€ Ã§Å¡â€ž');
define('UNOCCUPIED', 'Ã¦Å“ÂªÃ¨Â¢Â«Ã¥ÂÂ Ã©Â¢â€ Ã§Å¡â€ž');
define('UNOCCUOASIS', 'Ã¦Å“ÂªÃ¨Â¢Â«Ã¥ÂÂ Ã©Â¢â€ Ã§Å¡â€žÃ§Â»Â¿Ã¦Â´Â²');
define('OCCUOASIS', 'Ã¥Â·Â²Ã¨Â¢Â«Ã¥ÂÂ Ã©Â¢â€ Ã§Å¡â€žÃ§Â»Â¿Ã¦Â´Â²');
define('THERENOINFO', 'Ã¦Â²Â¡Ã¦Å“â€°<br>Ã¥ÂÂ¯Ã§â€Â¨Ã¤Â¿Â¡Ã¦ÂÂ¯Ã£â‚¬â€š');
define('LANDDIST', 'Ã¨Âµâ€žÃ¦ÂºÂÃ§â€Â°Ã©â€¦ÂÃ¦Â¯â€');
define('TRIBE', 'Ã§Â§ÂÃ¦â€”Â');
define('ALLIANCE', 'Ã¨Ââ€Ã§â€ºÅ¸');
define('POP', 'Ã¤ÂºÂºÃ¥ÂÂ£');
define('REPORT', 'Ã¦Å Â¥Ã¥â€˜Å ');
define('OPTION', 'Ã©â‚¬â€°Ã©Â¡Â¹');
define('CENTREMAP', 'Ã¤Â»Â¥Ã¦Â­Â¤Ã¤Â¸ÂºÃ¤Â¸Â­Ã¥Â¿Æ’Ã¦ËœÂ¾Ã§Â¤ÂºÃ¥Å“Â°Ã¥â€ºÂ¾');
define('FNEWVILLAGE', 'Ã¥Â»ÂºÃ§Â«â€¹Ã¦â€“Â°Ã¦Ââ€˜Ã¥Âºâ€ž');
define('CULTUREPOINT', 'Ã¦â€“â€¡Ã¥Å’â€“Ã§â€šÂ¹Ã¦â€¢Â°');
define('BUILDRALLY', 'Ã¥Â»ÂºÃ©â‚¬Â Ã©â€ºâ€ Ã§Â»â€œÃ§â€šÂ¹');
define('SETTLERSAVAIL', 'Ã¥ÂÂ¯Ã§â€Â¨Ã¦â€¹â€œÃ¨Ââ€™Ã¨â‚¬â€¦');
define('BEGINPRO', 'Ã¦â€“Â°Ã¦â€°â€¹Ã¤Â¿ÂÃ¦Å Â¤');
define('SENDMERC', 'Ã¦Â´Â¾Ã¥â€¡ÂºÃ¥â€¢â€ Ã¤ÂºÂº');
define('BAN', 'Ã§Å½Â©Ã¥Â®Â¶Ã¥Â·Â²Ã¨Â¢Â«Ã¥Â°ÂÃ§Â¦Â');
define('BUILDMARKET', 'Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â¸â€šÃ¥Å“Âº');
define('PERHOUR', 'Ã¦Â¯ÂÃ¥Â°ÂÃ¦â€”Â¶');
define('BONUS', 'Ã¦Â¿â‚¬Ã¥Å Â±');
define('MAP', 'Ã¥Å“Â°Ã¥â€ºÂ¾');
define('LARGE_MAP', 'Large Map');
define('LARGE_MAP_DESC', 'Show the large map in an extra window');
define('CROPFINDER', 'Ã¦â€°Â¾Ã§â€Â°Ã¥Â·Â¥Ã¥â€¦Â·');
define('NORTH', 'Ã¥Å’â€”');
define('EAST', 'Ã¤Â¸Å“');
define('SOUTH', 'Ã¥Ââ€”');
define('WEST', 'Ã¨Â¥Â¿');
define('CLOSE_MAP', 'Close Map');
define('AND', 'and');

//other
define('VILLAGE', 'Ã¦Ââ€˜Ã¥Âºâ€ž');
define('STATISTICS', 'Statistics');
define('OASIS', 'Ã§Â»Â¿Ã¦Â´Â²');
define('NO_OASIS', 'Ã¤Â½Â Ã¥Â°Å¡Ã¦Å“ÂªÃ¥ÂÂ Ã©Â¢â€ Ã§Â»Â¿Ã¦Â´Â²Ã£â‚¬â€š');
define('NO_VILLAGES', 'Ã©â€šÂ£Ã©â€¡Å’Ã¦Â²Â¡Ã¦Å“â€°Ã¦Ââ€˜Ã¥Âºâ€žÃ£â‚¬â€š');
define('PLAYER', 'Ã§Å½Â©Ã¥Â®Â¶');

//LOGIN.php
define('COOKIES', 'Ã¤Â½Â Ã¥Â¿â€¦Ã©Â¡Â»Ã¥ÂÂ¯Ã§â€Â¨CookiesÃ¦â€°ÂÃ¨Æ’Â½Ã§â„¢Â»Ã¥Â½â€¢Ã£â‚¬â€šÃ¥Â¦â€šÃ¦Å¾Å“Ã¤Â½Â Ã¤Â¸Å½Ã¤Â»â€“Ã¤ÂºÂºÃ¥â€¦Â±Ã§â€Â¨Ã¦Â­Â¤Ã§â€ÂµÃ¨â€žâ€˜Ã¯Â¼Å’Ã¨Â¯Â·Ã¥Å“Â¨Ã¦Â¸Â¸Ã§Å½Â©Ã¥ÂÅ½Ã§â„¢Â»Ã¥â€¡ÂºÃ£â‚¬â€š');
define('NAME', 'Ã¥ÂÂÃ§Â§Â°');
define('PW_FORGOTTEN', 'Ã¥Â¿ËœÃ¨Â®Â°Ã¥Â¯â€ Ã§Â Â?');
define('PW_REQUEST', 'Ã¤Â½Â Ã¥ÂÂ¯Ã¤Â»Â¥Ã§â€Â³Ã¨Â¯Â·Ã¦â€ºÂ´Ã¦ÂÂ¢Ã¦â€“Â°Ã¥Â¯â€ Ã§Â ÂÃ¯Â¼Å’Ã§â€ºÂ¸Ã¥â€¦Â³Ã¤Â¿Â¡Ã¦ÂÂ¯Ã¥Â°â€ Ã¥Ââ€˜Ã©â‚¬ÂÃ¥Ë†Â°Ã¤Â½Â Ã§Å¡â€žÃ©â€šÂ®Ã§Â®Â±Ã£â‚¬â€š');
define('PW_GENERATE', 'Ã§â€Å¸Ã¦Ë†ÂÃ¦â€“Â°Ã¥Â¯â€ Ã§Â ÂÃ£â‚¬â€š');
define('EMAIL_NOT_VERIFIED', 'Ã©â€šÂ®Ã§Â®Â±Ã¥Å“Â°Ã¥Ââ‚¬Ã¥Â°Å¡Ã¦Å“ÂªÃ©ÂªÅ’Ã¨Â¯Â!');
define('EMAIL_FOLLOW', 'Ã©â‚¬Å¡Ã¨Â¿â€¡Ã¦Â­Â¤Ã©â€œÂ¾Ã¦Å½Â¥Ã¦Â¿â‚¬Ã¦Â´Â»Ã¤Â½Â Ã§Å¡â€žÃ¨Â´Â¦Ã¦Ë†Â·Ã£â‚¬â€š');
define('VERIFY_EMAIL', 'Ã©ÂªÅ’Ã¨Â¯ÂÃ©â€šÂ®Ã§Â®Â±Ã£â‚¬â€š');
define('SERVER_STARTS_IN', 'Ã¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã¥Â°â€ Ã¥ÂÂ¯Ã¥Å Â¨Ã¤ÂºÅ½: ');
define('START_NOW', 'Ã§Å½Â°Ã¥Å“Â¨Ã¥ÂÂ¯Ã¥Å Â¨');


//404.php
define('NOTHING_HERE', 'Ã¨Â¿â„¢Ã¥â€žÂ¿Ã¤Â»â‚¬Ã¤Â¹Ë†Ã¤Â¹Å¸Ã¦Â²Â¡Ã¦Å“â€°!');
define('WE_LOOKED', 'Ã¦Ë†â€˜Ã¤Â»Â¬Ã¦â€°Â¾Ã¤Âºâ€  404 Ã¦Â¬Â¡Ã¯Â¼Å’Ã¤Â½â€ Ã¤Â»â‚¬Ã¤Â¹Ë†Ã©Æ’Â½Ã¦Â²Â¡Ã¦Å“â€°Ã¥Ââ€˜Ã§Å½Â°');

//MASSMESSAGE.php
define('MASS', 'Ã¦Â¶Ë†Ã¦ÂÂ¯Ã¥â€ â€¦Ã¥Â®Â¹');
define('MASS_SUBJECT', 'Ã¤Â¸Â»Ã©Â¢Ëœ:');
define('MASS_COLOR', 'Ã¦Â¶Ë†Ã¦ÂÂ¯Ã©Â¢Å“Ã¨â€°Â²:');
define('MASS_REQUIRED', 'Ã¦â€°â‚¬Ã¦Å“â€°Ã§Â©ÂºÃ§â„¢Â½Ã¦Â ÂÃ©Æ’Â½Ã©Å“â‚¬Ã¨Â¦ÂÃ¥â€ â€¦Ã¥Â®Â¹');
define('MASS_UNITS', 'Ã¥â€ºÂ¾Ã¥Æ’Â (units):');
define('MASS_SHOWHIDE', 'Ã¦ËœÂ¾Ã§Â¤Âº/Ã©Å¡ÂÃ¨â€”Â');
define('MASS_READ', 'Ã¦Â³Â¨Ã¦â€žÂ: Read this: after adding smilie, you have to add left or right after number otherwise image will won&#39;t work');
define('MASS_CONFIRM', 'Ã§Â¡Â®Ã¨Â®Â¤');
define('MASS_REALLY', 'Ã¤Â½Â Ã§Â¡Â®Ã¥Â®Å¡Ã¨Â¦ÂÃ¥Ââ€˜Ã©â‚¬ÂÃ¥â€¦Â¨Ã¤Â½â€œ IGM Ã¥Ââ€”?');
define('MASS_ABORT', 'Ã§Å½Â°Ã¥Å“Â¨Ã¤Â¸Â­Ã¦Â­Â¢');
define('MASS_SENT', 'Ã¥â€¦Â¨Ã¤Â½â€œ IGM Ã¥Â·Â²Ã©â‚¬ÂÃ¥â€¡Âº');

//BUILDINGS
define('WOODCUTTER', 'Ã¤Â¼ÂÃ¦Å“Â¨Ã¥Å“Âº');
define('WOODCUTTER_DESC', 'Ã¤Â¼ÂÃ¦Å“Â¨Ã¥Å“ÂºÃ§Å¡â€žÃ¥Â·Â¥Ã¤ÂºÂºÃ¤Â»Â¬Ã§Â ÂÃ¥â‚¬â€™Ã¦Â â€˜Ã¦Å“Â¨Ã¯Â¼Å’Ã§â€Å¸Ã¤ÂºÂ§Ã¦Å“Â¨Ã¦ÂÂÃ£â‚¬â€šÃ¤Â¼ÂÃ¦Å“Â¨Ã¥Å“ÂºÃ§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¦Å“Â¨Ã¦ÂÂÃ§Å¡â€žÃ¤ÂºÂ§Ã¨Æ’Â½Ã¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');
define('CLAYPIT', 'Ã©Â»ÂÃ¥Å“Å¸Ã¥Ââ€˜');
define('CLAYPIT_DESC', 'Ã©Â»ÂÃ¥Å“Å¸Ã¥Ââ€˜Ã§â€Å¸Ã¤ÂºÂ§Ã©Â»ÂÃ¥Å“Å¸Ã£â‚¬â€šÃ©Â»ÂÃ¥Å“Å¸Ã¥Ââ€˜Ã§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã©Â»ÂÃ¥Å“Å¸Ã§Å¡â€žÃ¤ÂºÂ§Ã¨Æ’Â½Ã¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');
define('IRONMINE', 'Ã©â€œÂÃ§Å¸Â¿Ã¥Å“Âº');
define('IRONMINE_DESC', 'Ã¥Å“Â¨Ã¨Â¿â„¢Ã©â€¡Å’Ã¯Â¼Å’Ã§Å¸Â¿Ã¥Â·Â¥Ã¤Â»Â¬Ã¦Å’â€“Ã¥â€¡ÂºÃ¥Â®ÂÃ¨Â´ÂµÃ§Å¡â€žÃ©â€¡â€˜Ã¥Â±Å¾Ã£â‚¬â€šÃ©â€œÂÃ§Å¸Â¿Ã¥Å“ÂºÃ§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã©â€œÂÃ§Å¸Â¿Ã§Å¡â€žÃ¤ÂºÂ§Ã¨Æ’Â½Ã¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');
define('CROPLAND', 'Ã¥â€ Å“Ã§â€Â°');
define('CROPLAND_DESC', 'Ã¤Â½Â Ã§Å¡â€žÃ¤ÂºÂºÃ¦Â°â€˜Ã¥â€™Å’Ã¥Â£Â«Ã¥â€¦ÂµÃ§Å¡â€žÃ©Â£Å¸Ã§â€°Â©Ã¥Å“Â¨Ã¨Â¿â„¢Ã©â€¡Å’Ã¤ÂºÂ§Ã¥â€¡ÂºÃ£â‚¬â€šÃ¥â€ Å“Ã§â€Â°Ã§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã§Â²Â®Ã©Â£Å¸Ã§Å¡â€žÃ¤ÂºÂ§Ã¨Æ’Â½Ã¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');

define('SAWMILL', 'Ã©â€Â¯Ã¦Å“Â¨Ã¥Å½â€š');
define('SAWMILL_DESC', 'Ã¦Å“Â¨Ã¦ÂÂÃ¨Â¢Â«Ã©â‚¬ÂÃ¥Ë†Â°Ã¨Â¿â„¢Ã©â€¡Å’Ã¨Â¿â€ºÃ¤Â¸â‚¬Ã¦Â­Â¥Ã¥Â¤â€žÃ§Ââ€ Ã£â‚¬â€šÃ¦Â Â¹Ã¦ÂÂ®Ã©â€Â¯Ã¦Å“Â¨Ã¥Å½â€šÃ§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¯Â¼Å’Ã¦Å“Â¨Ã¦ÂÂÃ¤ÂºÂ§Ã©â€¡ÂÃ¥ÂÂ¯Ã¤Â»Â¥Ã¦ÂÂÃ¥Ââ€¡Ã¨â€¡Â³Ã¥Â¤Å¡ 25% Ã£â‚¬â€š');
define('CURRENT_WOOD_BONUS', 'Ã¥Â½â€œÃ¥â€°ÂÃ¦Å“Â¨Ã¦ÂÂÃ¤ÂºÂ§Ã©â€¡ÂÃ¥Å Â Ã¦Ë†Â:');
define('WOOD_BONUS_LEVEL', 'Ã¦Å“Â¨Ã¦ÂÂÃ¤ÂºÂ§Ã©â€¡ÂÃ¥Å Â Ã¦Ë†ÂÃ¤ÂºÅ½Ã§Â­â€°Ã§ÂºÂ§');
define('MAX_LEVEL', 'Ã¥Â»ÂºÃ§Â­â€˜Ã¥Â·Â²Ã§Â»ÂÃ¥Ë†Â°Ã¨Â¾Â¾Ã¦Å“â‚¬Ã©Â«ËœÃ§Â­â€°Ã§ÂºÂ§');
define('PERCENT', '%');

define('BRICKYARD', 'Ã§Â â€“Ã¥Ââ€”Ã¥Å½â€š');
define('CURRENT_CLAY_BONUS', 'Ã¥Â½â€œÃ¥â€°ÂÃ©Â»ÂÃ¥Å“Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¥Å Â Ã¦Ë†Â:');
define('CLAY_BONUS_LEVEL', 'Ã©Â»ÂÃ¥Å“Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¥Å Â Ã¦Ë†ÂÃ¤ÂºÅ½Ã§Â­â€°Ã§ÂºÂ§');
define('BRICKYARD_DESC', 'Ã©Â»ÂÃ¥Å“Å¸Ã¨Â¢Â«Ã©â‚¬ÂÃ¥Ë†Â°Ã¨Â¿â„¢Ã©â€¡Å’Ã¨Â¿â€ºÃ¤Â¸â‚¬Ã¦Â­Â¥Ã¥Â¤â€žÃ§Ââ€ Ã£â‚¬â€šÃ¦Â Â¹Ã¦ÂÂ®Ã§Â â€“Ã¥Ââ€”Ã¥Å½â€šÃ§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¯Â¼Å’Ã©Â»ÂÃ¥Å“Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¥ÂÂ¯Ã¤Â»Â¥Ã¦ÂÂÃ¥Ââ€¡Ã¨â€¡Â³Ã¥Â¤Å¡ 25% Ã£â‚¬â€š');

define('IRONFOUNDRY', 'Ã©â€œÂ¸Ã©â€œÂÃ¥Å½â€š');
define('CURRENT_IRON_BONUS', 'Ã¥Â½â€œÃ¥â€°ÂÃ©â€œÂÃ§Å¸Â¿Ã¤ÂºÂ§Ã©â€¡ÂÃ¥Å Â Ã¦Ë†Â:');
define('IRON_BONUS_LEVEL', 'Ã©â€œÂÃ§Å¸Â¿Ã¤ÂºÂ§Ã©â€¡ÂÃ¥Å Â Ã¦Ë†ÂÃ¤ÂºÅ½Ã§Â­â€°Ã§ÂºÂ§');
define('IRONFOUNDRY_DESC', 'Ã©â€œÂÃ§Å¸Â¿Ã¨Â¢Â«Ã©â‚¬ÂÃ¥Ë†Â°Ã¨Â¿â„¢Ã©â€¡Å’Ã¨Â¿â€ºÃ¤Â¸â‚¬Ã¦Â­Â¥Ã¥Â¤â€žÃ§Ââ€ Ã£â‚¬â€šÃ¦Â Â¹Ã¦ÂÂ®Ã©â€œÂ¸Ã©â€œÂÃ¥Å½â€šÃ§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¯Â¼Å’Ã©â€œÂÃ§Å¸Â¿Ã¤ÂºÂ§Ã©â€¡ÂÃ¥ÂÂ¯Ã¤Â»Â¥Ã¦ÂÂÃ¥Ââ€¡Ã¨â€¡Â³Ã¥Â¤Å¡ 25% Ã£â‚¬â€š');

define('GRAINMILL', 'Ã§Â£Â¨Ã¥ÂÅ ');
define('CURRENT_CROP_BONUS', 'Ã¥Â½â€œÃ¥â€°ÂÃ§Â²Â®Ã©Â£Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¥Å Â Ã¦Ë†Â:');
define('CROP_BONUS_LEVEL', 'Ã§Â²Â®Ã©Â£Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¥Å Â Ã¦Ë†ÂÃ¤ÂºÅ½Ã§Â­â€°Ã§ÂºÂ§');
define('GRAINMILL_DESC', 'Ã§Â²Â®Ã©Â£Å¸Ã¨Â¢Â«Ã©â‚¬ÂÃ¥Ë†Â°Ã¨Â¿â„¢Ã©â€¡Å’Ã¨Â¿â€ºÃ¤Â¸â‚¬Ã¦Â­Â¥Ã¥Å Â Ã¥Â·Â¥Ã¦Ë†ÂÃ©ÂÂ¢Ã§Â²â€°Ã£â‚¬â€šÃ¦Â Â¹Ã¦ÂÂ®Ã§Â£Â¨Ã¥ÂÅ Ã§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¯Â¼Å’Ã§Â²Â®Ã©Â£Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¥ÂÂ¯Ã¤Â»Â¥Ã¦ÂÂÃ¥Ââ€¡Ã¨â€¡Â³Ã¥Â¤Å¡ 25% Ã£â‚¬â€š');

define('BAKERY', 'Ã©ÂÂ¢Ã¥Å’â€¦Ã¦Ë†Â¿');
define('BAKERY_DESC', 'Ã©ÂÂ¢Ã§Â²â€°Ã¥ÂÂ¯Ã¤Â»Â¥Ã¨Â¿â€ºÃ¤Â¸â‚¬Ã¦Â­Â¥Ã§Æ’ËœÃ§Æ’Â¤Ã¦Ë†ÂÃ©ÂÂ¢Ã¥Å’â€¦Ã£â‚¬â€šÃ¥Å“Â¨Ã§Â£Â¨Ã¥ÂÅ Ã§Å¡â€žÃ¥Å¸ÂºÃ§Â¡â‚¬Ã¤Â¹â€¹Ã¤Â¸Å Ã¯Â¼Å’Ã¥Â°â€ Ã§Â²Â®Ã©Â£Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¦ÂÂÃ¥Ââ€¡Ã¨â€¡Â³Ã¥Â¤Å¡ 50% Ã£â‚¬â€š');

define('WAREHOUSE', 'Ã¤Â»â€œÃ¥Âºâ€œ');
define('CURRENT_CAPACITY', 'Ã¥Â½â€œÃ¥â€°ÂÃ¥Â®Â¹Ã©â€¡Â:');
define('CAPACITY_LEVEL', 'Ã¥Â®Â¹Ã©â€¡ÂÃ¥Å“Â¨Ã§Â­â€°Ã§ÂºÂ§');
define('RESOURCE_UNITS', 'Ã¨Âµâ€žÃ¦ÂºÂÃ¥Ââ€¢Ã¤Â½Â');
define('WAREHOUSE_DESC', 'Ã¦Å“Â¨Ã¦ÂÂÃ£â‚¬ÂÃ©Â»ÂÃ¥Å“Å¸Ã¥â€™Å’Ã©â€œÂÃ§Å¸Â¿Ã¥Â­ËœÃ¥â€šÂ¨Ã¥Å“Â¨Ã¤Â»â€œÃ¥Âºâ€œÃ¤Â¸Â­Ã£â‚¬â€šÃ¤Â»â€œÃ¥Âºâ€œÃ§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¥Â­ËœÃ¥â€šÂ¨Ã¥Â®Â¹Ã©â€¡ÂÃ¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');

define('GRANARY', 'Ã§Â²Â®Ã¤Â»â€œ');
define('CROP_UNITS', 'Ã§Â²Â®Ã©Â£Å¸Ã¥Ââ€¢Ã¤Â½Â');
define('GRANARY_DESC', 'Ã§Â²Â®Ã©Â£Å¸Ã¥Â­ËœÃ¥â€šÂ¨Ã¥Å“Â¨Ã§Â²Â®Ã¤Â»â€œÃ¤Â¸Â­Ã£â‚¬â€šÃ§Â²Â®Ã¤Â»â€œÃ§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¥Â­ËœÃ¥â€šÂ¨Ã¥Â®Â¹Ã©â€¡ÂÃ¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');

define('BLACKSMITH', 'Ã©â€œÂÃ¥Å’Â Ã©â€œÂº');
define('ACTION', 'Ã©â‚¬â€°Ã©Â¡Â¹');
define('UPGRADE', 'Ã¥Ââ€¡Ã§ÂºÂ§');
define('UPGRADE_IN_PROGRESS', 'Ã¥Ââ€¡Ã§ÂºÂ§Ã¥Å“Â¨<br>Ã¨Â¿â€ºÃ¨Â¡Å’Ã¤Â¸Â­');
define('UPGRADE_BLACKSMITH', 'Ã¥Ââ€¡Ã§ÂºÂ§<br>Ã©â€œÂÃ¥Å’Â Ã©â€œÂº');
define('UPGRADES_COMMENCE_BLACKSMITH', 'Ã©â€œÂÃ¥Å’Â Ã©â€œÂºÃ¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¨Æ’Â½Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¥Ââ€¡Ã§ÂºÂ§Ã£â‚¬â€š');
define('MAXIMUM_LEVEL', 'Ã¦Å“â‚¬Ã©Â«Ëœ<br>Ã§Â­â€°Ã§ÂºÂ§');
define('EXPAND_WAREHOUSE', 'Ã¦â€°Â©Ã¥Â»Âº<br>Ã¤Â»â€œÃ¥Âºâ€œ');
define('EXPAND_GRANARY', 'Ã¦â€°Â©Ã¥Â»Âº<br>Ã§Â²Â®Ã¤Â»â€œ');
define('ENOUGH_RESOURCES', 'Ã¨Â¶Â³Ã¥Â¤Å¸Ã§Å¡â€žÃ¨Âµâ€žÃ¦ÂºÂ');
define('CROP_NEGATIVE ', 'Ã¤Â½Â Ã§Å¡â€žÃ§Â²Â®Ã©Â£Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¤Â¸ÂºÃ¨Â´Å¸Ã¯Â¼Å’Ã¥â€ºÂ Ã¦Â­Â¤Ã¤Â¸ÂÃ¥ÂÂ¯Ã¨Æ’Â½Ã¦Å ÂµÃ¨Â¾Â¾Ã©Å“â‚¬Ã¦Â±â€šÃ§Å¡â€žÃ§Â²Â®Ã©Â£Å¸Ã¦â€¢Â°Ã§â€ºÂ®');
define('TOO_FEW_RESOURCES', 'Ã§Â¼ÂºÃ¥Â°â€˜<br>Ã¨Âµâ€žÃ¦ÂºÂ');
define('UPGRADING', 'Ã¥Ââ€¡Ã§ÂºÂ§Ã¤Â¸Â­');
define('DURATION', 'Ã¦â€”Â¶Ã©â€¢Â¿');
define('COMPLETE', 'Ã¥Â®Å’Ã¦Ë†Â');
define('BLACKSMITH_DESC', 'Ã¥Å“Â¨Ã©â€œÂÃ¥Å’Â Ã©â€œÂºÃ§Å¡â€žÃ§â€ â€Ã§â€šâ€°Ã¤Â¸Â­Ã¯Â¼Å’Ã¥Â£Â«Ã¥â€¦ÂµÃ¤Â»Â¬Ã§Å¡â€žÃ¦Â­Â¦Ã¥â„¢Â¨Ã¥Â¾â€”Ã¥Ë†Â°Ã¥Â¼ÂºÃ¥Å’â€“Ã£â‚¬â€šÃ©â€œÂÃ¥Å’Â Ã©â€œÂºÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¥Â£Â«Ã¥â€¦ÂµÃ§Å¡â€žÃ¦â€Â»Ã¥â€¡Â»Ã¥Å â€ºÃ¥Â°â€ Ã¨Æ’Â½Ã¥Â¾â€”Ã¥Ë†Â°Ã¦â€ºÂ´Ã©Â«ËœÃ§Å¡â€žÃ¥Â¼ÂºÃ¥Å’â€“Ã£â‚¬â€š');

define('ARMOURY', 'Ã§â€ºâ€Ã§â€Â²Ã¥Å½â€š');
define('UPGRADE_ARMOURY', 'Ã¥Ââ€¡Ã§ÂºÂ§<br>Ã§â€ºâ€Ã§â€Â²Ã¥Å½â€š');
define('UPGRADES_COMMENCE_ARMOURY', 'Ã§â€ºâ€Ã§â€Â²Ã¥Å½â€šÃ¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¨Æ’Â½Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¥Ââ€¡Ã§ÂºÂ§Ã£â‚¬â€š');
define('ARMOURY_DESC', 'Ã§â€ºâ€Ã§â€Â²Ã¥Å½â€šÃ§Å¡â€žÃ¥Â·Â¥Ã¥Å’Â Ã¨Æ’Â½Ã§â€Å¸Ã¤ÂºÂ§Ã¦â€ºÂ´Ã¥Â¥Â½Ã§Å¡â€žÃ©ËœÂ²Ã¥â€¦Â·Ã£â‚¬â€šÃ§â€ºâ€Ã§â€Â²Ã¥Å½â€šÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¥Â£Â«Ã¥â€¦ÂµÃ§Å¡â€žÃ©ËœÂ²Ã¥Â¾Â¡Ã¥Å â€ºÃ¥Â°â€ Ã¨Æ’Â½Ã¥Â¾â€”Ã¥Ë†Â°Ã¦â€ºÂ´Ã©Â«ËœÃ§Å¡â€žÃ¥Â¼ÂºÃ¥Å’â€“Ã£â‚¬â€š');

define('TOURNAMENTSQUARE', 'Ã§Â«Å¾Ã¦Å â‚¬Ã¥Å“Âº');
define('CURRENT_SPEED', 'Ã¥Â½â€œÃ¥â€°ÂÃ¨Â¡Å’Ã¥â€ â€ºÃ©â‚¬Å¸Ã¥ÂºÂ¦Ã¥Å Â Ã¦Ë†Â:');
define('SPEED_LEVEL', 'Ã¨Â¡Å’Ã¥â€ â€ºÃ©â‚¬Å¸Ã¥ÂºÂ¦Ã¥Å Â Ã¦Ë†ÂÃ¥Å“Â¨Ã§Â­â€°Ã§ÂºÂ§');
define('TOURNAMENTSQUARE_DESC', 'Ã¥Å“Â¨Ã§Â«Å¾Ã¦Å â‚¬Ã¥Å“ÂºÃ¯Â¼Å’Ã¤Â½Â Ã§Å¡â€žÃ©Æ’Â¨Ã©ËœÅ¸Ã¦â€”Â¥Ã¥Â¤ÂÃ¤Â¸â‚¬Ã¦â€”Â¥Ã¥Å“Â°Ã¨Â®Â­Ã§Â»Æ’Ã¯Â¼Å’Ã¤Â»â€“Ã¤Â»Â¬Ã§Å¡â€žÃ¨â‚¬ÂÃ¥Å â€ºÃ¥Â¾â€”Ã¥Ë†Â°Ã¤Âºâ€ Ã¦ÂÂÃ¥Ââ€¡Ã£â‚¬â€šÃ§Â«Å¾Ã¦Å â‚¬Ã¥Å“ÂºÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¥Â£Â«Ã¥â€¦ÂµÃ¨Â¿â€ºÃ¨Â¡Å’ '.TS_THRESHOLD.' Ã¦Â Â¼Ã¤Â»Â¥Ã¤Â¸Å Ã§Å¡â€žÃ¨Â¡Å’Ã¥â€ â€ºÃ¥Â°â€ Ã¦â€ºÂ´Ã¥Â¿Â«Ã£â‚¬â€š');

define('MAINBUILDING', 'Ã¦Ââ€˜Ã¥Âºâ€žÃ¥Â¤Â§Ã¦Â¥Â¼');
define('CURRENT_CONSTRUCTION_TIME', 'Ã¥Â½â€œÃ¥â€°ÂÃ¥Â»ÂºÃ©â‚¬Â Ã©â‚¬Å¸Ã¥ÂºÂ¦:');
define('CONSTRUCTION_TIME_LEVEL', 'Ã¥Â»ÂºÃ©â‚¬Â Ã©â‚¬Å¸Ã¥ÂºÂ¦Ã¥Å“Â¨Ã§Â­â€°Ã§ÂºÂ§');
define('DEMOLITION_BUILDING', 'Ã¦â€¹â€ Ã©â„¢Â¤Ã¥Â»ÂºÃ§Â­â€˜:</h2><p>Ã¥Â¦â€šÃ¦Å¾Å“Ã¤Â½Â Ã¤Â¸ÂÃ¥â€ ÂÃ©Å“â‚¬Ã¨Â¦ÂÃ¦Å¸ÂÃ¤Â¸ÂªÃ¥Â»ÂºÃ§Â­â€˜Ã¯Â¼Å’Ã¤Â½Â Ã¥ÂÂ¯Ã¤Â»Â¥Ã¥Å“Â¨Ã¨Â¿â„¢Ã©â€¡Å’Ã¤Â¸â€¹Ã¤Â»Â¤Ã¦â€¹â€ Ã©â„¢Â¤Ã£â‚¬â€š</p>');
define('DEMOLISH', 'Ã¦â€¹â€ Ã©â„¢Â¤');
define('DEMOLITION_OF', 'Ã¦â€¹â€ Ã©â„¢Â¤');
define('MAINBUILDING_DESC', 'Ã¦Ââ€˜Ã¥Âºâ€žÃ¥Â¤Â§Ã¦Â¥Â¼Ã¦ËœÂ¯Ã¥Â»ÂºÃ§Â­â€˜Ã¥Â¤Â§Ã¥Â¸Ë†Ã§Å¡â€žÃ¤Â½ÂÃ¦â€°â‚¬Ã£â‚¬â€šÃ¦Ââ€˜Ã¥Âºâ€žÃ¥Â¤Â§Ã¦Â¥Â¼Ã§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¥Â»ÂºÃ§Â­â€˜Ã§Å¡â€žÃ¥Â»ÂºÃ©â‚¬Â Ã©â‚¬Å¸Ã¥ÂºÂ¦Ã¥Â°Â±Ã¨Â¶Å Ã¥Â¿Â«Ã£â‚¬â€š');

define('RALLYPOINT', 'Ã©â€ºâ€ Ã§Â»â€œÃ§â€šÂ¹');
define('RALLYPOINT_COMMENCE', 'Ã¥Â½â€œ '.RALLYPOINT.' Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Â¯â€¢Ã¦â€”Â¶Ã¯Â¼Å’Ã¥Â°â€ Ã¦ËœÂ¾Ã§Â¤ÂºÃ©Æ’Â¨Ã©ËœÅ¸Ã¥Å Â¨Ã¥Ââ€˜');
define('OVERVIEW', 'Ã¦Â¦â€šÃ¨Â§Ë†');
define('REINFORCEMENT', 'Ã¥Â¢Å¾Ã¦ÂÂ´');
define('EVASION_SETTINGS', 'Ã¤Â¾ÂµÃ§â€¢Â¥Ã¨Â®Â¾Ã¥Â®Å¡');
define('SEND_TROOPS_AWAY_MAX', 'Send troops away a maximum of');
define('TIMES', 'times');
define('PER_EVASION', 'per evasion');
define('RALLYPOINT_DESC', 'Ã¦Ââ€˜Ã¥Âºâ€žÃ§Å¡â€žÃ©Æ’Â¨Ã©ËœÅ¸Ã¥Å“Â¨Ã¨Â¿â„¢Ã©â€¡Å’Ã©â€ºâ€ Ã¥ÂË†Ã£â‚¬â€šÃ¤Â½Â Ã¥ÂÂ¯Ã¤Â»Â¥Ã¥Å“Â¨Ã¨Â¿â„¢Ã©â€¡Å’Ã¦Â´Â¾Ã©ÂÂ£Ã©Æ’Â¨Ã©ËœÅ¸Ã¥Å½Â»Ã¥Â¾ÂÃ¦Å“ÂÃ£â‚¬ÂÃ¦Å½Â Ã¥Â¤ÂºÃ£â‚¬ÂÃ¤Â¾Â¦Ã¦Å¸Â¥Ã¦Ë†â€“Ã¥Â¢Å¾Ã¦ÂÂ´Ã¥â€¦Â¶Ã¤Â»â€“Ã¥Å“Â°Ã¦â€“Â¹Ã£â‚¬â€š');
define('COMBAT_SIMULATOR', 'Combat Simulator');

define('MARKETPLACE', 'Ã¥Â¸â€šÃ¥Å“Âº');
define('MERCHANT', 'Ã¥â€¢â€ Ã¤ÂºÂº');
define('OR_', 'Ã¦Ë†â€“');
define('GO', 'Ã¥â€¡ÂºÃ¥Ââ€˜');
define('UNITS_OF_RESOURCE', 'Ã¥Ââ€¢Ã¤Â½ÂÃ¨Âµâ€žÃ¦ÂºÂ');
define('MERCHANT_CARRY', 'Ã¦Â¯ÂÃ¤Â¸ÂªÃ¥â€¢â€ Ã¤ÂºÂºÃ¥ÂÂ¯Ã¤Â»Â¥Ã¦ÂÂºÃ¥Â¸Â¦');
define('MERCHANT_COMING', 'Ã¥Ë†Â°Ã¦ÂÂ¥Ã§Å¡â€žÃ¥â€¢â€ Ã¤ÂºÂº');
define('TRANSPORT_FROM', 'Ã¨Â¿ÂÃ©â‚¬ÂÃ¦ÂÂ¥Ã¨â€¡Âª');
define('ARRIVAL_IN', 'Ã¦Å ÂµÃ¨Â¾Â¾Ã¥â€°Â©Ã¤Â½â„¢Ã¦â€”Â¶Ã©â€”Â´');
define('NO_COORDINATES_SELECTED', 'Ã¦Å“ÂªÃ¨Â¾â€œÃ¥â€¦Â¥Ã¥ÂÂÃ¦Â â€¡');
define('CANNOT_SEND_RESOURCES', 'Ã¤Â½Â Ã¤Â¸ÂÃ¨Æ’Â½Ã¥Ââ€˜Ã¦Å“Â¬Ã¦Ââ€˜Ã¨Â¿ÂÃ©â‚¬ÂÃ¨Âµâ€žÃ¦ÂºÂ');
define('BANNED_CANNOT_SEND_RESOURCES', 'Ã§Å½Â©Ã¥Â®Â¶Ã¥Â·Â²Ã¨Â¢Â«Ã¥Â°ÂÃ§Â¦ÂÃ¯Â¼Å’Ã¤Â½Â Ã¤Â¸ÂÃ¨Æ’Â½Ã¥Ââ€˜Ã¥â€¦Â¶Ã¨Â¿ÂÃ©â‚¬ÂÃ¨Âµâ€žÃ¦ÂºÂÃ£â‚¬â€š');
define('RESOURCES_NO_SELECTED', 'Ã¦Å“ÂªÃ¨Â¾â€œÃ¥â€¦Â¥Ã¨Âµâ€žÃ¦ÂºÂ');
define('ENTER_COORDINATES', 'Ã¨Â¾â€œÃ¥â€¦Â¥Ã¥ÂÂÃ¦Â â€¡Ã¦Ë†â€“Ã¦Ââ€˜Ã¥Âºâ€žÃ¥ÂÂÃ§Â§Â°');
define('TOO_FEW_MERCHANTS', 'Ã¥â€¢â€ Ã¤ÂºÂºÃ¤Â¸ÂÃ¨Â¶Â³');
define('OWN_MERCHANTS_ONWAY', 'Ã¥Â·Â±Ã¦â€“Â¹Ã¥â€¢â€ Ã¤ÂºÂºÃ¥Å“Â¨Ã©â‚¬â€Ã¤Â¸Â­');
define('MERCHANTS_RETURNING', 'Ã¥â€¢â€ Ã¤ÂºÂºÃ¨Â¿â€Ã¥â€ºÅ¾Ã¤Â¸Â­');
define('TRANSPORT_TO', 'Ã¨Â¿ÂÃ¨Â¾â€œÃ¨â€¡Â³');
define('I_AN_SEARCHING', 'Ã¦Ë†â€˜Ã¥Â¯Â»Ã¦Â±â€š');
define('I_AN_OFFERING', 'Ã¦Ë†â€˜Ã¦ÂÂÃ¤Â¾â€º');
define('OFFERS_MARKETPLACE', 'Ã¥Â¸â€šÃ¥Å“ÂºÃ¤Â¸Â­Ã§Å¡â€žÃ¦Å Â¥Ã¤Â»Â·');
define('NO_AVAILABLE_OFFERS', 'Ã¥Â¸â€šÃ¥Å“ÂºÃ¤Â¸Â­Ã¦Â²Â¡Ã¦Å“â€°Ã¦Å Â¥Ã¤Â»Â·');
define('OFFERED_TO_ME', 'Ã¦ÂÂÃ¤Â¾â€º<br>Ã§Â»â„¢Ã¦Ë†â€˜');
define('WANTED_TO_ME', 'Ã¦Ë†â€˜<br>Ã¦ÂÂÃ¤Â¾â€º');
define('NOT_ENOUGH_MERCHANTS', 'Ã¥â€¢â€ Ã¤ÂºÂºÃ¤Â¸ÂÃ¨Â¶Â³');
define('ACCEP_OFFER', 'Ã¦Å½Â¥Ã¥Ââ€”Ã¦Å Â¥Ã¤Â»Â·');
define('NO_AVALIBLE_OFFERS', 'Ã¥Â¸â€šÃ¥Å“ÂºÃ¤Â¸Å Ã¦Â²Â¡Ã¦Å“â€°Ã¥ÂÂ¯Ã§â€Â¨Ã§Å¡â€žÃ¦Å Â¥Ã¤Â»Â·');
define('SEARCHING', 'Ã¦ÂÅ“Ã§Â´Â¢Ã¤Â¸Â­');
define('OFFERING', 'Ã¥Ââ€˜Ã¥â€¡ÂºÃ¦Å Â¥Ã¤Â»Â·');
define('MAX_TIME_TRANSPORT', 'Ã¨Â¿ÂÃ¨Â¾â€œÃ¦Â¬Â¡Ã¦â€¢Â°Ã¨Â¾Â¾Ã¤Â¸Å Ã©â„¢Â');
define('OWN_ALLIANCE_ONLY', 'Ã¤Â»â€¦Ã©â„¢ÂÃ¨Ââ€Ã§â€ºÅ¸');
define('INVALID_OFFER', 'Ã¦Å Â¥Ã¤Â»Â·Ã¤Â¸ÂÃ¥â€ ÂÃ¥ÂÂ¯Ã§â€Â¨');
define('INVALID_MERCHANTS_REPETITION', 'Ã¤Â¸ÂÃ¥ÂÂ¯Ã§â€Â¨Ã§Å¡â€žÃ¥â€¢â€ Ã¤ÂºÂºÃ©â€¡ÂÃ¥Â¤ÂÃ¦Â¬Â¡Ã¦â€¢Â°');
define('USER_ON_VACATION', 'Ã§â€Â¨Ã¦Ë†Â·Ã¦Â­Â£Ã¥Å“Â¨Ã¥ÂºÂ¦Ã¥Ââ€¡');
define('VACATION_MODE', 'Vacation mode');
define('VACATION_DESC', 'If you plan on being away for an extended period of time and do not wish to set a sitter, you can set your account to Holiday Mode. During this time your account will stop produceing resource, CP, research, trops, etc, and stop receiving attacks, reinforcements, raid, essentially freezing your account. Remember, this just freezes your Travian, not time. If you are a member of Gold Club it will run out during this time and if you have automatic renewal selected, the automatic renewal feature will be cancelled while in Holiday Mode. Please Note you must set min of 2 days vaction mode and NO MORE THEN 14 days');
define('VACATION_DESC2', 'Use vacation mode to protect your villages during you are away.<br>During the vacation will be inactive next actions:');
define('VAC_OP1', 'Send or receive troops');
define('VAC_OP2', 'Start new construction order');
define('VAC_OP3', 'Use market');
define('VAC_OP4', 'Train new troops');
define('VAC_OP5', 'Join to an alliance');
define('VAC_OP6', 'Delete account');
define('VAC_COND1', 'No troops in movement');
define('VAC_COND2', 'No troops on way to other villages');
define('VAC_COND3', 'No troops send to reinforcements other villages');
define('VAC_COND4', 'No player have reinforcements on your villages');
define('VAC_COND5', 'Do not have Wonder World');
define('VAC_COND6', 'Do not have any artefacts');
define('VAC_COND7', 'You are no longer in player protections');
define('VAC_COND8', 'Do not have any troops in your traps');
define('VAC_COND9', 'Your account is not in deletion process');
define('NOT_ENOUGH_RESOURCES', 'Ã¨Âµâ€žÃ¦ÂºÂÃ¤Â¸ÂÃ¨Â¶Â³');
define('OFFER', 'Ã¦Å Â¥Ã¤Â»Â·');
define('SEARCH', 'Ã¦ÂÅ“Ã§Â´Â¢');
define('OWN_OFFERS', 'Ã¦Ë†â€˜Ã§Å¡â€žÃ¦Å Â¥Ã¤Â»Â·');
define('ALL', 'Ã¦â€°â‚¬Ã¦Å“â€°');
define('NPC_TRADE', 'Ã¨Âµâ€žÃ¦ÂºÂÃ§Â½Â®Ã¦ÂÂ¢');
define('SUM', 'Ã¦â‚¬Â»Ã¨Â®Â¡');
define('REST', 'Ã¤Â½â„¢Ã¤Â¸â€¹');
define('TRADE_RESOURCES', 'Ã¤ÂºÂ¤Ã¦Ëœâ€œÃ¨Âµâ€žÃ¦ÂºÂ (Ã§Â¬Â¬Ã¤ÂºÅ’Ã¦Â­Â¥');
define('DISTRIBUTE_RESOURCES', 'Ã¥Ë†â€ Ã©â€¦ÂÃ¨Âµâ€žÃ¦ÂºÂ (Ã§Â¬Â¬Ã¤Â¸â‚¬Ã¦Â­Â¥)');
define('OF', 'of');
define('NPC_COMPLETED', 'Ã¨Âµâ€žÃ¦ÂºÂÃ§Â½Â®Ã¦ÂÂ¢Ã¥Â®Å’Ã¦Ë†Â');
define('BACK_BUILDING', 'Ã¨Â¿â€Ã¥â€ºÅ¾Ã¥Â»ÂºÃ§Â­â€˜');
define('YOU_CAN_NAT_NPC_WW', 'Ã¥Å“Â¨Ã¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€šÃ¦Ââ€˜Ã¥Âºâ€žÃ¤Â¸Â­Ã¤Â¸ÂÃ¨Æ’Â½Ã¨Â¿â€ºÃ¨Â¡Å’Ã¨Âµâ€žÃ¦ÂºÂÃ§Â½Â®Ã¦ÂÂ¢Ã£â‚¬â€š');
define('NPC_TRADING', 'Ã¨Âµâ€žÃ¦ÂºÂÃ§Â½Â®Ã¦ÂÂ¢');
define('SEND_RESOURCES', 'Ã¨Â¿ÂÃ©â‚¬ÂÃ¨Âµâ€žÃ¦ÂºÂ');
define('BUY', 'Ã¨Â´Â­Ã¤Â¹Â°');
define('TRADE_ROUTES', 'Ã¨Â´Â¸Ã¦Ëœâ€œÃ¨Â·Â¯Ã§ÂºÂ¿');
define('DESCRIPTION', 'Ã¦ÂÂÃ¨Â¿Â°');
define('G_DESCR', 'General description');
define('TIME_LEFT', 'Ã¥â€°Â©Ã¤Â½â„¢Ã¦â€”Â¶Ã©â€”Â´');
define('START', 'Ã¥Â¼â‚¬Ã¥Â§â€¹');
define('NO_TRADE_ROUTES', 'Ã¦Â²Â¡Ã¦Å“â€°Ã¦Â´Â»Ã¨Â·Æ’Ã§Å¡â€žÃ¨Â´Â¸Ã¦Ëœâ€œÃ¨Â·Â¯Ã§ÂºÂ¿');
define('TRADE_ROUTE_TO', 'Ã¨Â´Â¸Ã¦Ëœâ€œÃ¨Â·Â¯Ã§ÂºÂ¿Ã¨â€¡Â³');
define('CHECKED', 'checked');
define('DAYS', 'Days');
define('EXTEND', 'Extend');
define('EDIT', 'Edit');
define('EXTEND_TRADE_ROUTES', 'Extend the trade route by <b>7</b> days for');
define('CREATE_TRADE_ROUTES', 'Create new trade route');
define('DELIVERIES', 'Deliveries');
define('START_TIME_TRADE', 'Start time');
define('CREATE_TRADE_ROUTE', 'Create trade route');
define('TARGET_VILLAGE', 'Target village');
define('EDIT_TRADE_ROUTES', 'Edit trade route');
define('TRADE_ROUTES_DESC', 'Trade route allows you to set up routes for your merchant that he will walk every day at a certain hour. <br><br> Standard this holds on for <b>7</b> days, but you can extend it with <b>7</b> days for the cost of');
define('NPC_TRADE_DESC', 'With the NPC merchant you can distribute the resources in your warehouse as you desire. <br><br> The first line shows the current stock. In the second line you can choose another distribution. The third line shows the difference between the old and new stock.');
define('MARKETPLACE_DESC', 'At the Marketplace you can trade resources with other players. The higher its level, the more resources can be transported at the same time.');

define('EMBASSY', 'Ã¥Â¤Â§Ã¤Â½Â¿Ã©Â¦â€ ');
define('TAG', 'Ã¦Â â€¡Ã§Â­Â¾');
define('TO_THE_ALLIANCE', 'Ã¥â€°ÂÃ¥Â¾â‚¬Ã¨Ââ€Ã§â€ºÅ¸');
define('JOIN_ALLIANCE', 'Ã¥Å Â Ã¥â€¦Â¥Ã¨Ââ€Ã§â€ºÅ¸');
define('REFUSE', 'Ã¦â€¹â€™Ã§Â»Â');
define('ACCEPT', 'Ã¦Å½Â¥Ã¥Ââ€”');
define('NO_INVITATIONS', 'Ã¦Â²Â¡Ã¦Å“â€°Ã¦Å“â€°Ã¦â€¢Ë†Ã§Å¡â€žÃ©â€šâ‚¬Ã¨Â¯Â·Ã£â‚¬â€š');
define('NO_CREATE_ALLIANCE', 'Ã¨Â¢Â«Ã¥Â°ÂÃ§Â¦ÂÃ§Å¡â€žÃ§Å½Â©Ã¥Â®Â¶Ã¤Â¸ÂÃ¨Æ’Â½Ã¥Ë†â€ºÃ¥Â»ÂºÃ¨Ââ€Ã§â€ºÅ¸Ã£â‚¬â€š');
define('FOUND_ALLIANCE', 'Ã¥Ë†â€ºÃ¥Â»ÂºÃ¨Ââ€Ã§â€ºÅ¸');
define('EMBASSY_DESC', 'Ã¥Â¤Â§Ã¤Â½Â¿Ã©Â¦â€ Ã¦ËœÂ¯Ã¨Â¿â€ºÃ¨Â¡Å’Ã¥Â¤â€“Ã¤ÂºÂ¤Ã¦Â´Â»Ã¥Å Â¨Ã§Å¡â€žÃ¥Å“ÂºÃ¦â€°â‚¬Ã£â‚¬â€š The higher its level the more options the king gains.');

define('BARRACKS', 'Ã¥â€¦ÂµÃ¨ÂÂ¥');
define('QUANTITY', 'Ã¦â€¢Â°Ã©â€¡Â');
define('MAX', 'Ã¦Å“â‚¬Ã¥Â¤Â§');
define('TRAINING', 'Ã¨Â®Â­Ã§Â»Æ’Ã¤Â¸Â­');
define('FINISHED', 'Ã¥Â®Å’Ã¦Ë†Â');
define('UNIT_FINISHED', 'Ã¨Â·ÂÃ§Â¦Â»Ã¤Â¸â€¹Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¥Ââ€¢Ã¤Â½ÂÃ¨Â®Â­Ã§Â»Æ’Ã¥Â®Å’Ã¦Ë†Â');
define('AVAILABLE', 'Ã¥ÂÂ¯Ã§â€Â¨');
define('TRAINING_COMMENCE_BARRACKS', 'Ã¥â€¦ÂµÃ¨ÂÂ¥Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¨Æ’Â½Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¨Â®Â­Ã§Â»Æ’Ã£â‚¬â€š');
define('BARRACKS_DESC', 'Ã¦â€°â‚¬Ã¦Å“â€°Ã§Å¡â€žÃ¦Â­Â¥Ã¥â€¦ÂµÃ©Æ’Â½Ã¥Å“Â¨Ã¥â€¦ÂµÃ¨ÂÂ¥Ã¤Â¸Â­Ã¨Â®Â­Ã§Â»Æ’Ã¤ÂºÂ§Ã§â€Å¸Ã£â‚¬â€šÃ¥â€¦ÂµÃ¨ÂÂ¥Ã§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¨Â®Â­Ã§Â»Æ’Ã¦Â­Â¥Ã¥â€¦ÂµÃ§Å¡â€žÃ©â‚¬Å¸Ã¥ÂºÂ¦Ã¨Â¶Å Ã¥Â¿Â«Ã£â‚¬â€š');

define('STABLE', 'Ã©Â©Â¬Ã¥Å½Â©');
define('AVAILABLE_ACADEMY', 'Ã¦Â²Â¡Ã¦Å“â€°Ã¥ÂÂ¯Ã¨Â®Â­Ã§Â»Æ’Ã¥Ââ€¢Ã¤Â½ÂÃ£â‚¬â€šÃ¨Â¯Â·Ã¥â€¦Ë†Ã¥Å“Â¨Ã¥Â­Â¦Ã©â„¢Â¢Ã§Â â€Ã§Â©Â¶Ã£â‚¬â€š');
define('TRAINING_COMMENCE_STABLE', 'Ã©Â©Â¬Ã¥Å½Â©Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¨Æ’Â½Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¨Â®Â­Ã§Â»Æ’Ã£â‚¬â€š');
define('STABLE_DESC', 'Ã©Âªâ€˜Ã¥â€¦ÂµÃ¥Å“Â¨Ã©Â©Â¬Ã¥Å½Â©Ã¤Â¸Â­Ã¨Â®Â­Ã§Â»Æ’Ã£â‚¬â€šÃ©Â©Â¬Ã¥Å½Â©Ã§Å¡â€žÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¨Â®Â­Ã§Â»Æ’Ã©Âªâ€˜Ã¥â€¦ÂµÃ§Å¡â€žÃ©â‚¬Å¸Ã¥ÂºÂ¦Ã¨Â¶Å Ã¥Â¿Â«Ã£â‚¬â€š');

define('WORKSHOP', 'Ã¦â€Â»Ã¥Å¸Å½Ã¦Â­Â¦Ã¥â„¢Â¨Ã¥Å½â€š');
define('TRAINING_COMMENCE_WORKSHOP', 'Ã¦â€Â»Ã¥Å¸Å½Ã¦Â­Â¦Ã¥â„¢Â¨Ã¥Å½â€šÃ¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¨Æ’Â½Ã¥Â¼â‚¬Ã¥Â§â€¹Ã§â€Å¸Ã¤ÂºÂ§Ã¦â€Â»Ã¥Å¸Å½Ã¦Â­Â¦Ã¥â„¢Â¨Ã£â‚¬â€š');
define('WORKSHOP_DESC', 'Ã¨Â¯Â¸Ã¥Â¦â€šÃ¦â€Â»Ã¥Å¸Å½Ã©â€Â¤Ã£â‚¬ÂÃ¦Å â€¢Ã§Å¸Â³Ã¨Â½Â¦Ã§Â­â€°Ã§Å¡â€žÃ¦â€Â»Ã¥Å¸Å½Ã¦Â­Â¦Ã¥â„¢Â¨Ã¥Å“Â¨Ã¦â€Â»Ã¥Å¸Å½Ã¦Â­Â¦Ã¥â„¢Â¨Ã¥Å½â€šÃ¤Â¸Â­Ã§â€Å¸Ã¤ÂºÂ§Ã£â‚¬â€šÃ¦â€Â»Ã¥Å¸Å½Ã¦Â­Â¦Ã¥â„¢Â¨Ã¥Å½â€šÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¦â€Â»Ã¥Å¸Å½Ã¦Â­Â¦Ã¥â„¢Â¨Ã§Å¡â€žÃ§â€Å¸Ã¤ÂºÂ§Ã©â‚¬Å¸Ã¥ÂºÂ¦Ã¨Â¶Å Ã¥Â¿Â«Ã£â‚¬â€š');

define('ACADEMY', 'Ã¥Â­Â¦Ã©â„¢Â¢');
define('RESEARCH_AVAILABLE', 'Ã¥Â½â€œÃ¥â€°ÂÃ¦Â²Â¡Ã¦Å“â€°Ã¥ÂÂ¯Ã§Â â€Ã§Â©Â¶Ã§Å¡â€žÃ©Â¡Â¹Ã§â€ºÂ®Ã£â‚¬â€š');
define('RESEARCH_COMMENCE_ACADEMY', 'Ã¥Â½â€œÃ¥Â­Â¦Ã©â„¢Â¢Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¨Æ’Â½Ã¥Â¼â‚¬Ã¥Â§â€¹Ã§Â â€Ã§Â©Â¶Ã£â‚¬â€š');
define('RESEARCH', 'Ã§Â â€Ã§Â©Â¶');
define('EXPAND_WAREHOUSE1', 'Ã¦â€°Â©Ã¥Â»ÂºÃ¤Â»â€œÃ¥Âºâ€œ');
define('EXPAND_GRANARY1', 'Ã¦â€°Â©Ã¥Â»ÂºÃ§Â²Â®Ã¤Â»â€œ');
define('RESEARCH_IN_PROGRESS', 'Ã§Â â€Ã§Â©Â¶<br>Ã¨Â¿â€ºÃ¨Â¡Å’Ã¤Â¸Â­');
define('RESEARCHING', 'Ã§Â â€Ã§Â©Â¶Ã¤Â¸Â­');
define('PREREQUISITES', 'Ã¥â€¦Ë†Ã¥â€ Â³Ã¦ÂÂ¡Ã¤Â»Â¶');
define('SHOW_MORE', 'Ã¦ËœÂ¾Ã§Â¤ÂºÃ¦â€ºÂ´Ã¥Â¤Å¡');
define('HIDE_MORE', 'Ã©Å¡ÂÃ¨â€”ÂÃ¦â€ºÂ´Ã¥Â¤Å¡');
define('ACADEMY_DESC', 'Ã¥Â­Â¦Ã©â„¢Â¢Ã©â€¡Å’Ã¥ÂÂ¯Ã¤Â»Â¥Ã§Â â€Ã§Â©Â¶Ã¦â€“Â°Ã§Å¡â€žÃ¥â€¦ÂµÃ§Â§ÂÃ£â‚¬â€šÃ¦â€ºÂ´Ã¥Â¥Â½Ã§Å¡â€žÃ¥â€¦ÂµÃ§Â§ÂÃ©â‚¬Å¡Ã¥Â¸Â¸Ã©Å“â‚¬Ã¨Â¦ÂÃ¦â€ºÂ´Ã©Â«ËœÃ§Â­â€°Ã§ÂºÂ§Ã§Å¡â€žÃ¥Â­Â¦Ã©â„¢Â¢Ã¦ÂÂ¥Ã¨Â§Â£Ã©â€ÂÃ£â‚¬â€š');

define('CRANNY', 'Ã¥Â±Â±Ã¦Â´Å¾');
define('CURRENT_HIDDEN_UNITS', 'Ã§â€ºÂ®Ã¥â€°ÂÃ¥ÂÂ¯Ã¤Â»Â¥Ã¤Â¿ÂÃ¦Å Â¤Ã§Å¡â€žÃ¥Ââ€žÃ§Â±Â»Ã¨Âµâ€žÃ¦ÂºÂ:');
define('HIDDEN_UNITS_LEVEL', 'Ã¤Â¿ÂÃ¦Å Â¤Ã§Å¡â€žÃ¨Âµâ€žÃ¦ÂºÂÃ¦â€¢Â°Ã©â€¡ÂÃ¥Å“Â¨Ã§Â­â€°Ã§ÂºÂ§');
define('UNITS', 'Ã¥Ââ€¢Ã¤Â½Â');
define('CRANNY_DESC', 'Ã¥Å“Â¨Ã¦Ââ€˜Ã¥Âºâ€žÃ¨Â¢Â«Ã¦â€Â»Ã¥â€¡Â»Ã¦â€”Â¶Ã¯Â¼Å’Ã¥Â±Â±Ã¦Â´Å¾Ã©Å¡ÂÃ¨â€”ÂÃ§Å¡â€žÃ¨Âµâ€žÃ¦ÂºÂÃ¥ÂÂ¯Ã¤Â»Â¥Ã¤Â¸ÂÃ¨Â¢Â«Ã¦Å½Â Ã¥Â¤ÂºÃ£â‚¬â€š');

define('TOWNHALL', 'Ã¥Â¸â€šÃ¦â€Â¿Ã¥Å½â€¦');
define('CELEBRATIONS_COMMENCE_TOWNHALL', 'Ã¥Â¸â€šÃ¦â€Â¿Ã¥Å½â€¦Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¥ÂÂ¯Ã¤Â»Â¥Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¤Â¸Â¾Ã¥Å Å¾Ã¥Âºâ€ Ã¥â€¦Â¸Ã£â‚¬â€š');
define('GREAT_CELEBRATIONS', 'Ã¥Â¤Â§Ã¥Å¾â€¹Ã¥Âºâ€ Ã¥â€¦Â¸');
define('CULTURE_POINTS', 'Ã¦â€“â€¡Ã¥Å’â€“Ã§â€šÂ¹Ã¦â€¢Â°');
define('HOLD', 'Ã¤Â¸Â¾Ã¥Å Å¾');
define('CELEBRATIONS_IN_PROGRESS', 'Ã¥Âºâ€ Ã¥â€¦Â¸<br>Ã¦Â­Â£Ã¥Å“Â¨Ã¨Â¿â€ºÃ¨Â¡Å’Ã¤Â¸Â­');
define('CELEBRATIONS', 'Ã¥Âºâ€ Ã¥â€¦Â¸');
define('TOWNHALL_DESC', 'Ã¤Â½Â Ã¥ÂÂ¯Ã¤Â»Â¥Ã¥Å“Â¨Ã¥Â¸â€šÃ¦â€Â¿Ã¥Å½â€¦Ã¤Â¸Â¾Ã¥Å Å¾Ã§â€ºâ€ºÃ¥Â¤Â§Ã§Å¡â€žÃ¥Âºâ€ Ã¥â€¦Â¸Ã¯Â¼Å’Ã¨Å½Â·Ã¥Â¾â€”Ã¥Â¤Â§Ã©â€¡ÂÃ¦â€“â€¡Ã¦ËœÅ½Ã§â€šÂ¹Ã¦â€¢Â°Ã£â‚¬â€šÃ¥Â¸â€šÃ¦â€Â¿Ã¥Å½â€¦Ã§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¤Â¸Â¾Ã¥Å Å¾Ã¥Âºâ€ Ã¥â€¦Â¸Ã§Å¡â€žÃ¦â€”Â¶Ã©â€”Â´Ã¨Â¶Å Ã§Å¸Â­Ã£â‚¬â€š');

define('RESIDENCE', 'Ã¨Â¡Å’Ã¥Â®Â«');
define('CAPITAL', 'Ã¨Â¿â„¢Ã©â€¡Å’Ã¦ËœÂ¯Ã¤Â½Â Ã§Å¡â€žÃ©Â¦â€“Ã©Æ’Â½');
define('RESIDENCE_TRAIN_DESC', 'Ã¤Â½Â Ã©Å“â‚¬Ã¨Â¦Â10Ã§ÂºÂ§Ã¦Ë†â€“20Ã§ÂºÂ§Ã¨Â¡Å’Ã¥Â®Â«Ã¥â€™Å’Ã¤Â¸â€°Ã¤Â¸ÂªÃ¦â€¹â€œÃ¨Ââ€™Ã¨â‚¬â€¦Ã¦ÂÂ¥Ã¥Â¼â‚¬Ã¨Â¾Å¸Ã¦â€“Â°Ã¦Ââ€˜Ã¥Âºâ€žÃ£â‚¬â€šÃ¤Â½Â Ã©Å“â‚¬Ã¨Â¦Â10Ã§ÂºÂ§Ã¦Ë†â€“20Ã§ÂºÂ§Ã¨Â¡Å’Ã¥Â®Â«Ã¥â€™Å’Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¥Ââ€šÃ¨Â®Â®Ã¥â€˜ËœÃ£â‚¬ÂÃ¥ÂÂ¸Ã¤Â»Â¤Ã¥Â®ËœÃ¦Ë†â€“Ã¦â€”ÂÃ©â€¢Â¿Ã¦ÂÂ¥Ã¥Â¾ÂÃ¦Å“ÂÃ¥â€¦Â¶Ã¤Â»â€“Ã¦Ââ€˜Ã¥Âºâ€žÃ£â‚¬â€š');
define('PRODUCTION_POINTS', 'Ã¦Å“Â¬Ã¦Ââ€˜Ã§Å¡â€žÃ§â€Å¸Ã¦Ë†ÂÃ©â‚¬Å¸Ã¥ÂºÂ¦:');
define('PRODUCTION_ALL_POINTS', 'Ã¦â€°â‚¬Ã¦Å“â€°Ã¦Ââ€˜Ã¥Âºâ€žÃ§Å¡â€žÃ§â€Å¸Ã¦Ë†ÂÃ©â‚¬Å¸Ã¥ÂºÂ¦:');
define('POINTS_DAY', 'Ã¦â€“â€¡Ã¥Å’â€“Ã§â€šÂ¹Ã¦â€¢Â°Ã¦Â¯ÂÃ¥Â¤Â©');
define('VILLAGES_PRODUCED', 'Ã¤Â½Â Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€žÃ¥â€¦Â±Ã¨Â®Â¡Ã¥Â·Â²Ã§Â»ÂÃ§â€Å¸Ã¦Ë†ÂÃ¤Âºâ€ ');
define('POINTS_NEED', 'Ã¦â€“â€¡Ã¥Å’â€“Ã§â€šÂ¹Ã¦â€¢Â°Ã£â‚¬â€šÃ¤Â¸ÂºÃ¤Âºâ€ Ã¥Â¼â‚¬Ã¨Â¾Å¸Ã¦Ë†â€“Ã¥Â¾ÂÃ¦Å“ÂÃ¦â€“Â°Ã¦Ââ€˜Ã¥Âºâ€žÃ¯Â¼Å’Ã¤Â½Â Ã©Å“â‚¬Ã¨Â¦Â');
define('POINTS', 'Ã¦â€“â€¡Ã¥Å’â€“Ã§â€šÂ¹Ã¦â€¢Â°');
define('INHABITANTS', 'Ã¦Ââ€˜Ã¦Â°â€˜');
define('COORDINATES', 'Ã¥ÂÂÃ¦Â â€¡');
define('EXPANSION', 'Ã¦â€°Â©Ã¥Â¼Â ');
define('TRAIN', 'Ã¨Â®Â­Ã§Â»Æ’');
define('DATE', 'Ã¦â€”Â¥Ã¦Å“Å¸');
define('CONQUERED_BY_VILLAGE', 'Ã§â€Â±Ã¦Å“Â¬Ã¦Ââ€˜Ã¥Â¼â‚¬Ã¨Â¾Å¸Ã¦Ë†â€“Ã¥Â¾ÂÃ¦Å“ÂÃ§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€ž');
define('NONE_CONQUERED_BY_VILLAGE', 'Ã¦Å“Â¬Ã¦Ââ€˜Ã¨Â¿ËœÃ¦Â²Â¡Ã¦Å“â€°Ã¥Â»ÂºÃ§Â«â€¹Ã¦Ë†â€“Ã¥Â¼â‚¬Ã¨Â¾Å¸Ã¦Ââ€˜Ã¥Âºâ€žÃ£â‚¬â€š');
define('RESIDENCE_CULTURE_DESC', 'Ã¤Â½Â Ã©Å“â‚¬Ã¨Â¦ÂÃ¦â€“â€¡Ã¥Å’â€“Ã§â€šÂ¹Ã¦â€¢Â°Ã¦ÂÂ¥Ã¦â€°Â©Ã¥Â¼Â Ã¤Â½Â Ã§Å¡â€žÃ¥Â¸ÂÃ¥â€ºÂ½Ã£â‚¬â€šÃ¦â€“â€¡Ã¥Å’â€“Ã§â€šÂ¹Ã¦â€¢Â°Ã©Å¡ÂÃ¦â€”Â¶Ã©â€”Â´Ã§â€Å¸Ã¦Ë†ÂÃ¯Â¼Å’Ã¤Â½Â Ã§Å¡â€žÃ¥Â»ÂºÃ§Â­â€˜Ã§â€°Â©Ã¨Â¶Å Ã¥Â¤Å¡Ã£â‚¬ÂÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã§â€Å¸Ã¦Ë†ÂÃ¦â€“â€¡Ã¥Å’â€“Ã§â€šÂ¹Ã¦â€¢Â°Ã§Å¡â€žÃ©â‚¬Å¸Ã¥ÂºÂ¦Ã¥Â°Â±Ã¨Â¶Å Ã¥Â¿Â«Ã£â‚¬â€š');
define('RESIDENCE_LOYALTY_DESC', 'Ã¥Å“Â¨Ã¥Â¼ÂºÃ¦â€Â»Ã¦â€”Â¶Ã¯Â¼Å’Ã©Æ’Â¨Ã©ËœÅ¸Ã¤Â¸Â­Ã¨â€¹Â¥Ã¦Å“â€°Ã¥Ââ€šÃ¨Â®Â®Ã¥â€˜ËœÃ£â‚¬ÂÃ¥ÂÂ¸Ã¤Â»Â¤Ã¥Â®ËœÃ¦Ë†â€“Ã¦â€”ÂÃ©â€¢Â¿Ã¯Â¼Å’Ã¨Â¢Â«Ã¦â€Â»Ã¥â€¡Â»Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€žÃ¥Â¿Â Ã¨Â¯Å¡Ã¥ÂºÂ¦Ã¥Â°Â±Ã¤Â¼Å¡Ã©â„¢ÂÃ¤Â½Å½Ã£â‚¬â€šÃ¥Â¦â€šÃ¦Å¾Å“Ã¥Â¿Â Ã¨Â¯Å¡Ã¥ÂºÂ¦Ã©â„¢ÂÃ¤Â¸Âº 0 Ã¯Â¼Å’Ã¦Ââ€˜Ã¥Âºâ€žÃ¥Â°Â±Ã¤Â¼Å¡Ã¥Å Â Ã¥â€¦Â¥Ã¦â€Â»Ã¥â€¡Â»Ã¨â‚¬â€¦Ã§Å¡â€žÃ¥â€ºÂ½Ã¥Â®Â¶Ã£â‚¬â€šÃ¦Å“Â¬Ã¦Ââ€˜Ã¥Â½â€œÃ¥â€°ÂÃ¥Â¿Â Ã¨Â¯Å¡Ã¥ÂºÂ¦Ã¤Â¸Âº ');
define('RESIDENCE_DESC', 'Ã¨Â¡Å’Ã¥Â®Â«Ã¦ËœÂ¯Ã¤Â¸â‚¬Ã¥ÂºÂ§Ã¥Â°ÂÃ¥Å¾â€¹Ã¥Â®Â«Ã¦Â®Â¿Ã¯Â¼Å’Ã¤Â¾â€ºÃ¥â€ºÂ½Ã§Å½â€¹Ã¦Ë†â€“Ã§Å½â€¹Ã¥ÂÅ½Ã¥Å“Â¨Ã¨Â®Â¿Ã©â€”Â®Ã¦Ââ€˜Ã¥Âºâ€žÃ¦â€”Â¶Ã¥Â±â€¦Ã¤Â½ÂÃ£â‚¬â€šÃ¨Â¡Å’Ã¥Â®Â«Ã¥ÂÂ¯Ã¤Â»Â¥Ã©ËœÂ²Ã¦Â­Â¢Ã¦â€¢Å’Ã¤ÂºÂºÃ¥Â¾ÂÃ¦Å“ÂÃ¦Ââ€˜Ã¥Âºâ€žÃ£â‚¬â€š');

define('PALACE', 'Ã§Å¡â€¡Ã¥Â®Â«');
define('PALACE_CONSTRUCTION', 'Ã§Å¡â€¡Ã¥Â®Â«Ã¥Â·Â²Ã¥Å“Â¨Ã¥Â»ÂºÃ©â‚¬Â Ã¤Â¸Â­');
define('PALACE_TRAIN_DESC', 'Ã¤Â½Â Ã©Å“â‚¬Ã¨Â¦Â10Ã§ÂºÂ§Ã£â‚¬Â15Ã§ÂºÂ§Ã¦Ë†â€“20Ã§ÂºÂ§Ã§Å¡â€¡Ã¥Â®Â«Ã¥â€™Å’Ã¤Â¸â€°Ã¤Â¸ÂªÃ¦â€¹â€œÃ¨Ââ€™Ã¨â‚¬â€¦Ã¦ÂÂ¥Ã¥Â¼â‚¬Ã¨Â¾Å¸Ã¦â€“Â°Ã¦Ââ€˜Ã¥Âºâ€žÃ£â‚¬â€šÃ¤Â½Â Ã©Å“â‚¬Ã¨Â¦Â10Ã§ÂºÂ§Ã£â‚¬Â15Ã§ÂºÂ§Ã¦Ë†â€“20Ã§ÂºÂ§Ã§Å¡â€¡Ã¥Â®Â«Ã¥â€™Å’Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¥Ââ€šÃ¨Â®Â®Ã¥â€˜ËœÃ£â‚¬ÂÃ¥ÂÂ¸Ã¤Â»Â¤Ã¥Â®ËœÃ¦Ë†â€“Ã¦â€”ÂÃ©â€¢Â¿Ã¦ÂÂ¥Ã¥Â¾ÂÃ¦Å“ÂÃ¥â€¦Â¶Ã¤Â»â€“Ã¦Ââ€˜Ã¥Âºâ€žÃ£â‚¬â€š');
define('CHANGE_CAPITAL', 'Ã¨Â¿ÂÃ©Æ’Â½');
define('SECURITY_CHANGE_CAPITAL', 'Ã¤Â½Â Ã§Â¡Â®Ã¥Â®Å¡Ã¨Â¦ÂÃ¨Â¿ÂÃ©Æ’Â½Ã¥Ââ€”?<br><b>Ã¨Â¯Â¥Ã¦â€œÂÃ¤Â½Å“Ã¤Â¸ÂÃ¥ÂÂ¯Ã¦â€™Â¤Ã©â€â‚¬!</b><br>Ã¤Â¸ÂºÃ¤Âºâ€ Ã¥Â®â€°Ã¥â€¦Â¨Ã¨ÂµÂ·Ã¨Â§ÂÃ¯Â¼Å’Ã¤Â½Â Ã¥Â¿â€¦Ã©Â¡Â»Ã¨Â¾â€œÃ¥â€¦Â¥Ã¥Â¯â€ Ã§Â ÂÃ¦ÂÂ¥Ã§Â¡Â®Ã¨Â®Â¤:<br>');
define('PALACE_DESC', 'Ã¥Â¸ÂÃ¥â€ºÂ½Ã§Å¡â€žÃ¥â€ºÂ½Ã§Å½â€¹Ã¦Ë†â€“Ã§Å¡â€¡Ã¥ÂÅ½Ã¥Â±â€¦Ã¤Â½ÂÃ¥Å“Â¨Ã¨Â¿â„¢Ã¥ÂºÂ§Ã¥Â®Â«Ã¦Â®Â¿Ã¤Â¸Â­Ã£â‚¬â€šÃ¤Â½Â Ã§Å¡â€žÃ§Å½â€¹Ã¥â€ºÂ½Ã¥ÂÂªÃ¨Æ’Â½Ã¦Å“â€°Ã¤Â¸â‚¬Ã¥ÂºÂ§Ã§Å¡â€¡Ã¥Â®Â«Ã£â‚¬â€šÃ¤Â½Â Ã©Å“â‚¬Ã¨Â¦ÂÃ§Å¡â€¡Ã¥Â®Â«Ã¦ÂÂ¥Ã¦Å’â€¡Ã¥Â®Å¡Ã©Â¦â€“Ã©Æ’Â½Ã§Å¡â€žÃ¦â€°â‚¬Ã¥Å“Â¨Ã£â‚¬â€š');

define('TREASURY', 'Ã¥Â®ÂÃ§â€°Â©Ã¥Âºâ€œ');
define('TREASURY_COMMENCE', 'Ã¥Â®ÂÃ§â€°Â©Ã¥Âºâ€œÃ¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¥ÂÂ¯Ã¤Â»Â¥Ã¦Å¸Â¥Ã§Å“â€¹Ã¥Â®ÂÃ§â€°Â©Ã£â‚¬â€š');
define('ARTEFACTS_AREA', 'Ã¤Â½Â Ã©â„¢â€žÃ¨Â¿â€˜Ã§Å¡â€žÃ¥Â®ÂÃ§â€°Â©');
define('NO_ARTEFACTS_AREA', 'Ã¤Â½Â Ã©â„¢â€žÃ¨Â¿â€˜Ã¦Â²Â¡Ã¦Å“â€°Ã¥Â®ÂÃ§â€°Â©Ã£â‚¬â€š');
define('OWN_ARTEFACTS', 'Ã¤Â½Â Ã§Å¡â€žÃ¥Â®ÂÃ§â€°Â©');
define('CONQUERED', 'Ã¥Â·Â²Ã¥Â¾ÂÃ¦Å“Â');
define('DISTANCE', 'Ã¨Â·ÂÃ§Â¦Â»');
define('EFFECT', 'Ã¦â€¢Ë†Ã¦Å¾Å“');
define('ACCOUNT', 'Ã¨Â´Â¦Ã¥ÂÂ·');
define('SMALL_ARTEFACTS', 'Ã¥Â°ÂÃ¥Å¾â€¹Ã¥Â®ÂÃ§â€°Â©');
define('LARGE_ARTEFACTS', 'Ã¥Â¤Â§Ã¥Å¾â€¹Ã¥Â®ÂÃ§â€°Â©');
define('NO_ARTEFACTS', 'Ã¦Â²Â¡Ã¦Å“â€°Ã¥Â®ÂÃ§â€°Â©Ã£â‚¬â€š');
define('ANY_ARTEFACTS', 'Ã¤Â½Â Ã¦Â²Â¡Ã¦Å“â€°Ã¤Â»Â»Ã¤Â½â€¢Ã¥Â®ÂÃ§â€°Â©Ã£â‚¬â€š');
define('OWNER', 'Ã¦â€°â‚¬Ã¦Å“â€°Ã¨â‚¬â€¦');
define('AREA_EFFECT', 'Ã¤Â½Å“Ã§â€Â¨Ã¨Å’Æ’Ã¥â€ºÂ´');
define('VILLAGE_EFFECT', 'Ã¦Ââ€˜Ã¥Âºâ€žÃ¦â€¢Ë†Ã¦Å¾Å“');
define('ACCOUNT_EFFECT', 'Ã¨Â´Â¦Ã¥ÂÂ·Ã¦â€¢Ë†Ã¦Å¾Å“');
define('UNIQUE_EFFECT', 'Ã§â€¹Â¬Ã§â€°Â¹Ã¦â€¢Ë†Ã¦Å¾Å“');
define('REQUIRED_LEVEL', 'Ã§Â­â€°Ã§ÂºÂ§Ã¨Â¦ÂÃ¦Â±â€š');
define('TIME_CONQUER', 'Ã¥Â¾ÂÃ¦Å“ÂÃ¦â€”Â¶Ã©â€”Â´');
define('TIME_ACTIVATION', 'Ã¦Â¿â‚¬Ã¦Â´Â»Ã¦â€”Â¶Ã©â€”Â´');
define('NEXT_EFFECT', ' Ã¤Â¸â€¹Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¦â€¢Ë†Ã¦Å¾Å“');
define('FORMER_OWNER', 'Ã¦â€ºÂ¾Ã§Â»ÂÃ§Å¡â€žÃ¦â€°â‚¬Ã¦Å“â€°Ã¨â‚¬â€¦');
define('BUILDING_STRONGER', 'Building stronger with');
define('BUILDING_WEAKER', 'Building weaker with');
define('TROOPS_FASTER', 'Makes troops faster with');
define('TROOPS_SLOWEST', 'Makes troops slowest with');
define('SPIES_INCREASE', 'Spies increase ability with');
define('SPIES_DECRESE', 'Spies decrese ability with');
define('CONSUME_LESS', 'All troops consume less with');
define('CONSUME_HIGH', 'All troops consume high with');
define('TROOPS_MAKE_FASTER', 'Troops make faster with');
define('TROOPS_MAKE_SLOWEST', 'Troops make slowest with');
define('YOU_CONSTRUCT', 'You can construct ');
define('CRANNY_INCREASED', 'Cranny capacity is increased by');
define('CRANNY_DECRESE', 'Cranny capacity is decrese by');
define('WW_BUILDING_PLAN', 'You can build the Wonder of the World');
define('NO_WW', 'There are no Wonders of the World');
define('NO_PREVIOUS_OWNERS', 'There are no previous owners.');
define('TREASURY_DESC', 'Ã¥Â¸ÂÃ¥â€ºÂ½Ã¦Å“â‚¬Ã§ÂÂÃ¨Â´ÂµÃ§Å¡â€žÃ¨Â´Â¢Ã¥Â¯Å’Ã¤Â¿ÂÃ¥Â­ËœÃ¥Å“Â¨Ã¥Â®ÂÃ§â€°Â©Ã¥Âºâ€œÃ¤Â¸Â­Ã£â‚¬â€šÃ¥Â®ÂÃ§â€°Â©Ã¥Âºâ€œÃ¥ÂÂªÃ¨Æ’Â½Ã¥Â­ËœÃ¤Â¸â€¹Ã¤Â¸â‚¬Ã¤Â»Â¶Ã¥Â®ÂÃ§â€°Â©Ã£â‚¬â€šÃ¨Å½Â·Ã¥Â¾â€”Ã¥Â®ÂÃ§â€°Â©Ã¥ÂÅ½Ã©Å“â‚¬Ã¨Â¦ÂÃ¥Â­ËœÃ¦â€Â¾Ã¤Â¸â‚¬Ã¦Â®ÂµÃ¦â€”Â¶Ã©â€”Â´Ã¦â€°ÂÃ¥Â¼â‚¬Ã¥Â§â€¹Ã§â€Å¸Ã¦â€¢Ë†Ã£â‚¬â€šAfter you have captured an artefact it takes 24 hours on a normal server or 12 hours on a thrice speed server to be effective.');

define('TRADEOFFICE', 'Ã¤ÂºÂ¤Ã¦Ëœâ€œÃ¦â€°â‚¬');
define('CURRENT_MERCHANT', 'Ã¥Â½â€œÃ¥â€°ÂÃ¥â€¢â€ Ã¤ÂºÂºÃ¨Â¿ÂÃ¨Â½Â½Ã©â€¡Â:');
define('MERCHANT_LEVEL', 'Ã¥â€¢â€ Ã¤ÂºÂºÃ¨Â¿ÂÃ¨Â½Â½Ã©â€¡ÂÃ¥Å“Â¨Ã§Â­â€°Ã§ÂºÂ§');
define('TRADEOFFICE_DESC', 'Ã¥â€¢â€ Ã¤ÂºÂºÃ¥Å“Â¨Ã¤ÂºÂ¤Ã¦Ëœâ€œÃ¦â€°â‚¬Ã¥ÂÂ¯Ã¤Â»Â¥Ã¨Å½Â·Ã¥Â¾â€”Ã¦â€ºÂ´Ã¥Â¤Â§Ã§Å¡â€žÃ©Â©Â¬Ã¨Â½Â¦Ã¥â€™Å’Ã¦â€ºÂ´Ã¥Â¥Â½Ã§Å¡â€žÃ©Â©Â¬Ã£â‚¬â€šÃ¤ÂºÂ¤Ã¦Ëœâ€œÃ¦â€°â‚¬Ã§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¤Â½Â Ã§Å¡â€žÃ¥â€¢â€ Ã¤ÂºÂºÃ¥ÂÂ¯Ã¤Â»Â¥Ã¨Â¿ÂÃ©â‚¬ÂÃ§Å¡â€žÃ¨Âµâ€žÃ¦ÂºÂÃ¨Â¶Å Ã¥Â¤Å¡Ã£â‚¬â€š');

define('GREATBARRACKS', 'Ã¥Â¤Â§Ã¥â€¦ÂµÃ¨ÂÂ¥');
define('TRAINING_COMMENCE_GREATBARRACKS', 'Ã¥Â¤Â§Ã¥â€¦ÂµÃ¨ÂÂ¥Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¨Æ’Â½Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¨Â®Â­Ã§Â»Æ’Ã£â‚¬â€š');
define('GREATBARRACKS_DESC', 'Foot soldiers are trained in the great barracks. The higher the level of the barracks, the faster the troops are trained.');

define('GREATSTABLE', 'Ã¥Â¤Â§Ã©Â©Â¬Ã¥Å½Â©');
define('TRAINING_COMMENCE_GREATSTABLE', 'Ã¥Â¤Â§Ã©Â©Â¬Ã¥Å½Â©Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¨Æ’Â½Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¨Â®Â­Ã§Â»Æ’Ã£â‚¬â€š');
define('GREATSTABLE_DESC', 'Cavalry can be trained in the great stable. The higher its level the faster the troops are trained.');

define('CITYWALL', 'Ã¥Å¸Å½Ã¥Â¢â„¢');
define('DEFENCE_NOW', 'Ã¥Â½â€œÃ¥â€°ÂÃ©ËœÂ²Ã¥Â¾Â¡Ã¥Å Â Ã¦Ë†Â:');
define('DEFENCE_LEVEL', 'Ã©ËœÂ²Ã¥Â¾Â¡Ã¥Å Â Ã¦Ë†ÂÃ¥Å“Â¨Ã§Â­â€°Ã§ÂºÂ§');
define('CITYWALL_DESC', 'Ã¥Â»ÂºÃ©â‚¬Â Ã¥Å¸Å½Ã¥Â¢â„¢Ã¥ÂÂ¯Ã¤Â»Â¥Ã¤Â¿ÂÃ¦Å Â¤Ã¤Â½Â Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€žÃ¯Â¼Å’Ã¤Â½Â Ã§Å¡â€žÃ¥Â£Â«Ã¥â€¦ÂµÃ¥ÂÂ¯Ã¤Â»Â¥Ã¤Â¾ÂÃ¦â€°ËœÃ¥Å¸Å½Ã¥Â¢â„¢Ã¦â€ºÂ´Ã¥Â¥Â½Ã¥Å“Â°Ã¦Å ÂµÃ¥Â¾Â¡Ã¥Â¤â€“Ã¦â€¢Å’Ã£â‚¬â€šÃ¥Å¸Å½Ã¥Â¢â„¢Ã§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã©ËœÂ²Ã¥Â¾Â¡Ã¥Å Â Ã¦Ë†ÂÃ¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');

define('EARTHWALL', 'Ã¥Å“Å¸Ã¥Â¢â„¢');
define('EARTHWALL_DESC', 'Ã¥Â»ÂºÃ©â‚¬Â Ã¥Å“Å¸Ã¥Â¢â„¢Ã¥ÂÂ¯Ã¤Â»Â¥Ã¤Â¿ÂÃ¦Å Â¤Ã¤Â½Â Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€žÃ¯Â¼Å’Ã¥â€ºÂ Ã¤Â¸ÂºÃ¤Â½Â Ã§Å¡â€žÃ¥Â£Â«Ã¥â€¦ÂµÃ¥ÂÂ¯Ã¤Â»Â¥Ã¤Â¾ÂÃ¦â€°ËœÃ¥Å“Å¸Ã¥Â¢â„¢Ã¦â€ºÂ´Ã¥Â¥Â½Ã¥Å“Â°Ã¦Å ÂµÃ¥Â¾Â¡Ã¥Â¤â€“Ã¦â€¢Å’Ã£â‚¬â€šÃ¥Å“Å¸Ã¥Â¢â„¢Ã§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã©ËœÂ²Ã¥Â¾Â¡Ã¥Å Â Ã¦Ë†ÂÃ¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');

define('PALISADE', 'Ã¦Å“Â¨Ã¦Â â€¦Ã¦Â Â');
define('PALISADE_DESC', 'Ã¥Â»ÂºÃ©â‚¬Â Ã¦Å“Â¨Ã¦Â â€¦Ã¦Â ÂÃ¥ÂÂ¯Ã¤Â»Â¥Ã¤Â¿ÂÃ¦Å Â¤Ã¤Â½Â Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€žÃ¯Â¼Å’Ã¥â€ºÂ Ã¤Â¸ÂºÃ¤Â½Â Ã§Å¡â€žÃ¥Â£Â«Ã¥â€¦ÂµÃ¥ÂÂ¯Ã¤Â»Â¥Ã¤Â¾ÂÃ¦â€°ËœÃ¦Å“Â¨Ã¦Â â€¦Ã¦Â ÂÃ¦â€ºÂ´Ã¥Â¥Â½Ã¥Å“Â°Ã¦Å ÂµÃ¥Â¾Â¡Ã¥Â¤â€“Ã¦â€¢Å’Ã£â‚¬â€šÃ¦Å“Â¨Ã¦Â â€¦Ã¦Â ÂÃ§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã©ËœÂ²Ã¥Â¾Â¡Ã¥Å Â Ã¦Ë†ÂÃ¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');

define('STONEMASON', 'Ã§Å¸Â³Ã¥Å’Â Ã¥Â°ÂÃ¥Â±â€¹');
define('CURRENT_STABILITY', 'Ã¥Â½â€œÃ¥â€°ÂÃ¨â‚¬ÂÃ¤Â¹â€¦Ã¥ÂºÂ¦Ã¥Å Â Ã¦Ë†Â:');
define('STABILITY_LEVEL', 'Ã¨â‚¬ÂÃ¤Â¹â€¦Ã¥ÂºÂ¦Ã¥Å Â Ã¦Ë†ÂÃ¥Å“Â¨Ã§Â­â€°Ã§ÂºÂ§');
define('STONEMASON_DESC', 'Ã§Å¸Â³Ã¥Å’Â Ã¦ËœÂ¯Ã¥Â¼ÂºÃ¥Å’â€“Ã¥Â»ÂºÃ§Â­â€˜Ã§Å¡â€žÃ¥Â¤Â§Ã¥Â¸Ë†Ã£â‚¬â€šÃ§Å¸Â³Ã¥Å’Â Ã¥Â°ÂÃ¥Â±â€¹Ã§Â­â€°Ã§ÂºÂ§Ã¨Â¶Å Ã©Â«ËœÃ¯Â¼Å’Ã¦Ââ€˜Ã¥Âºâ€žÃ¥Â»ÂºÃ§Â­â€˜Ã§Å¡â€žÃ¨â‚¬ÂÃ¤Â¹â€¦Ã¥ÂºÂ¦Ã¨Â¶Å Ã©Â«ËœÃ£â‚¬â€š');

define('BREWERY', 'Ã©â€¦Â¿Ã©â€¦â€™Ã¥Å½â€š');
define('CURRENT_BONUS', 'Ã¥Â½â€œÃ¥â€°ÂÃ¥Å Â Ã¦Ë†Â:');
define('BONUS_LEVEL', 'Ã¥Å Â Ã¦Ë†ÂÃ¥Å“Â¨Ã§Â­â€°Ã§ÂºÂ§');
define('BREWERY_DESC', 'Ã§Â¾Å½Ã¥â€˜Â³Ã§Å¡â€žÃ¨Å“â€šÃ¨Å“Å“Ã©â€¦â€™Ã¢â‚¬Â¦Ã¢â‚¬Â¦Ã¥â€™â€¢Ã¥ËœÅ¸Ã¥â€™â€¢Ã¥ËœÅ¸Ã¥â€™â€¢Ã¥ËœÅ¸Ã¢â‚¬Â¦Ã¢â‚¬Â¦');

define('TRAPPER', 'Ã©â„¢Â·Ã©ËœÂ±Ã¦Å“Âº');
define('CURRENT_TRAPS', 'Ã¥Â½â€œÃ¥â€°ÂÃ¦Å“â‚¬Ã¥Â¤Â§Ã©â„¢Â·Ã©ËœÂ±Ã¥Â®Â¹Ã©â€¡Â:');
define('TRAPS_LEVEL', 'Ã¦Å“â‚¬Ã¥Â¤Â§Ã©â„¢Â·Ã©ËœÂ±Ã¥Â®Â¹Ã©â€¡ÂÃ¥Å“Â¨');
define('TRAPS', 'Ã©â„¢Â·Ã©ËœÂ±');
define('TRAP', 'Ã©â„¢Â·Ã©ËœÂ±');
define('CURRENT_HAVE', 'Ã¤Â½Â Ã§â€ºÂ®Ã¥â€°ÂÃ¦â€¹Â¥Ã¦Å“â€°');
define('WHICH_OCCUPIED', 'Ã¨Â¢Â«Ã¤Â¿ËœÃ¨Å½Â·');
define('TRAINING_COMMENCE_TRAPPER', 'Ã©â„¢Â·Ã©ËœÂ±Ã¦Å“ÂºÃ¥Â»ÂºÃ©â‚¬Â Ã¥Â®Å’Ã¦Ë†ÂÃ¥ÂÅ½Ã¦â€°ÂÃ¨Æ’Â½Ã¥Ë†Â¶Ã¤Â½Å“Ã©â„¢Â·Ã©ËœÂ±Ã£â‚¬â€š');
define('TRAPPER_DESC', 'Ã©â„¢Â·Ã©ËœÂ±Ã¦Å“ÂºÃ©â‚¬Å¡Ã¨Â¿â€¡Ã©Å¡ÂÃ¨â€”ÂÃ§Å¡â€žÃ©â„¢Â·Ã©ËœÂ±Ã¦ÂÂ¥Ã¤Â¿ÂÃ¦Å Â¤Ã¤Â½Â Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€žÃ£â‚¬â€šÃ¨Â¢Â«Ã©â„¢Â·Ã©ËœÂ±Ã¦Ââ€¢Ã¨Å½Â·Ã§Å¡â€žÃ¦â€¢Å’Ã¤ÂºÂºÃ¥Â°â€ Ã¦â€”Â Ã¥Å â€ºÃ¦â€Â»Ã¥â€¡Â»Ã¤Â½Â Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€žÃ£â‚¬â€š');

define('HEROSMANSION', 'Ã¨â€¹Â±Ã©â€ºâ€žÃ¥â€ºÂ­');
define('HERO_READY', 'Ã¨Â·ÂÃ§Â¦Â»Ã¨â€¹Â±Ã©â€ºâ€žÃ¥Â°Â±Ã§Â»Âª ');
define('NAME_CHANGED', 'Ã¨â€¹Â±Ã©â€ºâ€žÃ¥ÂÂÃ§Â§Â°Ã¥Â·Â²Ã¦â€ºÂ´Ã¦â€Â¹');
define('NOT_UNITS', 'Ã¤Â¸ÂÃ¥ÂÂ¯Ã§â€Â¨Ã§Å¡â€žÃ¥Ââ€¢Ã¤Â½Â');
define('NOT', 'Ã¤Â¸Â ');
define('TRAIN_HERO', 'Ã¨Â®Â­Ã§Â»Æ’Ã¦â€“Â°Ã§Å¡â€žÃ¨â€¹Â±Ã©â€ºâ€ž');
define('REVIVE', 'Ã©â€¡ÂÃ§â€Å¸');
define('OASES', 'Ã§Â»Â¿Ã¦Â´Â²');
define('DELETE', 'Ã¥Ë†Â Ã©â„¢Â¤');
define('RESOURCES', 'Ã¨Âµâ€žÃ¦ÂºÂ');
define('OFFENCE', 'Ã¤Â¸ÂªÃ¤Â½â€œÃ¦â€Â»Ã¥â€¡Â»Ã¥Å â€º');
define('DEFENCE', 'Ã¤Â¸ÂªÃ¤Â½â€œÃ©ËœÂ²Ã¥Â¾Â¡Ã¥Å â€º');
define('OFF_BONUS', 'Ã¥â€¦Â¨Ã¥â€ â€ºÃ¦â€Â»Ã¥â€¡Â»Ã¥Å Â Ã¦Ë†Â');
define('DEF_BONUS', 'Ã¥â€¦Â¨Ã¥â€ â€ºÃ©ËœÂ²Ã¥Â¾Â¡Ã¥Å Â Ã¦Ë†Â');
define('REGENERATION', 'Ã¦ÂÂ¢Ã¥Â¤ÂÃ©â‚¬Å¸Ã¥ÂºÂ¦');
define('DAY', 'Ã¥Â¤Â©');
define('EXPERIENCE', 'Ã§Â»ÂÃ©ÂªÅ’Ã¥â‚¬Â¼');
define('YOU_CAN', 'Ã¤Â½Â Ã¥ÂÂ¯Ã¤Â»Â¥ ');
define('RESET', 'Ã©â€¡ÂÃ§Â½Â®');
define('YOUR_POINT_UNTIL', ' Ã¤Â½Â Ã§Å¡â€žÃ§â€šÂ¹Ã¦â€¢Â°Ã¯Â¼Å’Ã§â€ºÂ´Ã¥Ë†Â°Ã§Â­â€°Ã§ÂºÂ§Ã¨Â¾Â¾Ã¥Ë†Â° ');
define('OR_LOWER', ' !');
define('YOUR_HERO_HAS', 'Ã¤Â½Â Ã§Å¡â€žÃ¨â€¹Â±Ã©â€ºâ€žÃ¦â€¹Â¥Ã¦Å“â€° ');
define('OF_HIT_POINTS', 'Ã§â€šÂ¹Ã§â€Å¸Ã¥â€˜Â½Ã¥â‚¬Â¼');
define('ERROR_NAME_SHORT', 'Ã©â€â„¢Ã¨Â¯Â¯: Ã¥ÂÂÃ§Â§Â°Ã¥Â¤ÂªÃ§Å¸Â­');
define('HEROSMANSION_DESC', ' Ã¥Å“Â¨Ã¨â€¹Â±Ã©â€ºâ€žÃ¥â€ºÂ­Ã¯Â¼Å’Ã¤Â½Â Ã¥ÂÂ¯Ã¤Â»Â¥Ã¨Â®Â­Ã§Â»Æ’Ã¤Â½Â Ã§Å¡â€žÃ¨â€¹Â±Ã©â€ºâ€žÃ£â‚¬â€šÃ¨â€¹Â±Ã©â€ºâ€žÃ¥â€ºÂ­Ã§Â­â€°Ã§ÂºÂ§Ã¥Ë†Â°Ã¨Â¾Â¾10Ã£â‚¬Â15Ã¥â€™Å’20Ã¦â€”Â¶Ã¥Ë†â€ Ã¥Ë†Â«Ã¥ÂÂ¯Ã¤Â»Â¥Ã¥Â¤Å¡Ã¦â€Â»Ã¥ÂÂ Ã¤Â¸â‚¬Ã§â€°â€¡Ã¦Ââ€˜Ã¥Âºâ€žÃ©â„¢â€žÃ¨Â¿â€˜Ã§Å¡â€žÃ§Â»Â¿Ã¦Â´Â²Ã£â‚¬â€š');

define('GREATWAREHOUSE', 'Ã¥Â¤Â§Ã¤Â»â€œÃ¥Âºâ€œ');
define('GREATWAREHOUSE_DESC', 'Wood, clay and iron are stored in the warehouse. The great warehouse offers you more space and keeps your goods drier and safer than the normal one.');

define('GREATGRANARY', 'Ã¥Â¤Â§Ã§Â²Â®Ã¤Â»â€œ');
define('GREATGRANARY_DESC', 'Crop produced by your farms is stored in the granary. The great granary offers you more space and keeps your crops drier and safer than the normal one.');

define('WONDER', 'Ã¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€š');
define('WORLD_WONDER', 'Ã¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€š');
define('WONDER_DESC', 'Ã¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€šÃ¦ËœÂ¯Ã¥Â¸ÂÃ¥â€ºÂ½Ã¥Â¼ÂºÃ¥Â¤Â§Ã¥â€™Å’Ã§Â¹ÂÃ¨ÂÂ£Ã§Å¡â€žÃ¤Â¸Â°Ã§Â¢â€˜Ã¯Â¼Å’Ã¦ËœÂ¯Ã¨ÂµÂ¢Ã¥Â¾â€”Ã¦Â¸Â¸Ã¦Ë†ÂÃ§Å¡â€žÃ§â€ºÂ®Ã¦Â â€¡Ã£â‚¬â€šÃ¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€šÃ¦Â¯ÂÃ¦ÂÂÃ¥Ââ€¡Ã¤Â¸â‚¬Ã§ÂºÂ§Ã©Æ’Â½Ã©Å“â‚¬Ã¨Â¦ÂÃ¨â‚¬â€”Ã¨Â´Â¹Ã¤Â¸ÂÃ¨Â®Â¡Ã¥â€¦Â¶Ã¦â€¢Â°Ã§Å¡â€žÃ¨Âµâ€žÃ¦ÂºÂÃ£â‚¬â€š');
define('WORLD_WONDER_CHANGE_NAME', 'Ã¤Â½Â Ã©Å“â‚¬Ã¨Â¦ÂÃ¥Â»ÂºÃ©â‚¬Â Ã¤Â¸â‚¬Ã§ÂºÂ§Ã¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€šÃ¦â€°ÂÃ¨Æ’Â½Ã¦â€ºÂ´Ã¦â€Â¹Ã¥Â®Æ’Ã§Å¡â€žÃ¥ÂÂÃ§Â§Â°');
define('WORLD_WONDER_NAME', 'Ã¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€šÃ¥ÂÂÃ§Â§Â°');
define('WORLD_WONDER_NOTCHANGE_NAME', 'Ã¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€š10Ã§ÂºÂ§Ã¤Â¹â€¹Ã¥ÂÅ½Ã¤Â¸ÂÃ¨Æ’Â½Ã¥â€ ÂÃ¦â€ºÂ´Ã¦â€Â¹Ã¥ÂÂÃ§Â§Â°');
define('WORLD_WONDER_NAME_CHANGED', 'Ã¥ÂÂÃ§Â§Â°Ã¥Â·Â²Ã¦â€ºÂ´Ã¦â€Â¹');

define('HORSEDRINKING', 'Ã©Â¥Â®Ã©Â©Â¬Ã¦Â§Â½');
define('HORSEDRINKING_DESC', 'Ã©Â¥Â®Ã©Â©Â¬Ã¦Â§Â½Ã¦ËœÂ¯Ã§Â½â€”Ã©Â©Â¬Ã¤ÂºÂºÃ¥Å Â Ã¥Â¿Â«Ã©Âªâ€˜Ã¥â€¦ÂµÃ¨Â®Â­Ã§Â»Æ’Ã©â‚¬Å¸Ã¥ÂºÂ¦Ã£â‚¬ÂÃ©â„¢ÂÃ¤Â½Å½Ã©Âªâ€˜Ã¥â€¦ÂµÃ§Â²Â®Ã¨â‚¬â€”Ã§Å¡â€žÃ§â€¹Â¬Ã§â€°Â¹Ã¦Å â‚¬Ã¦Å“Â¯Ã£â‚¬â€š');

define('GREATWORKSHOP', 'Ã¥Â¤Â§Ã¦â€Â»Ã¥Å¸Å½Ã¦Â­Â¦Ã¥â„¢Â¨Ã¥Å½â€š');
define('TRAINING_COMMENCE_GREATWORKSHOP', 'Training can commence when great workshop is completed.');
define('GREATWORKSHOP_DESC', 'Siege engines like catapults and rams can be built in the great workshop. The higher its level the faster the units are produced.');

define('BUILDING_MAX_LEVEL_UNDER', 'Ã¥Â»ÂºÃ§Â­â€˜Ã¦Â­Â£Ã¥Å“Â¨Ã¥Ââ€¡Ã§ÂºÂ§Ã¨â€¡Â³Ã¦Å“â‚¬Ã©Â«ËœÃ§Â­â€°Ã§ÂºÂ§');
define('BUILDING_BEING_DEMOLISHED', 'Ã¥Â»ÂºÃ§Â­â€˜Ã¦Â­Â£Ã¥Å“Â¨Ã¨Â¢Â«Ã¦â€¹â€ Ã©â„¢Â¤');
define('COSTS_UPGRADING_LEVEL', 'Ã¦Â¶Ë†Ã¨â‚¬â€”Ã¤Â¸â€¹Ã¥Ë†â€”Ã¨Âµâ€žÃ¦ÂºÂ</b> Ã¤Â»Â¥Ã¥Ââ€¡Ã¨â€¡Â³Ã§Â­â€°Ã§ÂºÂ§');
define('WORKERS_ALREADY_WORK', 'Ã¥Â·Â¥Ã¤ÂºÂºÃ¥Â·Â²Ã§Â»ÂÃ¥Å“Â¨Ã¥Â·Â¥Ã¤Â½Å“Ã¤Â¸Â­Ã£â‚¬â€š');
define('CONSTRUCTING_MASTER_BUILDER', 'Ã¤Â»Â¤Ã¥Â»ÂºÃ§Â­â€˜Ã¥Â¤Â§Ã¥Â¸Ë†Ã§Â­â€°Ã¥Â¾â€¦Ã¥Â»ÂºÃ©â‚¬Â  ');
define('COSTS', 'Ã¦Â¶Ë†Ã¨â‚¬â€”');
define('WORKERS_ALREADY_WORK_WAITING', 'Ã¥Â·Â¥Ã¤ÂºÂºÃ¥Â·Â²Ã§Â»ÂÃ¥Å“Â¨Ã¥Â·Â¥Ã¤Â½Å“Ã¤Â¸Â­Ã£â‚¬â€š (Ã¥Å Â Ã¥â€¦Â¥Ã¥Â»ÂºÃ©â‚¬Â Ã©ËœÅ¸Ã¥Ë†â€”)');
define('ENOUGH_FOOD_EXPAND_CROPLAND', 'Ã§Â²Â®Ã©Â£Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¤Â¸ÂÃ¨Â¶Â³Ã¯Â¼Å’Ã¨Â¯Â·Ã¥â€¦Ë†Ã¦â€°Â©Ã¥Â»ÂºÃ¥â€ Å“Ã§â€Â°Ã£â‚¬â€š');
define('UPGRADE_WAREHOUSE', 'Ã¥Ââ€¡Ã§ÂºÂ§Ã¤Â»â€œÃ¥Âºâ€œ');
define('UPGRADE_GRANARY', 'Ã¥Ââ€¡Ã§ÂºÂ§Ã§Â²Â®Ã¤Â»â€œ');
define('YOUR_CROP_NEGATIVE', 'Ã¤Â½Â Ã§Å¡â€žÃ§Â²Â®Ã©Â£Å¸Ã¤ÂºÂ§Ã©â€¡ÂÃ¤Â¸ÂºÃ¨Â´Å¸Ã¯Â¼Å’Ã¤Â½Â Ã¤Â¸ÂÃ¥ÂÂ¯Ã¨Æ’Â½Ã¨Â¾Â¾Ã¥Ë†Â°Ã¦â€°â‚¬Ã©Å“â‚¬Ã§Å¡â€žÃ¨Âµâ€žÃ¦ÂºÂÃ£â‚¬â€š');
define('UPGRADE_LEVEL', 'Ã¥Ââ€¡Ã¨â€¡Â³Ã§Â­â€°Ã§ÂºÂ§ ');
define('WAITING', '(Ã§Â­â€°Ã¥Â¾â€¦Ã©ËœÅ¸Ã¥Ë†â€”)');
define('NEED_WWCONSTRUCTION_PLAN', 'Ã©Å“â‚¬Ã¨Â¦ÂÃ¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€šÃ¨â€œÂÃ¥â€ºÂ¾');
define('NEED_MORE_WWCONSTRUCTION_PLAN', 'Ã©Å“â‚¬Ã¨Â¦ÂÃ¦â€ºÂ´Ã¥Â¤Å¡Ã¤Â¸â€“Ã§â€¢Å’Ã¥Â¥â€¡Ã¨Â§â€šÃ¨â€œÂÃ¥â€ºÂ¾');
define('CONSTRUCT_NEW_BUILDING', 'Ã¥Â»ÂºÃ©â‚¬Â Ã¦â€“Â°Ã¥Â»ÂºÃ§Â­â€˜');
define('SHOWSOON_AVAILABLE_BUILDINGS', 'Ã¦ËœÂ¾Ã§Â¤ÂºÃ¥ÂÂ³Ã¥Â°â€ Ã¥ÂÂ¯Ã§â€Â¨Ã§Å¡â€žÃ¥Â»ÂºÃ§Â­â€˜');
define('HIDESOON_AVAILABLE_BUILDINGS', 'Ã©Å¡ÂÃ¨â€”ÂÃ¥ÂÂ³Ã¥Â°â€ Ã¥ÂÂ¯Ã§â€Â¨Ã§Å¡â€žÃ¥Â»ÂºÃ§Â­â€˜');

// gold plus
define('GOLD_SHOP', 'Gold Shop');
define('PACKAGE_A', 'Package A');
define('PACKAGE_B', 'Package B');
define('PACKAGE_C', 'Package C');
define('PACKAGE_D', 'Package D');
define('PACKAGE_E', 'Package E');
define('PAYMENT_METHOD', 'Payment Method');
define('PACKAGES_NOT_REFUND', 'None of the packages are refundable');
define('PLUS_FUNC', 'Plus function');
define('REMAINING', 'Remaining');
define('MINS', 'mins');
define('ACTIVATE', 'Activate');
define('TOO_LITTLE_GOLD', 'Too little gold');
define('GOLD_ON', 'On'); // "attack on" and "gold feature on" can be not the same in different languages
define('PLUS_END', 'Your PLUS advantage has ended');
define('NPC', 'NPC');
define('NO_GOLD', 'You currently don&#39;t own gold');
define('GOLD_CLUB', 'Gold Club');
define('NOW', 'now');
define('NPC_TRADE_GOLD', 'Trade with the NPC merchant');
define('COMPLETE_CONSTRUCTION_R_GOLD', 'Complete construction orders and researches in this village now (does not work for Palace and Residence)');
define('FOR_GAME_SERVER', 'Whole game round');
define('HAVE_NO_INVITED', 'You have not brought in any new players yet');
define('INVITE_FRIENDS_GOLD', 'Invite friends and receive free Gold');
define('NEED_MORE_GOLD', 'You need more gold');
define('ADD_PLUS_FAIL', 'Failed plus attempt');
define('ADD_BONUS_LUMBER_FAIL', 'Failed lumber attempt');
define('ADD_BONUS_CLAY_FAIL', 'Failed clay attempt');
define('ADD_BONUS_IRON_FAIL', 'Failed iron attempt');
define('ADD_BONUS_CROP_FAIL', 'Failed crop attempt');
define('SELECT_GOLD_OPTION', 'Please select the option you wish to activate or extend');
define('GET_NOW', 'Get Now');
define('BUY_NOW', 'Buy Now');
define('SELECT_REWARD', 'Select reward');
define('VIP_ACCOUNT', 'VIP Account');
define('USER_NOT_EXISTS', 'The account name you entered does not exist');
define('STATUS_UPDATED', 'Your Status has been updated');

// profile
define('PREFERENCES', 'Preferences');
define('VACATION', 'Vacation');
define('ACTIVATE_VACATION', 'Want to activate Vacation Mode');
define('GRAPH_PACK', 'Graphic Pack');
define('PLAYER_PROFILE', 'Player profile');
define('CHANGE_PASSWORD', 'Change password');
define('OLD_PASSWORD', 'Old password');
define('NEW_PASSWORD', 'New password');
define('CHANGE_EMAIL', 'Change email');
define('CHANGE_EMAIL2', 'Please enter your old and your new e-mail addresses. You will then receive a code snippet at both e-mail addresses which you have to enter here');
define('OLD_EMAIL', 'Old email');
define('NEW_EMAIL', 'New email');
define('ACCOUNT_SITTERS', 'Account sitters');
define('ACCOUNT_SITTERS2', 'A sitter can log into your account by using your name and his/her password. You can have up to two sitters');
define('SITTER_NAME', 'Name of the sitter');
define('NO_SITTERS', 'You have no sitters');
define('RM_SITTER', 'Remove sitter');
define('YOU_ARE_SITTER', 'You have been entered as sitter on the following accounts. You can cancel this by clicking the red X');
define('DELETE_ACCOUNT', 'Delete account');
define('DELETE_ACCOUNT2', 'You can delete your account here. After starting the cancellation it will take three days to complete the cancellation of your account. You can cancel this process within the first 24 hours');
define('YES', 'Yes');
define('NO', 'No');
define('CONFIRM_W_PASS', 'Confirm with password');
define('MEDALS', 'Medals');
define('PLAYER_HAS', 'This player has'); // bird 1
define('HOURS_OF_BG_PROT', 'hours of beginners protection left'); // bird 1
define('PLAYER_WAS_REG_ON', 'This player registered his account on'); // bird 2
define('NATARS_ACC', 'Official Natar account'); // natars
define('WW_V_M', 'Official World Wonder Village'); // WW Village
define('ROMAN_T_M', 'The Romans : Because of its high level of social and technological development the Romans are masters at building and its coordination. Also, their troops are part of the elite in Travian. They are very balanced and useful in attacking and defending'); // roman tribe medal
define('TEUTON_T_M', 'The Teutons : The Teutons are the most aggressive tribe. Their troops are notorious and feared for their rage and frenzy when they attack. They move around as a plundering horde, not even afraid of death'); // teuton tribe medal
define('GAUL_T_M', 'The Gauls : The Gauls are the most peaceful of all three tribes in Travian. Their troops are trained for an excellent defence, but their ability to attack can still compete with the other two tribes. The Gauls are born riders and their horses are famous for their speed. This means that their riders can hit the enemy exactly where they can cause the most damage and swiftly take care of them'); // gaul tribe medal
define('ADMIN_M', 'Official Server Administrator');
define('MH_M', 'Official Server Global Multihunter');
define('MH_M2', 'The Multihunter is an official Travian position mainly used for enforcement of Travian rules within a server. Multihunters all use the account named Multihunter with its only village located in (0|0). A Multihunter may not play on the server on which they are the Multihunter, but be an active player on other servers');
define('NATURE_M2', 'Natures troops are the animals living in unoccupied oases. You can use the combat simulator to see whether you have enough troops to defeat the animals in an oasis you want to conquer, but remember that you can only raid oasis. Keep in mind that all the animals above Bear can kill its contemporary max tier travian troop in single combat');
define('TASKMASTER_M', 'Taskmaster Account');
define('VETERAN_P', 'Veteran Player');
define('VETERAN_3_M', 'Medal achieved for playing 3 years of Travian');
define('VETERAN_5_M', 'Medal achieved for playing 5 years of Travian');
define('VETERAN_10_M', 'Medal achieved for playing 10 years of Travian');
define('ATT_W_M', 'Attackers of the Week');
define('DEF_W_M', 'Defenders of the Week');
define('POP_W_M', 'Pop Climbers of the week');
define('ROB_W_M', 'Robbers of the week');
define('CLIMB_W_M', 'Rank Climbers of the week');
define('ATT_DEF_10_W_M', 'Receiving this medal shows that you where in the top 10 of both Attackers and Defenders of the week');
define('ATT_3_W_M', 'Receiving this medal shows that you were in the top 3 Attackers of the week');
define('DEF_3_W_M', 'Receiving this medal shows that you were in the top 3 Defenders of the week');
define('POP_3_W_M', 'Receiving this medal shows that you were in the top 3 Pop Climbers of the week');
define('ROB_3_W_M', 'Receiving this medal shows that you were in the top 3 Robbers of the week');
define('CLIMB_3_W_M', 'Receiving this medal shows that you were in the top 3 Rank Climbers of the week');
define('ATT_10_W_M', 'Receiving this medal shows that you were in the top 10 Attackers of the week');
define('DEF_10_W_M', 'Receiving this medal shows that you were in the top 10 Defenders of the week');
define('POP_10_W_M', 'Receiving this medal shows that you were in the top 10 Pop Climbers of the week');
define('ROB_10_W_M', 'Receiving this medal shows that you were in the top 10 Robbers of the week');
define('CLIMB_10_W_M', 'Receiving this medal shows that you were in the top 10 Rank Climbers of the week');
define('RECEIVED_IN_W', 'Received in week');
define('POINTS_M', 'Points');
define('RANKS', 'Ranks');
define('WEEK', 'Week');
define('CATEGORY', 'Category');
define('RANK', 'Rank');
define('BB_CODE', 'BB-Code');
define('IN_ROW', 'in a row');
define('ADMIN1', 'Administrator');
define('MULTIH1', 'Multihunter');
define('PLAYER_ADMIN', 'This player is Admin');
define('PLAYER_MH', 'This player is Multihunter');
define('PLAYER_BANNED', 'This player is BANNED');
define('PLAYER_VACATION', 'This player is on VACATION');
define('BANNED', 'Banned');
define('GENDER', 'Gender');
define('GENDER0', 'n/a');
define('MALE0', 'm');
define('MALE', 'Male');
define('FEMALE0', 'f');
define('FEMALE', 'Female');
define('LOCATION', 'Location');
define('DIRECT_LINKS', 'Direct links');
define('NUMBER0', 'No');
define('LINK_NAME', 'Link name');
define('LINK_TARGET', 'Link target');
define('AUTO_COMPL', 'Auto completion');
define('AUTO_COMPL2', 'Used for rally point and marketplace');
define('OWN_VILLAGES', 'own villages');
define('VILLAGES_NEAR', 'villages of the surroundings');
define('VILLAGES_ALLI_PLAYERS', 'villages from players of the alliance');
define('REPORT_FILTER', 'Report filter');
define('NO_REPORTS_TO_OWN', 'No reports for transfers to own villages');
define('NO_REPORTS_TO_OTH', 'No reports for transfers to foreign villages');
define('NO_REPORTS_FROM_OTH', 'No reports for transfers from foreign villages');
define('CHANGE_PROFILE', 'Change profile');
define('WRITE_MESSAGE', 'Write message');
define('REPORT_PLAYER', 'Report Player');
define('ARTEFACT1', 'Artefact');
define('WoW1', 'WoW');
define('VILLAGE_NAME', 'Village name');
define('BDAY', 'Birthday');
define('CONDITIONS', 'Conditions');
define('TIME_PREF', 'Time preferences');
define('TIME_ZONES_DESC', 'Here you can change Travian&#39;s displayed time to fit your time zone');
define('TIME_ZONE_L1', 'Europe');
define('TIME_ZONE_L2', 'UK');
define('TIME_ZONE_L3', 'Turkey');
define('TIME_ZONE_L4', 'Asia/Kolkata');
define('TIME_ZONE_L5', 'Asia/Bangkok');
define('TIME_ZONE_L6', 'USA/New York');
define('TIME_ZONE_L7', 'USA/Chicago');
define('TIME_ZONE_L8', 'New Zealand');
define('MONTH1', 'Jan');
define('MONTH2', 'Feb');
define('MONTH3', 'Mar');
define('MONTH4', 'Apr');
define('MONTH5', 'May');
define('MONTH6', 'June');
define('MONTH7', 'July');
define('MONTH8', 'Aug');
define('MONTH9', 'Sep');
define('MONTH10', 'Oct');
define('MONTH11', 'Nov');
define('MONTH12', 'Dec');

//artefact
define('ARCHITECTS_DESC', 'All buildings in the area of effect are stronger. This means that you will need more catapults to damage buildings protected by this artefacts powers.');
define('ARCHITECTS_SMALL', 'The architects slight secret');
define('ARCHITECTS_SMALLVILLAGE', 'Diamond Chisel');
define('ARCHITECTS_LARGE', 'The architects great secret');
define('ARCHITECTS_LARGEVILLAGE', 'Giant Marble Hammer');
define('ARCHITECTS_UNIQUE', 'The architects unique secret');
define('ARCHITECTS_UNIQUEVILLAGE', 'Hemons Scrolls');
define('HASTE_DESC', 'All troops in the area of effect move faster.');
define('HASTE_SMALL', 'The slight titan boots');
define('HASTE_SMALLVILLAGE', 'Opal Horseshoe');
define('HASTE_LARGE', 'The great titan boots');
define('HASTE_LARGEVILLAGE', 'Golden Chariot');
define('HASTE_UNIQUE', 'The unique titan boots');
define('HASTE_UNIQUEVILLAGE', 'Pheidippides Sandals');
define('EYESIGHT_DESC', 'All spies (Scouts, Pathfinders, and Equites Legati) increase their spying ability. In addition, with all versions of this artefact you can see the incoming TYPE of troops but not how many there are.');
define('EYESIGHT_SMALL', 'The eagles slight eyes');
define('EYESIGHT_SMALLVILLAGE', 'Tale of a Rat');
define('EYESIGHT_LARGE', 'The eagles great eyes');
define('EYESIGHT_LARGEVILLAGE', 'Generals Letter');
define('EYESIGHT_UNIQUE', 'The eagles unique eyes');
define('EYESIGHT_UNIQUEVILLAGE', 'Diary of Sun Tzu');
define('DIET_DESC', 'All troops in the artefacts range consume less wheat, making it possible to maintain a larger army.');
define('DIET_SMALL', 'Slight diet control');
define('DIET_SMALLVILLAGE', 'Silver Platter');
define('DIET_LARGE', 'Great diet control');
define('DIET_LARGEVILLAGE', 'Sacred Hunting Bow');
define('DIET_UNIQUE', 'Unique diet control');
define('DIET_UNIQUEVILLAGE', 'King Arthurs Chalice');
define('ACADEMIC_DESC', 'Troops are built a certain percentage faster within the scope of the artefact.');
define('ACADEMIC_SMALL', 'The trainers slight talent');
define('ACADEMIC_SMALLVILLAGE', 'Scribed Soldiers Oath');
define('ACADEMIC_LARGE', 'The trainers great talent');
define('ACADEMIC_LARGEVILLAGE', 'Declaration of War');
define('ACADEMIC_UNIQUE', 'The trainers unique talent');
define('ACADEMIC_UNIQUEVILLAGE', 'Memoirs of Alexander the Great');
define('STORAGE_DESC', 'With this building plan you are able to build the Great Granary or Great Warehouse in the Village with the artefact, or the whole account depending on the artefact. As long as you posses that artefact you are able to build and enlarge those buildings.');
define('STORAGE_SMALL', 'Slight storage masterplan');
define('STORAGE_SMALLVILLAGE', 'Builders Sketch');
define('STORAGE_LARGE', 'Great storage masterplan');
define('STORAGE_LARGEVILLAGE', 'Babylonian Tablet');
define('CONFUSION_DESC', 'Cranny capacity is increased by a certain amount for each type of artefact. Catapults can only shoot random on villages within this artefacts power. Exceptions are the WW which can always be targeted and the treasure chamber which can always be targeted, except with the unique artefact. When aiming at a resource field only random resource fields can be hit, when aiming at a building only random buildings can be hit.');
define('CONFUSION_SMALL', 'Rivals slight confusion');
define('CONFUSION_SMALLVILLAGE', 'Map of the Hidden Caverns');
define('CONFUSION_LARGE', 'Rivals great confusion');
define('CONFUSION_LARGEVILLAGE', 'Bottomless Satchel');
define('CONFUSION_UNIQUE', 'Rivals unique confusion');
define('CONFUSION_UNIQUEVILLAGE', 'Trojan Horse');
define('FOOL_DESC', 'Every 24 hours it gets a random effect, bonus, or penalty (all are possible with the exception of great warehouse, great granary and WW building plans). They change effect AND scope every 24 hours. The unique artefact will always take positive bonuses.');
define('FOOL_SMALL', 'Artefact of the slight fool');
define('FOOL_SMALLVILLAGE', 'Pendant of Mischief');
define('FOOL_UNIQUE', 'Artefact of the unique fool');
define('FOOL_UNIQUEVILLAGE', 'Forbidden Manuscript');
define('WWVILLAGE', 'WW village');
define('ARTEFACT', '<h1><b>Natars Artefacts</b></h1>

Whispering rumors echo through the villages, sharing legends told only by the best storytellers. It refers to NATARS, the most feared warrior of the TRAVIAN world. Their killing is the dream of any hero, the purpose of any fighter. No one knows how NATARS got to get such power, and their warriors so cruel. Determined to discover the source of the NATARS power, the fighters send a group of elite spies to spy them. I do not go through many hours and come back with fear in their eyes and balancing fantastic theories: it seems that the natural power comes from the mysterious objects they call artefacts that they stole from our ancestors. Try to steal the artefacts of her, and you can control their power.

<img src="/img/x.gif" class="ArtefactsAnnouncement">

The time has come for claiming artefacts. Collaborate with your alliance and bring your worriors to get these wanted objects. However, NATARS will not give up without war to the artefacts ... nor your enemies. If you are successful in retrieving artefacts and you will be able to reject enemies, you will be able to collect the rewards. Your buildings will become incredibly strong and mightest, and the troops will be much faster and will consume less food. Capture the artefacts, bring glory over your empire and become new legends for your followers.

To steal one, the following things must happen:

1. You must attack the village (NO Raid!)
2. WIN the Attack
3. Destroy the treasury
4. An empty treasury level 10 for SMALL ARTEFACTS and level 20 for LARGE ARTEFACT must be in the village where that attack came from
5. Have a hero in an attack

If not, the next attack on that village, winning with a hero and empty treasury will take the artefact.

To build a WW, you must own a plan yourself (you = the WW village owner) from lvl 0 to 50, from 51 to 100 you need an additional plan in your alliance! Two plans in the WW village account would not work!

The construction plans are conquerable immediately when they appear to the server. 

There will be a countdown in game, showing the exact time of the release, 5 days prior to the launch. ');

//WW Village Release Message
define('WWVILLAGEMSG', '<h1><b>Wonder of the World Villages</b></h1>

Countless days have passed since the first battles upon the walls of the cursed villages of the Dread Natars, many armies of both the free ones and the Natarian empire struggled and died before the walls of the many strongholds from which the Natars had once ruled all creation. Now with the dust settled and a relative calm having settled in, armies began to count their losses and collect their dead, the stench of combat still lingering in the night air, a smell of a slaughter unforgettable in its extent and brutality yet soon to be dwarfed by yet others. The largest armies of the free ones and the Dread Natars were marshalling for yet another renewed assault upon the coveted former strongholds of the Natarian Empire.
Soon scouts arrived telling of a most awesome sight and a chilling reminder, a dread army of an unfathomable size had been spotted marshalling at the end of the world, the Natarian capital, a force so great and unstoppable that the dust from their march would choke off all light, a force so brutal and ruthless that it would crush all hope. The free people knew that they had to race now, race against time and the endless hordes of the Natarian Empire to raise a Wonder of the World to restore the world to peace and vanquish the Natarian threat.
But to raise such a great Wonder would be no easy task, one would need construction plans created in the distant past, plans of such an arcane nature that even the very wisest of sages knew not their contents or locations.
Tens of thousands of scouts roamed across all existence searching in vain for these mystical plans, looking in all places but the dreaded Natarian Capital, yet could not find them. Today however, they return bearing good news, they return baring the locations of the plans, hidden by the armies of the Natars inside secret strongholds constructed to be hidden from the eyes of man.
Now begins the final stretch, when the greatest armies of the Free people and the Natars will clash across the world for the fate of all that lies under heaven. This is the war that will echo across the eons, this is your war, and here you shall etch your name across history, here you shall become legend.

<img src="/img/x.gif" class="WWVillagesAnnouncement" title="'.WWVILLAGE.'" alt="'.WWVILLAGE.'">

To conquer one, the following things must happen:

1. You must attack the village (NO Raid!)
2. WIN the Attack
3. Destroy the RESIDENCE
4. You must decrease the loyalty to 0 with : SENATORS , CHIEF , CHIEFTAIN
5. You must have enough culture points to conquer the village

If not, the next attack on that village, winning with a SENATORS , CHIEF , CHIEFTAIN and empty slots in RESIDENCE/PALACE will take the village.

To build a WW, you must own a plan yourself (you = the WW village owner) from lvl 0 to 50, from 51 to 100 you need an additional plan in your alliance! Two plans in the WW village account would not work!

The construction plans are conquerable immediately when they appear to the server. 

There will be a countdown in game, showing the exact time of the release, '.(5 / SPEED).' days prior to the launch. ');

//Building Plans
define('WILL_SPAWN_IN', 'will spawn in');
define('PLAN', 'Ancient Construction Plan');
define('PLANVILLAGE', 'WW Buildingplan');
define('PLAN_DESC', 'With this ancient construction plan you will able to build World Wonder to level 50. to build further, your alliance must hold at least two plans.');
define('PLAN_INFO', '<h1><b>World Wonder Construction Plans</b></h1>


Many moons ago the tribes of Travian were surprised by the unforeseen return of the Natars. This tribe from immemorial times surpassing all in wisdom, might and glory was about to trouble the free ones again. Thus they put all their efforts in preparing a last war against the Natars and vanquishing them forever. Many thought about the so-called &#39;Wonders of the World&#39;, a construction of many legends, as the only solution. It was told that it would render anyone invincible once completed. Ultimately making the constructors the rulers and conquerors of all known Travian. 

However, it was also told that one would need construction plans to construct such a building. Due to this fact, the architects devised cunning plans about how to store these safely. After a while, one could see temple-like buildings in many a city and metropolis - the Treasure Chambers (Treasuries). 

Sadly, no one - not even the wise and well versed - knew where to find these construction plans. The harder people tried to locate them, the more it seemed as if they where only legends. 

Today, however, this last secret will be revealed. Deprivations and endeavors of the past will not have been in vain, as today scouts of several tribes have successfully obtained the whereabouts of the construction plans. Well guarded by the Natars, they lie hidden in several oases to be found all over Travian. Only the most valiant heroes will be able to secure such a plan and bring it home safely so that the construction can begin. 

In the end, we will see whether the free tribes of Travian can once again outwit the Natars and vanquish them once and for all. Do not be so foolish as to assume that the Natars will leave without a fight, though!

<img src="/img/x.gif" class="WWBuildingPlansAnnouncement" title="'.PLAN.'" alt="'.PLAN.'">

To steal a set of Construction Plans from the Natars, the following things must happen:
- You must Attack the village (NOT Raid!)
- You must WIN the Attack
- You must DESTROY the Treasure Chamber (Treasury)
- Your Hero MUST be in that attack, as he is the only one who may carry the Construction Plans
- An empty level 10 Treasure Chamber (Treasury) MUST be in the village where that attack came from
NOTE: If the above criteria is not met during the attack, the next attack on that village which does meet the above criteria will take the Construction Plans.



To build a Treasure Chamber (Treasury), you will need a Main Building level 10 and the village MUST NOT be  contain a World Wonder.

To build a World Wonder, you must own the Construction Plans yourself (you = the World Wonder Village Owner) from level 0 to 50, and then from level 51 to 100 you will need an additional set of Construction Plans in your Alliance! Two sets of Construction Plans in the World Wonder Village Account will not work!');

//Admin setting - Admin/Templates/config.tpl & editServerSet.tpl
define('EDIT_BACK', 'Ã¨Â¿â€Ã¥â€ºÅ¾');
define('SERV_CONFIG', 'Ã¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã©â€¦ÂÃ§Â½Â®');
define('SERV_SETT', 'Ã¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã¨Â®Â¾Ã§Â½Â®');
define('EDIT_SERV_SETT', 'Ã§Â¼â€“Ã¨Â¾â€˜Ã¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã¨Â®Â¾Ã§Â½Â®');
define('SERV_VARIABLE', 'Ã¥ÂËœÃ©â€¡Â');
define('SERV_VALUE', 'Ã¥â‚¬Â¼');
define('CONF_SERV_NAME', 'Server Name');
define('CONF_SERV_NAME_TOOLTIP', 'Name of the game server.');
define('CONF_SERV_STARTED', 'Server Started');
define('CONF_SERV_STARTED_TOOLTIP', 'Time when the game server was started. This parameter can not be changed on the installed game server.');
define('CONF_SERV_TIMEZONE', 'Server Timezone');
define('CONF_SERV_TIMEZONE_TOOLTIP', 'Timezone of the game server.');
define('CONF_SERV_LANG', 'Language');
define('CONF_SERV_LANG_TOOLTIP', 'The language that is used in the admin panel and for everyone on the game server by default.');
define('CONF_SERV_SERVSPEED', 'Server Speed');
define('CONF_SERV_SERVSPEED_TOOLTIP', 'The speed of the game server. The higher the speed of the game server, the faster all buildings are built, the studies and improvements in the smithies are carried out, the troops are quickly built and the productivity of all resources is increased.');
define('CONF_SERV_TROOPSPEED', 'Troop Speed');
define('CONF_SERV_TROOPSPEED_TOOLTIP', 'Speed of movement of troops on the game server. The higher this indicator, the faster the troops move across the map.');
define('CONF_SERV_EVASIONSPEED', 'Evasion Speed');
define('CONF_SERV_EVASIONSPEED_TOOLTIP', 'The evasion speed is the time that troops spend on the road to return home after evasion an attack.');
define('CONF_SERV_STORMULTIPLER', 'Storage Multipler');
define('CONF_SERV_STORMULTIPLER_TOOLTIP', 'A multiplier for the storage capacity warehouse and granary. The value 1 is equal to the capacity of 80,000 of each resource at the maximum level. If you set the value to 2, then the capacity at the maximum level will be 160,000 of each resource.<br><b>Note:</b> the amount of resources that will be generated by unoccupied oases for robbery depends on this value. The default is 800. If you set the value to 2, the maximum number for each resource being generated is 1600.');
define('CONF_SERV_TRADCAPACITY', 'Trader Capacity');
define('CONF_SERV_TRADCAPACITY_TOOLTIP', 'A multiplier for the capacity of resources that can be carried by one trader. The value of 1 equals 500 capacity for the Romans, 750 for the Gauls, 1000 for the Teutons. If you set the value to 2, then the capacity of the transferred resources will double accordingly, 1000, 1500, 2000.');
define('CONF_SERV_CRANCAPACITY', 'Cranny Capacity');
define('CONF_SERV_CRANCAPACITY_TOOLTIP', 'A multiplier for the capacity of resources in Cranny, which can be saved from robbery. The value of 1 is equal to 1000 for Romans and Teutons, 2000 for Gauls. If you set the value to 2, then the capacity of the Cranny will double to 2000 and 4000 respectively.');
define('CONF_SERV_TRAPCAPACITY', 'Trapper Capacity');
define('CONF_SERV_TRAPCAPACITY_TOOLTIP', 'A multiplier for the capacity of the trap of the Gauls, which can capture enemy soldiers even before attacking the village. The value of 1 is equal to the capacity of 400 at the 20 level of construction. If you set the value to 2, then the capacity will be 800.');
define('CONF_SERV_NATUNITSMULTIPLIER', 'Natars Units Multiplier');
define('CONF_SERV_NATUNITSMULTIPLIER_TOOLTIP', 'This parameter is responsible for the number of troops of Natars, on artefacts and WW villages.');
define('CONF_SERV_NATARS_SPAWN_TIME', 'Natars Spawn');
define('CONF_SERV_NATARS_SPAWN_TIME_TOOLTIP', 'After how long Natars and artefacts will spawn from the start date of the server, in days');
define('CONF_SERV_NATARS_WW_SPAWN_TIME', 'World Wonders Spawn');
define('CONF_SERV_NATARS_WW_SPAWN_TIME_TOOLTIP', 'After how long WW villages will spawn from the start date of the server, in days');
define('CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME', 'WW Building Plan Spawn');
define('CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME_TOOLTIP', 'After how long WW building plans will spawn from the start date of the server, in days');
define('CONF_SERV_MAPSIZE', 'Map Size');
define('CONF_SERV_MAPSIZE_TOOLTIP', 'The size of the map of the game world. Can not be changed on an already installed game server.');
define('CONF_SERV_VILLEXPSPEED', 'Village Expanding Speed');
define('CONF_SERV_VILLEXPSPEED_TOOLTIP', 'Speed, which affects the expansion of the empire. With a slow speed more culture points are needed to found new village, with a fast speed the required number of culture points is reduced.');
define('CONF_SERV_BEGINPROTECT', 'Beginners Protection');
define('CONF_SERV_BEGINPROTECT_TOOLTIP', 'Protection, which prohibits a certain time to attack the villages of new players.');
define('CONF_SERV_REGOPEN', 'Register Open');
define('CONF_SERV_REGOPEN_TOOLTIP', 'Allows to enable (True) or disable (False) the registration of players on the game server.');
define('CONF_SERV_ACTIVMAIL', 'Activation Mail');
define('CONF_SERV_ACTIVMAIL_TOOLTIP', 'If enabled (Yes), during registration it will be necessary to confirm email address. If disabled (No) does not require confirmation of e-mail.');
define('CONF_SERV_QUEST', 'Quest');
define('CONF_SERV_QUEST_TOOLTIP', 'Enable (Yes) or disable (No) the quest on the game server.');
define('CONF_SERV_QTYPE', 'Quest Type');
define('CONF_SERV_QTYPE_TOOLTIP', 'The quest type can be official which is a bit shorter, and extended which is longer.');
define('CONF_SERV_DLR', 'Demolish - Level required');
define('CONF_SERV_DLR_TOOLTIP', 'The required level of the main building, on which can carry out the demolition of buildings in the village.');
define('CONF_SERV_WWSTATS', 'World Wonder - Statistics');
define('CONF_SERV_WWSTATS_TOOLTIP', 'Enable (True) or disable (False) the display in the statistics of villages with a Wonder of the World.');
define('CONF_SERV_NTRTIME', 'Nature Troops Regeneration Time');
define('CONF_SERV_NTRTIME_TOOLTIP', 'Time through which the nature troops will be restored in oases.');
define('CONF_SERV_OASIS_WOOD_PROD_MULT', 'Oasis Wood Production Multiplier');
define('CONF_SERV_OASIS_WOOD_PROD_MULT_TOOLTIP', 'The base wood oasis production');
define('CONF_SERV_OASIS_CLAY_PROD_MULT', 'Oasis Clay Production Multiplier');
define('CONF_SERV_OASIS_CLAY_PROD_MULT_TOOLTIP', 'The base clay oasis production');
define('CONF_SERV_OASIS_IRON_PROD_MULT', 'Oasis Iron Production Multiplier');
define('CONF_SERV_OASIS_IRON_PROD_MULT_TOOLTIP', 'The base iron oasis production');
define('CONF_SERV_OASIS_CROP_PROD_MULT', 'Oasis Crop Production Multiplier');
define('CONF_SERV_OASIS_CROP_PROD_MULT_TOOLTIP', 'The base crop oasis production');
define('CONF_SERV_MEDALINTERVAL', 'Medal Interval');
define('CONF_SERV_MEDALINTERVAL_TOOLTIP', 'The time interval for issuing medals for the top players and alliances. If this parameter is changed on the installed server, the time interval changes after the subsequent issuance of the medals.');
define('CONF_SERV_TOURNTHRES', 'Tourn Threshold');
define('CONF_SERV_TOURNTHRES_TOOLTIP', 'The number of squares on the game map, after which Tournament Square will start working.');
define('CONF_SERV_GWORKSHOP', 'Great Workshop');
define('CONF_SERV_GWORKSHOP_TOOLTIP', 'Enable (True) or disable (False) the use of a Great Workshop in the game.');
define('CONF_SERV_NATARSTAT', 'Show Natars in Statistics');
define('CONF_SERV_NATARSTAT_TOOLTIP', 'Enable (True) or disable (False) the display of the Natars account in statistics.');
define('CONF_SERV_PEACESYST', 'Peace system');
define('CONF_SERV_PEACESYST_TOOLTIP', 'Enable or disable the Peace system. When the peace system is activated, players will be able to attack each other but instead of any actions in the reports there will be a congratulatory inscription. The troops will not die of hunger.');
define('CONF_SERV_GRAPHICPACK', 'Graphic Pack');
define('CONF_SERV_GRAPHICPACK_TOOLTIP', 'Enable (Yes) or disable (No) the ability to use the graphics package.');
define('CONF_SERV_ERRORREPORT', 'Error Reporting');
define('CONF_SERV_ERRORREPORT_TOOLTIP', 'Enable (Yes) or disable (No) the display of error reports on the game server.');

//Admin setting - Admin/Templates/config.tpl & editPlusSet.tpl
define('PLUS_LOGO', '<b><font color="#71D000">P</font><font color="#FF6F0F">l</font><font color="#71D000">u</font><font color="#FF6F0F">s</font></b>');
define('PLUS_CONFIGURATION', PLUS_LOGO.' Configuration');
define('PLUS_SETT', PLUS_LOGO.' Settings');
define('EDIT_PLUS_SETT', 'Edit '.PLUS_LOGO.' Setting');
define('EDIT_PLUS_SETT1', 'Edit PLUS Setting');
define('CONF_PLUS_PAYPALEMAIL', '<a href="https://www.paypal.com" target="_blank">PayPal</a> E-Mail Address');
define('CONF_PLUS_PAYPALEMAIL_TOOLTIP', 'The E-Mail Address specified at registration on PayPal.<br><font color="red"><b>Must be Business or Premier account!</b></font>');
define('CONF_PLUS_CURRENCY', 'Payment Currency');
define('CONF_PLUS_CURRENCY_TOOLTIP', 'The currency to be used for payment.');
define('CONF_PLUS_PACKAGEGOLDA', 'Package &#34;A&#34; Amount of Gold');
define('CONF_PLUS_PACKAGEGOLDA_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;A&#34;.');
define('CONF_PLUS_PACKAGEPRICEA', 'Package &#34;A&#34; Amount of Price');
define('CONF_PLUS_PACKAGEPRICEA_TOOLTIP', 'The amount necessary to pay the cost of package &#34;A&#34;.');
define('CONF_PLUS_PACKAGEGOLDB', 'Package &#34;B&#34; Amount of Gold');
define('CONF_PLUS_PACKAGEGOLDB_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;B&#34;.');
define('CONF_PLUS_PACKAGEPRICEB', 'Package &#34;B&#34; Amount of Price');
define('CONF_PLUS_PACKAGEPRICEB_TOOLTIP', 'The amount necessary to pay the cost of package &#34;B&#34;.');
define('CONF_PLUS_PACKAGEGOLDC', 'Package &#34;C&#34; Amount of Gold');
define('CONF_PLUS_PACKAGEGOLDC_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;C&#34;.');
define('CONF_PLUS_PACKAGEPRICEC', 'Package &#34;C&#34; Amount of Price');
define('CONF_PLUS_PACKAGEPRICEC_TOOLTIP', 'The amount necessary to pay the cost of package &#34;C&#34;.');
define('CONF_PLUS_PACKAGEGOLDD', 'Package &#34;D&#34; Amount of Gold');
define('CONF_PLUS_PACKAGEGOLDD_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;D&#34;.');
define('CONF_PLUS_PACKAGEPRICED', 'Package &#34;D&#34; Amount of Price');
define('CONF_PLUS_PACKAGEPRICED_TOOLTIP', 'The amount necessary to pay the cost of package &#34;D&#34;.');
define('CONF_PLUS_PACKAGEGOLDE', 'Package &#34;E&#34; Amount of Gold');
define('CONF_PLUS_PACKAGEGOLDE_TOOLTIP', 'The amount of gold issued for the payment of the package &#34;E&#34;.');
define('CONF_PLUS_PACKAGEPRICEE', 'Package &#34;E&#34; Amount of Price');
define('CONF_PLUS_PACKAGEPRICEE_TOOLTIP', 'The amount necessary to pay the cost of package &#34;E&#34;.');
define('CONF_PLUS_ACCDURATION', PLUS_LOGO.' account duration');
define('CONF_PLUS_ACCDURATION_TOOLTIP', 'The duration of the game function '.PLUS_LOGO.' for the account at the time of activation by the player.');
define('CONF_PLUS_PRODUCTDURATION', '+25% production duration');
define('CONF_PLUS_PRODUCTDURATION_TOOLTIP', 'The duration of the game function +25% production duration for the account at the time of activation by the player.');

//Admin setting - Admin/Templates/config.tpl & editLogSet.tpl
define('LOG_SETT', 'Log Settings');
define('EDIT_LOG_SETT', 'Edit Log Setting');
define('CONF_LOG_BUILD', 'Log Build');
define('CONF_LOG_BUILD_TOOLTIP', 'Enable (Yes) or disable (No) the display of logs for the construction of buildings in the village.');
define('CONF_LOG_TECHNOLOGY', 'Log Technology');
define('CONF_LOG_TECHNOLOGY_TOOLTIP', 'Enable (Yes) or disable (No) display logs to improve troops in Blacksmith and Armoury.');
define('CONF_LOG_LOGIN', 'Log Login');
define('CONF_LOG_LOGIN_TOOLTIP', 'Enable (Yes) or disable (No) the display logs players login the game.');
define('CONF_LOG_GOLD', 'Log Gold');
define('CONF_LOG_GOLD_TOOLTIP', 'Enable (Yes) or disable (No) the display of gold use logs in-game by players.');
define('CONF_LOG_ADMIN', 'Log Admin');
define('CONF_LOG_ADMIN_TOOLTIP', 'Enable (Yes) or disable (No) the display of logs for administrator actions in the control panel.');
define('CONF_LOG_WAR', 'Log War');
define('CONF_LOG_WAR_TOOLTIP', 'Enable (Yes) or disable (No) the display of logs attacks on players in the game.');
define('CONF_LOG_MARKET', 'Log Market');
define('CONF_LOG_MARKET_TOOLTIP', 'Enable (Yes) or disable (No) the display of the logs of the use of the market in the game by the players.');
define('CONF_LOG_ILLEGAL', 'Log Illegal');
define('CONF_LOG_ILLEGAL_TOOLTIP', 'Enable (Yes) or disable (No) the display of illegal logs. (I do not know exactly what it is)');

//Admin setting - Admin/Templates/config.tpl & editNewsboxSet.tpl
define('NEWSBOX_SETT', 'Newsbox Settings');
define('EDIT_NEWSBOX_SETT', 'Edit Newsbox Setting');
define('EDIT_NEWSBOX1', 'Newsbox 1');
define('EDIT_NEWSBOX1_TOOLTIP', 'Enable or disable the display of the Newsbox 1. Displayed on the authorization page and on the game pages.');
define('EDIT_NEWSBOX2', 'Newsbox 2');
define('EDIT_NEWSBOX2_TOOLTIP', 'Enable or disable the display of the Newsbox 2. Displayed on the authorization page and on the game pages.');
define('EDIT_NEWSBOX3', 'Newsbox 3');
define('EDIT_NEWSBOX3_TOOLTIP', 'Enable or disable the display of the Newsbox 3. Displayed on the authorization page and on the game pages.');

//Admin setting - Admin/Templates/config.tpl SQL Settings
define('SQL_SETTINGS', 'SQL Settings');
define('CONF_SQL_HOSTNAME', 'Hostname');
define('CONF_SQL_HOSTNAME_TOOLTIP', 'The name of the server where MySQL is started (by default is: localhost).');
define('CONF_SQL_PORT', 'Port');
define('CONF_SQL_PORT_TOOLTIP', 'MySQL port for remote connection. The standard port for connecting is: 3306.');
define('CONF_SQL_DBUSER', 'DB Username');
define('CONF_SQL_DBUSER_TOOLTIP', 'The user name to connect to the database.');
define('CONF_SQL_DBPASS', 'DB Password');
define('CONF_SQL_DBPASS_TOOLTIP', 'Password from the user to connect to the database.');
define('CONF_SQL_DBNAME', 'DB Name');
define('CONF_SQL_DBNAME_TOOLTIP', 'Name of the database to which you are connecting.');
define('CONF_SQL_TBPREFIX', 'Table Prefix');
define('CONF_SQL_TBPREFIX_TOOLTIP', 'The prefix used for the database tables.');
define('CONF_SQL_DBTYPE', 'DB Type');
define('CONF_SQL_DBTYPE_TOOLTIP', 'The type of database used.');

//Admin setting - Admin/Templates/config.tpl & editExtraSet.tpl
define('EXTRA_SETT', 'Extra Settings');
define('EDIT_EXTRA_SETT', 'Edit Extra Settings');
define('CONF_EXTRA_LIMITMAIL', 'Limit Mailbox');
define('CONF_EXTRA_LIMITMAIL_TOOLTIP', 'Enable (Yes) or disable (No) the mailbox limit.');
define('CONF_EXTRA_MAXMAIL', 'Max number of mails');
define('CONF_EXTRA_MAXMAIL_TOOLTIP', 'The maximum number of messages that can fit in the mailbox.');

//Admin setting - Admin/Templates/config.tpl & editAdminInfo.tpl
define('ADMIN_INFO', 'Admin Information');
define('EDIT_ADMIN_INFO', 'Edit Admin Information');
define('CONF_ADMIN_NAME', 'Admin Name');
define('CONF_ADMIN_NAME_TOOLTIP', 'Name for the administrator account.');
define('CONF_ADMIN_EMAIL', 'Admin E-Mail');
define('CONF_ADMIN_EMAIL_TOOLTIP', 'The email address for the administrator account.');
define('CONF_ADMIN_SHOWSTATS', 'Include Admin in Stats');
define('CONF_ADMIN_SHOWSTATS_TOOLTIP', 'Enable (True) or disable (False) the display of the administrator account in the general statistics of players.');
define('CONF_ADMIN_SUPPMESS', 'Include Support Messages');
define('CONF_ADMIN_SUPPMESS_TOOLTIP', 'Enable (True) or disable (False) the sending of messages to the mailbox of the administrator addressed to Support.');
define('CONF_ADMIN_RAIDATT', 'Allow Raided and Attacked');
define('CONF_ADMIN_RAIDATT_TOOLTIP', 'Enable (True) or disable (False) the ability to Raided and Attacked an administrator.');

/*
|--------------------------------------------------------------------------
|   Index
|--------------------------------------------------------------------------
*/

$lang['index'][0][1] = 'Ã¦Â¬Â¢Ã¨Â¿Å½Ã¦ÂÂ¥Ã¥Ë†Â° '.SERVER_NAME;
$lang['index'][0][2] = 'Ã¦â€°â€¹Ã¥â€ Å’';
$lang['index'][0][3] = 'Ã§Å½Â°Ã¥Å“Â¨Ã¥Â°Â±Ã¨Æ’Â½Ã¥â€¦ÂÃ¨Â´Â¹Ã¦Â¸Â¸Ã§Å½Â©!';
$lang['index'][0][4] = 'Ã¤Â»â‚¬Ã¤Â¹Ë†Ã¦ËœÂ¯ '.SERVER_NAME;
$lang['index'][0][5] = 'TravianÃ¦â€ºÂ¾Ã¦ËœÂ¯Ã©Â£Å½Ã©ÂÂ¡Ã¥â€¦Â¨Ã§ÂÆ’Ã§Å¡â€žÃ§Â½â€˜Ã©Â¡ÂµÃ¦Â¸Â¸Ã¦Ë†ÂÃ¯Â¼Å’Ã¦Â­Â¤Ã§â€°Ë†Ã¦Å“Â¬Ã¦ËœÂ¯Ã§â€Â±Ã¥Â¼â‚¬Ã¦ÂºÂÃ§Â¤Â¾Ã¥Å’ÂºÃ¥Â¼â‚¬Ã¥Ââ€˜Ã¨â‚¬â€¦Ã¨Â´Â¡Ã§Å’Â®Ã§Å¡â€žÃ§Â»ÂÃ¥â€¦Â¸T3.6Ã§â€°Ë†Ã¦Å“Â¬nalootiÃ¯Â¼Å’Ã¨Â¯Â¦Ã¨Â§ÂGitHubÃ£â‚¬â€šÃ¦Â±â€°Ã¥Å’â€“Ã¦â€“â€¡Ã¦Å“Â¬Ã§â€Â±Muchen FanÃ¥Â®Å’Ã¦Ë†ÂÃ£â‚¬â€šÃ¦Å“Â¬Ã¦Å“ÂÃ¥Å Â¡Ã¥â„¢Â¨Ã¤Â»â€¦Ã¤Â¾â€ºÃ¦Âµâ€¹Ã¨Â¯â€¢Ã£â‚¬ÂÃ¤ÂºÂ¤Ã¦ÂµÂÃ£â‚¬ÂÃ¥Â­Â¦Ã¤Â¹Â Ã¤Â¹â€¹Ã§â€Â¨Ã£â‚¬â€šÃ¨Â¯Â·Ã¤Â¸ÂÃ¨Â¦ÂÃ¤Â½Â¿Ã§â€Â¨Ã¦Â¸Â¸Ã¦Ë†ÂÃ¥â€ â€¦Ã§Å¡â€žÃ¥â€¦â€¦Ã¥â‚¬Â¼Ã¦Å½Â¥Ã¥ÂÂ£Ã£â‚¬â€š'.SERVER_NAME.' is a <b>browser game</b> featuring an engaging ancient world with thousands of other real players.</p><p>It&#39;s <strong>free to play</strong> and requires <strong>no downloads</strong>.';
$lang['index'][0][6] = 'Ã§â€šÂ¹Ã¥â€¡Â»Ã¦Â­Â¤Ã¥Â¤â€žÃ¥ÂÂ³Ã¥Ë†Â»Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¦Â¸Â¸Ã§Å½Â© '.SERVER_NAME;
$lang['index'][0][7] = 'Ã§Å½Â©Ã¥Â®Â¶Ã¦â‚¬Â»Ã¦â€¢Â°';
$lang['index'][0][8] = 'Ã¦Â´Â»Ã¨Â·Æ’Ã§Å½Â©Ã¥Â®Â¶';
$lang['index'][0][9] = 'Ã¥Å“Â¨Ã§ÂºÂ¿Ã§Å½Â©Ã¥Â®Â¶';
$lang['index'][0][10] = 'Ã¥â€¦Â³Ã¤ÂºÅ½Ã¦Â¸Â¸Ã¦Ë†Â';
$lang['index'][0][11] = 'Ã¤Â½Â Ã¥Â°â€ Ã¤Â»Å½Ã¤Â¸â‚¬Ã¤Â¸ÂªÃ¥Â°ÂÃ¦Ââ€˜Ã¥Âºâ€žÃ§Å¡â€žÃ¥Â¤Â´Ã©Â¢â€ Ã¥Â¼â‚¬Ã¥Â§â€¹Ã¯Â¼Å’Ã¨Â°Â±Ã¥â€ â„¢Ã¨â€¹Â±Ã©â€ºâ€žÃ§Å¡â€žÃ¦â€¢â€¦Ã¤Âºâ€¹Ã£â‚¬â€š';
$lang['index'][0][12] = 'Ã¥Â»ÂºÃ§Â«â€¹Ã¦Ââ€˜Ã¥Âºâ€žÃ¯Â¼Å’Ã¥Ââ€˜Ã¥Å Â¨Ã¦Ë†ËœÃ¤Âºâ€°Ã¯Â¼Å’Ã¤Â¸Å½Ã©â€šÂ»Ã¥Â±â€¦Ã¥Â»ÂºÃ§Â«â€¹Ã¨Â´Â¸Ã¦Ëœâ€œÃ¨Â·Â¯Ã§ÂºÂ¿Ã£â‚¬â€š';
$lang['index'][0][13] = 'Ã¤Â¸Å½Ã¥â€¦Â¶Ã¤Â»â€“Ã§Å“Å¸Ã¥Â®Å¾Ã§Å½Â©Ã¥Â®Â¶Ã¦Ë†â€“Ã¥Â¯Â¹Ã¦Å â€”Ã£â‚¬ÂÃ¦Ë†â€“Ã¥ÂË†Ã¤Â½Å“Ã¯Â¼Å’Ã¥Â¾ÂÃ¦Å“ÂTravianÃ¦Â¸Â¸Ã¦Ë†ÂÃ¤Â¸â€“Ã§â€¢Å’Ã£â‚¬â€š';
$lang['index'][0][14] = 'Ã¦â€“Â°Ã©â€”Â»';
$lang['index'][0][15] = 'FAQ';
$lang['index'][0][16] = 'Ã¦Ë†ÂªÃ¥â€ºÂ¾';
$lang['forum'] = 'Ã¨Â®ÂºÃ¥Ââ€º';
$lang['register'] = 'Ã¦Â³Â¨Ã¥â€ Å’';
$lang['login'] = 'Ã§â„¢Â»Ã¥Â½â€¢';
$lang['screenshots']['title1'] = 'Ã¦Ââ€˜Ã¥Âºâ€ž';
$lang['screenshots']['desc1'] = 'Ã¦Ââ€˜Ã¥Âºâ€žÃ¥Â»ÂºÃ§Â­â€˜';
$lang['screenshots']['title2'] = 'Ã¨Âµâ€žÃ¦ÂºÂ';
$lang['screenshots']['desc2'] = 'Ã¦Ââ€˜Ã¥Âºâ€žÃ¨Âµâ€žÃ¦ÂºÂÃ¥Ë†â€ Ã¤Â¸ÂºÃ¦Å“Â¨Ã¦ÂÂÃ£â‚¬ÂÃ©Â»ÂÃ¥Å“Å¸Ã£â‚¬ÂÃ©â€œÂÃ§Å¸Â¿Ã¥â€™Å’Ã§Â²Â®Ã©Â£Å¸';
$lang['screenshots']['title3'] = 'Ã¥Å“Â°Ã¥â€ºÂ¾';
$lang['screenshots']['desc3'] = 'Ã¤Â½Â Ã§Å¡â€žÃ¦Ââ€˜Ã¥Âºâ€žÃ¥Å“Â¨Ã¥Å“Â°Ã¥â€ºÂ¾Ã¤Â¸Å Ã§Å¡â€žÃ¤Â½ÂÃ§Â½Â®';
$lang['screenshots']['title4'] = 'Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â»ÂºÃ§Â­â€˜';
$lang['screenshots']['desc4'] = 'Ã¥Â»ÂºÃ©â‚¬Â Ã¥Â»ÂºÃ§Â­â€˜Ã¥â€™Å’Ã¦ÂÂÃ¥Ââ€¡Ã§Â­â€°Ã§ÂºÂ§Ã§Å¡â€žÃ¦â€“Â¹Ã¥Â¼Â';
$lang['screenshots']['title5'] = 'Ã¦Å Â¥Ã¥â€˜Å ';
$lang['screenshots']['desc5'] = 'Ã¤Â½Â Ã§Å¡â€žÃ¦â€Â»Ã¥â€¡Â»Ã¦Å Â¥Ã¥â€˜Å ';
$lang['screenshots']['title6'] = 'Ã§Â»Å¸Ã¨Â®Â¡';
$lang['screenshots']['desc6'] = 'Ã¥Å“Â¨Ã§Â»Å¸Ã¨Â®Â¡Ã¤Â¸Â­Ã¦Å¸Â¥Ã§Å“â€¹Ã¤Â½Â Ã§Å¡â€žÃ¦Å½â€™Ã¥ÂÂ';
$lang['screenshots']['title7'] = 'Ã§â€¹Â¼Ã¦Ë†â€“Ã§Â¾Å ';
$lang['screenshots']['desc7'] = 'Ã¤Â½Â Ã¥ÂÂ¯Ã¤Â»Â¥Ã©â‚¬â€°Ã¦â€¹Â©Ã¥Ââ€˜Ã¥Â±â€¢Ã¥â€ â€ºÃ¤Âºâ€¹Ã¦Ë†â€“Ã¦ËœÂ¯Ã¥Ââ€˜Ã¥Â±â€¢Ã§Â»ÂÃ¦ÂµÅ½Ã£â‚¬ÂÃ¦Ë†â€“Ã¦ËœÂ¯Ã¤Â¸Â¤Ã¨â‚¬â€¦Ã©Â½ÂÃ¥Â¤Â´Ã¥Â¹Â¶Ã¨Â¿â€º';
