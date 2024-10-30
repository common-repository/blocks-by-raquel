<?php

function bbr_patterns(){
    // values for variables used in block pattern definitions below
    include ('patterns-content.php');

    // block pattern definitions
    $patterns = array(
        'blocks-by-raquel/cta' => array(
            'title' => __( "Call To Action", 'bbr' ),
            'description' => _x( 'A 2-column CTA with rounded button', 'bbr' ),
            'content' => $cta,
            'categories' => array( 'buttons', 'columns', 'b_b_r' ),
            'keywords' => array('cta', 'call to action', 'content upgrade'),
        ),

        'blocks-by-raquel/pricingtable' => array(
            'title' => __( "Pricing Table by Raquel", 'bbr' ),
            'description' => _x( 'A 3-column pricing table with buttons', 'bbr' ),
            'content' => $pricing_table,
            'categories' => array( 'buttons', 'columns', 'b_b_r' ),
            'keywords' => array('cta', 'call to action', 'pricing table'),
        ),

        'blocks-by-raquel/authorbio' => array(
            'title' => __( "Author bio box", 'bbr' ),
            'description' => _x( 'A 2-column author bio box with social media links', 'bbr' ),
            'content' => $author_bio,
            'categories' => array( 'featured', 'columns', 'b_b_r' ),
            'keywords' => array('author bio', 'social media'),
        ),

        'blocks-by-raquel/contactcard' => array(
            'title' => __( "Contact Card", 'bbr' ),
            'description' => _x( 'A 2-column contact card with social media links', 'bbr' ),
            'content' => $contact_card,
            'categories' => array( 'featured', 'columns', 'b_b_r' ),
            'keywords' => array('contact', 'social media', 'address', 'phone', 'email'),
        ),

        'blocks-by-raquel/postslisting' => array(
            'title' => __( "Posts Listing", 'bbr' ),
            'description' => _x( 'A 3-column display of posts with featured images', 'bbr' ),
            'content' => $posts_listing,
            'categories' => array( 'featured', 'columns', 'b_b_r' ),
            'keywords' => array('posts', 'query'),
        ),

        'blocks-by-raquel/hero' => array(
            'title' => __( "Hero Section", 'bbr' ),
            'description' => _x( 'A cover block with text and button CTA', 'bbr' ),
            'content' => $hero,
            'categories' => array( 'text', 'header', 'b_b_r' ),
            'keywords' => array('hero section', 'CTA', 'call to action'),
        ),

        'blocks-by-raquel/optin' => array(
            'title' => __( "Opt-In", 'bbr' ),
            'description' => _x( 'A CTA block with columns for product info and optin using Ninja Forms', 'bbr' ),
            'content' => $optin,
            'categories' => array( 'columns', 'buttons', 'b_b_r' ),
            'keywords' => array('optin', 'CTA', 'call to action'),
        ),
    );

    // creates all the blocks by looping through the pattern definitions above
    foreach ($patterns as $slug => $props) {
        register_block_pattern($slug, $props);
    }
}

add_action( 'init', 'bbr_patterns' );