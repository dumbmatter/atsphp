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
$translation = 'Swedish (Svenska)';
$translator_name = 'Topplista.se';
$translator_email = 'info@topplista.se';
$translator_url = 'http://www.topplista.se/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "OK";
$LNG['g_username'] = "Användarnamn";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Titel";
$LNG['g_description'] = "Beskrivning";
$LNG['g_category'] = "Kategori"; // 4.1.0
$LNG['g_email'] = "E-post";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Lösenord";
$LNG['g_average'] = "Genomsnitt";
$LNG['g_today'] = "Idag";
$LNG['g_yesterday'] = "Igår";
$LNG['g_daily'] = "Dagligen"; // 5.0
$LNG['g_this_month'] = "Den här månaden"; // 5.0
$LNG['g_last_month'] = "Senaste månaden"; // 5.0
$LNG['g_monthly'] = "Månatligen"; // 5.0
$LNG['g_this_week'] = "Den här veckan"; // 5.0
$LNG['g_last_week'] = "Senaste veckan"; // 5.0
$LNG['g_weekly'] = "Veckovis"; // 5.0
$LNG['g_pv'] = "Sidvisningar"; // 5.0
$LNG['g_overall'] = "Totalt"; // 5.0
$LNG['g_in'] = "In"; // 5.0
$LNG['g_out'] = "Ut"; // 5.0
$LNG['g_unq_pv'] = "Unika sidvisningar"; // 5.0
$LNG['g_tot_pv'] = "Sidvisningar"; // 5.0
$LNG['g_unq_in'] = "Unika in"; // 5.0
$LNG['g_tot_in'] = "In"; // 5.0
$LNG['g_unq_out'] = "Unika ut"; // 5.0
$LNG['g_tot_out'] = "Ut"; // 5.0
$LNG['g_invalid_u_or_p'] = "Felaktigt användarnamn eller lösenord. Försök igen."; // 5.0
$LNG['g_invalid_u'] = "Felaktigt användarnamn. Försök igen."; // 5.0
$LNG['g_invalid_p'] = "Felaktigt lösenord. Försök igen."; // 5.0
$LNG['g_session_expired'] = "Din session har gått ut. Försök igen."; // 5.0
$LNG['g_error'] = "Fel"; // 5.0
$LNG['g_delete_install'] = "Av säkerhetsskäl måste du ta bort installationsmappen innan scriptet kan köras."; // 5.0
$LNG['g_ip'] = "IP-adress"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Ändra användarkonto";
$LNG['edit_info_edited'] = "Ditt användarkonto ändrades.";
$LNG['edit_password_blank'] = "Lämna fältet tomt för att behålla nuvarande lösenord"; // 4.0
$LNG['edit_delay'] = "Ändringar i titel eller URL måste först godkännas av topplistans administratör innan de visas i topplistan."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Ingångssida";
$LNG['gateway_text'] = "Den här sidan finns till för att förhindra fusk. Klicka på länken nedan för att komma till topplistan.";
$LNG['gateway_vote'] = "Gå in och rösta";
$LNG['gateway_no_vote'] = "Gå in utan att rösta"; // 5.0

// Install
$LNG['install_header'] = "Installation";
$LNG['install_welcome'] = "Välkommen till Aardvark Topsites PHP 5. Fyll i formuläret nedan för att installera scriptet.";
$LNG['install_sql_prefix'] = "Tabell-prefix (table prefix) - ändra bara om det finns mer än en installation i samma databas";
$LNG['install_error_chmod'] = "Kunde inte skriva till settings_sql.php. Se till att du har satt CHMOD 666 på settings_sql.php.";
$LNG['install_error_sql'] = "Kunde inte ansluta till SQL-databasen. Gå tillbaka och kontrollera inställningarna för SQL.";
$LNG['install_done'] = "Din topplista installerades. Ta bort katalogen install.";
$LNG['install_your'] = "Din topplista";
$LNG['install_admin'] = "Administration";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Uppgradera";
$LNG['upgrade_welcome'] = "Välkommen till Aardvark Topsites PHP 5. Se till att du har en backup av databasen innan du uppgraderar.";
$LNG['upgrade_version'] = "Se till att du uppgraderar från version %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Uppgraderingen stödjer bara Aardvark Topsites PHP 4.1.0 eller senare version.";
$LNG['upgrade_done'] = "Din topplista uppgraderades. Ta bort katalogen install.";
$LNG['install_mailing_list'] = "Om du vill prenumerera på Aardvark Topsites PHP:s nyhetsbrev, skriv in din e-postadress nedan. Nyhetsbrev skickas ut i sparsamt antal och innehåller viktiga kungörelser om scriptet, såsom information om uppgraderingar och säkerhetsrisker."; // 5.2.0

// Join
$LNG['join_header'] = "Registrera ny webbplats";
$LNG['join_enter_text'] = "Skriv in texten som den visas i bilden nedan"; // 4.2.2
$LNG['join_enter_text_read'] = "Svårt att tyda?"; // 5.2.0
$LNG['join_user'] = "Användare"; // 5.0
$LNG['join_website'] = "Webbplats"; // 5.0
$LNG['join_banner_size'] = "(Maximal storlek: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Skriv in ett giltigt användarnamn: använd bara bokstäver, siffror, understreck och bindestreck."; // 5.0
$LNG['join_error_username_duplicate'] = "Skriv in ett giltigt användarnamn: användarnamnet du skrev används redan."; // 5.0
$LNG['join_error_url'] = "Skriv in en giltig URL.";
$LNG['join_error_email'] = "Skriv in en giltig e-postadress.";
$LNG['join_error_title'] = "Skriva in en titel för din webbplats.";
$LNG['join_error_password'] = "Skriv in ett lösenord..";
$LNG['join_error_confirm_password'] = "Lösenorden stämde in överens med varandra."; // 5.2.0
$LNG['join_error_urlbanner'] = "Skriv in URL till en giltig banner. Lämna fältet tomt om banner saknas."; // 5.2.0
$LNG['join_error_time'] = "Uppdatera inte den här sidan."; // 4.2.0
$LNG['join_error_captcha'] = "Ordet du skrev stämde inte överens med innehållet i bilden."; // 4.2.2
$LNG['join_error_question'] = "Ditt svar var felaktigt. Rätta till detta för att intyga att du är en riktig person och inte en så kallad bot som spammar automatiskt."; // 5.2.0
$LNG['join_thanks'] = "Tack för din registrering! Lägg in den här länkkoden på din webbplats för att börja skicka röster.";
$LNG['join_change_warning'] = "Om du ändrar koden riskerar du att den inte fungerar.";
$LNG['join_welcome'] = "Välkommen till %s";
$LNG['join_welcome_admin'] = "En ny webbplats har registrerats.";
$LNG['join_approve'] = "Tack för din registrering! Din webbplats kommer visas i topplistan så fort topplistans administratör har godkänt webbplatsen. Du kommer att få ett e-postmeddelande med mer information när din webbplats har godkänts."; // 5.2.0
$LNG['join_type'] = "Typ av användarkonto"; // 5.1.0
$LNG['join_standard'] = "Standard"; // 5.1.0
$LNG['join_error_top'] = "Din registrering innehöll felaktigheter. Rätta till detta nedan."; // 5.2.0
$LNG['join_ban_top'] = "Din registrering innehöll saker som har bannlysts av topplistans administratör."; // 5.2.0
$LNG['join_security'] = "Säkerhet"; // 5.2.0
$LNG['join_confirm_password'] = "Bekräfta lösenord"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Länkkod"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Glömt lösenordet"; // 5.0
$LNG['lost_pw_forgot'] = "Glöm lösenordet?"; // 5.0
$LNG['lost_pw_get'] = "Återfå lösenordet"; // 5.0
$LNG['lost_pw_emailed'] = "Du har fått e-post med instruktioner."; // 5.0
$LNG['lost_pw_email'] = "För att skapa ett nytt lösenord till ditt användarkonto, gå hit:"; // 5.0
$LNG['lost_pw_new'] = "Skriv in ett nytt lösenord"; // 5.0
$LNG['lost_pw_set_new'] = "Välj nytt lösenord"; // 5.0
$LNG['lost_pw_finish'] = "Ditt lösenord har ändrats."; // 5.0

// Main Page
$LNG['main_header'] = "Topplista"; // 5.0
$LNG['main_all'] = "Alla webbplatser"; // 4.2.0
$LNG['main_method'] = "Sortera efter";
$LNG['main_members'] = "Webbplatser";
$LNG['main_menu_rankings'] = "Topplista";
$LNG['main_menu_join'] = "Registrera ny webbplats";
$LNG['main_menu_random'] = "Slumpa en webbplats";
$LNG['main_menu_search'] = "Sök";
$LNG['main_menu_lost_code'] = "Glömt koden"; // 5.0
$LNG['main_menu_lost_password'] = "Glömt lösenordet"; // 5.0
$LNG['main_menu_edit'] = "Ändra användaruppgifter";
$LNG['main_menu_user_cp'] = "Kontrollpanel"; // 5.0
$LNG['main_featured'] = "Utvald webbplats"; // 4.0.2
$LNG['main_executiontime'] = "Sidvisningstid"; // 4.0
$LNG['main_queries'] = "SQL-frågor"; // 4.0
$LNG['main_powered'] = "Med kraft från";

// Ranking Table
$LNG['table_stats'] = "Statistik";
$LNG['table_unique'] = "Unika";
$LNG['table_total'] = "Totalt";
$LNG['table_rank'] = "Placering";
$LNG['table_title'] = "Titel"; // 4.0
$LNG['table_description'] = "Beskrivning"; // 4.0
$LNG['table_movement'] = "Trend";
$LNG['table_up'] = "Upp"; // 5.0
$LNG['table_down'] = "Ner"; // 5.0
$LNG['table_neutral'] = "Oförändrad"; // 5.0
$LNG['table_your_site_here'] = "Din webbplats här"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Betyg och recension";
$LNG['rate_message'] = "Välj ett betyg och skriv in en recension åt %s i fältet nedan."; // 5.2.0
$LNG['rate_rating'] = "Ge betyg";
$LNG['rate_review'] = "Skriv recension - bara text, ingen HTML"; // 5.0
$LNG['rate_thanks'] = "Tack för ditt betyg.";
$LNG['rate_error'] = "Du har redan gett betyg åt den här webbplatsen.";
$LNG['rate_back'] = "Tillbaka till statistiken";
$LNG['rate_email_admin'] = "En ny kommentar har skrivits i din topplista."; // 5.1.0

// Search
$LNG['search_header'] = "Sök";
$LNG['search_off'] = "Sökfunktionen har inaktiverats.";
$LNG['search_no_sites'] = "Hittade inga webbplatser i topplistan som matchade din sökning."; // 5.0
$LNG['search_prev'] = "Föregående"; // 3.2.1
$LNG['search_next'] = "Nästa"; // 3.2.1
$LNG['search_displaying_results'] = "Visar %s till %s av totalt %s sökresultat på sökordet <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistik";
$LNG['stats_info'] = "Information";
$LNG['stats_member_since'] = "Registreringsdatum"; // 5.0
$LNG['stats_rating_avg'] = "Betyg i genomsnitt";
$LNG['stats_rating_num'] = "Antal betyg";
$LNG['stats_rate'] = "Ge betyg eller skriv recension";
$LNG['stats_reviews'] = "Recensioner";
$LNG['stats_allreviews'] = "Visa alla recensioner"; // 4.0
$LNG['stats_week'] = "Vecka"; // 5.0
$LNG['stats_highest'] = "Högst"; // 5.0
$LNG['stats_overall'] = "Allmän statistik"; // 5.2.0
$LNG['stats_overall_average'] = "I genomsnitt (senaste 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Totalt (sedan starten)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Topp %s webbplatser"; // 4.0
$LNG['ssi_new'] = "%s senaste webbplatserna"; // 5.0
$LNG['ssi_all'] = "Alla webbplatser"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Kontrollpanel"; // 5.0
$LNG['user_cp_login'] = "Logga in"; // 5.0
$LNG['user_cp_logout'] = "Logga ut"; // 5.0
$LNG['user_cp_welcome'] = "Välkommen till kontrollpanelen. Använd länkarna i menyn till vänster för att ändra ditt användarkonto."; // 5.0
$LNG['user_cp_logout_message'] = "Du har loggats ut från kontrollpanelen."; // 5.0
$LNG['user_cp_login_long'] = "Logga in med ditt användarnamn och lösenord eller med ditt OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Kunde inte hitta en OpenID-server för %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Du måste registrera dig som användare för att få tillgång till kontrollpanelen."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Ett fel inträffade vid inloggningen. Gå tillbaka och försök igen."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Du måste ges behörighet för att fortsätta. Gå tillbaka och försök igen."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Felmeddelande från server: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Du kan inte komma åt din kontrollpanel innan din webbplats har godkänts av topplistans administratör. Du kommer att få ett e-postmeddelande så fort din webbplats har godkänts."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Godkänn nya webbplatser"; // 5.0
$LNG['a_approve'] = "Godkänn"; // 4.0
$LNG['a_approve_none'] = "Inga webbplatser väntar på godkännande."; // 4.0
$LNG['a_approve_done'] = "Webbplatsen godkändes."; // 4.0
$LNG['a_approve_dones'] = "Webbplatserna godkändes."; // 4.0
$LNG['a_approve_sel'] = "Med markerade:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Godkänn ändrade webbplats"; // 5.2.0
$LNG['a_approve_edited_none'] = "Inga webbplatser har ändrats."; // 5.2.0
$LNG['a_approve_edited_old'] = "Tidigare titel och URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Ändrad titel och URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Avslå"; // 5.2.0
$LNG['a_approve_edited_done'] = "Ändringarna godkändes."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Ändringarna godkändes inte."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Godkänn nya recensioner"; // 5.0
$LNG['a_approve_rev_none'] = "Inga recensioner väntar på godkännande."; // 5.0
$LNG['a_approve_rev_done'] = "Recensionen godkändes."; // 5.0
$LNG['a_approve_rev_dones'] = "Recensionerna godkändes."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Säkerhetskopiera databas"; // 5.2.0
$LNG['a_backup_warn'] = "Detta skapar en backup med alla användare, statistik och inställningar. Om topplistan har många användare, kan det ta en lång stund och generera en stor fil."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Skapa en ny sida"; // 5.1.0
$LNG['a_create_page_id'] = "Sid-ID - det kommer att användas i URL:en, så det kan bara innehålla bokstäver, siffror, understreck och bindestreck"; // 5.1.0
$LNG['a_create_page_error_id'] = "Sid-ID:n kan bara innehålla bokstäver, siffror, understreck och bindestreck. Gå tillbaka och välj ett annat sid-ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Det finns redan en sida med detta sid-ID. Gå tillbaka och välj ett annat sid-ID."; // 5.1.0
$LNG['a_create_page_created'] = "Sidan skapades. Du måste lägga in en länk till %s manuellt i wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Ta bort användarkonto"; // 5.0
$LNG['a_del_headers'] = "Ta bort användarkonton"; // 5.0
$LNG['a_del_done'] = "Användarkontot togs bort."; // 5.0
$LNG['a_del_dones'] = "Användarkontona togs bort."; // 5.0
$LNG['a_del_warn'] = "Är du säker på att du vill ta bort %s?"; // 5.0
$LNG['a_del_multi'] = "dessa %s användarkonton"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Ta bort filtrerade ord"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Ta bort filtrerade ord"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Det filtrerade ordet har tagits bort."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "De filtrerade orden har tagits bort."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Är du säker på att du vill ta bort %s från listan över filtrerade ord?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "dessa %s ord"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Felaktigt ID-nummer för filtrerade ord. Gå tillbaka och försök igen."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Ta bort bannlysning"; // 5.2.0
$LNG['a_del_ban_headers'] = "Ta bort bannlysningar"; // 5.2.0
$LNG['a_del_ban_done'] = "Bannlysningen är nu borttagen."; // 5.2.0
$LNG['a_del_ban_dones'] = "Bannlysningarna är nu borttagna."; // 5.2.0
$LNG['a_del_ban_warn'] = "Är du säker på att du vill ta bort %s från listan över bannlysningar?"; //5.2.0
$LNG['a_del_ban_multi'] = "dessa %s bannlysningar"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Felaktigt bannlysnings-ID. Försök igen."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Ta bort sida"; // 5.1.0
$LNG['a_del_page_headers'] = "Ta bort sidor"; // 5.1.0
$LNG['a_del_page_done'] = "Sidan togs bort."; // 5.1.0
$LNG['a_del_page_dones'] = "Sidorna togs bort."; // 5.1.0
$LNG['a_del_page_warn'] = "Är du säker på att du vill ta bort %s?"; //5.1.0
$LNG['a_del_page_multi'] = "dessa %s sidor"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Felaktigt sid-ID. Gå tillbaka och försök igen."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Delete Review"; // 5.0
$LNG['a_del_rev_headers'] = "Delete Reviews"; // 5.0
$LNG['a_del_rev_done'] = "The review has been deleted."; // 5.0
$LNG['a_del_rev_dones'] = "The reviews have been deleted."; // 5.0
$LNG['a_del_rev_warn'] = "Are you sure you want to delete this review?"; //5.0
$LNG['a_del_rev_warns'] = "Are you sure you want to delete these reviews?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Invalid review ID.  Please try again."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Ändra användaruppgifter"; // 5.0
$LNG['a_edit_site_is'] = "Den här webbplatsen är"; // 4.0
$LNG['a_edit_active'] = "Aktiv (visas)"; // 4.0
$LNG['a_edit_inactive'] = "Inaktiv (dold)"; // 5.0
$LNG['a_edit_edited'] = "Användaruppgifterna ändrades.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Ändra filtrerade ord"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Det filtrerade ordet har ändrades."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Ändra bannlysning"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Bannlysningen ändrades."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Ändra sida"; // 5.1.0
$LNG['a_edit_page_content'] = "Innehåll - HTML är tillåtet"; // 5.1.0
$LNG['a_edit_page_edited'] = "Sidan ändrades."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Ändra recension"; // 5.0
$LNG['a_edit_rev_edited'] = "Recensionen ändrades.";

// Admin > Email Members
$LNG['a_email_header'] = "Skicka e-post"; // 5.0
$LNG['a_email_subject'] = "Ämne"; // 4.2.0
$LNG['a_email_message'] = "Meddelande"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-post skickades till %s"; // 5.0
$LNG['a_email_not_sent'] = "Kunde inte skicka till %s"; // 5.0
$LNG['a_email_sent'] = "Skickade e-post till %s användare."; // 4.2.0
$LNG['a_email_failed'] = "Kunde inte skicka e-post till %s användare."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Du är nu utloggad."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administration"; // 5.0
$LNG['a_main'] = "Välkommen till administrationen. Använd länkarna i menyn till vänster för att administrera din topplista."; // 5.0
$LNG['a_main_approve'] = "1 webbplats väntar på att godkännas."; // 5.0
$LNG['a_main_approves'] = "%s webbplatser väntar på att godkännas."; // 5.0
$LNG['a_main_approve_edit'] = "1 webbplats har ändrats och väntar på godkännande."; // 5.2.0
$LNG['a_main_approve_edits'] = "%s webbplatser har ändrats och väntar på godkännande."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 recension väntar på att godkännas."; // 5.0
$LNG['a_main_approve_revs'] = "%s recensioner väntar på att godkännas."; // 5.0
$LNG['a_main_your'] = "Din version"; // 5.0
$LNG['a_main_latest'] = "Senaste versionen"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Användare"; // 5.0
$LNG['a_man_actions'] = "Alternativ"; // 4.2.0
$LNG['a_man_edit'] = "Ändra"; // 4.2.0
$LNG['a_man_delete'] = "Ta bort"; // 4.2.0
$LNG['a_man_email'] = "Skicka e-post"; // 4.2.0
$LNG['a_man_all'] = "Markera alla"; // 5.0
$LNG['a_man_none'] = "Avmarkera alla"; // 5.0
$LNG['a_man_del_sel'] = "Ta bort markerade"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Ordfilter"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Skriv in ett ord och vad det ska ersättas med nedan. Till exempel, skriv in \"fan\" i ordfältet och \"f*n\" i ersättningsfältet."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Exakt matchning gör att bara det exakta ordet ersätts. Global matchning gör att det gäller alla ord och meningar där bokstavskombinationen förekommer. Alltså, global matchning av \"fan\" gör att också \"fantastisk\" och \"soffan\" ändras."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Ord"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Ersättning"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Matchning"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exakt"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globalt"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtrera ord"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" har lagts till i ordfiltret."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Bannlysningar"; // 5.2.0
$LNG['a_man_ban_instructions'] = "För att bannlysna webbplatser och användare från din topplista, fyll i fälten nedan. När en användare registrerar sig, kontrolleras URL, e-postadress, användarnamn och IP-adress. När en webbplats ändras, kontrolleras URL och e-postadress.<br /><br />Nya bannlysningar påverkar inte redan existerande användare."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Exakt matching kommer bara matcha den exakta teckensträngen. Global matchning kommer matcha allt som innehåller teckensträngen. Så, global matchning av http://www.topplista.se/ kommer matcha alla webbadresser som innehåller http://www.topplista.se/ i webbadressen, medan en exakt matchning av http://www.topplista.se/ bara kommer matcha den enda webbadressen."; // 5.2.0
$LNG['a_man_ban_string'] = "Teckensträng"; // 5.2.0
$LNG['a_man_ban_field'] = "Fält"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" har lagts till i listan över bannlysningar."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Ändra sidor"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Recensioner"; // 5.0
$LNG['a_man_rev_enter'] = "För att ändra recensioner tillhörande en webbplats, skriv in webbplatsens användarnamn nedan."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Recension"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Meny";
$LNG['a_menu_main'] = "Startsida"; // 5.0
$LNG['a_menu_approve'] = "Godkänn nya webbplatser";
$LNG['a_menu_approve_edits'] = "Godkänn ändrade webbplatser"; // 5.2.0
$LNG['a_menu_manage'] = "Användare"; // 4.2.0
$LNG['a_menu_settings'] = "Inställningar"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Ordfilter"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Bannlysningar"; // 5.2.0
$LNG['a_menu_backup'] = "Säkerhetskopiera databasen"; // 5.2.0
$LNG['a_menu_skins'] = "Stilar och kategorier"; // 5.0
$LNG['a_menu_approve_reviews'] = "Godkänn nya recensioner"; // 5.0
$LNG['a_menu_manage_reviews'] = "Recensioner"; // 5.0
$LNG['a_menu_email'] = "Skicka e-post";
$LNG['a_menu_delete_review'] = "Ta bort recension";
$LNG['a_menu_logout'] = "Logga ut";
$LNG['a_menu_delete'] = "Ta bort användare";
$LNG['a_menu_edit'] = "Ändra användare";
$LNG['a_menu_create_page'] = "Skapa sida"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Ändra sidor"; // 5.1.0
$LNG['a_header_members'] = "Användare"; // 5.0
$LNG['a_header_settings'] = "Inställningar"; // 5.0
$LNG['a_header_tools'] = "Verktyg"; // 5.2.0
$LNG['a_header_reviews'] = "Recensioner"; // 5.0
$LNG['a_header_pages'] = "Sidor med eget innehåll"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Ändra inställningar";
$LNG['a_s_help'] = "Hjälp"; // 5.1.0

$LNG['a_s_general'] = "Allmänna inställningar";
$LNG['a_s_admin_password'] = "Lösenord till administration";
$LNG['a_s_list_name'] = "Topplistans namn";
$LNG['a_s_list_url'] = "URL till topplistan";
$LNG['a_s_default_language'] = "Standardspråk";
$LNG['a_s_your_email'] = "Topplistans e-postadress";

$LNG['a_s_sql'] = "SQL-inställningar";
$LNG['a_s_sql_type'] = "Databastyp"; // 4.1.0
$LNG['a_s_sql_host'] = "Värd";
$LNG['a_s_sql_database'] = "Databas";
$LNG['a_s_sql_username'] = "Användarnamn";
$LNG['a_s_sql_password'] = "Lösenord";

$LNG['a_s_ranking'] = "Placeringar och urval";
$LNG['a_s_num_list'] = "Antal webbplatser att visa per sida"; // 5.0
$LNG['a_s_ranking_period'] = "Räkna statisken utifrån dagar, veckor eller månader"; // 5.0
$LNG['a_s_ranking_method'] = "Sortera efter"; // 5.0
$LNG['a_s_ranking_average'] = "Räkna statistiken från genomsnitt eller bara genom %s"; // 5.0
$LNG['a_s_featured_member'] = 'Utvald webbplats - för att funktionen ska fungera måste taggen {$featured_member} finns i wrapper.html.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Antal webbplatser som får använda _top-stilen";
$LNG['a_s_ad_breaks'] = "Visa annonser efter dessa placeringar (separera med kommatecken) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Fyll i tomma fält i topplistan med ett meddelande där det står \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Användare";
$LNG['a_s_active_default'] = "Nyregistrerade webbplatser måste godkännas innan de får visas i topplistan";
$LNG['a_s_active_default_review'] = "Nya recensioner måste godkännas innan de visas";
$LNG['a_s_delete_after'] = "Ta bort inaktiva användare efter antal dagar (skriv 0 för att inaktivera funktionen)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Skicka e-post till administratören när en ny användare registreras"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Skicka e-post till administratören när en ny kommentar skrivits"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maximal banner-bredd (skriv 0 för att inaktivera funktionen)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximal banner-höjd (skriv 0 för att inaktivera funktionen)"; // 4.2.0
$LNG['a_s_default_banner'] = "Standard-banner för användare som inte anger en egen banner";

$LNG['a_s_button'] = "Knappinställningar";
$LNG['a_s_ranks_on_buttons'] = "Placeringar på knappar -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Knappar som visar placeringar"; // 4.2.0
$LNG['a_s_button_url'] = "Om ja/nej - webbadress till knappen du vill visa på dina användares webbplatser"; // 4.0
$LNG['a_s_button_dir'] = "Om ja - webbadress till mappen med knapparna"; // 4.0
$LNG['a_s_button_ext'] = "Om ja - filtyper (gif, jpg, png och så vidare)"; // 4.0
$LNG['a_s_button_num'] = "Om ja - Antal knappar - ju högre antal, desto mer resurser använder scriptet på servern"; // 4.0
$LNG['a_s_google_friendly_links'] = "Sökmotorvänliga länkar - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Ingångssida för att förhindra fusk";
$LNG['a_s_captcha'] = "Bildverifiering vid registrering av webbplats (förhindrar missbruk) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Säkerhetfråga att besvara för att förhindra att spamregistreringar (lämna fältet tomt för att inaktivera funktionen) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Övriga inställningar";
$LNG['a_s_search'] = "Sökfunktion";
$LNG['a_s_time_offset'] = "Tidskompensation gentemot din server (om du eventullt befinner dig i annan tidszon eller har sommartid/vintertid)";

$LNG['a_s_on'] = "Aktiverat";
$LNG['a_s_off'] = "Inaktiverat";
$LNG['a_s_days'] = "Dagar";
$LNG['a_s_months'] = "Månader";
$LNG['a_s_weeks'] = "Veckor"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nej";
$LNG['a_s_answer'] = "Svar"; // 5.2.0

$LNG['a_s_updated'] = "Inställningarna uppdaterades.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Stilar och kategorier"; // 5.0
$LNG['a_skins_default'] = "Standardstil"; // 5.0
$LNG['a_skins_set_default'] = "Välj standardstil"; // 5.0
$LNG['a_skins_anon'] = "Anonym"; // 5.0
$LNG['a_skins_default_done'] = "Standardstilen ändrades."; // 5.0
$LNG['a_skins_categories_done'] = "Kategoriernas stilar ändrades."; // 5.0
$LNG['a_skins_new_category_done'] = "Kategorin skapades."; // 5.0
$LNG['a_skins_delete_done'] = "Kategorin togs bort."; // 5.0
$LNG['a_skins_delete_error'] = "Kategorin kunde inte tas bort eftersom det måste finnas minst en kategori i topplistan."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategorin ändrades."; // 5.0
$LNG['a_skins_invalid_skin'] = "Felaktig stil: %s. Försök igen."; // 5.0
$LNG['a_skins_categories'] = "Kategorier"; // 5.0
$LNG['a_skins_new_category'] = "Skapa ny kategori"; // 5.0
$LNG['a_skins_set_skins'] = "Ändra kategoriernas stilar"; // 5.0
$LNG['a_skins_edit_category'] = "Ändra kategori"; // 5.0
$LNG['a_skins_category_name'] = "Kategorins namn"; // 5.0
$LNG['a_skins_diff_skins'] = "Du kan välja att ha olika stilar för olika kategorier nedan."; // 5.0
?>
