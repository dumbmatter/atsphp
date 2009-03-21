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
$translation = 'Norwegian (Norsk)';
$translator_name = 'Thomas Torjusen';
$translator_email = 'webmaster@dykkesiden.com';
$translator_url = 'http://www.dykkesiden.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "Utfør";
$LNG['g_username'] = "Brukernavn";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Tittel";
$LNG['g_description'] = "Beskrivelse";
$LNG['g_category'] = "Kategori"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_bannerurl'] = "Banner URL";
$LNG['g_password'] = "Passord";
$LNG['g_average'] = "Gj.snitt";
$LNG['g_today'] = "I dag";
$LNG['g_yesterday'] = "I går";
$LNG['g_daily'] = "Daglig"; // 5.0
$LNG['g_this_month'] = "Denne mnd"; // 5.0
$LNG['g_last_month'] = "Forrige mnd"; // 5.0
$LNG['g_monthly'] = "Månedlig"; // 5.0
$LNG['g_this_week'] = "Denne uken"; // 5.0
$LNG['g_last_week'] = "Forrige uke"; // 5.0
$LNG['g_weekly'] = "Ukentlig"; // 5.0
$LNG['g_pv'] = 'Sidevisninger'; // 5.0
$LNG['g_overall'] = 'Totalt'; // 5.0
$LNG['g_in'] = 'Inn'; // 5.0
$LNG['g_out'] = 'Ut'; // 5.0
$LNG['g_unq_pv'] = "Unike sidevisninger"; // 5.0
$LNG['g_tot_pv'] = "Totale sidevisninger";
$LNG['g_unq_in'] = "Unike treff inn";
$LNG['g_tot_in'] = "Totale treff inn";
$LNG['g_unq_out'] = "Unike treff ut";
$LNG['g_tot_out'] = "Totale treff ut";
$LNG['g_invalid_u_or_p'] = "Ugyldig brukernavn eller passord. Vær vennlig å prøv igjen."; // 5.0
$LNG['g_invalid_u'] = "Ugyldig brukernavn. Vær vennlig å prøv igjen."; // 5.0
$LNG['g_invalid_p'] = "Ugyldig passord. Vær vennlig å prøv igjen."; // 5.0
$LNG['g_session_expired'] = "Din sesjon har gått ut. Være vennlig å prøv igjen."; // 5.0
$LNG['g_error'] = "Feil"; // 5.0
$LNG['g_delete_install'] = "Av sikkerhetsgrunner må du slette install katalogen før dette scriptet vil virke."; // 5.0
$LNG['g_ip'] = "IP adresse"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Endre medlems info";
$LNG['edit_info_edited'] = "Din konto har blitt endret.";
$LNG['edit_password_blank'] = "La denne være blank for å beholde gjeldende passord"; // 4.0
$LNG['edit_delay'] = "Endringer i din sides tittel og url må bli godkjent av denne topplistens administrator før endringene iverksettes."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Topsites Gateway side";
$LNG['gateway_text'] = "Denne siden er satt opp for å forhindre fusk. Klikk på linken nedenfor for å gå til topplisten.";
$LNG['gateway_vote'] = "Gå videre og avgi stemme";
$LNG['gateway_no_vote'] = "Gå videre uten å avgi stemme"; // 5.0

// Install
$LNG['install_header'] = "Installer";
$LNG['install_welcome'] = "Velkommen til Aardvark Topsites PHP 5.  Fyll ut nedenfor slik at du får installert scriptet.";
$LNG['install_sql_prefix'] = "Tabellprefix - endre denne kun hvis du kjører flere enn 1 toppliste på samme server";
$LNG['install_error_chmod'] = "Kunne ikke skrive til settings_sql.php.  Sjekk at du har satt CHMOD 666 på settings_sql.php.";
$LNG['install_error_sql'] = "Kunne ikke koble til databasen.  Vær vennlig å gå tilbake og endre dine SQL innstillinger.";
$LNG['install_done'] = "Din toppliste er blitt insallert.  Slett denne katalogen nå.";
$LNG['install_your'] = "Din toppliste";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Oppgrader";
$LNG['upgrade_welcome'] = "Velkommen til Aardvark Topsites PHP 5.  Før du oppgraderer - husk å ta backup av dine gamle data.";
$LNG['upgrade_version'] = "Vennligst kontroller at du oppgraderer fra versjon %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Oppgraddering er kun støttet for Aardvark Topsites PHP 4.1.0 eller høyere.";
$LNG['upgrade_done'] = "Din toppliste er nå oppgradert. Slett denne katalogen nå.";
$LNG['install_mailing_list'] = "Hvis du vil abonere på Topsites PHP mailing list så fyll inn din mailadresse nedenfor. Du mottar få mailer, men viktige kunngjøringer om f.eks. selve scriptet eller nye releaser og sikkerhetsoppgraderinger."; // 5.2.0

// Join
$LNG['join_header'] = "Registrer deg";
$LNG['join_enter_text'] = "Legg inn teksten som den vises i bildet nedenfor:"; // 4.2.2
$LNG['join_enter_text_read'] = "Kan ikke lese?"; // 5.2.0
$LNG['join_user'] = "Bruker"; // 5.0
$LNG['join_website'] = "Nettsted"; // 5.0
$LNG['join_banner_size'] = "(Maks størrelse: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Legge inn et gyldig brukernavn: bruk bare nokstaver, tall, underscores og dashes."; // 5.0
$LNG['join_error_username_duplicate'] = "Legge inn et gyldig brukernavn: ditt brukenavn er allerede i bruk."; // 5.0
$LNG['join_error_url'] = "Legge inn en gyldig url.";
$LNG['join_error_email'] = "Legge inn en gyldig mailadresse.";
$LNG['join_error_title'] = "Legge inn en tittel for ditt nettsted.";
$LNG['join_error_password'] = "Legge inn et passord.";
$LNG['join_error_confirm_password'] = "Passordene var ikke like."; // 5.2.0
$LNG['join_error_urlbanner'] = "Legge inn en gyldig banner (la dette feltet være blankt hvis du ikke har noe banner. Du kan alltids endre dette senere).  < "; // 4.0
$LNG['join_error_time'] = "Vennligst ikke oppdater denne siden som bekrefter din påmelding."; // 4.2.0
$LNG['join_error_captcha'] = "Ordet du la inn samsvarer ikke med bildet."; // 4.2.2
$LNG['join_error_question'] = "Ditt svar er feil. Vær vennlig å korriger dette for å bekrefte at du er en reell person og ikke en maskin."; // 5.2.0
$LNG['join_thanks'] = "Takk skal du ha! Legg inn denne koden på din side slik at du kan bli rangert på listen. Dersom ikke denne koden legges inn så vil din side befinne seg i bunnen av listen og vi vil slette siden din ved neste gjennomgang.";
$LNG['join_change_warning'] = "Hvis du endrer på koden så vil det kanskje ikke fungere.";
$LNG['join_welcome'] = "Velkommen til denne topplisten!";
$LNG['join_welcome_admin'] = "Et nytt medlem har registrert seg på din toppliste";
$LNG['join_approve'] = "Din side vil bli oppført når admin på denne topplisten har godkjent siden."; // 5.1.0
$LNG['join_type'] = "Konto type"; // 5.1.0
$LNG['join_standard'] = "Standard"; // 5.1.0
$LNG['join_error_top'] = "Det ble en feil med din registrering. Vennligst rett feilen nedenfor."; // 5.2.0
$LNG['join_ban_top'] = "Din registrering inneholder innhold som er blitt svartelistet av administratoren."; // 5.2.0
$LNG['join_security'] = "Sikkerhet"; // 5.2.0
$LNG['join_confirm_password'] = "Bekreft passord"; // 5.2.0

// Lost Code
$LNG['lost_code_header'] = "Glemt kode";

// Lost Password
$LNG['lost_pw_header'] = "Glemt passord";
$LNG['lost_pw_forgot'] = "Glemt ditt passord?"; // 5.0
$LNG['lost_pw_get'] = "Få tilsendt passord"; // 5.0
$LNG['lost_pw_email'] = "For å velge et nytt passord for din side så klikk på linken nednefor."; // 4.0.1
$LNG['lost_pw_emailed'] = "Instruksjoner for hvordan du endrer ditt passord er blitt sendt til deg via mail.";
$LNG['lost_pw_new'] = "Legg inn et nytt passord"; // 4.0.1
$LNG['lost_pw_set_new'] = "Angi nytt passord"; // 5.0
$LNG['lost_pw_finish'] = "Passordet ditt er blitt endret."; // 4.0.1

// Main Page
$LNG['main_header'] = "Rangering"; // 5.0
$LNG['main_all'] = "Alle Sider"; // 4.2.0
$LNG['main_method'] = "Rangeringsmetode";
$LNG['main_members'] = "Medlemmer";
$LNG['main_menu_rankings'] = "Rangering";
$LNG['main_menu_join'] = "Ny";
$LNG['main_menu_random'] = "Tilfeldig medlem";
$LNG['main_menu_search'] = "Søk";
$LNG['main_menu_lost_code'] = "Glemt kode";
$LNG['main_menu_lost_password'] = "Glemt passord";
$LNG['main_menu_edit'] = "Endre";
$LNG['main_menu_user_cp'] = "Kontrollpanel"; // 5.0
$LNG['main_featured'] = "Sjekk ut denne"; // 4.0.2
$LNG['main_executiontime'] = "Siden ble generert på"; // 4.0
$LNG['main_queries'] = "SQL spørringer"; // 4.0
$LNG['main_powered'] = "Basert på";

// Ranking Table
$LNG['table_stats'] = "Statistikk";
$LNG['table_unique'] = "Unike";
$LNG['table_total'] = "Totale";
$LNG['table_rank'] = "Rangering";
$LNG['table_title'] = "Tittel"; // 4.0
$LNG['table_description'] = "Beskrivelse"; // 4.0
$LNG['table_movement'] = "Bevegelse";
$LNG['table_up'] = "Opp"; // 5.0
$LNG['table_down'] = "Ned"; // 5.0
$LNG['table_neutral'] = "Uendret"; // 5.0
$LNG['table_your_site_here'] = "Ditt nettsted her"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Ranger og kommenter";
$LNG['rate_message'] = "Vær vennlig å legg inn din rangering og kommentar for %s i skjemaet nedenfor."; // 5.2.0
$LNG['rate_rating'] = "Rangering";
$LNG['rate_review'] = "Kommentarer - ingen HTML tillatt";
$LNG['rate_thanks'] = "Takk for dine innspill vedrørende denne siden!";
$LNG['rate_error'] = "Du har allerede gitt innspill til denne siden.";
$LNG['rate_back'] = "Tilbake til statistikk";
$LNG['rate_email_admin'] = "En ny kommentar er blitt postlagt på din toppliste."; // 5.1.0

// Search
$LNG['search_header'] = "Søk";
$LNG['search_off'] = "Søkefunksjonn er blitt slått av for denne topplisten.";
$LNG['search_nosites'] = "Dessverre, men vi fant ingen resultater som var i samsvar med ditt søk.";
$LNG['search_prev'] = "Forrige"; // 3.2.1
$LNG['search_next'] = "Neste"; // 3.2.1
$LNG['search_displaying_results'] = "Viser %s til %s av %s resultater for <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistikk";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Registrert siden"; // 5.0
$LNG['stats_rating_avg'] = "Gjennomsnittelig rangering";
$LNG['stats_rating_num'] = "Antall rangeringer";
$LNG['stats_rate'] = "Klikk her for å rangere denne siden";
$LNG['stats_reviews'] = "Kommentarer";
$LNG['stats_allreviews'] = "Vis alle kommentarer"; // 4.0
$LNG['stats_week'] = "Uke"; // 5.0
$LNG['stats_highest'] = "Høyest"; // 5.0
$LNG['stats_overall'] = "Total statistikk"; // 5.2.0
$LNG['stats_overall_average'] = "Gjennomsnitt (Siste 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Totalt Fra tidenes morgen)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Topp %s sider"; //4.0
$LNG['ssi_new'] = "%s siste medlemmer"; //4.0
$LNG['ssi_all'] = "Alle sider"; //4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Kontrollpanel brukere"; // 5.0
$LNG['user_cp_login'] = "Logg inn"; // 5.0
$LNG['user_cp_logout'] = "Logg ut"; // 5.0
$LNG['user_cp_welcome'] = "Velkommen til kontrollpanelet for brukere. Bruk linkene til venestre for å administrere din konto."; // 5.0
$LNG['user_cp_logout_message'] = "Du er nå logget ut av kontrollpanelet."; // 5.0
$LNG['user_cp_login_long'] = "Login with your username and password or your OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Kunne ikke finne OpenID server for %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Du må registrere deg på topplisten før du kan komme inn i kontroll-panelet."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Det oppstod en feil ved din innlogging. Vær vennlig å forsøk igjen."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Du må gi tillatelse for å fortsette. Vær vennlig å prøv igjen.."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Feil fra serveren: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Du kan ikke komme inn i kontrollpanelet før siden din har blitt godkjent. Du mottar en mail når sidene din er blitt gjennomgått av administratoren og den er blitt godkjent."; // 5.2.0

// Admin > Godkjenn nye medlemmer // 4.0
$LNG['a_approve_header'] = "Godkjenn ny(e) medlem(er)"; // 5.0
$LNG['a_approve'] = "Godkjenn"; // 4.0
$LNG['a_approve_none'] = "Det er ingen medlemmer som venter på å bli godkjent."; // 4.0
$LNG['a_approve_done'] = "Denne siden er nå godkjent."; // 4.0
$LNG['a_approve_dones'] = "Medlemmene er blitt godkjent."; // 4.0
$LNG['a_approve_sel'] = "Med merkede:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Godkjenn endrede medlemmer"; // 5.2.0
$LNG['a_approve_edited_none'] = "Det er ingen endringer som skal godkjennes."; // 5.2.0
$LNG['a_approve_edited_old'] = "Forrige tittel og URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Endret tittel og URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Avslå"; // 5.2.0
$LNG['a_approve_edited_done'] = "Endringene har blitt godkjent."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Endringene har blit avslått."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Aksepter nye kommentarer"; // 5.0
$LNG['a_approve_rev_none'] = "Det er ingen kommentarer som venter på godkjenning."; // 5.0
$LNG['a_approve_rev_done'] = "Kommentaren er blitt godkjent."; // 5.0
$LNG['a_approve_rev_dones'] = "Kommentarene er blitt godkjent"; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Backup Database"; // 5.2.0
$LNG['a_backup_warn'] = "Dette vil lage en backup av dine medlemmer, statistikk og innstillinger. Hvis du har mange medlemmer så kan denne prosessen ta lang tid og skape en stor fil."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Lag tilpasset side"; // 5.1.0
$LNG['a_create_page_id'] = "Side ID - denne vil bli brukt i URLen, så den kan bare inneholde bokstaver og tall"; // 5.1.0
$LNG['a_create_page_error_id'] = "Side ID kan bare inneholde tall og bokstaver. Vær vennlig å gå tilbake og rett opp Side ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Side ID er i bruk - vennligst gå tilbake og velg et nytt"; // 5.1.0
$LNG['a_create_page_created'] = "Siden er blitt laget. Du må manuelt legge til en link i wrapper.html for at den skal dukke opp."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Slett bruker"; // 5.0
$LNG['a_del_headers'] = "Slett brukere"; // 5.0
$LNG['a_del_done'] = "Dette medlemmet har blitt slettet.";
$LNG['a_del_dones'] = "Medlemmene har blitt slettet."; // 5.0
$LNG['a_del_warn'] = "Sikker på at du vil slette %s?"; // 5.0
$LNG['a_del_multi'] = "disse %s brukerene"; // 5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Slett filtrert ord"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Slett filtrert ord"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Det filtrerte ordet har blitt slettet."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "De filtrerte ordene har blitt slettet."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Er du sikker på at du vil slette %s fra listen over filtrerte ord?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "disse %s ordene"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Ugyldig ID for filtrert ord. Vennligst prøv igjen."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Slett svartelistet side"; // 5.2.0
$LNG['a_del_ban_headers'] = "Slett svartelistede sider"; // 5.2.0
$LNG['a_del_ban_done'] = "Den svartelistede siden er blitt slettetd."; // 5.2.0
$LNG['a_del_ban_dones'] = "De svartelistede sidene har blitt slettet."; // 5.2.0
$LNG['a_del_ban_warn'] = "Er du sikker på at du vil slette %s fra svartelisten?"; //5.2.0
$LNG['a_del_ban_multi'] = "disse %s sidene"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Ugyldig svarteliste ID.  Vær vennlig å forsøke igjen."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Slett tilpasset side"; // 5.1.0
$LNG['a_del_page_headers'] = "Slett tilpassede sider"; // 5.1.0
$LNG['a_del_page_done'] = "Den tilpassede siden har blitt slettet."; // 5.1.0
$LNG['a_del_page_dones'] = "De tilpassede sidene har blitt slettet."; // 5.1.0
$LNG['a_del_page_warn'] = "Er du sikker på at du vilslette %s?"; //5.1.0
$LNG['a_del_page_multi'] = "disse %s medlemmen"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Ugyldig tilpasset side ID. Vennligst prøv igjen."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Slette kommentar"; // 5.0
$LNG['a_del_rev_headers'] = "Slette kommentarer"; // 5.0
$LNG['a_del_rev_done'] = "Kommentaren er blitt slettet."; // 5.0
$LNG['a_del_rev_dones'] = "Kommentarene er blitt slettet."; // 5.0
$LNG['a_del_rev_warn'] = "Er du sikker på at du vil slette denne kommentaren?"; //5.0
$LNG['a_del_rev_warns'] = "Er du sikker på at du vil slette disse kommentarene?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Ugyldig kommentar ID.  Vær vennlig å forsøk igjen."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Endre bruker"; // 5.0
$LNG['a_edit_site_is'] = "Denne siden er"; // 4.0
$LNG['a_edit_active'] = "Aktiv (oppført på topplisten)"; // 4.0
$LNG['a_edit_inactive'] = "Inaktiv (Midlertidlig svartelistet - ikke oppførst på topplisten)"; // 4.0
$LNG['a_edit_edited'] = "Oppføringen er blitt endret.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Endre filtrert ord"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Det filtrerte ordet har blitt endret."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Endre svartelistet oppføring"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Den svartelistede oppføringen har blitt endret."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Endre tilpasset side"; // 5.1.0
$LNG['a_edit_page_content'] = "Innhold - du kan benytte HTML her"; // 5.1.0
$LNG['a_edit_page_edited'] = "Siden har blitt endret."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Endre kommentar"; // 5.0
$LNG['a_edit_rev_edited'] = "Kommentaren er blitt endret.";

// Admin > Email Members
$LNG['a_email_header'] = "Mail til brukere"; // 5.0
$LNG['a_email_subject'] = "Emne"; // 4.2.0
$LNG['a_email_message'] = "Meldig"; // 4.2.0
$LNG['a_email_msg_sent'] = "Det er sendt en mail til  %s"; // 5.0
$LNG['a_email_not_sent'] = "Mailen kunne ikke leveres til %s"; // 5.0
$LNG['a_email_sent'] = "%s brukere fikk mail."; // 4.2.0
$LNG['a_email_failed'] = "%s brukere fikk ikke mail.."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Du er nå logget ut av admin."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administrasjon"; // 5.0
$LNG['a_main'] = "Velkommen til administrasjonen. Bruk menyen til venstre for å administrare din toppliste."; // 5.0
$LNG['a_main_approve'] = "Det er 1 side som venter på å bli godkjent."; // 5.0
$LNG['a_main_approves'] = "Det er %s sider som venter på å bli godkjent."; // 5.0
$LNG['a_main_approve_edit'] = "Det er 1 sideendring som venter på å bli godkjent."; // 5.2.0
$LNG['a_main_approve_edits'] = "Det er %s sideendringer som venter på å bli godkjent."; // 5.2.0
$LNG['a_main_approve_rev'] = "Det er 1 kommentar som venter på å bli godkjent."; // 5.0
$LNG['a_main_approve_revs'] = "Det er %s kommentarer som venter på å bli godkjent."; // 5.0
$LNG['a_main_your'] = "Din versjon"; // 5.0
$LNG['a_main_latest'] = "Siste versjon"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Organsisere brukerne"; // 5.0
$LNG['a_man_actions'] = "Handlinger"; // 4.2.0
$LNG['a_man_edit'] = "Endre"; // 4.2.0
$LNG['a_man_delete'] = "Slett"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Velg alle"; // 5.0
$LNG['a_man_none'] = "Velg ingen"; // 5.0
$LNG['a_man_del_sel'] = "Slett valgte"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Ordfilter"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Enter a word and its replacement below.  For example, you could enter \"hell\" in the word field and \"h***\" in the replacement field."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Exact matching will only match the exact word.  Global matching will match anything containing the word.  So, global matching of \"hell\" would also match \"shell\" and \"hello\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Word"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Replacement"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Matching"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exact"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Global"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filter Word"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" has been added to the profanity filter."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Svarteliste"; // 5.2.0
$LNG['a_man_ban_instructions'] = "TØnsker du å svarteliste sider og brukere fra din toppliste så fyller du inn skjemaet under.  Når et nytt medlem registrerer seg så vil URLen, mailadressen, brukernavnet og IPadressen bli sjekket. Når en side endres så sjekkes URLen og mailadressen.<br /><br />Svartelisten vil ikke berøre dine allerede registrerte medlemmer."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Eksakt treff vil bare treffe på eksakt frase. Global treff vil treffe på alt som inneholder frasen.Eksempelvis så vil global treff på http://www.yahoo.com/ treffe på alle sider som har http://www.yahoo.com/ i sin URL,mens eksakt vil bare treffe domener med kun denne URL http://www.yahoo.com/ ."; // 5.2.0
$LNG['a_man_ban_string'] = "Frase"; // 5.2.0
$LNG['a_man_ban_field'] = "Felt"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" har blitt tillagt svartelisten."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Håndtere egendefinerte sider"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Rediger kommentarer"; // 5.0
$LNG['a_man_rev_enter'] = "For å håndtere kommentarene, legg inn brukerens brukernavn nedenfor."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Kommentar"; // 5.0
$LNG['a_man_rev_date'] = "Dato"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Meny";
$LNG['a_menu_main'] = "Hovedside"; // 5.0
$LNG['a_menu_approve'] = "Godkjenn nye medlemmer";
$LNG['a_menu_approve_edits'] = "Godkjenn endrede medlemmer"; // 5.2.0
$LNG['a_menu_manage'] = "Rediger brukerne"; // 4.2.0
$LNG['a_menu_settings'] = "Endre innstillingene"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Profanity Filter"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Svarteliste"; // 5.2.0
$LNG['a_menu_backup'] = "Backup database"; // 5.2.0
$LNG['a_menu_skins'] = "Skins og kategorier"; // 5.0
$LNG['a_menu_approve_reviews'] = "Godta nye kommentarer"; // 5.0
$LNG['a_menu_manage_reviews'] = "Endre kommentarer"; // 5.0
$LNG['a_menu_email'] = "Send mail til brukerne";
$LNG['a_menu_delete_review'] = "Slett kommentar";
$LNG['a_menu_logout'] = "Logg ut";
$LNG['a_menu_delete'] = "Slett bruker";
$LNG['a_menu_edit'] = "Endre bruker";
$LNG['a_menu_create_page'] = "Create Custom Page"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Manage Custom Pages"; // 5.1.0
$LNG['a_header_members'] = "Brukere"; // 5.0
$LNG['a_header_settings'] = "Innstillinger"; // 5.0
$LNG['a_header_tools'] = "Verktøy"; // 5.2.0
$LNG['a_header_reviews'] = "Kommentarer"; // 5.0
$LNG['a_header_pages'] = "Custom Pages"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Endre innstillinger";
$LNG['a_s_help'] = "Help"; // 5.1.0

$LNG['a_s_general'] = "Generelt";
$LNG['a_s_admin_password'] = "Admin passord";
$LNG['a_s_list_name'] = "Navnet på din toppliste";
$LNG['a_s_list_url'] = "URL til katalogen som topplisten finnes i";
$LNG['a_s_default_language'] = "Standard språk";
$LNG['a_s_your_email'] = "Din mailadresse";

$LNG['a_s_sql'] = "SQL innstillinger";
$LNG['a_s_sql_type'] = "Database Type"; // 4.1.0
$LNG['a_s_sql_host'] = "vert";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Brukernavn";
$LNG['a_s_sql_password'] = "Passord";

$LNG['a_s_ranking'] = "Rangeringsinnstillinger";
$LNG['a_s_num_list'] = "Antall medlemmer å vise pr side"; // 5.0
$LNG['a_s_ranking_period'] = "Rangeringsperiode"; // 5.0
$LNG['a_s_ranking_method'] = "Rangeringsmetode"; // 5.0
$LNG['a_s_ranking_average'] = "Ranger etter gjennomsnitt eller bare %s"; // 5.0
$LNG['a_s_featured_member'] = 'Omtalt bruker - Du må legge til {$featured_member} til filen wrapper.html etter du skrur dette på .'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Antall medlemmer å bruke _top skin for";
$LNG['a_s_ad_breaks'] = "Vis reklame etter disse rangeringene (skill med komma)";
$LNG['a_s_fill_blank_rows'] = "Fyll blanke rader med en melding som sier \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_members'] = "Brukerinnstillinger";
$LNG['a_s_active_default'] = "Nye medlemmer skal godkjennes før de dukker opp på listen";
$LNG['a_s_active_default_review'] = "Nye kommentarer skal bli godkjent før de publiseres";
$LNG['a_s_delete_after'] = "Slett inaktive brukere etter så mange dager:"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Send en email til deg når nye medlemmer registrer seg";
$LNG['a_s_email_admin_on_review'] = "Email admin when a new review is posted"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Medlemmenes maksimum bredde på banner(sett til 0 for å slå av)";  // 4.2.0
$LNG['a_s_max_banner_height'] = "Medlemmenes maksimum høyde på banner (sett til 0 for å slå av)"; // 4.2.0
$LNG['a_s_defbanner'] = "Standard banner som medlemmer som benyttes for dem som ikk legger inn noen banner";

$LNG['a_s_button'] = "Knappinnstillinger";
$LNG['a_s_ranks_on_buttons'] = "Vil du ha dine medlemmers rangering på deres knapper. Se <a href=\"http://www.aardvarkind.com/topsitesphp/manual/\" target=\"_blank\">manualen</a> for detaljer. Velg bare dette hvis du har lest denne delen av manualen."; // 4.2.0
$LNG['a_s_stat_buttons'] = "Statistikk knapper"; // 4.2.0
$LNG['a_s_button_url'] = "<b>Hvis nei</b> - URL til knappen du vil skal dukke opp på medlemmenes sider"; // 4.0
$LNG['a_s_button_dir'] = "<b>Hvis ja</b> - URL til katalogen disse bildene er i"; // 4.0
$LNG['a_s_button_ext'] = "<b>Hvs ja</b> - filenderlse på disse knappene (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "<b>Hvis ja</b> - Antall slike knapper som du har laget. Jo flere du lager - jo mere ressurser vil bli benyttet av scriptet"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gateway side for å forhindre juksing på treff inn";
$LNG['a_s_captcha'] = "Slå på ordverifikasjon ved registrering (effektivt mot spannere)"; // 4.2.2
$LNG['a_s_security_question'] = "Sikkerhetsspørsmål og svar for å blokke ut spammere (la være blank for å deaktivere) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Andre innstillinger";
$LNG['a_s_search'] = "Søk";
$LNG['a_s_timeoffset'] = "Tidsinnstillnger for din server";

$LNG['a_s_on'] = "På";
$LNG['a_s_off'] = "Av";
$LNG['a_s_days'] = "Dager";
$LNG['a_s_months'] = "Måneder";
$LNG['a_s_weeks'] = "Uker"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nei";
$LNG['a_s_answer'] = "Svar"; // 5.2.0

$LNG['a_s_updated'] = "Dine instillinger har blitt endret.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Skins og kategorier"; // 5.0
$LNG['a_skins_default'] = "Standard Skin"; // 5.0
$LNG['a_skins_set_default'] = "Angi standard Skin"; // 5.0
$LNG['a_skins_anon'] = "Anonym"; // 5.0
$LNG['a_skins_default_done'] = "Standard skin har blitt aktivert."; // 5.0
$LNG['a_skins_categories_done'] = "Kategori skin har blitt satt."; // 5.0
$LNG['a_skins_new_category_done'] = "den nye kategorien er blitt opprettet."; // 5.0
$LNG['a_skins_delete_done'] = "kategorien er blitt slettet."; // 5.0
$LNG['a_skins_edit_done'] = "Kategorein har blitt endret."; // 5.0
$LNG['a_skins_delete_error'] = "The category cannot be deleted because you must have at least one category."; // 5.1.0
$LNG['a_skins_invalid_skin'] = "Ugyldig skin: %s.  Vær vennlig å forsøk igjen."; // 5.0
$LNG['a_skins_categories'] = "Kategorier"; // 5.0
$LNG['a_skins_new_category'] = "Lag ny kategori"; // 5.0
$LNG['a_skins_set_skins'] = "Angi kategori skin"; // 5.0
$LNG['a_skins_edit_category'] = "Endre kategori"; // 5.0
$LNG['a_skins_category_name'] = "Kategori navn"; // 5.0
$LNG['a_skins_diff_skins'] = "Hvis du vil ha forskjellige skin for hver kategori, velg nedenfor.."; // 5.0
?>
