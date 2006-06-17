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
  die("This file cannot be accessed directly.");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Czech (Česky)';
$translator_name = 'Robert Adamek';
$translator_email = 'admin@ultima.cz';
$translator_url = 'http://www.ultima.cz';

// Global
$LNG['g_form_submit_short'] = "Go";
$LNG['g_username'] = "Uivatelské jméno";
$LNG['g_url'] = "URL (vì. http://)";
$LNG['g_title'] = "Název";
$LNG['g_description'] = "Popis";
$LNG['g_category'] = "Kategorie"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "URL banneru (vì. http://)";
$LNG['g_password'] = "Heslo";
$LNG['g_average'] = "Prùmìr";
$LNG['g_today'] = "Dnes";
$LNG['g_yesterday'] = "Vèera";
$LNG['g_daily'] = "Denní"; // 5.0
$LNG['g_this_month'] = "Tento mìsíc"; // 5.0
$LNG['g_last_month'] = "Minulý mìsíc"; // 5.0
$LNG['g_monthly'] = "Mìsíèní"; // 5.0
$LNG['g_this_week'] = "Tento týden"; // 5.0
$LNG['g_last_week'] = "Minulý týden"; // 5.0
$LNG['g_weekly'] = "Týdení"; // 5.0
$LNG['g_pv'] = 'Zobrazení stránek'; // 5.0
$LNG['g_overall'] = 'Celkem'; // 5.0
$LNG['g_in'] = 'Pøíchozí'; // 5.0
$LNG['g_out'] = 'Odchozí'; // 5.0
$LNG['g_unq_pv'] = "Unikátních návtìv"; // 5.0
$LNG['g_tot_pv'] = "Celkem návtìv"; // 5.0
$LNG['g_unq_in'] = "Unikátní Pøíchozí kliknutí"; // 5.0
$LNG['g_tot_in'] = "Pøíchozí kliknutí"; // 5.0
$LNG['g_unq_out'] = "Unikátní odchozí kliknutí"; // 5.0
$LNG['g_tot_out'] = "Odchozí kliknutí"; // 5.0
$LNG['g_invalid_u_or_p'] = "Chybné uivatelské jméno nebo heslo. Zkuste to znovu."; // 5.0
$LNG['g_invalid_u'] = "Chybné uivatelské jméno.  Zkuste to znovu"; // 5.0
$LNG['g_invalid_p'] = "Chybné heslo. Zkuste to znovu"; // 5.0
$LNG['g_session_expired'] = "Byl jste odhláen.  Pøihlate se znovu."; // 5.0
$LNG['g_error'] = "Error"; // 5.0
$LNG['g_delete_install'] = "Z bezpeønostních dùvodù musíte nejprve smazat adresáø /install z vaeho FTP."; // 5.0

// Edit Account
$LNG['edit_header'] = "Upravit úèet";
$LNG['edit_info_edited'] = "Úèet byl upraven.";
$LNG['edit_password_blank'] = "Zanechte tuto poloku prázdnou pokud chcete ponechat stávající heslo"; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Vstupní brána";
$LNG['gateway_text'] = "Tato stránka je zde kvùli cheaterùm.  Kliknìte na jeden z následujících odkazù.";
$LNG['gateway_vote'] = "Vstoupit a hlasovat";
$LNG['gateway_no_vote'] = "Vstoupit bez hlasování"; // 5.0

// Install
$LNG['install_header'] = "Instalace";
$LNG['install_welcome'] = "Vítejte v Aardvark Topsites PHP 5.  Pro úspìnou instalaci je potøeba vyplnit tento formuláø.";
$LNG['install_sql_prefix'] = "Prefix tabulk - zmìòte pouze v pøípadì, kdy vyuíváte více tìchto instalací v jedné databázi";
$LNG['install_error_chmod'] = "Nemùu zapisovat do settings_sql.php.  Ujistìte se, e soubor má nastaveny parametry 755.";
$LNG['install_error_sql'] = "Nemùu se pøipojit k databázi.  Vrate se a opravte nastavení SQL.";
$LNG['install_done'] = "Dokonèil jsem instalaci.  Smate adresáø /install z FTP.";
$LNG['install_your'] = "Vá Toplist";
$LNG['install_admin'] = "Administrace";
$LNG['install_manual'] = "Manuál (Anglicky)";
$LNG['upgrade_header'] = "Aktualizace";
$LNG['upgrade_welcome'] = "Vítejte v Aardvark Topsites PHP 5.  Døíve ne pøistoupíte k aktualizaci, ujistìte se, e máte zálohována data.";
$LNG['upgrade_version'] = "Ujistìte se prosím, že jste upgradovali na verzi %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Aktualizace je moná pouze Aardvark Topsites PHP 4.1.0 a vyí.";
$LNG['upgrade_done'] = "Aktualizoval jsem systém, nyní smate adresáø /upgrade";

// Join
$LNG['join_header'] = "Registrace";
$LNG['join_enter_text'] = "Opite kód z obrázku:"; // 4.2.2
$LNG['join_user'] = "Uivatel"; // 5.0
$LNG['join_website'] = "Stránka"; // 5.0
$LNG['join_error_username'] = "Vlote jiné uivatelské jméno: pouijte pouze písmena, èíslice, podlomítka a nadlomítka."; // 5.0
$LNG['join_error_username_duplicate'] = "Vlote jiné uivatelské jméno: to které jste vbrali u vlastní jiný uivatel."; // 5.0
$LNG['join_error_url'] = "Vlote správnou URL (pøíklad: http://www.ultima.cz).";
$LNG['join_error_email'] = "Vlote správnou emailovou adresu.";
$LNG['join_error_title'] = "Vlote název vaí stránky.";
$LNG['join_error_password'] = "Vlote heslo.";
$LNG['join_error_urlbanner'] = "Vlote správný banner.  Pokud banner nemáte, ponechte kolonku prázdnou.  Musí mít rozmìry 468x60. Banner bude zobrazován podle návtìvnosti pouze prvním tøem."; // 4.0
$LNG['join_error_time'] = "Neaktualizujte registraèní stránku."; // 4.2.0
$LNG['join_error_captcha'] = "Znaky které jste vloili nesouhlasí se znaky na obrázku."; // 4.2.2
$LNG['join_thanks'] = "Dìkujeme za registraci. Nyní do svých stránek vlote tento kód.";
$LNG['join_change_warning'] = "Pokud kód pozmìníte, nebude funkèní.";
$LNG['join_welcome'] = "Vítejte v %s";
$LNG['join_welcome_admin'] = "Nový uivatel se zaregistroval.";
$LNG['join_approve'] = "Váš odkaz bude pøidán ve chvíli kd ho provìøí administrátor."; // 5.1.0
$LNG['join_type'] = "Typ úètu"; // 5.1.0
$LNG['join_standard'] = "Standardní"; // 5.1.0

// Link Code
$LNG['link_code_header'] = "Kód odkazu"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Ztráta hesla"; // 5.0
$LNG['lost_pw_forgot'] = "Zapomìl jste své heslo?"; // 5.0
$LNG['lost_pw_get'] = "Získat heslo"; // 5.0
$LNG['lost_pw_emailed'] = "Zkontrolujte si potu a postupujte podle instrukcí v ní."; // 5.0
$LNG['lost_pw_email'] = "Pro vytvoøení nového hesla pøejdìte na tuto adresu"; // 5.0
$LNG['lost_pw_new'] = "Vloit nové heslo"; // 5.0
$LNG['lost_pw_set_new'] = "Nastavit nové heslo"; // 5.0
$LNG['lost_pw_finish'] = "Zmìnil jsem heslo. Nyní se mùete pøihlásit."; // 5.0

// Main Page
$LNG['main_header'] = "ebøíèk"; // 5.0
$LNG['main_all'] = "Vyberte ebøíèek"; // 4.2.0
$LNG['main_method'] = "Metody mìøení";
$LNG['main_members'] = "Uivatelé";
$LNG['main_menu_rankings'] = "Hodnocení";
$LNG['main_menu_join'] = "Registrace";
$LNG['main_menu_random'] = "Náhodný uivatel";
$LNG['main_menu_search'] = "Vyhledat";
$LNG['main_menu_lost_code'] = "Ztráte kódu"; // 5.0
$LNG['main_menu_lost_password'] = "Ztráta hesla"; // 5.0
$LNG['main_menu_edit'] = "Upravit informace uivatele";
$LNG['main_menu_user_cp'] = "Pøihláení"; // 5.0
$LNG['main_featured'] = "Sponzor"; // 4.0.2
$LNG['main_executiontime'] = "Doba zpracování dotazu"; // 4.0
$LNG['main_queries'] = "SQL Dotazù"; // 4.0
$LNG['main_powered'] = "Postaveno na";

// Ranking Table
$LNG['table_stats'] = "Detail";
$LNG['table_unique'] = "Unikátních";
$LNG['table_total'] = "Celkem";
$LNG['table_rank'] = "Hodnocení";
$LNG['table_title'] = "Název"; // 4.0
$LNG['table_description'] = "Popis"; // 4.0
$LNG['table_movement'] = "Status";
$LNG['table_up'] = "Nahoru"; // 5.0
$LNG['table_down'] = "Dolù"; // 5.0
$LNG['table_neutral'] = "Stálý"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Hodnocení nebo komentáø";
$LNG['rate_rating'] = "Hodnocení";
$LNG['rate_review'] = "Komentáø - HTML není povoleno"; // 5.0
$LNG['rate_thanks'] = "Dìkujeme vám za hodnocení.";
$LNG['rate_error'] = "U jste hodnotil.";
$LNG['rate_back'] = "Zpìt na statistiky";
$LNG['rate_email_admin'] = "Nový komentáø b pøidán."; // 5.1.0

// Search
$LNG['search_header'] = "Vyhledat";
$LNG['search_off'] = "Vyhledávání je vypnuto.";
$LNG['search_no_sites'] = "Bohuel vhledávání dle zadaných parametrú neblo úspìné."; // 5.0
$LNG['search_prev'] = "Pøedchozí"; // 3.2.1
$LNG['search_next'] = "Následující"; // 3.2.1
$LNG['search_displaying_results'] = "Zobrazit od %s do %s z %s výsledkù pro <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistiky";
$LNG['stats_info'] = "Informace";
$LNG['stats_member_since'] = "Datum registrace"; // 5.0
$LNG['stats_rating_avg'] = "Prùmìr";
$LNG['stats_rating_num'] = "Poèet hlasù";
$LNG['stats_rate'] = "Pøidat komentáø nebo Hodnotit";
$LNG['stats_reviews'] = "Komentáøe";
$LNG['stats_allreviews'] = "Zobrazit vechny komentáøe"; // 4.0
$LNG['stats_week'] = "Týden"; // 5.0
$LNG['stats_highest'] = "Nejví"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Top %s Stránek"; // 4.0
$LNG['ssi_new'] = "%s Nových uivatelù"; // 5.0
$LNG['ssi_all'] = "Vechny stránky"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Kontrolní panel"; // 5.0
$LNG['user_cp_login'] = "Pøihlásit se"; // 5.0
$LNG['user_cp_logout'] = "Odhlásit se"; // 5.0
$LNG['user_cp_welcome'] = "Vítejte v kontrolním panelu, odkazy nalevo vám pomohou nastavit úèet."; // 5.0
$LNG['user_cp_logout_message'] = "Nyní jste odhláen."; // 5.0
$LNG['user_cp_login_long'] = "Pøihlášení uživatelským jménem a heslem nebo pomocí vašeho ID."; // 5.1.0
$LNG['user_cp_openid'] = "Vaše ID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Nemohu najít server s tímto ID: %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Musíte být pøihlášen, aby jste mohl zobrazit Kontrolní panel."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Chyba pøi pøihlašování, zkuste to znovu."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Musíte mít kompletní pøístup do nastavení. Zkuste zo znovu.."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Chyba serveru: %s"; // 5.1.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Potvrzení uivatelù"; // 5.0
$LNG['a_approve'] = "Potvrdit"; // 4.0
$LNG['a_approve_none'] = "Na potvrzení neèekají ádní uivatelé."; // 4.0
$LNG['a_approve_done'] = "Nový uivatel byl potvrzen."; // 4.0
$LNG['a_approve_dones'] = "Noví uivatelé byli potvrzeni."; // 4.0
$LNG['a_approve_sel'] = "Vybrané:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Potvrzení komentáøù"; // 5.0
$LNG['a_approve_rev_none'] = "ádné komentáøe k potvrzení."; // 5.0
$LNG['a_approve_rev_done'] = "Komentáø byl potvrzen."; // 5.0
$LNG['a_approve_rev_dones'] = "Komentáøe byly potvrzeny."; // 5.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Vytvoøit podstránku"; // 5.1.0
$LNG['a_create_page_id'] = "ID stránky - Toto èíslo bude použito v adrese, mùžete použít pouze písmena, èísla a unicode znaky."; // 5.1.0
$LNG['a_create_page_error_id'] = "ID stránky nesmí obsahovat jiné znaky než písmena, èíslice a podtržítka. Vrate se zpìt a opravte ID stránky."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "ID stránky které jste zadal již existuje, vrate se zpìt a zmìòte ID."; // 5.1.0
$LNG['a_create_page_created'] = "Stránka vytvoøena.  Musíte ruènì vložit tento link %s do wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Mazání uivatelù"; // 5.0
$LNG['a_del_headers'] = "Vymazat uivatele"; // 5.0
$LNG['a_del_done'] = "Uivatel byl vymazán."; // 5.0
$LNG['a_del_dones'] = "Uivatelé byli vymazáni."; // 5.0
$LNG['a_del_warn'] = "Jste si jist e chcete vymazat %s?"; // 5.0
$LNG['a_del_multi'] = "tyto %s uivatele"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Smazat filtrované slovo"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Smazat filtrovaná slova"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtrované slovo bylo vymazáno."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtrovaná slova byla vymazána."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Jste si jistý že chcete vymazat  %s ze seznamu filtrovaných slov?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "tato %s slova"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Nesprávné ID filtrovaného slova.  Zkuste to znovu."; // 5.1.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Smazat podstránku"; // 5.1.0
$LNG['a_del_page_headers'] = "Smazat podstránky"; // 5.1.0
$LNG['a_del_page_done'] = "Podstránka byla smazána."; // 5.1.0
$LNG['a_del_page_dones'] = "Podstránky byl smazány."; // 5.1.0
$LNG['a_del_page_warn'] = "Jste si jistý že chcete smazat %s?"; //5.1.0
$LNG['a_del_page_multi'] = "tito %s uživatelé"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Chybné ID podstránky.  Zkuste to znovu."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Mazání komentáøù"; // 5.0
$LNG['a_del_rev_headers'] = "Mazání komentáøù"; // 5.0
$LNG['a_del_rev_done'] = "Komentáø byl vymazán."; // 5.0
$LNG['a_del_rev_dones'] = "Komentáøe byly vymazány."; // 5.0
$LNG['a_del_rev_warn'] = "Jste si jist e chcte tento komentáø vymazat?"; //5.0
$LNG['a_del_rev_warns'] = "Jste si jist e chcte vymazat tyto komentáøe?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Chybné ID komentáøe."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Editace uivatelù"; // 5.0
$LNG['a_edit_site_is'] = "Tato stránka je"; // 4.0
$LNG['a_edit_active'] = "Aktivní"; // 4.0
$LNG['a_edit_inactive'] = "Neaktivní"; // 5.0
$LNG['a_edit_edited'] = "Uivatel byl upraven.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Upravit seznam filtrovaných slov"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtované slovo bylo upraveno."; // 5.1.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Upravit podstránku"; // 5.1.0
$LNG['a_edit_page_content'] = "Obsah - Mùžete použít HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "Stránka byla upravena."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Editace komentáøù"; // 5.0
$LNG['a_edit_rev_edited'] = "Komentáø byl editován.";

// Admin > Email Members
$LNG['a_email_header'] = "Emaily uivatelúm"; // 5.0
$LNG['a_email_subject'] = "Pøedmìt"; // 4.2.0
$LNG['a_email_message'] = "Zpráva"; // 4.2.0
$LNG['a_email_msg_sent'] = "Mail uivateli %s byl odeslán"; // 5.0
$LNG['a_email_not_sent'] = "Mail uivateli %s nebyl odeslán"; // 5.0
$LNG['a_email_sent'] = "%s uivatelù bylo obesláno."; // 4.2.0
$LNG['a_email_failed'] = "%s uivatelù nebylo obesláno."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Jste pøihláen jako administrátor."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administrace"; // 5.0
$LNG['a_main'] = "Vítejte v administraci. Odkazy nalevo vám pomohou s nastavením"; // 5.0
$LNG['a_main_approve'] = "1 stránka èeká na schválení."; // 5.0
$LNG['a_main_approves'] = "Stránky èekající na schváleni: %s "; // 5.0
$LNG['a_main_approve_rev'] = "1 komentáø èeká na schválení."; // 5.0
$LNG['a_main_approve_revs'] = "%s komentáøù èeká na schválení"; // 5.0
$LNG['a_main_your'] = "Vae verze"; // 5.0
$LNG['a_main_latest'] = "Poslední verze"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Nastavení uivatelù"; // 5.0
$LNG['a_man_actions'] = "Akce"; // 4.2.0
$LNG['a_man_edit'] = "Editovat"; // 4.2.0
$LNG['a_man_delete'] = "Smazat"; // 4.2.0
$LNG['a_man_email'] = "Zaslat email"; // 4.2.0
$LNG['a_man_all'] = "Oznaèit ve"; // 5.0
$LNG['a_man_none'] = "Odznaèit ve"; // 5.0
$LNG['a_man_del_sel'] = "Smazat vybrané"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Filtr nevhodných slov"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Vložte slovo a jeho náhradu.  Napøíklad \"èurák\" jako slovo and \"è***\" jako náhrada."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Pøesná - pokud zvolíte tuto funkci, systém nahradí jen slov, která se pøesnì shodují se slovem.  Globální - vhledá a upraví všechna slova, která obsahují filtrované slovo."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Slovo"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Náhrada"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Shoda"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Pøesná"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globální"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtrovat"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" bylo nalezeno a a pøefiltrováno."; // 5.1.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Správa podstránek"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Nastavení komentáøú"; // 5.0
$LNG['a_man_rev_enter'] = "Vlote login uivatele, u kterého chcete editovat komentáøe ."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Komentáø"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Hlavní"; // 5.0
$LNG['a_menu_approve'] = "Potvrdit nové uivatele";
$LNG['a_menu_manage'] = "Nastavení uivatelù"; // 4.2.0
$LNG['a_menu_settings'] = "Zmìna globálního nastavení"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filtr nevhodných slov"; // 5.1.0
$LNG['a_menu_skins'] = "Zmìna Vzhledu a kategorií"; // 5.0
$LNG['a_menu_approve_reviews'] = "Potvrdit nové komentáøe"; // 5.0
$LNG['a_menu_manage_reviews'] = "Nastavení komentáøù"; // 5.0
$LNG['a_menu_email'] = "Poslat mail uivatelùm";
$LNG['a_menu_delete_review'] = "Mazání komentáøù";
$LNG['a_menu_logout'] = "Odhlásit se";
$LNG['a_menu_delete'] = "Smazat uivatele";
$LNG['a_menu_edit'] = "Editovat uivatele";
$LNG['a_menu_create_page'] = "Vtvoøit podstránku"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Správa podstránek"; // 5.1.0
$LNG['a_header_members'] = "Uivatelé"; // 5.0
$LNG['a_header_settings'] = "Nastavení"; // 5.0
$LNG['a_header_reviews'] = "Komentáøe"; // 5.0
$LNG['a_header_pages'] = "Podstránky"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Zmìna nastavení";
$LNG['a_s_help'] = "Nápovìda"; // 5.1.0

$LNG['a_s_general'] = "Globální nastavení";
$LNG['a_s_admin_password'] = "Heslo administrátora";
$LNG['a_s_list_name'] = "Jméno vaeho webu";
$LNG['a_s_list_url'] = "URL Topsite";
$LNG['a_s_default_language'] = "Hlavní Jazyk";
$LNG['a_s_your_email'] = "Vae emailová adresa";

$LNG['a_s_sql'] = "Nastavení SQL";
$LNG['a_s_sql_type'] = "Typ databáte (napø.MySQL)"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Jméno databáze";
$LNG['a_s_sql_username'] = "Uivatelské jméno databáze";
$LNG['a_s_sql_password'] = "Heslo databáze";

$LNG['a_s_ranking'] = "Nastavení hodnocení";
$LNG['a_s_num_list'] = "Poèet poloek na stránku"; // 5.0
$LNG['a_s_ranking_period'] = "Timer hlasování"; // 5.0
$LNG['a_s_ranking_method'] = "Metoda hlasování"; // 5.0
$LNG['a_s_ranking_average'] = "Hodnocení podle prùmìru nebo podle %s"; // 5.0
$LNG['a_s_featured_member'] = 'Zvýhodnìní uivatelù - Musíte pøidat {$featured_member} do wrapper.html potom co tuto poloku aktivujete (je umístìn v /skins/aktualní_skin/wrapper.html).'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Kolik stránek v TOP má mít zobrazovaný banner?";
$LNG['a_s_ad_breaks'] = "Zobrazit ads až za hodnocením (oddìlit tabulkou) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_member'] = "Nastavení uivatelù";
$LNG['a_s_active_default'] = "Potvrzování nových uivatelù administrátorem?";
$LNG['a_s_active_default_review'] = "Potvrzování nových komentáøù administrátorem?";
$LNG['a_s_delete_after'] = "Smazat automaticky neaktivní uivatele po x dnech? (nastavení na 0 znamená vypnuto)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Poslat mail adminovi když se zaregistruje nový uživatel"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Poslat mail adminovi když nìkdo napíše komentáø"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maximální íøka banneru (0 znamená neomezeno)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximální výka banneru (0 znamená neomezeno)"; // 4.2.0
$LNG['a_s_default_banner'] = "Defaultní banner pro ty kteøí jej nemají";

$LNG['a_s_button'] = "Nastavení tlaèítek (hlasujte v toplistu atd.)";
$LNG['a_s_ranks_on_buttons'] = "Hodnocení tlaèítkem -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Tlaèítko"; // 4.2.0
$LNG['a_s_button_url'] = "Pokud Ano/Ne - URL defaultního tlaèítka"; // 4.0
$LNG['a_s_button_dir'] = "Pokud ano - URL sloky s tlaøítky"; // 4.0
$LNG['a_s_button_ext'] = "Pokud ano - Pøípona souboru (gif, png, jpg, atd.)"; // 4.0
$LNG['a_s_button_num'] = "Pokud ano - Poøet tlaøítek které máte"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly odkazy - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_other'] = "Ostatní nastavení";
$LNG['a_s_search'] = "Vyhledávání";
$LNG['a_s_time_offset'] = "Èasový posun vaeho serveru (v hodinách)";
$LNG['a_s_gateway'] = "Gateway stránka která zdrí cheatery mezi kliknutími";
$LNG['a_s_captcha'] = "Potvrzení kódem pøi registraci (ochrada proti spamerùm) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_on'] = "Zapnout";
$LNG['a_s_off'] = "Vypnout";
$LNG['a_s_days'] = "Dny";
$LNG['a_s_months'] = "Mìsíce";
$LNG['a_s_weeks'] = "Týdny"; // 4.2.0
$LNG['a_s_yes'] = "Ano";
$LNG['a_s_no'] = "Ne";

$LNG['a_s_updated'] = "Nastavení bylo aktualizováno.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Vzhled a kategorie"; // 5.0
$LNG['a_skins_default'] = "Základní vzhled"; // 5.0
$LNG['a_skins_set_default'] = "Nastavit základní vzhled"; // 5.0
$LNG['a_skins_anon'] = "Neznámý"; // 5.0
$LNG['a_skins_default_done'] = "Základní vzhled byl nastaven."; // 5.0
$LNG['a_skins_categories_done'] = "Vzhled kategorie byl nastaven."; // 5.0
$LNG['a_skins_new_category_done'] = "Nová kategorie byla vtvoøena."; // 5.0
$LNG['a_skins_delete_done'] = "Kategorie byla vymazána."; // 5.0
$LNG['a_skins_delete_error'] = "Kategorie nemùže být smazána."; // 5.1.0
$LNG['a_skins_edit_done'] = "Editace kategorie probìhla v poøádku."; // 5.0
$LNG['a_skins_invalid_skin'] = "Vadný vzhled: %s.  Zkuste to znovu."; // 5.0
$LNG['a_skins_categories'] = "Kategorie"; // 5.0
$LNG['a_skins_new_category'] = "Vytvoøit novou kategorii"; // 5.0
$LNG['a_skins_set_skins'] = "Nastavit vzhled pro kategorii"; // 5.0
$LNG['a_skins_edit_category'] = "Upravit kategorii"; // 5.0
$LNG['a_skins_category_name'] = "Jméno kategorie"; // 5.0
$LNG['a_skins_diff_skins'] = "Pro kterokoliv kategorii lze nastavit samostatný vzhled, pokud chcete, uèiòte tak."; // 5.0
?>
