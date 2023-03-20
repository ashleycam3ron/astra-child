<?php
/**
 * Template for Single post
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       Astra 1.0.0
 */

?>

<div <?php astra_blog_layout_class( 'single-layout-1' ); ?>>

	<?php astra_single_header_before(); ?>

	<?php if ( apply_filters( 'astra_single_layout_one_banner_visibility', true ) ) { ?>

		<header class="entry-header <?php astra_entry_header_class(); ?>">

			<?php astra_single_header_top(); ?>

			<?php astra_banner_elements_order(); ?>

			<?php astra_single_header_bottom(); ?>

			<div class="author-date">
				<img width="75" height="75" style="display: inline-block;vertical-align: top;margin-right:12px;border-radius: 20em;" src="headshot.jpg" alt="Gina Campbell"/>

				<div style="display: inline-block;text-align: left;font-size: 1.1em;">
					<div style="margin-bottom: -2px;padding-top:15px;">by [Author Name]</div>
					<div itemscope="" itemtype="http://schema.org/CreativeWork">
						<meta itemprop="dateCreated" content="<?php the_time('Y-m-d'); ?>">
							<p style="text-transform: uppercase;letter-spacing: .015em;font-size: .85em;margin-bottom: 10px;">
								<small>Published: <?php the_time('M j, Y'); ?></small>
							</p>
						</meta>
					</div>
				</div>
			</div> <!-- end author-date -->

		</header><!-- .entry-header -->

	<?php } ?>

	<?php astra_single_header_after(); ?>

	<div class="entry-content clear"
	<?php
				echo astra_attr(
					'article-entry-content-single-layout',
					array(
						'class' => '',
					)
				);
				?>
	>

		<?php astra_entry_content_before(); ?>

		<?php the_content(); ?>

		<?php
			astra_edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'astra' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>

		<?php astra_entry_content_after(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . esc_html( astra_default_strings( 'string-single-page-links-before', false ) ),
					'after'       => '</div>',
					'link_before' => '<span class="page-link">',
					'link_after'  => '</span>',
				)
			);
			?>
	</div><!-- .entry-content .clear -->
</div>
