<?php get_header(); ?>

<article>
    
        <?php if(have_posts() ) : ?>

            <?php while(have_posts() ) : the_post(); ?>


                <h3> <?php the_title(); ?> </h3>

                <div>
                    <?php if( has_post_thumbnail() ) {
                        the_post_thumbnail('large');
                    }?>
                </div>

                <p>
                    <?php the_content(); ?>
                </p>

                <div>
                    <?php the_author(); ?>
                </div>

                <small>
                        <?php the_date(); ?>
                </small>

                <div>
                    <?php the_category(); ?>
                </div>


            <?php endwhile; ?>

        <?php endif; ?>


</article>

<?php
    get_footer();
?>