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
$translation = 'Dutch (Nederlands)';
$translator_name = 'Ruben Coolen';
$translator_email = 'admin@lords-of-war.nl';
$translator_url = 'http://www.lords-of-war.nl/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "Ga";
$LNG['g_username'] = "Gebruikersnaam";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Titel";
$LNG['g_description'] = "Omschrijving";
$LNG['g_category'] = "Categorie"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Wachtwoord";
$LNG['g_average'] = "Gemiddelde";
$LNG['g_today'] = "Vandaag";
$LNG['g_yesterday'] = "Gisteren";
$LNG['g_daily'] = "Dagelijks"; // 5.0
$LNG['g_this_month'] = "Deze Maand"; // 5.0
$LNG['g_last_month'] = "Laatste Maand"; // 5.0
$LNG['g_monthly'] = "Maandelijks"; // 5.0
$LNG['g_this_week'] = "Deze week"; // 5.0
$LNG['g_last_week'] = "Laatste week"; // 5.0
$LNG['g_weekly'] = "Wekelijks"; // 5.0
$LNG['g_pv'] = "Paginaviews"; // 5.0
$LNG['g_overall'] = "Overall"; // 5.0
$LNG['g_in'] = "In"; // 5.0
$LNG['g_out'] = "Uit"; // 5.0
$LNG['g_unq_pv'] = "Unieke PVs"; // 5.0
$LNG['g_tot_pv'] = "Totale PVs"; // 5.0
$LNG['g_unq_in'] = "Uniek In"; // 5.0
$LNG['g_tot_in'] = "Totaal In"; // 5.0
$LNG['g_unq_out'] = "Uniek Uit"; // 5.0
$LNG['g_tot_out'] = "Totaal Uit"; // 5.0
$LNG['g_invalid_u_or_p'] = "Verkeerde gebruikersnaam en wachtwoord.  Probeer alstublieft opnieuw."; // 5.0
$LNG['g_invalid_u'] = "Verkeerde gebruikersnaam.  Probeer alstublieft opnieuw."; // 5.0
$LNG['g_invalid_p'] = "Verkeerd wachtwoord.  Probeer alstublieft opnieuw."; // 5.0
$LNG['g_session_expired'] = "Je sessie is verlopen.  Probeer alstublieft opnieuw."; // 5.0
$LNG['g_error'] = "Fout"; // 5.0
$LNG['g_delete_install'] = "Voor beveiligingsredenen moet je de install directory verwijderen voordat het script zal werken."; // 5.0
$LNG['g_ip'] = "IP Adres"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Bewerk Account";
$LNG['edit_info_edited'] = "Je account is succesvol bewerkt.";
$LNG['edit_password_blank'] = "Laat dit leeg om het huidige wachtwoord te behouden."; // 4.0
$LNG['edit_delay'] = "Veranderingen aan je site zijn titel en URL moeten eerst worden goedgekeurd door de administrator."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Topsites Gateway Pagina";
$LNG['gateway_text'] = "Om cheaten tegen te gaan is een gateway pagina gemaakt.  Klik op de link hieronder om in de topsites lijst binnen te gaan.";
$LNG['gateway_vote'] = "Ga binnen en stem";
$LNG['gateway_no_vote'] = "Ga binnen zonder te stemmen"; // 5.0

// Install
$LNG['install_header'] = "Installeer";
$LNG['install_welcome'] = "Welkom bij Aardvark Topsites PHP 5.  Vul alles in om het script te installeren.";
$LNG['install_sql_prefix'] = "Table prefix - Verander dit alleen als je meer dan één lijst vanuit dezelfde database draait.";
$LNG['install_error_chmod'] = "Kon niet schrijven naar settings_sql.php.  Kijk na of je settings_sql.php hebt ge CHMOD naar 666.";
$LNG['install_error_sql'] = "Kon geen connectie maken met de database.  Ga alstublieft terug en kijk je SQL settings na.";
$LNG['install_done'] = "Je topsites lijst is geïnstalleerd.  Verwijder deze map nu.";
$LNG['install_your'] = "Je TopSites lijst";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Handleiding";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Welkom bij Aardvark Topsites PHP 5.  Maak een back-up van je data voor je upgrade.";
$LNG['upgrade_version'] = "Gelieve te zorgen dat u upgrade van versie %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Upgraden is alleen voor Topsites PHP 4.1.0 of hoger.";
$LNG['upgrade_done'] = "Je topsites lijst is geupgrade.  Verwijder deze map nu.";
$LNG['install_mailing_list'] = "Als je bij de Aardvark Topsites PHP mailing list wilt, vul dan je e-mail adres beneden in.  Het is een lijst voor belangrijke aankondigingen over het script, zoals nieuwe uitgevingen en veiligheidsadviserings."; // 5.2.0

// Join
$LNG['join_header'] = "Registreer";
$LNG['join_enter_text'] = "Vul de tekst in zoals hij beneden te zien is"; // 4.2.2
$LNG['join_enter_text_read'] = "Kan je niet lezen?"; // 5.2.0
$LNG['join_user'] = "Gebruiker"; // 5.0
$LNG['join_website'] = "Website"; // 5.0
$LNG['join_banner_size'] = "(Maximum grootte: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Vul een geldige gebruikersnaam in: gebruik alleen letters, nummers, lage strepen, en strepen."; // 5.0
$LNG['join_error_username_duplicate'] = "Vul een geldige gebruikersnaam in: je gebruikersnaam is al in gebruik."; // 5.0
$LNG['join_error_url'] = "Vul een geldige URL in.";
$LNG['join_error_email'] = "Vul een geldig e-mail adres in.";
$LNG['join_error_title'] = "Vul een titel voor je website in.";
$LNG['join_error_password'] = "Vul een wachtwoord in.";
$LNG['join_error_confirm_password'] = "De wachtwoorden zijn niet hetzelfde."; // 5.2.0
$LNG['join_error_urlbanner'] = "Vul een geldige banner in.  Laat dit leeg als je er geen hebt."; // 5.2.0
$LNG['join_error_time'] = "Vernieuw de registratie confirmatie pagina niet."; // 4.2.0
$LNG['join_error_captcha'] = "Het woord dat je invulde is niet hetzelfde als het woord in de afbeelding."; // 4.2.2
$LNG['join_error_question'] = "Je antwoord is fout.  Los dit alstublieft op om te bevestigen dat je een persoon bent en geen bot."; // 5.2.0
$LNG['join_thanks'] = "Bedankt voor te registreren!  Plaats deze code in je site om gerankt te worden.";
$LNG['join_change_warning'] = "Als je de code verandert zal het niet werken.";
$LNG['join_welcome'] = "Welkom bij %s";
$LNG['join_welcome_admin'] = "Een nieuw lid is bij je topsite lijst gekomen.";
$LNG['join_approve'] = "Bedankt voor te registreren!  Je site zal in de lijst komen wanneer een admin het heeft goedgekeurd.  Je zal een e-mail met meer informatie krijgen wanneer je site is goedgekeurd."; // 5.2.0
$LNG['join_type'] = "Account type"; // 5.1.0
$LNG['join_standard'] = "Standaard"; // 5.1.0
$LNG['join_error_top'] = "Een fout was gevonden in je registratie.  Los alstublieft de fout beneden op."; // 5.2.0
$LNG['join_ban_top'] = "Je registratie bevat iets dat gebanned is door de admin."; // 5.2.0
$LNG['join_security'] = "Beveiliging"; // 5.2.0
$LNG['join_confirm_password'] = "Bevestig wachtwoord"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Link Code"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Vergeten wachtwoord"; // 5.0
$LNG['lost_pw_forgot'] = "Wachtwoord vergeten?"; // 5.0
$LNG['lost_pw_get'] = "Krijg wachtwoord"; // 5.0
$LNG['lost_pw_emailed'] = "Kijk aub je e-mail na voor verdere instructies."; // 5.0
$LNG['lost_pw_email'] = "Om een nieuw wachtwoord voor je site te kiezen, ga naar deze URL:"; // 5.0
$LNG['lost_pw_new'] = "Vul een nieuw wachtwoord in"; // 5.0
$LNG['lost_pw_set_new'] = "Verander nieuw wachtwoord"; // 5.0
$LNG['lost_pw_finish'] = "Je wachtwoord is veranderd naar het wachtwoord dat je juist hebt gekozen."; // 5.0

// Main Page
$LNG['main_header'] = "Rankings"; // 5.0
$LNG['main_all'] = "Alle Sites"; // 4.2.0
$LNG['main_method'] = "Ranking methode";
$LNG['main_members'] = "Leden";
$LNG['main_menu_rankings'] = "Rankings";
$LNG['main_menu_join'] = "Registreer";
$LNG['main_menu_random'] = "Willekeurig lid";
$LNG['main_menu_search'] = "Zoek";
$LNG['main_menu_lost_code'] = "Code kwijt"; // 5.0
$LNG['main_menu_lost_password'] = "Wachtwoord kwijt"; // 5.0
$LNG['main_menu_edit'] = "Bewerk leden info";
$LNG['main_menu_user_cp'] = "Gebruikers controle paneel"; // 5.0
$LNG['main_featured'] = "Gekenmerkt lid"; // 4.0.2
$LNG['main_executiontime'] = "Script uitvoeringstijd"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statistieken";
$LNG['table_unique'] = "Uniek";
$LNG['table_total'] = "Totaal";
$LNG['table_rank'] = "Rank";
$LNG['table_title'] = "Titel"; // 4.0
$LNG['table_description'] = "Uitleg"; // 4.0
$LNG['table_movement'] = "Beweging";
$LNG['table_up'] = "Boven"; // 5.0
$LNG['table_down'] = "Onder"; // 5.0
$LNG['table_neutral'] = "Neutraal"; // 5.0
$LNG['table_your_site_here'] = "Jouw site hier"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Stem en review";
$LNG['rate_message'] = "Vul je rating en review in voor %s beneden."; // 5.2.0
$LNG['rate_rating'] = "Rating";
$LNG['rate_review'] = "Review - Geen HTML toegestaan"; // 5.0
$LNG['rate_thanks'] = "Bedankt voor te raten.";
$LNG['rate_error'] = "Je hebt deze site al gerate.";
$LNG['rate_back'] = "Terug naar statistieken";
$LNG['rate_email_admin'] = "Een nieuwe review is gepost op je topsites lijst."; // 5.1.0

// Search
$LNG['search_header'] = "Zoek";
$LNG['search_off'] = "De zoek functie is uitgeschakeld.";
$LNG['search_no_sites'] = "Sorry, geen sites voldoen aan je opzoeking."; // 5.0
$LNG['search_prev'] = "Vorige"; // 3.2.1
$LNG['search_next'] = "Volgende"; // 3.2.1
$LNG['search_displaying_results'] = "Laat %s tot %s van %s resultaten zien voor <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistieken";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Lid Sinds"; // 5.0
$LNG['stats_rating_avg'] = "Gemiddelde rating";
$LNG['stats_rating_num'] = "Aantal ratings";
$LNG['stats_rate'] = "Vul je rating en review in voor deze site";
$LNG['stats_reviews'] = "Reviews";
$LNG['stats_allreviews'] = "Bekijk alle reviews"; // 4.0
$LNG['stats_week'] = "Week"; // 5.0
$LNG['stats_highest'] = "Hoogste"; // 5.0
$LNG['stats_overall'] = "Totale statistieken"; // 5.2.0
$LNG['stats_overall_average'] = "Gemiddelde (Laatste 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Totaal (Altijd)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s Nieuwste leden"; // 5.0
$LNG['ssi_all'] = "Alle sites"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Gebruikers controle paneel"; // 5.0
$LNG['user_cp_login'] = "Login"; // 5.0
$LNG['user_cp_logout'] = "Loguit"; // 5.0
$LNG['user_cp_welcome'] = "Welkom bij het controle paneel.  Gebruik de links links om je account te beheren."; // 5.0
$LNG['user_cp_logout_message'] = "Je bent nu uitgelogd van het gebruikerspaneel."; // 5.0
$LNG['user_cp_login_long'] = "Login met je gebruikersnaam en wachtwoord of met je OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Kan OpenID server niet vinden for %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Je moet je aanmelden bij de topsites lijst om het gebruikerspaneel te kunnen zien."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Er is een fout gekomen bij het inloggen.  Probeer het altublieft opnieuw."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "U moet toegang gunnen om door te gaan.  Probeer het altublieft opnieuw."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Fout van server: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Je kan pas in het gebruikers controle paneel als je site is goedgekeurd.  Je zal een e-mail krijgen wanneer hij is goedgekeurd."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Laat nieuwe leden toe"; // 5.0
$LNG['a_approve'] = "Laat toe"; // 4.0
$LNG['a_approve_none'] = "Er zijn geen leden die wachten op een goedkeuring."; // 4.0
$LNG['a_approve_done'] = "Het lid is goedgekeurd."; // 4.0
$LNG['a_approve_dones'] = "De leden zijn goedgekeurd."; // 4.0
$LNG['a_approve_sel'] = "Met geselecteerd:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Keur bewerkte leden goed"; // 5.2.0
$LNG['a_approve_edited_none'] = "Er zijn geen bewerkingen die wachten op goedkeuring."; // 5.2.0
$LNG['a_approve_edited_old'] = "Vorige titel en URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Bewerkte titel en URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Wijs af"; // 5.2.0
$LNG['a_approve_edited_done'] = "De veranderingen zijn goedgekeurd."; // 5.2.0
$LNG['a_approve_rejected_done'] = "De veranderingen zijn afgekeurd."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Keur nieuwe reviews goed"; // 5.0
$LNG['a_approve_rev_none'] = "Er zijn geen reviews die wachten op goedkeuring."; // 5.0
$LNG['a_approve_rev_done'] = "De review is goedgekeurd."; // 5.0
$LNG['a_approve_rev_dones'] = "De reviews zijn goedgekeurd."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Backup Database"; // 5.2.0
$LNG['a_backup_warn'] = "Dit zal een backup maken van je members, statistieken en settings.  Als je veel leden hebt kan het lang duren en een groot bestand maken."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Maak aangepaste pagina"; // 5.1.0
$LNG['a_create_page_id'] = "Pagina ID - Dit zal gebruikt worden in de URL, Dus het kan alleen maar letters, cijfers, _ en - bevatten."; // 5.1.0
$LNG['a_create_page_error_id'] = "Het pagina ID kan alleen letters, cijfers, _ en - bevatten.  Ga alstublieft terug en verander het pagina ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Er is al een aangepaste pagina met dat ID.  Ga alstublieft terug en verander het pagina ID."; // 5.1.0
$LNG['a_create_page_created'] = "De pagina is aangemaakt.  Je zal manueel een link moeten toevoegen bij %s in wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Verwijder lid"; // 5.0
$LNG['a_del_headers'] = "Verwijder leden"; // 5.0
$LNG['a_del_done'] = "Het lid is verwijderd."; // 5.0
$LNG['a_del_dones'] = "De leden zijn verwijderd."; // 5.0
$LNG['a_del_warn'] = "Ben je zeker dat je %s wilt verwijderen?"; // 5.0
$LNG['a_del_multi'] = "deze %s leden"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Verwijder gefiltreerd woord"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Verwijder gefiltreerde woorden"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Het gefiltreerd woord is verwijderd."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "De gefiltreerde woorden zijn verwijderd."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Ben je zeker dat je %s van de gefiltreerde woorden lijst wilt verwijderen?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "deze %s woorden"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Verkeerd gefiltreerd woord ID.  Probeer altublieft opnieuw."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Verwijder blacklist item"; // 5.2.0
$LNG['a_del_ban_headers'] = "Verwijder blacklist items"; // 5.2.0
$LNG['a_del_ban_done'] = "Het blacklist item is verwijderd."; // 5.2.0
$LNG['a_del_ban_dones'] = "De blacklist items zijn verwijderd."; // 5.2.0
$LNG['a_del_ban_warn'] = "Ben je zeker dat je %s van de blacklist wilt verwijderen?"; //5.2.0
$LNG['a_del_ban_multi'] = "deze %s items"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Verkeerd blacklist ID.  Probeer alstublieft opnieuw."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Verwijder aangepaste pagina"; // 5.1.0
$LNG['a_del_page_headers'] = "Verwijder aangepaste pagina's"; // 5.1.0
$LNG['a_del_page_done'] = "De aangepaste pagina is verwijderd."; // 5.1.0
$LNG['a_del_page_dones'] = "De aangepaste pagina's zijn verwijderd."; // 5.1.0
$LNG['a_del_page_warn'] = "Ben je zeker dat je %s wilt verwijderen?"; //5.1.0
$LNG['a_del_page_multi'] = "deze %s pagina's"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Verkeerd aangepaste pagina ID.  Probeer alstublieft opnieuw."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Verwijder review"; // 5.0
$LNG['a_del_rev_headers'] = "Verwijder reviews"; // 5.0
$LNG['a_del_rev_done'] = "De review is verwijderd."; // 5.0
$LNG['a_del_rev_dones'] = "De reviews zijn verwijderd."; // 5.0
$LNG['a_del_rev_warn'] = "Ben je zeker dat je deze review wilt verwijderen?"; //5.0
$LNG['a_del_rev_warns'] = "Ben je zeker dat je deze reviews wilt verwijderen?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Verkeerd review ID.  Probeer altublieft opniew."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Bewerk lid"; // 5.0
$LNG['a_edit_site_is'] = "Deze site is"; // 4.0
$LNG['a_edit_active'] = "Actief (In de lijst)"; // 4.0
$LNG['a_edit_inactive'] = "Niet actief (Niet in de lijst)"; // 5.0
$LNG['a_edit_edited'] = "Het lid is bewerkt.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Pas gefiltreerd woord aan."; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Het gefiltreerd woord is aangepast."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Pas blacklist item aan."; // 5.2.0
$LNG['a_edit_ban_edited'] = "Het blacklist item is aangepast."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Pas aangepaste pagina aan"; // 5.1.0
$LNG['a_edit_page_content'] = "Inhoud - Je kan hier alleen HTML gebruiken."; // 5.1.0
$LNG['a_edit_page_edited'] = "De pagina is bewerkt."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Bewerk review"; // 5.0
$LNG['a_edit_rev_edited'] = "De review is bewerkt.";

// Admin > Email Members
$LNG['a_email_header'] = "Email leden"; // 5.0
$LNG['a_email_subject'] = "Onderwerp"; // 4.2.0
$LNG['a_email_message'] = "Bericht"; // 4.2.0
$LNG['a_email_msg_sent'] = "Een email is verzonden naar %s"; // 5.0
$LNG['a_email_not_sent'] = "Een email kon niet verzonden worden naar %s"; // 5.0
$LNG['a_email_sent'] = "%s leden zijn ge-emaild."; // 4.2.0
$LNG['a_email_failed'] = "%s leden zijn niet ge-emaild."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Je bent nu uitgelogd van de admin."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Welkom bij de admin.  Gebruik de links links om je topsites lijst te onderhouden."; // 5.0
$LNG['a_main_approve'] = "Er is 1 site die wacht op goedkeuring."; // 5.0
$LNG['a_main_approves'] = "Er zijn %s sites die wachten op goedkeuring."; // 5.0
$LNG['a_main_approve_edit'] = "Er is 1 site bewerking die wacht op goedkeuring."; // 5.2.0
$LNG['a_main_approve_edits'] = "Er zijn %s site bewerkingen die wachten op goedkeuring."; // 5.2.0
$LNG['a_main_approve_rev'] = "Er is 1 review die wacht op goedkeuring."; // 5.0
$LNG['a_main_approve_revs'] = "Er zijn %s reviews die wachten op goedkeuring."; // 5.0
$LNG['a_main_your'] = "Jouw versie"; // 5.0
$LNG['a_main_latest'] = "Laatste versie"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Beheer websites"; // 5.0
$LNG['a_man_actions'] = "Acties"; // 4.2.0
$LNG['a_man_edit'] = "Bewerk"; // 4.2.0
$LNG['a_man_delete'] = "Verwijder"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Selecteer allemaal"; // 5.0
$LNG['a_man_none'] = "Selecteer geen"; // 5.0
$LNG['a_man_del_sel'] = "Werwijder geselecteerde"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Godslastering Filter"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Vul een woord en de vervanging beneden in.  Als voorbeeld, je kan \"hell\" in de woorden filter toevoegen en \"h***\" in het vervangingsveld."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Exacte overeenkomst zal alleen het exacte woord filteren.  Globale overeenkomst zal alles filteren wat het woord bevat.  Dus, globale overeenkomst \"hell\" zal ook \"shell\" en \"hello\" filteren."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Woord"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Vervanging"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Overeenkomst"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exact"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globaal"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filter woord"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" is toegevoegd aan de godslastering filter."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Zwarte lijst"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Om sites en users te bannen, vul het form beneden in.  Als een lid registreerd worden de URL, het email adres, de gebruikersnaam en het IP gechecked.  Wanneer een site is veranderd worden de URL en het e-mail adres gecheckt.<br /><br />De blacklist zal geen effect hebben op je bestaande leden."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Exacte overeenkomst zal alleen het exacte woord filteren.  Globale overeenkomst zal alles filteren dat het woord bevat.  Dus, globale matching van http://www.yahoo.com/ zal elke pagina filteren die http://www.yahoo.com/ bevat in de URL, terwijl exacte overeenkomst van http://www.yahoo.com/ alleen de exacte URL zal filteren."; // 5.2.0
$LNG['a_man_ban_string'] = "Reeks"; // 5.2.0
$LNG['a_man_ban_field'] = "Veld"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" is toegevoegd aan de zwarte lijst."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Beheer aangepaste pagina's"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Beheer reviews"; // 5.0
$LNG['a_man_rev_enter'] = "Vul een lid zijn/haar username beneden in om de reviews te beheren."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Review"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Home"; // 5.0
$LNG['a_menu_approve'] = "Keur nieuwe leden goed";
$LNG['a_menu_approve_edits'] = "Keur bewerkte leden goed"; // 5.2.0
$LNG['a_menu_manage'] = "Beheer leden"; // 4.2.0
$LNG['a_menu_settings'] = "Verander settings"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Godslastering filter"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Zwarte lijst"; // 5.2.0
$LNG['a_menu_backup'] = "Backup Database"; // 5.2.0
$LNG['a_menu_skins'] = "Skins en categorieën"; // 5.0
$LNG['a_menu_approve_reviews'] = "Keur nieuwe reviews goed"; // 5.0
$LNG['a_menu_manage_reviews'] = "Beheer reviews"; // 5.0
$LNG['a_menu_email'] = "Email leden";
$LNG['a_menu_delete_review'] = "Verwijder review";
$LNG['a_menu_logout'] = "Loguit";
$LNG['a_menu_delete'] = "Verwijder lid";
$LNG['a_menu_edit'] = "Bewerk lid";
$LNG['a_menu_create_page'] = "Maak aangepaste pagina aan"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Beheer aangepaste pagina's"; // 5.1.0
$LNG['a_header_members'] = "Leden"; // 5.0
$LNG['a_header_settings'] = "Settings"; // 5.0
$LNG['a_header_tools'] = "Gereedschappen"; // 5.2.0
$LNG['a_header_reviews'] = "Reviews"; // 5.0
$LNG['a_header_pages'] = "Aangepaste pagina's"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Verander settings";
$LNG['a_s_help'] = "Help"; // 5.1.0

$LNG['a_s_general'] = "Algemene settings";
$LNG['a_s_admin_password'] = "Admin wachtwoord";
$LNG['a_s_list_name'] = "De naam van jouw topsites lijst";
$LNG['a_s_list_url'] = "URL van de topsite";
$LNG['a_s_default_language'] = "Standaard taal";
$LNG['a_s_your_email'] = "Jouw e-mail adres";

$LNG['a_s_sql'] = "SQL Settings";
$LNG['a_s_sql_type'] = "Database Type"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Username";
$LNG['a_s_sql_password'] = "Password";

$LNG['a_s_ranking'] = "Ranking settings";
$LNG['a_s_num_list'] = "Nummer van leden per pagina"; // 5.0
$LNG['a_s_ranking_period'] = "Ranking periode"; // 5.0
$LNG['a_s_ranking_method'] = "Ranking methode"; // 5.0
$LNG['a_s_ranking_average'] = "Rank door gemiddelde of door slechts %s"; // 5.0
$LNG['a_s_featured_member'] = 'Voorgekomen lid - Je moet {$featured_member} in wrapper.html zetten nadat je dit aanzet.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Nummer van leden om de _top skin voor te gebruiken";
$LNG['a_s_ad_breaks'] = "Laat ads zien na deze ranks (scheiden door komma's) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Vul lege rijen in met een bericht dat zegt \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Leden settings";
$LNG['a_s_active_default'] = "Vereis nieuwe leden goedgekeurd te worden voor in de lijst te komen";
$LNG['a_s_active_default_review'] = "Vereis nieuwe reviews goedgekeurd te worden voor in de lijst te komen";
$LNG['a_s_delete_after'] = "Verwijder inactieve leden na zoveel dagen (zet op 0 om af te zetten)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Email de admin als een nieuw lid registreerd"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Email de admin wanneer een review is gepost"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Leden hun maximum banner breedte (zet op 0 om af te zetten)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Leden hun maximum banner hoogte (zet op 0 om af te zetten)"; // 4.2.0
$LNG['a_s_default_banner'] = "Standaard banner voor leden die geen banner hebben";

$LNG['a_s_button'] = "Knop settings";
$LNG['a_s_ranks_on_buttons'] = "Ranks op knoppen -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Statistieken knoppen"; // 4.2.0
$LNG['a_s_button_url'] = "Als ja/nee - URL naar de standaard knop die je wilt dat op leden hun site komt"; // 4.0
$LNG['a_s_button_dir'] = "Als ja - URL naar de map waar de knoppen inzitten"; // 4.0
$LNG['a_s_button_ext'] = "Als ja - Extensie van de knuppen (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Als ja - Nummer van knoppen die je hebt gemaakt"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-vriendelijke links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gateway pagina om cheaten te voorkomen";
$LNG['a_s_captcha'] = "Woord verificatie om spammers te blokken bij het aanmelden - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Veiligheids vraag en antwoord om spammers te blokken (laat leeg om af te zetten) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Andere settings";
$LNG['a_s_search'] = "Zoek";
$LNG['a_s_time_offset'] = "Tijd compensatie van uw server (in uur)";

$LNG['a_s_on'] = "Op";
$LNG['a_s_off'] = "Af";
$LNG['a_s_days'] = "Dagen";
$LNG['a_s_months'] = "Maanden";
$LNG['a_s_weeks'] = "Weken"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nee";
$LNG['a_s_answer'] = "Antwoord"; // 5.2.0

$LNG['a_s_updated'] = "Je settings zijn geupdate.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Skins en categorieën"; // 5.0
$LNG['a_skins_default'] = "Standaard skin"; // 5.0
$LNG['a_skins_set_default'] = "Zet standaard skin"; // 5.0
$LNG['a_skins_anon'] = "Anoniem"; // 5.0
$LNG['a_skins_default_done'] = "De standaard skin is gezet."; // 5.0
$LNG['a_skins_categories_done'] = "De categorie skins zijn gezet."; // 5.0
$LNG['a_skins_new_category_done'] = "De nieuwe categorie is gemaakt."; // 5.0
$LNG['a_skins_delete_done'] = "De categorie is verwijderd."; // 5.0
$LNG['a_skins_delete_error'] = "De categorie kan niet verwijderd worden omdat je er minstens 1 moet hebben."; // 5.1.0
$LNG['a_skins_edit_done'] = "De categorie is bewerkt."; // 5.0
$LNG['a_skins_invalid_skin'] = "Verkeerde skin: %s.  Probeer alstublieft opnieuw."; // 5.0
$LNG['a_skins_categories'] = "Categorieën"; // 5.0
$LNG['a_skins_new_category'] = "Maak nieuwe categorie"; // 5.0
$LNG['a_skins_set_skins'] = "Zet categorie skins"; // 5.0
$LNG['a_skins_edit_category'] = "Bewerk categorie"; // 5.0
$LNG['a_skins_category_name'] = "Categorie naam"; // 5.0
$LNG['a_skins_diff_skins'] = "Als je andere skins wilt, selecteer ze beneden."; // 5.0
?>
