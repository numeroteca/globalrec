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
	//'_builtin' => false,
	'_edit_link' => 'post.php?post=%d',
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
	//'_builtin' => false,
	'_edit_link' => 'post.php?post=%d',
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
	//'_builtin' => false,
	'_edit_link' => 'post.php?post=%d',
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
		'not_found' => __( 'We didnt found any Waste Picker Group' ),
		'not_found_in_trash' => __( 'No Waste Picker Group in the trash bin' ),
		'parent' => __( 'Parent Waste Picker Group' )
		),
	'hierarchical' => false,
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title', 'editor','custom-fields','author','comments','revisions','page-attributes','thumbnail','excerpt'),
	'rewrite' => array('slug'=>'group','with_front'=>false),
	//'_builtin' => false,
	'_edit_link' => 'post.php?post=%d',
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


automatic_feed_links();

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));

	


/*
add_action('init', 'my_custom_init');

function my_custom_init() {
		
		add_post_type_support( 'letras', array('excerpt', 'page-attributes') );
}*/


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

//add featured image to 'post', 'page','bio','global-meeting'
add_theme_support( 'post-thumbnails', array( 'post', 'page','bio','global-meeting' ) ); 

//add posts formats
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'audio', 'image' ) );


//----- Adds metabox. Via https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Basic-Usage

function sample_metaboxes( $meta_boxes ) {
	$prefix = 'bio_'; // Prefix for all fields
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
				'id' => $prefix . 'email',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Telephone',
				'desc' => 'with country prefix',
				'id' => $prefix . 'telephone',
				'type' => 'text_medium'
			),
		),
	);

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
	
	//Custom fields for articles
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
				'desc' => 'Media/newspaper/web that published this article',
				'id' => $prefix . 'published-in',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Written by',
				'desc' => 'This article was written by...',
				'id' => $prefix . 'written-by',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Date',
				'desc' => 'when was this article/text published.  Stored in m/d/Y format (ex: 09/01/2011)',
				'id' => $prefix . 'article-date',
				'type' => 'text_date'
			),
			array(
				'name' => 'Link to original article',
				'desc' => 'Provide the url> http://www.radiosantafe.com/2012/03/01/dos-marchas-afectan-la-movilidad-por-la-carrera-septima/',
				'id' => $prefix . 'article-url',
				'type' => 'text_medium'
			),
			array(
				'name' => 'Article title',
				'desc' => 'The title of the article',
				'id' => $prefix . 'article-title',
				'type' => 'wysiwyg',
				'options' => array(),
			),
		),
	);

	//Custom fields for Waste Picker groups
	//we need to create the array of members
	$posts = query_posts( array(
		'posts_per_page' => -1,
		'post_type' => 'bio'
		));
	foreach ($posts as $post) {
		$members[] = array(
			'name' => $post->post_title,
			'value' => $post->ID
		);
	}
	$prefixwpg = '_wpg_';
	$meta_boxes[] = array(
		'id' => 'wpg-members',
		'title' => 'Waste Picker Members',
		'pages' => array('waste-picker-group'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Members',
				'desc' => 'Select the members of this group',
				'id' => $prefixwpg . 'members',
				'type' => 'select', //TODO need to make it work for multicheck https://github.com/WebDevStudios/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Field-Types
				'options' =>  $members //one to many relationship. One waste picker group contains multiple members (bios)
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
				'type' => 'text_medium',
			),
			array(
				'name' => 'Website of Organization',
				'desc' => 'ex: http://globalrec.org',
				'id' => $prefixwpg . 'website',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Physical Address',
				'desc' => 'ex: ',
				'id' => $prefixwpg . 'physical-address',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Postal Address',
				'desc' => 'ex: ',
				'id' => $prefixwpg . 'postal-address',
				'type' => 'text_medium',
			),
			array(
				'name' => 'City',
				'desc' => '',
				'id' => $prefixwpg . 'city',
				'type' => 'text_small',
			),
			array(
				'name' => 'Region / State',
				'desc' => 'Indicate region or state within the country. Ex: Florida',
				'id' => $prefixwpg . 'city',
				'type' => 'text_small',
			),
			array(
				'name' => 'Country',
				'desc' => '',
				'id' => $prefixwpg . 'country',
				'type' => 'text_small',
			),
			array(
				'name' => 'Country Code Telephone',
				'desc' => 'Ex: +1',
				'id' => $prefixwpg . 'country-code-telephone',
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
				'id' => $prefixwpg . 'cell-phone',
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
				'id' => $prefixwpg . 'other-social-networks',
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
					'Iigbo' => 'Igbo',
					'kikongo' => 'Kikongo',
					'lingala' => 'Lingala',
					'malagasy' => 'Malagasy',
					'mandingue' => 'Mandingue',
					'peulh' => 'Peulh',
					'serere' => 'Serere',
					'swaili' => 'Swaili',
					'tieyako-bozo' => 'Tieyako Bozo',
					'toucouleur-yoruba' => 'Toucouleur / Yoruba',
					'tshiluba' => 'Tshiluba',
					'walot' => 'Walot'
				),
			),
			array(
				'name' => 'Primary Contact',
				'desc' => '',
				'id' => $prefixwpg . 'primary-contact',
				'type' => 'textarea_small',
			),
			array(
				'name' => 'Secondary Contact',
				'desc' => '',
				'id' => $prefixwpg . 'secondary-contact',
				'type' => 'textarea_small',
			),
		),
	);
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
				'desc' => 'Select if the organization is Waste Pickers bases or supports Waste Pickers',
				'id' => $prefixwpg . 'members-type',
				'type' => 'radio_inline',
				'options' => array(
				    array('name' => 'Members are Waste Pickers', 'value' => 'waste-picker'),
				    array('name' => 'Members are Waste Pickers organizations', 'value' => 'waste-picker-org'),
				    array('name' => 'Waste Picker support organization', 'value' => 'support-org'),
				)
			),
			array(
				'name' => 'Occupation of Members',
				'desc' => '',
				'id' => $prefixwpg . 'members-occupation',
				'type' => 'multicheck',
				'options' => array(
				    'door-to-door-only-waste' => 'Door to door waste only',
						'door-to-door-waste-recyclables' => 'Door to door waste and recyclables',
						'Iinterant-buyers' => 'Interant buyers',
						'itinerant-workers' => 'Itinerant workers',
						'landfills' => 'Landfills',
						'scrap-dealers' => 'Scrap dealers',
						'sorting-centres' => 'Sorting centres',
						'waste-pickers' => 'Waste Pickers',
						'waste-pickers-in-streets' => 'Waster Pickers working in streets',
				)
			),
			array(
				'name' => 'Organization Type',
				'desc' => '',
				'id' => $prefixwpg . 'organization-type',
				'type' => 'multicheck',
				'options' => array(
					'academic' => 'Academic',
					'affiliate' => 'Affiliate',
					'association' => 'Association',
					'bank' => 'BANK',
					'cbo' => 'CBO',
					'cooperative' => 'Cooperative',
					'environmental' => 'Environmental',
					'government' => 'Government',
					'grassroots-non-profit-organisation' => 'Grass Roots Non Profit Organisation',
					'independent' => 'Independent',
					'informal-network-wpg' => 'Informal Network of Waste Picker Groups',
					'informal-worker-mbo' => 'Informal worker MBO',
					'mbo' => 'MBO',
					'ngo' => 'NGO',
					'self-help-group' => 'Self help Group',
					'support-ngo' => 'Support NGO',
					'trade-union' => 'Trade union',
					'united-nations' => 'United Nations',
					'womens-group' => 'Womens Group',
				)
			),
			array(
				'name' => 'Organization Scope',
				'desc' => '',
				'id' => $prefixwpg . 'organization-scope',
				'type' => 'multicheck',
				'options' => array(
					'local' => 'Local',
					'regional' => 'Regional',
					'national' => 'National',
					'international' => 'International',
				)
			),
			array(
				'name' => 'Workplace of Members',
				'desc' => '',
				'id' => $prefixwpg . 'workplace-members',
				'type' => 'multicheck',
				'options' => array(
					'recovery-from-landfil' => 'recovery from landfil',
					'dump' => 'dump',
					'sanitary-landfill' => 'sanitary landfill',
					'street' => 'street',
					'recycling-centre' => 'recycling centre',
					'recycling-workshop' => 'recycling workshop',
					'door-to-door' => 'door to door',
					'sorting-centres' => 'sorting centres',
					'informal-collection-from-companies' => 'informal collection from companies',
					'street-sweeping' => 'street sweeping',
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
				'id' => $prefixwpg . 'number-groups',
				'type' => 'text_small',
			),
			array(
				'name' => 'Number of individuals that are members',
				'desc' => 'input the number of individuals that belong to the organization> Ex: 134',
				'id' => $prefixwpg . 'number-individuals',
				'type' => 'text_small',
			),
			array(
				'name' => 'Gender composition: Women',
				'desc' => 'Indicate the percentage of women. If there are 60% of women input "60"',
				'id' => $prefixwpg . 'gender-women-composition',
				'type' => 'text_small',
			),
			array(
				'name' => 'Objectives',
				'desc' => '',
				'id' => $prefixwpg . 'objectives',
				'type' => 'multicheck',
				'options' => array(
					'awareness-raising' => 'awareness raising',
					'build-a-segregation-centre' => 'build a segregation centre',
					'build-enterprises' => 'build enterprises',
					'capacity-building' => 'capacity building',
					'cleaning' => 'cleaning',
					'contribute-to-cleaning-the-environment' => 'contribute to cleaning the environment',
					'coordinate-selective-collection-and-evacuation' => 'coordinate selective collection and evacuation',
					'create-wp-Trade-Union' => 'create WP Trade Union',
					'development-of-eduactional-activities-for-children-and-adolescents' => 'development of eduactional activities for children and adolescents',
					'education-and-training' => 'education and training',
					'fight-against-discrimination-and-poverty' => 'fight against discrimination and poverty',
					'gender-and-domestic-violence' => 'gender and domestic violence',
					'housing' => 'housing',
					'improve-wp-living-conditions' => 'improve WP living conditions',
					'information-sharing' => 'information sharing',
					'job-creation' => 'job creation',
					'keep-local-area-clean' => 'keep local area clean',
					'organise-market-security' => 'organise market security',
					'organising-collective-events' => 'organising collective events',
					'recognition-of-wps' => 'recognition of WPs',
					'recycling' => 'recycling',
					'sanitation-of-market' => 'sanitation of market',
					'social-development-in-urban-areas' => 'social development in urban areas',
					'strengthen-unity-and-cohesion-among-wps' => 'strengthen unity and cohesion among WPs',
				)
			),
			array(
				'name' => 'Formally registered',
				'desc' => '',
				'id' => $prefixwpg . 'formally-registered',
				'type' => 'checkbox',
			),
			array(
				'name' => 'Eucation and training',
				'desc' => '',
				'id' => $prefixwpg . 'education-training',
				'type' => 'multicheck',
				'options' => array(
					'apprenticeship-scheme' => 'apprenticeship scheme',
					'business-management' => 'business management',
					'compost-training' => 'compost training',
					'environment' => 'environment',
					'for-girls-and-children-from-poor-families' => 'for girls and children from poor families',
					'literacy-programme' => 'literacy programme',
					'project-management' => 'project management',
					'recycling' => 'recycling',
					'risks' => 'risks',
					'technical-wp-training' => 'Technical WP training',
					'waste-management' => 'waste management',
					'waste-picker-activities' => 'Waste picker activities',
					'wp-rights-and-duties' => 'WP rights and duties',
				)
			),
			array(
				'name' => 'Registration Year',
				'desc' => 'Year the organization was formed',
				'id' => $prefixwpg . 'registration-year',
				'type' => 'text_small',
			),
			array(
				'name' => 'Partnering Organsiations',
				'desc' => '',
				'id' => $prefixwpg . 'partnering-organizations',
				'type' => 'multicheck',
				'options' => array(
					'acf' => 'ACF',
					'agence-francais-de-development' => 'Agence Francais de Development',
					'akamasoa' => 'AKAMASOA',
					'aquassistance-france' => 'Aquassistance France',
					'atd-quart-monde' => 'ATD Quart Monde',
					'autre-terre' => 'Autre Terre',
					'bamato' => 'BAMATO',
					'caneq' => 'CANEQ',
					'ceka-kalasaka' => 'Ceka Kalasaka',
					'community-development-trust-fund' => 'Community Development Trust Fund',
					'consultants-san-frontiere' => 'Consultants San Frontiere',
					'danida-sida' => 'DANIDA-SIDA',
					'ded' => 'DED',
					'destiny-africa' => 'DESTINY AFRICA',
					'enda' => 'ENDA',
					'eu' => 'EU',
					'fed' => 'FED',
					'fonds-marie-antoinette-carlier-(acf)' => 'Fonds Marie Antoinette Carlier (ACF)',
					'foundation-roi-beaudoin' => 'Foundation Roi Beaudoin',
					'france-liberte' => 'France Liberte',
					'gaia' => 'GAIA',
					'graf-sahel' => 'Graf Sahel',
					'groundwork' => 'groundWork',
					'ihechi-sweepers' => 'IHECHI Sweepers',
					'ilo' => 'ILO',
					'inades-formation-congo/ city-council' => 'INADES FORMATION CONGO/ City Council',
					'ipec' => 'IPEC',
					'isf' => 'ISF',
					'ldfc' => 'LDFC',
					'life-pnud' => 'LIFE PNUD',
					'local-municipality' => 'Local Municipality',
					'metal-&-joints' => 'Metal & Joints',
					'municipality' => 'Municipality',
					'mvungano-wa-wanavijiji' => 'MVUNGANO WA WANAVIJIJI',
					'other' => 'Other',
					'oxfam' => 'OXFAM',
					'plafcco' => 'PLAFCCO',
					'quebec' => 'Quebec',
					'ratpka' => 'RATPKA',
					'recovad' => 'RECOVAD',
					'rse' => 'RSE',
					'snv' => 'SNV',
					'streetnet' => 'STREETNET',
					'ugo-waste-pickers' => 'UGO Waste Pickers',
					'umande-trust' => 'UMANDE TRUST',
					'wiego' => 'WIEGO',
					'world-bank' => 'World Bank',
				)
			),
			array(
				'name' => 'How activities are funded?',
				'desc' => '',
				'id' => $prefixwpg . 'funding',
				'type' => 'multicheck',
				'options' => array(
					'self-funded' => 'Self funded',
					'donor-funded' => 'Donor Funded',
					'membeship-fees' => 'Membeship fees',
					'ngo-funds' => 'NGO funds',
					'loans' => 'Loans (e.g. from banks or corporate bodies)',
				)
			),
			array(
				'name' => 'Internal Elections: how often?',
				'desc' => '',
				'id' => $prefixwpg . 'elections',
				'type' => 'radio_inline',
				'options' => array(
				    array('name' => 'no', 'value' => 'no'),
				    array('name' => 'Mquarterly', 'value' => 'quarterly'),
				    array('name' => 'annually', 'value' => 'annually'),
				    array('name' => 'every 2 years', 'value' => 'every-2-years'),
				    array('name' => 'every 3 years', 'value' => 'every-3-years'),
				    array('name' => 'every 4 years', 'value' => 'every-4-years'),
				    array('name' => 'every 5 years', 'value' => 'every-5-years'),
				    array('name' => 'other', 'value' => 'other'),
				)
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
            echo icl_disp_language($l['native_name']);
           	echo '</a>';
            echo '</li>';
        }
        echo '</ul></div>';
    }
}
?>
