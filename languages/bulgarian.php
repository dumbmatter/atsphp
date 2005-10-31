<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2005 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarkind.com/                        http://www.avatic.com/ \\
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

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Bulgarian';
$translator_name = 'Ivan Kostadinov';
$translator_email = 'coolboy_@abv.bg';
$translator_url = 'http://web.hit.bg/ivan4o/';

// Global
$LNG['g_form_submit_short'] = "Напред";
$LNG['g_username'] = "Потребител";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Заглавие";
$LNG['g_description'] = "Описание";
$LNG['g_category'] = "Категория"; // 4.1.0
$LNG['g_email'] = "Е-майл";
$LNG['g_banner_url'] = "URL на банер";
$LNG['g_password'] = "Парола";
$LNG['g_average'] = "Рейтинг";
$LNG['g_today'] = "Днес";
$LNG['g_yesterday'] = "Вчера";
$LNG['g_daily'] = "За ден"; // 5.0
$LNG['g_this_month'] = "Този месец"; // 5.0
$LNG['g_last_month'] = "Предишен месец"; // 5.0
$LNG['g_monthly'] = "Месечно"; // 5.0
$LNG['g_this_week'] = "Тази седмица"; // 5.0
$LNG['g_last_week'] = "Предишна седмица"; // 5.0
$LNG['g_weekly'] = "Седмично"; // 5.0
$LNG['g_pv'] = 'Всички'; // 5.0
$LNG['g_overall'] = 'Обобщено'; // 5.0
$LNG['g_in'] = 'Входящи'; // 5.0
$LNG['g_out'] = 'Изходящи'; // 5.0
$LNG['g_unq_pv'] = "Уникални"; // 5.0
$LNG['g_tot_pv'] = "Общо"; // 5.0
$LNG['g_unq_in'] = "Уникални вх."; // 5.0
$LNG['g_tot_in'] = "Общо вх."; // 5.0
$LNG['g_unq_out'] = "Уникални изх."; // 5.0
$LNG['g_tot_out'] = "Общо изх."; // 5.0
$LNG['g_invalid_u_or_p'] = "Неправилен потребител или парола. Моля опитайте отново."; // 5.0
$LNG['g_invalid_u'] = "Неправилен потребител. Моля опитайте отново."; // 5.0
$LNG['g_invalid_p'] = "Неправилна парола. Моля опитайте отново."; // 5.0
$LNG['g_session_expired'] = "Сесията ви изтече. Моля опитайте отново."; // 5.0
$LNG['g_error'] = "Грешка"; // 5.0
$LNG['g_delete_install'] = "Изтрийте install преди да заредите страницата отново."; // 5.0

// Edit Account
$LNG['edit_header'] = "Промяна на потребител";
$LNG['edit_info_edited'] = "Информацията ви е променена успешно.";
$LNG['edit_password_blank'] = "Оставете празно за да запазите старата си парола."; // 4.0

// Gateway Page
$LNG['gateway_header'] = "БГ ТОП сайт";
$LNG['gateway_text'] = "За да предотвратим измамите се използва gateway разпознаване.  Кликнете върху линк-а за да влезете.";
$LNG['gateway_vote'] = "Гласувай и влез.";
$LNG['gateway_no_vote'] = "Влез без да гласуваш."; // 5.0

// Install
$LNG['install_header'] = "Install";
$LNG['install_welcome'] = "Welcome to Aardvark Topsites PHP 5.  Fill out the form below to install the script.";
$LNG['install_sql_prefix'] = "Table prefix - only change this if you are running more than one list from the same database";
$LNG['install_error_chmod'] = "Could not write to settings_sql.php.  Make sure you CHMOD 666 settings_sql.php.";
$LNG['install_error_sql'] = "Could not connect to the SQL database.  Please go back and check your SQL settings.";
$LNG['install_done'] = "Your topsites list has been installed.  Delete this directory now.";
$LNG['install_your'] = "Your Topsites List";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Welcome to Aardvark Topsites PHP 5.  Before you upgrade, remember to back up your data.";
$LNG['upgrade_error_version'] = "Upgrading is only supported for Aardvark Topsites PHP 4.1.0 or higher.";
$LNG['upgrade_done'] = "Your topsites list has been upgraded.  Delete this directory now.";

// Join
$LNG['join_header'] = "Добави сайт";
$LNG['join_enter_text'] = "Моля въведете този потвърждаващ код:"; // 4.2.2
$LNG['join_user'] = "Потребител"; // 5.0
$LNG['join_website'] = "Уебсайт"; // 5.0
$LNG['join_error_forgot'] = "Относно:";
$LNG['join_error_username'] = "Въведете валидно потребителско име: може да се използват букви, цифри и _ ."; // 5.0
$LNG['join_error_username_duplicate'] = "Това потребителско име е вече заето."; // 5.0
$LNG['join_error_url'] = "Въведете валиден URL.";
$LNG['join_error_email'] = "Въведете валиден е-майл.";
$LNG['join_error_title'] = "Въведете заглавие за сайта.";
$LNG['join_error_password'] = "Въведете парола.";
$LNG['join_error_urlbanner'] = "Въведете валиден банер.  Оставете празно ако нямате такъв.  Банерът трябва да е по-малък от"; // 4.0
$LNG['join_error_back'] = "Моля върнете се назад за да поправите грешката.";
$LNG['join_error_time'] = "Моля натискайте бутона ДОБАВИ САЙТ само веднъж."; // 4.2.0
$LNG['join_error_captcha'] = "Грешен потвърждаващ код."; // 4.2.2
$LNG['join_thanks'] = "Благодарим ви че се регистрирахте!  Сложете този код на вашата страница за да бъдете оценен.";
$LNG['join_change_warning'] = "Ако промените този код той може да не проработи.";
$LNG['join_welcome'] = "Добре дошли в %s";
$LNG['join_welcome_admin'] = "Има нов участник.";

// Link Code
$LNG['link_code_header'] = "Код за гласуване"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Изгубена парола"; // 5.0
$LNG['lost_pw_forgot'] = "Забравена парола?"; // 5.0
$LNG['lost_pw_get'] = "Вземи паролата"; // 5.0
$LNG['lost_pw_emailed'] = "Моля проверете е-майла си за инструкции."; // 5.0
$LNG['lost_pw_email'] = "За да смените паролата си отидете на този адрес:"; // 5.0
$LNG['lost_pw_new'] = "Нова парола"; // 5.0
$LNG['lost_pw_set_new'] = "Промени"; // 5.0
$LNG['lost_pw_finish'] = "Паролата ви е сменена"; // 5.0

// Main Page
$LNG['main_header'] = "Гласове"; // 5.0
$LNG['main_all'] = "Категория - Всички"; // 4.2.0
$LNG['main_method'] = "Метод на гласуване:";
$LNG['main_members'] = "Потребители";
$LNG['main_menu_rankings'] = "Класация";
$LNG['main_menu_join'] = "Добави сайт";
$LNG['main_menu_random'] = "Произволен";
$LNG['main_menu_search'] = "Търси";
$LNG['main_menu_lost_code'] = "Загубен код за връзка"; // 5.0
$LNG['main_menu_lost_password'] = "Загубена парола"; // 5.0
$LNG['main_menu_edit'] = "Редакция на потребител";
$LNG['main_menu_user_cp'] = "Вход"; // 5.0
$LNG['main_featured'] = "Featured Member"; // 4.0.2
$LNG['main_executiontime'] = "Време за зареждане"; // 4.0
$LNG['main_queries'] = "SQL запитвания"; // 4.0
$LNG['main_powered'] = "Благодарение на";

// Ranking Table
$LNG['table_stats'] = "Инфо";
$LNG['table_unique'] = "Уникални";
$LNG['table_total'] = "Общо";
$LNG['table_rank'] = "Ранг";
$LNG['table_title'] = "Заглавие"; // 4.0
$LNG['table_description'] = "Описание"; // 4.0
$LNG['table_movement'] = "Движение";
$LNG['table_up'] = "Нагоре"; // 5.0
$LNG['table_down'] = "Надолу"; // 5.0
$LNG['table_neutral'] = "Неутрално"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Гласуваи и остави коментар";
$LNG['rate_rating'] = "Гласуване";
$LNG['rate_review'] = "Коментари - не е позволен HTML"; // 5.0
$LNG['rate_thanks'] = "Благодарим ви, че гласувахте.";
$LNG['rate_error'] = "Вие вече сте гласували за този сайт.";
$LNG['rate_back'] = "Обратно към статистика";

// Search
$LNG['search_header'] = "Търси";
$LNG['search_off'] = "Търсенето е блокирано.";
$LNG['search_for'] = "Вие търсите";
$LNG['search_no_sites'] = "Съжаляваме, но не открихме нищо по вашето запитване."; // 5.0
$LNG['search_prev'] = "назад"; // 3.2.1
$LNG['search_next'] = "напред"; // 3.2.1

// Stats
$LNG['stats_header'] = "Статистика";
$LNG['stats_info'] = "Инфо";
$LNG['stats_member_since'] = "Регистриран"; // 5.0
$LNG['stats_rating_avg'] = "Цялостен рейтинг";
$LNG['stats_rating_num'] = "Гласове";
$LNG['stats_rate'] = "Гласувай и остави коментар.";
$LNG['stats_reviews'] = "Коментари";
$LNG['stats_allreviews'] = "Покажи всички коментари"; // 4.0
$LNG['stats_week'] = "Седмица"; // 5.0
$LNG['stats_highest'] = "Най-висок"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Top %s сайтове"; // 4.0
$LNG['ssi_new'] = "%s Нови потребители"; // 5.0
$LNG['ssi_all'] = "Всички"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Контролен панел"; // 5.0
$LNG['user_cp_login'] = "Влез"; // 5.0
$LNG['user_cp_logout'] = "Изход"; // 5.0
$LNG['user_cp_welcome'] = "Добре дошли в контролния панел. От тук може да променяте настройките си."; // 5.0
$LNG['user_cp_logout_message'] = "Вие излязохте от контролния панел."; // 5.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Approve New Members"; // 5.0
$LNG['a_approve'] = "Approve"; // 4.0
$LNG['a_approve_none'] = "There are no members waiting to be approved."; // 4.0
$LNG['a_approve_done'] = "The member has been approved."; // 4.0
$LNG['a_approve_dones'] = "The members have been approved."; // 4.0
$LNG['a_approve_sel'] = "With selected:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Approve New Reviews"; // 5.0
$LNG['a_approve_rev_none'] = "There are no reviews waiting to be approved."; // 5.0
$LNG['a_approve_rev_done'] = "The review has been approved."; // 5.0
$LNG['a_approve_rev_dones'] = "The reviews have been approved."; // 5.0

// Admin > Delete Member
$LNG['a_del_header'] = "Delete Member"; // 5.0
$LNG['a_del_headers'] = "Delete Members"; // 5.0
$LNG['a_del_done'] = "The member has been deleted."; // 5.0
$LNG['a_del_dones'] = "The members have been deleted."; // 5.0
$LNG['a_del_warn'] = "Are you sure you want to delete %s?"; // 5.0
$LNG['a_del_multi'] = "these %s members"; //5.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Delete Review"; // 5.0
$LNG['a_del_rev_headers'] = "Delete Reviews"; // 5.0
$LNG['a_del_rev_done'] = "The review has been deleted."; // 5.0
$LNG['a_del_rev_dones'] = "The reviews have been deleted."; // 5.0
$LNG['a_del_rev_warn'] = "Are you sure you want to delete this review?"; //5.0
$LNG['a_del_rev_warns'] = "Are you sure you want to delete these reviews?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Invalid review ID.  Please try again."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Edit Member"; // 5.0
$LNG['a_edit_site_is'] = "This site is"; // 4.0
$LNG['a_edit_active'] = "Active (Listed)"; // 4.0
$LNG['a_edit_inactive'] = "Inactive (Not Listed)"; // 5.0
$LNG['a_edit_edited'] = "The member has been edited.";

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Edit Review"; // 5.0
$LNG['a_edit_rev_edited'] = "The review has been edited.";

// Admin > Email Members
$LNG['a_email_header'] = "Email Members"; // 5.0
$LNG['a_email_subject'] = "Subject"; // 4.2.0
$LNG['a_email_message'] = "Message"; // 4.2.0
$LNG['a_email_msg_sent'] = "An email has been sent to %s"; // 5.0
$LNG['a_email_not_sent'] = "An email couldn't be sent to %s"; // 5.0
$LNG['a_email_sent'] = "%s members were emailed."; // 4.2.0
$LNG['a_email_failed'] = "%s members were not emailed."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "You are now logged out of the admin."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Welcome to the admin.  Use the links to the left to manage your topsites list."; // 5.0
$LNG['a_main_approve'] = "There is 1 site waiting to be approved."; // 5.0
$LNG['a_main_approves'] = "There are %s sites waiting to be approved."; // 5.0
$LNG['a_main_approve_rev'] = "There is 1 review waiting to be approved."; // 5.0
$LNG['a_main_approve_revs'] = "There are %s reviews waiting to be approved."; // 5.0
$LNG['a_main_your'] = "Your version"; // 5.0
$LNG['a_main_latest'] = "Latest version"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Manage Members"; // 5.0
$LNG['a_man_actions'] = "Actions"; // 4.2.0
$LNG['a_man_edit'] = "Edit"; // 4.2.0
$LNG['a_man_delete'] = "Delete"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Select All"; // 5.0
$LNG['a_man_none'] = "Select None"; // 5.0
$LNG['a_man_del_sel'] = "Delete Selected"; // 5.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Manage Reviews"; // 5.0
$LNG['a_man_rev_enter'] = "To manage the reviews of a site, enter the member's username below."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Review"; // 5.0
$LNG['a_man_rev_date'] = "Date"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Main"; // 5.0
$LNG['a_menu_approve'] = "Approve New Members";
$LNG['a_menu_manage'] = "Manage Members"; // 4.2.0
$LNG['a_menu_settings'] = "Change Settings"; // 5.0
$LNG['a_menu_skins'] = "Skins and Categories"; // 5.0
$LNG['a_menu_approve_reviews'] = "Approve New Reviews"; // 5.0
$LNG['a_menu_manage_reviews'] = "Manage Reviews"; // 5.0
$LNG['a_menu_email'] = "Email Members";
$LNG['a_menu_delete_review'] = "Delete Review";
$LNG['a_menu_logout'] = "Logout";
$LNG['a_menu_delete'] = "Delete Member";
$LNG['a_menu_edit'] = "Edit Member";
$LNG['a_header_members'] = "Members"; // 5.0
$LNG['a_header_settings'] = "Settings"; // 5.0
$LNG['a_header_reviews'] = "Reviews"; // 5.0

// Admin > Settings
$LNG['a_s_header'] = "Change Settings";
$LNG['a_s_general'] = "General Settings";
$LNG['a_s_admin_password'] = "Admin password";
$LNG['a_s_list_name'] = "The name of your topsites list";
$LNG['a_s_list_url'] = "URL to the topsites directory";
$LNG['a_s_default_language'] = "Default language";
$LNG['a_s_your_email'] = "Your email address";

$LNG['a_s_sql'] = "SQL Settings";
$LNG['a_s_sql_type'] = "Database Type"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Username";
$LNG['a_s_sql_password'] = "Password";

$LNG['a_s_ranking'] = "Ranking Settings";
$LNG['a_s_num_list'] = "Number of members to list per page"; // 5.0
$LNG['a_s_ranking_period'] = "Ranking period"; // 5.0
$LNG['a_s_ranking_method'] = "Ranking method"; // 5.0
$LNG['a_s_ranking_average'] = "Rank by average or by just %s"; // 5.0
$LNG['a_s_featured_member'] = 'Featured member - You have to add {$featured_member} to wrapper.html after you turn this on.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Number of members to use the _top skin for";
$LNG['a_s_ad_breaks'] = "Show ad breaks after these ranks (separate with commas)";

$LNG['a_s_member'] = "Member Settings";
$LNG['a_s_active_default'] = "Require new members to be approved before being listed";
$LNG['a_s_active_default_review'] = "Require new reviews to be approved before being listed";
$LNG['a_s_delete_after'] = "Delete inactive members after this many days (set to 0 to turn off)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Email you when a new member joins";
$LNG['a_s_max_banner_width'] = "Member's maximum banner width (set to 0 to turn off)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Member's maximum banner height (set to 0 to turn off)"; // 4.2.0
$LNG['a_s_default_banner'] = "Default banner for members who do not supply one";

$LNG['a_s_button'] = "Button Settings";
$LNG['a_s_ranks_on_buttons'] = "Ranks on buttons -  See <a href=\"http://www.aardvarkind.com/topsitesphp/manual/\">the manual</a> for details.  Only choose Stat Buttons if you have already read that section of the manual.  If you choose Stat Buttons, the rest of this section will not have an effect."; // 4.2.0
$LNG['a_s_stat_buttons'] = "Stat Buttons"; // 4.2.0
$LNG['a_s_button_url'] = "If Yes/No - URL to the default button you want to appear on members' sites"; // 4.0
$LNG['a_s_button_dir'] = "If Yes - URL to the directory the buttons are in"; // 4.0
$LNG['a_s_button_ext'] = "If Yes - Extension of the buttons (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "If Yes - Number of buttons you have made"; // 4.0

$LNG['a_s_other'] = "Other Settings";
$LNG['a_s_search'] = "Search";
$LNG['a_s_time_offset'] = "Time offset from your server (in hours)";
$LNG['a_s_gateway'] = "Gateway page to deter cheating for hits in";
$LNG['a_s_captcha'] = "Word verification on join - Security against spammers"; // 4.2.2

$LNG['a_s_on'] = "On";
$LNG['a_s_off'] = "Off";
$LNG['a_s_days'] = "Days";
$LNG['a_s_months'] = "Months";
$LNG['a_s_weeks'] = "Weeks"; // 4.2.0
$LNG['a_s_yes'] = "Yes";
$LNG['a_s_no'] = "No";

$LNG['a_s_updated'] = "Your settings have been updated.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Skins and Categories"; // 5.0
$LNG['a_skins_default'] = "Default Skin"; // 5.0
$LNG['a_skins_set_default'] = "Set Default Skin"; // 5.0
$LNG['a_skins_anon'] = "Anonymous"; // 5.0
$LNG['a_skins_default_done'] = "The default skin has been set."; // 5.0
$LNG['a_skins_categories_done'] = "The category skins have been set."; // 5.0
$LNG['a_skins_new_category_done'] = "The new category has been created."; // 5.0
$LNG['a_skins_delete_done'] = "The category has been deleted."; // 5.0
$LNG['a_skins_edit_done'] = "The category has been edited."; // 5.0
$LNG['a_skins_invalid_skin'] = "Invalid skin: %s.  Please try again."; // 5.0
$LNG['a_skins_categories'] = "Categories"; // 5.0
$LNG['a_skins_new_category'] = "Create New Category"; // 5.0
$LNG['a_skins_set_skins'] = "Set Category Skins"; // 5.0
$LNG['a_skins_edit_category'] = "Edit Category"; // 5.0
$LNG['a_skins_category_name'] = "Category Name"; // 5.0
$LNG['a_skins_diff_skins'] = "If you want different skins for different categories, select them below."; // 5.0
?>
