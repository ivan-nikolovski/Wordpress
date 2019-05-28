<h1>  <?php the_title(); ?>  </h1>

<?php get_header(); ?>
<?php wp_head(); ?>

    <?php if(have_posts()) : ?>
        <?php while(have_posts() ) : the_post(); ?>


            <?php 
                if(has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail');
                } 
            ?>


            <div class="content">
                <?php the_content(); ?>               
            </div>   


            
            
            Author: <?php echo get_post_meta(get_the_ID(), 'Author', true); ?>
            <br />
            Genre: <?php echo get_post_meta(get_the_ID(), 'Genre', true); ?>
            <br />
            Rating: <?php echo get_post_meta(get_the_ID(), 'Rating', true); ?>
            <br />
            Released: <?php echo get_post_meta(get_the_ID(), 'Released', true); ?>
            <br />
            <a href="<?php echo get_post_meta(get_the_ID(), 'link', true); ?> " target="blank">More info</a>




        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>