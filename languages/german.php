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
$translation = 'German';
$translator_name = 'Michael Schiecke (Speedmike)';
$translator_email = 'mail@speedmike.de';
$translator_url = 'http://www.speedmike.de/';

// Global
$LNG['g_form_submit_short'] = "Los";
$LNG['g_username'] = "Benutzername";
$LNG['g_url'] = "Adresse";
$LNG['g_title'] = "Webseitentitel";
$LNG['g_description'] = "Beschreibung";
$LNG['g_category'] = "Kategorie"; // 4.1.0
$LNG['g_email'] = "E-Mail";
$LNG['g_banner_url'] = "Banneradresse";
$LNG['g_password'] = "Passwort";
$LNG['g_average'] = "Durchschnitt";
$LNG['g_today'] = "Heute";
$LNG['g_yesterday'] = "Gestern";
$LNG['g_daily'] = "Täglich"; // 5.0
$LNG['g_this_month'] = "dieser Monat"; // 5.0
$LNG['g_last_month'] = "letzter Monat"; // 5.0
$LNG['g_monthly'] = "Monatlich"; // 5.0
$LNG['g_this_week'] = "diese Woche"; // 5.0
$LNG['g_last_week'] = "letzte Woche"; // 5.0
$LNG['g_weekly'] = "Wöchentlich"; // 5.0
$LNG['g_pv'] = 'Seitenbesuche'; // 5.0
$LNG['g_overall'] = 'Gesamt'; // 5.0
$LNG['g_in'] = 'Hits In'; // 5.0
$LNG['g_out'] = 'Hits Out'; // 5.0
$LNG['g_unq_pv'] = "Besucher"; // 5.0
$LNG['g_tot_pv'] = "Seitenaufrufe"; // 5.0
$LNG['g_unq_in'] = "His In Besucher"; // 5.0
$LNG['g_tot_in'] = "Hits In Gesamt"; // 5.0
$LNG['g_unq_out'] = "Hits Out Besucher"; // 5.0
$LNG['g_tot_out'] = "Hits Out Gesamt"; // 5.0
$LNG['g_invalid_u_or_p'] = "Ungültiger Benutzername oder Passwort.  Bitte nochmal versuchen."; // 5.0
$LNG['g_invalid_u'] = "Ungültiger Benutzername.  Bitte nochmal versuchen."; // 5.0
$LNG['g_invalid_p'] = "Ungültiges Passwort.  Bitte nochmal versuchen."; // 5.0
$LNG['g_session_expired'] = "Ihre Sitzungszeit ist abgelaufen.  Bitte neu einloggen."; // 5.0
$LNG['g_error'] = "Fehler"; // 5.0
$LNG['g_delete_install'] = "Aus Sicherheitsgründen muss das Install-Verzeichnis gelöscht werden bevor das Script funktioniert."; // 5.0

// Edit Account
$LNG['edit_header'] = "Benutzerkonto bearbeiten";
$LNG['edit_info_edited'] = "Ihr Benutzerkonto wurde erfolgreich bearbeitet.";
$LNG['edit_password_blank'] = "Bitte freilassen um das bisherige Passwort zu behalten"; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Topsites Gateway Seite";
$LNG['gateway_text'] = "Um Schummeleien zu vermeiden, wurde diese Gateway-Seite eingerichtet. Klicken Sie untenstehenden Link, um die Topliste aufzurufen.";
$LNG['gateway_vote'] = "Zugang mit \"Hit In\" für die Seite, von der Sie kommen.";
$LNG['gateway_no_vote'] = "Zugang ohne \"Hit In\" für die Seite, von der Sie kommen."; // 5.0

// Install
$LNG['install_header'] = "Installation";
$LNG['install_welcome'] = "Willommen zu Aardvark Topsites PHP 5.  Füllen Sie bitte das untere Formular aus um das Script zu installieren.";
$LNG['install_sql_prefix'] = "Tabellenpräfix - bitte nur ändern wenn Sie mehrere Listen in derselben Datenbank betreiben wollen";
$LNG['install_error_chmod'] = "Kann Einstellungen nicht in settings_sql.php schreiben.  Bitte sicherstellen das die Datei settings_sql.php auf CHMOD 666 gesetzt wurde.";
$LNG['install_error_sql'] = "Kann nicht zur SQL Datenbank verbinden.  Bitte die SQL Datenbank-Einstellungen überprüfen.";
$LNG['install_done'] = "Ihre Topsites Liste wurde installiert.  Install-Verzeichnis bitte jetzt löschen.";
$LNG['install_your'] = "Ihre Topsites Liste";
$LNG['install_admin'] = "Administration";
$LNG['install_manual'] = "Handbuch";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Willkommen zu Aardvark Topsites PHP 5.  Vor dem Upgrade bitte unbedingt ihre Daten sichern.";
$LNG['upgrade_error_version'] = "Ein Upgrade ist nur möglich von Aardvark Topsites PHP 4.1.0 oder höher.";
$LNG['upgrade_done'] = "Ihre Topsites Liste wurde aktualisiert.  Install-Verzeichnis bitte jetzt löschen.";

// Join
$LNG['join_header'] = "Seite eintragen";
$LNG['join_enter_text'] = "Bitte den hier unten angezeigten Code eintragen:"; // 4.2.2
$LNG['join_user'] = "Benutzer"; // 5.0
$LNG['join_website'] = "Webseite"; // 5.0
$LNG['join_error_forgot'] = "Sie haben vergessen:";
$LNG['join_error_username'] = "- einen gültigen Benutzernamen einzugeben. (Bitte nur Buchstaben, Zahlen, Unterstriche und Gedankenstriche verwenden.)"; // 5.0
$LNG['join_error_username_duplicate'] = "- einen gültigen Benutzernamen einzugeben: Der gewünschte Benutzername ist leider schon vergeben!"; // 5.0
$LNG['join_error_url'] = "- eine gültige URL einzugeben.";
$LNG['join_error_email'] = "- eine gültige Emailaddresse einzugeben.";
$LNG['join_error_title'] = "- einen Titel für ihre Webseite einzugeben.";
$LNG['join_error_password'] = "- ein Passwort einzugeben.";
$LNG['join_error_urlbanner'] = "- eine gültige URL für Ihr Banner einzugeben. Sollten Sie kein Banner haben, lassen Sie dieses Feld bitte frei. Es muss kleiner sein als"; // 4.0
$LNG['join_error_back'] = "Bitte gehen Sie zurück und korrigieren Sie Ihre Eingaben.";
$LNG['join_error_time'] = "Bitte nicht auf \"aktualisieren\" drücken!"; // 4.2.0
$LNG['join_error_captcha'] = "Der von Ihnen eingegebene Code stimmt nicht mit dem aus der Grafik überein!"; // 4.2.2
$LNG['join_thanks'] = "Vielen Dank! Fügen Sie bitte diesen Code in Ihre Webseite ein um gelistet zu werden:";
$LNG['join_change_warning'] = "Wenn Sie den Code verändern, werden Ihre Hits nicht gezählt.";
$LNG['join_welcome'] = "Willkommen bei %s";
$LNG['join_welcome_admin'] = "Ein neues Mitglied hat sich angemeldet.";

// Link Code
$LNG['link_code_header'] = "Link Code"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Passwort vergessen"; // 5.0
$LNG['lost_pw_forgot'] = "Sie haben ihr  Passwort vergessen?"; // 5.0
$LNG['lost_pw_get'] = "Passwort anfordern"; // 5.0
$LNG['lost_pw_emailed'] = "Die Anweisungen, um Ihr Passwort zurückzusetzen, wurden Ihnen zugemailt!"; // 5.0
$LNG['lost_pw_email'] = "Um ein neues Passwort für Ihre Seite zu erhalten, besuchen Sie bitte folgende URL:"; // 5.0
$LNG['lost_pw_new'] = "Neues Passwort eingeben"; // 5.0
$LNG['lost_pw_set_new'] = "Neues Passwort speichern"; // 5.0
$LNG['lost_pw_finish'] = "Das soeben eingegebene neue Passwort ist nun gültig."; // 5.0

// Main Page
$LNG['main_header'] = "Hauptseite"; // 5.0
$LNG['main_all'] = "Alle Einträge"; // 4.2.0
$LNG['main_method'] = "Platzierungsmethode";
$LNG['main_members'] = "Mitglieder";
$LNG['main_menu_rankings'] = "Rangliste";
$LNG['main_menu_join'] = "Seite eintragen";
$LNG['main_menu_random'] = "Zufallsseite";
$LNG['main_menu_search'] = "Suchen";
$LNG['main_menu_lost_code'] = "Code vergessen"; // 5.0
$LNG['main_menu_lost_password'] = "Passwort vergessen"; // 5.0
$LNG['main_menu_edit'] = "Daten ändern";
$LNG['main_menu_user_cp'] = "Benutzer-Kontrollbereich"; // 5.0
$LNG['main_featured'] = "Site Of The Moment"; // 4.0.2
$LNG['main_executiontime'] = "Script Laufzeit"; // 4.0
$LNG['main_queries'] = "SQL Abfragen"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statistik
Kommentare
Bewertungen";
$LNG['table_unique'] = "Besucher";
$LNG['table_total'] = "Seitenaufrufe";
$LNG['table_rank'] = "Platzierung";
$LNG['table_title'] = "Titel"; // 4.0
$LNG['table_description'] = "Beschreibung"; // 4.0
$LNG['table_movement'] = "Trend";
$LNG['table_up'] = "Steigend"; // 5.0
$LNG['table_down'] = "Sinkend"; // 5.0
$LNG['table_neutral'] = "Gleichbleibend"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Bewerten und Kommentieren";
$LNG['rate_rating'] = "Bewertung";
$LNG['rate_review'] = "Kommentar - (HTML nicht erlaubt)"; // 5.0
$LNG['rate_thanks'] = "Vielen Dank für das Bewerten und/oder Kommentieren dieser Seite!";
$LNG['rate_error'] = "Sie haben diese Seite bereits schon bewertet.";
$LNG['rate_back'] = "Zurück zur Statistik";

// Search
$LNG['search_header'] = "Suchen";
$LNG['search_off'] = "Die Suchfunktion wurde deaktiviert.";
$LNG['search_for'] = "Sie suchten nach";
$LNG['search_no_sites'] = "Es wurden leider keine zu Ihren Suchkriterien passende Seiten gefunden."; // 5.0
$LNG['search_prev'] = "Vorhergehende"; // 3.2.1
$LNG['search_next'] = "Nächste"; // 3.2.1

// Stats
$LNG['stats_header'] = "Statistik";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Mitglied seit"; // 5.0
$LNG['stats_rating_avg'] = "Durchschnittliche Bewertung";
$LNG['stats_rating_num'] = "Anzahl der Bewertungen";
$LNG['stats_rate'] = "Diese Seite bewerten und/oder kommentieren.";
$LNG['stats_reviews'] = "Kommentare";
$LNG['stats_allreviews'] = "Alle Kommentare anzeigen"; // 4.0
$LNG['stats_week'] = "Woche"; // 5.0
$LNG['stats_highest'] = "Höchste"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s Neueste Mitglieder"; // 5.0
$LNG['ssi_all'] = "Alle Seiten"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Benutzer-Kontrollbereich"; // 5.0
$LNG['user_cp_login'] = "Einloggen"; // 5.0
$LNG['user_cp_logout'] = "Ausloggen"; // 5.0
$LNG['user_cp_welcome'] = "Willkommen im Benutzer-Kontrollbereich. Navigieren Sie bitte mit Hilfe des Menüs auf der linken Seite durch den Benutzer-Kontrollbereich."; // 5.0
$LNG['user_cp_logout_message'] = "Sie haben sich erfolgreich ausgeloggt."; // 5.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Neuen Einträgen zustimmen"; // 5.0
$LNG['a_approve'] = "Zustimmen"; // 4.0
$LNG['a_approve_none'] = "Keine neuen Einträge, die auf ihre Zustimmung warten."; // 4.0
$LNG['a_approve_done'] = "Der Eintrag wurde zugelassen."; // 4.0
$LNG['a_approve_dones'] = "Die Einträge wurden zugelassen."; // 4.0
$LNG['a_approve_sel'] = "mit ausgewählten:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Neue Kommentare zulassen"; // 5.0
$LNG['a_approve_rev_none'] = "Keine neuen Kommentare, die auf ihre Freischaltung warten."; // 5.0
$LNG['a_approve_rev_done'] = "Der Kommentar wurde zugelassen."; // 5.0
$LNG['a_approve_rev_dones'] = "Die Kommentare wurden zugelassen."; // 5.0

// Admin > Delete Member
$LNG['a_del_header'] = "Eintrag löschen"; // 5.0
$LNG['a_del_headers'] = "Einträge löschen"; // 5.0
$LNG['a_del_done'] = "Der Eintrag wurde erfolgreich gelöscht."; // 5.0
$LNG['a_del_dones'] = "Die Einträge wurden erfolgreich gelöscht."; // 5.0
$LNG['a_del_warn'] = "Sind Sie sicher  %s  zu löschen?"; // 5.0
$LNG['a_del_multi'] = "diese %s Einträge"; //5.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Kommentar löschen"; // 5.0
$LNG['a_del_rev_headers'] = "Kommentare löschen"; // 5.0
$LNG['a_del_rev_done'] = "Der Kommentar wurde gelöscht."; // 5.0
$LNG['a_del_rev_dones'] = "Die Kommentare wurden gelöscht."; // 5.0
$LNG['a_del_rev_warn'] = "Sind Sie sicher das Sie diesen Kommentar löschen wollen?"; //5.0
$LNG['a_del_rev_warns'] = "Sind Sie sicher das Sie diese Kommentare löschen wollen?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Ungültige Kommentar ID.  Bitte korrrigieren und nochmal versuchen."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Eintrag bearbeiten"; // 5.0
$LNG['a_edit_site_is'] = "Diese Seite ist"; // 4.0
$LNG['a_edit_active'] = "aktiv (gelisted)"; // 4.0
$LNG['a_edit_inactive'] = "inaktiv (nicht gelisted)"; // 5.0
$LNG['a_edit_edited'] = "Der Eintrag wurde bearbeitet.";

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Kommentar bearbeiten"; // 5.0
$LNG['a_edit_rev_edited'] = "Der Kommentar wurde bearbeitet.";

// Admin > Email Members
$LNG['a_email_header'] = "E-Mail an Mitglieder"; // 5.0
$LNG['a_email_subject'] = "Betreff"; // 4.2.0
$LNG['a_email_message'] = "Nachricht"; // 4.2.0
$LNG['a_email_msg_sent'] = "Die Mitteilung wurde an %s gesendet."; // 5.0
$LNG['a_email_not_sent'] = "Die E-Mail konnte nicht an %s gesendet werden ."; // 5.0
$LNG['a_email_sent'] = "Die Mitteilung wurde an %s Mitglieder gesendet."; // 4.2.0
$LNG['a_email_failed'] = "%s Mitglieder haben diese Mitteilung nicht erhalten."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Sie haben sich erfolgreich ausgeloggt."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administration"; // 5.0
$LNG['a_main'] = "Willkommen im Administrationsbereich. Navigieren Sie bitte mit Hilfe des Menüs auf der linken Seite durch den Administrationsbereich."; // 5.0
$LNG['a_main_approve'] = "Ein Eintrag wartet auf ihre Freischaltung.";
$LNG['a_main_approves'] = "%s Seiten warten auf ihre Freischaltung.";
$LNG['a_main_approve_rev'] = "Ein Kommentar wartet auf ihre Freischaltung.";
$LNG['a_main_approve_revs'] = "%s Kommentare warten auf ihre Freischaltung.";
$LNG['a_main_your'] = "Ihre Version"; // 5.0
$LNG['a_main_latest'] = "Letzte Version"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Einträge verwalten"; // 5.0
$LNG['a_man_actions'] = "Aktionen"; // 4.2.0
$LNG['a_man_edit'] = "Bearbeiten"; // 4.2.0
$LNG['a_man_delete'] = "Löschen"; // 4.2.0
$LNG['a_man_email'] = "E-Mail"; // 4.2.0
$LNG['a_man_all'] = "Alle auswählen"; // 5.0
$LNG['a_man_none'] = "Nichts auswählen"; // 5.0
$LNG['a_man_del_sel'] = "Löschen"; // 5.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Kommentare verwalten"; // 5.0
$LNG['a_man_rev_enter'] = "Um die Kommentare zu verwalten bitte hier unten den Mitgliedernamen eingeben."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Kommentar"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menü";
$LNG['a_menu_main'] = "Hauptseite"; // 5.0
$LNG['a_menu_approve'] = "Neue Einträge überprüfen";
$LNG['a_menu_manage'] = "Einträge verwalten"; // 4.2.0
$LNG['a_menu_settings'] = "Grundeinstellungen"; // 5.0
$LNG['a_menu_skins'] = "Oberflächen und Kategorien"; // 5.0
$LNG['a_menu_approve_reviews'] = "Neue Kommentare überprüfen"; // 5.0
$LNG['a_menu_manage_reviews'] = "Kommentare verwalten"; // 5.0
$LNG['a_menu_email'] = "E-Mail an alle Mitglieder";
$LNG['a_menu_delete_review'] = "Kommentar löschen";
$LNG['a_menu_logout'] = "Ausloggen";
$LNG['a_menu_delete'] = "Eintrag löschen";
$LNG['a_menu_edit'] = "Eintrag bearbeiten";
$LNG['a_header_members'] = "Mitglieder"; // 5.0
$LNG['a_header_settings'] = "Einstellungen"; // 5.0
$LNG['a_header_reviews'] = "Kommentare"; // 5.0

// Admin > Settings
$LNG['a_s_header'] = "Grundeinstellungen";
$LNG['a_s_general'] = "Allgemeine Einstellungen";
$LNG['a_s_admin_password'] = "Admin Passwort";
$LNG['a_s_list_name'] = "Der Name dieser Topsites Liste.";
$LNG['a_s_list_url'] = "Kompletter Pfad zum Toplistenverzeichnis.";
$LNG['a_s_default_language'] = "Standardsprache";
$LNG['a_s_your_email'] = "Ihre E-Mail-Addresse:";

$LNG['a_s_sql'] = "SQL Einstellungen";
$LNG['a_s_sql_type'] = "Datenbank Typ"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Datenbank";
$LNG['a_s_sql_username'] = "Benutzername";
$LNG['a_s_sql_password'] = "Passwort";

$LNG['a_s_ranking'] = "Platzierungs-Einstellungen";
$LNG['a_s_num_list'] = "Anzahl der Mitglieder die pro Seite angezeigt werden sollen."; // 5.0
$LNG['a_s_ranking_period'] = "Platzierungsperiode:"; // 5.0
$LNG['a_s_ranking_method'] = "Platzierungsmethode:"; // 5.0
$LNG['a_s_ranking_average'] = "Platzierung nach Durchschnitt oder %s:"; // 5.0
$LNG['a_s_featured_member'] = '"Tip" Funktion ("featured member") aktivieren?  Sie müssen dazu <b>{$featured_member}</b> in der wrapper.html hinzufügen, nachdem Sie diese Option aktiviert haben.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Anzahl Einträge, für die die Top skin Anzeige verwendet werden soll.";
$LNG['a_s_ad_breaks'] = "Nach diesen Rängen eine Werbeeinblendung vornehmen (mit Kommata trennen).";

$LNG['a_s_member'] = "Eintragseinstellungen";
$LNG['a_s_active_default'] = "Neue Einträge müssen erst von Ihnen freigeschaltet werden.";
$LNG['a_s_active_default_review'] = "Neue Kommentare müssen erst von Ihnen freigeschaltet werden.";
$LNG['a_s_delete_after'] = "Nach wieviel Tagen sollen inaktive Seiten gelöscht werden? (zum Deaktivieren auf 0 setzen)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Sie werden bei neuen Einträgen per E-Mail benachrichtigt.";
$LNG['a_s_max_banner_width'] = "Maximale Bannerbreite (zum Deaktivieren auf 0 setzen)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximale Bannerhöhe (zum Deaktivieren auf 0 setzen)"; // 4.2.0
$LNG['a_s_default_banner'] = "Standardbanner, der angezeigt wird, wenn ein Eintrag ohne Banner getätigt wird.";

$LNG['a_s_button'] = "Button Einstellungen";
$LNG['a_s_ranks_on_buttons'] = "Wollen Sie, daß die Platzierung der Seite auf deren Button angezeigt wird? - Bitte im <a href=\"http://www.aardvarkind.com/topsitesphp/manual/\" target=\"_blank\">Handbuch</a> nach Details sehen.  Benutzen Sie nur Buttons mit integrierter Statistik, wenn Sie vorher den entsprechenden Abschnitt im Handbuch nachgelesen haben!"; // 4.2.0
$LNG['a_s_stat_buttons'] = "Statistik Buttons"; // 4.2.0
$LNG['a_s_button_url'] = "<b>Falls Nein</b> - Pfad des Button, der auf den eingetragenene Seiten erscheinen soll."; // 4.0
$LNG['a_s_button_dir'] = "<b>Falls Ja</b> - Pfad des Verzeichnisses, in dem sich die Buttons befinden."; // 4.0
$LNG['a_s_button_ext'] = "<b>Falls Ja</b> - Dateierweiterung der Buttons (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "<b>Falls Ja</b> - Anzahl der vorbereiteten Buttons - Je höher Sie diesen Wert setzen, um so mehr Ressourcen benötigt das Skript."; // 4.0

$LNG['a_s_other'] = "Andere Einstellungen";
$LNG['a_s_search'] = "Suchfunktion";
$LNG['a_s_time_offset'] = "Zeitabweichung ihres Servers (in Stunden)";
$LNG['a_s_gateway'] = "Gateway Seite, um Hits-In Betrug zu vermeiden.";
$LNG['a_s_captcha'] = "Sicherheitstextabfrage -- Vorbeugung gegen Spammer."; // 4.2.2

$LNG['a_s_on'] = "An";
$LNG['a_s_off'] = "Aus";
$LNG['a_s_days'] = "Tage";
$LNG['a_s_months'] = "Monate";
$LNG['a_s_weeks'] = "Wochen"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nein";

$LNG['a_s_updated'] = "Ihre Einstellungen wurden aktualisiert.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Oberflächen und Kategorien"; // 5.0
$LNG['a_skins_default'] = "Standard"; // 5.0
$LNG['a_skins_set_default'] = "Standardoberfläche setzen"; // 5.0
$LNG['a_skins_anon'] = "Anonym"; // 5.0
$LNG['a_skins_default_done'] = "Die Standardoberfläche wurde gesetzt."; // 5.0
$LNG['a_skins_categories_done'] = "Die Kategorieoberflächen wurden gesetzt."; // 5.0
$LNG['a_skins_new_category_done'] = "Die neue Kategorie wurde erstellt."; // 5.0
$LNG['a_skins_delete_done'] = "Die Kategorie wurde gelöscht."; // 5.0
$LNG['a_skins_edit_done'] = "Die Kategorie wurde bearbeitet."; // 5.0
$LNG['a_skins_invalid_skin'] = "Ungültige Oberfläche: %s.  Bitte nochmal versuchen."; // 5.0
$LNG['a_skins_categories'] = "Kategorien"; // 5.0
$LNG['a_skins_new_category'] = "Neue Kategorie erstellen"; // 5.0
$LNG['a_skins_set_skins'] = "Kategorie-Oberflächen setzen"; // 5.0
$LNG['a_skins_edit_category'] = "Kategorie bearbeiten"; // 5.0
$LNG['a_skins_category_name'] = "Kategoriename"; // 5.0
$LNG['a_skins_diff_skins'] = "Wenn Sie verschiedene Oberflächen für verschiedene Kategorien möchten, bitte hier unten auswählen."; // 5.0
?>
