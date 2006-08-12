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
$translation = 'Dutch';
$translator_name = 'username or gtafan';
$translator_email = 'webmaster@gta-net.org';
$translator_url = 'http://www.gta-net.org/';

// Globaal
$LNG['g_form_submit_short'] = "Ga";
$LNG['g_username'] = "Gebruikersnaam";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Titel";
$LNG['g_description'] = "Beschrijving";
$LNG['g_category'] = "Categorie"; // 4.1.0
$LNG['g_email'] = "E-mail";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Wachtwoord";
$LNG['g_average'] = "Gemiddeld";
$LNG['g_today'] = "Vandaag";
$LNG['g_yesterday'] = "Gisteren";
$LNG['g_daily'] = "Dagelijks"; // 5.0
$LNG['g_this_month'] = "Deze maand"; // 5.0
$LNG['g_last_month'] = "Vorige maand"; // 5.0
$LNG['g_monthly'] = "Maandelijks"; // 5.0
$LNG['g_this_week'] = "Deze Week"; // 5.0
$LNG['g_last_week'] = "Vorige Week"; // 5.0
$LNG['g_weekly'] = "Wekelijks"; // 5.0
$LNG['g_pv'] = "Geziene pagina's"; // 5.0
$LNG['g_overall'] = 'Globaal'; // 5.0
$LNG['g_in'] = 'In'; // 5.0
$LNG['g_out'] = 'Uit'; // 5.0
$LNG['g_unq_pv'] = "Unieke Gp's"; // 5.0
$LNG['g_tot_pv'] = "Totaal Gp's"; // 5.0
$LNG['g_unq_in'] = "Uniek In"; // 5.0
$LNG['g_tot_in'] = "Totaal In"; // 5.0
$LNG['g_unq_out'] = "Uniek Uit"; // 5.0
$LNG['g_tot_out'] = "Totaal Uit"; // 5.0
$LNG['g_invalid_u_or_p'] = "Vekeerde gebruikersnaam of wachtwoord. Probeer opnieuw."; // 5.0
$LNG['g_invalid_u'] = "Vekeerde gebruikersnaam.  Probeer opnieuw."; // 5.0
$LNG['g_invalid_p'] = "Vekeerde wachtwoord.  Probeer opnieuw."; // 5.0
$LNG['g_session_expired'] = "Je sessie is afgelopen.  Probeer opnieuw."; // 5.0
$LNG['g_error'] = "Fout"; // 5.0
$LNG['g_delete_install'] = "Voor veiligheids redenen, Moet je de map 'install' verwijderen voordat het script werkt!"; // 5.0

// Wijzig gegevens
$LNG['edit_header'] = "Wijzig gegevens";
$LNG['edit_info_edited'] = "Je gegevens zijn met succes gewijzigd.";
$LNG['edit_password_blank'] = "Laat dit veld leeg als je je huidige wachtwoord wilt behouden."; // 4.0

// Anti cheat pagina
$LNG['gateway_header'] = "Topsites anti cheat paginaGateway Page";
$LNG['gateway_text'] = "Om cheaters te misleiden, is deze pagina opgezet.  Klik op de link hieronder om naar de Topsite lijst te gaan.";
$LNG['gateway_vote'] = "Ga binnen en stem";
$LNG['gateway_no_vote'] = "Ga binnen Zonder te stemmen"; // 5.0

// Installeren
$LNG['install_header'] = "Installeren";
$LNG['install_welcome'] = "Welkom bij Aardvark Topsites PHP 5.  Vul de velden hieronder in om het script te installeren.";
$LNG['install_sql_prefix'] = "Tabel voorvoegsel - Verander dit alleen als je meerdere toplijsten hebt in één database.";
$LNG['install_error_chmod'] = "Kan niet schrijven naar settings_sql.php.  Zorg ervoor dat settings_sql.php is geCHMOD naar 666.";
$LNG['install_error_sql'] = "Kan geen verbinding maken met de SQL database.  Ga terug en controleer de SQL instellingen.";
$LNG['install_done'] = "Topsite Lijst installatie voltooid.  Je kan deze map nu verwijderen.";
$LNG['install_your'] = "Je Topsite Lijst";
$LNG['install_admin'] = "Beheer pagina";
$LNG['install_manual'] = "Handleiding";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Welkom bij Aardvark Topsites PHP 5.  Maak een backup van bestanden voordat je upgrade.";
$LNG['upgrade_version'] = "Please make sure that you are upgrading from version %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Upgraden wordt alleen ondersteund voor Aardvark Topsites PHP 4.1.0 of hoger.";
$LNG['upgrade_done'] = "Topsite Lijst upgrade voltooid. Je kan deze map nu verwijderen.";

// Lid worden
$LNG['join_header'] = "Registreer";
$LNG['join_enter_text'] = "Vul de tekst van het onderstaande plaatje in:"; // 4.2.2
$LNG['join_user'] = "Lid"; // 5.0
$LNG['join_website'] = "Website"; // 5.0
$LNG['join_error_username'] = "Een correcte gebruikersnaam in te vullen: Gebruikt alleen letters (A-Z), Cijfers (0-9), Laag liggende streepjes (_) en Streepjes (-)."; // 5.0
$LNG['join_error_username_duplicate'] = "Een correcte gebruikersnaam in te vullen: Je gebruikersnaam is al ingebruik."; // 5.0
$LNG['join_error_url'] = "Een correcte URL in te vullen.";
$LNG['join_error_email'] = "Een correct E-mail adres in te vullen.";
$LNG['join_error_title'] = "Een correcte titel voor je website in te vullen.";
$LNG['join_error_password'] = "Een correct wachtwoord in te vullen.";
$LNG['join_error_urlbanner'] = "Een correcte Banner URL in te vullen.  Laat het veld leeg als je er geen hebt.  Het moet kleiner zijn dan"; // 4.0
$LNG['join_error_time'] = "Ververs de lid bevestigings pagina niet."; // 4.2.0
$LNG['join_error_captcha'] = "Het woord dat je invulde komt niet overeen met het plaatje."; // 4.2.2
$LNG['join_thanks'] = "Bedankt! Zet deze code op je pagina om op je website te laten stemmen";
$LNG['join_change_warning'] = "Als je de code veranderd kan het zijn dat hij het niet doet.";
$LNG['join_welcome'] = "Welkom bij %s";
$LNG['join_welcome_admin'] = "Je topsite lijst heeft een nieuw lid.";
$LNG['join_approve'] = "Your site will be listed when the admin of the topsites list approves it."; // 5.1.0
$LNG['join_type'] = "Account type"; // 5.1.0
$LNG['join_standard'] = "Standard"; // 5.1.0

// Link Code
$LNG['link_code_header'] = "Link Code"; // 5.0

// Verloren wachtwoord
$LNG['lost_pw_header'] = "Verloren wachtwoord"; // 5.0
$LNG['lost_pw_forgot'] = "Wachtwoord vergeten?"; // 5.0
$LNG['lost_pw_get'] = "Stuur wachtwoord"; // 5.0
$LNG['lost_pw_emailed'] = "Instructies om je wachtwoord te verkijgen is naar je e-mail toegestuurd."; // 5.0
$LNG['lost_pw_email'] = "Om een nieuw wachtwoord te krijgen, klik op deze link:"; // 5.0
$LNG['lost_pw_new'] = "Vul een wachtwoord in"; // 5.0
$LNG['lost_pw_set_new'] = "Stel nieuw wachtwoord in"; // 5.0
$LNG['lost_pw_finish'] = "Je wachtwoord is veranderd naar het nieuwe wachtwoord dat je net hebt gekozen."; // 5.0

// Hoofd pagina
$LNG['main_header'] = "Ranglijst"; // 5.0
$LNG['main_all'] = "Alle Sites"; // 4.2.0
$LNG['main_method'] = "Meting methode";
$LNG['main_members'] = "Leden";
$LNG['main_menu_rankings'] = "Ranglijst";
$LNG['main_menu_join'] = "Registreer";
$LNG['main_menu_random'] = "Willekeurig lid";
$LNG['main_menu_search'] = "Zoeken";
$LNG['main_menu_lost_code'] = "Verloren Code"; // 5.0
$LNG['main_menu_lost_password'] = "Verloren wachtwoord"; // 5.0
$LNG['main_menu_edit'] = "Bewerk leden info";
$LNG['main_menu_user_cp'] = "Leden paneel"; // 5.0
$LNG['main_featured'] = "In de schijnwerper"; // 4.0.2
$LNG['main_executiontime'] = "Script Uitvoerings Tijd"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranglijst
$LNG['table_stats'] = "Stats";
$LNG['table_unique'] = "Uniek";
$LNG['table_total'] = "Totaal";
$LNG['table_rank'] = "Rang";
$LNG['table_title'] = "Titel"; // 4.0
$LNG['table_description'] = "Beschrijving"; // 4.0
$LNG['table_movement'] = "Verandering";
$LNG['table_up'] = "Omhoog"; // 5.0
$LNG['table_down'] = "Omlaag"; // 5.0
$LNG['table_neutral'] = "Niet veranderd"; // 5.0

// Beoordeling en commentaar
$LNG['rate_header'] = "Beoordeling en commentaar";
$LNG['rate_rating'] = "Beoordeling";
$LNG['rate_review'] = "Commentaar - Geen HTML toegestaan"; // 5.0
$LNG['rate_thanks'] = "Bedankt voor je beoordeling.";
$LNG['rate_error'] = "Je hebt deze site al beoordeeld.";
$LNG['rate_back'] = "Terug naar stats";
$LNG['rate_email_admin'] = "A new review has been posted at your topsites list."; // 5.1.0

// Zoeken
$LNG['search_header'] = "Zoeken";
$LNG['search_off'] = "De zoek functie is uitgeschakeld.";
$LNG['search_no_sites'] = "Sorry, er zijn geen sites gevonden die jouw woord(en) bevatten."; // 5.0
$LNG['search_prev'] = "Vorige"; // 3.2.1
$LNG['search_next'] = "Volgende"; // 3.2.1
$LNG['search_displaying_results'] = "Displaying %s to %s of %s results for <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Stats";
$LNG['stats_info'] = "Informatie";
$LNG['stats_member_since'] = "Lid sinds"; // 5.0
$LNG['stats_rating_avg'] = "Gemiddelde beoordeling";
$LNG['stats_rating_num'] = "Aantal beoordelingen";
$LNG['stats_rate'] = "Beoordeel en geef commentaar voor deze site";
$LNG['stats_reviews'] = "Commentaar";
$LNG['stats_allreviews'] = "Laat al het commentaar zien"; // 4.0
$LNG['stats_week'] = "Week"; // 5.0
$LNG['stats_highest'] = "Record"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s Nieuwste leden"; // 5.0
$LNG['ssi_all'] = "Alle Sites"; // 4.0

// Leden paneel // 5.0
$LNG['user_cp_header'] = "Leden paneel"; // 5.0
$LNG['user_cp_login'] = "Login"; // 5.0
$LNG['user_cp_logout'] = "Loguit"; // 5.0
$LNG['user_cp_welcome'] = "Welkom bij het leden paneel. Gebruikt de links aan de linker kant om je gegevens te beheren."; // 5.0
$LNG['user_cp_logout_message'] = "Je bent nu uitgelogd bij het leden paneel."; // 5.0
$LNG['user_cp_login_long'] = "Login with your username and password or your OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Unable to find OpenID server for %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "You must join the topsites list before you can access the user control panel."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "An error occurred while processing your login.  Please try again."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "You must grant access to proceed.  Please try again."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Error from server: %s"; // 5.1.0

// Admin > Nieuwe leden goedkeuren // 4.0
$LNG['a_approve_header'] = "Nieuwe leden goedkeuren"; // 5.0
$LNG['a_approve'] = "Keur goed"; // 4.0
$LNG['a_approve_none'] = "Er zijn geen nieuwe leden die wachten om goedgekeurd te worden."; // 4.0
$LNG['a_approve_done'] = "Het lid is goedgekeurd."; // 4.0
$LNG['a_approve_dones'] = "De leden zijn goedgekeurd."; // 4.0
$LNG['a_approve_sel'] = "Met geselecteerde:"; // 5.0

// Admin > Commentaar goedkeuren // 5.0
$LNG['a_approve_rev_header'] = "Commentaar goedkeuren"; // 5.0
$LNG['a_approve_rev_none'] = "Er is geen commentaar dat wacht om te worden goedgekeurd."; // 5.0
$LNG['a_approve_rev_done'] = "Het commentaar is goedgekeurd."; // 5.0
$LNG['a_approve_rev_dones'] = "De commentaren zijn goedgekeurd."; // 5.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Create Custom Page"; // 5.1.0
$LNG['a_create_page_id'] = "Page ID - This will be used in the URL, so it can contain only letters, numbers, underscores, and dashes"; // 5.1.0
$LNG['a_create_page_error_id'] = "The page ID can contain only letters, numbers, underscores, and dashes.  Please go back and correct the page ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "There is already a custom page with that page ID.  Please go back and select a new page ID."; // 5.1.0
$LNG['a_create_page_created'] = "The page has been created.  You will have to manually add a link to %s in wrapper.html."; // 5.1.0

// Admin > Verwijder lid
$LNG['a_del_header'] = "Verwijder lid"; // 5.0
$LNG['a_del_headers'] = "Verwijder leden"; // 5.0
$LNG['a_del_done'] = "Het lid is verwijderd."; // 5.0
$LNG['a_del_dones'] = "De leden zijn verwijderd."; // 5.0
$LNG['a_del_warn'] = "Weet je zeker dat je %s wilt verwijderen?"; // 5.0
$LNG['a_del_multi'] = "Deze %s leden"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Delete Filtered Word"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Delete Filtered Words"; // 5.1.0
$LNG['a_del_bad_word_done'] = "The filtered word has been deleted."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "The filtered words have been deleted."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Are you sure you want to delete %s from the filtered words list?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "these %s words"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Invalid filtered word ID.  Please try again."; // 5.1.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Delete Custom Page"; // 5.1.0
$LNG['a_del_page_headers'] = "Delete Custom Pages"; // 5.1.0
$LNG['a_del_page_done'] = "The custom page has been deleted."; // 5.1.0
$LNG['a_del_page_dones'] = "The custom pages have been deleted."; // 5.1.0
$LNG['a_del_page_warn'] = "Are you sure you want to delete %s?"; //5.1.0
$LNG['a_del_page_multi'] = "these %s members"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Invalid custom page ID.  Please try again."; // 5.1.0

// Admin > Verwijder commentaar // 5.0
$LNG['a_del_rev_header'] = "Verwijder commentaar"; // 5.0
$LNG['a_del_rev_headers'] = "Verwijder commentaren"; // 5.0
$LNG['a_del_rev_done'] = "Het commentaar is verwijderd."; // 5.0
$LNG['a_del_rev_dones'] = "De commentaren zijn verwijderd."; // 5.0
$LNG['a_del_rev_warn'] = "Weet je zeker dat je dit commentaar wilt verwijderen?"; //5.0
$LNG['a_del_rev_warns'] = "Weet je zeker dat je deze commentaren wilt verwijderen?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Verkeerd commentaar ID. Probeer opnieuw."; // 5.0

// Admin > Bewerk lid
$LNG['a_edit_header'] = "Bewerk lid"; // 5.0
$LNG['a_edit_site_is'] = "Deze site is"; // 4.0
$LNG['a_edit_active'] = "Actief (In ranglijst)"; // 4.0
$LNG['a_edit_inactive'] = "Inactief (Niet in ranglijst)"; // 5.0
$LNG['a_edit_edited'] = "Het lid is bewerkt.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Edit Filtered Word"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "The filtered word has been edited."; // 5.1.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Edit Custom Page"; // 5.1.0
$LNG['a_edit_page_content'] = "Content - You can use HTML here"; // 5.1.0
$LNG['a_edit_page_edited'] = "The page has been edited."; // 5.1.0

// Admin > Bewerk commentaar // 5.0
$LNG['a_edit_rev_header'] = "Bewerk commentaar"; // 5.0
$LNG['a_edit_rev_edited'] = "Het commentaar is bewerkt.";

// Admin > E-mail Leden
$LNG['a_email_header'] = "E-mail Leden"; // 5.0
$LNG['a_email_subject'] = "Onderwerp"; // 4.2.0
$LNG['a_email_message'] = "Bericht"; // 4.2.0
$LNG['a_email_msg_sent'] = "Het bericht is verzonden naar %s"; // 5.0
$LNG['a_email_not_sent'] = "Het bericht kon niet worden verzonden naar %s"; // 5.0
$LNG['a_email_sent'] = "De E-mail is verzonden naar %s Leden."; // 4.2.0
$LNG['a_email_failed'] = "De E-mail kon niet worden verzonden naar %s Leden."; // 4.2.0

// Admin > Loguit
$LNG['a_logout_message'] = "Je bent uitgelogd."; // 5.0

// Admin > Hoofd
$LNG['a_header'] = "Beheer"; // 5.0
$LNG['a_main'] = "Welkom bij het Beheer paneel. Gebruikt de links aan de linker kant om je topsite lijst te beheren."; // 5.0
$LNG['a_main_approve'] = "Er is 1 site die wacht op goedkeuring."; // 5.0
$LNG['a_main_approves'] = "Er zijn %s sites die wachten op goedkeuring."; // 5.0
$LNG['a_main_approve_rev'] = "Er is 1 commentaar dat wacht op goedkeuring."; // 5.0
$LNG['a_main_approve_revs'] = "Er zijn %s commentaren die wachten op goedkeuring."; // 5.0
$LNG['a_main_your'] = "Jouw versie"; // 5.0
$LNG['a_main_latest'] = "Nieuwste versie"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Beheer leden
$LNG['a_man_header'] = "Beheer leden"; // 5.0
$LNG['a_man_actions'] = "Acties"; // 4.2.0
$LNG['a_man_edit'] = "Bewerk"; // 4.2.0
$LNG['a_man_delete'] = "Verwijder"; // 4.2.0
$LNG['a_man_email'] = "E-mail"; // 4.2.0
$LNG['a_man_all'] = "Selecteer alles"; // 5.0
$LNG['a_man_none'] = "Selecteer Niets"; // 5.0
$LNG['a_man_del_sel'] = "Verwijder geselecteerde"; // 5.0

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

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Manage Custom Pages"; // 5.1.0

// Admin > Beheer commentaar // 5.0
$LNG['a_man_rev_header'] = "Beheer commentaar"; // 5.0
$LNG['a_man_rev_enter'] = "Om het commentaar van een site te beheren voer je de gebruikersnaam van de site hieronder in."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Commentaar"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Begin"; // 5.0
$LNG['a_menu_approve'] = "Nieuwe leden goedkeuren";
$LNG['a_menu_manage'] = "Beheer leden"; // 4.2.0
$LNG['a_menu_settings'] = "Verander instellingen"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Profanity Filter"; // 5.1.0
$LNG['a_menu_skins'] = "Uiterlijk en Categorien"; // 5.0
$LNG['a_menu_approve_reviews'] = "Commentaar goedkeuren"; // 5.0
$LNG['a_menu_manage_reviews'] = "Beheer commentaar"; // 5.0
$LNG['a_menu_email'] = "E-mail Leden";
$LNG['a_menu_delete_review'] = "Verwijder commentaar";
$LNG['a_menu_logout'] = "Loguit";
$LNG['a_menu_delete'] = "Verwijder lid";
$LNG['a_menu_edit'] = "Bewerk lid";
$LNG['a_menu_create_page'] = "Create Custom Page"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Manage Custom Pages"; // 5.1.0
$LNG['a_header_members'] = "Leden"; // 5.0
$LNG['a_header_settings'] = "Instellingen"; // 5.0
$LNG['a_header_reviews'] = "Commentaren"; // 5.0
$LNG['a_header_pages'] = "Custom Pages"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Verander instellingen";
$LNG['a_s_help'] = "Help"; // 5.1.0

$LNG['a_s_general'] = "Algemene instellingen";
$LNG['a_s_admin_password'] = "Beheerders wachtwoord";
$LNG['a_s_list_name'] = "De naam van je Topsite Lijst";
$LNG['a_s_list_url'] = "URL naar topsite map";
$LNG['a_s_default_language'] = "Standaard taal";
$LNG['a_s_your_email'] = "Je e-mail adres";

$LNG['a_s_sql'] = "SQL Instellingen";
$LNG['a_s_sql_type'] = "Database Type"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Gebruikersnaam";
$LNG['a_s_sql_password'] = "Wachtwoord";

$LNG['a_s_ranking'] = "Ranglijst Instelligen";
$LNG['a_s_num_list'] = "Aantal leden per pagina"; // 5.0
$LNG['a_s_ranking_period'] = "Ranglijst periode"; // 5.0
$LNG['a_s_ranking_method'] = "Ranglijst methode"; // 5.0
$LNG['a_s_ranking_average'] = "Ranglijst bij gemiddelde of gewoon bij %s"; // 5.0
$LNG['a_s_featured_member'] = 'Activeer "In de schijnwerper"?  Je moet wel {$featured_member} aan je wrapper.html pagina toevoegen.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Aantal leden om _top uiterlijk voor te gebruiken";
$LNG['a_s_ad_breaks'] = "Laat advertentie zijn na ... leden (komma's tussen de rangen plaatsen)";

$LNG['a_s_member'] = "Leden Instellingen";
$LNG['a_s_active_default'] = "Moeten nieuwe leden goedgekeurd worden na registratie voordat ze in de ranglijst komen";
$LNG['a_s_active_default_review'] = "Moet nieuwe commentaar goedgekeurd worden voordat het gelezen kan worden";
$LNG['a_s_delete_after'] = "Verwijder leden na ... dagen van inactiviteit (Zet op 0 om uit te schakelen)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Email admin when a new member joins"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Email admin when a new review is posted"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maximale banner wijdte (zet op 0 om uit te schakelen)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximale banner hoogte (zet op 0 om uit te schakelen)"; // 4.2.0
$LNG['a_s_default_banner'] = "Standaard banner die leden krijgen als ze geen banner opgeven";

$LNG['a_s_button'] = "Button Instellingen";
$LNG['a_s_ranks_on_buttons'] = "Ranks on buttons -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Statische Buttons"; // 4.2.0
$LNG['a_s_button_url'] = "Bij Ja/Nee - URL naar standaard button die verschijnd op site van de leden"; // 4.0
$LNG['a_s_button_dir'] = "Bij Ja - URL naar de map waar de buttons in staan"; // 4.0
$LNG['a_s_button_ext'] = "Bij Ja - Extentie van de buttons (gif, png, jpg, enz.)"; // 4.0
$LNG['a_s_button_num'] = "Bij Ja - aantal buttons die je hebt gemaakt"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_other'] = "Andere instellingen";
$LNG['a_s_search'] = "Zoeken";
$LNG['a_s_time_offset'] = "Tijd verschil met de server (in uren)";
$LNG['a_s_gateway'] = "Anti cheat pagina, om cheaters tegen te gaan";
$LNG['a_s_captcha'] = "Word verification on join (protect against spammers) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_on'] = "Aan";
$LNG['a_s_off'] = "Uit";
$LNG['a_s_days'] = "Dagen";
$LNG['a_s_months'] = "Maanden";
$LNG['a_s_weeks'] = "Weeken"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nee";

$LNG['a_s_updated'] = "Je instellingen zijn aangepast.";

// Admin > Uiterlijk en Categorien // 5.0
$LNG['a_skins_header'] = "Uiterlijk en Categorien"; // 5.0
$LNG['a_skins_default'] = "Standaard uiterlijk"; // 5.0
$LNG['a_skins_set_default'] = "Stel standaard uiterlijk in"; // 5.0
$LNG['a_skins_anon'] = "Anoniem"; // 5.0
$LNG['a_skins_default_done'] = "De standaard uiterlijk is ingesteld."; // 5.0
$LNG['a_skins_categories_done'] = "De categorie uiterlijk is ingesteld."; // 5.0
$LNG['a_skins_new_category_done'] = "De nieuwe categorie is gemaakt."; // 5.0
$LNG['a_skins_delete_done'] = "De categorie is verwijderd."; // 5.0
$LNG['a_skins_delete_error'] = "The category cannot be deleted because you must have at least one category."; // 5.1.0
$LNG['a_skins_edit_done'] = "De categorie is bewerkt."; // 5.0
$LNG['a_skins_invalid_skin'] = "Ongeldig uiterlijk: %s.  Probeer opnieuw."; // 5.0
$LNG['a_skins_categories'] = "Categorien"; // 5.0
$LNG['a_skins_new_category'] = "Maak nieuwe categorie"; // 5.0
$LNG['a_skins_set_skins'] = "Stel categorie uiterlijk in"; // 5.0
$LNG['a_skins_edit_category'] = "Bewerk categorie"; // 5.0
$LNG['a_skins_category_name'] = "Categorie naam"; // 5.0
$LNG['a_skins_diff_skins'] = "Als je verschillende uiterlijken voor je categorien wilt selecteer ze dan hieronder."; // 5.0
?>
