<?php get_header(); ?>
<?php get_sidebar(); ?>

<main id=content role=main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article role=article>
        <h2 id="post-<?php the_ID(); ?>">
            <?php the_title(); ?>
        </h2>

            <?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
            <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

</article>
    <?php endwhile; endif; ?>
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</main>

<?php include("elsewhere.php"); ?>

<?php get_footer(); ?>
