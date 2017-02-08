<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter_theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<?php
if ( ! is_active_sidebar( 'slide' ) ) {
return;
}
?>

<aside id="slide_sidebar" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'slide' ); ?>
</aside>

<?php
if ( ! is_active_sidebar( 'share' ) ) {
    return;
}
?>

<aside id="share_sidebar" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'share' ); ?>
</aside>
