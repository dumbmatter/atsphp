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
$translation = 'Finnish (Suomi)';
$translator_name = 'Pekka Pelkonen';
$translator_email = 'pekka.pelkonen@gmail.com';
$translator_url = 'http://www.paimiowoodland.net/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "L‰het‰";
$LNG['g_username'] = "K‰ytt‰j‰nimi";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Otsikko";
$LNG['g_description'] = "Kuvaus";
$LNG['g_category'] = "Kategoria"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Bannerin URL";
$LNG['g_password'] = "Salasana";
$LNG['g_average'] = "Keskiarvo";
$LNG['g_today'] = "T‰n‰‰n";
$LNG['g_yesterday'] = "Eilen";
$LNG['g_daily'] = "P‰ivitt‰inen"; // 5.0
$LNG['g_this_month'] = "T‰ss‰ kuussa"; // 5.0
$LNG['g_last_month'] = "Viime kuussa"; // 5.0
$LNG['g_monthly'] = "Kuukausittain"; // 5.0
$LNG['g_this_week'] = "T‰m‰ viikko"; // 5.0
$LNG['g_last_week'] = "Viime viikko"; // 5.0
$LNG['g_weekly'] = "Viikoittain"; // 5.0
$LNG['g_pv'] = 'Katseluja'; // 5.0
$LNG['g_overall'] = 'Yhteens‰'; // 5.0
$LNG['g_in'] = 'Sis‰‰n'; // 5.0
$LNG['g_out'] = 'Ulos'; // 5.0
$LNG['g_unq_pv'] = "Uniikkeja katseluja"; // 5.0
$LNG['g_tot_pv'] = "Katseluja yhteens‰"; // 5.0
$LNG['g_unq_in'] = "Uniikkeja sis‰‰n"; // 5.0
$LNG['g_tot_in'] = "Sis‰‰n yhteens‰"; // 5.0
$LNG['g_unq_out'] = "Uniikkeja ulos"; // 5.0
$LNG['g_tot_out'] = "Yhteens‰ ulos"; // 5.0
$LNG['g_invalid_u_or_p'] = "V‰‰r‰ k‰ytt‰j‰tunnus tai salasana. Yrit‰ uudelleen."; // 5.0
$LNG['g_invalid_u'] = "V‰‰r‰ k‰ytt‰j‰tunnus. Yrit‰ uudelleen."; // 5.0
$LNG['g_invalid_p'] = "V‰‰r‰ salasana. Yrit‰ uudelleen."; // 5.0
$LNG['g_session_expired'] = "Istuntosi on p‰‰ttynyt. Yrit‰ uudelleen."; // 5.0
$LNG['g_error'] = "Virhe"; // 5.0
$LNG['g_delete_install'] = "Turvallisuuden takia sinun t‰ytyy poistaa install- hakemisto ennen skriptin toimimista."; // 5.0
$LNG['g_ip'] = "IP Osoite"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Muokkaa Tunnusta";
$LNG['edit_info_edited'] = "Tunnuksesi on muokattu onnistuneesti.";
$LNG['edit_password_blank'] = "J‰t‰ tyhj‰ksi, jos haluat s‰ilytt‰‰ nykyisen salasanasi"; // 4.0
$LNG['edit_delay'] = "Sivuston nimen/URL:n muutoksissa yll‰pidon t‰ytyy hyv‰ksy‰ ne ennen, kuin ne tulevat voimaan."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Toplistan Gateway Sivu";
$LNG['gateway_text'] = "Huijauksen esto on p‰‰ll‰, klikkaa alla olevista linkeist‰ p‰‰st‰ksesi toplistalle.";
$LNG['gateway_vote'] = "Sis‰‰n ja ‰‰ni";
$LNG['gateway_no_vote'] = "Sis‰‰n ‰‰nest‰m‰tt‰"; // 5.0

// Install
$LNG['install_header'] = "Install";
$LNG['install_welcome'] = "Tervetuloa Aardvark Topsites PHP 5:een. T‰yt‰ alla olevat tiedot asentaaksesi skriptin.";
$LNG['install_sql_prefix'] = "Taulun etuliite - vaihda t‰m‰, jos sinulla on useampi toplista samassa tietokannassa";
$LNG['install_error_chmod'] = "Ei pystynyt kirjoittamaan settings_sql.php tiedostoon. Varmista ett‰ CHMOD on 666 settings_sql.php tiedostossa.";
$LNG['install_error_sql'] = "SQL tietokantaan ei saatu yhteytt‰. Ole hyv‰ ja tarkista SQL asetukset.";
$LNG['install_done'] = "Toplistasi on asennettu. Poista t‰m‰ hakemisto nyt.";
$LNG['install_your'] = "Sinun Toplistasi";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manuaali";
$LNG['upgrade_header'] = "P‰ivit‰";
$LNG['upgrade_welcome'] = "Tervetuloa Aardvark Topsites PHP 5:een. Ennen kuin p‰ivit‰t, tee tiedoista varmuuskopiot.";
$LNG['upgrade_version'] = "Varmista ett‰ p‰ivit‰t versiosta %s."; // 5.1.0
$LNG['upgrade_error_version'] = "P‰ivitt‰mist‰ suositellaan vain Aardvark Topsites PHP 4.1.0 tai uudempaan.";
$LNG['upgrade_done'] = "Sinun toplistasi on p‰ivitetty. Poista t‰m‰ hakemisto nyt.";
$LNG['install_mailing_list'] = "Jos haluat liitty‰ Aardvark Topsites PHP:n postituslistalle, laita s‰hkˆpostiosoitteesi alle. Postia tulee vain, kun on t‰rkeit‰ ilmoituksia scripteist‰, kuten uusi julkaisu tai turvallisuutta koskeva ilmoitus."; // 5.2.0

// Join
$LNG['join_header'] = "Liity";
$LNG['join_enter_text'] = "Kirjoita alla olevan kuvan teksti:"; // 4.2.2
$LNG['join_enter_text_read'] = "Etkˆ pysty lukemaan?"; // 5.2.0
$LNG['join_user'] = "K‰ytt‰j‰"; // 5.0
$LNG['join_website'] = "Sivusto"; // 5.0
$LNG['join_banner_size'] = "(Suurin sallittu koko: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Kirjoita k‰ytt‰j‰nimi: k‰yt‰ vain kirjaimia, numeroita ja viivaa."; // 5.0
$LNG['join_error_username_duplicate'] = "Valitse toinen k‰ytt‰j‰nimi: k‰ytt‰j‰nimesi on jo k‰ytˆss‰."; // 5.0
$LNG['join_error_url'] = "Kirjoita URL.";
$LNG['join_error_email'] = "Kirjoita email-osoite.";
$LNG['join_error_title'] = "Kirjoita sivusi otsikko.";
$LNG['join_error_password'] = "Kirjoita salasana.";
$LNG['join_error_confirm_password'] = "Salasanat eiv‰t ole oikein."; // 5.2.0
$LNG['join_error_urlbanner'] = "Laita oikea banneri. J‰t‰ tyhj‰ksi, jos sinulla ei ole."; // 5.2.0
$LNG['join_error_time'] = "ƒl‰ p‰ivit‰ liittymisen vahvistussivua."; // 4.2.0
$LNG['join_error_captcha'] = "Kirjoittamasi sana ei t‰sm‰‰ kuvan sanan kanssa."; // 4.2.2
$LNG['join_error_question'] = "Vastauksesi on v‰‰rin. Korjaa t‰m‰, jotta todistat olevasi ihminen etk‰ botti."; // 5.2.0
$LNG['join_thanks'] = "Kiitos liittymisest‰si! Laita t‰m‰ koodinp‰tk‰ ilmoitetulle sivulle, jotta tilastointi alkaisi toimia.";
$LNG['join_change_warning'] = "Jos muutat koodia, se ei ehk‰ toimi.";
$LNG['join_welcome'] = "Tervetuloa %s";
$LNG['join_welcome_admin'] = "Uusi j‰sen on liittynyt toplistaasi.";
$LNG['join_approve'] = "Kiitokset liittymisest‰! Sivusi n‰kyv‰t listalla, kun toplistan yll‰pit‰j‰ hyv‰ksyy ne. Saat s‰hkˆpostin, joka sis‰lt‰‰ lis‰‰ tietoja kun sivusi on hyv‰ksytty."; // 5.2.0
$LNG['join_type'] = "Tunnuksen tyyppi"; // 5.1.0
$LNG['join_standard'] = "Vakio"; // 5.1.0
$LNG['join_error_top'] = "Virhe lˆydetty l‰hetyksen yhteydess‰. Ole hyv‰ ja korjaa virhe."; // 5.2.0
$LNG['join_ban_top'] = "L‰hetyksesi sis‰lt‰‰ materiaalia, jonka on kielt‰nyt toplistan yll‰pit‰j‰."; // 5.2.0
$LNG['join_security'] = "Turvallisuus"; // 5.2.0
$LNG['join_confirm_password'] = "Hyv‰ksy salasana"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Linkin koodi"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Kadonnut salasana"; // 5.0
$LNG['lost_pw_forgot'] = "Oletko unohtanut salasanasi?"; // 5.0
$LNG['lost_pw_get'] = "Vastaanota salasana!"; // 5.0
$LNG['lost_pw_emailed'] = "Ole hvy‰ ja katso s‰hkˆpostisi saadaksesi lis‰‰ informaatiota."; // 5.0
$LNG['lost_pw_email'] = "Saadaksesi uuden salasanan sinun pit‰‰ menn‰ seuraavaan osoitteeseen:"; // 5.0
$LNG['lost_pw_new'] = "Kirjoita uusi salasana"; // 5.0
$LNG['lost_pw_set_new'] = "Aseta uusi salasana"; // 5.0
$LNG['lost_pw_finish'] = "Salasanasi on nyt vaihdettu valitsemaasi salasanaan."; // 5.0

// Main Page
$LNG['main_header'] = "J‰rjestys"; // 5.0
$LNG['main_all'] = "Kaikki sivut"; // 4.2.0
$LNG['main_method'] = "J‰rjestystapa";
$LNG['main_members'] = "J‰senet";
$LNG['main_menu_rankings'] = "Lista";
$LNG['main_menu_join'] = "Liity";
$LNG['main_menu_random'] = "Satunnainen j‰sen";
$LNG['main_menu_search'] = "Etsi";
$LNG['main_menu_lost_code'] = "Kadonnut Koodi"; // 5.0
$LNG['main_menu_lost_password'] = "Kadonnut Salasana"; // 5.0
$LNG['main_menu_edit'] = "Muokkaa K‰ytt‰j‰n Infoa";
$LNG['main_menu_user_cp'] = "K‰ytt‰j‰n Hallintapaneeli"; // 5.0
$LNG['main_featured'] = "Korostettu j‰sen"; // 4.0.2
$LNG['main_executiontime'] = "Skriptin toteutus aika"; // 4.0
$LNG['main_queries'] = "SQL tiedustelut"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statistiikat";
$LNG['table_unique'] = "Uniikit";
$LNG['table_total'] = "Yhteens‰";
$LNG['table_rank'] = "Sija";
$LNG['table_title'] = "Otsikko"; // 4.0
$LNG['table_description'] = "Kuvaus"; // 4.0
$LNG['table_movement'] = "Liike";
$LNG['table_up'] = "Ylˆs"; // 5.0
$LNG['table_down'] = "Alas"; // 5.0
$LNG['table_neutral'] = "Neutraali"; // 5.0
$LNG['table_your_site_here'] = "Sivusi t‰h‰n"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Arvostele";
$LNG['rate_message'] = "Ole hyv‰ ja anna arvosanasi ja arvostelusi  %s:sta alle."; // 5.2.0
$LNG['rate_rating'] = "Arvosana";
$LNG['rate_review'] = "Arvostelu - HTML kielletty"; // 5.0
$LNG['rate_thanks'] = "Kiitos arvostelusta.";
$LNG['rate_error'] = "Olet jo arvostellut t‰m‰n sivun.";
$LNG['rate_back'] = "Takaisin statistiikkoihin";
$LNG['rate_email_admin'] = "Uusi arvostelu on tehty toplistalla."; // 5.1.0

// Search
$LNG['search_header'] = "Etsi";
$LNG['search_off'] = "Toiminto on otettu pois k‰ytˆst‰.";
$LNG['search_no_sites'] = "Anteeksi, mutta yksik‰‰n sivu ei vastannut kriteerej‰."; // 5.0
$LNG['search_prev'] = "Edellinen"; // 3.2.1
$LNG['search_next'] = "Seuraava"; // 3.2.1
$LNG['search_displaying_results'] = "N‰ytet‰‰n %s - %s / %s tulosta haulle <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistiikat";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "J‰senyys alkoi"; // 5.0
$LNG['stats_rating_avg'] = "Arvostelun Keskiarvo";
$LNG['stats_rating_num'] = "Arvostelujen M‰‰r‰";
$LNG['stats_rate'] = "Arvostele T‰m‰ Sivu";
$LNG['stats_reviews'] = "Arvostelut";
$LNG['stats_allreviews'] = "N‰yt‰ Kaikki Arvostelut"; // 4.0
$LNG['stats_week'] = "Viikko"; // 5.0
$LNG['stats_highest'] = "Korkein"; // 5.0
$LNG['stats_overall'] = "Tilastot alusta asti"; // 5.2.0
$LNG['stats_overall_average'] = "Keskiarvo (Viimeiset 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Yhteens‰ (Alusta asti)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sivut"; // 4.0
$LNG['ssi_new'] = "%s Uusinta J‰sent‰"; // 5.0
$LNG['ssi_all'] = "Kaikki Sivut"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "K‰ytt‰j‰n Hallintapaneeli"; // 5.0
$LNG['user_cp_login'] = "Kirjaudu"; // 5.0
$LNG['user_cp_logout'] = "Kirjaudu Ulos"; // 5.0
$LNG['user_cp_welcome'] = "Tervetuloa k‰ytt‰j‰n hallintapaneeliin. Vasemman reunan linkeist‰ voit hallita tunnustasi."; // 5.0
$LNG['user_cp_logout_message'] = "Olet nyt kirjautunut ulos k‰ytt‰j‰n hallintapaneelista."; // 5.0
$LNG['user_cp_login_long'] = "Kirjaudu sis‰‰n k‰ytt‰j‰nimell‰ ja salasanalla tai OpenID:ll‰si."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "OpenID:t‰ ei lˆydy t‰lt‰ serverilt‰ - %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Sinun t‰ytyy liitty‰ toplistaan ennen kuin voit k‰ytt‰‰ hallintapaneelia."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Virhe tapahtui kirjautuessa. Ole hyv‰ ja yrit‰ uudelleen."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Sinun t‰ytyy sallia p‰‰sy jatkaaksesi. Ole hyv‰ ja yrit‰ uudelleen."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Virhe serverill‰: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Et voi k‰ytt‰‰ k‰ytt‰j‰n hallintapaneelia ennenkuin sivustosi on hyv‰ksytty. Saat s‰hkˆpostia, kun sivustosi on hyv‰ksytty."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Hyv‰ksy Uusia J‰seni‰"; // 5.0
$LNG['a_approve'] = "Hyv‰ksy"; // 4.0
$LNG['a_approve_none'] = "Yht‰‰n j‰sent‰ ei odota hyv‰ksymist‰."; // 4.0
$LNG['a_approve_done'] = "J‰sen on hyv‰ksytty."; // 4.0
$LNG['a_approve_dones'] = "J‰senet on hyv‰ksytty."; // 4.0
$LNG['a_approve_sel'] = "Valitut:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Hyv‰ksy Muokattuja J‰seni‰"; // 5.2.0
$LNG['a_approve_edited_none'] = "Ei muokattavia j‰seni‰ odottamassa hyv‰ksymist‰."; // 5.2.0
$LNG['a_approve_edited_old'] = "Edellinen Otsikko ja URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Muokattu Otsikko ja URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Hylk‰‰"; // 5.2.0
$LNG['a_approve_edited_done'] = "Muutokset on hyv‰ksytty."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Muutokset on hyl‰tty."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Hyv‰ksy Uudet Arvostelut"; // 5.0
$LNG['a_approve_rev_none'] = "Yht‰‰n arvostelua ei odota hyv‰ksymist‰."; // 5.0
$LNG['a_approve_rev_done'] = "Arvostelu on hyv‰ksytty."; // 5.0
$LNG['a_approve_rev_dones'] = "Arvostelut on hyv‰ksytty."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Varmuuskopioi Tietokannasta"; // 5.2.0
$LNG['a_backup_warn'] = "T‰m‰ luo varmuuskopion j‰senist‰, tilastoista ja asetuksista. Jos sinulla on paljon j‰seni‰, saattaa menn‰ pidemm‰n aikaa luoda tiedostoa, jonka koko saattaa olla suuri."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Luo Erikoissivu"; // 5.1.0
$LNG['a_create_page_id'] = "Sivun ID - T‰t‰ k‰ytet‰‰n osoitteessa, joten voit k‰ytt‰‰ vain kirjaimia, numeroita, alaviivaa ja viivaa"; // 5.1.0
$LNG['a_create_page_error_id'] = "Sivun ID voi sis‰lt‰‰ vain kirjaimia, numeroita ja viivaa. Ole hyv‰ ja korjaa ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "ID:ll‰ lˆytyi jo sivu. Ole hvy‰ ja vaihda uuden sivun ID:t‰."; // 5.1.0
$LNG['a_create_page_created'] = "Sivu on luotu. Sinun pit‰‰ lis‰t‰ viel‰ linkki %s tiedostoon wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Poista J‰sen"; // 5.0
$LNG['a_del_headers'] = "Poista J‰seni‰"; // 5.0
$LNG['a_del_done'] = "J‰sen on poistettu."; // 5.0
$LNG['a_del_dones'] = "J‰senet on poistettu."; // 5.0
$LNG['a_del_warn'] = "Oletko varma ett‰ haluat poistaa %s?"; // 5.0
$LNG['a_del_multi'] = "n‰ist‰ %s j‰senist‰"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Poista Filtterˆity sana"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Poista Filtterˆityj‰ sanoja"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtterˆity sana on poistettu."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtterˆidyt sanat on poistettu."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Oletko varama ett‰ haluat poistaa n‰m‰ %s Filtterˆityjen sanojen listalta?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "n‰ist‰ %s sanoista"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Ep‰kelpa filtterˆidyn sanan ID. Ole hyv‰ ja yrit‰ uudelleen."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Poista Mustan Listan Merkinn‰t"; // 5.2.0
$LNG['a_del_ban_headers'] = "Poista mustan listan merkinn‰t"; // 5.2.0
$LNG['a_del_ban_done'] = "Mustan lsitan merkinn‰t on poistettu."; // 5.2.0
$LNG['a_del_ban_dones'] = "Mustan listan merkinn‰t on poistettu onnistuneesti."; // 5.2.0
$LNG['a_del_ban_warn'] = "Oletko varma, ett‰ haluat poistaa %s merkint‰‰ mustalta listalta?"; //5.2.0
$LNG['a_del_ban_multi'] = "n‰m‰ %s merkint‰‰"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Ep‰kelpo mustan listan ID. Ole hyv‰ ja yrit‰ uudelleen."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Poista erikoissivu"; // 5.1.0
$LNG['a_del_page_headers'] = "Poista Erikoissivuja"; // 5.1.0
$LNG['a_del_page_done'] = "Erikoissivu on poistettu."; // 5.1.0
$LNG['a_del_page_dones'] = "Erikoissivut on poistettu."; // 5.1.0
$LNG['a_del_page_warn'] = "Oletko varma ett‰ haluat poistaa n‰m‰ %s?"; //5.1.0
$LNG['a_del_page_multi'] = "n‰ist‰ %s sivuista"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Ep‰kelpo Erityissivun ID. Ole hyv‰ ja yrit‰ uudelleen."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Poista Arvostelu"; // 5.0
$LNG['a_del_rev_headers'] = "Poista Arvosteluja"; // 5.0
$LNG['a_del_rev_done'] = "Arvostelu on poistettu."; // 5.0
$LNG['a_del_rev_dones'] = "Arvostelut on poistettu.."; // 5.0
$LNG['a_del_rev_warn'] = "Oletko varma ett‰ haluat poistaa t‰m‰n arvostelun?"; //5.0
$LNG['a_del_rev_warns'] = "Oletko varma ett‰ haluat poistaa n‰m‰ arvostelut?"; //5.0
$LNG['a_del_rev_invalid_id'] = "V‰‰r‰ arvostelun ID. Yrit‰ uudestaan."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Muokkaa J‰sent‰Edit Member"; // 5.0
$LNG['a_edit_site_is'] = "T‰m‰ sivu on"; // 4.0
$LNG['a_edit_active'] = "Aktiivinen (Listattu)"; // 4.0
$LNG['a_edit_inactive'] = "Passiivinen (Listaamaton)"; // 5.0
$LNG['a_edit_edited'] = "J‰sen on muokattu.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Hallitse Filtteroituja sanoja"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtterˆity sana on muokattu."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Muokkaa Mustal Listan Merkintˆj‰"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Mustan list‰n merkinn‰t on muokattu onnistuneesti."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Hallitse satunnaisia sivuja"; // 5.1.0
$LNG['a_edit_page_content'] = "Sis‰ltˆ - Voit k‰ytt‰‰ HTML:‰‰ t‰‰ll‰"; // 5.1.0
$LNG['a_edit_page_edited'] = "Sivua on muokattu."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Muokkaa Arvostelua"; // 5.0
$LNG['a_edit_rev_edited'] = "Arvostelua on muokattu.";

// Admin > Email Members
$LNG['a_email_header'] = "S‰hkˆpostia J‰senille"; // 5.0
$LNG['a_email_subject'] = "Aihe"; // 4.2.0
$LNG['a_email_message'] = "Viesti"; // 4.2.0
$LNG['a_email_msg_sent'] = "S‰hkˆposti on l‰hetetty %s"; // 5.0
$LNG['a_email_not_sent'] = "S‰hkˆpostia ei voitu l‰hett‰‰ %s"; // 5.0
$LNG['a_email_sent'] = "%s j‰senet vastaanottivat viestin."; // 4.2.0
$LNG['a_email_failed'] = "%s eiv‰t vastaanottaneet viesti‰."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Olet nyt kirjautunut ulos Hallintapaneelista."; // 5.0

// Admin > Main
$LNG['a_header'] = "Hallinta"; // 5.0
$LNG['a_main'] = "Tervetuloa Hallintaan. K‰yt‰ vasemman reunan linkkej‰ hallitaksesi toplistaasi."; // 5.0
$LNG['a_main_approve'] = "Yksi sivu odottaa hyv‰ksymist‰si."; // 5.0
$LNG['a_main_approves'] = "%s sivua odottaa hyv‰ksymist‰si."; // 5.0
$LNG['a_main_approve_edit'] = "Yksi (1) sivusto odottaa hyv‰ksymist‰."; // 5.2.0
$LNG['a_main_approve_edits'] = "%s sivustoa odottaa hyv‰ksymist‰."; // 5.2.0
$LNG['a_main_approve_rev'] = "Yksi arvostelu odottaa hyv‰ksymist‰si."; // 5.0
$LNG['a_main_approve_revs'] = "%s arvostelua odottaa hyv‰ksymis‰si."; // 5.0
$LNG['a_main_your'] = "Versiosi"; // 5.0
$LNG['a_main_latest'] = "Uusin versio"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Hallitse J‰seni‰"; // 5.0
$LNG['a_man_actions'] = "Toiminnot"; // 4.2.0
$LNG['a_man_edit'] = "Muokkaa"; // 4.2.0
$LNG['a_man_delete'] = "Poista"; // 4.2.0
$LNG['a_man_email'] = "L‰het‰ S‰hkˆpostia"; // 4.2.0
$LNG['a_man_all'] = "Valitse Kaikki"; // 5.0
$LNG['a_man_none'] = "Poista Valinnat"; // 5.0
$LNG['a_man_del_sel'] = "Poista Valitut"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Kieltosana Filtteri"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Lis‰‰ sana ja korvaava sana alle. Esimerkiksi \"pask\" sanakentt‰‰n ja \"p***\" korvaava sana kentt‰‰n."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Tarkka yhteensopivuus est‰‰ vain tarkan ilmaisun sanasta. Laaja taas etsii sanoista tietty‰ ilmaisua esim. \"hel\" olisi sanoissa helsinki ja helvetti."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Sana"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Korvaava sana"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Yhteensopivuus"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Tarkka"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Laaja"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Est‰ sana"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" on lis‰tty kielto filtteriin."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Musta Lista"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Est‰‰ksesi jonkun p‰‰syn toplistallesi sinun t‰ytyy t‰ytt‰‰ alla oleva kaavake. Kun j‰sen yritt‰‰ liitty‰, URL, s‰hkˆposti, k‰ytt‰j‰tunnut ja IP osoite tarkistetaan. Kun sivusto on muokattu, URL ja s‰hkˆpostiosoite tarkistetaan.<br /><br />Musta lista ei vaikuta jo olemassa oleviin j‰seniin."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Tarkka vertailu vaikuttaa vain tarkkaan merkkijonoon. Laaja vertailu vaikuttaa kaikkeen, jonka merkkijonosta lˆytyy vertailtava merkkijono. Joten laajalla vertailulla http://www.yahoo.com/ vaikuttaa kaikkeen, mist‰ lˆytyy http://www.yahoo.com/ URL:sta, toisin kuin vertailtaessa tarkalla vertailulla http://www.yahoo.com/ vaikuttaa vain tuohon URL:iin."; // 5.1.0
$LNG['a_man_ban_string'] = "Merkkijono"; // 5.2.0
$LNG['a_man_ban_field'] = "Kentt‰"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" on lis‰tty mustalle listalle."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Hallitse erikoisia sivuja"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Hallitse Arvosteluja"; // 5.0
$LNG['a_man_rev_enter'] = "Hallitaksesi sivun arvostelua, anna j‰senen k‰ytt‰j‰nimi alle."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Arvostelu"; // 5.0
$LNG['a_man_rev_date'] = "P‰iv‰ys"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Valikko";
$LNG['a_menu_main'] = "Hallinnan Etusivu"; // 5.0
$LNG['a_menu_approve'] = "Hyv‰ksy Uusia J‰seni‰";
$LNG['a_menu_approve_edits'] = "Hyv‰ksu Muokattuja J‰seni‰"; // 5.2.0
$LNG['a_menu_manage'] = "Hallitse J‰seni‰"; // 4.2.0
$LNG['a_menu_settings'] = "Muuta Asetuksia"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Kieltosana Filtteri"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Musta lista"; // 5.2.0
$LNG['a_menu_backup'] = "Varmuuskopioi Tietokanta"; // 5.2.0
$LNG['a_menu_skins'] = "Ulkoasut ja Kategoriat"; // 5.0
$LNG['a_menu_approve_reviews'] = "Hyv‰ksy Uusia Arvosteluja"; // 5.0
$LNG['a_menu_manage_reviews'] = "Hallitse Arvosteluja"; // 5.0
$LNG['a_menu_email'] = "S‰hkˆpostia J‰senille";
$LNG['a_menu_delete_review'] = "Poista Arvostelu";
$LNG['a_menu_logout'] = "Kirjaudu Ulos";
$LNG['a_menu_delete'] = "Poista J‰sen";
$LNG['a_menu_edit'] = "Hallitse J‰seni‰";
$LNG['a_menu_create_page'] = "Luo Erikoissivu"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Hallitse Erikoissivuja"; // 5.1.0
$LNG['a_header_members'] = "J‰senet"; // 5.0
$LNG['a_header_settings'] = "Asetukset"; // 5.0
$LNG['a_header_tools'] = "Tyˆkalut"; // 5.2.0
$LNG['a_header_reviews'] = "Arvostelut"; // 5.0
$LNG['a_header_pages'] = "Erikoissivut"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Muuta Asetuksia";
$LNG['a_s_help'] = "Apua"; // 5.1.0

$LNG['a_s_general'] = "Perusasetukset";
$LNG['a_s_admin_password'] = "Hallinnon salasana";
$LNG['a_s_list_name'] = "Toplistasi nimi";
$LNG['a_s_list_url'] = "URL toplistan hakemistoon";
$LNG['a_s_default_language'] = "Oletuskieli";
$LNG['a_s_your_email'] = "S‰hkˆpostiosoitteesi";

$LNG['a_s_sql'] = "SQL Asetukset";
$LNG['a_s_sql_type'] = "Tietokannan Tyyppi"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Tietokanta";
$LNG['a_s_sql_username'] = "K‰ytt‰j‰tunnus";
$LNG['a_s_sql_password'] = "Salasana";

$LNG['a_s_ranking'] = "Arvosteluasetukset";
$LNG['a_s_num_list'] = "J‰senten m‰‰r‰ per sivu"; // 5.0
$LNG['a_s_ranking_period'] = "Arvostelun Aika"; // 5.0
$LNG['a_s_ranking_method'] = "Arvostelutapa"; // 5.0
$LNG['a_s_ranking_average'] = "Arvostele keskiarvolla tai %s"; // 5.0
$LNG['a_s_featured_member'] = 'Korostettu j‰sen - Sinun t‰ytyy lis‰t‰ {$featured_member} tiedostoon wrapper.html kun olet laittanut t‰m‰n p‰‰lle.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "J‰senten m‰‰r‰, jotka k‰ytt‰v‰t _top teemaa";
$LNG['a_s_ad_breaks'] = "N‰yt‰ mainokset n‰iden sijoitusten j‰lkeen (erottele pilkulla) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "T‰yt‰ tyhj‰t rivit viestill‰ \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "J‰senten Asetukset";
$LNG['a_s_active_default'] = "Hyv‰ksy uudet j‰senet ennen listausta";
$LNG['a_s_active_default_review'] = "Hyv‰ksy uudet arvostelut ennen listausta";
$LNG['a_s_delete_after'] = "Poista passiiviset j‰senet n‰in monen p‰iv‰n j‰lkeen (0 tarkoittaa pois p‰‰lt‰)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "S‰hkˆpostia hallinnolle, kun uusi j‰sen liittyy listaan"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "S‰hkˆpostia hallinnolle, kun uusi arvostelu on annettu"; // 5.1.0
$LNG['a_s_max_banner_width'] = "J‰senen suurin bannerin leveys (0 tarkoittaa pois p‰‰lt‰) "; // 4.2.0
$LNG['a_s_max_banner_height'] = "J‰senen suurin bannerin korkeus (0 tarkoittaa pois p‰‰lt‰) "; // 4.2.0
$LNG['a_s_default_banner'] = "Vakiobanneri j‰senille joilla ei ole omaa";

$LNG['a_s_button'] = "ƒ‰nestysbuttonin Asetukset";
$LNG['a_s_ranks_on_buttons'] = "Sijoitukset ƒ‰nestysbuttoneissa -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Tilasto Buttoneissa"; // 4.2.0
$LNG['a_s_button_url'] = "Jos Kyll‰/ei - URL vakiobuttoniin, jonka h‰luat n‰kyv‰n j‰senen sivulla"; // 4.0
$LNG['a_s_button_dir'] = "Jos Kyll‰ - URL buttonien kansioon"; // 4.0
$LNG['a_s_button_ext'] = "Jos Kyll‰ - Buttonien tyyppi (gif, png, jpg, jne.)"; // 4.0
$LNG['a_s_button_num'] = "Jos Kyll‰ - Tekemiesi buttonien m‰‰r‰"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-yst‰v‰llisi‰ linkkej‰ - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gateway sivu est‰‰ksesi huijatut ‰‰net sis‰‰n";
$LNG['a_s_captcha'] = "Sanatunnistus liittymiseen (suojaa spammaajia vastaan) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Turvallisuuteen liittyv‰t kysymykset ja vastaukset est‰‰ksesi sp‰mmereit‰ (j‰t‰ tyhj‰ksi poistaaksesi k‰ytˆst‰) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Muut Asetukset";
$LNG['a_s_search'] = "Etsi";
$LNG['a_s_time_offset'] = "Aikakompensaatio serverilt‰ (tunneissa)";

$LNG['a_s_on'] = "P‰‰ll‰";
$LNG['a_s_off'] = "Pois";
$LNG['a_s_days'] = "P‰iv‰‰";
$LNG['a_s_months'] = "Kuukautta";
$LNG['a_s_weeks'] = "Viikkoa"; // 4.2.0
$LNG['a_s_yes'] = "Kyll‰";
$LNG['a_s_no'] = "Ei";
$LNG['a_s_answer'] = "Vastaa"; // 5.2.0

$LNG['a_s_updated'] = "Asetuksesi on p‰ivitetty.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Ulkoasut ja Kategoriat"; // 5.0
$LNG['a_skins_default'] = "Vakio Ulkoasu"; // 5.0
$LNG['a_skins_set_default'] = "Aseta Vakio Ulkoasu"; // 5.0
$LNG['a_skins_anon'] = "Anonyymi"; // 5.0
$LNG['a_skins_default_done'] = "Vakio Ulkoasu on asetettu."; // 5.0
$LNG['a_skins_categories_done'] = "Kategoria Ulkoasut on asetettu."; // 5.0
$LNG['a_skins_new_category_done'] = "Uusi kategoria on luotu."; // 5.0
$LNG['a_skins_delete_done'] = "Kategoria on poistettu."; // 5.0
$LNG['a_skins_delete_error'] = "Kategoriaa ei voitu poistaa, koska pit‰‰ olla ainakin yksi kategoria."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategoriaa on muokattu."; // 5.0
$LNG['a_skins_invalid_skin'] = "Ep‰kelpo ulkoasu: %s.  Ole hyv‰ ja yrit‰ uudelleen."; // 5.0
$LNG['a_skins_categories'] = "Kategoriat"; // 5.0
$LNG['a_skins_new_category'] = "Luo Uusi Kategoria"; // 5.0
$LNG['a_skins_set_skins'] = "Aseta Kategorian Ulkoasu"; // 5.0
$LNG['a_skins_edit_category'] = "Muokkaa Kategoriaa"; // 5.0
$LNG['a_skins_category_name'] = "Kategorian Nimi"; // 5.0
$LNG['a_skins_diff_skins'] = "Jos haluat eri ulkoasut eri kategorioihin, valitse ne alta."; // 5.0
?>
