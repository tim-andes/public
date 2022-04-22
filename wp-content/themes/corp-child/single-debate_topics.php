<?php
/**
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
            echo '<p>' . $custompost->post_content . '</p>';
            // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template('debate_topics');
			}

            // if logged in, show comment form and be able to add comments
        }
    }
    ?>
<?php get_footer(); ?>
</div>