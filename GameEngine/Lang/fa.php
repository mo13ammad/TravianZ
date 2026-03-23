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
define('TRAVIAN_PLUS', 'تراوین <b><span class="plus_g">P</span><span class="plus_o">l</span><span class="plus_g">u</span><span class="plus_o">s</span></span></span></b>');
define('CONTACT', 'تماس با ما!');
define('GAME_RULES', 'قوانین بازی');

//MENU
define('REG', 'ثبت‌نام');
define('FORUM', 'انجمن');
define('CHAT', 'چت');
define('IMPRINT', 'درباره ما');
define('MORE_LINKS', 'لینک‌های بیشتر');
define('TOUR', 'معرفی بازی');


//ERRORS
define('USRNM_EMPTY', '(نام کاربری خالی است)');
define('USRNM_TAKEN', '(این نام قبلاً استفاده شده است.)');
define('USRNM_SHORT', '(min. '.USRNM_MIN_LENGTH.' figures)');
define('USRNM_CHAR', '(کاراکترهای نامعتبر)');
define('PW_EMPTY', '(رمز عبور خالی است)');
define('PW_SHORT', '(min. '.PW_MIN_LENGTH.' figures)');
define('PW_INSECURE', '(رمز عبور امن نیست. لطفاً رمز قوی‌تری انتخاب کنید.)');
define('EMAIL_EMPTY', '(ایمیل خالی است)');
define('EMAIL_INVALID', '(آدرس ایمیل نامعتبر است)');
define('EMAIL_TAKEN', '(این ایمیل قبلاً استفاده شده است)');
define('TRIBE_EMPTY', '<li>لطفاً یک قبیله انتخاب کنید.</li>');
define('AGREE_ERROR', '<li>برای ثبت‌نام باید قوانین بازی و شرایط و ضوابط را بپذیرید.</li>');
define('LOGIN_USR_EMPTY', 'نام را وارد کنید.');
define('LOGIN_PASS_EMPTY', 'رمز عبور را وارد کنید.');
define('EMAIL_ERROR', 'ایمیل با مورد موجود مطابقت ندارد');
define('PASS_MISMATCH', 'رمزهای عبور یکسان نیستند');
define('ALLI_OWNER', 'پیش از حذف، یک مالک برای اتحاد تعیین کنید');
define('SIT_ERROR', 'جانشین قبلاً تنظیم شده یا بازیکن پیدا نشد');
define('USR_NT_FOUND', 'نام وجود ندارد.');
define('LOGIN_PW_ERROR', 'رمز عبور اشتباه است.');
define('WEL_TOPIC', 'نکات و اطلاعات مفید ');
define('ATAG_EMPTY', 'تگ خالی است');
define('ANAME_EMPTY', 'نام خالی است');
define('ATAG_EXIST', 'تگ قبلاً گرفته شده');
define('ANAME_EXIST', 'نام قبلاً گرفته شده');
define('ALREADY_ALLY_MEMBER', 'شما از قبل در یک اتحاد هستید');
define('ALLY_TOO_LOW', 'باید سفارت شما حداقل سطح ۳ باشد');
define('USER_NOT_IN_YOUR_ALLY', 'این کاربر در اتحاد شما نیست!');
define('CANT_EDIT_YOUR_PERMISSIONS', 'نمی‌توانید دسترسی‌های خودتان را ویرایش کنید!');
define('CANT_EDIT_LEADER_PERMISSIONS', 'دسترسی‌های رهبر اتحاد قابل ویرایش نیست!');
define('NO_PERMISSION', 'شما دسترسی کافی ندارید!');
define('NAME_OR_DIPL_EMPTY', 'نام یا دیپلماسی خالی است');
define('ALLY_DOESNT_EXISTS', 'اتحاد وجود ندارد');
define('CANNOT_INVITE_SAME_ALLY', 'نمی‌توانید اتحاد خودتان را دعوت کنید');
define('WRONG_DIPLOMACY', 'انتخاب نادرست انجام شد');
define('INVITE_ALREADY_SENT', 'یا قبلاً برای این اتحاد پیمان فرستاده‌اید، یا آن‌ها برای شما فرستاده‌اند، یا از قبل پیمان دارید');
define('INVITE_SENT', 'دعوت ارسال شد');
define('DECLARED_WAR_ON', 'اعلام جنگ کرد به');
define('OFFERED_NON_AGGRESION_PACT_TO', 'پیمان عدم تجاوز پیشنهاد داد به');
define('OFFERED_CONFED_TO', 'پیمان اتحاد پیشنهاد داد به');
define('ALLY_TOO_MUCH_PACTS', 'یا شما دیگر نمی‌توانید از این نوع پیمان پیشنهاد دهید یا این اتحاد به سقف مجاز این نوع پیمان رسیده است');
define('ALLY_PERMISSIONS_UPDATED', 'دسترسی‌ها به‌روزرسانی شد');
define('ALLY_FORUM_LINK_UPDATED', 'لینک انجمن به‌روزرسانی شد');
define('NO_FORUMS_YET', 'هنوز هیچ انجمنی وجود ندارد.');
define('ALLY_USER_KICKED', ' از اتحاد اخراج شد');
define('NOT_OPENED_YET', 'سرور هنوز شروع نشده است.');
define('REGISTER_CLOSED', 'ثبت‌نام بسته است. شما نمی‌توانید در این سرور ثبت‌نام کنید.');
define('NAME_EMPTY', 'لطفاً نام را وارد کنید');
define('NAME_NO_EXIST', 'کاربری با این نام وجود ندارد ');
define('ID_NO_EXIST', 'کاربری با این شناسه وجود ندارد ');
define('SAME_NAME', 'نمی‌توانید خودتان را دعوت کنید');
define('ALREADY_INVITED', ' از قبل دعوت شده است');
define('ALREADY_IN_ALLY', ' از قبل در این اتحاد است');
define('ALREADY_IN_AN_ALLY', ' از قبل در یک اتحاد است');
define('NAME_OR_TAG_CHANGED', 'نام یا تگ تغییر کرد');
define('VAC_MODE_WRONG_DAYS', 'تعداد روزهای اشتباهی وارد کرده‌اید');

//COPYRIGHT
define('TRAVIAN_COPYRIGHT', 'nalooti 100% Open Source Travian Clone.');

//BUILD.TPL
define('CUR_PROD', 'Current production');
define('NEXT_PROD', 'Production at level ');
define('CONSTRUCT_BUILD', 'Construct Building');

//DORF1
define('LUMBER', 'Lumber');
define('CLAY', 'Clay');
define('IRON', 'Iron');
define('CROP', 'Crop');
define('LEVEL', 'Level');
define('CROP_COM', CROP.' consumption');
define('PER_HR', 'per hour');
define('PRODUCTION', 'Production');
define('CAPITAL1', 'Capital');
define('VILLAGES', 'Villages');
define('ANNOUNCEMENT', 'Announcement');
define('GO2MY_VILLAGE', 'Go to my village');
define('VILLAGE_CENTER', 'Village centre');
define('FINISH_GOLD', 'Finish all construction and research orders in this village immediately for 2 Gold?');
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
define('WRITE_MESS_WARN', '<b>هشدار:</b> شما نمی‌توانید مقادیر <b>[message]</b> یا <b>[/message]</b> را در پیام خود استفاده کنید زیرا ممکن است با سیستم BBCode مشکل ایجاد کند.');
define('NO_REPORTS', 'هیچ گزارشی موجود نیست');
define('ATTACKER', 'حمله‌کننده');
define('NATAR_COUNTERFORCE', 'مقاومت ناتار');
define('FROM_THE_VILL', 'از دهکده');
define('CASUALTIES', 'تلفات');
define('INFORMATION', 'اطلاعات');
define('CARRY', 'حمل');
define('DEFENDER', 'دفاع‌کننده');
define('VISITED', 'دیدار کرد');
define('HIS_TROOPS', '&#39;نیروهای او');
define('WISHES_YOU', 'برای شما آرزو دارد');
define('X_MAS', 'Merry Christmas');
define('NEW_YEAR', 'Happy New Year');
define('EASTER', 'Happy Easter');
if(!defined('PEACE')) define('PEACE', 'صلح');

define('GOLD', 'طلا');
define('GOLD_IMG', '<img src=\"/img/x.gif\" class=\"gold\" alt=\"'.GOLD.'\" title=\"'.GOLD.'\">');

//QUEST
define('Q_CONTINUE', 'به ماموریت بعدی برو.');
define('Q_REWARD', 'پاداش شما:');
define('Q_BUTN', 'تکمیل وظیفه');
define('Q0', 'به ');
define('Q0_DESC', 'همان‌طور که می‌بینم، شما فرمانروای این دهکده کوچک شده‌اید. من در چند روز اول مشاور شما خواهم بود و از کنار دست راستتان جدا نمی‌شوم.');
define('Q0_OPT1', 'به سوی اولین ماموریت.');
define('Q0_OPT2', 'خودم نگاهی می‌اندازم.');
define('Q0_OPT3', 'بازی بدون ماموریت.');

define('Q1', 'وظیفه ۱: هیزم‌شکن');
define('Q1_DESC', 'چهار جنگل سبز دور دهکده شما وجود دارد. یک هیزم‌شکن روی یکی از آن‌ها بسازید. چوب منبع مهمی برای استقرار جدید ما است.');
define('Q1_ORDER', 'دستور:</p>یک هیزم‌شکن بسازید.');
define('Q1_RESP', 'بله، این طوری چوب بیشتری به دست می‌آورید. من کمی کمک کردم و دستور را بلافاصله انجام دادم.');
define('Q1_REWARD', 'هیزم‌شکن بلافاصله انجام شد.');

define('Q2', 'وظیفه ۲: گندم‌زار');
define('Q2_DESC', 'رعیت‌های شما بعد از یک روز کار حسابی گرسنه‌اند. یک گندم‌زار را ارتقا دهید تا تامین غذای دهکده بهتر شود. وقتی ساخت آن تمام شد دوباره به اینجا برگردید.');
define('Q2_ORDER', 'دستور:</p>یک گندم‌زار را ارتقا دهید.');
define('Q2_RESP', 'خیلی خوب. حالا رعیت‌های شما دوباره غذای کافی دارند...');
define('Q2_REWARD', 'پاداش شما:</p>۱ روز تراوین پلاس');

define('Q3', 'وظیفه ۳: نام دهکده شما');
define('Q3_DESC', 'با خلاقیتی که دارید، می‌توانید بهترین نام را برای دهکده‌تان انتخاب کنید.<br><br>در منوی سمت چپ روی &#39;پروفایل&#39; کلیک کنید و سپس &#39;ویرایش پروفایل&#39; را انتخاب کنید...');
define('Q3_ORDER', 'دستور:</p>نام دهکده‌تان را به یک نام زیبا تغییر دهید.');
define('Q3_RESP', 'چه اسم فوق‌العاده‌ای برای دهکده‌تان انتخاب کرده‌اید. کاش دهکده من هم چنین نامی داشت!...');

define('Q4', 'وظیفه ۴: سایر بازیکنان');
define('Q4_DESC', 'در '.SERVER_NAME.' شما همراه با بازیکنان زیادی بازی می‌کنید. از منوی بالا روی &#39;آمار&#39; کلیک کنید، رتبه خود را پیدا کنید و اینجا واردش کنید.');
define('Q4_ORDER', 'دستور:</p>رتبه خود را در آمار پیدا کنید و اینجا وارد نمایید.');
define('Q4_BUTN', 'تکمیل وظیفه');
define('Q4_RESP', 'دقیقاً! این همان رتبه شماست.');

define('Q5', 'وظیفه ۵: دو دستور ساخت');
define('Q5_DESC', 'یک معدن آهن و یک گودال خشت بسازید. از آهن و خشت هرگز کافی نیست.');
define('Q5_ORDER', 'دستور:</p><ul><li>یک معدن آهن گسترش دهید.</li><li>یک گودال خشت گسترش دهید.</li></ul>');
define('Q5_RESP', 'همان‌طور که دیدید، دستورهای ساخت کمی زمان می‌برند. دنیای '.SERVER_NAME.' حتی وقتی آفلاین هستید هم به حرکتش ادامه می‌دهد. حتی چند ماه بعد هم باز چیزهای تازه‌ای برای کشف کردن خواهید داشت.<br><br>بهترین کار این است که هر از گاهی به دهکده‌تان سر بزنید و برای رعیت‌ها وظیفه‌های جدید تعیین کنید.');

define('Q6', 'وظیفه ۶: پیام‌ها');
define('Q6_DESC', 'شما می‌توانید با دیگر بازیکنان از طریق سیستم پیام‌رسانی صحبت کنید. من یک پیام برای شما ارسال کردم. آن را بخوانید و دوباره اینجا بیایید.<br><br>پ.ن: فراموش نکنید: در سمت چپ گزارش‌ها و در سمت راست پیام‌ها.');
define('Q6_ORDER', 'دستور:</p>پیام جدید خود را بخوانید.');
define('Q6_RESP', 'آن را دریافت کردید؟ خیلی خوب.<br><br>اینجا مقداری طلا برای شماست. با طلا می‌توانید کارهای مختلفی انجام دهید، مثلاً افزایش ظرفیت در منوی سمت چپ.');
define('Q6_RESP1', '-حساب یا افزایش تولید منابع. برای انجام این کار کلیک کنید ');
define('Q6_RESP2', 'در منوی سمت چپ.');
define('Q6_SUBJECT', 'پیام از طرف مامور');
define('Q6_MESSAGE', 'به شما اطلاع داده می‌شود که یک پاداش خوب نزد مامور در انتظار شماست.<br><br>نکته: این پیام به‌صورت خودکار ایجاد شده است و نیازی به پاسخ ندارد.');

define('Q7', 'وظیفه ۷: از هر کدام یکی!');
define('Q7_DESC', 'حالا باید تولید منابع‌تان را کمی بیشتر کنیم. یک هیزم‌شکن، یک گودال خشت، یک معدن آهن و یک گندم‌زار دیگر را به سطح ۱ برسانید.');
define('Q7_ORDER', 'دستور:</p>از هر خانه منبع، یکی دیگر را به سطح ۱ برسانید.');
define('Q7_RESP', 'خیلی خوب، تولید منابع شما به‌شکل عالی در حال پیشرفت است.');

define('Q8', 'وظیفه ۸: ارتش عظیم!');
define('Q8_DESC', 'حالا یک ماموریت خیلی ویژه برایت دارم. من گرسنه‌ام. ۲۰۰ گندم به من بده!<br><br>در عوض تلاش می‌کنم یک ارتش بزرگ برای محافظت از دهکده‌ات سازمان‌دهی کنم.');
define('Q8_ORDER', 'دستور:</p>۲۰۰ گندم برای مامور بفرست.');
define('Q8_BUTN', 'ارسال گندم');
define('Q8_NOCROP', 'گندم کافی نیست!');

define('Q9', 'وظیفه ۹: همه تا سطح ۱.');
define('Q9_DESC', 'در تراوین همیشه کاری برای انجام دادن هست! تا وقتی منتظر رسیدن ارتش بزرگ هستید، بهتر است تولید منابع‌تان را کمی افزایش دهیم. همه خانه‌های منبع را به سطح ۱ برسانید.');
define('Q9_ORDER', 'دستور:</p>همه خانه‌های منبع را به سطح ۱ برسانید.');
define('Q9_RESP', 'خیلی خوب، تولید منابع شما حسابی شکوفا شده است.<br><br>به‌زودی می‌توانیم ساخت ساختمان‌ها را در دهکده شروع کنیم.');

define('Q10', 'وظیفه ۱۰: کبوتر صلح');
define('Q10_DESC', 'در روزهای اول پس از ثبت‌نام، در برابر حمله سایر بازیکنان محافظت می‌شوید. با افزودن کد <b>[#0]</b> به پروفایل خود می‌توانید ببینید این حفاظت تا چه زمانی ادامه دارد.');
define('Q10_ORDER', 'دستور:</p>کد <b>[#0]</b> را در یکی از دو بخش توضیحات پروفایل خود وارد کنید.');
define('Q10_RESP', 'آفرین! حالا همه می‌توانند ببینند چه جنگجوی بزرگی وارد این دنیا شده است.');
define('Q10_REWARD', 'پاداش شما:</p>۲ روز تراوین پلاس');

define('Q11', 'وظیفه ۱۱: همسایه‌ها!');
define('Q11_DESC', 'در اطراف شما دهکده‌های مختلف زیادی وجود دارد. یکی از آن‌ها این نام را دارد: ');
define('Q11_DESC1', ' روی &#39;نقشه&#39; در منوی بالا کلیک کنید و آن دهکده را پیدا کنید. نام دهکده‌های همسایه را وقتی نشانگر ماوس را روی آن‌ها ببرید می‌بینید.');
define('Q11_ORDER', 'دستور:</p>مختصات ');
define('Q11_ORDER1', ' را پیدا کنید و اینجا وارد نمایید.');
define('Q11_RESP', 'دقیقاً، این هم ');
define('Q11_RESP1', ' است! هرچه منابع بیشتری داشته باشید، بهتر می‌توانید به آن دهکده برسید. البته تقریباً...');
define('Q11_BUTN', 'تکمیل وظیفه');

define('Q12', 'وظیفه ۱۲: مخفیگاه');
define('Q12_DESC', 'وقت آن رسیده که یک مخفیگاه بسازید. دنیای '.SERVER_NAME.' خطرناک است.<br><br>خیلی از بازیکنان از راه دزدیدن منابع دیگران زندگی می‌کنند. یک مخفیگاه بسازید تا بخشی از منابع‌تان را از دشمنان پنهان کنید.');
define('Q12_ORDER', 'دستور:</p>یک مخفیگاه بسازید.');
define('Q12_RESP', 'آفرین، حالا غارت کردن دهکده شما برای بازیکنان مهاجم خیلی سخت‌تر شده است.<br><br>اگر به شما حمله شود، روستاییان به‌طور خودکار منابع را در مخفیگاه پنهان می‌کنند.');

define('Q13', 'وظیفه ۱۳: تا سطح ۲.');
define('Q13_DESC', 'در '.SERVER_NAME.' همیشه کاری برای انجام دادن هست! یک هیزم‌شکن، یک گودال خشت، یک معدن آهن و یک گندم‌زار را به سطح ۲ برسانید.');
define('Q13_ORDER', 'دستور:</p>یکی از هر نوع خانه منبع را به سطح ۲ برسانید.');
define('Q13_RESP', 'خیلی خوب، دهکده شما رشد می‌کند و شکوفا می‌شود!');

define('Q14', 'وظیفه ۱۴: راهنما');
define('Q14_DESC', 'در راهنمای داخل بازی می‌توانید متن‌های کوتاهی درباره ساختمان‌ها و انواع نیروها پیدا کنید.<br><br>روی &#39;راهنما&#39; در سمت چپ کلیک کنید تا ببینید پادگان چقدر چوب نیاز دارد.');
define('Q14_ORDER', 'دستور:</p>مقدار چوب موردنیاز پادگان را وارد کنید');
define('Q14_BUTN', 'تکمیل وظیفه');
define('Q14_RESP', 'دقیقاً! پادگان ۲۱۰ چوب نیاز دارد.');

define('Q15', 'وظیفه ۱۵: ساختمان مرکزی');
define('Q15_DESC', 'معماران ارشد شما برای ساخت ساختمان‌های مهمی مثل بازار یا پادگان به ساختمان مرکزی سطح ۳ نیاز دارند.');
define('Q15_ORDER', 'دستور:</p>ساختمان مرکزی خود را به سطح ۳ برسانید.');
define('Q15_RESP', 'آفرین. ساختمان مرکزی سطح ۳ تکمیل شد.<br><br>با این ارتقا، معماران شما می‌توانند انواع بیشتری از ساختمان‌ها را سریع‌تر بسازند.');

define('Q16', 'وظیفه ۱۶: پیشرفت!');
define('Q16_DESC', 'یک بار دیگر رتبه خود را در آمار بازیکنان بررسی کنید و از پیشرفتتان لذت ببرید.');
define('Q16_ORDER', 'دستور:</p>رتبه خود را در آمار پیدا کنید و اینجا وارد نمایید.');
define('Q16_RESP', 'آفرین! این هم رتبه فعلی شما.');

define('Q17', 'وظیفه ۱۷: تجارت یا جنگ');
define('Q17_DESC', 'حالا باید تصمیم بگیرید: یا با صلح تجارت کنید یا به یک جنگجوی هراس‌انگیز تبدیل شوید.<br><br>برای بازار به انبار غله نیاز دارید و برای پادگان به اردوگاه.');
define('Q17_BUTN', 'اقتصادی');
define('Q17_BUTN1', 'نظامی');

define('Q18', 'وظیفه ۱۸: نظامی');
define('Q18_DESC', 'تصمیم شجاعانه‌ای است. برای اینکه بتوانید نیرو بفرستید، به یک اردوگاه نیاز دارید.<br><br>اردوگاه باید در یک جایگاه ساختمانی مشخص ساخته شود. ');
define('Q18_DESC1', 'جایگاه ساختمانی.');
define('Q18_DESC2', ' در سمت راست ساختمان مرکزی و کمی پایین‌تر از آن قرار دارد. خود جایگاه هم خمیده است.');
define('Q18_ORDER', 'دستور:</p>یک اردوگاه بسازید.');
define('Q18_RESP', 'اردوگاه شما ساخته شد! گامی عالی به سوی سلطه بر جهان!');

define('Q19', 'وظیفه ۱۹: پادگان');
define('Q19_DESC', 'اکنون ساختمان مرکزی سطح ۳ و اردوگاه دارید. این یعنی همه پیش‌نیازهای لازم برای ساخت پادگان فراهم شده است.<br><br>می‌توانید از پادگان برای آموزش نیروهای جنگی استفاده کنید.');
define('Q19_ORDER', 'دستور:</p>یک پادگان بسازید.');
define('Q19_RESP', 'آفرین... بهترین مربیان سرزمین جمع شده‌اند تا مهارت‌های رزمی نیروهای شما را به بالاترین سطح برسانند.');

define('Q20', 'وظیفه ۲۰: آموزش.');
define('Q20_DESC', 'حالا که پادگان دارید، می‌توانید آموزش نیروها را شروع کنید. دو ');
define('Q20_ORDER', 'لطفاً ۲ ');
define('Q20_RESP', 'پایه‌های ارتش باشکوه شما گذاشته شد.<br><br>پیش از فرستادن ارتش برای غارت، بهتر است با ');
define('Q20_RESP1', 'شبیه‌ساز نبرد');
define('Q20_RESP2', 'بررسی کنید که برای شکست دادن یک موش بدون تلفات به چند نیرو نیاز دارید.');

define('Q21', 'وظیفه ۱۸: اقتصادی');
define('Q21_DESC', 'تجارت و اقتصاد انتخاب شما بود. روزهای طلایی در انتظار شماست!');
define('Q21_ORDER', 'دستور:</p>یک غار بسازید.');
define('Q21_RESP', 'بسیار خوب! با غار می‌توانید گندم بیشتری ذخیره کنید.');

define('Q22', 'وظیفه ۱۹: انبار');
define('Q22_DESC', 'نه تنها گندم باید ذخیره شود. سایر منابع نیز می‌توانند اتلاف شوند اگر به درستی ذخیره نشوند. یک انبار بسازید!');
define('Q22_ORDER', 'دستور:</p>یک انبار بسازید.');
define('Q22_RESP', 'آفرین، انبار شما کامل شده است...<br>حالا تمام پیش‌نیازهای لازم برای ساخت یک بازار را فراهم کرده‌اید.');

define('Q23', 'وظیفه ۲۰: بازار.');
define('Q23_DESC', 'یک بازار بسازید تا بتوانید با سایر بازیکنان معامله کنید.');
define('Q23_ORDER', 'دستور:</p>لطفاً یک بازار بسازید.');
define('Q23_RESP', 'بازار کامل شده است. حالا می‌توانید پیشنهادهای خودتان را ثبت کنید و پیشنهادهای دیگران را بپذیرید! هنگام ساخت پیشنهادهای خود، بهتر است چیزی را عرضه کنید که بازیکنان دیگر بیشتر به آن نیاز دارند تا سود بیشتری ببرید.');

define('Q24', 'وظیفه ۲۱: همه به ۲.');
define('Q24_DESC', 'حالا باید تولید منابع خود را کمی افزایش دهیم. یک هیزم‌شکن، یک گودال خشت، یک معدن آهن و یک گندم‌زار دیگر را به سطح ۲ برسانید.');
define('Q24_ORDER', 'دستور:</p>همه خانه‌های منبع را به سطح ۲ برسانید.');
define('Q24_RESP', 'تبریک! دهکده شما رشد می‌کند و شکوفا می‌شود...');

define('Q28', 'وظیفه ۲۲: اتحاد.');
define('Q28_DESC', 'کار گروهی در Travian اهمیت زیادی دارد. بازیکنانی که با هم همکاری می‌کنند در قالب اتحاد سازمان‌دهی می‌شوند. از یک اتحاد در منطقه خود دعوت‌نامه بگیرید و به آن بپیوندید، یا خودتان اتحاد جدیدی تاسیس کنید. برای این کار به سفارت سطح ۳ نیاز دارید.');
define('Q28_ORDER', 'دستور:</p>به یک اتحاد بپیوندید یا خودتان یکی تاسیس کنید.');
define('Q28_RESP', 'عالی است! حالا شما در اتحادی با نام');
define('Q28_RESP1', 'هستید و با همکاری اعضای اتحاد خیلی سریع‌تر پیشرفت خواهید کرد...');

define('Q29', 'وظیفه ۲۳: ساختمان مرکزی تا سطح ۵');
define('Q29_DESC', 'برای اینکه بتوانید قصر یا اقامتگاه بسازید، به ساختمان مرکزی سطح ۵ نیاز دارید.');
define('Q29_ORDER', 'دستور:</p>ساختمان مرکزی خود را به سطح ۵ ارتقا دهید.');
define('Q29_RESP', 'ساختمان مرکزی اکنون سطح ۵ است و می‌توانید قصر یا اقامتگاه بسازید...');

define('Q30', 'وظیفه ۲۴: انبار غله تا سطح ۳.');
define('Q30_DESC', 'برای اینکه گندم شما هدر نرود، باید انبار غله را ارتقا دهید.');
define('Q30_ORDER', 'دستور:</p>انبار غله را به سطح ۳ ارتقا دهید.');
define('Q30_RESP', 'انبار غله اکنون سطح ۳ است...');

define('Q31', 'وظیفه ۲۵: انبار کالا تا سطح ۷');
define('Q31_DESC', 'برای اینکه منابع شما از ظرفیت انبار بیشتر نشود، باید انبار کالا را ارتقا دهید.');
define('Q31_ORDER', 'دستور:</p>انبار کالا را به سطح ۷ ارتقا دهید.');
define('Q31_RESP', 'انبار کالا به سطح ۷ ارتقا یافت...');

define('Q32', 'وظیفه ۲۶: همه تا سطح ۵!');
define('Q32_DESC', 'شما همیشه به منابع بیشتری نیاز خواهید داشت. خانه‌های منبع گران هستند، اما در بلندمدت همیشه ارزشش را دارند.');
define('Q32_ORDER', 'دستور:</p>همه خانه‌های منبع را به سطح ۵ ارتقا دهید.');
define('Q32_RESP', 'همه منابع به سطح ۵ رسیده‌اند. خیلی خوب است، دهکده شما رشد می‌کند و شکوفا می‌شود!');

define('Q33', 'وظیفه ۲۷: قصر یا اقامتگاه؟');
define('Q33_DESC', 'برای تاسیس یک دهکده جدید به مهاجران نیاز دارید. مهاجران را می‌توانید در قصر یا اقامتگاه آموزش دهید.');
define('Q33_ORDER', 'دستور:</p>یک قصر یا اقامتگاه را تا سطح ۱۰ بسازید.');
define('Q33_RESP', 'به سطح ۱۰ رسیده است. حالا می‌توانید مهاجر آموزش دهید و دومین دهکده خود را تاسیس کنید. امتیازهای فرهنگی را هم در نظر داشته باشید...');

define('Q34', 'وظیفه ۲۸: ۳ مهاجر.');
define('Q34_DESC', 'برای تاسیس یک دهکده جدید به مهاجر نیاز دارید. آن‌ها را می‌توان در قصر یا اقامتگاه آموزش داد.');
define('Q34_ORDER', 'دستور:</p>۳ مهاجر آموزش دهید.');
define('Q34_RESP', '۳ مهاجر آموزش داده شدند. برای تاسیس دهکده جدید دست‌کم به');
define('Q34_RESP1', 'امتیاز فرهنگی نیاز دارید...');

define('Q35', 'وظیفه ۲۹: دهکده جدید.');
define('Q35_DESC', 'روی نقشه خانه‌های خالی زیادی وجود دارد. یکی را که مناسب شماست پیدا کنید و یک دهکده جدید تاسیس کنید.');
define('Q35_ORDER', 'دستور:</p>یک دهکده جدید تاسیس کنید.');
define('Q35_RESP', 'به شما افتخار می‌کنم! حالا دو دهکده دارید و همه امکانات لازم برای ساختن یک امپراتوری قدرتمند در اختیار شماست. برایتان آرزوی موفقیت دارم.');

define('Q36', 'وظیفه ۳۰: ساخت ');
define('Q36_DESC', 'حالا که چند سرباز آموزش داده‌اید، بهتر است یک ');
define('Q36_DESC1', ' هم بسازید. این ساختمان دفاع پایه را افزایش می‌دهد و سربازان شما پاداش دفاعی می‌گیرند.');
define('Q36_ORDER', 'دستور:</p>یک ');
define('Q36_RESP', 'همین را می‌خواستم! یک ');
define('Q36_RESP1', ' بسیار مفید است. این ساختمان دفاع نیروهای حاضر در دهکده را افزایش می‌دهد.');

define('Q37', 'وظایف');
define('Q37_DESC', 'همه وظایف انجام شدند!');

define('RESOURCES_OVERVIEW', 'نمای کلی منابع');
define('YOUR_RES_DELIVERIES', 'ارسال‌های منابع شما');
define('DELIVERY', 'محموله');
define('DELIVERY_TIME', 'زمان تحویل');
define('STATUS', 'وضعیت');
define('FETCH', 'دریافت');
define('FETCHED', 'دریافت شد');
define('ON_HOLD', 'در انتظار');
define('ONE_DAY_OF_TRAVIAN', '۱ روز تراوین ');
define('TWO_DAYS_OF_TRAVIAN', '۲ روز تراوین ');

//Quest 25
define('Q25_7', 'وظیفه ۷: همسایه‌ها!');
define('Q25_7_DESC', 'در اطراف شما دهکده‌های مختلف زیادی وجود دارد. یکی از آن‌ها این نام را دارد: ');
define('Q25_7_DESC1', 'در منوی بالا روی &#39;نقشه&#39; کلیک کنید و آن دهکده را پیدا کنید. نام دهکده‌های همسایه را وقتی نشانگر ماوس را روی آن‌ها ببرید می‌بینید.');
define('Q25_7_ORDER', '</p><b>دستور:</b><br>مختصات ');
define('Q25_7_ORDER1', 'را پیدا کنید و اینجا وارد نمایید.');
define('Q25_7_RESP', 'دقیقاً، این هم ');
define('Q25_7_RESP1', ' است! هرچه منابع بیشتری داشته باشید، بهتر می‌توانید به آن دهکده برسید. البته تقریباً...');

define('Q25_8', 'وظیفه ۸: ارتش عظیم!');
define('Q25_8_DESC', 'حالا یک ماموریت خیلی ویژه برایت دارم. من گرسنه‌ام. ۲۰۰ گندم به من بده!<br><br>در عوض تلاش می‌کنم یک ارتش بزرگ برای محافظت از دهکده‌ات سازمان‌دهی کنم.');
define('Q25_8_ORDER', 'دستور:</p>۲۰۰ گندم برای مامور بفرست.');
define('Q25_8_BUTN', 'ارسال گندم');
define('Q25_8_NOCROP', 'گندم کافی نیست!');

define('Q25_9', 'وظیفه ۹: از هر کدام یکی!');
define('Q25_9_DESC', 'در '.SERVER_NAME.' همیشه کاری برای انجام دادن هست! تا وقتی منتظر رسیدن ارتش جدیدتان هستید،<br><br>یک هیزم‌شکن، یک گودال خشت، یک معدن آهن و یک گندم‌زار دیگر را به سطح ۱ برسانید.');
define('Q25_9_ORDER', 'دستور:</p>از هر خانه منبع، یکی دیگر را به سطح ۱ برسانید.');
define('Q25_9_RESP', 'خیلی خوب، تولید منابع شما به‌خوبی در حال پیشرفت است.');

define('Q25_10', 'وظیفه ۱۰: به‌زودی!');
define('Q25_10_DESC', 'تا زمانی که ارتش عظیمی که برایت فرستاده‌ام برسد، وقت یک استراحت کوتاه است.<br><br>تا آن موقع می‌توانی نقشه را بررسی کنی یا چند خانه منبع دیگر را ارتقا بدهی.');
define('Q25_10_ORDER', 'دستور:</p>منتظر رسیدن ارتش مامور بمانید');
define('Q25_10_RESP', 'اکنون یک ارتش بزرگ از طرف مامور رسیده تا از دهکده شما محافظت کند');
define('Q25_10_REWARD', 'پاداش شما:</p>۲ روز بیشتر تراوین پلاس');

define('Q25_11', 'وظیفه ۱۱: گزارش‌ها');
define('Q25_11_DESC', 'هر بار که اتفاق مهمی برای حساب شما رخ بدهد، یک گزارش دریافت می‌کنید.<br><br>با کلیک روی نیمه چپ دکمه پنجم (از چپ به راست) می‌توانید آن‌ها را ببینید. گزارش را بخوانید و دوباره اینجا برگردید.');
define('Q25_11_ORDER', 'دستور:</p>آخرین گزارش خود را بخوانید.');
define('Q25_11_RESP', 'گزارش را دریافت کردی؟ خیلی خوب. این هم پاداشت.');

define('Q25_12', 'وظیفه ۱۲: همه تا سطح ۱.');
define('Q25_12_DESC', 'حالا باید تولید منابع شما را کمی افزایش دهیم.');
define('Q25_12_ORDER', 'دستور:</p>همه خانه‌های منبع را به سطح ۱ برسانید.');
define('Q25_12_RESP', 'خیلی خوب، تولید منابع شما حسابی شکوفا شده است.<br><br>به‌زودی می‌توانیم ساخت ساختمان‌ها را در دهکده شروع کنیم.');

define('Q25_13', 'وظیفه ۱۳: کبوتر صلح');
define('Q25_13_DESC', 'در روزهای اول پس از ثبت‌نام، در برابر حمله سایر بازیکنان محافظت می‌شوید. با افزودن کد <b>[#0]</b> به پروفایل خود می‌توانید ببینید این حفاظت تا چه زمانی ادامه دارد.');
define('Q25_13_ORDER', 'دستور:</p>کد <b>[#0]</b> را در یکی از دو بخش توضیحات پروفایل خود وارد کنید.');
define('Q25_13_RESP', 'آفرین! حالا همه می‌توانند ببینند چه جنگجوی بزرگی وارد این دنیا شده است.');

define('Q25_14', 'وظیفه ۱۴: مخفیگاه');
define('Q25_14_DESC', 'وقت آن رسیده که یک مخفیگاه بسازید. دنیای <b>'.SERVER_NAME.'</b> خطرناک است.<br><br>خیلی از بازیکنان از راه دزدیدن منابع دیگران زندگی می‌کنند. یک مخفیگاه بسازید تا بخشی از منابع‌تان را از دشمنان پنهان کنید.');
define('Q25_14_ORDER', 'دستور:</p>یک مخفیگاه بسازید.');
define('Q25_14_RESP', 'آفرین، حالا غارت کردن دهکده شما برای بازیکنان مهاجم خیلی سخت‌تر شده است.<br><br>اگر به شما حمله شود، روستاییان به‌طور خودکار منابع را در مخفیگاه پنهان می‌کنند.');

define('Q25_15', 'وظیفه ۱۵: تا سطح ۲.');
define('Q25_15_DESC', 'در <b>'.SERVER_NAME.'</b> همیشه کاری برای انجام دادن هست! یک هیزم‌شکن، یک گودال خشت، یک معدن آهن و یک گندم‌زار را به سطح ۲ برسانید.');
define('Q25_15_ORDER', 'دستور:</p>یکی از هر نوع خانه منبع را به سطح ۲ برسانید.');
define('Q25_15_RESP', 'خیلی خوب، دهکده شما رشد می‌کند و شکوفا می‌شود!');

define('Q25_16', 'وظیفه ۱۶: راهنما');
define('Q25_16_DESC', 'در راهنمای داخل بازی می‌توانید متن‌های کوتاهی درباره ساختمان‌ها و انواع نیروها پیدا کنید.<br><br>روی &#39;راهنما&#39; در سمت چپ کلیک کنید تا ببینید پادگان چقدر چوب نیاز دارد.');
define('Q25_16_ORDER', 'دستور:</p>مقدار چوب موردنیاز پادگان را وارد کنید');
define('Q25_16_BUTN', 'تکمیل وظیفه');
define('Q25_16_RESP', 'دقیقاً! پادگان ۲۱۰ چوب نیاز دارد.');

define('Q25_17', 'وظیفه ۱۷: ساختمان مرکزی');
define('Q25_17_DESC', 'معماران ارشد شما برای ساخت ساختمان‌های مهمی مثل بازار یا پادگان به ساختمان مرکزی سطح ۳ نیاز دارند.');
define('Q25_17_ORDER', 'دستور:</p>ساختمان مرکزی خود را به سطح ۳ برسانید.');
define('Q25_17_RESP', 'آفرین. ساختمان مرکزی سطح ۳ تکمیل شد.<br><br>با این ارتقا، معماران شما می‌توانند انواع بیشتری از ساختمان‌ها را سریع‌تر بسازند.');

define('Q25_18', 'وظیفه ۱۸: پیشرفت!');
define('Q25_18_DESC', 'یک بار دیگر رتبه خود را در آمار بازیکنان بررسی کنید و از پیشرفتتان لذت ببرید.');
define('Q25_18_ORDER', 'دستور:</p>رتبه خود را در آمار پیدا کنید و اینجا وارد نمایید.');
define('Q25_18_RESP', 'آفرین! این هم رتبه فعلی شما.');

define('Q25_19', 'وظیفه ۱۹: تجارت یا جنگ');
define('Q25_19_DESC', 'حالا باید تصمیم بگیرید: یا با صلح تجارت کنید یا به یک جنگجوی هراس‌انگیز تبدیل شوید.<br><br>برای بازار به انبار غله نیاز دارید و برای پادگان به اردوگاه.');
define('Q25_19_BUTN', 'اقتصادی');
define('Q25_19_BUTN1', 'نظامی');

define('Q25_20', 'وظیفه ۱۹: اقتصادی');
define('Q25_20_DESC', 'تجارت و اقتصاد انتخاب شما بود. روزهای طلایی در انتظار شماست!');
define('Q25_20_ORDER', 'دستور:</p>یک انبار غله بسازید.');
define('Q25_20_RESP', 'آفرین! با انبار غله می‌توانید گندم بیشتری ذخیره کنید.');

define('Q25_21', 'وظیفه ۲۰: انبار کالا');
define('Q25_21_DESC', 'فقط گندم نیست که باید ذخیره شود. اگر منابع دیگر هم به‌درستی نگهداری نشوند، هدر می‌روند. یک انبار کالا بسازید!');
define('Q25_21_ORDER', 'دستور:</p>یک انبار کالا بسازید.');
define('Q25_21_RESP', 'آفرین، انبار کالای شما کامل شد...<br>حالا همه پیش‌نیازهای لازم برای ساخت بازار را فراهم کرده‌اید.');

define('Q25_22', 'وظیفه ۲۱: بازار.');
define('Q25_22_DESC', 'یک بازار بسازید تا بتوانید با سایر بازیکنان معامله کنید.');
define('Q25_22_ORDER', 'دستور:</p>لطفاً یک بازار بسازید.');
define('Q25_22_RESP', 'بازار تکمیل شد. حالا می‌توانید پیشنهادهای خودتان را ثبت کنید و پیشنهادهای دیگران را بپذیرید! هنگام ساخت پیشنهادهای خود، بهتر است چیزی را عرضه کنید که بازیکنان دیگر بیشتر به آن نیاز دارند تا سود بیشتری ببرید.');

define('Q25_23', 'وظیفه ۱۹: نظامی');
define('Q25_23_DESC', 'تصمیم شجاعانه‌ای است. برای اینکه بتوانید نیرو بفرستید، به یک اردوگاه نیاز دارید.<br><br>اردوگاه باید در یک جایگاه ساختمانی مشخص ساخته شود. ');
define('Q25_23_DESC1', 'جایگاه ساختمانی.');
define('Q25_23_DESC2', 'در سمت راست ساختمان مرکزی و کمی پایین‌تر از آن قرار دارد. خود جایگاه هم خمیده است.');
define('Q25_23_ORDER', 'دستور:</p>یک اردوگاه بسازید.');
define('Q25_23_RESP', 'اردوگاه شما ساخته شد! گامی عالی به سوی سلطه بر جهان!');

define('Q25_24', 'وظیفه ۲۰: پادگان');
define('Q25_24_DESC', 'اکنون ساختمان مرکزی سطح ۳ و اردوگاه دارید. این یعنی همه پیش‌نیازهای لازم برای ساخت پادگان فراهم شده است.<br><br>می‌توانید از پادگان برای آموزش نیروهای جنگی استفاده کنید.');
define('Q25_24_ORDER', 'دستور:</p>یک پادگان بسازید.');
define('Q25_24_RESP', 'آفرین... بهترین مربیان سرزمین جمع شده‌اند تا مهارت‌های رزمی نیروهای شما را به بالاترین سطح برسانند.');

define('Q25_25', 'وظیفه ۲۱: آموزش.');
define('Q25_25_DESC', 'حالا که پادگان دارید، می‌توانید آموزش نیروها را شروع کنید. دو ');
define('Q25_25_ORDER', 'لطفاً ۲ ');
define('Q25_25_RESP', 'پایه‌های ارتش باشکوه شما گذاشته شد.<br><br>پیش از فرستادن ارتش برای غارت، بهتر است با ');
define('Q25_25_RESP1', 'شبیه‌ساز جنگ');
define('Q25_25_RESP2', 'بررسی کنید که برای شکست دادن یک موش بدون تلفات به چند نیرو نیاز دارید.');

define('Q25_26', 'وظیفه ۲۲: همه تا سطح ۲.');
define('Q25_26_DESC', 'حالا وقت آن رسیده که دوباره پایه‌های قدرت و ثروت خود را گسترش دهید! این بار سطح ۱ کافی نیست... کمی زمان می‌برد، اما در پایان ارزشش را دارد. همه خانه‌های منبع خود را به سطح ۲ برسانید!');
define('Q25_26_ORDER', 'دستور:</p>همه خانه‌های منبع را به سطح ۲ برسانید.');
define('Q25_26_RESP', 'تبریک! دهکده شما رشد می‌کند و شکوفا می‌شود...');

define('Q25_27', 'وظیفه ۲۳: دوستان.');
define('Q25_27_DESC', 'به‌عنوان یک بازیکن تنها، رقابت با مهاجمان سخت است. اگر همسایه‌ها شما را دوست داشته باشند، به نفع شماست.<br><br>اگر با دوستانتان بازی کنید حتی بهتر هم می‌شود. آیا می‌دانستید با دعوت از دوستان می‌توانید '.GOLD_IMG.' به‌دست بیاورید؟');
define('Q25_27_ORDER', 'دستور:</p>با دعوت یک دوست، چقدر '.GOLD_IMG.' به‌دست می‌آورید؟');
define('Q25_27_RESP', 'درست است! اگر دوست دعوت‌شده شما صاحب ۲ دهکده شود، ۵۰ '.GOLD_IMG.' می‌گیرید.');

define('Q25_28', 'وظیفه ۲۴: ساخت سفارت.');
define('Q25_28_DESC', 'دنیای Travian خطرناک است. شما برای محافظت در برابر مهاجمان، قبلاً یک مخفیگاه ساخته‌اید.<br><br>یک اتحاد خوب می‌تواند محافظت بسیار بهتری برای شما فراهم کند.');
define('Q25_28_ORDER', 'دستور:</p>برای پذیرفتن دعوت‌نامه‌های اتحاد، یک سفارت بسازید.');
define('Q25_28_RESP', 'بله! حالا می‌توانید منتظر دعوت از یک اتحاد بمانید یا اگر سفارت شما سطح ۳ باشد، اتحاد خودتان را تاسیس کنید.');

define('Q25_29', 'وظیفه ۲۵: اتحاد.');
define('Q25_29_DESC', 'کار گروهی در Travian مهم است. بازیکنانی که با هم همکاری می‌کنند، خود را در قالب اتحادها سازمان‌دهی می‌کنند. از یک اتحاد در منطقه خود دعوت‌نامه بگیرید و به آن بپیوندید. یا در صورت تمایل اتحاد خودتان را تاسیس کنید. برای این کار به سفارت سطح ۳ نیاز دارید.');
define('Q25_29_ORDER', 'دستور:</p>به یک اتحاد بپیوندید یا اتحاد خودتان را تاسیس کنید.');
define('Q25_29_RESP', 'آفرین! حالا شما عضو اتحادی با نام');
define('Q25_29_RESP1', 'هستید.<br>با همکاری، همه شما سریع‌تر پیشرفت خواهید کرد...');

define('Q25_30', 'وظایف');
define('Q25_30_DESC', 'همه وظایف انجام شدند!');


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
define('TOTAL_PLAYERS', PLAYERS.' in total');
define('ACTIVE_PLAYERS', 'بازیکنان فعال');
define('ONLINE_PLAYERS', PLAYERS.' online');
define('MP_STRATEGY_GAME', SERVER_NAME.' - the multiplayer strategy game');
define('WHAT_IS', SERVER_NAME.' is one of the most popular browser games in the world. As a player in '.SERVER_NAME.', you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony.');
define('REGISTER_FOR_FREE', 'اینجا رایگان ثبت‌نام کنید!');
define('LATEST_GAME_WORLD', 'آخرین دنیای بازی');
define('LATEST_GAME_WORLD2', 'در آخرین دنیای بازی ثبت‌نام کنید<br>و از مزایای یکی از اولین بازیکنان<br>بودن لذت ببرید.');
define('PLAY_NOW', 'Play '.SERVER_NAME.' now');
define('LEARN_MORE', 'Learn more <br>about '.SERVER_NAME.'!');
define('LEARN_MORE2', 'حالا با سیستم سرور متحول شده،<br>گرافیک کاملاً جدید<br>این شبیه‌ساز عالی است!');
define('COMUNITY', 'جامعه');
define('BECOME_COMUNITY', 'هم‌اکنون عضو جامعه ما شوید!');
define('BECOME_COMUNITY2', 'عضو یکی از بزرگترین جوامع<br>بازی در جهان شوید.');
define('NEWS', 'اخبار');
define('SCREENSHOTS', 'تصاویر بازی');
if(!defined('FAQ')) define('FAQ', 'سوالات متداول');
if(!defined('SPIELREGELN')) define('SPIELREGELN', 'قوانین بازی');
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
define('BEFORE_REGISTER', 'قبل از ثبت‌نام حساب کاربری، باید <a href="/anleitung.php" target="_blank">دستورالعمل‌های</a> بازی Travian ro1 را بخوانید تا مزایا و معایب خاص سه قبیله را مشاهده کنید.');
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
define('UNDERATTACK', 'دهکده تحت حمله است');
define('OASISATTACK', 'آویس تحت حمله است');
define('OASISATTACKS', 'حمله به آویس');
define('RETURNFROM', 'بازگشت از');
define('REINFORCEMENTFOR', 'نیروی کمکی به');
define('ATTACK_ON', 'حمله به');
define('RAID_ON', 'غارت به');
define('SCOUTING', 'جاسوسی');
define('PRISONERS', 'اسیران');
define('PRISONERSIN', 'اسیران در');
define('PRISONERSFROM', 'اسیران از');
define('TROOPS', 'نیروها');
define('BOUNTY', 'غنیمت');
define('ARRIVAL', 'رسیدن');
define('CATAPULT_TARGET', 'هدف(های) منجنیق');
define('INCOMING_TROOPS', 'نیروهای ورودی');
define('TROOPS_ON_THEIR_WAY', 'نیروها در راه هستند');
define('OWN_TROOPS', 'نیروهای خودی');
define('ON', 'در');
define('AT', 'ساعت');
define('UPKEEP', 'نگهداری');
define('SEND_BACK', 'بازگرداندن');
define('TROOPS_IN_THE_VILLAGE', 'نیروها در دهکده');
define('TROOPS_IN_OTHER_VILLAGE', 'نیروها در دهکده دیگر');
define('TROOPS_IN_OASIS', 'نیروها در آویس');
define('KILL', 'کشتن');
define('FROM', 'از');
define('SEND_TROOPS', 'ارسال نیروها');
define('TASKMASTER', 'مامور');
define('TO_THE_TASK', 'به سوی ماموریت');
define('VILLAGE_OF_THE_ELDERS', 'دهکده سالخوردگان');
define('VILLAGE_OF_THE_ELDERS_TROOPS', 'نیروهای دهکده سالخوردگان');

//SEND TROOP
define('REINFORCE', 'نیروی کمکی');
define('NORMALATTACK', 'حمله معمولی');
define('RAID', 'غارت');
define('OR', 'یا');
define('SENDTROOP', 'ارسال نیروها');
define('NOTROOP', 'نیرویی نیست');

//map
define('DETAIL', 'جزئیات');
define('ABANDVALLEY', 'دره متروکه');
define('OCCUPIED', 'اشغال‌شده');
define('UNOCCUPIED', 'اشغال‌نشده');
define('UNOCCUOASIS', 'آویس اشغال‌نشده');
define('OCCUOASIS', 'آویس اشغال‌شده');
define('THERENOINFO', 'هیچ<br>اطلاعاتی موجود نیست.');
define('LANDDIST', 'توزیع زمین');
define('TRIBE', 'قبیله');
define('ALLIANCE', 'اتحاد');
define('POP', 'جمعیت');
define('REPORT', 'گزارش');
define('OPTION', 'گزینه‌ها');
define('CENTREMAP', 'مرکز نقشه');
define('FNEWVILLAGE', 'تاسیس دهکده جدید');
define('CULTUREPOINT', 'امتیاز فرهنگی');
define('BUILDRALLY', 'ساخت اردوگاه');
define('SETTLERSAVAIL', 'مهاجران موجود');
define('BEGINPRO', 'حفاظت مبتدیان');
define('SENDMERC', 'ارسال بازرگان(ها)');
define('BAN', 'بازیکن مسدود است');
define('BUILDMARKET', 'ساخت بازار');
define('PERHOUR', 'در ساعت');
define('BONUS', 'پاداش');
define('MAP', 'نقشه');
define('LARGE_MAP', 'نقشه بزرگ');
define('LARGE_MAP_DESC', 'نمایش نقشه بزرگ در پنجره‌ای جداگانه');
define('CROPFINDER', 'گندم‌یاب');
define('NORTH', 'شمال');
define('EAST', 'شرق');
define('SOUTH', 'جنوب');
define('WEST', 'غرب');
define('CLOSE_MAP', 'بستن نقشه');
define('AND', 'و');

//other
define('VILLAGE', 'دهکده');
define('STATISTICS', 'آمار');
define('OASIS', 'آویس');
define('NO_OASIS', 'شما هیچ آویسی در اختیار ندارید.');
define('NO_VILLAGES', 'هیچ دهکده‌ای وجود ندارد.');
define('PLAYER', 'بازیکن');

//LOGIN.php
define('COOKIES', 'برای ورود باید کوکی‌ها فعال باشند. اگر از این رایانه به‌صورت مشترک استفاده می‌کنید، برای امنیت خود پس از هر جلسه از حساب خارج شوید.');
define('NAME', 'نام');
define('PW_FORGOTTEN', 'رمز عبور را فراموش کرده‌اید؟');
define('PW_REQUEST', 'در این صورت می‌توانید یک رمز تازه درخواست کنید که به آدرس ایمیل شما ارسال خواهد شد.');
define('PW_GENERATE', 'ایجاد رمز عبور جدید.');
define('EMAIL_NOT_VERIFIED', 'ایمیل تایید نشده است!');
define('EMAIL_FOLLOW', 'برای فعال‌سازی حساب خود این لینک را دنبال کنید.');
define('VERIFY_EMAIL', 'تایید ایمیل.');
define('SERVER_STARTS_IN', 'سرور شروع می‌شود در: ');
define('START_NOW', 'هم‌اکنون شروع کن');


//404.php
define('NOTHING_HERE', 'اینجا چیزی نیست!');
define('WE_LOOKED', '۴۰۴ بار دنبالش گشتیم اما چیزی پیدا نکردیم');

//MASSMESSAGE.php
define('MASS', 'محتوای پیام');
define('MASS_SUBJECT', 'موضوع:');
define('MASS_COLOR', 'رنگ پیام:');
define('MASS_REQUIRED', 'همه فیلدها اجباری هستند');
define('MASS_UNITS', 'تصاویر (واحدها):');
define('MASS_SHOWHIDE', 'نمایش/مخفی');
define('MASS_READ', 'این را بخوانید: پس از افزودن شکلک، باید چپ یا راست را بعد از عدد اضافه کنید وگرنه تصویر کار نخواهد کرد.');
define('MASS_CONFIRM', 'تایید');
define('MASS_REALLY', 'آیا واقعاً می‌خواهید MassIGM ارسال کنید؟');
define('MASS_ABORT', 'همین حالا لغو شود');
define('MASS_SENT', 'Mass IGM ارسال شد');

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
define('CROP_NEGATIVE ', 'تولید گندم منفی است بنابراین هرگز به منابع مورد نیاز نخواهید رسید.');
define('TOO_FEW_RESOURCES', 'منابع<br>ناکافی');
define('UPGRADING', 'در حال ارتقا');
define('DURATION', 'مدت‌زمان');
define('COMPLETE', 'تکمیل');
define('BLACKSMITH_DESC', 'سلاح‌های جنگجویان شما در کوره‌های آهنگری بهبود می‌یابد. با افزایش سطح آن، می‌توانید ساخت سلاح‌های بهتر را سفارش دهید.');

define('ARMOURY', 'زره‌سازی');
define('UPGRADE_ARMOURY', 'ارتقای<br>زره‌سازی');
define('UPGRADES_COMMENCE_ARMOURY', 'ارتقاها پس از تکمیل زره‌سازی آغاز می‌شوند.');
define('ARMOURY_DESC', 'زره جنگجویان شما در کوره‌های زره‌سازی بهبود می‌یابد. با افزایش سطح آن، می‌توانید ساخت زره‌های بهتر را سفارش دهید.');

define('TOURNAMENTSQUARE', 'میدان مسابقات');
define('CURRENT_SPEED', 'پاداش سرعت فعلی:');
define('SPEED_LEVEL', 'پاداش سرعت در سطح');
define('TOURNAMENTSQUARE_DESC', 'نیروهای شما می‌توانند در میدان مسابقات استقامت خود را افزایش دهند. هرچه سطح ساختمان بالاتر برود، نیروها در فاصله‌های بیش از '.TS_THRESHOLD.' خانه سریع‌تر حرکت می‌کنند.');

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
define('OR_', 'یا');
define('GO', 'برو');
define('UNITS_OF_RESOURCE', 'واحد منبع');
define('MERCHANT_CARRY', 'هر بازرگان می‌تواند حمل کند');
define('MERCHANT_COMING', 'بازرگانان در حال رسیدن');
define('TRANSPORT_FROM', 'حمل از');
define('ARRIVAL_IN', 'رسیدن در');
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
define('TASKMASTER_M', 'حساب مامور');
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
define('NO_REPORTS_FROM_OTH', 'هیچ گزارشی برای انتقالات از دهکده‌های خارجی وجود ندارد.');
define('CHANGE_PROFILE', 'تغییر پروفایل');
define('WRITE_MESSAGE', 'Write message');
define('REPORT_PLAYER', 'گزارش بازیکن');
define('ARTEFACT1', 'اثر');
define('WoW1', 'WoW');
define('VILLAGE_NAME', 'نام دهکده');
define('BDAY', 'تولد');
define('CONDITIONS', 'شرایط');
define('TIME_PREF', 'ترجیحات زمانی');
define('TIME_ZONES_DESC', 'در اینجا می‌توانید زمان نمایش داده شده در Travian را مطابق با منطقه زمانی خود تغییر دهید.');
define('TIME_ZONE_L1', 'اروپا');
define('TIME_ZONE_L2', 'UK');
define('TIME_ZONE_L3', 'ترکیه');
define('TIME_ZONE_L4', 'آسیا/کلکته');
define('TIME_ZONE_L5', 'آسیا/بانکوک');
define('TIME_ZONE_L6', 'USA/نیویورک');
define('TIME_ZONE_L7', 'USA/شیکاگو');
define('TIME_ZONE_L8', 'نیوزیلند');
define('MONTH1', 'ژانویه');
define('MONTH2', 'فوریه');
define('MONTH3', 'مارس');
define('MONTH4', 'آوریل');
define('MONTH5', 'مه');
define('MONTH6', 'ژوئن');
define('MONTH7', 'جولای');
define('MONTH8', 'آگوست');
define('MONTH9', 'سپتامبر');
define('MONTH10', 'اکتبر');
define('MONTH11', 'نوامبر');
define('MONTH12', 'دسامبر');

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
define('CONF_SERV_OASIS_CLAY_PROD_MULT', 'ضریب تولید خشت در آویس');
define('CONF_SERV_OASIS_CLAY_PROD_MULT_TOOLTIP', 'مقدار پایه تولید خشت در آویس');
define('CONF_SERV_OASIS_IRON_PROD_MULT', 'ضریب تولید آهن در آویس');
define('CONF_SERV_OASIS_IRON_PROD_MULT_TOOLTIP', 'مقدار پایه تولید آهن در آویس');
define('CONF_SERV_OASIS_CROP_PROD_MULT', 'ضریب تولید گندم در آویس');
define('CONF_SERV_OASIS_CROP_PROD_MULT_TOOLTIP', 'مقدار پایه تولید گندم در آویس');
define('CONF_SERV_MEDALINTERVAL', 'فاصله مدال‌ها');
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
define('CONF_LOG_MARKET', 'ثبت فعالیت‌های بازار');
define('CONF_LOG_MARKET_TOOLTIP', 'فعال (بله) یا غیرفعال (خیر) کردن نمایش لاگ‌های استفاده از بازار توسط بازیکنان.');
define('CONF_LOG_ILLEGAL', 'ثبت فعالیت‌های غیرمجاز');
define('CONF_LOG_ILLEGAL_TOOLTIP', 'فعال (بله) یا غیرفعال (خیر) کردن نمایش لاگ‌های غیرمجاز. (دقیقاً نمی‌دانم به چه معناست)');

//Admin setting - Admin/Templates/config.tpl & editNewsboxSet.tpl
define('NEWSBOX_SETT', 'تنظیمات جعبه خبر');
define('EDIT_NEWSBOX_SETT', 'ویرایش تنظیمات جعبه خبر');
define('EDIT_NEWSBOX1', 'جعبه خبر 1');
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
define('CONF_SQL_DBNAME_TOOLTIP', 'نام پایگاه داده‌ای که به آن متصل می‌شوید.');
define('CONF_SQL_TBPREFIX', 'پیشوند جدول');
define('CONF_SQL_TBPREFIX_TOOLTIP', 'پیشوند استفاده شده برای جداول پایگاه داده.');
define('CONF_SQL_DBTYPE', 'نوع پایگاه داده');
define('CONF_SQL_DBTYPE_TOOLTIP', 'نوع پایگاه داده استفاده شده.');

//Admin setting - Admin/Templates/config.tpl & editExtraSet.tpl
define('EXTRA_SETT', 'تنظیمات اضافی');
define('EDIT_EXTRA_SETT', 'ویرایش تنظیمات اضافی');
define('CONF_EXTRA_LIMITMAIL', 'محدودیت پست الکترونیکی');
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
define('CONF_ADMIN_RAIDATT_TOOLTIP', 'فعال (True) یا غیرفعال (False) کردن توانایی حمله و غارت به یک مدیر.');

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
$lang['forum'] = 'انجمن';
$lang['register'] = 'ثبت‌نام';
$lang['login'] = 'ورود';
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
