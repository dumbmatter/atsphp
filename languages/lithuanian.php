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
$translation = 'Lithuanian (Lietuvi&#371;)';
$translator_name = 'MNK Group';
$translator_email = 'info.klausk@gmail.com';
$translator_url = 'http://mnk.xz.lt/';

// Set this to the character encoding of your translation
$LNG['charset'] = "utf-8";

// Global
$LNG['g_form_submit_short'] = "Go";
$LNG['g_username'] = "Vartotojo vardas";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Antra&#353;t&#279;";
$LNG['g_description'] = "Apra&#353;ymas";
$LNG['g_category'] = "Kategorija"; // 4.1.0
$LNG['g_email'] = "El. Pa&#353;tas";
$LNG['g_banner_url'] = "Banerio URL";
$LNG['g_password'] = "Slapta&#382;odis";
$LNG['g_average'] = "Vidurkis";
$LNG['g_today'] = "&#352;iandien";
$LNG['g_yesterday'] = "Vakar";
$LNG['g_daily'] = "Kas Dien&#261;"; // 5.0
$LNG['g_this_month'] = "&#352;&#303; M&#279;nes&#303;"; // 5.0
$LNG['g_last_month'] = "Praeit&#261; M&#279;nes&#303;"; // 5.0
$LNG['g_monthly'] = "Kas M&#279;nes&#303;"; // 5.0
$LNG['g_this_week'] = "&#352;i&#261; Savait&#281;"; // 5.0
$LNG['g_last_week'] = "Praeit&#261; Savait&#281;"; // 5.0
$LNG['g_weekly'] = "Kas Savait&#281;"; // 5.0
$LNG['g_pv'] = "Puslapio Parodymai"; // 5.0
$LNG['g_overall'] = "Viso"; // 5.0
$LNG['g_in'] = "&#302;&#279;jo"; // 5.0
$LNG['g_out'] = "I&#353;&#279;jo"; // 5.0
$LNG['g_unq_pv'] = "Unikal&#363;s"; // 5.0
$LNG['g_tot_pv'] = "Viso"; // 5.0
$LNG['g_unq_in'] = "Unikal&#363;s &#302;&#279;jo"; // 5.0
$LNG['g_tot_in'] = "Viso &#302;&#279;jo"; // 5.0
$LNG['g_unq_out'] = "Unikal&#363;s I&#353;&#279;jo"; // 5.0
$LNG['g_tot_out'] = "Viso I&#353;&#279;jo"; // 5.0
$LNG['g_invalid_u_or_p'] = "Neteisingas vartotojo vardas arba slapta&#382;odis. Pra&#353;ome bandyti dar kart&#261;."; // 5.0
$LNG['g_invalid_u'] = "Neteisingas vartotojo vardas. Pra&#353;ome bandyti dar kart&#261;."; // 5.0
$LNG['g_invalid_p'] = "Neteisingas slapta&#382;odis. Pra&#353;ome bandyti dar kart&#261;."; // 5.0
$LNG['g_session_expired'] = "J&#363;s&#371; sesija baig&#279;si. Pra&#353;ome bandyti dar kart&#261;."; // 5.0
$LNG['g_error'] = "Klaida"; // 5.0
$LNG['g_delete_install'] = "Saugumo sumetimais, J&#363;s privalote i&#353;trinti install direktorij&#261;, kad script'as veikt&#371; be klaid&#371;."; // 5.0
$LNG['g_ip'] = "IP Adresas"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Keisti Vartotoj&#261;";
$LNG['edit_info_edited'] = "J&#363;s&#371; vartotojas s&#279;kmingai pakeistas.";
$LNG['edit_password_blank'] = "Palikite &#353;&#303; laukel&#303; tu&#353;&#269;i&#261;, kad paliktum&#279;te dabartin&#303; slapta&#382;od&#303;"; // 4.0
$LNG['edit_delay'] = "Pakeitimams J&#363;s&#371; svetain&#279;s antra&#353;tei ir URL turi pritarti administratorius, kai jis pritars matysite pakeitimus."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Top'&#371; Svetain&#279;s Vartai";
$LNG['gateway_text'] = "Kad i&#353;vengtume suk&#269;iavimo, suk&#363;r&#279;me &#353;&#303; puslap&#303;. Spauskite nuorod&#261; apa&#269;ioje, kad &#303;eitum&#279;te &#303; top'us.";
$LNG['gateway_vote'] = "&#302;eiti ir balsuoti";
$LNG['gateway_no_vote'] = "&#302;eiti be balsavimo"; // 5.0

// Install
$LNG['install_header'] = "Instaliacija";
$LNG['install_welcome'] = "Sveiki atvyk&#281; &#303; Aardvark Topsites PHP 5. U&#382;pildykite form&#261; apa&#269;ioje, kad instaliuotum&#279;te script'&#261;.";
$LNG['install_sql_prefix'] = "Lenteli&#371; prefix'as - pakeiskite tik tada, jei naudojate daugiau negu vien&#261; top'&#371; svetain&#279; toje pa&#269;ioje duombaz&#279;je";
$LNG['install_error_chmod'] = "Nesigauna ra&#353;yti &#303; settings_sql.php. &#302;sitikinkite, kad failui settings_sql.php pakeisti CHMOD atributai &#303; 666.";
$LNG['install_error_sql'] = "Nesigauna susijungti su SQL duombaze. Pra&#353;ome gr&#303;&#382;ti ir patikrinti SQL nustatymus.Could not connect to the SQL database.";
$LNG['install_done'] = "J&#363;s&#371; top'&#371; svetain&#279; instaliuota. Dabar i&#353;trinkite &#353;i&#261; direktorij&#261;.";
$LNG['install_your'] = "J&#363;s&#371; top'ai";
$LNG['install_admin'] = "Administravimas";
$LNG['install_manual'] = "&#381;inynas";
$LNG['upgrade_header'] = "Atnaujinti";
$LNG['upgrade_welcome'] = "Sveiki atvyk&#281; &#303; Aardvark Topsites PHP 5. Prie&#353; atnaujinim&#261; nepamir&#353;kite i&#353;saugoti duomenis.";
$LNG['upgrade_version'] = "Pra&#353;ome &#303;sitikinti, kad atnaujonate i&#353; versijos %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Atnaujinim&#261; palaiko tik Aardvark Topsites PHP 4.1.0 arba naujesn&#279;.";
$LNG['upgrade_done'] = "J&#363;s&#371; top'&#371; svetain&#279; atnaujinta. Dabar i&#353;trinkite &#353;i&#261; direktorij&#261;.";
$LNG['install_mailing_list'] = "Jei nor&#279;tum&#279;te prisijungti prie Aardvark Topsites PHP naujien&#371; prenumeratos, &#303;ra&#353;ykite &#382;emiau savo el. pa&#353;to adres&#261;."; // 5.2.0

// Join
$LNG['join_header'] = "Registruotis";
$LNG['join_enter_text'] = "&#302;ra&#353;kyte tekst&#261; kuris rodomas paveiksl&#279;lyje apa&#269;ioje"; // 4.2.2
$LNG['join_enter_text_read'] = "Ne&#303;skaitote?"; // 5.2.0
$LNG['join_user'] = "Vartotojas"; // 5.0
$LNG['join_website'] = "Svetain&#279;"; // 5.0
$LNG['join_banner_size'] = "(Maksimalus dydis: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "&#302;ra&#353;ykite teising&#261; vard&#261;: naudokite tik raides, skai&#269;ius, pabraukimus (_) ir br&#363;k&#353;enlius (-)."; // 5.0
$LNG['join_error_username_duplicate'] = "&#302;ra&#353;ykite teising&#261; vard&#261;: toks vartotojo vardas jau egzistuoja."; // 5.0
$LNG['join_error_url'] = "&#302;ra&#353;ykite teising&#261; svetain&#279;s URL.";
$LNG['join_error_email'] = "&#302;ra&#353;ykite teising&#261; el. pa&#353;to adres&#261;.";
$LNG['join_error_title'] = "&#302;ra&#353;ykite savo svetain&#279;s antra&#353;t&#281;.";
$LNG['join_error_password'] = "&#302;ra&#353;ykite slapta&#382;od&#303;.";
$LNG['join_error_confirm_password'] = "&#302;vesti slapta&#382;od&#382;iai nevienodi."; // 5.2.0
$LNG['join_error_urlbanner'] = "&#302;ra&#353;ykite teising&#261; banerio URL. Palikite tu&#353;&#269;i&#261; jei neturite."; // 5.2.0
$LNG['join_error_time'] = "Ne atnaujinkite registracijos patvirtinimo puslapio."; // 4.2.0
$LNG['join_error_captcha'] = "Tekstas kur&#303; &#303;ra&#353;&#279;te nesutampa su paveiksl&#279;liu."; // 4.2.2
$LNG['join_error_question'] = "J&#363;s&#371; atsakymas neteisingas. Pra&#353;ome pataisyti tai, kad parodytum&#279;te jog esate &#382;mogus, o ne robotas."; // 5.2.0
$LNG['join_thanks'] = "A&#269;i&#363;, kad u&#382;siregistravote! &#302;d&#279;kite &#353;&#303; kod&#261; &#303; savo svetain&#281; kad b&#363;tum&#279;te &#303;vertintas.";
$LNG['join_change_warning'] = "Jei pakeisite kod&#261;, tai neveiks.";
$LNG['join_welcome'] = "Sveiki atvyk&#281; &#303; %s";
$LNG['join_welcome_admin'] = "Naujas vartotojas u&#382;registravo svetain&#281; J&#363;s&#371; top'&#371; svetain&#279;je.";
$LNG['join_approve'] = "A&#269;i&#363;, kad u&#382;siregistravote! J&#363;s&#371; svetain&#279; bus parodyte s&#261;ra&#353;e kai administratorius jus patvirtins. J&#363;s gausite el. lai&#353;k&#261; su daugiau informacijos kai Jus patvirtins."; // 5.2.0
$LNG['join_type'] = "Vartotojo tipas"; // 5.1.0
$LNG['join_standard'] = "Standartinis"; // 5.1.0
$LNG['join_error_top'] = "Klaida buvo rasta. Pra&#353;ome i&#353;taisyti &#353;i&#261; klaid&#261; apa&#269;ioje."; // 5.2.0
$LNG['join_ban_top'] = "Rasta administratoriaus u&#382;draust&#371; dalyk&#371;!"; // 5.2.0
$LNG['join_security'] = "Apsauga"; // 5.2.0
$LNG['join_confirm_password'] = "Pakartokite slapta&#382;od&#303;"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Nuorodos Kodas"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Pamir&#353;au Salapta&#382;od&#303;"; // 5.0
$LNG['lost_pw_forgot'] = "Pamir&#353;ote savo slapta&#382;od&#303;?"; // 5.0
$LNG['lost_pw_get'] = "Gauti Slapta&#382;od&#303;"; // 5.0
$LNG['lost_pw_emailed'] = "Pra&#353;ome patikrinti savo el. pa&#353;t&#261; d&#279;l tolesni&#371; instrukcij&#371;."; // 5.0
$LNG['lost_pw_email'] = "Kad gautum&#279;te nauj&#261; slapta&#382;od&#303;, tiesiog eikite &#353;&#303; URL:"; // 5.0
$LNG['lost_pw_new'] = "&#302;ra&#353;ykite Nauj&#261; slapta&#382;od&#303;"; // 5.0
$LNG['lost_pw_set_new'] = "Nustatyti Nauj&#261; Slapta&#382;od&#303;"; // 5.0
$LNG['lost_pw_finish'] = "J&#363;s&#371; slapta&#382;odis pakeistas."; // 5.0

// Main Page
$LNG['main_header'] = "Reitingai"; // 5.0
$LNG['main_all'] = "Visos Svetain&#279;s"; // 4.2.0
$LNG['main_method'] = "Retingo Metodas";
$LNG['main_members'] = "Vartotojai";
$LNG['main_menu_rankings'] = "Reitingai";
$LNG['main_menu_join'] = "Registruotis";
$LNG['main_menu_random'] = "Bet Koks Narys";
$LNG['main_menu_search'] = "Paie&#353;ka";
$LNG['main_menu_lost_code'] = "Pame&#269;iau Kod&#261;"; // 5.0
$LNG['main_menu_lost_password'] = "Pame&#269;iau Slapta&#382;od&#303;"; // 5.0
$LNG['main_menu_edit'] = "Keisti Vartotojo Informacij&#261;";
$LNG['main_menu_user_cp'] = "Prisijungti"; // 5.0
$LNG['main_featured'] = "Geriausias Narys"; // 4.0.2
$LNG['main_executiontime'] = "Script'o paleidimo laikas"; // 4.0
$LNG['main_queries'] = "SQL u&#382;klaus&#371;"; // 4.0
$LNG['main_powered'] = "Sukurta su";

// Ranking Table
$LNG['table_stats'] = "Statistika";
$LNG['table_unique'] = "Unikal&#363;s";
$LNG['table_total'] = "Viso";
$LNG['table_rank'] = "&#302;vertinimas";
$LNG['table_title'] = "Antra&#353;t&#279;"; // 4.0
$LNG['table_description'] = "Apib&#363;dinimas"; // 4.0
$LNG['table_movement'] = "J&#363;d&#279;jimas";
$LNG['table_up'] = "Auk&#353;tyn"; // 5.0
$LNG['table_down'] = "&#381;emyn"; // 5.0
$LNG['table_neutral'] = "Neutralus"; // 5.0
$LNG['table_your_site_here'] = "J&#363;s&#371; svetain&#279; &#269;ia"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "&#302;vertinti ir Komentuoti";
$LNG['rate_message'] = "Pra&#353;ome &#303;vertinti ir &#303;ra&#353;yti komentar&#261; %s &#382;emiau esan&#269;ioje formoje."; // 5.2.0
$LNG['rate_rating'] = "Vertinimas";
$LNG['rate_review'] = "Komentaras - HTML neleid&#382;iama"; // 5.0
$LNG['rate_thanks'] = "A&#269;i&#363; u&#382; &#303;vertinim&#261;.";
$LNG['rate_error'] = "J&#363;s jau &#303;vertinote &#353;i&#261; svetain&#281;.";
$LNG['rate_back'] = "Gr&#303;&#382;ti &#303; Statistik&#261;";
$LNG['rate_email_admin'] = "Naujas komentaras buvo atsi&#371;stas J&#363;s&#371; top'uose."; // 5.1.0

// Search
$LNG['search_header'] = "Paie&#353;ka";
$LNG['search_off'] = "Paie&#353;kos galimyb&#279; buvo i&#353;jungta.";
$LNG['search_no_sites'] = "Atsipra&#353;ome, nerasta joki&#371; svetaini&#371; pagal paie&#353;kos kriterij&#261;."; // 5.0
$LNG['search_prev'] = "Praeitas"; // 3.2.1
$LNG['search_next'] = "Kitas"; // 3.2.1
$LNG['search_displaying_results'] = "Rodomi %s iki %s i&#353; %s rezultat&#371; <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistika";
$LNG['stats_info'] = "Informacija";
$LNG['stats_member_since'] = "Narys Nuo"; // 5.0
$LNG['stats_rating_avg'] = "Vidutinis Vertinimas";
$LNG['stats_rating_num'] = "Vertinim&#371; Skai&#269;ius";
$LNG['stats_rate'] = "&#302;vertinti ir Komentuoti &#352;i&#261; Svetain&#281;";
$LNG['stats_reviews'] = "Komentarai";
$LNG['stats_allreviews'] = "Rodyti visus komentarus"; // 4.0
$LNG['stats_week'] = "Savait&#279;"; // 5.0
$LNG['stats_highest'] = "Auk&#353;tesni"; // 5.0
$LNG['stats_overall'] = "Bendra Statistika"; // 5.2.0
$LNG['stats_overall_average'] = "Vidutinis (Paskutiniai(-&#279;s) 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Viso (Visas Laikas)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Geriausios %s Svetain&#279;s(-i&#371;)"; // 4.0
$LNG['ssi_new'] = "%s Naujausi&#371; Nari&#371;"; // 5.0
$LNG['ssi_all'] = "Visos Svetain&#279;s"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Vartotojo Valdymo Pultas"; // 5.0
$LNG['user_cp_login'] = "Prisijungti"; // 5.0
$LNG['user_cp_logout'] = "Atsijungti"; // 5.0
$LNG['user_cp_welcome'] = "Sveiki atvyk&#281; &#303; vartotojo valdymo pult&#261;. Naudokit&#279;s nuorodomis kair&#279;je savo vartotojo tvarkymui."; // 5.0
$LNG['user_cp_logout_message'] = "Dabar J&#363;s esate atsijung&#281;s i&#353; vartotojo valdymo pulto."; // 5.0
$LNG['user_cp_login_long'] = "Prisijunkite su savo vartotojo vardu ir slapta&#382;d&#382;iu arba savo OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Nerandamas OpenID serveris %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Pirmiausia J&#363;s turite u&#382;siregistruoti, tik tada gal&#279;site prisijungti prie vartotojo valdymo pulto."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Prisijungimo metu &#303;vyko klaida. Pra&#353;ome bandyti dar kart&#261;."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "J&#363;s turite patvirtinti, kad t&#281;stum&#279;te. Pra&#353;ome bandyti dar kart&#261;."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Klaida i&#353; serverio: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "J&#363;s negalite prisijungti prie vartotojo valdymo pulto kol J&#363;s&#371; svetain&#279; nebus patvirtinta. J&#363;s gausite el. lai&#353;k&#261; kai J&#363;s&#371; svetain&#279; bus patvirtinta."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Patvirtinti Naujus Narius"; // 5.0
$LNG['a_approve'] = "Patvirtinti"; // 4.0
$LNG['a_approve_none'] = "N&#279;ra nari&#371; kurie laukia patvirtinimo."; // 4.0
$LNG['a_approve_done'] = "Narys patvirtintas."; // 4.0
$LNG['a_approve_dones'] = "Nariai patvirtinti."; // 4.0
$LNG['a_approve_sel'] = "Su pasirinktais:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Patvirtinti Pakeistus Narius"; // 5.2.0
$LNG['a_approve_edited_none'] = "N&#279;ra keitim&#371; kurie laukia patvirtinimo."; // 5.2.0
$LNG['a_approve_edited_old'] = "Praeita Antra&#353;t&#279; ir URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Pakeista Antra&#353;t&#279; ir URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Atmesti"; // 5.2.0
$LNG['a_approve_edited_done'] = "Pakeitimai patvirtinti."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Pakeitimai atmesti."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Patvirtinti Naujus Komentatus"; // 5.0
$LNG['a_approve_rev_none'] = "N&#279;ra komentar&#371; kurie laukia patvirtinimo."; // 5.0
$LNG['a_approve_rev_done'] = "Komentaras patvirtintas."; // 5.0
$LNG['a_approve_rev_dones'] = "Komentarai patvirtinti."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "I&#353;saugoti Duombaz&#281;"; // 5.2.0
$LNG['a_backup_warn'] = "Sukurs kopij&#261; nari&#371;, statistikos ir nustatym&#371;. Jei turite daug nari&#371;, tai gali u&#382;trukti ilgiau."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Sukurti Atskir&#261; Puslap&#303;"; // 5.1.0
$LNG['a_create_page_id'] = "Puslapio ID - Tai bus naudojama URL, taigi tai gali sudaryti tik raid&#279;s, skai&#269;iai, pabraukimai (_) ir br&#363;k&#353;neliai (-)"; // 5.1.0
$LNG['a_create_page_error_id'] = "Puslapio ID gali sudaryti tik raid&#279;s, skai&#269;iai, pabraukimai (_) ir br&#363;k&#353;neliai (-). Pra&#353;ome gr&#303;&#382;ti ir i&#353;taisyti puslapio ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Jau yra puslapis su tokiu ID. Pra&#353;ome gr&#303;&#382;ti ir pasirinkti kit&#261; puslapio ID."; // 5.1.0
$LNG['a_create_page_created'] = "Puslapis sukurtas. Dabar Jums tereikia &#303;d&#279;ti nuorod&#261; &#303; %s wrapper.html dokumente."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "I&#353;trinti Nar&#303;"; // 5.0
$LNG['a_del_headers'] = "I&#353;trinti Narius"; // 5.0
$LNG['a_del_done'] = "Narys i&#353;trintas."; // 5.0
$LNG['a_del_dones'] = "Nariai i&#353;trinti."; // 5.0
$LNG['a_del_warn'] = "Ar esate &#303;sitikin&#281;, kad norite i&#353;trinti %s?"; // 5.0
$LNG['a_del_multi'] = "tuos %s narius(-i&#371;)"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "I&#353;trinti Filtruojam&#261; &#381;od&#303;"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "I&#353;trinti Filtruojamus &#381;od&#382;ius"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtruojamas &#382;odis i&#353;trintas."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtruojami &#382;od&#382;iai i&#353;trinti."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Ar esate &#303;sitikin&#281;, kad norite i&#353;trinti %s i&#353; filtruojam&#371; &#382;od&#382;i&#371; s&#261;ra&#353;o?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "tuos %s &#382;od&#382;ius(-i&#371;)"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Neteisingas filtruojamo &#382;od&#382;io ID. Pra&#353;ome bandyti dar kart&#261;."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "I&#353;trinti Juodojo S&#261;ra&#353;o &#302;ra&#353;&#261;"; // 5.2.0
$LNG['a_del_ban_headers'] = "I&#353;trinti Juodojo S&#261;ra&#353;o &#302;ra&#353;us"; // 5.2.0
$LNG['a_del_ban_done'] = "Juodojo s&#261;ra&#353;o &#303;ra&#353;as i&#353;trintas."; // 5.2.0
$LNG['a_del_ban_dones'] = "Juodojo s&#261;ra&#353;o &#303;ra&#353;ai i&#353;trinti."; // 5.2.0
$LNG['a_del_ban_warn'] = "Ar esate &#303;sitikin&#281;, kad norite i&#353;trinti %s i&#353; juodojo s&#261;ra&#353;o?"; //5.2.0
$LNG['a_del_ban_multi'] = "tuos %s &#303;ra&#353;us(-&#371;)"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Neteisingas juodojo s&#261;ra&#353;o ID. Pra&#353;ome bandyti dar kart&#261;."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "I&#353;trinti Atskir&#261; Puslap&#303;"; // 5.1.0
$LNG['a_del_page_headers'] = "I&#353;trinti Atskirus Puslapius"; // 5.1.0
$LNG['a_del_page_done'] = "Atskiras puslapis i&#353;trintas."; // 5.1.0
$LNG['a_del_page_dones'] = "Atskiri puslapiai i&#353;trinti."; // 5.1.0
$LNG['a_del_page_warn'] = "Ar esate &#303;sitikin&#281;, kad norite i&#353;trinti %s?"; //5.1.0
$LNG['a_del_page_multi'] = "tuos %s puslapius(-i&#371;)"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Neteisingas atskiro puslapio ID. Pra&#353;ome bandyti dar kart&#261;."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "I&#353;trinti Komentar&#261;"; // 5.0
$LNG['a_del_rev_headers'] = "I&#353;trinti Komentarus"; // 5.0
$LNG['a_del_rev_done'] = "Komentaras i&#353;trintas."; // 5.0
$LNG['a_del_rev_dones'] = "Komentarai i&#353;trinti."; // 5.0
$LNG['a_del_rev_warn'] = "Ar esate &#303;sitikin&#281;, kad norite i&#353;trinti &#353;&#303; komentar&#261;?"; //5.0
$LNG['a_del_rev_warns'] = "Ar esate &#303;sitikin&#281;, kad norite i&#353;trinti &#353;iuos komentarus?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Neteisingas komentaro ID. Bandykite dar kart&#261;."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Keisti Nar&#303;"; // 5.0
$LNG['a_edit_site_is'] = "&#352;i svetain&#279; yra"; // 4.0
$LNG['a_edit_active'] = "Aktyvi (S&#261;ra&#353;e)"; // 4.0
$LNG['a_edit_inactive'] = "Neaktyvi (Ne S&#261;ra&#353;e)"; // 5.0
$LNG['a_edit_edited'] = "Narys pakeistas.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Keisti Filtruojam&#261; &#381;od&#303;"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtruojamas &#382;odis pakeistas."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Keisti Juodojo S&#261;ra&#353;o &#302;ra&#353;&#261;"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Juodojo s&#261;ra&#353;o &#303;ra&#353;as pakeistas."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Keisti Atskir&#261; Puslap&#303;"; // 5.1.0
$LNG['a_edit_page_content'] = "Turinys - &#268;ia galima naudoti HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "Puslapis pakeistas."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Keisti Komentar&#261;"; // 5.0
$LNG['a_edit_rev_edited'] = "Kmentaras pakeistas.";

// Admin > Email Members
$LNG['a_email_header'] = "Para&#353;yti Nariams El. Pa&#353;tu"; // 5.0
$LNG['a_email_subject'] = "Tema"; // 4.2.0
$LNG['a_email_message'] = "Prane&#353;imas"; // 4.2.0
$LNG['a_email_msg_sent'] = "Lai&#353;kas i&#353;si&#371;stas %s"; // 5.0
$LNG['a_email_not_sent'] = "Lai&#353;kas negali b&#363;ti i&#353;si&#371;stas %s"; // 5.0
$LNG['a_email_sent'] = "%s nariams(-i&#371;) i&#353;si&#371;sta."; // 4.2.0
$LNG['a_email_failed'] = "%s nariams(i&#371;) nei&#353;si&#371;sta (klaida)."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Dabar J&#363;s esate atsijung&#281; i&#353; administravimo."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administravimas"; // 5.0
$LNG['a_main'] = "Sveiki atvyk&#281; &#303; administravim&#261;. Naudokit&#279;s nuorodomis kair&#279;je top'&#371; svetain&#279;s tvarkymui."; // 5.0
$LNG['a_main_approve'] = "1 svetain&#279; laukia patvirtinimo."; // 5.0
$LNG['a_main_approves'] = "%s svetain&#279;s(-i&#371;) laukia patvirtinimo."; // 5.0
$LNG['a_main_approve_edit'] = "1 svetain&#279;s keitimas laukia patvirtinimo."; // 5.2.0
$LNG['a_main_approve_edits'] = "%s svetain&#279;s(-i&#371;) keitimai(-&#371;) laukia patvirtinimo."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 komentaras laukia patvirtinimo."; // 5.0
$LNG['a_main_approve_revs'] = "%s komentarai(-&#371;) laukia patvirtinimo."; // 5.0
$LNG['a_main_your'] = "J&#363;s&#371; versija"; // 5.0
$LNG['a_main_latest'] = "Senesn&#279; versija"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Svetain&#279;</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Tvarkyti Narius"; // 5.0
$LNG['a_man_actions'] = "Veiksmai"; // 4.2.0
$LNG['a_man_edit'] = "Keisti"; // 4.2.0
$LNG['a_man_delete'] = "I&#353;trinti"; // 4.2.0
$LNG['a_man_email'] = "Ra&#353;yti El. Lai&#353;k&#261;"; // 4.2.0
$LNG['a_man_all'] = "Pasirinkti Visus"; // 5.0
$LNG['a_man_none'] = "Nieko Nepasirinkti"; // 5.0
$LNG['a_man_del_sel'] = "I&#353;trinti Pasirinkt&#261;"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Keiksma&#382;od&#382;i&#371; Filtras"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Apa&#269;ioje &#303;ra&#353;ykite &#382;od&#303; ir kuo j&#303; pakeisite. Pavyzd&#382;iui, galite &#303;ra&#353;yti \"pragaras\" &#382;od&#382;io laukelyje ir \"p*******\" pakeitimo laukelyje."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Tikslus atitikimas blokuos tik tiksl&#371; &#382;od&#303;. Visuotinis atitikimas blokuos visus &#382;od&#382;ius, kuriose yra bent dalis u&#382;drausto &#382;od&#382;io. Taigi, u&#382;draustas &#382;odis \"pragaras\" taip pat atitiks \"garas\" ir \"ragas\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "&#381;odis"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Pakeisti &#303;"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Atitikimas"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Tikslus"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Visuotinis"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtruoti &#381;od&#303;"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" &#303;d&#279;tas &#303; keiksma&#382;d&#382;i&#371; filtr&#261;."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Juodasis S&#261;ra&#353;as"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Norint u&#382;blokuoti svetaines ir vartotojus, u&#382;pildykite &#382;emiau esan&#269;i&#261; form&#261;. Kai narys u&#382;siregistruoja, URL, el. pa&#353;to adresas, vartotojo vardas ir IP adresas yra patikrinami. Kai svetain&#279; kei&#269;iama, URL ir el. pa&#353;to adresas yra patikrinami.<br /><br />Juodasis s&#261;ra&#353;as nepaveiks jau u&#382;-siregistravusio nario."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Tikslus atitikimas atitiks tik tiksli&#261; fraz&#281;. Visuotinis atitikimas atitiks visus &#382;od&#382;ius, kuriuose yra bent dalis u&#382;draustos fraz&#279;s. Taigi, visuotinis http://www.yahoo.com/ atitikimas atitiks bet kok&#303; URL, kuris prasideda http://www.yahoo.com/, o tikslus atitikimas atitiks tik http://www.yahoo.com/."; // 5.2.0
$LNG['a_man_ban_string'] = "String"; // 5.2.0
$LNG['a_man_ban_field'] = "Laukelis"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" &#303;d&#279;tas &#303; juodaj&#303; s&#261;ra&#353;&#261;."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Tvarkyti Atskirus Puslapius"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Tvarkyti Komentarus"; // 5.0
$LNG['a_man_rev_enter'] = "Norint tvarkyti svetain&#279;s komentarus, &#303;ra&#353;ykite nario vartotojoi vard&#261; apa&#269;ioje."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Komentaras"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Meniu";
$LNG['a_menu_main'] = "Prad&#382;ia"; // 5.0
$LNG['a_menu_approve'] = "Patvirtinti Naujus Narius";
$LNG['a_menu_approve_edits'] = "Patvirtinti Pakeistus Narius"; // 5.2.0
$LNG['a_menu_manage'] = "Tvarkyti Narius"; // 4.2.0
$LNG['a_menu_settings'] = "Pakeisti Nustatymus"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Keiksma&#382;od&#382;i&#371; Filtras"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Juodasis S&#261;ra&#353;as"; // 5.2.0
$LNG['a_menu_backup'] = "I&#353;saugoti Duombaz&#281;"; // 5.2.0
$LNG['a_menu_skins'] = "Stiliai ir Kategorijos"; // 5.0
$LNG['a_menu_approve_reviews'] = "Patvirtinti Naujus Komentarus"; // 5.0
$LNG['a_menu_manage_reviews'] = "Tvarkyti Komentarus"; // 5.0
$LNG['a_menu_email'] = "Para&#353;yti Nariams El. Pa&#353;tu";
$LNG['a_menu_delete_review'] = "I&#353;trinti Komentar&#261;";
$LNG['a_menu_logout'] = "Atsijungti";
$LNG['a_menu_delete'] = "I&#353;trinti Nar&#303;";
$LNG['a_menu_edit'] = "Keisti Nar&#303;";
$LNG['a_menu_create_page'] = "Sukurti Atskir&#261; Puslap&#303;"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Tvarkyti Atskirus Puslapius"; // 5.1.0
$LNG['a_header_members'] = "Nariai"; // 5.0
$LNG['a_header_settings'] = "Nustatymai"; // 5.0
$LNG['a_header_tools'] = "&#302;rankiai"; // 5.2.0
$LNG['a_header_reviews'] = "Komentarai"; // 5.0
$LNG['a_header_pages'] = "Atskiri Puslapiai"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Pakeisti Nustatymus";
$LNG['a_s_help'] = "Pagalba"; // 5.1.0

$LNG['a_s_general'] = "Pagrindiniai Nustatymai";
$LNG['a_s_admin_password'] = "Administratoriaus slapta&#382;odis";
$LNG['a_s_list_name'] = "J&#363;s&#371; top'&#371; svetain&#279;s pavadinimas";
$LNG['a_s_list_url'] = "URL &#303; top'&#371; direktorij&#261;";
$LNG['a_s_default_language'] = "Numatytoji kalba";
$LNG['a_s_your_email'] = "J&#363;s&#371; el. pa&#353;to adresas";

$LNG['a_s_sql'] = "SQL Nustatymai";
$LNG['a_s_sql_type'] = "Duombaz&#279;s Tipas"; // 4.1.0
$LNG['a_s_sql_host'] = "Host'as";
$LNG['a_s_sql_database'] = "Duombaz&#279;s pavadinimas";
$LNG['a_s_sql_username'] = "Prisijungimo vardas";
$LNG['a_s_sql_password'] = "Prisijungimo slapta&#382;odis";

$LNG['a_s_ranking'] = "Vertinimo Nustatymai";
$LNG['a_s_num_list'] = "Skai&#269;ius nari&#371; kurie bus parodyti per vien&#261; puslapyje"; // 5.0
$LNG['a_s_ranking_period'] = "Vertinimo periodas"; // 5.0
$LNG['a_s_ranking_method'] = "Vertinimo metodas"; // 5.0
$LNG['a_s_ranking_average'] = "Vertinim&#261; rodyti vidutini&#353;k&#261; arba tiesiog %s"; // 5.0
$LNG['a_s_featured_member'] = 'Geriausias narys - J&#363;s turite &#303;d&#279;ti {$featured_member} &#303; wrapper.html po to kai &#353;it&#261; &#303;jungsite.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Number of members to use the _top skin for";
$LNG['a_s_ad_breaks'] = "Show ads after these ranks (separate with commas) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Fill blank rows with a message saying \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Nari&#371; Nustatymai";
$LNG['a_s_active_default'] = "Reikalauti i&#353; nauj&#371; nari&#371; patvirtinimo";
$LNG['a_s_active_default_review'] = "Reikalauti i&#353; nauj&#371; komentar&#371; patvirtinimo";
$LNG['a_s_delete_after'] = "I&#353;trinti neaktyvius narius po ... dien&#371; (nustatykite &#303; 0, kad i&#353;jungtum&#279;te)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Prane&#353;ti administratoriui el. pa&#353;tu, kai u&#382;siregistruoja naujas narys"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Prane&#353;ti administratoriui el. pa&#353;tu, kai naujas komentaras para&#353;ytas"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Nario maksimalus banerio plotis (nustatykite &#303; 0, kad i&#353;jungtum&#279;te)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Nario maksimalus banerio auk&#353;tis (nustatykite &#303; 0, kad i&#353;jungtum&#279;te)"; // 4.2.0
$LNG['a_s_default_banner'] = "Numatytasis baneris nariams, kurie neturi savo banerio";

$LNG['a_s_button'] = "Button Settings";
$LNG['a_s_ranks_on_buttons'] = "Ranks on buttons -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Stat Buttons"; // 4.2.0
$LNG['a_s_button_url'] = "If Yes/No - URL to the default button you want to appear on members' sites"; // 4.0
$LNG['a_s_button_dir'] = "If Yes - URL to the directory the buttons are in"; // 4.0
$LNG['a_s_button_ext'] = "If Yes - Extension of the buttons (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "If Yes - Number of buttons you have made"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gateway page to deter cheating for hits in";
$LNG['a_s_captcha'] = "Word verification on join to block spammers - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Security question and answer to block spammers (leave blank to disable) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Kiti Nustatymai";
$LNG['a_s_search'] = "Paie&#353;ka";
$LNG['a_s_time_offset'] = "Time offset from your server (in hours)";

$LNG['a_s_on'] = "&#302;jungta";
$LNG['a_s_off'] = "I&#353;jungta";
$LNG['a_s_days'] = "Dienos";
$LNG['a_s_months'] = "M&#279;nesiai";
$LNG['a_s_weeks'] = "Savait&#279;s"; // 4.2.0
$LNG['a_s_yes'] = "Taip";
$LNG['a_s_no'] = "Ne";
$LNG['a_s_answer'] = "Atsakymas"; // 5.2.0

$LNG['a_s_updated'] = "J&#363;s&#371; nustatymai atnaujinti.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Stiliai ir Kategorijos"; // 5.0
$LNG['a_skins_default'] = "Numatytasis Stilius"; // 5.0
$LNG['a_skins_set_default'] = "Nustatyti Numatytaj&#303; Stili&#371;"; // 5.0
$LNG['a_skins_anon'] = "Anonimas"; // 5.0
$LNG['a_skins_default_done'] = "Numatytasis stilius nustatytas."; // 5.0
$LNG['a_skins_categories_done'] = "Kategorijos stilius nustatytas."; // 5.0
$LNG['a_skins_new_category_done'] = "Nauja kategorija sukurta."; // 5.0
$LNG['a_skins_delete_done'] = "Kategorija i&#353;trinta."; // 5.0
$LNG['a_skins_delete_error'] = "Kategorija negali b&#363;ti i&#353;trinta, nes tai J&#363;s&#371; vienintel&#279; kategorija."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategorija pakeista"; // 5.0
$LNG['a_skins_invalid_skin'] = "Neteisingas stilius: %s.  Pra&#353;ome bandyti dar kart&#261;."; // 5.0
$LNG['a_skins_categories'] = "Kategorijos"; // 5.0
$LNG['a_skins_new_category'] = "Sukurti Nauj&#261; Kategorij&#261;"; // 5.0
$LNG['a_skins_set_skins'] = "Nustatyti Kategorijos Stilius"; // 5.0
$LNG['a_skins_edit_category'] = "Keisti Kategorij&#261;"; // 5.0
$LNG['a_skins_category_name'] = "Kategorijas Pavadinimas"; // 5.0
$LNG['a_skins_diff_skins'] = "Jei norite skirting&#371; stili&#371; skirtingoms kategorijoms, pasirinkite jas &#382;emiau."; // 5.0
?>
