<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archi</title>
    <?php wp_head() ?>
</head>
<body>
<!-- ----------------------------------------------section-start---------------------- -->
    <section class="section-start">
        <nav class="navbar navbar-expand-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="burger burger-toggle"></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header_menu',
                'container' => false,
                'menu_class' => 'navbar-nav no-show m-auto',
            ) )
            ?>
            </div>
        </nav>
        <div class=".container-fluid">
            <div class="row  row-start">
                <div class="col-md-6">
                    <img class="logo" src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="">
                </div>  
                <div class="col-md-6">
                    <div class="burger burger-main"></div>
                </div>
            </div>
            <div class="row row-start2">
                <div class="col-md-6">
                    <div class="text-block">
                        <?php if( get_field('title_start') ): ?>
                        <h3><?php the_field('title_start') ?></h3>
                        <?php endif; ?>
                        <?php if(get_field('description_start') ): ?>
                            <p class="akrobat"><?php the_field('description_start') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6">
                            <?php if(get_field('button_start') ): 
                                $link = get_field('button_start'); ?>                           
                    <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-outline-success" role="button">
                    <?php echo esc_html($link['title']); ?></a>
            <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="background"></div>
    </section>
<!-- -------------------------------------------section-stages----------------- -->
    <section class="section-stages">
    <?php if(get_field('title_stages') ) : ?>
        <h2><?php the_field('title_stages'); ?></h2>
        <?php endif ?>
        <div class="slider">
            <img id="bag-img1" src="<?php bloginfo('template_url') ?>/assets/img/2 1.png" alt="">
            <img id="bag-img2" src="<?php bloginfo('template_url') ?>/assets/img/3 1.png" alt="">
            <div class="carousel-block">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                         <?php if(get_field('image_slider_1') ) :  
                            $image_1 = get_field('image_slider_1');  ?>
                            <img src="<?php echo $image_1 ?> "class="d-block w-100" alt="...">
                        <?php endif; ?> 
                        </div>
                        <div class="carousel-item">
                        <?php if(get_field('image_slider_2') ) :  
                            $image_2 = get_field('image_slider_2');  ?>
                            <img src="<?php echo $image_2 ?> "class="d-block w-100" alt="...">
                        <?php endif; ?> 
                        </div>
                        <div class="carousel-item">
                        <?php if(get_field('image_slider_3') ) :  
                            $image_3 = get_field('image_slider_3');  ?>
                            <img src="<?php echo $image_3 ?> "class="d-block w-100" alt="...">
                        <?php endif; ?> 
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <?php if(get_field('title_stages_after') ) : ?>    
        <h4><?php the_field('title_stages_after'); ?></h4>
        <?php endif; ?>
    </section>
    <!-- -------------------------------------------section-development-------------- -->

    <div class="section-background">
        <div class="line"></div>
        <section class="section-development">
            <?php if(get_field('title_development_1') ) : ?>    
            <h2><?php the_field('title_development_1'); ?></h2>
            <?php endif; ?>
            <?php if(get_field('title_development_2') ) : ?>    
            <h3><?php the_field('title_development_2'); ?></h3>
            <?php endif; ?>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xlg-6 pr-4">
                        <div class="row justify-content-end">
                            <div class="col-xlg-4 mr-2">
                            <?php if(get_field('image_dev_1') ) :  
                                $image_dev_1 = get_field('image_dev_1');  ?>
                                <img src="<?php echo $image_dev_1 ?>" alt="...">
                                <?php endif; ?>  
                                <?php if(get_field('title_image_dev_1') ) : ?>    
                                <h5><?php the_field('title_image_dev_1'); ?></h5>
                                <?php endif; ?>  
                            </div>
                            <div class="col-xlg-4">
                            <?php if(get_field('image_dev_2') ) :  
                                $image_dev_2 = get_field('image_dev_2');  ?>
                                <img src="<?php echo $image_dev_2 ?>" alt="...">
                                <?php endif; ?> 
                                <?php if(get_field('title_image_dev_2') ) : ?>    
                                <h5><?php the_field('title_image_dev_2'); ?></h5>
                                <?php endif; ?>  
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-xlg-4 mr-2">
                                <?php if(get_field('image_dev_3') ) :  
                                $image_dev_3 = get_field('image_dev_3');  ?>
                                <img src="<?php echo $image_dev_3 ?>" alt="...">
                                <?php endif; ?> 
                                <?php if(get_field('title_image_dev_3') ) : ?>    
                                <h5><?php the_field('title_image_dev_3'); ?></h5>
                                <?php endif; ?>  
                            </div>
                            <div class="col-xlg-4">
                                <?php if(get_field('image_dev_4') ) :  
                                $image_dev_4 = get_field('image_dev_4');  ?>
                                <img src="<?php echo $image_dev_4 ?>" alt="...">
                                <?php endif; ?> 
                                <?php if(get_field('title_image_dev_4') ) : ?>    
                                <h5><?php the_field('title_image_dev_4'); ?></h5>
                                <?php endif; ?>  
                            </div>
                        </div>
                    </div>
                    <div class="col-xlg-6 pl-4">
                        <div class="row">
                            <div class="col-xlg-8">
                                <?php if(get_field('image_dev_5') ) :  
                                $image_dev_5 = get_field('image_dev_5');  ?>
                                <img src="<?php echo $image_dev_5 ?>" alt="...">
                                <?php endif; ?> 
                                <?php if(get_field('title_image_dev_5') ) : ?>    
                                <h5><?php the_field('title_image_dev_5'); ?></h5>
                                <?php endif; ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dev-block akrobat">
                <?php if(get_field('describtion_dev') ) : ?>    
                <p><?php the_field('describtion_dev'); ?></p>
                <?php endif; ?>  
            </div>
        </section>
    </div>
    <!-- ---------------------------------------------section-bridge-------------------- -->
    <section class="section-bridge">
        <?php if(get_field('bridge_img') ):
        $bridge_img = get_field('bridge_img'); ?>
        <img src="<?php echo $bridge_img ?>" alt="">
        <?php endif?>
    </section>
    <!-- ------------------------------------------------section-progect-------------------- -->
    <section class="section-progect">
    <?php if(get_field('title_after_bridge') ) : ?>
        <h6><?php the_field('title_after_bridge'); ?></h6>
        <?php endif?>
        <?php if(get_field('title_project') ) : ?>
        <h2><?php the_field('title_project'); ?></h2>
        <?php endif ?>
        <div class="slider">
            <img id="bag-img1" src="<?php bloginfo('template_url') ?>/assets/img/Hero_Shot 1.png" alt="">
            <img id="bag-img2" src="<?php bloginfo('template_url') ?>/assets/img/Espace-Culturel-Peripheriques-04 1.png" alt="">
            <div class="carousel-block">
                <div id="carouselExampleIndicators_2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators_2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators_2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators_2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <?php if(get_field('image_slider_project_1') ) :  
                            $image_pr_1 = get_field('image_slider_project_1');  ?>
                            <img src="<?php echo $image_pr_1 ?> "class="d-block w-100" alt="...">
                        <?php endif; ?> 
                        </div>
                        <div class="carousel-item">
                        <?php if(get_field('image_slider_project_2') ) :  
                            $image_pr_2 = get_field('image_slider_project_2');  ?>
                            <img src="<?php echo $image_pr_2 ?> "class="d-block w-100" alt="...">
                        <?php endif; ?> 
                        </div>
                        <div class="carousel-item">
                        <?php if(get_field('image_slider_project_3') ) :  
                            $image_pr_3 = get_field('image_slider_project_3');  ?>
                            <img src="<?php echo $image_pr_3 ?> "class="d-block w-100" alt="...">
                        <?php endif; ?> 
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators_2" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators_2" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <?php if(get_field('title_project_after') ) : ?>
        <h4><?php the_field('title_project_after'); ?></h4>
        <?php endif?>
    </section>
    <!-- ----------------------------------------------------section-group5--------------------- -->
    <section class="section-group5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-3">
                    <div class="line-left"></div>
                </div>
                <div class="col-6">
                    <?php if(get_field('tittle_group_5_1') ) : ?>
                    <h2><?php the_field('tittle_group_5_1'); ?></h2>
                    <?php endif ?>
                    <?php if(get_field('tittle_group_5_2') ) : ?>
                    <h2 class="decor"><?php the_field('tittle_group_5_2'); ?></h2>
                    <?php endif ?>
                </div>
                <div class="col-3">
                    <div class="line-right"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1">
                    <?php if(get_field('describtion_group5') ) : ?>
                    <p><?php the_field('describtion_group5'); ?></p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------section-group6----------------- -->
    <section class="section-group6">
        <div class="container-fluid float">
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="b6-line-left">
                    </div>
                </div>
                <div class="col-6">
                    <div class="b6-line-right">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row row-block justify-content-between align-items-center">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-12 text-center">
                            <?php if(get_field('title_ask')) : ?>
                            <p class="black-title"><?php the_field('title_ask'); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-12 text-center">
                            <div class="white-line"></div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-12 text-center">
                            <?php if(get_field('title_answer') ) : ?>
                            <h6 class="black-sub"><?php the_field('title_answer'); ?></h6>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <?php echo do_shortcode('[contact-form-7 id="103" title="Контактная форма 1"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer() ?>
</body>

</html>