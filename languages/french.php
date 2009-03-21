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
$translation = 'French (Francais)';
$translator_name = 'Kamisama';
$translator_email = 'kamisama@thegreatspirit.net';
$translator_url = 'http://kamidesign.thegreatspirit.net/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "Aller";
$LNG['g_username'] = "Nom d'utilisateur";
$LNG['g_url'] = "Lien";
$LNG['g_title'] = "Titre";
$LNG['g_description'] = "Description";
$LNG['g_category'] = "Catégorie"; // 4.1.0
$LNG['g_email'] = "E-mail";
$LNG['g_banner_url'] = "Lien de votre Bannière";
$LNG['g_password'] = "Mot de Passe";
$LNG['g_average'] = "Moyenne";
$LNG['g_today'] = "Aujourd'hui";
$LNG['g_yesterday'] = "Hier";
$LNG['g_daily'] = "par Jour"; // 5.0
$LNG['g_this_month'] = "Ce Mois"; // 5.0
$LNG['g_last_month'] = "Le mois dernier"; // 5.0
$LNG['g_monthly'] = "Par Mois"; // 5.0
$LNG['g_this_week'] = "Cette semaine"; // 5.0
$LNG['g_last_week'] = "La semaine dernière"; // 5.0
$LNG['g_weekly'] = "Par Semaine"; // 5.0
$LNG['g_pv'] = 'Tout'; // 5.0
$LNG['g_overall'] = 'Globalement'; // 5.0
$LNG['g_in'] = 'Entrée'; // 5.0
$LNG['g_out'] = 'Sortie'; // 5.0
$LNG['g_unq_pv'] = "Unique PVs"; // 5.0
$LNG['g_tot_pv'] = "Total PVs"; // 5.0
$LNG['g_unq_in'] = "Unique Entrée"; // 5.0
$LNG['g_tot_in'] = "Total Entrée"; // 5.0
$LNG['g_unq_out'] = "Unique Sortie"; // 5.0
$LNG['g_tot_out'] = "Total Sortie"; // 5.0
$LNG['g_invalid_u_or_p'] = "Nom d'utilisateur ou mot de passe invalide. Veuillez recommencez."; // 5.0
$LNG['g_invalid_u'] = "Nom d'utilisateur invalide. Veuillez recommencez."; // 5.0
$LNG['g_invalid_p'] = "Mot de Passe invalide. Veuillez recommencez."; // 5.0
$LNG['g_session_expired'] = "Votre session a expiré. Veuillez vous reconnecter."; // 5.0
$LNG['g_error'] = "Erreur"; // 5.0
$LNG['g_delete_install'] = "Pour des raisons de securité, veuillez supprimer le dossier INSTALL avant de lancer le script."; // 5.0
$LNG['g_ip'] = "Adresse IP"; // 5.2.0

// Editer Compte
$LNG['edit_header'] = "Editer votre Compte";
$LNG['edit_info_edited'] = "Votre compte a été correctement édité.";
$LNG['edit_password_blank'] = "Laissez ce champ vide pour garder le mot de passe actuel."; // 4.0
$LNG['edit_delay'] = "Le changement du titre et du lien de votre site requiert la validation de l'administrateur."; // 5.2.0

// Page Piège 
$LNG['gateway_header'] = "Page Piège du topsites";
$LNG['gateway_text'] = "Pour éviter les fraudes, une page piège a été mise en place. Cliquez sur le lien ci-dessous pour entrer dans le Topsites.";
$LNG['gateway_vote'] = "Entrer et Voter";
$LNG['gateway_no_vote'] = "Entrer sans Voter"; // 5.0

// Installation
$LNG['install_header'] = "Installer";
$LNG['install_welcome'] = "Bienvenue sur Aardvark Topsites PHP5. Complétez le formulaire ci-dessous afin d'installer le script.";
$LNG['install_sql_prefix'] = "Préfixe des tables - A ne modifier que si vous utilisez plusieurs topsites sur la même base de donnes.";
$LNG['install_error_chmod'] = "Impossible d'écrire dans settings_sql.php.  Assurez vous d'avoir définie le CHMOD 666 sur le fichier settings_sql.php.";
$LNG['install_error_sql'] = "Impossible de se connecter à la Base de Données SQL.  Retournez à la page précédente pour rectifier vos paramètres de connexion SQL.";
$LNG['install_done'] = "Votre topsites a été correctement installé.  Supprimez à présent ce dossier.";
$LNG['install_your'] = "Votre TopSites";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manuel";
$LNG['upgrade_header'] = "Mettre à jour";
$LNG['upgrade_welcome'] = "Bienvenue sur Aardvark Topsites PHP 5.  Avant d'effectuer la mise à jour, penser à effectuer une sauvegarde de vos données.";
$LNG['upgrade_error_version'] = "La mise à jour est uniquement supportée par Aardvark Topsites PHP 4.1.0 ou plus.";
$LNG['upgrade_done'] = "Votre Topsites a été mis à jour. Veuillez à présent supprimer ce dossier.";
$LNG['upgrade_version'] = "Veuillez vous assurer que vous mettez à jour depuis la version %s."; // 5.1.0
$LNG['install_mailing_list'] = "Si vous désirez vous inscrire à la newsletter d'Aardvark Topsites PHP, saisissez votre adresse e-mail dans le champ ci-dessous. Vous recevrez des annonces concernant le script, tel que les nouvelles versions, les mises à jour et les patch de securité."; // 5.2.0

// Inscription
$LNG['join_header'] = "S'inscrire";
$LNG['join_enter_text'] = "Saisissez le texte figurant sur l'image ci-dessous:"; // 4.2.2
$LNG['join_enter_text_read'] = "Besoin d'aide?"; // 5.2.0
$LNG['join_user'] = "Utilisateur"; // 5.0
$LNG['join_website'] = "Site"; // 5.0
$LNG['join_banner_size'] = "(Taille maximum: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "de saisir un nom d'utilisateur valide: seuls sont acceptés les lettres, les chiffres, - et _."; // 5.0
$LNG['join_error_username_duplicate'] = "de saisir un nom d'utilisateur valide: le nom que vous avez choisi est déjà pris."; // 5.0
$LNG['join_error_url'] = "de saisir un lien valide.";
$LNG['join_error_email'] = "de saisir une adresse e-mail valide.";
$LNG['join_error_title'] = "de saisir le nom de votre site.";
$LNG['join_error_password'] = "de saisir un mot de passe.";
$LNG['join_error_confirm_password'] = "Les mots de passe ne correspondent pas."; // 5.2.0
$LNG['join_error_urlbanner'] = "Entrer une bannière valide.  Laissez le champ vide si vous n'en avez pas."; // 5.2.0
$LNG['join_error_time'] = "Ne pas rafraichir la page de confirmation."; // 4.2.0
$LNG['join_error_captcha'] = "Le mot que vous avez saisis ne correspond pas à celle de l'image."; // 4.2.2
$LNG['join_error_question'] = "Votre réponse est incorrecte.  Veuillez les corriger afin de confirmer que vous êtes bien une personne et non un robot."; // 5.2.0
$LNG['join_thanks'] = "Merci de vous être inscrit ! Collez ce code sur votre site pour être classé.";
$LNG['join_change_warning'] = "Si vous modifiez le code, il se peut qu'il ne fonctionne plus.";
$LNG['join_welcome'] = "Bienvenue dans %s";
$LNG['join_welcome_admin'] = "Un nouveau membre a joint votre topsites.";
$LNG['join_approve'] = "Merci de vous etre inscrit!  Votre site sera affiché lorsque l'administrateur du topsites l'aura approuvé. Vous recevrez un e-mail avec plus d'informations lorsque votre site sera approuvé."; // 5.2.0
$LNG['join_type'] = "Type de compte"; // 5.1.0
$LNG['join_standard'] = "Standard"; // 5.1.0
$LNG['join_error_top'] = "Une erreur a été detectée dans votre soumission. Veuillez corriger les erreurs ci-dessous."; // 5.2.0
$LNG['join_ban_top'] = "Votre soumission contient des éléments interdits par l'administrateur du topsites."; // 5.2.0
$LNG['join_security'] = "Securité"; // 5.2.0
$LNG['join_confirm_password'] = "Confirmez le mot de passe"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Code du Bouton"; // 5.0

// mot de Passe Perdu
$LNG['lost_pw_header'] = "Mot de passe perdu"; // 5.0
$LNG['lost_pw_forgot'] = "Mot de passe oublié ?"; // 5.0
$LNG['lost_pw_get'] = "Obtenir le mot de passe"; // 5.0
$LNG['lost_pw_emailed'] = "Des instructions vous ont été envoyé par e-mail."; // 5.0
$LNG['lost_pw_email'] = "Pour obtenir un nouveau mot de passe, cliquez sur ce lien:"; // 5.0
$LNG['lost_pw_new'] = "Entrer un nouveau mot de passe"; // 5.0
$LNG['lost_pw_set_new'] = "Définir un nouveau mot de passe"; // 5.0
$LNG['lost_pw_finish'] = "Votre mot de passe vient d'être remplacé par celui que vous venez de choisir."; // 5.0

// Accueil
$LNG['main_header'] = "Classement"; // 5.0
$LNG['main_all'] = "Tous les Sites"; // 4.2.0
$LNG['main_method'] = "Méthode de Classement";
$LNG['main_members'] = "Membres";
$LNG['main_menu_rankings'] = "Classement";
$LNG['main_menu_join'] = "S'inscrire";
$LNG['main_menu_random'] = "Membre aléatoire";
$LNG['main_menu_search'] = "Rechercher";
$LNG['main_menu_lost_code'] = "Code perdu"; // 5.0
$LNG['main_menu_lost_password'] = "Mot de Passe perdu"; // 5.0
$LNG['main_menu_edit'] = "Editer les info du membre";
$LNG['main_menu_user_cp'] = "Espace Membre"; // 5.0
$LNG['main_featured'] = "Membre Spécial"; // 4.0.2
$LNG['main_executiontime'] = "Temps d'exécution du script"; // 4.0
$LNG['main_queries'] = "Requêtes SQL"; // 4.0
$LNG['main_powered'] = "Propulsé par";

// Table de Classement
$LNG['table_stats'] = "Statistiques";
$LNG['table_unique'] = "Unique";
$LNG['table_total'] = "Total";
$LNG['table_rank'] = "Rang";
$LNG['table_title'] = "Titre"; // 4.0
$LNG['table_description'] = "Description"; // 4.0
$LNG['table_movement'] = "Mouvement";
$LNG['table_up'] = "Ascendant"; // 5.0
$LNG['table_down'] = "Descendant"; // 5.0
$LNG['table_neutral'] = "Neutre"; // 5.0
$LNG['table_your_site_here'] = "Votre site ici"; // 5.2.0

// Noter et Commenter
$LNG['rate_header'] = "Noter et Commenter";
$LNG['rate_message'] = "Veuillez entrer votre note et vos commentaires pour %s dans le formulaire ci-dessous."; // 5.2.0
$LNG['rate_rating'] = "Note";
$LNG['rate_review'] = "Commentaire - Le HTML est désactivé"; // 5.0
$LNG['rate_thanks'] = "Merci d'avoir voter.";
$LNG['rate_error'] = "Vous avez déjà noter ce site";
$LNG['rate_back'] = "Revenir aux Statistiques";
$LNG['rate_email_admin'] = "Un nouveau commentaire a été posté sur votre topsites."; // 5.1.0

// Rechercher
$LNG['search_header'] = "Rechercher";
$LNG['search_off'] = "La fonction de Recherche a été desactivé.";
$LNG['search_no_sites'] = "Désolé, mais aucun site ne correpond à vos critères de recherche."; // 5.0
$LNG['search_prev'] = "Précédent"; // 3.2.1
$LNG['search_next'] = "Suivant"; // 3.2.1
$LNG['search_displaying_results'] = "Affichage des résultats %s à %s sur %s pour <b>%s</b>."; // 5.1.0

// Statistiques
$LNG['stats_header'] = "Statistiques";
$LNG['stats_info'] = "Informations";
$LNG['stats_member_since'] = "Membre depuis"; // 5.0
$LNG['stats_rating_avg'] = "Moyenne de la note";
$LNG['stats_rating_num'] = "Nombre de votes";
$LNG['stats_rate'] = "Noter et Commenter ce site";
$LNG['stats_reviews'] = "Commentaires";
$LNG['stats_allreviews'] = "Afficher tous les commentaires"; // 4.0
$LNG['stats_week'] = "Semaine"; // 5.0
$LNG['stats_highest'] = "Maximum"; // 5.0
$LNG['stats_overall'] = "Statistiques moyennes"; // 5.2.0
$LNG['stats_overall_average'] = "Moyenne (10 derniers %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Total (Tous les temps)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s Nouveaux Membres"; // 5.0
$LNG['ssi_all'] = "Tous les Sites"; // 4.0

// Espace membre // 5.0
$LNG['user_cp_header'] = "Espace membre"; // 5.0
$LNG['user_cp_login'] = "Connexion"; // 5.0
$LNG['user_cp_logout'] = "Déconnexion"; // 5.0
$LNG['user_cp_welcome'] = "Bienvenue dans l'espace membre.  Utilisez les liens de gauche pour gérer votre compte."; // 5.0
$LNG['user_cp_logout_message'] = "Vous êtes à présent deconnecté(e) de l'espace membre."; // 5.0
$LNG['user_cp_login_long'] = "Connexion avec votre nom d'utilisateur et votre mot de passe ou votre OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "impossible de trouver le serveur OpenID pour %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Vous devez vous inscrire au topsites avant de pouvoir acceder au panneau d'administration."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Une erreur est survenue lors du processus de connexion. Veuillez recommencer."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Vous devez posseder les permissions pour continuer. Veuillez recommencer."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Erreur depuis le serveur: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Vous ne pouvez pas accéder au panneau d'administration tant que votre site n'aura pas été approuvé. Vous recevrez un e-mail lorsque votre site sera approuvé."; // 5.2.0

// Admin > Approuver Nouveaux Membres // 4.0
$LNG['a_approve_header'] = "Approuver les Nouveaux Membres"; // 5.0
$LNG['a_approve'] = "Approuver"; // 4.0
$LNG['a_approve_none'] = "Il n'y a aucun membre en attente d'être approuvé."; // 4.0
$LNG['a_approve_done'] = "Le membre a été approuvé."; // 4.0
$LNG['a_approve_dones'] = "Les membres ont été approuvés."; // 4.0
$LNG['a_approve_sel'] = "Séléction:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Approuver les changements des membres"; // 5.2.0
$LNG['a_approve_edited_none'] = "Il n'y a pas de changements en attente d'être approuvés."; // 5.2.0
$LNG['a_approve_edited_old'] = "Ancien Titre et Lien"; // 5.2.0
$LNG['a_approve_edited_new'] = "Nouveau Titre et Lien"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Rejeter"; // 5.2.0
$LNG['a_approve_edited_done'] = "Les modifications ont été approuvés."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Les modifications ont été rejetés."; // 5.2.0

// Admin > Approuver Nouveaux Commentaires // 5.0
$LNG['a_approve_rev_header'] = "Approuver les Nouveaux Commentaires"; // 5.0
$LNG['a_approve_rev_none'] = "Il n'y a aucun commentaires en attente d'être approuvé."; // 5.0
$LNG['a_approve_rev_done'] = "Le commentaire a été approuvé."; // 5.0
$LNG['a_approve_rev_dones'] = "Les commentaires ont été approuvés."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Sauvegarder la base de données"; // 5.2.0
$LNG['a_backup_warn'] = "Cela va créer une sauvegarde de vos membres, statistiques et préférences. Plus vous aurez de membres, plus l'opération prendra de temps, et le fichier généré, lourd."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Créer une page personnalisée"; // 5.1.0
$LNG['a_create_page_id'] = "ID de la page - Celui-ci sera utilisé dans le lien, et ne peut contenir que des lettres, nombres, tirets et sous-tirets"; // 5.1.0
$LNG['a_create_page_error_id'] = "l'ID de la page ne peut contenir que des lettres, nombres, tirets et sous-tirets. Veuillez retournez à la page précédente afin de corriger l'ID de la page."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Il existe déjà une page personnalisée utilisant cet ID. Veuillez retournez à la page précédente pour choisir un autre ID."; // 5.1.0
$LNG['a_create_page_created'] = "La page a été crée. Vous devrez rajouter manuellement un lien vers %s dans wrapper.html."; // 5.1.0

// Admin > Supprimer Membres
$LNG['a_del_header'] = "Supprimer un membre"; // 5.0
$LNG['a_del_headers'] = "Supprimer des membres"; // 5.0
$LNG['a_del_done'] = "Le membre a été supprimé."; // 5.0
$LNG['a_del_dones'] = "Les membres ont été supprimés."; // 5.0
$LNG['a_del_warn'] = "Etes-vous sur de vouloir supprimer %s?"; // 5.0
$LNG['a_del_multi'] = "ces %s membres"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Suppresion d'un mot censuré"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Suppression des mots censurés"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Le mot censuré a été supprimé."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Les mots censurés ont été supprimés."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Etes-vous sur de vouloir supprimer %s de la liste de censure ?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "ces %s mots"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "ID du mot censuré invalide.  Veuillez recommencer."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Supprimer la donnée de la liste noires"; // 5.2.0
$LNG['a_del_ban_headers'] = "Supprimer les données de la liste noire"; // 5.2.0
$LNG['a_del_ban_done'] = "La donnée de la liste noire a été supprimée."; // 5.2.0
$LNG['a_del_ban_dones'] = "Les données de la liste noire ont été supprimées."; // 5.2.0
$LNG['a_del_ban_warn'] = "Etes-vous sur de vouloir supprimer %s de la liste noire ?"; //5.2.0
$LNG['a_del_ban_multi'] = "ces %s données"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "ID de la liste noire invalide.  Veuillez recommencer."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Suppression de page personnalisée"; // 5.1.0
$LNG['a_del_page_headers'] = "Suppression de pages personnalisées"; // 5.1.0
$LNG['a_del_page_done'] = "La page personnalisée a été surpprimé."; // 5.1.0
$LNG['a_del_page_dones'] = "Les pages personnalisées ont été surpprimés."; // 5.1.0
$LNG['a_del_page_warn'] = "Etes-vous sur de vouloir supprimer %s?"; //5.1.0
$LNG['a_del_page_multi'] = "ces %s pages"; //5.1.0
$LNG['a_del_page_invalid_id'] = "ID de la page personnalisée invalide.  Veuillez recommencer."; // 5.1.0

// Admin > Supprimer Commentaires // 5.0
$LNG['a_del_rev_header'] = "Supprimer un commentaire"; // 5.0
$LNG['a_del_rev_headers'] = "Supprimer des Commentaires"; // 5.0
$LNG['a_del_rev_done'] = "Le commentaire a été supprimé."; // 5.0
$LNG['a_del_rev_dones'] = "Les commentaires ont été supprimés."; // 5.0
$LNG['a_del_rev_warn'] = "Etes-vous sur de vouloir supprimer ce commentaire ?"; //5.0
$LNG['a_del_rev_warns'] = "Etes-vous sur de vouloir supprimer ces commentaires ?"; //5.0
$LNG['a_del_rev_invalid_id'] = "ID du commentaire invalide.  Veuillez recommencer."; // 5.0

// Admin > Editer Membres
$LNG['a_edit_header'] = "Editer un Membre"; // 5.0
$LNG['a_edit_site_is'] = "Ce site est"; // 4.0
$LNG['a_edit_active'] = "Actif (Listé)"; // 4.0
$LNG['a_edit_inactive'] = "Inactif (Non Listé)"; // 5.0
$LNG['a_edit_edited'] = "Le membre a été correctement édité.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Editer les mots censurés"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Le mot censuré a été édité."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Editer les données de la liste noire"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Les données de la liste noire ont été editées."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Editer les pages personnalisées"; // 5.1.0
$LNG['a_edit_page_content'] = "Contenu - Vous pouvez utiliser du HTML ici"; // 5.1.0
$LNG['a_edit_page_edited'] = "La page a été éditée."; // 5.1.0

// Admin > Editer Commentaires // 5.0
$LNG['a_edit_rev_header'] = "Editer un commentaire"; // 5.0
$LNG['a_edit_rev_edited'] = "Le commentaire a été édité.";

// Admin > Mailer Membres
$LNG['a_email_header'] = "Envoyer un e-mail aux membres"; // 5.0
$LNG['a_email_subject'] = "Sujet"; // 4.2.0
$LNG['a_email_message'] = "Message"; // 4.2.0
$LNG['a_email_msg_sent'] = "Un e-mail a été envoyé à %s"; // 5.0
$LNG['a_email_not_sent'] = "Un e-mail n'a pas pu etre envoyé à %s"; // 5.0
$LNG['a_email_sent'] = "L'e-mail a été envoyé à %s membres."; // 4.2.0
$LNG['a_email_failed'] = "l'e-mail n'a pas pu etre envoyé à %s membres."; // 4.2.0

// Admin > Deconnxeion
$LNG['a_logout_message'] = "Vous êtes à présent deconnecté du panneau d'administration"; // 5.0

// Admin > Accueil
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Bienvenue dans le panneau d'Administration. Utilisez les liens de gauche pour gérer votre topsites."; // 5.0
$LNG['a_main_approve'] = "Il y a 1 site attendant d'être approuvé."; // 5.0
$LNG['a_main_approves'] = "Il y a %s sites attendant d'être approuvés."; // 5.0
$LNG['a_main_approve_edit'] = "Il y a 1 site dont les changements sont en attente d'être approuvés."; // 5.2.0
$LNG['a_main_approve_edits'] = "Il y a %s sites dont les changements sont en attente d'être approuvés."; // 5.2.0
$LNG['a_main_approve_rev'] = "Il y a 1 commentaire attendant d'être approuvé."; // 5.0
$LNG['a_main_approve_revs'] = "Il y a %s commentaires attendant d'être approuvés."; // 5.0
$LNG['a_main_your'] = "Votre version"; // 5.0
$LNG['a_main_latest'] = "Dernière version"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Gerer Membres
$LNG['a_man_header'] = "Gestion des Membres"; // 5.0
$LNG['a_man_actions'] = "Actions"; // 4.2.0
$LNG['a_man_edit'] = "Editer"; // 4.2.0
$LNG['a_man_delete'] = "Supprimer"; // 4.2.0
$LNG['a_man_email'] = "Mailer"; // 4.2.0
$LNG['a_man_all'] = "Tout sélectionner"; // 5.0
$LNG['a_man_none'] = "Ne rien sélectionner"; // 5.0
$LNG['a_man_del_sel'] = "Supprimer la sélection"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Censure des mots"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Entrer le mot et celui qui va le remplacer ci-dessous. Par exemple, vous pouvez entrer \"con\" dans le champ 'mot', et \"imbécile\" dans le champ du 'mot à remplacer'."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "La comparaison précise remplacera uniquement le mot exact.  La comparaison globale remplacera n'importe quel mot contenant ce mot.  Par exemple, la comparaison globale du mot \"con\" remplacera egalement les mots \"connard\" mais aussi \"concombre\" !"; // 5.1.0
$LNG['a_man_bad_words_word'] = "Mot"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "A remplacer par"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Comparaison"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Précise"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globale"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Censurer le mot"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" a été ajouté dans la liste des mots censurés."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Liste noire"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Pour bannir quelqu'un de votre Topsites, remplissez le formulaire ci-dessous. Lorsqu'un membre s'inscrit, le lien, l'adresse e-mail, le nom d'utilisateur ainsi que son adresse IP seront verifiés. Lorsqu'un site est modifié, le lien et l'adresse e-mail seront verifiés.<br /><br />La liste noire n'affectera pas les utilisateur déjà existant."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "La comparaison précise comparera uniquement la chaîne de caractère exacte en entière.  La comparaison globale comparera n'importe quel mot contenant la chaîne de caractère desirée. Ainsi, la comparaison globale de http://www.yahoo.com/ trouvera n'importe quelle page contenant http://www.yahoo.com/ dans son lien, tandis que la comparaison précise de http://www.yahoo.com/ ne trouvera uniquement que cette page précise."; // 5.1.0
$LNG['a_man_ban_string'] = "Chaîne"; // 5.2.0
$LNG['a_man_ban_field'] = "Champ"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" a été ajouté à la liste noire."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Gestions des pages personnalisées"; // 5.1.0

// Admin > Gerer Commentaires // 5.0
$LNG['a_man_rev_header'] = "Gérer les Commentaires"; // 5.0
$LNG['a_man_rev_enter'] = "Pour gérer les commentaires d'un site, saisissez son nom d'utilisateur correspondant ci-dessous."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Commentaire"; // 5.0
$LNG['a_man_rev_date'] = "Date"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Accueil"; // 5.0
$LNG['a_menu_approve'] = "Approuver les Nouveaux Membres";
$LNG['a_menu_approve_edits'] = "Approuver les Changements des Membres"; // 5.2.0
$LNG['a_menu_manage'] = "Gestion des Membres"; // 4.2.0
$LNG['a_menu_settings'] = "Changer les Paramètres"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Censure des mots"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Liste Noire"; // 5.2.0
$LNG['a_menu_backup'] = "Sauvegarder la Base de Données"; // 5.2.0
$LNG['a_menu_skins'] = "Skins et Catégories"; // 5.0
$LNG['a_menu_approve_reviews'] = "Approuver Nouveaux Commentaires"; // 5.0
$LNG['a_menu_manage_reviews'] = "Gestion des Commentaires"; // 5.0
$LNG['a_menu_email'] = "Envoyer un e-mail";
$LNG['a_menu_delete_review'] = "Supprimer des Commentaires";
$LNG['a_menu_logout'] = "Déconnexion";
$LNG['a_menu_delete'] = "Supprimer des membres";
$LNG['a_menu_edit'] = "Editer des membres";
$LNG['a_menu_create_page'] = "Créer une page personnalisée"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Gestion des pages personnalisées"; // 5.1.0
$LNG['a_header_members'] = "Membres"; // 5.0
$LNG['a_header_settings'] = "Paramètres"; // 5.0
$LNG['a_header_tools'] = "Outils"; // 5.2.0
$LNG['a_header_reviews'] = "Commentaires"; // 5.0
$LNG['a_header_pages'] = "Pages personnalisées"; // 5.1.0

// Admin > Parametres
$LNG['a_s_header'] = "Changer les paramètres";
$LNG['a_s_help'] = "Aide"; // 5.1.0

$LNG['a_s_general'] = "Paramètres Généraux";
$LNG['a_s_admin_password'] = "Mot de passe administrateur";
$LNG['a_s_list_name'] = "Le nom de votre topsites";
$LNG['a_s_list_url'] = "Lien vers le dossier de votre topsites";
$LNG['a_s_default_language'] = "Langue par Défaut";
$LNG['a_s_your_email'] = "Votre adresse e-mail";

$LNG['a_s_sql'] = "Paramètres SQL";
$LNG['a_s_sql_type'] = "Type de Base de Données"; // 4.1.0
$LNG['a_s_sql_host'] = "Serveur";
$LNG['a_s_sql_database'] = "Base de Données";
$LNG['a_s_sql_username'] = "Nom d'utilisateur";
$LNG['a_s_sql_password'] = "Mot de Passe";

$LNG['a_s_ranking'] = "Paramètres de Classement";
$LNG['a_s_num_list'] = "Nombre de membres à afficher par page"; // 5.0
$LNG['a_s_ranking_period'] = "Période de classement"; // 5.0
$LNG['a_s_ranking_method'] = "Méthode de classement"; // 5.0
$LNG['a_s_ranking_average'] = "Classement par moyenne ou juste %s"; // 5.0
$LNG['a_s_featured_member'] = 'Membre spécial - Vous devez rajouter {$featured_membre} dans wrapper.html apres que vous ayez activer cette fonction.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Nombre de membres à utiliser le _top skin";
$LNG['a_s_ad_breaks'] = "Afficher une publicité apres ces rangs (à separer par une virgule) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Remplir les champs vides par le message \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Paramètres des Membres";
$LNG['a_s_active_default'] = "Nécessite votre validation pour que le membre puisse etre classé";
$LNG['a_s_active_default_review'] = "Nécessite votre validation pour afficher un nouveau commentaire";
$LNG['a_s_delete_after'] = "Supprimer les membres inactifs apres xx jours (0 pour désactiver)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Envoyer un e-mail à l'administrateur lors de l'inscription d'un nouveau membre"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Envoyer un e-mail à l'administrateur lorsqu'un nouveau commentaire est posté"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Largeur maximale de la bannière (0 pour désactiver)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Hauteur maximale de la bannière (0 pour désactiver)"; // 4.2.0
$LNG['a_s_default_banner'] = "Bannière par défaut pour les membres n'en ayant pas proposé";

$LNG['a_s_button'] = "Paramètres des Boutons";
$LNG['a_s_ranks_on_buttons'] = "Rangs sur les boutons -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Boutons des Statistiques"; // 4.2.0
$LNG['a_s_button_url'] = "Si Oui/Non - Lien vers le bouton par défaut que vous voulez voir apparaitre sur le site de vos membres"; // 4.0
$LNG['a_s_button_dir'] = "Si Oui - lien vers le dossier contenant vos boutons"; // 4.0
$LNG['a_s_button_ext'] = "Si Oui - Extension des boutons (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Si Oui - Nombre de boutons que vous avez fait"; // 4.0
$LNG['a_s_google_friendly_links'] = "Liens Google-friendly  - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Page piège du Topsites pour décourager la fraude";
$LNG['a_s_captcha'] = "Code de confirmation lors de l'inscription (protection contre les spammers) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Question et réponse de securité pour bloquer les spammeurs (laisser vide pour désactiver) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Autres paramètres";
$LNG['a_s_search'] = "Rechercher";
$LNG['a_s_time_offset'] = "Plage horaire de votre serveur (en heures)";

$LNG['a_s_on'] = "Activé";
$LNG['a_s_off'] = "Désactivé";
$LNG['a_s_days'] = "Jours";
$LNG['a_s_months'] = "Mois";
$LNG['a_s_weeks'] = "Semaines"; // 4.2.0
$LNG['a_s_yes'] = "Oui";
$LNG['a_s_no'] = "Non";
$LNG['a_s_answer'] = "Répondre"; // 5.2.0

$LNG['a_s_updated'] = "Vos paramètres ont été mis à jour.";

// Admin > Skins et Categories // 5.0
$LNG['a_skins_header'] = "Skins et Catégories"; // 5.0
$LNG['a_skins_default'] = "Skin par Défaut"; // 5.0
$LNG['a_skins_set_default'] = "Définir le skin par défaut"; // 5.0
$LNG['a_skins_anon'] = "Anonyme"; // 5.0
$LNG['a_skins_default_done'] = "Le skin par défaut a été définie."; // 5.0
$LNG['a_skins_categories_done'] = "Le skin de la catégorie a été définie."; // 5.0
$LNG['a_skins_new_category_done'] = "La nouvelle catégorie a été crée."; // 5.0
$LNG['a_skins_delete_done'] = "La catégorie a été supprimée."; // 5.0
$LNG['a_skins_delete_error'] = "La Catégorie ne peut etre supprimée car vous devez avoir au moins une catégorie."; // 5.1.0
$LNG['a_skins_edit_done'] = "La catégorie a été edité."; // 5.0
$LNG['a_skins_invalid_skin'] = "Skin invalide: %s.  Veuillez recommencez."; // 5.0
$LNG['a_skins_categories'] = "Catégories"; // 5.0
$LNG['a_skins_new_category'] = "Créer une nouvelle catégorie"; // 5.0
$LNG['a_skins_set_skins'] = "Définir le skin des catégories"; // 5.0
$LNG['a_skins_edit_category'] = "Editer une Catégorie"; // 5.0
$LNG['a_skins_category_name'] = "Nom de la Catégorie"; // 5.0
$LNG['a_skins_diff_skins'] = "Si vous desirez differents skins pour les différentes catégories, definissez les ci-dessous."; // 5.0
?>
