<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>

<h1>Blog</h1>
<div class="flex">
	<?php
	$recent_posts = wp_get_recent_posts(array(
		'numberposts' => 4, // Number of recent posts thumbnails to display
		'post_status' => 'publish' // Show only the published posts
	));
	foreach( $recent_posts as $post_item ) :?>
	<article class="margin-1">
	  <header>
		<h1>
		<a href="<?php echo $post_item['guid']?>"> <?php echo get_the_post_thumbnail($post_item['ID'], 'medium'); ?><br>
		<?php echo $post_item['post_title']?></a></h1>
		<span class="small-text">🗓️<?php echo get_the_date('', $post_item['ID']) ?>	🗣️<?php echo(the_author_meta( 'display_name' , $post_item['post_author'])); ?></span>
	  </header>
	  <p>
		  <?php echo(get_the_excerpt($post_item['ID'])) ?>
	  </p>
	<p><a href="<?php echo $post_item['guid']?>" class="fancy-link">Les mer...</a></p>
	</article>
	
	<?php endforeach; ?>
</div>


<?php endwhile; endif; ?>
<?php get_footer(); ?>