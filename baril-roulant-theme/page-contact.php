<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div style="background-image:url('<?php the_post_thumbnail_url(); ?>')" class="hero hero-contact"></div>

<div data-component="Scrolly" data-intersections="4">
    <div class="contact">
        <h1> <?php the_title(); ?></h1>
        <?php the_content(); ?>

    </div>
</div>
<?php endwhile; ?>
<?php else : ?>
<p>Oups! Il n’y a rien!</p>
<?php endif; ?>
<?php get_footer(); ?>