<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package advance-it-company
 */

get_header(); ?>

<section id="our-services">
  <div class="innerlightbox">
	  <div class="container">
      <?php
        $left_right = get_theme_mod( 'advance_it_company_layout_options','Right Sidebar');
        if($left_right == 'Left Sidebar'){ ?>
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <?php get_sidebar();?>
          </div>
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content' ); 
              endwhile;
              else :
                get_template_part( 'no-results' );
              endif; 
            ?>
        	  <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'advance-it-company' ),
                    'next_text'          => __( 'Next page', 'advance-it-company' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-it-company' ) . ' </span>',
                ) );
              ?>
             </div> 
    	    </div>
        </div>
      <?php }else if($left_right == 'Right Sidebar'){ ?>
        <div class="row">
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content' ); 
              endwhile;
              else :
                get_template_part( 'no-results' );
              endif; 
            ?>
            <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'advance-it-company' ),
                    'next_text'          => __( 'Next page', 'advance-it-company' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-it-company' ) . ' </span>',
                ) );
              ?>
             </div> 
          </div>
      	  <div class="col-lg-4 col-md-4">
      			<?php get_sidebar();?>
      	  </div>
        </div>
      <?php }else if($left_right == 'One Column'){ ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content' ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'advance-it-company' ),
                  'next_text'          => __( 'Next page', 'advance-it-company' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-it-company' ) . ' </span>',
              ) );
            ?>
           </div> 
        </div>
      <?php }else if($left_right == 'Grid Layout'){ ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/grid-layout' ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'advance-it-company' ),
                  'next_text'          => __( 'Next page', 'advance-it-company' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-it-company' ) . ' </span>',
              ) );
            ?>
           </div> 
        </div>
      <?php } else { ?>
        <div class="row">
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content' ); 
              endwhile;
              else :
                get_template_part( 'no-results' );
              endif; 
            ?>
            <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'advance-it-company' ),
                    'next_text'          => __( 'Next page', 'advance-it-company' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-it-company' ) . ' </span>',
                ) );
              ?>
             </div> 
          </div>
          <div class="col-lg-4 col-md-4">
            <?php get_sidebar();?>
          </div>
        </div>  
      <?php }?>
		  <div class="clearfix"></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>