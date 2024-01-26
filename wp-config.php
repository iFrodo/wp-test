<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H7^]@6s=}oMfg^WMS87GRPh6zM)~pSo:UC9W$H<3+b<O=^D>4](BjKVNHz[OSm8:' );
define( 'SECURE_AUTH_KEY',  ']!1ogG]EE]|+lN_ev$BX$nbuciP{z0S$]Vyh[v-^Fcsm}L9t^naGg$LIa=&=0d{_' );
define( 'LOGGED_IN_KEY',    'hN)^!!rU>(iV($C}J-<00D3?kUYjm_@XjF4I(]X>L|,<8f=UG%PquRE0Mk2yud0J' );
define( 'NONCE_KEY',        'wAJ._mO3`UGv,a Q1AQ  ALvQY>Y9*N=UgHi*xcr)`XfovejZ_c;8b70=4oV2Xx1' );
define( 'AUTH_SALT',        '{n*Gm8!Mr|,kcO)i?:k)soWv{h*WxL[|$+BY?#G@~z,0Z2SNAsiFwfp6E<8~%L3,' );
define( 'SECURE_AUTH_SALT', 'M})D7jp~J<C_]aZs;;r7IAm5! _*(<pVC69E,|+U9+3b2LKA2!{;&/T&5*;3j@sU' );
define( 'LOGGED_IN_SALT',   'w{tq|zSdM{?3=@O>!@p}K u_/*pjzYJZsT =OLD]Ry#s<ly-3](/LT{+/s@4A6sq' );
define( 'NONCE_SALT',       '*q4 0tX]Z4Ok#&;cgj<76FGK~3h9+DO^Too6_o&x|^B_gXqa3.]mGQZ#m-l8S,F0' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
