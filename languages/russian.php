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
$translation = 'Russian';
$translator_name = 'Andrey Kanevsky';
$translator_email = 'admin@americaru.com';
$translator_url = 'http://www.americaru.com/';

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

// Edit Account
$LNG['edit_header'] = "Мои данные";
$LNG['edit_info_edited'] = "Изменения на вашем аккаунте успешно сохранены.";
$LNG['edit_password_blank'] = "Оставьте это поле пустым, чтобы сохранить текущий пароль."; // 4.0

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
$LNG['upgrade_error_version'] = "Обновление возможно только для версии Aardvark Topsites PHP 4.1.0 или выше.";
$LNG['upgrade_done'] = "Ваша копия Topsites рейтинга была обновлена. Немедленно удалите директорию /install.";

// Join
$LNG['join_header'] = "Зарегистрировать сайт в рейтинге";
$LNG['join_enter_text'] = "Введите текст, который показан на изображении ниже:"; // 4.2.2
$LNG['join_user'] = "Участник"; // 5.0
$LNG['join_website'] = "Веб сайт"; // 5.0
$LNG['join_error_forgot'] = "Вы забыли:";
$LNG['join_error_username'] = "Имя пользователя может состоять только из: букв, цифр, подчеркиваний и тире."; // 5.0
$LNG['join_error_username_duplicate'] = "Используйте другое имя пользователя, это уже занято."; // 5.0
$LNG['join_error_url'] = "Введите правильный URL.";
$LNG['join_error_email'] = "Введите корректный e-mail адрес.";
$LNG['join_error_title'] = "Введите заголовок Вашего сайта.";
$LNG['join_error_password'] = "Введите пароль.";
$LNG['join_error_urlbanner'] = "Введите адрес существующего баннера. Не заполняйте это поле, если у Вас нет баннера. Он должен быть меньше"; // 4.0
$LNG['join_error_back'] = "Вернитесь и исправьте ошибки.";
$LNG['join_error_time'] = "Не обновляйте страницу с подтверждением регистрации."; // 4.2.0
$LNG['join_error_captcha'] = "Значение, которое вы ввели, не совпадает с тем, что написано на изображении."; // 4.2.2
$LNG['join_thanks'] = "Спасибо за регистрацию! Внесите этот код на ваш сайт и он появится в рейтинге.";
$LNG['join_change_warning'] = "Изменения в коде могут нарушить его работоспособность.";
$LNG['join_welcome'] = "Добро пожаловать в %s";
$LNG['join_welcome_admin'] = "A new member has joined your topsites list.";

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

// Rate and Review
$LNG['rate_header'] = "Оценка и отзыв";
$LNG['rate_rating'] = "Оценка";
$LNG['rate_review'] = "Отзыв  - использование HTML запрещено"; // 5.0
$LNG['rate_thanks'] = "Спасибо за вашу оценку.";
$LNG['rate_error'] = "Вы уже голосовали за этот сайт.";
$LNG['rate_back'] = "Вернуться в статистику";

// Search
$LNG['search_header'] = "Поиск";
$LNG['search_off'] = "Поисковая функция выключена.";
$LNG['search_for'] = "Вы искали: ";
$LNG['search_no_sites'] = "По заданным условиям поиска сайтов не обнаружено."; // 5.0
$LNG['search_prev'] = "Предыдущий"; // 3.2.1
$LNG['search_next'] = "Следующий"; // 3.2.1

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

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Разрешить вход в рейтинг новому участнику"; // 5.0
$LNG['a_approve'] = "Разрешить"; // 4.0
$LNG['a_approve_none'] = "Нет участников, ожидающих разрешения."; // 4.0
$LNG['a_approve_done'] = "Участнику разрешено быть в рейтинге."; // 4.0
$LNG['a_approve_dones'] = "Новый участник допущен к рейтингу."; // 4.0
$LNG['a_approve_sel'] = "С выбранными:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Разрешить новые обзоры"; // 5.0
$LNG['a_approve_rev_none'] = "Нет обзоров, ожидающих разрешения."; // 5.0
$LNG['a_approve_rev_done'] = "Обзор был разрешен."; // 5.0
$LNG['a_approve_rev_dones'] = "Обзоры были разрешены."; // 5.0

// Admin > Delete Member
$LNG['a_del_header'] = "Удалить участника"; // 5.0
$LNG['a_del_headers'] = "Удалить участников"; // 5.0
$LNG['a_del_done'] = "Участник был удален."; // 5.0
$LNG['a_del_dones'] = "Участники были удалены."; // 5.0
$LNG['a_del_warn'] = "Вы уверены, что хотите удалить %s?"; // 5.0
$LNG['a_del_multi'] = "всего %s участников"; //5.0

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
$LNG['a_main_approve_rev'] = "1 обзор ждет разрешения."; // 5.0
$LNG['a_main_approve_revs'] = "%s обзоров ждет разрешения."; // 5.0
$LNG['a_main_your'] = "Ваша версия"; // 5.0
$LNG['a_main_latest'] = "Последняя версия"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP веб сайт</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Управление участниками"; // 5.0
$LNG['a_man_actions'] = "Действия"; // 4.2.0
$LNG['a_man_edit'] = "Редактировать"; // 4.2.0
$LNG['a_man_delete'] = "Удалить"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Выбрать все"; // 5.0
$LNG['a_man_none'] = "Ничего не выбирать"; // 5.0
$LNG['a_man_del_sel'] = "Удалить выбранные"; // 5.0

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
$LNG['a_menu_manage'] = "Управление участниками"; // 4.2.0
$LNG['a_menu_settings'] = "Изменить настройки"; // 5.0
$LNG['a_menu_skins'] = "Шаблоны и категории"; // 5.0
$LNG['a_menu_approve_reviews'] = "Проверить новые обзоры"; // 5.0
$LNG['a_menu_manage_reviews'] = "Редактировать обзоры"; // 5.0
$LNG['a_menu_email'] = "Послать email участникам";
$LNG['a_menu_delete_review'] = "Удалить обзор";
$LNG['a_menu_logout'] = "Выйти";
$LNG['a_menu_delete'] = "Удалить участника";
$LNG['a_menu_edit'] = "Редактировать участника";
$LNG['a_header_members'] = "Участники"; // 5.0
$LNG['a_header_settings'] = "Установки"; // 5.0
$LNG['a_header_reviews'] = "Описания"; // 5.0

// Admin > Settings
$LNG['a_s_header'] = "Изменить настройки";
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
$LNG['a_s_ad_breaks'] = "Показывать рекламные вставки после следующих значений (разделить запятыми)";

$LNG['a_s_member'] = "Настройки участников";
$LNG['a_s_active_default'] = "Требуется ли разрешение новому участнику перед тем, как он начнет показываться в рейтинге";
$LNG['a_s_active_default_review'] = "Нужно ли проверять новые обзоры перед тем, как они станут доступны всем";
$LNG['a_s_delete_after'] = "После скольки дней бездействия удалять неактивных участников (если выбрать 0, удаляться не будут)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Посылать Вам email, когда новый участник зарегистрировался";
$LNG['a_s_max_banner_width'] = "Максимальная ширина баннера участника (если выбрать 0, ограничений не будет)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Максимальная высота баннера участника (если выбрать 0, ограничений не будет)"; // 4.2.0
$LNG['a_s_default_banner'] = "Баннер по умолчанию для тех участников, кто не загрузил свой";

$LNG['a_s_button'] = "Настройки кнопок рейтинга";
$LNG['a_s_ranks_on_buttons'] = "Рейтинг на кнопках - для подробностей прочитайте <a href=\"http://www.aardvarkind.com/topsitesphp/manual/\">руководство</a>.  Выбирайте \"Кнопка со статистикой\" только, если Вы прочитали этот раздел руководства.  Если Вы выбрали \"Кнопка со статистикой\", значения всех остальных полей не окажут никакого воздействия на настройки."; // 4.2.0
$LNG['a_s_stat_buttons'] = "Кнопка со статистикой"; // 4.2.0
$LNG['a_s_button_url'] = "При выборе \"Да\" или \"Нет\" - для показа на сайтах участников будет выбран URL кнопки по умолчанию"; // 4.0
$LNG['a_s_button_dir'] = "Если выбрано \"Да\" - URL директории, в которой находится кнопка"; // 4.0
$LNG['a_s_button_ext'] = "Если выбрано \"Да\" - расширение файла кнопки (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Если выбрано \"Да\" - число кнопок, которое Вы сделаете"; // 4.0

$LNG['a_s_other'] = "Прочие настройки";
$LNG['a_s_search'] = "Поиск";
$LNG['a_s_time_offset'] = "Сдвиг времени рейтинга по отношению к времени сервера (в часах)";
$LNG['a_s_gateway'] = "Шлюзовая страница для перенаправления накрутчиков";
$LNG['a_s_captcha'] = "Проверка по вводу символов с изображения - защита против спамеров"; // 4.2.2

$LNG['a_s_on'] = "Вкл";
$LNG['a_s_off'] = "Выкл";
$LNG['a_s_days'] = "Дней";
$LNG['a_s_months'] = "Месяцев";
$LNG['a_s_weeks'] = "Недель"; // 4.2.0
$LNG['a_s_yes'] = "Да";
$LNG['a_s_no'] = "Нет";

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
$LNG['a_skins_edit_done'] = "Категория была отредактирована."; // 5.0
$LNG['a_skins_invalid_skin'] = "Неправильный шаблон: %s. Попробуйте еще раз."; // 5.0
$LNG['a_skins_categories'] = "Категории"; // 5.0
$LNG['a_skins_new_category'] = "Создать новую категорию"; // 5.0
$LNG['a_skins_set_skins'] = "Выбрать шаблон для категории"; // 5.0
$LNG['a_skins_edit_category'] = "Редактировать категорию"; // 5.0
$LNG['a_skins_category_name'] = "Название категории"; // 5.0
$LNG['a_skins_diff_skins'] = "Если Вы хотите выбрать разные шаблоны для разных директорий, выберите их ниже."; // 5.0
?>
