<?php
  /**
  * First Section
  **/

  $gardenhidefsec = get_theme_mod('grdn_hide_fsec', '1' );

  if( $gardenhidefsec == '' ){
    if( get_theme_mod( 'grdn_secfrst',true ) != '' ) {
?>
      <section class="introduction">
        <div class="container">
          <div class="row ac">
            <?php
              $fsec_query = new WP_Query( array( 'page_id' => get_theme_mod( 'grdn_secfrst' ) ) );
              while( $fsec_query->have_posts() ) : $fsec_query->the_post();
                if( get_theme_mod( 'grdn_secfrs_subttl',true ) != '' ) {
                  $getsbttl .= '<h5>'.get_theme_mod( 'grdn_secfrs_subttl' ).'</h5>';
                }
                if( get_theme_mod( 'grdn_secfrs_read',true ) != '' ){
                  $shwbtn .= '<a href="'.get_the_permalink().'" class="intro-btn">'.get_theme_mod( 'grdn_secfrs_read',true ).'</a>';
                }

                echo '<div class="col">';
                  echo $getsbttl;
                  the_title('<h2>','</h2>');
                  the_excerpt();
                  echo $shwbtn;
                echo '</div><!-- col -->';
              
                if( has_post_thumbnail() ) {
                  $src = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'full' );
                  $url = $src[0];
                  echo '<div class="col"><img src="'.$url.'"></div><!-- col -->';
                }
              
              endwhile; wp_reset_postdata();
            ?>
          </div><!-- row -->
        </div><!-- container-->
      </section><!-- first section -->
<?php 
    }
  }
?>