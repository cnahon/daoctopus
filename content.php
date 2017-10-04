<?php
/**
 * The default template for displaying content. Used for index/archive/search.
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
			<div class="vignette">
				<?php the_post_thumbnail('news-thumbnail'); ?>
			</div>
		</header><!-- .entry-header -->
		<div class="details">
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'readytorumble' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<div class="date"><?php echo get_the_date('j F Y'); ?></div>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<div class="metas">
				<div class="comments">
					<?php if ( comments_open() ) : ?>
						<div class="comments-link">
							<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'readytorumble' ) . '</span>', __( '1 Reply', 'readytorumble' ), __( '% Replies', 'readytorumble' ) ); ?>
						</div><!-- .comments-link -->
					<?php endif; // comments_open() ?>
				</div>
			</div>
		</div>

	</article><!-- #post -->