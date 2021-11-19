/*
Template Name:pub Val-David
*/




<?php get_header(); ?>
<div style="background-image:url('<?php the_post_thumbnail_url(); ?>')" class="hero hero-pub"></div>
<section class="pub">



    <div class="wrapper">
        <h1><?php the_title();?></h1>

        <div class="button-flex" data-scrolly="AppearFromBottom">
            <a href="#" class="button-flex-item"><?php echo __('Découvrez la programmation du moment', 'BarilRoulant'); ?></a>
        </div>
        <p data-scrolly="AppearFromBottom">
            <?php the_field('texte_debut') ?>
        </p>

        <p data-scrolly="AppearFromBottom">
            <?php the_content();?>
        </p>

    </div>

    <section class="citation-pub" data-scrolly="AppearFromBottom">
        <div class="wrapper">
            <div class="text-citation">
                <p class="guillemets">«</p>
                <p>
                    <?php the_field('val_david_citation') ?>
                </p>
                <p class="guillemets">
                    <span class="citation_auteur">-<?php the_field('citation_auteur') ?>
                    </span>
                    »
                </p>
            </div>
        </div>
        <?php if ( get_field('citation_img')): ?>
        <?php $imagecitresto = get_field('citation_img'); ?>

        <img src="<?php echo $imagecitresto['url']; ?>" alt="<?php echo $imagecitresto['alt']; ?>">
        <?php endif;?>
    </section>




    <div class="button-biere">
        <a href="#" class="button-item"><?php echo __('Découvrir les bières maisons', 'BarilRoulant'); ?></a>
    </div>


    <div class="wrapper">
        <div class="grid_img">

            <?php if( have_rows('grid_rep') ): ?>


            <?php while( have_rows('grid_rep') ): the_row(); ?>




            <div class="img" data-scrolly="<?php the_sub_field('data_scrolly')?>">

                <?php if ( get_sub_field('grid_img')): ?>

                <?php $image = get_sub_field('grid_img'); ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">


                <?php endif; ?>



                <div class="contenu">
                    <div class="text">
                        <h3><?php the_sub_field('contenu_img')?></h3>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>

        </div>
        <?php endif; ?>

    </div>

</section>




<?php get_footer(); ?>