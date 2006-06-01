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
$translation = 'Svenska';
$translator_name = 'Topplista.se';
$translator_email = 'info@topplista.se';
$translator_url = 'http://www.topplista.se/';

// Global
$LNG['g_form_submit_short'] = "OK";
$LNG['g_username'] = "Användarnamn";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Titel";
$LNG['g_description'] = "Beskrivning";
$LNG['g_category'] = "Kategori"; // 4.1.0
$LNG['g_email'] = "E-post";
$LNG['g_banner_url'] = "URL till banner";
$LNG['g_password'] = "Lösenord";
$LNG['g_average'] = "Genomsnitt";
$LNG['g_today'] = "Idag";
$LNG['g_yesterday'] = "Igår";
$LNG['g_daily'] = "Dagligen"; // 5.0
$LNG['g_this_month'] = "Den här månaden"; // 5.0
$LNG['g_last_month'] = "Förra månaden"; // 5.0
$LNG['g_monthly'] = "Månatligen"; // 5.0
$LNG['g_this_week'] = "Den här veckan"; // 5.0
$LNG['g_last_week'] = "Förra veckan"; // 5.0
$LNG['g_weekly'] = "Veckovis"; // 5.0
$LNG['g_pv'] = 'Visningar'; // 5.0
$LNG['g_overall'] = 'Totalt'; // 5.0
$LNG['g_in'] = 'In'; // 5.0
$LNG['g_out'] = 'Ut'; // 5.0
$LNG['g_unq_pv'] = "Unika visningar"; // 5.0
$LNG['g_tot_pv'] = "Visningar"; // 5.0
$LNG['g_unq_in'] = "Unika in"; // 5.0
$LNG['g_tot_in'] = "In"; // 5.0
$LNG['g_unq_out'] = "Unika ut"; // 5.0
$LNG['g_tot_out'] = "Ut"; // 5.0
$LNG['g_invalid_u_or_p'] = "Fel användarnamn eller lösenord. Försök igen."; // 5.0
$LNG['g_invalid_u'] = "Felaktigt användarnamn. Försök igen."; // 5.0
$LNG['g_invalid_p'] = "Felaktigt lösenord. Försök igen."; // 5.0
$LNG['g_session_expired'] = "Din inloggningssession har gått ut. Försök igen."; // 5.0
$LNG['g_error'] = "Fel"; // 5.0
$LNG['g_delete_install'] = "Av säkerhetsskäl måste du ta bort katalogen install innan scriptet körs."; // 5.0

// Edit Account
$LNG['edit_header'] = "Ändra användarkonto";
$LNG['edit_info_edited'] = "Ditt användarkonto ändrades.";
$LNG['edit_password_blank'] = "Lämna fältet tomt för att behålla nuvarande lösenord"; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Ingångssida";
$LNG['gateway_text'] = "Den här sidan finns till för att förhindra fusk. Klicka på länken nedan för att komma till topplistan.";
$LNG['gateway_vote'] = "Gå in";
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
$LNG['upgrade_error_version'] = "Uppgraderingen stödjer bara Aardvark Topsites PHP 4.1.0 eller senare version.";
$LNG['upgrade_done'] = "Din topplista uppgraderades. Ta bort katalogen install.";

// Join
$LNG['join_header'] = "Registrera ny webbplats";
$LNG['join_enter_text'] = "Enter the text as it is shown in the image below:"; // 4.2.2
$LNG['join_user'] = "Användarnamn"; // 5.0
$LNG['join_website'] = "Webbplats"; // 5.0
$LNG['join_error_forgot'] = "Du glömde att:";
$LNG['join_error_username'] = "Skriva in ett giltig användarnamn: använd bara bokstäver, siffror, understreck och bindestreck."; // 5.0
$LNG['join_error_username_duplicate'] = "Enter a valid username: your username is already in use."; // 5.0
$LNG['join_error_url'] = "Skriva in en giltig URL.";
$LNG['join_error_email'] = "Skriva in en giltig e-postadress.";
$LNG['join_error_title'] = "Skriva in en titel för din webbplats.";
$LNG['join_error_password'] = "Skriva in ett lösenord.";
$LNG['join_error_urlbanner'] = "Skriva in en giltig banner. Lämna fältet tomt om du inte har någon. Den måste vara mindre än"; // 4.0
$LNG['join_error_back'] = "Gå tillbaka och rättat till felen.";
$LNG['join_error_time'] = "Uppdatera inte den här sidan."; // 4.2.0
$LNG['join_error_captcha'] = "Ordet du skrev stämde inte överens med innehållet i bilden."; // 4.2.2
$LNG['join_thanks'] = "Tack för din registrering! Lägg in den här länkkoden på din webbplats för att börja skicka röster.";
$LNG['join_change_warning'] = "Om du ändrar koden riskerar du att den inte fungerar.";
$LNG['join_welcome'] = "Välkommen till %s";
$LNG['join_welcome_admin'] = "En ny webbplats har registrerats.";

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

// Rate and Review
$LNG['rate_header'] = "Betyg och recension";
$LNG['rate_rating'] = "Ge betyg";
$LNG['rate_review'] = "Skriv recension - bara text, ingen HTML"; // 5.0
$LNG['rate_thanks'] = "Tack för ditt betyg.";
$LNG['rate_error'] = "Du har redan gett betyg åt den här webbplatsen.";
$LNG['rate_back'] = "Tillbaka till statistiken";

// Search
$LNG['search_header'] = "Sök";
$LNG['search_off'] = "Sökfunktionen har inaktiverats.";
$LNG['search_for'] = "Du sökte efter";
$LNG['search_no_sites'] = "Hittade inga webbplatser i topplistan som matchade din sökning."; // 5.0
$LNG['search_prev'] = "Föregående"; // 3.2.1
$LNG['search_next'] = "Nästa"; // 3.2.1

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

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Godkänn nya webbplatser"; // 5.0
$LNG['a_approve'] = "Godkänn"; // 4.0
$LNG['a_approve_none'] = "Inga webbplatser väntar på godkännande."; // 4.0
$LNG['a_approve_done'] = "Webbplatsen godkändes."; // 4.0
$LNG['a_approve_dones'] = "Webbplatserna godkändes."; // 4.0
$LNG['a_approve_sel'] = "Med markerade:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Godkänn nya recensioner"; // 5.0
$LNG['a_approve_rev_none'] = "Inga recensioner väntar på godkännande."; // 5.0
$LNG['a_approve_rev_done'] = "Recensionen godkändes."; // 5.0
$LNG['a_approve_rev_dones'] = "Recensionerna godkändes."; // 5.0

// Admin > Delete Member
$LNG['a_del_header'] = "Ta bort användarkonto"; // 5.0
$LNG['a_del_headers'] = "Ta bort användarkonton"; // 5.0
$LNG['a_del_done'] = "Användarkontot togs bort."; // 5.0
$LNG['a_del_dones'] = "Användarkontona togs bort."; // 5.0
$LNG['a_del_warn'] = "Är du säker på att du vill ta bort %s?"; // 5.0
$LNG['a_del_multi'] = "dessa %s användarkonton"; //5.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Ta bort recension"; // 5.0
$LNG['a_del_rev_headers'] = "Ta bort recensioner"; // 5.0
$LNG['a_del_rev_done'] = "Recensionen togs bort."; // 5.0
$LNG['a_del_rev_dones'] = "Recensionerna togs bort."; // 5.0
$LNG['a_del_rev_warn'] = "Är du säker på att du vill ta bort den här recensionen?"; //5.0
$LNG['a_del_rev_warns'] = "Är du säker på att du vill ta bort dessa recensionener?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Felaktigt recensions-ID. Försök igen."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Ändra användaruppgifter"; // 5.0
$LNG['a_edit_site_is'] = "Den här webbplatsen är"; // 4.0
$LNG['a_edit_active'] = "Aktiv (visas)"; // 4.0
$LNG['a_edit_inactive'] = "Inaktiv (dold)"; // 5.0
$LNG['a_edit_edited'] = "Användaruppgifterna ändrades.";

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
$LNG['a_logout_message'] = "Du är utloggad."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administration"; // 5.0
$LNG['a_main'] = "Välkommen till administrationen. Använd länkarna i menyn till vänster för att administrera din topplista."; // 5.0
$LNG['a_main_approve'] = "1 webbplats väntar på att godkännas."; // 5.0
$LNG['a_main_approves'] = "%s webbplatser väntar på att godkännas."; // 5.0
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
$LNG['a_menu_manage'] = "Användare"; // 4.2.0
$LNG['a_menu_settings'] = "Inställningar"; // 5.0
$LNG['a_menu_skins'] = "Stilar och kategorier"; // 5.0
$LNG['a_menu_approve_reviews'] = "Godkänn nya recensioner"; // 5.0
$LNG['a_menu_manage_reviews'] = "Recensioner"; // 5.0
$LNG['a_menu_email'] = "Skicka e-post";
$LNG['a_menu_delete_review'] = "Ta bort recension";
$LNG['a_menu_logout'] = "Logga ut";
$LNG['a_menu_delete'] = "Ta bort användare";
$LNG['a_menu_edit'] = "Ändra användare";
$LNG['a_header_members'] = "Användare"; // 5.0
$LNG['a_header_settings'] = "Inställningar"; // 5.0
$LNG['a_header_reviews'] = "Recensioner"; // 5.0

// Admin > Settings
$LNG['a_s_header'] = "Ändra inställningar";
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
$LNG['a_s_ad_breaks'] = "Visa avbrott för reklam efter dessa placeringar (separera med komma-tecken)";

$LNG['a_s_member'] = "Användare";
$LNG['a_s_active_default'] = "Nyregistrerade webbplatser måste godkännas innan de får visas i topplistan";
$LNG['a_s_active_default_review'] = "Nya recensioner måste godkännas innan de visas";
$LNG['a_s_delete_after'] = "Ta bort inaktiva användare efter antal dagar (skriv 0 för att inaktivera funktionen)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Skicka e-post till administratören när nya webbplatser registreras";
$LNG['a_s_max_banner_width'] = "Maximal banner-bredd (skriv 0 för att inaktivera funktionen)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximal banner-höjd (skriv 0 för att inaktivera funktionen)"; // 4.2.0
$LNG['a_s_default_banner'] = "Standard-banner för användare som inte anger en egen banner";

$LNG['a_s_button'] = "Knappinställningar";
$LNG['a_s_ranks_on_buttons'] = "Vill du visa webbplatsernas placeringar på knapparna? Du bör läsa <a href=\"http://www.aardvarkind.com/topsitesphp/manual/\" target=\"_blank\">manualen</a> innan du börjar använda knappar som visar placeringar. Om du aktiverar den här funktioner kan du hoppa över resten av den här delen på den här sidan."; // 4.2.0
$LNG['a_s_stat_buttons'] = "Knappar som visar placeringar"; // 4.2.0
$LNG['a_s_button_url'] = "Om ja/nej - webbadress till knappen du vill visa på dina användares webbplatser"; // 4.0
$LNG['a_s_button_dir'] = "Om ja - webbadress till mappen med knapparna"; // 4.0
$LNG['a_s_button_ext'] = "Om ja - filtyper (gif, jpg, png och så vidare)"; // 4.0
$LNG['a_s_button_num'] = "Om ja - Antal knappar - ju högre antal, desto mer resurser använder scriptet på servern"; // 4.0

$LNG['a_s_other'] = "Övriga inställningar";
$LNG['a_s_search'] = "Sökfunktion";
$LNG['a_s_time_offset'] = "Tidskompensation gentemot din server (om du eventullt befinner dig i annan tidszon eller har sommartid/vintertid)";
$LNG['a_s_gateway'] = "Aktivera separat ingångssida för topplistans besökare (för att förhindra fusk)";
$LNG['a_s_captcha'] = "Aktivera bildverifiering vid registrering (för att förhindra automatiska registreringar)"; // 4.2.2

$LNG['a_s_on'] = "Aktiverat";
$LNG['a_s_off'] = "Inaktiverat";
$LNG['a_s_days'] = "Dagar";
$LNG['a_s_months'] = "Månader";
$LNG['a_s_weeks'] = "Veckor"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nej";

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
$LNG['a_skins_edit_done'] = "Kategorin ändrades."; // 5.0
$LNG['a_skins_invalid_skin'] = "Felaktig stil: %s. Försök igen."; // 5.0
$LNG['a_skins_categories'] = "Kategorier"; // 5.0
$LNG['a_skins_new_category'] = "Skapa ny kategori"; // 5.0
$LNG['a_skins_set_skins'] = "Ändra kategoriernas stilar"; // 5.0
$LNG['a_skins_edit_category'] = "Ändra kategori"; // 5.0
$LNG['a_skins_category_name'] = "Kategorins namn"; // 5.0
$LNG['a_skins_diff_skins'] = "Du kan välja att ha olika stilar för olika kategorier nedan."; // 5.0
?>
