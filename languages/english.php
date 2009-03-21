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
$translation = 'English';
$translator_name = 'Jeremy Scheff';
$translator_email = 'webmaster@aardvarkind.com';
$translator_url = 'http://www.aardvarktopsitesphp.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "Go";
$LNG['g_username'] = "Username";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Title";
$LNG['g_description'] = "Description";
$LNG['g_category'] = "Category"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Password";
$LNG['g_average'] = "Average";
$LNG['g_today'] = "Today";
$LNG['g_yesterday'] = "Yesterday";
$LNG['g_daily'] = "Daily"; // 5.0
$LNG['g_this_month'] = "This Month"; // 5.0
$LNG['g_last_month'] = "Last Month"; // 5.0
$LNG['g_monthly'] = "Monthly"; // 5.0
$LNG['g_this_week'] = "This Week"; // 5.0
$LNG['g_last_week'] = "Last Week"; // 5.0
$LNG['g_weekly'] = "Weekly"; // 5.0
$LNG['g_pv'] = "Pageviews"; // 5.0
$LNG['g_overall'] = "Overall"; // 5.0
$LNG['g_in'] = "In"; // 5.0
$LNG['g_out'] = "Out"; // 5.0
$LNG['g_unq_pv'] = "Unique PVs"; // 5.0
$LNG['g_tot_pv'] = "Total PVs"; // 5.0
$LNG['g_unq_in'] = "Unique In"; // 5.0
$LNG['g_tot_in'] = "Total In"; // 5.0
$LNG['g_unq_out'] = "Unique Out"; // 5.0
$LNG['g_tot_out'] = "Total Out"; // 5.0
$LNG['g_invalid_u_or_p'] = "Invalid username or password.  Please try again."; // 5.0
$LNG['g_invalid_u'] = "Invalid username.  Please try again."; // 5.0
$LNG['g_invalid_p'] = "Invalid password.  Please try again."; // 5.0
$LNG['g_session_expired'] = "Your session has expired.  Please try again."; // 5.0
$LNG['g_error'] = "Error"; // 5.0
$LNG['g_delete_install'] = "For security reasons, you must delete the install directory before the script will run."; // 5.0
$LNG['g_ip'] = "IP Address"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Edit Account";
$LNG['edit_info_edited'] = "Your account has been successfully edited.";
$LNG['edit_password_blank'] = "Leave this blank to keep the current password"; // 4.0
$LNG['edit_delay'] = "Changes to your site's title and URL must be approved by the topsites administrator before taking effect."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Topsites Gateway Page";
$LNG['gateway_text'] = "To deter cheating, a gateway page has been put up.  Click the link below to enter the topsites list.";
$LNG['gateway_vote'] = "Enter and vote";
$LNG['gateway_no_vote'] = "Enter without voting"; // 5.0

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
$LNG['upgrade_version'] = "Please make sure that you are upgrading from version %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Upgrading is only supported for Aardvark Topsites PHP 4.1.0 or higher.";
$LNG['upgrade_done'] = "Your topsites list has been upgraded.  Delete this directory now.";
$LNG['install_mailing_list'] = "If you would like to join the Aardvark Topsites PHP mailing list, enter your email address below.  It is a low volume list for important announcements about the script, such as new releases and security advisories."; // 5.2.0

// Join
$LNG['join_header'] = "Join";
$LNG['join_enter_text'] = "Enter the text as it is shown in the image below"; // 4.2.2
$LNG['join_enter_text_read'] = "Can't read?"; // 5.2.0
$LNG['join_user'] = "User"; // 5.0
$LNG['join_website'] = "Website"; // 5.0
$LNG['join_banner_size'] = "(Maximum size: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Enter a valid username: use only letters, numbers, underscores, and dashes."; // 5.0
$LNG['join_error_username_duplicate'] = "Enter a valid username: your username is already in use."; // 5.0
$LNG['join_error_url'] = "Enter a valid URL.";
$LNG['join_error_email'] = "Enter a valid email address.";
$LNG['join_error_title'] = "Enter a title for your web site.";
$LNG['join_error_password'] = "Enter a password.";
$LNG['join_error_confirm_password'] = "The passwords did not match."; // 5.2.0
$LNG['join_error_urlbanner'] = "Enter a valid banner.  Leave it blank if you do not have one."; // 5.2.0
$LNG['join_error_time'] = "Do not refresh the join confirmation page."; // 4.2.0
$LNG['join_error_captcha'] = "The word you entered does not match the image."; // 4.2.2
$LNG['join_error_question'] = "Your answer is incorrect.  Please fix this to confirm that you are a real person and not a bot."; // 5.2.0
$LNG['join_thanks'] = "Thank you for joining!  Put this code into your site to be ranked.";
$LNG['join_change_warning'] = "If you change the code, it might not work.";
$LNG['join_welcome'] = "Welcome to %s";
$LNG['join_welcome_admin'] = "A new member has joined your topsites list.";
$LNG['join_approve'] = "Thank you for joining!  Your site will be listed when the admin of the topsites list approves it.  You will receive an email with more information when your site is approved."; // 5.2.0
$LNG['join_type'] = "Account type"; // 5.1.0
$LNG['join_standard'] = "Standard"; // 5.1.0
$LNG['join_error_top'] = "An error was found in your submission.  Please correct this error below."; // 5.2.0
$LNG['join_ban_top'] = "Your submission contains content that has been banned by the topsites administrator."; // 5.2.0
$LNG['join_security'] = "Security"; // 5.2.0
$LNG['join_confirm_password'] = "Confirm Password"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Link Code"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Lost Password"; // 5.0
$LNG['lost_pw_forgot'] = "Forgot your password?"; // 5.0
$LNG['lost_pw_get'] = "Get Password"; // 5.0
$LNG['lost_pw_emailed'] = "Please check your email for further instructions."; // 5.0
$LNG['lost_pw_email'] = "To pick a new password for your site, just go to this URL:"; // 5.0
$LNG['lost_pw_new'] = "Enter a New Password"; // 5.0
$LNG['lost_pw_set_new'] = "Set New Password"; // 5.0
$LNG['lost_pw_finish'] = "Your password has been set to the new password you have just chosen."; // 5.0

// Main Page
$LNG['main_header'] = "Rankings"; // 5.0
$LNG['main_all'] = "All Sites"; // 4.2.0
$LNG['main_method'] = "Ranking method";
$LNG['main_members'] = "Members";
$LNG['main_menu_rankings'] = "Rankings";
$LNG['main_menu_join'] = "Join";
$LNG['main_menu_random'] = "Random Member";
$LNG['main_menu_search'] = "Search";
$LNG['main_menu_lost_code'] = "Lost Code"; // 5.0
$LNG['main_menu_lost_password'] = "Lost Password"; // 5.0
$LNG['main_menu_edit'] = "Edit Member Info";
$LNG['main_menu_user_cp'] = "User Control Panel"; // 5.0
$LNG['main_featured'] = "Featured Member"; // 4.0.2
$LNG['main_executiontime'] = "Script Execution Time"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Stats";
$LNG['table_unique'] = "Unique";
$LNG['table_total'] = "Total";
$LNG['table_rank'] = "Rank";
$LNG['table_title'] = "Title"; // 4.0
$LNG['table_description'] = "Description"; // 4.0
$LNG['table_movement'] = "Movement";
$LNG['table_up'] = "Up"; // 5.0
$LNG['table_down'] = "Down"; // 5.0
$LNG['table_neutral'] = "Neutral"; // 5.0
$LNG['table_your_site_here'] = "Your Site Here"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Rate and Review";
$LNG['rate_message'] = "Please enter your rating and review for %s in the form below."; // 5.2.0
$LNG['rate_rating'] = "Rating";
$LNG['rate_review'] = "Review - No HTML allowed"; // 5.0
$LNG['rate_thanks'] = "Thank you for your rating.";
$LNG['rate_error'] = "You have already rated this site.";
$LNG['rate_back'] = "Back to Stats";
$LNG['rate_email_admin'] = "A new review has been posted at your topsites list."; // 5.1.0

// Search
$LNG['search_header'] = "Search";
$LNG['search_off'] = "The search feature has been disabled.";
$LNG['search_no_sites'] = "Sorry, no sites matching your criteria were found."; // 5.0
$LNG['search_prev'] = "Previous"; // 3.2.1
$LNG['search_next'] = "Next"; // 3.2.1
$LNG['search_displaying_results'] = "Displaying %s to %s of %s results for <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Stats";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Member Since"; // 5.0
$LNG['stats_rating_avg'] = "Average Rating";
$LNG['stats_rating_num'] = "Number of Ratings";
$LNG['stats_rate'] = "Rate and Review This Site";
$LNG['stats_reviews'] = "Reviews";
$LNG['stats_allreviews'] = "Show All Reviews"; // 4.0
$LNG['stats_week'] = "Week"; // 5.0
$LNG['stats_highest'] = "Highest"; // 5.0
$LNG['stats_overall'] = "Overall Stats"; // 5.2.0
$LNG['stats_overall_average'] = "Average (Last 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Total (All Time)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s Newest Members"; // 5.0
$LNG['ssi_all'] = "All Sites"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "User Control Panel"; // 5.0
$LNG['user_cp_login'] = "Login"; // 5.0
$LNG['user_cp_logout'] = "Logout"; // 5.0
$LNG['user_cp_welcome'] = "Welcome to the user control panel.  Use the links to the left to manage your account."; // 5.0
$LNG['user_cp_logout_message'] = "You are now logged out of the user control panel."; // 5.0
$LNG['user_cp_login_long'] = "Login with your username and password or your OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Unable to find OpenID server for %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "You must join the topsites list before you can access the user control panel."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "An error occurred while processing your login.  Please try again."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "You must grant access to proceed.  Please try again."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Error from server: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "You cannot access the user control panel until your site has been approved.  You will receive an email when your site is approved."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Approve New Members"; // 5.0
$LNG['a_approve'] = "Approve"; // 4.0
$LNG['a_approve_none'] = "There are no members waiting to be approved."; // 4.0
$LNG['a_approve_done'] = "The member has been approved."; // 4.0
$LNG['a_approve_dones'] = "The members have been approved."; // 4.0
$LNG['a_approve_sel'] = "With selected:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Approve Edited Members"; // 5.2.0
$LNG['a_approve_edited_none'] = "There are no edits waiting to be approved."; // 5.2.0
$LNG['a_approve_edited_old'] = "Previous Title and URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Edited Title and URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Reject"; // 5.2.0
$LNG['a_approve_edited_done'] = "The changes has been approved."; // 5.2.0
$LNG['a_approve_rejected_done'] = "The changes has been rejected."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Approve New Reviews"; // 5.0
$LNG['a_approve_rev_none'] = "There are no reviews waiting to be approved."; // 5.0
$LNG['a_approve_rev_done'] = "The review has been approved."; // 5.0
$LNG['a_approve_rev_dones'] = "The reviews have been approved."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Backup Database"; // 5.2.0
$LNG['a_backup_warn'] = "This will create a backup of your members, stats, and settings.  If you have a lot of members, it may take a long time and it may generate a large file."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Create Custom Page"; // 5.1.0
$LNG['a_create_page_id'] = "Page ID - This will be used in the URL, so it can contain only letters, numbers, underscores, and dashes"; // 5.1.0
$LNG['a_create_page_error_id'] = "The page ID can contain only letters, numbers, underscores, and dashes.  Please go back and correct the page ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "There is already a custom page with that page ID.  Please go back and select a new page ID."; // 5.1.0
$LNG['a_create_page_created'] = "The page has been created.  You will have to manually add a link to %s in wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Delete Member"; // 5.0
$LNG['a_del_headers'] = "Delete Members"; // 5.0
$LNG['a_del_done'] = "The member has been deleted."; // 5.0
$LNG['a_del_dones'] = "The members have been deleted."; // 5.0
$LNG['a_del_warn'] = "Are you sure you want to delete %s?"; // 5.0
$LNG['a_del_multi'] = "these %s members"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Delete Filtered Word"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Delete Filtered Words"; // 5.1.0
$LNG['a_del_bad_word_done'] = "The filtered word has been deleted."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "The filtered words have been deleted."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Are you sure you want to delete %s from the filtered words list?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "these %s words"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Invalid filtered word ID.  Please try again."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Delete Blacklist Entry"; // 5.2.0
$LNG['a_del_ban_headers'] = "Delete Blacklist Entries"; // 5.2.0
$LNG['a_del_ban_done'] = "The blacklist entry has been deleted."; // 5.2.0
$LNG['a_del_ban_dones'] = "The blacklist entries have been deleted."; // 5.2.0
$LNG['a_del_ban_warn'] = "Are you sure you want to delete %s from the blacklist?"; //5.2.0
$LNG['a_del_ban_multi'] = "these %s entries"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Invalid blacklist ID.  Please try again."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Delete Custom Page"; // 5.1.0
$LNG['a_del_page_headers'] = "Delete Custom Pages"; // 5.1.0
$LNG['a_del_page_done'] = "The custom page has been deleted."; // 5.1.0
$LNG['a_del_page_dones'] = "The custom pages have been deleted."; // 5.1.0
$LNG['a_del_page_warn'] = "Are you sure you want to delete %s?"; //5.1.0
$LNG['a_del_page_multi'] = "these %s pages"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Invalid custom page ID.  Please try again."; // 5.1.0

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

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Edit Filtered Word"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "The filtered word has been edited."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Edit Blacklist Entry"; // 5.2.0
$LNG['a_edit_ban_edited'] = "The blacklist entry has been edited."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Edit Custom Page"; // 5.1.0
$LNG['a_edit_page_content'] = "Content - You can use HTML here"; // 5.1.0
$LNG['a_edit_page_edited'] = "The page has been edited."; // 5.1.0

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
$LNG['a_main_approve_edit'] = "There is 1 site edit waiting to be approved."; // 5.2.0
$LNG['a_main_approve_edits'] = "There are %s site edits waiting to be approved."; // 5.2.0
$LNG['a_main_approve_rev'] = "There is 1 review waiting to be approved."; // 5.0
$LNG['a_main_approve_revs'] = "There are %s reviews waiting to be approved."; // 5.0
$LNG['a_main_your'] = "Your version"; // 5.0
$LNG['a_main_latest'] = "Latest version"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Manage Members"; // 5.0
$LNG['a_man_actions'] = "Actions"; // 4.2.0
$LNG['a_man_edit'] = "Edit"; // 4.2.0
$LNG['a_man_delete'] = "Delete"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Select All"; // 5.0
$LNG['a_man_none'] = "Select None"; // 5.0
$LNG['a_man_del_sel'] = "Delete Selected"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Profanity Filter"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Enter a word and its replacement below.  For example, you could enter \"hell\" in the word field and \"h***\" in the replacement field."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Exact matching will only match the exact word.  Global matching will match anything containing the word.  So, global matching of \"hell\" would also match \"shell\" and \"hello\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Word"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Replacement"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Matching"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exact"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Global"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filter Word"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" has been added to the profanity filter."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Blacklist"; // 5.2.0
$LNG['a_man_ban_instructions'] = "To ban sites and users from your topsites list, fill out the form below.  When a member joins, the URL, email address, username, and IP address are checked.  When a site is edited, the URL and email address are checked.<br /><br />The blacklist will not affect your existing members."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Exact matching will only match the exact string.  Global matching will match anything containing the string.  So, global matching of http://www.yahoo.com/ would match any page with http://www.yahoo.com/ in the URL, while exact matching of http://www.yahoo.com/ would only match that exact URL."; // 5.2.0
$LNG['a_man_ban_string'] = "String"; // 5.2.0
$LNG['a_man_ban_field'] = "Field"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" has been added to the blacklist."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Manage Custom Pages"; // 5.1.0

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
$LNG['a_menu_approve_edits'] = "Approve Edited Members"; // 5.2.0
$LNG['a_menu_manage'] = "Manage Members"; // 4.2.0
$LNG['a_menu_settings'] = "Change Settings"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Profanity Filter"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Blacklist"; // 5.2.0
$LNG['a_menu_backup'] = "Backup Database"; // 5.2.0
$LNG['a_menu_skins'] = "Skins and Categories"; // 5.0
$LNG['a_menu_approve_reviews'] = "Approve New Reviews"; // 5.0
$LNG['a_menu_manage_reviews'] = "Manage Reviews"; // 5.0
$LNG['a_menu_email'] = "Email Members";
$LNG['a_menu_delete_review'] = "Delete Review";
$LNG['a_menu_logout'] = "Logout";
$LNG['a_menu_delete'] = "Delete Member";
$LNG['a_menu_edit'] = "Edit Member";
$LNG['a_menu_create_page'] = "Create Custom Page"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Manage Custom Pages"; // 5.1.0
$LNG['a_header_members'] = "Members"; // 5.0
$LNG['a_header_settings'] = "Settings"; // 5.0
$LNG['a_header_tools'] = "Tools"; // 5.2.0
$LNG['a_header_reviews'] = "Reviews"; // 5.0
$LNG['a_header_pages'] = "Custom Pages"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Change Settings";
$LNG['a_s_help'] = "Help"; // 5.1.0

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
$LNG['a_s_ad_breaks'] = "Show ads after these ranks (separate with commas) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Fill blank rows with a message saying \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Member Settings";
$LNG['a_s_active_default'] = "Require new members to be approved before being listed";
$LNG['a_s_active_default_review'] = "Require new reviews to be approved before being listed";
$LNG['a_s_delete_after'] = "Delete inactive members after this many days (set to 0 to turn off)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Email admin when a new member joins"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Email admin when a new review is posted"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Member's maximum banner width (set to 0 to turn off)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Member's maximum banner height (set to 0 to turn off)"; // 4.2.0
$LNG['a_s_default_banner'] = "Default banner for members who do not supply one";

$LNG['a_s_button'] = "Button Settings";
$LNG['a_s_ranks_on_buttons'] = "Ranks on buttons -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Stat Buttons"; // 4.2.0
$LNG['a_s_button_url'] = "If Yes/No - URL to the default button you want to appear on members' sites"; // 4.0
$LNG['a_s_button_dir'] = "If Yes - URL to the directory the buttons are in"; // 4.0
$LNG['a_s_button_ext'] = "If Yes - Extension of the buttons (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "If Yes - Number of buttons you have made"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gateway page to deter cheating for hits in";
$LNG['a_s_captcha'] = "Word verification on join to block spammers - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Security question and answer to block spammers (leave blank to disable) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Other Settings";
$LNG['a_s_search'] = "Search";
$LNG['a_s_time_offset'] = "Time offset from your server (in hours)";

$LNG['a_s_on'] = "On";
$LNG['a_s_off'] = "Off";
$LNG['a_s_days'] = "Days";
$LNG['a_s_months'] = "Months";
$LNG['a_s_weeks'] = "Weeks"; // 4.2.0
$LNG['a_s_yes'] = "Yes";
$LNG['a_s_no'] = "No";
$LNG['a_s_answer'] = "Answer"; // 5.2.0

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
$LNG['a_skins_delete_error'] = "The category cannot be deleted because you must have at least one category."; // 5.1.0
$LNG['a_skins_edit_done'] = "The category has been edited."; // 5.0
$LNG['a_skins_invalid_skin'] = "Invalid skin: %s.  Please try again."; // 5.0
$LNG['a_skins_categories'] = "Categories"; // 5.0
$LNG['a_skins_new_category'] = "Create New Category"; // 5.0
$LNG['a_skins_set_skins'] = "Set Category Skins"; // 5.0
$LNG['a_skins_edit_category'] = "Edit Category"; // 5.0
$LNG['a_skins_category_name'] = "Category Name"; // 5.0
$LNG['a_skins_diff_skins'] = "If you want different skins for different categories, select them below."; // 5.0
?>
