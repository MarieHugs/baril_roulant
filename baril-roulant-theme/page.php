<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div style="background-image:url('<?php the_post_thumbnail_url(); ?>')" class="hero hero-page" data-scrolly="AppearFromBottom"></div>

            <div>
                <div class="wrapper">

                    <div class="intro-page" data-scrolly="AppearFromLeft">
                        <div class="wrapper">
                            <h1><?php the_title();?></h1>
                            <p><?php the_content();?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php else : ?>
    <p>Oups! Il n’y a rien!</p>
<?php endif; ?>

<?php get_footer(); ?>