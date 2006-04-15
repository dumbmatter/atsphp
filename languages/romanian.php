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
$translation = 'Romanian';
$translator_name = 'Adrian-Marius Mihai alias Mastermind';
$translator_email = 'webmaster@masterminds.ro';
$translator_url = 'http://www.masterminds.ro';

// Global
$LNG['g_form_submit_short'] = "Afiseaza";
$LNG['g_username'] = "Utilizator";
$LNG['g_url'] = "Adresa Web";
$LNG['g_title'] = "Titlu";
$LNG['g_description'] = "Descriere";
$LNG['g_category'] = "Categorie"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Adresa Banner-ului";
$LNG['g_password'] = "Parola";
$LNG['g_average'] = "Medie";
$LNG['g_today'] = "Astazi";
$LNG['g_yesterday'] = "Ieri";
$LNG['g_daily'] = "Zilnic"; // 5.0
$LNG['g_this_month'] = "Luna aceasta"; // 5.0
$LNG['g_last_month'] = "Luna trecuta"; // 5.0
$LNG['g_monthly'] = "Lunar"; // 5.0
$LNG['g_this_week'] = "Aceasta Saptamana"; // 5.0
$LNG['g_last_week'] = "Saptamana Trecuta"; // 5.0
$LNG['g_weekly'] = "Saptamanal"; // 5.0
$LNG['g_pv'] = 'Dupa Vizite Unice'; // 5.0
$LNG['g_overall'] = 'Total'; // 5.0
$LNG['g_in'] = 'Dupa Intrari'; // 5.0
$LNG['g_out'] = 'Dupa Iesiri'; // 5.0
$LNG['g_unq_pv'] = "Vizite unice"; // 5.0
$LNG['g_tot_pv'] = "Total vizite"; // 5.0
$LNG['g_unq_in'] = "Intrari unice"; // 5.0
$LNG['g_tot_in'] = "Total intrari"; // 5.0
$LNG['g_unq_out'] = "Iesiri unice"; // 5.0
$LNG['g_tot_out'] = "Total iesiri"; // 5.0
$LNG['g_invalid_u_or_p'] = "Numele de utilizator sau parola este gresita.  Va rugam incercati din nou."; // 5.0
$LNG['g_invalid_u'] = "Numele de utilizator este gresit.  Va rugam incercati din nou."; // 5.0
$LNG['g_invalid_p'] = "Parola este gresita.  Va rugam incercati din nou."; // 5.0
$LNG['g_session_expired'] = "Sesiunea dvs. a expirat.  Va rugam autentificati-va din nou."; // 5.0
$LNG['g_error'] = "Eroare"; // 5.0
$LNG['g_delete_install'] = "Din motive de securitate, sunteti rugati sa sterge-ti directorul de instalare (numit 'install'), altfel acest script nu poate rula."; // 5.0

// Edit Account
$LNG['edit_header'] = "Modifica date";
$LNG['edit_info_edited'] = "Datele contului dvs. au fost modificate cu succes.";
$LNG['edit_password_blank'] = "Lasati acest camp liber pentru a pastra parola curenta"; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Pagina de acces spre clasament";
$LNG['gateway_text'] = "Pentru a preveni orice abuz a fost introdusa aceasta pagina.  Apasati pe link-ul de mai jos pentru a intra pe pagina cu clasamentul.";
$LNG['gateway_vote'] = "Intrati si votati";
$LNG['gateway_no_vote'] = "Intrati fara sa votati"; // 5.0

// Install
$LNG['install_header'] = "Instalare";
$LNG['install_welcome'] = "Bine ati venit! Aardvark Topsites PHP 5.  Completati toate datele de mai jos pentru a instala script-ul.";
$LNG['install_sql_prefix'] = "Prefixul tabelului - schimbati aceasta numai daca utilizati mai multe liste pe aceesi baza de date";
$LNG['install_error_chmod'] = "Nu s-au putut scrie datele in documentul 'settings_sql.php'.  Asigurati-va ca permisiunile acestui document ('settings_sql.php') sunt CHMOD 666.";
$LNG['install_error_sql'] = "Nu s-a putut face o conexiune spre baza de date SQl.  Va rugam intorceti-va inapoi si verificati datele referitoare la baza de date.";
$LNG['install_done'] = "Clasamentul dvs. a fost instalat. Inainte sa faceti orice altceva sterge-ti fisierul 'install' impreuna cu intreg continutul sau.";
$LNG['install_your'] = "Clasamentul Site-urilor";
$LNG['install_admin'] = "Administrator";
$LNG['install_manual'] = "Manual de Utilizare";
$LNG['upgrade_header'] = "Inoire versiune";
$LNG['upgrade_welcome'] = "Bine ati venit! Aardvark Topsites PHP 5.  Inainte de a face aceasta innoire (upgrade), faceti o copie de rezerva a datelor clasamentului.";
$LNG['upgrade_error_version'] = "Inoirea este posibila numai pentru versiunile Aardvark Topsites PHP 4.1.0 sau mai recente.";
$LNG['upgrade_done'] = "Clasament-ul dvs. a fost reinoit. Sterge-ti acest fisier acum.";

// Join
$LNG['join_header'] = "Inscriere";
$LNG['join_enter_text'] = "Introduceti literele si cifrele din imaginea de mai jos:"; // 4.2.2
$LNG['join_user'] = "Utilizator"; // 5.0
$LNG['join_website'] = "Site"; // 5.0
$LNG['join_error_forgot'] = "Ati uitat urmatorul lucru:";
$LNG['join_error_username'] = "Nu ati introdus un nume de utilizator corect: foloseste numai litere, cifre, underscore '_', si liniuta orizontala '-'."; // 5.0
$LNG['join_error_username_duplicate'] = "Nu ati introdus un nume de utilizator corect: numele pe care l-ati ales este indisponibil."; // 5.0
$LNG['join_error_url'] = "Nu ati introdus adresa site-ului in mod corect.";
$LNG['join_error_email'] = "Nu ati introdus o adresa de email corecta.";
$LNG['join_error_title'] = "Nu ati introdus titlul site-ului dvs..";
$LNG['join_error_password'] = "Nu ati introdus nici o parola.";
$LNG['join_error_urlbanner'] = "Nu ati introdus nici o adresa spre un banner al site-ului dvs.  Lasati gol acest camp daca nu detineti nici un banner.  Dimensiunea sa trebuie sa fie de maxim"; // 4.0
$LNG['join_error_back'] = "Va rugam intoarceti-va inapoi si remediati toate erorile de mai sus.";
$LNG['join_error_time'] = "Nu apasati niciun buton refresh in pagina de inregistrare."; // 4.2.0
$LNG['join_error_captcha'] = "Cuvantul introdus nu este acelasi cu cel din imagine."; // 4.2.2
$LNG['join_thanks'] = "Multumim pentru inscriere!  Puneti codul urmator in PRIMA pagina a site-ului pentru a fi introdus in clasament si pentru ca statisticile personale sa functioneze.";
$LNG['join_change_warning'] = "Daca modificati acest cod este posibil sa nu mai functioneze.";
$LNG['join_welcome'] = "Bine ati venit %s";
$LNG['join_welcome_admin'] = "S-a inregistrat un nou membru.";

// Link Code
$LNG['link_code_header'] = "Codul HTML"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Recuperare parola"; // 5.0
$LNG['lost_pw_forgot'] = "Ati uitat parola?"; // 5.0
$LNG['lost_pw_get'] = "Recupereaza"; // 5.0
$LNG['lost_pw_emailed'] = "Va rugam verificati-va email-ul si urmati instructiunile trimise."; // 5.0
$LNG['lost_pw_email'] = "Pentru a va alege o noua parola, apasati pe urmatorul link:"; // 5.0
$LNG['lost_pw_new'] = "Noua parola"; // 5.0
$LNG['lost_pw_set_new'] = "Afiseaza"; // 5.0
$LNG['lost_pw_finish'] = "Parola introdusa va fi de acum cea pe care trebuie sa o introduce-ti impreauna cu numele de utilizator pe care l-ati avut."; // 5.0

// Main Page
$LNG['main_header'] = "Clasamentul General"; // 5.0
$LNG['main_all'] = "Toate Categoriile"; // 4.2.0
$LNG['main_method'] = "Modul de clasare";
$LNG['main_members'] = "Membrii";
$LNG['main_menu_rankings'] = "Clasament";
$LNG['main_menu_join'] = "Inregistrare";
$LNG['main_menu_random'] = "Membru aleatoriu";
$LNG['main_menu_search'] = "Cauta";
$LNG['main_menu_lost_code'] = "Recuperare - Cod HTML"; // 5.0
$LNG['main_menu_lost_password'] = "Recuperare - Parola"; // 5.0
$LNG['main_menu_edit'] = "Modifica datele de Membru";
$LNG['main_menu_user_cp'] = "Administrare cont"; // 5.0
$LNG['main_featured'] = "Membru Special"; // 4.0.2
$LNG['main_executiontime'] = "Incarcare in"; // 4.0
$LNG['main_queries'] = "SQL Statistici"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statistici/Voturi";
$LNG['table_unique'] = "Unici";
$LNG['table_total'] = "Total";
$LNG['table_rank'] = "Loc";
$LNG['table_title'] = "Titlu"; // 4.0
$LNG['table_description'] = "Descriere"; // 4.0
$LNG['table_movement'] = "Tendinta";
$LNG['table_up'] = "Urcare"; // 5.0
$LNG['table_down'] = "Scadere"; // 5.0
$LNG['table_neutral'] = "Stagnare"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Voteaza";
$LNG['rate_rating'] = "Impresia dvs. despre continutul/calitatea acestui site";
$LNG['rate_review'] = "Parerea mea despre site este urmatoarea: (doar litere si cifre)"; // 5.0
$LNG['rate_thanks'] = "Multumim pentru vot.";
$LNG['rate_error'] = "Ati votat deja acest site.";
$LNG['rate_back'] = "Inapoi la Detalii";

// Search
$LNG['search_header'] = "Cauta";
$LNG['search_off'] = "Aceasta optiune a fost desfintata.";
$LNG['search_for'] = "Ati cautat";
$LNG['search_no_sites'] = "Nu exista nici un rezultat. Ne pare rau."; // 5.0
$LNG['search_prev'] = "Inapoi"; // 3.2.1
$LNG['search_next'] = "Urmatorul"; // 3.2.1

// Stats
$LNG['stats_header'] = "Detalii/Statistici";
$LNG['stats_info'] = "Informatii";
$LNG['stats_member_since'] = "Membru din data de"; // 5.0
$LNG['stats_rating_avg'] = "Rating mediu";
$LNG['stats_rating_num'] = "Numar de voturi";
$LNG['stats_rate'] = "Voteaza";
$LNG['stats_reviews'] = "Parere vizitator";
$LNG['stats_allreviews'] = "Arata Opiniile"; // 4.0
$LNG['stats_week'] = "Saptamana"; // 5.0
$LNG['stats_highest'] = "Nivel Maxim"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Primele %s Site-uri"; // 4.0
$LNG['ssi_new'] = "Ultimii %s de Membrii"; // 5.0
$LNG['ssi_all'] = "Toate Site-urile"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Administrare cont"; // 5.0
$LNG['user_cp_login'] = "Login"; // 5.0
$LNG['user_cp_logout'] = "Logout"; // 5.0
$LNG['user_cp_welcome'] = "Bine ati venit. Utilizati link-urile din stanga pentru a administra contul."; // 5.0
$LNG['user_cp_logout_message'] = "V-ati deconectat de la pagina de administrare."; // 5.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Aprobare membrii noi"; // 5.0
$LNG['a_approve'] = "Aproba"; // 4.0
$LNG['a_approve_none'] = "Nu mai exista nici o cerere de aprobat."; // 4.0
$LNG['a_approve_done'] = "Membru acceptat."; // 4.0
$LNG['a_approve_dones'] = "Membrii acceptati."; // 4.0
$LNG['a_approve_sel'] = "Selectati:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Aproba comentarii noi"; // 5.0
$LNG['a_approve_rev_none'] = "Nu sunt comentarii de aprobat."; // 5.0
$LNG['a_approve_rev_done'] = "Comentariu aprobat."; // 5.0
$LNG['a_approve_rev_dones'] = "Comentarii aprobate."; // 5.0

// Admin > Delete Member
$LNG['a_del_header'] = "Exclude membru"; // 5.0
$LNG['a_del_headers'] = "Exclude membrii"; // 5.0
$LNG['a_del_done'] = "Membru exclus."; // 5.0
$LNG['a_del_dones'] = "Membrii exclusi."; // 5.0
$LNG['a_del_warn'] = "Sunteti sigur ca doriti sa-l(i) excludeti pe %s?"; // 5.0
$LNG['a_del_multi'] = "Acesti %s membrii"; //5.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Sterge comentariu"; // 5.0
$LNG['a_del_rev_headers'] = "Sterge comentarii"; // 5.0
$LNG['a_del_rev_done'] = "Comentariul a fost sters."; // 5.0
$LNG['a_del_rev_dones'] = "Comentariile au fost sterse."; // 5.0
$LNG['a_del_rev_warn'] = "Sunteti sigur ca doriti sa stergeti comentariul?"; //5.0
$LNG['a_del_rev_warns'] = "Sunteti sigur ca doriti sa stergeti comentariile?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Numarul de identificare (ID) nu este corect.  Va rugam incercati din nou."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Modifica membru"; // 5.0
$LNG['a_edit_site_is'] = "Acest site este"; // 4.0
$LNG['a_edit_active'] = "Activ (Listat in clasament)"; // 4.0
$LNG['a_edit_inactive'] = "Inactiv (Nelistat in clasament)"; // 5.0
$LNG['a_edit_edited'] = "Datele membrului au fost modificate.";

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Modifica comentarii"; // 5.0
$LNG['a_edit_rev_edited'] = "Comentariul a fost modificat.";

// Admin > Email Members
$LNG['a_email_header'] = "Trimite newsletter"; // 5.0
$LNG['a_email_subject'] = "Subiect"; // 4.2.0
$LNG['a_email_message'] = "Mesaj"; // 4.2.0
$LNG['a_email_msg_sent'] = "Mesajul a fost trimis pe adresa %s."; // 5.0
$LNG['a_email_not_sent'] = "Mesajul nu a putut fi trimis pe adresa %s."; // 5.0
$LNG['a_email_sent'] = "Mesajul a fost trimis catre %s membrii."; // 4.2.0
$LNG['a_email_failed'] = "Mesajul nu a putut fi trimis catre %s membrii."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Te-ai deconectat din postura de administrator."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administrare"; // 5.0
$LNG['a_main'] = "Bine ati venit.  Utilizati link-urile din stanga pentru a administra sistemul."; // 5.0
$LNG['a_main_approve'] = "Exista o cerere de aprobare."; // 5.0
$LNG['a_main_approves'] = "Exista %s cereri de aprobare."; // 5.0
$LNG['a_main_approve_rev'] = "Exista un comentariu care asteapta sa fie aprobat."; // 5.0
$LNG['a_main_approve_revs'] = "Exista %s comentarii care asteapta sa fie aprobate."; // 5.0
$LNG['a_main_your'] = "Versiunea instalata"; // 5.0
$LNG['a_main_latest'] = "Ultima versiune disponibila"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Site-ul Aardvark Topsites PHP</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Administrare Membrii"; // 5.0
$LNG['a_man_actions'] = "Actiuni"; // 4.2.0
$LNG['a_man_edit'] = "Modifica"; // 4.2.0
$LNG['a_man_delete'] = "Sterge"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Selecteaza tot"; // 5.0
$LNG['a_man_none'] = "Nu selecta nimic"; // 5.0
$LNG['a_man_del_sel'] = "Sterge selectia"; // 5.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Administrare Comentarii"; // 5.0
$LNG['a_man_rev_enter'] = "Pentru a administra comentariile facute de vizitatori despre un site, introduce-ti numele membrului dedesubt."; // 5.0
$LNG['a_man_rev_id'] = "Numar de identificare (ID)"; // 5.0
$LNG['a_man_rev_rev'] = "Comentariu"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Meniu";
$LNG['a_menu_main'] = "Prima pagina"; // 5.0
$LNG['a_menu_approve'] = "Aprobari";
$LNG['a_menu_manage'] = "Administrare"; // 4.2.0
$LNG['a_menu_settings'] = "Modificare"; // 5.0
$LNG['a_menu_skins'] = "Categorii si skin-uri"; // 5.0
$LNG['a_menu_approve_reviews'] = "Aprobari"; // 5.0
$LNG['a_menu_manage_reviews'] = "Administrare"; // 5.0
$LNG['a_menu_email'] = "Newsletter membrii";
$LNG['a_menu_delete_review'] = "Comentarii - Stergere";
$LNG['a_menu_logout'] = "Logout";
$LNG['a_menu_delete'] = "Excludere";
$LNG['a_menu_edit'] = "Modificari date";
$LNG['a_header_members'] = "Membrii"; // 5.0
$LNG['a_header_settings'] = "Preferinte"; // 5.0
$LNG['a_header_reviews'] = "Comentarii"; // 5.0

// Admin > Settings
$LNG['a_s_header'] = "Schimba preferinte";
$LNG['a_s_general'] = "Generale";
$LNG['a_s_admin_password'] = "Parola administratorului:";
$LNG['a_s_list_name'] = "Numele clasamentului:";
$LNG['a_s_list_url'] = "Adresa clasamentului:";
$LNG['a_s_default_language'] = "Limba de baza:";
$LNG['a_s_your_email'] = "Adresa de e-mail a administratorului:";

$LNG['a_s_sql'] = "Preferinte baza de date SQL";
$LNG['a_s_sql_type'] = "Tipul bazei de date"; // 4.1.0
$LNG['a_s_sql_host'] = "Gazda";
$LNG['a_s_sql_database'] = "Numele bazei de date";
$LNG['a_s_sql_username'] = "Nume utilizator";
$LNG['a_s_sql_password'] = "Parola";

$LNG['a_s_ranking'] = "Clasament";
$LNG['a_s_num_list'] = "Numar de membrii afisati pe fiecare pagina"; // 5.0
$LNG['a_s_ranking_period'] = "Perioada de clasare"; // 5.0
$LNG['a_s_ranking_method'] = "Modul de clasare"; // 5.0
$LNG['a_s_ranking_average'] = "Clasare dupa medie sau numai dupa %s"; // 5.0
$LNG['a_s_featured_member'] = 'Membru special - Trebuie sa adaugati {$featured_member} in documentul wrapper.html dupa ce selectati aceasta optiune.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Numarul de membri care dispun de afisare completa (titlu, descriere, banner etc.).";
$LNG['a_s_ad_breaks'] = "Adauga reclame (bannere) dupa aceste locuri (se separa cu virgule - de exemplu '25,50,75,100')";

$LNG['a_s_member'] = "Membrii";
$LNG['a_s_active_default'] = "Este necesara aprobarea noilor membrii inainte de a fi listati in clasament";
$LNG['a_s_active_default_review'] = "Este necesara aprobarea noilor comentarii inainte de a fi afisate";
$LNG['a_s_delete_after'] = "Exclude acei membrii care depasesc acest numar de zile (pune '0' pentru a anula aceasta optiune)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Trimite-mi mesaj si anuntama de fiecare data cand se inscrie cineva";
$LNG['a_s_max_banner_width'] = "Dimensiunea maxima a banner-ului utilizatorilor (pune '0' pentru a fi nelimitat)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Member's maximum banner height (pune '0' pentru a fi nelimitat)"; // 4.2.0
$LNG['a_s_default_banner'] = "Afiseaza acesta imagine membrilor care nu au banner";

$LNG['a_s_button'] = "Buton (imaginea cu statistici de pe site-ul fiecarui membru) ";
$LNG['a_s_ranks_on_buttons'] = "Afiseaza locul in clasament al respectivului membru -  Vezi <a href=\"http://www.aardvarkind.com/topsitesphp/manual/\">manualul de utilizare</a> pentru mai multe detalii.  Alege 'Buton cu Statistici' daca ai citit deja aceasta sectiune din manual.  Daca ai ales 'Buton cu Statistici' restul sectiunii numai are nici o importanta."; // 4.2.0
$LNG['a_s_stat_buttons'] = "Buton cu Statistici"; // 4.2.0
$LNG['a_s_button_url'] = "Daca alege-ti Da introduce-ti adresa catre imaginea buton care v-a apare pe site-urile membrilor'"; // 4.0
$LNG['a_s_button_dir'] = "Daca ati ales Da introduce-ti adresa (directorul) la care se gasesc imaginile buton"; // 4.0
$LNG['a_s_button_ext'] = "Daca ati ales Da introduce-ti extensia imaginii buton va fi (alege-ti dintre gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Daca ati ales Da introduce-ti numarul de imagini buton pe care le aveti disponibile"; // 4.0

$LNG['a_s_other'] = "Alte preferinte";
$LNG['a_s_search'] = "Cauta";
$LNG['a_s_time_offset'] = "Fusul orar al serverului (de exemplu '+2:00' in pt. Bucuresti)";
$LNG['a_s_gateway'] = "Pagina anti abuz (cu introducere a caracterelor dintr-o imagine)";
$LNG['a_s_captcha'] = "Introducerea caracterelor dintr-o imagine - Optiune Anti-Spam"; // 4.2.2

$LNG['a_s_on'] = "Activat";
$LNG['a_s_off'] = "Dezactivat";
$LNG['a_s_days'] = "Zile";
$LNG['a_s_months'] = "Luni";
$LNG['a_s_weeks'] = "Saptamani"; // 4.2.0
$LNG['a_s_yes'] = "Da";
$LNG['a_s_no'] = "Nu";

$LNG['a_s_updated'] = "Preferintele dvs. au fost modificate cu succes.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Categorii si skin-uri"; // 5.0
$LNG['a_skins_default'] = "Skin(baza)"; // 5.0
$LNG['a_skins_set_default'] = "Activeaza"; // 5.0
$LNG['a_skins_anon'] = "Skin Nedenumit"; // 5.0
$LNG['a_skins_default_done'] = "Skin-ul de baza a fost activata."; // 5.0
$LNG['a_skins_categories_done'] = "Skin-urile au fost sortate pe categorii."; // 5.0
$LNG['a_skins_new_category_done'] = "A fost creata o noua categorie."; // 5.0
$LNG['a_skins_delete_done'] = "Categoria a fost stearsa."; // 5.0
$LNG['a_skins_edit_done'] = "Categoria a fost modificata."; // 5.0
$LNG['a_skins_invalid_skin'] = "Aceast skin prezinta erori: %s.  Va rugam remediati problemele."; // 5.0
$LNG['a_skins_categories'] = "Categorii"; // 5.0
$LNG['a_skins_new_category'] = "Creeaza categorie"; // 5.0
$LNG['a_skins_set_skins'] = "Modifica"; // 5.0
$LNG['a_skins_edit_category'] = "Modifica categorie"; // 5.0
$LNG['a_skins_category_name'] = "Numele categoriei"; // 5.0
$LNG['a_skins_diff_skins'] = "Aici puteti mofifica sau sterge categoriile, puteti aloca fiecarei categorii un anumit skin etc:"; // 5.0
?>