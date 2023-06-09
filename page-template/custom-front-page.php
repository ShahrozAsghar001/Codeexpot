<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<?php do_action( 'advance_it_company_above_slider' ); ?>

<?php if( get_theme_mod( 'advance_it_company_slider_hide') != '') { ?>
  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <?php $pages = array();
        for ( $count = 1; $count <= 4; $count++ ) {
          $mod = intval( get_theme_mod( 'advance_it_company_slider_page' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $pages[] = $mod;
          }
        }
        if( !empty($pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>     
      <div class="carousel-inner" role="listbox">
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h2><?php the_title(); ?></h2>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( advance_it_company_string_limit_words( $excerpt,20 ) ); ?></p>
                <div class="readbtn">
                  <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('READ MORE','advance-it-company'); ?><i class="fas fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
      endif;?>
      <div class="slider-nex-pre">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
        </a>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
<?php } ?>

<?php do_action( 'advance_it_company_below_slider' ); ?>

<?php do_action( 'advance_it_company_above_work_section' ); ?>

<?php if( get_theme_mod('advance_it_company_title') != '' || get_theme_mod( 'advance_it_company_setting' )!= '' || get_theme_mod( 'advance_it_company_works_category' )!= ''){ ?>
  <section id="work_cat">
    <div class="container">
      <?php if( get_theme_mod('advance_it_company_title') != ''){ ?>
        <h5><?php echo esc_html(get_theme_mod('advance_it_company_title','')); ?></h5>
      <?php } ?>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <?php
            $postData1=  get_theme_mod('advance_it_company_setting');
              if($postData1){
              $args = array( 'name' => esc_html($postData1 ,'advance-it-company'));
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="post-sec">
                      <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( advance_it_company_string_limit_words( $excerpt,10 ) ); ?></p>
                      <img src="<?php the_post_thumbnail_url('full'); ?>"/>
                    </div>
              <?php endwhile; 
              wp_reset_postdata();?>
              <?php else : ?>
                <div class="no-postfound"></div>
              <?php
            endif; }?>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <?php 
             $catData =  get_theme_mod('advance_it_company_works_category');
             if($catData){
              $page_query = new WP_Query(array( 'category_name' => esc_html($catData,'advance-it-company')));?>
                <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class=" col-lg-6 col-md-4">
                    <div class="cat-posts ">
                      <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                      <div class="cat_body">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                        <p>
                          <?php $excerpt = get_the_excerpt(); echo esc_html( advance_it_company_string_limit_words( $excerpt,10 ) ); ?>
                        </p> 
                      </div>
                    </div>
                  </div> 
                <?php endwhile;
                wp_reset_postdata();
                }
              ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php }?>

<?php do_action( 'advance_it_company_below_work_section' ); ?>

<div id="content">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</div>

<?php get_footer(); ?>