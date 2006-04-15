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
$translation = 'Japanese';
$translator_name = 'Mitsuhiro Yoshida';
$translator_email = 'mits@mitstek.com';
$translator_url = 'http://mitstek.com/';

// Global
$LNG['g_form_submit_short'] = "Go";
$LNG['g_username'] = "ユーザ名";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "タイトル";
$LNG['g_description'] = "説明";
$LNG['g_category'] = "カテゴリ"; // 4.1.0
$LNG['g_email'] = "メールアドレス";
$LNG['g_banner_url'] = "バナーURL";
$LNG['g_password'] = "パスワード";
$LNG['g_average'] = "平均";
$LNG['g_today'] = "本日";
$LNG['g_yesterday'] = "昨日";
$LNG['g_daily'] = "毎日"; // 5.0
$LNG['g_this_month'] = "今月"; // 5.0
$LNG['g_last_month'] = "先月"; // 5.0
$LNG['g_monthly'] = "毎月"; // 5.0
$LNG['g_this_week'] = "今週"; // 5.0
$LNG['g_last_week'] = "先週"; // 5.0
$LNG['g_weekly'] = "毎週"; // 5.0
$LNG['g_pv'] = 'ページビュー'; // 5.0
$LNG['g_overall'] = '全体'; // 5.0
$LNG['g_in'] = 'In'; // 5.0
$LNG['g_out'] = 'Out'; // 5.0
$LNG['g_unq_pv'] = "ユニークPv"; // 5.0
$LNG['g_tot_pv'] = "合計Pv"; // 5.0
$LNG['g_unq_in'] = "ユニークIn"; // 5.0
$LNG['g_tot_in'] = "合計In"; // 5.0
$LNG['g_unq_out'] = "ユニークOut"; // 5.0
$LNG['g_tot_out'] = "合計Out"; // 5.0
$LNG['g_invalid_u_or_p'] = "ユーザ名またはパスワードが違います。もう一度お試しください。"; // 5.0
$LNG['g_invalid_u'] = "ユーザ名が違います。もう一度お試しください。"; // 5.0
$LNG['g_invalid_p'] = "パスワードが違います。もう一度お試しください。"; // 5.0
$LNG['g_session_expired'] = "あなたのセッション期限が切れました。もう一度お試しください。"; // 5.0
$LNG['g_error'] = "エラー"; // 5.0
$LNG['g_delete_install'] = "セキュリティ上の理由で、スクリプトを動作させる前に、インストールディレクトリを削除してください。"; // 5.0

// Edit Account
$LNG['edit_header'] = "アカウントの編集";
$LNG['edit_info_edited'] = "あなたのアカウントが正常に編集されました。";
$LNG['edit_password_blank'] = "現在のパスワードを使用するには、空白のままにしてください。"; // 4.0

// Gateway Page
$LNG['gateway_charset'] = "UTF-8";
$LNG['gateway_header'] = "Topsitesゲートウェイページ";
$LNG['gateway_text'] = "ヒットに対する不正行為を防ぐため、ゲートウェイページが設定されました。下記のリンクをクリックして、Topsitesリストに入ってください。";
$LNG['gateway_vote'] = "入って投票する";
$LNG['gateway_no_vote'] = "投票無しで入る"; // 5.0

// Install
$LNG['install_header'] = "インストール";
$LNG['install_welcome'] = "ようこそ Aardvark Topsites PHP 5 へ。スクリプトをインストールするには、下記のフォームに入力してください。";
$LNG['install_sql_prefix'] = "テーブル接頭辞 - 同じデータベースで2つ以上のTopsitesリストを使用している場合に変更してください。";
$LNG['install_error_chmod'] = "settings_sql.php を更新できませんでした。settings_sql.php にCHMOD 666したか確認してください。";
$LNG['install_error_sql'] = "SQLデータベースに接続できませんでした。戻ってSQL設定を確認してください。";
$LNG['install_done'] = "あなたのTopsitesリストがインストールされました。このディレクトリを削除してください。";
$LNG['install_your'] = "あなたのTopsitesリスト";
$LNG['install_admin'] = "管理";
$LNG['install_manual'] = "マニュアル";
$LNG['upgrade_header'] = "アップグレード";
$LNG['upgrade_welcome'] = "ようこそ Aardvark Topsites PHP 5 へ。アップグレードする前に、忘れずにデータをバックアップしてください。";
$LNG['upgrade_error_version'] = "アップグレードは Aardvark Topsites PHP 4.1.0 またはそれ以上のバージョンをサポートしています。";
$LNG['upgrade_done'] = "あなたのTopsitesリストがアップグレードされました。このディレクトリを削除してください。";

// Join
$LNG['join_header'] = "ユーザ登録";
$LNG['join_enter_text'] = "下記に表示されている画像の文字を入力してください:"; // 4.2.2
$LNG['join_user'] = "ユーザ"; // 5.0
$LNG['join_website'] = "ウェブサイト"; // 5.0
$LNG['join_error_forgot'] = "エラー:";
$LNG['join_error_username'] = "有効なユーザ名を入力してください: 文字、数字、アンダースコアおよびダッシュのみを使用してください。"; // 5.0
$LNG['join_error_username_duplicate'] = "有効なユーザ名を入力してください: あなたのユーザ名はすでに使用されています。"; // 5.0
$LNG['join_error_url'] = "有効なURLを入力してください。";
$LNG['join_error_email'] = "有効なメールアドレスを入力してください。";
$LNG['join_error_title'] = "あなたのウェブサイトのタイトルを入力してください。";
$LNG['join_error_password'] = "パスワードを入力してください。";
$LNG['join_error_urlbanner'] = "有効なバナーのURLを入力してください。バナーが無い場合は、空白にしてください。バナーサイズ:"; // 4.0
$LNG['join_error_back'] = "戻ってこれらのエラーを修正してください。";
$LNG['join_error_time'] = "ユーザ登録確認ページを更新しないでください。"; // 4.2.0
$LNG['join_error_captcha'] = "あなたが入力した文字はイメージと合致しません。"; // 4.2.2
$LNG['join_thanks'] = "ご登録ありがとうございます! ランキングのために下記のコードをあなたのサイトに設置してください。";
$LNG['join_change_warning'] = "コードを変更した場合、動作しない恐れがあります。";
$LNG['join_welcome'] = "%s へようこそ";
$LNG['join_welcome_admin'] = "あなたのTopsitesリストに新しいメンバーがユーザ登録しました。";

// Link Code
$LNG['link_code_header'] = "リンクコード"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "パスワード紛失"; // 5.0
$LNG['lost_pw_forgot'] = "パスワードを忘れましたか?"; // 5.0
$LNG['lost_pw_get'] = "パスワードの取得"; // 5.0
$LNG['lost_pw_emailed'] = "詳細は、あなたに送信されたメールをご覧ください。"; // 5.0
$LNG['lost_pw_email'] = "あなたのサイトの新しいパスワードを取得するには、次のURLへアクセスしてください:"; // 5.0
$LNG['lost_pw_new'] = "新しいパスワードを入力してください。"; // 5.0
$LNG['lost_pw_set_new'] = "新しいパスワードを設定"; // 5.0
$LNG['lost_pw_finish'] = "あなたが選択した新しいパスワードが設定されました。"; // 5.0

// Main Page
$LNG['main_header'] = "ランキング"; // 5.0
$LNG['main_all'] = "すべてのサイト"; // 4.2.0
$LNG['main_method'] = "ランキング方法";
$LNG['main_members'] = "メンバー";
$LNG['main_menu_rankings'] = "ランキング";
$LNG['main_menu_join'] = "ユーザ登録";
$LNG['main_menu_random'] = "ランダムメンバー";
$LNG['main_menu_search'] = "検索";
$LNG['main_menu_lost_code'] = "コードの紛失"; // 5.0
$LNG['main_menu_lost_password'] = "パスワードの紛失"; // 5.0
$LNG['main_menu_edit'] = "メンバー情報の編集";
$LNG['main_menu_user_cp'] = "ユーザコントロールパネル"; // 5.0
$LNG['main_featured'] = "特別メンバー"; // 4.0.2
$LNG['main_executiontime'] = "スクリプト実行時間"; // 4.0
$LNG['main_queries'] = "SQLクエリー"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "ステータス";
$LNG['table_unique'] = "ユニーク";
$LNG['table_total'] = "合計";
$LNG['table_rank'] = "ランク";
$LNG['table_title'] = "タイトル"; // 4.0
$LNG['table_description'] = "説明"; // 4.0
$LNG['table_movement'] = "活動";
$LNG['table_up'] = "Up"; // 5.0
$LNG['table_down'] = "Down"; // 5.0
$LNG['table_neutral'] = "ニュートラル"; // 5.0

// Rate and Review
$LNG['rate_header'] = "レーティングおよびレビュー";
$LNG['rate_rating'] = "レーティング";
$LNG['rate_review'] = "レビュー - HTMLは許可されません。"; // 5.0
$LNG['rate_thanks'] = "レーティングありがとうございます。";
$LNG['rate_error'] = "あなたはすでにこのサイトをレーティングしています。";
$LNG['rate_back'] = "ステータスに戻る";

// Search
$LNG['search_header'] = "検索";
$LNG['search_off'] = "検索機能は停止されています。";
$LNG['search_for'] = "検索キーワード:";
$LNG['search_no_sites'] = "該当するサイトは見つかりませんでした。"; // 5.0
$LNG['search_prev'] = "前へ"; // 3.2.1
$LNG['search_next'] = "次へ"; // 3.2.1

// Stats
$LNG['stats_header'] = "ステータス";
$LNG['stats_info'] = "情報";
$LNG['stats_member_since'] = "メンバー登録日"; // 5.0
$LNG['stats_rating_avg'] = "平均レーティング";
$LNG['stats_rating_num'] = "レーティング数";
$LNG['stats_rate'] = "このサイトをレーティングおよびレビュー";
$LNG['stats_reviews'] = "レビュー";
$LNG['stats_allreviews'] = "すべてのレビューを表示"; // 4.0
$LNG['stats_week'] = "週"; // 5.0
$LNG['stats_highest'] = "最高"; // 5.0

// ssi.php
$LNG['ssi_top'] = "トップ %s サイト"; // 4.0
$LNG['ssi_new'] = "最新メンバー数 %s"; // 5.0
$LNG['ssi_all'] = "すべてのサイト"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "ユーザコントロールパネル"; // 5.0
$LNG['user_cp_login'] = "ログイン"; // 5.0
$LNG['user_cp_logout'] = "ログアウト"; // 5.0
$LNG['user_cp_welcome'] = "ようこそユーザコントロールパネルへ。あなたのアカウントを管理するには、左側のリンクを使用してください。"; // 5.0
$LNG['user_cp_logout_message'] = "ユーザコントロールパネルをログアウトしました。"; // 5.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "新しいメンバーの承認"; // 5.0
$LNG['a_approve'] = "承認"; // 4.0
$LNG['a_approve_none'] = "承認が必要なメンバーはいません。"; // 4.0
$LNG['a_approve_done'] = "メンバーが承認されました。"; // 4.0
$LNG['a_approve_dones'] = "メンバーが承認されました。"; // 4.0
$LNG['a_approve_sel'] = "選択したものを:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "新しいレビューの承認"; // 5.0
$LNG['a_approve_rev_none'] = "承認が必要なレビューはありません。"; // 5.0
$LNG['a_approve_rev_done'] = "レビューが承認されました。"; // 5.0
$LNG['a_approve_rev_dones'] = "レビューが承認されました。"; // 5.0

// Admin > Delete Member
$LNG['a_del_header'] = "メンバーの削除"; // 5.0
$LNG['a_del_headers'] = "メンバーの削除"; // 5.0
$LNG['a_del_done'] = "メンバーが削除されました。"; // 5.0
$LNG['a_del_dones'] = "メンバーが削除されました。"; // 5.0
$LNG['a_del_warn'] = "本当に %s を削除してもよろしいですか?"; // 5.0
$LNG['a_del_multi'] = "%s 名のメンバーを削除"; //5.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "レビューの削除"; // 5.0
$LNG['a_del_rev_headers'] = "レビューの削除"; // 5.0
$LNG['a_del_rev_done'] = "レビューが削除されました。"; // 5.0
$LNG['a_del_rev_dones'] = "レビューが削除されました。"; // 5.0
$LNG['a_del_rev_warn'] = "本当にこのレビューを削除してもよろしいですか?"; //5.0
$LNG['a_del_rev_warns'] = "本当にこのレビューを削除してもよろしいですか?"; //5.0
$LNG['a_del_rev_invalid_id'] = "レビューIDが正しくありません。もう一度お試しください。"; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "メンバーの編集"; // 5.0
$LNG['a_edit_site_is'] = "このサイトは"; // 4.0
$LNG['a_edit_active'] = "アクティブ ( リスト掲載 )"; // 4.0
$LNG['a_edit_inactive'] = "インアクティブ ( リスト掲載無し )"; // 5.0
$LNG['a_edit_edited'] = "メンバーが編集されました。";

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "レビューの編集"; // 5.0
$LNG['a_edit_rev_edited'] = "レビューが編集されました。";

// Admin > Email Members
$LNG['a_email_header'] = "メンバーにメール送信"; // 5.0
$LNG['a_email_subject'] = "題名"; // 4.2.0
$LNG['a_email_message'] = "メッセージ"; // 4.2.0
$LNG['a_email_msg_sent'] = "メールが %s に送信されました。"; // 5.0
$LNG['a_email_not_sent'] = "メールが %s に送信されませんでした。"; // 5.0
$LNG['a_email_sent'] = "%s のメンバーにメールが送信されました。"; // 4.2.0
$LNG['a_email_failed'] = "%s のメンバーにメールが送信されませんでした。"; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "管理ページをログアウトしました。"; // 5.0

// Admin > Main
$LNG['a_header'] = "管理ページ"; // 5.0
$LNG['a_main'] = "管理ページへようこそ。あなたのTopsitesリストを管理するには、左側のリンクを使用してください。"; // 5.0
$LNG['a_main_approve'] = "承認待ちのサイトが 1 サイトあります。"; // 5.0
$LNG['a_main_approves'] = "承認待ちのサイトが %s サイトあります。"; // 5.0
$LNG['a_main_approve_rev'] = "承認待ちのレビューが 1 件あります。"; // 5.0
$LNG['a_main_approve_revs'] = "承認待ちのレビューが %s 件あります。"; // 5.0
$LNG['a_main_your'] = "あなたのバージョン"; // 5.0
$LNG['a_main_latest'] = "最新バージョン"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "メンバーの管理"; // 5.0
$LNG['a_man_actions'] = "処理"; // 4.2.0
$LNG['a_man_edit'] = "編集"; // 4.2.0
$LNG['a_man_delete'] = "削除"; // 4.2.0
$LNG['a_man_email'] = "メール"; // 4.2.0
$LNG['a_man_all'] = "すべてを選択"; // 5.0
$LNG['a_man_none'] = "選択解除"; // 5.0
$LNG['a_man_del_sel'] = "選択したものを削除"; // 5.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "レビューの管理"; // 5.0
$LNG['a_man_rev_enter'] = "サイトのレビューを管理するには、下記にメンバーのユーザ名を入力してください。"; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "レビュー"; // 5.0
$LNG['a_man_rev_date'] = "登録日時"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "メニュー";
$LNG['a_menu_main'] = "メイン"; // 5.0
$LNG['a_menu_approve'] = "新しいメンバーの承認";
$LNG['a_menu_manage'] = "メンバーの管理"; // 4.2.0
$LNG['a_menu_settings'] = "詳細設定"; // 5.0
$LNG['a_menu_skins'] = "スキンおよびカテゴリ"; // 5.0
$LNG['a_menu_approve_reviews'] = "新しいレビューの承認"; // 5.0
$LNG['a_menu_manage_reviews'] = "レビューの管理"; // 5.0
$LNG['a_menu_email'] = "メンバーにメール送信";
$LNG['a_menu_delete_review'] = "レビューの削除";
$LNG['a_menu_logout'] = "ログアウト";
$LNG['a_menu_delete'] = "メンバーの削除";
$LNG['a_menu_edit'] = "メンバーの編集";
$LNG['a_header_members'] = "メンバー"; // 5.0
$LNG['a_header_settings'] = "設定"; // 5.0
$LNG['a_header_reviews'] = "レビュー"; // 5.0

// Admin > Settings
$LNG['a_s_header'] = "詳細設定";
$LNG['a_s_general'] = "一般設定";
$LNG['a_s_admin_password'] = "管理者パスワード";
$LNG['a_s_list_name'] = "あなたのTopsitesリストのタイトル";
$LNG['a_s_list_url'] = "TopsitesディレクトリのURL";
$LNG['a_s_default_language'] = "デフォルト言語";
$LNG['a_s_your_email'] = "あなたのメールアドレス";

$LNG['a_s_sql'] = "SQL設定";
$LNG['a_s_sql_type'] = "データベースタイプ"; // 4.1.0
$LNG['a_s_sql_host'] = "ホスト";
$LNG['a_s_sql_database'] = "データベース";
$LNG['a_s_sql_username'] = "ユーザ名";
$LNG['a_s_sql_password'] = "パスワード";

$LNG['a_s_ranking'] = "ランキング設定";
$LNG['a_s_num_list'] = "1ページあたりのメンバー数"; // 5.0
$LNG['a_s_ranking_period'] = "ランキング期間"; // 5.0
$LNG['a_s_ranking_method'] = "ランキング方法"; // 5.0
$LNG['a_s_ranking_average'] = "%s の平均ランキング"; // 5.0
$LNG['a_s_featured_member'] = '特別メンバー - この設定を「On」にした後、wrapper.htmlに {$featured_member} を追加してください。'; // 4.1.0
$LNG['a_s_top_skin_num'] = "_top skinに使用するメンバー数";
$LNG['a_s_ad_breaks'] = "これらのランク数の後にブレーク広告を表示 ( カンマで分離 )";

$LNG['a_s_member'] = "メンバー設定";
$LNG['a_s_active_default'] = "リスト表示される前に新しいメンバーの承認が必要";
$LNG['a_s_active_default_review'] = "リスト表示される前に新しいレビューの承認が必要";
$LNG['a_s_delete_after'] = "次の日数で未承認のメンバーを削除する ( 無効の場合 0 を設定してください )"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "新しいメンバーが登録された場合、あなたにメール通知";
$LNG['a_s_max_banner_width'] = "メンバーのバナーの最大幅 ( 無効の場合 0 を設定してください )"; // 4.2.0
$LNG['a_s_max_banner_height'] = "メンバーのバナーの最大高 ( 無効の場合 0 を設定してください )"; // 4.2.0
$LNG['a_s_default_banner'] = "バナーを提供しないメンバーのためのデフォルトバナー";

$LNG['a_s_button'] = "ボタン設定";
$LNG['a_s_ranks_on_buttons'] = "ランクボタン -  詳細は <a href=\"http://www.aardvarkind.com/topsitesphp/manual/\">マニュアル</a>をご覧ください。あなたがマニュアルを読んだ場合のみ、統計ボタンを選択してください。統計ボタンを選択した場合、このセクションの他の設定は有効となりません。"; // 4.2.0
$LNG['a_s_stat_buttons'] = "統計ボタン"; // 4.2.0
$LNG['a_s_button_url'] = "「Yes/No」の場合 - メンバーサイトに表示したいデフォルトボタンのURL"; // 4.0
$LNG['a_s_button_dir'] = "「Yes」の場合 - ボタンを入れたディレクトリのURL"; // 4.0
$LNG['a_s_button_ext'] = "「Yes」の場合 - ボタンの拡張子 ( gif、png、jpg等 )"; // 4.0
$LNG['a_s_button_num'] = "「Yes」の場合 - 作成したボタン数"; // 4.0

$LNG['a_s_other'] = "他の設定";
$LNG['a_s_search'] = "検索";
$LNG['a_s_time_offset'] = "あなたのサーバのタイムオフセット ( 時間 )";
$LNG['a_s_gateway'] = "ヒットに対する不正行為を防ぐゲートウェイページの使用";
$LNG['a_s_captcha'] = "ユーザ登録に関する文字確認 - スパムに対するセキュリティ"; // 4.2.2

$LNG['a_s_on'] = "On";
$LNG['a_s_off'] = "Off";
$LNG['a_s_days'] = "日";
$LNG['a_s_months'] = "月";
$LNG['a_s_weeks'] = "週"; // 4.2.0
$LNG['a_s_yes'] = "Yes";
$LNG['a_s_no'] = "No";

$LNG['a_s_updated'] = "あなたの設定が更新されました。";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "スキンおよびカテゴリ"; // 5.0
$LNG['a_skins_default'] = "デフォルトスキン"; // 5.0
$LNG['a_skins_set_default'] = "デフォルトスキンの設定"; // 5.0
$LNG['a_skins_anon'] = "匿名"; // 5.0
$LNG['a_skins_default_done'] = "デフォルトスキンが設定されました。"; // 5.0
$LNG['a_skins_categories_done'] = "カテゴリスキンが設定されました。"; // 5.0
$LNG['a_skins_new_category_done'] = "新しいカテゴリが作成されました。"; // 5.0
$LNG['a_skins_delete_done'] = "カテゴリが削除されました。"; // 5.0
$LNG['a_skins_edit_done'] = "カテゴリが編集されました。"; // 5.0
$LNG['a_skins_invalid_skin'] = "無効なスキン: %s  もう一度お試しください。"; // 5.0
$LNG['a_skins_categories'] = "カテゴリ"; // 5.0
$LNG['a_skins_new_category'] = "新しいカテゴリの作成"; // 5.0
$LNG['a_skins_set_skins'] = "カテゴリスキンの設定"; // 5.0
$LNG['a_skins_edit_category'] = "カテゴリの編集"; // 5.0
$LNG['a_skins_category_name'] = "カテゴリ名"; // 5.0
$LNG['a_skins_diff_skins'] = "カテゴリごとに異なるスキンを使用したい場合は、下記より選択してください。"; // 5.0
?>
