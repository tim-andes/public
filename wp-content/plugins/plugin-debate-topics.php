<?php

/*
Plugin Name: Create Debate Topics Post Type
*/

function wpshout_register_debate_topics( ) {
    $args = array(
      'public' => true,
      'menu_position' => 20,
      'label'  => 'Debate Topics',
      'supports' => array( 'title', 'editor', 'comments', 'custom-fields'),
    );
    register_post_type( 'debate_topics', $args );
}
add_action( 'init', 'wpshout_register_debate_topics' );