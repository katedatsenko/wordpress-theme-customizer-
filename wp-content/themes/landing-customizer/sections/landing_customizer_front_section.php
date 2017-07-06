<?php
/**
 * Front section template file
 *
 * PHP version 5.6
 *
 * @category    Sections
 * @package     Llorix_One_Lite
 * @author      Themeisle <cristian@themeisle.com>
 * @license     GNU General Public License v2 or later
 * @link        http://themeisle.com
 */

global $customizer;

$landing_customizer_front_title = get_theme_mod( 'slogan_title', esc_html__( 'title category bla bla','landing-customizer' ) );
$landing_customizer_front_subtitle = get_theme_mod( 'slogan_subtitle', esc_html__( 'subtitle category bla bla','landing-customizer' ) );

?>
<section class="brief text-left brief-design-one brief-left">
<div class="section-overlay-layer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 content-section brief-content-one">
				<h2 class="text-left dark-text"> <?php echo $landing_customizer_front_title; ?>
				</h2>
				<div class="colored-line-left"></div>
				<div class="brief-content-text"><?php echo $landing_customizer_front_subtitle; ?></div>

			</div>

		</div>
	</div>
</div>
<div class="my-slider">
	<div class="owl-carousel">

 </div>
</div>
</section>
<script type="text/javascript">
	jQuery(document).ready(function(){
	  jQuery(".owl-carousel").owlCarousel();
	});
</script>
