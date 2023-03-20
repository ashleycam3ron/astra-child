<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

?>
<?php astra_entry_before(); ?>
<article
<?php
		echo astra_attr(
			'article-blog',
			array(
				'id'    => 'post-' . get_the_id(),
				'class' => join(' ', get_post_class(array("clearfix")) ),
			)
		);
		?>
>
	<?php astra_entry_top(); ?>

	<div class="blog-img">
		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
			<?php the_post_thumbnail('thumbnail',array('class' => 'card-img-top')); ?>
		</a>
	</div>
	<div class="blog-excerpt">
		<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
		<p class="date"><?php echo astra_post_date();?></p>
		<?php the_excerpt();?>
	</div>

	<?php //astra_entry_content_blog(); ?>
	<?php astra_entry_bottom(); ?>
</article><!-- #post-## -->
<hr/>
<?php astra_entry_after(); ?>
