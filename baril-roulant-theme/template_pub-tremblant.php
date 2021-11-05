<!-- /*
Template Name: Pub Tremblant
*/ -->

<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()) :
    the_post(); ?>

        <div style="background-image:url('<?php the_post_thumbnail_url(); ?>')" class="hero"></div>

        <section class="pub">
            <div class="wrapper">
                <h1><?php the_title();?></h1>
                <p data-scrolly="AppearFromBottom">
                    <?php the_content();?>
                </p>

                <?php if( have_rows('pub_tremblant_boutons_menus') ): ?>
                <div class="button-flex">
                    <?php while( have_rows('pub_tremblant_boutons_menus') ): the_row(); ?>
                        <?php if ( get_row('titre_du_bouton')): ?>
                            <a
                                href="<?php echo the_sub_field('fichier_du_bouton') ?>"
                                class="button-flex-item"
                                data-component="AppearFrombottom"
                                ><?php echo the_sub_field('titre_du_bouton') ?></a
                            >
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <?php if( have_rows('pub_tremblant_galerie') ): ?>
                    <section class="galerie-tremblant">
                        <?php while( have_rows('pub_tremblant_galerie') ): the_row(); ?>
                                <h2><?php echo the_sub_field('pt_titre_galerie') ?></h2>

                                <div class="grid_img">
                                <?php while( have_rows('pt_images_galerie') ): the_row(); ?>
                                    <div class="img">
                                    
                                        <img data-scrolly="AppearFromBottom"
                                        src="<?php echo the_sub_field('pt_repeteur_image') ?>"
                                        alt="pub hiver">
                                    
                                    </div>
                                <?php endwhile; ?>
                                </div>
                        <?php endwhile; ?>
                    </section>
                <?php endif; ?>
                
            </div>
        </section>

        <?php endwhile; ?>
<?php else: ?>
    <p>Aucun contenu ici!</p>
<?php endif; ?>
        <?php get_footer(); ?>