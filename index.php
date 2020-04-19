<div class="container">

  <p>content</p>
  <?php if(!have_posts()) : ?>


  <?php else : ?>

    <div class="row">
      <?php while(have_posts()) : the_post(); ?>
        <div class="col-lg-4">
          
        </div>
      <?php endwhile; ?>
    </div>

  <?php endif; ?>


</div>
