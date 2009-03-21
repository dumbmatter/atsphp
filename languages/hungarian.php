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
  die("A közvetlen hozzáférés nem engedélyezett.");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Hungarian (magyar nyelv)';
$translator_name = 'Varanka Zoltán';
$translator_email = 'webmester@novoportal.hu';
$translator_url = 'http://novoportal.hu/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-2";

// Global
$LNG['g_form_submit_short'] = "OK";
$LNG['g_username'] = "Felhasználónév";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Cím";
$LNG['g_description'] = "Leírás";
$LNG['g_category'] = "Kategória"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Jelszó";
$LNG['g_average'] = "Átlag";
$LNG['g_today'] = "Ma";
$LNG['g_yesterday'] = "Tegnap";
$LNG['g_daily'] = "Napi"; // 5.0
$LNG['g_this_month'] = "E havi"; // 5.0
$LNG['g_last_month'] = "Utolsó havi"; // 5.0
$LNG['g_monthly'] = "Havi"; // 5.0
$LNG['g_this_week'] = "E heti"; // 5.0
$LNG['g_last_week'] = "Múlt heti"; // 5.0
$LNG['g_weekly'] = "Heti"; // 5.0
$LNG['g_pv'] = "Oldal megtekintések"; // 5.0
$LNG['g_overall'] = "Összefoglaló"; // 5.0
$LNG['g_in'] = "Bemenõ"; // 5.0
$LNG['g_out'] = "Kimenõ"; // 5.0
$LNG['g_unq_pv'] = "Egyedi megtekintések"; // 5.0
$LNG['g_tot_pv'] = "Összes megtekintés"; // 5.0
$LNG['g_unq_in'] = "Egyedi bejövõ"; // 5.0
$LNG['g_tot_in'] = "Összes bejövõ"; // 5.0
$LNG['g_unq_out'] = "Egyedi kimenõ"; // 5.0
$LNG['g_tot_out'] = "Összes kimenõ"; // 5.0
$LNG['g_invalid_u_or_p'] = "Érvénytelen felhasználónév vagy jelszó. Próbálja meg újra!"; // 5.0
$LNG['g_invalid_u'] = "Érvénytelen felhasználónév. Próbálja meg újra!"; // 5.0
$LNG['g_invalid_p'] = "Érvénytelen jelszó. Próbálja meg újra!"; // 5.0
$LNG['g_session_expired'] = "A munkamenet lejárt. Próbálja meg újra!"; // 5.0
$LNG['g_error'] = "Hiba"; // 5.0
$LNG['g_delete_install'] = "Biztonsági okokból, törölje a korábbi telepítési könyvtárat, mielõtt a szkriptet futtatja!"; // 5.0
$LNG['g_ip'] = "IP cím"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Regisztráció szerkesztése";
$LNG['edit_info_edited'] = "A regisztráció szerkesztése sikeres volt.";
$LNG['edit_password_blank'] = "A jelenlegi jelszó megtartásához hagyja üresen!"; // 4.0
$LNG['edit_delay'] = "A webhely címének és URL-jének megváltoztatását az adminisztrátor hagyja jóvá, a változtatás csak utána lép érvénybe."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Topsites átjáró oldal";
$LNG['gateway_text'] = "A csalás megakadályozásához egy átjáró oldal lett telepítve. Kattintson az alábbi linkre a lista megtekintéséhez!";
$LNG['gateway_vote'] = "Belépés szavazással";
$LNG['gateway_no_vote'] = "Belépés szavazás nélkül"; // 5.0

// Install
$LNG['install_header'] = "Telepítés";
$LNG['install_welcome'] = "Üdvözli Önt az Aardvark Topsites PHP 5. A szkript telepítéséhez töltse ki az alábbi ûrlapot!";
$LNG['install_sql_prefix'] = "Tábla elõtag - csak akkor változtassa meg, ha ugyanabban az adatbázisban több listát futtat!";
$LNG['install_error_chmod'] = "A settings_sql.php nem írható. Ügyeljen a 666 jogosultság beállításra!";
$LNG['install_error_sql'] = "Nem lehet kapcsolódni az adatbázishoz. Lépjen vissza és ellenõrizze az SQL beállításokat!";
$LNG['install_done'] = "Az Ön Topsites listája sikeresen telepítésre került. Törölje ezt a könyvtárat most!";
$LNG['install_your'] = "Az Ön Topsites Listája";
$LNG['install_admin'] = "Adminisztráció";
$LNG['install_manual'] = "Kézikönyv";
$LNG['upgrade_header'] = "Frissítés";
$LNG['upgrade_welcome'] = "Üdvözli Önt az Aardvark Topsites PHP 5. A frissítés elõtt ne felejtse el az adatokat elmenteni!";
$LNG['upgrade_version'] = "Ellenõrizze, hogy a frissítés az %s verzióról történik!"; // 5.1.0
$LNG['upgrade_error_version'] = "A frissítés csak az Aardvark Topsites PHP 4.1.0 bagy magasabb verzió esetében támogatott.";
$LNG['upgrade_done'] = "Az Ön Topsites listája sikeresen frissítésre került. Törölje ezt a könyvtárat most!";
$LNG['install_mailing_list'] = "Ha szeretne csatlakozni az Aardvark Topsites PHP levelezõlistájához, adja meg az email címét lentebb! Ez egy lista a szkriptet érintõ olyan fontos bejelentésekrõl mint az új kiadás és biztonsági tanácsok."; // 5.2.0

// Join
$LNG['join_header'] = "Csatlakozás";
$LNG['join_enter_text'] = "Adja meg az alábbi képen látható szöveget!"; // 4.2.2
$LNG['join_enter_text_read'] = "Nem olvasható?"; // 5.2.0
$LNG['join_user'] = "Felhasználó"; // 5.0
$LNG['join_website'] = "Webhely"; // 5.0
$LNG['join_banner_size'] = "(Maximális méret: %s x %s)"; // 5.2.0
$LNG['join_error_username'] = "Érvényes felhasználónevet adjon meg! Csak ékezetnélküli betûket, számokat, aláhúzásjelet és kötõjelet használjon!"; // 5.0
$LNG['join_error_username_duplicate'] = "Érvényes felhasználónevet adjon meg! Ez a felhasználónév már foglalt!"; // 5.0
$LNG['join_error_url'] = "Érvényes URL-t adjon meg!";
$LNG['join_error_email'] = "Érvényes email címet adjon meg!";
$LNG['join_error_title'] = "Adja meg a webhelyének megnevezését (cím)!";
$LNG['join_error_password'] = "Adja meg a jelszót!";
$LNG['join_error_confirm_password'] = "A jelszavak nem egyeznek!"; // 5.2.0
$LNG['join_error_urlbanner'] = "Érvényes bannert adjon meg! Hagyja üresen a mezõt, ha nem akar bannert megadni!"; // 5.2.0
$LNG['join_error_time'] = "Ne frissítse a csatlakozás jóváhagyási oldalt!"; // 4.2.0
$LNG['join_error_captcha'] = "A megadott szó nem egyezik a képen levõvel!"; // 4.2.2
$LNG['join_error_question'] = "Helytelen válasz. Javítsa annak bizonyítására, hogy Ön nem robot, hanem valós személy!"; // 5.2.0
$LNG['join_thanks'] = "Köszönjük, hogy csatlakozott Ön is! Helyezze el ezt a kódot az értékelni kívánt webhelyen!";
$LNG['join_change_warning'] = "Ha megváltoztatja a kódot, valószínüleg nem fog mûködni.";
$LNG['join_welcome'] = "Üdvözöljük a(z) %s webhelyen!";
$LNG['join_welcome_admin'] = "Új tag csatlakozott az Ön Topsites listájához!";
$LNG['join_approve'] = "Köszönjük a csatlakozást! Weboldala bekerül a listába, amint az adminisztrátor azt jóváhagyja.  A további információkat egy emailben küldjük el a jóváhagyás után."; // 5.2.0
$LNG['join_type'] = "Regisztráció típus"; // 5.1.0
$LNG['join_standard'] = "Szabványos"; // 5.1.0
$LNG['join_error_top'] = "Hiba történt a beküldéskor. Javítsa ki az alábbi hibát!"; // 5.2.0
$LNG['join_ban_top'] = "A beküldött adatok olyat tartaznak, amelyet az adminisztrátor letiltott."; // 5.2.0
$LNG['join_security'] = "Biztonság"; // 5.2.0
$LNG['join_confirm_password'] = "Jelszó ellenõrzés"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Linkkód"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Elfelejtett jelszó"; // 5.0
$LNG['lost_pw_forgot'] = "Elfelejtette a jelszavát?"; // 5.0
$LNG['lost_pw_get'] = "Jelszó kérése"; // 5.0
$LNG['lost_pw_emailed'] = "A további instrukciókért nézze meg postaládáját!"; // 5.0
$LNG['lost_pw_email'] = "Az új jelszó megismeréséhez navigáljon az alábbi URL-re:"; // 5.0
$LNG['lost_pw_new'] = "Adjon meg egy új jelszót!"; // 5.0
$LNG['lost_pw_set_new'] = "Új jelszó beállítása"; // 5.0
$LNG['lost_pw_finish'] = "Jelszavát beállítottuk a most megadottra!"; // 5.0

// Main Page
$LNG['main_header'] = "Lista"; // 5.0
$LNG['main_all'] = "Összes webhely"; // 4.2.0
$LNG['main_method'] = "Értékelési módszer";
$LNG['main_members'] = "Tagok";
$LNG['main_menu_rankings'] = "Lista";
$LNG['main_menu_join'] = "Regisztráció";
$LNG['main_menu_random'] = "Véletlen tag";
$LNG['main_menu_search'] = "Keresés";
$LNG['main_menu_lost_code'] = "Elveszett kód"; // 5.0
$LNG['main_menu_lost_password'] = "Elveszett jelszó"; // 5.0
$LNG['main_menu_edit'] = "Tag infó szerkesztés";
$LNG['main_menu_user_cp'] = "Felhasználói vezérlõpult"; // 5.0
$LNG['main_featured'] = "Kimelt taf"; // 4.0.2
$LNG['main_executiontime'] = "Szkript futtatási idõ"; // 4.0
$LNG['main_queries'] = "SQL lekérdezések"; // 4.0
$LNG['main_powered'] = "Támogató:";

// Ranking Table
$LNG['table_stats'] = "Statisztika";
$LNG['table_unique'] = "Egyedi";
$LNG['table_total'] = "Összes";
$LNG['table_rank'] = "Értékelés";
$LNG['table_title'] = "Cím"; // 4.0
$LNG['table_description'] = "Leírás"; // 4.0
$LNG['table_movement'] = "Áthelyezés";
$LNG['table_up'] = "Fel"; // 5.0
$LNG['table_down'] = "Le"; // 5.0
$LNG['table_neutral'] = "Semleges"; // 5.0
$LNG['table_your_site_here'] = "Az Ön webhelye"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Értékelés és áttekintés";
$LNG['rate_message'] = "Írja be az értékelést és az áttekintést %s részére az alábbi ûrlap segítségével!"; // 5.2.0
$LNG['rate_rating'] = "Értékelés";
$LNG['rate_review'] = "Áttekintés - HTML nem engedélyezett"; // 5.0
$LNG['rate_thanks'] = "Köszönjük az értékelést!";
$LNG['rate_error'] = "Már értékelte ezt a webhelyet!";
$LNG['rate_back'] = "Vissza a statisztikához";
$LNG['rate_email_admin'] = "Új áttekintés érkezett a TopSites listába."; // 5.1.0

// Search
$LNG['search_header'] = "Keresés";
$LNG['search_off'] = "A keresési lehetõség ki van kapcsolva.";
$LNG['search_no_sites'] = "Nincs a feltételeknek megfelelõ webhely."; // 5.0
$LNG['search_prev'] = "Elõzõ"; // 3.2.1
$LNG['search_next'] = "Következõ"; // 3.2.1
$LNG['search_displaying_results'] = "Megjelenítés: %s - %s / %s (<b>%s</b>)"; // 5.1.0

// Stats
$LNG['stats_header'] = "Statisztika";
$LNG['stats_info'] = "Infó";
$LNG['stats_member_since'] = "Regisztráció ideje"; // 5.0
$LNG['stats_rating_avg'] = "Átlagos értékelés";
$LNG['stats_rating_num'] = "Értékelések száma";
$LNG['stats_rate'] = "Webhely értékelése és áttekintése";
$LNG['stats_reviews'] = "Áttekintések";
$LNG['stats_allreviews'] = "Összes áttekintés megjelenítése"; // 4.0
$LNG['stats_week'] = "Hét"; // 5.0
$LNG['stats_highest'] = "Legmagasabb"; // 5.0
$LNG['stats_overall'] = "Teljes statisztika"; // 5.2.0
$LNG['stats_overall_average'] = "Átlagos (utolsó 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Összes (mindenkori)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Csúcs %s webhely"; // 4.0
$LNG['ssi_new'] = "%s legújabb tag"; // 5.0
$LNG['ssi_all'] = "Összes webhely"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Felhasználói vezérlõpult"; // 5.0
$LNG['user_cp_login'] = "Bejelentkezés"; // 5.0
$LNG['user_cp_logout'] = "Kijelentkezés"; // 5.0
$LNG['user_cp_welcome'] = "Üdvözöljük a felhasználói vezérlõpulton! Használja a baloldali linkeket a regisztrációja kezeléséhez!"; // 5.0
$LNG['user_cp_logout_message'] = "Ön kijelentkezett a felhasználói vezérlõpultról."; // 5.0
$LNG['user_cp_login_long'] = "Jelentkezzen be felhasználói nevével, jelszavával vagy OpenID azonosítójával!"; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Nem található OpenID szerver: %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "A vezérlõpult eléréséhez regisztrálnia kell a TopSites listában!"; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Hiba történt a bejelentkezés közben. Próbálja újra!"; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "A feldolgozáshoz hozzáférés kell. Próbálja újra!"; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Hiba a szerveren: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "YNem férhet hozzá a felhasználói vezérlõpulthoz addig, ameddig a webhelye jóváhagyásra nem kerül. Amint jóváhagyják, Ön kap egy levelet."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Új tagok jóváhagyása"; // 5.0
$LNG['a_approve'] = "Jóváhagy"; // 4.0
$LNG['a_approve_none'] = "Nincs jóváhagyásra váró tag."; // 4.0
$LNG['a_approve_done'] = "A tag jóváhagyásra került."; // 4.0
$LNG['a_approve_dones'] = "A tagok jóváhagyásra kerültek."; // 4.0
$LNG['a_approve_sel'] = "Kiválasztottakal:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Szerkesztett tagok jóváhagyása"; // 5.2.0
$LNG['a_approve_edited_none'] = "Nincs jóváhagyásra váró szerkesztés."; // 5.2.0
$LNG['a_approve_edited_old'] = "Elõzõ cím és URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Szerkesztett cím és URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Visszautasít"; // 5.2.0
$LNG['a_approve_edited_done'] = "A változások jóváhagyva."; // 5.2.0
$LNG['a_approve_rejected_done'] = "A változások visszautasítva."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Új áttekintések"; // 5.0
$LNG['a_approve_rev_none'] = "Nincs jóváhagyásra váró áttekintés."; // 5.0
$LNG['a_approve_rev_done'] = "Az áttekintés jóváhagyva."; // 5.0
$LNG['a_approve_rev_dones'] = "Az áttekintések jóváhagyva."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Adatbázis mentés"; // 5.2.0
$LNG['a_backup_warn'] = "Mentést hoz létre a tagokról, a statisztikáról és a beállításokról. Ha sok tag van, ez hosszabb ideig eltarthat és nagy fájlt eredményez."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Egyedi oldal készítés"; // 5.1.0
$LNG['a_create_page_id'] = "Oldalazonosító - Az URL-ben kerül használatra, ezért csak ékezet nélküli betûket, számokat, aláhúzásjelet és kötõjelet tartalmazhat"; // 5.1.0
$LNG['a_create_page_error_id'] = "Az oldalazonosító csak csak ékezet nélküli betûket, számokat, aláhúzásjelet és kötõjelet tartalmazhat. Lépjen vissza és javítsa az oldalazonosító értékét!"; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Már van egy ilyen oldalazonosítójú oldal. Lépjen vissza és válasszon más oldalazonosítót!"; // 5.1.0
$LNG['a_create_page_created'] = "Az oldal létrejött. Kézzel adjon egy linket a wrapper.html fájlban ehhez: %s"; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Tag törlése"; // 5.0
$LNG['a_del_headers'] = "Tagok törlése"; // 5.0
$LNG['a_del_done'] = "A tag törölve."; // 5.0
$LNG['a_del_dones'] = "A tagok törölve."; // 5.0
$LNG['a_del_warn'] = "Biztosan törli ezt a tagot: %s?"; // 5.0
$LNG['a_del_multi'] = "ez a(z) %s tag"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Cenzúrázott szó törlése"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Cenzúrázott szavak törlése"; // 5.1.0
$LNG['a_del_bad_word_done'] = "A cenzúrázott szó törölve."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "A cenzúrázott szavak törölve."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Biztosan törli a(z) %s szót a cenzúrázott szavak listájából?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "ez a(z) %s szó"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Érvénytelen cenzúrázott szó azonosító. Próbálja újra!"; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Feketelista bejegyzés törlése"; // 5.2.0
$LNG['a_del_ban_headers'] = "Feketelista bejegyzések törlése"; // 5.2.0
$LNG['a_del_ban_done'] = "A feketelista bejegyzés törölve."; // 5.2.0
$LNG['a_del_ban_dones'] = "A feketelista bejegyzések törölve."; // 5.2.0
$LNG['a_del_ban_warn'] = "Biztosan törli a(z) %s bejegyzést a feketelistából?"; //5.2.0
$LNG['a_del_ban_multi'] = "ez a(z) %s bejegyzés"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Érvénytelen feketelista bejegyzés azonosító. Próbálja újra!"; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Egyedi oldal törlése"; // 5.1.0
$LNG['a_del_page_headers'] = "Egyedi oldalak törlése"; // 5.1.0
$LNG['a_del_page_done'] = "Az egyedi oldal törölve."; // 5.1.0
$LNG['a_del_page_dones'] = "Az egyedi oldalak törölve."; // 5.1.0
$LNG['a_del_page_warn'] = "Biztosan törli: %s?"; //5.1.0
$LNG['a_del_page_multi'] = "ez a(z) %s oldal"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Érvénytelen egyedi oldal azonosító. Próbálja újra!"; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Áttekintés törlése"; // 5.0
$LNG['a_del_rev_headers'] = "Áttekintések törlése"; // 5.0
$LNG['a_del_rev_done'] = "Az áttekintés törölve."; // 5.0
$LNG['a_del_rev_dones'] = "Az áttekintések törölve."; // 5.0
$LNG['a_del_rev_warn'] = "Biztosan törli ezt az áttekintés?"; //5.0
$LNG['a_del_rev_warns'] = "Biztosan törli ezeket az áttekintéseket?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Érvénytelen áttekintés azonosító. Próbálja újra!"; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Tag szerkesztés"; // 5.0
$LNG['a_edit_site_is'] = "Ez a webhely"; // 4.0
$LNG['a_edit_active'] = "aktív (listázva)"; // 4.0
$LNG['a_edit_inactive'] = "inaktív (nincs listázva)"; // 5.0
$LNG['a_edit_edited'] = "A tag szerkesztve.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Cenzúrázott szüó szerkesztés"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "A cenzúrázott szó szerkesztve."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Feketelista bejegyzés szerkesztése"; // 5.2.0
$LNG['a_edit_ban_edited'] = "A feketelista bejegyzés szerkesztve."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Egyedi oldal szerkesztése"; // 5.1.0
$LNG['a_edit_page_content'] = "Tartalom - itt használhat HTML kódot"; // 5.1.0
$LNG['a_edit_page_edited'] = "Az oldal szerkesztve."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Áttekintés szerkesztése"; // 5.0
$LNG['a_edit_rev_edited'] = "A áttekintés szerkesztve.";

// Admin > Email Members
$LNG['a_email_header'] = "Email tagoknak"; // 5.0
$LNG['a_email_subject'] = "Tárgy"; // 4.2.0
$LNG['a_email_message'] = "Üzenet"; // 4.2.0
$LNG['a_email_msg_sent'] = "Email elküldve: %s"; // 5.0
$LNG['a_email_not_sent'] = "Az email nem küldhetõ el: %s"; // 5.0
$LNG['a_email_sent'] = "%s tagnak lett email elküldve."; // 4.2.0
$LNG['a_email_failed'] = "%s tagnak nem lett email elküldve."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Kijelentkezett az adminisztrációs felületrõl."; // 5.0

// Admin > Main
$LNG['a_header'] = "Adminisztráció"; // 5.0
$LNG['a_main'] = "Üdvözöljük az adminisztrációban! Használja a baloldali linkeket a Topsites lista szerkesztéséhez!"; // 5.0
$LNG['a_main_approve'] = "Jelenleg 1 webhely vár jóváhagyásra."; // 5.0
$LNG['a_main_approves'] = "Jelenleg %s webhely vár jóváhagyásra."; // 5.0
$LNG['a_main_approve_edit'] = "Jelenleg 1 webhely szerkesztése vár jóváhagyásra."; // 5.2.0
$LNG['a_main_approve_edits'] = "Jelenleg %s webhely szerkesztése vár jóváhagyásra."; // 5.2.0
$LNG['a_main_approve_rev'] = "Jelenleg 1 áttekintés vár jóváhagyásra."; // 5.0
$LNG['a_main_approve_revs'] = "Jelenleg %s áttekintés vár jóváhagyásra."; // 5.0
$LNG['a_main_your'] = "Az Ön verziója:"; // 5.0
$LNG['a_main_latest'] = "Legfrissebb verzió"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Tagok kezelése"; // 5.0
$LNG['a_man_actions'] = "Mûveletek"; // 4.2.0
$LNG['a_man_edit'] = "Szerkeszt"; // 4.2.0
$LNG['a_man_delete'] = "Töröl"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Mindent kijelöl"; // 5.0
$LNG['a_man_none'] = "Kijelölést megszüntet"; // 5.0
$LNG['a_man_del_sel'] = "Kijeltöltek törlése"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Csúnya szavak szûrõ"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Adjon meg egy szót és annak helyettesítését! Például: \"hell\" a szó mezõben és \"h***\" a helyettesítõ mezõben."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "A pontos egyezés csak pontosan megadott szónál van. Globális egyezésnél bármelyikkel, ami tartalmazza a szót. Így globális egyezésnél a \"hell\" egyezhet a \"shell\" ás \"hello\" szavakkal."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Szó"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Helyettesítés"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Egyezés"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Pontos"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globális"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Szószûrõ"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" hozzaádva a csúnyaszavak szûrõhöz."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Feketelista"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Webhelyek és felhasználók kitiltásához töltse ki az alábbi ûrlapot!  Amikor egy tag regisztrál, az URL, az email cím, a felhasználónév és az IP cím ellenõrzésre kerül. A webhely szerkesztésekor az URL és az email cím kerül ellenõrzésre.<br /><br />A feketelista nem érinti a létezõ tagokat."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "A pontos egyezés csak pontosan megadott stringnél. Globális egyezésnél bármelyikkel, ami tartalmazza a stringet. Így globális egyezésnél a http://www.yahoo.com/ egyezhet bármely http://www.yahoo.com/ szöveget tartalmazó URL-ben, a pontos egyezésnél csak a http://www.yahoo.com/ akad fenn a szûrõn."; // 5.2.0
$LNG['a_man_ban_string'] = "String"; // 5.2.0
$LNG['a_man_ban_field'] = "Mezõ"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" hozzáadva a feketelistához."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Egyedi oldalak kezelése"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Áttekintések kezelése"; // 5.0
$LNG['a_man_rev_enter'] = "Egy webhely áttekintésének kezeléséhez adja meg a tag felhasználónevét!"; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Áttekintés"; // 5.0
$LNG['a_man_rev_date'] = "Dátum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menü";
$LNG['a_menu_main'] = "Fõoldal"; // 5.0
$LNG['a_menu_approve'] = "Új tagok jóváhagyása";
$LNG['a_menu_approve_edits'] = "Szerkesztett tagok jóváhagyása"; // 5.2.0
$LNG['a_menu_manage'] = "Tagok kezelése"; // 4.2.0
$LNG['a_menu_settings'] = "Beállítások változtatása"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Csúnyaszó szûrõ"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Feketelista"; // 5.2.0
$LNG['a_menu_backup'] = "Adatbázis biztonsági mentés"; // 5.2.0
$LNG['a_menu_skins'] = "Sablonok és kategóriák"; // 5.0
$LNG['a_menu_approve_reviews'] = "Új áttekintés jóváhagyása"; // 5.0
$LNG['a_menu_manage_reviews'] = "Áttekintések kezelése"; // 5.0
$LNG['a_menu_email'] = "Email tagoknak";
$LNG['a_menu_delete_review'] = "Áttekintés törlése";
$LNG['a_menu_logout'] = "Kijelentkezés";
$LNG['a_menu_delete'] = "Tag törlés";
$LNG['a_menu_edit'] = "Tag szerkesztés";
$LNG['a_menu_create_page'] = "Egyedi oldal létrehozás"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Egyedi oldalak kezelése"; // 5.1.0
$LNG['a_header_members'] = "Tagok"; // 5.0
$LNG['a_header_settings'] = "Beállítások"; // 5.0
$LNG['a_header_tools'] = "Eszközök"; // 5.2.0
$LNG['a_header_reviews'] = "Áttekintések"; // 5.0
$LNG['a_header_pages'] = "Egyedi oldalak"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Beállítások változtatása";
$LNG['a_s_help'] = "Súgó"; // 5.1.0

$LNG['a_s_general'] = "Általános beállítások";
$LNG['a_s_admin_password'] = "Adminisztrátori jelszó";
$LNG['a_s_list_name'] = "Az Ön TopSites listájának a neve";
$LNG['a_s_list_url'] = "A TopSites könyvtár URL-je";
$LNG['a_s_default_language'] = "Alapértelmezett nyelv";
$LNG['a_s_your_email'] = "Az Ön email címe";

$LNG['a_s_sql'] = "SQL Sbeállításk";
$LNG['a_s_sql_type'] = "Adatbázistípus"; // 4.1.0
$LNG['a_s_sql_host'] = "Kiszolgáló";
$LNG['a_s_sql_database'] = "Adatbázis";
$LNG['a_s_sql_username'] = "Felhasználónév";
$LNG['a_s_sql_password'] = "Jelszó";

$LNG['a_s_ranking'] = "Értékelési beállítások";
$LNG['a_s_num_list'] = "Tagok száma oldalanként"; // 5.0
$LNG['a_s_ranking_period'] = "Értékelési periódus"; // 5.0
$LNG['a_s_ranking_method'] = "Értékelési metódus"; // 5.0
$LNG['a_s_ranking_average'] = "Értékelés átlag vagy %s szerint"; // 5.0
$LNG['a_s_featured_member'] = 'Kiemelt tag - {$featured_member} tagot hozzá kell adni a wrapper.html-hez miután bekapcsolta ezt a lehetõséget.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Tagok száma, akik a _top sablont használják:";
$LNG['a_s_ad_breaks'] = "Hirdetések megjelenítése rangok után (vesszõvel elválasztva) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Üres sorok feltöltése üzenettel: \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Tag beállítások";
$LNG['a_s_active_default'] = "Az új tagokat jóvá kell hagyni a listába kerülés elõtt";
$LNG['a_s_active_default_review'] = "Az új értékeléseket jóvá kell hagyni a listába kerülés elõtt";
$LNG['a_s_delete_after'] = "Inaktív tagok törlése ennyi nap után (0 kikapcsolás)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Email küldés az adminisztrátornak új tag regisztrációjakor"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Email küldés az adminisztrátornak új értékelés beküldésekor"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Tagok bannerének maximális szélessége (0 kikapcsolás)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Tagok bannerének maximális magassága (0 kikapcsolás)"; // 4.2.0
$LNG['a_s_default_banner'] = "Alapértelmezett banner azon tagoknak, akik nem állítanak be bannert";

$LNG['a_s_button'] = "Gomb beállítások";
$LNG['a_s_ranks_on_buttons'] = "Rangok gombokon -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Statisztika gombokon"; // 4.2.0
$LNG['a_s_button_url'] = "Ha Igen/Nem - a tagok webhelyén megjelenõ alapértelmezett gomb URL-je"; // 4.0
$LNG['a_s_button_dir'] = "Ha Igen - a gombokat tároló könyvtár URL-je"; // 4.0
$LNG['a_s_button_ext'] = "Ha Igen - gombok kiterjesztése (gif, png, jpg, stb.)"; // 4.0
$LNG['a_s_button_num'] = "Ha Igen - elkészített gombok száma"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-barát linkek - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Átjáró oldal a csalások elfogására";
$LNG['a_s_captcha'] = "Szó ellenõrzés regisztrációkor a spammerek kivédésére - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Biztonsági kérdés és válasz a spammerek kivédésére (hagyja üresen a letiltáshoz!) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Egyéb beállítások";
$LNG['a_s_search'] = "Keresés";
$LNG['a_s_time_offset'] = "Idõeltérés a szervertõl (órában)";

$LNG['a_s_on'] = "Be";
$LNG['a_s_off'] = "Ki";
$LNG['a_s_days'] = "nap";
$LNG['a_s_months'] = "hónap";
$LNG['a_s_weeks'] = "hét"; // 4.2.0
$LNG['a_s_yes'] = "Igen";
$LNG['a_s_no'] = "Nem";
$LNG['a_s_answer'] = "Válasz"; // 5.2.0

$LNG['a_s_updated'] = "A beállításai frissítésre kerültek.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Sminkek és kategóriák"; // 5.0
$LNG['a_skins_default'] = "Alapértelmezett smink"; // 5.0
$LNG['a_skins_set_default'] = "Alapértelmezett smink beállítása"; // 5.0
$LNG['a_skins_anon'] = "Névtelen"; // 5.0
$LNG['a_skins_default_done'] = "Az alapértelmezett smink beállításra került."; // 5.0
$LNG['a_skins_categories_done'] = "A kategória sminkek beállításra kerültek."; // 5.0
$LNG['a_skins_new_category_done'] = "Az új kategória létrejött."; // 5.0
$LNG['a_skins_delete_done'] = "A kategória törlésre került."; // 5.0
$LNG['a_skins_delete_error'] = "A kategória nem törölhetõ, mert a rendszerben legalább egy kategória megléte szükséges."; // 5.1.0
$LNG['a_skins_edit_done'] = "A kategória szerkesztése sikeres volt."; // 5.0
$LNG['a_skins_invalid_skin'] = "Érvénytelen smink: %s. Próbálja meg újra!"; // 5.0
$LNG['a_skins_categories'] = "Kategóriák"; // 5.0
$LNG['a_skins_new_category'] = "Új kategória létrehozása"; // 5.0
$LNG['a_skins_set_skins'] = "Kategória smink szerkesztése"; // 5.0
$LNG['a_skins_edit_category'] = "Kategória szerkesztése"; // 5.0
$LNG['a_skins_category_name'] = "Kategória név"; // 5.0
$LNG['a_skins_diff_skins'] = "Ha különbözõ kategóriákhoz különbözõ sminkeket szeretne rendelni, válasszon az alábbiak közül!"; // 5.0
?>
