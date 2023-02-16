<?php
/**
 * @package Garden Lite
 */

$gardenheadinfo = get_theme_mod('garden_tophide','1');
if( $gardenheadinfo == '' ){

	$gardencalltxt = get_theme_mod('garden-call-txt',true);
	$gardenphnnum = get_theme_mod('garden-phn-num',true);
	$gardenwrktxt = get_theme_mod('garden-wrk-txt',true);
	$gardenwrkhrs = get_theme_mod('garden-wrk-hrs',true);

	$gardenfbicn = get_theme_mod('facebook',true);
	$gardentwicn = get_theme_mod('twitter',true);
	$gardenigicn = get_theme_mod('instagram',true);
	$gardenliicn = get_theme_mod('linkedin',true);
	$gardengpicn = get_theme_mod('google',true);
?>
	<div class="header-info">
		<div class="row ac jcfe">
			<?php
				if( !empty( $gardenfbicn || $gardentwicn || $gardenigicn || $gardenliicn || $gardengpicn ) ){
			?>
			<div class="head-social-icons">
				<?php
					if( !empty( $gardenfbicn ) ){
						echo '<a href="'.esc_url($gardenfbicn).'" target="_blank" title="facebook-f"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
					}
					if( !empty( $gardentwicn ) ){
						echo '<a href="'.esc_url($gardentwicn).'" target="_blank" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
					}
					if( !empty( $gardenigicn ) ){
						echo '<a href="'.esc_url($gardenigicn).'" target="_blank" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
					}
					if( !empty( $gardenliicn ) ){
						echo '<a href="'.esc_url($gardenliicn).'" target="_blank" title="linkedin-in"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
					}
					if( !empty( $gardengpicn ) ){
						echo '<a href="'.esc_url($gardengpicn).'" target="_blank" title="google-plus-g"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
					}
				?>
			</div><!-- social icon -->
			<?php } if( !empty( $gardencalltxt || $gardenphnnum ) ){ ?>
			<div class="head-phn-num row ac">
				<div class="cell-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
				<div class="cell">
                    <span><?php echo esc_html($gardencalltxt); ?></span>
                    <?php echo esc_html($gardenphnnum); ?>
                </div>
			</div><!-- social icon -->
			<?php } if( !empty( $gardenwrktxt || $gardenwrkhrs ) ){ ?>
			<div class="head-wrk-hrs row ac">
				<div class="cell-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
				<div class="cell">
                    <span><?php echo esc_html($gardenwrktxt); ?></span>
                    <?php echo esc_html($gardenwrkhrs); ?>
                </div>
			</div><!-- social icon -->
			<?php } ?>
		</div><!-- row -->
	</div><!-- header info -->
<?php
	}
?>