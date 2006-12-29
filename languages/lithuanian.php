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
$translation = 'Lithuanian (Lietuviskai)';
$translator_name = 'Edgaras Urbonavicius';
$translator_email = 'kudikelis@gmail.com';
$translator_url = 'http://top.e-manija.net/';

// Set this to the character encoding of your translation
$LNG['charset'] = "windows-1257";

// Global
$LNG['g_form_submit_short'] = "Eiti";
$LNG['g_username'] = "Vartotojo vardas";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Pavadinimas";
$LNG['g_description'] = "Aprağymas";
$LNG['g_category'] = "Kategorija"; // 4.1.0
$LNG['g_email'] = "Elektr. pağtas";
$LNG['g_banner_url'] = "Banerio URL";
$LNG['g_password'] = "Slaptaşodis";
$LNG['g_average'] = "Vidutiniğkai";
$LNG['g_today'] = "Ğiandiena";
$LNG['g_yesterday'] = "Vakar";
$LNG['g_daily'] = "Dienos"; // 5.0
$LNG['g_this_month'] = "Ğá mënesá"; // 5.0
$LNG['g_last_month'] = "Praëjusiame mënesyje"; // 5.0
$LNG['g_monthly'] = "Mënesiai"; // 5.0
$LNG['g_this_week'] = "Ğia savaitæ"; // 5.0
$LNG['g_last_week'] = "Praeità savaitæ"; // 5.0
$LNG['g_weekly'] = "Savaitës"; // 5.0
$LNG['g_pv'] = 'Puslapio parodymai'; // 5.0
$LNG['g_overall'] = 'Viso'; // 5.0
$LNG['g_in'] = 'Atëjo'; // 5.0
$LNG['g_out'] = 'Iğëjo'; // 5.0
$LNG['g_unq_pv'] = "Unikalios perşiûros"; // 5.0
$LNG['g_tot_pv'] = "Viso perşiûrø"; // 5.0
$LNG['g_unq_in'] = "Unikalûs atëjo"; // 5.0
$LNG['g_tot_in'] = "Viso atëjo"; // 5.0
$LNG['g_unq_out'] = "Unikaliø iğëjo"; // 5.0
$LNG['g_tot_out'] = "Viso iğëjo"; // 5.0
$LNG['g_invalid_u_or_p'] = "Neteisingas vartotojo vardas ar slaptaşodis.  Bandykite dar kartà."; // 5.0
$LNG['g_invalid_u'] = "Neteisingas vartotojo vardas.  Bandykite dar kartà."; // 5.0
$LNG['g_invalid_p'] = "Neteisingas vartotojo slaptaşodis. Bandykite dar kartà."; // 5.0
$LNG['g_session_expired'] = "Sesija uşdaryta.  Bandykite dar kartà."; // 5.0
$LNG['g_error'] = "Klaida"; // 5.0
$LNG['g_delete_install'] = "Dël saugumo sumetimø, jûs turite iğtrinti katalogà /install preiğ paleisdami skriptà."; // 5.0

// Edit Account
$LNG['edit_header'] = "Mano duomenys";
$LNG['edit_info_edited'] = "JÛsu duomenys sëkmingai pakeisti.";
$LNG['edit_password_blank'] = "Palikite ğá laukà tuğèia, kad palikti esama slaptaşodi."; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Øëşçîâàÿ ñòğàíèöà ğåéòèíãà";
$LNG['gateway_text'] = "Äëÿ ïğåäîòâğàùåíèÿ íàêğóòêè âû ïåğåíàïğàâëåíû íà øëşçîâóş ñòğàíèöó. Íàæìèòå íà ññûëêó íèæå äëÿ âõîäà â ğåéòèíã.";
$LNG['gateway_vote'] = "Uşeiti ir balsuoti";
$LNG['gateway_no_vote'] = "Uşeiti be balsavimo"; // 5.0

// Install
$LNG['install_header'] = "Instaliuoti";
$LNG['install_welcome'] = "Sveiki atvyke á programos Aardvark Topsites PHP 5 instaliacija. Uşpildykite formà, pateikta şemiau, kad pradëti instaliacija.";
$LNG['install_sql_prefix'] = "Pridëlis prie lenteles pavadinimo - keiskite tiktaitada, jeigu jûs norite paleisti daugiau nei vienà reitinga toje pacioje duomenø bazëje.";
$LNG['install_error_chmod'] = "Instaliacija negalima, nes ji neturi priëjimo prie failo settings_sql.php.  Patikrinkite ar jûs suteikëte teises 666 (chmod 666) failui settings_sql.php.";
$LNG['install_error_sql'] = "Instaliacija negalima, nes nera galimybës prisijunkti prie duomenø bazës. Gráşkite ir patikrinkite prisijungimo duomenis.";
$LNG['install_done'] = "Jûsu Topsites puslapis sëkmingai instaliuotas. \Nedelsdami iğtrinkite katalogà /install.";
$LNG['install_your'] = "Jûsu TOP puslapis Topsites";
$LNG['install_admin'] = "Administracija";
$LNG['install_manual'] = "Valdymas";
$LNG['upgrade_header'] = "Atnaujinimas";
$LNG['upgrade_welcome'] = "Sveiki atvyke i atnaujinimo programà Aardvark Topsites PHP 5. Prieğ atnaujindami prağome pasidaryti duomenø bazes kopijà.";
$LNG['upgrade_version'] = "Óäîñòîâåğüòåñü, ÷òî Âû îáíîâëÿåòå âåğñèş %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Atnaujinimas galimas tik versijoms Aardvark Topsites PHP 4.1.0 ir naujesnioms(aukğtesnioms).";
$LNG['upgrade_done'] = "Jûsu kopija Topsites puslapio buvo atnaujinta. Nedelsdami iğtrinkite katalogà /install.";

// Join
$LNG['join_header'] = "Uşregistruoti puslapi";
$LNG['join_enter_text'] = "Áveskite tekstà, kuris nurodytas şemiau:"; // 4.2.2
$LNG['join_user'] = "Dalyvis"; // 5.0
$LNG['join_website'] = "Web puslapis"; // 5.0
$LNG['join_error_username'] = "Vartotojo vardas gali buti tik iğ: raidşiø, skaièiø (raidës lotyniğkos)."; // 5.0
$LNG['join_error_username_duplicate'] = "Naudokite kita varda, toks jau uşregistruotas."; // 5.0
$LNG['join_error_url'] = "Áveskite teisingà adresà URL.";
$LNG['join_error_email'] = "Áveskite teisingà elektr. pağto adresà.";
$LNG['join_error_title'] = "Áveskite jûsø puslapio pavadinimà.";
$LNG['join_error_password'] = "Áveskite slaptaşodá.";
$LNG['join_error_urlbanner'] = "Áveskite egzistuojanèio banerio adresa. Nepildykite ğio lauko jei neturite banerio. Jis turi buti maşesis"; // 4.0
$LNG['join_error_time'] = "Neatnaujinkite puslapio(refresh) su registracijos patvirtinimu."; // 4.2.0
$LNG['join_error_captcha'] = "Reikğmë kuria jûs ávedëte nesutampa su tuo, kas parodyta paveikslëlyje ."; // 4.2.2
$LNG['join_thanks'] = "Dëkojame uş registracijà! Ádëkite ğá koda savo puslapyje.";
$LNG['join_change_warning'] = "Kodo pakeitimas gali duoti netinkama kodo veikimà.";
$LNG['join_welcome'] = "Sveiki atvyke á %s";
$LNG['join_welcome_admin'] = "A new member has joined your topsites list.";
$LNG['join_approve'] = "Jûsø puslapis pasirodys po administracijos patvirtinimo."; // 5.1.0
$LNG['join_type'] = "Tipas"; // 5.1.0
$LNG['join_standard'] = "Paprastas"; // 5.1.0

// Link Code
$LNG['link_code_header'] = "Nuorodos kodas"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Slaptaşodis prarastas"; // 5.0
$LNG['lost_pw_forgot'] = "Pamirğote slaptaşodi?"; // 5.0
$LNG['lost_pw_get'] = "Gauti slaptaşodá"; // 5.0
$LNG['lost_pw_emailed'] = "Patikrinkite jûsø elektr. pağtà, jums iğsiûstas laiğkas su tolesniais nurodymais."; // 5.0
$LNG['lost_pw_email'] = "Kad gautumëte nauja slaptaşodá spauskite èia:"; // 5.0
$LNG['lost_pw_new'] = "Áveskite nauja slaptaşodi"; // 5.0
$LNG['lost_pw_set_new'] = "Iğsaugoti nauja slaptaşodi"; // 5.0
$LNG['lost_pw_finish'] = "Jûsø slaptaşodis atnaujintas."; // 5.0

// Main Page
$LNG['main_header'] = "Reitingas"; // 5.0
$LNG['main_all'] = "Visos kategorijos"; // 4.2.0
$LNG['main_method'] = "Reitingo tipas";
$LNG['main_members'] = "Dalyviai";
$LNG['main_menu_rankings'] = "Reitingas";
$LNG['main_menu_join'] = "Tapti dalyviu";
$LNG['main_menu_random'] = "Atsitiktinis puslapis";
$LNG['main_menu_search'] = "Paieğka";
$LNG['main_menu_lost_code'] = "Gauti kodà"; // 5.0
$LNG['main_menu_lost_password'] = "Gauti slaptaşodá"; // 5.0
$LNG['main_menu_edit'] = "Redagfuoti nustatymus";
$LNG['main_menu_user_cp'] = "Vartotojo nustatymai"; // 5.0
$LNG['main_featured'] = "Super vartotojas"; // 4.0.2
$LNG['main_executiontime'] = "Skripto paleidimo laikas"; // 4.0
$LNG['main_queries'] = "SQL uşklausø"; // 4.0
$LNG['main_powered'] = "naudojant";

// Ranking Table
$LNG['table_stats'] = "Statistika";
$LNG['table_unique'] = "Unikalûs";
$LNG['table_total'] = "Viso";
$LNG['table_rank'] = "Vieta";
$LNG['table_title'] = "Pavadinimas"; // 4.0
$LNG['table_description'] = "Aprağymas"; // 4.0
$LNG['table_movement'] = "Pakeitimai";
$LNG['table_up'] = "Pakilo"; // 5.0
$LNG['table_down'] = "Nukrito"; // 5.0
$LNG['table_neutral'] = "Be pakeitimu"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Ávertinimas ir atsiliepiimas";
$LNG['rate_rating'] = "Ávertinimas";
$LNG['rate_review'] = "Atsiliepimai  - naudoti HTML uşdrausta"; // 5.0
$LNG['rate_thanks'] = "Dëkojame uş jûsø ávertinimà.";
$LNG['rate_error'] = "Jûs jau balsavote uş ğá puslapá.";
$LNG['rate_back'] = "Gráşti á statistikà";
$LNG['rate_email_admin'] = "Â Âàø ğåéòèíã äîáàâèëè íîâûé îáçîğ ñàéòà."; // 5.1.0

// Search
$LNG['search_header'] = "Paieğka";
$LNG['search_off'] = "Paieğkos funkcija iğjungta.";
$LNG['search_no_sites'] = "Pagal duotus duomenis puslapio nerasta."; // 5.0
$LNG['search_prev'] = "Atgal"; // 3.2.1
$LNG['search_next'] = "Kitas"; // 3.2.1
$LNG['search_displaying_results'] = "Parodyta nuo %s iki %s iğ %s rezultatø <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistika";
$LNG['stats_info'] = "Informacija";
$LNG['stats_member_since'] = "Dalyvis nuo"; // 5.0
$LNG['stats_rating_avg'] = "Vidutinis balas";
$LNG['stats_rating_num'] = "Ávertinimø skaièius";
$LNG['stats_rate'] = "Ávertinkite ğá puslapá";
$LNG['stats_reviews'] = "Atsiliepimai";
$LNG['stats_allreviews'] = "Perşiurëti visus atsiliepimus"; // 4.0
$LNG['stats_week'] = "Savaitë"; // 5.0
$LNG['stats_highest'] = "Geriausias parodymas"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Geriausiû puslapiø %s "; // 4.0
$LNG['ssi_new'] = "%s naujø dalyviø"; // 5.0
$LNG['ssi_all'] = "Visi puslapiai"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Vartotojo nustatymai"; // 5.0
$LNG['user_cp_login'] = "Prisijungti"; // 5.0
$LNG['user_cp_logout'] = "Atsijungti"; // 5.0
$LNG['user_cp_welcome'] = "SVeiki uşëje á vartotojo nustaymus.  Naudokite nuorodas kairëje valdyti jûsø nuûstatymus."; // 5.0
$LNG['user_cp_logout_message'] = "Jûs atsijungëte iğ vartotojo nustatymø."; // 5.0
$LNG['user_cp_login_long'] = "Eikite á systemà naudodami savo vartotojo varda ir slaptaşodi ar jûsø atvira identifikatoriu."; // 5.1.0
$LNG['user_cp_openid'] = "Atviras identifikatorius"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Neámanoma rasti serveri au atviru identifikatoriumi %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Jûs turite uşregistruoti puslapi, kad gautumëte priëjima prie vartotojo nustatymø."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Autorizacijos klaida. Bandykite dar kartà."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Jûs turite turëti teises atliekankt ğá veiksmà.  Bandykite dar kartà."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Klaida serveryje: %s"; // 5.1.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Leisti naujam dalyviui prisijungti"; // 5.0
$LNG['a_approve'] = "Leisti"; // 4.0
$LNG['a_approve_none'] = "Nëra vartotojø laukianèiø patvirtinimo."; // 4.0
$LNG['a_approve_done'] = "Dalyvis patvirtintas."; // 4.0
$LNG['a_approve_dones'] = "Naujas dalyvis patvirtintas."; // 4.0
$LNG['a_approve_sel'] = "Pasirinkta:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Leisti nauajs perşiûras"; // 5.0
$LNG['a_approve_rev_none'] = "Nëra perşiûrø laukianèiø patvirtinimo."; // 5.0
$LNG['a_approve_rev_done'] = "Perşiûra buvo patvirtinta."; // 5.0
$LNG['a_approve_rev_dones'] = "Perşiûra patvirtinta."; // 5.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Sukurimas specializuoto puslapio"; // 5.1.0
$LNG['a_create_page_id'] = "Puslapio indefikatorius - bus panaudotas URL ir jame turi buti naudojamos tik anglu kalbos raides, skaiciai, pabroukymu ir bruksneliu"; // 5.1.0
$LNG['a_create_page_error_id'] = "Puslapio indefikatoriuje turi buti naudojamos tik anglu kalbos raides, skaiciai, pabroukymu ir bruksneliu. Gryzkit ir istaisykit puslapio indefikatoriu."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Puslapis su tokiu indefikatoriu jau egzistuoja. Sugryzkit ir isrinkit nauja indefikatoriu."; // 5.1.0
$LNG['a_create_page_created'] = "Puslapis sukurtas. Jus galit dadeti nuoroda i %s rankiniu budu i faila wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Pasalinti vartotoja"; // 5.0
$LNG['a_del_headers'] = "Pasalinti vartotojus"; // 5.0
$LNG['a_del_done'] = "Vartotojai buvo pasalintas."; // 5.0
$LNG['a_del_dones'] = "Vartotojai buvo pasalinti."; // 5.0
$LNG['a_del_warn'] = "Jus tikras, kad norit pasalinti %s?"; // 5.0
$LNG['a_del_multi'] = "Viso %s vartotoju"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Pasalinti filtruojanti zodi"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Pasalinti filtruojancius zodzius"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtruojantis zodis pasalintas"; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtruojantys zodziai pasalinti."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Jus tikras, kad norit pasalinti %s is filtruojanciu zodziu saraso?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "Tai %s zodziai"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Klaidingas indefikatorius filtruojancio zodzio. Bandykit dar karta."; // 5.1.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Pasalinti specializuota puslapi"; // 5.1.0
$LNG['a_del_page_headers'] = "Pasalinti specializuotus puslapius"; // 5.1.0
$LNG['a_del_page_done'] = "Specializuotas puslapis pasalintas."; // 5.1.0
$LNG['a_del_page_dones'] = "Specializuoti puslapiai pasalinti."; // 5.1.0
$LNG['a_del_page_warn'] = "Jus tikras, kad norit pasaliti %s?"; //5.1.0
$LNG['a_del_page_multi'] = "Tai %s dalyviu"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Netesingas indefikatorius specializuoto puslapio. Bandykit dar karta."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Pasalinti apziura"; // 5.0
$LNG['a_del_rev_headers'] = "Pasalinti apziuras"; // 5.0
$LNG['a_del_rev_done'] = "Apziura buvo pasalinta."; // 5.0
$LNG['a_del_rev_dones'] = "Apziuros buvo pasalintos."; // 5.0
$LNG['a_del_rev_warn'] = "Jus tikras, kad norit pasalinti sita apziura?"; //5.0
$LNG['a_del_rev_warns'] = "Jus tikras, kad norit pasalinti sias apziuras?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Neteisingas apziuros ID. Bandykti dar karta."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Redaguoti vartotoja"; // 5.0
$LNG['a_edit_site_is'] = "Tai saitas"; // 4.0
$LNG['a_edit_active'] = "Aktivus (reitinge)"; // 4.0
$LNG['a_edit_inactive'] = "Neaktivus (ne reitinge)"; // 5.0
$LNG['a_edit_edited'] = "Vartotojas buvo redaguotas.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Redaguoti filtruojanti zodi"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtruojantis zodis buvo redaguotas."; // 5.1.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Redaguoti specializuota puslapi"; // 5.1.0
$LNG['a_edit_page_content'] = "Turinys - Jus galit naudoti HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "Puslapis redaguotas."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Redaguoti apziura"; // 5.0
$LNG['a_edit_rev_edited'] = "Apziura buvo redaguota.";

// Admin > Email Members
$LNG['a_email_header'] = "Siusti Email vartotojams"; // 5.0
$LNG['a_email_subject'] = "Òåmà"; // 4.2.0
$LNG['a_email_message'] = "Zinute"; // 4.2.0
$LNG['a_email_msg_sent'] = "Email buvo issiustas %s"; // 5.0
$LNG['a_email_not_sent'] = "Email negali buti issiutas %s"; // 5.0
$LNG['a_email_sent'] = "%s varototoju buvo issiutas email."; // 4.2.0
$LNG['a_email_failed'] = "%s vartotoju email nebuvo issiutas."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Jus isejot is administratoriaus akkaunto."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administratorius"; // 5.0
$LNG['a_main'] = "Sveiki atvyke i administratoriaus panele. Naudokite nuorodos kaireje puseje puslaio jusu reitingo valdymui."; // 5.0
$LNG['a_main_approve'] = "1 saitas laukia leidimo."; // 5.0
$LNG['a_main_approves'] = "%s saitu laukia leidimo."; // 5.0
$LNG['a_main_approve_rev'] = "1 apziura laukia leidimo."; // 5.0
$LNG['a_main_approve_revs'] = "%s apziuru laukia leidimo."; // 5.0
$LNG['a_main_your'] = "Jusu versija"; // 5.0
$LNG['a_main_latest'] = "Galutine versija"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP web saitas</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Vartotoju valdymas"; // 5.0
$LNG['a_man_actions'] = "Veiksmai"; // 4.2.0
$LNG['a_man_edit'] = "Redaguoti"; // 4.2.0
$LNG['a_man_delete'] = "Pasalinti"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Pasirinkti viska"; // 5.0
$LNG['a_man_none'] = "Nieko nesirinkti"; // 5.0
$LNG['a_man_del_sel'] = "Pasalinti pasirinkima"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Nenormuotos leksikos filtras"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Iveskite zodi ir zemiau jo pakeitima. Pavyzdziui, Jus galite ivesti \"lochas\" i laukeli zodi ir \"l***as\" i pakeitimo laukeli."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Tikslus sutapimas pakeis tik pilnai sutampanti zodi. Globalinis sutapimas pakeis bet kuria zodzio dali.Pavyzdziui, globalinis pakeitimas zodzio \"suka\" taip pat pakeis zodi \"persuka\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Zodis"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Pakeitimas"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Sutapimas"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Tikslus"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globalinis"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtruoti zodi"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "Zodis \"%s\" buvo ikeltas i nenormuotos leksikos zodziu sarasa."; // 5.1.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Specializuotais puslapiais valdymas"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Saitu apziuros valdymas"; // 5.0
$LNG['a_man_rev_enter'] = "Iveskite vartotojo varda, norint redaguoti saito apziura."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Apziura"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Meniu";
$LNG['a_menu_main'] = "I pradzia"; // 5.0
$LNG['a_menu_approve'] = "Patikrinti naujus vartotojus";
$LNG['a_menu_manage'] = "Vartotoju valdymas"; // 4.2.0
$LNG['a_menu_settings'] = "Pakeisti nustatymus"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Nenormuotos leksikos filtras"; // 5.1.0
$LNG['a_menu_skins'] = "Sablonai ir kategorijos"; // 5.0
$LNG['a_menu_approve_reviews'] = "Patikrinti naujas apziuras"; // 5.0
$LNG['a_menu_manage_reviews'] = "Redaguoti apziuras"; // 5.0
$LNG['a_menu_email'] = "Siusti email vartotojams";
$LNG['a_menu_delete_review'] = "Pasalinti apziura";
$LNG['a_menu_logout'] = "Iseiti";
$LNG['a_menu_delete'] = "Pasalinti vartotoja";
$LNG['a_menu_edit'] = "Redaguoti vartotoja";
$LNG['a_menu_create_page'] = "Specializuoto puslapio kurimas"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Specializuotu puslapiu valdymas"; // 5.1.0
$LNG['a_header_members'] = "Vartotojai"; // 5.0
$LNG['a_header_settings'] = "Nustatymai"; // 5.0
$LNG['a_header_reviews'] = "Aprasymai"; // 5.0
$LNG['a_header_pages'] = "Specializuoti puslapiai"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Pakeisti nustatymus";
$LNG['a_s_help'] = "Pagalba"; // 5.1.0

$LNG['a_s_general'] = "Pagrindiniai nustatymai";
$LNG['a_s_admin_password'] = "Administratoriaus slaptazodis";
$LNG['a_s_list_name'] = "Jusu reitingo pavadinimas";
$LNG['a_s_list_url'] = "URL direktorijos, kurioje nustatytas reitingas";
$LNG['a_s_default_language'] = "Pagrindine kalba";
$LNG['a_s_your_email'] = "Jusu emailo adresas";

$LNG['a_s_sql'] = "Duomenu bazes nustatymai";
$LNG['a_s_sql_type'] = "Duomenu bazes tipas"; // 4.1.0
$LNG['a_s_sql_host'] = "Hosto pavadinimas";
$LNG['a_s_sql_database'] = "Bazes pavadinimas";
$LNG['a_s_sql_username'] = "Vartotojo vardas";
$LNG['a_s_sql_password'] = "Slaptazodis";

$LNG['a_s_ranking'] = "Reitingo nustatymai";
$LNG['a_s_num_list'] = "Vartotoju skaicius viename puslapyje"; // 5.0
$LNG['a_s_ranking_period'] = "Reitingo periodas"; // 5.0
$LNG['a_s_ranking_method'] = "Reitingo metodas"; // 5.0
$LNG['a_s_ranking_average'] = "Reitingas pagal vidutines reiksmes arba pagal %s"; // 5.0
$LNG['a_s_featured_member'] = 'Perspektivus vartotojas - ikelkit {$featured_member} i faila wrapper.html po sio nustatymo pajungimo.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Vartotoju skaicius, kurie pazimeti kaip _top";
$LNG['a_s_ad_breaks'] = "Rodyti reklama po siu reiksmiu (atskirkit kableliais) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_member'] = "Dalyviu nustatymai";
$LNG['a_s_active_default'] = "Ar reikalingas leidymas naujam varototjui pries tai, kai jis pasirodis su reitingu";
$LNG['a_s_active_default_review'] = "Ar reikia tikrinti naujas apziuras pries tai, kai jos bus pasiekiamos visiems";
$LNG['a_s_delete_after'] = "Po keliu dienu neveiksmingumo salinti neaktivuis vartotojus (jai pasirinkti 0, salinami nebus)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Siusti emila administratoriui kai registruojasi naujas vartotojas"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Siusti emaila administratoriui kai gaunama nauja apziura"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maksimalus vartotojo baneriaus plotis (jai pasirinkti 0, apribojimu nebus)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maksimalus vartotojo baneriaus aukstis (jai pasirinkti 0, apribojimu nebus)"; // 4.2.0
$LNG['a_s_default_banner'] = "Baneris pagal nutylejima tiems, kas neuzsikrove savo";

$LNG['a_s_button'] = "Reitingo mygtuko nustatymai";
$LNG['a_s_ranks_on_buttons'] = "Reiksmes ant mygtuku -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Mygtukas su statystika"; // 4.2.0
$LNG['a_s_button_url'] = "Jaigu isrinktas \"taip\" arba \"ne\" - tam kad butu paroditi vartotojai saite bus isrinkti URL mygtukai pagal nutylejima"; // 4.0
$LNG['a_s_button_dir'] = "Jaigu isrinktas \"taip\" - URL direktorijos, kurioje yra mygtukas"; // 4.0
$LNG['a_s_button_ext'] = "Jaigu isrinktas \"taip\" - mygtuko failo pletymas (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Jaigu isrinktas \"taip\" - mygtuku skaicius, kuri Jus padarysitå"; // 4.0
$LNG['a_s_google_friendly_links'] = "Sarasas panasus i Google - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_other'] = "Kiti nustatymai";
$LNG['a_s_search'] = "Paieska";
$LNG['a_s_time_offset'] = "Reitingo laiko paslinkimas pagal serverio laiko santiki (valandom)";
$LNG['a_s_gateway'] = "Øëşçîâàÿ ñòğàíèöà äëÿ ïåğåíàïğàâëåíèÿ íàêğóò÷èêîâ";
$LNG['a_s_captcha'] = "Simboliu ivedimo patikrinimas registravimo metu (apsauga nuo spamo) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_on'] = "Ijungti";
$LNG['a_s_off'] = "Isjungti";
$LNG['a_s_days'] = "Dienu";
$LNG['a_s_months'] = "Menesiu";
$LNG['a_s_weeks'] = "Savaiciu"; // 4.2.0
$LNG['a_s_yes'] = "Taip";
$LNG['a_s_no'] = "Ne";

$LNG['a_s_updated'] = "Jusu nustatymai buvo atnaujinti.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Sablonai ir kategorijos"; // 5.0
$LNG['a_skins_default'] = "Sablonas pagal nutylejima"; // 5.0
$LNG['a_skins_set_default'] = "Nustatyti sablona pagal nutylejima"; // 5.0
$LNG['a_skins_anon'] = "Anonymous"; // 5.0
$LNG['a_skins_default_done'] = "Sablonas pagal nutylejima buvo isrinktas."; // 5.0
$LNG['a_skins_categories_done'] = "Kategorijai sablonas buvo isrinktas."; // 5.0
$LNG['a_skins_new_category_done'] = "Nauja kategorija sukurta."; // 5.0
$LNG['a_skins_delete_done'] = "Kategorija buvo panaikinta."; // 5.0
$LNG['a_skins_delete_error'] = "Kategorija negali buti pasalinta, nes reitinge turi buti nors viena kategorija."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategorija buvo redaguota."; // 5.0
$LNG['a_skins_invalid_skin'] = "Neteisingas sablonas: %s. Bandykite dar karta."; // 5.0
$LNG['a_skins_categories'] = "Kategorijos"; // 5.0
$LNG['a_skins_new_category'] = "Sukurti naujas kategorijos"; // 5.0
$LNG['a_skins_set_skins'] = "Isrinktas sablonas kategorijai"; // 5.0
$LNG['a_skins_edit_category'] = "Redaguoti kategorija"; // 5.0
$LNG['a_skins_category_name'] = "Kategorijos pavadinimas"; // 5.0
$LNG['a_skins_diff_skins'] = "Jaigu jus norite isrinkti skirtingus sablonus skirtingoms kategorijoms, isrinkite jas zemiau."; // 5.0
?>
