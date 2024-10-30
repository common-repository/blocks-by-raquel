<?php

function bbr_register_block_categories(){
    register_block_pattern_category(
        'b_b_r',
        array(
            'label' => _x('Blocks By Raquel', 'bbr'),
        )
    );
}

add_action('init','bbr_register_block_categories');