<?php
/*
Template Name: Archives, used as master for "Archives" page.
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

<main id="content">

    <h2>Archives by Subject:</h2>
    <ul>
        <?php wp_list_categories(); ?>
    </ul>

    <h2>Archives by Month:</h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>

</main>

<?php get_footer(); ?>
