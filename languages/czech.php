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
$translation = 'Czech (Česky)';
$translator_name = 'Robert Adamek';
$translator_email = 'admin@ultima.cz';
$translator_url = 'http://www.ultima.cz/';

// Set this to the character encoding of your translation
$LNG['charset'] = "utf-8";

// Global
$LNG['g_form_submit_short'] = "Go";
$LNG['g_username'] = "Uživatelské jméno";
$LNG['g_url'] = "URL (vč. http://)";
$LNG['g_title'] = "Název";
$LNG['g_description'] = "Popis";
$LNG['g_category'] = "Kategorie"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "URL banneru (vč. http://)";
$LNG['g_password'] = "Heslo";
$LNG['g_average'] = "Průměr";
$LNG['g_today'] = "Dnes";
$LNG['g_yesterday'] = "Včera";
$LNG['g_daily'] = "Denní"; // 5.0
$LNG['g_this_month'] = "Tento měsíc"; // 5.0
$LNG['g_last_month'] = "Minulý měsíc"; // 5.0
$LNG['g_monthly'] = "Měsíční"; // 5.0
$LNG['g_this_week'] = "Tento týden"; // 5.0
$LNG['g_last_week'] = "Minulý týden"; // 5.0
$LNG['g_weekly'] = "Týdení"; // 5.0
$LNG['g_pv'] = 'Zobrazení stránek'; // 5.0
$LNG['g_overall'] = 'Celkem'; // 5.0
$LNG['g_in'] = 'Příchozí'; // 5.0
$LNG['g_out'] = 'Odchozí'; // 5.0
$LNG['g_unq_pv'] = "Unikátních návštěv"; // 5.0
$LNG['g_tot_pv'] = "Celkem návštěv"; // 5.0
$LNG['g_unq_in'] = "Unikátní Příchozí kliknutí"; // 5.0
$LNG['g_tot_in'] = "Příchozí kliknutí"; // 5.0
$LNG['g_unq_out'] = "Unikátní odchozí kliknutí"; // 5.0
$LNG['g_tot_out'] = "Odchozí kliknutí"; // 5.0
$LNG['g_invalid_u_or_p'] = "Chybné uživatelské jméno nebo heslo. Zkuste to znovu."; // 5.0
$LNG['g_invalid_u'] = "Chybné uživatelské jméno.  Zkuste to znovu"; // 5.0
$LNG['g_invalid_p'] = "Chybné heslo. Zkuste to znovu"; // 5.0
$LNG['g_session_expired'] = "Byl jste odhlášen.  Přihlašte se znovu."; // 5.0
$LNG['g_error'] = "Error"; // 5.0
$LNG['g_delete_install'] = "Z bezpeřnostních důvodů musíte nejprve smazat adresář /install z vašeho FTP."; // 5.0
$LNG['g_ip'] = "IP Addresa"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Upravit účet";
$LNG['edit_info_edited'] = "Účet byl upraven.";
$LNG['edit_password_blank'] = "Zanechte tuto položku prázdnou pokud chcete ponechat stávající heslo"; // 4.0
$LNG['edit_delay'] = "Změny v názvu a URL musí být schváleny administrátorem, do té doby nebude váš odkaz zobrazován."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Vstupní brána";
$LNG['gateway_text'] = "Tato stránka je zde kvůli cheaterům.  Klikněte na jeden z následujících odkazů.";
$LNG['gateway_vote'] = "Vstoupit a hlasovat";
$LNG['gateway_no_vote'] = "Vstoupit bez hlasování"; // 5.0

// Install
$LNG['install_header'] = "Instalace";
$LNG['install_welcome'] = "Vítejte v Aardvark Topsites PHP 5.  Pro úspěšnou instalaci je potřeba vyplnit tento formulář.";
$LNG['install_sql_prefix'] = "Prefix tabulk - změòte pouze v případě, kdy využíváte více těchto instalací v jedné databázi";
$LNG['install_error_chmod'] = "Nemůžu zapisovat do settings_sql.php.  Ujistěte se, že soubor má nastaveny parametry 755.";
$LNG['install_error_sql'] = "Nemůžu se připojit k databázi.  Vrate se a opravte nastavení SQL.";
$LNG['install_done'] = "Dokončil jsem instalaci.  Smažte adresář /install z FTP.";
$LNG['install_your'] = "Váš Toplist";
$LNG['install_admin'] = "Administrace";
$LNG['install_manual'] = "Manuál (Anglicky)";
$LNG['upgrade_header'] = "Aktualizace";
$LNG['upgrade_welcome'] = "Vítejte v Aardvark Topsites PHP 5.  Dříve než přistoupíte k aktualizaci, ujistěte se, že máte zálohována data.";
$LNG['upgrade_version'] = "Ujistěte se prosím, že jste upgradovali na verzi %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Aktualizace je možná pouze Aardvark Topsites PHP 4.1.0 a vyšší.";
$LNG['upgrade_done'] = "Aktualizoval jsem systém, nyní smažte adresář /upgrade";
$LNG['install_mailing_list'] = "Pokud se chcete zařadit do Aardvark Topsites PHP mailing list, vložte svou mailovou adresu.  Jedná se o informační systém pomocí kterého budete informováni o důležitých aktualizacích skriptů a nových verzích."; // 5.2.0

// Join
$LNG['join_header'] = "Registrace";
$LNG['join_enter_text'] = "Opište kód z obrázku:"; // 4.2.2
$LNG['join_enter_text_read'] = "Nelze přečíst?"; // 5.2.0
$LNG['join_user'] = "Uživatel"; // 5.0
$LNG['join_website'] = "Stránka"; // 5.0
$LNG['join_banner_size'] = "(Maximální velikost: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Vložte jiné uživatelské jméno: použijte pouze písmena, číslice, podlomítka a nadlomítka."; // 5.0
$LNG['join_error_username_duplicate'] = "Vložte jiné uživatelské jméno: to které jste vbrali už vlastní jiný uživatel."; // 5.0
$LNG['join_error_url'] = "Vložte správnou URL (příklad: http://www.ultima.cz).";
$LNG['join_error_email'] = "Vložte správnou emailovou adresu.";
$LNG['join_error_title'] = "Vložte název vaší stránky.";
$LNG['join_error_password'] = "Vložte heslo.";
$LNG['join_error_confirm_password'] = "Heslo nesouhlasí."; // 5.2.0
$LNG['join_error_urlbanner'] = "Vložte správný banner.  Ponechte prázdné pokud jej nemáte."; // 5.2.0
$LNG['join_error_time'] = "Neaktualizujte registrační stránku."; // 4.2.0
$LNG['join_error_captcha'] = "Znaky které jste vložili nesouhlasí se znaky na obrázku."; // 4.2.2
$LNG['join_error_question'] = "Vaše odpověï není správná.  Prosím potvrïte že jste reálná osoba a ne robot."; // 5.2.0
$LNG['join_thanks'] = "Děkujeme za registraci. Nyní do svých stránek vložte tento kód.";
$LNG['join_change_warning'] = "Pokud kód pozměníte, nebude funkční.";
$LNG['join_welcome'] = "Vítejte v %s";
$LNG['join_welcome_admin'] = "Nový uživatel se zaregistroval.";
$LNG['join_approve'] = "Děkujeme za registraci!  Vaše stránka byla předána k ověření administrátorem.  Jakmile bude stránka ověřena, bude vám zaslán informační email."; // 5.2.0
$LNG['join_type'] = "Typ účtu"; // 5.1.0
$LNG['join_standard'] = "Standardní"; // 5.1.0
$LNG['join_error_top'] = "Vyskytla se chyba při odeslání."; // 5.2.0
$LNG['join_ban_top'] = "Váš obsah bylů zabanován administrátorem."; // 5.2.0
$LNG['join_security'] = "Bezpečnost"; // 5.2.0
$LNG['join_confirm_password'] = "Potvrzení hesla"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Kód odkazu"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Ztráta hesla"; // 5.0
$LNG['lost_pw_forgot'] = "Zapoměl jste své heslo?"; // 5.0
$LNG['lost_pw_get'] = "Získat heslo"; // 5.0
$LNG['lost_pw_emailed'] = "Zkontrolujte si poštu a postupujte podle instrukcí v ní."; // 5.0
$LNG['lost_pw_email'] = "Pro vytvoření nového hesla přejděte na tuto adresu"; // 5.0
$LNG['lost_pw_new'] = "Vložit nové heslo"; // 5.0
$LNG['lost_pw_set_new'] = "Nastavit nové heslo"; // 5.0
$LNG['lost_pw_finish'] = "Změnil jsem heslo. Nyní se můžete přihlásit."; // 5.0

// Main Page
$LNG['main_header'] = "ebříčk"; // 5.0
$LNG['main_all'] = "Vyberte žebříček"; // 4.2.0
$LNG['main_method'] = "Metody měření";
$LNG['main_members'] = "Uživatelé";
$LNG['main_menu_rankings'] = "Hodnocení";
$LNG['main_menu_join'] = "Registrace";
$LNG['main_menu_random'] = "Náhodný uživatel";
$LNG['main_menu_search'] = "Vyhledat";
$LNG['main_menu_lost_code'] = "Ztráte kódu"; // 5.0
$LNG['main_menu_lost_password'] = "Ztráta hesla"; // 5.0
$LNG['main_menu_edit'] = "Upravit informace uživatele";
$LNG['main_menu_user_cp'] = "Přihlášení"; // 5.0
$LNG['main_featured'] = "Sponzor"; // 4.0.2
$LNG['main_executiontime'] = "Doba zpracování dotazu"; // 4.0
$LNG['main_queries'] = "SQL Dotazů"; // 4.0
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
$LNG['table_down'] = "Dolů"; // 5.0
$LNG['table_neutral'] = "Stálý"; // 5.0
$LNG['table_your_site_here'] = "Vaše stránka"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Hodnocení nebo komentář";
$LNG['rate_message'] = "Můžete zaslat své hodnocení a komentář k %s pomocí formuláře dole."; // 5.2.0
$LNG['rate_rating'] = "Hodnocení";
$LNG['rate_review'] = "Komentář - HTML není povoleno"; // 5.0
$LNG['rate_thanks'] = "Děkujeme vám za hodnocení.";
$LNG['rate_error'] = "Už jste hodnotil.";
$LNG['rate_back'] = "Zpět na statistiky";
$LNG['rate_email_admin'] = "Nový komentář b přidán."; // 5.1.0

// Search
$LNG['search_header'] = "Vyhledat";
$LNG['search_off'] = "Vyhledávání je vypnuto.";
$LNG['search_no_sites'] = "Bohužel vhledávání dle zadaných parametrú neblo úspěšné."; // 5.0
$LNG['search_prev'] = "Předchozí"; // 3.2.1
$LNG['search_next'] = "Následující"; // 3.2.1
$LNG['search_displaying_results'] = "Zobrazit od %s do %s z %s výsledků pro <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistiky";
$LNG['stats_info'] = "Informace";
$LNG['stats_member_since'] = "Datum registrace"; // 5.0
$LNG['stats_rating_avg'] = "Průměr";
$LNG['stats_rating_num'] = "Počet hlasů";
$LNG['stats_rate'] = "Přidat komentář nebo Hodnotit";
$LNG['stats_reviews'] = "Komentáře";
$LNG['stats_allreviews'] = "Zobrazit všechny komentáře"; // 4.0
$LNG['stats_week'] = "Týden"; // 5.0
$LNG['stats_highest'] = "Nejvšší"; // 5.0
$LNG['stats_overall'] = "Celkové statistiky"; // 5.2.0
$LNG['stats_overall_average'] = "Průměr (Posledních 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Celkem (Celé období)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Stránek"; // 4.0
$LNG['ssi_new'] = "%s Nových uživatelů"; // 5.0
$LNG['ssi_all'] = "Všechny stránky"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Kontrolní panel"; // 5.0
$LNG['user_cp_login'] = "Přihlásit se"; // 5.0
$LNG['user_cp_logout'] = "Odhlásit se"; // 5.0
$LNG['user_cp_welcome'] = "Vítejte v kontrolním panelu, odkazy nalevo vám pomohou nastavit účet."; // 5.0
$LNG['user_cp_logout_message'] = "Nyní jste odhlášen."; // 5.0
$LNG['user_cp_login_long'] = "Přihlášení uživatelským jménem a heslem nebo pomocí vašeho ID."; // 5.1.0
$LNG['user_cp_openid'] = "Vaše ID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Nemohu najít server s tímto ID: %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Musíte být přihlášen, aby jste mohl zobrazit Kontrolní panel."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Chyba při přihlašování, zkuste to znovu."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Musíte mít kompletní přístup do nastavení. Zkuste zo znovu.."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Chyba serveru: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Nelze se přihlásit do systému dokud nebude vaše stránka porvrzena administrátorem.  Jakmile bude stránka ověřena, bude vám zaslán informační email. "; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Potvrzení uživatelů"; // 5.0
$LNG['a_approve'] = "Potvrdit"; // 4.0
$LNG['a_approve_none'] = "Na potvrzení nečekají žádní uživatelé."; // 4.0
$LNG['a_approve_done'] = "Nový uživatel byl potvrzen."; // 4.0
$LNG['a_approve_dones'] = "Noví uživatelé byli potvrzeni."; // 4.0
$LNG['a_approve_sel'] = "Vybrané:"; // 5.0

// Admin > Potvrzení editací uživatelů // 5.2.0
$LNG['a_approve_edited_header'] = "Potvrdit editace uživatelů"; // 5.2.0
$LNG['a_approve_edited_none'] = "ádné editace nečekají na schválení."; // 5.2.0
$LNG['a_approve_edited_old'] = "Předchozí název a URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Nový název a URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Zamítnout"; // 5.2.0
$LNG['a_approve_edited_done'] = "Změny byly potvrzeny."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Změny byly zamítnuty."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Potvrzení komentářů"; // 5.0
$LNG['a_approve_rev_none'] = "ádné komentáře k potvrzení."; // 5.0
$LNG['a_approve_rev_done'] = "Komentář byl potvrzen."; // 5.0
$LNG['a_approve_rev_dones'] = "Komentáře byly potvrzeny."; // 5.0

// Admin > Záloha databáze // 5.2.0
$LNG['a_backup_header'] = "Záloha databáze"; // 5.2.0
$LNG['a_backup_warn'] = "Tato funkce provede zálohu tabulek uživatelů a statistik.  Pokud máte hodně uživatelů, trvá záloha mnohem déle a výchozí soubor je větší."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Vytvořit podstránku"; // 5.1.0
$LNG['a_create_page_id'] = "ID stránky - Toto číslo bude použito v adrese, můžete použít pouze písmena, čísla a unicode znaky."; // 5.1.0
$LNG['a_create_page_error_id'] = "ID stránky nesmí obsahovat jiné znaky než písmena, číslice a podtržítka. Vrate se zpět a opravte ID stránky."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "ID stránky které jste zadal již existuje, vrate se zpět a změòte ID."; // 5.1.0
$LNG['a_create_page_created'] = "Stránka vytvořena.  Musíte ručně vložit tento link %s do wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Mazání uživatelů"; // 5.0
$LNG['a_del_headers'] = "Vymazat uživatele"; // 5.0
$LNG['a_del_done'] = "Uživatel byl vymazán."; // 5.0
$LNG['a_del_dones'] = "Uživatelé byli vymazáni."; // 5.0
$LNG['a_del_warn'] = "Jste si jist že chcete vymazat %s?"; // 5.0
$LNG['a_del_multi'] = "tyto %s uživatele"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Smazat filtrované slovo"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Smazat filtrovaná slova"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtrované slovo bylo vymazáno."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtrovaná slova byla vymazána."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Jste si jistý že chcete vymazat  %s ze seznamu filtrovaných slov?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "tato %s slova"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Nesprávné ID filtrovaného slova.  Zkuste to znovu."; // 5.1.0

// Admin > Mazání banlistu // 5.2.0
$LNG['a_del_ban_header'] = "Mazání banů"; // 5.2.0
$LNG['a_del_ban_headers'] = "Mazání položek blacklisu"; // 5.2.0
$LNG['a_del_ban_done'] = "Bany byly smazány."; // 5.2.0
$LNG['a_del_ban_dones'] = "Položky blacklistu byly smazány."; // 5.2.0
$LNG['a_del_ban_warn'] = "Jste si jistý že chcete smazat %s položek z blacklistu?"; //5.2.0
$LNG['a_del_ban_multi'] = "je zde %s záznamů"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Chybné ID blacklistu.  Zkuste znovu."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Smazat podstránku"; // 5.1.0
$LNG['a_del_page_headers'] = "Smazat podstránky"; // 5.1.0
$LNG['a_del_page_done'] = "Podstránka byla smazána."; // 5.1.0
$LNG['a_del_page_dones'] = "Podstránky byl smazány."; // 5.1.0
$LNG['a_del_page_warn'] = "Jste si jistý že chcete smazat %s?"; //5.1.0
$LNG['a_del_page_multi'] = "tito %s uživatelé"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Chybné ID podstránky.  Zkuste to znovu."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Mazání komentářů"; // 5.0
$LNG['a_del_rev_headers'] = "Mazání komentářů"; // 5.0
$LNG['a_del_rev_done'] = "Komentář byl vymazán."; // 5.0
$LNG['a_del_rev_dones'] = "Komentáře byly vymazány."; // 5.0
$LNG['a_del_rev_warn'] = "Jste si jist že chcte tento komentář vymazat?"; //5.0
$LNG['a_del_rev_warns'] = "Jste si jist že chcte vymazat tyto komentáře?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Chybné ID komentáře."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Editace uživatelů"; // 5.0
$LNG['a_edit_site_is'] = "Tato stránka je"; // 4.0
$LNG['a_edit_active'] = "Aktivní"; // 4.0
$LNG['a_edit_inactive'] = "Neaktivní"; // 5.0
$LNG['a_edit_edited'] = "Uživatel byl upraven.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Upravit seznam filtrovaných slov"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtované slovo bylo upraveno."; // 5.1.0

// Admin > Editace banování // 5.2.0
$LNG['a_edit_ban_header'] = "Editace záznamů v blacklistu"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Záznamy byly upraveny."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Upravit podstránku"; // 5.1.0
$LNG['a_edit_page_content'] = "Obsah - Můžete použít HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "Stránka byla upravena."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Editace komentářů"; // 5.0
$LNG['a_edit_rev_edited'] = "Komentář byl editován.";

// Admin > Email Members
$LNG['a_email_header'] = "Emaily uživatelúm"; // 5.0
$LNG['a_email_subject'] = "Předmět"; // 4.2.0
$LNG['a_email_message'] = "Zpráva"; // 4.2.0
$LNG['a_email_msg_sent'] = "Mail uživateli %s byl odeslán"; // 5.0
$LNG['a_email_not_sent'] = "Mail uživateli %s nebyl odeslán"; // 5.0
$LNG['a_email_sent'] = "%s uživatelů bylo obesláno."; // 4.2.0
$LNG['a_email_failed'] = "%s uživatelů nebylo obesláno."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Jste přihlášen jako administrátor."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administrace"; // 5.0
$LNG['a_main'] = "Vítejte v administraci. Odkazy nalevo vám pomohou s nastavením"; // 5.0
$LNG['a_main_approve'] = "1 stránka čeká na schválení."; // 5.0
$LNG['a_main_approves'] = "Stránky čekající na schváleni: %s "; // 5.0
$LNG['a_main_approve_edit'] = "1 stránka čeká ke schválení."; // 5.2.0
$LNG['a_main_approve_edits'] = "Ke schválení čeká %s stránek."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 komentář čeká na schválení."; // 5.0
$LNG['a_main_approve_revs'] = "%s komentářů čeká na schválení"; // 5.0
$LNG['a_main_your'] = "Vaše verze"; // 5.0
$LNG['a_main_latest'] = "Poslední verze"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Nastavení uživatelů"; // 5.0
$LNG['a_man_actions'] = "Akce"; // 4.2.0
$LNG['a_man_edit'] = "Editovat"; // 4.2.0
$LNG['a_man_delete'] = "Smazat"; // 4.2.0
$LNG['a_man_email'] = "Zaslat email"; // 4.2.0
$LNG['a_man_all'] = "Označit vše"; // 5.0
$LNG['a_man_none'] = "Odznačit vše"; // 5.0
$LNG['a_man_del_sel'] = "Smazat vybrané"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Filtr nevhodných slov"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Vložte slovo a jeho náhradu.  Například \"čurák\" jako slovo and \"č***\" jako náhrada."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Přesná - pokud zvolíte tuto funkci, systém nahradí jen slov, která se přesně shodují se slovem.  Globální - vhledá a upraví všechna slova, která obsahují filtrované slovo."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Slovo"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Náhrada"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Shoda"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Přesná"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globální"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtrovat"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" bylo nalezeno a a přefiltrováno."; // 5.1.0

// Admin > Správa banů // 5.2.0
$LNG['a_man_ban_header'] = "Blacklist"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Pokud chcete někomu zam,ezit přístup do toplistu, můžete tak učinit zde.  Pokud se uživatel zaregistroval a nevyhovuje vám jeho záznam, povšimněte si toho již při potvrzování registrace nebo úprav.<br /><br />Blacklist nefunguje na vaše existující uživatele, musíte ho nejprve smazat."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Přesné porovnání porovná pouze zadaný text. Globální porovnání porovná cokoliv, co obsahuje zadaný text. Takže při zadání http://www.yahoo.com u standarního porovnání porovná jakoukoli stránku, která má ve svém URL http://www.yahoo.com , zatímco přesné porovnání vyhledá pouze toto URL"; // 5.2.0
$LNG['a_man_ban_string'] = "String"; // 5.2.0
$LNG['a_man_ban_field'] = "Field"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" bylo přidáno do blacklistu."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Správa podstránek"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Nastavení komentářú"; // 5.0
$LNG['a_man_rev_enter'] = "Vložte login uživatele, u kterého chcete editovat komentáře ."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Komentář"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Hlavní"; // 5.0
$LNG['a_menu_approve'] = "Potvrdit nové uživatele";
$LNG['a_menu_approve_edits'] = "Potvrzení úprav uživatele"; // 5.2.0
$LNG['a_menu_manage'] = "Nastavení uživatelů"; // 4.2.0
$LNG['a_menu_settings'] = "Změna globálního nastavení"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filtr nevhodných slov"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Blacklist"; // 5.2.0
$LNG['a_menu_backup'] = "Záloha databáze"; // 5.2.0
$LNG['a_menu_skins'] = "Změna Vzhledu a kategorií"; // 5.0
$LNG['a_menu_approve_reviews'] = "Potvrdit nové komentáře"; // 5.0
$LNG['a_menu_manage_reviews'] = "Nastavení komentářů"; // 5.0
$LNG['a_menu_email'] = "Poslat mail uživatelům";
$LNG['a_menu_delete_review'] = "Mazání komentářů";
$LNG['a_menu_logout'] = "Odhlásit se";
$LNG['a_menu_delete'] = "Smazat uživatele";
$LNG['a_menu_edit'] = "Editovat uživatele";
$LNG['a_menu_create_page'] = "Vtvořit podstránku"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Správa podstránek"; // 5.1.0
$LNG['a_header_members'] = "Uživatelé"; // 5.0
$LNG['a_header_settings'] = "Nastavení"; // 5.0
$LNG['a_header_tools'] = "Doplòky"; // 5.2.0
$LNG['a_header_reviews'] = "Komentáře"; // 5.0
$LNG['a_header_pages'] = "Podstránky"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Změna nastavení";
$LNG['a_s_help'] = "Nápověda"; // 5.1.0

$LNG['a_s_general'] = "Globální nastavení";
$LNG['a_s_admin_password'] = "Heslo administrátora";
$LNG['a_s_list_name'] = "Jméno vašeho webu";
$LNG['a_s_list_url'] = "URL Topsite";
$LNG['a_s_default_language'] = "Hlavní Jazyk";
$LNG['a_s_your_email'] = "Vaše emailová adresa";

$LNG['a_s_sql'] = "Nastavení SQL";
$LNG['a_s_sql_type'] = "Typ databáte (např.MySQL)"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Jméno databáze";
$LNG['a_s_sql_username'] = "Uživatelské jméno databáze";
$LNG['a_s_sql_password'] = "Heslo databáze";

$LNG['a_s_ranking'] = "Nastavení hodnocení";
$LNG['a_s_num_list'] = "Počet položek na stránku"; // 5.0
$LNG['a_s_ranking_period'] = "Timer hlasování"; // 5.0
$LNG['a_s_ranking_method'] = "Metoda hlasování"; // 5.0
$LNG['a_s_ranking_average'] = "Hodnocení podle průměru nebo podle %s"; // 5.0
$LNG['a_s_featured_member'] = 'Zvýhodnění uživatelů - Musíte přidat {$featured_member} do wrapper.html potom co tuto položku aktivujete (je umístěn v /skins/aktualní_skin/wrapper.html).'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Kolik stránek v TOP má mít zobrazovaný banner?";
$LNG['a_s_ad_breaks'] = "Zobrazit ads až za hodnocením (oddělit tabulkou) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Vyplòte prázdnou kolonku uvítací zprávou \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Nastavení uživatelů";
$LNG['a_s_active_default'] = "Potvrzování nových uživatelů administrátorem?";
$LNG['a_s_active_default_review'] = "Potvrzování nových komentářů administrátorem?";
$LNG['a_s_delete_after'] = "Smazat automaticky neaktivní uživatele po x dnech? (nastavení na 0 znamená vypnuto)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Poslat mail adminovi když se zaregistruje nový uživatel"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Poslat mail adminovi když někdo napíše komentář"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maximální šířka banneru (0 znamená neomezeno)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximální výška banneru (0 znamená neomezeno)"; // 4.2.0
$LNG['a_s_default_banner'] = "Defaultní banner pro ty kteří jej nemají";

$LNG['a_s_button'] = "Nastavení tlačítek (hlasujte v toplistu atd.)";
$LNG['a_s_ranks_on_buttons'] = "Hodnocení tlačítkem -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Tlačítko"; // 4.2.0
$LNG['a_s_button_url'] = "Pokud Ano/Ne - URL defaultního tlačítka"; // 4.0
$LNG['a_s_button_dir'] = "Pokud ano - URL složky s tlařítky"; // 4.0
$LNG['a_s_button_ext'] = "Pokud ano - Přípona souboru (gif, png, jpg, atd.)"; // 4.0
$LNG['a_s_button_num'] = "Pokud ano - Pořet tlařítek které máte"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly odkazy - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gateway stránka která zdrží cheatery mezi kliknutími";
$LNG['a_s_captcha'] = "Potvrzení kódem při registraci (ochrada proti spamerům) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Bezpečnostní otázka proti spamenrům (ponechte prázdné pro znefunkčòění) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Ostatní nastavení";
$LNG['a_s_search'] = "Vyhledávání";
$LNG['a_s_time_offset'] = "časový posun vašeho serveru (v hodinách)";

$LNG['a_s_on'] = "Zapnout";
$LNG['a_s_off'] = "Vypnout";
$LNG['a_s_days'] = "Dny";
$LNG['a_s_months'] = "Měsíce";
$LNG['a_s_weeks'] = "Týdny"; // 4.2.0
$LNG['a_s_yes'] = "Ano";
$LNG['a_s_no'] = "Ne";
$LNG['a_s_answer'] = "Odpověï"; // 5.2.0

$LNG['a_s_updated'] = "Nastavení bylo aktualizováno.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Vzhled a kategorie"; // 5.0
$LNG['a_skins_default'] = "Základní vzhled"; // 5.0
$LNG['a_skins_set_default'] = "Nastavit základní vzhled"; // 5.0
$LNG['a_skins_anon'] = "Neznámý"; // 5.0
$LNG['a_skins_default_done'] = "Základní vzhled byl nastaven."; // 5.0
$LNG['a_skins_categories_done'] = "Vzhled kategorie byl nastaven."; // 5.0
$LNG['a_skins_new_category_done'] = "Nová kategorie byla vtvořena."; // 5.0
$LNG['a_skins_delete_done'] = "Kategorie byla vymazána."; // 5.0
$LNG['a_skins_delete_error'] = "Kategorie nemůže být smazána."; // 5.1.0
$LNG['a_skins_edit_done'] = "Editace kategorie proběhla v pořádku."; // 5.0
$LNG['a_skins_invalid_skin'] = "Vadný vzhled: %s.  Zkuste to znovu."; // 5.0
$LNG['a_skins_categories'] = "Kategorie"; // 5.0
$LNG['a_skins_new_category'] = "Vytvořit novou kategorii"; // 5.0
$LNG['a_skins_set_skins'] = "Nastavit vzhled pro kategorii"; // 5.0
$LNG['a_skins_edit_category'] = "Upravit kategorii"; // 5.0
$LNG['a_skins_category_name'] = "Jméno kategorie"; // 5.0
$LNG['a_skins_diff_skins'] = "Pro kterokoliv kategorii lze nastavit samostatný vzhled, pokud chcete, učiòte tak."; // 5.0
?>
