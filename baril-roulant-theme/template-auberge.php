<!-- /*
Template Name: Auberge
*/ -->

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

         <div style="background-image:url('<?php the_post_thumbnail_url(); ?>')" class="hero hero-auberge"></div>

        <div class="intro-auberge" data-scrolly="AppearFromLeft">
            <div class="wrapper">
                <h1><?php the_title();?></h1>

                <p>
                    <?php the_content();?>
                </p>
                <?php if (get_field('texte_evidence')) : ?>
                    <p class="evidence">
                        <?php the_field('texte_evidence'); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>

            <div class="reservation-auberge" data-scrolly="Appear">
                <div class="wrapper">
                    <form action="" class="date-auberge">
                        <fieldset>
                        <?php if (have_rows('labels_date')): ?>
                            <?php while (have_rows('labels_date')): the_row(); ?>
                                <div class="input">
                                    <?php if (get_sub_field('choix_date_debut')) : ?>
                                        <label class="input__label" for="arrive">
                                            <?php the_sub_field('choix_date_debut'); ?>
                                        </label>
                                    <?php endif; ?>  
                                    <input
                                        type="date"
                                        class="input__element"
                                        name="arrive"
                                        id="arrive"
                                    />
                                </div>
                                <div class="input">
                                    <?php if (get_sub_field('chois_date_fin')) : ?>
                                        <label class="input__label" for="depart" >
                                            <?php the_sub_field('chois_date_fin'); ?>
                                        </label>
                                    <?php endif; ?> 
                                    <input
                                        type="date"
                                        class="input__element"
                                        name="depart"
                                        id="depart"
                                    />
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </fieldset>
                    </form>
                </div>
            </div>

            <section class="chambre-auberge" data-component="Filtre" data-scrolly="AppearFromRight">
                <div class="wrapper">

                    <nav class="nav-auberge">
                    
                        <ul>
                            <?php if (have_rows('menu_filtres_chambre')): ?>
                                <?php while (have_rows('menu_filtres_chambre')): the_row(); ?>
                                    <li>
                                        <a
                                            class="btn_chambre"
                                            data-filtre="<?php the_sub_field('filtre_item_menu_chambre'); ?>" 
                                            >
                                            <?php the_sub_field('item_menu_chambre'); ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </nav>
                    <div class="chambres">
                        <?php
                            query_posts(array(
                                'post_type' => 'pw_chambres',
                                'post_status' => 'publish',
                                'showposts' => 10
                            ));?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php if (get_field('classe_filtre')) : ?>
                                    <article class="chambre" data-filtre='<?php the_field('classe_filtre'); ?>'>
                                <?php endif; ?>
                                    <div class="image-chambre">
                                        <?php if (have_rows('section_image_chambre')): ?>
                                            <?php while (have_rows('section_image_chambre')): the_row(); ?>
                                                <div class="image-relative">
                                                    <?php if (get_sub_field('image_chambre')) : ?>
                                                        <img
                                                            src="<?php the_sub_field('image_chambre'); ?>"
                                                            alt=""
                                                        />
                                                    <?php endif; ?>
                                                    <div class="prix-chambre">
                                                    <?php if (get_sub_field('prix_chambre')) : ?>
                                                        <p class="p1__prix"><?php the_sub_field('prix_chambre'); ?></p>
                                                    <?php endif; ?>
                                                    <?php if (get_sub_field('disponibilite_chambre')) : ?>
                                                        <p><?php the_sub_field('disponibilite_chambre'); ?></p>
                                                    <?php endif; ?>    
                                                    </div>
                                                </div>
                                                <div class="reserve-chambre">
                                                    <svg class="icon icon--md">
                                                        <use
                                                            xlink:href="#icon-calendrier"
                                                        ></use>
                                                    </svg>
                                                    <?php if (get_sub_field('reservation_chambre')) : ?>
                                                        <p><?php the_sub_field('reservation_chambre'); ?></p>
                                                    <?php endif; ?>  
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="contenu__chambre">
                                        <h4><?php the_title(); ?></h4>
                                        <?php if (have_rows('section_description_chambre')): ?>
                                            <?php while (have_rows('section_description_chambre')): the_row(); ?>
                                                    <?php if (get_sub_field('type_lit_chambre')) : ?>
                                                        <p><?php the_sub_field('type_lit_chambre'); ?></p>
                                                    <?php endif; ?> 
                                                <?php if (have_rows('liste_inclut_chambre')): ?>
                                                    <?php while (have_rows('liste_inclut_chambre')): the_row(); ?> 
                                                        <ul>
                                                            <?php if (get_sub_field('element_liste_inclut_chambre')) : ?>
                                                                <li><?php the_sub_field('element_liste_inclut_chambre'); ?></li>
                                                            <?php endif; ?> 
                                                        </ul>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </section>                                               

            <section class="option-reservation" data-scrolly="AppearFromBottom">
                <div class="wrapper">
                       
                    <?php if (have_rows('section_options_auberge')): ?>
                        <?php while (have_rows('section_options_auberge')): the_row(); ?>
                            <div class="colonne1">
                                <?php if( have_rows('colonne_1_options') ): ?>
                                    <?php while( have_rows('colonne_1_options') ): the_row(); ?>
                                        <?php if (get_sub_field('intro_colonne1')) : ?>
                                            <p>
                                                <?php the_sub_field('intro_colonne1'); ?>
                                            </p>
                                        <?php endif; ?>  
                                        <?php if( have_rows('liste1_options') ): ?>
                                            <?php while( have_rows('liste1_options') ): the_row(); ?>
                                                <ul>
                                                <?php if (get_sub_field('element_de_liste_1_options')) : ?>
                                                    <li> <?php the_sub_field('element_de_liste_1_options'); ?></li>
                                                <?php endif; ?>  
                                                </ul>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="colonne2_3">
                                <div class="colonne2">
                                <?php if( have_rows('colonne_2_options') ): ?>
                                    <?php while( have_rows('colonne_2_options') ): the_row(); ?>
                                        <?php if (get_sub_field('intro_colonne_2')) : ?>
                                            <p>
                                                <?php the_sub_field('intro_colonne_2'); ?>
                                            </p>
                                        <?php endif; ?>
                                        <?php if( have_rows('liste_options_2') ): ?>
                                            <?php while( have_rows('liste_options_2') ): the_row(); ?> 
                                                <ul>
                                                <?php if (get_sub_field('element_liste_2_options')) : ?>
                                                    <li> <?php the_sub_field('element_liste_2_options'); ?></li>
                                                <?php endif; ?> 
                                                </ul>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </div>
                                <div class="colonne3">
                                <?php if( have_rows('colonne_3_options') ): ?>
                                    <?php while( have_rows('colonne_3_options') ): the_row(); ?>
                                        <?php if (get_sub_field('prix_evidence_colonne_3')) : ?>
                                            <h5><?php the_sub_field('prix_evidence_colonne_3'); ?></h5>
                                        <?php endif; ?> 
                                        <?php if (get_sub_field('texte_colonne_3')) : ?>
                                            <p><?php the_sub_field('texte_colonne_3'); ?></p>
                                        <?php endif; ?> 
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </section>

            <section class="citations" data-scrolly="AppearFromLeft">
                <?php if (have_rows('section_citation_auberge')): ?>
                    <?php while (have_rows('section_citation_auberge')): the_row(); ?>
                        <div class="wrapper">
                            <div class="text-citation">
                                <?php if (get_sub_field('quote_left')) : ?>
                                    <p class="guillemets"><?php the_sub_field('quote_left'); ?></p>
                                <?php endif; ?>
                                <?php if (get_sub_field('main_texte_citation_auberge')) : ?>
                                <p>
                                    <?php the_sub_field('main_texte_citation_auberge'); ?>
                                </p>
                                <?php endif; ?>
                                
                                    <p class="guillemets">
                                        <span class="citation_auteur">
                                        <?php if (get_sub_field('auteur_quote')) : ?>
                                            <?php the_sub_field('auteur_quote'); ?>
                                        <?php endif; ?>  
                                        </span>
                                        <?php if (get_sub_field('quote_right')) : ?>
                                            <?php the_sub_field('quote_right'); ?>
                                        <?php endif; ?>    
                                    </p>
                            </div>
                        </div>
                        <?php if (get_sub_field('img_citation_auberge')) : ?>
                            <img src="<?php the_sub_field('img_citation_auberge'); ?>" alt="" />
                        <?php endif; ?>  
                        
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>

            <section class="galerie__split">
                <div class="wrapper">

                    <?php if( have_rows('section_carrousel_auberge') ): ?>
                        <?php while( have_rows('section_carrousel_auberge') ): the_row(); ?>
                            <div
                                class="caroussel-chambre"
                                data-scrolly="AppearFromRight"
                            >
                            <?php if (get_sub_field('titre_caroussel_auberge')) : ?>
                                <h3><?php the_sub_field('titre_caroussel_auberge'); ?></h3>
                            <?php endif; ?>
                                <div
                                    class="swiper-container carousel-auberge"
                                    data-component="Carousel"
                                    data-carousel="split"
                                >
                                    <div class="swiper-wrapper">
                                <?php if( have_rows('image_carroussel_auberge') ): ?>
                                    <?php while( have_rows('image_carroussel_auberge') ): the_row(); ?>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide-content">
                                                <?php $image = get_sub_field('image_dedans_caroussel_auberge'); ?>
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (get_field('footnote_auberge')) : ?>
                        <p data-scrolly="AppearFromBottom">
                            <?php the_field('footnote_auberge'); ?>
                        </p>    
                    <?php endif; ?>
                    
                </div>
            </section>

            <?php endwhile; ?>
<?php else : ?>
    <p>Oups! Il n’y a rien!</p>
<?php endif; ?>

<?php get_footer(); ?>
