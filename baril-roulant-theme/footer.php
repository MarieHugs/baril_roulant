<section class="newsletter">
    <div class="wrapper">
        <div class="flex-newsletter">

            <?php echo do_shortcode('[gravityform id="2"] ')?>


            <img src="<?php bloginfo('template_url') ?>/assets/images/photo_infolettre.png" alt="poutine" />
        </div>
    </div>
</section>


<footer class="footer">


    <div­­ class="wrapper">
        <div class="social-flex">

            <?php if( have_rows('rep_sociaux', 'option') ): ?>

            <?php while( have_rows('rep_sociaux', 'option') ): the_row(); ?>


            <?php if (get_sub_field('type_sociaux' ,'option') === 'Instagram') : ?>
            <a class="icon-2" href="<?php the_sub_field('lien_footer', 'option') ;?>" data-scrolly="AppearFromRight">
                <?php $imagefooter = get_sub_field('icone_sociaux','option');?>


                <img src="<?php echo $imagefooter['url']; ?>" alt="<?php echo $imagefooter['alt']; ?>">


            </a>
            <?php elseif (get_sub_field('type_sociaux', 'option') === 'Facebook') : ?>
            <a class="icon-2" href="<?php the_sub_field('lien_footer', 'option') ;?>" data-scrolly="AppearFromLeft">


                <?php $imagefooter = get_sub_field('icone_sociaux', 'option');?>


                <img src="<?php echo $imagefooter['url']; ?>" alt="<?php echo $imagefooter['alt']; ?>">


            </a>

            <?php endif; ?>

            <?php endwhile; ?>


            <?php endif; ?>
        </div>


            <div class="title-n-address">


                <h2 class="title"><?php the_field('footer_titre', 'option') ?></h2>
                <p class="address"><?php the_field('adresse_footer', 'option') ?></p>

                <div class="button-footer">
                    <a href="mailto:auberge@barilroulant.com" class="button-item"
                    data-scrolly="AppearFromTop">Contactez-nous</a>
                </div>

                <a href="<?php the_field('termes_lien', 'option') ?>"
                class="lien-termsandcondititions"><?php the_field('terms_and_conditions', 'option') ?></a>
            </div>
            <?php if  (get_field('lien_mandat_footer', 'option')): ?>
                <a href="<?php the_field('lien_mandat_footer','option') ?>">
            <?php endif; ?>
                <?php if  (get_field('footer_credit', 'option')): ?>
                <p class="credit"><?php the_field('footer_credit','option') ?></p>
                <?php endif; ?>
            </a>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>