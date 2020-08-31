<!-- It will not work because haven't created any doc page in wp-admin -->

<?php 

    if(have_posts()){
        while(have_posts()){
            the_post();
            
            // if we are using a global post which is coming from the_post function
            $postImage = get_the_post_thumbnail_url();

            // for alt text
            $altText = get_post_meta($postImage->ID, '_wp_attachment_image_alt', true);
            ?>
            <a href="<?php echo $postImage ?>" rel="lightbox"><img src="<?php echo $postImage ?>" alt="<?php echo $altText; ?>"></a>
            <?php
        }
    }

?>

<?php 

    if(have_posts()){
        while(have_posts()){
            the_post();
            ?>
            <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            <p><?php the_content(); ?></p>
            <?php
        }
    }

?>


<?php

    if(is_user_logged_in()) {
        echo "User is Logged In";
    }
    else {
        echo "User is not Logged In";
    }

?>

<?php

if(have_posts()) {
    while(have_posts()) {
        the_post();

        // if we are using a global post which is coming from the_post function
        $postImage = get_the_post_thumbnail_url();

        // for alt text
        $altText = get_post_meta($postImage->ID, '_wp_attachment_image_alt', true);
        ?>
        <img src="<?php echo $postImage ?>" alt="<?php echo $altText; ?>">
        <?php
    }
}

?>

<?php

$pages = get_pages();
foreach($pages as $page) {
    print_r($pages);
    ?>
    <a href="<?php echo get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a>
    <?php
}

if( is_home() ) {
    get_footer();
}
elseif( is_front_page() ){
    get_footer('front-footer');
}
else {
    get_footer('404');
}


update_option('name', $name);
update_option('pass', $pass);


$name = get_option('name', '');
$pass = get_option('pass', '');

?>

<meta charset="<?php echo get_bloginfo('charset'); ?>">

<?php $meta = get_post_meta( get_the_ID() ); ?>

<?php
                                        // slug of the post which is registered
    if ( get_post_type( get_the_ID() ) == 'book_tour' ) {
        //if is true
    }
?>


<?php
    get_template_part( $slug, $name );
?>

<?php

    get_template_part('about');
    get_template_part('about', 'us');
    get_template_part('about', 'company');

?>

<?php
    get_template_part('template-parts/about', 'us');
?>

<?php 
    // in functions.php
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails');

    // In functions.php
    add_theme_support( 'custom-background' );
    
    // Now can use in any other file
    $theme_support = get_theme_support( 'custom-background' );
    // it can only be used after registering the support
?>

<?php 


// Register Post Type
function gallery_post_type() {
    register_post_type( 'gallery', array());
}
add_action( 'init', 'gallery_post_type' );



// Register Post Type
// function gallery_post_type() {
//     register_post_type( 'gallery', array(
//         'supports'      => array(
//             'title',
//             'thumbnail',
//             'excerpt'
//         ),
//         'public'        => true,
//         'label'         => __('Gallery', 'braxit'),
//         'show_ui'       => true,   // to show in Admin Menu Bar
//         'menu_icon'     => 'dashicons-format-gallery',
//         'menu_position' => 50,
//         'show_in_rest'  => true,   // to show in REST API
//     ));
// }
// add_action( 'init', 'gallery_post_type' );


$args = array(
    'post_type'      => 'gallery',
    // 'post_status' => 'public' // by default post_status is public
    'posts_per_page' => -1, // by default it shows 5 per page
    'order'          => 'ASC', // by default it is DESC
);
$galleryPost = new WP_Query($args);


$query = new WP_Query(array( 
    'author' => 123 // auhtor id
));
$query = new WP_Query(array( 
    'author_name' => 'zaime' // author name
));
$query = new WP_Query(array(
    'author' => '2, 6, 17, 38' // only of these author by ids
));
$query = new WP_Query(array(
    'author' => '-12,-34,-56' // by excluding posts which contain these ids
));




$query = new WP_Query(array( 
    's' => 'keyword' 
));



$query = new WP_Query(array( 
    'p' => 7 
    // retrieve data of post which have the id 7
));
$query = new WP_Query(array(
    'page_id' => 7 
    //retrieve page which has id 7
));
$query = new WP_Query(array(
    'name' => 'about-my-life' 
    // display post which has slug 'about-my-life'
));
$query = new WP_Query(array(
    'pagename' => 'contact' 
    // display page which slug is 'contact'
));
$query = new WP_Query(array(
    'post_parent' => 0 
    // will exclude all the pages and only show the top level page
));
$query = new WP_Query(array(
    'post_parent' => 93 
    // will display the child page which has parent page of ID 93
));
$query = new WP_Query(array(
    'post_type' => 'any' 
    // will display all posts
));
$args = array(
    'post_type' => array( 
        'post', 
        'page', 
        'movie', 
        'book' 
    )
    // will display only those posts which has the slug defined in the array
);
$query = new WP_Query(array(
    'post_status' => 'draft' 
    // will display the post is draft
));
$args = array(
    'post_status' => array( 
        'pending', 
        'draft', 
        'future' 
    )
    // will display the post which status are defined in the array
);
$query = new WP_Query( $args );


$query = new WP_Query(array( 
    'posts_per_page' => 10, // display 10 posts per page
    'offset' => 5 // start from 6 and skip first 5 posts 
));

$query = new WP_Query( 'year=2020&monthnum=08&day=19' );
// or
$args = array(
    'date_query' => array(
        array(
            'year'  => 2020,
            'month' => 8,
            'day'   => 18,
        ),
    ),
);
$query = new WP_Query( $args );



$args = array(
    'meta_key'     => 'gallery',
    'meta_value'   => 'italy',
    'meta_compare' => '=='
);
$galleryPost = new WP_Query( $args );



$args = array(
    'post_type'  => 'book',
    'meta_query' => array(
        array(
            'key'     => 'novel',
            'value'   => 'harry potter',
            'compare' => 'LIKE', // NOT LIKE, =, BETWEEN
        ),
    ),
);
$bookQuery = new WP_Query( $args );

?>