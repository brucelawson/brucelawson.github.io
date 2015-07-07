<?php get_header(); ?>
<?php get_sidebar(); ?>

<main id="content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article role=article itemscope itemtype="http://schema.org/BlogPosting">
         <header>
            <h2 id="post-<?php the_ID(); ?>">
                <?php the_title(); ?>
            </h2>
            <time itemprop="dateCreated" datetime="<?php the_time('Y-m-d')?>">
                <?php the_time('l j F Y') ?>
            </time>
        </header>
        <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        <footer>Posted in
            <?php the_category(', ') ?>
            .
            Follow comments via
            <?php comments_rss_link('RSS feed.'); ?>
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
        </footer>	
	
        <nav>
           <div><?php previous_post('<span>Previously</span>: %','','yes') ?></div>
           <div><?php next_post(' <span>Next</span>: %','','yes') ?></div>
        </nav>
        <?php comments_template(); ?>
        <?php endwhile; else: ?>
        <p>
            <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
        <?php endif; ?>
    </article>
</main>
<?php get_footer(); ?>
