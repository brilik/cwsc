<?php


class PostType {
	public function __construct() {
		add_action( 'init', array( $this, 'register_post_types' ) );
	}

	public function register_post_types() {
		register_post_type( 'country', [
			'label'             => null,
			'labels'            => [
				'name'               => __( 'Countries', TEXT_DOMAIN ),
				'singular_name'      => __( 'Country', TEXT_DOMAIN ),
				'add_new'            => __( 'Add country', TEXT_DOMAIN ),
				'add_new_item'       => __( 'Add country', TEXT_DOMAIN ),
				'edit_item'          => __( 'Edit country', TEXT_DOMAIN ),
				'new_item'           => __( 'New country', TEXT_DOMAIN ),
				'view_item'          => __( 'See country', TEXT_DOMAIN ),
				'search_items'       => __( 'Search country', TEXT_DOMAIN ),
				'not_found'          => __( 'Not found', TEXT_DOMAIN ),
				'not_found_in_trash' => __( 'Not found in basket', TEXT_DOMAIN ),
				'parent_item_colon'  => __( '', TEXT_DOMAIN ),
				'menu_name'          => __( 'Countries', TEXT_DOMAIN ),
			],
			'description'       => '',
			'public'            => true,
			// 'publicly_queryable'  => null,
			// 'exclude_from_search' => null,
			// 'show_ui'             => null,
			'show_in_nav_menus' => false,
			'show_in_menu'      => true,
			'show_in_admin_bar' => true,
//		'show_in_rest'        => null,
//		'rest_base'           => null,
			'menu_position'     => 9,
			'menu_icon'         => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post',
			//'map_meta_cap'      => null,
			'hierarchical'      => false,
			'supports'          => [ 'title' ],
			// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'        => [],
			'has_archive'       => false,
			'rewrite'           => true,
			'query_var'         => true,
		] );
	}
}