<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>

<p class="nocomments">
    <?php _e("This post is password protected. Enter the password to view comments."); ?>
<p>
    <?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>
    <!-- You can start editing here. -->
    <?php if ($comments) : ?>
<h3 id="comments">
    <?php comments_number('No Responses', 'One Response', '% Responses' );?>
    to &#8220;
    <?php the_title(); ?>
    &#8221;</h3>
<?php 
		// we want to have 10 different styles
		$maxstyles = 10;
		
		foreach ($comments as $comment) :
			$i = rand(1,$maxstyles);
		?>
<article class="<?php echo 'cstyle'.$i.' '.$oddcomment; ?>" id="comment-<?php comment_ID() ?>"> Comment by <cite class="commentauthor">
    <?php comment_author_link() ?>
    </cite> <a  class="commentmetadata"  href="#comment-<?php comment_ID() ?>"> 
    <time datetime="<?php  comment_date ('Y-m-d')?>T<?php comment_time('G:i')?>">
        <?php comment_date('F jS, Y') ?>
        at
        <?php comment_time() ?>
    </time></a>
    <?php if ($comment->comment_approved == '0') : ?>
    <em>Your comment is awaiting moderation.</em>
    <?php endif; ?>
    <!--  special class if it's me; .commenttext if not ..  -->
    <div class="<?php author_highlight(); ?>">
        <?php comment_text() ?>
    </div>
    <?php edit_comment_link('edit this comment','',''); ?>
</article>
<?php /* Changes every other comment to a different class */	
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>
<?php endforeach; /* end for each comment */ ?>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post-> comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>
<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post-> comment_status) : ?>
<h3 id="respond">Leave a Reply</h3>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if ( $user_ID ) : ?>
    <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>
    <?php else : ?>
    <p>
        <label for="author">Name
        <?php if ($req) _e('(required)'); ?>
        </label>
        <input required aria-required="true" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" />
    </p>
    <p>
        <label for="email">email (will not be published - <a href="/index.php/policies/">privacy
        policy</a>)
        <?php if ($req) _e('(required)'); ?>
        </label>
        <input required aria-required="true" type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22"  />
    </p>
    <p>
        <label for="url">Website</label>
        <input type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22"  />
    </p>
    <?php endif; ?>
    <p><small>HTML: You can use these tags: <?php echo allowed_tags(); ?>. To display code, manually escape it.</small></p>
    <p>
        <label for="comment" class="screenreader">Enter comment</label>
        <textarea required aria-required="true" name="comment" id="comment"  cols="40" rows="10"></textarea>
        <input name="submit" type="submit" id="submit"  value="Submit Comment" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
    </p>
    <?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
