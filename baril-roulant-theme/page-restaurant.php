<?php get_header(); ?>



<div style="background-image:url('<?php the_post_thumbnail_url(); ?>')" class="hero hero-restaurant">



</div>



<section class="restaurant">
    <div class="wrapper">
        <h1><?php the_title();?></h1>




        <p><?php the_content();?></p>

        <div class="button-flex" data-scrolly="AppearFromBottom">
            <a href="" class="button-flex-item">Menu du moment</a>
            <a href="" class="button-flex-item">liste des boissons</a>
        </div>
        <p data-scrolly="AppearFromBottom">
            <?php the_field('txt_before_button') ?>
        </p>
    </div>

    <section class="citation-resto" data-scrolly="AppearFromLeft">
        <div class="wrapper">
            <div class="text-citation">
                <p class="guillemets">«</p>
                <p>
                    <?php the_field('citation_resto') ?>
                </p>
                <p class="guillemets">
                    <span class="citation_auteur">-<?php the_field('citation_auteur_resto') ?>
                    </span>
                    »
                </p>
            </div>
        </div>
        <?php if ( get_field('citation_img_resto')): ?>
        <?php $imagecitresto = get_field('citation_img_resto'); ?>

        <img src="<?php echo $imagecitresto['url']; ?>" alt="<?php echo $imagecitresto['alt']; ?>">
        <?php endif;?>
    </section>



    <div class="wrapper">

        <p data-scrolly="AppearFromBottom">
            <?php the_field('txt_before_button_2') ?>
        </p>
        <div class="button-biere" data-scrolly="AppearFromBottom">
            <a href="#" class="button-item">Découvrir les bières maisons</a>
        </div>
        <p data-scrolly="AppearFromBottom">
            <?php the_field('txt_before_button_3') ?>
        </p>

        <div class="button-flex" data-scrolly="AppearFromBottom">
            <a href="<?php bloginfo('url'); ?>/Pub-Val-David" class="button-flex-item">
                Pub de Val-David
            </a>

            <a href="<?php bloginfo('url'); ?>/Pub-Tremblant" class="button-flex-item">
                Pub de Tremblant
            </a>
        </div>
    </div>

    <div class="wrapper">
        <div class="grid_img">
            <?php if( have_rows('grid_resto') ): ?>



            <?php while( have_rows('grid_resto') ): the_row(); ?>


            <div class="img" data-scrolly="<?php the_sub_field('data_scrolly') ?>">
                <a href="#">


                    <?php if ( get_sub_field('grid_img_resto')): ?>

                    <?php $imageresto = get_sub_field('grid_img_resto'); ?>

                    <img src="<?php echo $imageresto['url']; ?>" alt="<?php echo $imageresto['alt']; ?>">

                    <?php endif; ?>



                    <?php if (get_sub_field('prix_item')): ?>

                    <div class="contenu">
                        <div class="text">
                            <h3><?php the_sub_field('titre_img_resto') ?></h3>
                            <p><?php the_sub_field('prix_item') ?></p>
                        </div>
                    </div>
                </a>
            </div>


            <?php else: ?>
            <div class="contenu">
                <div class="text">
                    <h3><?php the_sub_field('titre_img_resto') ?></h3>
                </div>
            </div>
            </a>
        </div>


        <?php endif; ?>

        <?php endwhile; ?>
    </div>

    <?php endif; ?>

    </div>





    <div class="timetable-n-maps">
        <h3 class="title">Horaire</h3>
        <?php if (have_rows('repeteur_horaire')): ?>
        <div class="times" data-scrolly="AppearFromRight">



            <?php while( have_rows('repeteur_horaire') ): the_row(); ?>

            <p class="time"> <?php the_sub_field('date_txt') ?></p>

            <?php endwhile; ?>
        </div>
        <?php endif; ?>













        <div class="map">
            <div class="wrapper">
                <div class="map_container">
                    <div class="map_content" data-component="Map" map-link=""></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>












<?php get_footer(); ?>