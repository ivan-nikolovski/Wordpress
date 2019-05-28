
<?php
  $query = new WP_Query(array('category_name' => 'slider'));
?>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">


  <?php if( $query->have_posts()) : ?>
        <?php while( $query->have_posts()) : $query->the_post(); ?>
            <div class="carousel-item <?php echo $index == 0 ? 'active' : '' ?>">
              <?php if( has_post_thumbnail() ) {the_post_thumbnail() ;} ?>     
            </div>
          <?php $index++ ?>
        <?php endwhile; ?>
      <?php endif; ?>


  </div>


  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>