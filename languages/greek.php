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
$translation = 'Greek (Ελληνικά)';
$translator_name = 'Dimi';
$translator_email = 'dimi1213@googlemail.com';
$translator_url = 'http://www.hellasplus.com';

// Set this to the character encoding of your translation
$LNG['charset'] = "utf-8";
// ALSO AVALIABLE IN ISO 8859-7 ENCODING: http://www.aardvarktopsitesphp.com/forums/viewtopic.php?f=12&t=8323
// Global
$LNG['g_form_submit_short'] = "Πάω";
$LNG['g_username'] = "Χρήστης";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Τίτλος";
$LNG['g_description'] = "Περιγραφή";
$LNG['g_category'] = "Κατηγορία"; // 4.1.0
$LNG['g_email'] = "Ηλεκτρονικό ταχυδρομείο";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Κωδικός πρόσβασης";
$LNG['g_average'] = "Μέσος";
$LNG['g_today'] = "Σήμερα";
$LNG['g_yesterday'] = "Χθες";
$LNG['g_daily'] = "Ημερήσια"; // 5.0
$LNG['g_this_month'] = "Αυτό το Μήνα"; // 5.0
$LNG['g_last_month'] = "Τελευταίος μήνας"; // 5.0
$LNG['g_monthly'] = "Μηνιαία"; // 5.0
$LNG['g_this_week'] = "Αυτή η εβδομάδα"; // 5.0
$LNG['g_last_week'] = "Την προηγούμενη εβδομάδα"; // 5.0
$LNG['g_weekly'] = "Εβδομαδιαίο"; // 5.0
$LNG['g_pv'] = "Προβολές σελίδων"; // 5.0
$LNG['g_overall'] = "Συνολικά"; // 5.0
$LNG['g_in'] = "In"; // 5.0
$LNG['g_out'] = "Out"; // 5.0
$LNG['g_unq_pv'] = "Μοναδικές PVs"; // 5.0
$LNG['g_tot_pv'] = "Σύνολο PVs"; // 5.0
$LNG['g_unq_in'] = "Μοναδικές In"; // 5.0
$LNG['g_tot_in'] = "Σύνολο In"; // 5.0
$LNG['g_unq_out'] = "Μοναδικές Out"; // 5.0
$LNG['g_tot_out'] = "Σύνολο Out"; // 5.0
$LNG['g_invalid_u_or_p'] = "Άκυρα όνομα χρήστη ή τον κωδικό πρόσβασης. Παρακαλώ δοκιμάστε ξανά."; // 5.0
$LNG['g_invalid_u'] = "Άκυρα username. Παρακαλώ δοκιμάστε ξανά."; // 5.0
$LNG['g_invalid_p'] = "Άκυρα κωδικό πρόσβασης. Παρακαλώ δοκιμάστε ξανά."; // 5.0
$LNG['g_session_expired'] = "Σας έχει λήξει. Παρακαλώ δοκιμάστε ξανά."; // 5.0
$LNG['g_error'] = "Λάθος"; // 5.0
$LNG['g_delete_install'] = "Για λόγους ασφαλείας, πρέπει να διαγράψετε τον κατάλογο προτού εγκαταστήσετε το script θα τρέξει."; // 5.0
$LNG['g_ip'] = "IP Διεύθυνση"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Επεξεργασία Λογαριασμού";
$LNG['edit_info_edited'] = "Ο λογαριασμός σας έχει διαγραφεί επιτυχώς.";
$LNG['edit_password_blank'] = "Αφήστε αυτό το κενό για να διατηρήσουν τον τρέχοντα κωδικό πρόσβασης"; // 4.0
$LNG['edit_delay'] = "Αλλαγές στο δικτυακό σας τόπο του τίτλο και το URL πρέπει να εγκριθεί από το διαχειριστή του topsites πριν από τη λήψη ισχύος."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Σελίδα πυλών Topsites";
$LNG['gateway_text'] = "Προκειμένου να αποτρέψει την εξαπάτηση, μια πύλη η σελίδα έχει θέσει. Κάντε κλικ στον παρακάτω σύνδεσμο για να εισέλθουν στην λίστα topsites.";
$LNG['gateway_vote'] = "Εισάγετε και ψηφοφορία";
$LNG['gateway_no_vote'] = "Εισάγετε χωρίς ψήφου"; // 5.0

// Install
$LNG['install_header'] = "Εγκατάσταση";
$LNG['install_welcome'] = "Καλώς ήρθατε στο Aardvark Topsites PHP 5. Συμπληρώστε την φόρμα για να εγκαταστήσετε το script.";
$LNG['install_sql_prefix'] = "Πίνακας πρόθεμα - μόνο αυτή η αλλαγή, αν εκτελείτε περισσότερες από μία λίστα από την ίδια βάση δεδομένων";
$LNG['install_error_chmod'] = "Δεν θα μπορούσε να γράψει settings_sql.php.  Βεβαιωθείτε ότι έχετε CHMOD 666 settings_sql.php.";
$LNG['install_error_sql'] = "Δεν θα μπορούσε να συνδεθεί με το SQL βάση δεδομένων.  Παρακαλείσθε να επιστρέψετε και να ελέγξετε σας SQL Ρυθμίσεις.";
$LNG['install_done'] = "Topsites λίστα σας έχει εγκατασταθεί. Διαγραφή αυτού του καταλόγου τώρα.";
$LNG['install_your'] = "Ο κατάλογος Topsites";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Εγχειρίδιο";
$LNG['upgrade_header'] = "Αναβάθμισηe";
$LNG['upgrade_welcome'] = "Καλώς ήρθατε στο Aardvark Topsites PHP 5. Πριν από την αναβάθμιση, θυμηθείτε να δημιουργήσει αντίγραφα ασφαλείας των δεδομένων σας.";
$LNG['upgrade_version'] = "Βεβαιωθείτε ότι κάνετε αναβάθμιση από έκδοση %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Αναβάθμιση υποστηρίζεται μόνο για Aardvark Topsites PHP 4.1.0 ή υψηλότερος.";
$LNG['upgrade_done'] = "Topsites λίστα σας έχει αναβαθμιστεί. Διαγραφή αυτού του καταλόγου τώρα.";
$LNG['install_mailing_list'] = "Αν θέλετε να ενταχθούν στην Aardvark Topsites PHP mailing λίστα, δώστε τη διεύθυνση email σας παρακάτω. Είναι ένα χαμηλό όγκο κατάλογο για σημαντικές ανακοινώσεις σχετικά με τη δέσμη ενεργειών, όπως νέες κυκλοφορίες και συμβουλές ασφαλείας."; // 5.2.0

// Join
$LNG['join_header'] = "Συμμετέχω";
$LNG['join_enter_text'] = "Εισάγετε το κείμενο όπως εμφανίζεται στην παρακάτω εικόνα"; // 4.2.2
$LNG['join_enter_text_read'] = "Δεν μπορούν να διαβάσουν?"; // 5.2.0
$LNG['join_user'] = "Χρήστης"; // 5.0
$LNG['join_website'] = "Website"; // 5.0
$LNG['join_banner_size'] = "(Μέγιστο μέγεθος: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Εισάγετε ένα έγκυρο όνομα χρήστη: χρήση μόνο γράμματα, αριθμοί, υπογράμμιση και παύλες."; // 5.0
$LNG['join_error_username_duplicate'] = "Εισάγετε ένα έγκυρο όνομα χρήστη: το όνομα χρήστη σας είναι ήδη σε λειτουργία."; // 5.0
$LNG['join_error_url'] = "Εισάγετε μια έγκυρη URL.";
$LNG['join_error_email'] = "Εισάγετε μια έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου.";
$LNG['join_error_title'] = "Εισάγετε έναν τίτλο για το web site σας.";
$LNG['join_error_password'] = "Εισάγετε έναν κωδικό πρόσβασης.";
$LNG['join_error_confirm_password'] = "Οι κωδικοί πρόσβασης δεν ταιριάζουν."; // 5.2.0
$LNG['join_error_urlbanner'] = "Εισάγετε μια έγκυρη banner. Αφήστε το κενό αν δεν έχετε."; // 5.2.0
$LNG['join_error_time'] = "Μην ανανεώστε την σελίδα επιβεβαίωσης ενταχθούν."; // 4.2.0
$LNG['join_error_captcha'] = "Η λέξη που δώσατε δεν ταιριάζει με την εικόνα."; // 4.2.2
$LNG['join_error_question'] = "Η απάντησή σας είναι εσφαλμένη. Παρακαλούμε να διορθώσετε αυτό να επιβεβαιώσει ότι είστε ένα πραγματικό πρόσωπο και δεν αποτελεί bot."; // 5.2.0
$LNG['join_thanks'] = "Σας ευχαριστώ για την ένταξή τους! Βάλε τον κώδικα σε αυτό το δικτυακό σας τόπο την ταξινόμησή.";
$LNG['join_change_warning'] = "Εάν αλλάξετε τον κώδικα, θα μπορούσε να μην λειτουργεί.";
$LNG['join_welcome'] = "Καλώς ήλθατε στην %s";
$LNG['join_welcome_admin'] = "Ένα νέο μέλος έχει ενταχθεί σας topsites λίστα.";
$LNG['join_approve'] = "Σας ευχαριστώ για την ένταξή τους! Η ιστοσελίδα σας θα καταγράφεται όταν ο admin του topsites κατάλογο εγκρίνει. Θα λάβετε ένα email με περισσότερες πληροφορίες όταν ο δικτυακός τόπος είναι εγκεκριμένο."; // 5.2.0
$LNG['join_type'] = "Τύπος λογαριασμού"; // 5.1.0
$LNG['join_standard'] = "Στάνταρ"; // 5.1.0
$LNG['join_error_top'] = "Ένα σφάλμα βρέθηκε να την υποβολή σας. Παρακαλούμε να διορθώσει το λάθος αυτό, κάτω από."; // 5.2.0
$LNG['join_ban_top'] = "Την υποβολή σας έχει περιεχόμενο που έχει απαγορευθεί από το διαχειριστή του topsites."; // 5.2.0
$LNG['join_security'] = "Ασφαλείας"; // 5.2.0
$LNG['join_confirm_password'] = "Επιβεβαίωση Κωδικού"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Link Κωδικός"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Ξεχάσατε τον κωδικό"; // 5.0
$LNG['lost_pw_forgot'] = "Ξεχάσατε τον κωδικό σας?"; // 5.0
$LNG['lost_pw_get'] = "Αποκτήστε κωδικό"; // 5.0
$LNG['lost_pw_emailed'] = "Παρακαλούμε ελέγξτε το email σας για περαιτέρω οδηγίες."; // 5.0
$LNG['lost_pw_email'] = "Για να επιλέξετε ένα νέο κωδικό πρόσβασης για το site σας, απλά πάνε σε αυτό το URL:"; // 5.0
$LNG['lost_pw_new'] = "Εισάγετε ένα νέο κωδικό πρόσβασης"; // 5.0
$LNG['lost_pw_set_new'] = "Ορισμός νέου κωδικού πρόσβασης"; // 5.0
$LNG['lost_pw_finish'] = "Ο κωδικός σας έχει που να το νέο κωδικό που μόλις επιλεγεί."; // 5.0

// Main Page
$LNG['main_header'] = "Κατάταξη"; // 5.0
$LNG['main_all'] = "Όλες οι περιοχές"; // 4.2.0
$LNG['main_method'] = "Κατάταξη μέθοδος";
$LNG['main_members'] = "Μέλη";
$LNG['main_menu_rankings'] = "Κατάταξη";
$LNG['main_menu_join'] = "Συμμετέχω";
$LNG['main_menu_random'] = "Τυχαίο μέλος";
$LNG['main_menu_search'] = "Αναζήτηση";
$LNG['main_menu_lost_code'] = "Χαμένος Κωδικός"; // 5.0
$LNG['main_menu_lost_password'] = "Ξεχάσατε τον κωδικό"; // 5.0
$LNG['main_menu_edit'] = "πεξεργασία των κρατών Info";
$LNG['main_menu_user_cp'] = "Πίνακας Ελέγχου Μέλους"; // 5.0
$LNG['main_featured'] = "Χαρακτηρισμένο μέλος"; // 4.0.2
$LNG['main_executiontime'] = "Χειρόγραφο χρόνος εκτέλεσης"; // 4.0
$LNG['main_queries'] = "SQL Ερωτήσεις"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Στατιστικά";
$LNG['table_unique'] = "Μοναδικές";
$LNG['table_total'] = "Σύνολο";
$LNG['table_rank'] = "Τάξη";
$LNG['table_title'] = "Τίτλος"; // 4.0
$LNG['table_description'] = "Περιγραφή"; // 4.0
$LNG['table_movement'] = "Μετακίνηση";
$LNG['table_up'] = "Επάνω"; // 5.0
$LNG['table_down'] = "Κάτω"; // 5.0
$LNG['table_neutral'] = "Ουδέτερη"; // 5.0
$LNG['table_your_site_here'] = "Η ιστοσελίδα σας εδώ"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Ποσοστό και αναθεώρηση";
$LNG['rate_message'] = "Δώστε βαθμολογία και για την αναθεώρηση %s στην παρακάτω φόρμα."; // 5.2.0
$LNG['rate_rating'] = "Βαθμολογία";
$LNG['rate_review'] = "Επιθεώρηση - Δεν επιτρέπεται HTML"; // 5.0
$LNG['rate_thanks'] = "Σας ευχαριστούμε για τη βαθμολογία.";
$LNG['rate_error'] = "Έχετε ήδη βαθμολογηθεί παρόντα δικτυακό τόπο.";
$LNG['rate_back'] = "Επιστροφή στα Στατιστικά";
$LNG['rate_email_admin'] = "Μια νέα αναθεώρηση έχει αναρτηθεί στην δική σας λίστα topsites."; // 5.1.0

// Search
$LNG['search_header'] = "Αναζήτηση";
$LNG['search_off'] = "Η αναζήτηση δυνατότητα έχει απενεργοποιηθεί.";
$LNG['search_no_sites'] = "Λυπούμαστε, καμία περιοχή που ταιριάζει με τα κριτήριά σας δεν βρέθηκε."; // 5.0
$LNG['search_prev'] = "Προηγούμενη"; // 3.2.1
$LNG['search_next'] = "Επόμενος"; // 3.2.1
$LNG['search_displaying_results'] = "Εμφανίζονται %s κατά %s of %s αποτελέσματα για <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Στατιστικά";
$LNG['stats_info'] = "Πληροφορίες";
$LNG['stats_member_since'] = "Μέλος από τότε"; // 5.0
$LNG['stats_rating_avg'] = "Μέσος Βαθμολογία";
$LNG['stats_rating_num'] = "Αριθμός Βαθμολογήσεων";
$LNG['stats_rate'] = "Ποσοστό και επανεξετάζει τον παρόντα δικτυακό τόπο";
$LNG['stats_reviews'] = "Κριτικές";
$LNG['stats_allreviews'] = "Δείτε όλα τα σχόλια"; // 4.0
$LNG['stats_week'] = "Εβδομάδα"; // 5.0
$LNG['stats_highest'] = "Υψηλότερο"; // 5.0
$LNG['stats_overall'] = "Συνολικά Στατιστικά"; // 5.2.0
$LNG['stats_overall_average'] = "Μέσος (Τελευταία 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Σύνολο (όλος ο χρόνος)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Κορυφή %s Δικτυακοί τόποι"; // 4.0
$LNG['ssi_new'] = "%s Νεότερα Μέλη"; // 5.0
$LNG['ssi_all'] = "Όλες οι περιοχές"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Πίνακας Ελέγχου Μέλους"; // 5.0
$LNG['user_cp_login'] = "Σύνδεση"; // 5.0
$LNG['user_cp_logout'] = "Αποσύνδεση"; // 5.0
$LNG['user_cp_welcome'] = "Καλώς ήρθατε στο χρήστη πίνακα ελέγχου. Χρησιμοποιήστε τους συνδέσμους στα αριστερά για να διαχειριστεί το λογαριασμό σας."; // 5.0
$LNG['user_cp_logout_message'] = "Έχετε τώρα αποσυνδεθεί από το χρήστη πίνακα ελέγχου."; // 5.0
$LNG['user_cp_login_long'] = "Σύνδεση με το όνομα χρήστη και τον κωδικό πρόσβασής σας ή Ανοικτός ID."; // 5.1.0
$LNG['user_cp_openid'] = "ΑνοικτόςID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Μπόρεσαν να βρουν ΑνοικτόID server για %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Θα πρέπει να ενταχθούν στην topsites κατάλογο για να μπορείτε να έχετε πρόσβαση στο χρήστη πίνακα ελέγχου."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Ένα λάθος στην επεξεργασία η σύνδεσή σας. Παρακαλώ δοκιμάστε ξανά."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Θα πρέπει να επιτρέψει την πρόσβαση για να προχωρήσετε. Παρακαλώ δοκιμάστε ξανά."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Σφάλμα από server: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Δεν είναι δυνατή η πρόσβαση του χρήστη πίνακα ελέγχου μέχρι το site σας έχει εγκριθεί. Θα λάβετε ένα μήνυμα ηλεκτρονικού ταχυδρομείου όταν ο δικτυακός τόπος είναι εγκεκριμένο."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Εγκρίνει νέα μέλη"; // 5.0
$LNG['a_approve'] = "Εγκρίνετε"; // 4.0
$LNG['a_approve_none'] = "Δεν υπάρχουν μέλη περιμένουν να εγκριθεί."; // 4.0
$LNG['a_approve_done'] = "Το μέλος έχει εγκριθεί."; // 4.0
$LNG['a_approve_dones'] = "Τα μέλη έχουν εγκριθεί."; // 4.0
$LNG['a_approve_sel'] = "Με επιλεγμένες:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Εγκρίνετε τα επεξεργασθε'ντα μέλη"; // 5.2.0
$LNG['a_approve_edited_none'] = "Δεν υπάρχουν αλλαγές περιμένει να εγκριθεί."; // 5.2.0
$LNG['a_approve_edited_old'] = "Προηγούμενη τίτλου και URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Επεξεργασθείς τίτλος και URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Απόρριψη"; // 5.2.0
$LNG['a_approve_edited_done'] = "Οι αλλαγές που έχει εγκριθεί."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Οι αλλαγές που έχει απορριφθεί."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Εγκρίνει νέα σχόλια"; // 5.0
$LNG['a_approve_rev_none'] = "Δεν υπάρχουν σχόλια περιμένουν να εγκριθεί."; // 5.0
$LNG['a_approve_rev_done'] = "Η αναθεώρηση έχει εγκριθεί."; // 5.0
$LNG['a_approve_rev_dones'] = "Τα σχόλια έχουν εγκριθεί."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Εφεδρική βάση δεδομένων"; // 5.2.0
$LNG['a_backup_warn'] = "Αυτό θα δημιουργήσει ένα αντίγραφο ασφαλείας από τα μέλη σας, στατιστικά, καθώς και ρυθμίσεις. Αν έχετε πολλά μέλη, μπορεί να πάρει πολύ χρόνο και μπορεί να δημιουργήσει ένα μεγάλο αρχείο."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Δημιουργία προσαρμοσμένης σελίδα"; // 5.1.0
$LNG['a_create_page_id'] = "Σελίδα ID - Αυτό θα πρέπει να χρησιμοποιείται στο URL, έτσι ώστε να μπορεί να περιέχει μόνο γράμματα, αριθμοί, υπογράμμιση και παύλες"; // 5.1.0
$LNG['a_create_page_error_id'] = "Η σελίδα ID μπορεί να περιέχει μόνο γράμματα, αριθμοί, υπογράμμιση και παύλες. Παρακαλείσθε να επιστρέψετε και να διορθώσετε τη σελίδα ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Υπάρχει ήδη μια προσαρμοσμένη σελίδα με τη σελίδα αυτή ID. Παρακαλείσθε να επιστρέψετε και να επιλέξετε μια νέα σελίδα ID."; // 5.1.0
$LNG['a_create_page_created'] = "Η σελίδα αυτή έχει δημιουργηθεί. Θα έχετε να προσθέσετε μια σύνδεση με %s in wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Διαγράψτε το μέλος"; // 5.0
$LNG['a_del_headers'] = "Διαγράψτε τα μέλη"; // 5.0
$LNG['a_del_done'] = "Το μέλος έχει διαγραφεί."; // 5.0
$LNG['a_del_dones'] = "Τα μέλη έχουν διαγραφεί."; // 5.0
$LNG['a_del_warn'] = "Είστε βέβαιοι εσείς θέλετε να διαγράψετε %s?"; // 5.0
$LNG['a_del_multi'] = "αυτοί %s μέλη"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Διαγράψτε τη φιλτραρισμένη Λέξη"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Διαγράψτε τις φιλτραρισμένες λέξεις"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Η φιλτραρισμένη λέξη έχει διαγραφεί."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Οι φιλτραρισμένες λέξεις έχουν διαγραφεί."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Είστε βέβαιοι εσείς θέλετε να διαγράψετε %s από το φιλτραρισμένο κατάλογο λέξεων?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "αυτοί %s λέξεις"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Άκυρη φιλτραρισμένη ταυτότητα λέξης. Παρακαλώ προσπαθήστε πάλι."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Διαγραφή μαύρη λίστα εισόδου"; // 5.2.0
$LNG['a_del_ban_headers'] = "Διαγραφή μαύρη λίστα καταχωρήσεων"; // 5.2.0
$LNG['a_del_ban_done'] = "Η μαύρη λίστα εισόδου έχει διαγραφεί."; // 5.2.0
$LNG['a_del_ban_dones'] = "Η μαύρη λίστα εγγραφές έχουν διαγραφεί."; // 5.2.0
$LNG['a_del_ban_warn'] = "Είστε σίγουροι ότι θέλετε να διαγράψετε %s από τη μαύρη λίστα?"; //5.2.0
$LNG['a_del_ban_multi'] = "εκείνα %s εγγραφές"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Άκυρα μαύρη λίστα ID. Παρακαλώ δοκιμάστε ξανά."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Διαγραφή προσαρμοσμένης σελίδα"; // 5.1.0
$LNG['a_del_page_headers'] = "Διαγραφή προσαρμοσμένης σελίδες"; // 5.1.0
$LNG['a_del_page_done'] = "Η προσαρμοσμένη σελίδα έχει διαγραφεί."; // 5.1.0
$LNG['a_del_page_dones'] = "Το έθιμο σελίδες που έχουν διαγραφεί."; // 5.1.0
$LNG['a_del_page_warn'] = "Είστε σίγουροι ότι θέλετε να διαγράψετε %s?"; //5.1.0
$LNG['a_del_page_multi'] = "αυτοί %s σελίδες"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Άκυρα προσαρμοσμένη σελίδα ID. Παρακαλώ δοκιμάστε ξανά."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Διαγραφή αναθεώρηση"; // 5.0
$LNG['a_del_rev_headers'] = "Διαγραφή Κριτικές"; // 5.0
$LNG['a_del_rev_done'] = "Η αναθεώρηση έχει διαγραφεί."; // 5.0
$LNG['a_del_rev_dones'] = "Τα σχόλια έχουν διαγραφεί."; // 5.0
$LNG['a_del_rev_warn'] = "Είστε σίγουροι ότι θέλετε να διαγράψετε αυτή την αναθεώρηση?"; //5.0
$LNG['a_del_rev_warns'] = "Είστε σίγουροι ότι θέλετε να διαγράψετε αυτά τα σχόλια?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Άκυρα αναθεώρηση ID. Παρακαλώ δοκιμάστε ξανά."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Επεξεργασία των κρατών"; // 5.0
$LNG['a_edit_site_is'] = "Το site αυτό είναι"; // 4.0
$LNG['a_edit_active'] = "Ενεργός (απαριθμημένος)"; // 4.0
$LNG['a_edit_inactive'] = "Ανενεργός (μην απαριθμημένος)"; // 5.0
$LNG['a_edit_edited'] = "Το μέλος έχει εκδοθεί.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Επεξεργασία φιλτράρεται λέξη"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Το φιλτραρισμένο λέξη έχει διαγραφεί."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "πεξεργασία μαύρη λίστα εισόδου"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Η μαύρη λίστα εισόδου έχει υποστεί επεξεργασία."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Επεξεργασία προσαρμοσμένη σελίδα"; // 5.1.0
$LNG['a_edit_page_content'] = "Περιεχόμενο - Μπορείτε να χρησιμοποιήσετε HTML εδώ"; // 5.1.0
$LNG['a_edit_page_edited'] = "Η σελίδα αυτή έχει επεξεργαστεί."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Εκδώστε την αναθεώρηση"; // 5.0
$LNG['a_edit_rev_edited'] = "Η αναθεώρηση έχει εκδοθεί.";

// Admin > Email Members
$LNG['a_email_header'] = "Μέλη ηλεκτρονικού ταχυδρομείου"; // 5.0
$LNG['a_email_subject'] = "Θέμα"; // 4.2.0
$LNG['a_email_message'] = "Μήνυμα"; // 4.2.0
$LNG['a_email_msg_sent'] = "Ένα ηλεκτρονικό ταχυδρομείο έχει σταλεί %s"; // 5.0
$LNG['a_email_not_sent'] = "Ένα μήνυμα δεν θα μπορούσε να σταλούν στην %s"; // 5.0
$LNG['a_email_sent'] = "%s τα μέλη στάλθηκαν μήνυμα με το ηλεκτρονικό ταχυδρομείο."; // 4.2.0
$LNG['a_email_failed'] = "%s τα μέλη δεν στάλθηκαν μήνυμα με το ηλεκτρονικό ταχυδρομείο."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Έχετε τώρα αποσυνδεθεί από το admin."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Καλώς ήλθατε στον admin. Χρησιμοποιήστε τους συνδέσμους στα αριστερά για να διοικήσουν την topsites λίστα."; // 5.0
$LNG['a_main_approve'] = "Υπάρχει 1 site περιμένει να εγκριθεί."; // 5.0
$LNG['a_main_approves'] = "Tεδώ είναι %s τοποθεσίες περιμένουν να εγκριθεί."; // 5.0
$LNG['a_main_approve_edit'] = "Υπάρχει 1 site επεξεργαστείτε περιμένει να εγκριθεί."; // 5.2.0
$LNG['a_main_approve_edits'] = "Υπάρχουν %s site περιμένουν αλλαγές που θα πρέπει να εγκριθεί."; // 5.2.0
$LNG['a_main_approve_rev'] = "Υπάρχει 1 κριτική περιμένει να εγκριθεί."; // 5.0
$LNG['a_main_approve_revs'] = "Υπάρχουν %s σχόλια περιμένουν να εγκριθεί."; // 5.0
$LNG['a_main_your'] = "Η έκδοση"; // 5.0
$LNG['a_main_latest'] = "Τελική έκδοση"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Διαχείριση Μελών"; // 5.0
$LNG['a_man_actions'] = "Ενέργειες"; // 4.2.0
$LNG['a_man_edit'] = "Επεξεργασία"; // 4.2.0
$LNG['a_man_delete'] = "Διαγράφω"; // 4.2.0
$LNG['a_man_email'] = "Ηλεκτρονικό ταχυδρομείο"; // 4.2.0
$LNG['a_man_all'] = "Επιλογή Όλων"; // 5.0
$LNG['a_man_none'] = "πιλέξτε Δεν υφίσταται"; // 5.0
$LNG['a_man_del_sel'] = "Διαγράψτε επιλεγμένος"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Αισχρολογία Φίλτρο"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Πληκτρολογήστε μια λέξη και την αντικατάστασή του στη συνέχεια. Για παράδειγμα, μπορείτε να εισάγετε \"hell\" στο πεδίο και τη λέξη \"h***\" στον τομέα της αντικατάστασης."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Η συγκεκριμένη αναζήτηση θα αντιστοιχεί μόνο την ακριβή λέξη. Global αντιστοίχιση θα ταιριάζει με τίποτα που περιέχουν τη λέξη. Έτσι, η κάλυψη των παγκόσμιων \"hell\" Θα ταιριάζει \"shell\" and \"hello\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Λέξη"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Αντικατάσταση"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Ταίριασμα"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Εξαναγκάστε"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Σφαιρικός"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Φίλτρο Λέξη"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" έχει προστεθεί με την αισχρολογία φίλτρου."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Μαύρη λίστα"; // 5.2.0
$LNG['a_man_ban_instructions'] = "To απαγόρευση χώρων και των χρηστών από topsites λίστα σας, συμπληρώστε την παρακάτω φόρμα. Όταν ένα μέλος ενώνει, η διεύθυνση, ηλεκτρονική διεύθυνση, όνομα χρήστη, διεύθυνση IP και να ελέγχονται. Στην περίπτωση που ένα site είναι η επεξεργασία, η διεύθυνση και τη διεύθυνση ηλεκτρονικού ταχυδρομείου ελέγχονται.<br /><br />Η μαύρη λίστα δεν θα επηρεάσει τα υπάρχοντα μέλη."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "συγκεκριμένη αναζήτηση θα αντιστοιχεί μόνο το ακριβές string. Global αντιστοίχιση θα ταιριάξει με οτιδήποτε περιέχει το string. Έτσι, η κάλυψη των παγκόσμιων http://www.yahoo.com/ θα ταιριάζουν με κάθε σελίδα http://www.yahoo.com/ στη διεύθυνση URL, ενώ η ακριβής αντιστοίχιση των http://www.yahoo.com/ μόνο που θα ταιριάζουν ακριβώς URL."; // 5.2.0
$LNG['a_man_ban_string'] = "String"; // 5.2.0
$LNG['a_man_ban_field'] = "Πεδίο"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" έχει προστεθεί στη μαύρη λίστα."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Διαχειριστείτε τις σελίδες συνήθειας"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Διαχείριση Κριτικές"; // 5.0
$LNG['a_man_rev_enter'] = "Για τη διαχείριση των σχόλια ενός site, εισάγετε το όνομα του μέλους της κάτω."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Κριτική"; // 5.0
$LNG['a_man_rev_date'] = "Ημερομηνία"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Μενού";
$LNG['a_menu_main'] = "Κύριος"; // 5.0
$LNG['a_menu_approve'] = "Εγκρίνετε τα νέα μέλη";
$LNG['a_menu_approve_edits'] = "Εγκρίνετε τα επεξεργασθε'ντα μέλη"; // 5.2.0
$LNG['a_menu_manage'] = "Διαχείριση μελών"; // 4.2.0
$LNG['a_menu_settings'] = "Αλλαγή Ρυθμίσεων"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Αισχρολογία Φίλτρο"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Μαύρη λίστα"; // 5.2.0
$LNG['a_menu_backup'] = "Αντίγραφο ασφαλείας της βάσης δεδομένων"; // 5.2.0
$LNG['a_menu_skins'] = "Skins Κατηγορίες και"; // 5.0
$LNG['a_menu_approve_reviews'] = "Εγκρίνει νέα σχόλια"; // 5.0
$LNG['a_menu_manage_reviews'] = "Διαχείριση Κριτικές"; // 5.0
$LNG['a_menu_email'] = "Μέλη ηλεκτρονικού ταχυδρομείου";
$LNG['a_menu_delete_review'] = "Διαγράψτε την αναθεώρηση";
$LNG['a_menu_logout'] = "Αποσύνδεση";
$LNG['a_menu_delete'] = "Διαγράψτε το μέλος";
$LNG['a_menu_edit'] = "Εκδώστε το μέλος";
$LNG['a_menu_create_page'] = "Δημιουργήστε τη σελίδα συνήθειας"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Διαχειριστείτε τις σελίδες συνήθειας"; // 5.1.0
$LNG['a_header_members'] = "Μέλη"; // 5.0
$LNG['a_header_settings'] = "Τοποθετήσεις"; // 5.0
$LNG['a_header_tools'] = "Εργαλεία"; // 5.2.0
$LNG['a_header_reviews'] = "Αναθεωρήσεις"; // 5.0
$LNG['a_header_pages'] = "Σελίδες συνήθειας"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Αλλαγή Ρυθμίσεων";
$LNG['a_s_help'] = "Βοήθεια"; // 5.1.0

$LNG['a_s_general'] = "Γενικές Ρυθμίσεις";
$LNG['a_s_admin_password'] = "Κωδικός πρόσβασης Admin";
$LNG['a_s_list_name'] = "Το όνομα του καταλόγου topsites σας";
$LNG['a_s_list_url'] = "URL στον κατάλογο topsites";
$LNG['a_s_default_language'] = "Γλώσσα προεπιλογής";
$LNG['a_s_your_email'] = "Η διεύθυνση ηλεκτρονικού ταχυδρομείου σας";

$LNG['a_s_sql'] = "SQL Τοποθετήσεις";
$LNG['a_s_sql_type'] = "Database Type"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Βάση δεδομένων";
$LNG['a_s_sql_username'] = "Όνομα χρήστη";
$LNG['a_s_sql_password'] = "Κωδικός πρόσβασης";

$LNG['a_s_ranking'] = "Κατάταξη Ρυθμίσεις";
$LNG['a_s_num_list'] = "Αριθμό μελών στη λίστα ανά σελίδα"; // 5.0
$LNG['a_s_ranking_period'] = "Κατάταξη περίοδο"; // 5.0
$LNG['a_s_ranking_method'] = "Κατάταξη μέθοδος"; // 5.0
$LNG['a_s_ranking_average'] = "Κατάταξη κατά μέσο ή κατά μόλις %s"; // 5.0
$LNG['a_s_featured_member'] = 'Προτεινόμενοι μέλος - Έχετε να προσθέσετε {$featured_member}στο wrapper.html μετά την ενεργοποίηση αυτής της στις.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Αριθμός μελών για να χρησιμοποιήσει το _top skin για";
$LNG['a_s_ad_breaks'] = "Προβολή διαφημίσεων μετά από αυτές τις τάξεις (χωριστή με κόμματα) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Συμπληρώστε κενές γραμμές με ένα μήνυμα που λέει \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Τοποθετήσεις μελών";
$LNG['a_s_active_default'] = "Απαιτούν τα νέα μέλη που θα πρέπει να εγκριθεί πριν από την καταχώρησή τους";
$LNG['a_s_active_default_review'] = "Απαίτηση για νέα σχόλια να εγκριθούν πριν από την καταχώρησή τους";
$LNG['a_s_delete_after'] = "Διαγραφή ανενεργών μελών μετά από αυτή πολλών ημερών (οριστεί σε 0 για να απενεργοποιήσετε)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Admin ηλεκτρονικού ταχυδρομείου όταν ενώνει ένα νέο μέλος"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Admin ηλεκτρονικού ταχυδρομείου όταν ταχυδρομείται μια νέα αναθεώρηση"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Μέλος του banner μέγιστο πλάτος (οριστεί σε 0 για να απενεργοποιήσετε)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Μέλος του banner μέγιστο ύψος (οριστεί σε 0 για να απενεργοποιήσετε)"; // 4.2.0
$LNG['a_s_default_banner'] = "Προεπιλεγμένη πανό για τα μέλη που δεν παρέχουν μια";

$LNG['a_s_button'] = "Κουμπί Ρυθμίσεις";
$LNG['a_s_ranks_on_buttons'] = "Οι βαθμοί στα κουμπιά -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Κουμπιά STAT"; // 4.2.0
$LNG['a_s_button_url'] = "Εάν Ναι / Οχι - URL στο προεπιλεγμένο κουμπί που θέλετε να εμφανίζονται στην μελών τόπων"; // 4.0
$LNG['a_s_button_dir'] = "Αν Ναι - URL στον κατάλογο των κουμπιών είναι"; // 4.0
$LNG['a_s_button_ext'] = "Αν Ναι - Επέκταση του κουμπιά (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Αν Ναι - Αριθμός κουμπιών που έχετε κάνει"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-φιλικές συνδέσεις - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Η δικτυακή πύλη της σελίδας για να αποτρέψει την εξαπάτηση για χτυπήματα μέσα";
$LNG['a_s_captcha'] = "Η επαλήθευση λέξης ενώνει επάνω για να εμποδίσει τα spammers - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Ασφάλεια ερώτηση και απάντηση να μπλοκάρει spammers (αφήστε κενό για να απενεργοποιήσετε) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Άλλες Ρυθμίσεις";
$LNG['a_s_search'] = "Αναζήτηση";
$LNG['a_s_time_offset'] = "Ώρα αντισταθμίζεται από το διακομιστή σας (σε ώρες)";

$LNG['a_s_on'] = "Σε λειτουργία";
$LNG['a_s_off'] = "Εκτός χρήσης";
$LNG['a_s_days'] = "Ημέρες";
$LNG['a_s_months'] = "Μήνες";
$LNG['a_s_weeks'] = "Εβδομάδες"; // 4.2.0
$LNG['a_s_yes'] = "Ναι";
$LNG['a_s_no'] = "Όχι";
$LNG['a_s_answer'] = "Απάντηση"; // 5.2.0

$LNG['a_s_updated'] = "Οι ρυθμίσεις σας έχουν ενημερωθεί.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Skins Κατηγορίες και"; // 5.0
$LNG['a_skins_default'] = "Προεπιλογή Skin"; // 5.0
$LNG['a_skins_set_default'] = "Καθορισμένη προεπιλογή Skin"; // 5.0
$LNG['a_skins_anon'] = "Ανώνυμος"; // 5.0
$LNG['a_skins_default_done'] = "Η προεπιλογή του Skin έχει οριστεί."; // 5.0
$LNG['a_skins_categories_done'] = "Η κατηγορία των Skin που έχουν."; // 5.0
$LNG['a_skins_new_category_done'] = "Η νέα κατηγορία έχει δημιουργηθεί."; // 5.0
$LNG['a_skins_delete_done'] = "Η κατηγορία έχει διαγραφεί."; // 5.0
$LNG['a_skins_delete_error'] = "Η κατηγορία δεν μπορεί να διαγραφεί, επειδή θα πρέπει να έχετε τουλάχιστον μία κατηγορία."; // 5.1.0
$LNG['a_skins_edit_done'] = "Η κατηγορία που έχει υποστεί επεξεργασία."; // 5.0
$LNG['a_skins_invalid_skin'] = "Άκυρα skin: %s.  Παρακαλώ δοκιμάστε ξανά."; // 5.0
$LNG['a_skins_categories'] = "Κατηγορίες"; // 5.0
$LNG['a_skins_new_category'] = "Δημιουργία νέας κατηγορίας"; // 5.0
$LNG['a_skins_set_skins'] = "Ορισμός Κατηγορία Skins"; // 5.0
$LNG['a_skins_edit_category'] = "Επεξεργασία κατηγορίας"; // 5.0
$LNG['a_skins_category_name'] = "Όνομα Κατηγορίας"; // 5.0
$LNG['a_skins_diff_skins'] = "Αν θέλετε διαφορετικά skins για διαφορετικές κατηγορίες, επιλέξτε τους παρακάτω."; // 5.0
?>
