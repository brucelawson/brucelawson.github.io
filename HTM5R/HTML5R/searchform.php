<form method=get id=searchform role=search action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for=s class=screenreader>Search this site</label> 
<input name=s id=s  value="<?php echo wp_specialchars($s, 1); ?>">
<input type="submit" id="searchsubmit" value="Search" />
</form>