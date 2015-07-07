<?php  

// kill rel=”category tag” which fucks up validation http://www.wpinsite.com/code-snippets/how-to-fix-the-relcategory-tag-in-wordpress-to-allow-w3c-validation

add_filter( 'the_category', 'replace_cat_tag' );
 
function replace_cat_tag ( $text ) {
$text = str_replace('rel="category tag"', "", $text); return $text;
}
?>