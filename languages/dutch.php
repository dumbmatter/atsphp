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
$translation = 'Dutch (Nederlands)';
$translator_name = '';
$translator_email = '';
$translator_url = '';

// Set this to the character encoding of your translation
$LNG['charset'] = "utf-8";

// Global
$LNG['g_form_submit_short'] = "ga";
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
$LNG['g_yesterday'] = "Gister";
$LNG['g_daily'] = "Dagelijks"; // 5.0
$LNG['g_this_month'] = "Deze Maand"; // 5.0
$LNG['g_last_month'] = "Vorige Maand"; // 5.0
$LNG['g_monthly'] = "Maandelijks"; // 5.0
$LNG['g_this_week'] = "Deze Week"; // 5.0
$LNG['g_last_week'] = "Vorige Week"; // 5.0
$LNG['g_weekly'] = "Wekelijks"; // 5.0
$LNG['g_pv'] = 'Pageviews'; // 5.0
$LNG['g_overall'] = 'Overall'; // 5.0
$LNG['g_in'] = 'In'; // 5.0
$LNG['g_out'] = 'Uit'; // 5.0
$LNG['g_unq_pv'] = "Unieke PVs"; // 5.0
$LNG['g_tot_pv'] = "Totaal PVs"; // 5.0
$LNG['g_unq_in'] = "Unieke In"; // 5.0
$LNG['g_tot_in'] = "Totaal In"; // 5.0
$LNG['g_unq_out'] = "Unieke Uit"; // 5.0
$LNG['g_tot_out'] = "Totaal Uit"; // 5.0
$LNG['g_invalid_u_or_p'] = "Ongeldige gebruikersnaam of wachtwoord.  Probeer het opnieuw."; // 5.0
$LNG['g_invalid_u'] = "Ongeldige gebruikersnaam.  Probeer het opnieuw."; // 5.0
$LNG['g_invalid_p'] = "Ongeldige wachtwoord.  Probeer het opnieuw."; // 5.0
$LNG['g_session_expired'] = "Uw sessie is verlopen.  Probeer het opnieuw."; // 5.0
$LNG['g_error'] = "Error"; // 5.0
$LNG['g_delete_install'] = "Voor veiligheids voorzorg, moet je eerst de install directory verwijderen, alvorens het script kan werken."; // 5.0

// Edit Account
$LNG['edit_header'] = "Bewerk Account";
$LNG['edit_info_edited'] = "Uw account is succesvol bewerkt.";
$LNG['edit_password_blank'] = "Laat dit ongewijzigd om het huidige wachtwoord te behouden"; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Anti Cheat Pagina";
$LNG['gateway_text'] = "Om cheaters te misleiden, is deze pagina opgezet. Klik de link hieronder om verder te gaan.";
$LNG['gateway_vote'] = "Ga naar binnen en stem";
$LNG['gateway_no_vote'] = "Ga naar binnen zonder te stemmen"; // 5.0

// Install
$LNG['install_header'] = "Installeer";
$LNG['install_welcome'] = "Welkom bij Aardvark Topsites PHP 5.  Vul onderstaand formulier in om het script te installeren.";
$LNG['install_sql_prefix'] = "Table prefix - Verander dit alléén wanneer je meerdere toplijsten via dezelfde database laat werken";
$LNG['install_error_chmod'] = "Could not write to settings_sql.php.  Verzeker dat de CHMOD 666 is voor de settings_sql.php.";
$LNG['install_error_sql'] = "Kan geen verbinding maken met de SQL database.  Ga terug en controleer de SQL settings.";
$LNG['install_done'] = "Uw topsite is geïnstalleerd.  Verwijder de install directory meteen!.";
$LNG['install_your'] = "Uw Topsites Lijst";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Welkom bij Aardvark Topsites PHP 5.  Vergeet niet voor het upgraden eerst een backup te maken van alle data.";
$LNG['upgrade_version'] = "Verzeker je ervan dat je gaat upgraden vanaf versie %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Upgrading word alleen ondersteund voor Aardvark Topsites PHP 4.1.0 of hoger.";
$LNG['upgrade_done'] = "Uw topsite is klaar met upgraden.  Verwijder de install directory meteen.";

// Join
$LNG['join_header'] = "Word Lid";
$LNG['join_enter_text'] = "Typ onderstaande text in:"; // 4.2.2
$LNG['join_user'] = "Gebruiker"; // 5.0
$LNG['join_website'] = "Website"; // 5.0
$LNG['join_error_username'] = "Gebruik een geldige gebruikersnaam: gebruik alleen letters, cijfers, streepjes, en punten."; // 5.0
$LNG['join_error_username_duplicate'] = "Gebruik een geldige gebruikersnaam: deze naam is al in het gebruik."; // 5.0
$LNG['join_error_url'] = "Enter a valid URL.";
$LNG['join_error_email'] = "Vul een geldig email adres in.";
$LNG['join_error_title'] = "Vul de titel van je website in.";
$LNG['join_error_password'] = "Vul je wachtwoord in.";
$LNG['join_error_urlbanner'] = "Vul hier een correct banner adres in.  Laat leeg als je er geen heeft.  Het moet kleiner zijn dan"; // 4.0
$LNG['join_error_time'] = "Ververs niet de lidmaatschap bevestigings pagina."; // 4.2.0
$LNG['join_error_captcha'] = "Het woord komt niet overeen met het plaatje."; // 4.2.2
$LNG['join_thanks'] = "Bedankt!  Zet deze code op je pagina om op je website te laten stemmen.";
$LNG['join_change_warning'] = "Als je de code verandert kan het zijn dat hij het niet doet.";
$LNG['join_welcome'] = "Welkom bij %s";
$LNG['join_welcome_admin'] = "Er is een nieuw lid bijgekomen bij de topsite lijst.";
$LNG['join_approve'] = "Uw site word aktief gezet zodra de admin alles goedgekeurd heeft."; // 5.1.0
$LNG['join_type'] = "Account type"; // 5.1.0
$LNG['join_standard'] = "Standaard"; // 5.1.0

// Link Code
$LNG['link_code_header'] = "Link Code"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Wachtwoord opvragen"; // 5.0
$LNG['lost_pw_forgot'] = "Wachtwoord vergeten?"; // 5.0
$LNG['lost_pw_get'] = "Klik voor een nieuw wachtwoord"; // 5.0
$LNG['lost_pw_emailed'] = "Controleer je mail voor verdere instructies."; // 5.0
$LNG['lost_pw_email'] = "Om een nieuw wachtwoord aan te vragen, ga je naar deze URL:"; // 5.0
$LNG['lost_pw_new'] = "Typ een nieuw wachtwoord in"; // 5.0
$LNG['lost_pw_set_new'] = "Plaats het nieuwe wachtwoord"; // 5.0
$LNG['lost_pw_finish'] = "U kunt nu inloggen met uw nieuw gekozen wachtwoord."; // 5.0

// Main Page
$LNG['main_header'] = "Hoofd pagina"; // 5.0
$LNG['main_all'] = "alle websites"; // 4.2.0
$LNG['main_method'] = "Meting methode";
$LNG['main_members'] = "Leden";
$LNG['main_menu_rankings'] = "Hoofd Pagina";
$LNG['main_menu_join'] = "Word Lid";
$LNG['main_menu_random'] = "Zo maar een lid";
$LNG['main_menu_search'] = "Zoeken";
$LNG['main_menu_lost_code'] = "Code kwijt"; // 5.0
$LNG['main_menu_lost_password'] = "Wachtwoord vergeten"; // 5.0
$LNG['main_menu_edit'] = "Wijzig lid informatie";
$LNG['main_menu_user_cp'] = "Gebruikers Controle Paneel"; // 5.0
$LNG['main_featured'] = "In de schijnwerper"; // 4.0.2
$LNG['main_executiontime'] = "Script opstart tijd"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statistieken";
$LNG['table_unique'] = "Unieke";
$LNG['table_total'] = "Totaal";
$LNG['table_rank'] = "Positie";
$LNG['table_title'] = "Titel"; // 4.0
$LNG['table_description'] = "Omschrijving"; // 4.0
$LNG['table_movement'] = "Status";
$LNG['table_up'] = "Omhoog"; // 5.0
$LNG['table_down'] = "Omlaag"; // 5.0
$LNG['table_neutral'] = "Neutraal"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Meting en commentaar";
$LNG['rate_rating'] = "Meet";
$LNG['rate_review'] = "Commentaar - Geen HTML toegestaan"; // 5.0
$LNG['rate_thanks'] = "Bedankt voor je meting en commentaar!";
$LNG['rate_error'] = "Je hebt deze site al gemeten of commentaar gegeven.";
$LNG['rate_back'] = "Terug naar statistieken";
$LNG['rate_email_admin'] = "Er is nieuw commentaar toegevoegd aan de toplijst."; // 5.1.0

// Search
$LNG['search_header'] = "Zoeken";
$LNG['search_off'] = "De zoek functie is uitgeschakeld.";
$LNG['search_no_sites'] = "Sorry, er zijn geen sites die jouw woord(en) bevatten."; // 5.0
$LNG['search_prev'] = "Vorige"; // 3.2.1
$LNG['search_next'] = "Volgende"; // 3.2.1
$LNG['search_displaying_results'] = "Overzicht %s over %s van %s resultaten met <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistieken";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Lid Vanaf"; // 5.0
$LNG['stats_rating_avg'] = "Gemiddelde Meting";
$LNG['stats_rating_num'] = "Aantal Metingen";
$LNG['stats_rate'] = "Meet en geef commentaar over deze site";
$LNG['stats_reviews'] = "Commentaar";
$LNG['stats_allreviews'] = "Bekijk al het commentaar"; // 4.0
$LNG['stats_week'] = "Week"; // 5.0
$LNG['stats_highest'] = "Hoogste"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s nieuwe leden"; // 5.0
$LNG['ssi_all'] = "Alle websites"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Gebruikers Controle Paneel "; // 5.0
$LNG['user_cp_login'] = "Inloggen"; // 5.0
$LNG['user_cp_logout'] = "Uitloggen"; // 5.0
$LNG['user_cp_welcome'] = "Welkom in het gebruikers controle paneel.  Gebruik de links aan de linker kant om je account te bewerken."; // 5.0
$LNG['user_cp_logout_message'] = "Je bent nu uitgelogd van het controle paneel."; // 5.0
$LNG['user_cp_login_long'] = "Login met je gebruikersnaam of wachtwoord of je OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "OpenID is niet gevonden voor %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Je moet lid zijn van de topsite lijst om in te kunnen loggen vij het controle paneel."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Fout tijdens het inloggen.  Probeer het nog eens."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Je hebt toestemming nodig om door te kunnen gaan.  Probeer het opnieuw."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Fout bij de server: %s"; // 5.1.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Nieuwe Leden Goedkeuren"; // 5.0
$LNG['a_approve'] = "Goedkeuren"; // 4.0
$LNG['a_approve_none'] = "Er zijn geen nieuwe leden in de wacht."; // 4.0
$LNG['a_approve_done'] = "Deze website is met succes toegevoegd."; // 4.0
$LNG['a_approve_dones'] = "Deze websites zijn met succes toegevoegd."; // 4.0
$LNG['a_approve_sel'] = "With selected:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Nieuw commentaar goedkeuren"; // 5.0
$LNG['a_approve_rev_none'] = "Er zijn geen nieuwe commentaren om goed te keuren."; // 5.0
$LNG['a_approve_rev_done'] = "Het commentaar is goedgekeurd."; // 5.0
$LNG['a_approve_rev_dones'] = "De commentaren zijn goedgekeurd."; // 5.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Maak aangepastte pagina"; // 5.1.0
$LNG['a_create_page_id'] = "Pagina ID - Deze word gebruikt in de URL, dus kan alleen letters, cijfers, underscores, and punten bevatten"; // 5.1.0
$LNG['a_create_page_error_id'] = "De pagina ID kan alleen letters, cijfers, underscores, and punten bevatten.  Ga terug en corrigeer pagina ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Dit pagina ID bestaat al.  Ga terug en corrigeer het pagina ID."; // 5.1.0
$LNG['a_create_page_created'] = "De pagina is gemaakt.  U moet handmatig een link maken %s in wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Verwijder Lid"; // 5.0
$LNG['a_del_headers'] = "Verwijder Leden"; // 5.0
$LNG['a_del_done'] = "Dit lid is verwijderd."; // 5.0
$LNG['a_del_dones'] = "Deze leden zijn verwijderd."; // 5.0
$LNG['a_del_warn'] = "Weet je zeker dat je %s wilt verwijderen?"; // 5.0
$LNG['a_del_multi'] = "deze %s Leden"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Verwijder gefilterd woord"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Verwijder gefilterde woorden"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Het gefilterd woord is verwijderd."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "De  gefilterde woorden zijn verwijderd."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Weet je zeker dat je %s wilt deleten van de gefilterde woorden lijst?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "deze %s woorden"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Verkeerd geselecteerd woord ID.  Probeer het opnieuw."; // 5.1.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Verwijder de aangepastte pagina"; // 5.1.0
$LNG['a_del_page_headers'] = "Verwijder de aangepastte pagina's"; // 5.1.0
$LNG['a_del_page_done'] = "De de aangepastte pagina is verwijderd."; // 5.1.0
$LNG['a_del_page_dones'] = "De de aangepastte pagina's zijn verwijderd."; // 5.1.0
$LNG['a_del_page_warn'] = "Weet u zeker dat u %s?"; //5.1.0
$LNG['a_del_page_multi'] = "deze %s pagina's"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Verkeerde aan te passen pagina ID.  Probeer het opnieuw."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Verwijder Commentaar"; // 5.0
$LNG['a_del_rev_headers'] = "Verwijder Commentaar"; // 5.0
$LNG['a_del_rev_done'] = "Het commentaar is verwijderd."; // 5.0
$LNG['a_del_rev_dones'] = "Het commentaar is verwijderd."; // 5.0
$LNG['a_del_rev_warn'] = "Weet je zeker dat je dit commentaar wilt verwijderen?"; //5.0
$LNG['a_del_rev_warns'] = "Weet je zeker dat je deze commentaar wilt verwijderen?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Verkeerd geselecteerd commentaar ID. Probeer het opnieuw."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Bewerk Lid"; // 5.0
$LNG['a_edit_site_is'] = "Deze website is"; // 4.0
$LNG['a_edit_active'] = "Actief (Goed gekeurd)"; // 4.0
$LNG['a_edit_inactive'] = "Niet actief (Niet goed gekeurd)"; // 5.0
$LNG['a_edit_edited'] = "Dit lid is succesvol bijgewerkt.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Bewerk gefilterd woord"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Het gefilterde woord is bijgewerkt."; // 5.1.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Bewerk aangepastte pagina"; // 5.1.0
$LNG['a_edit_page_content'] = "Inhoud - Ja kan hier HTML gebruiken"; // 5.1.0
$LNG['a_edit_page_edited'] = "De pagina is bewerkt."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Bewerk commentaar"; // 5.0
$LNG['a_edit_rev_edited'] = "Het commentaar is bewerkt.";

// Admin > Email Members
$LNG['a_email_header'] = "Email Leden"; // 5.0
$LNG['a_email_subject'] = "Onderwerp"; // 4.2.0
$LNG['a_email_message'] = "Bericht"; // 4.2.0
$LNG['a_email_msg_sent'] = "Het bericht is verzonden naar %s"; // 5.0
$LNG['a_email_not_sent'] = "De mail is niet verzonden naar %s"; // 5.0
$LNG['a_email_sent'] = "%s leden zijn gemaild."; // 4.2.0
$LNG['a_email_failed'] = "%s leden zijn niet gemaild."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Je bent nu uitgelogd bij de admin."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Welkom bij de admin.  Gebruik de links aan de linker kant om de toplist te bewerken."; // 5.0
$LNG['a_main_approve'] = "Er is 1 website in de wacht om goedgekeurd te worden."; // 5.0
$LNG['a_main_approves'] = "Er zijn %s websites in de wacht om goedgekeurd te worden."; // 5.0
$LNG['a_main_approve_rev'] = "Er is 1 commentaar in de wacht om goedgekeurd te worden."; // 5.0
$LNG['a_main_approve_revs'] = "Er zijn %s commentaars in de wacht om goedgekeurd te worden."; // 5.0
$LNG['a_main_your'] = "Uw versie"; // 5.0
$LNG['a_main_latest'] = "Laatste versie"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Bewerk Leden"; // 5.0
$LNG['a_man_actions'] = "Acties"; // 4.2.0
$LNG['a_man_edit'] = "Bewerk"; // 4.2.0
$LNG['a_man_delete'] = "Verwijder"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Selecteer alles"; // 5.0
$LNG['a_man_none'] = "Selecteer niets"; // 5.0
$LNG['a_man_del_sel'] = "Verwijder Geselecteerde"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Verboden Woorden Filter"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Typ onderstaand het verboden woord en de vervanging ervoor.  Bijvoorbeeld, wanneer je typt \"hell\" in het woorden veld en \"h***\" in het vervangings veld."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Exacte overeenkomst vervangt alleen het exacte woord.  Globale overeenkomst vervangt alle letters die overeenkomen in willekeurige woorden die die letters bevatten.  Dus, globale overeenkomst van \"hell\" vervangt ook de letters in \"shell\" and \"hello\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Woord"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Vervang met"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Overeenkomst"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exact"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globaal"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filter Woord"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" is toegevoegd aan het filter."; // 5.1.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Beheer aangepastte pagina's"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Beheer commentaren"; // 5.0
$LNG['a_man_rev_enter'] = "Om het commentaar van een website te beheren, vul je onderstaand de gebruikersnaam in van het lid."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Commentaar"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Hoofdmenu"; // 5.0
$LNG['a_menu_approve'] = "Nieuwe Leden Goedkeuren";
$LNG['a_menu_manage'] = "Leden Beheer"; // 4.2.0
$LNG['a_menu_settings'] = "Configuratie"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Verboden Woorden Filter"; // 5.1.0
$LNG['a_menu_skins'] = "Thema's en Categorieën"; // 5.0
$LNG['a_menu_approve_reviews'] = "Commentaar Goedkeuren"; // 5.0
$LNG['a_menu_manage_reviews'] = "Commentaar Beheren"; // 5.0
$LNG['a_menu_email'] = "Email Leden";
$LNG['a_menu_delete_review'] = "Verwijder Commentaar";
$LNG['a_menu_logout'] = "Uitloggen";
$LNG['a_menu_delete'] = "Verwijder Lid";
$LNG['a_menu_edit'] = "Beheer Lid";
$LNG['a_menu_create_page'] = "Maak een Pagina"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Bewerk een Pagina"; // 5.1.0
$LNG['a_header_members'] = "Leden"; // 5.0
$LNG['a_header_settings'] = "Instellingen"; // 5.0
$LNG['a_header_reviews'] = "Commentaar"; // 5.0
$LNG['a_header_pages'] = "Aangepastte Pagina's"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Verander Configuratie";
$LNG['a_s_help'] = "Help"; // 5.1.0

$LNG['a_s_general'] = "Algemene Configuratie";
$LNG['a_s_admin_password'] = "Admin wachtwoord";
$LNG['a_s_list_name'] = "De naam van uw topsite";
$LNG['a_s_list_url'] = "URL van de topsites directory";
$LNG['a_s_default_language'] = "Standaard taal";
$LNG['a_s_your_email'] = "Uw email adres";

$LNG['a_s_sql'] = "SQL configuratie";
$LNG['a_s_sql_type'] = "Database Type"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Username";
$LNG['a_s_sql_password'] = "Password";

$LNG['a_s_ranking'] = "Stem configuratie";
$LNG['a_s_num_list'] = "Aantal leden per lijst"; // 5.0
$LNG['a_s_ranking_period'] = "Stem periode"; // 5.0
$LNG['a_s_ranking_method'] = "Stem methode"; // 5.0
$LNG['a_s_ranking_average'] = "Stemmen voor gemiddelde of alleen %s"; // 5.0
$LNG['a_s_featured_member'] = 'In de schijnwerper - Je moet {$featured_member} toevoegen aan de wrapper.html wanneer deze aan staat.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Aantal leden die de _top skin gebuiken";
$LNG['a_s_ad_breaks'] = "Geef een break na de meting (komma's tussen plaatsen) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_member'] = "Leden configuratie";
$LNG['a_s_active_default'] = "Leden moeten worden toegelaten voor ze in de lijst komen";
$LNG['a_s_active_default_review'] = "Commentaar moet worden toegelaten voor ze in de lijst komen";
$LNG['a_s_delete_after'] = "Verwijder non actieve leden na hoeveel dagen (plaats een 0 om uit te schakelen)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Verstuur email nadat een lid zich heeft aangemeld"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Verstuur email nadat een nieuw commentaar geplaatst is"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maximale banner breedte (zet op 0 om uit te schakelen)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximale banner hoogte (zet op 0 om uit te schakelen)"; // 4.2.0
$LNG['a_s_default_banner'] = "Standaard banner die leden krijgen als ze geen banner opgeven";

$LNG['a_s_button'] = "Button configuratie";
$LNG['a_s_ranks_on_buttons'] = "ilt u de leden meting op hun button laten zien?  Zie -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Statistiek buttons"; // 4.2.0
$LNG['a_s_button_url'] = "Bij Ja/Nee - URL van de button die op de pagina van het lid verschijnt"; // 4.0
$LNG['a_s_button_dir'] = "Bij ja - URL van de map waar de buttons zich bevinden"; // 4.0
$LNG['a_s_button_ext'] = "Bij ja - Extensie van de buttons (gif, png, jpg, enz.)"; // 4.0
$LNG['a_s_button_num'] = "Bij ja - Aantal buttons die je hebt gemaakt"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_other'] = "Diversen configuratie";
$LNG['a_s_search'] = "Zoeken";
$LNG['a_s_time_offset'] = "Tijd verschil met de server (in uren)";
$LNG['a_s_gateway'] = "Anti cheat pagina, om cheaters tegen te gaan";
$LNG['a_s_captcha'] = "Woord verificatie voor lidmaatschap (beschermt tegen spammers) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_on'] = "Aan";
$LNG['a_s_off'] = "Uit";
$LNG['a_s_days'] = "Dagen";
$LNG['a_s_months'] = "Maanden";
$LNG['a_s_weeks'] = "Weken"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nee";

$LNG['a_s_updated'] = "De configuratie is uitgevoerd.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Thema's en Categorieën"; // 5.0
$LNG['a_skins_default'] = "Standaard Thema"; // 5.0
$LNG['a_skins_set_default'] = "Plaats Standaard Thema"; // 5.0
$LNG['a_skins_anon'] = "Anoniem"; // 5.0
$LNG['a_skins_default_done'] = "De standaard thema is geactiveerd."; // 5.0
$LNG['a_skins_categories_done'] = "De standaard categorie is geactiveerd."; // 5.0
$LNG['a_skins_new_category_done'] = "De nieuwe categorie is aangemaakt."; // 5.0
$LNG['a_skins_delete_done'] = "De categorie is verwijderd."; // 5.0
$LNG['a_skins_delete_error'] = "Deze categorie kan niet verwijderd worden, er moet minstens 1 categorie aanwezig zijn."; // 5.1.0
$LNG['a_skins_edit_done'] = "De categorie is bijgewerkt."; // 5.0
$LNG['a_skins_invalid_skin'] = "Foutief thema: %s.  Probeer het opnieuw."; // 5.0
$LNG['a_skins_categories'] = "Categorie"; // 5.0
$LNG['a_skins_new_category'] = "Maak een nieuwe Categorie"; // 5.0
$LNG['a_skins_set_skins'] = "Activeer nieuwe Categorie"; // 5.0
$LNG['a_skins_edit_category'] = "Bewerk Categorie"; // 5.0
$LNG['a_skins_category_name'] = "Categorie Naam"; // 5.0
$LNG['a_skins_diff_skins'] = "Wil je voor elke categorie een ander thema, verander ze hieronder."; // 5.0
?>
