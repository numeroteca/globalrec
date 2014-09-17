<?php

// add menu para pune2012
function register_my_menus() {
  register_nav_menus(
    array(
		'main-menu' => 'Main Menu',
		'home-menu' => 'Home Menu',
		'foot_menu' => 'Footer Menu'
	)
  );
}

add_action( 'init', 'register_my_menus' );


// Custom post types
add_action( 'init', 'create_post_type', 0 );

function create_post_type() {
register_post_type( 'global-meeting', array( // global meetings
	'labels' => array(
		'name' => __( 'Global Meetings' ),
		'singular_name' => __( 'Global Meeting' ),
		'add_new_item' => __( 'Add Global Meeting +' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit this item' ),
		'new_item' => __( 'New Global Meeting' ),
		'view' => __( 'View Global Meeting' ),
		'view_item' => __( 'View Global Meeting' ),
		'search_items' => __( 'Search Global Meeting' ),
		'not_found' => __( 'We didnt found any Global Meeting' ),
		'not_found_in_trash' => __( 'No Global Meeting in the trash bin' ),
		'parent' => __( 'Parent Global Meeting' )
		),
	'hierarchical' => true,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title', 'editor','custom-fields','author','comments','revisions','page-attributes','thumbnail','excerpt'),
	'rewrite' => array('slug'=>'global-meeting','with_front'=>false),
	'menu_icon' => 'dashicons-admin-site',
	)
);
register_post_type( 'bio', array( // Defining Biography custom post type
	'labels' => array(
		'name' => __( 'Biographies' ),
		'singular_name' => __( 'Biography' ),
		'add_new_item' => __( 'Add Biography +' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit this item' ),
		'new_item' => __( 'New Biography' ),
		'view' => __( 'View Biography' ),
		'view_item' => __( 'View Biography' ),
		'search_items' => __( 'Search Biography' ),
		'not_found' => __( 'We didnt found any Biography' ),
		'not_found_in_trash' => __( 'No Biography in the trash bin' ),
		'parent' => __( 'Parent Biography' )
		),
	'hierarchical' => false,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title', 'editor','custom-fields','author','comments','revisions','page-attributes','thumbnail','excerpt'),
	'rewrite' => array('slug'=>'bio','with_front'=>false),
	'menu_icon' => 'dashicons-id',
	)
);

register_post_type( 'newsletter', array( // Defining Newsletter custom post type
	'labels' => array(
		'name' => __( 'Newsletters' ),
		'singular_name' => __( 'Newsletter' ),
		'add_new_item' => __( 'Add Newsletter' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit this item' ),
		'new_item' => __( 'New Newsletter' ),
		'view' => __( 'View Newsletter' ),
		'view_item' => __( 'View Newsletter' ),
		'search_items' => __( 'Search Newsletter' ),
		'not_found' => __( 'We didnt found any Newsletter' ),
		'not_found_in_trash' => __( 'No Newsletter in the trash bin' ),
		'parent' => __( 'Parent Newsletter' )
		),
	'hierarchical' => false,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title', 'editor','custom-fields','author','comments','revisions','page-attributes','thumbnail','excerpt'),
	'rewrite' => array('slug'=>'newsletter','with_front'=>false),
	'menu_icon' => 'dashicons-email-alt',
	)
);

register_post_type( 'waste-picker-group', array( // Defining Waste Picker Group custom post type
	'labels' => array(
		'name' => __( 'Waste Picker Groups' ),
		'singular_name' => __( 'Waste Picker Group' ),
		'add_new_item' => __( 'Add Waste Picker Group' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit this item' ),
		'new_item' => __( 'New Waste Picker Group' ),
		'view' => __( 'View Waste Picker Group' ),
		'view_item' => __( 'View Waste Picker Group' ),
		'search_items' => __( 'Search Waste Picker Group' ),
		'not_found' => __( 'We didn\'t found any Waste Picker Group' ),
		'not_found_in_trash' => __( 'No Waste Picker Group in the trash bin' ),
		),
	'hierarchical' => false,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title', 'editor','custom-fields','author','comments','revisions','thumbnail','excerpt'),
	'rewrite' => array('slug'=>'group','with_front'=>false),
	'menu_icon' => 'dashicons-groups',
	)
);

register_post_type( 'threat', array( // Defining Threat custom post type
	'labels' => array(
		'name' => __( 'Threats' ),
		'singular_name' => __( 'Threat' ),
		'add_new_item' => __( 'Add Threat' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit this item' ),
		'new_item' => __( 'New Threat' ),
		'view' => __( 'View Threat' ),
		'view_item' => __( 'View Threat' ),
		'search_items' => __( 'Search Threat' ),
		'not_found' => __( 'We didn\'t found any Threat' ),
		'not_found_in_trash' => __( 'No Threat in the trash bin' ),
		),
	'hierarchical' => false,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title', 'editor','custom-fields','author','revisions','thumbnail','excerpt'),
	'menu_icon' => 'dashicons-hammer',
	)
);

register_post_type( 'inclusive-model', array( // Defining Inclusive Model custom post type
	'labels' => array(
		'name' => __( 'Inclusive Models' ),
		'singular_name' => __( 'Inclusive Model' ),
		'add_new_item' => __( 'Add Inclusive Model' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit this item' ),
		'new_item' => __( 'New Inclusive Model' ),
		'view' => __( 'View Inclusive Model' ),
		'view_item' => __( 'View Inclusive Model' ),
		'search_items' => __( 'Search Inclusive Model' ),
		'not_found' => __( 'We didn\'t found any Inclusive Model' ),
		'not_found_in_trash' => __( 'No Inclusive Model in the trash bin' ),
		),
	'hierarchical' => false,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title', 'editor','custom-fields','author','revisions','thumbnail','excerpt'),
	'menu_icon' => 'dashicons-awards',
	)
);

register_post_type( 'law-report', array( // Defining Law report custom post type
	'labels' => array(
		'name' => __( 'Law Reports' ),
		'singular_name' => __( 'Law Report' ),
		'add_new_item' => __( 'Add Law Report' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit this item' ),
		'new_item' => __( 'New Law Report' ),
		'view' => __( 'View Law Report' ),
		'view_item' => __( 'View Law Report' ),
		'search_items' => __( 'Search Law Report' ),
		'not_found' => __( 'We didn\'t found any Law Report' ),
		'not_found_in_trash' => __( 'No Law Report in the trash bin' ),
		),
	'hierarchical' => true,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title','editor','author','revisions'),
	'menu_icon' => 'dashicons-book-alt',
	)
);

register_post_type( 'city', array( // Defining City custom post type
	'labels' => array(
		'name' => __( 'City' ),
		'singular_name' => __( 'City' ),
		'add_new_item' => __( 'Add City' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit this item' ),
		'new_item' => __( 'New City' ),
		'view' => __( 'View City' ),
		'view_item' => __( 'View City' ),
		'search_items' => __( 'Search City' ),
		'not_found' => __( 'We didn\'t found any City' ),
		'not_found_in_trash' => __( 'No City in the trash bin' ),
		),
	'hierarchical' => false,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title','editor','author','revisions'),
	'menu_icon' => 'dashicons-minus',
	)
);

register_post_type( 'country', array( // Defining Country custom post type
	'labels' => array(
		'name' => __( 'Countries' ),
		'singular_name' => __( 'Country' ),
		'add_new_item' => __( 'Add Country' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit this item' ),
		'new_item' => __( 'New Country' ),
		'view' => __( 'View Country' ),
		'view_item' => __( 'View Country' ),
		'search_items' => __( 'Search Country' ),
		'not_found' => __( 'We didn\'t found any Country' ),
		'not_found_in_trash' => __( 'No Country in the trash bin' ),
		),
	'hierarchical' => false,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title','author','revisions'),
	//'rewrite' => array('slug'=>'group','with_front'=>false),
	'menu_icon' => 'dashicons-minus',
	)
);
}


// Custom Taxonomies
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
register_taxonomy( 'gb-type', 'global-meeting', array(
	'hierarchical' => true,
	'label' => 'Type',
	'query_var' => true,
	'rewrite' => true ) );
register_taxonomy( 'gb-year', 'global-meeting', array(
	'label' => 'Year',
	'query_var' => true,
	'rewrite' => true ) );
register_taxonomy( 'gb-selected', 'global-meeting', array( //select if it appears in a prominent way in the global meetings page
	'hierarchical' => true,
	'label' => 'Selected for Global Meetings boxes',
	'query_var' => true,
	'rewrite' => true ) );
register_taxonomy( 'post-region', 'post', array(
	'hierarchical' => true,
	'label' => 'Regions',
	'query_var' => true,
	'rewrite' => true ) );
}

add_action('init', 'my_custom_init');

function my_custom_init() {
		add_post_type_support( 'global-meeting', 'excerpt' ); //adds excerpt to global meeting post type
}

/*
 * Register widgetized areas,
 */
function globalrec_widgets_init() {
	// Area 1, located at the front-page.
	register_sidebar( array(
		'name' => __( 'Banner Home page widget area', 'globalrec' ),
		'id' => 'front-page-widget-area-main',
		'description' => __( 'Front page widget area main', 'globalrec' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	// Area 2, located at the front-page.
	register_sidebar( array(
		'name' => __( 'Home page side bar', 'globalrec' ),
		'id' => 'main-sidebar-widget',
		'description' => __( 'Main sidebar', 'globalrec' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	// Area 3, located at the Newsletter page
	register_sidebar( array(
		'name' => __( 'Newsletter suscribe', 'globalrec' ),
		'id' => 'newsletter',
		'description' => __( 'Newsletter', 'globalrec' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	// Area 4, located at the Newsround up page
	register_sidebar( array(
		'name' => __( 'News Feeds', 'globalrec' ),
		'id' => 'newsroundup',
		'description' => __( 'Newslround up feeds', 'globalrec' ),
		'before_widget' => '<div id="%1$s" class="widget-container-feed %2$s span2">',
		'after_widget' => '</div>',
		'before_title' => '<strong>',
		'after_title' => '</strong>',
	) );
	// Area 5, located at the blog page
	register_sidebar( array(
		'name' => __( 'Blog side bar', 'globalrec' ),
		'id' => 'blog-sidebar',
		'description' => __( 'The side bar of the blog', 'globalrec' ),
		'before_widget' => '<div id="%1$s" class="widget-container-feed %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	// Area 6, located at the footer
	register_sidebar( array(
		'name' => __( 'Footer bar', 'globalrec' ),
		'id' => 'footer-sidebar',
		'description' => __( 'The footer bar', 'globalrec' ),
		'before_widget' => ' ',
		'after_widget' => '',
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	// Area 7, located at the footer
	register_sidebar( array(
		'name' => __( 'Footer Home bar', 'globalrec' ),
		'id' => 'footer-home-bar',
		'description' => __( 'Footer Home bar', 'globalrec' ),
		'before_widget' => ' ',
		'after_widget' => '',
		'before_title' => ' ',
		'after_title' => ' ',
	) );
}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'globalrec_widgets_init' );

// sustituye el [...] del excerpt por un link al post. more info at http://codex.wordpress.org/Function_Reference/the_excerpt
function new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '"> &raquo; read the post </a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//--------------------------------------------------------------------------------//

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));

/* Translation: To make categories id work via http://wpml.org/es/documentation-2/soporte/crear-temas-multilingues-en-wordpress/numeros-id-dependientes-del-idioma/*/
/*Si está escribiendo un Tema que necesita ser utilizado con WPML, pero también desea que se ejecute adecuadamente sin WPML, debería realizar esas llamadas por medio de la función function_exists(). Por ejemplo: puede crear esta función en su archivo functions.php:*/

function lang_category_id($id){
  if(function_exists('icl_object_id')) {
    return icl_object_id($id,'category',true);
  } else {
    return $id;
  }
}
add_action('init', 'lang_category_id');

//allow iframe
function add_iframe($initArray) {
$initArray['extended_valid_elements'] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]";
return $initArray;
}
add_filter('tiny_mce_before_init', 'add_iframe');

// Post Attachment image function. Image URL for CSS Background. 
function the_post_image_url($size=large) {
	
	global $post;
	$linkedimgurl = get_post_meta ($post->ID, 'image_url', true);

	if ( $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_image_src($image->ID, $size);
			$attachmenturl=$attachmenturl[0];
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );

			echo ''.$attachmenturl.'';
		}
		
	} elseif ( $linkedimgurl ) {

		echo $linkedimgurl;

	} elseif ( $linkedimgurl && $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_image_src($image->ID, $size);
			$attachmenturl=$attachmenturl[0];
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );

			echo ''.$attachmenturl.'';
		}
		
	} else {
		echo '' . get_bloginfo ( 'stylesheet_directory' ) . '/img/no-attachment.gif';
	}
}

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

//adds featured image to 'post', 'page','bio','global-meeting','waste-picker-group'
add_theme_support( 'post-thumbnails', array( 'post', 'page','bio','global-meeting','waste-picker-group' ) ); 

//add posts formats
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'audio', 'image' ) );


//----- Adds metabox. Via https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Basic-Usage

function sample_metaboxes( $meta_boxes ) {
	$prefixbio = 'bio_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'email',
		'title' => 'Email',
		'pages' => array('bio'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Email',
				'desc' => 'Enter the contact email',
				'id' => $prefixbio . 'email',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Telephone',
				'desc' => 'with country prefix',
				'id' => $prefixbio . 'telephone',
				'type' => 'text_medium'
			),
		),
	);
	//Custom field to select a Waste Picker group
	//we need to create the array of Waste Picker Groups
	$posts = query_posts( array(
		'posts_per_page' => -1,
		'post_type' => 'waste-picker-group'
		));
	foreach ($posts as $post) {
		$groups[] = array(
			'name' => $post->post_title,
			'value' => $post->ID
		);
	}
	$meta_boxes[] = array(
		'id' => 'bio-waste-picker-group',
		'title' => 'Waste Picker Group',
		'pages' => array('bio'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Waste Picker Group',
				'desc' => 'Select the main waste picker group where it belongs',
				'id' => $prefixbio . 'group',
				'type' => 'select',
				'options' =>  $groups //one to many relationship. One waste picker group contains multiple members (bios)
			),
		),
	);
	wp_reset_query();
	//Custom field to select a Country for a Waste Picker (bio)
	$posts = query_posts( array(
		'posts_per_page' => -1,
		'post_type' => 'country'
		));
	foreach ($posts as $post) {
		$countries[] = array(
			'name' => $post->post_title,
			'value' => $post->ID
		);
	}
	$meta_boxes[] = array(
		'id' => 'bio-waste-picker-country',
		'title' => 'Waste Picker Country',
		'pages' => array('bio'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Waste Picker Group',
				'desc' => 'Select the country of the waste picker',
				'id' => $prefixbio . 'country',
				'type' => 'select',
				'options' =>  $countries //one to many relationship. One waste picker group contains multiple members (bios)
			),
		),
	);
	wp_reset_query();

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'sample_metaboxes' );

function global_meeting_sample_metaboxes( $meta_boxes ) {

	//Custom fields for global meetings
	$prefix2 = 'gm_'; // Prefix for all fields
	$prefix = '_gr_';
	$meta_boxes[] = array(
		'id' => 'global-meeting',
		'title' => 'Global Meeting Details',
		'pages' => array('global-meeting'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Date',
				'desc' => 'Date of the global meeting',
				'id' => $prefix2 . 'date',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Location',
				'desc' => 'City and country',
				'id' => $prefix2 . 'location',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Tag',
				'desc' => 'Related tag from the blog',
				'id' => $prefix2 . 'tag',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Downloads',
				'desc' => 'List here all the documents to download',
				'id' => $prefix2 . 'downloads',
				'type' => 'wysiwyg',
					'options' => array(
						    'wpautop' => true, // use wpautop?
						    'textarea_rows' => get_option('default_post_edit_rows', 2), // rows="..."
						    'teeny' => false, // output the minimal editor config used in Press This
						    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
						),
			),
		),
	);
	
	//Custom fields for articles (posts)
	$meta_boxes[] = array(
		'id' => 'post-extra-fields',
		'title' => 'Post in category Press',
		'pages' => array('post'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Published in',
				'desc' => 'Media/newspaper/web that published this article. Ex: "New York Times"',
				'id' => $prefix . 'published-in',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Written by',
				'desc' => 'This article was written by. Ex: "Juanito Valderrama"',
				'id' => $prefix . 'written-by',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Date',
				'desc' => 'when was this article/text published. Stored in m/d/Y format (ex: 09/01/2011)',
				'id' => $prefix . 'article-date',
				'type' => 'text_date'
			),
			array(
				'name' => 'Link to original article',
				'desc' => 'Provide the url. ex: "http://www.radiosantafe.com/2012/03/01/dos-marchas-afectan-la-movilidad-por-la-carrera-septima/"',
				'id' => $prefix . 'article-url',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Article title',
				'desc' => 'The original title of the article',
				'id' => $prefix . 'article-title',
				'type' => 'wysiwyg',
				'options' => array(),
			),
		),
	);
	//Summary for posts (it is different from the excerpt, that is shown in loop.boxes)
	$meta_boxes[] = array(
		'id' => 'post-summary',
		'title' => 'Summary of post (for translation). It\'s different from Excerpt!',
		'pages' => array('post'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Post Summary',
				'desc' => 'This is a summary of the article to send to translators. Do not mistake with the excerpt!',
				'id' => $prefix . 'post-summary',
				'type' => 'wysiwyg',
				'options' => array(),
			),
		),
	);
	//Custom field to select a Country for a post
	$prefixpost = "_post_";
	$posts = query_posts( array(
		'posts_per_page' => -1,
		'post_type' => 'country'
		));
	foreach ($posts as $post) {
		$countries[] = array(
			'name' => $post->post_title,
			'value' => $post->ID
		);
	}
	$meta_boxes[] = array(
		'id' => 'post-in-country',
		'title' => 'Post in Country',
		'pages' => array('post'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Post in Country',
				'desc' => 'Select the country in a post',
				'id' => $prefixpost . 'country',
				'type' => 'select',
				'options' =>  $countries
			),
		),
	);
	wp_reset_query();
	
	//Custom Fields for Waste Picker Groups
	$prefixwpg = '_wpg_';
	
	//Custom field to select a City for a Waste Picker Group
	$posts = query_posts( array(
		'posts_per_page' => -1,
		'post_type' => 'city'
		));
	foreach ($posts as $post) {
		$cities[] = array(
			'name' => $post->post_title,
			'value' => $post->ID
		);
	}
	$meta_boxes[] = array(
		'id' => 'waste-picker-city',
		'title' => 'Waste Picker Group City',
		'pages' => array('waste-picker-group'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Waste Picker Group City',
				'desc' => 'Select the city of the Waste Picker Group',
				'id' => $prefixwpg . 'cityselect', //"cityselect" because "city" is alread used
				'type' => 'select',
				'options' =>  $cities //one to many relationship. One waste picker group contains multiple members (bios)
			),
		),
	);
	wp_reset_query();
	//Custom field to select a Country for a Waste Picker Group
	$posts = query_posts( array(
		'posts_per_page' => -1,
		'post_type' => 'country'
		));
	foreach ($posts as $post) {
		$countries[] = array(
			'name' => $post->post_title,
			'value' => $post->ID
		);
	}
	$meta_boxes[] = array(
		'id' => 'waste-picker-country',
		'title' => 'Waste Picker Group Country',
		'pages' => array('waste-picker-group'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Waste Picker Group Country',
				'desc' => 'Select the country of the Waste Picker Group',
				'id' => $prefixwpg . 'countryselect', //"countryselect" beacuse "country" is alread used
				'type' => 'select',
				'options' =>  $countries //one to many relationship. One waste picker group contains multiple members (bios)
			),
		),
	);
	wp_reset_query();
	
	$meta_boxes[] = array(
		'id' => 'wpg-contact-info',
		'title' => 'Contact Information',
		'pages' => array('waste-picker-group'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Email of Organization',
				'desc' => 'ex: info@globalrec.org',
				'id' => $prefixwpg . 'email',
				'type' => 'text_email',
			),
			array(
				'name' => 'Website of Organization',
				'desc' => 'ex: http://globalrec.org',
				'id' => $prefixwpg . 'website',
				'type' => 'text_url',
				'protocols' => array( 'http', 'https')
			),
			array(
				'name' => 'Physical Address',
				'desc' => 'ex: ',
				'id' => $prefixwpg . 'physical_address',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Postal Address',
				'desc' => 'ex: ',
				'id' => $prefixwpg . 'postal_address',
				'type' => 'text_medium',
			),
			array(
				'name' => 'City',
				'desc' => '',
				'id' => 'city',
				'type' => 'text_small',
			),
			array(
				'name' => 'Region / State',
				'desc' => 'Indicate region or state within the country. Ex: Florida',
				'id' => $prefixwpg . 'region',
				'type' => 'text_small',
			),
			array(
				'name' => 'Country',
				'desc' => '',
				'id' => 'country',
				'type' => 'text_small',
			),
			array(
				'name' => 'Country Code Telephone',
				'desc' => 'Ex: +1',
				'id' => $prefixwpg . 'country_code_telephone',
				'type' => 'text_small',
			),
			array(
				'name' => 'Phone 1',
				'desc' => '',
				'id' => $prefixwpg . 'phone1',
				'type' => 'text_small',
			),
			array(
				'name' => 'Phone 2',
				'desc' => '',
				'id' => $prefixwpg . 'phone2',
				'type' => 'text_small',
			),
			array(
				'name' => 'Cell Phone',
				'desc' => '',
				'id' => $prefixwpg . 'cell_phone',
				'type' => 'text_small',
			),
			array(
				'name' => 'Fax',
				'desc' => '',
				'id' => $prefixwpg . 'fax',
				'type' => 'text_small',
			),
			array(
				'name' => 'Skype',
				'desc' => 'Skype user name.',
				'id' => $prefixwpg . 'skype',
				'type' => 'text_small',
			),
			array(
				'name' => 'Facebook',
				'desc' => 'Full url. Ex: http://facebook.com/globalrec',
				'id' => $prefixwpg . 'facebook',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Twitter',
				'desc' => 'User name. Ex: global_rec',
				'id' => $prefixwpg . 'twitter',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Other social networks',
				'desc' => 'Add url',
				'id' => $prefixwpg . 'other_social_networks',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Language',
				'desc' => 'Add url',
				'id' => $prefixwpg . 'language',
				'type' => 'multicheck',
				'options' => array(
					'spanish' => 'Spanish',
					'portuguese' => 'Portuguese',
					'english' => 'English',
					'french' => 'French',
					'bamanankan' => 'Bamanankan',
					'bambaro' => 'Bambaro',
					'bomu' => 'Bomu',
					'igbo' => 'Igbo',
					'kikongo' => 'Kikongo',
					'lingala' => 'Lingala',
					'malagasy' => 'Malagasy',
					'mandingue' => 'Mandingue',
					'peulh' => 'Peulh',
					'serere' => 'Serere',
					'swaili' => 'Swaili',
					'tieyako bozo' => 'Tieyako Bozo',
					'toucouleur yoruba' => 'Toucouleur / Yoruba',
					'tshiluba' => 'Tshiluba',
					'walot' => 'Walot'
				),
			),
			array(
				'name' => 'Primary Contact name',
				'desc' => 'Name',
				'id' => $prefixwpg . 'primary_contact_name',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Primary Contact phone',
				'desc' => '',
				'id' => $prefixwpg . 'primary_contact_phone',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Primary Contact position',
				'desc' => '',
				'id' => $prefixwpg . 'primary_contact_position',
				'type' => 'text_medium',
			),
						array(
				'name' => 'Primary Contact email',
				'desc' => '',
				'id' => $prefixwpg . 'primary_contact_email',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Secondary Contact name',
				'desc' => 'Name',
				'id' => $prefixwpg . 'secondary_contact_name',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Secondary Contact phone',
				'desc' => 'Name',
				'id' => $prefixwpg . 'secondary_contact_phone',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Secondary Contact position',
				'desc' => 'Name',
				'id' => $prefixwpg . 'secondary_contact_position',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Secondary Contact email',
				'desc' => 'Name',
				'id' => $prefixwpg . 'secondary_contact_email',
				'type' => 'text_medium',
			),
		),
	);
	//Waste Picker Primary Information
	$meta_boxes[] = array(
		'id' => 'wpg-primary-info',
		'title' => 'Primary Information',
		'pages' => array('waste-picker-group'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Type of members',
				'desc' => 'Select if the organization is Waste Pickers based, Waste Picker Organization based or just supports Waste Pickers',
				'id' => $prefixwpg . 'members_type',
				'type' => 'multicheck',
				'options' => array(
				    'Members are Waste Pickers' => 'Members are Waste Pickers',
				    'Members are Waste Pickers organizations' => 'Members are Waste Pickers organizations',
				    'Waste Picker support organization' => 'Waste Picker support organization',
				)
			),
			array(
				'name' => 'Occupation of Members',
				'desc' => '',
				'id' => $prefixwpg . 'members_occupation',
				'type' => 'multicheck',
				'options' => array(
				    'Door to door waste only' => 'Door to door waste only',
						'Door to door waste and recyclables' => 'Door to door waste and recyclables',
						'Interant buyers' => 'Interant buyers',
						'Itinerant workers' => 'Itinerant workers',
						'Landfills' => 'Landfills',
						'Scrap dealers' => 'Scrap dealers',
						'Sorting centres' => 'Sorting centres',
						'SWM' => 'SWM',
						'Waste Pickers' => 'Waste Pickers',
						'Waster Pickers working in streets' => 'Waster Pickers working in streets',
				)
			),
			array(
				'name' => 'Organization Type',
				'desc' => '',
				'id' => $prefixwpg . 'organization_type',
				'type' => 'multicheck',
				'options' => array(
					'Academic' => 'Academic',
					'Affiliate' => 'Affiliate',
					'Association' => 'Association',
					'Bank' => 'Bank',
					'cbo' => 'CBO',
					'Cooperative' => 'Cooperative',
					'Environmental' => 'Environmental',
					'Government' => 'Government',
					'Grass Roots Non Profit Organisation' => 'Grass Roots Non Profit Organisation',
					'iindependent' => 'Independent',
					'Informal Network of Waste Picker Groups' => 'Informal Network of Waste Picker Groups',
					'Informal worker MBO' => 'Informal worker MBO',
					'MBO' => 'MBO',
					'NGO' => 'NGO',
					'Self help Group' => 'Self help Group',
					'Support NGO' => 'Support NGO',
					'Trade union' => 'Trade union',
					'United Nations' => 'United Nations',
					'Womens Group' => 'Womens Group',
				)
			),
			array(
				'name' => 'Organization Scope',
				'desc' => '',
				'id' => $prefixwpg . 'organization_scope',
				'type' => 'multicheck',
				'options' => array(
					'local' => 'Local',
					'regional' => 'regional',
					'national' => 'national',
					'international' => 'international',
				)
			),
			array(
				'name' => 'Workplace of Members',
				'desc' => '',
				'id' => $prefixwpg . 'workplace_members',
				'type' => 'multicheck',
				'options' => array(
					'door to door' => 'door to door',
					'dump' => 'dump',
					'fixed' => 'fixed',
					'informal collection from companies' => 'informal collection from companies',
					'recycling centre' => 'recycling centre',
					'recycling workshop' => 'recycling workshop',
					'landfil' => 'landfil',
					'sanitary landfill' => 'sanitary landfill',
					'sorting centres' => 'sorting centres',
					'street' => 'street',
					'street sweeping' => 'street sweeping',
				)
			),
			array(
				'name' => 'Membership',
				'desc' => 'Select yes if they are paying or non paying members.',
				'id' => $prefixwpg . 'membership',
				'type' => 'radio_inline',
				'options' => array(
				    array('name' => 'yes', 'value' => 'yes'),
				    array('name' => 'no', 'value' => 'no'),
				)
			),
			array(
				'name' => 'Number of groups that are members',
				'desc' => 'Input the number of groups that belong to the organization. Ex: 7',
				'id' => $prefixwpg . 'number_groups',
				'type' => 'text_small',
			),
			array(
				'name' => 'Number of individuals that are members',
				'desc' => 'input the number of individuals that belong to the organization> Ex: 134',
				'id' => $prefixwpg . 'number_individuals',
				'type' => 'text_small',
			),
			array(
				'name' => 'Gender Composition Women (Number)',
				'desc' => 'Indicate the percentage of women. If there are 60% of women input "60"',
				'id' => $prefixwpg . 'gender_women_composition',
				'type' => 'text_small',
			),
			array(
				'name' => 'Gender Composition Women (Comment)',
				'desc' => 'If no number is provided indicate here thins like "majority of women"',
				'id' => $prefixwpg . 'gender_women_comment',
				'type' => 'text_small',
			),
			array(
				'name' => 'Organization Structure',
				'desc' => ' ',
				'id' => $prefixwpg . 'structure',
				'type' => 'text_small',
			),
			array(
				'name' => 'Objectives',
				'desc' => '',
				'id' => $prefixwpg . 'objectives',
				'type' => 'multicheck',
				'options' => array(
					'awareness raising' => 'awareness raising',
					'build a segregation centre' => 'build a segregation centre',
					'build enterprises' => 'build enterprises',
					'capacity building' => 'capacity building',
					'cleaning' => 'cleaning',
					'contribute to cleaning the environment' => 'contribute to cleaning the environment',
					'coordinate selective collection and evacuation' => 'coordinate selective collection and evacuation',
					'create waste picker trade tnion' => 'create waste picker Trade Tnion',
					'demands provision of Governement funded Social Security' => 'demands provision of Government funded Social Security ',
					'development of eduactional activities for children and adolescents' => 'development of eduactional activities for children and adolescents',
					'education and training' => 'education and training',
					'fight against discrimination-and-poverty' => 'fight against discrimination and poverty',
					'gender and domestic violence' => 'gender and domestic violence',
					'housing' => 'housing',
					'improve waste pickers living conditions' => 'improve waste pickers living conditions',
					'information sharing' => 'information sharing',
					'job creation' => 'job creation',
					'keep local area clean' => 'keep local area clean',
					'organise market security' => 'organise market security',
					'organising collective events' => 'organising collective events',
					'recognition of waste pickers' => 'recognition of waste pickers',
					'recycling' => 'recycling',
					'sanitation of market' => 'sanitation of market',
					'social development in urban areas' => 'social development in urban areas',
					'strengthen unity and cohesion among waste pickers' => 'strengthen unity and cohesion among waste pickers',
				)
			),
			array(
				'name' => 'Eucation and training',
				'desc' => '',
				'id' => $prefixwpg . 'education_training',
				'type' => 'multicheck',
				'options' => array(
					'apprenticeship scheme' => 'apprenticeship scheme',
					'business management' => 'business management',
					'compost training' => 'compost training',
					'environment' => 'environment',
					'for girls and children from poor families' => 'for girls and children from poor families',
					'literacy programme' => 'literacy programme',
					'project management' => 'project management',
					'recycling' => 'recycling',
					'risks' => 'risks',
					'technical waste picker training' => 'technical waste picker training training',
					'waste management' => 'waste management',
					'waste picker activities' => 'waste picker activities',
					'waste picker rights and duties' => 'waste picker rights and duties',
				)
			),
			array(
				'name' => 'Formally registered',
				'desc' => '',
				'id' => $prefixwpg . 'formally_registered',
				'type' => 'checkbox',
			),
			array(
				'name' => 'Year Formed',
				'desc' => 'Year the organization was formed',
				'id' => $prefixwpg . 'year_formed',
				'type' => 'text_small',
			),
			array(
				'name' => 'Registration Year',
				'desc' => 'Year the organization was registered',
				'id' => $prefixwpg . 'registration_year',
				'type' => 'text_small',
			),
			array(
				'name' => 'Partnering Organizations',
				'desc' => '',
				'id' => $prefixwpg . 'partnering_organizations',
				'type' => 'text_small',
			),
			array(
				'name' => 'Affiliations',
				'desc' => '',
				'id' => $prefixwpg . 'affiliations',
				'type' => 'multicheck',
				'options' => array(
					'donor' => 'donor ',
					'government' => 'government',
					'ngo' => 'ngo',
					'waste-picker-organisation' => 'waste wicker organisation',
				)
			),
			array(
				'name' => 'How activities are funded?',
				'desc' => '',
				'id' => $prefixwpg . 'funding',
				'type' => 'multicheck',
				'options' => array(
					'self funded' => 'self funded',
					'donor funded' => 'donor funded',
					'membeship fees' => 'membeship fees',
					'ngo funds' => 'ngo funds',
					'loans' => 'loans (e.g. from banks or corporate bodies)',
				)
			),
			array(
				'name' => 'Internal Elections: how often?',
				'desc' => '',
				'id' => $prefixwpg . 'elections',
				'type' => 'radio_inline',
				'options' => array(
				    array('name' => 'no', 'value' => 'no'),
				    array('name' => 'Quarterly', 'value' => 'quarterly'),
				    array('name' => 'annually', 'value' => 'annually'),
				    array('name' => 'every 2 years', 'value' => 'every 2 years'),
				    array('name' => 'every 3 years', 'value' => 'every 3 years'),
				    array('name' => 'every 4 years', 'value' => 'every 4 years'),
				    array('name' => 'every 5 years', 'value' => 'every 5 years'),
				    array('name' => 'other', 'value' => 'other'),
				)
			),
		),
	);
	//Benefits custom fields
	$meta_boxes[] = array(
		'id' => 'wpg-benefits',
		'title' => 'Benefits information',
		'pages' => array('waste-picker-group'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Member benefits',
				'desc' => 'Select if the organization is Waste Pickers bases or supports Waste Pickers',
				'id' => $prefixwpg . 'member_benefits',
				'type' => 'multicheck',
				'options' => array(
					'access to financial and material resources' =>'access to financial and material resources',
					'access to micro credits' =>'access to micro credits',
					'access to recycleable materials' =>'access to recycleable materials',
					'access to training centre for families' =>'access to training centre for families',
					'availability of compost manure' =>'availability of compost manure',
					'child care system' =>'child care system',
					'child educapprenticeship schemes' =>'child educapprenticeship schemes',
					'child education programmes' =>'child education programmes',
					'clean and healthy environment' =>'clean and healthy environment',
					'emergency health care members fund' =>'emergency health care members fund',
					'health centre' =>'health centre',
					'health insurance' =>'health insurance',
					'id cards' =>'id cards',
					'improved working and living conditions' =>'improved working and living conditions',
					'job creation' =>'job creation',
					'legal assistance' =>'legal assistance',
					'life insurance' =>'life lnsurance',
					'literacy programmes' =>'literacy programmes',
					'medical aid scheme' =>'medical aid scheme',
					'occupational health safety' =>'occupational health & safety',
					'profit share' =>'profit share',
					'ration cards' =>'ration cards',
					'savings or credit system' =>'savings or credit system',
					'source of income' =>'source of income',
					'urban environment management support' =>'urban environment management support',
				),
			),
			array(
				'name' => 'Number of credit / saving members?',
				'desc' => 'Ex: "125"',
				'id' => $prefixwpg . 'credit_members',
				'type' => 'text_small',
			),
			array(
				'name' => 'Safety & Technology',
				'desc' => '',
				'id' => $prefixwpg . 'safety_technology',
				'type' => 'multicheck',
				'options' => array(
					'yes' =>'yes',
					'gloves' =>'gloves',
					'masks' =>'masks',
					'risk training' =>'risk training',
					'safety boots' =>'safety boots',
					'access to micro credits' =>'no',
				),
			),
		),
	);
	//Services Custom fields
	$meta_boxes[] = array(
		'id' => 'wpg-services',
		'title' => 'Services provided by the organization',
		'pages' => array('waste-picker-group'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Relationship with Municipality',
				'desc' => '',
				'id' => $prefixwpg . 'relationship_municipality',
				'type' => 'multicheck',
				'options' => array(
					'excellent' =>'excellent',
					'forma contract' =>'formal contract',
					'friendly' =>'friendly',
					'independent' =>'independent',
					'non existent' =>'non existent',
					'poor' =>'poor',
				),
			),
			array(
				'name' => 'Types of materials collected',
				'desc' => '',
				'id' => $prefixwpg . 'types_of_materials',
				'type' => 'multicheck',
				'options' => array(
					'biodegradable waste' => 'biodegradable waste',
					'bones' => 'bones',
					'bottles' => 'bottles',
					'charcoal' => 'charcoal',
					'clothing' => 'clothing',
					'crankshafts' => 'crankshafts',
					'electronic waste' => 'electronic waste',
					'engine blocks' => 'engine blocks',
					'food' => 'food',
					'glass' => 'glass',
					'household items' => 'household items',
					'metals' => 'metals',
					'organics' => 'organics',
					'paper' => 'paper',
					'plastics' => 'plastics',
					'used tires' => 'used tires',
					'other' => 'other',
				),
			),
			array(
				'name' => 'Do you sell to middlemen?',
				'desc' => '',
				'id' => $prefixwpg . 'middlemen',
				'type' => 'radio_inline',
				'options' => array(
					  array('name' => 'Yes', 'value' => 'yes'),
					  array('name' => 'No', 'value' => 'no'),
				)
			),
			array(
				'name' => 'Activities', 
				'desc' => '',
				'id' => $prefixwpg . 'activities', 
				'type' => 'multicheck',
				'options' => array(
					'community sale of materials' => 'community sale of materials	',
					'community storage of materials' => 'community storage of materials',
					'composting' => 'composting	',
					'farming' => 'farming	',
					'new items made from collected materials' => 'new items made from collected materials	',
					'organising collective events' => 'organising collective events	',
					'sensitization of locals' => 'sensitization of locals	',
					'special collections from large generators of waste' => 'special collections from large generators of waste	',
					'street sweeping' => 'street sweeping	',
					'training and capacity building' => 'training and capacity building	',
					'transportation' => 'transportation	',
				),
			),
			array(
				'name' => 'Sorting spaces',
				'desc' => 'Where waste is sored or broken down, for example,electrical household items are taken to a sorting workshop where the same types of goods are picked apart by someone and all the reusable components extracted and sorted.',
				'id' => $prefixwpg . 'sorting_spaces',
				'type' => 'multicheck',
				'options' => array(
					'sortin centres' => 'sorting centres',
					'sorting workshops' => 'sorting workshops',
				),
			),
			array(
				'name' => 'Treatment of organic materials',
				'desc' => '',
				'id' => $prefixwpg . 'treatment_organic_materials',
				'type' => 'multicheck',
				'options' => array(
					'biogas' => 'biogas',
					'composting' => 'composting',
					'pig farming' => 'pig farming',
				),
			),
			array(
				'name' => 'Challenges to access waste',
				'desc' => '',
				'id' => $prefixwpg . 'challenges_access_waste',
				'type' => 'multicheck',
				'options' => array(
					//'competition between organisations' => 'competition between organisations',
					'harassment from police' => 'harassment from police',
					'lack of capacity' => 'lack of capacity',
					'lack of democratic practices in organisations' => 'lack of democratic practices in organisations',
					//'lack of dumps' => 'lack of dumps',
					//'lack of education and training' => 'lack of education and training',
					'lack of land' => 'lack of land',
					'lack of money' => 'lack of money',
					//'lack of networks' => 'lack of networks',
					'lack of opportunity to share information' => 'lack of opportunity to share information',
					'lack of recognition of wps' => 'lack of recognition of WPs',
					//'lack of skills and experience' => 'lack of skills and experience',
					'lack of unity between organisations' => 'lack of unity between organisations',
					'privatisation of waste management' => 'privatisation of waste management',
					//'social exclusion' => 'social exclusion',
					'transportation' => 'transportation',
				),
			),
		),
	);
	//Complementary Info Custom fields for Waste Picker Groups
	$meta_boxes[] = array(
		'id' => 'wpg-complementary-info',
		'title' => 'Complementary Info',
		'pages' => array('waste-picker-group'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Publications (details)',
				'desc' => 'Other publications or documents where to find information about this organization.',
				'id' => $prefixwpg . 'publications',
				'type' => 'textarea_small',
			),
			array(
				'name' => 'Source of Information',
				'desc' => 'Where is the information coming from.',
				'id' => $prefixwpg . 'information_source',
				'type' => 'textarea_small',
			),
			array(
					'name' => 'Date of Data Entry',
					'desc' => '',
					'id' => $prefixwpg . 'date_data_entry',
					'type' => 'text_date_timestamp' 
			),
			array(
					'name' => 'Date Data Updated',
					'desc' => '',
					'id' => $prefixwpg . 'date_data_updated',
					'type' => 'text_date_timestamp' //TODO, if this is a multiple data entry, we can not use this type of metabox
			),
			array(
				'name' => 'Status of the organization',
				'desc' => 'Indicate if the organization is active',
				'id' => $prefixwpg . 'status',
				'type' => 'radio_inline',
				'options' => array(
					  array('name' => 'Yes', 'value' => 'yes'),
					  array('name' => 'No', 'value' => 'no'),
				)
			),
			array(
				'name' => 'Type the tag to show related posts in the right column to this Waste piker group',
				'desc' => 'Ex: "MNCR"',
				'id' => 'gm_tag',
				'type' => 'text_small',
			),
		),
	);
		
	//Custom Fields for Law Reports
	$prefixlaw = '_law_';
	//Custom field to select a City for a Waste Picker Group
	$posts = query_posts( array(
		'posts_per_page' => -1,
		'post_type' => 'country',
		'orderby' => 'title',
		'order' => 'ASC',
		));
	foreach ($posts as $post) {
		$countries[] = array(
			'name' => $post->post_title,
			'value' => $post->ID
		);
	}
	$meta_boxes[] = array(
		'id' => 'law-report-country',
		'title' => 'Law Report Country',
		'pages' => array('law-report'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Law Repor in country',
				'desc' => 'Select the country of the Law',
				'id' => $prefixlaw . 'countryselect',
				'type' => 'select',
				'options' =>  $countries,
			)
		),
	);
	wp_reset_query();
	
	$meta_boxes[] = array(
		'id' => 'law-downloads',
		'title' => 'Law Report Downloads',
		'pages' => array('law-report'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Downloads',
				'desc' => 'List here all the documents to download',
				'id' => $prefixlaw . 'downloads',
				'type' => 'wysiwyg',
					'options' => array(
				    'wpautop' => true, // use wpautop?
				    'textarea_rows' => get_option('default_post_edit_rows', 12), // rows="..."
				    'teeny' => false, // output the minimal editor config used in Press This
				    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
				),
			),
			array(
				'name' => 'Country for the map',
				'desc' => '',
				'id' => 'country',
				'type' => 'text_small',
			),
		),
	);
	//Custom Fields for Cities
	$prefixcity = '_city_';
	//Custom field to select a Country for City
	$posts = query_posts( array(
		'posts_per_page' => -1,
		'post_type' => 'country',
		'orderby' => 'title',
		'order' => 'ASC',
		));
	foreach ($posts as $post) {
		$countries[] = array(
			'name' => $post->post_title,
			'value' => $post->ID
		);
	}
	$meta_boxes[] = array(
		'id' => 'city-in-country',
		'title' => 'City belons to Country',
		'pages' => array('city'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'City belons to Country',
				'desc' => 'Select the country of the city',
				'id' => $prefixcity . 'countryselect',
				'type' => 'select',
				'options' =>  $countries
			),
		),
	);
	wp_reset_query();
		$meta_boxes[] = array(
		'id' => 'city-hidden-field',
		'title' => 'City hidden fields',
		'pages' => array('city'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Content here will only be displayed to logged in users',
				'desc' => 'Contact of interviewee',
				'id' => $prefixcity . 'hidden',
				'type' => 'text',
			),
		),
	);
	
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'global_meeting_sample_metaboxes' );

// Initialize the metabox class
add_action( 'init', 'initialize_cmb_meta_boxes', 9999 );
function initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( 'lib/metabox/init.php' );
	}
}
//--------------------------finishes metaboxes--------------------------//

add_theme_support( 'post-thumbnails' ); //to make http://codex.wordpress.org/Function_Reference/has_post_thumbnail work

function languages_list(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        echo '<div id="language_list"><ul class="nav nav-pills">';
        foreach($languages as $l){
            if($l['active']) {echo '<li class="active">';} else {echo '<li>';};
            if(!$l['active']) {echo '<a href="'.$l['url'].'">';} else {echo '<a href="#">';};
            echo $l['native_name'];
           	echo '</a>';
            echo '</li>';
        }
        echo '</ul></div>';
    }
}

// Function to list values of custom metaboxes with multiple values (multicheck). Used in Waste Picker Group list
function list_of_items($postid,$value){
	$items = get_post_meta($postid,$value,false);
	if (!empty($items)) {
		echo "<dd>";
		foreach($items as $item) {
			echo  ucfirst ($item)."<br>";
		}
		echo "</dd>";
	}
}
add_action( 'init', 'list_of_items' );

//Function to get the number of waste picker groups that have certain custom fields
function get_number_posts ($meta_key,$meta_value) {
	$args = array( 'posts_per_page' => -1,'meta_key'=> $meta_key, 'meta_value' => $meta_value, 'post_type' => 'waste-picker-group');
	$posts_array = get_posts( $args );
	$result = count($posts_array);
	return $result;
}

?>
