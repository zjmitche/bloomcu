<?php
/**
 * Archive
 *
 * @package Base
 */

get_header();
?>

<?php base_display_hero_content(); ?>

<div class="g-page-content">
	<?php get_template_part( 'template-parts/post/content-post-loop' ); ?>
</div>

<?php get_footer(); ?>
