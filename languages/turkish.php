<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2006 Jeremy Scheff.  All rights reserved.              \\
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
$translation = 'Turkish (Türkçe)';
$translator_name = 'Ergün Acar';
$translator_email = 'admin@letreset.com';
$translator_url = 'http://www.weblistele.com/';

// Global
$LNG['g_form_submit_short'] = "Git";
$LNG['g_username'] = "Kullanıcı";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Başlık";
$LNG['g_description'] = "Açıklama";
$LNG['g_category'] = "Kategori"; // 4.1.0
$LNG['g_email'] = "E-mail";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Şifre";
$LNG['g_average'] = "Ortalama";
$LNG['g_today'] = "Bugün";
$LNG['g_yesterday'] = "Dün";
$LNG['g_daily'] = "Günlük"; // 5.0
$LNG['g_this_month'] = "Bu ay"; // 5.0
$LNG['g_last_month'] = "Geçen ay"; // 5.0
$LNG['g_monthly'] = "Aylık"; // 5.0
$LNG['g_this_week'] = "Bu Hafta"; // 5.0
$LNG['g_last_week'] = "Geçen Hafta"; // 5.0
$LNG['g_weekly'] = "Haftalık"; // 5.0
$LNG['g_pv'] = 'Gösterimler'; // 5.0
$LNG['g_overall'] = 'Toplam'; // 5.0
$LNG['g_in'] = 'Girişler'; // 5.0
$LNG['g_out'] = 'Çıkışlar'; // 5.0
$LNG['g_unq_pv'] = "Tekil sayfa gösterimi"; // 5.0
$LNG['g_tot_pv'] = "Toplam sayfa gösterimi"; // 5.0
$LNG['g_unq_in'] = "Tekil girişler"; // 5.0
$LNG['g_tot_in'] = "Toplam girişler"; // 5.0
$LNG['g_unq_out'] = "Tekil çıkışlar"; // 5.0
$LNG['g_tot_out'] = "Toplam çıkışlar"; // 5.0
$LNG['g_invalid_u_or_p'] = "Yanlış kullanıcı adı ya da şifre. Lütfen tekrar deneyin."; // 5.0
$LNG['g_invalid_u'] = "Yanlış kullanıcı adı.  Lütfen tekrar deneyin."; // 5.0
$LNG['g_invalid_p'] = "Yanlış şifre.  Lütfen tekrar deneyin."; // 5.0
$LNG['g_session_expired'] = "Oturumunuz sonlandı.  Lütfen tekrar deneyin."; // 5.0
$LNG['g_error'] = "Hata"; // 5.0
$LNG['g_delete_install'] = "Güvenlik sebebiyle, siteyi çalıştırmadan önce install klasörünü silin."; // 5.0

// Edit Account
$LNG['edit_header'] = "Bilgilerinizi düzenleyin";
$LNG['edit_info_edited'] = "Bilgileriniz başarıyla değiştirildi.";
$LNG['edit_password_blank'] = "Eski şifrenizi kullanmak istiyorsanız burayı boş bırakın"; // 4.0

// Gateway Page
$LNG['gateway_header'] = "Giriş";
$LNG['gateway_text'] = "Toplist'e girmek için aşağıdaki linki tıklayınız.";
$LNG['gateway_vote'] = "Oy vererek giriş.";
$LNG['gateway_no_vote'] = "Oy vermeden giriş."; // 5.0

// Install
$LNG['install_header'] = "Kurulum";
$LNG['install_welcome'] = "Aardvark Topsites PHP 5 kurulumuna hoşgeldiniz.  Scripti yüklemek için aşağıdaki alanları doldurun.";
$LNG['install_sql_prefix'] = "Tablo ön eki - sadece aynı veritabanında birden fazla listeyle çalışıyorsanız değiştirin";
$LNG['install_error_chmod'] = "settings_sql.php dosyasına yazılamıyor. settings_sql.php dosyanızın CHMOD değerini 666 yapınız.";
$LNG['install_error_sql'] = "SQL veritabanıyla bağlantı kurulamıyor.  Lütfen geri gelip SQL ayarlarınızı kontrol edin.";
$LNG['install_done'] = "Toplistiniz kurulmuştur.  Install klasörünü silebilirsiniz.";
$LNG['install_your'] = "Toplist Listeniz";
$LNG['install_admin'] = "Yönetim";
$LNG['install_manual'] = "Kılavuz";
$LNG['upgrade_header'] = "Yükselt";
$LNG['upgrade_welcome'] = "Aardvark Topsites PHP 5 yükseltmesine hoşgeldiniz.  Yükseltmeden önce tüm bilgilerinizin yedeğini almayı unutmayın.";
$LNG['upgrade_error_version'] = "Yükseltme sadece Aardvark Topsites PHP 4.1.0 veya daha üst versiyonlar içindir.";
$LNG['upgrade_done'] = "Toplistiniz yükseltilmiştir.  Install klasörünü silebilirsiniz.";
$LNG['upgrade_version'] = "Lütfen %s versiyonundan yükslettiğinize emin olun."; // 5.1.0

// Join
$LNG['join_header'] = "Site Ekle";
$LNG['join_enter_text'] = "Resimdeki yazıyı girin:"; // 4.2.2
$LNG['join_user'] = "Kullanıcı Adı"; // 5.0
$LNG['join_website'] = "Web Sitesi"; // 5.0
$LNG['join_error_username'] = "Geçerli bir kulanıcı adı girin: Sadece rakam,harf,alt çizgi ve tire kullanabilirsiniz."; // 5.0
$LNG['join_error_username_duplicate'] = "Geçerli bir kulanıcı adı girin: Bu kullanıcı adı kullanılmaktadır."; // 5.0
$LNG['join_error_url'] = "Geçerli bir URL giriniz.";
$LNG['join_error_email'] = "Geçerli bir e-mail giriniz.";
$LNG['join_error_title'] = "Siteniz için bir başlık giriniz.";
$LNG['join_error_password'] = "Bir şifre giriniz.";
$LNG['join_error_urlbanner'] = "Geçerli bir banner URLsi giriniz (yoksa boş bırakınız)"; // 4.0
$LNG['join_error_time'] = "Lütfen yeniden yüklemeyiniz."; // 4.2.0
$LNG['join_error_captcha'] = "Girdiğiniz yazı resimdeki yazıyla uyuşmuyor."; // 4.2.2
$LNG['join_thanks'] = "Teşekkürler siteniz eklendi! Aşağıdaki kodu sitenize ekleyiniz.";
$LNG['join_change_warning'] = "Kodda değişiklik yaparsanız çalışmayabilir.";
$LNG['join_welcome'] = "%s'e Hosgeldiniz";
$LNG['join_welcome_admin'] = "Yeni bir üye katıldı.";
$LNG['join_approve'] = "Yönetici sitenizi onayladığı anda siteniz listede gözükecektir."; // 5.1.0
$LNG['join_type'] = "Hesap Tipi"; // 5.1.0
$LNG['join_standard'] = "Standart"; // 5.1.0

// Link Code
$LNG['link_code_header'] = "HTML Kodu"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Kayıp Şifre"; // 5.0
$LNG['lost_pw_forgot'] = "Şifrenizi mi unuttunuz?"; // 5.0
$LNG['lost_pw_get'] = "Şifreyi sor"; // 5.0
$LNG['lost_pw_emailed'] = "Şifrenizi değiştirmeniz için gerekli bilgiler e-mailinize yollandı."; // 5.0
$LNG['lost_pw_email'] = "Yeni bir şifre belirlemek için aşağıdaki URLye gidiniz:"; // 5.0
$LNG['lost_pw_new'] = "Yeni şifrenizi giriniz"; // 5.0
$LNG['lost_pw_set_new'] = "Yani şifrenizi ayarlayınız"; // 5.0
$LNG['lost_pw_finish'] = "Yeni şifreniz seçtiğiniz şifre ile değiştirildi."; // 5.0

// Main Page
$LNG['main_header'] = "Anasayfa"; // 5.0
$LNG['main_all'] = "Tüm Siteler"; // 4.2.0
$LNG['main_method'] = "Sıralama metodu";
$LNG['main_members'] = "Üyeler";
$LNG['main_menu_rankings'] = "Sıralama";
$LNG['main_menu_join'] = "Site Ekle";
$LNG['main_menu_random'] = "Rastgele";
$LNG['main_menu_search'] = "Arama";
$LNG['main_menu_lost_code'] = "HTML Kodu"; // 5.0
$LNG['main_menu_lost_password'] = "Kayıp Şifre"; // 5.0
$LNG['main_menu_edit'] = "Üye Bilgileri";
$LNG['main_menu_user_cp'] = "Üye Kontrol Paneli"; // 5.0
$LNG['main_featured'] = "Günün Üyesi"; // 4.0.2
$LNG['main_executiontime'] = "Script Derleme Süresi"; // 4.0
$LNG['main_queries'] = "SQL Sorguları"; // 4.0
$LNG['main_powered'] = "Destekleyen";

// Ranking Table
$LNG['table_stats'] = "İstatistikler";
$LNG['table_unique'] = "Tekil";
$LNG['table_total'] = "Çoğul";
$LNG['table_rank'] = "Puan";
$LNG['table_title'] = "Başlık"; // 4.0
$LNG['table_description'] = "Açıklama"; // 4.0
$LNG['table_movement'] = "Hareket";
$LNG['table_up'] = "Yukarı"; // 5.0
$LNG['table_down'] = "Aşağı"; // 5.0
$LNG['table_neutral'] = "Sabit"; // 5.0

// Rate and Review
$LNG['rate_header'] = "Oy ver ve yorum yap";
$LNG['rate_rating'] = "Puan";
$LNG['rate_review'] = "Yorum"; // 5.0
$LNG['rate_thanks'] = "Puanınız ve yorumunuz için teşekkürler!";
$LNG['rate_error'] = "Bu siteye zaten oy verip yorum yapmışsınız.";
$LNG['rate_back'] = "İstatistiklere dön";
$LNG['rate_email_admin'] = "Listeye yeni bir yorum eklenmiştir."; // 5.1.0

// Search
$LNG['search_header'] = "Arama";
$LNG['search_off'] = "Arama özelliği iptal edilmiştir.";
$LNG['search_no_sites'] = "Aradığınızla ilgili bir site bulunamadı."; // 5.0
$LNG['search_prev'] = "Önceki"; // 3.2.1
$LNG['search_next'] = "Sonraki"; // 3.2.1
$LNG['search_displaying_results'] = "%s ile %s arasında %s adet sonuç <b>%s</b> için gösteriliyor."; // 5.1.0

// Stats
$LNG['stats_header'] = "İstatistikler";
$LNG['stats_info'] = "Bilgi";
$LNG['stats_member_since'] = "Kayıt Zamanı"; // 5.0
$LNG['stats_rating_avg'] = "Ortalama Puan";
$LNG['stats_rating_num'] = "Sıralama sayısı";
$LNG['stats_rate'] = "Siteye puan verin ve yorum yapın";
$LNG['stats_reviews'] = "Yorumlar";
$LNG['stats_allreviews'] = "Tüm yorumları göster"; // 4.0
$LNG['stats_week'] = "Hafta"; // 5.0
$LNG['stats_highest'] = "En Yüksek"; // 5.0

// ssi.php
$LNG['ssi_top'] = "En iyi %s Site"; // 4.0
$LNG['ssi_new'] = "En Yeni %s Üye"; // 5.0
$LNG['ssi_all'] = "TÜm Siteler"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Kullanıcı Kontrol Paneli"; // 5.0
$LNG['user_cp_login'] = "Giriş"; // 5.0
$LNG['user_cp_logout'] = "Çıkış"; // 5.0
$LNG['user_cp_welcome'] = "Kullanıcı kontrol paneline hoşgeldiniz. Sol taraftaki menüyü kullanarak hesabınızı yönetebilirsiniz."; // 5.0
$LNG['user_cp_logout_message'] = "Kullanıcı kontrol panelinden çıkış yaptınız."; // 5.0
$LNG['user_cp_login_long'] = "Kullanıcı adı ve şifrenizle ya da OpenID ile giriş yapın."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "%s için OpenID bulunamadı."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Kontrol paneline girmeden önce topliste üye olmanız gerekmektedir."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Giriş yapılırken hata oluştu.Lütfen tekrar deneyin."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Girmeniz için onaylamanız gerekmektedir.Lütfen tekrar deneyin."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Server Hatası: %s"; // 5.1.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Yeni Site Onaylama"; // 5.0
$LNG['a_approve'] = "Onayla"; // 4.0
$LNG['a_approve_none'] = "Bekleyen başvuru yok."; // 4.0
$LNG['a_approve_done'] = "Site başarıyla onaylandı."; // 4.0
$LNG['a_approve_dones'] = "Siteler başarıyla onaylandı."; // 4.0
$LNG['a_approve_sel'] = "Seçilenler:"; // 5.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Yeni Yorum Onaylama"; // 5.0
$LNG['a_approve_rev_none'] = "Bekleyen yorum yok."; // 5.0
$LNG['a_approve_rev_done'] = "Yorum başarıyla onaylandı."; // 5.0
$LNG['a_approve_rev_dones'] = "Yorumlar başarıyla onaylandı."; // 5.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Yeni Sayfa Oluştur"; // 5.1.0
$LNG['a_create_page_id'] = "Sayfa ID - Bu URL verilirken kullanılacaktır, sadece harf, sayı, altçizgi ve tire içerebilir"; // 5.1.0
$LNG['a_create_page_error_id'] = "Sayfa IDleri sadece harf, sayı, altçizgi ve tire içerebilir.  Lütfen geri gidip sayfa IDsini değiştirin."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Bu sayfa IDsinde sayfa bulunmaktadır.  Lütfen geri gidip başka bir sayfa IDsi seçin."; // 5.1.0
$LNG['a_create_page_created'] = "Sayfa oluşturuldu.  Lütfen elle %s da wrapper.html içinde link verin."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Üye Sil"; // 5.0
$LNG['a_del_headers'] = "Üyeleri Sil"; // 5.0
$LNG['a_del_done'] = "Üye başarıyla silindi."; // 5.0
$LNG['a_del_dones'] = "Üyeler başarıyla silindi."; // 5.0
$LNG['a_del_warn'] = "%s adlı kullanıcıyı silmek istediğinize emin misiniz??"; // 5.0
$LNG['a_del_multi'] = "Bu %s adlı üyeler"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Filtreli Kelimeyi Sil"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Filtreli Kelimeleri Sil"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtreli Kelime Silindi."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtreli Kelimeler Silindi."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "%s kelimesini listeden silmek istiyormusunuz?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "Bu %s kelimelerini"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Yanlış filtreli kelime IDsi.  Lütfen tekrar deneyin."; // 5.1.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Yeni Sayfayı Sil"; // 5.1.0
$LNG['a_del_page_headers'] = "Yeni Sayfaları Sil"; // 5.1.0
$LNG['a_del_page_done'] = "Yeni Sayfa Silindi."; // 5.1.0
$LNG['a_del_page_dones'] = "Yeni Sayfalar Silindi."; // 5.1.0
$LNG['a_del_page_warn'] = "%s Bu sayfayı silmek istediğinize emin misiniz?"; //5.1.0
$LNG['a_del_page_multi'] = "Bu %s adlı sayfalar"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Yanlış yeni sayfa IDsi.  Lütfen tekrar deneyin."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Yorum Sil"; // 5.0
$LNG['a_del_rev_headers'] = "Yorumları Sil"; // 5.0
$LNG['a_del_rev_done'] = "Yorum başarıyla silindi."; // 5.0
$LNG['a_del_rev_dones'] = "Yorumlar başarıyla silindi."; // 5.0
$LNG['a_del_rev_warn'] = "Yorumu silmek istediğinize emin misiniz?"; //5.0
$LNG['a_del_rev_warns'] = "Yorumları silmek istediğinize emin misiniz?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Bu id numarasına sahip yorum yok."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Üye Düzenle"; // 5.0
$LNG['a_edit_site_is'] = "Üyenin sitesi"; // 4.0
$LNG['a_edit_active'] = "Aktif (Listelenen)"; // 4.0
$LNG['a_edit_inactive'] = "İnaktif (Listelenmeyen)"; // 5.0
$LNG['a_edit_edited'] = "Üye başarıyla düzenlendi.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Filtreli Kelimeleri Yönet"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtreli Kelimeler Düzenlendi."; // 5.1.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Yeni Sayfayı Değiştir"; // 5.1.0
$LNG['a_edit_page_content'] = "İçerik - HTML kodu kullanabilirsiniz"; // 5.1.0
$LNG['a_edit_page_edited'] = "Sayfa Değiştirildi."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Yorum Düzenle"; // 5.0
$LNG['a_edit_rev_edited'] = "Yorum başarıyla düzenlendi.";

// Admin > Email Members
$LNG['a_email_header'] = "Üyelere Mesaj"; // 5.0
$LNG['a_email_subject'] = "Konu"; // 4.2.0
$LNG['a_email_message'] = "Mesaj"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-mail %s adlı üyeye gönderildi"; // 5.0
$LNG['a_email_not_sent'] = "E-mail %s adlı üyeye gönderilemedi"; // 5.0
$LNG['a_email_sent'] = "%s adlı üyelere mail gönderildi."; // 4.2.0
$LNG['a_email_failed'] = "%s adlı üyelere mail gönderilemedi."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Yönetim panelinden başarıyla çıkış yaptınız."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Sahip hoşgeldin. Sol taraftaki menüden toplisti yönetebilirsin."; // 5.0
$LNG['a_main_approve'] = "1 site onay bekliyor."; // 5.0
$LNG['a_main_approves'] = "%s site onay bekliyor."; // 5.0
$LNG['a_main_approve_rev'] = "1 yorum onay bekliyor."; // 5.0
$LNG['a_main_approve_revs'] = "%s yorum onay bekliyor."; // 5.0
$LNG['a_main_your'] = "Kullandığınız versiyon"; // 5.0
$LNG['a_main_latest'] = "Son versiyon"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Üye Yönetimi"; // 5.0
$LNG['a_man_actions'] = "İşlemler"; // 4.2.0
$LNG['a_man_edit'] = "Düzenle"; // 4.2.0
$LNG['a_man_delete'] = "Sil"; // 4.2.0
$LNG['a_man_email'] = "Mail At"; // 4.2.0
$LNG['a_man_all'] = "Tümünü Seç"; // 5.0
$LNG['a_man_none'] = "Tümünü Seçme"; // 5.0
$LNG['a_man_del_sel'] = "Seçilenleri Sil"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Küfür Filtresi"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Değişilecek kelimeyi girin.  Mesela  \"hell\" kelimesi geçen yerlerde \"h***\" şeklinde yazılacak."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Kesin uyuşma tam olarak kelime geçtiği zaman.  Genel uyuşma ise yazılan kelimenin herhangi bi yerde geçmesidir.  Mesela \"hell\" kelimesi hem \"shell\" kelimesinde hem de \"hello\" kelimesinde var."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Kelime"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Değiştirme"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Uyuşma"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Kesin"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Genel"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Kelimeyi Filtrele"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" kelimesi filtreli kelime olarak eklendi."; // 5.1.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Yeni Sayfaları Yönet"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Yorum Yönetimi"; // 5.0
$LNG['a_man_rev_enter'] = "Sitenin yorumlarını düzeltmek için lütfen kullanıcı adı giriniz.."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Yorum"; // 5.0
$LNG['a_man_rev_date'] = "Tarih"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menü";
$LNG['a_menu_main'] = "Yönetim anasayfası"; // 5.0
$LNG['a_menu_approve'] = "Yeni üye başvuruları";
$LNG['a_menu_manage'] = "Üye Yönetimi"; // 4.2.0
$LNG['a_menu_settings'] = "Ayarlar"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Küfür Filtresi"; // 5.1.0
$LNG['a_menu_skins'] = "Görünümler ve Kategoriler"; // 5.0
$LNG['a_menu_approve_reviews'] = "Yeni Yorumlar"; // 5.0
$LNG['a_menu_manage_reviews'] = "Yorum Yönetimi"; // 5.0
$LNG['a_menu_email'] = "Üyelere Mesaj";
$LNG['a_menu_delete_review'] = "Yorum Sil";
$LNG['a_menu_logout'] = "Çıkış";
$LNG['a_menu_delete'] = "Üye Sil";
$LNG['a_menu_edit'] = "Üye Düzenle";
$LNG['a_menu_create_page'] = "Yeni Sayfa Oluştur"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Yeni Sayfaları Yönet"; // 5.1.0
$LNG['a_header_members'] = "Üyeler"; // 5.0
$LNG['a_header_settings'] = "Ayarlar"; // 5.0
$LNG['a_header_reviews'] = "Yorumlar"; // 5.0
$LNG['a_header_pages'] = "Yeni Sayfalar"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Ayarları Değiştir";
$LNG['a_s_help'] = "Yardım"; // 5.1.0

$LNG['a_s_general'] = "Genel Ayarlar";
$LNG['a_s_admin_password'] = "Yönetici Şifresi";
$LNG['a_s_list_name'] = "Toplistinizin adı";
$LNG['a_s_list_url'] = "Toplist klasörünün URLsi";
$LNG['a_s_default_language'] = "Asıl dil";
$LNG['a_s_your_email'] = "E-mail adresiniz";

$LNG['a_s_sql'] = "SQL Ayarları";
$LNG['a_s_sql_type'] = "Veritabanı Tipi"; // 4.1.0
$LNG['a_s_sql_host'] = "Sunucu";
$LNG['a_s_sql_database'] = "Veritabanı";
$LNG['a_s_sql_username'] = "Kullanıcı adı";
$LNG['a_s_sql_password'] = "Şifre";

$LNG['a_s_ranking'] = "Puan Ayarları";
$LNG['a_s_num_list'] = "Her sayfada gösterilecek site sayısı"; // 5.0
$LNG['a_s_ranking_period'] = "Sıralama Periyodu"; // 5.0
$LNG['a_s_ranking_method'] = "Sıralama metodu"; // 5.0
$LNG['a_s_ranking_average'] = "Ortlamaya göre sırala ya da %s"; // 5.0
$LNG['a_s_featured_member'] = 'Özel Üye - İsterseniz wrapper.html de {$featured_member} değişkenine ekleyerek aktif edebilirsiniz.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Number of members to use the _top skin for";
$LNG['a_s_ad_breaks'] = "Bu sıralardan sonra reklam koy (Virgülle ayırabilirsiniz) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_member'] = "Üye Ayarları";
$LNG['a_s_active_default'] = "Yeni siteler listede gözükmeden önce sizin onayınız alınsın mı?";
$LNG['a_s_active_default_review'] = "Yeni yorumlar listede gözükmeden önce sizin onayınız alınsın mı?";
$LNG['a_s_delete_after'] = "Aktif olmayan üyeleri bu zamandan sonra sil (0 yazılırsa kapalı olur)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Yeni üye başvurusu size e-mail ile yollansın mı?"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Yeni yorum eklendiğinide size e-mail ile yollansın mı?"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Üyelerin maksimum banner genişliği (0 yazılırsa kapalı olur)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Üyelerin maksimum banner yüksekliği (0 yazılırsa kapalı olur)"; // 4.2.0
$LNG['a_s_default_banner'] = "Banner'ı olmayan üyelere geçerli bir banner koy";

$LNG['a_s_button'] = "Logo Ayarları";
$LNG['a_s_ranks_on_buttons'] = "Butonlar üzerinde sıra no -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Durum Butonları"; // 4.2.0
$LNG['a_s_button_url'] = "<b>Hayır ise</b> - Üye sitelerde gözükecek logo URLsini giriniz"; // 4.0
$LNG['a_s_button_dir'] = "<b>Evet ise</b> - Logoların klasör URLsini giriniz"; // 4.0
$LNG['a_s_button_ext'] = "<b>Evet ise</b> - Logoların uzantısı (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "<b>Evet ise</b> - Seçmeli logo sayısı"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google dostu linkler - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_other'] = "Diğer Ayarlar";
$LNG['a_s_search'] = "Arama";
$LNG['a_s_time_offset'] = "Serverınızın zaman ofseti";
$LNG['a_s_gateway'] = "Hileye karşı giriş kapısı";
$LNG['a_s_captcha'] = "Girişte görsel doğrulama (spammerlara karşı koruma) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_on'] = "Açık";
$LNG['a_s_off'] = "Kapalı";
$LNG['a_s_days'] = "Günler";
$LNG['a_s_months'] = "Aylar";
$LNG['a_s_weeks'] = "Haftalar"; // 4.2.0
$LNG['a_s_yes'] = "Evet";
$LNG['a_s_no'] = "Hayır";

$LNG['a_s_updated'] = "Ayarlar güncellendi.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Görünümler ve Kategoriler"; // 5.0
$LNG['a_skins_default'] = "Geçerli Görünüm"; // 5.0
$LNG['a_skins_set_default'] = "Geçerli Görünüm Olarak Ayarla"; // 5.0
$LNG['a_skins_anon'] = "Anonim"; // 5.0
$LNG['a_skins_default_done'] = "Geçerli görünüm olarak ayarlandı."; // 5.0
$LNG['a_skins_categories_done'] = "Kategori görünümü ayarlandı."; // 5.0
$LNG['a_skins_new_category_done'] = "Yeni kategori oluşturuldu."; // 5.0
$LNG['a_skins_delete_done'] = "Kategori silindi."; // 5.0
$LNG['a_skins_delete_error'] = "Bu kategori silinemez çünkü en az bir kategori olmalıdır."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategori düzenlendi."; // 5.0
$LNG['a_skins_invalid_skin'] = "Yanlış görünüm: %s.  Lütfen ayarınızı değiştirin."; // 5.0
$LNG['a_skins_categories'] = "Kategoriler"; // 5.0
$LNG['a_skins_new_category'] = "Yeni Kategori Oluştur"; // 5.0
$LNG['a_skins_set_skins'] = "Kategori Görünümleri Ayarla"; // 5.0
$LNG['a_skins_edit_category'] = "Kategori Düzenle"; // 5.0
$LNG['a_skins_category_name'] = "Kategori Adı"; // 5.0
$LNG['a_skins_diff_skins'] = "Her kategoriye farklı bir görünümü aşağıdan seçiniz."; // 5.0
?>
