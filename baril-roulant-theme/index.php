<?php get_header(); ?>

<section>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div style="background-image:url('<?php the_post_thumbnail_url(); ?>')" class="hero hero-page"></div>

            <div class="wrapper" data-scrolly="AppearFromBottom">
                <h1><?php the_title(); ?></h1>
                <?php the_content() ?>
            </div>


        <?php endwhile; ?>
    <?php else : ?>
        <p>Oups! Il n’y a rien!</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>