<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2006 Jeremy Scheff.  All rights reserved.              \\
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
  die("這檔案不可被直接執行。");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Chinese (Traditional) (繁體中文)';
$translator_name = 'Wisley Chun';
$translator_email = 'wisley.chun@gmail.com';
$translator_url = 'http://www.wisley.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "utf-8";

// Global
$LNG['g_form_submit_short'] = "確定";
$LNG['g_username'] = "用戶名稱";
$LNG['g_url'] = "網址";
$LNG['g_title'] = "標題";
$LNG['g_description'] = "簡介";
$LNG['g_category'] = "分類"; // 4.1.0
$LNG['g_email'] = "電郵";
$LNG['g_banner_url'] = "圖片位址";
$LNG['g_password'] = "密碼";
$LNG['g_average'] = "平均";
$LNG['g_today'] = "今日";
$LNG['g_yesterday'] = "昨日";
$LNG['g_daily'] = "每日"; // 5.0
$LNG['g_this_month'] = "本月"; // 5.0
$LNG['g_last_month'] = "上月"; // 5.0
$LNG['g_monthly'] = "每月"; // 5.0
$LNG['g_this_week'] = "本星期"; // 5.0
$LNG['g_last_week'] = "上星期"; // 5.0
$LNG['g_weekly'] = "每星期"; // 5.0
$LNG['g_pv'] = '流量(PV)'; // 5.0
$LNG['g_overall'] = '全部'; // 5.0
$LNG['g_in'] = '流入'; // 5.0
$LNG['g_out'] = '流出'; // 5.0
$LNG['g_unq_pv'] = "獨立流量"; // 5.0
$LNG['g_tot_pv'] = "總流量"; // 5.0
$LNG['g_unq_in'] = "獨立流入量"; // 5.0
$LNG['g_tot_in'] = "總流入量"; // 5.0
$LNG['g_unq_out'] = "獨立流出量"; // 5.0
$LNG['g_tot_out'] = "總流出量"; // 5.0
$LNG['g_invalid_u_or_p'] = "用戶名稱或密碼無效！請再嘗試。"; // 5.0
$LNG['g_invalid_u'] = "用戶名稱無效！請再嘗試。"; // 5.0
$LNG['g_invalid_p'] = "密碼無效！請再嘗試。"; // 5.0
$LNG['g_session_expired'] = "你的session已過期！請再嘗試。"; // 5.0
$LNG['g_error'] = "錯誤！！！"; // 5.0
$LNG['g_delete_install'] = "基於安全理由，執行本程式前，必須先刪去 'install' 錄目。"; // 5.0

// 編輯Account
$LNG['edit_header'] = "編輯帳號";
$LNG['edit_info_edited'] = "你的帳號已被成功編輯。";
$LNG['edit_password_blank'] = "如不需要更改密碼，此處請留空"; // 4.0

// 中轉頁 Gateway Page
$LNG['gateway_header'] = "排行榜中轉頁";
$LNG['gateway_text'] = "為了防止作弊, 加設一中轉頁。請按下連結進入排行榜網站。";
$LNG['gateway_vote'] = "立即進入，並進行投票。";
$LNG['gateway_no_vote'] = "立即進入，但不需要投票。"; // 5.0

// 安裝 Install
$LNG['install_header'] = "安裝";
$LNG['install_welcome'] = "歡迎來到Aardvark Topsites PHP 5。填寫以下表格安裝此程式。";
$LNG['install_sql_prefix'] = "資料表前置字串 - 同一數據庫安裝多個排行榜時才需要更改。";
$LNG['install_error_chmod'] = "不能寫入settings_sql.php。請確定settings_sql.php的權限為666。";
$LNG['install_error_sql'] = "不能連接到SQL資料庫。請回上頁並檢查你的SQL資料庫設置。";
$LNG['install_done'] = "你的排行榜網站已經成功安裝。請刪除本 'install' 目錄。";
$LNG['install_your'] = "你的網站";
$LNG['install_admin'] = "管理員控制台";
$LNG['install_manual'] = "使用者手冊(只有英文版)";
$LNG['upgrade_header'] = "升級";
$LNG['upgrade_welcome'] = "歡迎來到Aardvark Topsites PHP 5。在你升級之前，請記得備份你的資料。";
$LNG['upgrade_version'] = "請確定你是由%s版本升級。"; // 5.1.0
$LNG['upgrade_error_version'] = "此升級只支持Aardvark Topsites PHP 4.1.0 或以上的版本。";
$LNG['upgrade_done'] = "你的排行榜網站已被升級，請立即刪除此安裝目錄。";

// Join
$LNG['join_header'] = "加入";
$LNG['join_enter_text'] = "輸入以下圖中的文字:"; // 4.2.2
$LNG['join_user'] = "用戶資料"; // 5.0
$LNG['join_website'] = "網站資料"; // 5.0
$LNG['join_error_username'] = "請輸入一個有效的用戶名稱: 只可使用英文字母、數目字、’_’和’-。"; // 5.0
$LNG['join_error_username_duplicate'] = "請輸入一個有效的用戶名稱: 你所選的用戶名稱已被使用了。"; // 5.0
$LNG['join_error_url'] = "請輸入一個有效的網址。";
$LNG['join_error_email'] = "請輸入一個有效的電郵地址。";
$LNG['join_error_title'] = "請輸入你的網站標題。";
$LNG['join_error_password'] = "請輸入一個密碼。";
$LNG['join_error_urlbanner'] = "請輸入一個有效的圖片，如果沒有，請留空。尺寸必須小於"; // 4.0
$LNG['join_error_time'] = "不要重新整理這’加入確認頁’。"; // 4.2.0
$LNG['join_error_captcha'] = "你輸入的文字與圖中的不匹配。"; // 4.2.2
$LNG['join_thanks'] = "謝謝加入!  請將以下代碼放在你的網站以作被排名之用。";
$LNG['join_change_warning'] = "如果你改變了這代碼，可能會導致失效。";
$LNG['join_welcome'] = "歡迎來到%s";
$LNG['join_welcome_admin'] = "一位新會員已加入你的排行榜網站。";
$LNG['join_approve'] = "你的網站經過管理員審核後，便會被列出。"; // 5.1.0
$LNG['join_type'] = "帳戶類別"; // 5.1.0
$LNG['join_standard'] = "標準"; // 5.1.0

// 連結代碼
$LNG['link_code_header'] = "連結代碼"; // 5.0

// 遺失密碼
$LNG['lost_pw_header'] = "遺失密碼"; // 5.0
$LNG['lost_pw_forgot'] = "忘記你的密碼?"; // 5.0
$LNG['lost_pw_get'] = "取回密碼"; // 5.0
$LNG['lost_pw_emailed'] = "請檢查你的電郵以得進一步指示。"; // 5.0
$LNG['lost_pw_email'] = "如需為你的網站選擇一個新密碼，請到以下網址:"; // 5.0
$LNG['lost_pw_new'] = "輸入一個新密碼"; // 5.0
$LNG['lost_pw_set_new'] = "設置新密碼"; // 5.0
$LNG['lost_pw_finish'] = "你的密碼已被設置為你剛才的新密碼。"; // 5.0

// Main Page
$LNG['main_header'] = "排行榜"; // 5.0
$LNG['main_all'] = "所有網站"; // 4.2.0
$LNG['main_method'] = "排行方式";
$LNG['main_members'] = "會員";
$LNG['main_menu_rankings'] = "排行榜";
$LNG['main_menu_join'] = "加入";
$LNG['main_menu_random'] = "隨機會員";
$LNG['main_menu_search'] = "搜尋";
$LNG['main_menu_lost_code'] = "遺失代碼"; // 5.0
$LNG['main_menu_lost_password'] = "遺失密碼"; // 5.0
$LNG['main_menu_edit'] = "編輯會員資料";
$LNG['main_menu_user_cp'] = "用戶控制台"; // 5.0
$LNG['main_featured'] = "特別會員"; // 4.0.2
$LNG['main_executiontime'] = "執行時間"; // 4.0
$LNG['main_queries'] = "SQL 查詢"; // 4.0
$LNG['main_powered'] = "製作";
$LNG['main_menu_home'] = "主頁";

// 排行 Table
$LNG['table_stats'] = "統計";
$LNG['table_unique'] = "獨立";
$LNG['table_total'] = "總數";
$LNG['table_rank'] = "排行";
$LNG['table_title'] = "標題"; // 4.0
$LNG['table_description'] = "簡介"; // 4.0
$LNG['table_movement'] = "走勢";
$LNG['table_up'] = "上升"; // 5.0
$LNG['table_down'] = "下跌"; // 5.0
$LNG['table_neutral'] = "沒升跌"; // 5.0

// 評級及評論
$LNG['rate_header'] = "評級及評論";
$LNG['rate_rating'] = "評級";
$LNG['rate_review'] = "評論 - 不可使用 HTML"; // 5.0
$LNG['rate_thanks'] = "謝謝你的評級。";
$LNG['rate_error'] = "你已評級此網站。";
$LNG['rate_back'] = "回到統計";
$LNG['rate_email_admin'] = "一個新的評論已被發貼到你的排行榜網站。"; // 5.1.0

// 搜尋 Search
$LNG['search_header'] = "搜尋";
$LNG['search_off'] = "搜尋功能已被停用。";
$LNG['search_no_sites'] = "對不起，找不到乎合你要求的網站。"; // 5.0
$LNG['search_prev'] = "上頁"; // 3.2.1
$LNG['search_next'] = "下頁"; // 3.2.1
$LNG['search_displaying_results'] = "列出第 %s - %s 個 (總共有 %s 個) 符合 <b>%s</b> 的查詢結果。"; // 5.1.0

// 統計 Stats
$LNG['stats_header'] = "統計";
$LNG['stats_info'] = "用戶資料";
$LNG['stats_member_since'] = "登記日期"; // 5.0
$LNG['stats_rating_avg'] = "平均評級";
$LNG['stats_rating_num'] = "評級次數";
$LNG['stats_rate'] = "評級及評論此網站";
$LNG['stats_reviews'] = "評論";
$LNG['stats_allreviews'] = "顯示所有評論"; // 4.0
$LNG['stats_week'] = "星期"; // 5.0
$LNG['stats_highest'] = "最高"; // 5.0

// ssi.php
$LNG['ssi_top'] = "最高 %s 網站"; // 4.0
$LNG['ssi_new'] = "%s 新會員"; // 5.0
$LNG['ssi_all'] = "所有網站"; // 4.0

// 用戶控制台 // 5.0
$LNG['user_cp_header'] = "用戶控制台"; // 5.0
$LNG['user_cp_login'] = "登入"; // 5.0
$LNG['user_cp_logout'] = "登出"; // 5.0
$LNG['user_cp_welcome'] = "歡迎來到用戶控制台。請用左面的連結管理你的帳號。"; // 5.0
$LNG['user_cp_logout_message'] = "你正在登出用戶控制台。"; // 5.0
$LNG['user_cp_login_long'] = "請用你的用戶名稱及密碼，或你的 OpenID 登錄。"; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "在%s伺服中找不到 OpenID。"; // 5.1.0
$LNG['user_cp_openid_error_join'] = "使用用戶控制台之前，必須加入本站。"; // 5.1.0
$LNG['user_cp_openid_error_general'] = "在你的登錄過程中，出現一個錯誤！請再嘗試。"; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "你必須同意繼續進行。請再嘗試。"; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "伺服錯誤：%s"; // 5.1.0

// 管理員控制台 > 審核新會員 // 4.0
$LNG['a_approve_header'] = "審核新會員"; // 5.0
$LNG['a_approve'] = "批准"; // 4.0
$LNG['a_approve_none'] = "沒有會員等候審核。"; // 4.0
$LNG['a_approve_done'] = "這會員已被審核。"; // 4.0
$LNG['a_approve_dones'] = "這些會員已被審核。"; // 4.0
$LNG['a_approve_sel'] = "已選取:"; // 5.0

// 管理員控制台 > 審核新評論 // 5.0
$LNG['a_approve_rev_header'] = "審核新評論"; // 5.0
$LNG['a_approve_rev_none'] = "沒有評論等候審核。"; // 5.0
$LNG['a_approve_rev_done'] = "這評論已被審核。"; // 5.0
$LNG['a_approve_rev_dones'] = "這些評論已被審核。"; // 5.0

// 管理員控制台 > 建立自建頁面 // 5.1.0
$LNG['a_create_page_header'] = "建立自建頁面"; // 5.1.0
$LNG['a_create_page_id'] = "Page ID - 這將會在網址中使用, 所以只可使用英文字母、數目字、’_’和’-。"; // 5.1.0
$LNG['a_create_page_error_id'] = "page ID 只可使用英文字母、數目字、’_’和’-。  請回上頁並更改 page ID。"; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "自建頁面的page ID已存在。請回上頁並選擇一個新的 page ID。"; // 5.1.0
$LNG['a_create_page_created'] = "該頁已被設立。你需人手在 wrapper.html 增加一個 %s 的連結。"; // 5.1.0

// 管理員控制台 > 刪除會員
$LNG['a_del_header'] = "刪除會員"; // 5.0
$LNG['a_del_headers'] = "刪除會員"; // 5.0
$LNG['a_del_done'] = "這會員已被刪除。"; // 5.0
$LNG['a_del_dones'] = "這些會員已被刪除。"; // 5.0
$LNG['a_del_warn'] = "你是否想要刪除%s?"; // 5.0
$LNG['a_del_multi'] = "這些%s會員"; //5.0

// 管理員控制台 > 刪除Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "刪除已過濾詞語"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "刪除已過濾詞語s"; // 5.1.0
$LNG['a_del_bad_word_done'] = "這已過濾詞語已被刪除。"; // 5.1.0
$LNG['a_del_bad_word_dones'] = "這些已過濾詞語已被刪除。"; // 5.1.0
$LNG['a_del_bad_word_warn'] = "你是否想要由已過濾詞語刪除%s?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "那些%s詞語"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "已過濾詞語ID無效！請再嘗試。"; // 5.1.0

// 管理員控制台 > 刪除自建頁面 // 5.1.0
$LNG['a_del_page_header'] = "刪除自建頁面"; // 5.1.0
$LNG['a_del_page_headers'] = "刪除自建頁面"; // 5.1.0
$LNG['a_del_page_done'] = "這自建頁面已被刪除。"; // 5.1.0
$LNG['a_del_page_dones'] = "這些自建頁面已被刪除。"; // 5.1.0
$LNG['a_del_page_warn'] = "你是否想要刪除%s?"; //5.1.0
$LNG['a_del_page_multi'] = "這些%s頁面"; //5.1.0
$LNG['a_del_page_invalid_id'] = "自建頁面ID無效！請再嘗試。"; // 5.1.0

// 管理員控制台 > 刪除評論 // 5.0
$LNG['a_del_rev_header'] = "刪除評論"; // 5.0
$LNG['a_del_rev_headers'] = "刪除評論"; // 5.0
$LNG['a_del_rev_done'] = "這評論已被刪除。"; // 5.0
$LNG['a_del_rev_dones'] = "這些評論已被刪除。"; // 5.0
$LNG['a_del_rev_warn'] = "你是否想要刪除這評論?"; //5.0
$LNG['a_del_rev_warns'] = "你是否想要刪除這些評論?"; //5.0
$LNG['a_del_rev_invalid_id'] = "評論 ID無效！請再嘗試。"; // 5.0

// 管理員控制台 > 編輯會員
$LNG['a_edit_header'] = "編輯會員"; // 5.0
$LNG['a_edit_site_is'] = "這網站是"; // 4.0
$LNG['a_edit_active'] = "活躍 (已列出)"; // 4.0
$LNG['a_edit_inactive'] = "不活躍 (沒列出)"; // 5.0
$LNG['a_edit_edited'] = "這會員已被編輯。";

// 管理員控制台 > 編輯不良詞語 // 5.1.0
$LNG['a_edit_bad_word_header'] = "編輯已過濾詞語"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "這已過濾詞語已被編輯。"; // 5.1.0

// 管理員控制台 > 編輯自建頁面 // 5.1.0
$LNG['a_edit_page_header'] = "編輯自建頁面"; // 5.1.0
$LNG['a_edit_page_content'] = "內容 - 你可在此使用 HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "這頁面已被編輯。"; // 5.1.0

// 管理員控制台 > 編輯評論 // 5.0
$LNG['a_edit_rev_header'] = "編輯評論"; // 5.0
$LNG['a_edit_rev_edited'] = "該評論已被編輯。";

// 管理員控制台 > 發電郵給會員
$LNG['a_email_header'] = "發電郵給會員"; // 5.0
$LNG['a_email_subject'] = "主題"; // 4.2.0
$LNG['a_email_message'] = "內容"; // 4.2.0
$LNG['a_email_msg_sent'] = "一封電郵已被發給%s"; // 5.0
$LNG['a_email_not_sent'] = "有一封電郵不能發給%s"; // 5.0
$LNG['a_email_sent'] = "%s 會員成功發出。"; // 4.2.0
$LNG['a_email_failed'] = "%s 會員不能發出。"; // 4.2.0

// 管理員控制台 > Logout
$LNG['a_logout_message'] = "你正在登出管理員控制台。"; // 5.0

// 管理員控制台 > Main
$LNG['a_header'] = "管理員控制台"; // 5.0
$LNG['a_main'] = "歡迎來到管理員控制台。請用左面的連結管理你的排行榜網站。"; // 5.0
$LNG['a_main_approve'] = "現有(1)個網站正等待審核。"; // 5.0
$LNG['a_main_approves'] = "現有(%s)個網站正等待審核。"; // 5.0
$LNG['a_main_approve_rev'] = "現有(1)個評論正等待審核。"; // 5.0
$LNG['a_main_approve_revs'] = "現有(%s)個評論正等待審核。"; // 5.0
$LNG['a_main_your'] = "你的版本"; // 5.0
$LNG['a_main_latest'] = "最新版本"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// 管理員控制台 > 管理會員
$LNG['a_man_header'] = "管理會員"; // 5.0
$LNG['a_man_actions'] = "執行"; // 4.2.0
$LNG['a_man_edit'] = "編輯"; // 4.2.0
$LNG['a_man_delete'] = "刪除"; // 4.2.0
$LNG['a_man_email'] = "電郵"; // 4.2.0
$LNG['a_man_all'] = "全部選取"; // 5.0
$LNG['a_man_none'] = "取消選取"; // 5.0
$LNG['a_man_del_sel'] = "刪除已選取"; // 5.0

// 管理員控制台 > 管理不良詞語 // 5.1.0
$LNG['a_man_bad_words_header'] = "過濾不良詞語"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "在下面輸入一個不良詞語及其取代詞語。例如，你可以在不良詞語欄位輸入\"hell\"，並在取代詞語欄位輸入 \"h***\"。"; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "用精確匹配方式只會找出完匹配的詞語。而用一般匹配方式，會找出含有不良詞語的詞語，所以用如\"hell\"，\"shell\" 和\"hello\"也視作匹配。"; // 5.1.0
$LNG['a_man_bad_words_word'] = "不良詞語"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "取代詞語"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "匹配方式"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "精確"; // 5.1.0
$LNG['a_man_bad_words_global'] = "一般"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "過濾詞語"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\"已被新增致過濾詞語。"; // 5.1.0

// 管理員控制台 > 管理自建頁面 // 5.1.0
$LNG['a_man_pages_header'] = "管理自建頁面"; // 5.1.0

// 管理員控制台 > 管理評論 // 5.0
$LNG['a_man_rev_header'] = "管理評論"; // 5.0
$LNG['a_man_rev_enter'] = "如須管理某網站的評論, 在下面輸入該會員的用戶名稱。"; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "評論"; // 5.0
$LNG['a_man_rev_date'] = "日期"; // 5.0

// 管理員控制台 > 目錄 Menu
$LNG['a_menu'] = "目錄";
$LNG['a_menu_main'] = "主頁"; // 5.0
$LNG['a_menu_approve'] = "審核新會員";
$LNG['a_menu_manage'] = "管理會員"; // 4.2.0
$LNG['a_menu_settings'] = "更改設置"; // 5.0
$LNG['a_menu_manage_bad_words'] = "詞語過濾"; // 5.1.0
$LNG['a_menu_skins'] = "外觀及分類"; // 5.0
$LNG['a_menu_approve_reviews'] = "審核新評論"; // 5.0
$LNG['a_menu_manage_reviews'] = "管理評論"; // 5.0
$LNG['a_menu_email'] = "電郵會員";
$LNG['a_menu_delete_review'] = "刪除評論";
$LNG['a_menu_logout'] = "登出";
$LNG['a_menu_delete'] = "刪除會員";
$LNG['a_menu_edit'] = "編輯會員";
$LNG['a_menu_create_page'] = "建立自建頁面"; // 5.1.0
$LNG['a_menu_manage_pages'] = "管理自建頁面"; // 5.1.0
$LNG['a_header_members'] = "會員"; // 5.0
$LNG['a_header_settings'] = "設置"; // 5.0
$LNG['a_header_reviews'] = "評論"; // 5.0
$LNG['a_header_pages'] = "自建頁面"; // 5.1.0

// 管理員控制台 > 設置 Settings
$LNG['a_s_header'] = "更改設置";
$LNG['a_s_help'] = "幫助"; // 5.1.0

$LNG['a_s_general'] = "基本設置";
$LNG['a_s_admin_password'] = "管理員密碼";
$LNG['a_s_list_name'] = "網站名稱";
$LNG['a_s_list_url'] = "網址";
$LNG['a_s_default_language'] = "預設語言";
$LNG['a_s_your_email'] = "你的電郵地址";

$LNG['a_s_sql'] = "SQL資料庫設置";
$LNG['a_s_sql_type'] = "資料庫類型"; // 4.1.0
$LNG['a_s_sql_host'] = "主機";
$LNG['a_s_sql_database'] = "資料庫名稱";
$LNG['a_s_sql_username'] = "使用者名稱";
$LNG['a_s_sql_password'] = "密碼";

$LNG['a_s_ranking'] = "排名設置";
$LNG['a_s_num_list'] = "每頁列出會員人數"; // 5.0
$LNG['a_s_ranking_period'] = "排名排行週期"; // 5.0
$LNG['a_s_ranking_method'] = "排行方式"; // 5.0
$LNG['a_s_ranking_average'] = "以平均排行或以%s排行"; // 5.0
$LNG['a_s_featured_member'] = "特別會員 - 開啟後，你需要人手加入{\$featured_member}到 wrapper.html。"; // 4.1.0
$LNG['a_s_top_skin_num'] = "會員可用的外觀數目";
$LNG['a_s_ad_breaks'] = "在排行後顯示廣告 (以逗號分隔) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_member'] = "會員設置";
$LNG['a_s_active_default'] = "新會員列出前，需要被審核";
$LNG['a_s_active_default_review'] = "新評論列出前，需要被審核";
$LNG['a_s_delete_after'] = "幾多天後，把不活躍會員刪除 (如關閉，請設定為0)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "當有新會員加入時，發電郵給管理員"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "當有新評論發表時，發電郵給管理員"; // 5.1.0
$LNG['a_s_max_banner_width'] = "會員廣告圖片的最大闊度 (如關閉，請設定為0)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "會員廣告圖片的最大高度 (如關閉，請設定為0)"; // 4.2.0
$LNG['a_s_default_banner'] = "如會員沒有提供圖片，則使用以下預設圖片";
$LNG['a_s_button'] = "按鈕圖檔設置";
$LNG['a_s_ranks_on_buttons'] = "以按鈕圖檔排名？  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "統計按鈕圖檔"; // 4.2.0
$LNG['a_s_button_url'] = "如選 '是／否' - 你想在會員網站顯示之預設按鈕圖檔的網址"; // 4.0
$LNG['a_s_button_dir'] = "如選 '是' - 按鈕圖檔目錄的網址"; // 4.0
$LNG['a_s_button_ext'] = "如選 '是' - 按鈕圖檔的副檔名 (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "如選 '是' - 你已完成之按鈕圖檔的數量"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly Links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_other'] = "其他設置";
$LNG['a_s_search'] = "搜尋";
$LNG['a_s_time_offset'] = "伺服主機的時區(小時)";
$LNG['a_s_gateway'] = "防止作弊，使用中轉頁";
$LNG['a_s_captcha'] = "入會時使用驗證字(為防止濫用者入侵) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_on'] = "開啟";
$LNG['a_s_off'] = "關閉";
$LNG['a_s_days'] = "日";
$LNG['a_s_months'] = "月";
$LNG['a_s_weeks'] = "星期"; // 4.2.0
$LNG['a_s_yes'] = "是";
$LNG['a_s_no'] = "否";

$LNG['a_s_updated'] = "你的設定已被更新。";

// 管理員控制台 > 外觀及分類 // 5.0
$LNG['a_skins_header'] = "外觀及分類"; // 5.0
$LNG['a_skins_default'] = "預設外觀"; // 5.0
$LNG['a_skins_set_default'] = "設定預設外觀"; // 5.0
$LNG['a_skins_anon'] = "匿名"; // 5.0
$LNG['a_skins_default_done'] = "預設外觀已被更改。"; // 5.0
$LNG['a_skins_categories_done'] = "該分類外觀已被更改。"; // 5.0
$LNG['a_skins_new_category_done'] = "新分類已被建立。"; // 5.0
$LNG['a_skins_delete_done'] = "該分類已被刪除。"; // 5.0
$LNG['a_skins_delete_error'] = "該分類不能被刪除，因為最少要有一個分類。"; // 5.1.0
$LNG['a_skins_edit_done'] = "該分類已被更改。"; // 5.0
$LNG['a_skins_invalid_skin'] = "外觀無效: %s。請再嘗試。"; // 5.0
$LNG['a_skins_categories'] = "分類"; // 5.0
$LNG['a_skins_new_category'] = "建立新分類"; // 5.0
$LNG['a_skins_set_skins'] = "設定外觀"; // 5.0
$LNG['a_skins_edit_category'] = "編輯分類"; // 5.0
$LNG['a_skins_category_name'] = "分類名稱"; // 5.0
$LNG['a_skins_diff_skins'] = "如果你想不同分類使用不同外觀, 請於以下選取他們。"; // 5.0
?>
