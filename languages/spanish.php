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
$translation = 'Spanish (Español)';
$translator_name = 'Victor Montero (Sayoran)';
$translator_email = 'Sayoran@sayoran-anime.net';
$translator_url = 'http://www.sayoran-anime.net/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "Ir";
$LNG['g_username'] = "Usuario";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Título";
$LNG['g_description'] = "Descripción";
$LNG['g_category'] = "Categoría"; // 4.1.0
$LNG['g_email'] = "Dirección de correo";
$LNG['g_banner_url'] = "URL del Banner";
$LNG['g_password'] = "Contraseña";
$LNG['g_average'] = "Promedio";
$LNG['g_today'] = "Hoy";
$LNG['g_yesterday'] = "Ayer";
$LNG['g_daily'] = "Diarias"; // 5.0
$LNG['g_this_month'] = "Este Mes"; // 5.0
$LNG['g_last_month'] = "Último Mes"; // 5.0
$LNG['g_monthly'] = "Mensuales"; // 5.0
$LNG['g_this_week'] = "Esta semana"; // 5.0
$LNG['g_last_week'] = "Última semana"; // 5.0
$LNG['g_weekly'] = "Semanales"; // 5.0
$LNG['g_pv'] = 'Páginas vistas'; // 5.0
$LNG['g_overall'] = 'Total'; // 5.0
$LNG['g_in'] = 'Hits Entrada'; // 5.0
$LNG['g_out'] = 'Hits Salida'; // 5.0
$LNG['g_unq_pv'] = "PVs único"; // 5.0
$LNG['g_tot_pv'] = "PVs total"; // 5.0
$LNG['g_unq_in'] = "Entradas únicas"; // 5.0
$LNG['g_tot_in'] = "Total entradas"; // 5.0
$LNG['g_unq_out'] = "Salidas únicas"; // 5.0
$LNG['g_tot_out'] = "Total salidas"; // 5.0
$LNG['g_invalid_u_or_p'] = "Usuario o contraseña invalida. Por favor intentalo otra vez."; // 5.0
$LNG['g_invalid_u'] = "Usuario inválido. Por favor intentalo otra vez."; // 5.0
$LNG['g_invalid_p'] = "Contraseña inválida. Por favor intentalo otra vez."; // 5.0
$LNG['g_session_expired'] = "Su sesión a caducado. Por favor intentalo otra vez."; // 5.0
$LNG['g_error'] = "Error"; // 5.0
$LNG['g_delete_install'] = "Por motivos de seguridad, debe borrar el directorio install antes de ejecutar el script."; // 5.0
$LNG['g_ip'] = "Dirección Ip"; // 5.2.0

// Edit Member Info
$LNG['edit_header'] = "Editar Cuenta";
$LNG['edit_info_edited'] = "Tu información ha sido editada correctamente.";
$LNG['edit_password_blank'] = "Dejar vacío para mantener la contraseña actual"; // 4.0
$LNG['edit_delay'] = "Los cambios del título y la URL de su sitio los debe aprobar el administrador."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Página de Acceso al Top Ranking";
$LNG['gateway_text'] = "Esta Página de Acceso ha sido creada para evitar abusos. Clickea en algún enlace para entrar al Top Ranking.";
$LNG['gateway_vote'] = "Entrar y Votar.";
$LNG['gateway_no_vote'] = "Entrar sin votar"; // 5.0

// Install
$LNG['install_header'] = "Instalación";
$LNG['install_welcome'] = "Bienvenido a Aardvark Topsites PHP 5.  Rellene la información solicitada para instalar el script.";
$LNG['install_sql_prefix'] = "Prefijo de tabla - solo se debe cambiar si se están utilizando varios top en la misma base de datos";
$LNG['install_error_chmod'] = "No se puede escribir en settings_sql.php.  Compruebe que este archivo tiene los permisos CHMOD 666.";
$LNG['install_error_sql'] = "No se puede conectar a la base de datos. Por favor comprueba de nuevo la configuración.";
$LNG['install_done'] = "Su top ha sido instalado.  Ahora debe borrar el directorio install.";
$LNG['install_your'] = "Su Top";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Actualizar";
$LNG['upgrade_welcome'] = "Bienvenido a Aardvark Topsites PHP 5.  Antes de actualizar, recuerde realizar una copia de sus datos.";
$LNG['upgrade_version'] = "Por favor asegurate de que estás actualizando de la versión %s."; // 5.1.0
$LNG['upgrade_error_version'] = "La actualización es solo soportada por Aardvark Topsites PHP 4.1.0 o superior.";
$LNG['upgrade_done'] = "Su Top ha sido actualizado. Ahora borre este directorio.";
$LNG['install_mailing_list'] = "Si quisiera figurar en la lista de email de Aardvark Topsites PHP, introduzca su email aquí abajo. Es una lista para los avisos importantes sobre el script, nuevas versiones, seguridad, etc."; // 5.2.0

// Join
$LNG['join_header'] = "Inscribirse";
$LNG['join_enter_text'] = "Escriba los caracteres tal y como aparecen abajo:"; // 4.2.2
$LNG['join_enter_text_read'] = "¿No puede leerse?"; // 5.2.0
$LNG['join_user'] = "Usuario"; // 5.0
$LNG['join_website'] = "Página Web"; // 5.0
$LNG['join_banner_size'] = "(Tamaño máximo: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Introduce un usuario válido: usa solo letras, numeros, rayas o guiones."; // 5.0
$LNG['join_error_username_duplicate'] = "Introduce un usuario válido: el usuario ya está en uso."; // 5.0
$LNG['join_error_url'] = "Colocar una URL válida.";
$LNG['join_error_email'] = "Colocar una dirección de correo válida.";
$LNG['join_error_title'] = "Escribir un título para tu sitio web.";
$LNG['join_error_password'] = "Escoger Contraseña.";
$LNG['join_error_confirm_password'] = "Las contraseñas no coinciden."; // 5.2.0
$LNG['join_error_urlbanner'] = "Introduzca un banner válido.  Deje en blanco este apartado si no tiene ninguno."; // 5.2.0
$LNG['join_error_time'] = "No refresques/actualizes la página de inscripción."; // 4.2.0
$LNG['join_error_captcha'] = "The word you entered does not match the image."; // 4.2.2
$LNG['join_error_question'] = "Su respuesta es incorrecta.  Por favor, debe constestarla bien para confirmar que es una persona real y no un bot."; // 5.2.0
$LNG['join_thanks'] = "¡Gracias!  Coloca este código en tu sitio para que pueda ser votado.";
$LNG['join_change_warning'] = "Si cambias el código puede que no funcione.";
$LNG['join_welcome'] = "!Bienvenido al Top Ranking!";
$LNG['join_welcome_admin'] = "Un nuevo miembro se ha inscrito en el Top";
$LNG['join_approve'] = "¡Gracias por registrarse!  Su sitio será listado cuando el administrador lo apruebe.  Recibirá un email con más información cuando su sitio sea aprobado."; // 5.2.0
$LNG['join_type'] = "Tipo de cuenta"; // 5.1.0
$LNG['join_standard'] = "Estándar"; // 5.1.0
$LNG['join_error_top'] = "Se ha encontrado un error.  Por favor, corrija este error abajo."; // 5.2.0
$LNG['join_ban_top'] = "Hay contenido que ha sido prohibido por el administrador."; // 5.2.0
$LNG['join_security'] = "Seguridad"; // 5.2.0
$LNG['join_confirm_password'] = "Confirmar contraseña"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Código de enlace"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Contraseña olvidada"; // 5.0
$LNG['lost_pw_forgot'] = "¿Olvidaste tu contraseña?"; // 5.0
$LNG['lost_pw_get'] = "Conseguir contraseña"; // 5.0
$LNG['lost_pw_emailed'] = "Por favor comprueba tu correo para más información."; // 5.0
$LNG['lost_pw_email'] = "Para escoger una nueva contraseña para tu sitio, pincha en esta dirección:"; // 5.0
$LNG['lost_pw_new'] = "Introduce una nueva contraseña"; // 5.0
$LNG['lost_pw_set_new'] = "Fijar nueva contraseña"; // 5.0
$LNG['lost_pw_finish'] = "Tu contraseña se ha fijado a la nueva contraseña que acabas de elegir."; // 5.0

// Main Page
$LNG['main_header'] = "Principal"; // 5.0
$LNG['main_all'] = "Todos los Sitios"; // 4.2.0
$LNG['main_method'] = "Método de Ranking";
$LNG['main_members'] = "Miembros";
$LNG['main_menu_rankings'] = "Principal";
$LNG['main_menu_join'] = "Inscribirse";
$LNG['main_menu_random'] = "Miembro Aleatorio";
$LNG['main_menu_search'] = "Buscar";
$LNG['main_menu_lost_code'] = "Código perdido"; // 5.0
$LNG['main_menu_lost_password'] = "Contraseña perdida"; // 5.0
$LNG['main_menu_edit'] = "Editar Cuenta";
$LNG['main_menu_user_cp'] = "Panel de control"; // 5.0
$LNG['main_featured'] = "Página Sugerido"; // 4.0.2
$LNG['main_executiontime'] = "Tiempo de Ejecución"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Con Poder";

// Ranking Table
$LNG['table_stats'] = "Estadísticas";
$LNG['table_unique'] = "Unique";
$LNG['table_total'] = "Total";
$LNG['table_rank'] = "Posición";
$LNG['table_title'] = "Título"; // 4.0
$LNG['table_description'] = "Descripción"; // 4.0
$LNG['table_movement'] = "Movimiento";
$LNG['table_up'] = "Sube"; // 5.0
$LNG['table_down'] = "Baja"; // 5.0
$LNG['table_neutral'] = "Sin cambios"; // 5.0
$LNG['table_your_site_here'] = "Su sitio aquí"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Votar y Comentar";
$LNG['rate_message'] = "Por favor, introduzca la puntuación y el comentario para %s en el formulario de abajo."; // 5.2.0
$LNG['rate_rating'] = "Votación";
$LNG['rate_review'] = "Comentario - HTML no es soportado"; // 5.0
$LNG['rate_thanks'] = "¡Gracias por votar y comentar este sitio!";
$LNG['rate_error'] = "Ya has votado o comentado de este sitio.";
$LNG['rate_back'] = "Regresar a Estadísticas";
$LNG['rate_email_admin'] = "Un nuevo comentario ha sido escrito en tu top."; // 5.1.0

// Search
$LNG['search_header'] = "Buscar";
$LNG['search_off'] = "La función de búsqueda ha sido desactivada en este sitio.";
$LNG['search_no_sites'] = "Lo siento, no se encontraron sitios con esos criterios de búsqueda."; // 5.0
$LNG['search_prev'] = "Anterior"; // 3.2.1
$LNG['search_next'] = "Siguiente"; // 3.2.1
$LNG['search_displaying_results'] = "Mostrando %s a %s de %s resultados para <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Estadísticas";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Miembro desde"; // 5.0
$LNG['stats_rating_avg'] = "Valoración media";
$LNG['stats_rating_num'] = "Número de Votos";
$LNG['stats_rate'] = "Votar y comentar este sitio";
$LNG['stats_reviews'] = "Comentarios";
$LNG['stats_allreviews'] = "Mostrar todos los comentarios"; // 4.0
$LNG['stats_week'] = "Semana"; // 5.0
$LNG['stats_highest'] = "Mejor"; // 5.0
$LNG['stats_overall'] = "Estadísticas totales"; // 5.2.0
$LNG['stats_overall_average'] = "Promedio (últimos 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Total (Desde el inicio)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; //4.0
$LNG['ssi_new'] = "%s Nuevo Miembros"; // 5.0
$LNG['ssi_all'] = "Todos los sitios"; //4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Panel de control"; // 5.0
$LNG['user_cp_login'] = "Conexión"; // 5.0
$LNG['user_cp_logout'] = "Salir"; // 5.0
$LNG['user_cp_welcome'] = "Bienvenido a tu panel de control. Utiliza los enlaces de la izquierda para configurar tu cuenta."; // 5.0
$LNG['user_cp_logout_message'] = "Ahora está desconectado del panel de control."; // 5.0
$LNG['user_cp_login_long'] = "Entrar con su nombre de usuario y contraseña o su OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Incapaz de encontrar el servidor de OpenID para %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Debes registrarte en nuestro top antes de que puedas acceder al panel de control."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Ocurrió un error mientras se procesaba su ingreso al sistema, por favor inténtelo de nuevo."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Usted debe tener acceso para proceder, inténtelo de nuevo."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Error del servidor: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "No puede acceder al panel de control hasta que su sitio sea aprobado.  Recibirá un email cuando su sitio sea aprobado."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Aprobar a nuevos miembros"; // 5.0
$LNG['a_approve'] = "Aprobar"; // 4.0
$LNG['a_approve_del'] = "Borrar"; // 4.0
$LNG['a_approve_none'] = "No hay miembros esperando ser aprobados."; // 4.0
$LNG['a_approve_done'] = "El sitio ha sido aprovado exitosamente."; // 4.0
$LNG['a_approve_sel'] = "Con selección:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Aprobar miembros editados"; // 5.2.0
$LNG['a_approve_edited_none'] = "No hay miembros editados que aprobar."; // 5.2.0
$LNG['a_approve_edited_old'] = "Titulo y URL anteriores"; // 5.2.0
$LNG['a_approve_edited_new'] = "Titulo y URL editados"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Rechazar"; // 5.2.0
$LNG['a_approve_edited_done'] = "Los cambios han sido aprobados."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Los cambios han sido rechazados."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Aprobar nuevos comentarios"; // 5.0
$LNG['a_approve_rev_none'] = "No hay comentarios a la espera de ser aprovados."; // 5.0
$LNG['a_approve_rev_done'] = "El comentario ha sido aprovado."; // 5.0
$LNG['a_approve_rev_dones'] = "Los comentarios han sido aprovados."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Guardar base de datos"; // 5.2.0
$LNG['a_backup_warn'] = "Esto realizará una copia de seguridad de sus miembros, estadísticas y configuraciones.  Si tiene muchos miembros, puede tomar más tiempo el generar la copia de seguridad y dicha copia será un archivo más grande."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Crear página personalizada"; // 5.1.0
$LNG['a_create_page_id'] = "ID de página - Esto se usará en la dirección URL, por lo que solo podrá contener letras, números, guiones o rayas."; // 5.1.0
$LNG['a_create_page_error_id'] = "La ID de la página solo puede contener letras, números, guiones o rayas. Por favor, vuelve hacia atrás para corregir esto."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Ya existe una página personal con esa misma ID. Por favor vuelve hacia atrás y elige una nueva ID."; // 5.1.0
$LNG['a_create_page_created'] = "La página ha sido creada. Ahora debes añadir manualmente un enlace hacia %s en wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Borrar usuario"; // 5.0
$LNG['a_del_headers'] = "Borrar usuarios Members"; // 5.0
$LNG['a_del_done'] = "El usuario ha sido borrado."; // 5.0
$LNG['a_del_dones'] = "Los usuarios han sido borrados."; // 5.0
$LNG['a_del_warn'] = "¿ Estas seguro que quieres borrar a %s?"; // 5.0
$LNG['a_del_multi'] = "estos %s usuarios"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Borrar palabra censurada"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Borrar palabras censuradas"; // 5.1.0
$LNG['a_del_bad_word_done'] = "La palabra censurada ha sido borrada."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Las palabras censuradas han sido borradas."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "¿Estás seguro que quieres borrar %s de la lista de palabras censuradas?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "estas %s palabras"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "La ID de la palabra censurada es inválida. Por favor vuelve a intentarlo."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Eliminar entrada de la lista negra"; // 5.2.0
$LNG['a_del_ban_headers'] = "Eliminar entradas de la lista negra"; // 5.2.0
$LNG['a_del_ban_done'] = "La entrada de la lista negra ha sido eliminada."; // 5.2.0
$LNG['a_del_ban_dones'] = "Las entradas de la lista negra han sido eliminadas."; // 5.2.0
$LNG['a_del_ban_warn'] = "¿Esta seguro de querer eliminar %s de la lista negra?"; //5.2.0
$LNG['a_del_ban_multi'] = "estas %s entradas"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "ID de lista negra invalido.  Por favor, intentelo de nuevo."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Borrar página personalizada"; // 5.1.0
$LNG['a_del_page_headers'] = "Borrar páginas personalizadas"; // 5.1.0
$LNG['a_del_page_done'] = "La página personalizada ha sido borrada."; // 5.1.0
$LNG['a_del_page_dones'] = "Las páginas personalizadas han sido borradas."; // 5.1.0
$LNG['a_del_page_warn'] = "¿Estás seguro de querer borrar %s?"; //5.1.0
$LNG['a_del_page_multi'] = "estos %s páginas"; //5.1.0
$LNG['a_del_page_invalid_id'] = "La ID de la página es inválida. Por favor vuelve a intentarlo."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Borrar comentario"; // 5.0
$LNG['a_del_rev_headers'] = "Borrar comentarios"; // 5.0
$LNG['a_del_rev_done'] = "El comentario ha sido borrado."; // 5.0
$LNG['a_del_rev_dones'] = "Los comentarios han sido borrados."; // 5.0
$LNG['a_del_rev_warn'] = "¿ Estás seguro que quieres borrar este comentario ?"; //5.0
$LNG['a_del_rev_warns'] = "¿ Estás seguro que quieres borrar estos comentarios ?"; //5.0
$LNG['a_del_rev_invalid_id'] = "ID de comentario inválido.  Por favor intentalo otra vez."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Editar usuario"; // 5.0
$LNG['a_edit_site_is'] = "Este sitio está"; // 4.0
$LNG['a_edit_active'] = "Activo (en la lista)"; // 4.0
$LNG['a_edit_inactive'] = "Inactivo (baneado temporalmente, no aparece en la lista)"; // 4.0
$LNG['a_edit_edited'] = "La información del miembro ha sido editada.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Editar palabra censurada"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "La palabra censurada ha sido editada."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Editar entrada de la lista negra"; // 5.2.0
$LNG['a_edit_ban_edited'] = "La entrada de la lista negra ha sido editada."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Editar página personalizada"; // 5.1.0
$LNG['a_edit_page_content'] = "Contenido - Puedes usar código HTML aquí"; // 5.1.0
$LNG['a_edit_page_edited'] = "La página ha sido editada."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Editar comentario"; // 5.0
$LNG['a_edit_rev_edited'] = "El comentario ha sido editado.";

// Admin > Email Members
$LNG['a_email_header'] = "Enviar correos"; // 5.0
$LNG['a_email_subject'] = "Asunto"; // 4.2.0
$LNG['a_email_message'] = "Mensaje"; // 4.2.0
$LNG['a_email_not_sent'] = "El correo no se pudo enviar a %s"; // 5.0
$LNG['a_email_msg_sent'] = "El mensaje ha sido enviado a %s"; // 5.0
$LNG['a_email_sent'] = "El mensaje ha sido enviado a %s miembros."; // 4.2.0
$LNG['a_email_failed'] = "Fueron %s miembros los que no recibieron el mensaje."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Has salido del panel de administración."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administración"; // 5.0
$LNG['a_main'] = "Bienvendio a la administración. Utiliza los enlaces de la izquierda para administrar tu top."; // 5.0
$LNG['a_main_approve'] = "Hay un sitio esperando ser aprobado."; // 5.0
$LNG['a_main_approves'] = "Hay %s sitios esperando ser aprobados."; // 5.0
$LNG['a_main_approve_edit'] = "Hay un sitio editado esperando ser aprobado."; // 5.2.0
$LNG['a_main_approve_edits'] = "Hay %s sitios esperando ser aprobados."; // 5.2.0
$LNG['a_main_approve_rev'] = "Hay un comentario esperando ser aprobado."; // 5.0
$LNG['a_main_approve_revs'] = "Hay %s comentarios esperando ser aprobados."; // 5.0
$LNG['a_main_your'] = "Tu versión"; // 5.0
$LNG['a_main_latest'] = "Ultima versión"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Web de Aardvark Topsites PHP</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Administrar miembros"; // 5.0
$LNG['a_man_actions'] = "Acciones"; // 4.2.0
$LNG['a_man_edit'] = "Editar"; // 4.2.0
$LNG['a_man_delete'] = "Borrar"; // 4.2.0
$LNG['a_man_email'] = "Correo"; // 4.2.0
$LNG['a_man_all'] = "Seleccionar todos"; // 5.0
$LNG['a_man_none'] = "No seleccionar a ninguno"; // 5.0
$LNG['a_man_del_sel'] = "Borrar seleccionados"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Filtro de palabras malsonantes"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Introduzca una palabra y su reemplazo abajo.  Por ejemplo, puedes introducir \"tonto\" como palabra y  \"t****\" en el campo de reemplazo."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "La similitud exacta solo reemplazará cadenas con la pálabra exacta. La similitud global reemplazará cualquier cadena que contenga la palabra.  Ejemplo, similitud global de \"mal\" podría reemplazar también \"maldad\" y \"camaleón\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Palabra"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Reemplazo"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Similitud"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exacta"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Global"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Palabra de filtro"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" ha sido añadida al filtro de palabras malsonantes."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Lista negra"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Para banear sitios y usuarios de su topsite rellene el formulario de abajo.  Cuando un miembro se registra, la URL, el email, el nombre de usuario y la dirección IP son revisados.  Cuando un sitio es editado, la URL y el email son revisados.<br /><br />La lista negra no afectara a sus miembros existentes."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "La similitud exacta solo reemplazará cadenas con la pálabra exacta. La similitud global reemplazará cualquier cadena que contenga la palabra.  Así pues, la similitud global de http://www.yahoo.com/ abarcaría cualquier página con http://www.yahoo.com/ en el URL, mientras que la similitud exacta de http://www.yahoo.com/ abarcaría solamente ese URL exacto."; // 5.2.0
$LNG['a_man_ban_string'] = "Secuencia"; // 5.2.0
$LNG['a_man_ban_field'] = "Campo"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" ha sido añadido a la lista negra."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Administrar páginas personalizadas"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Administrar comentarios"; // 5.0
$LNG['a_man_rev_enter'] = "Para administrar los comentarios de un sitio, selecciona el nombre de usuario abajo."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Comentario"; // 5.0
$LNG['a_man_rev_date'] = "Fecha"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Principal";
$LNG['a_menu_approve'] = "Aprobar nuevos miembros";
$LNG['a_menu_approve_edits'] = "Aprobar miembros editados"; // 5.2.0
$LNG['a_menu_manage'] = "Administrar usuarios"; // 4.2.0
$LNG['a_menu_settings'] = "Cambiar configuración"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filtro de palabras"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Lista negra"; // 5.2.0
$LNG['a_menu_backup'] = "Guardar base de datos"; // 5.2.0
$LNG['a_menu_skins'] = "Temas y categorías"; // 5.0
$LNG['a_menu_approve_reviews'] = "Aprobar nuevos comentarios"; // 5.0
$LNG['a_menu_manage_reviews'] = "Administrar comentarios"; // 5.0
$LNG['a_menu_email'] = "Enviar correo a los miembros";
$LNG['a_menu_delete_review'] = "Borrar comentarios";
$LNG['a_menu_logout'] = "Salir";
$LNG['a_menu_delete'] = "Borrar miembros";
$LNG['a_menu_edit'] = "Editar miembros";
$LNG['a_menu_create_page'] = "Crear página personalizada"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Administrar páginas personalizadas"; // 5.1.0
$LNG['a_header_members'] = "Miembros"; // 5.0
$LNG['a_header_settings'] = "Configuración"; // 5.0
$LNG['a_header_tools'] = "Herramientas"; // 5.2.0
$LNG['a_header_reviews'] = "Comentarios"; // 5.0
$LNG['a_header_pages'] = "Páginas personalizadas"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Cambiar configuración";
$LNG['a_s_help'] = "Ayuda";

$LNG['a_s_general'] = "Configuración General";
$LNG['a_s_admin_password'] = "Contraseña del administrador";
$LNG['a_s_list_name'] = "Nombre de tu Top";
$LNG['a_s_list_url'] = "URL dirigida hacia el top";
$LNG['a_s_default_language'] = "Idioma predeterminado";
$LNG['a_s_your_email'] = "Tu dirección de correo";

$LNG['a_s_sql'] = "Configuración SQL";
$LNG['a_s_sql_type'] = "Tipo de Base de datos"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Base de datos";
$LNG['a_s_sql_username'] = "Propietario";
$LNG['a_s_sql_password'] = "Contraseña de la base de datos";

$LNG['a_s_ranking'] = "Configuración del Ranking";
$LNG['a_s_num_list'] = " Número de miembros a listar por página"; // 5.0
$LNG['a_s_ranking_period'] = "Periodo de valoración"; // 5.0
$LNG['a_s_ranking_method'] = "Metodo de valoración"; // 5.0
$LNG['a_s_ranking_average'] = "Posición por promedio o solo por %s"; // 5.0
$LNG['a_s_featured_member'] = 'Miembro destacado - Tienes que añadir {$featured_member} a wrapper.html despues de activar esto.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Numero de miembros para utilizar el tema _top";
$LNG['a_s_ad_breaks'] = "Mostrar espacios despues de estas posiciones (separar con comas) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Deja las filas en blanco con un mensaje que dice \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Configuración de Miembros";
$LNG['a_s_active_default'] = "Requerir que los nuevos miembros sean aprovados antes de aparecer en el Top";
$LNG['a_s_active_default_review'] = "Requerir que los nuevos comentarios sean aprobados antes de listarlos";
$LNG['a_s_delete_after'] = "Borrar miembros inactivos después de ¿cuántos días?"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "¿Enviar correo al administrador cuando un nuevo miembro se inscriba?"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "¿Enviar correo al administrador cuando un nuevo comentario es escrito?"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Máxima anchura del banner de los miembros (cambiar a 0 para no poner límites)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Máxima altura del banner de los miembros (cambiar a 0 para no poner límites)"; // 4.2.0
$LNG['a_s_default_banner'] = "Banner por defecto si los miembros no colocan ninguno.";

$LNG['a_s_button'] = "Configuraciones del Botón";
$LNG['a_s_ranks_on_buttons'] = "Mostrar posición en botón - <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Botones de Estado"; // 4.2.0
$LNG['a_s_button_url'] = "<b>Si eliges NO</b> - URL del botón que quieres que aparezca en el sitio de los miembros"; // 4.0
$LNG['a_s_button_dir'] = "<b>Si eliges SI</b> - URL del directorio donde están los botones"; // 4.0
$LNG['a_s_button_ext'] = "<b>Si eliges SI</b> - elige la extensión que tienen los botones (gif, png o jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "<b>Si eliges SI</b> - Número de botones que has hecho - mientras mayor sea el número, más recursos usará el script"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-enlace amigo - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Activar Página de Seguridad para evitar abusos y trampas a la hora de contar visitas";
$LNG['a_s_captcha'] = "Palabra de verificación ( más seguridad contra spammers) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Pregunta y respuesta de seguridad para bloquear los spammers (dejar en blanco para desactivar esta función) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Otras Configuraciones";
$LNG['a_s_search'] = "Buscar";
$LNG['a_s_time_offset'] = "Huso Horario de tu servidor (Diferencia horaria de tu servidor)";

$LNG['a_s_on'] = "Activado";
$LNG['a_s_off'] = "Desactivado";
$LNG['a_s_days'] = "Días";
$LNG['a_s_months'] = "Meses";
$LNG['a_s_weeks'] = "Semanas"; // 4.2.0
$LNG['a_s_yes'] = "Si";
$LNG['a_s_no'] = "No";
$LNG['a_s_answer'] = "Respuesta"; // 5.2.0

$LNG['a_s_updated'] = "Las configuraciones han sido actualizadas.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Temas y categorías"; // 5.0
$LNG['a_skins_default'] = "Tema por defecto"; // 5.0
$LNG['a_skins_set_default'] = "Configurar tema por defecto"; // 5.0
$LNG['a_skins_anon'] = "Anonímo"; // 5.0
$LNG['a_skins_default_done'] = "El tema por defecto ha sido establecído."; // 5.0
$LNG['a_skins_categories_done'] = "Los temas para las categorías han sido establecidos."; // 5.0
$LNG['a_skins_new_category_done'] = "La nueva categoría ha sido creada."; // 5.0
$LNG['a_skins_delete_done'] = "La categoría ha sido borrada."; // 5.0
$LNG['a_skins_delete_error'] = "La categoría no puede ser borrada porque debes tener al menos una categoría."; // 5.1.0
$LNG['a_skins_edit_done'] = "La categoría ha sido editada."; // 5.0
$LNG['a_skins_invalid_skin'] = "Tema inválido: %s.  Por favor vuelve a intentarlo."; // 5.0
$LNG['a_skins_categories'] = "Categorías"; // 5.0
$LNG['a_skins_new_category'] = "Crear nueva categoría"; // 5.0
$LNG['a_skins_set_skins'] = "Establecer temas para categorías"; // 5.0
$LNG['a_skins_edit_category'] = "Editar categoría"; // 5.0
$LNG['a_skins_category_name'] = "Nombre de categoría"; // 5.0
$LNG['a_skins_diff_skins'] = "Si deseas diversos temas para diversas categorías, selecciónalos abajo."; // 5.0
?>
