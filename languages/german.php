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
$translation = 'German (Deutsch)';
$translator_name = 'Hiero';
$translator_email = 'hieronet@gmx.net';
$translator_url = 'http://www.cruiser-berlin.de/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

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
$LNG['g_unq_in'] = "Hits In Besucher"; // 5.0
$LNG['g_tot_in'] = "Hits In Gesamt"; // 5.0
$LNG['g_unq_out'] = "Hits Out Besucher"; // 5.0
$LNG['g_tot_out'] = "Hits Out Gesamt"; // 5.0
$LNG['g_invalid_u_or_p'] = "Ungültiger Benutzername oder Passwort.  Bitte nocheinmal versuchen."; // 5.0
$LNG['g_invalid_u'] = "Ungültiger Benutzername.  Bitte nocheinmal versuchen."; // 5.0
$LNG['g_invalid_p'] = "Ungültiges Passwort.  Bitte nocheinmal versuchen."; // 5.0
$LNG['g_session_expired'] = "Ihre Sitzungszeit ist abgelaufen.  Bitte neu einloggen."; // 5.0
$LNG['g_error'] = "Fehler"; // 5.0
$LNG['g_delete_install'] = "Aus Sicherheitsgründen muss das Install-Verzeichnis gelöscht werden bevor das Script funktioniert."; // 5.0
$LNG['g_ip'] = "IP Adresse"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Benutzerkonto bearbeiten";
$LNG['edit_info_edited'] = "Ihr Benutzerkonto wurde erfolgreich bearbeitet.";
$LNG['edit_password_blank'] = "Bitte freilassen um das aktuelle Passwort zu behalten"; // 4.0
$LNG['edit_delay'] = "Änderungen am Seitentitel und der URL müssen vom Topsites Administrator erst überprüft und genehmigt werden bevor sie erscheinen."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Topsites Gateway Seite";
$LNG['gateway_text'] = "Um Schummeleien zu vermeiden, wurde diese Gateway-Seite eingerichtet. Klicken Sie den untenstehenden Link, um die Topliste aufzurufen.";
$LNG['gateway_vote'] = "Zugang mit Abstimmung";
$LNG['gateway_no_vote'] = "Zugang ohne Abstimmung"; // 5.0

// Install
$LNG['install_header'] = "Installation";
$LNG['install_welcome'] = "Willkommen zu Aardvark Topsites PHP 5.  Füllen Sie bitte das untere Formular aus um das Script zu installieren.";
$LNG['install_sql_prefix'] = "Tabellenpräfix - bitte nur ändern wenn Sie mehrere Listen in derselben Datenbank betreiben wollen";
$LNG['install_error_chmod'] = "Kann Einstellungen nicht in settings_sql.php schreiben.  Bitte sicherstellen das die Datei settings_sql.php auf CHMOD 666 gesetzt wurde.";
$LNG['install_error_sql'] = "Kann nicht zur SQL Datenbank verbinden.  Bitte die SQL Datenbank-Einstellungen überprüfen.";
$LNG['install_done'] = "Ihre Topsites Liste wurde installiert.  Das Install-Verzeichnis bitte jetzt löschen.";
$LNG['install_your'] = "Ihre Topsites Liste";
$LNG['install_admin'] = "Administration";
$LNG['install_manual'] = "Handbuch";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Willkommen zu Aardvark Topsites PHP 5.  Vor dem Upgrade bitte unbedingt Ihre Daten sichern.";
$LNG['upgrade_version'] = "Bitte stellen Sie sicher das sie von Version %s upgraden."; // 5.1.0
$LNG['upgrade_error_version'] = "Ein Upgrade ist nur möglich von Aardvark Topsites PHP 4.1.0 oder höher.";
$LNG['upgrade_done'] = "Ihre Topsites Liste wurde aktualisiert. Das Install-Verzeichnis bitte jetzt löschen.";
$LNG['install_mailing_list'] = "Wenn Sie an der Aardvark Topsites PHP Mailingliste teilnehmen wollen, trage bitte deine Email-Adresse unten ein.  Es ist nur eine kleine Liste für wichtige Ankündigungen über das Script, wie z.B. neue Versionen und Sicherheitstipps."; // 5.2.0

// Join
$LNG['join_header'] = "Seite eintragen";
$LNG['join_enter_text'] = "Bitte den hier unten angezeigten Code eintragen:"; // 4.2.2
$LNG['join_enter_text_read'] = "Nicht lesbar?"; // 5.2.0
$LNG['join_user'] = "Benutzer"; // 5.0
$LNG['join_website'] = "Webseite"; // 5.0
$LNG['join_banner_size'] = "(Maximale Größe: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Bitte einen gültigen Benutzernamen eingeben. (Bitte nur Buchstaben, Zahlen, Unterstriche und Gedankenstriche verwenden.)"; // 5.0
$LNG['join_error_username_duplicate'] = "Bitte einen anderen Benutzernamen einzugeben: Der gewünschte Benutzername ist leider schon vergeben!"; // 5.0
$LNG['join_error_url'] = "Bitte eine gültige URL eingeben.";
$LNG['join_error_email'] = "Bitte eine gültige Emailaddresse eingeben.";
$LNG['join_error_title'] = "Bitte einen Titel für Ihre Webseite eingeben.";
$LNG['join_error_password'] = "Bitte ein Passwort eingeben.";
$LNG['join_error_confirm_password'] = "Das Passwort stimmt nicht überein."; // 5.2.0
$LNG['join_error_urlbanner'] = "Trage eine gültige Banneradresse ein.  Lass die Zeile frei wenn kein Banner vorhanden ist."; // 5.2.0
$LNG['join_error_time'] = "Bitte nicht auf \"aktualisieren\" drücken!"; // 4.2.0
$LNG['join_error_captcha'] = "Der von Ihnen eingegebene Code stimmt nicht mit dem aus der Grafik überein!"; // 4.2.2
$LNG['join_error_question'] = "Ihre Antwort ist nicht korrekt. Bitte korrigieren Sie dies um sicherzustellen, dass Sie eine reale Person und kein Bot sind."; // 5.2.0
$LNG['join_thanks'] = "Vielen Dank! --- Fügen Sie nun bitte diesen Code in Ihre Webseite ein um gelistet zu werden:";
$LNG['join_change_warning'] = "Wenn Sie den Code verändern, werden Ihre Hits nicht gezählt.";
$LNG['join_welcome'] = "Willkommen bei %s";
$LNG['join_welcome_admin'] = "Ein neues Mitglied hat sich angemeldet.";
$LNG['join_approve'] = "Danke für die Teilnahme!  Deine Seite wird gelistet nachdem der Administrator sie überprüft und freigeschaltet hat. Du bekommst dann eine Email mit der Information das deine Seite freigeschaltet wurde."; // 5.2.0
$LNG['join_type'] = "Kontotyp"; // 5.1.0
$LNG['join_standard'] = "Standard"; // 5.1.0
$LNG['join_error_top'] = "Ein Fehler wurde in deiner Anmeldung gefunden. Bitte korrigieren Sie den Fehler hier unten."; // 5.2.0
$LNG['join_ban_top'] = "Ihre Anmeldung enthält Inhalte die vom Topsites Administrator nicht freigegeben werden."; // 5.2.0
$LNG['join_security'] = "Sicherheit"; // 5.2.0
$LNG['join_confirm_password'] = "Wiederhole das Passwort"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Link Code"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Passwort vergessen"; // 5.0
$LNG['lost_pw_forgot'] = "Sie haben Ihr  Passwort vergessen?"; // 5.0
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
$LNG['main_menu_user_cp'] = "Benutzer-Kontrollbereich &nbsp;"; // 5.0
$LNG['main_featured'] = "Site Of The Moment"; // 4.0.2
$LNG['main_executiontime'] = "Script Laufzeit"; // 4.0
$LNG['main_queries'] = "SQL Abfragen"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statistik";
$LNG['table_unique'] = "Besucher";
$LNG['table_total'] = "Seitenaufrufe";
$LNG['table_rank'] = "Platzierung";
$LNG['table_title'] = "Titel"; // 4.0
$LNG['table_description'] = "Beschreibung"; // 4.0
$LNG['table_movement'] = "Trend";
$LNG['table_up'] = "Steigend"; // 5.0
$LNG['table_down'] = "Sinkend"; // 5.0
$LNG['table_neutral'] = "Gleichbleibend"; // 5.0
$LNG['table_your_site_here'] = "Ihre Seite hier"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Bewerten und Kommentieren";
$LNG['rate_message'] = "Bitte trage deine Bewertung und Kommentar für %s in das untere Formular ein."; // 5.2.0
$LNG['rate_rating'] = "Bewertung";
$LNG['rate_review'] = "Kommentar - (HTML nicht zulässig)"; // 5.0
$LNG['rate_thanks'] = "Vielen Dank für das Bewerten und/oder Kommentieren dieser Seite!";
$LNG['rate_error'] = "Sie haben diese Seite bereits schon bewertet.";
$LNG['rate_back'] = "Zurück zur Statistik";
$LNG['rate_email_admin'] = "Ein neuer Kommentar wurde Ihrer Topsites-Liste hinzugefügt."; // 5.1.0

// Search
$LNG['search_header'] = "Suchen";
$LNG['search_off'] = "Die Suchfunktion wurde deaktiviert.";
$LNG['search_no_sites'] = "Es wurden leider keine zu Ihren Suchkriterien passenden Seiten gefunden."; // 5.0
$LNG['search_prev'] = "Vorhergehende"; // 3.2.1
$LNG['search_next'] = "Nächste"; // 3.2.1
$LNG['search_displaying_results'] = "Anzeige %s bis %s von %s Ergebnissen für <b>%s</b>."; // 5.1.0

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
$LNG['stats_overall'] = "Gesamtstatus"; // 5.2.0
$LNG['stats_overall_average'] = "Durchschnitt (Letzte 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Total (Gesamtlaufzeit)"; // 5.2.0

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
$LNG['user_cp_login_long'] = "Loggen Sie sich mit Ihrem Benutzernamen und Passwort oder ihrer OpenID ein."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Kein OpenID Server für %s auffindbar."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Sie müssen sich erst bei der Topsites List registrieren, um Zugang zum Benutzerkontrollbereich zu erlangen."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Ein Fehler ist beim LogIn aufgetreten.  Bitte nocheinmal versuchen."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Sie müssen erst die Zugangserlaubnis haben um weiterzumachen.  Bitte nocheinmal versuchen."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Serverfehler: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Sie können Ihre Benutzerkontrolloberfläche nicht aufrufen solange Ihre Seite nicht freigeschaltet ist. Sie bekommen eine Email wenn Ihre Seite vom Administrator überprüft und freigeschaltet wurde."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Neuen Einträgen zustimmen"; // 5.0
$LNG['a_approve'] = "Zustimmen"; // 4.0
$LNG['a_approve_none'] = "Keine neuen Einträge, die auf Ihre Zustimmung warten."; // 4.0
$LNG['a_approve_done'] = "Der Eintrag wurde zugelassen."; // 4.0
$LNG['a_approve_dones'] = "Die Einträge wurden zugelassen."; // 4.0
$LNG['a_approve_sel'] = "mit ausgewählten:"; // 5.0

// Admin > Änderungswünsche von Mitgliedern // 5.2.0
$LNG['a_approve_edited_header'] = "Genehmige Änderungen von Mitgliedern"; // 5.2.0
$LNG['a_approve_edited_none'] = "Es liegen zur Zeit keine Änderungswünsche vor."; // 5.2.0
$LNG['a_approve_edited_old'] = "Vorheriger Seitentitel und URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Geänderter Seitentitel und URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Ablehnen"; // 5.2.0
$LNG['a_approve_edited_done'] = "Die Änderungen wurden genehmigt."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Die Änderungen wurden abgelehnt."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Neue Kommentare zulassen"; // 5.0
$LNG['a_approve_rev_none'] = "Keine neuen Kommentare, die auf Ihre Freischaltung warten."; // 5.0
$LNG['a_approve_rev_done'] = "Der Kommentar wurde zugelassen."; // 5.0
$LNG['a_approve_rev_dones'] = "Die Kommentare wurden zugelassen."; // 5.0

// Admin > Backup der Datenbank // 5.2.0
$LNG['a_backup_header'] = "Datenbank-Backup"; // 5.2.0
$LNG['a_backup_warn'] = "Dies erstellt eine Sicherheitskopie der Mitglieder, des Status und der Einstellungen. Bei sehr vielen Mitgliedern kann dies eine einige Zeit dauern sowie auch eine große Backupdatei erzeugen."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Erstelle spezifische Seite"; // 5.1.0
$LNG['a_create_page_id'] = "Seiten ID - Diese wird in der URL verwendet und darf deshalb nur Buchstaben, Nummern , Unterstriche, und Bindestriche enthalten"; // 5.1.0
$LNG['a_create_page_error_id'] = "Die Seiten ID darf nur Buchstaben, Nummern , Unterstriche, und Bindestriche enthalten. Bitte gehen Sie zurück und korrigieren Sie Ihre Eingabe."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Es ist bereits eine Seite mit dieser ID vorhanden.  Bitte gehen Sie zurück und geben Sie eine neue ID ein."; // 5.1.0
$LNG['a_create_page_created'] = "Die Seite wurde erstellt.  Sie müssen den Link aber manuell %s in der wrapper.html einfügen."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Eintrag löschen"; // 5.0
$LNG['a_del_headers'] = "Einträge löschen"; // 5.0
$LNG['a_del_done'] = "Der Eintrag wurde erfolgreich gelöscht."; // 5.0
$LNG['a_del_dones'] = "Die Einträge wurden erfolgreich gelöscht."; // 5.0
$LNG['a_del_warn'] = "Sind Sie sicher  %s  zu löschen?"; // 5.0
$LNG['a_del_multi'] = "diese %s Einträge"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Lösche Filterwort"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Lösche Filterwörter"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Das Filterwort wurde gelöscht."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Die Filterwörter wurden gelöscht."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Sind Sie sicher %s aus der Filterwortliste zu löschen?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "diese %s Wörter"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Ungültige Filterwort ID.  Bitte nocheinmal versuchen."; // 5.1.0

// Admin > Bann aufheben // 5.2.0
$LNG['a_del_ban_header'] = "Blacklist-Eintrag löschen"; // 5.2.0
$LNG['a_del_ban_headers'] = "Blacklist-Einträge löschen"; // 5.2.0
$LNG['a_del_ban_done'] = "Der Blacklist-Eintrag wurde gelöscht."; // 5.2.0
$LNG['a_del_ban_dones'] = "Die Blacklist-Einträge wurden gelöscht."; // 5.2.0
$LNG['a_del_ban_warn'] = "Sind Sie sicher %s aus der Blacklist zu löschen?"; //5.2.0
$LNG['a_del_ban_multi'] = "diese %s Einträge"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Ungültige Blacklist ID. Bitte nochmals versuchen."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Lösche spezifische Seite"; // 5.1.0
$LNG['a_del_page_headers'] = "Lösche spezifische Seiten"; // 5.1.0
$LNG['a_del_page_done'] = "Die Seite wurde gelöscht."; // 5.1.0
$LNG['a_del_page_dones'] = "Die Seiten wurden gelöscht."; // 5.1.0
$LNG['a_del_page_warn'] = "Sind Sie sicher %s zu löschen?"; //5.1.0
$LNG['a_del_page_multi'] = "diese %s Mitglieder"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Ungültige Seiten ID.  Bitte nocheinmal versuchen."; // 5.1.0

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

// Admin > Bann Ändern // 5.2.0
$LNG['a_edit_ban_header'] = "Blacklist-Eintrag Ändern"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Der Blacklist-Eintrag wurde geändert."; // 5.2.0

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Bearbeite Filterwort"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Das Filterwort wurde bearbeitet."; // 5.1.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Bearbeite spezifische Seite"; // 5.1.0
$LNG['a_edit_page_content'] = "Inhalt - Es kann hier HTML verwendet werden"; // 5.1.0
$LNG['a_edit_page_edited'] = "Die Seite wurde bearbeitet."; // 5.1.0

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
$LNG['a_main_approve'] = "Ein Eintrag wartet auf Ihre Freischaltung.";
$LNG['a_main_approves'] = "%s Seiten warten auf Ihre Freischaltung.";
$LNG['a_main_approve_edit'] = "1 Seitenänderung wartet auf Genehmigung."; // 5.2.0
$LNG['a_main_approve_edits'] = "%s Seitenänderungen warten auf Genehmigigung."; // 5.2.0
$LNG['a_main_approve_rev'] = "Ein Kommentar wartet auf Ihre Freischaltung.";
$LNG['a_main_approve_revs'] = "%s Kommentare warten auf Ihre Freischaltung.";
$LNG['a_main_your'] = "Ihre Version"; // 5.0
$LNG['a_main_latest'] = "Letzte Version"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Einträge verwalten"; // 5.0
$LNG['a_man_actions'] = "Aktionen"; // 4.2.0
$LNG['a_man_edit'] = "Bearbeiten"; // 4.2.0
$LNG['a_man_delete'] = "Löschen"; // 4.2.0
$LNG['a_man_email'] = "E-Mail"; // 4.2.0
$LNG['a_man_all'] = "Alle auswählen"; // 5.0
$LNG['a_man_none'] = "Nichts auswählen"; // 5.0
$LNG['a_man_del_sel'] = "Löschen"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Wortfilter"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Fügen Sie ein Wort und das Ersatzwort darunter ein.  Zum Beispiel, können Sie  \"hell\" im Wortfeld eingeben und \"h***\" im Ersatzwortfeld."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Nur bei genauer Übereinstimmung erfolgt die Ausgabe des exakten Wortes.  Globale Übereinstimmungmatching kann zu allem im Wort passen.  Also, globale Übereinstimmung von \"hell\" passt also auch zu \"shell\" und \"hello\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Wort"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Ersatzwort"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Übereinstimmend"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exakt"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Global"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filterwort"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" wurde dem Profan-Filter hinzugefügt."; // 5.1.0

// Admin > Bann hinzufügen // 5.2.0
$LNG['a_man_ban_header'] = "Blacklist"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Um jemand von Ihrer Topsites List zu bannen, füllen Sie bitte das untere Formular aus. Bei einer Neuanmeldung wird die URL, die Emailadresse, der Username und die IP überprüft. Bei der Änderung einer Seite wird nur noch die URL und die Emailadresse überprüft.<br /><br />Die Blacklist hat keine Auswirkungen auf bereits existierende Mitglieder"; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Nur bei genauer Übereinstimmung erfolgt die Ausgabe des exakten Wortes. Globale Übereinstimmung kann zu allem in der Zeichenkette passen.  Also, globale Übereinstimmung von http://www.yahoo.com/ passt zu jeder Seite mit http://www.yahoo.com/ in der URL, während exakte übereinstimmung von http://www.yahoo.com/ nur auf die exakte URL passt."; // 5.2.0
$LNG['a_man_ban_string'] = "Zeichenkette"; // 5.2.0
$LNG['a_man_ban_field'] = "Feld"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" wurden der Blacklist hinzugefügt."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Verwalte spezifische Seiten"; // 5.1.0

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
$LNG['a_menu_approve_edits'] = "Genehmige geänderte Mitglieder"; // 5.2.0
$LNG['a_menu_manage'] = "Einträge verwalten"; // 4.2.0
$LNG['a_menu_settings'] = "Grundeinstellungen"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Wortfilter"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Blacklist"; // 5.2.0
$LNG['a_menu_backup'] = "Datenbank-Backup"; // 5.2.0
$LNG['a_menu_skins'] = "Oberflächen und Kategorien"; // 5.0
$LNG['a_menu_approve_reviews'] = "Neue Kommentare überprüfen"; // 5.0
$LNG['a_menu_manage_reviews'] = "Kommentare verwalten"; // 5.0
$LNG['a_menu_email'] = "E-Mail an alle Mitglieder";
$LNG['a_menu_delete_review'] = "Kommentar löschen";
$LNG['a_menu_logout'] = "Ausloggen";
$LNG['a_menu_delete'] = "Eintrag löschen";
$LNG['a_menu_edit'] = "Eintrag bearbeiten";
$LNG['a_menu_create_page'] = "Erstelle Kundenseite"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Verwalte Kundenseiten"; // 5.1.0
$LNG['a_header_members'] = "Mitglieder"; // 5.0
$LNG['a_header_settings'] = "Einstellungen"; // 5.0
$LNG['a_header_tools'] = "Werkzeuge"; // 5.2.0
$LNG['a_header_reviews'] = "Kommentare"; // 5.0
$LNG['a_header_pages'] = "Spezifische Seiten"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Grundeinstellungen";
$LNG['a_s_help'] = "Hilfe"; // 5.1.0

$LNG['a_s_general'] = "Allgemeine Einstellungen";
$LNG['a_s_admin_password'] = "Admin Passwort";
$LNG['a_s_list_name'] = "Der Name dieser Topsites Liste.";
$LNG['a_s_list_url'] = "Kompletter Pfad zum Toplistenverzeichnis.";
$LNG['a_s_default_language'] = "Standardsprache";
$LNG['a_s_your_email'] = "Ihre E-Mail-Addresse:";

$LNG['a_s_sql'] = "SQL Einstellungen";
$LNG['a_s_sql_type'] = "Datenbank Typ"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Datenbankname";
$LNG['a_s_sql_username'] = "Benutzername";
$LNG['a_s_sql_password'] = "Passwort";

$LNG['a_s_ranking'] = "Platzierungs-Einstellungen";
$LNG['a_s_num_list'] = "Anzahl der Mitglieder die pro Seite angezeigt werden sollen."; // 5.0
$LNG['a_s_ranking_period'] = "Platzierungsperiode:"; // 5.0
$LNG['a_s_ranking_method'] = "Platzierungsmethode:"; // 5.0
$LNG['a_s_ranking_average'] = "Platzierung nach Durchschnitt oder %s:"; // 5.0
$LNG['a_s_featured_member'] = '"Site Of The Moment" Funktion ("featured member") aktivieren?  Sie müssen dazu <b>{$featured_member}</b> in der wrapper.html hinzufügen, nachdem Sie diese Option aktiviert haben.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Anzahl Einträge, für die die Top-Skin Anzeige verwendet werden soll.";
$LNG['a_s_ad_breaks'] = "Nach diesen Rängen eine Werbeeinblendung vornehmen (mit Kommata trennen). - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0;
$LNG['a_s_fill_blank_rows'] = "Füllt Leerzeilen mit folgender Mitteilung aus \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Eintragseinstellungen";
$LNG['a_s_active_default'] = "Neue Einträge müssen erst von Ihnen freigeschaltet werden.";
$LNG['a_s_active_default_review'] = "Neue Kommentare müssen erst von Ihnen freigeschaltet werden.";
$LNG['a_s_delete_after'] = "Nach wieviel Tagen sollen inaktive Seiten gelöscht werden? (zum Deaktivieren auf 0 setzen)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Admin wird bei neuen Einträgen per E-Mail benachrichtigt."; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Email an den Admin wenn ein neuer Kommentar geposted wurde."; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maximale Bannerbreite (zum Deaktivieren auf 0 setzen)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximale Bannerhöhe (zum Deaktivieren auf 0 setzen)"; // 4.2.0
$LNG['a_s_default_banner'] = "Standardbanner, der angezeigt wird, wenn ein Eintrag ohne Banner getätigt wird.";

$LNG['a_s_button'] = "Button Einstellungen";
$LNG['a_s_ranks_on_buttons'] = "Anzeige der Seiten-Platzierungen auf dem Button? - <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Statistik Buttons"; // 4.2.0
$LNG['a_s_button_url'] = "<b>Falls Nein</b> - Pfad des Button, der auf den eingetragenenen Seiten erscheinen soll."; // 4.0
$LNG['a_s_button_dir'] = "<b>Falls Ja</b> - Pfad des Verzeichnisses, in dem sich die Buttons befinden."; // 4.0
$LNG['a_s_button_ext'] = "<b>Falls Ja</b> - Dateierweiterung der Buttons (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "<b>Falls Ja</b> - Anzahl der vorbereiteten Buttons - Je höher Sie diesen Wert setzen, um so mehr Ressourcen benötigt das Skript."; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-freundliche Links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gateway Seite, um Hits-In Betrug zu vermeiden.";
$LNG['a_s_captcha'] = "Sicherheitstextabfrage -- Vorbeugung gegen Spammer. - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Sicherheitsfrage und Antwort um Spammer zu blockieren (Frei lassen bei Nichtverwendung) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Andere Einstellungen";
$LNG['a_s_search'] = "Suchfunktion";
$LNG['a_s_time_offset'] = "Zeitabweichung Ihres Servers (in Stunden)";

$LNG['a_s_on'] = "An";
$LNG['a_s_off'] = "Aus";
$LNG['a_s_days'] = "Tage";
$LNG['a_s_months'] = "Monate";
$LNG['a_s_weeks'] = "Wochen"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nein";
$LNG['a_s_answer'] = "Antwort"; // 5.2.0

$LNG['a_s_updated'] = "Ihre Einstellungen wurden aktualisiert.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Oberflächen und Kategorien"; // 5.0
$LNG['a_skins_default'] = "Standardoberfläche"; // 5.0
$LNG['a_skins_set_default'] = "Standardoberfläche setzen"; // 5.0
$LNG['a_skins_anon'] = "Anonym"; // 5.0
$LNG['a_skins_default_done'] = "Die Standardoberfläche wurde gesetzt."; // 5.0
$LNG['a_skins_categories_done'] = "Die Kategorieoberflächen wurden gesetzt."; // 5.0
$LNG['a_skins_new_category_done'] = "Die neue Kategorie wurde erstellt."; // 5.0
$LNG['a_skins_delete_done'] = "Die Kategorie wurde gelöscht."; // 5.0
$LNG['a_skins_delete_error'] = "Diese Kategorie kann nicht gelöscht werden, da mindestens eine Kategorie vorhanden sein muß."; // 5.1.0
$LNG['a_skins_edit_done'] = "Die Kategorie wurde bearbeitet."; // 5.0
$LNG['a_skins_invalid_skin'] = "Ungültige Oberfläche: %s.  Bitte nocheinmal versuchen."; // 5.0
$LNG['a_skins_categories'] = "Kategorien"; // 5.0
$LNG['a_skins_new_category'] = "Neue Kategorie erstellen"; // 5.0
$LNG['a_skins_set_skins'] = "Kategorie-Oberflächen setzen"; // 5.0
$LNG['a_skins_edit_category'] = "Kategorie bearbeiten"; // 5.0
$LNG['a_skins_category_name'] = "Kategoriename"; // 5.0
$LNG['a_skins_diff_skins'] = "Wenn Sie verschiedene Oberflächen für verschiedene Kategorien möchten, bitte hier unten auswählen."; // 5.0
?>
