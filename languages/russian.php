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
$translation = 'Russian (Русский)';
$translator_name = 'Andrey Kanevsky';
$translator_email = 'admin@americaru.com';
$translator_url = 'http://www.americaru.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "windows-1251";

// Global
$LNG['g_form_submit_short'] = "Go";
$LNG['g_username'] = "Имя пользователя";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Заголовок";
$LNG['g_description'] = "Описание";
$LNG['g_category'] = "Категория"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "URL баннера";
$LNG['g_password'] = "Пароль";
$LNG['g_average'] = "Среднее";
$LNG['g_today'] = "Сегодня";
$LNG['g_yesterday'] = "Вчера";
$LNG['g_daily'] = "В день"; // 5.0
$LNG['g_this_month'] = "В этом месяце"; // 5.0
$LNG['g_last_month'] = "В прошлом месяце"; // 5.0
$LNG['g_monthly'] = "В месяц"; // 5.0
$LNG['g_this_week'] = "На этой неделе"; // 5.0
$LNG['g_last_week'] = "На прошлой неделе"; // 5.0
$LNG['g_weekly'] = "В неделю"; // 5.0
$LNG['g_pv'] = 'Показов страниц'; // 5.0
$LNG['g_overall'] = 'Всего'; // 5.0
$LNG['g_in'] = 'Пришло'; // 5.0
$LNG['g_out'] = 'Ушло'; // 5.0
$LNG['g_unq_pv'] = "Уникальных страниц"; // 5.0
$LNG['g_tot_pv'] = "Всего страниц"; // 5.0
$LNG['g_unq_in'] = "Уникальных пришло"; // 5.0
$LNG['g_tot_in'] = "Всего пришло"; // 5.0
$LNG['g_unq_out'] = "Уникальных ушло"; // 5.0
$LNG['g_tot_out'] = "Всего ушло"; // 5.0
$LNG['g_invalid_u_or_p'] = "Неправильное имя пользователя или пароль.  Попробуйте еще раз."; // 5.0
$LNG['g_invalid_u'] = "Неправильное имя пользователя.  Попробуйте еще раз."; // 5.0
$LNG['g_invalid_p'] = "Неправильный пароль.  Попробуйте еще раз."; // 5.0
$LNG['g_session_expired'] = "Сессия отэкспарилась.  Попробуйте еще раз."; // 5.0
$LNG['g_error'] = "Ошибка"; // 5.0
$LNG['g_delete_install'] = "По соображениям безопасности Вы должны удалить директорию /install перед запуском скрипта."; // 5.0
$LNG['g_ip'] = "IP адрес"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Мои данные";
$LNG['edit_info_edited'] = "Изменения на вашем аккаунте успешно сохранены.";
$LNG['edit_password_blank'] = "Оставьте это поле пустым, чтобы сохранить текущий пароль."; // 4.0
$LNG['edit_delay'] = "Изменения в названии и адресе Вашего сайта должны быть проверены администратором рейтинга перед тем, как вступят в силу."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Шлюзовая страница рейтинга";
$LNG['gateway_text'] = "Для предотвращения накрутки вы перенаправлены на шлюзовую страницу. Нажмите на ссылку ниже для входа в рейтинг.";
$LNG['gateway_vote'] = "Войти и проголосовать";
$LNG['gateway_no_vote'] = "Войти без голосования"; // 5.0

// Install
$LNG['install_header'] = "Установить";
$LNG['install_welcome'] = "Добро пожаловать в программу установки Aardvark Topsites PHP 5. Заполните форму, приведенную ниже, чтобы начать установку.";
$LNG['install_sql_prefix'] = "Приставка к имени таблиц - меняйте только если вы запускаете более одного рейтинга в той же базе данных";
$LNG['install_error_chmod'] = "Программа установки не имеет прав на запись в файл settings_sql.php.  Проверьте, что вы изменили права доступа на 666 (chmod 666) для файла settings_sql.php.";
$LNG['install_error_sql'] = "Программа установки не может присоединиться к базе данных. Вернитесь и проверьте установки подключения к базе.";
$LNG['install_done'] = "Ваш Topsites рейтинг успешно установлен. Немедленно удалите директорию /install.";
$LNG['install_your'] = "Ваш рейтинг Topsites";
$LNG['install_admin'] = "Администрирование";
$LNG['install_manual'] = "Руководство";
$LNG['upgrade_header'] = "Обновление";
$LNG['upgrade_welcome'] = "Добро пожаловать в программу обновления Aardvark Topsites PHP 5. Перед обновлением обязательно сделайте резервную копию базы данных.";
$LNG['upgrade_version'] = "Удостоверьтесь, что Вы обновляете версию %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Обновление возможно только для версии Aardvark Topsites PHP 4.1.0 или выше.";
$LNG['upgrade_done'] = "Ваша копия Topsites рейтинга была обновлена. Немедленно удалите директорию /install.";
$LNG['install_mailing_list'] = "Чтобы подписаться на список рассылки Aardvark Topsites, внесите e-mail в поле, расположенное ниже. Количество сообщений рассылки весьма мало, это информация о важных анонсах, обновлениях и советы по мерам безопасности."; // 5.2.0

// Join
$LNG['join_header'] = "Зарегистрировать сайт в рейтинге";
$LNG['join_enter_text'] = "Введите текст, который показан на изображении ниже:"; // 4.2.2
$LNG['join_enter_text_read'] = "Не можете прочесть?"; // 5.2.0
$LNG['join_user'] = "Участник"; // 5.0
$LNG['join_website'] = "Веб сайт"; // 5.0
$LNG['join_banner_size'] = "(Максимальный размер: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Имя пользователя может состоять только из: букв, цифр, подчеркиваний и тире."; // 5.0
$LNG['join_error_username_duplicate'] = "Используйте другое имя пользователя, это уже занято."; // 5.0
$LNG['join_error_url'] = "Введите правильный URL.";
$LNG['join_error_email'] = "Введите корректный e-mail адрес.";
$LNG['join_error_title'] = "Введите заголовок Вашего сайта.";
$LNG['join_error_password'] = "Введите пароль.";
$LNG['join_error_confirm_password'] = "Пароль не подходит."; // 5.2.0
$LNG['join_error_urlbanner'] = "Внесите адрес работающего баннера.  Если у Вас нет баннера, оставьте это поле пустым."; // 5.2.0
$LNG['join_error_time'] = "Не обновляйте страницу с подтверждением регистрации."; // 4.2.0
$LNG['join_error_captcha'] = "Значение, которое вы ввели, не совпадает с тем, что написано на изображении."; // 4.2.2
$LNG['join_error_question'] = "Ответ неверный. Исправьте его, чтобы подтвердить, что Вы человек, а не бот."; // 5.2.0
$LNG['join_thanks'] = "Спасибо за регистрацию! Внесите этот код на ваш сайт и он появится в рейтинге.";
$LNG['join_change_warning'] = "Изменения в коде могут нарушить его работоспособность.";
$LNG['join_welcome'] = "Добро пожаловать в %s";
$LNG['join_welcome_admin'] = "A new member has joined your topsites list.";
$LNG['join_approve'] = "Спасибо, что присоединились к нам! Ваш сайт появится в директории после проверки администратором рейтинга. Вам будет отправлен e-mail, подтверждающий, что ваш сайт проверен."; // 5.2.0
$LNG['join_type'] = "Тип аккаунта"; // 5.1.0
$LNG['join_standard'] = "Обычный"; // 5.1.0
$LNG['join_error_top'] = "В процессе регистрации была обнаружена ошибка. Исправьте ошибку, приведенную ниже."; // 5.2.0
$LNG['join_ban_top'] = "Ваша регистрация содержит тексты запрещенные администрацией рейтинга."; // 5.2.0
$LNG['join_security'] = "Безопасность."; // 5.2.0
$LNG['join_confirm_password'] = "Повторите пароль"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Код ссылки"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Пароль утерян"; // 5.0
$LNG['lost_pw_forgot'] = "Забыли Ваш пароль?"; // 5.0
$LNG['lost_pw_get'] = "Получить пароль"; // 5.0
$LNG['lost_pw_emailed'] = "Проверьте ваш e-mail, вам отправлено письмо с дальнейшими указаниями."; // 5.0
$LNG['lost_pw_email'] = "Чтобы получить новый пароль, нажите на эту ссылку:"; // 5.0
$LNG['lost_pw_new'] = "Введите новый пароль"; // 5.0
$LNG['lost_pw_set_new'] = "Сохранить новый пароль"; // 5.0
$LNG['lost_pw_finish'] = "Ваш пароль обновлен."; // 5.0

// Main Page
$LNG['main_header'] = "Рейтинг"; // 5.0
$LNG['main_all'] = "Все сайты"; // 4.2.0
$LNG['main_method'] = "Метод рейтинга";
$LNG['main_members'] = "Участники";
$LNG['main_menu_rankings'] = "Рейтинг";
$LNG['main_menu_join'] = "Стать участником";
$LNG['main_menu_random'] = "Случайный сайт";
$LNG['main_menu_search'] = "Поиск";
$LNG['main_menu_lost_code'] = "Получить код"; // 5.0
$LNG['main_menu_lost_password'] = "Получить пароль"; // 5.0
$LNG['main_menu_edit'] = "Редактировать установки";
$LNG['main_menu_user_cp'] = "Контрольная панель пользователя"; // 5.0
$LNG['main_featured'] = "Продвинутый участник"; // 4.0.2
$LNG['main_executiontime'] = "Время запуска скрипта"; // 4.0
$LNG['main_queries'] = "SQL запросов"; // 4.0
$LNG['main_powered'] = "С использованием";

// Ranking Table
$LNG['table_stats'] = "Статистика";
$LNG['table_unique'] = "Уникальных";
$LNG['table_total'] = "Всего";
$LNG['table_rank'] = "Позиция";
$LNG['table_title'] = "Название"; // 4.0
$LNG['table_description'] = "Описание"; // 4.0
$LNG['table_movement'] = "Изменение";
$LNG['table_up'] = "Вверх"; // 5.0
$LNG['table_down'] = "Вниз"; // 5.0
$LNG['table_neutral'] = "Без изменений"; // 5.0
$LNG['table_your_site_here'] = "Ваш сайт находится тут"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Оценка и отзыв";
$LNG['rate_message'] = "Поставьте оценку и внесите описание для %s в форму, расположенную ниже."; // 5.2.0
$LNG['rate_rating'] = "Оценка";
$LNG['rate_review'] = "Отзыв  - использование HTML запрещено"; // 5.0
$LNG['rate_thanks'] = "Спасибо за вашу оценку.";
$LNG['rate_error'] = "Вы уже голосовали за этот сайт.";
$LNG['rate_back'] = "Вернуться в статистику";
$LNG['rate_email_admin'] = "В Ваш рейтинг добавили новый обзор сайта."; // 5.1.0

// Search
$LNG['search_header'] = "Поиск";
$LNG['search_off'] = "Поисковая функция выключена.";
$LNG['search_no_sites'] = "По заданным условиям поиска сайтов не обнаружено."; // 5.0
$LNG['search_prev'] = "Предыдущий"; // 3.2.1
$LNG['search_next'] = "Следующий"; // 3.2.1
$LNG['search_displaying_results'] = "Показаны от %s до %s из %s результатов для <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Статистика";
$LNG['stats_info'] = "Информация";
$LNG['stats_member_since'] = "Участник с"; // 5.0
$LNG['stats_rating_avg'] = "Средний балл";
$LNG['stats_rating_num'] = "Количество оценок";
$LNG['stats_rate'] = "Оцените этот сайт";
$LNG['stats_reviews'] = "Отзывы";
$LNG['stats_allreviews'] = "Посмотреть все отзывы"; // 4.0
$LNG['stats_week'] = "Неделя"; // 5.0
$LNG['stats_highest'] = "Лучший показатель"; // 5.0
$LNG['stats_overall'] = "Общая статистика"; // 5.2.0
$LNG['stats_overall_average'] = "Среднее (Последние 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Всего (За все время)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Лучшие %s сайтов"; // 4.0
$LNG['ssi_new'] = "%s новых участников"; // 5.0
$LNG['ssi_all'] = "Все сайты"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Контрольная панель участника"; // 5.0
$LNG['user_cp_login'] = "Войти"; // 5.0
$LNG['user_cp_logout'] = "Выйти"; // 5.0
$LNG['user_cp_welcome'] = "Добро пожаловать в контрольную панель участника.  Используйте ссылки слева для управления Вашим аккаунтом."; // 5.0
$LNG['user_cp_logout_message'] = "Вы вышли из контрольной панели участника."; // 5.0
$LNG['user_cp_login_long'] = "Войдите в систему используя Ваше имя пользователя и пароль или Ваш открытый идентификатор."; // 5.1.0
$LNG['user_cp_openid'] = "Открытый идентификатор"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Невозможно найти сервер с открытым идентификатором для %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Вы должны зарегистрироваться в рейтинге, чтобы получить доступ к контрольной панели пользователя."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "В процессе авторизации произошла ошибка. Попробуйте еще раз."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Вы должны иметь права доступа для этого действия.  Попробуйте еще раз."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Ошибка на сервере: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Вы не имеете доступа к контрольной панели до тех пор, пока ваш сайт не будет проверен. По окончании проверки вы получите сообщение на e-mail."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Разрешить вход в рейтинг новому участнику"; // 5.0
$LNG['a_approve'] = "Разрешить"; // 4.0
$LNG['a_approve_none'] = "Нет участников, ожидающих разрешения."; // 4.0
$LNG['a_approve_done'] = "Участнику разрешено быть в рейтинге."; // 4.0
$LNG['a_approve_dones'] = "Новый участник допущен к рейтингу."; // 4.0
$LNG['a_approve_sel'] = "С выбранными:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Разрешить участие отредактированным участникам"; // 5.2.0
$LNG['a_approve_edited_none'] = "Больше нет участников, ждущих разрешения."; // 5.2.0
$LNG['a_approve_edited_old'] = "Прошлое название и URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Предложенное название и URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Отказать"; // 5.2.0
$LNG['a_approve_edited_done'] = "Изменения были подтвержены."; // 5.2.0
$LNG['a_approve_rejected_done'] = "В изменениях было отказано."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Разрешить новые обзоры"; // 5.0
$LNG['a_approve_rev_none'] = "Нет обзоров, ожидающих разрешения."; // 5.0
$LNG['a_approve_rev_done'] = "Обзор был разрешен."; // 5.0
$LNG['a_approve_rev_dones'] = "Обзоры были разрешены."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Резервная копия базы данных"; // 5.2.0
$LNG['a_backup_warn'] = "Вы создаете резервную копию данных о ваших участниках, статистике и установках. Если в рейтинге много участников, это может занять много времени и создать файл большого размера."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Создание специализированной страницы"; // 5.1.0
$LNG['a_create_page_id'] = "Идентификатор страницы - будет использован в URL и может состоять только из английских букв, цифр, подчеркиваний и тире"; // 5.1.0
$LNG['a_create_page_error_id'] = "Идентификатор страницы может состоять только из английских букв, цифр, подчеркиваний и тире. Вернитесь и исправьте идентификатор страницы."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Страница с таким идентификатором уже существует.  Вернитесь и выберите новый идентификатор."; // 5.1.0
$LNG['a_create_page_created'] = "Страница создана.  Вы можете добавить ссылку на %s вручную в файл wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Удалить участника"; // 5.0
$LNG['a_del_headers'] = "Удалить участников"; // 5.0
$LNG['a_del_done'] = "Участник был удален."; // 5.0
$LNG['a_del_dones'] = "Участники были удалены."; // 5.0
$LNG['a_del_warn'] = "Вы уверены, что хотите удалить %s?"; // 5.0
$LNG['a_del_multi'] = "всего %s участников"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Удалить фильтрующее слово"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Удалить фильтрующие слова"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Фильтрующее слово удалено."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Фильтрующие слова удалены."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Вы уверены, что хотите удалить %s из списка фильтрующих слов?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "это %s слова"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Ошибочный идентификатор фильтрующего слова. Попробуйте еще раз."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Удалить запись из блеклиста"; // 5.2.0
$LNG['a_del_ban_headers'] = "Удалить записи из блеклиста"; // 5.2.0
$LNG['a_del_ban_done'] = "Запись из блеклиста была удалена."; // 5.2.0
$LNG['a_del_ban_dones'] = "Записи из блеклиста была удалены."; // 5.2.0
$LNG['a_del_ban_warn'] = "Вы уверены, что Вы хотите удалить %s из блеклиста?"; //5.2.0
$LNG['a_del_ban_multi'] = "всего %s записей"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Ошибочный идентификатор в блеклисте. Попробуйте еще раз."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Удалить специализированную страницу"; // 5.1.0
$LNG['a_del_page_headers'] = "Удалить специализированные страницы"; // 5.1.0
$LNG['a_del_page_done'] = "Специализированная страница удалена."; // 5.1.0
$LNG['a_del_page_dones'] = "Специализированные страницы удалены."; // 5.1.0
$LNG['a_del_page_warn'] = "Вы уверены, что хотите удалить %s?"; //5.1.0
$LNG['a_del_page_multi'] = "это %s участников"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Неверный идентификатор специализированной страницы. Попробуйте еще раз."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Удалить обзор"; // 5.0
$LNG['a_del_rev_headers'] = "Удалить обзоры"; // 5.0
$LNG['a_del_rev_done'] = "Обзор был удален."; // 5.0
$LNG['a_del_rev_dones'] = "Обзоры были удалены."; // 5.0
$LNG['a_del_rev_warn'] = "Вы уверены, что хотите удалить этот обзор?"; //5.0
$LNG['a_del_rev_warns'] = "Вы уверены, что хотите удалить эти обзоры?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Неправильный ID обзора.  Попробуйте еще раз."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Редактировать участника"; // 5.0
$LNG['a_edit_site_is'] = "Это сайт"; // 4.0
$LNG['a_edit_active'] = "Активен (в рейтинге)"; // 4.0
$LNG['a_edit_inactive'] = "Неактивен (не в рейтинге)"; // 5.0
$LNG['a_edit_edited'] = "Участник был отредактирован.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Редактировать фильтрующее слово"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Фильтрующее слово отредактировано."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Редактировать запись в блеклисте."; // 5.2.0
$LNG['a_edit_ban_edited'] = "Запись в блеклисте отредактирована."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Редактировать специализированную страницу"; // 5.1.0
$LNG['a_edit_page_content'] = "Содержание - Вы можете использовать HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "Страница отредактирована."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Редактировать обзор"; // 5.0
$LNG['a_edit_rev_edited'] = "Обзор был отредактирован.";

// Admin > Email Members
$LNG['a_email_header'] = "Послать Email участникам"; // 5.0
$LNG['a_email_subject'] = "Тема"; // 4.2.0
$LNG['a_email_message'] = "Сообщение"; // 4.2.0
$LNG['a_email_msg_sent'] = "Email был послан %s"; // 5.0
$LNG['a_email_not_sent'] = "Email не может быть послан %s"; // 5.0
$LNG['a_email_sent'] = "%s участникам был послан email."; // 4.2.0
$LNG['a_email_failed'] = "%s участникам email не был послан."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Вы вышли из аккаунта администратора."; // 5.0

// Admin > Main
$LNG['a_header'] = "Администратор"; // 5.0
$LNG['a_main'] = "Добро пожаловать в панель администратора.  Используйте ссылки в левой части страницы для управления Вашим рейтингом."; // 5.0
$LNG['a_main_approve'] = "1 сайт ждет разрешения."; // 5.0
$LNG['a_main_approves'] = "%s сайтов ждут разрешения."; // 5.0
$LNG['a_main_approve_edit'] = "Изменения на одном сайте ждут подтверждения."; // 5.2.0
$LNG['a_main_approve_edits'] = "Изменения на %s сайтах ждут подтверждения."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 обзор ждет разрешения."; // 5.0
$LNG['a_main_approve_revs'] = "%s обзоров ждет разрешения."; // 5.0
$LNG['a_main_your'] = "Ваша версия"; // 5.0
$LNG['a_main_latest'] = "Последняя версия"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP веб сайт</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Управление участниками"; // 5.0
$LNG['a_man_actions'] = "Действия"; // 4.2.0
$LNG['a_man_edit'] = "Редактировать"; // 4.2.0
$LNG['a_man_delete'] = "Удалить"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Выбрать все"; // 5.0
$LNG['a_man_none'] = "Ничего не выбирать"; // 5.0
$LNG['a_man_del_sel'] = "Удалить выбранные"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Фильтр ненормативной лексики"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Введите слово и ниже его замену. К примеру, Вы можете ввести \"мудак\" в поле слово и \"м***к\" в поле замены."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Точное совпадение заменит только полностью совпадающее слово. Глобальное совпадение заменит любую часть слова. К примеру, глобальная замена слова \"сук\" также изменит слова \"барсук\" и \"сукно\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Слово"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Замена"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Совпадение"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Точное"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Глобальное"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Фильтровать слово"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "Слово \"%s\" было добавлено в список ненормативной лексики."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Блеклист"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Чтобы забанить кого-то из вашего рейтинга, заполните форму приведенную ниже. Когда пользователь регистрируется, URL, e-mail, имя пользователя и IP адрес проверяются. Когда сайт редактируется, проверяется URL и e-mail адрес.<br /><br />Блеклист не распространяется на уже зарегистрированных участников."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Точное совпадение будет работать только при полной идентичности текста. Глобальное совпадение будет работать с любым совпадающим фрагментом текста. К примеру, глобальное совпадение http://www.yahoo.com/ будет работать для любых страниц, содержащих http://www.yahoo.com/ в URL, а точное совпадение текста http://www.yahoo.com/ повлияет только на титульную страницу."; // 5.2.0
$LNG['a_man_ban_string'] = "Строка"; // 5.2.0
$LNG['a_man_ban_field'] = "Поле"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" был добавлен в блеклист."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Управление специализированными страницами"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Управление обзорами сайтов"; // 5.0
$LNG['a_man_rev_enter'] = "Чтобы редактировать обзор сайта, введите имя пользователя."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Обзор"; // 5.0
$LNG['a_man_rev_date'] = "Дата"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Меню";
$LNG['a_menu_main'] = "В начало"; // 5.0
$LNG['a_menu_approve'] = "Проверить новых участников";
$LNG['a_menu_approve_edits'] = "Подтвердить отредактированных участников"; // 5.2.0
$LNG['a_menu_manage'] = "Управление участниками"; // 4.2.0
$LNG['a_menu_settings'] = "Изменить настройки"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Фильтр ненормативной лексики"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Блеклист"; // 5.2.0
$LNG['a_menu_backup'] = "Резервная копия базы данных"; // 5.2.0
$LNG['a_menu_skins'] = "Шаблоны и категории"; // 5.0
$LNG['a_menu_approve_reviews'] = "Проверить новые обзоры"; // 5.0
$LNG['a_menu_manage_reviews'] = "Редактировать обзоры"; // 5.0
$LNG['a_menu_email'] = "Послать email участникам";
$LNG['a_menu_delete_review'] = "Удалить обзор";
$LNG['a_menu_logout'] = "Выйти";
$LNG['a_menu_delete'] = "Удалить участника";
$LNG['a_menu_edit'] = "Редактировать участника";
$LNG['a_menu_create_page'] = "Создание специализированной страницы"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Управление специализированными страницами"; // 5.1.0
$LNG['a_header_members'] = "Участники"; // 5.0
$LNG['a_header_settings'] = "Установки"; // 5.0
$LNG['a_header_tools'] = "Инструменты"; // 5.2.0
$LNG['a_header_reviews'] = "Описания"; // 5.0
$LNG['a_header_pages'] = "Специализированные страницы"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Изменить настройки";
$LNG['a_s_help'] = "Помощь"; // 5.1.0

$LNG['a_s_general'] = "Основные настройки";
$LNG['a_s_admin_password'] = "Пароль администратора";
$LNG['a_s_list_name'] = "Название Вашего рейтинга";
$LNG['a_s_list_url'] = "URL директории, в которой установлен рейтинг";
$LNG['a_s_default_language'] = "Основной язык";
$LNG['a_s_your_email'] = "Ваш email адрес";

$LNG['a_s_sql'] = "Настройки базы данных";
$LNG['a_s_sql_type'] = "Тип базы данных"; // 4.1.0
$LNG['a_s_sql_host'] = "Имя хоста";
$LNG['a_s_sql_database'] = "Название базы";
$LNG['a_s_sql_username'] = "Имя пользователя";
$LNG['a_s_sql_password'] = "Пароль";

$LNG['a_s_ranking'] = "Настройки рейтинга";
$LNG['a_s_num_list'] = "Число участников на одной странице"; // 5.0
$LNG['a_s_ranking_period'] = "Период рейтинга"; // 5.0
$LNG['a_s_ranking_method'] = "Метод рейтинга"; // 5.0
$LNG['a_s_ranking_average'] = "Рейтинг по средним значениям или по %s"; // 5.0
$LNG['a_s_featured_member'] = 'Продвинутый участник - добавьте {$featured_member} в файл wrapper.html после включения этой установки.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Количество участников, которые отбражаются в виде _top";
$LNG['a_s_ad_breaks'] = "Показывать рекламу после этих значений (разделяйте запятыми) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Заполните чистые строки сообщениями о \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Настройки участников";
$LNG['a_s_active_default'] = "Требуется ли разрешение новому участнику перед тем, как он начнет показываться в рейтинге";
$LNG['a_s_active_default_review'] = "Нужно ли проверять новые обзоры перед тем, как они станут доступны всем";
$LNG['a_s_delete_after'] = "После скольки дней бездействия удалять неактивных участников (если выбрать 0, удаляться не будут)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Отправлять e-mail администратору при регистрации нового участника"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Отправлять e-mail администратору при получении нового обзора"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Максимальная ширина баннера участника (если выбрать 0, ограничений не будет)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Максимальная высота баннера участника (если выбрать 0, ограничений не будет)"; // 4.2.0
$LNG['a_s_default_banner'] = "Баннер по умолчанию для тех участников, кто не загрузил свой";

$LNG['a_s_button'] = "Настройки кнопок рейтинга";
$LNG['a_s_ranks_on_buttons'] = "Значения на кнопках -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Кнопка со статистикой"; // 4.2.0
$LNG['a_s_button_url'] = "При выборе \"Да\" или \"Нет\" - для показа на сайтах участников будет выбран URL кнопки по умолчанию"; // 4.0
$LNG['a_s_button_dir'] = "Если выбрано \"Да\" - URL директории, в которой находится кнопка"; // 4.0
$LNG['a_s_button_ext'] = "Если выбрано \"Да\" - расширение файла кнопки (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Если выбрано \"Да\" - число кнопок, которое Вы сделаете"; // 4.0
$LNG['a_s_google_friendly_links'] = "Список похожий на выдачу Google - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Шлюзовая страница для перенаправления накрутчиков";
$LNG['a_s_captcha'] = "Проверка на ввод символов при регистрации (защита от спаммеров) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Вопрос и ответ для распознавания спама (если оставить пустым, блокировка отключится) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Прочие настройки";
$LNG['a_s_search'] = "Поиск";
$LNG['a_s_time_offset'] = "Сдвиг времени рейтинга по отношению к времени сервера (в часах)";

$LNG['a_s_on'] = "Вкл";
$LNG['a_s_off'] = "Выкл";
$LNG['a_s_days'] = "Дней";
$LNG['a_s_months'] = "Месяцев";
$LNG['a_s_weeks'] = "Недель"; // 4.2.0
$LNG['a_s_yes'] = "Да";
$LNG['a_s_no'] = "Нет";
$LNG['a_s_answer'] = "Ответ"; // 5.2.0

$LNG['a_s_updated'] = "Ваши настройки были обновлены.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Шаблоны и категории"; // 5.0
$LNG['a_skins_default'] = "Шаблон по умолчанию"; // 5.0
$LNG['a_skins_set_default'] = "Установить шаблон по умолчанию"; // 5.0
$LNG['a_skins_anon'] = "Anonymous"; // 5.0
$LNG['a_skins_default_done'] = "Шаблон по умолчанию был выбран."; // 5.0
$LNG['a_skins_categories_done'] = "Шаблон для категории был выбран."; // 5.0
$LNG['a_skins_new_category_done'] = "Новая категория создана."; // 5.0
$LNG['a_skins_delete_done'] = "Категория была удалена."; // 5.0
$LNG['a_skins_delete_error'] = "Категория не может быть удалена, поскольку в рейтинге должна быть хоть одна категория."; // 5.1.0
$LNG['a_skins_edit_done'] = "Категория была отредактирована."; // 5.0
$LNG['a_skins_invalid_skin'] = "Неправильный шаблон: %s. Попробуйте еще раз."; // 5.0
$LNG['a_skins_categories'] = "Категории"; // 5.0
$LNG['a_skins_new_category'] = "Создать новую категорию"; // 5.0
$LNG['a_skins_set_skins'] = "Выбрать шаблон для категории"; // 5.0
$LNG['a_skins_edit_category'] = "Редактировать категорию"; // 5.0
$LNG['a_skins_category_name'] = "Название категории"; // 5.0
$LNG['a_skins_diff_skins'] = "Если Вы хотите выбрать разные шаблоны для разных директорий, выберите их ниже."; // 5.0
?>
