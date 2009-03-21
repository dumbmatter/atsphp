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
$translation = 'Bosnian (Bosanski)';
$translator_name = 'Hame';
$translator_email = 'hame@PortalBiH.com';
$translator_url = 'http://www.PortalBiH.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "utf-8";

// Globalno
$LNG['g_form_submit_short'] = "Dalje";
$LNG['g_username'] = "Korisnik";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Tajtel";
$LNG['g_description'] = "Opis";
$LNG['g_category'] = "Kategorija"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Baner URL";
$LNG['g_password'] = "Lozinka";
$LNG['g_average'] = "Prosjek";
$LNG['g_today'] = "Danas";
$LNG['g_yesterday'] = "Juce";
$LNG['g_daily'] = "Dnevno"; // 5.0
$LNG['g_this_month'] = "Ovaj Mjesec"; // 5.0
$LNG['g_last_month'] = "Prosli Mjesec"; // 5.0
$LNG['g_monthly'] = "Mjesecno"; // 5.0
$LNG['g_this_week'] = "Ove Sedmice"; // 5.0
$LNG['g_last_week'] = "Prosle Sedmice"; // 5.0
$LNG['g_weekly'] = "Sedmicno"; // 5.0
$LNG['g_pv'] = 'Pregledani Stranica'; // 5.0
$LNG['g_overall'] = 'Ukupno'; // 5.0
$LNG['g_in'] = 'Ulaz'; // 5.0
$LNG['g_out'] = 'Izlaz'; // 5.0
$LNG['g_unq_pv'] = "Statik PSs"; // 5.0
$LNG['g_tot_pv'] = "Ukupno PSs"; // 5.0
$LNG['g_unq_in'] = "Statik Ulaz"; // 5.0
$LNG['g_tot_in'] = "Ukupno Ulaz"; // 5.0
$LNG['g_unq_out'] = "Statik Izlaz"; // 5.0
$LNG['g_tot_out'] = "Ukupno Izlaz"; // 5.0
$LNG['g_invalid_u_or_p'] = "Greska u Korisnickom imenu ili lozinki. Pokusajte Ponovo."; // 5.0
$LNG['g_invalid_u'] = "Pogresno Korisnicko Ime. Pokusaj Te Ponovo."; // 5.0
$LNG['g_invalid_p'] = "Pogresna Lozinka. Pokusaj Te Ponovo."; // 5.0
$LNG['g_session_expired'] = "Posjeta Iztekla. Pokusaj Te Ponovo."; // 5.0
$LNG['g_error'] = "Greska"; // 5.0
$LNG['g_delete_install'] = "Za sigurnost, mora te izbrisati direktoru instalacije prije nego sto pokrenete skriptu."; // 5.0
$LNG['g_ip'] = "IP Adresa"; // 5.2.0

// Izmjeni Akaunt
$LNG['edit_header'] = "Izmjeni Akaunt";
$LNG['edit_info_edited'] = "Akaunt Promjenjen.";
$LNG['edit_password_blank'] = "Ostavite Prazno za istu lozinku"; // 4.0
$LNG['edit_delay'] = "Upisite naziv vaseg sajta i URL koji ce se morati odobriti sa strane administratora prije promjena."; // 5.2.0

// Gejtvej Stranica
$LNG['gateway_header'] = "Aarkdvark Top Sajt Gejtvej Stranica";
$LNG['gateway_text'] = "Dase nebi varalo, ubacili smo ovu Gejtvej Stranicu.";
$LNG['gateway_vote'] = "-= Ulaz sa Glasanjem =-";
$LNG['gateway_no_vote'] = "Ulaz bez Glasanja"; // 5.0

// Instalacija
$LNG['install_header'] = "Instalacija";
$LNG['install_welcome'] = "Dobro Dosli na Aardvark Topsites PHP 5.  Ispunite formu ispod za instalaciju skripte.";
$LNG['install_sql_prefix'] = "Table prefix - Samo promjenite ako imate vise od Jedne forme u Dejtabazi";
$LNG['install_error_chmod'] = "Niste uspjesno upisali settings_sql.php.  Zamjeni CHMOD 666 u settings_sql.php.";
$LNG['install_error_sql'] = "Nismo mogli napraviti konekciju za SQL dejtabazu.  Molimo vas ide te nazad i promjenite SQL Setove.";
$LNG['install_done'] = "Top Sajta uspjesno Instalirana. Izbrisite ovu direktoru odma.";
$LNG['install_your'] = "Vasa Top Sajt Lista ";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Uredjivanje";
$LNG['upgrade_header'] = "Apgrejd";
$LNG['upgrade_welcome'] = "Dobro Dosli na Aardvark Topsites PHP 5.  Prije Apgrejda, spasite vase podatke.";
$LNG['upgrade_version'] = "Provjerite dali radite apgrejd sa verzije %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Apgrejd moze samo za Aardvark Topsites PHP 4.1.0 ili vece.";
$LNG['upgrade_done'] = "Apgrejd je uspjesan. Izbrisite ovu direktoru odma.";
$LNG['install_mailing_list'] = "Ako se zelite uclaniti da dobijate novine od Aardvark Topsites PHP Mailing Liste, upisite vas email ispod.  Dobivacete rijetke novine koje izvaljuju nove verizije skripte i pronadjeni rupa u sigurnosti."; // 5.2.0

// Posalji Sajt
$LNG['join_header'] = "Posalji Link";
$LNG['join_enter_text'] = "Ukucaj slova ko na sliki ispod:"; // 4.2.2
$LNG['join_enter_text_read'] = "Nemozete Procitati?"; // 5.2.0
$LNG['join_user'] = "Korisnik"; // 5.0
$LNG['join_website'] = "Web Stranica"; // 5.0
$LNG['join_banner_size'] = "(Maximalna Velcina: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Ukucajte Korisnicko Ime. Koristite Slova, Brojeve i _ , - ."; // 5.0
$LNG['join_error_username_duplicate'] = "Korisnicko ime je zauzeto."; // 5.0
$LNG['join_error_url'] = "Ukucaj URL.";
$LNG['join_error_email'] = "Ukucajte Tacnu email adresu.";
$LNG['join_error_title'] = "Ukucajte glavi naslov za vasu stranicu.";
$LNG['join_error_password'] = "Ukucajte Lozinku.";
$LNG['join_error_confirm_password'] = "Lozinke se neslazu."; // 5.2.0
$LNG['join_error_urlbanner'] = "Ukucajte validni Baner.  Ostavite prazno ako nemate Baner-a."; // 5.2.0
$LNG['join_error_time'] = "Nemojte unovljivati ovu konfirmaciju [ F5 ]."; // 4.2.0
$LNG['join_error_captcha'] = "Rijec koju ste ukucali se neslaze sa slikom."; // 4.2.2
$LNG['join_error_question'] = "Odgovor Netacan.  Molimo vas popravite gresku za konfirmaciju da ste prava osoba a ne bot."; // 5.2.0
$LNG['join_thanks'] = "Hvala sto ste se Registrovali!  Da bi se pocelo glasati stavite ovaj Kod na vasu stranicu.";
$LNG['join_change_warning'] = "Ako promjenite Kod, Glasanje nece biti ispravno.";
$LNG['join_welcome'] = "Dobro Dosli na %s";
$LNG['join_welcome_admin'] = "Novi Korisnik je se registrovo za vasu Top Listu.";
$LNG['join_approve'] = "Hvala sto ste se uclanili!  Vas sajt ce biti postavljen na listi kad admin odobri. Dobicete email sa vise informacije kad vam admin odobri sajt."; // 5.2.0
$LNG['join_type'] = "Vrsta Akaunta"; // 5.1.0
$LNG['join_standard'] = "Obicno"; // 5.1.0
$LNG['join_error_top'] = "Greska Pronadjena u vasim podacima, molimo vas popravite gresku ispod."; // 5.2.0
$LNG['join_ban_top'] = "Vasi podaci imaju kontent koji je zabranjen sa strane toplist admina."; // 5.2.0
$LNG['join_security'] = "Sigurnost"; // 5.2.0
$LNG['join_confirm_password'] = "Potvrsi Lozinku"; // 5.2.0

// Link Kod
$LNG['link_code_header'] = "Link Kod"; // 5.0

// Izgubljena Lozinka
$LNG['lost_pw_header'] = "Izgubljena Lozinka"; // 5.0
$LNG['lost_pw_forgot'] = "Zaboravili Lozinku?"; // 5.0
$LNG['lost_pw_get'] = "Primi Novu Lozinku"; // 5.0
$LNG['lost_pw_emailed'] = "Provjerite email za nove instrukcije."; // 5.0
$LNG['lost_pw_email'] = "Da dobijete novu lozinku, posjetite ovaj URL:"; // 5.0
$LNG['lost_pw_new'] = "Ukucaj novu Lozinku"; // 5.0
$LNG['lost_pw_set_new'] = "Setiraj Lozinku"; // 5.0
$LNG['lost_pw_finish'] = "Vasa nova lozinka je ispravna i spremna za rad."; // 5.0

// Glavna Stranica
$LNG['main_header'] = "Rankovi"; // 5.0
$LNG['main_all'] = "Sve Stranice"; // 4.2.0
$LNG['main_method'] = "Izbor rankinga";
$LNG['main_members'] = "Clanovi";
$LNG['main_menu_rankings'] = "Rankovi";
$LNG['main_menu_join'] = "Posalji Link";
$LNG['main_menu_random'] = "Jesteli Sretni?";
$LNG['main_menu_search'] = "Pretraga";
$LNG['main_menu_lost_code'] = "Izgubljeni Kod"; // 5.0
$LNG['main_menu_lost_password'] = "Izgubljena Lozinka"; // 5.0
$LNG['main_menu_edit'] = "Izmjeni Korisnicku Informaciju";
$LNG['main_menu_user_cp'] = "Vas Akaunt"; // 5.0
$LNG['main_featured'] = "Izabrani Sajt"; // 4.0.2
$LNG['main_executiontime'] = "Skripta odvorena za"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Powered By: Aardvark Top Sites PHP - Prevod - Hame";

// Ocjene
$LNG['table_stats'] = "Statistika";
$LNG['table_unique'] = "Unik";
$LNG['table_total'] = "Ukupno";
$LNG['table_rank'] = "Rank";
$LNG['table_title'] = "Naziv"; // 4.0
$LNG['table_description'] = "Opis"; // 4.0
$LNG['table_movement'] = "Promjene";
$LNG['table_up'] = "Gore"; // 5.0
$LNG['table_down'] = "Dolje"; // 5.0
$LNG['table_neutral'] = "Isto"; // 5.0
$LNG['table_your_site_here'] = "Vas Sajt Ovde"; // 5.2.0

// Ocjene i Revizije
$LNG['rate_header'] = "Ocjene i Revizije";
$LNG['rate_message'] = "Upisite vasu ocjenu i recenziju za %s u formi ispod."; // 5.2.0
$LNG['rate_rating'] = "Ocjene";
$LNG['rate_review'] = "Revizije - HTML Zabranjen"; // 5.0
$LNG['rate_thanks'] = "Hvala za Ocjenu.";
$LNG['rate_error'] = "Vi ste vec ocijenili ovaj sajt.";
$LNG['rate_back'] = "Nazad na Statistiku";
$LNG['rate_email_admin'] = "Nova revizija na vasoj top sajt listi."; // 5.1.0

// Pretraga
$LNG['search_header'] = "Pretraga";
$LNG['search_off'] = "Pretraga je zakljucana.";
$LNG['search_no_sites'] = "Nismo nasli sajt sa vasim opisom."; // 5.0
$LNG['search_prev'] = "Zadnja"; // 3.2.1
$LNG['search_next'] = "Sledeca"; // 3.2.1
$LNG['search_displaying_results'] = "Pokaziva %s do %s od %s rezultata za <b>%s</b>."; // 5.1.0

// Statistike
$LNG['stats_header'] = "Statistika";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Clan Od"; // 5.0
$LNG['stats_rating_avg'] = "Prosjecna Ocjena";
$LNG['stats_rating_num'] = "Broj Ocjena";
$LNG['stats_rate'] = "Ocijeni i daj reviziju za ovaj sajt";
$LNG['stats_reviews'] = "Revizije";
$LNG['stats_allreviews'] = "Pokazi sve Revizije"; // 4.0
$LNG['stats_week'] = "Sedmica"; // 5.0
$LNG['stats_highest'] = "Naj Vece"; // 5.0
$LNG['stats_overall'] = "Ukupno Statistika"; // 5.2.0
$LNG['stats_overall_average'] = "Prosjek (Zadnji 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Total (svi vremena)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sajt"; // 4.0
$LNG['ssi_new'] = "%s Novi Korisnik"; // 5.0
$LNG['ssi_all'] = "Svi sajtovi"; // 4.0

// Korisnicka Panela // 5.0
$LNG['user_cp_header'] = "Vas Akaunt"; // 5.0
$LNG['user_cp_login'] = "Login"; // 5.0
$LNG['user_cp_logout'] = "Logout"; // 5.0
$LNG['user_cp_welcome'] = "Dobro Dosli na vas akaunt.  Koristite linkove lijevo da izmjenite vas Akaunt."; // 5.0
$LNG['user_cp_logout_message'] = "Viste se izlogirali sa Akaunta."; // 5.0
$LNG['user_cp_login_long'] = "Logirajte se sa vasim Korisnickim imenov i lozinkov ili koristite OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Nismo mogli naci OpenID server za %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Morate se uclaniti za top listu prije nego sto mozete izmjeniti vas akaunt."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Greska logiranja. Pokusajte ponovo."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Morate dati odobrenje prije ulaza. Pokusajte Ponovo."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Greska od servera: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Nemozete izmjeniti akaunt dok vam se sajt neodobri.  Dobicete email kad vam se sajt odobri."; // 5.2.0

// Admin > Odobri nove Korisnike // 4.0
$LNG['a_approve_header'] = "Odobri nove Sajtove"; // 5.0
$LNG['a_approve'] = "Odobri"; // 4.0
$LNG['a_approve_none'] = "Nemate Sajtova na cekanju."; // 4.0
$LNG['a_approve_done'] = "Sajt je odobren."; // 4.0
$LNG['a_approve_dones'] = "Sajtovi su odobreni."; // 4.0
$LNG['a_approve_sel'] = "Sa izabranim:"; // 5.0

// Admin > Odobri Izmjenjene Korisnike // 5.2.0
$LNG['a_approve_edited_header'] = "Odobri Izmjene Korisnike"; // 5.2.0
$LNG['a_approve_edited_none'] = "Nema novi izmjena za odobrenje."; // 5.2.0
$LNG['a_approve_edited_old'] = "Posledni Naziv i URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Izmjeni Naziv i URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Neodobri"; // 5.2.0
$LNG['a_approve_edited_done'] = "Izmjene su odobrene."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Izmjene nisu odobrene."; // 5.2.0

// Admin > Odobri Nove Revizije // 5.0
$LNG['a_approve_rev_header'] = "Odobri nove revizije"; // 5.0
$LNG['a_approve_rev_none'] = "Nema revizija na cekanju za odobrenje."; // 5.0
$LNG['a_approve_rev_done'] = "Revizija odobrena."; // 5.0
$LNG['a_approve_rev_dones'] = "Revizije Odobrene."; // 5.0

// Admin > Backup Dejtabazu // 5.2.0
$LNG['a_backup_header'] = "Backup Dejtabazu"; // 5.2.0
$LNG['a_backup_warn'] = "Ovo ce napraviti Backup bazu za vase korisnike, statistike i opcije.  Ako imate puno korisnika, moze trajati duze i fajl za bazu ce biti veci."; // 5.2.0

// Admin > Napravi Licnu Stranu // 5.1.0
$LNG['a_create_page_header'] = "Napravi svoju stranicu"; // 5.1.0
$LNG['a_create_page_id'] = "Stranica ID - Ovo ce biti dio web adrese. Koristite Slova, Brojeve, _ i -"; // 5.1.0
$LNG['a_create_page_error_id'] = "ID Stranice mozemo samo imate Slova, Brojeve, _ i - ."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Taj ID Stranice vec postoji."; // 5.1.0
$LNG['a_create_page_created'] = "Stranica Napravljena.  Moracete rucno staviti link za %s u wrapper.html."; // 5.1.0

// Admin > Izbrisi Sajt
$LNG['a_del_header'] = "Izbrisi Sajt"; // 5.0
$LNG['a_del_headers'] = "Izbrisi Sajtove"; // 5.0
$LNG['a_del_done'] = "Sajt Izbrisan."; // 5.0
$LNG['a_del_dones'] = "Sajtovi Izbrisani."; // 5.0
$LNG['a_del_warn'] = "Jesteli sigurni da zelite da izbrisete %s?"; // 5.0
$LNG['a_del_multi'] = "ove %s sajtove"; //5.0

// Admin > Izbrisi Losu Rijec // 5.1.0
$LNG['a_del_bad_word_header'] = "Izbrisi filtriranu rijec"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Izbrisi filtrirane rijeci"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtrirana rijec je izbrisana."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtrirana rijeci su izbrisane."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Jesteli sigurni da zelite da izbrisete %s sa filtrirane liste rijeci?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "ove %s rijeci"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Greska u Rijeci. Pokusajte Ponovo."; // 5.1.0

// Admin > Izbrisi Zabranjeno // 5.2.0
$LNG['a_del_ban_header'] = "Izbrisi Podatak sa Crne Liste"; // 5.2.0
$LNG['a_del_ban_headers'] = "Izbrisi Podatke sa Crne Liste"; // 5.2.0
$LNG['a_del_ban_done'] = "Podatak sa Crne Listi je izbrisan."; // 5.2.0
$LNG['a_del_ban_dones'] = "Podatki sa Crne Liste su izbrisani."; // 5.2.0
$LNG['a_del_ban_warn'] = "Jesteli sigurni da zelite da izbrisete %s sa Crne Liste?"; //5.2.0
$LNG['a_del_ban_multi'] = "ove %s podatke"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "ID Nepostoji na Crnoj Listi.  Molimo vas pokusajte ponovo."; // 5.2.0

// Admin > Izbrisi Licnu Stranu // 5.1.0
$LNG['a_del_page_header'] = "Izbrisi licnu stranicu"; // 5.1.0
$LNG['a_del_page_headers'] = "Izbrisi licne stranice"; // 5.1.0
$LNG['a_del_page_done'] = "licna stranica Izbrisana."; // 5.1.0
$LNG['a_del_page_dones'] = "Licne stranice Izbrisane."; // 5.1.0
$LNG['a_del_page_warn'] = "Jesteli sigurni da zelite da izbrisete %s?"; //5.1.0
$LNG['a_del_page_multi'] = "ove %s stranice"; //5.1.0
$LNG['a_del_page_invalid_id'] = "ID Stranice nije tacan. Pokusajte Ponovo."; // 5.1.0

// Admin > Izbrisi Revizije // 5.0
$LNG['a_del_rev_header'] = "Izbrisi Reviziju"; // 5.0
$LNG['a_del_rev_headers'] = "Izbrisi Revizije"; // 5.0
$LNG['a_del_rev_done'] = "Revizija Izbrisana."; // 5.0
$LNG['a_del_rev_dones'] = "Revizije Izbrisane."; // 5.0
$LNG['a_del_rev_warn'] = "Jesteli sigurni?"; //5.0
$LNG['a_del_rev_warns'] = "Jesteli sigurni da zelite da izbrisete ove revizije?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Netacan broj Revizije. Pokusajte Ponovo."; // 5.0

// Admin > Izmjeni Korisnika
$LNG['a_edit_header'] = "Izmjeni Sajt"; // 5.0
$LNG['a_edit_site_is'] = "Ova stranica je"; // 4.0
$LNG['a_edit_active'] = "Aktivna (Na Listi)"; // 4.0
$LNG['a_edit_inactive'] = "Neaktivna (Nije na Listi)"; // 5.0
$LNG['a_edit_edited'] = "Sajt izmjenjen.";

// Admin > Izmjeni losu Rijec // 5.1.0
$LNG['a_edit_bad_word_header'] = "Izmjeni Filtrirane Rijeci"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtrirana rijec Izmjenjena."; // 5.1.0

// Admin > Izmjeni Zabranjeno // 5.2.0
$LNG['a_edit_ban_header'] = "Izmjeni Podatak na Crnoj Listi"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Crna Lista je izmjenjena."; // 5.2.0

// Admin > Izmjeni Licnu Stranu // 5.1.0
$LNG['a_edit_page_header'] = "Izmjeni Personal Stranicu"; // 5.1.0
$LNG['a_edit_page_content'] = "Obsirnije. HTML Dozvoljen"; // 5.1.0
$LNG['a_edit_page_edited'] = "Strana izmjenjena."; // 5.1.0

// Admin > Izmjeni Reviziju // 5.0
$LNG['a_edit_rev_header'] = "Izmjeni Reviziju"; // 5.0
$LNG['a_edit_rev_edited'] = "Revizija Izmjenjena.";

// Admin > Email Korisnicima
$LNG['a_email_header'] = "Email Clanovima"; // 5.0
$LNG['a_email_subject'] = "Naziv Poruke"; // 4.2.0
$LNG['a_email_message'] = "Poruka"; // 4.2.0
$LNG['a_email_msg_sent'] = "Email poslan za %s"; // 5.0
$LNG['a_email_not_sent'] = "Nismo mogli poslati Email za %s"; // 5.0
$LNG['a_email_sent'] = "%s Clanovi su primili Email."; // 4.2.0
$LNG['a_email_failed'] = "%s Clanova nisu primili Email."; // 4.2.0

// Admin > Izlogiranje
$LNG['a_logout_message'] = "Niste vise logirani kao Admin."; // 5.0

// Admin > Glavna
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Dobro Dosli na administraciju.  Koristite Linkove lijevo za uredjivanje Top Liste."; // 5.0
$LNG['a_main_approve'] = "1 Sajt ceka odobrenje."; // 5.0
$LNG['a_main_approves'] = "Imate %s Na listi cekanja."; // 5.0
$LNG['a_main_approve_edit'] = "Ima 1 izmjenjeni sajt koji ceka odobrenje."; // 5.2.0
$LNG['a_main_approve_edits'] = "Imaju %s Izmjenjeni sajtova koji cekaju odobrenje."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 Revizija ceka odobrenje."; // 5.0
$LNG['a_main_approve_revs'] = "Imate %s Revizija na Cekanju."; // 5.0
$LNG['a_main_your'] = "Vasa Verzija"; // 5.0
$LNG['a_main_latest'] = "Posljedna Verzija"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Uredzivanje Korisnika
$LNG['a_man_header'] = "Odrzavanje Sajtova"; // 5.0
$LNG['a_man_actions'] = "Akcije"; // 4.2.0
$LNG['a_man_edit'] = "Izmjeni"; // 4.2.0
$LNG['a_man_delete'] = "Izbrisi"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Izaberi Sve"; // 5.0
$LNG['a_man_none'] = "Izaberi Nijedno"; // 5.0
$LNG['a_man_del_sel'] = "Izbrisi Izabrano"; // 5.0

// Admin > Uredzivanje lose Rijeci // 5.1.0
$LNG['a_man_bad_words_header'] = "Zabranjene Rijeci"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Ukucajte Rijec i zamjenu ispod.  naprimer ukucaj \"jebe\" u kocku \"j***\" u zamjenu."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Iste rijeci ce samo izmjenuti rijec.  Globalna Izmjena znaci \"jebe\" ce isto biti kao \"jebes\" i \"jebesli\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Rijec"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Zamjena"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Slicno"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Isto"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globalno"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtriraj Rijec"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" Je sad filtrirana rijec."; // 5.1.0

// Admin > Odrzavanje Zabranjenog // 5.2.0
$LNG['a_man_ban_header'] = "Crna Lista"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Ako zelite da zabranite nekome ulaz na top sajt listu, ispunite formu ispod.  Kad se korisnik prijavi, URL, Email adresa, Korisnicko ime i IP adresa se provjeravaju.  Kad se sajt izmjeni, URL i email adresa se provjeravaju.<br /><br />Crna Lista nema efekta na trenutne korisnike."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Ista rijec ce samo izmjeniti isti konac rijeci.  Globalna izmjena ce zamjeniti sve sa istim koncom.  Znaci, Globalna Izmjena za http://www.yahoo.com/ ce izmjeniti sve sa http://www.yahoo.com/ u URL-u, dok ista izmjena za http://www.yahoo.com/ ce samo izmjeniti isti URL."; // 5.1.0
$LNG['a_man_ban_string'] = "Konac"; // 5.2.0
$LNG['a_man_ban_field'] = "Polje"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" Je dodano na Crnu Listu."; // 5.2.0

// Admin > Uredzivanje licni strana // 5.1.0
$LNG['a_man_pages_header'] = "Uredjivanje licni stranica"; // 5.1.0

// Admin > Uredzivanje Revizija // 5.0
$LNG['a_man_rev_header'] = "Uredjivanje Revizija"; // 5.0
$LNG['a_man_rev_enter'] = "To manage the reviews of a site, enter the member's username below."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Revizija"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menju
$LNG['a_menu'] = "Menju";
$LNG['a_menu_main'] = "Pocetna"; // 5.0
$LNG['a_menu_approve'] = "Odobri Nove Sajtove";
$LNG['a_menu_approve_edits'] = "Odobri izmenjene Korisnike"; // 5.2.0
$LNG['a_menu_manage'] = "Uredjivanje Sajtova"; // 4.2.0
$LNG['a_menu_settings'] = "Izmjena Opcija"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filter Rijeci"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Crna Lista"; // 5.2.0
$LNG['a_menu_backup'] = "Backup Dejtabazu"; // 5.2.0
$LNG['a_menu_skins'] = "Izgled i Kategorije"; // 5.0
$LNG['a_menu_approve_reviews'] = "Odobri nove Revizije"; // 5.0
$LNG['a_menu_manage_reviews'] = "Uredjivanje Revizija"; // 5.0
$LNG['a_menu_email'] = "Email Clanovima";
$LNG['a_menu_delete_review'] = "Izbrisi Revizije";
$LNG['a_menu_logout'] = "Izlogiranje";
$LNG['a_menu_delete'] = "Izbrisi Sajtove";
$LNG['a_menu_edit'] = "Uredzivanje Sajtova";
$LNG['a_menu_create_page'] = "Napravi Privatnu Stranicu"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Uredzivanje Privatni Stranica"; // 5.1.0
$LNG['a_header_members'] = "Clanovi"; // 5.0
$LNG['a_header_settings'] = "Opcije"; // 5.0
$LNG['a_header_tools'] = "Opcije"; // 5.2.0
$LNG['a_header_reviews'] = "Revizije"; // 5.0
$LNG['a_header_pages'] = "Privatne Stranice"; // 5.1.0

// Admin > Opcije
$LNG['a_s_header'] = "Izmjeni Opcije";
$LNG['a_s_help'] = "Pomoc"; // 5.1.0

$LNG['a_s_general'] = "Glavne Opcije";
$LNG['a_s_admin_password'] = "Admin Lozinka";
$LNG['a_s_list_name'] = "Ime vase Top Liste";
$LNG['a_s_list_url'] = "URL za direktoru vase Top Liste";
$LNG['a_s_default_language'] = "Glavni Jezik";
$LNG['a_s_your_email'] = "Vasa Email adresa";

$LNG['a_s_sql'] = "SQL Opcije";
$LNG['a_s_sql_type'] = "Vrsta Dejtabaze"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Dejtabaza";
$LNG['a_s_sql_username'] = "Korisnicko Ime";
$LNG['a_s_sql_password'] = "Lozinka";

$LNG['a_s_ranking'] = "Opcije Ocjenivanja";
$LNG['a_s_num_list'] = "Broj Sajtova po Stranici"; // 5.0
$LNG['a_s_ranking_period'] = "Vrijeme Ocjenivanja"; // 5.0
$LNG['a_s_ranking_method'] = "Metoda Ocjenivanja"; // 5.0
$LNG['a_s_ranking_average'] = "Ocjene po Prosjeku ili %s"; // 5.0
$LNG['a_s_featured_member'] = 'Izabrani Sajt - Dodaj  {$featured_member} u wrapper.html kad ovu aktivirate.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Broj sajtova da koriste _top izgled za";
$LNG['a_s_ad_breaks'] = "Prikazi Reklame posle (Koma izmedju izbora) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "U prazna polja upisi \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Opcije za Korisnike";
$LNG['a_s_active_default'] = "Novim Clanovima je potrebno odobrenje prije aktivacije";
$LNG['a_s_active_default_review'] = "Za nove revizije je potrebno odobrenje admin-a";
$LNG['a_s_delete_after'] = "Izbrisi sajtove koje nisu imali glasova posle voliko dana (stavi 0 da deaktiviras ovu opciju)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Email admin-u kad se novi sajt registruje"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Email admin-u kad se nova revizija posalje"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maximalna duzina banera (stavi 0 da deaktiviras ovu opciju)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximalna Velcina banera (stavi 0 da deaktiviras ovu opciju)"; // 4.2.0
$LNG['a_s_default_banner'] = "Koji baner koristiti ako Clan neupise svoj baner URL";

$LNG['a_s_button'] = "Opcije Dugamdi";
$LNG['a_s_ranks_on_buttons'] = "Ocijene na Dugmadima -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Dugme Statistike"; // 4.2.0
$LNG['a_s_button_url'] = "Ako Ja/Ne - Glavni Baner za Sajtove za Glasanje"; // 4.0
$LNG['a_s_button_dir'] = "Ako Ja - URL direktore u kojoj su dugmadi"; // 4.0
$LNG['a_s_button_ext'] = "Ako Ja - Extenzija dugmadi (gif, png, jpg, itd.)"; // 4.0
$LNG['a_s_button_num'] = "Ako Ja - Koliko ste dugmadi napravili"; // 4.0
$LNG['a_s_google_friendly_links'] = "Prijateljski Linkovi - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gejtvej Stranica protiv Varanja";
$LNG['a_s_captcha'] = "Veca sigurnost za Uclanjenje (protiv spamera) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Sigurno pitanje i odgovor protiv spamer-a (ostavi prazno ako nezelite ovu opciju) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Ostale Opcije";
$LNG['a_s_search'] = "Pretraga";
$LNG['a_s_time_offset'] = "Vrijeme vaseg Servera (u sahatima)";

$LNG['a_s_on'] = "Ja";
$LNG['a_s_off'] = "Ne";
$LNG['a_s_days'] = "Dana";
$LNG['a_s_months'] = "Mjeseci";
$LNG['a_s_weeks'] = "Sedmica"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Ne";
$LNG['a_s_answer'] = "Odgovor"; // 5.2.0

$LNG['a_s_updated'] = "Promjene Uspjesno spasene.";

// Admin > Izgled i Kategorije // 5.0
$LNG['a_skins_header'] = "Izgled i Kategorije"; // 5.0
$LNG['a_skins_default'] = "Glavni Izgled"; // 5.0
$LNG['a_skins_set_default'] = "Stavi Glavni Izgled"; // 5.0
$LNG['a_skins_anon'] = "Anon"; // 5.0
$LNG['a_skins_default_done'] = "Glavni Izgled Izabran."; // 5.0
$LNG['a_skins_categories_done'] = "Izgled Kategorija Izabran."; // 5.0
$LNG['a_skins_new_category_done'] = "Nova Kategorija Napravljena."; // 5.0
$LNG['a_skins_delete_done'] = "Kategorija Izbrisana."; // 5.0
$LNG['a_skins_delete_error'] = "Kategorija se nemoze izbrisati. Morate minimalno jednu kategoriju imati."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategorija Izmjenjena."; // 5.0
$LNG['a_skins_invalid_skin'] = "Izgled nije validan: %s.  Pokusaj Ponovo."; // 5.0
$LNG['a_skins_categories'] = "Kategorije"; // 5.0
$LNG['a_skins_new_category'] = "Napravi novu Kategoriju"; // 5.0
$LNG['a_skins_set_skins'] = "Setiraj novu Kategoriju"; // 5.0
$LNG['a_skins_edit_category'] = "Izmjeni Kategoriju"; // 5.0
$LNG['a_skins_category_name'] = "Ime Kategorije"; // 5.0
$LNG['a_skins_diff_skins'] = "Ako zelite drugi izgled za svaku kategoriju, izaberi ispod."; // 5.0
?>
