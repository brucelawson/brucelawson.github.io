<aside role=complementary>
    <nav role=navigation>
    <div id=searchbox>
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
      <a href="#content">skip to main content</a> </div>
      <ul id=mainnav>
        <li><a id=home href="/"><span>Home</span></a></li>
        <li><a id=music href="/category/my-music/"><span>music</span></a></li>
        <li><a id=about href="/about/"> <span>about</span> </a></li>
        <li><a id=photos href="http://www.flickr.com/photos/24374884@N08/sets/"><span>photos</span></a></li>
        <li><a id=writing href="/writing/"><span>writing </span></a></li>
        <li><a id=navemail  href="/contact/"><span>email</span></a></li>
      </ul>
    </nav>
  <section id=book>
    <h2>Buy my book!</h2>
    <p><cite>Introducing <abbr>HTML</abbr>5</cite> by <cite>Bruce Lawson</cite> and <cite>Remy Sharp</cite></p>
    <a href="http://click.linksynergy.com/fs-bin/stat?id=s442wXy3nao&amp;offerid=145244.1404575&amp;type=2"><img src="http://www.peachpit.com/ShowCover.aspx?isbn=0321687299&amp;type=d" alt="buy Introducing HTML5"></a>
    <ul>
      <li><a href="http://click.linksynergy.com/fs-bin/stat?id=s442wXy3nao&amp;offerid=145244.1404575&amp;type=2">Buy (USA)</a></li>
      <li><a href="http://www.amazon.co.uk/Introducing-HTML-Voices-That-Matter/dp/0321687299/brucelawson-21">Buy (UK)</a></li>
    </ul>
    <h2>Hear me rant!</h2>
    <!-- thanks, Lanyrd http://lanyrd.com/services/badges/ -->
    <div class="lanyrd-target-splat"><a href="http://lanyrd.com/people/brucel/"  class="lanyrd-splat lanyrd-template-detailed lanyrd-nomicroformats lanyrd-number-10" rel="me">See my conferences on Lanyrd</a></div>
  </section>

    <div id=lowlights>
      <h2>Site Lowlights:</h2>
      <ul>
        <li><a href="/2004/zengarden/">Geocities 1996 - my CSS
          Zen Garden design</a></li>
        <li><a href="/category/accessibility-web-standards/">Notes
          on Web Accessibility</a></li>
        <li><a href="/category/lists/">Bruce's Top Tens - lists
          of loves.</a></li>
        <li><a href="/spam-letters/">The Spam Letters</a></li>
        <li><a href="/kazaa/">Letters found on Kazaa</a></li>
        <li> <a href="http://www.amazon.co.uk/gp/registry/registry.html?ie=UTF8&amp;type=wishlist&amp;id=1X8A4ML6ZH3PQ"> My
          Amazon wishlist</a></li>
      </ul>
    </div>
    <div id=CMSnav> <!-- Wordpress default stuff: --> 
      
      <!-- end tweets -->
      <?php /* If this is a category archive */ if (is_category()) { ?>
      <p>You are currently browsing the archives for the
        <?php single_cat_title(''); ?>
        category.</p>
      <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
      <p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog
        archives for the day
        <?php the_time('l, F jS, Y'); ?>
        .</p>
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog
        archives for
        <?php the_time('F, Y'); ?>
        .</p>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog
        archives for the year
        <?php the_time('Y'); ?>
        .</p>
      <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
      <p>You have searched the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog
        archives for <strong>'<?php echo wp_specialchars($s); ?>'</strong>.
        If you are unable to find anything in these search results, you
        can try one of these links.</p>
      <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <p>You are currently browsing the <a href="<?php echo get_settings('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog
          archives.</p>
        <?php } ?>
      <h2>
        <?php _e('Categories'); ?>
      </h2>
      <ul>
        <?php list_cats(0, '', 'name', 'asc', '', 1, 0, 1, 1, 1, 1, 0,'','','','','') ?>
      </ul>
      
      <!--  not testing if we have pages (cos I know we have) because I don't want WoodProos to wrap the tile in an <li>. Listitis is a shocking thing.-->
      <h2>Pages</h2>
      <ul>
        <?php wp_list_pages('categorize=0&title_li=0' ); ?>
      </ul>
      <!-- http://codex.wordpress.org/Function_Reference/wp_list_pages#Markup_and_styling_of_page_items and http://wordpress.org/support/topic/using-wp_list_bookmarks-and-title_li--> 
      
      <!--                 <h2>
                    <?php _e('Archives'); ?>
                </h2>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul> --> 
      
      <!-- get recent comments uses a plugin http://blog.jodies.de/2004/11/recent-comments/-->
      <?php if (function_exists('get_recent_comments')) { ?>
      <h2>
        <?php _e('Recent Comments:'); ?>
      </h2>
      <ul class="recent">
        <?php get_recent_comments(); ?>
      </ul>
      <?php } ?>
      <!-- end recent comments --> 
      
    </div>
  
  <!-- colophon sort of stuff -->
  <section id=blah>
    <h2>
      <?php _e('Blah blah'); ?>
    </h2>
    
    <!--  get the random image; hardcoded on my site  --> 
    <script src="/randompic.js">
  </script> 
    <!--end of random images -->
    <ul>
      <li><a href="http://www.nsdesign.co.uk/">Web Hosting by NSDesign.</a></li>
      <li>Proudly powered by <a href="http://wordpress.org">WordPress</a>. </li>
      <li><a href="feed:<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comments
        (RSS)</a>.</li>
    </ul>
    
  </section>
  <!-- end colophon --> 
  
</aside>
