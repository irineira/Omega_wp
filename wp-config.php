<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'sanya_test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TvpVP91hzsu2k`0HJR]>4|E%L1:GQ7[jumpYT$*CZn0Do[{v(@&e;Gr!GJX`.c[t' );
define( 'SECURE_AUTH_KEY',  'C4vBq5B|&u=c*59MO4dy|-70DBMut?`QyZgLKXo(Qs?u&0jO!o3{JT@jff}+I|H_' );
define( 'LOGGED_IN_KEY',    'Iu1I-Jp)~_J1y`^xm2x4`(xL9iAkR0HubJf>v#g!NJ(BCKbiw]Rp.ShynYHuU*Hz' );
define( 'NONCE_KEY',        'zFbw8&MEL}1!m*(CGU~%~CjXV]Nf]~O/0hvf(5V`v.&<fv)@{,_Q<yMG=3c]$no4' );
define( 'AUTH_SALT',        '^@mVTI!w>H^}.xJF4GGX||rOgnl{Y_Uqvehsn(>ZOjwz=KDL}kW7rv,F,L.Zla;3' );
define( 'SECURE_AUTH_SALT', '],jjO%Ptg{:t~;mY8e;_w9o_P#hnXKNVA9n2sm]TrGrjq@Ed`]6n`KJ?N9#uh6zF' );
define( 'LOGGED_IN_SALT',   'b6MMxo9r>f^MFAtg;$K:+i/={Iy3P*`KsPa;g)<)f|OPHMQ?xqwBEf7SlbPzEMVU' );
define( 'NONCE_SALT',       'f@f*VmEjM5TDC7OjQGom4qv+E*{9V^5M[2Dh$(7o_v12D:w(wfzfz$uAAOR3-wj.' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
