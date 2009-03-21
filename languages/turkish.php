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
$translation = 'Turkish (Türkçe)';
$translator_name = 'M.Bahattin EKEN';
$translator_email = 'admin@sitelerimiz.biz';
$translator_url = 'http://www.sitelerimiz.biz/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-9";

// Global
$LNG['g_form_submit_short'] = "Git";
$LNG['g_username'] = "Kullanýcý";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Baþlýk";
$LNG['g_description'] = "Açýklama";
$LNG['g_category'] = "Kategori"; // 4.1.0
$LNG['g_email'] = "E-mail";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Þifre";
$LNG['g_average'] = "Ortalama";
$LNG['g_today'] = "Bugün";
$LNG['g_yesterday'] = "Dün";
$LNG['g_daily'] = "Günlük"; // 5.0
$LNG['g_this_month'] = "Bu ay"; // 5.0
$LNG['g_last_month'] = "Geçen ay"; // 5.0
$LNG['g_monthly'] = "Aylýk"; // 5.0
$LNG['g_this_week'] = "Bu Hafta"; // 5.0
$LNG['g_last_week'] = "Geçen Hafta"; // 5.0
$LNG['g_weekly'] = "Haftalýk"; // 5.0
$LNG['g_pv'] = 'Gösterimler'; // 5.0
$LNG['g_overall'] = 'Toplam'; // 5.0
$LNG['g_in'] = 'Giriþler'; // 5.0
$LNG['g_out'] = 'Çýkýþlar'; // 5.0
$LNG['g_unq_pv'] = "Tekil sayfa gösterimi"; // 5.0
$LNG['g_tot_pv'] = "Toplam sayfa gösterimi"; // 5.0
$LNG['g_unq_in'] = "Tekil giriþler"; // 5.0
$LNG['g_tot_in'] = "Toplam giriþler"; // 5.0
$LNG['g_unq_out'] = "Tekil çýkýþlar"; // 5.0
$LNG['g_tot_out'] = "Toplam çýkýþlar"; // 5.0
$LNG['g_invalid_u_or_p'] = "Yanlýþ kullanýcý adý ya da þifre. Lütfen tekrar deneyin."; // 5.0
$LNG['g_invalid_u'] = "Yanlýþ kullanýcý adý.  Lütfen tekrar deneyin."; // 5.0
$LNG['g_invalid_p'] = "Yanlýþ þifre.  Lütfen tekrar deneyin."; // 5.0
$LNG['g_session_expired'] = "Oturumunuz sonlandý.  Lütfen tekrar deneyin."; // 5.0
$LNG['g_error'] = "Hata"; // 5.0
$LNG['g_delete_install'] = "Güvenlik sebebiyle, siteyi çalýþtýrmadan önce install klasörünü silin."; // 5.0
$LNG['g_ip'] = "IP Adres"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Bilgilerinizi düzenleyin";
$LNG['edit_info_edited'] = "Bilgileriniz baþarýyla deðiþtirildi.";
$LNG['edit_password_blank'] = "Eski þifrenizi kullanmak istiyorsanýz burayý boþ býrakýn"; // 4.0
$LNG['edit_delay'] = "Sitenizin baþlýðýný deðiþtirin, deðiþikliðin görülebilmesi için url'nin admin tarafýndan onaylanmasý gerekmektedir."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Giriþ";
$LNG['gateway_text'] = "Toplist'e girmek için aþaðýdaki linki týklayýnýz.";
$LNG['gateway_vote'] = "Oy vererek giriþ.";
$LNG['gateway_no_vote'] = "Oy vermeden giriþ."; // 5.0

// Install
$LNG['install_header'] = "Kurulum";
$LNG['install_welcome'] = "Aardvark Topsites PHP 5 kurulumuna hoþgeldiniz.  Scripti yüklemek için aþaðýdaki alanlarý doldurun.";
$LNG['install_sql_prefix'] = "Tablo ön eki - sadece ayný veritabanýnda birden fazla listeyle çalýþýyorsanýz deðiþtirin";
$LNG['install_error_chmod'] = "settings_sql.php dosyasýna yazýlamýyor. settings_sql.php dosyanýzýn CHMOD deðerini 666 yapýnýz.";
$LNG['install_error_sql'] = "SQL veritabanýyla baðlantý kurulamýyor.  Lütfen geri gelip SQL ayarlarýnýzý kontrol edin.";
$LNG['install_done'] = "Toplistiniz kurulmuþtur.  Install klasörünü silebilirsiniz.";
$LNG['install_your'] = "Toplist Listeniz";
$LNG['install_admin'] = "Yönetim";
$LNG['install_manual'] = "Kýlavuz";
$LNG['upgrade_header'] = "Yükselt";
$LNG['upgrade_welcome'] = "Aardvark Topsites PHP 5 yükseltmesine hoþgeldiniz.  Yükseltmeden önce tüm bilgilerinizin yedeðini almayý unutmayýn.";
$LNG['upgrade_error_version'] = "Yükseltme sadece Aardvark Topsites PHP 4.1.0 veya daha üst versiyonlar içindir.";
$LNG['upgrade_done'] = "Toplistiniz yükseltilmiþtir.  Install klasörünü silebilirsiniz.";
$LNG['upgrade_version'] = "Lütfen %s versiyonundan yükslettiðinize emin olun."; // 5.1.0
$LNG['install_mailing_list'] = "Eðer Aardvark Topsites PHP mail listesine katýlmak istiyorsanýz, aþaðýya mail adresinizi giriniz.  Scriptler hakkýnda önemli duyurularýn olduðu bir liste, örneðin yeni versiyon ve güvenlik tavsiyeleri gibi."; // 5.2.0

// Join
$LNG['join_header'] = "Site Ekle";
$LNG['join_enter_text'] = "Resimdeki yazýyý girin:"; // 4.2.2
$LNG['join_enter_text_read'] = "Okuyamadýnýz mý?"; // 5.2.0
$LNG['join_user'] = "Kullanýcý Adý"; // 5.0
$LNG['join_website'] = "Web Sitesi"; // 5.0
$LNG['join_banner_size'] = "(Maksimum boyut: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Geçerli bir kulanýcý adý girin: Sadece rakam,harf,alt çizgi ve tire kullanabilirsiniz."; // 5.0
$LNG['join_error_username_duplicate'] = "Geçerli bir kulanýcý adý girin: Bu kullanýcý adý kullanýlmaktadýr."; // 5.0
$LNG['join_error_url'] = "Geçerli bir URL giriniz.";
$LNG['join_error_email'] = "Geçerli bir e-mail giriniz.";
$LNG['join_error_title'] = "Siteniz için bir baþlýk giriniz.";
$LNG['join_error_password'] = "Bir þifre giriniz.";
$LNG['join_error_confirm_password'] = "Parolalar uyuþmadý."; // 5.2.0
$LNG['join_error_urlbanner'] = "Geçerli bir banner giriniz.  Eðer yoksa boþ býrakýnýz."; // 5.2.0
$LNG['join_error_time'] = "Lütfen yeniden yüklemeyiniz."; // 4.2.0
$LNG['join_error_captcha'] = "Girdiðiniz yazý resimdeki yazýyla uyuþmuyor."; // 4.2.2
$LNG['join_error_question'] = "Cevabýnýz hatalý.  Lütfen cevabýnýzý düzeltin."; // 5.2.0
$LNG['join_thanks'] = "Teþekkürler siteniz eklendi! Aþaðýdaki kodu sitenize ekleyiniz.";
$LNG['join_change_warning'] = "Kodda deðiþiklik yaparsanýz çalýþmayabilir.";
$LNG['join_welcome'] = "%s'e Hosgeldiniz";
$LNG['join_welcome_admin'] = "Yeni bir üye katýldý.";
$LNG['join_approve'] = "Katýldýðýnýz için teþekkür ederiz! Admin onayladýðý zaman siteniz listelenecektir. Siteniz onaylandýðý zaman emailinize daha detaylý bilg gönderilecektir."; // 5.2.0
$LNG['join_type'] = "Hesap Tipi"; // 5.1.0
$LNG['join_standard'] = "Standart"; // 5.1.0
$LNG['join_error_top'] = "Baþvurunuzda bir hata bulundu. Lütfen düzeltiniz."; // 5.2.0
$LNG['join_ban_top'] = "Baþvurunuz içeriðinizde admin tarafýndan yasaklanan bilgiler bulunmaktadýr."; // 5.2.0
$LNG['join_security'] = "Güvenlik"; // 5.2.0
$LNG['join_confirm_password'] = "Parolayý Doðrulayýn"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "HTML Kodu"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Kayýp Þifre"; // 5.0
$LNG['lost_pw_forgot'] = "Þifrenizi mi unuttunuz?"; // 5.0
$LNG['lost_pw_get'] = "Þifreyi sor"; // 5.0
$LNG['lost_pw_emailed'] = "Þifrenizi deðiþtirmeniz için gerekli bilgiler e-mailinize yollandý."; // 5.0
$LNG['lost_pw_email'] = "Yeni bir þifre belirlemek için aþaðýdaki URLye gidiniz:"; // 5.0
$LNG['lost_pw_new'] = "Yeni þifrenizi giriniz"; // 5.0
$LNG['lost_pw_set_new'] = "Yani þifrenizi ayarlayýnýz"; // 5.0
$LNG['lost_pw_finish'] = "Yeni þifreniz seçtiðiniz þifre ile deðiþtirildi."; // 5.0

// Main Page
$LNG['main_header'] = "Anasayfa"; // 5.0
$LNG['main_all'] = "Tüm Siteler"; // 4.2.0
$LNG['main_method'] = "Sýralama metodu";
$LNG['main_members'] = "Üyeler";
$LNG['main_menu_rankings'] = "Sýralama";
$LNG['main_menu_join'] = "Site Ekle";
$LNG['main_menu_random'] = "Rastgele";
$LNG['main_menu_search'] = "Arama";
$LNG['main_menu_lost_code'] = "HTML Kodu"; // 5.0
$LNG['main_menu_lost_password'] = "Kayýp Þifre"; // 5.0
$LNG['main_menu_edit'] = "Üye Bilgileri";
$LNG['main_menu_user_cp'] = "Üye Kontrol Paneli"; // 5.0
$LNG['main_featured'] = "Günün Üyesi"; // 4.0.2
$LNG['main_executiontime'] = "Script Derleme Süresi"; // 4.0
$LNG['main_queries'] = "SQL Sorgularý"; // 4.0
$LNG['main_powered'] = "Destekleyen";

// Ranking Table
$LNG['table_stats'] = "Ýstatistikler";
$LNG['table_unique'] = "Tekil";
$LNG['table_total'] = "Çoðul";
$LNG['table_rank'] = "Puan";
$LNG['table_title'] = "Baþlýk"; // 4.0
$LNG['table_description'] = "Açýklama"; // 4.0
$LNG['table_movement'] = "Hareket";
$LNG['table_up'] = "Yukarý"; // 5.0
$LNG['table_down'] = "Aþaðý"; // 5.0
$LNG['table_neutral'] = "Sabit"; // 5.0
$LNG['table_your_site_here'] = "Sitenizi Ekleyin"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Oy ver ve yorum yap";
$LNG['rate_message'] = "Lütfen %s için puan verin ve yorumunuzu yazýn."; // 5.2.0
$LNG['rate_rating'] = "Puan";
$LNG['rate_review'] = "Yorum"; // 5.0
$LNG['rate_thanks'] = "Puanýnýz ve yorumunuz için teþekkürler!";
$LNG['rate_error'] = "Bu siteye zaten oy verip yorum yapmýþsýnýz.";
$LNG['rate_back'] = "Ýstatistiklere dön";
$LNG['rate_email_admin'] = "Listeye yeni bir yorum eklenmiþtir."; // 5.1.0

// Search
$LNG['search_header'] = "Arama";
$LNG['search_off'] = "Arama özelliði iptal edilmiþtir.";
$LNG['search_no_sites'] = "Aradýðýnýzla ilgili bir site bulunamadý."; // 5.0
$LNG['search_prev'] = "Önceki"; // 3.2.1
$LNG['search_next'] = "Sonraki"; // 3.2.1
$LNG['search_displaying_results'] = "%s ile %s arasýnda %s adet sonuç <b>%s</b> için gösteriliyor."; // 5.1.0

// Stats
$LNG['stats_header'] = "Ýstatistikler";
$LNG['stats_info'] = "Bilgi";
$LNG['stats_member_since'] = "Kayýt Zamaný"; // 5.0
$LNG['stats_rating_avg'] = "Ortalama Puan";
$LNG['stats_rating_num'] = "Sýralama sayýsý";
$LNG['stats_rate'] = "Siteye puan verin ve yorum yapýn";
$LNG['stats_reviews'] = "Yorumlar";
$LNG['stats_allreviews'] = "Tüm yorumlarý göster"; // 4.0
$LNG['stats_week'] = "Hafta"; // 5.0
$LNG['stats_highest'] = "En Yüksek"; // 5.0
$LNG['stats_overall'] = "Detaylý Ýstatistikler"; // 5.2.0
$LNG['stats_overall_average'] = "Ortalama (Son 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Toplam (Tüm Zamanlar)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "En iyi %s Site"; // 4.0
$LNG['ssi_new'] = "En Yeni %s Üye"; // 5.0
$LNG['ssi_all'] = "TÜm Siteler"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Kullanýcý Kontrol Paneli"; // 5.0
$LNG['user_cp_login'] = "Giriþ"; // 5.0
$LNG['user_cp_logout'] = "Çýkýþ"; // 5.0
$LNG['user_cp_welcome'] = "Kullanýcý kontrol paneline hoþgeldiniz. Sol taraftaki menüyü kullanarak hesabýnýzý yönetebilirsiniz."; // 5.0
$LNG['user_cp_logout_message'] = "Kullanýcý kontrol panelinden çýkýþ yaptýnýz."; // 5.0
$LNG['user_cp_login_long'] = "Kullanýcý adý ve þifrenizle ya da OpenID ile giriþ yapýn."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "%s için OpenID bulunamadý."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Kontrol paneline girmeden önce topliste üye olmanýz gerekmektedir."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Giriþ yapýlýrken hata oluþtu.Lütfen tekrar deneyin."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Girmeniz için onaylamanýz gerekmektedir.Lütfen tekrar deneyin."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Server Hatasý: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Siteniz onaylanmadýðý sürece kullanýcý kontrol paneline giremezsiniz. Siteniz onaylandýðý zaman bir email alacaksýnýz."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Yeni Site Onaylama"; // 5.0
$LNG['a_approve'] = "Onayla"; // 4.0
$LNG['a_approve_none'] = "Bekleyen baþvuru yok."; // 4.0
$LNG['a_approve_done'] = "Site baþarýyla onaylandý."; // 4.0
$LNG['a_approve_dones'] = "Siteler baþarýyla onaylandý."; // 4.0
$LNG['a_approve_sel'] = "Seçilenler:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Üye Deðiþikliklerini Onayla"; // 5.2.0
$LNG['a_approve_edited_none'] = "Onay bekleyen düzenleme yok."; // 5.2.0
$LNG['a_approve_edited_old'] = "Önceki Baþlýk ve URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Düzenlenen Baþlýk ve URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Reddet"; // 5.2.0
$LNG['a_approve_edited_done'] = "Deðiþiklikler onaylandý."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Deðiþiklikler reddedildi."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Yeni Yorum Onaylama"; // 5.0
$LNG['a_approve_rev_none'] = "Bekleyen yorum yok."; // 5.0
$LNG['a_approve_rev_done'] = "Yorum baþarýyla onaylandý."; // 5.0
$LNG['a_approve_rev_dones'] = "Yorumlar baþarýyla onaylandý."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Veritabaný Yedekle"; // 5.2.0
$LNG['a_backup_warn'] = "Kullanýcýlarýnýzýn,istatistiklerinizin ve ayarlarýnýzýn bir yedeði oluþturacaktýr. Eðer çok fazla üyeniz var ise iþlem biraz uzun sürebilir."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Yeni Sayfa Oluþtur"; // 5.1.0
$LNG['a_create_page_id'] = "Sayfa ID - Bu URL verilirken kullanýlacaktýr, sadece harf, sayý, altçizgi ve tire içerebilir"; // 5.1.0
$LNG['a_create_page_error_id'] = "Sayfa IDleri sadece harf, sayý, altçizgi ve tire içerebilir.  Lütfen geri gidip sayfa IDsini deðiþtirin."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Bu sayfa IDsinde sayfa bulunmaktadýr.  Lütfen geri gidip baþka bir sayfa IDsi seçin."; // 5.1.0
$LNG['a_create_page_created'] = "Sayfa oluþturuldu.  Lütfen elle %s da wrapper.html içinde link verin."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Üye Sil"; // 5.0
$LNG['a_del_headers'] = "Üyeleri Sil"; // 5.0
$LNG['a_del_done'] = "Üye baþarýyla silindi."; // 5.0
$LNG['a_del_dones'] = "Üyeler baþarýyla silindi."; // 5.0
$LNG['a_del_warn'] = "%s adlý kullanýcýyý silmek istediðinize emin misiniz??"; // 5.0
$LNG['a_del_multi'] = "Bu %s adlý üyeler"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Filtreli Kelimeyi Sil"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Filtreli Kelimeleri Sil"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtreli Kelime Silindi."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtreli Kelimeler Silindi."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "%s kelimesini listeden silmek istiyormusunuz?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "Bu %s kelimelerini"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Yanlýþ filtreli kelime IDsi.  Lütfen tekrar deneyin."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Kara Listeden Sil"; // 5.2.0
$LNG['a_del_ban_headers'] = "Kara Listeden Sil."; // 5.2.0
$LNG['a_del_ban_done'] = "Bilgi kara listeden silinmiþtir."; // 5.2.0
$LNG['a_del_ban_dones'] = "Bilgiler kara listeden silinmiþtir."; // 5.2.0
$LNG['a_del_ban_warn'] = "%s kara listeden silinecektir, emin misiniz?"; //5.2.0
$LNG['a_del_ban_multi'] = "bu %s giriþ"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Hatalý kara liste ID'si.  Lütfen tekrar deneyin."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Yeni Sayfayý Sil"; // 5.1.0
$LNG['a_del_page_headers'] = "Yeni Sayfalarý Sil"; // 5.1.0
$LNG['a_del_page_done'] = "Yeni Sayfa Silindi."; // 5.1.0
$LNG['a_del_page_dones'] = "Yeni Sayfalar Silindi."; // 5.1.0
$LNG['a_del_page_warn'] = "%s Bu sayfayý silmek istediðinize emin misiniz?"; //5.1.0
$LNG['a_del_page_multi'] = "Bu %s adlý sayfalar"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Yanlýþ yeni sayfa IDsi.  Lütfen tekrar deneyin."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Yorum Sil"; // 5.0
$LNG['a_del_rev_headers'] = "Yorumlarý Sil"; // 5.0
$LNG['a_del_rev_done'] = "Yorum baþarýyla silindi."; // 5.0
$LNG['a_del_rev_dones'] = "Yorumlar baþarýyla silindi."; // 5.0
$LNG['a_del_rev_warn'] = "Yorumu silmek istediðinize emin misiniz?"; //5.0
$LNG['a_del_rev_warns'] = "Yorumlarý silmek istediðinize emin misiniz?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Bu id numarasýna sahip yorum yok."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Üye Düzenle"; // 5.0
$LNG['a_edit_site_is'] = "Üyenin sitesi"; // 4.0
$LNG['a_edit_active'] = "Aktif (Listelenen)"; // 4.0
$LNG['a_edit_inactive'] = "Ýnaktif (Listelenmeyen)"; // 5.0
$LNG['a_edit_edited'] = "Üye baþarýyla düzenlendi.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Filtreli Kelimeleri Yönet"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtreli Kelimeler Düzenlendi."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Kara Listeyi Düzenle"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Kara liste düzenlendi."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Yeni Sayfayý Deðiþtir"; // 5.1.0
$LNG['a_edit_page_content'] = "Ýçerik - HTML kodu kullanabilirsiniz"; // 5.1.0
$LNG['a_edit_page_edited'] = "Sayfa Deðiþtirildi."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Yorum Düzenle"; // 5.0
$LNG['a_edit_rev_edited'] = "Yorum baþarýyla düzenlendi.";

// Admin > Email Members
$LNG['a_email_header'] = "Üyelere Mesaj"; // 5.0
$LNG['a_email_subject'] = "Konu"; // 4.2.0
$LNG['a_email_message'] = "Mesaj"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-mail %s adlý üyeye gönderildi"; // 5.0
$LNG['a_email_not_sent'] = "E-mail %s adlý üyeye gönderilemedi"; // 5.0
$LNG['a_email_sent'] = "%s adlý üyelere mail gönderildi."; // 4.2.0
$LNG['a_email_failed'] = "%s adlý üyelere mail gönderilemedi."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Yönetim panelinden baþarýyla çýkýþ yaptýnýz."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Sahip hoþgeldin. Sol taraftaki menüden toplisti yönetebilirsin."; // 5.0
$LNG['a_main_approve'] = "1 site onay bekliyor."; // 5.0
$LNG['a_main_approves'] = "%s site onay bekliyor."; // 5.0
$LNG['a_main_approve_edit'] = "Onay bekleyen 1 tane site düzenlemesi var."; // 5.2.0
$LNG['a_main_approve_edits'] = "Onay bekleyen %s tane site düzenlemesi var."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 yorum onay bekliyor."; // 5.0
$LNG['a_main_approve_revs'] = "%s yorum onay bekliyor."; // 5.0
$LNG['a_main_your'] = "Kullandýðýnýz versiyon"; // 5.0
$LNG['a_main_latest'] = "Son versiyon"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Üye Yönetimi"; // 5.0
$LNG['a_man_actions'] = "Ýþlemler"; // 4.2.0
$LNG['a_man_edit'] = "Düzenle"; // 4.2.0
$LNG['a_man_delete'] = "Sil"; // 4.2.0
$LNG['a_man_email'] = "Mail At"; // 4.2.0
$LNG['a_man_all'] = "Tümünü Seç"; // 5.0
$LNG['a_man_none'] = "Tümünü Seçme"; // 5.0
$LNG['a_man_del_sel'] = "Seçilenleri Sil"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Küfür Filtresi"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Deðiþilecek kelimeyi girin.  Mesela  \"hell\" kelimesi geçen yerlerde \"h***\" þeklinde yazýlacak."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Kesin uyuþma tam olarak kelime geçtiði zaman.  Genel uyuþma ise yazýlan kelimenin herhangi bi yerde geçmesidir.  Mesela \"hell\" kelimesi hem \"shell\" kelimesinde hem de \"hello\" kelimesinde var."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Kelime"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Deðiþtirme"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Uyuþma"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Kesin"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Genel"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Kelimeyi Filtrele"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" kelimesi filtreli kelime olarak eklendi."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Kara Liste"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Herhangi bi siteyi veya kullanýcýyý yasaklamak için aþaðýdaki formu doldurun.  Bir üye katýldýðý zaman, URL, email adresi, kullanýcý adý ve IP adresine göre kontrol eder.  Site bilgileri deðiþtirildiði zaman url ve email adresi kontrol edilir.<br /><br />Kara liste mevcut kullanýcýlarý etkilemez."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Exact matching will only match the exact string.  Global matching will match anything containing the string.  So, global matching of http://www.yahoo.com/ would match any page with http://www.yahoo.com/ in the URL, while exact matching of http://www.yahoo.com/ would only match that exact URL."; // 5.2.0
$LNG['a_man_ban_string'] = "Cümlecik"; // 5.2.0
$LNG['a_man_ban_field'] = "Alan"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" kara listeye eklenmiþtir."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Yeni Sayfalarý Yönet"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Yorum Yönetimi"; // 5.0
$LNG['a_man_rev_enter'] = "Sitenin yorumlarýný düzeltmek için lütfen kullanýcý adý giriniz.."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Yorum"; // 5.0
$LNG['a_man_rev_date'] = "Tarih"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menü";
$LNG['a_menu_main'] = "Yönetim anasayfasý"; // 5.0
$LNG['a_menu_approve'] = "Yeni üye baþvurularý";
$LNG['a_menu_approve_edits'] = "Üye Deðiþiklklerini Onayla"; // 5.2.0
$LNG['a_menu_manage'] = "Üye Yönetimi"; // 4.2.0
$LNG['a_menu_settings'] = "Ayarlar"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Küfür Filtresi"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Kara Liste"; // 5.2.0
$LNG['a_menu_backup'] = "Veritabanýný Yedekle"; // 5.2.0
$LNG['a_menu_skins'] = "Görünümler ve Kategoriler"; // 5.0
$LNG['a_menu_approve_reviews'] = "Yeni Yorumlar"; // 5.0
$LNG['a_menu_manage_reviews'] = "Yorum Yönetimi"; // 5.0
$LNG['a_menu_email'] = "Üyelere Mesaj";
$LNG['a_menu_delete_review'] = "Yorum Sil";
$LNG['a_menu_logout'] = "Çýkýþ";
$LNG['a_menu_delete'] = "Üye Sil";
$LNG['a_menu_edit'] = "Üye Düzenle";
$LNG['a_menu_create_page'] = "Yeni Sayfa Oluþtur"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Yeni Sayfalarý Yönet"; // 5.1.0
$LNG['a_header_members'] = "Üyeler"; // 5.0
$LNG['a_header_settings'] = "Ayarlar"; // 5.0
$LNG['a_header_tools'] = "Araçlar"; // 5.2.0
$LNG['a_header_reviews'] = "Yorumlar"; // 5.0
$LNG['a_header_pages'] = "Yeni Sayfalar"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Ayarlarý Deðiþtir";
$LNG['a_s_help'] = "Yardým"; // 5.1.0

$LNG['a_s_general'] = "Genel Ayarlar";
$LNG['a_s_admin_password'] = "Yönetici Þifresi";
$LNG['a_s_list_name'] = "Toplistinizin adý";
$LNG['a_s_list_url'] = "Toplist klasörünün URLsi";
$LNG['a_s_default_language'] = "Asýl dil";
$LNG['a_s_your_email'] = "E-mail adresiniz";

$LNG['a_s_sql'] = "SQL Ayarlarý";
$LNG['a_s_sql_type'] = "Veritabaný Tipi"; // 4.1.0
$LNG['a_s_sql_host'] = "Sunucu";
$LNG['a_s_sql_database'] = "Veritabaný";
$LNG['a_s_sql_username'] = "Kullanýcý adý";
$LNG['a_s_sql_password'] = "Þifre";

$LNG['a_s_ranking'] = "Puan Ayarlarý";
$LNG['a_s_num_list'] = "Her sayfada gösterilecek site sayýsý"; // 5.0
$LNG['a_s_ranking_period'] = "Sýralama Periyodu"; // 5.0
$LNG['a_s_ranking_method'] = "Sýralama metodu"; // 5.0
$LNG['a_s_ranking_average'] = "Ortlamaya göre sýrala ya da %s"; // 5.0
$LNG['a_s_featured_member'] = 'Özel Üye - Ýsterseniz wrapper.html de {$featured_member} deðiþkenine ekleyerek aktif edebilirsiniz.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Number of members to use the _top skin for";
$LNG['a_s_ad_breaks'] = "Bu sýralardan sonra reklam koy (Virgülle ayýrabilirsiniz) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Aþaðýdaki boþ satýrlarý \"{$LNG['table_your_site_here']}\" yazarak doldurunuz."; // 5.2.0

$LNG['a_s_member'] = "Üye Ayarlarý";
$LNG['a_s_active_default'] = "Yeni siteler listede gözükmeden önce sizin onayýnýz alýnsýn mý?";
$LNG['a_s_active_default_review'] = "Yeni yorumlar listede gözükmeden önce sizin onayýnýz alýnsýn mý?";
$LNG['a_s_delete_after'] = "Aktif olmayan üyeleri bu zamandan sonra sil (0 yazýlýrsa kapalý olur)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Yeni üye baþvurusu size e-mail ile yollansýn mý?"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Yeni yorum eklendiðinide size e-mail ile yollansýn mý?"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Üyelerin maksimum banner geniþliði (0 yazýlýrsa kapalý olur)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Üyelerin maksimum banner yüksekliði (0 yazýlýrsa kapalý olur)"; // 4.2.0
$LNG['a_s_default_banner'] = "Banner'ý olmayan üyelere geçerli bir banner koy";

$LNG['a_s_button'] = "Logo Ayarlarý";
$LNG['a_s_ranks_on_buttons'] = "Butonlar üzerinde sýra no -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Durum Butonlarý"; // 4.2.0
$LNG['a_s_button_url'] = "<b>Hayýr ise</b> - Üye sitelerde gözükecek logo URLsini giriniz"; // 4.0
$LNG['a_s_button_dir'] = "<b>Evet ise</b> - Logolarýn klasör URLsini giriniz"; // 4.0
$LNG['a_s_button_ext'] = "<b>Evet ise</b> - Logolarýn uzantýsý (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "<b>Evet ise</b> - Seçmeli logo sayýsý"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google dostu linkler - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Hileye karþý giriþ kapýsý";
$LNG['a_s_captcha'] = "Giriþte görsel doðrulama (spammerlara karþý koruma) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Spam engellemek için güvenlik sorusu ve cevabý (devre dýþý býrakmak için boþ býrakýn) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Diðer Ayarlar";
$LNG['a_s_search'] = "Arama";
$LNG['a_s_time_offset'] = "Serverýnýzýn zaman ofseti";

$LNG['a_s_on'] = "Açýk";
$LNG['a_s_off'] = "Kapalý";
$LNG['a_s_days'] = "Günler";
$LNG['a_s_months'] = "Aylar";
$LNG['a_s_weeks'] = "Haftalar"; // 4.2.0
$LNG['a_s_yes'] = "Evet";
$LNG['a_s_no'] = "Hayýr";
$LNG['a_s_answer'] = "Cevap"; // 5.2.0

$LNG['a_s_updated'] = "Ayarlar güncellendi.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Görünümler ve Kategoriler"; // 5.0
$LNG['a_skins_default'] = "Geçerli Görünüm"; // 5.0
$LNG['a_skins_set_default'] = "Geçerli Görünüm Olarak Ayarla"; // 5.0
$LNG['a_skins_anon'] = "Anonim"; // 5.0
$LNG['a_skins_default_done'] = "Geçerli görünüm olarak ayarlandý."; // 5.0
$LNG['a_skins_categories_done'] = "Kategori görünümü ayarlandý."; // 5.0
$LNG['a_skins_new_category_done'] = "Yeni kategori oluþturuldu."; // 5.0
$LNG['a_skins_delete_done'] = "Kategori silindi."; // 5.0
$LNG['a_skins_delete_error'] = "Bu kategori silinemez çünkü en az bir kategori olmalýdýr."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategori düzenlendi."; // 5.0
$LNG['a_skins_invalid_skin'] = "Yanlýþ görünüm: %s.  Lütfen ayarýnýzý deðiþtirin."; // 5.0
$LNG['a_skins_categories'] = "Kategoriler"; // 5.0
$LNG['a_skins_new_category'] = "Yeni Kategori Oluþtur"; // 5.0
$LNG['a_skins_set_skins'] = "Kategori Görünümleri Ayarla"; // 5.0
$LNG['a_skins_edit_category'] = "Kategori Düzenle"; // 5.0
$LNG['a_skins_category_name'] = "Kategori Adý"; // 5.0
$LNG['a_skins_diff_skins'] = "Her kategoriye farklý bir görünümü aþaðýdan seçiniz."; // 5.0
?>
