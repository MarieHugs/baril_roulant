<!-- /*
Template Name: Microbrasserie
*/ -->

<?php get_header(); ?>

<section>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div style="background-image:url('<?php the_post_thumbnail_url(); ?>')" class="hero hero-page"></div>

            <div class="wrapper" data-scrolly="AppearFromBottom">
                <h1><?php the_title(); ?></h1>

                <?php echo get_field('text_content_micro') ?>

                <!-- BOUTON MICROBRASSERIE -->
                <?php if( have_rows('bouton_micro') ): ?>
                    <div class="button-flex">

                    <?php while( have_rows('bouton_micro') ): the_row(); ?>
                        <?php if ( get_row('titre_bouton_micro')): ?>
                            <a
                                href="<?php echo the_sub_field('lien_bouton_micro') ?>"
                                class="button-flex-item"
                                data-component="AppearFrombottom"
                                ><?php echo the_sub_field('titre_bouton_micro') ?></a
                            >
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <div class="carte">
                    <?php the_content() ?>
                </div>
                <section class="galerie__split galerie-micro">
                    <div class="wrapper">
                        <?php if( have_rows('carousel_micro') ): ?>
                            <?php while( have_rows('carousel_micro') ): the_row(); ?>
                                <div
                                    class="caroussel-micro"
                                    data-scrolly="AppearFromBottom"
                                >
                                    <?php if (get_sub_field('titre_carousel_micro')) : ?>
                                        <h3><?php the_sub_field('titre_carousel_micro'); ?></h3>
                                    <?php endif; ?>
                                    <div
                                        class="swiper-container carousel-auberge"
                                        data-component="Carousel"
                                        data-carousel="split"
                                    >
                                        <div class="swiper-wrapper">
                                            <?php if( have_rows('images_carousel_micro') ): ?>
                                                <?php while( have_rows('images_carousel_micro') ): the_row(); ?>
                                                    <div class="swiper-slide">
                                                        <div class="swiper-slide-content">
                                                            <?php $image = get_sub_field('image_carousel_micro'); ?>
                                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="swiper-pagination"></div></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        </div>

        <?php endwhile; ?>
    <?php else : ?>
        <p>Oups! Il n’y a rien!</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>