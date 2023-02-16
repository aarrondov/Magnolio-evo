<?php
  /**
  * Second Section
  **/

  $gardenhidetsec = get_theme_mod('grdn_hide_tsec','1');

  if( $gardenhidetsec == '' ){
?>
    <section class="services">
      <div class="container">
        <?php
          $getsecttl = get_theme_mod('grdn_sectwo_title');
          $shwfscettl = '';
            if( !empty( $getsecttl ) ){
              $shwfscettl = '<div class="section_head"><h2 class="section_title"><span>'.$getsecttl.'</span></h2></div>';
            }

            echo $shwfscettl;
        ?>
        <div class="row">
            <?php
              for( $ser = 1; $ser<=2; $ser++ ){
                if( get_theme_mod( 'grdn_sectwo'.$ser,true ) !='' ){
                  $serbox = new WP_Query(array('page_id' => get_theme_mod( 'grdn_sectwo'.$ser )));
                  while( $serbox->have_posts() ) : $serbox->the_post();
            ?>        
                    <div class="col">
                      <div class="service-box">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                      </div><!-- service box -->
                    </div><!-- col -->
            <?php
                  endwhile;
                }
              }
            ?>
        </div><!-- row -->
      </div><!-- container -->
    </section>
      
<?php
  }
?>