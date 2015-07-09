<form method=get id=searchform role=search action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input name=s id=s type="search" value="<?php echo wp_specialchars($s, 1); ?>" 
title="Search" placeholder="Search this site">
<input type="submit" id="searchsubmit" value="Search" />
</form>