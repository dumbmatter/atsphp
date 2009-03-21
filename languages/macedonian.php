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
  die("Kade? ne moze da vlezis Мрш!.");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.********************************Можно е Некои Зборови се превдени буквално!!*****************
$translation = 'Macedonian (Македонски)';
$translator_name = 'GjokoMk';
$translator_email = 'velgosti@gmail.com';
$translator_url = 'http://www.velgosti.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "utf-8";

// Globalno
$LNG['g_form_submit_short'] = "Продолжи";
$LNG['g_username'] = "Член";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Наслов";
$LNG['g_description'] = "Опис";
$LNG['g_category'] = "Категорија"; // 4.1.0
$LNG['g_email'] = "E-mail";
$LNG['g_banner_url'] = "Банер URL";
$LNG['g_password'] = "Лозинка";
$LNG['g_average'] = "Просек";
$LNG['g_today'] = "Денес";
$LNG['g_yesterday'] = "Вчера";
$LNG['g_daily'] = "Дневно"; // 5.0
$LNG['g_this_month'] = "Oвој Месец"; // 5.0
$LNG['g_last_month'] = "Минат Месец"; // 5.0
$LNG['g_monthly'] = "Месечно"; // 5.0
$LNG['g_this_week'] = "Оваа седмица"; // 5.0
$LNG['g_last_week'] = "Мината седмица"; // 5.0
$LNG['g_weekly'] = "Седмично"; // 5.0
$LNG['g_pv'] = 'Преглед По Страница'; // 5.0
$LNG['g_overall'] = 'Вкупно'; // 5.0
$LNG['g_in'] = 'Влези'; // 5.0
$LNG['g_out'] = 'Излези'; // 5.0
$LNG['g_unq_pv'] = "Уникатни PSs"; // 5.0
$LNG['g_tot_pv'] = "Вкупно PSs"; // 5.0
$LNG['g_unq_in'] = "Уникатен Влез"; // 5.0
$LNG['g_tot_in'] = "Вкупнпо Влегувања"; // 5.0
$LNG['g_unq_out'] = "Уникатни Излегувања"; // 5.0
$LNG['g_tot_out'] = "Вкупно Излегувања"; // 5.0
$LNG['g_invalid_u_or_p'] = "Грешка во Членското Име или Лозинка. Пробајте повторно."; // 5.0
$LNG['g_invalid_u'] = "Грешно Членско Име. Пробајте повторно."; // 5.0
$LNG['g_invalid_p'] = "Грешна Лозинка. Пробајте повторно."; // 5.0
$LNG['g_session_expired'] = "Ви истече посетата. Пробајте повторно."; // 5.0
$LNG['g_error'] = "Грешка"; // 5.0
$LNG['g_delete_install'] = "Мора да го избришите фолдерот install за да работи скриптава."; // 5.0
$LNG['g_ip'] = "IP Адреса"; // 5.2.0

// Promeni clenstvo
$LNG['edit_header'] = "Промени Членство";
$LNG['edit_info_edited'] = "Членството Променето.";
$LNG['edit_password_blank'] = "Остави празно за иста Лозинка"; // 4.0
$LNG['edit_delay'] = "Промена на насловот и URL на вашата страна ќе мора да бидат одобрени од Администраторот."; // 5.2.0

// Gejtvej Stranica
$LNG['gateway_header'] = "Топ Страни Gateway";
$LNG['gateway_text'] = "Да не се види ставете ја само оваа Gateway страница.";
$LNG['gateway_vote'] = "-Влези и Гласај-";
$LNG['gateway_no_vote'] = "Влези без Гласање"; // 5.0

// Install Англиски
$LNG['install_header'] = "Install ";
$LNG['install_welcome'] = "Англиски-Welcome to Aardvark Topsites PHP 5.  Fill out the form below to install the script.";
$LNG['install_sql_prefix'] = "Table prefix - only change this if you are running more than one list from the same database";
$LNG['install_error_chmod'] = "Could not write to settings_sql.php.  Make sure you CHMOD 666 settings_sql.php.";
$LNG['install_error_sql'] = "Could not connect to the SQL database.  Please go back and check your SQL settings.";
$LNG['install_done'] = "Your topsites list has been installed.  Delete this directory now.";
$LNG['install_your'] = "Your Topsites List";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Upgrade";
$LNG['upgrade_welcome'] = "Welcome to Aardvark Topsites PHP 5.  Before you upgrade, remember to back up your data.";
$LNG['upgrade_version'] = "Please make sure that you are upgrading from version %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Upgrading is only supported for Aardvark Topsites PHP 4.1.0 or higher.";
$LNG['upgrade_done'] = "Your topsites list has been upgraded.  Delete this directory now.";
$LNG['install_mailing_list'] = "If you would like to join the Aardvark Topsites PHP mailing list, enter your email address below.  It is a low volume list for important announcements about the script, such as new releases and security advisories."; // 5.2.0

// Posalji Sajt
$LNG['join_header'] = "Испрати Линк";
$LNG['join_enter_text'] = "Внеси ги буквите како на страната долу:"; // 4.2.2
$LNG['join_enter_text_read'] = "Не може да  се прочита?"; // 5.2.0
$LNG['join_user'] = "Член"; // 5.0
$LNG['join_website'] = "Web Страна"; // 5.0
$LNG['join_banner_size'] = "(Максимална Големина: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Внесете Членско Име. Користете Букви броеви и _,-.."; // 5.0
$LNG['join_error_username_duplicate'] = "Членското Име Е веќе во употреба."; // 5.0
$LNG['join_error_url'] = "Внеси URL.";
$LNG['join_error_email'] = "Внесете точна e-mail адреса.";
$LNG['join_error_title'] = "Внесете Наслов за Вашата страница.";
$LNG['join_error_password'] = "Внесете Лозинка.";
$LNG['join_error_confirm_password'] = "Порврди Лозинка."; // 5.2.0
$LNG['join_error_urlbanner'] = "Внесете валиден банер/слика (http://www.vasa_strana/baner.gif ). Оставете празно ако немате банер."; // 5.2.0
$LNG['join_error_time'] = "Немојте да ја освежувате оваа Конфирурација [ F5 или refresh ]."; // 4.2.0
$LNG['join_error_captcha'] = "Кодот кој го внесовте не е како на слката."; // 4.2.2
$LNG['join_error_question'] = "Одговорот не е точен. Ве молиме потврдете го ова за да сме сигурни дека личност на не бот (компјутер)."; // 5.2.0
$LNG['join_thanks'] = "Благодариме што се регистриравте!  За да запошне гласањето ставете го овој код во вашата страница.";
$LNG['join_change_warning'] = "Ако го промените кодот Гласањето нема да биде исправно.";
$LNG['join_welcome'] = "Добре Дојдовте на %s";
$LNG['join_welcome_admin'] = "Нов член се регистира на вашата страна Топ Листа.";
$LNG['join_approve'] = "Благодариме за Регистрацијата!  Вашата страна ќе биде поставена на листата штом биде одобрена од Администраторот. Ќе добиете  e-mail со информации кога администраторот ја одобрил страната .Се надеваме сте ставиле дона e-mail Адреса."; // 5.2.0
$LNG['join_type'] = "Тип на Членство"; // 5.1.0
$LNG['join_standard'] = "Обичнo"; // 5.1.0
$LNG['join_error_top'] = "Грешка беше пронајдена во вашите податоци долу.  Ве молиме поправете ја."; // 5.2.0
$LNG['join_ban_top'] = "Вaшите податоци содржат зборови кои се забранети од Страна на Администраторот."; // 5.2.0
$LNG['join_security'] = "Сигурностt"; // 5.2.0
$LNG['join_confirm_password'] = "Потврди Лозинка"; // 5.2.0

// Link Kod
$LNG['link_code_header'] = "Линк Код"; // 5.0

// Izgubljena Lozinka
$LNG['lost_pw_header'] = "Изгубена Лозинка"; // 5.0
$LNG['lost_pw_forgot'] = "Си ја заборавив Лозинката"; // 5.0
$LNG['lost_pw_get'] = "Испрати ми нова Лозинка"; // 5.0
$LNG['lost_pw_emailed'] = "Проверете си  e-mail за нови инструкции."; // 5.0
$LNG['lost_pw_email'] = "За да добиете нова лозинка клкинете на овој URL:"; // 5.0
$LNG['lost_pw_new'] = "Внеси ја новата Лозинка"; // 5.0
$LNG['lost_pw_set_new'] = "Ресетирај ја Лозинката"; // 5.0
$LNG['lost_pw_finish'] = "Новата Лозинка е променета во Лозинката што сега ја поставивте."; // 5.0

// Glavna Stranica
$LNG['main_header'] = "Рангирање"; // 5.0
$LNG['main_all'] = "Сите Страници"; // 4.2.0
$LNG['main_method'] = "Метод на Рангирање";
$LNG['main_members'] = "Членови";
$LNG['main_menu_rankings'] = "Рангирање";
$LNG['main_menu_join'] = "Постави Линк";
$LNG['main_menu_random'] = "Случаен Член";
$LNG['main_menu_search'] = "Барај";
$LNG['main_menu_lost_code'] = "Изгубен код"; // 5.0
$LNG['main_menu_lost_password'] = "Изгубена Лозинка"; // 5.0
$LNG['main_menu_edit'] = "Промени Членски Информации";
$LNG['main_menu_user_cp'] = "Членски Контролен Панел"; // 5.0
$LNG['main_featured'] = "Избрана Страна"; // 4.0.2
$LNG['main_executiontime'] = "Постои од"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Aardvark Top Sites PHP-[Преведено на Македонски од : <a href=\"http://www.velgosti.com/\">Velgosti.com</a>]";

// Ocene
$LNG['table_stats'] = "Статистика";
$LNG['table_unique'] = "Уникатно";
$LNG['table_total'] = "Вкупно";
$LNG['table_rank'] = "Ранг";
$LNG['table_title'] = "Наслов"; // 4.0
$LNG['table_description'] = "Опис"; // 4.0
$LNG['table_movement'] = "Промени";
$LNG['table_up'] = "Горе"; // 5.0
$LNG['table_down'] = "Долу"; // 5.0
$LNG['table_neutral'] = "Исто"; // 5.0
$LNG['table_your_site_here'] = "Вашата страна Овде"; // 5.2.0

// Ocene i Komentari
$LNG['rate_header'] = "Отценки и Коментари";
$LNG['rate_message'] = "Внесете ја вашата отцена и коментар за  %s  во формата долу."; // 5.2.0
$LNG['rate_rating'] = "Отценки";
$LNG['rate_review'] = "Коментар - HTML е Збранет"; // 5.0
$LNG['rate_thanks'] = "Благодариме на Отценката.";
$LNG['rate_error'] = "Вие веќе сте дале отценка за оваа страна.";
$LNG['rate_back'] = "Назад во Статистика";
$LNG['rate_email_admin'] = "Нов Коментар на вашата Топ Листа."; // 5.1.0

// Барај
$LNG['search_header'] = "Барај";
$LNG['search_off'] = "Прбарувањето е Исклучено.";
$LNG['search_no_sites'] = "Не епронајдеа Страна со вашиот опис."; // 5.0
$LNG['search_prev'] = "Предходна"; // 3.2.1
$LNG['search_next'] = "Следна"; // 3.2.1
$LNG['search_displaying_results'] = "Покажува %s до %s oд %s резултати за <b>%s</b>."; // 5.1.0

// Статистика
$LNG['stats_header'] = "Статистика";
$LNG['stats_info'] = "Инфо";
$LNG['stats_member_since'] = "Член Од"; // 5.0
$LNG['stats_rating_avg'] = "Просечна Отценка";
$LNG['stats_rating_num'] = "Број На Отценки";
$LNG['stats_rate'] = "Отценка и ревизија за оваа Страна";
$LNG['stats_reviews'] = "Коментар";
$LNG['stats_allreviews'] = "Покажи ги сите Коментари"; // 4.0
$LNG['stats_week'] = "Седмица"; // 5.0
$LNG['stats_highest'] = "Најповеќе"; // 5.0
$LNG['stats_overall'] = "Вкупно Статистика"; // 5.2.0
$LNG['stats_overall_average'] = "Просек (Последни 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Вкупно (сите времиња)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Топ %s Страна"; // 4.0
$LNG['ssi_new'] = "%s Нов Член"; // 5.0
$LNG['ssi_all'] = "Сите Страни"; // 4.0

// Korisnicka Panela // 5.0
$LNG['user_cp_header'] = "Членски Контролен Панел"; // 5.0
$LNG['user_cp_login'] = "Влези"; // 5.0
$LNG['user_cp_logout'] = "Излези"; // 5.0
$LNG['user_cp_welcome'] = "Добредојде во вашиот Контролен Панел.  Користете ги линковите Лево да го промените вашиот Панел."; // 5.0
$LNG['user_cp_logout_message'] = "Вие излеговте (не сте логирани)."; // 5.0
$LNG['user_cp_login_long'] = "Логирајте се со важето Членско име и Лозинка или користите OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Неможевме да пронајдиме OpenID сервер за %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Morate se uclaniti za top listu pre nego sto mozete izmeniti vas Nalog."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Глеѓка при влез. Пробајте повторно."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Мора да одобрите пред да влезите. Пробајте повторно."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Грешка од Серверот: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Не може да влезите во Членски Панел додека не ви се одобри. Ќе дониете e-mail кога ке ви се одобри страната."; // 5.2.0

// Admin > Odobri nove Korisnike // 4.0
$LNG['a_approve_header'] = "Одобри нови страници"; // 5.0
$LNG['a_approve'] = "Одобри"; // 4.0
$LNG['a_approve_none'] = "Немате страници кои чекаат."; // 4.0
$LNG['a_approve_done'] = "Страната е одобрена."; // 4.0
$LNG['a_approve_dones'] = "Страните се оодобрени."; // 4.0
$LNG['a_approve_sel'] = "Со Одбраното:"; // 5.0

// Admin > Odobri Izmjenjene Korisnike // 5.2.0
$LNG['a_approve_edited_header'] = "Одобри ги променетите Членови"; // 5.2.0
$LNG['a_approve_edited_none'] = "Нема нови измени за одобривање."; // 5.2.0
$LNG['a_approve_edited_old'] = "Предходен наслов и URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Измени Наслов и URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Одби"; // 5.2.0
$LNG['a_approve_edited_done'] = "Измените се Одобрени."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Измените НЕ се одобрени."; // 5.2.0

// Admin > Odobri Nove Komentare // 5.0
$LNG['a_approve_rev_header'] = "Одобри нови Коментари"; // 5.0
$LNG['a_approve_rev_none'] = "Нема Коментари што чекаат одобрение."; // 5.0
$LNG['a_approve_rev_done'] = "Коментарот е одобрен."; // 5.0
$LNG['a_approve_rev_dones'] = "Коментарите се одобрени."; // 5.0

// Admin > Backup Dejtabazu // 5.2.0
$LNG['a_backup_header'] = "Копирај ја Базата (Backup)"; // 5.2.0
$LNG['a_backup_warn'] = "Ова ќе направи копија на базата на податоци и членови ,статистика и опции.  Ако имате многу Членови може да потаре подолго и фајлот за базата ќе биде поголем."; // 5.2.0

// Admin > Napravi Licnu Stranu // 5.1.0
$LNG['a_create_page_header'] = "Направи своја страна"; // 5.1.0
$LNG['a_create_page_id'] = "ID На страница- Ова ќе боде дел од веб адресата користете букви ,броеви ,_ и -."; // 5.1.0
$LNG['a_create_page_error_id'] = "ID На Страната може да содржи само букви ,броеви ,_ и -."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Тој  ID на страна веќе постои."; // 5.1.0
$LNG['a_create_page_created'] = "Страницата беше креирана Ќе мора рачно да ставите линк за  %s во wrapper.html."; // 5.1.0

// Admin > Izbrisi Sajt
$LNG['a_del_header'] = "Избриши Страна"; // 5.0
$LNG['a_del_headers'] = "Избриши Страни"; // 5.0
$LNG['a_del_done'] = "Страната Избришана."; // 5.0
$LNG['a_del_dones'] = "Страните Избришани."; // 5.0
$LNG['a_del_warn'] = "Сигурно сакате да  избришите %s?"; // 5.0
$LNG['a_del_multi'] = "Овие %s страници"; //5.0

// Admin > Izbrisi Losu rec // 5.1.0
$LNG['a_del_bad_word_header'] = "Избриши го филтрираниот збор"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Избриши ги филтрираните зборови"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Филтрираниот збор е избришан."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Филтрираните зборови се избришани."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Сигурно сакате да го избришите  %s од листата на филтрираните зборови?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "овие %s зборови"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Грешка во зборовите.Пробајте повторно"; // 5.1.0

// Admin > Izbrisi Zabranjeno // 5.2.0
$LNG['a_del_ban_header'] = "Избишете Податок од Црната Листа"; // 5.2.0
$LNG['a_del_ban_headers'] = "Избишете Податоци од Црната Листа"; // 5.2.0
$LNG['a_del_ban_done'] = "Податокот избришан од Црна Листа."; // 5.2.0
$LNG['a_del_ban_dones'] = "Податоците избришани од Црна Листа."; // 5.2.0
$LNG['a_del_ban_warn'] = "Сигурно сакате да избришите %s од Црната Листа?"; //5.2.0
$LNG['a_del_ban_multi'] = "овие %s пораки"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "ID-то Не постои на црната Листа.  Пробајте повторно."; // 5.2.0

// Admin > Izbrisi Licnu Stranu // 5.1.0
$LNG['a_del_page_header'] = "Избриши лична страници"; // 5.1.0
$LNG['a_del_page_headers'] = "Избриши лични страници"; // 5.1.0
$LNG['a_del_page_done'] = "Личната страница избришана."; // 5.1.0
$LNG['a_del_page_dones'] = "Личнате страници избришана."; // 5.1.0
$LNG['a_del_page_warn'] = "Сигурно сакате да избришите %s?"; //5.1.0
$LNG['a_del_page_multi'] = "oвие %s страници"; //5.1.0
$LNG['a_del_page_invalid_id'] = "IDто За Страницата Не постои или не е точно. Пробајте повторно."; // 5.1.0

// Admin > Izbrisi Revizije // 5.0
$LNG['a_del_rev_header'] = "Избриши Коментар"; // 5.0
$LNG['a_del_rev_headers'] = "Избриши Коментари"; // 5.0
$LNG['a_del_rev_done'] = "Избришан е Коментарот."; // 5.0
$LNG['a_del_rev_dones'] = "Избришани се Коментарите."; // 5.0
$LNG['a_del_rev_warn'] = "Сигурно сакате да ги избришите?"; //5.0
$LNG['a_del_rev_warns'] = "Сигурно сакате да ги избришите овие коментари?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Неточен број на коментарот. Пробајте повторно."; // 5.0

// Admin > Izmeni Korisnika
$LNG['a_edit_header'] = "Измени Страница"; // 5.0
$LNG['a_edit_site_is'] = "Oваа Страниза е"; // 4.0
$LNG['a_edit_active'] = "Активна (На Листата)"; // 4.0
$LNG['a_edit_inactive'] = "Неактивна (Не е на Листата)"; // 5.0
$LNG['a_edit_edited'] = "Страницата е Променета.";

// Admin > Izmeni losu Rec // 5.1.0
$LNG['a_edit_bad_word_header'] = "Промени ги Филтрираните зборови"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Филтрираниот збор Променет."; // 5.1.0

// Admin > Izmeni Zabranjeno // 5.2.0
$LNG['a_edit_ban_header'] = "Промени Податок на Црната Листа"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Податок на Црната Листа Променет."; // 5.2.0

// Admin > Izmeni Licnu Stranu // 5.1.0
$LNG['a_edit_page_header'] = "Промени Лични Страници"; // 5.1.0
$LNG['a_edit_page_content'] = "Внесување на . HTML Е Дозволен"; // 5.1.0
$LNG['a_edit_page_edited'] = "Страницат е Променета."; // 5.1.0

// Admin > Izmjeni Reviziju // 5.0
$LNG['a_edit_rev_header'] = "Промени Коментар"; // 5.0
$LNG['a_edit_rev_edited'] = "Коментарот е Променет.";

// Admin > Email Korisnicima
$LNG['a_email_header'] = "E-mail До Членовите"; // 5.0
$LNG['a_email_subject'] = "Наслов На Пораката"; // 4.2.0
$LNG['a_email_message'] = "Порака"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-mail испратен за %s"; // 5.0
$LNG['a_email_not_sent'] = "Неможеше да биде испратен E-mail за %s"; // 5.0
$LNG['a_email_sent'] = "%s Членовите го добија E-mail-от."; // 4.2.0
$LNG['a_email_failed'] = "%s Членовите НЕ го добија E-mail-от."; // 4.2.0

// Admin > Odjava
$LNG['a_logout_message'] = "Не сте повеќе логирани како Админ."; // 5.0

// Admin > Glavna
$LNG['a_header'] = "Админ"; // 5.0
$LNG['a_main'] = "Добредојде во Администрација.  Користете ги Линковите лево за подредување на Топ Листата."; // 5.0
$LNG['a_main_approve'] = "1 Страна чека Одобреие."; // 5.0
$LNG['a_main_approves'] = "Има %s На Листата на чекање."; // 5.0
$LNG['a_main_approve_edit'] = "Има  1 промента страна која чека одобреие."; // 5.2.0
$LNG['a_main_approve_edits'] = "Има %s променети страници кои чекаат одобреие."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 Коментар чека одобрение."; // 5.0
$LNG['a_main_approve_revs'] = "Има %s Кои чекаат одобреие."; // 5.0
$LNG['a_main_your'] = "Вашата Верзија е"; // 5.0
$LNG['a_main_latest'] = "Последната Верзија е"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Uredjivanje Korisnika
$LNG['a_man_header'] = "Одржунање на Страните"; // 5.0
$LNG['a_man_actions'] = "Акција"; // 4.2.0
$LNG['a_man_edit'] = "Промени"; // 4.2.0
$LNG['a_man_delete'] = "Избриши"; // 4.2.0
$LNG['a_man_email'] = "E-mail"; // 4.2.0
$LNG['a_man_all'] = "Одбери ги Сите"; // 5.0
$LNG['a_man_none'] = "Ниедно"; // 5.0
$LNG['a_man_del_sel'] = "Избриши одбрано"; // 5.0

// Admin > Uredjivanje lose Reci // 5.1.0
$LNG['a_man_bad_words_header'] = "Забранети Зборови"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Внеси збор и негова замена подолу.  na промер \"ебеисе\" во кутивчето \"е****\" во замена."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Истите зборови зборови ќе бодат споредени со истите.  Глобална замена на зборови \"ебисе\" ќе биде исто како \"ебањеs\" и \"ебага\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Збор"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Замена"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Слично"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Исто"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Глобално"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Филтрирано"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" Беше поставена во филтриран збор"; // 5.1.0

// Admin > Odrzavanje Zabranjenog // 5.2.0
$LNG['a_man_ban_header'] = "Црна Листа"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Ако сакате да му забраните на некој влез во Топ Листата исполнете ја формата долу.  Кога член пријави, URL, E-mail адррса, Членско име и IP адреса се проверуваат.  Кога ќе се измени страна, URL и e-mail адреса се проверува.<br /><br />Црната листа нема ефект на сегашните членови."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Истиот збор ќе измени само ланец на зборови.  Глобалната измена ќе ги измени сите со исти концепт.  Значи Глобалната измена за http://www.yahoo.com/ ќе ги измени сите за http://www.yahoo.com/ во URL, додека истата измена за http://www.yahoo.com/ ќе ја измени само истата URL."; // 5.1.0
$LNG['a_man_ban_string'] = "Реддослед"; // 5.2.0
$LNG['a_man_ban_field'] = "Поле"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" Е додадено во Црната Листа."; // 5.2.0

// Admin > Uredzivanje licni strana // 5.1.0
$LNG['a_man_pages_header'] = "Уредување на Лични страници"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Уредување на Коментари"; // 5.0
$LNG['a_man_rev_enter'] = "Да измените коментар на страна , внесете членско име долу."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Коментар"; // 5.0
$LNG['a_man_rev_date'] = "Дата"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Мени";
$LNG['a_menu_main'] = "Почетна"; // 5.0
$LNG['a_menu_approve'] = "Одобри Нови Страници";
$LNG['a_menu_approve_edits'] = "Одобри нови Членови"; // 5.2.0
$LNG['a_menu_manage'] = "Уредување на Страници"; // 4.2.0
$LNG['a_menu_settings'] = "Измени Опции"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Филтер на Знорови"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Црна Листа"; // 5.2.0
$LNG['a_menu_backup'] = "Backup на базата"; // 5.2.0
$LNG['a_menu_skins'] = "Изглед и Категории"; // 5.0
$LNG['a_menu_approve_reviews'] = "Одобри нови Коментари"; // 5.0
$LNG['a_menu_manage_reviews'] = "Уредување на Коментари"; // 5.0
$LNG['a_menu_email'] = "E-mail до Членовите";
$LNG['a_menu_delete_review'] = "Избриши Коментар";
$LNG['a_menu_logout'] = "Одјави се";
$LNG['a_menu_delete'] = "Избриши Член";
$LNG['a_menu_edit'] = "Промени Член";
$LNG['a_menu_create_page'] = "Направи Проватна Страница"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Промени Приватни Страници"; // 5.1.0
$LNG['a_header_members'] = "Членови"; // 5.0
$LNG['a_header_settings'] = "Опции"; // 5.0
$LNG['a_header_tools'] = "Алатки"; // 5.2.0
$LNG['a_header_reviews'] = "Коментар"; // 5.0
$LNG['a_header_pages'] = "Приватни страници"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Измени Опции";
$LNG['a_s_help'] = "Помош"; // 5.1.0

$LNG['a_s_general'] = "Главни Опции";
$LNG['a_s_admin_password'] = "Aмин Лозинка";
$LNG['a_s_list_name'] = "Име на вашата Топ Листа";
$LNG['a_s_list_url'] = "URL за директориум на вашата Топ Листа";
$LNG['a_s_default_language'] = "Главен Јазик";
$LNG['a_s_your_email'] = "Ваша E-mail адреса";

$LNG['a_s_sql'] = "SQL Settings";
$LNG['a_s_sql_type'] = "Database Type"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Username";
$LNG['a_s_sql_password'] = "Password";

$LNG['a_s_ranking'] = "Опции за Отценување";
$LNG['a_s_num_list'] = "Број на Членови по страници"; // 5.0
$LNG['a_s_ranking_period'] = "Време на отценување"; // 5.0
$LNG['a_s_ranking_method'] = "Метод на отценки"; // 5.0
$LNG['a_s_ranking_average'] = "Просек отценки или %s"; // 5.0
$LNG['a_s_featured_member'] = 'Избери страна- Додај  {$featured_member} u wrapper.html кога ке го уклучите ова.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Број на членови да користат _top изглед за";
$LNG['a_s_ad_breaks'] = "Покажи реклами после (Одели ги со запирки) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Во празните полиња внеси \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Опции за Членови";
$LNG['a_s_active_default'] = "Нови Членови треба да се актвираат од Аминистраторот";
$LNG['a_s_active_default_review'] = "За нови Коментари е потребно одобреие од Аминистраторот";
$LNG['a_s_delete_after'] = "Избриши ги страните кои немат гласови после број на денови (Стави 0 да е опцијата исклучена)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "E-mail до админот ако има нова регистрација"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "E-mail до админот ако има нов преглед поставен"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Максимална ширина на банерот (Стави 0 да е опцијата исклучена)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Максимална висина на банерот (Стави 0 да е опцијата исклучена)"; // 4.2.0
$LNG['a_s_default_banner'] = "Кој банер да се користи кога Член не стави URL";

$LNG['a_s_button'] = "Опции на Копчиња";
$LNG['a_s_ranks_on_buttons'] = "Отценки на Копчиња -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Статистика Копче"; // 4.2.0
$LNG['a_s_button_url'] = "Ако е Да/Не - Главен Банер за Страните за Гласање"; // 4.0
$LNG['a_s_button_dir'] = "Ако е Да - URL дирекротиум во код со копчиња"; // 4.0
$LNG['a_s_button_ext'] = "Ako е Да- Продолжување на копчиња (gif, png, jpg, itd.)"; // 4.0
$LNG['a_s_button_num'] = "Ako е Да - Колку копчиња сте направиле"; // 4.0
$LNG['a_s_google_friendly_links'] = "Пријателски Линкови - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gateway page to deter cheating for hits in";
$LNG['a_s_captcha'] = "Збор за верификација за сигурност против спамери - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Безбедносно прашање и одговор против спамери (oставете празно ако не ја сакате оваа опција) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Останати Опции";
$LNG['a_s_search'] = "Барај";
$LNG['a_s_time_offset'] = "Време на Вашиот сервер (во часови)";

$LNG['a_s_on'] = "Да";
$LNG['a_s_off'] = "Не";
$LNG['a_s_days'] = "Денови";
$LNG['a_s_months'] = "Месеци";
$LNG['a_s_weeks'] = "Седмици"; // 4.2.0
$LNG['a_s_yes'] = "Да";
$LNG['a_s_no'] = "Не";
$LNG['a_s_answer'] = "Одговор"; // 5.2.0

$LNG['a_s_updated'] = "Променате беше успешна.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Изглед и Категории"; // 5.0
$LNG['a_skins_default'] = "Главен Изглед"; // 5.0
$LNG['a_skins_set_default'] = "Постави Главен Изглед"; // 5.0
$LNG['a_skins_anon'] = "Непознат"; // 5.0
$LNG['a_skins_default_done'] = "Главен Изглед Одбран."; // 5.0
$LNG['a_skins_categories_done'] = "Изглед на Категоријата Избран."; // 5.0
$LNG['a_skins_new_category_done'] = "СОздадена Нова Категорија."; // 5.0
$LNG['a_skins_delete_done'] = "Категоријата Избришана."; // 5.0
$LNG['a_skins_delete_error'] = "Категоријата неможе да биде избришана. Мора да имате барем една Категорија."; // 5.1.0
$LNG['a_skins_edit_done'] = "Категоријата променета."; // 5.0
$LNG['a_skins_invalid_skin'] = "Изгледот не е валиден: %s.  Пробај повторно."; // 5.0
$LNG['a_skins_categories'] = "Категории"; // 5.0
$LNG['a_skins_new_category'] = "Создади нова Категорија"; // 5.0
$LNG['a_skins_set_skins'] = "Постави нова Категорија"; // 5.0
$LNG['a_skins_edit_category'] = "Промени Категорија"; // 5.0
$LNG['a_skins_category_name'] = "Име на Категорија"; // 5.0
$LNG['a_skins_diff_skins'] = "Ако сакате друг изглед за секоја категорија, изберете долу."; // 5.0
?>
