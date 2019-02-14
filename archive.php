<?php
/**
 * Initiator (archive.php)
 *
 * @package     Initiator Starter Theme
 * @copyright   Copyright (C) 2018. Benjamin Lu
 * @license     GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://getbenonit.com)
 */

?>
<?php get_header(); ?>
	<div class="site-main">
		<div id="gobal-layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'left-sidebar' ) ); ?>">
			<div class="content-area">
				<?php Benlumia007\Backdrop\MainQuery\display( 'content-archive' ); ?>
			</div>
			<?php Benlumia007\Backdrop\Sidebar\display( 'primary' ); ?>
		</div>
	</div>
<?php get_footer(); ?>
