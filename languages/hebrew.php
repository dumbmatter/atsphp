<?php
//===========================================================================\\
// Aardvark Topsites PHP 5.2                                                 \\
// Copyright (c) 2000-2009 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarktopsitesphp.com/                http://www.avatic.com/ \\
//---------------------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or modify it   \\
// under the terms of the GNU General Public License as published by the     \\
// Free Software Foundation; either version 2 of the License, or (at your    \\
// option) any later version.                                                \\
//                                                                           \\
// This program is distributed in the hope that it will be useful, but       \\
// WITHOUT ANY WARRANTY; without even the implied warranty of                \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General \\
// Public License for more details.                                          \\
//===========================================================================\\

if (!defined('ATSPHP')) {
  die("This file cannot be accessed directly.");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Hebrew (עברית)';
$translator_name = 'Dan_y2k';
$translator_email = 'dan_y2k@nana.co.il';
$translator_url = 'http://y2k.official.ws';

// Set this to the character encoding of your translation
$LNG['charset'] = "utf-8";

// Global
$LNG['g_form_submit_short'] = "עבור";
$LNG['g_username'] = "שם משתמש";
$LNG['g_url'] = "כתובת";
$LNG['g_title'] = "כותרת";
$LNG['g_description'] = "תיאור";
$LNG['g_category'] = "קטגוריה"; // 4.1.0
$LNG['g_email'] = "דואר אלקטרוני";
$LNG['g_banner_url'] = "כתובת לבאנר";
$LNG['g_password'] = "סיסמה";
$LNG['g_average'] = "ממוצע";
$LNG['g_today'] = "היום";
$LNG['g_yesterday'] = "אתמול";
$LNG['g_daily'] = "יומי"; // 5.0
$LNG['g_this_month'] = "החודש הזה"; // 5.0
$LNG['g_last_month'] = "חודש שעבר"; // 5.0
$LNG['g_monthly'] = "חודשי"; // 5.0
$LNG['g_this_week'] = "השבוע הזה"; // 5.0
$LNG['g_last_week'] = "שבוע שעבר"; // 5.0
$LNG['g_weekly'] = "שבועי"; // 5.0
$LNG['g_pv'] = 'צפיות עמוד'; // 5.0
$LNG['g_overall'] = 'כולל'; // 5.0
$LNG['g_in'] = 'הצבעות'; // 5.0
$LNG['g_out'] = 'ביקורים'; // 5.0
$LNG['g_unq_pv'] = "צפיות עמוד ייחודיות"; // 5.0
$LNG['g_tot_pv'] = "סך הכול צפיות עמוד"; // 5.0
$LNG['g_unq_in'] = "הצבעות ייחודיות"; // 5.0
$LNG['g_tot_in'] = "סך הכול הצבעות"; // 5.0
$LNG['g_unq_out'] = "ביקורים ייחודיים"; // 5.0
$LNG['g_tot_out'] = "סך הכול ביקורים"; // 5.0
$LNG['g_invalid_u_or_p'] = "שם משתמש או סיסמה לא תקינים.  בבקשה נסה שוב."; // 5.0
$LNG['g_invalid_u'] = "שם משתמש לא תקין.  בבקשה נסה שוב."; // 5.0
$LNG['g_invalid_p'] = "סיסמה לא תקינה.  בבקשה נסה שוב."; // 5.0
$LNG['g_session_expired'] = "פג תוקפה של העונה שלך.  בבקשה נסה שוב."; // 5.0
$LNG['g_error'] = "שגיאה"; // 5.0
$LNG['g_delete_install'] = "מטעמי בטיחות, אתה חייב למחוק את תיקיית ההתקנה לפני שהמערכת תפעל."; // 5.0
$LNG['g_ip'] = "כתובת IP"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "עריכת חשבון";
$LNG['edit_info_edited'] = "חשבונך נערך בהצלחה.";
$LNG['edit_password_blank'] = "השאר ריק כדי לשמור על הסיסמה הנוכחית"; // 4.0
$LNG['edit_delay'] = "שינויים לכותרת אתרך וכתובתו חייבים להיות מאושרים על ידי מנהל מערכת תחרות האתרים לפני שישתנו."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "עמוד מעבר תחרות אתרים";
$LNG['gateway_text'] = "כדי למנוע רמאויות, עמוד מעבר הוקם.  לחץ על הקישור למטה כדי להיכנס לרשימת תחרות האתרים.";
$LNG['gateway_vote'] = "היכנס והצבע";
$LNG['gateway_no_vote'] = "כניסה ללא הצבעה"; // 5.0

// Install
$LNG['install_header'] = "התקנה";
$LNG['install_welcome'] = "ברוך הבא אל Aardvark Topsites PHP 5.  מלא את הטופס למטה כדי להתקין את המערכת.";
$LNG['install_sql_prefix'] = "קידומת טבלה - שנה רק אם אתה מריץ יותר מתחרות אחת מאותו בסיס נתונים";
$LNG['install_error_chmod'] = "לא ניתן לכתוב אל settings_sql.php.  וודא שנתת את ההרשאות (CHMOD) 666 לקובץ settings_sql.php.";
$LNG['install_error_sql'] = "לא ניתן להתחבר לבסיס נתוני ה-SQL.  בבקשה חזור אחורה ובדוק את הגדרות ה-SQL שלך.";
$LNG['install_done'] = "רשימת תחרות האתרים שלך הותקנה.  מחק תיקיה זו עכשיו.";
$LNG['install_your'] = "רשימת תחרות האתרים שלך";
$LNG['install_admin'] = "מנהל מערכת";
$LNG['install_manual'] = "ידנית";
$LNG['upgrade_header'] = "שידרוג";
$LNG['upgrade_welcome'] = "ברוך הבא אל Aardvark Topsites PHP 5.  לפני שתשדרג, זכור לגבות את הנתונים שלך.";
$LNG['upgrade_version'] = "בבקשה וודא שאתה משדרג מגירסה %s."; // 5.1.0
$LNG['upgrade_error_version'] = "שידרוג נתמך רק עבור Aardvark Topsites PHP 4.1.0 או גירסה חדשה יותר.";
$LNG['upgrade_done'] = "רשימת תחרות האתרים שלך שודרגה.  מחק תיקיה זו עכשיו.";
$LNG['install_mailing_list'] = "אם אתה רוצה להצטרף לרשימת התפוצה של Aardvark Topsites PHP, הכנס את כתובת הדואר האלקטרוני שלך למטה.  זוהי רשימה עבור הכרזות חשובות אודות המערכת, כמו שיחרורים חדשים והמלצות אבטחה."; // 5.2.0

// Join
$LNG['join_header'] = "הצטרפות";
$LNG['join_enter_text'] = "הכנס את הטקסט המוצג בתמונה למטה:"; // 4.2.2
$LNG['join_enter_text_read'] = "לא יכול לקרוא?"; // 5.2.0
$LNG['join_user'] = "משתמש"; // 5.0
$LNG['join_website'] = "אתר אינטרנט"; // 5.0
$LNG['join_banner_size'] = "(גודל מירבי: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "הכנס שם משתמש תקין: השתמש רק באותיות, מספרים, קו תחתון, ומקפים."; // 5.0
$LNG['join_error_username_duplicate'] = "הכנס שם משתמש תקין: שם המשתמש שלך נמצא כבר בשימוש."; // 5.0
$LNG['join_error_url'] = "הכנס כתובת תקינה.";
$LNG['join_error_email'] = "הכנס כתובת דואר אלקטרוני תקינה.";
$LNG['join_error_title'] = "הכנס כותרת עבור אתר האינטרנט שלך.";
$LNG['join_error_password'] = "הכנס סיסמה.";
$LNG['join_error_confirm_password'] = "הסיסמאות לא התאימו."; // 5.2.0
$LNG['join_error_urlbanner'] = "הכנס באנר תקין.  השאר אותו ריק אם אין לך אחד."; // 5.2.0
$LNG['join_error_time'] = "אל תרענן את עמוד אישור ההצטרפות."; // 4.2.0
$LNG['join_error_captcha'] = "המילה שהכנסת לא מתאימה לתמונה."; // 4.2.2
$LNG['join_error_question'] = "תשובתך אינה נכונה.  בבקשה תקן זאת כדי לאשר אתה אדם אמיתי ולא בוט."; // 5.2.0
$LNG['join_thanks'] = "תודה לך על שהצטרפת!  שים את הקוד הזה בתוך אתרך כדי להיות מדורג.";
$LNG['join_change_warning'] = "אם תשנה את הקוד, הוא עלול לא לפעול.";
$LNG['join_welcome'] = "ברוך הבא אל %s";
$LNG['join_welcome_admin'] = "חבר חדש הצטרף לרשימת תחרות האתרים שלך.";
$LNG['join_approve'] = "תודה לך על שהצטרפת!  אתרך יצטרף לרשימה כשמנהל המערכת של תחרות האתרים ישאר אותו.  אתה תקבל דואר אלקטרוני עם מידע נוסף כשאתרך יאושר."; // 5.2.0
$LNG['join_type'] = "סוג חשבון"; // 5.1.0
$LNG['join_standard'] = "רגיל"; // 5.1.0
$LNG['join_error_top'] = "שגיאה נמצאה בהגשה שלך.  בבקשה תקן את השגיאה הזאת למטה."; // 5.2.0
$LNG['join_ban_top'] = "ההגשה שלך מכילה תוכן שנחסם על ידי מנהל מערכת תחרות האתרים."; // 5.2.0
$LNG['join_security'] = "אבטחה"; // 5.2.0
$LNG['join_confirm_password'] = "אישור סיסמה"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "קוד קישור"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "סיסמה שאבדה"; // 5.0
$LNG['lost_pw_forgot'] = "שכחת את סיסמתך?"; // 5.0
$LNG['lost_pw_get'] = "קבל סיסמה"; // 5.0
$LNG['lost_pw_emailed'] = "בבקשה בדוק את הדואר האלקטרוני שלך למידע נוסף."; // 5.0
$LNG['lost_pw_email'] = "כדי לבחור סיסמה חדשה עבור אתרך, פשוט עבור לכתובת הזו:"; // 5.0
$LNG['lost_pw_new'] = "הכנס סיסמה חדשה"; // 5.0
$LNG['lost_pw_set_new'] = "קבע סיסמה חדשה"; // 5.0
$LNG['lost_pw_finish'] = "סיסמתך נקבעה לסיסמה החדשה שהרגע בחרת."; // 5.0

// Main Page
$LNG['main_header'] = "דירוגים"; // 5.0
$LNG['main_all'] = "כל האתרים"; // 4.2.0
$LNG['main_method'] = "שיטת דירוג";
$LNG['main_members'] = "חברים";
$LNG['main_menu_rankings'] = "דירוגים";
$LNG['main_menu_join'] = "הצטרפות";
$LNG['main_menu_random'] = "חבר אקראי";
$LNG['main_menu_search'] = "חיפוש";
$LNG['main_menu_lost_code'] = "קוד אבוד"; // 5.0
$LNG['main_menu_lost_password'] = "סיסמה אבודה"; // 5.0
$LNG['main_menu_edit'] = "עריכת מידע החבר";
$LNG['main_menu_user_cp'] = "לוח בקרת משתמש"; // 5.0
$LNG['main_featured'] = "אתר הרגע"; // 4.0.2
$LNG['main_executiontime'] = "זמן הרצת המערכת"; // 4.0
$LNG['main_queries'] = "שאילתות SQL"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "סטטיסטיקות";
$LNG['table_unique'] = "ייחודיות";
$LNG['table_total'] = "סך הכול";
$LNG['table_rank'] = "דירוג";
$LNG['table_title'] = "כותרת"; // 4.0
$LNG['table_description'] = "תיאור"; // 4.0
$LNG['table_movement'] = "תנועה";
$LNG['table_up'] = "מעלה"; // 5.0
$LNG['table_down'] = "מטה"; // 5.0
$LNG['table_neutral'] = "ללא שינוי"; // 5.0
$LNG['table_your_site_here'] = "האתר שלך כאן"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "דירוג וכתיבת ביקורת";
$LNG['rate_message'] = "בבקשה הכנס את הדירוג והסיקור שלך עבור %s בטופס שלמטה."; // 5.2.0
$LNG['rate_rating'] = "דירוג";
$LNG['rate_review'] = "ביקורת - אסור HTML"; // 5.0
$LNG['rate_thanks'] = "תודה לך על הדירוג שלך.";
$LNG['rate_error'] = "דירגת כבר את אתר זה.";
$LNG['rate_back'] = "חזרה לסטטיסטיקות";
$LNG['rate_email_admin'] = "ביקורת חדשה פורסמה ברשימת תחרות האתרים שלך."; // 5.1.0

// Search
$LNG['search_header'] = "חיפוש";
$LNG['search_off'] = "תכונת החיפוש נוטרלה.";
$LNG['search_no_sites'] = "סליחה, לא נמצאו אתרים התואמים את שאילתת החיפוש שלך."; // 5.0
$LNG['search_prev'] = "הקודם"; // 3.2.1
$LNG['search_next'] = "הבא"; // 3.2.1
$LNG['search_displaying_results'] = "מוצגות %s עד %s מתוך %s תוצאות עבור <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "סטטיסטיקות";
$LNG['stats_info'] = "מידע";
$LNG['stats_member_since'] = "חבר מאז"; // 5.0
$LNG['stats_rating_avg'] = "דירוג ממוצע";
$LNG['stats_rating_num'] = "מספר דירוגים";
$LNG['stats_rate'] = "דרג וכתוב ביקורת על אתר זה";
$LNG['stats_reviews'] = "ביקורות";
$LNG['stats_allreviews'] = "הצגת כל הביקורות"; // 4.0
$LNG['stats_week'] = "שבוע"; // 5.0
$LNG['stats_highest'] = "הכי גבוה"; // 5.0
$LNG['stats_overall'] = "סטטיסטיקות כלליות"; // 5.2.0
$LNG['stats_overall_average'] = "ממוצע (10 אחרונים %s)"; // 5.2.0
$LNG['stats_overall_total'] = "סך הכול (כל הזמן)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "%s האתרים המובילים"; // 4.0
$LNG['ssi_new'] = "%s החברים החדשים"; // 5.0
$LNG['ssi_all'] = "כל האתרים"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "לוח בקרת משתמש"; // 5.0
$LNG['user_cp_login'] = "התחברות"; // 5.0
$LNG['user_cp_logout'] = "התנתקות"; // 5.0
$LNG['user_cp_welcome'] = "ברוך הבא ללוח בקרת המשתמש.  השתמש בקישורים מצד ימין כדי לנהל את חשבונך."; // 5.0
$LNG['user_cp_logout_message'] = "אתה מנותק עכשיו מלוח בקרת המשתמש."; // 5.0
$LNG['user_cp_login_long'] = "התחבר עם שם המשתמש שלך וסיסמתך או עם ה-OpenID שלך."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "לא ניתן למצוא את שרת ה-OpenID עבור %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "אתה חייב להצטרף לתחרות האתרים לפני שתוכל לגשת ללוח בקרת המשתמש."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "שגיאה התרחשה בעת עיבוד ההתחברות שלך.  בבקשה נסה שוב."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "אתה חייב לקבל גישה כדי להמשיך.  בבקשה נסה שוב."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "שגיאה מהשרת: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "אינך יכול לגשת ללוח בקרת המשתמש עד שאתרך יאושר.  אתה תקבל דואר אלקטרוני כשאתרך יאושר."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "אישור חברים חדשים"; // 5.0
$LNG['a_approve'] = "אישור"; // 4.0
$LNG['a_approve_none'] = "אין חברים הממתינים לאישור."; // 4.0
$LNG['a_approve_done'] = "החבר אושר."; // 4.0
$LNG['a_approve_dones'] = "החברים אושרו."; // 4.0
$LNG['a_approve_sel'] = "עם הנבחרים:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "אישור חברים ערוכים"; // 5.2.0
$LNG['a_approve_edited_none'] = "אין ערוכים שממתינים לאישור."; // 5.2.0
$LNG['a_approve_edited_old'] = "כותרת וכתובת קודמות"; // 5.2.0
$LNG['a_approve_edited_new'] = "כותרת וכתובת ערוכות"; // 5.2.0
$LNG['a_approve_edited_reject'] = "דחייה"; // 5.2.0
$LNG['a_approve_edited_done'] = "השינויים אושרו."; // 5.2.0
$LNG['a_approve_rejected_done'] = "השינויים נדחו."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "אישור ביקורות חדשות"; // 5.0
$LNG['a_approve_rev_none'] = "אין ביקורות הממתינות לאישור."; // 5.0
$LNG['a_approve_rev_done'] = "הביקורת אושרה."; // 5.0
$LNG['a_approve_rev_dones'] = "הביקורות אושרו."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "גיבוי בסיס נתונים"; // 5.2.0
$LNG['a_backup_warn'] = "זה ייצור גיבוי של החברים שלך, סטטיסטיקות והגדרות.  אם יש לך הרבה חברים, ייתכן שייקח הרבה זמן ואולי ייווצר קובץ גדול."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "יצירת עמוד מותאם אישית"; // 5.1.0
$LNG['a_create_page_id'] = "זיהוי עמוד - זה ישומש בתוך הכתובתL, ויכול להכיל רק אותיות, מספרים, קו תחתון, ומקפים"; // 5.1.0
$LNG['a_create_page_error_id'] = "זיהוי העמוד יכול להכיל רק אותיות, מספרים, קו תחתון, ומקפים.  בבקשה חזור אחורה ותקן את זיהוי העמוד."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "יש כבר עמוד מותאם אישית עם הזיהוי הזה.  בבקשה חזור אחורה ובחר זיהוי עמוד חדש."; // 5.1.0
$LNG['a_create_page_created'] = "העמוד נוצר.  אתה תצטרך להוסיף קישור ידנית אל %s בתוך wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "מחיקת חבר"; // 5.0
$LNG['a_del_headers'] = "מחיקת חברים"; // 5.0
$LNG['a_del_done'] = "החבר נמחק."; // 5.0
$LNG['a_del_dones'] = "החברים נמחקו."; // 5.0
$LNG['a_del_warn'] = "אתה בטוח שאתה רוצה למחוק את %s?"; // 5.0
$LNG['a_del_multi'] = "%s החברים האלה"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "מחיקת מילה מסוננת"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "מחיקת מילים מסוננות"; // 5.1.0
$LNG['a_del_bad_word_done'] = "המילה המסוננת נמחקה."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "המילים המסוננות נמחקו."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "אתה בטוח שאתה רוצה למחוק את %s מרשימת המילים המסוננות?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "%s המילים האלה"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "זיהוי מילה מסוננת לא תקין.  בבקשה נסה שוב."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "מחיקת רשומה מהרשימה שחורה"; // 5.2.0
$LNG['a_del_ban_headers'] = "מחיקת רשומות מהרשימה שחורה"; // 5.2.0
$LNG['a_del_ban_done'] = "רשומת הרשימה השחורה נמחקה."; // 5.2.0
$LNG['a_del_ban_dones'] = "רשומות הרשימה השחורה נמחקו."; // 5.2.0
$LNG['a_del_ban_warn'] = "אתה בטוח שאתה רוצה למחוק את %s מהרשימה השחורה?"; //5.2.0
$LNG['a_del_ban_multi'] = "%s הרשומות האלה"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "מספר הזיהוי של הרשימה השחורה לא תקין.  בבקשה נסה שוב."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "מחיקת עמוד מותאם אישית"; // 5.1.0
$LNG['a_del_page_headers'] = "מחיקת עמודים מותאמים אישית"; // 5.1.0
$LNG['a_del_page_done'] = "העמוד המותאם אישית נמחק."; // 5.1.0
$LNG['a_del_page_dones'] = "העמודים המותאמים אישית נמחקו."; // 5.1.0
$LNG['a_del_page_warn'] = "אתה בטוח שאתה רוצה למחוק את %s?"; //5.1.0
$LNG['a_del_page_multi'] = "%s העמודים האלה"; //5.1.0
$LNG['a_del_page_invalid_id'] = "זיהוי עמוד מותאם אישית לא תקין.  בבקשה נסה שוב."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "מחיקת ביקורת"; // 5.0
$LNG['a_del_rev_headers'] = "מחיקת ביקורות"; // 5.0
$LNG['a_del_rev_done'] = "הביקורת נמחקה."; // 5.0
$LNG['a_del_rev_dones'] = "הביקורות נמחקו."; // 5.0
$LNG['a_del_rev_warn'] = "אתה בטוח שאתה רוצה למחוק את הביקורת הזו?"; //5.0
$LNG['a_del_rev_warns'] = "אתה בטוח שאתה רוצה למחוק את הביקורות האלה?"; //5.0
$LNG['a_del_rev_invalid_id'] = "זיהוי ביקורת לא תקין.  בבקשה נסה שוב."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "עריכת חבר"; // 5.0
$LNG['a_edit_site_is'] = "האתר הזה הוא"; // 4.0
$LNG['a_edit_active'] = "פעיל (נמצא ברשימה)"; // 4.0
$LNG['a_edit_inactive'] = "לא פעיל (לא נמצא ברשימה)"; // 5.0
$LNG['a_edit_edited'] = "החבר נערך.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "עריכת מילה מסוננת"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "המילה המסוננת נערכה."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "עריכת רשומה מהרשימה השחורה"; // 5.2.0
$LNG['a_edit_ban_edited'] = "הרשומה מהרשימה השחורה נערכה."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "עריכת עמוד מותאם אישית"; // 5.1.0
$LNG['a_edit_page_content'] = "תוכן - אתה יכול להשתמש ב-HTML כאן"; // 5.1.0
$LNG['a_edit_page_edited'] = "העמוד נערך."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "עריכת ביקורת"; // 5.0
$LNG['a_edit_rev_edited'] = "הביקורת נערכה.";

// Admin > Email Members
$LNG['a_email_header'] = "שליחת דואר אלקטרוני לחברים"; // 5.0
$LNG['a_email_subject'] = "נושא"; // 4.2.0
$LNG['a_email_message'] = "הודעה"; // 4.2.0
$LNG['a_email_msg_sent'] = "דואר אלקטרוני נשלח אל %s"; // 5.0
$LNG['a_email_not_sent'] = "דואר אלקטרוני לא נשלח אל %s"; // 5.0
$LNG['a_email_sent'] = "דואר אלקטרוני נשלח אל %s חברים."; // 4.2.0
$LNG['a_email_failed'] = "דואר אלקטרוני לא נשלח אל%s חברים."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "אתה מנותק מניהול המערכת."; // 5.0

// Admin > Main
$LNG['a_header'] = "מנהל מערכת"; // 5.0
$LNG['a_main'] = "ברוך הבא אל ניהול המערכת.  השתמש בקישורים מצד ימין כדי לנהל את רשימת תחרות האתרים שלך."; // 5.0
$LNG['a_main_approve'] = "יש אתר אחד ממתין לאישור."; // 5.0
$LNG['a_main_approves'] = "יש %s אתרים ממתינים לאישור."; // 5.0
$LNG['a_main_approve_edit'] = "יש עריכת אתר אחד שממתין לאישור."; // 5.2.0
$LNG['a_main_approve_edits'] = "ישנם %s עריכות אתרים שממתינים לאישור."; // 5.2.0
$LNG['a_main_approve_rev'] = "יש ביקורת אחת ממתינה לאישור."; // 5.0
$LNG['a_main_approve_revs'] = "יש %s ביקורות ממתינות לאישור."; // 5.0
$LNG['a_main_your'] = "הגירסה שלך"; // 5.0
$LNG['a_main_latest'] = "הגירסה הכי חדשה"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">אתר האינטרנט של Aardvark Topsites PHP</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "ניהול חברים"; // 5.0
$LNG['a_man_actions'] = "פעולות"; // 4.2.0
$LNG['a_man_edit'] = "עריכה"; // 4.2.0
$LNG['a_man_delete'] = "מחיקה"; // 4.2.0
$LNG['a_man_email'] = "דואר אלקטרוני"; // 4.2.0
$LNG['a_man_all'] = "בחר הכול"; // 5.0
$LNG['a_man_none'] = "בחר כלום"; // 5.0
$LNG['a_man_del_sel'] = "מחיקת נבחרים"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "מסנן גסויות"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "הכנס מילה ואת התחליף שלה למטה.  לדוגמה, אתה יכול להכניס \"hell\" בשדה המילה ו-\"h***\" בשדה התחליף."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "התאמה מדויקת תתאים רק את המילה המדויקת.  התאמה כוללת תתאים כל דבר שמכיל את המילה.  לכן, התאמה כוללת של \"hell\" תתאים גם ל-\"shell\" ו-\"hello\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "מילה"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "תחליף"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "התאמה"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "מדויקת"; // 5.1.0
$LNG['a_man_bad_words_global'] = "כוללת"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "סינון מילה"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "המילה \"%s\" נוספה למסנן הגסויות."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "רשימה שחורה"; // 5.2.0
$LNG['a_man_ban_instructions'] = "כדי לחסום אתרים ומשתמשים מרשימת תחרות האתרים שלך, מלא את הטופס שלמטה.  כשחבר מצטרף, הכתובת, כתובת דואר אלקטרוני, שם משתמש, וכתובת ה-IP נבדקים.  כשאתר נערך, הכתובת וכתובת הדואר האלקטרוני נבדקות.<br /><br />הרשימה השחורה לא תשפיע על החברים הקיימים שלך."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "התאמה מדויקת תתאים רק למחרוזת המדויקת.  התאמה כללית תתאים לכל דבר שמכיל את המחרוזת.  לכן, התאמה כללית של http://www.yahoo.com/ תתאים לכל עמוד עם http://www.yahoo.com/ בכתובת, בזמן שהתאמה מדויקת של http://www.yahoo.com/ תתאים רק לכתובת המדויקת הזאת."; // 5.2.0
$LNG['a_man_ban_string'] = "מחרוזת"; // 5.2.0
$LNG['a_man_ban_field'] = "שדה"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" נוספה לרשימה השחורה."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "ניהול עמודים מותאמים אישית"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "ניהול ביקורות"; // 5.0
$LNG['a_man_rev_enter'] = "כדי לנהל את הביקורות של אתר, הכנס את שם המשתמש של החבר למטה."; // 5.0
$LNG['a_man_rev_id'] = "זיהוי"; // 5.0
$LNG['a_man_rev_rev'] = "ביקורת"; // 5.0
$LNG['a_man_rev_date'] = "תאריך"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "תפריט";
$LNG['a_menu_main'] = "ראשי"; // 5.0
$LNG['a_menu_approve'] = "אישור חברים חדשים";
$LNG['a_menu_approve_edits'] = "אישור חברים ערוכים"; // 5.2.0
$LNG['a_menu_manage'] = "ניהול חברים"; // 4.2.0
$LNG['a_menu_settings'] = "שינוי הגדרות"; // 5.0
$LNG['a_menu_manage_bad_words'] = "מסנן גסויות"; // 5.1.0
$LNG['a_menu_manage_ban'] = "רשימה שחורה"; // 5.2.0
$LNG['a_menu_backup'] = "גיבוי בסיס נתונים"; // 5.2.0
$LNG['a_menu_skins'] = "עיצובים וקטגוריות"; // 5.0
$LNG['a_menu_approve_reviews'] = "אישור ביקורות חדשות"; // 5.0
$LNG['a_menu_manage_reviews'] = "ניהול ביקורות"; // 5.0
$LNG['a_menu_email'] = "דואר אלקטרוני לחברים";
$LNG['a_menu_delete_review'] = "מחיקת ביקורת";
$LNG['a_menu_logout'] = "התנתקות";
$LNG['a_menu_delete'] = "מחיקת חבר";
$LNG['a_menu_edit'] = "עריכת חבר";
$LNG['a_menu_create_page'] = "יצירת עמוד מותאם אישית"; // 5.1.0
$LNG['a_menu_manage_pages'] = "ניהול עמודים מותאמים אישית"; // 5.1.0
$LNG['a_header_members'] = "חברים"; // 5.0
$LNG['a_header_settings'] = "הגדרות"; // 5.0
$LNG['a_header_tools'] = "כלים"; // 5.2.0
$LNG['a_header_reviews'] = "ביקורות"; // 5.0
$LNG['a_header_pages'] = "עמודים מותאמים אישית"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "שינוי הגדרות";
$LNG['a_s_help'] = "עזרה"; // 5.1.0

$LNG['a_s_general'] = "הגדרות כלליות";
$LNG['a_s_admin_password'] = "סיסמת מנהל המערכת";
$LNG['a_s_list_name'] = "שם רשימת תחרות האתרים שלך";
$LNG['a_s_list_url'] = "כתובת לתיקיית תחרות האתרים";
$LNG['a_s_default_language'] = "שפת ברירת מחדל";
$LNG['a_s_your_email'] = "כתובת הדואר האלקטרוני שלך";

$LNG['a_s_sql'] = "הגדרות SQL";
$LNG['a_s_sql_type'] = "סוג בסיס נתונים"; // 4.1.0
$LNG['a_s_sql_host'] = "מאחסן";
$LNG['a_s_sql_database'] = "בסיס נתונים";
$LNG['a_s_sql_username'] = "שם משתמש";
$LNG['a_s_sql_password'] = "סיסמה";

$LNG['a_s_ranking'] = "הגדרות דירוג";
$LNG['a_s_num_list'] = "מספר של חברים להציג בכל עמוד"; // 5.0
$LNG['a_s_ranking_period'] = "משך הדירוג"; // 5.0
$LNG['a_s_ranking_method'] = "שיטת הדירוג"; // 5.0
$LNG['a_s_ranking_average'] = "דירוג לפי ממוצע או רק על ידי %s"; // 5.0
$LNG['a_s_featured_member'] = 'חבר הרגע - אתה חייב להוסיף {$featured_member} אל wrapper.html אחרי שתפעיל תכונה זו.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "מספר של חברים לשימוש בעיצוב _top עבור";
$LNG['a_s_ad_breaks'] = "הצג פירסומות לאחר דירוגים אלה (הפרד עם פסיקים) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "מילוי שורות ריקות עם הודעה שאומרת \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "הגדרות חבר";
$LNG['a_s_active_default'] = "דרישה מחברים חדשים להיות מאושרים לפני שיופיעו ברשימה";
$LNG['a_s_active_default_review'] = "דרישה מביקורות חדשות להיות מאושרות לפני שיופיעו ברשימה";
$LNG['a_s_delete_after'] = "מחיקת חברים לא פעילים לאחר מספר הימים האלה (קבע כ-0 כדי לכבות)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "שליחת דואר אלקטרוני למנהל המערכת כשחבר חדש מצטרף"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "שליחת דואר אלקטרוני למנהל המערכת כשמתפרסמת ביקורת חדשה"; // 5.1.0
$LNG['a_s_max_banner_width'] = "רוחב מירבי של באנר החבר (קבע כ-0 כדי לכבות)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "גובה מירבי של באנר החבר (קבע כ-0 כדי לכבות)"; // 4.2.0
$LNG['a_s_default_banner'] = "באנר ברירת המחדל עבור חברים שלא מספקים אחד";

$LNG['a_s_button'] = "הגדרות כפתור";
$LNG['a_s_ranks_on_buttons'] = "דירוגים על כפתורים -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "כפתורי סטטיסטיקה"; // 4.2.0
$LNG['a_s_button_url'] = "אם כן/לא - כתובת לכפתור ברירת המחדל שאתה רוצה שיופיע באתרי החברים"; // 4.0
$LNG['a_s_button_dir'] = "אם כן - כתובת לתיקיה שבה נמצאים הכפתורים"; // 4.0
$LNG['a_s_button_ext'] = "אם כן - סיומת של הכפתורים (gif, png, jpg, וכדומה.)"; // 4.0
$LNG['a_s_button_num'] = "אם כן - מספר של כפתורים שיצרת"; // 4.0
$LNG['a_s_google_friendly_links'] = "קישורים ידידותיים ל-Google - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "עמוד מעבר כדי למנוע רמאויות של הצבעות";
$LNG['a_s_captcha'] = "מילת אימות בהצטרפות (הגנה נגד אנשים מציפים) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_answer'] = "תשובה"; // 5.2.0

$LNG['a_s_other'] = "הגדרות אחרות";
$LNG['a_s_search'] = "חיפוש";
$LNG['a_s_time_offset'] = "מרחב זמן מהשרת שלך (בשעות)";

$LNG['a_s_on'] = "מופעל(ת)";
$LNG['a_s_off'] = "כבוי(ה)";
$LNG['a_s_days'] = "Days";
$LNG['a_s_months'] = "חודשים";
$LNG['a_s_weeks'] = "שבועות"; // 4.2.0
$LNG['a_s_yes'] = "כן";
$LNG['a_s_no'] = "לא";
$LNG['a_s_answer'] = "תשובה"; // 5.2.0

$LNG['a_s_updated'] = "ההגדרות שלך עודכנו.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "עיצובים וקטגוריות"; // 5.0
$LNG['a_skins_default'] = "עיצוב ברירת מחדל"; // 5.0
$LNG['a_skins_set_default'] = "קביעת עיצוב ברירת מחדל"; // 5.0
$LNG['a_skins_anon'] = "אלמוני"; // 5.0
$LNG['a_skins_default_done'] = "עיצוב ברירת המחדל נקבע."; // 5.0
$LNG['a_skins_categories_done'] = "עיצובי הקטגוריה נקבעו."; // 5.0
$LNG['a_skins_new_category_done'] = "הקטגוריה החדשה נוצרה."; // 5.0
$LNG['a_skins_delete_done'] = "הקטגוריה נמחקה."; // 5.0
$LNG['a_skins_delete_error'] = "הקטגוריה לא ניתנת למחיקה בגלל שחייבת להיות לך לפחות קטגוריה אחת."; // 5.1.0
$LNG['a_skins_edit_done'] = "הקטגוריה נערכה."; // 5.0
$LNG['a_skins_invalid_skin'] = "עיצוב לא תקין: %s.  בבקשה נסה שוב."; // 5.0
$LNG['a_skins_categories'] = "קטגוריות"; // 5.0
$LNG['a_skins_new_category'] = "יצירת קטגוריה חדשה"; // 5.0
$LNG['a_skins_set_skins'] = "קביעת עיצובי קטגוריה"; // 5.0
$LNG['a_skins_edit_category'] = "עריכת קטגוריה"; // 5.0
$LNG['a_skins_category_name'] = "שם קטגוריה"; // 5.0
$LNG['a_skins_diff_skins'] = "אם אתה רוצה להשתמש בעיצובים שונים עבור קטגוריות שונות, בחר אותם למטה."; // 5.0
?>
