<?php
// $Id: preferences.php,v 1.1 2008/03/09 02:27:22 minahito Exp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED", _MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF", "系統基本設定");
define("_MD_AM_SITENAME", "網站名稱");
define("_MD_AM_SLOGAN", "網站口號或標語");
define("_MD_AM_ADMINML", "站長Email");
define("_MD_AM_LANGUAGE", "內定語言");
define("_MD_AM_STARTPAGE", "首頁預設模組-請記得開放所選擇模組的權限給每個群組");
define("_MD_AM_NONE", "無");
define("_MD_AM_SERVERTZ", "主機系統所在時區");
define("_MD_AM_DEFAULTTZ", "網站預設時區");
define("_MD_AM_DTHEME", "內定佈景");
define("_MD_AM_THEMESET", "佈景主題設定");
define("_MD_AM_ANONNAME", "匿名者名稱");
define("_MD_AM_MINPASS", "密碼長度限制");
define("_MD_AM_NEWUNOTIFY", "是否通知站長有新會員註冊？");
define("_MD_AM_SELFDELETE", "是否開放會員刪除自己的帳號？");
define("_MD_AM_LOADINGIMG", "是否顯示載入中的動態圖形？");
define("_MD_AM_USEGZIP", "使用 gzip 壓縮? PHP 版本在 4.0.5 或更高的才建議使用，預設值為否");
define("_MD_AM_UNAMELVL", "會員名稱檢查的嚴格程度！ ");
define("_MD_AM_STRICT", "最嚴格 (只可使用英文字及數字)");
define("_MD_AM_MEDIUM", "中等");
define("_MD_AM_LIGHT", "寬鬆 (雙語系國家如中文建議使用)");
define("_MD_AM_USERCOOKIE", "設定會員帳號的cookies名稱。可以讓會員不需隨時輸入資料。");
define("_MD_AM_USERCOOKIEDSC", "此cookie只儲存會員名稱一年(選擇性).如果有這cookie,瀏覽器將自動顯示會員名稱.");
define("_MD_AM_USEMYSESS", "訂製session");
define("_MD_AM_USEMYSESSDSC", "是否使用定製session.");
define("_MD_AM_SESSNAME", "Session名稱");
define("_MD_AM_SESSNAMEDSC", "Session名稱 (只有當開啟訂製session才會有作用)");
define("_MD_AM_SESSEXPIRE", "Session有效時間");
define("_MD_AM_SESSEXPIREDSC", "最高Session有效時間(分)(只有當開啟訂製session才會有作用.只有在PHP4.2.0或以上版本適用.)");
define("_MD_AM_BANNERS", "啟動廣告?");
define("_MD_AM_MYIP", "你的IP。");
define("_MD_AM_MYIPDSC", "這個IP將列入排除於廣告計算系統。");
define("_MD_AM_ALWDHTML", "可開放使用的HTML標記.");
define("_MD_AM_INVLDMINPASS", "密碼最小長度.");
define("_MD_AM_INVLDUCOOK", "無效的帳號cookies名稱.");
define("_MD_AM_INVLDSCOOK", "無效的session的cookies名稱.");
define("_MD_AM_INVLDSEXP", "無效的session保留時間.");
define("_MD_AM_ADMNOTSET", "管理員的電子郵件位址未設定.");
define("_MD_AM_YES", "是");
define("_MD_AM_NO", "否");
define("_MD_AM_DONTCHNG", "不修改");
define("_MD_AM_REMEMBER", "請記得把檔案屬性改成666，以便讓系統自動修改內容。");
define("_MD_AM_IFUCANT", "如果沒有改屬性的話就必須手動修改檔案。");


define("_MD_AM_COMMODE", "新聞回應討論的排列方式");
define("_MD_AM_COMORDER", "新聞回應討論的顯示方式？");
define("_MD_AM_ALLOWHTML", "開放使用HTML？");
define("_MD_AM_DEBUGMODE", "開啟除錯模式？");
define("_MD_AM_DEBUGMODEDSC", "開啟後將會自動顯示SQL資料庫錯誤訊息，網站正式運行後請關閉.");
define("_MD_AM_AVATARALLOW", "開放上載大頭照?");
define('_MD_AM_AVATARMP', '最少發佈文章數');
define('_MD_AM_AVATARMPDSC', '輸入最少發佈文章數才可上載大頭照');
define("_MD_AM_AVATARW", "大頭照最大寬度 (像素)");
define("_MD_AM_AVATARH", "大頭照最大高度 (像素)");
define("_MD_AM_AVATARMAX", "大頭照檔案限制(byte)");
define("_MD_AM_AVATARCONF", "自訂大頭照設定");
define("_MD_AM_CHNGUTHEME", "統一改變所有會員使用的佈景");
define("_MD_AM_NOTIFYTO", "通知群組");
define("_MD_AM_ALLOWTHEME", "開放會員選擇佈景?");
define("_MD_AM_ALLOWIMAGE", "開放會員選擇在文章中顯示圖檔?");

define("_MD_AM_USERACTV", "需要會員啟動帳號嗎 (建議)");
define("_MD_AM_AUTOACTV", "自動啟動帳號");
define("_MD_AM_ADMINACTV", "管理員啟動會員帳號");
define("_MD_AM_ACTVTYPE", "選擇會員帳號啟動方式");
define("_MD_AM_ACTVGROUP", "選擇寄送啟動帳號群組");
define("_MD_AM_ACTVGROUPDSC", "只有開啟管理員啟動會員帳號才有效");
define('_MD_AM_USESSL', '使用SSL方式登入?');
define('_MD_AM_SSLPOST', 'SSL 變數');
define('_MD_AM_SSLPOSTDSC', '如果你不曉得此變數,請選一個不容易猜到的字.');
define('_MD_AM_DEBUGMODE0', '關閉');
define('_MD_AM_DEBUGMODE1', 'PHP除錯');
define('_MD_AM_DEBUGMODE2', 'MySQL/除錯');
define('_MD_AM_DEBUGMODE3', 'Smarty Templates 除錯');
define('_MD_AM_MINUNAME', '最短使用者名稱');
define('_MD_AM_MAXUNAME', '最長使用者名稱');
define('_MD_AM_GENERAL', '一般設定');
define('_MD_AM_USERSETTINGS', '使用者一般設定');
define('_MD_AM_ALLWCHGMAIL', '開放使用者改變Email位置?');
define('_MD_AM_ALLWCHGMAILDSC', '');
define('_MD_AM_IPBAN', 'IP 禁止');
define('_MD_AM_BADEMAILS', '輸入排除emails');
define('_MD_AM_BADEMAILSDSC', '使用 <b>|</b>來分開,輸入下一個.');
define('_MD_AM_BADUNAMES', '輸入排除使用者名稱');
define('_MD_AM_BADUNAMESDSC', '使用 <b>|</b>來分開,輸入下一個.');
define('_MD_AM_DOBADIPS', '輸入禁止 IP?');
define('_MD_AM_DOBADIPSDSC', '此IP電腦無法瀏覽你的網站');
define('_MD_AM_BADIPS', '輸入IP並利用.<br /> <b>|</b>來分開,輸入下一個.');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc 是代表開始用 aaa.bbb.ccc 電腦無法瀏覽<br />aaa.bbb.ccc$ 是代表開始用aaa.bbb.ccc作為結束的電腦無法瀏覽<br />aaa.bbb.ccc 代表有包含 aaa.bbb.ccc的電腦無法瀏覽');
define('_MD_AM_PREFMAIN', '系統基本設定');
define('_MD_AM_METAKEY', 'Meta 關鍵字');
define('_MD_AM_METAKEYDSC', '填入您要放在 meta 關鍵字的內容，以 , 符號分開. (如 XOOP, PHP, mySQL, portal system)');
define('_MD_AM_METARATING', 'Meta重複率');
define('_MD_AM_METARATINGDSC', '此定義你的內容Meta時間');
define('_MD_AM_METAOGEN', '一般');
define('_MD_AM_METAO14YRS', '14年');
define('_MD_AM_METAOREST', '限制');
define('_MD_AM_METAOMAT', '成人');
define('_MD_AM_METAROBOTS', 'Meta 機器人');
define('_MD_AM_METAROBOTSDSC', '這可以讓搜尋引擎直接定義你的網頁資料');
define('_MD_AM_INDEXFOLLOW', '導引, 內容');
define('_MD_AM_NOINDEXFOLLOW', '無導引, 內容');
define('_MD_AM_INDEXNOFOLLOW', '導引, 無內容');
define('_MD_AM_NOINDEXNOFOLLOW', '無導引, 無內容');
define('_MD_AM_METAAUTHOR', 'Meta 作者');
define('_MD_AM_METAAUTHORDSC', '此定義你的內容作者.必須有名稱,email,及網址.');
define('_MD_AM_METACOPYR', 'Meta 版權');
define('_MD_AM_METACOPYRDSC', '此定義你的內容版權，任何你想要附加的內容.');
define('_MD_AM_METADESC', 'Meta 描述');
define('_MD_AM_METADESCDSC', '此定義你的內容描述');
define('_MD_AM_METAFOOTER', 'Meta 頁尾資訊');
define('_MD_AM_FOOTER', '頁尾資訊');
define('_MD_AM_FOOTERDSC', '確定你的網址有包含 http://, 如果沒有就不能運作.');
define('_MD_AM_CENSOR', '不雅字檢查');
define('_MD_AM_DOCENSOR', '是否開啟不雅字檢查?');
define('_MD_AM_DOCENSORDSC', '不雅字檢查通常是關閉的，以免影響網站速度.');
define('_MD_AM_CENSORWRD', '不雅字');
define('_MD_AM_CENSORWRDDSC', '輸入要禁止的不雅字.<br />使用<b>|</b>分開.');
define('_MD_AM_CENSORRPLC', '不雅字將被取代為:');
define('_MD_AM_CENSORRPLCDSC', '不雅字將會被取代成你所輸入的字');

define('_MD_AM_SEARCH', '搜尋選項');
define('_MD_AM_DOSEARCH', '開啟全站搜尋?');
define('_MD_AM_DOSEARCHDSC', '開放搜尋全站文章.');
define('_MD_AM_MINSEARCH', '最少關鍵字長度');
define('_MD_AM_MINSEARCHDSC', '搜尋時輸入最少字數');
define('_MD_AM_MODCONFIG', '模組設定');
define('_MD_AM_DSPDSCLMR', '顯示註冊同意事項?');
define('_MD_AM_DSPDSCLMRDSC', '顯示註冊同意事項');
define('_MD_AM_REGDSCLMR', '註冊同意事項');
define('_MD_AM_REGDSCLMRDSC', '註冊時顯示的同意事項內容');
define('_MD_AM_ALLOWREG', '開放新會員註冊?');
define('_MD_AM_ALLOWREGDSC', '接受新會員註冊');
define('_MD_AM_THEMEFILE', '更新 templates_c 中的暫存檔案嗎?');
define('_MD_AM_THEMEFILEDSC', '若選擇-是-,將會清除templates_c目錄中的檔案.以便更新佈景及樣板.更新完成後請記的在恢復設定為 否 .');
define('_MD_AM_CLOSESITE', '暫時關閉網站?');
define('_MD_AM_CLOSESITEDSC', '網站關閉後只開放有授權人員進入. ');
define('_MD_AM_CLOSESITEOK', '選擇關閉網站時授權可進入的人員群組.');
define('_MD_AM_CLOSESITEOKDSC', '網站最高管理權者不受限制.');
define('_MD_AM_CLOSESITETXT', '網站關閉原因');
define('_MD_AM_CLOSESITETXTDSC', '網站關閉時自動顯示原因.');
define('_MD_AM_SITECACHE', '網站 Cache');
define('_MD_AM_SITECACHEDSC', 'Caches 儲存網站相關資料,如模組,區塊等等.');
define('_MD_AM_MODCACHE', '模組 Cache');
define('_MD_AM_MODCACHEDSC', 'Caches 模組儲存使用記錄.');
define('_MD_AM_NOMODULE', '無模組使用 Cache.');
define('_MD_AM_DTPLSET', '預設樣板');
define('_MD_AM_SSLLINK', 'SSL登入使用的連結位址');

// added for mailer
define("_MD_AM_MAILER", "郵件設定");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "發信mail");
define("_MD_AM_MAILFROMDESC", "");
define("_MD_AM_MAILFROMNAME", "發信者");
define("_MD_AM_MAILFROMNAMEDESC", "");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "發信者");
define("_MD_AM_MAILFROMUIDDESC", "系統發送訊息時由誰發送?");
define("_MD_AM_MAILERMETHOD", "郵件傳遞方式");
define("_MD_AM_MAILERMETHODDESC", "郵件傳遞方式. 預設為 \"mail\", 請使用此選項除非郵件發送有問題.");
define("_MD_AM_SMTPHOST", "SMTP 主機");
define("_MD_AM_SMTPHOSTDESC", "列出SMTP主機並嘗試連結.");
define("_MD_AM_SMTPUSER", "SMTP帳號");
define("_MD_AM_SMTPUSERDESC", "郵件主機所需的私人帳號.");
define("_MD_AM_SMTPPASS", "SMTP密碼");
define("_MD_AM_SMTPPASSDESC", "使用SMTP傳送所需的密碼.");
define("_MD_AM_SENDMAILPATH", "sendmail的路徑");
define("_MD_AM_SENDMAILPATHDESC", "web主機使用的sendmail路徑.");
define("_MD_AM_THEMEOK", "可選擇的佈景");
define("_MD_AM_THEMEOKDSC", "可讓使用者選擇的佈景");
