<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['smf_installer'] = 'Instalador SMF';
$txt['installer_language'] = 'Idioma';
$txt['installer_language_set'] = 'Establecer';
$txt['congratulations'] = '&iexcl;Felicidades!, o proceso de instalacion completouse';
$txt['congratulations_help'] = 'Se en algun momento precisas soporte, ou SMF non funciona correctamente, lembra que <a href="http://www.simplemachines.org/community/index.php" target="_blank">hai axuda dispoñible</a> en caso que a precise.
En caso de precisar soporte en galego ou atopar erros na traducion o galego,<a href="http://www.egalego.com/" target="_blank">visita egalego.com</a>';
$txt['still_writable'] = 'Todavia se pode escribir no teu directorio de instalacion. Recoméndase que uses chmod para que non sexa escribible por razóns de seguridade.';
$txt['delete_installer'] = 'Fai <i>click</i> aqui para borrar este arquivo install.php agora.';
$txt['delete_installer_maybe'] = '<i>(non funciona en tódolos servidores.)</i>';
$txt['go_to_your_forum'] = 'Agora podes ver <a href="%s">o teu foro recen instalado</a> e comezar a usalo. Primeiro debeste asegurar de ingresar co teu usuario, para posteriormente accesar ó area de administracion.';
$txt['good_luck'] = '&iexcl;Boa Sorte!<br />Simple Machines';

$txt['user_refresh_install'] = 'Foro Actualizado';
$txt['user_refresh_install_desc'] = 'Mentres se instalaba, o instalador atopou que (cos detalles que proporcionaches) unha ou mais das táboas que deban se crear xa existan.<br />Calquera táboa faltante no teu instalacion foi recreada cos datos de default, pero non se borro ningunha informacion das táboas existentes.';

$txt['default_topic_subject'] = '&iexcl;Benvido a SMF!';
$txt['default_topic_message'] = '&iexcl;Benvido ó foro Simple Machines!<br /><br />Agardamos que goces usa-lo teu foro.&nbsp; Se tes algun problema, sientete libre de [url=http://www.simplemachines.org/community/index.php]nos solicitar axuda[/url].<br /><br />&iexcl;Grazas!<br />Simple Machines';
$txt['default_board_name'] = 'Discusion Xeral';
$txt['default_board_description'] = 'Sintete libre de falar de calquera cousa neste foro.';
$txt['default_category_name'] = 'Categoria Xeral';
$txt['default_time_format'] = '%d de %B de %E, %I:%M:%S %p';
$txt['default_news'] = 'SMF - &iexcl;Recen Instalado!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[smite]';
$txt['default_karmaApplaudLabel'] = '[applaud]';
$txt['default_reserved_names'] = 'Admin\\Nwebmaster\\Nguest\\nroot';
$txt['default_smileyset_name'] = 'Default';
$txt['default_classic_smileyset_name'] = 'Classic';
$txt['default_theme_name'] = 'SMF Default Theme - Labre';
$txt['default_classic_theme_name'] = 'Classic YABB SE Theme';
$txt['default_babylon_theme_name'] = 'Babylon Theme';

$txt['default_administrator_group'] = 'Administrador';
$txt['default_global_moderator_group'] = 'Moderador Global';
$txt['default_moderator_group'] = 'Moderador';
$txt['default_newbie_group'] = 'Novato';
$txt['default_junior_group'] = 'Usuario Ir';
$txt['default_full_group'] = 'Usuario Completo';
$txt['default_senior_group'] = 'Usuario Sr.';
$txt['default_hero_group'] = 'Usuario Heroe';

$txt['default_smiley_smiley'] = 'Sorriso';
$txt['default_wink_smiley'] = 'Giñar';
$txt['default_cheesy_smiley'] = 'Cheesy';
$txt['default_grin_smiley'] = 'Sorrir';
$txt['default_angry_smiley'] = 'Enojado';
$txt['default_sad_smiley'] = 'Triste';
$txt['default_shocked_smiley'] = 'Impresionado';
$txt['default_cool_smiley'] = 'Cool';
$txt['default_huh_smiley'] = 'Huh?';
$txt['default_roll_eyes_smiley'] = 'Xirar ollos';
$txt['default_tongue_smiley'] = 'Lingua';
$txt['default_embarrassed_smiley'] = 'Avergonzado';
$txt['default_lips_sealed_smiley'] = 'Beizos selados';
$txt['default_undecided_smiley'] = 'Indeciso';
$txt['default_kiss_smiley'] = 'Bico';
$txt['default_cry_smiley'] = 'Chorar';
$txt['default_evil_smiley'] = 'Malvado';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';

$txt['error_message_click'] = 'Fai <i>click</i> aqui';
$txt['error_message_try_again'] = 'para tentar este paso novamente.';
$txt['error_message_bad_try_again'] = 'para tentar instalar de todos modos, pero é <i>altamente</i> recomendado que NON lo faga.';

$txt['install_settings'] = 'Configuracion basica';
$txt['install_settings_info'] = 'Soamente algunhas cousas que precisamos que configures ;).';
$txt['install_settings_name'] = 'Nome do foro';
$txt['install_settings_name_info'] = 'Este é o nome do teu foro, ex. &quot;O Foro de Probas&quot;.';
$txt['install_settings_name_default'] = 'A miña Comunidade';
$txt['install_settings_url'] = 'URL do Foro';
$txt['install_settings_url_info'] = 'Este é o URL do teu foro <b>sen a \'/\' do final</b>.<br />Na maioria das ocasións, podes deixa-lo valor por defecto deste cadro de texto - polo xeral ten o valor correcto.';
$txt['install_settings_compress'] = 'Saída Gzip';
$txt['install_settings_compress_title'] = 'Comprimir saída para aforrar ancho de banda.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Esta funcion non funciona correctamente en tódolos servidores, pero pode aforrar moito ancho de banda.<br />Fai <i>click</i> <a href="install.php?obgz=1&amp;pass_string=APROBADO" onclick="return Reqwin(this.href, 200, 60);">aqui</a> para lo proba. (debe dicir simplemente "APROBADO".)';
$txt['install_settings_dbsession'] = 'Sesións da Base de Datos';
$txt['install_settings_dbsession_title'] = 'Usa-la base de datos para as sesións en lugar de usar arquivos.';
$txt['install_settings_dbsession_info1'] = 'Esta opcion case sempre é recomendable seleccionala, xa que fai as sesións mais fiables.';
$txt['install_settings_dbsession_info2'] = 'Non asemella que esta opcion vaia funcionar no teu servidor, pero podes lo tenta.';
$txt['install_settings_utf8'] = 'UTF-8 Character Set';
$txt['install_settings_utf8_title'] = 'Use UTF-8 as default character set';
$txt['install_settings_utf8_info'] = 'This feature lets both the database and the forum use an international character set, UTF-8. This can be useful when working with multiple languages that use different character sets.';
$txt['install_settings_stats'] = 'Allow Stat Collection';
$txt['install_settings_stats_title'] = 'Allow Simple Machines to Collect Basic Stats Monthly';
$txt['install_settings_stats_info'] = 'If enabled, this will allow Simple Machines to visit your site once a month to collect basic statistics. This will help us make decisions as to which configurations to optimice the software for. For morre information please visit our <a href="http://www.simplemachines.org/about/stats.php" target="_blank">info pague</a>.';
$txt['install_settings_proceed'] = 'Proceder';

$txt['mysql_settings'] = 'Configuracion do Servidor MySQL';
$txt['mysql_settings_info'] = 'Estas son as opcións que se usan para o teu servidor MYSQL. Se non sábe-los valores, pregunta ó teu provedor de aloxamento que significan.';
$txt['mysql_settings_server'] = 'Nome do servidor MySQL';
$txt['mysql_settings_server_info'] = 'Case sempre é localhost - se non o sabe, podes tentar localhost.';
$txt['mysql_settings_username'] = 'Nome de usuario MySQL';
$txt['mysql_settings_username_info'] = 'Especifica aqui o nome de usuario que precisas para te conectar á túa base de datos MYSQL.<br />Se non o sabe, tenta co nome de usuario da túa conta ftp, a maioria das veces é o mesmo.';
$txt['mysql_settings_password'] = 'Contrasinal de MySQL';
$txt['mysql_settings_password_info'] = 'Aqui, introduce a contrasinal para te conectar á túa base de datos MYSQL.<br />Se non a sabe, tenta coa contrasinal da túa conta ftp.';
$txt['mysql_settings_database'] = 'Nome da base de datos MySQL';
$txt['mysql_settings_database_info'] = 'Especifica o nome da base de datos na que desexas que SMF almacene os seus datos.<br />Se esta base de datos non existe, o instalador tentaraa crear.';
$txt['mysql_settings_prefix'] = 'Prefixo para as táboas MySQL';
$txt['mysql_settings_prefix_info'] = 'O prefixo para cada táboa da base de datos.  <b>&iexcl;Non instales dous foros co mesmo prefixo!</b><br />Este valor permite varias instalacións nunha base de datos.';

$txt['user_settings'] = 'Crea a túa cuenta';
$txt['user_settings_info'] = 'Agora o instalador creara unha nova conta de administrador para ti.';
$txt['user_settings_username'] = 'O teu nome de usuario';
$txt['user_settings_username_info'] = 'Especifica o nome co que ingresaras.<br />Este nome NON podera ser cambiado despois, pero si o nome que se amose.';
$txt['user_settings_password'] = 'Contrasinal';
$txt['user_settings_password_info'] = 'Especifica a túa contrasinal aqui, &iexcl;e lembraa ben!';
$txt['user_settings_again'] = 'Contrasinal';
$txt['user_settings_again_info'] = '(Para verificar.)';
$txt['user_settings_email'] = 'Direccion email';
$txt['user_settings_email_info'] = 'Introduce o teu email.  <b>Debe ser unha direccion valida.</b>';
$txt['user_settings_database'] = 'Contrasinal da base de datos MySQL';
$txt['user_settings_database_info'] = 'O instalador precisa que lle proporciones a contrasinal da base de datos para crear unha conta de administrador, por razóns de seguridade.';
$txt['user_settings_proceed'] = 'Finalizar';

$txt['ftp_setup'] = 'Informacion da conexion FTP';
$txt['ftp_setup_info'] = 'Este instalador pode se conectar vexa FTP para arranxar os arquivos que precisan ter permisos de escritura e non os posúen. Se isto non funciona para ti deberas acceder manualmente e modifica-los permisos de escritura. Toma nota que que isto non soporta SSL polo momento.';
$txt['ftp_server'] = 'Servidor';
$txt['ftp_server_info'] = 'Debes especifica-lo servidor e o porto do teu servidor de FTP.';
$txt['ftp_port'] = 'Porto';
$txt['ftp_username'] = 'Nome de usuario';
$txt['ftp_username_info'] = 'O nome de usuario co que ingresases. <i>Esta informacion non sera gardada en ningun lado.</i>';
$txt['ftp_password'] = 'Contrasinal';
$txt['ftp_password_info'] = 'A contrasinal para poder ingresar. <i>Esta informacion non sera gardada en ningun lado.</i>';
$txt['ftp_path'] = 'Ruta da instalacion';
$txt['ftp_path_info'] = 'Esta é a ruta <i>relativa</i> que se usase no teu servidor FTP.';
$txt['ftp_path_found_info'] = 'A ruta no cadro superior foi detectado automaticamente.';
$txt['ftp_connect'] = 'Se conectar';
$txt['ftp_setup_why'] = '&iquest;Para que serve este paso?';
$txt['ftp_setup_why_info'] = 'Algúns arquivos precisan ter permisos de escritura para que SMF funcione correctamente.  Este paso permite que o instalador fágaos escribibles por ti.  Sen embargo, nalgúns casos isto non funciona - se é o teu caso, modifica os seguintes arquivos a 777 (escribibles):';
$txt['ftp_setup_again'] = 'para comprobar se estes arquivos son escribibles novamente.';

$txt['error_php_too_low'] = '&iexcl;Advertencia!  Asemella que non tes instalada unha version de PHP no teu servidor que cumpra cos <b>requisitos minimos para instalacion</b> que precisa SMF.<br />Se non e-lo dono do servidor, deberas lle solicitar ó teu provedor de aloxamento que actualice PHP, ou usar un servidor diferente - doutra maneira, actualiza PHP a unha version mais recente.<br /><br />Se estas seguro que o teu version de PHP é o suficientemente recente podes continuar, , pero é <i>altamente</i> recomendado que NON lo faga.';
$txt['error_missing_files'] = '&iexcl;Imposible atopar arquivos imprescindibles para a instalacion no directorio deste script!<br /><br />Comproba que subas o paquete completo de instalacion, incluído o arquivo sql, e tenta novamente.';
$txt['error_session_save_path'] = '&iexcl;Por favor informa ó teu provedor de aloxamento que o valor de <b>session.save_path especificado en php.ini</b> é invalido! Precisa ser cambiado  a un directorio que <b>exista</b>, e que sexa <b>escribible</b> polo usuario baixo o cal se esta executando PHP.<br />';
$txt['error_windows_chmod'] = 'Estas nun servidor Windows, e algúns dos arquivos cruciais non son escribibles.  Solicita ó teu provedor de aloxamento que lle outorgue <b>permisos de escritura</b> ó usuario baixo o cal se esta executando PHP.  Os seguintes arquivos ou directorios deben ser escribibles:';
$txt['error_ftp_no_connect'] = 'Imposible se conectar ó servidor FTP con esta combinacion de valores.';
$txt['error_mysql_connect'] = 'Non se pode conectar ó servidor da base de datos MYSQL cos valores proporcionados.<br /><br />Se non esta seguro de que valores proporcionar, por favor contacta ó teu provedor de aloxamento.';
$txt['error_mysql_too_low'] = 'A version de MYSQL que o teu servidor de base de datos esta utilizando é demasiado vella, e non cumpre os requisitos minimos de SMF.<br /><br />Solicita ó teu provedor de aloxamento que a actualice, ou proporciónete unha nova, e se non o fan cambia a un provedor de aloxamento diferente.';
$txt['error_mysql_database'] = 'O instalador non puido accesar á base de datos &quot;<i>%s</i>&quot;.  Nalgúns servidores, tes que crea-la base de datos no teu panel de control antes que SMF poida la usa.  Algúns tamen engaden prefijos - como o teu nome de usuario- ós nomes da bases de datos.';
$txt['error_mysql_queries'] = 'Algunhas las consulta SQL non foron executadas exitosamente.  Isto pode ser causado por unha version non soportada ou moi antiga de MYSQL.<br /><br />Informacion tecnica achega las consulta SQL:';
$txt['error_mysql_queries_line'] = 'Linea #';
$txt['error_mysql_missing'] = 'O instalador non puido detectar soporte para MYSQL en PHP.  Preguntale ó teu provedor de aloxamento se PHP foi compilado con soporte para MYSQL, ou se a extension apropiada esta cargada.';
$txt['error_session_missing'] = 'O instalador non detecto soporte para sesións na instalacion de PHP no teu servidor.  Pidele por favor ó teu provedor de hospedaje que se asegure que PHP sexa compilado con soporte para sesións (De feito, debérono haber compilado explicitamente in dito soporte.)';
$txt['error_user_settings_again_match'] = '&iexcl;Escribiches dúas contrasinais completamente diferentes.!';
$txt['error_user_settings_taken'] = 'Sentímolo, xa existe un usuario rexistrado con ese usuario ou contrasinal.<br /><br />Non se creo unha nova conta.';
$txt['error_user_settings_query'] = 'Hai un erro na base de datos cando se trataba de crear un administrador.  O erro foi:';
$txt['error_subs_missing'] = 'Non é posible atopar o arquivo Sources/Subs.php. Comproba que lo subiche correctamente, e intentalo novamente.';
$txt['error_mysql_alter_priv'] = 'A conta de MYSQL que especificaches non ten permiso para as funcións ALTER, CREATE, ou DROP nas táboas da base de datos; estes comandos son necesarios para o funcionamento correcto de SMF.';
$txt['error_versions_do_not_match'] = 'The installer has detected another version of SMF already installed with the specified information.  If you are trying to upgrade, you should use the upgrader, not the installer.<br /><br />Otherwise, you may wish to use different information, or create a backup and then delete the data currently in the database.';
$txt['error_mod_security'] = 'The installer has detected the mod_security module is installed on your web server. Mod_security will block submitted forms even before SMF gets a say in anything. SMF has a built-in security scanner that will work more effectively than mod_security and that won\'t block submitted forms.<br /><br /><a href="http://www.simplemachines.org/redirect/mod_security">More information about disabling mod_security</a>';
$txt['error_utf8_mysql_version'] = 'The current version of your database doesn\'t support the use of the UTF-8 character set. You can still install SMF without any problems, but only with UTF-8 support unchecked. If you would like to switch over to UTF-8 in the future (e.g. after the MySQL server of your forum has been upgraded to a version >= 4.1), you can convert your forum to UTF-8 through the admin panel.';

?>