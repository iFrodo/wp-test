<?php 
// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts',function () {
	// подключаем файл стилей темы
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/assets/quiz-box/css/main.css' );

	// // подключаем js файл темы
	// wp_enqueue_script( 'script-name', get_template_directory_uri() .'/js/example.js', array(), '1.0', true );
}
);


add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

?>
