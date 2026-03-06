<?php

//if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

<aside id="sidebar-left">
<a href="http://kadavern.oj-oj.net/"><img src="https://asnmbu.oj-oj.net/wp-content/uploads/2025/11/kadaverlogo.jpg"></a>
<a href="https://asnmbu.oj-oj.net/daimyo-as-by-night-fog-cup/"><img src="https://asnmbu.oj-oj.net/wp-content/uploads/2025/11/nattcuplogo.webp"></a>
<a><img src="https://asnmbu.oj-oj.net/wp-content/uploads/2025/11/kk-logo.webp"></a>
<a href="https://www.turorientering.no/next/orienteering/organizer/375"><img src="https://asnmbu.oj-oj.net/wp-content/uploads/2025/11/turologo.png" width="110px"></a>
<a href="/wp-content/uploads/2025/11/document.pdf" style="display: block;"><img src="https://asnmbu.oj-oj.net/wp-content/uploads/2025/11/husflid.png" width="110px"></a>
<a href="https://www.instagram.com/aasnmbuorientering/"><img src="https://asnmbu.oj-oj.net/wp-content/uploads/2025/11/instagram.png" width="110px"></a>
<a href="https://asnmbu-arkiv.oj-oj.net/" style="display: block; border: double;border-color: black;"><img src="https://asnmbu.oj-oj.net/wp-content/uploads/2025/11/arkiv.gif"><br>oj-oj Arkiv</a>

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
comment_form( $comments_args, 154 );

include("apen_post_template.php");

// GAMMEL måte (full tråd i sidebaren) – beholder som kommentar for enkel rollback
// apen_post_comments_template('', true);

// NY fin måte: miniliste med X siste kommentarer (se ny kode i bunnen av apen_post_template.php)
if ( function_exists( 'apen_post_mini_list' ) ) {
    apen_post_mini_list( 154, 7 ); // 7 siste 
}
?>
</div>
</aside>
<?php //endif; ?>