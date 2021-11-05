/*
Template Name:Page a propos
*/

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>


        <div style="background-image:url('<?php the_post_thumbnail_url(); ?>')" class="hero hero-apropos"></div>

            <div class="intro-apropos">
                <div class="wrapper">
                    <h1 data-scrolly="AppearFromLeft"><?php the_title();?></h1>

                       
                    <?php if (have_rows('section_apropos')): ?>
                        <?php while (have_rows('section_apropos')): the_row(); ?>
                            <div class="apropos_section">  
                                <?php if (get_sub_field('image_propos')) : ?>
                                    <img
                                    src="<?php the_sub_field('image_propos'); ?>"
                                    data-scrolly="Appear"
                                    alt=""
                                    />  
                                <?php endif; ?>
                                <div data-scrolly="AppearFromBottom"> 
                                    <?php if (get_sub_field('texte_propos')) : ?>
                                        <p>
                                            <?php the_sub_field('texte_propos'); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>    
                        <?php endwhile; ?>
                    <?php endif; ?>
                    

                    <?php if (get_field('hopa_apropos')) : ?>
                        <p class="evidence" data-scrolly="Appear"><?php the_field('hopa_apropos'); ?></p>
                    <?php endif; ?>
                    
                </div>
            </div>

    <?php endwhile; ?>
<?php else : ?>
    <p>Oups! Il n’y a rien!</p>
<?php endif; ?>

<?php get_footer(); ?>