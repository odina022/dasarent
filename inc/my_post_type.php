<?php 

add_action( 'init', 'register_post_type_and_texonomy' );
function register_post_type_and_texonomy(){
	register_post_type( 'texnics', [
		'label'  => null,
		'labels' => [
			'name'               => 'Texnika', // основное название для типа записи
			'singular_name'      => 'Texnika', // название для одной записи этого типа
			'add_new'            => 'Добавить Texnika', // для добавления новой записи
			'add_new_item'       => 'Добавление Texnika', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Texnika', // для редактирования типа записи
			'new_item'           => 'Новое Texnika', // текст новой записи
			'view_item'          => 'Смотреть Texnika', // для просмотра записи этого типа.
			'search_items'       => 'Искать Texnika', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Texnika', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-admin-generic',
  // dashicons-admin-generic
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
 ] );

 // хук для регистрации
add_action( 'init', 'texnics' );

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'tech_category', [ 'texnics' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Kategory',
			'singular_name'     => 'Kategory',
			'search_items'      => 'Search Kategory',
			'all_items'         => 'All Kategory',
			'view_item '        => 'View Kategory',
			'parent_item'       => 'Parent Kategory',
			'parent_item_colon' => 'Parent Kategory:',
			'edit_item'         => 'Edit Kategory',
			'update_item'       => 'Update Kategory',
			'add_new_item'      => 'Add New Kategory',
			'new_item_name'     => 'New Kategory Name',
			'menu_name'         => 'Kategory',
			'back_to_items'     => '← Back to Kategory',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}

add_action( 'init', 'register_post_type_and_texonomy' );

?>