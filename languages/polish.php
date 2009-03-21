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
$translation = 'Polish (Polski)';
$translator_name = 'zolw';
$translator_email = 'zolwio@gmail.com';
$translator_url = 'http://www.toplista.mojeforum.net/';

// Set this to the character encoding of your translation
$LNG['charset'] = "ISO-8859-2";

// Global
$LNG['g_form_submit_short'] = "Wy¶lij";
$LNG['g_username'] = "U¿ytkownik";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Tytu³";
$LNG['g_description'] = "Opis";
$LNG['g_category'] = "Kategoria"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Adres bannera";
$LNG['g_password'] = "Has³o";
$LNG['g_average'] = "¦rednia";
$LNG['g_today'] = "Dzi¶";
$LNG['g_yesterday'] = "Wczoraj";
$LNG['g_daily'] = "Dziennie"; // 5.0
$LNG['g_this_month'] = "W tym miesi±cu"; // 5.0
$LNG['g_last_month'] = "W zesz³ym miesi±cu"; // 5.0
$LNG['g_monthly'] = "Miesiêcznie"; // 5.0
$LNG['g_this_week'] = "W tym tygodniu"; // 5.0
$LNG['g_last_week'] = "W zesz³ym tygodniu"; // 5.0
$LNG['g_weekly'] = "Tygodniowo"; // 5.0
$LNG['g_pv'] = 'Wy¶wietleñ'; // 5.0
$LNG['g_overall'] = 'Ogólnie'; // 5.0
$LNG['g_in'] = 'Wej¶æ'; // 5.0
$LNG['g_out'] = 'Wyj¶æ'; // 5.0
$LNG['g_unq_pv'] = "Unikalnych klikniêæ"; // 5.0
$LNG['g_tot_pv'] = "Wszystkich klikniêæ"; // 5.0
$LNG['g_unq_in'] = "Unikalnych wej¶æ"; // 5.0
$LNG['g_tot_in'] = "Razem wej¶æ"; // 5.0
$LNG['g_unq_out'] = "Unikalnych wyj¶æ"; // 5.0
$LNG['g_tot_out'] = "Razem wyj±æ"; // 5.0
$LNG['g_invalid_u_or_p'] = "Nieprawid³owa nazwa u¿ytkownika lub has³o. Spróbuj ponownie."; // 5.0
$LNG['g_invalid_u'] = "Nieprawid³owa nazwa u¿ytkownika. Spróbuj ponownie."; // 5.0
$LNG['g_invalid_p'] = "Nieprawid³owe has³o. Spróbuj ponownie."; // 5.0
$LNG['g_session_expired'] = "Twoja sesja wygas³a. Spróbuj ponownie."; // 5.0
$LNG['g_error'] = "B³±d"; // 5.0
$LNG['g_delete_install'] = "Z powodów bezpieczeñstwa musisz usun±æ katalog install przed pierwszym uruchomieniem skryptu."; // 5.0
$LNG['g_ip'] = "Adres IP"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Edytuj konto.";
$LNG['edit_info_edited'] = "Edycja konta zakoñczona powodzeniem.";
$LNG['edit_password_blank'] = "Zostaw puste aby zachowaæ obecne has³o"; // 4.0
$LNG['edit_delay'] = "Zanim zmiany w tytule i adresie URL przynis¹ efekt, musz¹ zostaæ zaakceptowane przez administratora."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Bramka toplisty";
$LNG['gateway_text'] = "Z powodu oszustw bramka zosta³a zawieszona. Kliknij poni¿szy link aby przej¶æ do rankingu";
$LNG['gateway_vote'] = "Wejd¼ i g³osuj";
$LNG['gateway_no_vote'] = "Wejd¼ bez g³osowania"; // 5.0

// Install
$LNG['install_header'] = "Instalacja";
$LNG['install_welcome'] = "Witamy w Aardvark Topsites PHP 5.  Wype³nij poni¿szy formularz aby zainstalowaæ skrypt.";
$LNG['install_sql_prefix'] = "Prefix tabeli - zmieñ tylko gdy u¿ywasz wiecej ni¿ jednej toplisty w tej samej bazie danych.";
$LNG['install_error_chmod'] = "B³±d zapisu do settings_sql.php.  Upewnij siê ze nada³e¶ CHMOD 666 dla settings_sql.php.";
$LNG['install_error_sql'] = "Nie mo¿na po³±czyæ siê z baz± danych. Sprawd¼ czy wpisane dane s± poprawne.";
$LNG['install_done'] = "Twoja toplista zosta³a zainstalowana pomy¶lnie! Skasuj teraz ten katalog.";
$LNG['install_your'] = "Twoja lista toplist";
$LNG['install_admin'] = "Administrator";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Aktualizacja";
$LNG['upgrade_welcome'] = "Witaj w Aardvark Topsites PHP 5.  Przed przyst±pieniem do aktualizacji pamietaj aby zapisaæ kopie bezpieczeñstwa twoich danych.";
$LNG['upgrade_version'] = "Upewnij siê ze aktualizujesz z wersji %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Aktualizacjê mo¿na wykonaæ tylko z Aardvark Topsites PHP 4.1.0 lub wy¿szej.";
$LNG['upgrade_done'] = "Twoja toplista zosta³a uaktualniona.  Skasuj ten katalog.";
$LNG['install_mailing_list'] = "Jeœli chcia³byœ/chcia³abyœ do³¹czyæ listy mailowej Aardvark Topsites PHP, wpisz poni¿ej swój e-mial. jest to lista o niskiej intensywnoœci zawieraj¹ca wa¿ne og³oszenia o skrypcie, takie jak nowe wersje i rady dotycz¹ce bezpieczeñstwa."; // 5.2.0

// Join
$LNG['join_header'] = "Do³±cz";
$LNG['join_enter_text'] = "Przepisz tekst z obrazka poni¿ej:"; // 4.2.2
$LNG['join_enter_text_read'] = "Nie mo¿esz odczytaæ?"; // 5.2.0
$LNG['join_user'] = "U¿ytkownik"; // 5.0
$LNG['join_website'] = "Strona WWW"; // 5.0
$LNG['join_banner_size'] = "(Maksymalna wielkoœæ: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Wprowad¼ poprawn± nazwê u¿ytkownika: u¿ywaj tylko liter, cyfr, podkre¶leñ dolnych."; // 5.0
$LNG['join_error_username_duplicate'] = "Wprowad¼ poprawn± nazwê u¿ytkownika: istnieje ju¿ u¿ytkownik o takiej nazwie."; // 5.0
$LNG['join_error_url'] = "Wprowad¼ poprawny adres URL.";
$LNG['join_error_email'] = "Wprowad¼ poprawny adres email.";
$LNG['join_error_title'] = "Wprowad¼ tytu³ strony.";
$LNG['join_error_password'] = "Wprowad¼ has³o.";
$LNG['join_error_confirm_password'] = "Podane has³a nie s¹ takie same."; // 5.2.0
$LNG['join_error_urlbanner'] = "WprowadŸ poprawny banner.  Zostaw puste jeœli nie posiadasz."; // 5.2.0
$LNG['join_error_time'] = "Nie od¶wie¿aj strony z potwierdzeniem rejestracji!"; // 4.2.0
$LNG['join_error_captcha'] = "Wpisane s³owo ró¿ni siê od wy¶wietlonego na obrazie."; // 4.2.2
$LNG['join_error_question'] = "Twoja odpowiedŸ jest niepoprawna. Proszê popraw j¹ aby potwierdziæ ¿e jesteœ cz³owiekiem a nie botem."; // 5.2.0
$LNG['join_thanks'] = "Dziekujemy za zapisanie siê. Wstaw na stronie poni¿szy kod.";
$LNG['join_change_warning'] = "Je¶li zmienisz kod, zliczanie g³osów z twojej strony mo¿e nie dzia³aæ.";
$LNG['join_welcome'] = "Witaj w %s";
$LNG['join_welcome_admin'] = "Nowy u¿ytkownik do³±czy³ do toplisty.";
$LNG['join_approve'] = "Dziêkujê za przy³¹czenie siê!  Twoja strona pojawi siê na liœcie gdy administrator toplisty j¹ zatwierdzi.  Otrzymasz e-mail z informacj¹ gdy zostanie ona zatwierdzona."; // 5.2.0
$LNG['join_type'] = "Typ konta"; // 5.1.0
$LNG['join_standard'] = "Standardowy"; // 5.1.0
$LNG['join_error_top'] = "Znaleziono b³ad w twoim podaniu.  Proszê skorygowaæ b³¹d poni¿ej."; // 5.2.0
$LNG['join_ban_top'] = "Twoje podanie zawiera treœci zabronione przez administratora toplisty."; // 5.2.0
$LNG['join_security'] = "Bezpieczeñstwo"; // 5.2.0
$LNG['join_confirm_password'] = "PotwierdŸ has³o"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Kod linka"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Zapomniane has³o"; // 5.0
$LNG['lost_pw_forgot'] = "Zapomnia³e¶/a¶ has³a?"; // 5.0
$LNG['lost_pw_get'] = "Odzyskaj has³o"; // 5.0
$LNG['lost_pw_emailed'] = "Sprawd¼ pocztê w celu uzyskania dalszych instrukcji."; // 5.0
$LNG['lost_pw_email'] = "Aby wybraæ nowe has³o, kliknij na poni¿szy link"; // 5.0
$LNG['lost_pw_new'] = "Wpisz nowe has³o:"; // 5.0
$LNG['lost_pw_set_new'] = "Ustaw nowe has³o:"; // 5.0
$LNG['lost_pw_finish'] = "Has³o zmienione."; // 5.0

// Main Page
$LNG['main_header'] = "Ranking"; // 5.0
$LNG['main_all'] = "Wszystkie strony"; // 4.2.0
$LNG['main_method'] = "Sortowanie";
$LNG['main_members'] = "U¿ytkownicy";
$LNG['main_menu_rankings'] = "Ranking";
$LNG['main_menu_join'] = "Do³±cz";
$LNG['main_menu_random'] = "Losowy u¿ytkownik";
$LNG['main_menu_search'] = "Szukaj";
$LNG['main_menu_lost_code'] = "Zapomniany kod"; // 5.0
$LNG['main_menu_lost_password'] = "Zapomniane has³o"; // 5.0
$LNG['main_menu_edit'] = "Edytuj informacje o u¿ytkowniku";
$LNG['main_menu_user_cp'] = "Panel kontrolny u¿ytkownika"; // 5.0
$LNG['main_featured'] = "Wspierany u¿ytkownik"; // 4.0.2
$LNG['main_executiontime'] = "Czas wykonania skrytpu:"; // 4.0
$LNG['main_queries'] = "Zapytañ do SQL"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statystyka";
$LNG['table_unique'] = "Unikalnych";
$LNG['table_total'] = "Razem";
$LNG['table_rank'] = "Pozycja";
$LNG['table_title'] = "Tytu³"; // 4.0
$LNG['table_description'] = "Opis"; // 4.0
$LNG['table_movement'] = "Zminana pozycji";
$LNG['table_up'] = "W górê"; // 5.0
$LNG['table_down'] = "W dó³"; // 5.0
$LNG['table_neutral'] = "Bez zmian"; // 5.0
$LNG['table_your_site_here'] = "Twoja strona"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Oceñ i skomentuj";
$LNG['rate_message'] = "Proszê wpisaæ ocenê i komentarz dla %s w polu poni¿ej."; // 5.2.0
$LNG['rate_rating'] = "Oceny";
$LNG['rate_review'] = "Komentarz - HTML nie dozwolony!"; // 5.0
$LNG['rate_thanks'] = "Dziêkujemy za ocenê!";
$LNG['rate_error'] = "Ju¿ ocenia³e¶ tê stronê.";
$LNG['rate_back'] = "Powrót do statystyk.";
$LNG['rate_email_admin'] = "Nowy komentarz zosta³ napisany w twojej topli¶cie."; // 5.1.0

// Search
$LNG['search_header'] = "Szukaj";
$LNG['search_off'] = "Szukanie zosta³o wy³±czone.";
$LNG['search_no_sites'] = "Przepraszamy, nic nie znale¼iono."; // 5.0
$LNG['search_prev'] = "Poprzeni"; // 3.2.1
$LNG['search_next'] = "Nastêpny"; // 3.2.1
$LNG['search_displaying_results'] = "Wy¶wietlanie %s do %s z %s wyników dla <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statystyka";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Do³±czy³"; // 5.0
$LNG['stats_rating_avg'] = "Œrednia ocen";
$LNG['stats_rating_num'] = "Liczba ocen";
$LNG['stats_rate'] = "Oceñ i skomentuj tê stronê";
$LNG['stats_reviews'] = "Komentarze";
$LNG['stats_allreviews'] = "Poka¿ wszystkie komentarze"; // 4.0
$LNG['stats_week'] = "Tygodniowo"; // 5.0
$LNG['stats_highest'] = "Najwy¿sze"; // 5.0
$LNG['stats_overall'] = "Ogólne statystyki"; // 5.2.0
$LNG['stats_overall_average'] = "Œrednia (Ostatnie 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Razem (Dotychczas)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s nowych u¿ytkowników"; // 5.0
$LNG['ssi_all'] = "Wszystkie strony"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Panel kontrolny u¿ytkownika"; // 5.0
$LNG['user_cp_login'] = "Zaloguj"; // 5.0
$LNG['user_cp_logout'] = "Wyloguj"; // 5.0
$LNG['user_cp_welcome'] = "Witaj w panelu kontrolnym u¿ytkownika.  Za pomoc± odno¶ników po lewej mo¿esz zarz±dzaæ swoim kontem."; // 5.0
$LNG['user_cp_logout_message'] = "Zosta³e¶ wylogowany."; // 5.0
$LNG['user_cp_login_long'] = "Zaloguj ze swoj± nazw± u¿ytkownika i has³em albo twoim OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Nie znale¼iono OpenID server dla %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Musisz najpierw do³±czyæ do rankingu zanim bêdziesz móg³ wej¶æ w panel kontrolny u¿ytkownika."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Wyst±pi³ b³±d w czasie przetwarzania twoich danych.  Proszê spróbowaæ jeszcze raz."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "You must grant access to proceed.  Please try again."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "B³±d z serwera: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Nie mo¿esz dostaæ siê do panelu u¿ytkownika, dopóki twoja strona nie zostanie zaakceptowana przez administratora. Otrzymasz e-mail z informacj¹ gdy zostanie ona zatwierdzona."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Zaakceptuj nowych u¿ytkowników"; // 5.0
$LNG['a_approve'] = "Zaakceptuj"; // 4.0
$LNG['a_approve_none'] = "Brak oczekuj±cych na akceptacjê."; // 4.0
$LNG['a_approve_done'] = "U¿ytkownik zaakceptowany."; // 4.0
$LNG['a_approve_dones'] = "U¿ytkownicy zostali zaakceptowani."; // 4.0
$LNG['a_approve_sel'] = "Zaznaczeni:"; // 5.0

// Admin > ZatwierdŸ zmienianych u¿ytkowników // 5.2.0
$LNG['a_approve_edited_header'] = "ZatwierdŸ zmienianych u¿ytkowników"; // 5.2.0
$LNG['a_approve_edited_none'] = "Nie ma wpisów czekaj¹cych na akceptacjê."; // 5.2.0
$LNG['a_approve_edited_old'] = "Poprzedni tytu³ i adres"; // 5.2.0
$LNG['a_approve_edited_new'] = "Zmieniony tytu³ i adres"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Odmowa"; // 5.2.0
$LNG['a_approve_edited_done'] = "Zmiany zosta³y zaakceptowane."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Zmiany zosta³y odrzucone."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Zaakceptuj nowe komentarze."; // 5.0
$LNG['a_approve_rev_none'] = "Brak komentarzy do akceptacji."; // 5.0
$LNG['a_approve_rev_done'] = "Komentarz zaakceptowany."; // 5.0
$LNG['a_approve_rev_dones'] = "Komentarze zaakceptowane."; // 5.0

// Admin > Kopia zapasowa bazy danych // 5.2.0
$LNG['a_backup_header'] = "Kopia zapasowa bazy danych"; // 5.2.0
$LNG['a_backup_warn'] = "Zostanie stworzona kopia twoich u¿ytkowników, statystyk i ustawieñ. Jeœli masz du¿o u¿ytkowników, mo¿e to zaj¹æ du¿o czasu i zostanie stworzony du¿y plik."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Stwórz w³asn± stronê"; // 5.1.0
$LNG['a_create_page_id'] = "ID strony - bêdzie u¿ywane w URL, wiêc mo¿e zawieraæ tylko litery, liczby, podkre¶lenia dolne"; // 5.1.0
$LNG['a_create_page_error_id'] = "ID strony mo¿e zawieraæ tylko litery, liczby, podkre¶lenia dolne.  Proszê wróciæ i poprawiæ ID strony."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Ju¿ istnieje strona o takim ID.  Proszê wróciæ i wybraæ nowe."; // 5.1.0
$LNG['a_create_page_created'] = "Strona stworzona.  Musisz rêcznie dodaæ link do %s w wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Usuñ u¿ytkownika"; // 5.0
$LNG['a_del_headers'] = "Usuñ u¿ytkowników"; // 5.0
$LNG['a_del_done'] = "U¿ytkownik usuniêty."; // 5.0
$LNG['a_del_dones'] = "U¿ytkownicy usuniêci."; // 5.0
$LNG['a_del_warn'] = "Czy na pewno usun±æ %s?"; // 5.0
$LNG['a_del_multi'] = "ci %s u¿ytkownicy"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Usuñ filtrowane s³owo"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Usuñ filtrowane s³owa"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtrowane s³owo zosta³o usuniête."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtrowane s³owa zosta³y usuniête."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Czy napewno chcesz usun±æ %s z listy filtrowanych s³ów?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "te %s s³owa"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Nieprawid³owe ID filtrowanego s³owa.  Proszê spróbowaæ ponownie."; // 5.1.0

// Admin > Usuñ/zablokuj // 5.2.0
$LNG['a_del_ban_header'] = "Usuñ wpis z czarnej listy"; // 5.2.0
$LNG['a_del_ban_headers'] = "Usuñ wpisy z czarnej listy"; // 5.2.0
$LNG['a_del_ban_done'] = "Wips zosta³ usuniêty z czarnej listy."; // 5.2.0
$LNG['a_del_ban_dones'] = "Wipsy zosta³y usuniête z czarnej listy."; // 5.2.0
$LNG['a_del_ban_warn'] = "Czy jesteœ pewien, ¿e chcesz usun¹æ %s z czarnej listy?"; //5.2.0
$LNG['a_del_ban_multi'] = "te %s wpisy"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Nieprawid³owy ID czarnej listy.  Proszê spróbuj ponownie."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Usuñ w³asn± stronê"; // 5.1.0
$LNG['a_del_page_headers'] = "Usuñ w³asne strony"; // 5.1.0
$LNG['a_del_page_done'] = "W³asna strona zosta³a usuniêta."; // 5.1.0
$LNG['a_del_page_dones'] = "W³asne strony zosta³a usuniête."; // 5.1.0
$LNG['a_del_page_warn'] = "Na pewno usun±æ %s?"; //5.1.0
$LNG['a_del_page_multi'] = "te %s strony"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Nieprawid³owy ID strony.  Proszê spróbowaæ ponownie."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Usuñ kometnarz"; // 5.0
$LNG['a_del_rev_headers'] = "Usuñ kometnarze"; // 5.0
$LNG['a_del_rev_done'] = "Komentarz usuniêty."; // 5.0
$LNG['a_del_rev_dones'] = "Komentarze usuniête."; // 5.0
$LNG['a_del_rev_warn'] = "Czy napewno skasowaæ ten komentarz?"; //5.0
$LNG['a_del_rev_warns'] = "Czy napewno skasowaæ te komentarze?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Niepoprawny ID komentarza.  Proszê spróbowaæ ponownie."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Edytuj u¿ytkownika"; // 5.0
$LNG['a_edit_site_is'] = "Ta strona jest"; // 4.0
$LNG['a_edit_active'] = "Aktywna (na li¶cie)"; // 4.0
$LNG['a_edit_inactive'] = "Nieaktywna (poza list±)"; // 5.0
$LNG['a_edit_edited'] = "U¿ytkownik wyedytowany.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Edytuj filtrowane s³owo"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtrowane s³owo zosta³o wyedytowane."; // 5.1.0

// Admin > Edytuj blokadê // 5.2.0
$LNG['a_edit_ban_header'] = "Edytuj zablokowany wpis"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Zablokowany wpis zosta³ wyedytowany."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Edytuj w³asn± stronê"; // 5.1.0
$LNG['a_edit_page_content'] = "Zawarto¶æ - mo¿esz u¿ywaæ tu HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "Strona wyedytowana."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Edit Review"; // 5.0
$LNG['a_edit_rev_edited'] = "The review has been edited.";

// Admin > Email Members
$LNG['a_email_header'] = "Wy¶lij email do u¿ytkowników"; // 5.0
$LNG['a_email_subject'] = "Temat"; // 4.2.0
$LNG['a_email_message'] = "Wiadomo¶æ"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-mail wys³any do %s"; // 5.0
$LNG['a_email_not_sent'] = "Nie mo¿na wys³aæ e-mial do %s"; // 5.0
$LNG['a_email_sent'] = "%s u¿ytkowników dostanie e-mial."; // 4.2.0
$LNG['a_email_failed'] = "%s u¿ytkowników nie dostanie e-maila."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Zosta³e¶ wylogowany z panelu administracyjnego."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administracja"; // 5.0
$LNG['a_main'] = "Witaj w administracji.  U¿yj odno¶ników po lewej aby administrowaæ stron±."; // 5.0
$LNG['a_main_approve'] = "1 strona czeka na akceptacjê."; // 5.0
$LNG['a_main_approves'] = "%s stron czeka na akceptacjê."; // 5.0
$LNG['a_main_approve_edit'] = "Jedna strona czeka na twoja akceptacjê."; // 5.2.0
$LNG['a_main_approve_edits'] = "S¹ %s strony czekaj¹ce na twoj¹ akceptacjê."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 komentarz czeka na akceptacjê."; // 5.0
$LNG['a_main_approve_revs'] = "%s komentarzy czeka na akceptacje."; // 5.0
$LNG['a_main_your'] = "Wersja"; // 5.0
$LNG['a_main_latest'] = "Najnowsza wersja"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Zarz±dzaj u¿ytkownikami"; // 5.0
$LNG['a_man_actions'] = "Dzia³anie"; // 4.2.0
$LNG['a_man_edit'] = "Edytuj"; // 4.2.0
$LNG['a_man_delete'] = "Usuñ"; // 4.2.0
$LNG['a_man_email'] = "E-mail"; // 4.2.0
$LNG['a_man_all'] = "Zaznacz wszystkich"; // 5.0
$LNG['a_man_none'] = "Odznacz wszystkich"; // 5.0
$LNG['a_man_del_sel'] = "Usuñ zaznaczonych"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Filter zawarto¶ci"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Wpisz s³owo i jego zastepnik poni¿ej.  Np: na s³owo \"cholera\" w s³owie podstawowym \"ch***\" w zastêpniku."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Dok³adne dopasowywanie zast±pi tylko dok³adnie takie s³owo.  Globalne dopasowywanie zast±pi wszystko co zawiera to s³owo w sobie.  Np, globalne dopasowanie s³owa \"hell\" zast±pi  \"shell\" and \"hello\""; // 5.1.0
$LNG['a_man_bad_words_word'] = "S³owo"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Zastêpnik"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Dopasowywanie"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Dok³adne"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globalne"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtruj s³owo"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" zosta³o dodane do filtra."; // 5.1.0

// Admin > Zarz¹dzanie zablokowanymi // 5.2.0
$LNG['a_man_ban_header'] = "Czarna lista"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Aby zablokowaæ strony i u¿ytkowników z toplisty, wype³nij poni¿szy formularz.  Gdy u¿ytkownik do³¹cza, adres URL, email, nazwa u¿ytkownika, i adres IP s¹ sprawdzane.  Gdy strona jest edytowana, adres URL i email s¹ sprawdzane.<br /><br />Czarna lisa nie wp³ynie na twoich obecnych uŸytkowników."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Dok³adne dopasowywanie zadzia³a tylko gdy bêdzie mu odpowiadaæ identyczny ci¹g znaków.  Globalne dopasowywanie zadzia³a gdy cokolwiek zawiera dany ci¹g zanków.  Wiêc, globalne doasowywanie do http://www.yahoo.com/ bêdzie pasowaæ do ka¿dej strony zawieraj¹cej http://www.yahoo.com/ w adresie URL, podczas gdy dok³adne dopasowywanie http://www.yahoo.com/ bêdzie pasowaæ tylko do tego adresu URL."; // 5.2.0
$LNG['a_man_ban_string'] = "Ci¹g"; // 5.2.0
$LNG['a_man_ban_field'] = "Pole"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" zosta³a dodana do czarnej listy."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Zarz±dzaj w³asnymi stronami"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Zarz±dzaj komentarzami"; // 5.0
$LNG['a_man_rev_enter'] = "Aby zarz±dzaæ komentarzami wpisz ID u¿ytkownika poni¿ej."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Komentarz"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "G³owna"; // 5.0
$LNG['a_menu_approve'] = "Zaakceptuj nowych u¿ytkowników";
$LNG['a_menu_approve_edits'] = "Zaakceptuj u¿ytkowników"; // 5.2.0
$LNG['a_menu_manage'] = "Zarz±dzaj u¿ytkownikami"; // 4.2.0
$LNG['a_menu_settings'] = "Zmieñ ustawienia"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filtr zawarto¶ci"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Czarna lista"; // 5.2.0
$LNG['a_menu_backup'] = "Kopia bazy danych"; // 5.2.0
$LNG['a_menu_skins'] = "Skóry i kategorie"; // 5.0
$LNG['a_menu_approve_reviews'] = "Zaakceptuj komentarze"; // 5.0
$LNG['a_menu_manage_reviews'] = "Zarz±dzaj komentarzami"; // 5.0
$LNG['a_menu_email'] = "E-mail do u¿ytkowników";
$LNG['a_menu_delete_review'] = "Usuñ komentarz";
$LNG['a_menu_logout'] = "Wyloguj";
$LNG['a_menu_delete'] = "Usuñ u¿ytkownika";
$LNG['a_menu_edit'] = "Edytuj u¿ytkownika";
$LNG['a_menu_create_page'] = "Dodaj w³asn± stronê"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Zarz±dzaj w³asnymi stronami"; // 5.1.0
$LNG['a_header_members'] = "U¿ytkownicy"; // 5.0
$LNG['a_header_settings'] = "Ustawienia"; // 5.0
$LNG['a_header_tools'] = "Narzêdzia"; // 5.2.0
$LNG['a_header_reviews'] = "Komentarze"; // 5.0
$LNG['a_header_pages'] = "W³asne strony"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Zmieñ ustawienia";
$LNG['a_s_help'] = "Pomoc"; // 5.1.0

$LNG['a_s_general'] = "Ustawienia g³ówne";
$LNG['a_s_admin_password'] = "Has³o administratora";
$LNG['a_s_list_name'] = "Nazwa toplisty";
$LNG['a_s_list_url'] = "Adres katalogu toplisty";
$LNG['a_s_default_language'] = "Jêzyk";
$LNG['a_s_your_email'] = "Twój adres e-mail";

$LNG['a_s_sql'] = "Ustawienia SQL";
$LNG['a_s_sql_type'] = "Typ bazy danych"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Baza danych";
$LNG['a_s_sql_username'] = "Login";
$LNG['a_s_sql_password'] = "Haslo";

$LNG['a_s_ranking'] = "Ustawienia rankingu";
$LNG['a_s_num_list'] = "Liczba u¿ytkowników na stronê"; // 5.0
$LNG['a_s_ranking_period'] = "Okres rankingu"; // 5.0
$LNG['a_s_ranking_method'] = "Metoda rankingu"; // 5.0
$LNG['a_s_ranking_average'] = "Ranking ogólny czy poprostu %s"; // 5.0
$LNG['a_s_featured_member'] = 'Wspierany u¿ytkownik - Musisz dodac {$featured_member} do wrapper.html po aktywowaniu tej opcji.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Liczba u¿ytkowników the _top skin";
$LNG['a_s_ad_breaks'] = "Pokazuj reklamy miedzy tymi pozycjami (separate with commas) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Wype³nij wolne przestrzenie s³owami: \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Ustawienia u¿ytkownika";
$LNG['a_s_active_default'] = "Wymagaj akceptacji nowych u¿ytkowników";
$LNG['a_s_active_default_review'] = "Wymagaj akceptacji nowych komentarzy";
$LNG['a_s_delete_after'] = "Usuñ nieaktywnych u¿ytkowników po dniach (ustaw 0 aby wy³±czyæ)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Wy¶lij e-mial gdy dodano u¿ytkownika"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Wy¶lij e-mail gdy dodano komentarz"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maksymalna szeroko¶æ bannera (ustaw 0 aby wy³±czyæ)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maksymalna wysoko¶æ bannera (ustaw 0 aby wy³±czyæ)"; // 4.2.0
$LNG['a_s_default_banner'] = "Domy¶lny banner dla tych co nie posiadaj±";

$LNG['a_s_button'] = "Ustawienia przycisków";
$LNG['a_s_ranks_on_buttons'] = "Pozycja na przycisku -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Przycisk statystyk"; // 4.2.0
$LNG['a_s_button_url'] = "Je¶li tak/nie - adres do domy¶lnego przycisku"; // 4.0
$LNG['a_s_button_dir'] = "Je¶li tak - adres do katalogu z przyciskami"; // 4.0
$LNG['a_s_button_ext'] = "Je¶li tak - rozszerzenie przycisku(gif, png, jpg, itd.)"; // 4.0
$LNG['a_s_button_num'] = "Je¶li tak - ilo¶æ zrobionych przycisków"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Strona bramki do obrony przed oszustwami";
$LNG['a_s_captcha'] = "Weryfikacja obrazkowa (przeciw spamowi) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Pytanie i odpowiedŸ kontrolna w celu zablokowania spammerów (zostaw puste aby wy³¹czyæ) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Inne ustawienia";
$LNG['a_s_search'] = "Szukaj";
$LNG['a_s_time_offset'] = "Czas offsetu serwera (w godzinach)";

$LNG['a_s_on'] = "On";
$LNG['a_s_off'] = "Off";
$LNG['a_s_days'] = "Dni";
$LNG['a_s_months'] = "Miesiêcy";
$LNG['a_s_weeks'] = "Tygodni"; // 4.2.0
$LNG['a_s_yes'] = "Tak";
$LNG['a_s_no'] = "Nie";
$LNG['a_s_answer'] = "OdpowiedŸ"; // 5.2.0

$LNG['a_s_updated'] = "Ustawienia zaktualizowane.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Skóry i kategorie"; // 5.0
$LNG['a_skins_default'] = "Domy¶lna skóra"; // 5.0
$LNG['a_skins_set_default'] = "Ustaw domy¶ln± skórê"; // 5.0
$LNG['a_skins_anon'] = "Anonimowy"; // 5.0
$LNG['a_skins_default_done'] = "Domy¶lna skóra ustawiona."; // 5.0
$LNG['a_skins_categories_done'] = "Kategoria skór ustawiona."; // 5.0
$LNG['a_skins_new_category_done'] = "Stworzono now± kategoriê."; // 5.0
$LNG['a_skins_delete_done'] = "Kategoria usuniêta."; // 5.0
$LNG['a_skins_delete_error'] = "Nie mo¿esz usun±æ ostatniej kategorii."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategoria wyedytowana."; // 5.0
$LNG['a_skins_invalid_skin'] = "Nieprawid³owa skóra: %s.  Proszê spróbowaæ ponownie."; // 5.0
$LNG['a_skins_categories'] = "Kategorie"; // 5.0
$LNG['a_skins_new_category'] = "Stwórz now± kategoriê"; // 5.0
$LNG['a_skins_set_skins'] = "Ustaw skórê kategorii"; // 5.0
$LNG['a_skins_edit_category'] = "Edytuj kategoriê"; // 5.0
$LNG['a_skins_category_name'] = "Nazwa kategorii"; // 5.0
$LNG['a_skins_diff_skins'] = "Wybierz poni¿ej je¶li chcesz ró¿ne skóry do ró¿nych kategorii."; // 5.0
?>
