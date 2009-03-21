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
$translation = 'Italian (Italiano)';
$translator_name = 'Fabio Selvatici';
$translator_email = 'info@twist3dart.com';
$translator_url = 'http://www.twist3dart.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "Vai";
$LNG['g_username'] = "Username";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Titolo";
$LNG['g_description'] = "Descrizione";
$LNG['g_category'] = "Categoria"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Banner URL (Es.: http://www.miosito.it/images/bannermio.gif)";
$LNG['g_password'] = "Password";
$LNG['g_average'] = "Media";
$LNG['g_today'] = "Oggi";
$LNG['g_yesterday'] = "Ieri";
$LNG['g_daily'] = "Giornaliero"; // 5.0
$LNG['g_this_month'] = "Questo Mese"; // 5.0
$LNG['g_last_month'] = "Ultimo Moese"; // 5.0
$LNG['g_monthly'] = "Mensile"; // 5.0
$LNG['g_this_week'] = "Questa Settimana"; // 5.0
$LNG['g_last_week'] = "Ultima Settimana"; // 5.0
$LNG['g_weekly'] = "Settimanale"; // 5.0
$LNG['g_pv'] = 'Pagine Visitate'; // 5.0
$LNG['g_overall'] = 'Media'; // 5.0
$LNG['g_in'] = 'In'; // 5.0
$LNG['g_out'] = 'Out'; // 5.0
$LNG['g_unq_pv'] = "Unici PVs"; // 5.0
$LNG['g_tot_pv'] = "Totale PVs"; // 5.0
$LNG['g_unq_in'] = "Unici In"; // 5.0
$LNG['g_tot_in'] = "Totali In"; // 5.0
$LNG['g_unq_out'] = "Unici Out"; // 5.0
$LNG['g_tot_out'] = "Totali Out"; // 5.0
$LNG['g_invalid_u_or_p'] = "Username o Password NON VALIDI.  Riprovare prego."; // 5.0
$LNG['g_invalid_u'] = "Username NON VALIDO.  Riprovare prego."; // 5.0
$LNG['g_invalid_p'] = "Password NON VALIDA.  Riprovare prego."; // 5.0
$LNG['g_session_expired'] = "Sessione terminata.  Riprovare prego."; // 5.0
$LNG['g_error'] = "Errore"; // 5.0
$LNG['g_delete_install'] = "Per questioni di sicurezza devi cancellare la directory di installazione, prima che lo script possa essere eseguito."; // 5.0
$LNG['g_ip'] = "indirizzo IP"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Modifica Account";
$LNG['edit_info_edited'] = "Il tuo Account e' stato modificato con successo";
$LNG['edit_password_blank'] = "Lasciare in bianco per mantenere la password attuale"; // 4.0
$LNG['edit_delay'] = "Le modifiche al Titolo e al URL del sito devono essere approvate dall'amministratere della top."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Topsites Gateway Page";
$LNG['gateway_text'] = "Per evitare eventuale SPAM, e' stata visualizzata la seguente pagina.  Click su uno dei link sotto per entrare nel sito.";
$LNG['gateway_vote'] = "Entra e Vota";
$LNG['gateway_no_vote'] = "Entra Senza Votare"; // 5.0

// Install
$LNG['install_header'] = "Installazione";
$LNG['install_welcome'] = "Benvenuto all'Aardvark Topsites PHP 5.  Compila il form sotto per installare lo script.";
$LNG['install_sql_prefix'] = "Prefissi delle Tabelle - modificali solo se stai eseguendo piu' di una lista nello stesso DataBase";
$LNG['install_error_chmod'] = "Non puoi scrivere su settings_sql.php.  Assicurati di aver effettuato CHMOD 666 al file settings_sql.php.";
$LNG['install_error_sql'] = "Non posso connettermi al database SQL.  Torna indietro e verifica i settaggi SQL.";
$LNG['install_done'] = "La tua lista topsites e' stata installata.  Cancella ora la directory.";
$LNG['install_your'] = "Your Topsites List";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manuale";
$LNG['upgrade_header'] = "Aggiornamento";
$LNG['upgrade_welcome'] = "Benvenuto a Aardvark Topsites PHP 5.  Prima di effettuare un aggiornamento ricordati di effettuare un backup dei dati.";
$LNG['upgrade_version'] = "Stai effettuando un aggiornamento dalla versione %s."; // 5.1.0
$LNG['upgrade_error_version'] = "L'Aggiornamento e' supportato solo per Aardvark Topsites PHP 4.1.0 or superiore.";
$LNG['upgrade_done'] = "La tua topsites list e' stata aggiornata.  Elimina questa directory ora.";
$LNG['install_mailing_list'] = "Se ti piace questo script iscriviti alla newsletter di Aardvark Topsites PHP, e riceverai aggiornamenti di sicurezza,versioni e molto altro ancora."; // 5.2.0

// Join
$LNG['join_header'] = "Registrati";
$LNG['join_enter_text'] = "Immetti il testo presente nell'immagine sotto"; // 4.2.2
$LNG['join_enter_text_read'] = "Non riesci a leggere?"; // 5.2.0
$LNG['join_user'] = "User"; // 5.0
$LNG['join_website'] = "Website"; // 5.0
$LNG['join_banner_size'] = "(Dimensione massima: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "inserisci un username valido: usa solo lettere, numeri, underscores, and dashes."; // 5.0
$LNG['join_error_username_duplicate'] = "inserisci un username valido: il tuo username è gia' in uso."; // 5.0
$LNG['join_error_url'] = "inserisci un URL valido.";
$LNG['join_error_email'] = "inserisci un indirizzo email valido.";
$LNG['join_error_title'] = "inserisci il nome del tuo sito web.";
$LNG['join_error_password'] = "inserisci password.";
$LNG['join_error_confirm_password'] = "La password non è stata trovata."; // 5.2.0
$LNG['join_error_urlbanner'] = "inserisci un banner valido. lascia in bianco se non ne possiedi uno."; // 5.2.0
$LNG['join_error_time'] = "Non aggiornare la pagina di conferma."; // 4.2.0
$LNG['join_error_captcha'] = "La parola da te immessa non trova riscontro nelle immagini."; // 4.2.2
$LNG['join_error_question'] = "La tua domanda non è corretta.  Please fix this to confirm that you are a real person and not a bot."; // 5.2.0
$LNG['join_thanks'] = "Grazie per esserti registrato. Inserisci questo codice nella tua pagina.";
$LNG['join_change_warning'] = "Se cambi questo codice, potrebbe non funzionare.";
$LNG['join_welcome'] = "Benvenuto in %s";
$LNG['join_welcome_admin'] = "Un nuovo membro si è unito alla tua topsites list.";
$LNG['join_approve'] = "Grazie per esserti unito!  Il tuo sito sara' messo in lista quando l'admin del topsites list dara' l'approvazione.  Riceverai un email con piu' informazione quando sarai aggiunto."; // 5.2.0
$LNG['join_type'] = "Tipo Account"; // 5.1.0
$LNG['join_standard'] = "Standard"; // 5.1.0
$LNG['join_error_top'] = "E' stato riscontrato un'errore nella tua compilazione.  Per favore correggi l'errore ."; // 5.2.0
$LNG['join_ban_top'] = "Alcune informazioni inserite contengono informazioni di membri bannati dalla toplist."; // 5.2.0
$LNG['join_security'] = "Sicurezza"; // 5.2.0
$LNG['join_confirm_password'] = "Conferma Password"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Link Code"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Password persa"; // 5.0
$LNG['lost_pw_forgot'] = "Hai dimenticato la tua password?"; // 5.0
$LNG['lost_pw_get'] = "Richiedi Password"; // 5.0
$LNG['lost_pw_emailed'] = "Controlla la tua email per ulteriori istruzioni."; // 5.0
$LNG['lost_pw_email'] = "Per ottenere una nuova password per il tuo sito, basta clikkare a questa URL:"; // 5.0
$LNG['lost_pw_new'] = "Inserisci una Nuova Password"; // 5.0
$LNG['lost_pw_set_new'] = "Imposta una Nuova Password"; // 5.0
$LNG['lost_pw_finish'] = "La tua Nuova Password e' stata impostata."; // 5.0

// Main Page
$LNG['main_header'] = "Classifica"; // 5.0
$LNG['main_all'] = "Tutti i Siti"; // 4.2.0
$LNG['main_method'] = "Tipo di Classifica";
$LNG['main_members'] = "Utenti registrati";
$LNG['main_menu_rankings'] = "Classifiche";
$LNG['main_menu_join'] = "Registrati";
$LNG['main_menu_random'] = "Random registrati";
$LNG['main_menu_search'] = "Ricerca";
$LNG['main_menu_lost_code'] = "Codice perso"; // 5.0
$LNG['main_menu_lost_password'] = "Password persa"; // 5.0
$LNG['main_menu_edit'] = "Modifica le informazioni dell'utente";
$LNG['main_menu_user_cp'] = "Pannello di controllo utente"; // 5.0
$LNG['main_featured'] = "Featured Member"; // 4.0.2
$LNG['main_executiontime'] = "Tempo di esecuzione script"; // 4.0
$LNG['main_queries'] = "SQL Query"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statistiche";
$LNG['table_unique'] = "Unici";
$LNG['table_total'] = "Totali";
$LNG['table_rank'] = "Classifica";
$LNG['table_title'] = "Titolo"; // 4.0
$LNG['table_description'] = "Descrizione"; // 4.0
$LNG['table_movement'] = "Stato";
$LNG['table_up'] = "Su"; // 5.0
$LNG['table_down'] = "Giu'"; // 5.0
$LNG['table_neutral'] = "Stazionario"; // 5.0
$LNG['table_your_site_here'] = "Il tuo sito qui'"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Punteggio e Commenti";
$LNG['rate_message'] = "Per favore inserisci il tuo foto e la tua rassegna per %s nel form qui sotto."; // 5.2.0
$LNG['rate_rating'] = "Punteggio";
$LNG['rate_review'] = "Commento - No HTML consentito"; // 5.0
$LNG['rate_thanks'] = "Grazie per il tuo voto.";
$LNG['rate_error'] = "Hai gia' votato questo sito.";
$LNG['rate_back'] = "Torna alle statistiche";
$LNG['rate_email_admin'] = "Un nuovo commento e' stato inserito sulla tua lista topsites list"; // 5.1.0

// Search
$LNG['search_header'] = "Ricerca";
$LNG['search_off'] = "La funzionalita' di ricerca e' stata Disabilitata.";
$LNG['search_no_sites'] = "Spiacente, nessun sito trovato."; // 5.0
$LNG['search_prev'] = "Precedente"; // 3.2.1
$LNG['search_next'] = "Successivo"; // 3.2.1
$LNG['search_displaying_results'] = "Visualizza %s di %s su %s resultati per <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistiche";
$LNG['stats_info'] = "Informazioni";
$LNG['stats_member_since'] = "Iscritto dal"; // 5.0
$LNG['stats_rating_avg'] = "Valutazioni Medie";
$LNG['stats_rating_num'] = "Numero di Valutazioni";
$LNG['stats_rate'] = "Valuta e commenta questo Sito";
$LNG['stats_reviews'] = "Commenti";
$LNG['stats_allreviews'] = "Mostra tutti i Commenti"; // 4.0
$LNG['stats_week'] = "Settimana"; // 5.0
$LNG['stats_highest'] = "Il piu' alto"; // 5.0
$LNG['stats_overall'] = "Media Statistiche"; // 5.2.0
$LNG['stats_overall_average'] = "Average (Last 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Totale (Tutti il  Tempo)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "I %s Siti TOP"; // 4.0
$LNG['ssi_new'] = "%s Nuovi Utenti"; // 5.0
$LNG['ssi_all'] = "Tutti i Siti"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Pannello di controllo Utente"; // 5.0
$LNG['user_cp_login'] = "Entra"; // 5.0
$LNG['user_cp_logout'] = "Esci"; // 5.0
$LNG['user_cp_welcome'] = "Benvenuto nel Pannello di Controllo Utente.  Usa i Link a sinistra per gestire il Tuo Account."; // 5.0
$LNG['user_cp_logout_message'] = "Sei uscito dal Pannello di Controllo Utente."; // 5.0
$LNG['user_cp_login_long'] = "Entra con il tuo NomeUtente e la tua Password oppure con il tuo OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "OpenID server non trovato per %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Devi iscriverti alla topsite list prima di poter accedere al pannello di controllo utente."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Un errore e' avvenuto durante la procedura di ingresso.  Prova di nuovo."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Devi avere i permessi per accedere.  Prova di nuovo."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Errore dal server: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Non puoi accedere al pannello di controllo se il tuo sito non è stato approvato.  Riceverai una email quando il tuo sito sarà approvato."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Approva i Nuovi utenti"; // 5.0
$LNG['a_approve'] = "Approva"; // 4.0
$LNG['a_approve_none'] = "Non ci sono nuovi Utenti in attesa di approvazione."; // 4.0
$LNG['a_approve_done'] = "L'utente e' stato approvato."; // 4.0
$LNG['a_approve_dones'] = "Gli utenti sono stati approvati."; // 4.0
$LNG['a_approve_sel'] = "Con selezionato:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Approva Modifica Membro"; // 5.2.0
$LNG['a_approve_edited_none'] = "Non ci sono modifiche da approvare."; // 5.2.0
$LNG['a_approve_edited_old'] = "Antemprima Url e Titolo"; // 5.2.0
$LNG['a_approve_edited_new'] = "Modificato Url e Titolo"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Rifiuta"; // 5.2.0
$LNG['a_approve_edited_done'] = "Le modifiche sono state approvate."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Le modifiche sono state rifiutate."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Approva i Nuovi Commenti"; // 5.0
$LNG['a_approve_rev_none'] = "Non ci sono Nuovi Commenti da approvare."; // 5.0
$LNG['a_approve_rev_done'] = "Il commento e' stato approvato."; // 5.0
$LNG['a_approve_rev_dones'] = "I commenti sono stati approvati."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Backup Database"; // 5.2.0
$LNG['a_backup_warn'] = "Stai per creare un Backup dei tuoi membri, statistiche e settaggi.  Se hai molti membri, l'operazione potrebbe durare ulcuni minuti e il file sara' di grandi dimensioni."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Crea una Pagina Custom"; // 5.1.0
$LNG['a_create_page_id'] = "Page ID - Questo sara' usato nella URL, quindi dovra' contenere solo lettere, numeri, trattino_basso, cancelletto"; // 5.1.0
$LNG['a_create_page_error_id'] = "L'ID puo' contenere solo lettere, numeri, trattino_basso, cancelletto.  Torna indietro e correggi il page ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Esiste gia' una pagina Custom con questo ID.  Torna indietro e seleziona un nuovo ID."; // 5.1.0
$LNG['a_create_page_created'] = "La pagina e' stata creata.  Dovrai aggiungere manualmente il link a %s in wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Elimina singolo Utente"; // 5.0
$LNG['a_del_headers'] = "Elimina Utenti"; // 5.0
$LNG['a_del_done'] = "L'utente e' stato eliminato."; // 5.0
$LNG['a_del_dones'] = "Gli utenti sono stati eliminati."; // 5.0
$LNG['a_del_warn'] = "Sei sicuro di voler eliminare %s?"; // 5.0
$LNG['a_del_multi'] = "questi %s utenti"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Elimina Parola Filtrata"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Elimina Parole Filtrate"; // 5.1.0
$LNG['a_del_bad_word_done'] = "La parola filtrata e' stata eliminata."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Le parole filtrate sono state eliminate."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Sei sicuro di vole eliminare %s dalla lista delle parole filtrate ?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "queste %s parole"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "ID parola filtrata.  Prova di nuovo."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Elimina entrata dalla Blacklist"; // 5.2.0
$LNG['a_del_ban_headers'] = "Elimina entrate dalla Blacklist"; // 5.2.0
$LNG['a_del_ban_done'] = "I' entrata è stato eliminata dalla Blacklist."; // 5.2.0
$LNG['a_del_ban_dones'] = "Le entrate sono state eliminate dalla Blacklist."; // 5.2.0
$LNG['a_del_ban_warn'] = "Sei sicuro di voler eliminare %s dalla Blacklist?"; //5.2.0
$LNG['a_del_ban_multi'] = "queste %s entrate"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "ID Blacklist invalido. Riprova."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Elimina Pagina Custom"; // 5.1.0
$LNG['a_del_page_headers'] = "Elimina Pagine Custom"; // 5.1.0
$LNG['a_del_page_done'] = "La pagina Custom e' stata eliminata."; // 5.1.0
$LNG['a_del_page_dones'] = "Le pagine custom sono state eliminate."; // 5.1.0
$LNG['a_del_page_warn'] = "Sei sicuro di voler eliminare %s?"; //5.1.0
$LNG['a_del_page_multi'] = "queste %s pagine"; //5.1.0
$LNG['a_del_page_invalid_id'] = "ID pagina custom non valido.  Prova di nuovo."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Elimina commento"; // 5.0
$LNG['a_del_rev_headers'] = "Elimina commenti"; // 5.0
$LNG['a_del_rev_done'] = "Il commento e' stato eliminato."; // 5.0
$LNG['a_del_rev_dones'] = "I commenti sono stati eliminati."; // 5.0
$LNG['a_del_rev_warn'] = "Sei sicuro di voler eliminare questo commento?"; //5.0
$LNG['a_del_rev_warns'] = "Sei sicuro di voler eliminare questi commenti?"; //5.0
$LNG['a_del_rev_invalid_id'] = "ID commento non valido.  Prova di nuovo."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Modifica Utente"; // 5.0
$LNG['a_edit_site_is'] = "Questo sito e'"; // 4.0
$LNG['a_edit_active'] = "Attivi (Listati)"; // 4.0
$LNG['a_edit_inactive'] = "Non Attivi (Non Listati)"; // 5.0
$LNG['a_edit_edited'] = "L'utente e' stato modificato.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Modifica le parole filtrate"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Le parole filtrate sono state modificate."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Modifica entrata nella Blacklist"; // 5.2.0
$LNG['a_edit_ban_edited'] = "L'entrata della Blacklist è stata modificata."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Modifica la Custom Page"; // 5.1.0
$LNG['a_edit_page_content'] = "Contenuto - Puoi usare codice HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "La pagina e' stata modificata."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Modifica Commento"; // 5.0
$LNG['a_edit_rev_edited'] = "Il commento e' stato modificato.";

// Admin > Email Members
$LNG['a_email_header'] = "Email Utenti"; // 5.0
$LNG['a_email_subject'] = "Soggetto"; // 4.2.0
$LNG['a_email_message'] = "Messaggio"; // 4.2.0
$LNG['a_email_msg_sent'] = "La email e' stata spedita a %s"; // 5.0
$LNG['a_email_not_sent'] = "La email non riesco a spedirla a %s"; // 5.0
$LNG['a_email_sent'] = "%s email sono state spedite."; // 4.2.0
$LNG['a_email_failed'] = "%s email non sono state spedite."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Sei uscito dall'amministrazione."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Benevenuto nell'amministrazione.  Usa i link sulla sinistra per gestire la tua topsite list."; // 5.0
$LNG['a_main_approve'] = "C'e' 1 sito in attesa di approvazione."; // 5.0
$LNG['a_main_approves'] = "Ci sono %s siti in attesa di approvazione."; // 5.0
$LNG['a_main_approve_edit'] = "C'è 1 sito modificato in attesa di approvazione."; // 5.2.0
$LNG['a_main_approve_edits'] = "Ci sono %s siti modificati in attesa di approvazione."; // 5.2.0
$LNG['a_main_approve_rev'] = "C'e' 1 commento in attesa di approvazione."; // 5.0
$LNG['a_main_approve_revs'] = "Ci sono %s commenti in attesa di approvazione."; // 5.0
$LNG['a_main_your'] = "La tua versione"; // 5.0
$LNG['a_main_latest'] = "L'ultima versione"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Gestione Utenti"; // 5.0
$LNG['a_man_actions'] = "Azioni"; // 4.2.0
$LNG['a_man_edit'] = "Modifiche"; // 4.2.0
$LNG['a_man_delete'] = "Elimina"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Seleziona Tutti"; // 5.0
$LNG['a_man_none'] = "De-seleziona Tutti"; // 5.0
$LNG['a_man_del_sel'] = "Elimina Selezionato"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Filtro parole non gradite"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Inserisci una parola e la rispettiva sostituzione sotto.  Per esempio potresti inserire \"maiale\" nela campo parola e \"m***\" nel campo sostituzione."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "La verifica Precisa controlla solo la parola esatta.  La verifica Globale controlla anche all'interno di parole piu' lunghe.  Ovvero, la verifica Globale di \"diavolo\" puo' essere anche  \"diavolone\" e \"porcodiavolo\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Parola"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Sostituzione"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Verifica"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Esatta"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globale"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Parola Filtrata"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" e' stata aggiunta al dizionario dei filtri."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Blacklist"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Per bannare i siti dalla tua toplist, compilare il form sottostante. Quando un membro esegue il join il suo URL, la sua mail e il suo indirizzo ip saranno controllati. Quando un sito viene modificato, Url e mail saranno controllati.<br /><br />La lista nera non interessera' i vostri membri attualia."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "La corrispondenza esatta abbinera' soltanto la stringa esatta. La corrispondenza globale abbinera' qualche cosa che contiene la stringa. Cosi', la corrispondenza globale di http://www.yahoo.com/ abbinerebbe tutta la pagina con http://www.yahoo.com/ nel URL, mentre la corrispondenza esatta di http://www.yahoo.com/ abbinerebbe soltanto quel URL esatto."; // 5.2.0
$LNG['a_man_ban_string'] = "Stringa"; // 5.2.0
$LNG['a_man_ban_field'] = "Campo"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" è stato aggiunto alla blacklist."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Gestione Pagine Custom"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Gestione Commenti"; // 5.0
$LNG['a_man_rev_enter'] = "Per gestire i commenti di un sito, inserisci il nome dell'utente qui sotto."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Commento"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Principale"; // 5.0
$LNG['a_menu_approve'] = "Approva un Nuovo Utente";
$LNG['a_menu_approve_edits'] = "Approva Modifiche Membro"; // 5.2.0
$LNG['a_menu_manage'] = "Gestione Utenti"; // 4.2.0
$LNG['a_menu_settings'] = "Impostazioni Sito"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filtro Parole non gradite"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Blacklist"; // 5.2.0
$LNG['a_menu_backup'] = "Backup Database"; // 5.2.0
$LNG['a_menu_skins'] = "Skins e Categorie"; // 5.0
$LNG['a_menu_approve_reviews'] = "Approva Nuovi Commenti"; // 5.0
$LNG['a_menu_manage_reviews'] = "Gestione Commenti"; // 5.0
$LNG['a_menu_email'] = "Email Utenti";
$LNG['a_menu_delete_review'] = "Elimina Commento";
$LNG['a_menu_logout'] = "Esci";
$LNG['a_menu_delete'] = "Elimina Utente";
$LNG['a_menu_edit'] = "Modifica Utente";
$LNG['a_menu_create_page'] = "Crea una Pagina Custom"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Gestione Pagine Custom"; // 5.1.0
$LNG['a_header_members'] = "Utenti"; // 5.0
$LNG['a_header_settings'] = "Impostazioni"; // 5.0
$LNG['a_header_reviews'] = "Commenti"; // 5.0
$LNG['a_header_pages'] = "Pagine Custom"; // 5.1.0
$LNG['a_header_tools'] = "Tools"; // 5.2.0

// Admin > Settings
$LNG['a_s_header'] = "Cambia Impostazioni";
$LNG['a_s_help'] = "Aiuto"; // 5.1.0

$LNG['a_s_general'] = "Impostazioni Generali";
$LNG['a_s_admin_password'] = "Admin password";
$LNG['a_s_list_name'] = "Il nome della tua lista topsite";
$LNG['a_s_list_url'] = "URL alla directory topsites";
$LNG['a_s_default_language'] = "Lingua di Default";
$LNG['a_s_your_email'] = "Il tuo indirizzo email";

$LNG['a_s_sql'] = "Impostazioni SQL";
$LNG['a_s_sql_type'] = "Tipologia Database"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Username";
$LNG['a_s_sql_password'] = "Password";

$LNG['a_s_ranking'] = "Impostazioni Ranking";
$LNG['a_s_num_list'] = "Numero di utenti visualizzati per pagina"; // 5.0
$LNG['a_s_ranking_period'] = "Ranking period"; // 5.0
$LNG['a_s_ranking_method'] = "Ranking method"; // 5.0
$LNG['a_s_ranking_average'] = "Rank by average or by just %s"; // 5.0
$LNG['a_s_featured_member'] = 'Featured member - You have to add {$featured_member} to wrapper.html after you turn this on.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Number of members to use the _top skin for";
$LNG['a_s_ad_breaks'] = "Show ads after these ranks (separate with commas) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Riempire i campi vuoti con il messaggio \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Impostazioni Utente";
$LNG['a_s_active_default'] = "Richiedi l'approvazione dei Nuovi Utenti prima di essere visualizzati";
$LNG['a_s_active_default_review'] = "Richiedi che i nuovi commenti siano approvati prima della visualizzazione";
$LNG['a_s_delete_after'] = "Elimina utenti inattivi dopo questo numero di giorni (imposta a 0 per disabilitare)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Invia una Email all'Admin quando un nuovo utente si iscrive"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Invia una Email all'Admin quando un nuovo commento viene inserito"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Lunghezza massima Banner Utenti (impostare a 0 per disabiliare)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Altezza massima Banner Utenti (impostare a 0 per disabilitare)"; // 4.2.0
$LNG['a_s_default_banner'] = "Default banner per gli utenti che non ne forniscono uno";

$LNG['a_s_button'] = "Impostazioni Bottone";
$LNG['a_s_ranks_on_buttons'] = "Ranks on buttons -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Stat Buttons"; // 4.2.0
$LNG['a_s_button_url'] = "Se Si/No - URL del banner di default che si vuole far apparire sul sito degli iscritti"; // 4.0
$LNG['a_s_button_dir'] = "Se Si - URL della directory dove sono salvati i banner"; // 4.0
$LNG['a_s_button_ext'] = "Se Si - Estensione dei banner (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Se Si - Numero di banner presenti"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Pagina Gateway per gestire i falsi click in ingresso";
$LNG['a_s_captcha'] = "Verifica tramite Parola-Immagine all'iscrizione (protegge dagli spammers) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Domanda AntiSpam: Serve per tenere lontani gli spammer, (lascia bianco per disabilitare) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Altre Impostazioni";
$LNG['a_s_search'] = "Ricerca";
$LNG['a_s_time_offset'] = "Scostamento orario dal tuo server (in ore)";

$LNG['a_s_on'] = "On";
$LNG['a_s_off'] = "Off";
$LNG['a_s_days'] = "Giorni";
$LNG['a_s_months'] = "Mesi";
$LNG['a_s_weeks'] = "Settimane"; // 4.2.0
$LNG['a_s_yes'] = "Si";
$LNG['a_s_no'] = "No";
$LNG['a_s_answer'] = "Risposta"; // 5.2.0

$LNG['a_s_updated'] = "Le Tue impostazioni sono state aggiornate.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Skins e Categorie"; // 5.0
$LNG['a_skins_default'] = "Default Skin"; // 5.0
$LNG['a_skins_set_default'] = "Imposta il Default Skin"; // 5.0
$LNG['a_skins_anon'] = "Anonymous"; // 5.0
$LNG['a_skins_default_done'] = "Lo skin di default e' stato impostato."; // 5.0
$LNG['a_skins_categories_done'] = "Lo skin della categoria e' stato impostato"; // 5.0
$LNG['a_skins_new_category_done'] = "La nuova categoria e' stata creata."; // 5.0
$LNG['a_skins_delete_done'] = "La categoria e' stata eliminata."; // 5.0
$LNG['a_skins_delete_error'] = "La categoria non puo' essere eliminata perche' occorre lasciare almeno una categoria."; // 5.1.0
$LNG['a_skins_edit_done'] = "La categoria e' stata modificata."; // 5.0
$LNG['a_skins_invalid_skin'] = "Skin non valido: %s.  Riprovare."; // 5.0
$LNG['a_skins_categories'] = "Categorie"; // 5.0
$LNG['a_skins_new_category'] = "Crea Nuova Categoria"; // 5.0
$LNG['a_skins_set_skins'] = "Imposta lo skin della Categoria"; // 5.0
$LNG['a_skins_edit_category'] = "Modifica Categoria"; // 5.0
$LNG['a_skins_category_name'] = "Nome Categoria"; // 5.0
$LNG['a_skins_diff_skins'] = "Se vuoi utilizzare differenti skin per differenti categorie, selezionarle sotto."; // 5.0
?>
