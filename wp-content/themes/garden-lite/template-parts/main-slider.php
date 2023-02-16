<?php
  $garden_hide_slider = get_theme_mod( 'hide_slider','1' );
  if( $garden_hide_slider == '' ){
    $garden_lite_pages = array();

    for($sld=1; $sld<4; $sld++) {
      $mod = absint( get_theme_mod('slider-setting'.$sld));
      if ( 'page-none-selected' != $mod ) {
        $garden_lite_pages[] = $mod;
      }
    }

    if( !empty($garden_lite_pages) ) :

      $args = array(
        'posts_per_page' => 3,
        'post_type' => 'page',
        'post__in' => $garden_lite_pages,
        'orderby' => 'post__in'
      );
      $sliderqu = new WP_Query( $args );
      if ( $sliderqu->have_posts() ) : 
        $sld = 1;
        echo '<section id="slider-front"><div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider">';
        $i = 0;
        while ( $sliderqu->have_posts() ) : $sliderqu->the_post();
          $i++;
          $garden_lite_slideno[] = $i;
          $garden_lite_slidetitle[] = get_the_title();
          $garden_lite_slidelink[] = esc_url(get_permalink());
          $slider_sb_ttl = get_theme_mod('slidersubttl',true);
          if( !empty( $slider_sb_ttl ) ){
            $shwsubttl = '<h4>'.$slider_sb_ttl.'</h4>';
          } ?>
          <img src="<?php esc_url( the_post_thumbnail_url('full') ); ?>" title="#slidecaption<?php echo esc_attr( $i );?>" />
        <?php $sld++;
        endwhile;
        echo '</div>';
        $k = 0;
        foreach( $garden_lite_slideno as $garden_lite_sln ){
        ?>
          <div id="slidecaption<?php echo esc_attr( $garden_lite_sln );?>" class="nivo-html-caption">
            <div class="caption-inner">
              <?php echo $shwsubttl; ?>
              <h2><a href="<?php echo esc_url($garden_lite_slidelink[$k] );?>"><?php echo esc_html($garden_lite_slidetitle[$k] ); ?></a></h2>
              <?php
                $getsldrmrtxt = get_theme_mod('slider_more_text',__('Read More','garden-lite'));
                if( ! empty( $getsldrmrtxt ) ){
                  $holdsldrmrtxt = '<a class="slide-button" href="'.esc_url($garden_lite_slidelink[$k] ).'">'.esc_html(get_theme_mod('slider_more_text',__('Read More','garden-lite'))).'</a>';
                }
                echo $holdsldrmrtxt;
              ?>              
            </div>
          </div>
        <?php
          $k++;
          wp_reset_postdata();
        }
      endif;

    endif;

    echo '</div></section>';

  }

?>