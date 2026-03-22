<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANZ                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianZ)                                 //
//                              - TravianZ = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//                                Adding tasks, constructions and artefact  by: Armando             //
//                                Modified , added , fixed , implementd  by: Shadow and ronix       //
//////////////////////////////////////////////////////////////////////////////////////////////////////
									//                         //
									//         ENGLISH         //
									//      Author: Dzoki      //
									//     Adding: Armando     //
									/////////////////////////////

//MAIN MENU
define('TRIBE1', 'رومی‌ها');
define('TRIBE2', 'توتن‌ها');
define('TRIBE3', 'گول‌ها');
define('TRIBE4', 'طبیعت');
define('TRIBE5', 'ناتارها');
define('TRIBE6', 'هیولاها');

define('HOME', 'صفحه اصلی');
define('INSTRUCT', 'آموزش‌ها');
define('ADMIN_PANEL', 'پنل مدیریت');
define('MH_PANEL', 'پنل مولتی‌هانتر');
define('MASS_MESSAGE', 'پیام همگانی');
define('LOGOUT', 'خروج');
define('PROFILE', 'پروفایل');
define('SUPPORT', 'پشتیبانی');
define('UPDATE_T_10', 'به‌روزرسانی ۱۰ نفر برتر');
define('SYSTEM_MESSAGE', 'پیام سیستم');
define('TRAVIAN_PLUS', 'تراوین <b><span class="plus_g">پ</span><span class="plus_o">ل</span><span class="plus_g">ا</span><span class="plus_o">س</span></span></span></b>');
define('CONTACT', 'تماس با ما');
define('GAME_RULES', 'قوانین بازی');

//MENU
define('REG', 'ثبت‌نام');
define('FORUM', 'فروم');
define('CHAT', 'چت');
define('IMPRINT', 'تاییدیه');
define('MORE_LINKS', 'لینک‌های بیشتر');
define('TOUR', 'گشت و گذار');


//ERRORS
define('USRNM_EMPTY', '(نام کاربری خالی است)');
define('USRNM_TAKEN', '(این نام قبلاً انتخاب شده است)');
define('USRNM_SHORT', '(حداقل '.USRNM_MIN_LENGTH.' کاراکتر)');
define('USRNM_CHAR', '(کاراکترهای غیرمجاز)');
define('PW_EMPTY', '(رمز عبور خالی است)');
define('PW_SHORT', '(حداقل '.PW_MIN_LENGTH.' کاراکتر)');
define('PW_INSECURE', '(رمز عبور ناامن است. لطفاً رمز پیچیده‌تری انتخاب کنید)');
define('EMAIL_EMPTY', '(ایمیل خالی است)');
define('EMAIL_INVALID', '(آدرس ایمیل نامعتبر است)');
define('EMAIL_TAKEN', '(این ایمیل قبلاً استفاده شده است)');
define('TRIBE_EMPTY', '<li>لطفاً یک نژاد انتخاب کنید.</li>');
define('AGREE_ERROR', '<li>برای ثبت‌نام باید قوانین بازی را بپذیرید.</li>');
define('LOGIN_USR_EMPTY', 'نام کاربری را وارد کنید.');
define('LOGIN_PASS_EMPTY', 'رمز عبور را وارد کنید.');
define('EMAIL_ERROR', 'ایمیل با اطلاعات موجود مطابقت ندارد');
define('PASS_MISMATCH', 'رمزهای عبور با هم مطابقت ندارند');
define('ALLI_OWNER', 'لطفاً قبل از حذف، یک صاحب جدید برای اتحاد انتخاب کنید');
define('SIT_ERROR', 'جانشین قبلاً تعیین شده یا بازیکن یافت نشد');
define('USR_NT_FOUND', 'نام کاربری وجود ندارد.');
define('LOGIN_PW_ERROR', 'رمز عبور اشتباه است.');
define('WEL_TOPIC', 'نکات و اطلاعات مفید');
define('ATAG_EMPTY', 'تگ خالی است');
define('ANAME_EMPTY', 'نام خالی است');
define('ATAG_EXIST', 'تگ قبلاً گرفته شده');
define('ANAME_EXIST', 'نام قبلاً گرفته شده');
define('ALREADY_ALLY_MEMBER', 'You&#39;re already in an alliance');
define('ALLY_TOO_LOW', 'You must have a level 3 or greater embassy');
define('USER_NOT_IN_YOUR_ALLY', 'This user is not in your alliance!');
define('CANT_EDIT_YOUR_PERMISSIONS', 'You can&#39;t edit your own permissions!');
define('CANT_EDIT_LEADER_PERMISSIONS', 'Alliance leader&#39;s permissions can&#39;t be edited!');
define('NO_PERMISSION', 'You don&#39;t have enough permissions!');
define('NAME_OR_DIPL_EMPTY', 'Name or diplomacy empty');
define('ALLY_DOESNT_EXISTS', 'Alliance does not exist');
define('CANNOT_INVITE_SAME_ALLY', 'You cannot invite your own alliance');
define('WRONG_DIPLOMACY', 'Wrong choice made');
define('INVITE_ALREADY_SENT', 'Either you have already sent a pact to this alliance, they sent it to yours or you already have a pact with them');
define('INVITE_SENT', 'Invite sent');
define('DECLARED_WAR_ON', 'declared war to');
define('OFFERED_NON_AGGRESION_PACT_TO', 'offered non-aggression pact to');
define('OFFERED_CONFED_TO', 'offered a confederation to');
define('ALLY_TOO_MUCH_PACTS', 'Either You cannot offer more pacts of this kind or this alliance has reached the limit for this kind of patcs');
define('ALLY_PERMISSIONS_UPDATED', 'Permissions updated');
define('ALLY_FORUM_LINK_UPDATED', 'Forum link updated');
define('NO_FORUMS_YET', 'There are no forums yet.');
define('ALLY_USER_KICKED', ' has been kicked from the alliance');
define('NOT_OPENED_YET', 'Server not started yet.');
define('REGISTER_CLOSED', 'The register is closed. You can&#39;t register to this server.');
define('NAME_EMPTY', 'Please insert name');
define('NAME_NO_EXIST', 'There is no user with the name ');
define('ID_NO_EXIST', 'There is no user with the id ');
define('SAME_NAME', 'You can&#39;t invite yourself');
define('ALREADY_INVITED', ' already invited');
define('ALREADY_IN_ALLY', ' is already in this alliance');
define('ALREADY_IN_AN_ALLY', ' is already in an alliance');
define('NAME_OR_TAG_CHANGED', 'Name or Tag changed');
define('VAC_MODE_WRONG_DAYS', 'You&#39;ve inserted a wrong number of days');

//COPYRIGHT
define('TRAVIAN_COPYRIGHT', 'TravianZ 100% Open Source Travian Clone.');

//BUILD.TPL
define('CUR_PROD', 'Current production');
define('NEXT_PROD', 'Production at level ');
define('CONSTRUCT_BUILD', 'Construct Building');

//DORF1
define('LUMBER', 'چوب');
define('CLAY', 'خشت');
define('IRON', 'آهن');
define('CROP', 'گندم');
define('LEVEL', 'سطح');
define('CROP_COM', 'مصرف '.CROP);
define('PER_HR', 'در ساعت');
define('PRODUCTION', 'تولید');
define('CAPITAL1', 'پایتخت');
define('VILLAGES', 'دهکده‌ها');
define('ANNOUNCEMENT', 'اطلاعیه');
define('GO2MY_VILLAGE', 'برو به دهکده من');
define('VILLAGE_CENTER', 'مرکز دهکده');
define('FINISH_GOLD', 'تمامی عملیات ساخت و تحقیق در این دهکده بلافاصله با ۲ سکه طلا به پایان برسد؟');
define('WAITING_LOOP', '(در صف انتظار)');
define('CROP_NEGATIVE', 'تولید گندم شما منفی است، هرگز به مقدار منابع درخواستی نخواهید رسید.');
define('HR', 'ساعت');
define('HRS', '(ساعت)');
define('DONE_AT', 'به اتمام می‌رسد در');
define('CANCEL', 'لغو');
define('LOYALTY', 'وفاداری');
define('CALCULATED_IN', 'محاسبه شده در');
define('HI', 'سلام');
define('P_IN', 'در');
define('MS', 'میلی‌ثانیه');
define('SERVER_TIME', 'زمان سرور:');
define('REMAINING_GOLD', 'طلای باقی‌مانده');

// HEADER && MENU && Messages && Reports
define('REPORTS', 'گزارش‌ها');
define('MESSAGES', 'پیام‌ها');
define('PLUS_MENU', 'منوی پلاس');
define('LINKS', 'لینک‌ها');
define('CANCEL_PROCESS', 'لغو عملیات');
define('ACCOUNT_DELETING', 'اکانت حذف خواهد شد در');
define('INBOX', 'صندوق ورودی');
define('WRITE', 'نوشتن');
define('SENT', 'ارسال شده');
define('SEND', 'ارسال');
define('ARCHIVE', 'آرشیو');
define('NOTES', 'یادداشت‌ها');
define('SUBJECT', 'موضوع');
define('SENDER', 'فرستنده');
define('RECIPIENT', 'گیرنده');
define('BACK', 'بازگشت');
define('NEW', 'جدید');
define('UNREAD', 'خوانده نشده');
define('NO_MESS', 'هیچ پیامی موجود نیست');
define('NO_MESS_IN_ARCHIVE', NO_MESS.' در آرشیو');
define('NO_MESS_SENT', 'هیچ پیام ارسال شده‌ای موجود نیست');
define('MESS_FOR_SUP', 'پیام برای پشتیبانی');
define('MESS_FOR_MH', 'پیام برای مولتی‌هانتر');
define('SEND_AS_SUP', 'ارسال به عنوان پشتیبانی');
define('SEND_AS_MH', 'ارسال به عنوان مولتی‌هانتر');
define('SAVE', 'ذخیره');
define('ANSWER', 'پاسخ');
define('REPLY', 'پاسخ دادن');
define('ADDRESSBOOK', 'دفترچه تلفن');
define('CLOSE_ADDRESSBOOK', 'بستن دفترچه تلفن');
define('ONLINE_S1', 'هم‌اکنون آنلاین');
define('ONLINE_S2', 'آفلاین');
define('ONLINE_S3', '۳ روز اخیر');
define('ONLINE_S4', '۷ روز اخیر');
define('ONLINE_S5', 'غیرفعال');
define('WAIT_FOR_CONFIRM', 'در انتظار تایید');
define('CONFIRM', 'تایید');
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
if(!defined('PEACE')) define('PEACE', 'Peace');

define('GOLD', 'طلا');
define('GOLD_IMG', '<img src=\"/img/x.gif\" class=\"gold\" alt=\"'.GOLD.'\" title=\"'.GOLD.'\">');

//QUEST
define('Q_CONTINUE', 'ادامه با ماموریت بعدی.');
define('Q_REWARD', 'جایزه شما:');
define('Q_BUTN', 'اتمام ماموریت');
define('Q0', 'خوش آمدید به ');
define('Q0_DESC', 'همانطور که می‌بینم شما به عنوان رئیس این دهکده کوچک انتخاب شده‌اید. من در چند روز اول مشاور شما خواهم بود و هرگز شما را تنها نخواهم گذاشت.');
define('Q0_OPT1', 'به سوی اولین ماموریت.');
define('Q0_OPT2', 'خودم نگاهی می‌اندازم.');
define('Q0_OPT3', 'بازی بدون ماموریت.');

define('Q1', 'Task 1: Woodcutter');
define('Q1_DESC', 'There are four green forests around your village. Construct a woodcutter on one of them. Lumber is an important resource for our new settlement.');
define('Q1_ORDER', 'Order:</p>Construct a woodcutter.');
define('Q1_RESP', 'Yes, that way you gain more lumber.I helped a bit and completed the order instantly.');
define('Q1_REWARD', 'Woodcutter instantly completed.');

define('Q2', 'Task 2: Crop');
define('Q2_DESC', 'Now your subjects are hungry from working all day. Extend a cropland to improve your subjects&#39; supply. Come back here once the building is complete.');
define('Q2_ORDER', 'Order:</p>Extend one cropland.');
define('Q2_RESP', 'Very good. Now your subjects have enough to eat again...');
define('Q2_REWARD', 'Your reward:</p>1 day Travian');

define('Q3', 'Task 3: Your Village&#39;s Name');
define('Q3_DESC', 'Creative as you are you can grant your village the ultimate name.<br><br>Click on &#39;profile&#39; in the left hand menu and then select &#39;change profile&#39;...');
define('Q3_ORDER', 'Order:</p>Change your village&#39;s name to something nice.');
define('Q3_RESP', 'Wow, a great name for their village. It could have been the name of my village!...');

define('Q4', 'Task 4: Other Players');
define('Q4_DESC', 'In '.SERVER_NAME.' you play along with billions of other players. Click &#39;statistics&#39; in the top menu to look up your rank and enter it here.');
define('Q4_ORDER', 'Order:</p>Look for your rank in the statistics and enter it here.');
define('Q4_BUTN', 'complete task');
define('Q4_RESP', 'Exactly! That&#39;s your rank.');

define('Q5', 'Task 5: Two Building Orders');
define('Q5_DESC', 'Build an iron mine and a clay pit. Of iron and clay one can never have enough.');
define('Q5_ORDER', 'Order:</p><ul><li>Extend one iron mine.</li><li>Extend one clay pit.</li></ul>');
define('Q5_RESP', 'As you noticed, building orders take rather long. The world of '.SERVER_NAME.' will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.<br><br>The best thing to do is occasionally checking your village and giving you subjects new tasks to do.');

define('Q6', 'Task 6: Messages');
define('Q6_DESC', 'You can talk to other players using the messaging system. I sent a message to you. Read it and come back here.<br><br>P.S. Don&#39;t forget: on the left the reports, on the right the messages.');
define('Q6_ORDER', 'Order:</p>Read your new message.');
define('Q6_RESP', 'You received it? Very good.<br><br>Here is some Gold. With Gold you can do several things, e.g. extend your   in the left hand menu.');
define('Q6_RESP1', '-Account or increase your resource production.To do so click ');
define('Q6_RESP2', 'in the left hand menu.');
define('Q6_SUBJECT', 'Message From The Taskmaster');
define('Q6_MESSAGE', 'You are to be informed that a nice reward is waiting for you at the taskmaster.<br><br>Hint: The message has been generated automatically. An answer is not necessary.');

define('Q7', 'Task 7: One Each!');
define('Q7_DESC', 'Now we should increase your resource production a bit. Build an additional woodcutter, clay pit, iron mine and cropland to level 1.');
define('Q7_ORDER', 'Order:</p>Extend one more of each resource tile to level 1.');
define('Q7_RESP', 'Very good, great develop of resources production.');

define('Q8', 'Task 8: Huge Army!');
define('Q8_DESC', 'Now I&#39;ve got a very special quest for you. I am hungry. Give me 200 crop!<br><br>In return I will try to organize a huge army to protect your village.');
define('Q8_ORDER', 'Order:</p>Send 200 crop to the taskmaster.');
define('Q8_BUTN', 'Send crop');
define('Q8_NOCROP', 'No Enough Crop!');

define('Q9', 'Task 9: Everything to 1.');
define('Q9_DESC', 'In Travian there is always something to do! While you are waiting for incoming the huge army, Now we should increase your resource production a bit. Extend all your resource tiles to level 1.');
define('Q9_ORDER', 'Order:</p>Extend all resource tiles to level 1.');
define('Q9_RESP', 'Very good, your resource production just thrives.<br><br>Soon we can start with constructing buildings in the village.');

define('Q10', 'Task 10: Dove of Peace');
define('Q10_DESC', 'The first days after signing up you are protected against attacks by your fellow players. You can see how long this protection lasts by adding the code <b>[#0]</b> to your profile.');
define('Q10_ORDER', 'Order:</p>Write the code <b>[#0]</b> into your profile by adding it to one of the two description fields.');
define('Q10_RESP', 'Well done! Now everyone can see what a great warrior the world is approached by.');
define('Q10_REWARD', 'Your reward:</p>2 day Travian');

define('Q11', 'Task 11: Neighbours!');
define('Q11_DESC', 'Around you, there are many different villages. One of them is named. ');
define('Q11_DESC1', ' Click on &#39;map&#39; in the header menu and look for that village. The name of your neighbours&#39; villages can be seen when hovering your mouse over any of them.');
define('Q11_ORDER', 'Order:</p>Look for the coordinates of ');
define('Q11_ORDER1', 'and enter them here.');
define('Q11_RESP', 'Exactly, there ');
define('Q11_RESP1', ' Village! As many resources as you reach this village. Well, almost as much ...');
define('Q11_BUTN', 'complete task');

define('Q12', 'Task 12: Cranny');
define('Q12_DESC', 'It&#39;s getting time to erect a cranny. The world of '.SERVER_NAME.' is dangerous.<br><br>Many players live by stealing other players&#39; resources. Build a cranny to hide some of your resources from enemies.');
define('Q12_ORDER', 'Order:</p>Construct a Cranny.');
define('Q12_RESP', 'Well done, now it&#39;s way harder for your mean fellow players to plunder your village.<br><br>If under attack, your villagers will hide the resources in the Cranny all on their own.');

define('Q13', 'Task 13: To Two.');
define('Q13_DESC', 'In '.SERVER_NAME.' there is always something to do! Extend one woodcutter, one clay pit, one iron mine and one cropland to level 2 each.');
define('Q13_ORDER', 'Order:</p>Extend one of each resource tile to level 2.');
define('Q13_RESP', 'Very good, your village grows and thrives!');

define('Q14', 'Task 14: Instructions');
define('Q14_DESC', 'In the ingame instructions you can find short information texts about different buildings and types of units.<br><br>Click on &#39;instructions&#39; at the left to find out how much lumber is required for the barracks.');
define('Q14_ORDER', 'Order:</p>Enter how much lumber barracks cost');
define('Q14_BUTN', 'complete task');
define('Q14_RESP', 'Exactly! Barracks cost 210 lumber.');

define('Q15', 'Task 15: Main Building');
define('Q15_DESC', 'Your master builders need a main building level 3 to erect important buildings such as the marketplace or barracks.');
define('Q15_ORDER', 'Order:</p>Extend your main building to level 3.');
define('Q15_RESP', 'Well done. The main building level 3 has been completed.<br><br>With this upgrade your master builders cannot only construct more types of buildings but also do so faster.');

define('Q16', 'Task 16: Advanced!');
define('Q16_DESC', 'Look up your rank in the player statistics again and enjoy your progress.');
define('Q16_ORDER', 'Order:</p>Look for your rank in the statistics and enter it here.');
define('Q16_RESP', 'Well done! That&#39;s your current rank.');

define('Q17', 'Task 17: Weapons or Dough');
define('Q17_DESC', 'Now you have to make a decision: Either trade peacefully or become a dreaded warrior.<br><br>For the marketplace you need a granary, for the barracks you need a rally point.');
define('Q17_BUTN', 'Economy');
define('Q17_BUTN1', 'Military');

define('Q18', 'Task 18: Military');
define('Q18_DESC', 'A brave decision. To be able to send troops you need a rally point.<br><br>The rally point must be built on a specific building site. The ');
define('Q18_DESC1', ' building site.');
define('Q18_DESC2', ' is located on the right side of the main building, slightly below it. The building site itself is curved.');
define('Q18_ORDER', 'Order:</p>Construct a rally point.');
define('Q18_RESP', 'Your rally point has been erected! A good move towards world domination!');

define('Q19', 'Task 19: Barracks');
define('Q19_DESC', 'Now you have a main building level 3 and a rally point. That means that all prerequisites for building barracks have been fulfilled.<br><br>You can use the barracks to train troops for fighting.');
define('Q19_ORDER', 'Order:</p>Construct barracks.');
define('Q19_RESP', 'Well done... The best instructors from the whole country have gathered to train your men\u2019s fighting skills to top form.');

define('Q20', 'Task 20: Train.');
define('Q20_DESC', 'Now that you have barracks you can start training troops. Train two ');
define('Q20_ORDER', 'Please train 2 ');
define('Q20_RESP', 'The foundation for your glorious army has been laid.<br><br>Before sending your army off to plunder you should check with the.');
define('Q20_RESP1', 'Combat Simulator');
define('Q20_RESP2', 'to see how many troops you need to successfully fight one rat without losses.');

define('Q21', 'Task 18: Economy');
define('Q21_DESC', 'Trade & Economy was your choice. Golden times await you for sure!');
define('Q21_ORDER', 'Order:</p>Construct a Granary.');
define('Q21_RESP', 'Well done! With the Granary you can store more wheat.');

define('Q22', 'Task 19: Warehouse');
define('Q22_DESC', 'Not only Crop has to be saved. Other resources can go to waste as well if they are not stored correctly. Construct a Warehouse!');
define('Q22_ORDER', 'Order:</p>Construct Warehouse.');
define('Q22_RESP', ';Well done, your Warehouse is complete...&rdquo;</i><br>Now you have fulfilled all prerequisites required to construct a Marketplace.');

define('Q23', 'Task 20: Marketplace.');
define('Q23_DESC', ';Construct a Marketplace so you can trade with your fellow players.');
define('Q23_ORDER', 'Order:</p>Please build a Marketplace.');
define('Q23_RESP', ';The Marketplace has been completed. Now you can make offers of your own and accept foreign offers! When creating your own offers, you should think about offering what other players need most to get more profit.');

define('Q24', 'Task 21: Everything to 2.');
define('Q24_DESC', 'Now we should increase your resource production a bit. Build an additional woodcutter, clay pit, iron mine and cropland to level 1.');
define('Q24_ORDER', 'Order:</p>Extend all resource tiles to level 2.');
define('Q24_RESP', 'Congratulations! Your village grows and thrives...');

define('Q28', 'Task 22: Alliance.');
define('Q28_DESC', 'Teamwork is important in Travian. Players who work together organise themselves in alliances. Get an invitation from an alliance in your region and join this alliance. Alternatively, you can found your own alliance. To do this, you need a level 3 embassy.');
define('Q28_ORDER', 'Order:</p>Join an alliance or found one on your own.');
define('Q28_RESP', 'Is good! Now you&#39;re in a union called');
define('Q28_RESP1', ', and you&#39;re a member of their alliance with the faster you&#39;ll progress...');

define('Q29', 'Task 23: Main Building to Level 5');
define('Q29_DESC', 'To be able to build a palace or residence, you will need a main building at level 5.');
define('Q29_ORDER', 'Order:</p>Upgrade your main building to level 5.');
define('Q29_RESP', 'The main building is level 5 now and you can build palace or residence...');

define('Q30', 'Task 24: Granary to Level 3.');
define('Q30_DESC', 'That you do not lose crop, you should upgrade your granary.');
define('Q30_ORDER', 'Order:</p>Upgrade your granary to level 3.');
define('Q30_RESP', 'Granary is level 3 now...');

define('Q31', 'Task 25: Warehouse to Level 7');
define('Q31_DESC', ' To make sure your resources won&#39;t overflow, you should upgrade your warehouse.');
define('Q31_ORDER', 'Order:</p>Upgrade your warehouse to level 7.');
define('Q31_RESP', 'Warehouse has upgraded to level 7...');

define('Q32', 'Task 26: All to five!');
define('Q32_DESC', 'You will always need more resources. Resource tiles are quite expensive but will always pay out in the long term.');
define('Q32_ORDER', 'Order:</p>Upgrade all resources tiles to level 5.');
define('Q32_RESP', 'All resources are at level 5, very good, your village grows and thrives!');

define('Q33', 'Task 27: Palace or Residence?');
define('Q33_DESC', 'To found a new village, you will need settlers. Those you can train in either a palace or a residence.');
define('Q33_ORDER', 'Order:</p>Build a palace or residence to level 10.');
define('Q33_RESP', 'had reached to level 10, you can now train settlers and found your second village. Notice the cultural points...');

define('Q34', 'Task 28: 3 settlers.');
define('Q34_DESC', 'To found a new village, you will need settlers. They can be trained  in either a palace or a residence.');
define('Q34_ORDER', 'Order:</p>Train 3 settlers.');
define('Q34_RESP', '3 settlers were trained. To found new village you need at least');
define('Q34_RESP1', 'culture points...');

define('Q35', 'Task 29: New Village.');
define('Q35_DESC', 'There are a lot of empty tiles on the map. Find one that suits you and found a new village');
define('Q35_ORDER', 'Order:</p>Found a new village.');
define('Q35_RESP', 'I am proud of you! Now you have two villages and have all the possibilities to build a mighty empire. I wish you luck with this.');

define('Q36', ' Task 30: Build a ');
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
define('Q25_7', 'Task 7: Neighbours!');
define('Q25_7_DESC', 'Around you, there are many different villages. One of them is named. ');
define('Q25_7_DESC1', 'Click &#39;Map&#39; in the head menu and look for that village. The name of your neighbours&#39; villages can be seen once you hover your mouse over any of them.');
define('Q25_7_ORDER', '</p><b>Order:</b><br>Look for the coordinates of ');
define('Q25_7_ORDER1', 'and enter them here.');
define('Q25_7_RESP', 'Exactly, there ');
define('Q25_7_RESP1', ' Village! As many resources as you reach this village. Well, almost as much ...');

define('Q25_8', 'Task 8: Huge Army!');
define('Q25_8_DESC', 'Now I&#39;ve got a very special Quest for you. I am hungry. Give me 200 crop!<br><br>In return I will try to organize a huge army to protect your village.');
define('Q25_8_ORDER', 'Order:</p>Send 200 crop to the taskmaster.');
define('Q25_8_BUTN', 'Send crop');
define('Q25_8_NOCROP', 'No Enough Crop!');

define('Q25_9', 'Task 9: One each!');
define('Q25_9_DESC', 'In '.SERVER_NAME.' there is always something to do! While you are waiting for your new army,<br><br>extend one additional woodcutter, clay pit, iron mine and cropland to level 1');
define('Q25_9_ORDER', 'Order:</p>Extend one more of each resource tile to level 1.');
define('Q25_9_RESP', 'Very good, great development of resource production.');

define('Q25_10', 'Task 10: Comming Soon!');
define('Q25_10_DESC', 'Now there is time for a small break until the gigantic army I sent you arrives.<br><br>Until then you can explore the map or extend a few resource tiles.');
define('Q25_10_ORDER', 'Order:</p>Wait for the taskmaster&#39;s army to arrive');
define('Q25_10_RESP', 'Now a huge army from taskmaster has arrive to protect your village');
define('Q25_10_REWARD', 'Your reward:</p>2 days more of Travian');

define('Q25_11', 'Task 11: Reports');
define('Q25_11_DESC', 'Every time something important happens to your account you will receive a report.<br><br>You can see these by clicking on the left half of the 5th button (from left to right). Read the report and come back here.');
define('Q25_11_ORDER', 'Order:</p>Read your latest report.');
define('Q25_11_RESP', 'You received it? Very good. Here is your reward.');

define('Q25_12', 'Task 12: Everything to 1.');
define('Q25_12_DESC', 'Now we should increase your resource production a bit.');
define('Q25_12_ORDER', 'Order:</p>Extend all resource tiles to level 1.');
define('Q25_12_RESP', 'Very good, your resource production just thrives.<br><br>Soon we can start with constructing buildings in the village.');

define('Q25_13', 'Task 13: Dove of Peace');
define('Q25_13_DESC', 'The first days after signing up you are protected against attacks by your fellow players. You can see how long this protection lasts by adding the code <b>[#0]</b> to your profile.');
define('Q25_13_ORDER', 'Order:</p>Write the code <b>[#0]</b> into your profile by adding it to one of the two description fields.');
define('Q25_13_RESP', 'Well done! Now everyone can see what a great warrior the world is approached by.');

define('Q25_14', 'Task 14: Cranny');
define('Q25_14_DESC', 'It&#39;s getting time to erect a cranny. The world of <b>'.SERVER_NAME.'</b> is dangerous.<br><br>Many players live by stealing other players&#39; resources. Build a cranny to hide some of your resources from enemies.');
define('Q25_14_ORDER', 'Order:</p>Construct a Cranny.');
define('Q25_14_RESP', 'Well done, now it&#39;s way harder for your mean fellow players to plunder your village.<br><br>If under attack, your villagers will hide the resources in the Cranny all on their own.');

define('Q25_15', 'Task 15: To Two.');
define('Q25_15_DESC', 'In <b>'.SERVER_NAME.'</b> there is always something to do! Extend one woodcutter, one clay pit, one iron mine and one cropland to level 2 each.');
define('Q25_15_ORDER', 'Order:</p>Extend one of each resource tile to level 2.');
define('Q25_15_RESP', 'Very good, your village grows and thrives!');

define('Q25_16', 'Task 16: Instructions');
define('Q25_16_DESC', 'In the ingame instructions you can find short information texts about different buildings and types of units.<br><br>Click on &#39;instructions&#39; at the left to find out how much lumber is required for the barracks.');
define('Q25_16_ORDER', 'Order:</p>Enter how much lumber barracks cost');
define('Q25_16_BUTN', 'complete task');
define('Q25_16_RESP', 'Exactly! Barracks cost 210 lumber.');

define('Q25_17', 'Task 17: Main Building');
define('Q25_17_DESC', 'Your master builders need a main building level 3 to erect important buildings such as the marketplace or barracks.');
define('Q25_17_ORDER', 'Order:</p>Extend your main building to level 3.');
define('Q25_17_RESP', 'Well done. The main building level 3 has been completed.<br><br>With this upgrade your master builders can construct more types of buildings and also do so faster.');

define('Q25_18', 'Task 18: Advanced!');
define('Q25_18_DESC', 'Look up your rank in the player statistics again and enjoy your progress.');
define('Q25_18_ORDER', 'Order:</p>Look for your rank in the statistics and enter it here.');
define('Q25_18_RESP', 'Well done! That&#39;s your current rank.');

define('Q25_19', 'Task 19: Weapons or Dough');
define('Q25_19_DESC', 'Now you have to make a decision: Either trade peacefully or become a dreaded warrior.<br><br>For the marketplace you need a granary, for the barracks you need a rally point.');
define('Q25_19_BUTN', 'Economy');
define('Q25_19_BUTN1', 'Military');

define('Q25_20', 'Task 19: Economy');
define('Q25_20_DESC', 'Trade & Economy was your choice. Golden times await you for sure!');
define('Q25_20_ORDER', 'Order:</p>Construct a Granary.');
define('Q25_20_RESP', 'Well done! With the Granary you can store more wheat.');

define('Q25_21', 'Task 20: Warehouse');
define('Q25_21_DESC', 'Not only Crop has to be saved. Other resources can go to waste as well if they are not stored correctly. Construct a Warehouse!');
define('Q25_21_ORDER', 'Order:</p>Construct Warehouse.');
define('Q25_21_RESP', ';Well done, your Warehouse is complete...&rdquo;</i><br>Now you have fulfilled all prerequisites required to construct a Marketplace.');

define('Q25_22', 'Task 21: Marketplace.');
define('Q25_22_DESC', ';Construct a Marketplace so you can trade with your fellow players.');
define('Q25_22_ORDER', 'Order:</p>Please build a Marketplace.');
define('Q25_22_RESP', 'The Marketplace has been completed. Now you can make offers of your own and accept foreign offers! When creating your own offers, you should think about offering what other players need most to get more profit.');

define('Q25_23', 'Task 19: Military');
define('Q25_23_DESC', 'A brave decision. To be able to send troops you need a rally point.<br><br>The rally point must be built on a specific building site. The ');
define('Q25_23_DESC1', ' building site.');
define('Q25_23_DESC2', ' is located on the right side of the main building, slightly below it. The building site itself is curved.');
define('Q25_23_ORDER', 'Order:</p>Construct a rally point.');
define('Q25_23_RESP', 'Your rally point has been erected! A good move towards world domination!');

define('Q25_24', 'Task 20: Barracks');
define('Q25_24_DESC', 'Now you have a main building level 3 and a rally point. That means that all prerequisites for building barracks have been fulfilled.<br><br>You can use the barracks to train troops for fighting.');
define('Q25_24_ORDER', 'Order:</p>Construct barracks.');
define('Q25_24_RESP', 'Well done... The best instructors from the whole country have gathered to train your men\u2019s fighting skills to top form.');

define('Q25_25', 'Task 21: Train.');
define('Q25_25_DESC', 'Now that you have barracks you can start training troops. Train two ');
define('Q25_25_ORDER', 'Please train 2 ');
define('Q25_25_RESP', 'The foundation for your glorious army has been laid.<br><br>Before sending your army off to plunder you should check with the');
define('Q25_25_RESP1', 'Combat Simulator');
define('Q25_25_RESP2', 'to see how many troops you need to successfully fight one rat without losses.');

define('Q25_26', 'Task 22: Everything to 2.');
define('Q25_26_DESC', 'Now it&#39;s time again to extend the cornerstones of might and wealth! This time level 1 is not enough... it will take a while but in the end it will be worth it. Extend all your resource tiles to level 2!');
define('Q25_26_ORDER', 'Order:</p>Extend all resource tiles to level 2.');
define('Q25_26_RESP', 'Congratulations! Your village grows and thrives...');

define('Q25_27', 'Task 23: Friends.');
define('Q25_27_DESC', 'As single player it is hard to compete with attackers. It is to your advantage if your neighbours like you.<br><br>It is even better if you play together with friends. Did you know that you can earn '.GOLD_IMG.' by inviting friends?');
define('Q25_27_ORDER', 'Order:</p>How much '.GOLD_IMG.' do you earn for inviting a friend?');
define('Q25_27_RESP', 'Correct! You get 50 '.GOLD_IMG.' if your invited friend have 2 village.');

define('Q25_28', 'Task 24: Construct Embassy.');
define('Q25_28_DESC', 'The world of Travian is dangerous. You already built a cranny to protect you against attackers.<br><br>A good alliance will give you even better protection.');
define('Q25_28_ORDER', 'Order:</p>To accept invitations from alliances, build an embassy.');
define('Q25_28_RESP', 'Yes! You can wait invitation from an alliance or create you own if embassy has level 3');

define('Q25_29', 'Task 25: Alliance.');
define('Q25_29_DESC', 'Teamwork is important in Travian. Players who work together organise themselves in alliances. Get an invitation from an alliance in your region and join this alliance. Alternatively, you can found your own alliance. To do this, you need a level 3 embassy.');
define('Q25_29_ORDER', 'Order:</p>Join an alliance or found your own alliance.');
define('Q25_29_RESP', 'Well done! Now you&#39;re in a union called');
define('Q25_29_RESP1', ', and you&#39;re a member of their alliance.<br>Working together you will all progress faster...');

define('Q25_30', 'Tasks');
define('Q25_30_DESC', 'All tasks achieved!');


//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
define('U0', 'قهرمان');

//ROMAN UNITS
define('U1', 'سرباز پیاده');
define('U2', 'محافظ امپراتور');
define('U3', 'شوالیه رومی');
define('U4', 'جاسوس رومی');
define('U5', 'سواره‌نظام امپراتور');
define('U6', 'سواره‌نظام قیصر');
define('U7', 'دژکوب');
define('U8', 'منجنیق آتشین');
define('U9', 'سناتور');
define('U10', 'مهاجر');

//TEUTON UNITS
define('U11', 'گرزدار');
define('U12', 'نیزه‌دار');
define('U13', 'تبرزن');
define('U14', 'جاسوس توتن');
define('U15', 'پهلوان');
define('U16', 'شوالیه توتن');
define('U17', 'دژکوب توتن');
define('U18', 'منجنیق توتن');
define('U19', 'رئیس');
define('U20', 'مهاجر');

//GAUL UNITS
define('U21', 'سرباز پیاده گول');
define('U22', 'شمشیرزن');
define('U23', 'ردیاب');
define('U24', 'رعد توتاتس');
define('U25', 'سواره‌نظام دروید');
define('U26', 'شوالیه گول');
define('U27', 'دژکوب گول');
define('U28', 'منجنیق گول');
define('U29', 'رئیس بزرگ');
define('U30', 'مهاجر');
define('U99', 'تله');

//NATURE UNITS
define('U31', 'موش');
define('U32', 'عنکبوت');
define('U33', 'مار');
define('U34', 'خفاش');
define('U35', 'گراز وحشی');
define('U36', 'گرگ');
define('U37', 'خرس');
define('U38', 'تمساح');
define('U39', 'تایگر');
define('U40', 'فیل');

//NATARS UNITS
define('U41', 'نیزه‌دار ناتار');
define('U42', 'جنگجوی خاردار');
define('U43', 'نگهبان');
define('U44', 'پرنده شکاری');
define('U45', 'تبرزن سواره');
define('U46', 'شوالیه ناتار');
define('U47', 'فیل جنگی');
define('U48', 'بالیستا');
define('U49', 'امپراتور ناتار');
define('U50', 'مهاجر ناتار');

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
define('LOGIN', 'ورود');
define('PLAYERS', 'بازیکنان');
define('MODERATOR', 'مدیر');
define('ACTIVE', 'فعال');
define('ONLINE', 'آنلاین');
define('TUTORIAL', 'آموزش');
if(!defined('FAQ')) define('FAQ', 'سوالات متداول');
if(!defined('SPIELREGELN')) define('SPIELREGELN', 'قوانین بازی');
define('PLAYER_STATISTICS', 'آمار بازیکنان');
define('TOTAL_PLAYERS', 'کل بازیکنان: '.PLAYERS);
define('ACTIVE_PLAYERS', 'بازیکنان فعال');
define('ONLINE_PLAYERS', PLAYERS.' آنلاین');
define('MP_STRATEGY_GAME', SERVER_NAME.' - بازی استراتژیک چندنفره');
define('WHAT_IS', SERVER_NAME.' یکی از محبوب‌ترین بازی‌های مرورگر در جهان است. به عنوان یک بازیکن در '.SERVER_NAME.'، شما امپراتوری خود را می‌سازید، ارتشی قدرتمند استخدام می‌کنید و با متحدان خود برای تسلط بر دنیای بازی می‌جنگید.');
define('REGISTER_FOR_FREE', 'اینجا رایگان ثبت‌نام کنید!');
define('LATEST_GAME_WORLD', 'آخرین دنیای بازی');
define('LATEST_GAME_WORLD2', 'در آخرین دنیای بازی ثبت‌نام کنید<br>و از مزایای یکی از اولین بازیکنان<br>بودن لذت ببرید.');
define('PLAY_NOW', 'هم‌اکنون '.SERVER_NAME.' بازی کنید');
define('LEARN_MORE', 'بیشتر بدانید <br>درباره '.SERVER_NAME.'!');
define('LEARN_MORE2', 'حالا با سیستم سرور متحول شده،<br>گرافیک کاملاً جدید<br>این شبیه‌ساز عالی است!');
define('COMUNITY', 'جامعه');
define('BECOME_COMUNITY', 'هم‌اکنون عضو جامعه ما شوید!');
define('BECOME_COMUNITY2', 'عضو یکی از بزرگترین جوامع<br>بازی در جهان شوید.');
define('NEWS', 'اخبار');
define('SCREENSHOTS', 'تصاویر بازی');
define('AGB', 'شرایط و ضوابط');
define('LEARN1', 'Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers.');
define('LEARN2', 'Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops.');
define('LEARN3', 'View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger.');
define('LEARN4', 'Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.');
define('LEARN5', 'Receive detailed reports about your adventures, trades and battles. Don&#39;t forget to check the brand new reports about the happenings taking place in your surroundings.');
define('LEARN6', 'Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.');
define('LOGIN_TO', 'Log in to '.SERVER_NAME);
define('REGIN_TO', 'Register in '.SERVER_NAME);
define('P_ONLINE', 'Players online: ');
define('P_TOTAL', 'Players in total: ');
define('CHOOSE', 'Please choose a server.');
define('STARTED', ' The server started '. round((time() - COMMENCE) / 86400) .' days ago.');

//ANMELDEN.php
define('NICKNAME', 'Nickname');
define('EMAIL', 'Email');
define('PASSWORD', 'Password');
define('NW', 'North West');
define('NE', 'North East');
define('SW', 'South West');
define('SE', 'South East');
define('RANDOM', 'random');
define('ACCEPT_RULES', ' I accept the game rules and general terms and conditions.');
define('ONE_PER_SERVER', 'Each player may only own ONE account per server.');
define('BEFORE_REGISTER', 'Before you register an account you should read the <a href="/anleitung.php" target="_blank">instructions</a> of Travian ro1 to see the specific advantages and disadvantages of the three tribes.');
define('BUILDING_UPGRADING', 'Building:');
define('HOURS', 'hours');


//ATTACKS ETC.
define('TROOP_MOVEMENTS', 'Troop Movements:');
define('ARRIVING_REINF_TROOPS', 'Arriving reinforcing troops');
define('ARRIVING_ATTACKING_TROOPS', 'Arriving attacker troops');
define('ARRIVING_REINF_TROOPS_SHORT', 'Reinf.');
define('OWN_ATTACKING_TROOPS', 'Own attacking troops');
define('ATTACK', 'Attack');
define('OWN_REINFORCING_TROOPS', 'Own reinforcing troops');
define('NEWVILLAGE', 'New village.');
define('FOUNDNEWVILLAGE', 'Founding New village');
define('UNDERATTACK', 'The village is under attack');
define('OASISATTACK', 'The Oasis is under attack');
define('OASISATTACKS', 'Oasis Att.');
define('RETURNFROM', 'Return from');
define('REINFORCEMENTFOR', 'Reinforcement to');
define('ATTACK_ON', 'Attack to');
define('RAID_ON', 'Raid to');
define('SCOUTING', 'Scouting');
define('PRISONERS', 'Prisoners');
define('PRISONERSIN', 'Prisoners in');
define('PRISONERSFROM', 'Prisoners from');
define('TROOPS', 'Troops');
define('BOUNTY', 'Bounty');
define('ARRIVAL', 'Arrival');
define('CATAPULT_TARGET', 'Catapult target(s)');
define('INCOMING_TROOPS', 'Incoming Troops');
define('TROOPS_ON_THEIR_WAY', 'Troops on their way');
define('OWN_TROOPS', 'Own troops');
define('ON', 'on');
define('AT', 'at');
define('UPKEEP', 'Upkeep');
define('SEND_BACK', 'Send back');
define('TROOPS_IN_THE_VILLAGE', 'Troops in the village');
define('TROOPS_IN_OTHER_VILLAGE', 'Troops in other village');
define('TROOPS_IN_OASIS', 'Troops in oasis');
define('KILL', 'Kill');
define('FROM', 'From');
define('SEND_TROOPS', 'Send troops');
define('TASKMASTER', 'Taskmaster');
define('TO_THE_TASK', 'To the task');
define('VILLAGE_OF_THE_ELDERS', 'village of the elders');
define('VILLAGE_OF_THE_ELDERS_TROOPS', 'village of the elders troops');

//SEND TROOP
define('REINFORCE', 'Reinforcement');
define('NORMALATTACK', 'Normal Attack');
define('RAID', 'Raid');
define('OR', 'or');
define('SENDTROOP', 'Send troops');
define('NOTROOP', 'no troops');

//map
define('DETAIL', 'Details');
define('ABANDVALLEY', 'Abandoned valley');
define('OCCUPIED', 'Occupied');
define('UNOCCUPIED', 'Unoccupied');
define('UNOCCUOASIS', 'Unoccupied oasis');
define('OCCUOASIS', 'Occupied oasis');
define('THERENOINFO', 'There is no<br>information available.');
define('LANDDIST', 'Land distribution');
define('TRIBE', 'Tribe');
define('ALLIANCE', 'Alliance');
define('POP', 'Population');
define('REPORT', 'Report');
define('OPTION', 'Options');
define('CENTREMAP', 'Centre map');
define('FNEWVILLAGE', 'Found new village');
define('CULTUREPOINT', 'culture points');
define('BUILDRALLY', 'build a rally point');
define('SETTLERSAVAIL', 'settlers available');
define('BEGINPRO', 'beginners protection');
define('SENDMERC', 'Send merchant(s)');
define('BAN', 'Player is banned');
define('BUILDMARKET', 'Build marketplace');
define('PERHOUR', 'per hour');
define('BONUS', 'Bonus');
define('MAP', 'Map');
define('LARGE_MAP', 'Large Map');
define('LARGE_MAP_DESC', 'Show the large map in an extra window');
define('CROPFINDER', 'Crop Finder');
define('NORTH', 'North');
define('EAST', 'East');
define('SOUTH', 'South');
define('WEST', 'West');
define('CLOSE_MAP', 'Close Map');
define('AND', 'and');

//other
define('VILLAGE', 'Village');
define('STATISTICS', 'Statistics');
define('OASIS', 'Oasis');
define('NO_OASIS', 'You do not own any oases.');
define('NO_VILLAGES', 'There are no villages.');
define('PLAYER', 'Player');

//LOGIN.php
define('COOKIES', 'You must have cookies enabled to be able to log in. If you share this computer with other people you should log out after each session for your own safety.');
define('NAME', 'Name');
define('PW_FORGOTTEN', 'Password forgotten?');
define('PW_REQUEST', 'Then you can request a new one which will be sent to your email address.');
define('PW_GENERATE', 'Generate new password.');
define('EMAIL_NOT_VERIFIED', 'Email not verified!');
define('EMAIL_FOLLOW', 'Follow this link to activate your account.');
define('VERIFY_EMAIL', 'Verify Email.');
define('SERVER_STARTS_IN', 'Server will start in: ');
define('START_NOW', 'START NOW');


//404.php
define('NOTHING_HERE', 'Nothing here!');
define('WE_LOOKED', 'We looked 404 times already but can&#39;t find anything');

//MASSMESSAGE.php
define('MASS', 'Message Content');
define('MASS_SUBJECT', 'Subject:');
define('MASS_COLOR', 'Message color:');
define('MASS_REQUIRED', 'All fields required');
define('MASS_UNITS', 'Images (units):');
define('MASS_SHOWHIDE', 'Show/Hide');
define('MASS_READ', 'Read this: after adding smilie, you have to add left or right after number otherwise image will won&#39;t work');
define('MASS_CONFIRM', 'Confirmation');
define('MASS_REALLY', 'Do you really want to send MassIGM?');
define('MASS_ABORT', 'Aborting right now');
define('MASS_SENT', 'Mass IGM was sent');

//BUILDINGS
define('WOODCUTTER', 'هیزم‌شکن');
define('WOODCUTTER_DESC', 'هیزم‌شکن درختان را قطع می‌کند تا چوب تولید کند. هر چه سطح هیزم‌شکن بالاتر برود، چوب بیشتری تولید می‌شود.<br>با ساخت کارخانه چوب‌بری، می‌توانید تولید را باز هم افزایش دهید.');
define('CLAYPIT', 'گودال خشت');
define('CLAYPIT_DESC', 'در اینجا خشت تولید می‌شود. با افزایش سطح آن، تولید خشت افزایش می‌یابد.<br>با ساخت کارخانه خشت‌زنی، می‌توانید تولید را باز هم افزایش دهید.');
define('IRONMINE', 'معدن آهن');
define('IRONMINE_DESC', 'در اینجا معدنچیان آهن گرانبها را استخراج می‌کنند. با افزایش سطح معدن، تولید آهن آن افزایش می‌یابد.<br>با ساخت ذوب‌آهن، می‌توانید تولید را باز هم افزایش دهید.');
define('CROPLAND', 'گندم‌زار');
define('CROPLAND_DESC', 'غذای جمعیت شما در اینجا تولید می‌شود. با افزایش سطح گندم‌زار، تولید گندم افزایش می‌یابد.<br>با ساخت آسیاب و نانوایی، می‌توانید تولید را باز هم افزایش دهید.');

define('SAWMILL', 'کارخانه چوب‌بری');
define('SAWMILL_DESC', 'چوب‌های قطع شده در اینجا فرآوری می‌شوند. کارخانه چوب‌بری تولید چوب دهکده را افزایش می‌دهد. در سطح ۱، تولید را ۵٪ افزایش می‌دهد و با هر ارتقاء ۵٪ دیگر اضافه می‌شود که در سطح ۵ به ۲۵٪ می‌رسد.');
define('CURRENT_WOOD_BONUS', 'امتیاز فعلی تولید چوب:');
define('WOOD_BONUS_LEVEL', 'امتیاز تولید چوب در سطح');
define('MAX_LEVEL', 'ساختمان در بالاترین سطح است');
define('PERCENT', 'درصد');

define('BRICKYARD', 'کارخانه خشت‌زنی');
define('CURRENT_CLAY_BONUS', 'امتیاز فعلی تولید خشت:');
define('CLAY_BONUS_LEVEL', 'امتیاز تولید خشت در سطح');
define('BRICKYARD_DESC', 'خشت در اینجا پخته می‌شود. کارخانه خشت‌زنی تولید خشت دهکده را افزایش می‌دهد. در سطح ۱، تولید را ۵٪ افزایش می‌دهد و در سطح ۵ به ۲۵٪ می‌رسد.');

define('IRONFOUNDRY', 'ذوب‌آهن');
define('CURRENT_IRON_BONUS', 'امتیاز فعلی تولید آهن:');
define('IRON_BONUS_LEVEL', 'امتیاز تولید آهن در سطح');
define('IRONFOUNDRY_DESC', 'آهن در اینجا ذوب می‌شود. ذوب‌آهن تولید آهن دهکده را افزایش می‌دهد. در سطح ۱، تولید را ۵٪ افزایش می‌دهد و در سطح ۵ به ۲۵٪ می‌رسد.');

define('GRAINMILL', 'آسیاب');
define('CURRENT_CROP_BONUS', 'امتیاز فعلی تولید گندم:');
define('CROP_BONUS_LEVEL', 'امتیاز تولید گندم در سطح');
define('GRAINMILL_DESC', 'گندم در اینجا آرد می‌شود. آسیاب تولید گندم دهکده را افزایش می‌دهد. در سطح ۱، تولید را ۵٪ افزایش می‌دهد و در سطح ۵ به ۲۵٪ می‌رسد.');

define('BAKERY', 'نانوایی');
define('BAKERY_DESC', 'در اینجا از آرد نان پخته می‌شود. نانوایی تولید گندم را تا ۲۵٪ دیگر (در سطح ۵) افزایش می‌دهد. در ترکیب با آسیاب، تولید گندم می‌تواند تا ۵۰٪ افزایش یابد.');

define('WAREHOUSE', 'انبار کالا');
define('CURRENT_CAPACITY', 'ظرفیت فعلی:');
define('CAPACITY_LEVEL', 'ظرفیت در سطح');
define('RESOURCE_UNITS', 'واحد کالا');
define('WAREHOUSE_DESC', 'منابع چوب، خشت و آهن در انبار کالا ذخیره می‌شوند. با افزایش سطح آن، ظرفیت انبار افزایش می‌یابد.');

define('GRANARY', 'انبار غله');
define('CROP_UNITS', 'واحد گندم');
define('GRANARY_DESC', 'گندم تولید شده در مزارع شما در انبار غله ذخیره می‌شود. با افزایش سطح آن، ظرفیت انبار غله افزایش می‌یابد.');

define('BLACKSMITH', 'آهنگری');
define('ACTION', 'Action');
define('UPGRADE', 'Upgrade');
define('UPGRADE_IN_PROGRESS', 'Upgrade in<br>progress');
define('UPGRADE_BLACKSMITH', 'Upgrade<br>blacksmith');
define('UPGRADES_COMMENCE_BLACKSMITH', 'Upgrades can commence when blacksmith is completed.');
define('MAXIMUM_LEVEL', 'Maximum<br>level');
define('EXPAND_WAREHOUSE', 'Expand<br>warehouse');
define('EXPAND_GRANARY', 'Expand<br>granary');
define('ENOUGH_RESOURCES', 'Enough resources');
define('CROP_NEGATIVE ', 'Crop production is negative so you will never reach the required resources');
define('TOO_FEW_RESOURCES', 'Too few<br>resources');
define('UPGRADING', 'Upgrading');
define('DURATION', 'Duration');
define('COMPLETE', 'Complete');
define('BLACKSMITH_DESC', 'The weapons of your warriors are enhanced in the blacksmith&#39;s melting furnaces. By increasing its level, you can order the fabrication of even better weapons');

define('ARMOURY', 'Armoury');
define('UPGRADE_ARMOURY', 'Upgrade<br>Armoury');
define('UPGRADES_COMMENCE_ARMOURY', 'Upgrades can commence when armoury is completed.');
define('ARMOURY_DESC', 'The armor of your warriors are enhanced in the armoury&#39;s melting furnaces. By increasing its level, you can order the fabrication of even better armor');

define('TOURNAMENTSQUARE', 'Tournament Square');
define('CURRENT_SPEED', 'Current speed bonus:');
define('SPEED_LEVEL', 'Speed bonus at level');
define('TOURNAMENTSQUARE_DESC', 'Your troops can increase their stamina at the Tournament Square. The further the building is upgraded, the faster your troops are beyond a minimum distance of '.TS_THRESHOLD.' squares');

define('MAINBUILDING', 'ساختمان مرکزی');
define('CURRENT_CONSTRUCTION_TIME', 'زمان ساخت فعلی:');
define('CONSTRUCTION_TIME_LEVEL', 'زمان ساخت در سطح');
define('DEMOLITION_BUILDING', 'تخریب ساختمان:</h2><p>اگر دیگر به ساختمانی نیاز ندارید، می‌توانید دستور تخریب آن را صادر کنید.</p>');
define('DEMOLISH', 'تخریب');
define('DEMOLITION_OF', 'تخریب ');
define('MAINBUILDING_DESC', 'استادان معمار دهکده در ساختمان مرکزی زندگی می‌کنند. هر چه سطح این ساختمان بالاتر باشد، معماران شما ساختمان‌های جدید را سریع‌تر تمام می‌کنند.');

define('RALLYPOINT', 'اردوگاه');
define('RALLYPOINT_COMMENCE', 'حرکت نیروها زمانی نمایش داده می‌شود که '.RALLYPOINT.' ساخته شده باشد');
define('OVERVIEW', 'مرور کلی');
define('REINFORCEMENT', 'نیروی کمکی');
define('EVASION_SETTINGS', 'تنظیمات فرار');
define('SEND_TROOPS_AWAY_MAX', 'ارسال نیروها به دوردست حداکثر');
define('TIMES', 'بار');
define('PER_EVASION', 'در هر فرار');
define('RALLYPOINT_DESC', 'نیروهای دهکده شما در اینجا جمع می‌شوند. از اینجا می‌توانید آن‌ها را برای تسخیر، غارت یا تقویت دهکده‌های دیگر بفرستید.');
define('COMBAT_SIMULATOR', 'شبیه‌ساز جنگ');

define('MARKETPLACE', 'بازار');
define('MERCHANT', 'بازرگانان');
define('OR_', 'or');
define('GO', 'go');
define('UNITS_OF_RESOURCE', 'units of resource');
define('MERCHANT_CARRY', 'Each merchant can carry');
define('MERCHANT_COMING', 'Merchants coming');
define('TRANSPORT_FROM', 'Transport from');
define('ARRIVAL_IN', 'Arrival in');
define('NO_COORDINATES_SELECTED', 'No Coordinates selected');
define('CANNOT_SEND_RESOURCES', 'You cannot send resources to the same village');
define('BANNED_CANNOT_SEND_RESOURCES', 'Player is Banned. You cannot send resources to him');
define('RESOURCES_NO_SELECTED', 'Resources not selected');
define('ENTER_COORDINATES', 'Enter coordinates or village name');
define('TOO_FEW_MERCHANTS', 'Too few merchants');
define('OWN_MERCHANTS_ONWAY', 'Own merchants on the way');
define('MERCHANTS_RETURNING', 'Merchants returning');
define('TRANSPORT_TO', 'Transport to');
define('I_AN_SEARCHING', 'I&#39;m searching');
define('I_AN_OFFERING', 'I&#39;m offering');
define('OFFERS_MARKETPLACE', 'Offers at the marketplace');
define('NO_AVAILABLE_OFFERS', 'No offers at the marketplace');
define('OFFERED_TO_ME', 'Offered<br>to me');
define('WANTED_TO_ME', 'Wanted<br>from me');
define('NOT_ENOUGH_MERCHANTS', 'Not Enough Merchant');
define('ACCEP_OFFER', 'Accept offer');
define('NO_AVALIBLE_OFFERS', 'There are no avaliable offers on the market');
define('SEARCHING', 'Searching');
define('OFFERING', 'Offering');
define('MAX_TIME_TRANSPORT', 'max. time of transport');
define('OWN_ALLIANCE_ONLY', 'own alliance only');
define('INVALID_OFFER', 'Invalid offer');
define('INVALID_MERCHANTS_REPETITION', 'Invalid merchants repetition rate');
define('USER_ON_VACATION', 'Player is on vacation mode');
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
define('NOT_ENOUGH_RESOURCES', 'Not enough resources');
define('OFFER', 'Offer');
define('SEARCH', 'Search');
define('OWN_OFFERS', 'Own offers');
define('ALL', 'All');
define('NPC_TRADE', 'NPC Trade');
define('SUM', 'Sum');
define('REST', 'Rest');
define('TRADE_RESOURCES', 'Trade resources at (step 2 of 2');
define('DISTRIBUTE_RESOURCES', 'Distribute resources at (step 1 of 2)');
define('OF', 'of');
define('NPC_COMPLETED', 'NPC completed');
define('BACK_BUILDING', 'Back to building');
define('YOU_CAN_NAT_NPC_WW', 'You can&#39;t use NPC trade in WW village.');
define('NPC_TRADING', 'NPC trading');
define('SEND_RESOURCES', 'Send Resources');
define('BUY', 'Buy');
define('TRADE_ROUTES', 'Trade routes');
define('DESCRIPTION', 'Description');
define('G_DESCR', 'General description');
define('TIME_LEFT', 'Time left');
define('START', 'Start');
define('NO_TRADE_ROUTES', 'No active trade routes');
define('TRADE_ROUTE_TO', 'Trade route to');
define('CHECKED', 'checked');
define('DAYS', 'days');
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
define('MARKETPLACE_DESC', 'At the marketplace, you can trade resources with other players. The higher its level, the more resources can be transported by your merchants at the same time');

define('EMBASSY', 'سفارت');
define('TAG', 'تگ');
define('TO_THE_ALLIANCE', 'به اتحاد');
define('JOIN_ALLIANCE', 'عضویت در اتحاد');
define('REFUSE', 'رد کردن');
define('ACCEPT', 'پذیرفتن');
define('NO_INVITATIONS', 'هیچ دعوتنامه‌ای موجود نیست.');
define('NO_CREATE_ALLIANCE', 'بازیکن مسدود شده نمی‌تواند اتحاد ایجاد کند.');
define('FOUND_ALLIANCE', 'تاسیس اتحاد');
define('EMBASSY_DESC', 'سفارت مکانی برای دیپلمات‌ها است. در سطح ۱ می‌توانید به یک اتحاد ملحق شوید و در سطح ۳ می‌توانید خودتان یکی تاسیس کنید.');

define('BARRACKS', 'پادگان');
define('QUANTITY', 'تعداد');
define('MAX', 'حداکثر');
define('TRAINING', 'در حال آموزش');
define('FINISHED', 'پایان یافته');
define('UNIT_FINISHED', 'واحد بعدی آماده می‌شود در');
define('AVAILABLE', 'موجود');
define('TRAINING_COMMENCE_BARRACKS', 'آموزش نیروها زمانی شروع می‌شود که پادگان ساخته شده باشد.');
define('BARRACKS_DESC', 'سربازان پیاده در پادگان آموزش می‌بینند. هر چه سطح پادگان بالاتر باشد، آموزش نیروها سریع‌تر انجام می‌شود.');

define('STABLE', 'اصطبل');
define('AVAILABLE_ACADEMY', 'واحدی موجود نیست. در دارالفنون تحقیق کنید.');
define('TRAINING_COMMENCE_STABLE', 'آموزش سواره‌نظام زمانی شروع می‌شود که اصطبل ساخته شده باشد.');
define('STABLE_DESC', 'سواره‌نظام در اصطبل آموزش می‌بینند. هر چه سطح آن بالاتر باشد، آموزش سریع‌تر انجام می‌شود.');

define('WORKSHOP', 'کارگاه');
define('TRAINING_COMMENCE_WORKSHOP', 'ساخت ادوات محاصره زمانی شروع می‌شود که کارگاه ساخته شده باشد.');
define('WORKSHOP_DESC', 'ادوات محاصره مانند دژکوب و منجنیق در کارگاه ساخته می‌شوند. هر چه سطح آن بالاتر باشد، تولید سریع‌تر است.');

define('ACADEMY', 'دارالفنون');
define('RESEARCH_AVAILABLE', 'تحقیقی موجود نیست');
define('RESEARCH_COMMENCE_ACADEMY', 'تحقیق زمانی شروع می‌شود که دارالفنون ساخته شده باشد.');
define('RESEARCH', 'تحقیق');
define('EXPAND_WAREHOUSE1', 'ارتقاء انبار کالا');
define('EXPAND_GRANARY1', 'ارتقاء انبار غله');
define('RESEARCH_IN_PROGRESS', 'تحقیق در<br>حال انجام');
define('RESEARCHING', 'در حال تحقیق');
define('PREREQUISITES', 'پیش‌نیازها');
define('SHOW_MORE', 'نمایش بیشتر');
define('HIDE_MORE', 'مخفی کردن');
define('ACADEMY_DESC', 'واحدهای جدید در دارالفنون تحقیق می‌شوند. با افزایش سطح آن، می‌توانید واحدهای بهتری را تحقیق کنید.');

define('CRANNY', 'Cranny');
define('CURRENT_HIDDEN_UNITS', 'Currently hidden units per resource:');
define('HIDDEN_UNITS_LEVEL', 'Hidden units per resource at level');
define('UNITS', 'units');
define('CRANNY_DESC', 'The cranny hides some of your resources in case the village gets attacked. These resources cannot get stolen.<br>At level 1 the cranny can hold '.(100*((int)CRANNY_CAPACITY)).' of each resource. The capacity of Gallic crannies is 1.5 times larger.<br>If a Teutonic hero attacks a village, crannies can hide only 80% of their normal capacity');

define('TOWNHALL', 'Town Hall');
define('CELEBRATIONS_COMMENCE_TOWNHALL', 'Celebrations can commence when the town hall is completed.');
define('GREAT_CELEBRATIONS', 'Great celebration');
define('CULTURE_POINTS', 'Culture points');
define('HOLD', 'hold');
define('CELEBRATIONS_IN_PROGRESS', 'Celebration<br>in progress');
define('CELEBRATIONS', 'Celebrations');
define('TOWNHALL_DESC', 'In the town hall, you can hold pompous celebrations. Such a celebration increases your culture points.<br>Culture points are necessary to found or conquer new villages. Each building produces culture points and the higher its level, the more culture points it produces');

define('RESIDENCE', 'Residence');
define('CAPITAL', 'This is your capital');
define('RESIDENCE_TRAIN_DESC', 'In order to found a new village you need a level 10 or 20 residence and 3 settlers. In order to conquer a new village you need a level 10 or 20 residence and a senator, chief or chieftain.');
define('PRODUCTION_POINTS', 'Production of this village:');
define('PRODUCTION_ALL_POINTS', 'Production of all villages:');
define('POINTS_DAY', 'Culture points per day');
define('VILLAGES_PRODUCED', 'Your villages have produced');
define('POINTS_NEED', 'points in total. To found or conquer a new village you need');
define('POINTS', 'points');
define('INHABITANTS', 'Inhabitants');
define('COORDINATES', 'Coordinates');
define('EXPANSION', 'Expansion');
define('TRAIN', 'Train');
define('DATE', 'Date');
define('CONQUERED_BY_VILLAGE', 'Villages founded or conquered by this village');
define('NONE_CONQUERED_BY_VILLAGE', 'No other village has been founded or conquered by this village yet.');
define('RESIDENCE_CULTURE_DESC', 'In order to extend your empire you need culture points. These culture points increase in the course of time and do so faster as your building levels increase.');
define('RESIDENCE_LOYALTY_DESC', 'By attacking with senators, chiefs or chieftains a village&#39;s loyalty can be brought down. If it reaches zero, the village joins the realm of the attacker. The loyalty of this village is currently at ');
define('RESIDENCE_DESC', 'The Residence protects the village against enemy conquests. You can build one residence per village. Units that can found a new village or conquer existing villages can be trained here.<br>Additionally, the residence provides an expansion slot at levels 10 and 20 each');

define('PALACE', 'Palace');
define('PALACE_CONSTRUCTION', 'Palace under construction');
define('PALACE_TRAIN_DESC', 'In order to found a new village you need a level 10, 15 or 20 palace and 3 settlers. In order to conquer a new village you need a level 10, 15 or 20 palace and a senator, chief or chieftain.');
define('CHANGE_CAPITAL', 'change capital');
define('SECURITY_CHANGE_CAPITAL', 'Are you sure, that you want to change your capital?<br><b>You can&#39;t undo this!</b><br>For security you must enter your password to confirm:<br>');
define('PALACE_DESC', 'The palace building is unique. You can only build one in your whole realm and you can proclaim that village as your capital. It also protects the village against enemy conquests. Units that can found a new village or conquer existing villages can be trained here.<br>Additionally, the palace provides an expansion slot at levels 10, 15 and 20 each');

define('TREASURY', 'Treasury');
define('TREASURY_COMMENCE', 'Artefacts can be viewed when treasury is completed.');
define('ARTEFACTS_AREA', 'Artefacts in your area');
define('NO_ARTEFACTS_AREA', 'There are no artefacts in your area.');
define('OWN_ARTEFACTS', 'Own artefacts');
define('CONQUERED', 'Conquered');
define('DISTANCE', 'Distance');
define('EFFECT', 'Effect');
define('ACCOUNT', 'Account');
define('SMALL_ARTEFACTS', 'Small artefacts');
define('LARGE_ARTEFACTS', 'Large artefacts');
define('NO_ARTEFACTS', 'There are no artefacts.');
define('ANY_ARTEFACTS', 'You do not own any artefacts.');
define('OWNER', 'Owner');
define('AREA_EFFECT', 'Area of effect');
define('VILLAGE_EFFECT', 'Village effect');
define('ACCOUNT_EFFECT', 'Account effect');
define('UNIQUE_EFFECT', 'Unique effect');
define('REQUIRED_LEVEL', 'Required level');
define('TIME_CONQUER', 'Time of conquer');
define('TIME_ACTIVATION', 'Time of activation');
define('NEXT_EFFECT', ' Next effect');
define('FORMER_OWNER', 'Former owner(s)');
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
define('TREASURY_DESC', 'The riches of your empire are kept in the treasury. A treasury can only store one artefact at a time.<br>You need a treasury at level 10 for a small artefact, or level 20 for a great one');

define('TRADEOFFICE', 'Trade Office');
define('CURRENT_MERCHANT', 'Current merchant load:');
define('MERCHANT_LEVEL', 'Merchant load at level');
define('TRADEOFFICE_DESC', 'In the trade office, the merchants&#39; carts get improved and equipped with more powerful horses. The higher its level, the more your merchants are able to carry');

define('GREATBARRACKS', 'Great Barracks');
define('TRAINING_COMMENCE_GREATBARRACKS', 'Training can commence when great barracks is completed.');
define('GREATBARRACKS_DESC', 'The Great Barracks allows you to build a second Barracks in the same village, but the troops cost 3 times the original amount.<br>Combined with the regular Barracks, you can train your troops twice as fast in one village');

define('GREATSTABLE', 'Great Stable');
define('TRAINING_COMMENCE_GREATSTABLE', 'Training can commence when great stable is completed.');
define('GREATSTABLE_DESC', 'The Great Stable allows you to build a second Stable in the same village, but the troops cost 3 times the original amount.<br>Combined with the regular Stable, you can train your troops twice as fast in one village');

define('CITYWALL', 'City Wall');
define('DEFENCE_NOW', 'Defence Bonus now:');
define('DEFENCE_LEVEL', 'Defence Bonus at level');
define('CITYWALL_DESC', 'Provides a defense bonus for your troops (((1.03 ^ level) * 100)% + 10) defensive points per level to the basic defensive value for a village. The higher level Wall will give your troops a higher defence bonus.<br>Tribe-specific: Romans only');

define('EARTHWALL', 'Earth Wall');
define('EARTHWALL_DESC', 'Provides a defense bonus for your troops (((1.02 ^ level) * 100)% + 6) defensive points per level to the basic defensive value for a village. A higher level Earth Wall will give your troops a higher defence bonus.<br>Tribe-specific: Teutons only');

define('PALISADE', 'Palisade');
define('PALISADE_DESC', 'Provides a defense bonus for your troops (((1.025 ^ level) * 100)% + 8) defensive points per level to the basic defensive value for a village. A higher level Palisade will give your troops a higher defence bonus.<br>Tribe-specific: Gauls only');

define('STONEMASON', 'Stonemason&#39;s Lodge');
define('CURRENT_STABILITY', 'Current stability bonus:');
define('STABILITY_LEVEL', 'Stability bonus at level');
define('STONEMASON_DESC', 'The Stonemason is an expert it cutting stone. The higher the level of the Stonemason&#39;s Lodge, the greater the stability of your village&#39;s buildings. For each level this building will increase durability by 10% for a maximum of 200% durability for your buildings.<br>This building can only be built in an accounts Capital');

define('BREWERY', 'Brewery');
define('CURRENT_BONUS', 'Current bonus:');
define('BONUS_LEVEL', 'Bonus at level');
define('BREWERY_DESC', 'Tasty mead is brewed here.Drinks make your soldiers braver and stronger when attacking others (1% per Brewery level). Unfortunately, the persuasive power of leaders is reduced by 50% and catapults can only make random hits. Can only be built in the capital, but affects all your villages. The mead-festivals always last 72 hours.<br>Tribe-specific: Teutons only');

define('TRAPPER', 'Trapper');
define('CURRENT_TRAPS', 'Currect maximum traps to train:');
define('TRAPS_LEVEL', 'Maximum traps to train at level');
define('TRAPS', 'Traps');
define('TRAP', 'Trap');
define('CURRENT_HAVE', 'You currently have');
define('WHICH_OCCUPIED', 'of which are occupied.');
define('TRAINING_COMMENCE_TRAPPER', 'Training can commence when trapper is completed.');
define('TRAPPER_DESC', 'The trapper protects your village with well hidden traps. This means that unwary enemies can be imprisoned and won&#39;t be able to harm your village any more.<br>Troops cannot be freed with a raid. If the owner of the traps release the captives all of the traps will be repaired automatically.<br>Tribe-specific: Gauls only');

define('HEROSMANSION', 'Hero&#39;s Mansion');
define('HERO_READY', 'Hero will be ready in ');
define('NAME_CHANGED', 'Hero name has been changed');
define('NOT_UNITS', 'Not available units');
define('NOT', 'Not ');
define('TRAIN_HERO', 'Train New Hero');
define('REVIVE', 'Revive');
define('OASES', 'Oases');
define('DELETE', 'Delete');
define('RESOURCES', 'Resources');
define('OFFENCE', 'Offence');
define('DEFENCE', 'Defence');
define('OFF_BONUS', 'Off-Bonus');
define('DEF_BONUS', 'Def-Bonus');
define('REGENERATION', 'Regeneration');
define('DAY', 'Day');
define('EXPERIENCE', 'Experience');
define('YOU_CAN', 'You can ');
define('RESET', 'reset');
define('YOUR_POINT_UNTIL', ' your points until you are level ');
define('OR_LOWER', ' or lower!');
define('YOUR_HERO_HAS', 'Your hero has ');
define('OF_HIT_POINTS', 'of his life points');
define('ERROR_NAME_SHORT', 'Error: name too short');
define('HEROSMANSION_DESC', 'The hero&#39;s mansion is the home of your glorious hero.<br>At building levels 10, 15 and 20, you can use your hero to annex an unoccupied oasis to your village, one per each of these levels respectively. Depending on the oasis, you will get a production increase for a certain type of resource (or even two resources, from some oases)');

define('GREATWAREHOUSE', 'Great Warehouse');
define('GREATWAREHOUSE_DESC', 'The great warehouse has 3 times the capacity of a normal warehouse.<br>This building can only be built in wonder of the world villages or with a special Natarian artefact');

define('GREATGRANARY', 'Great Granary');
define('GREATGRANARY_DESC', 'The great granary has 3 times the capacity of a normal granary.<br>This building can only be built in wonder of the world villages or with a special Natarian artefact');

define('WONDER', 'Wonder of the World');
define('WORLD_WONDER', 'World Wonder');
define('WONDER_DESC', 'A Wonder of the World (also known as WW) is as astonishing as it sounds. Every level costs a lot of resources. It is nearly impossible for a single player to build a WW on their own. The reason is that you not only need a lot of resources, but also the troops to protect your precious building.<br>To build WW you need an Ancient Construction Plan. You can get this by attacking a Natar Village with your hero. You need to have an empty level 10 treasury and your hero must survive. With those plan and an extremely high level of resources, you can start the world wonder.<br>Once it gets to level 50, you will need someone else in your alliance to have a second construction plan active. You cannot do it all by yourself.<br>Finishing a WW lvl 100, you will win the Travian server and its the end of a game world.<br>Once you finish, a message will come up telling who won and statistics. You can no longer build, but you can message people until the server restarts');
define('WORLD_WONDER_CHANGE_NAME', 'You need to have World Wonder level 1 to be able to change its name');
define('WORLD_WONDER_NAME', 'World Wonder name');
define('WORLD_WONDER_NOTCHANGE_NAME', 'You can not change the name of the World Wonder after level 10');
define('WORLD_WONDER_NAME_CHANGED', 'Name changed');

define('HORSEDRINKING', 'Horse Drinking Trough');
define('HORSEDRINKING_DESC', 'Decreases the training time and the upkeep of cavalry. It can also be built in Roman Wonder of the World villages.<br>Speeds up the training time of cavalry units by 1% per level and lowers the crop consumption of some units depending on its level.<br>Tribe-specific: Romans only');

define('GREATWORKSHOP', 'Great Workshop');
define('TRAINING_COMMENCE_GREATWORKSHOP', 'Training can commence when great workshop is completed.');
define('GREATWORKSHOP_DESC', 'The Great Workshop allows you to build a second Workshop in the same village, but catapults and rams cost 3 times the original amount.<br>Combined with the regular Workshop, you can train your troops twice as fast in one village');

define('BUILDING_MAX_LEVEL_UNDER', 'Building max level under construction');
define('BUILDING_BEING_DEMOLISHED', 'Building presently being demolished');
define('COSTS_UPGRADING_LEVEL', 'Costs</b> for upgrading to level');
define('WORKERS_ALREADY_WORK', 'The workers are already at work.');
define('CONSTRUCTING_MASTER_BUILDER', 'Constructing with master builder ');
define('COSTS', 'Costs');
define('WORKERS_ALREADY_WORK_WAITING', 'The workers are already at work. (waiting loop)');
define('ENOUGH_FOOD_EXPAND_CROPLAND', 'Not enough food. Expand cropland.');
define('UPGRADE_WAREHOUSE', 'Upgrade Warehouse');
define('UPGRADE_GRANARY', 'Upgrade Granary');
define('YOUR_CROP_NEGATIVE', 'Your crop production is negative, you will never get the required resources.');
define('UPGRADE_LEVEL', 'Upgrade to level ');
define('WAITING', '(waiting loop)');
define('NEED_WWCONSTRUCTION_PLAN', 'Need WW construction plan');
define('NEED_MORE_WWCONSTRUCTION_PLAN', 'Need more WW construction plan');
define('CONSTRUCT_NEW_BUILDING', 'Construct new building');
define('SHOWSOON_AVAILABLE_BUILDINGS', 'show soon available buildings');
define('HIDESOON_AVAILABLE_BUILDINGS', 'hide soon available buildings');

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
if(!defined('BANNED')) define('BANNED', 'Banned');
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

There will be a countdown in game, showing the exact time of the release, '.(5 / SPEED).' days prior to the launch.');

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
define('EDIT_BACK', 'Back');
define('SERV_CONFIG', 'Server Configuration');
define('SERV_SETT', 'Server Settings');
define('EDIT_SERV_SETT', 'Edit Server Settings');
define('SERV_VARIABLE', 'Variable');
define('SERV_VALUE', 'Value');
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

$lang['index'][0][1] = 'Welcome to '.SERVER_NAME;
$lang['index'][0][2] = 'Manual';
$lang['index'][0][3] = 'Play now, for free!';
$lang['index'][0][4] = 'What is '.SERVER_NAME;
$lang['index'][0][5] = SERVER_NAME.' is a <b>browser game</b> featuring an engaging ancient world with thousands of other real players.</p><p>It&#39;s <strong>free to play</strong> and requires <strong>no downloads</strong>.';
$lang['index'][0][6] = 'Click here to play '.SERVER_NAME;
$lang['index'][0][7] = 'Total players';
$lang['index'][0][8] = 'Players active';
$lang['index'][0][9] = 'Players online';
$lang['index'][0][10] = 'About the game';
$lang['index'][0][11] = 'You will begin as the chief of a tiny village and will embark on an exciting quest.';
$lang['index'][0][12] = 'Build up villages, wage wars or establish trade routes with your neighbours.';
$lang['index'][0][13] = 'Play with and against thousands of other real players and conquer the the world of Travian.';
$lang['index'][0][14] = 'News';
$lang['index'][0][15] = 'FAQ';
$lang['index'][0][16] = 'Screenshots';
$lang['forum'] = 'Forum';
$lang['register'] = 'Register';
$lang['login'] = 'Login';
$lang['screenshots']['title1'] = 'Village';
$lang['screenshots']['desc1'] = 'Village building';
$lang['screenshots']['title2'] = 'Resource';
$lang['screenshots']['desc2'] = 'Village resource is wood, clay, iron and crop';
$lang['screenshots']['title3'] = 'Map';
$lang['screenshots']['desc3'] = 'Location your village in map';
$lang['screenshots']['title4'] = 'Contruct Building';
$lang['screenshots']['desc4'] = 'How to contruct building or resource level';
$lang['screenshots']['title5'] = 'Report';
$lang['screenshots']['desc5'] = 'Your attack report';
$lang['screenshots']['title6'] = 'Statistics';
$lang['screenshots']['desc6'] = 'View your ranking in statistics';
$lang['screenshots']['title7'] = 'Weapons or dough';
$lang['screenshots']['desc7'] = 'You can choose to play as military or economy';
