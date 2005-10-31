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
$translation = 'Portuguese';
$translator_name = 'Luciano Milani';
$translator_email = '';
$translator_url = 'http://www.lmilani.com/';
 
// Global
$LNG['g_form_submit_short'] = "OK";
$LNG['g_username'] = "Usuário - User";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Título - Title";
$LNG['g_description'] = "Descrição - Description";
$LNG['g_category'] = "Categoria - Category"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Password";
$LNG['g_average'] = "Classificação - Average";
$LNG['g_today'] = "Hoje - Today";
$LNG['g_yesterday'] = "Ontem - Yesterday";
$LNG['g_daily'] = "Diário - Daily"; // 5.0
$LNG['g_this_month'] = "Este Mês - This month"; // 5.0
$LNG['g_last_month'] = "Mês Passado - Last month"; // 5.0
$LNG['g_monthly'] = "Mensalmente - Monthly"; // 5.0
$LNG['g_this_week'] = "Esta Semana - This week"; // 5.0
$LNG['g_last_week'] = "Sem. Passada - Last week"; // 5.0
$LNG['g_weekly'] = "Semanalmente - Weekly"; // 5.0
$LNG['g_pv'] = 'Páginas Visitadas'; // 5.0
$LNG['g_overall'] = 'Overall'; // 5.0
$LNG['g_in'] = 'In'; // 5.0
$LNG['g_out'] = 'Out'; // 5.0
$LNG['g_unq_pv'] = "Únicas PVs"; // 5.0
$LNG['g_tot_pv'] = "Total PVs"; // 5.0
$LNG['g_unq_in'] = "Únicas In"; // 5.0
$LNG['g_tot_in'] = "Total In"; // 5.0
$LNG['g_unq_out'] = "Únicas Out"; // 5.0
$LNG['g_tot_out'] = "Total Out"; // 5.0
$LNG['g_invalid_u_or_p'] = "Password inválido. Invalid username or password.  Please try again."; // 5.0
$LNG['g_invalid_u'] = "Username inválido. Invalid username.  Please try again."; // 5.0
$LNG['g_invalid_p'] = "Password inválido. Invalid password.  Please try again."; // 5.0
$LNG['g_session_expired'] = "Sua seção expirou. Your session has expired.  Please try again."; // 5.0
$LNG['g_error'] = "Desculpe... houve um erro! - Sorry..."; // 5.0
$LNG['g_delete_install'] = "For security reasons, you must delete the install directory before the script will run."; // 5.0
 
// Edit Account
$LNG['edit_header'] = "Editar sua conta - Edit account";
$LNG['edit_info_edited'] = "Sua conta foi editada com sucesso! Your account has been successfully edited.";
$LNG['edit_password_blank'] = "Deixe em branco para manter a mesma password. Leave this blank to keep the current password"; // 4.0
 
// Gateway Page
$LNG['gateway_header'] = "Portal Capoeira - Top Sites  »Página de Acesso";
$LNG['gateway_text'] = "Seja Bem Vindo!!! Welcome!!! Para evitar abusos, chatters e outras ameaças virtuais, colocamos esta página aqui, de modo a diminuir estes problemas, para acessar o site principal clique nos links abaixo.";
$LNG['gateway_vote'] = "Entrar e Votar";
$LNG['gateway_no_vote'] = "Entrar sem Votar"; // 5.0
 
// Install
$LNG['install_header'] = "Install";
$LNG['install_welcome'] = "Welcome to Aardvark Topsites PHP 5.  Fill out the form below to install the script.";
$LNG['install_sql_prefix'] = "Table prefix - only change this if you are running more than one list from the same database";
$LNG['install_error_chmod'] = "Could not write to settings_sql.php.  Make sure you CHMOD 666 settings_sql.php.";
$LNG['install_error_sql'] = "Could not connect to the SQL database.  Please go back and check your SQL settings.";
$LNG['install_done'] = "Your topsites list has been installed.  Delete this directory now.";
$LNG['install_your'] = "Sua Lista do Portal Capoeira - Top Sites";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Welcome to Aardvark Topsites PHP 5.  Before you upgrade, remember to back up your data.";
$LNG['upgrade_error_version'] = "Upgrading is only supported for Aardvark Topsites PHP 4.1.0 or higher.";
$LNG['upgrade_done'] = "Your topsites list has been upgraded.  Delete this directory now.";
 
// Join
$LNG['join_header'] = "Participe - Join";
$LNG['join_enter_text'] = "Entre com o texto que aparece na imagem abaixo. Enter the text as it is shown in the image below:"; // 4.2.2
$LNG['join_user'] = "Usuário - Username"; // 5.0
$LNG['join_website'] = "Website"; // 5.0
$LNG['join_error_forgot'] = "Voce esqueceu de: You forgot to:";
$LNG['join_error_username'] = "Entre com um usuário válido. Enter a valid username: use only letters, numbers, underscores, and dashes."; // 5.0
$LNG['join_error_username_duplicate'] = "Entre com um usuário válido, este já esta sendo usado. Enter a valid username: your username is already in use."; // 5.0
$LNG['join_error_url'] = "Entre uma URL válida. Enter a valid URL.";
$LNG['join_error_email'] = "Entre com um endereço de e-mail válido. Enter a valid email address.";
$LNG['join_error_title'] = "Entre com um título para o seu web site. Enter a title for your web site.";
$LNG['join_error_password'] = "Entre com a password. Enter a password.";
$LNG['join_error_urlbanner'] = "Entre com o banner do seu site, deixe em branco caso seu site não tenha um banner. Enter a valid banner.  Leave it blank if you don't have one.  It must be smaller than"; // 4.0
$LNG['join_error_back'] = "Por favor corrija os erros. Please go back and fix those errors.";
$LNG['join_error_time'] = "Não atualize a pagina de confirmação. Do not refresh the join confirmation page."; // 4.2.0
$LNG['join_error_captcha'] = "As letras não correspondem a sequencia da imagem, digite novamente. The word you entered does not match the image."; // 4.2.2
$LNG['join_thanks'] = "Muito Obrigado por participar!  Coloque este código em seu site para que ele possa participar do projeto Top Site do Portal Capoeira e ser avaliado e votado pelos usuários! TKS for join!!!";
$LNG['join_change_warning'] = "Não troque o código, pois ele não irá funcionar.";
$LNG['join_welcome'] = "Bem Vindo  Welcome ao %s";
$LNG['join_welcome_admin'] = "Um novo membro entrou no Portal Capoeira Top Sites. A new member has joined your topsites list.";
 
// Link Code
$LNG['link_code_header'] = "Link Code - Código do Link"; // 5.0
 
// Lost Password
$LNG['lost_pw_header'] = "Perdeu sua password.  Lost Password"; // 5.0
$LNG['lost_pw_forgot'] = "Esqueceu a sua password.  Forgot your password?"; // 5.0
$LNG['lost_pw_get'] = "Pegar a password.  Get Password"; // 5.0
$LNG['lost_pw_emailed'] = "Por favor cheque o seu email e siga as instruções.  Please check your email for further instructions."; // 5.0
$LNG['lost_pw_email'] = "Para pegar uma nova password siga este link.  To pick a new password for your site, just go to this URL:"; // 5.0
$LNG['lost_pw_new'] = "Entre com a nova password  Enter a New Password"; // 5.0
$LNG['lost_pw_set_new'] = "Defina a nova password.  Set New Password"; // 5.0
$LNG['lost_pw_finish'] = "Password alterada com sucesso! Your password has been set to the new password you have just chosen."; // 5.0
 
// Main Page
$LNG['main_header'] = "Top Sites Rankings"; // 5.0
$LNG['main_all'] = "Todos Sites - All Sites"; // 4.2.0
$LNG['main_method'] = "Método de Ranking";
$LNG['main_members'] = "Membros - Members";
$LNG['main_menu_rankings'] = "Top Sites - Rankings";
$LNG['main_menu_join'] = "Participe - Join";
$LNG['main_menu_random'] = "Random Member";
$LNG['main_menu_search'] = "Procurar - Search";
$LNG['main_menu_lost_code'] = "Perdeu o código? Lost Code?"; // 5.0
$LNG['main_menu_lost_password'] = "Perdeu sua password? Lost Password?"; // 5.0
$LNG['main_menu_edit'] = "Editar informações da sua conta: Edit account info:";
$LNG['main_menu_user_cp'] = "Painel de Controle - CPanel "; // 5.0
$LNG['main_featured'] = "Featured Member"; // 4.0.2
$LNG['main_executiontime'] = "Script Execution Time"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Powered by";
 
// Ranking Table
$LNG['table_stats'] = "Votar - Estatísticas";
$LNG['table_unique'] = "Uníco";
$LNG['table_total'] = "Total";
$LNG['table_rank'] = "Rank";
$LNG['table_title'] = "Título - Title"; // 4.0
$LNG['table_description'] = "Descrição - Description"; // 4.0
$LNG['table_movement'] = "Movimento - Movement";
$LNG['table_up'] = "Acima - Up"; // 5.0
$LNG['table_down'] = "Abaixo - Down"; // 5.0
$LNG['table_neutral'] = "Neutro - Neutral"; // 5.0
 
// Rate and Review
$LNG['rate_header'] = "Votar e Comentar - Vote";
$LNG['rate_rating'] = "Avaliar - Rating";
$LNG['rate_review'] = "Comentários - HTML não permitido - Reviews"; // 5.0
$LNG['rate_thanks'] = "Obrigado por sua qualificação - TKS.";
$LNG['rate_error'] = "Voce já votou neste site.";
$LNG['rate_back'] = "Voltar para as estatísticas";
 
// Search
$LNG['search_header'] = "Procurar - Search";
$LNG['search_off'] = "The search feature has been disabled.";
$LNG['search_for'] = "You searched for";
$LNG['search_no_sites'] = "Sorry, no sites matching your criteria were found."; // 5.0
$LNG['search_prev'] = "Anterior - prev"; // 3.2.1
$LNG['search_next'] = "Próximo - next"; // 3.2.1
 
// Stats
$LNG['stats_header'] = "Estatísticas - Stats";
$LNG['stats_info'] = "Informações - Info";
$LNG['stats_member_since'] = "Membro desde - Member Since"; // 5.0
$LNG['stats_rating_avg'] = "Avaliação - Average Rating";
$LNG['stats_rating_num'] = "Número de Avaliações - Number of Ratings";
$LNG['stats_rate'] = "Vote e Avalie este site - Rate and Review This Site";
$LNG['stats_reviews'] = "Comentários - Reviews";
$LNG['stats_allreviews'] = "Mostrar todas os comentários - All Reviews"; // 4.0
$LNG['stats_week'] = "Semana - Week"; // 5.0
$LNG['stats_highest'] = "Melhor - Highest"; // 5.0
 
// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s Newest Members"; // 5.0
$LNG['ssi_all'] = "Todos os Sites - All sites"; // 4.0
 
// User Control Panel // 5.0
$LNG['user_cp_header'] = "Painel de Controle - User Control Panel"; // 5.0
$LNG['user_cp_login'] = "Login"; // 5.0
$LNG['user_cp_logout'] = "Logout"; // 5.0
$LNG['user_cp_welcome'] = "Bem Vindo ao Painel de Controle, aqui voce pode gerenciar a sua conta. Welcome to the user control panel.  Use the links to the left to manage your account."; // 5.0
$LNG['user_cp_logout_message'] = "Voce não está logado no Painel de Controle. You are now logged out of the user control panel."; // 5.0
 
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
