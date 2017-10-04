<?php
/**
 * The default template for displaying content in pages.
 * @package WordPress
 */

global $lang;
include_once(get_theme_root().'/'.theme_name.'/languages/lang.php');
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'readytorumble' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php the_post_thumbnail(); ?>
			<?php if ( is_single() || is_singular('page') ) : ?>
			<!--<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">mlol
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'readytorumble' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>-->
			<?php endif; // is_single() ?>
			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'readytorumble' ) . '</span>', __( '1 Reply', 'readytorumble' ), __( '% Replies', 'readytorumble' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'readytorumble' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

	</article><!-- #post -->