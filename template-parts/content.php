<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

$source = get_post_meta( get_the_ID(), '_qod_quote_source', true);
$source_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true);


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<div class="entry-meta">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	
		<?php 
		//check if the quote source and url excist
		if( $source && $source_url ): ?>
			<span class="source">, 
			<a href="<?php echo $source_url; ?>">
				<?php echo $source; ?>
				</a>
			</span>

		<?php 
		// check if the quote source exists
		elseif( $source ): ?>
			<span class="source">,
				<?php echo $source; ?>
			</span>
	<?php else:	?>
		<span class="source"></span>
		<?php endif; ?>
	
	</div>


</article><!-- #post-## -->
