
<?php get_header(); ?>

<section>

    <?php get_template_part('template-parts/slider/slider', 'slider'); ?>


                                                                  <?php
                                                                        /////////////// 
                                                                                //THE LOOP ///
                                                                                          //////////////
                                                                                                           ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts() ) : the_post(); ?>

            <a href=" <?php the_permalink(); ?> ">
                <h2> <?php the_title(); ?> </h2>
            </a>

            <div>
                <?php
                    if(has_post_thumbnail() ) {
                        the_post_thumbnail('thumbnail');
                    }
                ?>
            </div>

                <?php the_excerpt(); ?>
                <?php the_author(); ?>
                <?php the_date(); ?>
                <?php the_category(); ?>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php get_template_part('template-parts/book/book', 'latest'); ?>

    <?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
<?php wp_footer(); ?>