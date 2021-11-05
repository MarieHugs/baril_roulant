
<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()) :
    the_post(); ?>

<?php if( have_rows('accueil_hero') ): ?>

    <section class="hero-accueil">
        <div
            class="swiper-container carousel-accueil"
            data-component="Carousel"
        >
            <div class="swiper-wrapper">


    <?php while( have_rows('accueil_hero') ): the_row(); ?>
             <?php while( have_rows('hero_images_carousel') ): the_row(); ?>
                <div class="swiper-slide">
                
                <div class="swiper-slide-content">
                    <div class="degrade"></div>
                        <?php $image = get_sub_field('carousel_images'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                </div>
            <?php endwhile; ?>

    <?php endwhile; ?>


        </div>
        
    </div>

    <?php while( have_rows('accueil_hero') ): the_row(); ?>
        <div
            class="container-texte-hero"
            data-scrolly="AppearFromBottom"
        >
            <div class="texte-hero-accueil wrapper">
                    <?php if ( get_row('hero_titre')): ?>
                    <h1><?php echo the_sub_field('hero_titre') ?></h1>
                    <?php endif; ?>

                    <?php if ( get_row('hero_contenu')): ?>
                    <p>
                    <?php echo the_sub_field('hero_contenu') ?>
                    </p>
                    <?php endif; ?>

                    <?php if ( get_row('hero_bouton_url')): ?>
                    <a href="<?php echo the_sub_field('hero_bouton_url') ?>" class="savoir-plus-hero">En savoir plus</a>
                    <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>

</section>

        <?php while( have_rows('accueil_activites') ): the_row(); ?>

            <section class="activites-accueil wrapper">
                <h1 data-scrolly="AppearFromBottom">Activités</h1>
                <div class="container-activites">

                    <div class="haut" data-scrolly="AppearFromBottom">
                        <?php while( have_rows('activite_1') ): the_row(); ?>
                        <div style="background-image:url('<?php echo the_sub_field('activite_1_image') ?>')" class="carte-activites resto">
                            <?php if ( get_row('activite_1_titre')): ?>
                            <h2><a href="<?php echo the_sub_field('lien_vers_page_1') ?>"><?php echo the_sub_field('activite_1_titre') ?></a></h2>
                            <?php endif; ?>

                        </div>
                        <?php endwhile; ?>

                        <?php while( have_rows('activite_2') ): the_row(); ?>
                        <div style="background-image:url('<?php echo the_sub_field('activite_2_image') ?>')" class="auberge">
                            <?php if ( get_row('activite_2_titre')): ?>
                            <h2><a href="<?php echo the_sub_field('lien_vers_page_2') ?>"><?php echo the_sub_field('activite_2_titre') ?></a></h2>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>

                    </div>

                    <div class="bas" data-scrolly="AppearFromBottom">
                        <?php while( have_rows('activite_3') ): the_row(); ?>
                        <div style="background-image:url('<?php echo the_sub_field('activite_3_image') ?>')" class="evenements">
                            <?php if ( get_row('activite_3_titre')): ?>
                            <h2><a href="<?php echo the_sub_field('lien_vers_page_3') ?>"><?php echo the_sub_field('activite_3_titre') ?></a></h2>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>

                        <?php while( have_rows('activite_4') ): the_row(); ?>
                        <div style="background-image:url('<?php echo the_sub_field('activite_4_image') ?>')" class="micro">
                            <?php if ( get_row('activite_4_titre')): ?>
                            <h2><a href="<?php echo the_sub_field('lien_vers_page_4') ?>"><?php echo the_sub_field('activite_4_titre') ?></a></h2>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
            <?php endwhile; ?>

<?php endif; ?>


<?php endwhile; ?>
<?php else: ?>
    <p>Aucun contenu ici!</p>
<?php endif; ?>
<?php if (have_posts()): ?>

<?php query_posts(array(
    'post_type' => 'publicite',
    'post_status' => 'publish',
    'showposts' => -1,
)); ?>
<?php while (have_posts()) :
    the_post(); ?>
            <div
            style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>'); background-repeat:no-repeat; background-size:cover;"
                class="bloc-promotionnel wrapper"
                data-scrolly="AppearFromBottom"
            >
            <h1>
                <?php the_title(); ?>

            </h1>

            <?php the_content(); ?>

            </div>
            <?php endwhile; ?>
    <?php wp_reset_query(); ?>
<?php else: ?>
    <p>Aucun carrousel</p>
<?php endif; ?>
<?php get_footer(); ?>