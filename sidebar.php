<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

<aside id="sidebar-left">
<a href="http://kadavern.oj-oj.net/"><img src="https://gdv.hoh.mybluehost.me/website_3c4ea913/wp-content/uploads/2025/11/kadaverlogo.jpg"></a>
<a href="https://asnmbu.oj-oj.net/ascup/2026/abnfc26.php"><img src="https://gdv.hoh.mybluehost.me/website_3c4ea913/wp-content/uploads/2025/11/nattcuplogo.webp"></a>
<a><img src="https://gdv.hoh.mybluehost.me/website_3c4ea913/wp-content/uploads/2025/11/kk-logo.webp"></a>
<a href="https://www.turorientering.no/next/orienteering/organizer/375"><img src="https://gdv.hoh.mybluehost.me/website_3c4ea913/wp-content/uploads/2025/11/turologo.png" width="110px"></a>
<a href="https://www.asil.no/"><img src="https://gdv.hoh.mybluehost.me/website_3c4ea913/wp-content/uploads/2025/11/aaslogo.gif" width="110px"></a>
<a href="https://www.nmbui.no/"><img src="https://gdv.hoh.mybluehost.me/website_3c4ea913/wp-content/uploads/2025/11/nmbui-logo-300x133.webp" width="110px"></a>
<a href="" style="display: block; border: double;border-color: black;"><img src="https://gdv.hoh.mybluehost.me/website_3c4ea913/wp-content/uploads/2025/11/husflid.png" width="104px"><br>Husflid</a>
<a href="/arkiv" style="display: block; border: double;border-color: black;"><img src="https://gdv.hoh.mybluehost.me/website_3c4ea913/wp-content/uploads/2025/11/arkiv.gif"><br>oj-oj Arkiv</a>
<a href="https://www.instagram.com/aasnmbuorientering/" style="display: block; border: double;border-color: black;"><img src="https://gdv.hoh.mybluehost.me/website_3c4ea913/wp-content/uploads/2025/11/instagram.jpg"><br>Følg oss på instagram!</a>
</aside>

<aside id="sidebar" role="complementary">
<div id="primary" class="widget-area">
<h1>Åpen Post</h1>
<?php
	
	$comments_args = array(
        // Change the title of send button 
        'label_submit' => __( 'Post 📨', 'textdomain' ),
        // Change the title of the reply section
        'title_reply' => __( '', 'textdomain' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><label for="comment">Opplysende innlegg<textarea id="comment" name="comment" aria-required="true"></textarea></label></p>',
);
comment_form( $comments_args, 154);
include("apen_post_template.php");
apen_post_comments_template('',true);
?>
</div>
</aside>
<?php endif; ?>