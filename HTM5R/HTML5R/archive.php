<?php get_header(); ?>
<?php get_sidebar(); ?>

<!-- individual archives page -->

<main id="content" role="main">
    <?php if (have_posts()) : ?>
    <section>
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2>Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2>Archive for
            <time datetime="<?php the_time('Y-m-d')?>">
                <?php the_time('l j F Y') ?>
            </time>
        </h2>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2>Archive for
            <?php the_time('F, Y'); ?>
        </h2>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2>Archive for
            <?php the_time('Y'); ?>
        </h2>
        <?php /* If this is a search */ } elseif (is_search()) { ?>
        <h2>Search Results</h2>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2>Author Archive</h2>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <h2>Blog Archives</h2>
            <?php } ?>
        <nav class="navigation">
            <!--nav for the page -->
            <div class="navprevious">
                <?php posts_nav_link('','','<span> Older entries</span>') ?>
            </div>
            <div class="navnext">
                <?php posts_nav_link('','<span>Newer entries </span>','') ?>
            </div>
        </nav>
        <?php while (have_posts()) : the_post(); ?>
        <article>
            <header>
                <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                    <?php the_title(); ?>
                    </a></h3>
                <time pubdate datetime="<?php the_time('Y-m-d')?>">
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
            <div class="navprevious">
                <?php posts_nav_link('','','<span> Older entries</span>') ?>
            </div>
            <div class="navnext">
                <?php posts_nav_link('','<span>Newer entries </span>','') ?>
            </div>
        </nav>
    </section>
    <?php else : ?>
    <h2 class="center">Not Found</h2>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    <?php endif; ?>
</main>

<?php include("elsewhere.php"); ?>
<?php get_footer(); ?>
