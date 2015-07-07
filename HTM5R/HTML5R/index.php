<?php get_header(); ?>
<?php get_sidebar(); ?>

<main id=content role=main>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article role=article itemscope itemtype="http://schema.org/BlogPosting">
        <header>
            <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title(); ?>
                </a></h2>
            <time itemprop="dateCreated" datetime="<?php the_time('Y-m-d')?>">
                <?php the_time('l j F Y') ?>
            </time>
        </header>
        <?php the_content("Continue reading " . the_title('','',false), 0); ?>
        <footer>Posted in
            <?php the_category(', ') ?>
            .
            <?php edit_post_link('Edit','','.'); ?>
            <?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?>
        </footer>
    </article>
    <?php endwhile; ?>
    <nav>
       <!--nav for the page -->
      <div><?php next_posts_link('Older Entries ', 0); ?></div>
	  <div><?php previous_posts_link(' Newer Entries', '0') ?></div>
    </nav>
    <?php else : ?>
    <h2 class="center">Not Found</h2>
    <p class="center">
        <?php _e("Sorry, but you are looking for something that isn't here."); ?>
    </p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
    <?php endif; ?>
</main>

<?php include("elsewhere.php"); ?>

<?php get_footer(); ?>
