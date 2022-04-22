<?php
/*
* Template Name: Debate Topics Single
* Template Post Type: debate_topics
*/

get_header();
?>

<div id="wrap">
    <?php
    if (have_posts('debate_topics')) {
        while (have_posts('debate_topics')) {
            the_post('debate_topics');
            // output title
            $custompost = get_post(get_the_ID());
            echo '<h2>' . $custompost->post_title . '</h2>';
            // output content
            echo '<p>' . get_the_content('debate_topics') . '</p>';
        }
    }
    ?>
<?php get_footer(); ?>
</div>