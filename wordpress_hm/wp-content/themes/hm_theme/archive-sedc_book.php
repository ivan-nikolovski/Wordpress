<h1>Archive</h1>

<?php get_header(); ?>

    <?php if(have_posts()) : ?>
        <?php while(have_posts() ) : the_post(); ?>
            <a href=" <?php the_permalink(); ?> ">
                <h2> <?php the_title(); ?> </h2>
            </a>
            <p>
                <?php the_excerpt(); ?>
            </p>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>