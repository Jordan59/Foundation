<?php
/**
 * Content Aside
 *
 * Displays 'aside' custom post format
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<span class="right radius success label"><?php echo get_post_format(); ?></span>
		<p class="subheader"><?php printf( __('Written by %1$s on %2$s', 'foundation' ), get_the_author_link(), get_the_time(get_option('date_format'))) ?></p>
	</header>

	<?php if ( has_post_thumbnail()) : ?>
	<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>

	<?php the_excerpt(); ?>

</article>

<hr />