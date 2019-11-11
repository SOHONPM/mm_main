<section class="testimonial_video-section">
  <div class="container">
    <div class="content">
      <h2 class="title">
        <?php echo get_sub_field('title') ?>
      </h2>
      <p class="subtitle">
        <?php echo get_sub_field('subtitle') ?>
      </p>
      <div class="testimonials">
        <?php
        if (have_rows('testimonials')) :

          // loop through the rows of data
          while (have_rows('testimonials')) : the_row();
            ?>
            <div class="row testament">
              <div class="col-md-3 profile-pic">
                <img src="  <?php echo get_sub_field('profile') ?>" class="profile_pic" />
              </div>
              <div class="col-md-9">
                <p class="name"><?php echo get_sub_field('name') ?></p>
                <p class="content text-left">
                  <?php echo get_sub_field('content') ?>
                </p>
                <div class="video-container">
                  <?php echo get_sub_field('video') ?>
                </div>
              </div>
            </div>
        <?php
          endwhile;

        else :

        // no layouts found

        endif;
        ?>
        <div class="row">
          <div class="col text-center">
            <a class="iwant" href='<?php echo get_sub_field('button')['url'] ?>'>
              <?php echo get_sub_field('button')['label'] ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>