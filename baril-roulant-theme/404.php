<?php get_header(); ?>

    <div class="page__erreur">
        <div class="wrapper">
            <?php if ( have_rows('page_404', 'option') ): ?>
                <?php while( have_rows('page_404', 'option') ): the_row(); ?>
                
                    <div class="mobile_404" data-scrolly="AppearFromTop">
                        <svg class="icon">
                            <use xlink:href="#icon-emoji"></use>
                        </svg>
                        <?php if (get_sub_field('titre_404')) : ?>
                            <h1><?php the_sub_field('titre_404'); ?></h1>
                        <?php endif; ?>   
                    </div>
                    
                    <div class="brasserie_404" data-scrolly="Appear">
                        <svg class="icon icon--stroke beer">
                            <use xlink:href="#icon-beer"></use>
                        </svg>
                        <?php if (get_sub_field('descitpion_404')) : ?>
                            <h5 class="evidence">
                                <?php the_sub_field('descitpion_404'); ?>
                            </h5>
                        <?php endif; ?>  
                    </div>
                    <?php if (get_sub_field('disponible_404')) : ?>
                        <p data-scrolly="AppearFromBottom">
                            <?php the_sub_field('disponible_404'); ?>
                        </p>
                    <?php endif; ?> 

                <?php endwhile; ?>
            <?php endif; ?>        
        </div>
    </div>


<?php get_footer(); ?>