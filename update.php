﻿<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'بروزرسانی FluxBB',
'Update message'				=>	'پایگاه داده FluxBB شما منسوخ شده و برای ادامه باید ارتقاء داده شود . اگر شما مدیر تالارگفتگو هستید ، لطفاً دستورالعملهای ذیل را برای تکمیل و ارتقاء دنبال کنید.',
'Note'							=>	'توجه:',
'Members message'				=>	'این پردازش فقط برای مدیر تالار گفتگو میباشد . اگر شما عضو انجمن هستید موضوعی برای نگرانی شما وجود ندارد – انجمن به زودی به حالت عادی برمیگردد !',
'Administrator only'			=>	'این مرحله فقط برای مدیر تالارگفتگو میباشد !',
'Database password info'		=>	'برای اجرای بروزرسانی پایگاه داده لطفاً کلمه عبور پایگاه داده ای که FluxBB در آن نصب شده است را وارد کنید . اگر کلمه عبور را بخاطر نمی آورید ، در فایل \'config.php\' ذخیره شده است.',
'Database password note'		=>	'اگر شما SQLite را اجرا میکنید ( بنابراین پایگاه داده کلمه عبوری ندارد ) لطفاً درعوض از نام پایگاه داده استفاده کنید . این باید دقیقا ً با نام پایگاه داده ای که در فایل پیکربندی داده اید مطابقت کند.',
'Database password'				=>	'کلمه عبور پایگاه داده',
'Maintenance'					=>	'تعمیر و نگهداری',
'Maintenance message info'		=>	'پیامی که به کاربرانی که هنگام انجمن در حین عملیات پردازش بروزرسانی میباشد به نمایش درخواهد آمد . اگر خالی بگذارید ، یک پیام پیش‌فرض به نمایش داده میشود . این متن مثل ارسال های معمولی تحلیل نمیشوند بنابراین میتواند شامل HTML باشد.',
'Maintenance message'		    =>	'پیام تعمیر و نگهداری',

'You are running error'			=>	'شما در حال اجرای %1$s نسخه %2$s هستید . FluxBB %3$s  برای اجرای صحیح حداقل نیازمند %1$s %4$s میباشد . شما قبل از اینکه بتوانید ادامه دهید باید نصب %1$s خود را بروزرسانی کنید.',
'Version mismatch error'		=>	'عدم همخوانی نسخه . پایگاه داده \'%s\' بنظر نمیرسد الگوی پایگاه داده FluxBB که توسط این اسکریپت پشتیبانی میشود ، در حال اجرا باشد.',
'Invalid file error'			=>	'نام فایل پایگاه داده معتبر نمیباشد . هنگامی که از پایگاه داده SQLite استفاده میکنید نام فایل باید دقیقا ً شبیه چیزی که در \'%s\' نوشتید را وارد کنید',
'Invalid password error'		=>	'کلمه عبور پایگاه داده معتبر نمیباشد . برای بروزرسانی FluxBB شما باید کلمه عبور پایگاه داده خود دقیقا ً شبیه چیزی که در \'%s\' نوشتید را وارد کنید',
'No password error'				=>	'هیچ کلمه عبور پایگاه داده ای ارائه نکردید',
'Script runs error'				=>	'بنظر میرسد اسکریپت بروزرسانی هم اکنون توسط شخص دیگری درحال اجراست . اگر این چنین نیست ، لطفاً بصورت دستی فایل \'%s\' را حذف کرده و دوباره تلاش کنید',
'No update error'				=>	'انجمن شما تا جایی که این اسکریپت میتواند بروز میباشد',

'Intro 1'						=>	'این اسکریپت پایگاه داده انجمن شما را بروزرسانی خواهد کرد . روند بروزرسانی میتواند از چندثانیه تا چند ساعت بسته به سرعت سرور شما ، حجم پایگاه داده شما متغییر باشد . فراموش نکنید قبل از عملیات بروزرسانی از پایگاه داده خود نسخه پشتیبان تهیه کنید.',
'Intro 2'						=>	'آیا دستورالعمل بروزرسانی را در مستندات مطالعه کرده اید ؟ اگر جواب شما خیر است ، از اینجا شروع کنید.',
'No charset conversion'			=>	'<STRONG>بسیار مهم!</STRONG> FluxBB تشخیص میدهد که محیط این PHP مکانیزم انکودینگ لازم برای تبدیل UTF-8 از مجموعه کاراکترهای غیر از ISO-8859-1 را پشتیبانی نمیکند. این بدان معنی است که اگر مجموعه کاراکتر ISO-8859-1 نباشد ، FluxBB قادر نیست تا پایگاه داده انجمن را به UTF-8 تبدیل کند و شما باید این کار را دستی انجام دهید . دستورالعمل انجام تبدیل مجموع کاراکتر را میتوانید در دستورالعمل های بروزرسانی پیدا کنید.',
'Enable conversion'				=>	'<strong>فعالسازی تبدیل:</strong> وقتی فعال باشد این اسکریپت بروزرسانی ، پس از ایجاد تغییرات ساختاری لازم به پایگاه داده ، تمام متون درون پایگاه داده را از مجموع کاراکتر جاری به UTF-8 تبدیل خواهد کرد . اگر از نسخه 1.2 بروزرسانی انجام میگیرد این تبدیل الزامی است و همچنین اگر از بسته زبان UTF-8 استفاده نمیکنید.',
'Current character set'			=>	'<strong>مجموع کاراکتر جاری:</strong> اگر زبان اصلی شما در انجمن انگلیسی باشد ، این گزینه را میتوانید بر روی مقدار پیش‌فرض رها کنید . با این حال ، اگر زبان انجمن شما انگلیسی نیست ، شما باید مجموع کاراکتر بسته زبان اصلی که در انجمن استفاده میشود را وارد کنید. <em> اشتباه کردن در این موضوع میتواند پایگاه داده شما را خراب کند پس فقط کارتان را با حدس زدن انجام ندهید !</em> توجه : این عمل الزامی است حتی اگر پایگاه داده قدیمی UTF-8 است.',
'Charset conversion'			=>	'تبدیل مجموعه کاراکتر',
'Enable conversion label'		=>	'<strong>فعالسازی تبدیل</strong> (اجرای تبدیل مجموعه پایگاه داده).',
'Current character set label'	=>	'مجموعه کاراکتر جاری',
'Current character set info'	=>	'قبول پیش‌فرض برای انجمن های انگلیسی زبان در غیراینصورت مجموع کاراکتر برای بسته زبان اصلی.',
'Start update'					=>	'شروع بروزرسانی',
'Error converting users'		=>	'خطا در تبدیل کاربران',
'Error info 1'					=>	'خطائی در تبدیل چند کاربر رخ داد . این خطا میتواند هنگام تبدیل از FluxBB نسخه 1.2 با وجود چندین کاربر ثبت نام شده با نام های کاربری بسیار مشابه به هم رخ دهد ، برای مثال "bob" و "böb".',
'Error info 2'					=>	'در پایین لیستی از کاربرانی که در تبدیل با شکست روبرو شد ، میباشد . لطفاً برای هرکدام از کاربران یک نام کاربر جدید انتخاب کنید . کاربرانی که تغییر نام داده میشوند بصورت خودکار جهت اطلاع رسانی از تغییرات ایمیلی برایشان ارسال میشود.',
'New username'					=>	'نام کاربری جدید',
'Required'						=>	'(الزامی)',
'Correct errors'				=>	'این خطاها باید تصحیح شوند:',
'Rename users'					=>	'تغییر نام کاربران',
'Successfully updated'			=>	'پایگاه داده انجمن شما با موفقیت بروزرسانی شد . حالا شما میتوانید %s.',
'go to index'					=>	'به فهرست انجمن بروید',

'Unable to lock error'			=>	'سیستم قادر به نوشتن قفل بروزرسانی نمیباشد . لطفاً مطمئن شوید که PHP دسترسی نوشتن به پوشه \'%s\' را دارد و همچنین شخص دیگری درحال اجرای اسکریپت بروزرسانی نمیباشد.',

'Converting'					=>	'درحال تبدیل %s …',
'Converting item'				=>	'درحال تبدیل %1$s %2$s …',
'Preparsing item'				=>	'درحال پیش تجزیه کردن %1$s %2$s …',
'Rebuilding index item'			=>	'بازسازی فهرست برای  %1$s %2$s',
'Click here'					=>	'اینجا را کلیک کنید',
'Automatic redirect failed'		=>	'تغییر مسیر خودکار ناموفق بود. برای ادامه %s …',

'ban'							=>	'مسدود',
'categories'					=>	'مجموعه',
'censor words'					=>	'سانسور کلمات',
'configuration'					=>	'پیکربندی',
'forums'						=>	'انجمن ها',
'groups'						=>	'گروه ها',
'post'							=>	'ارسال',
'report'						=>	'گزارش',
'topic'							=>	'موضوع',
'user'							=>	'کاربر',
'signature'						=>	'امضاء',

'Username too short error'		=>	'نام کاربری باید حداقل بیشتر از 2 کاراکتر باشد . لطفاً نام کاربری (بلندتر) دیگری انتخاب کنید.',
'Username too long error'		=>	'نام کاربری نباید بیشتر از 25 کاراکتر باشد . لطفاً نام کاربری (کوتاهتر) دیگری انتخاب کنید.',
'Username Guest reserved error'	=>	'نام کاربری guest رزرو شده است . لطفاً نام کاربری دیگری انتخاب کنید.',
'Username IP format error'		=>	'نام کاربری نباید شبیه یک آدرس IP باشد . لطفاً نام کاربری دیگری انتخاب کنید.',
'Username bad characters error'	=>	'نام کاربری نمیتواند شامل کاراکترهای \'، " و ] یا   [ باشد. لطفاً نام کاربری دیگری انتخاب کنید.',
'Username BBCode error'			=>	'نام کاربری نباید شامل هر یک از فرمتهای تگ (BBCode) که انجمن از آن استفاده میکند باشد . لطفاً نام کاربری دیگری انتخاب کنید.',
'Username duplicate error'		=>	'شخص دیگری هم اکنون با نام کاربری %s در انجمن ثبت نام کرده . نام کاربری شما بسیار شبیه به هم میباشد . نام کاربری شما باید با آن نام کاربری حداقل یک کاراکتر الفبا-عددی (a-z  یا 0-9 یا الف-ی) متفاوت باشد . لطفاً نام کاربری دیگری انتخاب کنید.',

);
