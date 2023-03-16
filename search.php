<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fancy Lab
 */

get_header();
?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">

						<h1>Search results for: <?php echo get_search_query(); ?></h1>

						<?php 

						get_search_form();

							// If there are any posts
							if( have_posts() ):

								// Load posts loop
								while( have_posts() ): the_post();
									?>
										<article <?php post_class(); ?>>
											<h2>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h2>
											<div class="post-thumbnail">
												<?php 
												if( has_post_thumbnail() ):
													the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid' ) );
												endif;
												?>
											</div>
											<div class="meta">
												<p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
												<br />
												<?php if( has_category() ): ?>
													Categories: <span><?php the_category( ' ' ); ?></span>
												<?php endif; ?>
												<br />
												<?php if( has_tag() ): ?>
													Tags: <span><?php the_tags( '', ', ' ); ?></span>
												<?php endif; ?>
												</p>
											</div>
											<div><?php the_excerpt(); ?></div>
										</article>
									<?php
								endwhile;

								// We're using numeric page navigation here.
								the_posts_pagination( array(
									'prev_text'		=> 'Previous',
									'next_text'		=> 'Next',
								));
								
							else:
						?>
							<p>There are no results for your query.</p>
						<?php endif; ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>