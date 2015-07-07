<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8> <!-- simplified version; works on legacy browsers -->
<title>
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?>
&nbsp;
<?php } ?>
<?php wp_title($sep = ':'); ?>
</title>
<link rel="manifest" href="/wp-content/themes/HTML5/manifest.json">
<link rel="icon" href="/wp-content/themes/HTML5/images/coast-icon.png" sizes="228x228">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?110512" media="screen">
<link rel="stylesheet" href="/wp-content/themes/default/print.css" media="print">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>">
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
<meta name="Description"
 content="Bruce Lawson's blog, focussing on web accessibility, web standards, travellers tales, and music">
<meta name="Keywords"
 content="Bruce Lawson, Web accessibility, web standards, daily blog, HTML, HTML 5, CSS 3, CSS">
<meta name="author" content="Bruce Lawson.">
<script src="/utilities.js"></script>

<!--  hack to make IE able to apply CSS to elements that it doesn't usually know about. See http://remysharp.com/2009/01/07/html5-enabling-script/ 
Added <main>. Which I forgot to do when adding it to the CSS, HTML and blogging about it on a day off two days ago - hypocritical bastard that I am. Burn the witch!  http://twitter.com/thierrykoblentz/statuses/298252917272633344 -->
<!--[if IE]>
<script type="text/javascript">
(function(){if(!/*@cc_on!@*/0)return;var e = "abbr,article,aside,audio,canvas,data,details,summary,figure, figcaption,footer,header,main,mark,menu,meter,nav,output,progress,section,time,video".split(','),i=0,length=e.length;while(i<length){document.createElement(e[i++])}})();
</script>
<![endif]-->

</head>
<?php if ( is_single() ) { echo '<body>';}
else {
echo'<body id="pg_'.implode('', explode(" ", trim((wp_title('', false))))).'">'; }?>
<script>
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>
var pageTracker = _gat._getTracker("UA-118875-2");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!--  <div id="page"> wrapper div if want centering -->
<header role=banner>
  <!-- needs to be h1 only if home page, or link if not -->
  <h1><a href="<?php echo get_settings('home'); ?>"><span>
    <?php bloginfo('name'); ?>
    </span></a></h1>
</header>
