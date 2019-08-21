<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="quote-submission">			
				<header class="entry-header">
					<?php the_title(); ?> </h1>
						<h1 class="entry-title"> <?php the_title(); ?> </h1>
				</header>
			<?php if( is_user_logged_in() && current_user_can( 'edit_posts' ) ): ?>
					<div class="quote-submission-wrapper">
						<form name="quoteForm" id="quote-submission-form">
						<div>
							<label for="quote-author">Author of quote</label>
							<input type='text' name="quote_author" id="quote-author" required >
						</div>	
							
						<div>	
							<label for="quote-content">Quote</label>
							<textarea name="quote_name" id="quote-content" cols="20" rows="3" required></textarea>
							</div>

							<div>	
							<label for="quote-source">Quote Source</label>
							<input name="quote_source" type="text" id="quote-source" required></input>
							</div>

							<div>
								<label for="quote-source-url">Quote URL</label>
								<input type="url" name="quote_source_url" id="quote-source-url">
							</div>

							<input type="submit" value="Submit quote">

						</form>
					</div>
			
				
			<?php else: ?>
				<p>Sorry, you must log in to submit a quote :(?</p>
				<p><a href="<?php echo wp_login_url(); ?>" </a> </p>

			<?php endif; ?>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
