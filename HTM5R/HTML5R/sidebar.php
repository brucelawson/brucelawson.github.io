<aside role=complementary>
    <nav role=navigation>
    <div id=searchbox>
      <?php include (TEMPLATEPATH . '/searchform.php'); ?> 
    </div>
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

    <div id="lowlights">
      <h2>Site Lowlights:</h2>
      <ul>
        <li><a href="/archive/">Archives</a></li>
        <li><a href="/2004/zengarden/">Geocities 1996 - my CSS
          Zen Garden design</a></li>
        <li><a href="/spam-letters/">The Spam Letters</a></li>
        <li><a href="/kazaa/">Letters found on Kazaa</a></li>
        <li> <a href="http://www.amazon.co.uk/gp/registry/registry.html?ie=UTF8&amp;type=wishlist&amp;id=1X8A4ML6ZH3PQ"> My
          Amazon wishlist</a></li>
      </ul>
    </div>

      
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
