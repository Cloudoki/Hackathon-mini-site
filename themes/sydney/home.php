<?php
/**
 * The home template file.
 *
 * @package Sydney
 */

get_header(); ?>


	<div id="primary" class="content-area col-md-9 <?php echo sydney_blog_layout(); ?>">
		<main id="main" class="post-wrap" role="main">


		<?php if( check_has_posts( 'calendar' ) && get_option( 'calendar_shortcode_id' ) != '' ){ ?>
		<!-- Display Calendar -->
		<section id="calendar">
			<div class="posts-layout">
				<header class="entry-header">
					<h2 class="title-post">Calendar</h2>
				</header><!-- /header -->
				<?php echo do_shortcode('[calendar id="'.get_option( 'calendar_shortcode_id' ).'"]' ); ?>
			</div>
		</section>
		<br>
		<?php } ?>


		<?php if( check_has_posts( 'tmm' ) && get_option( 'team_shortcode' ) != '' ){ ?>
		<!-- Display team info -->
		<section id="team">
			<div class="posts-layout">
				<header class="entry-header">
					<h2 class="title-post">Team Overview</h2>
				</header><!-- /header -->
				<?php echo do_shortcode( '[tmm name="'.get_option( 'team_shortcode' ).'"]' ); ?>
			</div>
		</section>
		<br>
		<?php } ?>


		<?php if ( have_posts() ) : ?>
		<div id="articles" class="posts-layout">
			<header class="entry-header">
				<h2 class="title-post">Lastest Posts</h2>
			</header><!-- /header -->
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php
					get_template_part( 'content', get_post_format() );
				?>
			<?php endwhile; ?>
		</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
	if ( get_theme_mod('blog_layout','classic') == 'classic' ) :
	get_sidebar();
	endif;
?>

<?php get_footer(); ?>
