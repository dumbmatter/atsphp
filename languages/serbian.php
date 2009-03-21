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
$translation = 'Serbian (Srpski)';
$translator_name = 'wukaschin';
$translator_email = 'webmaster@yu-fitness.com';
$translator_url = 'http://www.yu-fitness.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "utf-8";

// Globalno
$LNG['g_form_submit_short'] = "Dalje";
$LNG['g_username'] = "Korisnik";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Naslov";
$LNG['g_description'] = "Opis";
$LNG['g_category'] = "Kategorija"; // 4.1.0
$LNG['g_email'] = "E-mail";
$LNG['g_banner_url'] = "Baner URL";
$LNG['g_password'] = "Lozinka";
$LNG['g_average'] = "Prosek";
$LNG['g_today'] = "Danas";
$LNG['g_yesterday'] = "Juce";
$LNG['g_daily'] = "Dnevno"; // 5.0
$LNG['g_this_month'] = "Ovaj Mesec"; // 5.0
$LNG['g_last_month'] = "Prosli Mesec"; // 5.0
$LNG['g_monthly'] = "Mesecno"; // 5.0
$LNG['g_this_week'] = "Ove Nedelje"; // 5.0
$LNG['g_last_week'] = "Prosle Nedelje"; // 5.0
$LNG['g_weekly'] = "Nedeljno"; // 5.0
$LNG['g_pv'] = 'Pregledane Stranice'; // 5.0
$LNG['g_overall'] = 'Ukupno'; // 5.0
$LNG['g_in'] = 'Ulaz'; // 5.0
$LNG['g_out'] = 'Izlaz'; // 5.0
$LNG['g_unq_pv'] = "Unikatni PSs"; // 5.0
$LNG['g_tot_pv'] = "Ukupno PSs"; // 5.0
$LNG['g_unq_in'] = "Unikatni Ulaz"; // 5.0
$LNG['g_tot_in'] = "Ukupno Ulaz"; // 5.0
$LNG['g_unq_out'] = "Unikatni Izlaz"; // 5.0
$LNG['g_tot_out'] = "Ukupno Izlaz"; // 5.0
$LNG['g_invalid_u_or_p'] = "Greska u Korisnickom imenu ili lozinci. Pokusajte Ponovo."; // 5.0
$LNG['g_invalid_u'] = "Pogresno Korisnicko Ime. Pokusajte Ponovo."; // 5.0
$LNG['g_invalid_p'] = "Pogresna Lozinka. Pokusajte Ponovo."; // 5.0
$LNG['g_session_expired'] = "Poseta Istekla. Pokusajte Ponovo."; // 5.0
$LNG['g_error'] = "Greska"; // 5.0
$LNG['g_delete_install'] = "Za sigurnost, morate izbrisati direktorijum instalacije pre nego sto pokrenete skriptu."; // 5.0
$LNG['g_ip'] = "IP Adresa"; // 5.2.0

// Izmeni Nalog
$LNG['edit_header'] = "Izmeni Nalog";
$LNG['edit_info_edited'] = "Nalog Izmenjen.";
$LNG['edit_password_blank'] = "Ostavite Prazno za istu lozinku"; // 4.0
$LNG['edit_delay'] = "Upisite naziv vaseg sajta i URL koji ce se morati odobriti od strane administratora pre promena."; // 5.2.0

// Gejtvej Stranica
$LNG['gateway_header'] = "Aarkdvark Top Lista Gejtvej Stranica";
$LNG['gateway_text'] = "Da se nebi varalo, ubacili smo ovu Gejtvej Stranicu.";
$LNG['gateway_vote'] = "-= Ulaz sa Glasanjem =-";
$LNG['gateway_no_vote'] = "Ulaz bez Glasanja"; // 5.0

// Instalacija
$LNG['install_header'] = "Instalacija";
$LNG['install_welcome'] = "Dobro Dosli na Aardvark Topsites PHP 5.  Ispunite formu ispod za instalaciju skripte.";
$LNG['install_sql_prefix'] = "Table prefix - Samo promenite ako imate vise od Jedne forme u bazi";
$LNG['install_error_chmod'] = "Niste uspesno upisali settings_sql.php.  Zameni CHMOD 666 u settings_sql.php.";
$LNG['install_error_sql'] = "Nismo mogli napraviti konekciju za SQL bazom.  Molimo vas idete nazad i promenite SQL Setove.";
$LNG['install_done'] = "Top Lista uspesno Instalirana. Izbrisite ovaj direktorijum odmah.";
$LNG['install_your'] = "Vasa Top Sajt Lista ";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Uredjivanje";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Dobro Dosli na Aardvark Topsites PHP 5.  Pre Upgrade, spasite vase podatke.";
$LNG['upgrade_version'] = "Proverite da li radite upgrade sa verzije %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Upgrade moze samo za Aardvark Topsites PHP 4.1.0 ili vece.";
$LNG['upgrade_done'] = "Upgrade je uspesan. Izbrisite ovaj direktorijum odmah";
$LNG['install_mailing_list'] = "Ako se zelite uclaniti da dobijate novine od Aardvark Topsites PHP Mailing Liste, upisite vas email ispod.  Dobijacete saopstenja o novim verzijama skripte i pronadjenim rupama u sigurnosti."; // 5.2.0

// Posalji Sajt
$LNG['join_header'] = "Posalji Link";
$LNG['join_enter_text'] = "Ukucaj slova kao na slici ispod:"; // 4.2.2
$LNG['join_enter_text_read'] = "Ne mozete Procitati?"; // 5.2.0
$LNG['join_user'] = "Korisnik"; // 5.0
$LNG['join_website'] = "Web Stranica"; // 5.0
$LNG['join_banner_size'] = "(Maximalna Velcina: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Ukucajte Korisnicko Ime. Koristite Slova, Brojeve i _ , - ."; // 5.0
$LNG['join_error_username_duplicate'] = "Korisnicko ime je zauzeto."; // 5.0
$LNG['join_error_url'] = "Ukucaj URL.";
$LNG['join_error_email'] = "Ukucajte Tacnu e-mail adresu.";
$LNG['join_error_title'] = "Ukucajte glavi naslov za vasu stranicu.";
$LNG['join_error_password'] = "Ukucajte Lozinku.";
$LNG['join_error_confirm_password'] = "Lozinke se neslazu."; // 5.2.0
$LNG['join_error_urlbanner'] = "Ukucajte validni Baner.  Ostavite prazno ako nemate Baner."; // 5.2.0
$LNG['join_error_time'] = "Nemojte osvezavati ovu konfirmaciju [ F5 ]."; // 4.2.0
$LNG['join_error_captcha'] = "Rec koju ste ukucali se neslaze sa slikom."; // 4.2.2
$LNG['join_error_question'] = "Odgovor Netacan.  Molimo vas popravite gresku za konfirmaciju da ste prava osoba a ne bot."; // 5.2.0
$LNG['join_thanks'] = "Hvala sto ste se Registrovali!  Da bi se pocelo glasati stavite ovaj Kod na vasu stranicu.";
$LNG['join_change_warning'] = "Ako promjenite Kod, Glasanje nece biti ispravno.";
$LNG['join_welcome'] = "Dobro Dosli na %s";
$LNG['join_welcome_admin'] = "Novi Korisnik je se registrovao za Vasu Top Listu.";
$LNG['join_approve'] = "Hvala sto ste se uclanili!  Vas sajt ce biti postavljen na listi kad admin odobri. Dobicete e-mail sa vise informacije kad vam admin odobri sajt."; // 5.2.0
$LNG['join_type'] = "Vrsta Naloga"; // 5.1.0
$LNG['join_standard'] = "Obicno"; // 5.1.0
$LNG['join_error_top'] = "Greska Pronadjena u vasim podacima, molimo vas popravite gresku ispod."; // 5.2.0
$LNG['join_ban_top'] = "Vasi podaci sadrze rec koje ja zabranjena od strane administratora."; // 5.2.0
$LNG['join_security'] = "Sigurnost"; // 5.2.0
$LNG['join_confirm_password'] = "Potvrdi Lozinku"; // 5.2.0

// Link Kod
$LNG['link_code_header'] = "Link Kod"; // 5.0

// Izgubljena Lozinka
$LNG['lost_pw_header'] = "Izgubljena Lozinka"; // 5.0
$LNG['lost_pw_forgot'] = "Zaboravili ste Lozinku?"; // 5.0
$LNG['lost_pw_get'] = "Primi Novu Lozinku"; // 5.0
$LNG['lost_pw_emailed'] = "Proverite e-mail za nove instrukcije."; // 5.0
$LNG['lost_pw_email'] = "Da dobijete novu lozinku, posetite ovaj URL:"; // 5.0
$LNG['lost_pw_new'] = "Ukucaj novu Lozinku"; // 5.0
$LNG['lost_pw_set_new'] = "Resetuj Lozinku"; // 5.0
$LNG['lost_pw_finish'] = "Vasa nova lozinka je ispravna i spremna za rad."; // 5.0

// Glavna Stranica
$LNG['main_header'] = "Rangiranje"; // 5.0
$LNG['main_all'] = "Sve Stranice"; // 4.2.0
$LNG['main_method'] = "Izbor ranka";
$LNG['main_members'] = "Clanovi";
$LNG['main_menu_rankings'] = "Rangiranje";
$LNG['main_menu_join'] = "Posalji Link";
$LNG['main_menu_random'] = "Slucajan clan?";
$LNG['main_menu_search'] = "Pretraga";
$LNG['main_menu_lost_code'] = "Izgubljeni Kod"; // 5.0
$LNG['main_menu_lost_password'] = "Izgubljena Lozinka"; // 5.0
$LNG['main_menu_edit'] = "Izmeni Korisnicku Informaciju";
$LNG['main_menu_user_cp'] = "Vas Nalog"; // 5.0
$LNG['main_featured'] = "Izabrani Sajt"; // 4.0.2
$LNG['main_executiontime'] = "Skripta stvorena za"; // 4.0
$LNG['main_queries'] = "SQL Upita"; // 4.0
$LNG['main_powered'] = "Powered By: Aardvark Top Sites PHP - Prevod - wukaschin (www.yu-fitness.com)";

// Ocene
$LNG['table_stats'] = "Statistika";
$LNG['table_unique'] = "Unikati";
$LNG['table_total'] = "Ukupno";
$LNG['table_rank'] = "Rank";
$LNG['table_title'] = "Naziv"; // 4.0
$LNG['table_description'] = "Opis"; // 4.0
$LNG['table_movement'] = "Promene";
$LNG['table_up'] = "Gore"; // 5.0
$LNG['table_down'] = "Dole"; // 5.0
$LNG['table_neutral'] = "Isto"; // 5.0
$LNG['table_your_site_here'] = "Vas Sajt Ovde"; // 5.2.0

// Ocene i Komentari
$LNG['rate_header'] = "Ocene i Komentari";
$LNG['rate_message'] = "Upisite vasu ocenu i komentar za %s u formi ispod."; // 5.2.0
$LNG['rate_rating'] = "Ocene";
$LNG['rate_review'] = "Komentari - HTML Zabranjen"; // 5.0
$LNG['rate_thanks'] = "Hvala za Ocenu.";
$LNG['rate_error'] = "Vi ste vec ocenili ovaj sajt.";
$LNG['rate_back'] = "Nazad na Statistiku";
$LNG['rate_email_admin'] = "Novi komentar na vasoj top sajt listi."; // 5.1.0

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
$LNG['stats_rating_avg'] = "Prosecna Ocena";
$LNG['stats_rating_num'] = "Broj Ocena";
$LNG['stats_rate'] = "Oceni i daj reviziju za ovaj sajt";
$LNG['stats_reviews'] = "Komentar";
$LNG['stats_allreviews'] = "Pokazi sve Komentare"; // 4.0
$LNG['stats_week'] = "Nedelja"; // 5.0
$LNG['stats_highest'] = "Najvece"; // 5.0
$LNG['stats_overall'] = "Ukupno Statistika"; // 5.2.0
$LNG['stats_overall_average'] = "Prosek (Zadnji 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Ukupno (sva vremena)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sajt"; // 4.0
$LNG['ssi_new'] = "%s Novi Korisnik"; // 5.0
$LNG['ssi_all'] = "Svi sajtovi"; // 4.0

// Korisnicka Panela // 5.0
$LNG['user_cp_header'] = "Vas Nalog"; // 5.0
$LNG['user_cp_login'] = "Prijava"; // 5.0
$LNG['user_cp_logout'] = "Odjava"; // 5.0
$LNG['user_cp_welcome'] = "Dobro Dosli na vas nalog.  Koristite linkove levo da izmjnite vas Nalog."; // 5.0
$LNG['user_cp_logout_message'] = "Vi ste se odjavili."; // 5.0
$LNG['user_cp_login_long'] = "Prijavite se sa vasim Korisnickim imenom i lozinkom ili koristite OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Nismo mogli naci OpenID server za %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Morate se uclaniti za top listu pre nego sto mozete izmeniti vas Nalog."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Greska prijave. Pokusajte ponovo."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Morate dati odobrenje pre ulaza. Pokusajte Ponovo."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Greska od servera: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Ne mozete izmeniti Nalog dok vam se sajt ne odobri. Dobicete e-mail kad vam se sajt odobri."; // 5.2.0

// Admin > Odobri nove Korisnike // 4.0
$LNG['a_approve_header'] = "Odobri nove Sajtove"; // 5.0
$LNG['a_approve'] = "Odobri"; // 4.0
$LNG['a_approve_none'] = "Nemate Sajtova na cekanju."; // 4.0
$LNG['a_approve_done'] = "Sajt je odobren."; // 4.0
$LNG['a_approve_dones'] = "Sajtovi su odobreni."; // 4.0
$LNG['a_approve_sel'] = "Sa izabranim:"; // 5.0

// Admin > Odobri Izmjenjene Korisnike // 5.2.0
$LNG['a_approve_edited_header'] = "Odobri Izmene Korisnike"; // 5.2.0
$LNG['a_approve_edited_none'] = "Nema novi izmena za odobrenje."; // 5.2.0
$LNG['a_approve_edited_old'] = "Prethodni Naziv i URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Izmeni Naziv i URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Odbi"; // 5.2.0
$LNG['a_approve_edited_done'] = "Izmene su odobrene."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Izmene nisu odobrene."; // 5.2.0

// Admin > Odobri Nove Komentare // 5.0
$LNG['a_approve_rev_header'] = "Odobri nove komentare"; // 5.0
$LNG['a_approve_rev_none'] = "Nema komentara na cekanju za odobrenje."; // 5.0
$LNG['a_approve_rev_done'] = "Komentar odobrena."; // 5.0
$LNG['a_approve_rev_dones'] = "Komentar Odobrene."; // 5.0

// Admin > Backup Dejtabazu // 5.2.0
$LNG['a_backup_header'] = "Uradi kopiju baze"; // 5.2.0
$LNG['a_backup_warn'] = "Ovo ce napraviti kopiju bazu za vase korisnike, statistike i opcije.  Ako imate puno korisnika, moze trajati duze i fajl za bazu ce biti veci."; // 5.2.0

// Admin > Napravi Licnu Stranu // 5.1.0
$LNG['a_create_page_header'] = "Napravi svoju stranicu"; // 5.1.0
$LNG['a_create_page_id'] = "Stranica ID - Ovo ce biti deo web adrese. Koristite Slova, Brojeve, _ i -"; // 5.1.0
$LNG['a_create_page_error_id'] = "ID Stranice mozemo samo imate Slova, Brojeve, _ i - ."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Taj ID Stranice vec postoji."; // 5.1.0
$LNG['a_create_page_created'] = "Stranica Napravljena.  Moracete rucno staviti link za %s u wrapper.html."; // 5.1.0

// Admin > Izbrisi Sajt
$LNG['a_del_header'] = "Izbrisi Sajt"; // 5.0
$LNG['a_del_headers'] = "Izbrisi Sajtove"; // 5.0
$LNG['a_del_done'] = "Sajt Izbrisan."; // 5.0
$LNG['a_del_dones'] = "Sajtovi Izbrisani."; // 5.0
$LNG['a_del_warn'] = "Jeste li sigurni da zelite da izbrisete %s?"; // 5.0
$LNG['a_del_multi'] = "ove %s sajtove"; //5.0

// Admin > Izbrisi Losu rec // 5.1.0
$LNG['a_del_bad_word_header'] = "Izbrisi filtriranu rec"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Izbrisi filtrirane reci"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtrirana rec je izbrisana."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtrirana reci su izbrisane."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Jeste li sigurni da zelite da izbrisete %s sa filtrirane liste reci?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "ove %s reci"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Greska u Reci. Pokusajte Ponovo."; // 5.1.0

// Admin > Izbrisi Zabranjeno // 5.2.0
$LNG['a_del_ban_header'] = "Izbrisi Podatak sa Crne Liste"; // 5.2.0
$LNG['a_del_ban_headers'] = "Izbrisi Podatke sa Crne Liste"; // 5.2.0
$LNG['a_del_ban_done'] = "Podatak sa Crne Listi je izbrisan."; // 5.2.0
$LNG['a_del_ban_dones'] = "Podatci sa Crne Liste su izbrisani."; // 5.2.0
$LNG['a_del_ban_warn'] = "Jeste li sigurni da zelite da izbrisete %s sa Crne Liste?"; //5.2.0
$LNG['a_del_ban_multi'] = "ove %s podatke"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "ID Ne postoji na Crnoj Listi.  Molimo vas pokusajte ponovo."; // 5.2.0

// Admin > Izbrisi Licnu Stranu // 5.1.0
$LNG['a_del_page_header'] = "Izbrisi licnu stranicu"; // 5.1.0
$LNG['a_del_page_headers'] = "Izbrisi licne stranice"; // 5.1.0
$LNG['a_del_page_done'] = "licna stranica Izbrisana."; // 5.1.0
$LNG['a_del_page_dones'] = "Licne stranice Izbrisane."; // 5.1.0
$LNG['a_del_page_warn'] = "Jeste li sigurni da zelite da izbrisete %s?"; //5.1.0
$LNG['a_del_page_multi'] = "ove %s stranice"; //5.1.0
$LNG['a_del_page_invalid_id'] = "ID Stranice nije tacan. Pokusajte Ponovo."; // 5.1.0

// Admin > Izbrisi Revizije // 5.0
$LNG['a_del_rev_header'] = "Izbrisi Komentar"; // 5.0
$LNG['a_del_rev_headers'] = "Izbrisi Komentare"; // 5.0
$LNG['a_del_rev_done'] = "Komentar Izbrisana."; // 5.0
$LNG['a_del_rev_dones'] = "Komentari Izbrisani."; // 5.0
$LNG['a_del_rev_warn'] = "Jeste li sigurni?"; //5.0
$LNG['a_del_rev_warns'] = "Jeste li sigurni da zelite da izbrisete ove komentare?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Netacan broj komentara. Pokusajte Ponovo."; // 5.0

// Admin > Izmeni Korisnika
$LNG['a_edit_header'] = "Izmeni Sajt"; // 5.0
$LNG['a_edit_site_is'] = "Ova stranica je"; // 4.0
$LNG['a_edit_active'] = "Aktivna (Na Listi)"; // 4.0
$LNG['a_edit_inactive'] = "Neaktivna (Nije na Listi)"; // 5.0
$LNG['a_edit_edited'] = "Sajt izmenjen.";

// Admin > Izmeni losu Rec // 5.1.0
$LNG['a_edit_bad_word_header'] = "Izmeni Filtrirane Reci"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtrirana rec Izmenjena."; // 5.1.0

// Admin > Izmeni Zabranjeno // 5.2.0
$LNG['a_edit_ban_header'] = "Izmeni Podatak na Crnoj Listi"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Crna Lista je izmenjena."; // 5.2.0

// Admin > Izmeni Licnu Stranu // 5.1.0
$LNG['a_edit_page_header'] = "Izmeni Licnu Stranicu"; // 5.1.0
$LNG['a_edit_page_content'] = "Sadrzaj. HTML Dozvoljen"; // 5.1.0
$LNG['a_edit_page_edited'] = "Stranica izmenjena."; // 5.1.0

// Admin > Izmjeni Reviziju // 5.0
$LNG['a_edit_rev_header'] = "Izmeni Komentar"; // 5.0
$LNG['a_edit_rev_edited'] = "Komentar izmenjen.";

// Admin > Email Korisnicima
$LNG['a_email_header'] = "E-mail Clanovima"; // 5.0
$LNG['a_email_subject'] = "Naziv Poruke"; // 4.2.0
$LNG['a_email_message'] = "Poruka"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-mail poslat za %s"; // 5.0
$LNG['a_email_not_sent'] = "Nismo mogli poslati E-mail za %s"; // 5.0
$LNG['a_email_sent'] = "%s Clanovi su primili E-mail."; // 4.2.0
$LNG['a_email_failed'] = "%s Clanova nisu primili E-mail."; // 4.2.0

// Admin > Odjava
$LNG['a_logout_message'] = "Niste vise ulogovani kao Admin."; // 5.0

// Admin > Glavna
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Dobro Dosli na administraciju.  Koristite Linkove levo za uredjivanje Top Liste."; // 5.0
$LNG['a_main_approve'] = "1 Sajt ceka odobrenje."; // 5.0
$LNG['a_main_approves'] = "Imate %s Na listi cekanja."; // 5.0
$LNG['a_main_approve_edit'] = "Ima 1 izmenjeni sajt koji ceka odobrenje."; // 5.2.0
$LNG['a_main_approve_edits'] = "Imaju %s Izmenjeni sajtovi koji cekaju odobrenje."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 Komenatr ceka odobrenje."; // 5.0
$LNG['a_main_approve_revs'] = "Imate %s Komentara na Cekanju."; // 5.0
$LNG['a_main_your'] = "Vasa Verzija"; // 5.0
$LNG['a_main_latest'] = "Posledna Verzija"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Uredjivanje Korisnika
$LNG['a_man_header'] = "Odrzavanje Sajtova"; // 5.0
$LNG['a_man_actions'] = "Akcije"; // 4.2.0
$LNG['a_man_edit'] = "Izmeni"; // 4.2.0
$LNG['a_man_delete'] = "Izbrisi"; // 4.2.0
$LNG['a_man_email'] = "E-mail"; // 4.2.0
$LNG['a_man_all'] = "Izaberi Sve"; // 5.0
$LNG['a_man_none'] = "Nijedno"; // 5.0
$LNG['a_man_del_sel'] = "Izbrisi Izabrano"; // 5.0

// Admin > Uredjivanje lose Reci // 5.1.0
$LNG['a_man_bad_words_header'] = "Zabranjene Reci"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Ukucajte Rec i zamenu ispod.  na primer ukucaj \"jebe\" u kocku \"j***\" u zamenu."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Iste reci ce samo izmenuti rec.  Globalna Izmena znaci \"jebe\" ce isto biti kao \"jebes\" i \"jebesli\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Rec"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Zamena"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Slicno"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Isto"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globalno"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtriraj Rec"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" Je sad filtrirana rec."; // 5.1.0

// Admin > Odrzavanje Zabranjenog // 5.2.0
$LNG['a_man_ban_header'] = "Crna Lista"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Ako zelite da zabranite nekome ulaz na top sajt listu, ispunite formu ispod.  Kad se korisnik prijavi, URL, E-mail adresa, Korisnicko ime i IP adresa se proveravaju.  Kad se sajt izmeni, URL i e-mail adresa se proveravaju.<br /><br />Crna Lista nema efekta na trenutne korisnike."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Ista rec ce samo izmeniti isti konac reci.  Globalna izmena ce zameniti sve sa istim konceptom.  Znaci, Globalna Izmena za http://www.yahoo.com/ ce izmeniti sve sa http://www.yahoo.com/ u URL-u, dok ista izmena za http://www.yahoo.com/ ce samo izmeniti isti URL."; // 5.1.0
$LNG['a_man_ban_string'] = "Redosled"; // 5.2.0
$LNG['a_man_ban_field'] = "Polje"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" Je dodano na Crnu Listu."; // 5.2.0

// Admin > Uredzivanje licni strana // 5.1.0
$LNG['a_man_pages_header'] = "Uredjivanje licne stranice"; // 5.1.0

// Admin > Uredjivanje Komentara // 5.0
$LNG['a_man_rev_header'] = "Uredjivanje Komentara"; // 5.0
$LNG['a_man_rev_enter'] = "Da izmenis komentar sajta, unesi korisnikovo ime ispod."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Komentar"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Meni
$LNG['a_menu'] = "Meni";
$LNG['a_menu_main'] = "Pocetna"; // 5.0
$LNG['a_menu_approve'] = "Odobri Nove Sajtove";
$LNG['a_menu_approve_edits'] = "Odobri izmenjene Korisnike"; // 5.2.0
$LNG['a_menu_manage'] = "Uredjivanje Sajtova"; // 4.2.0
$LNG['a_menu_settings'] = "Izmena Opcija"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filter reci"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Crna Lista"; // 5.2.0
$LNG['a_menu_backup'] = "Backup bazu"; // 5.2.0
$LNG['a_menu_skins'] = "Izgled i Kategorije"; // 5.0
$LNG['a_menu_approve_reviews'] = "Odobri nove Komentare"; // 5.0
$LNG['a_menu_manage_reviews'] = "Uredjivanje Komentara"; // 5.0
$LNG['a_menu_email'] = "E-mail Clanovima";
$LNG['a_menu_delete_review'] = "Izbrisi Komentar";
$LNG['a_menu_logout'] = "Odjava";
$LNG['a_menu_delete'] = "Izbrisi Sajtove";
$LNG['a_menu_edit'] = "Uredjivanje Sajtova";
$LNG['a_menu_create_page'] = "Napravi Privatnu Stranicu"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Uredjivanje Privatnih Stranica"; // 5.1.0
$LNG['a_header_members'] = "Clanovi"; // 5.0
$LNG['a_header_settings'] = "Opcije"; // 5.0
$LNG['a_header_tools'] = "Opcije"; // 5.2.0
$LNG['a_header_reviews'] = "Komentar"; // 5.0
$LNG['a_header_pages'] = "Privatne Stranice"; // 5.1.0

// Admin > Opcije
$LNG['a_s_header'] = "Izmeni Opcije";
$LNG['a_s_help'] = "Pomoc"; // 5.1.0

$LNG['a_s_general'] = "Glavne Opcije";
$LNG['a_s_admin_password'] = "Admin Lozinka";
$LNG['a_s_list_name'] = "Ime Vase Top Liste";
$LNG['a_s_list_url'] = "URL za direktorijum vase Top Liste";
$LNG['a_s_default_language'] = "Glavni Jezik";
$LNG['a_s_your_email'] = "Vasa E-mail adresa";

$LNG['a_s_sql'] = "SQL Opcije";
$LNG['a_s_sql_type'] = "Vrsta Baze"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Baza";
$LNG['a_s_sql_username'] = "Korisnicko Ime";
$LNG['a_s_sql_password'] = "Lozinka";

$LNG['a_s_ranking'] = "Opcije Ocenivanja";
$LNG['a_s_num_list'] = "Broj Sajtova po Stranici"; // 5.0
$LNG['a_s_ranking_period'] = "Vreme Ocenivanja"; // 5.0
$LNG['a_s_ranking_method'] = "Metoda Ocenivanja"; // 5.0
$LNG['a_s_ranking_average'] = "Ocene po Proseku ili %s"; // 5.0
$LNG['a_s_featured_member'] = 'Izabrani Sajt - Dodaj  {$featured_member} u wrapper.html kad ovu aktivirate.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Broj sajtova da koriste _top izgled za";
$LNG['a_s_ad_breaks'] = "Prikazi Reklame posle (Odvoj zarezima) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "U prazna polja upisi \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Opcije za Korisnike";
$LNG['a_s_active_default'] = "Novim Clanovima je potrebno odobrenje pre aktivacije";
$LNG['a_s_active_default_review'] = "Za nove komentare je potrebno odobrenje admina";
$LNG['a_s_delete_after'] = "Izbrisi sajtove koje nisu imali glasova posle ovliko dana (stavi 0 da deaktiviras ovu opciju)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "E-mail admin-u kad se novi sajt registruje"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "E-mail admin-u kad se nova revizija posalje"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maximalna duzina banera (stavi 0 da deaktiviras ovu opciju)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximalna Velcina banera (stavi 0 da deaktiviras ovu opciju)"; // 4.2.0
$LNG['a_s_default_banner'] = "Koji baner koristiti ako Clan ne upise svoj baner URL";

$LNG['a_s_button'] = "Opcije Dugamdi";
$LNG['a_s_ranks_on_buttons'] = "Ocene na Dugmadima -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Dugme Statistike"; // 4.2.0
$LNG['a_s_button_url'] = "Ako Da/Ne - Glavni Baner za Sajtove za Glasanje"; // 4.0
$LNG['a_s_button_dir'] = "Ako Da - URL direktorijuma u kom su dugmadi"; // 4.0
$LNG['a_s_button_ext'] = "Ako Da - Extenzija dugmadi (gif, png, jpg, itd.)"; // 4.0
$LNG['a_s_button_num'] = "Ako Da - Koliko ste dugmadi napravili"; // 4.0
$LNG['a_s_google_friendly_links'] = "Prijateljski Linkovi - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gejtvej Stranica protiv Varanja";
$LNG['a_s_captcha'] = "Veca sigurnost za Uclanjenje (protiv spamera) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Sigurno pitanje i odgovor protiv spamera (ostavi prazno ako ne zelite ovu opciju) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Ostale Opcije";
$LNG['a_s_search'] = "Pretraga";
$LNG['a_s_time_offset'] = "Vreme vaseg Servera (u satima)";

$LNG['a_s_on'] = "Da";
$LNG['a_s_off'] = "Ne";
$LNG['a_s_days'] = "Dani";
$LNG['a_s_months'] = "Meseci";
$LNG['a_s_weeks'] = "Nedelje"; // 4.2.0
$LNG['a_s_yes'] = "Da";
$LNG['a_s_no'] = "Ne";
$LNG['a_s_answer'] = "Odgovor"; // 5.2.0

$LNG['a_s_updated'] = "Promene Uspesno spasene.";

// Admin > Izgled i Kategorije // 5.0
$LNG['a_skins_header'] = "Izgled i Kategorije"; // 5.0
$LNG['a_skins_default'] = "Glavni Izgled"; // 5.0
$LNG['a_skins_set_default'] = "Stavi Glavni Izgled"; // 5.0
$LNG['a_skins_anon'] = "Nepoznat"; // 5.0
$LNG['a_skins_default_done'] = "Glavni Izgled Izabran."; // 5.0
$LNG['a_skins_categories_done'] = "Izgled Kategorija Izabran."; // 5.0
$LNG['a_skins_new_category_done'] = "Nova Kategorija Napravljena."; // 5.0
$LNG['a_skins_delete_done'] = "Kategorija Izbrisana."; // 5.0
$LNG['a_skins_delete_error'] = "Kategorija se ne moze izbrisati. Morate minimalno jednu kategoriju imati."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategorija Izmenjena."; // 5.0
$LNG['a_skins_invalid_skin'] = "Izgled nije validan: %s.  Pokusaj Ponovo."; // 5.0
$LNG['a_skins_categories'] = "Kategorije"; // 5.0
$LNG['a_skins_new_category'] = "Napravi novu Kategoriju"; // 5.0
$LNG['a_skins_set_skins'] = "Postavi novu Kategoriju"; // 5.0
$LNG['a_skins_edit_category'] = "Izmeni Kategoriju"; // 5.0
$LNG['a_skins_category_name'] = "Ime Kategorije"; // 5.0
$LNG['a_skins_diff_skins'] = "Ako zelite drugi izgled za svaku kategoriju, izaberi ispod."; // 5.0
?>
