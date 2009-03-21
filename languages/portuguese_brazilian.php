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
$translation = 'Portuguese (Brazilian) (Português Brasileiro)';
$translator_name = 'Jorge Luis Ferrari Ce';
$translator_email = 'Wheez@uol.com.br';
$translator_url = 'http://www.wheez.com.br/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "Enviar";
$LNG['g_username'] = "Usuário";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Titulo";
$LNG['g_description'] = "Descrição";
$LNG['g_category'] = "Categoria"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "URL do Banner";
$LNG['g_password'] = "Senha";
$LNG['g_average'] = "Média";
$LNG['g_today'] = "Hoje";
$LNG['g_yesterday'] = "Ontem";
$LNG['g_daily'] = "Diariamente"; // 5.0
$LNG['g_this_month'] = "Este Mês"; // 5.0
$LNG['g_last_month'] = "Mês Passado"; // 5.0
$LNG['g_monthly'] = "Mensalmente"; // 5.0
$LNG['g_this_week'] = "Esta Semana"; // 5.0
$LNG['g_last_week'] = "Semana Passada"; // 5.0
$LNG['g_weekly'] = "Semanalmente"; // 5.0
$LNG['g_pv'] = "Visualzações"; // 5.0
$LNG['g_overall'] = "Geral"; // 5.0
$LNG['g_in'] = "Entrada"; // 5.0
$LNG['g_out'] = "Saída"; // 5.0
$LNG['g_unq_pv'] = "Visualizações Únicas"; // 5.0
$LNG['g_tot_pv'] = "Total de Vis. Únicas"; // 5.0
$LNG['g_unq_in'] = "Entradas Únicas"; // 5.0
$LNG['g_tot_in'] = "Entradas(Total)"; // 5.0
$LNG['g_unq_out'] = "Saídas Únicas"; // 5.0
$LNG['g_tot_out'] = "Saídas(Total)"; // 5.0
$LNG['g_invalid_u_or_p'] = "Usuário ou Senha invalidos. Por favor, tente novamente."; // 5.0
$LNG['g_invalid_u'] = "Usuário Invalido. Tente novamente."; // 5.0
$LNG['g_invalid_p'] = "Senha Invalida. Tente novamente."; // 5.0
$LNG['g_session_expired'] = "Sua sessão expirou. Logue novamente."; // 5.0
$LNG['g_error'] = "Erro"; // 5.0
$LNG['g_delete_install'] = "Por razões de segurança delete a pasta \install antes de rodar o script."; // 5.0
$LNG['g_ip'] = "IP Address"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Editar Conta";
$LNG['edit_info_edited'] = "Sua conta foi editada com êxito.";
$LNG['edit_password_blank'] = "Deixe em branco para não alterar a senha."; // 4.0
$LNG['edit_delay'] = "Mudanças no titulo e na URL de seu site devem ser aprovadas pelo administrador antes de aparecem."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Gateway dos Topsites";
$LNG['gateway_text'] = "Para evitar trapaça foi instalado um gateway, para entrar na lista de TopSites clique abaixo.";
$LNG['gateway_vote'] = "Entrar e Votar";
$LNG['gateway_no_vote'] = "Entrar Sem Votar"; // 5.0

// Install
$LNG['install_header'] = "Instalar";
$LNG['install_welcome'] = "Bem vindo ao Aardvark Topsites PHP 5.  Preencha o formulário abaixo para instalar.";
$LNG['install_sql_prefix'] = "Prefixo da Tabela - Mude somente se usar mais de um TopSite list por Database";
$LNG['install_error_chmod'] = "Não foi possível escrever, altere o CHMOD de setting_sql.php para 666.";
$LNG['install_error_sql'] = "Não foi possível conectar ao SQL, verifique asconfigurações.";
$LNG['install_done'] = "Seu script de topsite foi instalado. Por favor delete esta pasta.";
$LNG['install_your'] = "Sua lista de TopSites";
$LNG['install_admin'] = "Admin";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Atualizar";
$LNG['upgrade_welcome'] = "Bem vindo ao Aardvark Topsites PHP 5.  Ante sde atualizar, faça um backup do DB.";
$LNG['upgrade_version'] = "Por favor tenha certeza de instalar um versão mais nova que a %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Atualização só é suportada por Aardvark Topsites PHP 4.1.0 ou mais novos.";
$LNG['upgrade_done'] = "Sua lista TopSites foi atualizada. Delete esta pasta agora.";
$LNG['install_mailing_list'] = "Se você quiser entrar na mail list da Aardvark Topsites PHP, ponha seu e-mail abaixo.  É uma lista com poucas mensagens, sendo estas de atualização e avisos de segurança."; // 5.2.0

// Join
$LNG['join_header'] = "Inscrever-se";
$LNG['join_enter_text'] = "Digite o texto como na imagem acima."; // 4.2.2
$LNG['join_enter_text_read'] = "Não consegue ler?"; // 5.2.0
$LNG['join_user'] = "Usuário"; // 5.0
$LNG['join_website'] = "Site"; // 5.0
$LNG['join_banner_size'] = "(Tamanho Máximo: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Entre com um nome de usuário válido, somente letras, números, underlines, e hífens."; // 5.0
$LNG['join_error_username_duplicate'] = "Este nome de usuário já esta em uso."; // 5.0
$LNG['join_error_url'] = "Informe uma URL válida.";
$LNG['join_error_email'] = "Informe um email válido.";
$LNG['join_error_title'] = "Informe um título para seu site.";
$LNG['join_error_password'] = "Informe a Senha.";
$LNG['join_error_confirm_password'] = "As senhas não conferem."; // 5.2.0
$LNG['join_error_urlbanner'] = "Ponha um banner válido, caso não tenha, deixe em branco."; // 5.2.0
$LNG['join_error_time'] = "Não atualiza a página de confirmação de cadastro."; // 4.2.0
$LNG['join_error_captcha'] = "A palavra não confere com a imagem."; // 4.2.2
$LNG['join_error_question'] = "Sua resposta esta errada. Por favor responda corretamente para termos certeza que você não é um BOT."; // 5.2.0
$LNG['join_thanks'] = "Obrigado por se inscrever, ponha este código no seu site para ser rankiado.";
$LNG['join_change_warning'] = "Se você mudar o código, ele não deve funcionar.";
$LNG['join_welcome'] = "Bem vindo ao %s";
$LNG['join_welcome_admin'] = "Há um novo membro na lista de TopSites.";
$LNG['join_approve'] = "Obrigado por se inscrever!  Seu site só será listado quando for aprovado pelo administrador. Você receberá um email com novas informações quando isso ocorrer. O Prazo máximo é de 48 Horas. "; // 5.2.0
$LNG['join_type'] = "Tipo de Conta"; // 5.1.0
$LNG['join_standard'] = "Padrão"; // 5.1.0
$LNG['join_error_top'] = "Foi encontrado um erro na sua inscrição. Corrija o erro acima."; // 5.2.0
$LNG['join_ban_top'] = "Sua inscrição contém conteúdo não permitido pelo administrado, revise."; // 5.2.0
$LNG['join_security'] = "Segurança."; // 5.2.0
$LNG['join_confirm_password'] = "Confirmar Senha"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Código do Link"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Senha Perdida"; // 5.0
$LNG['lost_pw_forgot'] = "Esqueceu sua Senha?"; // 5.0
$LNG['lost_pw_get'] = "Pegar Senha"; // 5.0
$LNG['lost_pw_emailed'] = "Veja seu email para maiores instruções."; // 5.0
$LNG['lost_pw_email'] = "Para pegar uma nova senha para seu site visite esta URL:"; // 5.0
$LNG['lost_pw_new'] = "Escolha uma nova senha"; // 5.0
$LNG['lost_pw_set_new'] = "Confirmar Nova Senha"; // 5.0
$LNG['lost_pw_finish'] = "Sua senha foi mudada, obrigado por participar."; // 5.0

// Main Page
$LNG['main_header'] = "Rankings"; // 5.0
$LNG['main_all'] = "Todos os Sites"; // 4.2.0
$LNG['main_method'] = "Método de Rank";
$LNG['main_members'] = "Membros";
$LNG['main_menu_rankings'] = "Rankings";
$LNG['main_menu_join'] = "Inscrever-se";
$LNG['main_menu_random'] = "Membro Aleatório";
$LNG['main_menu_search'] = "Busca";
$LNG['main_menu_lost_code'] = "Código Perdido"; // 5.0
$LNG['main_menu_lost_password'] = "Senha Perdida"; // 5.0
$LNG['main_menu_edit'] = "Editar Informações";
$LNG['main_menu_user_cp'] = "Painel de Controle"; // 5.0
$LNG['main_featured'] = "Usuário Destque"; // 4.0.2
$LNG['main_executiontime'] = "Tempo de exucação do script"; // 4.0
$LNG['main_queries'] = "SQL Queries"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Status";
$LNG['table_unique'] = "Unicos";
$LNG['table_total'] = "Total";
$LNG['table_rank'] = "Rank";
$LNG['table_title'] = "Título"; // 4.0
$LNG['table_description'] = "Descrição"; // 4.0
$LNG['table_movement'] = "Movimento";
$LNG['table_up'] = "Up"; // 5.0
$LNG['table_down'] = "Down"; // 5.0
$LNG['table_neutral'] = "Neutral"; // 5.0
$LNG['table_your_site_here'] = "Seu site aqui"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Dar nota e comentar.";
$LNG['rate_message'] = "Por favor ponha sua nota e comentário de(a/o) %s no formulário abaixo."; // 5.2.0
$LNG['rate_rating'] = "Nota";
$LNG['rate_review'] = "Comentário - Sem HTML"; // 5.0
$LNG['rate_thanks'] = "Obrigado.";
$LNG['rate_error'] = "Você já votou neste site.";
$LNG['rate_back'] = "Voltar aos Status.";
$LNG['rate_email_admin'] = "Um novo comentário foi postado na sua lista de TopSites."; // 5.1.0

// Search
$LNG['search_header'] = "Busca";
$LNG['search_off'] = "A Busca foi desabilitada.";
$LNG['search_no_sites'] = "Desculpe, não foram encontrados sites com esses critérios."; // 5.0
$LNG['search_prev'] = "Anteriores"; // 3.2.1
$LNG['search_next'] = "Próximos"; // 3.2.1
$LNG['search_displaying_results'] = "Monstrando %s à %s de %s resultados para <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Status";
$LNG['stats_info'] = "Infos";
$LNG['stats_member_since'] = "Membro Desde"; // 5.0
$LNG['stats_rating_avg'] = "Nota Média";
$LNG['stats_rating_num'] = "Numero de Votos";
$LNG['stats_rate'] = "Votar e Comentar";
$LNG['stats_reviews'] = "Comentários";
$LNG['stats_allreviews'] = "Mostrar todos comentários"; // 4.0
$LNG['stats_week'] = "Semana"; // 5.0
$LNG['stats_highest'] = "Maiores"; // 5.0
$LNG['stats_overall'] = "Status Gerais"; // 5.2.0
$LNG['stats_overall_average'] = "Média(Ultimos 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Total(All Time)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s Novos Membros"; // 5.0
$LNG['ssi_all'] = "Todos Sites"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Painel de Controle"; // 5.0
$LNG['user_cp_login'] = "Login"; // 5.0
$LNG['user_cp_logout'] = "Logout"; // 5.0
$LNG['user_cp_welcome'] = "Bem vindo ao Painel de Controle. Use os links na esquerda para gerenciar sua conta."; // 5.0
$LNG['user_cp_logout_message'] = "Você fez Logout com sucesso."; // 5.0
$LNG['user_cp_login_long'] = "Faça login com seu nome de usuário e senha."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Impossível achar o OpenID de %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Você deve se inscrever antes de usar o painel de controle."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Ocorreu um erro no seu login. Tente novamente."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Você não tem acesso. Tente novamente."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Erro do Servidor: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Você não pode acessar o painel de controle enquanto seu site não for aprovado. Você receberá um emai quando isso acontecer, o prazo máximo é 48 Horas."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Aprovar Novos Membros"; // 5.0
$LNG['a_approve'] = "Aprovar"; // 4.0
$LNG['a_approve_none'] = "Não existem membros esperando aprovação."; // 4.0
$LNG['a_approve_done'] = "Membro aprovado."; // 4.0
$LNG['a_approve_dones'] = "Os membros foram aprovados."; // 4.0
$LNG['a_approve_sel'] = "Selecionados:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Aprovar edição dos membros"; // 5.2.0
$LNG['a_approve_edited_none'] = "Não existem edições para serem aprovadas."; // 5.2.0
$LNG['a_approve_edited_old'] = "Titulo e URL anteriores"; // 5.2.0
$LNG['a_approve_edited_new'] = "Título e UEL editadas"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Rejeitar"; // 5.2.0
$LNG['a_approve_edited_done'] = "As mudanças foram aprovadas."; // 5.2.0
$LNG['a_approve_rejected_done'] = "As mudanças foram rejeitadas."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Aprovar novos comentários"; // 5.0
$LNG['a_approve_rev_none'] = "Não há comentários para aprovar."; // 5.0
$LNG['a_approve_rev_done'] = "O comentário foi aprovado."; // 5.0
$LNG['a_approve_rev_dones'] = "Os comentário foram aprovados."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Backup Database"; // 5.2.0
$LNG['a_backup_warn'] = "Isso cria um backup de membros, sites, e votos, se você possui muitos membros isso pode levar algum tempo e gerar um arquivo grande."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Criar Página Customizada"; // 5.1.0
$LNG['a_create_page_id'] = "Page ID - Será usado na url, só pode conter letras, numeros, underlines, e hífens"; // 5.1.0
$LNG['a_create_page_error_id'] = "O Page ID só pode conter letras, números, underlines e hífens, por favor, corrija."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Já existe esta Page ID, por favor use outra."; // 5.1.0
$LNG['a_create_page_created'] = "A página foi criada. Você deve adicionar o link manualmente à %s em wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Deletar Membro"; // 5.0
$LNG['a_del_headers'] = "Deletar Membros"; // 5.0
$LNG['a_del_done'] = "Membro Deletado."; // 5.0
$LNG['a_del_dones'] = "Membros Deletados."; // 5.0
$LNG['a_del_warn'] = "Você tem certeza que deseja deletar %s?"; // 5.0
$LNG['a_del_multi'] = "estes %s membros"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Deletar Palavra de Filtro"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Deletar Palavras de Filtro"; // 5.1.0
$LNG['a_del_bad_word_done'] = "A Palavra de Filtro foi deletada."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "As Palavras de Filtro foram deletadas."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Você tem certeza que deseja deletar %s da lista de palavras filtradas?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "estas %s palavras"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "ID de Palavra de Filtro inválida. Tente Novamente."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Deletar Entrada da Lista Negra"; // 5.2.0
$LNG['a_del_ban_headers'] = "Deletar Entradas da Lista Negra"; // 5.2.0
$LNG['a_del_ban_done'] = "A Entrada da Lista Negra foi Apagada."; // 5.2.0
$LNG['a_del_ban_dones'] = "As Entradas da Lista Negra foram Apagadas."; // 5.2.0
$LNG['a_del_ban_warn'] = "Você tem certeza que deseja deletar %s da Lista Negra?"; //5.2.0
$LNG['a_del_ban_multi'] = "estas %s entradas"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Blacklist ID inexistente. Tente Novamente."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Deletar Página Customizada"; // 5.1.0
$LNG['a_del_page_headers'] = "Deletar Páginas Customizadas"; // 5.1.0
$LNG['a_del_page_done'] = "A Página customizada foi Deletada."; // 5.1.0
$LNG['a_del_page_dones'] = "As Páginas customizadas foram Deletadas."; // 5.1.0
$LNG['a_del_page_warn'] = "Você tem certeza que deseja deletar %s?"; //5.1.0
$LNG['a_del_page_multi'] = "estas %s páginas"; //5.1.0
$LNG['a_del_page_invalid_id'] = "ID de Página inexistente.Tente Novamente."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Deletar Comentário"; // 5.0
$LNG['a_del_rev_headers'] = "Deletar Comentários"; // 5.0
$LNG['a_del_rev_done'] = "O Comentário foi Deletado."; // 5.0
$LNG['a_del_rev_dones'] = "Os Comentários foram Deletados."; // 5.0
$LNG['a_del_rev_warn'] = "Você tem certeza que deseja deletar este comentário?"; //5.0
$LNG['a_del_rev_warns'] = "Você tem certeza que deseja deletar estes comentários?"; //5.0
$LNG['a_del_rev_invalid_id'] = "ID de comentário inválida. Tente novamente."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Editar Membro"; // 5.0
$LNG['a_edit_site_is'] = "Este site é"; // 4.0
$LNG['a_edit_active'] = "Ativo(Listado)"; // 4.0
$LNG['a_edit_inactive'] = "Inativo(Não Listado)"; // 5.0
$LNG['a_edit_edited'] = "Membro Editado.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Editar Filtro de Palavra"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtro de Palavra editado.."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Editar Entrada da Lista Negra."; // 5.2.0
$LNG['a_edit_ban_edited'] = "Entrada de Lista Negra Editada."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Editar Página Customizada"; // 5.1.0
$LNG['a_edit_page_content'] = "Conteúdo - Você pode usar HTML aqui."; // 5.1.0
$LNG['a_edit_page_edited'] = "Página editada."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Editar comentário"; // 5.0
$LNG['a_edit_rev_edited'] = "Comentário Editado.";

// Admin > Email Members
$LNG['a_email_header'] = "Enviar Email p/ Membros"; // 5.0
$LNG['a_email_subject'] = "Assunto"; // 4.2.0
$LNG['a_email_message'] = "Mensagem"; // 4.2.0
$LNG['a_email_msg_sent'] = "Email enviado para %s"; // 5.0
$LNG['a_email_not_sent'] = "Email não enviado para %s"; // 5.0
$LNG['a_email_sent'] = "%s membros receberam o email."; // 4.2.0
$LNG['a_email_failed'] = "%s não receberam o email."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Você acaba de fazer Logout de Admin."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Bem vindo a Administração, uso os links a esquerda para gerenciar o site."; // 5.0
$LNG['a_main_approve'] = "Existe 1 site aguardando aprovação."; // 5.0
$LNG['a_main_approves'] = "Existem %s sites aguardando aprovação."; // 5.0
$LNG['a_main_approve_edit'] = "Existe 1 edição aguardando aprovação."; // 5.2.0
$LNG['a_main_approve_edits'] = "Existem %s edições aguardando aprovação."; // 5.2.0
$LNG['a_main_approve_rev'] = "Existe 1 comentário aguardando aprovação."; // 5.0
$LNG['a_main_approve_revs'] = "Existem %s comentários aguardando aprovação."; // 5.0
$LNG['a_main_your'] = "Sua versão"; // 5.0
$LNG['a_main_latest'] = "Ultima Versão"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Gerenciar Membros"; // 5.0
$LNG['a_man_actions'] = "Ações"; // 4.2.0
$LNG['a_man_edit'] = "Editar"; // 4.2.0
$LNG['a_man_delete'] = "Deletar"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Selecionar Todos"; // 5.0
$LNG['a_man_none'] = "Selecionar Nenhum"; // 5.0
$LNG['a_man_del_sel'] = "Deletar Selecionados"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Filtro de Profanidade"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Ponha a palavra e sua substuição abaixo. Por exemplo \"hell\" como palavra e \"h***\" como substituição."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Exatamente Igual só vai detectar a palavra igual.  Igual GLOBAL vai detectar qualquer coisa que contenha a palavra.  O GLOBAL de \"hell\" também detectaria \"shell\" e \"hello\"."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Palavra"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Substituição"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Igual"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exatamente"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Global"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtro de Palavra"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" foi adicionado ao filtro de profanidade."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Lista Negra"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Para banir sites e usuários, preencha o formulário abaixo.  Quando um membro se inscreve, a URL, o email, o nome de usuário e o ip são checados.  Quando um site é editado, a url e o titulo são checados.<br /><br />A lista negra não afeta memros existentes."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Exatamente Igual vai detectar somente palavras iguais.  GLOBAL Igual vai detectar qualquer coisa que contenha a palavra.  Então o GLOBAL de http://www.yahoo.com/ detectaria qualquer página com http://www.yahoo.com/ na URL, enquanto o Exatamente Igual detectaria apenas http://www.yahoo.com/."; // 5.2.0
$LNG['a_man_ban_string'] = "Palavra"; // 5.2.0
$LNG['a_man_ban_field'] = "Campo"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" foi adicionado a lista negra."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Gerenciar Páginas Customizadas"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Gerenciar Comentários"; // 5.0
$LNG['a_man_rev_enter'] = "Para gerenciar os comentários de um membro, entre com o nome dele abaixo."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Comentário"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "Principal"; // 5.0
$LNG['a_menu_approve'] = "Aprovar Novos Membros";
$LNG['a_menu_approve_edits'] = "Aprovar Edição de Membros"; // 5.2.0
$LNG['a_menu_manage'] = "Gerenciar Membros"; // 4.2.0
$LNG['a_menu_settings'] = "Mudar Configurações"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filtro de Profanidade"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Lista Negra"; // 5.2.0
$LNG['a_menu_backup'] = "Backup Database"; // 5.2.0
$LNG['a_menu_skins'] = "Skins e Categorias"; // 5.0
$LNG['a_menu_approve_reviews'] = "Aprovar Novos Comentários"; // 5.0
$LNG['a_menu_manage_reviews'] = "Gerenciar Comentários"; // 5.0
$LNG['a_menu_email'] = "Email p/ Membros";
$LNG['a_menu_delete_review'] = "Deletar Comentário";
$LNG['a_menu_logout'] = "Logout";
$LNG['a_menu_delete'] = "Deletar Membro";
$LNG['a_menu_edit'] = "Editar Membro";
$LNG['a_menu_create_page'] = "Criar Página Customizada"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Gerenciar Páginas Customizadas"; // 5.1.0
$LNG['a_header_members'] = "Membros"; // 5.0
$LNG['a_header_settings'] = "Configurações"; // 5.0
$LNG['a_header_tools'] = "Ferramentas"; // 5.2.0
$LNG['a_header_reviews'] = "Comentários"; // 5.0
$LNG['a_header_pages'] = "Páginas Customizadas"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Mudar Configurações";
$LNG['a_s_help'] = "Ajuda(inglês)"; // 5.1.0

$LNG['a_s_general'] = "Configurações Gerais";
$LNG['a_s_admin_password'] = "Senha Administrados";
$LNG['a_s_list_name'] = "O nome da sua lista de TopSites";
$LNG['a_s_list_url'] = "URL p/ sua lista TopSites";
$LNG['a_s_default_language'] = "Lingua Padrão";
$LNG['a_s_your_email'] = "Seu email";

$LNG['a_s_sql'] = "Configurações SQL";
$LNG['a_s_sql_type'] = "Tipo de Banco de Dados"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Database";
$LNG['a_s_sql_username'] = "Username";
$LNG['a_s_sql_password'] = "Password";

$LNG['a_s_ranking'] = "Configurações de Rank";
$LNG['a_s_num_list'] = "Número de membros por página"; // 5.0
$LNG['a_s_ranking_period'] = "Período de Rank"; // 5.0
$LNG['a_s_ranking_method'] = "Método de Rank"; // 5.0
$LNG['a_s_ranking_average'] = "Rank por média ou somente %s"; // 5.0
$LNG['a_s_featured_member'] = 'Membro Destaque - Você deve adicionar {$featured_member} à wrapper.html depois de ligar isso.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Número de membros para usar a skin _top";
$LNG['a_s_ad_breaks'] = "Mostrar anúncios depois destes ranks (separe com virgula) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Preencher linhas brancas com a mensagem \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Configurações de Membros";
$LNG['a_s_active_default'] = "Requerer aprovação de membros antes de serem listados";
$LNG['a_s_active_default_review'] = "Requerer que novos comentários sejam aprovados antes de listados";
$LNG['a_s_delete_after'] = "Deletar usuários inativos à X dias (deixe 0 para desligar)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Mandar email ao administrador quando um novo usuário se cadastrar"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Mandar email ao administrador quando houve um novo comentário"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Largura máxima do banner dos membros (0 para desligar)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Altura máxim do banner dos membros (0 para desligar)"; // 4.2.0
$LNG['a_s_default_banner'] = "Banner padrão para aqueles que não possuem um";

$LNG['a_s_button'] = "Configurações de Botão";
$LNG['a_s_ranks_on_buttons'] = "Ranks nos botões -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Status de Botões"; // 4.2.0
$LNG['a_s_button_url'] = "Se Sim/Não - URL para o botão padrão que você quer que aparece no site dos membros"; // 4.0
$LNG['a_s_button_dir'] = "Se Sim - URL para a pasta onde estão os botões"; // 4.0
$LNG['a_s_button_ext'] = "Se Sim - Extensão para os botões(gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "Se Sim - Número de botões que você fez"; // 4.0
$LNG['a_s_google_friendly_links'] = "Links amigáveis do google - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Gateway para detectar trapaças";
$LNG['a_s_captcha'] = "Verificação de imagem para previnir spammers - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Pergunta e resposta de segurança para rpevinir BOTS (Deixe branco para desabilitar) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Outras Configurações";
$LNG['a_s_search'] = "Busca";
$LNG['a_s_time_offset'] = "Time Offser do seu servidor(em horas)(OBS: Brasil = -3(Brasília))";

$LNG['a_s_on'] = "Ligado";
$LNG['a_s_off'] = "Desligado";
$LNG['a_s_days'] = "Dias";
$LNG['a_s_months'] = "Meses";
$LNG['a_s_weeks'] = "Semanas"; // 4.2.0
$LNG['a_s_yes'] = "Sim";
$LNG['a_s_no'] = "Não";
$LNG['a_s_answer'] = "Resposta"; // 5.2.0

$LNG['a_s_updated'] = "Suas configurações foram atualizadas.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Skins e Categorias"; // 5.0
$LNG['a_skins_default'] = "Skin Padrão"; // 5.0
$LNG['a_skins_set_default'] = "Definir Skin Padrão"; // 5.0
$LNG['a_skins_anon'] = "Anônimo"; // 5.0
$LNG['a_skins_default_done'] = "A Skin padrão foi definida."; // 5.0
$LNG['a_skins_categories_done'] = "A Skin de categoria foi definida."; // 5.0
$LNG['a_skins_new_category_done'] = "A nova categoria foi criada."; // 5.0
$LNG['a_skins_delete_done'] = "Categoria Deletara."; // 5.0
$LNG['a_skins_delete_error'] = "A categoria não foi deletada pois você deve possuir pelo menos 1 categoria."; // 5.1.0
$LNG['a_skins_edit_done'] = "A categoria foi editada."; // 5.0
$LNG['a_skins_invalid_skin'] = "Skin Inválida: %s.  Tente Novamente."; // 5.0
$LNG['a_skins_categories'] = "Categorias"; // 5.0
$LNG['a_skins_new_category'] = "Criar Nova Categoria"; // 5.0
$LNG['a_skins_set_skins'] = "Definir Skin de Categoria"; // 5.0
$LNG['a_skins_edit_category'] = "Editar Categoria"; // 5.0
$LNG['a_skins_category_name'] = "Nome da Categoria"; // 5.0
$LNG['a_skins_diff_skins'] = "Se você deseja skins diferentes para categorias diferentes, escolha abaixo."; // 5.0
?>
