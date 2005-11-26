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
$translation = 'Italiano';
$translator_name = 'Cristian Storto';
$translator_email = 'staff@tutorialweb.org';
$translator_url = 'http://tutorialweb.org/';

// Global
$LNG['g_form_submit_short'] = "Vai";
$LNG['g_username'] = "Utente";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Titolo";
$LNG['g_description'] = "Descrizione";
$LNG['g_category'] = "Categoria"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Indirizzo banner";
$LNG['g_password'] = "Password";
$LNG['g_average'] = "Media";
$LNG['g_today'] = "Oggi";
$LNG['g_yesterday'] = "Ieri";
$LNG['g_daily'] = "Giornaliera"; // 5.0
$LNG['g_this_month'] = "Mese corrente"; // 5.0
$LNG['g_last_month'] = "Mese passato"; // 5.0
$LNG['g_monthly'] = "Mensile"; // 5.0
$LNG['g_this_week'] = "Questa settimana"; // 5.0
$LNG['g_last_week'] = "Ultima settimana"; // 5.0
$LNG['g_weekly'] = "Settimanale"; // 5.0
$LNG['g_pv'] = 'Pagine viste'; // 5.0
$LNG['g_overall'] = 'Generale'; // 5.0
$LNG['g_in'] = 'In'; // 5.0
$LNG['g_out'] = 'Out'; // 5.0
$LNG['g_unq_pv'] = "PVs Uniche"; // 5.0
$LNG['g_tot_pv'] = "PVs Totali"; // 5.0
$LNG['g_unq_in'] = "Uniche In"; // 5.0
$LNG['g_tot_in'] = "Totali In"; // 5.0
$LNG['g_unq_out'] = "Uniche Out"; // 5.0
$LNG['g_tot_out'] = "Totali Out"; // 5.0
$LNG['g_invalid_u_or_p'] = "Username o password errati, prova ancora."; // 5.0
$LNG['g_invalid_u'] = "Username errato.  Prova ancora."; // 5.0
$LNG['g_invalid_p'] = "Password errata.  Prova ancora."; // 5.0
$LNG['g_session_expired'] = "Sessione scaduta. Prova ancora."; // 5.0
$LNG['g_error'] = "Errore"; // 5.0
$LNG['g_delete_install'] = "Per ragioni di sicurezza devi eliminare la cartella install prima di poter utilizzare lo script."; // 5.0

// Edit Account
$LNG['edit_header'] = "Modifica account";
$LNG['edit_info_edited'] = "Il tuo account è stato modificato correttamente.";
$LNG['edit_password_blank'] = "Lascia vuoto questo campo per mantenere la solita password"; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Topsites Gateway Page";
$LNG['gateway_text'] = "Per evitare link automatici è stata creata questa pagina. Clicca il link sottostante per entrare nella Topsite.";
$LNG['gateway_vote'] = "Entra e vota";
$LNG['gateway_no_vote'] = "Entra senza votare"; // 5.0

// Install
$LNG['install_header'] = "Installa";
$LNG['install_welcome'] = "Benvenuto in Aardvark Topsites PHP 5.  Riempi il form sottostante per installare lo script.";
$LNG['install_sql_prefix'] = "Prefisso delle tabelle - da modificare solo nel caso in cui si stia usando più volte lo script sullo stesso database";
$LNG['install_error_chmod'] = "Non posso scrivere il file settings_sql.php.  Assicurati di avere settato i permessi a 666 sul file settings_sql.php.";
$LNG['install_error_sql'] = "Non è possibile connettersi al database.  Torna indietro e controlla i tuoi dati.";
$LNG['install_done'] = "La tua topsite è stata installata.  Elimina questa directory.";
$LNG['install_your'] = "La tua Topsite";
$LNG['install_admin'] = "Amministratore";
$LNG['install_manual'] = "Manuale";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Benvenuto in Aardvark Topsites PHP 5.  Prima di fare l'upgrade crea un backup dei tuoi file.";
$LNG['upgrade_error_version'] = "L'upgrade è possibile solo per Aardvark Topsites PHP 4.1.0 o maggiore.";
$LNG['upgrade_done'] = "L'upgrade ha avuto buon esito. Elimina questa directory.";

// Join
$LNG['join_header'] = "Iscriviti";
$LNG['join_enter_text'] = "Digita il testo dell'immagine qua sotto:"; // 4.2.2
$LNG['join_user'] = "Utente"; // 5.0
$LNG['join_website'] = "Sito"; // 5.0
$LNG['join_error_forgot'] = "Hai dimenticato di:";
$LNG['join_error_username'] = "Inserisci uno username valido: usa solo lettere, numeri, e trattino basso."; // 5.0
$LNG['join_error_username_duplicate'] = "Username già in uso!"; // 5.0
$LNG['join_error_url'] = "Inserisci un'indirizzo valido.";
$LNG['join_error_email'] = "Inserisci un indirizzo email valido.";
$LNG['join_error_title'] = "Digita un titolo per il tuo sito.";
$LNG['join_error_password'] = "Digita una password.";
$LNG['join_error_urlbanner'] = "Inserisci un banner.  Lascia in bianco se non lo hai.  Deve essere più piccolo di"; // 4.0
$LNG['join_error_back'] = "Torna indietro e correggi questi errori.";
$LNG['join_error_time'] = "Non aggiornare la pagina di conferma."; // 4.2.0
$LNG['join_error_captcha'] = "La parola che hai inserito non corrisponde all'immagine."; // 4.2.2
$LNG['join_thanks'] = "Grazie per esserti iscritto!  Inserisci questo codice nel tuo sito per essere votato.";
$LNG['join_change_warning'] = "Se modifichi il codice, potrebbe non funzionare.";
$LNG['join_welcome'] = "Benvenuto %s";
$LNG['join_welcome_admin'] = "Un nuovo membro si è iscritto alla tua topsite.";

// Link Code
$LNG['link_code_header'] = "Codice del link"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Ho perso la password"; // 5.0
$LNG['lost_pw_forgot'] = "Hai dimenticato la password?"; // 5.0
$LNG['lost_pw_get'] = "Recupero della password"; // 5.0
$LNG['lost_pw_emailed'] = "Controlla la tua casella di posta per le istruzioni."; // 5.0
$LNG['lost_pw_email'] = "Per avere una nuova password, vai a questo indirizzo:"; // 5.0
$LNG['lost_pw_new'] = "Nuova password"; // 5.0
$LNG['lost_pw_set_new'] = "Salva la nuova password"; // 5.0
$LNG['lost_pw_finish'] = "La nuova password è stata salvata";
// Main Page
$LNG['main_header'] = "Classifica"; // 5.0
$LNG['main_all'] = "Tutti i siti"; // 4.2.0
$LNG['main_method'] = "Visualizzazione classifica";
$LNG['main_members'] = "Membri";
$LNG['main_menu_rankings'] = "Classifica";
$LNG['main_menu_join'] = "Iscriviti";
$LNG['main_menu_random'] = "Membro casuale";
$LNG['main_menu_search'] = "Cerca";
$LNG['main_menu_lost_code'] = "Perso il codice"; // 5.0
$LNG['main_menu_lost_password'] = "Persa la password"; // 5.0
$LNG['main_menu_edit'] = "Modifica le tue info";
$LNG['main_menu_user_cp'] = "Pannello di controllo utente"; // 5.0
$LNG['main_featured'] = "Featured Member"; // 4.0.2
$LNG['main_executiontime'] = "Script Execution Time"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statistiche";
$LNG['table_unique'] = "Uniche";
$LNG['table_total'] = "Totali";
$LNG['table_rank'] = "Posizione";
$LNG['table_title'] = "Titolo"; // 4.0
$LNG['table_description'] = "Descrizione"; // 4.0
$LNG['table_movement'] = "Movimento";
$LNG['table_up'] = "Su"; // 5.0
$LNG['table_down'] = "Giu"; // 5.0
$LNG['table_neutral'] = "Neutrale"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Vota e commenta";
$LNG['rate_rating'] = "Vota";
$LNG['rate_review'] = "Commenta - Html non consentito"; // 5.0
$LNG['rate_thanks'] = "Grazie per aver votato.";
$LNG['rate_error'] = "Hai già votato per questo sito.";
$LNG['rate_back'] = "Torna alle statistiche";

// Search
$LNG['search_header'] = "Cerca";
$LNG['search_off'] = "La ricerca non è abilitata.";
$LNG['search_for'] = "Hai cercato";
$LNG['search_no_sites'] = "Spiacente, nessun elemento trovato."; // 5.0
$LNG['search_prev'] = "Precedente"; // 3.2.1
$LNG['search_next'] = "Prossimo"; // 3.2.1

// Stats
$LNG['stats_header'] = "Statistiche";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Membro da"; // 5.0
$LNG['stats_rating_avg'] = "Media voti";
$LNG['stats_rating_num'] = "Numero di voti";
$LNG['stats_rate'] = "Vota e commenta questo sito";
$LNG['stats_reviews'] = "Commenta";
$LNG['stats_allreviews'] = "Mostra tutti i commenti"; // 4.0
$LNG['stats_week'] = "Settimana"; // 5.0
$LNG['stats_highest'] = "Il più alto"; // 5.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s nuovi membri"; // 5.0
$LNG['ssi_all'] = "Tutti i siti"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Pannello di controllo utente"; // 5.0
$LNG['user_cp_login'] = "Entra"; // 5.0
$LNG['user_cp_logout'] = "Esci"; // 5.0
$LNG['user_cp_welcome'] = "Benvenuto nel tuo pannello di controllo. Usa i link a sinistra per gestire il tuo account."; // 5.0
$LNG['user_cp_logout_message'] = "Adesso sei disconnesso dal pannello utente."; // 5.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Approva nuovi utenti"; // 5.0
$LNG['a_approve'] = "Approva"; // 4.0
$LNG['a_approve_none'] = "Non ci sono utenti da approvare."; // 4.0
$LNG['a_approve_done'] = "Utente approvato."; // 4.0
$LNG['a_approve_dones'] = "Gli utenti sono stati approvati."; // 4.0
$LNG['a_approve_sel'] = "Se selezionato:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Approva nuovi commenti"; // 5.0
$LNG['a_approve_rev_none'] = "Non ci sono commenti da approvare."; // 5.0
$LNG['a_approve_rev_done'] = "Il commento è stato approvato."; // 5.0
$LNG['a_approve_rev_dones'] = "I commenti sono stati approvati."; // 5.0

// Admin > Delete Member
$LNG['a_del_header'] = "Cancella utente"; // 5.0
$LNG['a_del_headers'] = "Cancella utenti"; // 5.0
$LNG['a_del_done'] = "Utente eliminato."; // 5.0
$LNG['a_del_dones'] = "Utenti eliminati."; // 5.0
$LNG['a_del_warn'] = "Sei sicuro di voler eliminare %s?"; // 5.0
$LNG['a_del_multi'] = "questi %s utenti"; //5.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Cancella commento"; // 5.0
$LNG['a_del_rev_headers'] = "Cancella commenti"; // 5.0
$LNG['a_del_rev_done'] = "Il commento è stato eliminato."; // 5.0
$LNG['a_del_rev_dones'] = "I commenti sono stati eliminati."; // 5.0
$LNG['a_del_rev_warn'] = "Sei sicuro di voler eliminare questo commento?"; //5.0
$LNG['a_del_rev_warns'] = "Sei sicuro di voler eliminare questi commenti?"; //5.0
$LNG['a_del_rev_invalid_id'] = "ID non valido.  Prova ancora."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Edita utente"; // 5.0
$LNG['a_edit_site_is'] = "Questo sito è"; // 4.0
$LNG['a_edit_active'] = "Attivo (In lista)"; // 4.0
$LNG['a_edit_inactive'] = "Inattivo (Non in lista)"; // 5.0
$LNG['a_edit_edited'] = "Utente editato con successo.";

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Edita commento"; // 5.0
$LNG['a_edit_rev_edited'] = "Il commento è stato editato con successo.";

// Admin > Email Members
$LNG['a_email_header'] = "Email utenti"; // 5.0
$LNG['a_email_subject'] = "Oggetto"; // 4.2.0
$LNG['a_email_message'] = "Messaggio"; // 4.2.0
$LNG['a_email_msg_sent'] = "Email inviata a %s"; // 5.0
$LNG['a_email_not_sent'] = "Email a %s non inviabile"; // 5.0
$LNG['a_email_sent'] = "%s è stato informato."; // 4.2.0
$LNG['a_email_failed'] = "%s non è stato informato."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Sei disconnesso dal pannello di amministrazione."; // 5.0

// Admin > Main
$LNG['a_header'] = "Amministratore"; // 5.0
$LNG['a_main'] = "Benvenuto in amministrazione.  Usa i link a sinistra per gestire la topsite."; // 5.0
$LNG['a_main_approve'] = "Un sito in attesa di approvazione."; // 5.0
$LNG['a_main_approves'] = "Ci sono %s siti in attesa di approvazione."; // 5.0
$LNG['a_main_approve_rev'] = "Un commento in attesa di approvazione."; // 5.0
$LNG['a_main_approve_revs'] = "Ci sono %s commenti in attesa di approvazione."; // 5.0
$LNG['a_main_your'] = "La tua versione"; // 5.0
$LNG['a_main_latest'] = "Ultima versione"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Gestisci utenti"; // 5.0
$LNG['a_man_actions'] = "Azioni"; // 4.2.0
$LNG['a_man_edit'] = "Edita"; // 4.2.0
$LNG['a_man_delete'] = "Elimina"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Seleziona tutto"; // 5.0
$LNG['a_man_none'] = "Deseleziona"; // 5.0
$LNG['a_man_del_sel'] = "Elimina selezionati"; // 5.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Gestisci commenti"; // 5.0
$LNG['a_man_rev_enter'] = "Per gestire i commenti di un sito, inserisci lo username dell'utente qui sotto."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Commento"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Principale"; // 5.0
$LNG['a_menu_approve'] = "Approva nuovi membri";
$LNG['a_menu_manage'] = "Gestisci membri"; // 4.2.0
$LNG['a_menu_settings'] = "Cambia impostazioni"; // 5.0
$LNG['a_menu_skins'] = "Skins e categorie"; // 5.0
$LNG['a_menu_approve_reviews'] = "Approva nuovi commenti"; // 5.0
$LNG['a_menu_manage_reviews'] = "Gestisci commenti"; // 5.0
$LNG['a_menu_email'] = "Email agli utenti";
$LNG['a_menu_delete_review'] = "Cancella commenti";
$LNG['a_menu_logout'] = "Esci";
$LNG['a_menu_delete'] = "Elimina utente";
$LNG['a_menu_edit'] = "Edita utente";
$LNG['a_header_members'] = "Utenti"; // 5.0
$LNG['a_header_settings'] = "Impostazioni"; // 5.0
$LNG['a_header_reviews'] = "Commenti"; // 5.0

// Admin > Settings
$LNG['a_s_header'] = "Cambia impostazioni";
$LNG['a_s_general'] = "Impostazioni generali";
$LNG['a_s_admin_password'] = "Password amministratore";
$LNG['a_s_list_name'] = "Il nome della tua topsite";
$LNG['a_s_list_url'] = "Indirizzo della topsite";
$LNG['a_s_default_language'] = "Lingua di default";
$LNG['a_s_your_email'] = "Il tuo indirizzo email";

$LNG['a_s_sql'] = "Impostazioni SQL";
$LNG['a_s_sql_type'] = "Database Type"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Username";
$LNG['a_s_sql_password'] = "Password";

$LNG['a_s_ranking'] = "Impostazioni classifica";
$LNG['a_s_num_list'] = "Numero di siti per pagina"; // 5.0
$LNG['a_s_ranking_period'] = "Priodo di valutazione"; // 5.0
$LNG['a_s_ranking_method'] = "Metodo di valutazione"; // 5.0
$LNG['a_s_ranking_average'] = "Ordina per media o per solo %s"; // 5.0
$LNG['a_s_featured_member'] = 'Featured members - Devi aggiungere {$featured_member} a wrapper.html dopo averlo attivato.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Numero di utenti per usare la top skin";
$LNG['a_s_ad_breaks'] = "Mostra ad banner dopo queste posizioni (separate con una virgola)";

$LNG['a_s_member'] = "Impostazioni utente";
$LNG['a_s_active_default'] = "Richiedi approvazione utenti";
$LNG['a_s_active_default_review'] = "Richiedi approvazione commenti";
$LNG['a_s_delete_after'] = "Elimina utenti inattivi dopo questi giorni (metti zero per disattivare)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Email quando si iscrive un nuovo membro";
$LNG['a_s_max_banner_width'] = "Larghezza massima del banner (0 per nessun limite)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Altezza massima del banner (0 per nessun limite)"; // 4.2.0
$LNG['a_s_default_banner'] = "Banner per utenti che non lo forniscono";

$LNG['a_s_button'] = "Impostazione dei banner";
$LNG['a_s_ranks_on_buttons'] = "Banner di voto -  Consulta <a href=\"http://www.aardvarkind.com/topsitesphp/manual/\">il manuale</a> per i dettagli. Se selezioni Stat Button, il resto di questa sezione è ininfluente."; // 4.2.0
$LNG['a_s_stat_buttons'] = "Stat Buttons"; // 4.2.0
$LNG['a_s_button_url'] = "Se si/no - Url del banner che vuoi appaia"; // 4.0
$LNG['a_s_button_dir'] = "Se si - URL della directory in cui si trova il banner"; // 4.0
$LNG['a_s_button_ext'] = "Se si - Estensione del banner (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Se si - Numero dei bottoni che hai creato"; // 4.0

$LNG['a_s_other'] = "Altre impostazioni";
$LNG['a_s_search'] = "Cerca";
$LNG['a_s_time_offset'] = "Time offset from your server (in hours)";
$LNG['a_s_gateway'] = "Pagina per prevenire i voti fasulli";
$LNG['a_s_captcha'] = "Sicurezza antispam"; // 4.2.2

$LNG['a_s_on'] = "On";
$LNG['a_s_off'] = "Off";
$LNG['a_s_days'] = "Giorni";
$LNG['a_s_months'] = "Mesi";
$LNG['a_s_weeks'] = "Settimane"; // 4.2.0
$LNG['a_s_yes'] = "Si";
$LNG['a_s_no'] = "No";

$LNG['a_s_updated'] = "Le tue impostazioni sono state salvate.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Skins e categorie"; // 5.0
$LNG['a_skins_default'] = "Skin di default"; // 5.0
$LNG['a_skins_set_default'] = "Imposta skin di default"; // 5.0
$LNG['a_skins_anon'] = "Anonimo"; // 5.0
$LNG['a_skins_default_done'] = "La skin di default è stata impostata."; // 5.0
$LNG['a_skins_categories_done'] = "La categoria della skin è stata impostata."; // 5.0
$LNG['a_skins_new_category_done'] = "Nuova categoria creata."; // 5.0
$LNG['a_skins_delete_done'] = "Categoria eliminata."; // 5.0
$LNG['a_skins_edit_done'] = "La categoria è stata modificata."; // 5.0
$LNG['a_skins_invalid_skin'] = "Skin non valida: %s.  Prova ancora."; // 5.0
$LNG['a_skins_categories'] = "Categorie"; // 5.0
$LNG['a_skins_new_category'] = "Crea una nuova categoria"; // 5.0
$LNG['a_skins_set_skins'] = "Imposta categoria skins"; // 5.0
$LNG['a_skins_edit_category'] = "Modifica categoria"; // 5.0
$LNG['a_skins_category_name'] = "Nome della categoria"; // 5.0
$LNG['a_skins_diff_skins'] = "Se vuoi una skin diversa per ogni categoria, seleziona da qua sotto."; // 5.0
?>
