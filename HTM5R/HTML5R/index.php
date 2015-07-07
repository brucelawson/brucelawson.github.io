<?php get_header(); ?>
<?php get_sidebar(); ?>

<main id=content role=main>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article role=article itemscope itemtype="http://schema.org/BlogPosting">
         <header>
            <!-- metadata stuff -->
            <time itemprop="dateCreated" datetime="<?php the_time('Y-m-d')?>">
                <?php the_time('l j F Y') ?>
            </time>
            Posted in
            <?php the_category(', ') ?>
            .
         
            <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                            // Both Comments and Pings are open ?>
            <a href="#respond">Comment.</a>
            <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                            // Only Pings are Open ?>
            Responses are closed.
            <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                            // Comments are open, Pings are not ?>
            <a href="#respond">Comment.</a>
            <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                            // Neither Comments, nor Pings are open ?>
            Comments are closed.
            <?php } edit_post_link('Edit this entry.','',''); ?>


            
            <h2 id="post-<?php the_ID(); ?>">
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title(); ?></a>
            </h2>

        </header>
        <?php the_content("Continue reading " . the_title('','',false), 0); ?>

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
