<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package advance-it-company
 */
?>
    <div id="footer" class="copyright-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                <?php dynamic_sidebar('footer-1');?>
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php dynamic_sidebar('footer-2');?>
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php dynamic_sidebar('footer-3');?>
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php dynamic_sidebar('footer-4');?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p><?php echo esc_html(get_theme_mod('advance_it_company_footer_copy', __('Copyright 2019 -', 'advance-it-company')));?> <?php advance_it_company_credit();?></p>
    </div>
    <?php wp_footer();?>
    </body>
</html>