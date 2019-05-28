
<h2>Latest Books</h2>
<?php 
    $args = array(
        'post_type' => 'sedc_book',
        'posts_per_page' => 3
    );

    $query = new WP_Query( $args );
?>

<?php if( $query->have_posts() ) : ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>

    <a href=" <?php the_permalink(); ?> ">
        <h3> <?php the_title(); ?> </h3>
    </a>
    <?php endwhile; ?>
<?php endif; ?>