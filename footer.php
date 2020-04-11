<footer class="footer">
        <div class="footer-logo container-fluid">
            <div class="row footer-img justify-content-center align-items-center">
                <div class="col-sm-8 text-center">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/ARCHI company.png" alt="">
                </div>
            </div>
        </div>
        <div class="footer-right container-fluid">
            <div class="row footer-img justify-content-end align-items-center">
                <div class="col-sm-8 text-right">
                    <?php if(get_field('icon_twitter')) :
                    $icon_twitter= get_field('icon_twitter');  ?>
                    <a href="<?php the_field('link_twitter'); ?>"><img src="<?php echo $icon_twitter ?>" alt=""></a>
                    <?php endif; ?>
                    <?php if(get_field('icon_fone') ) :
                    $icon_fone= get_field('icon_fone');  ?>
                    <a href="<?php the_field('link_fone'); ?>"><img src="<?php echo $icon_fone ?>" alt=""></a>
                    <?php endif; ?>
                    <?php if(get_field('icon_facebook') ) :
                    $icon_facebook= get_field('icon_facebook');  ?>
                    <a href="<?php the_field('link_facebook'); ?>"><img src="<?php echo $icon_facebook ?>" alt=""></a>
                    <?php endif; ?>
                    <?php if(get_field('icon_instagram') ) :
                    $icon_instagram= get_field('icon_instagram');  ?>
                    <a href="<?php the_field('link_fone'); ?>"><img src="<?php echo $icon_instagram ?>" alt=""></a>
                    <?php endif; ?>                   
                </div>
            </div>
        </div>
        <div class="main-footer">
            <div class="footer-left">
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>