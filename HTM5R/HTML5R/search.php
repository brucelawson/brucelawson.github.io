<?php get_header(); ?>
<?php get_sidebar(); ?>
	<main id=content role=main>

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>
		
		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>
        
        <article>
        <header>
            <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title(); ?>
                </a></h2>
            <time pubdate datetime="<?php the_time('Y-m-d')?>">
                <?php the_time('l j F Y') ?>
            </time>
        </header>
        
            <?php the_excerpt() ?>
            
        <footer>Posted in
            <?php the_category(', ') ?>
            .
            <?php edit_post_link('Edit','','.'); ?>
            <?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?>
        </footer>
    </article>
				
		
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="navprevious"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
			<div class="navnext"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
		</div>
	
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
		
	</main>


<?php get_footer(); ?> 