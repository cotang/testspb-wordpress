    <div class="page__inner container">
      <div class="row">
        <div class="col-xs-12 col-lg-6">
          <!-- Clients section-->
          <section class="clients-section">
            <h2 class="clients-section__title">С нами работают</h2>
            <div class="clients-section__gallery">
              <?php
              global $post;
              $args = array( 
                'post_type' => 'logoshowcase',
                'numberposts'=> 10,
                // 'category_name' => 'partners',
                // 'category' => 36,
                'orderby' => 'menu_order',
                'order' => 'ASC');
              $posts = get_posts( $args );

              foreach($posts as $post){ setup_postdata($post); ?>
                <?php if( has_post_thumbnail() ) { ?>
                  <div class="clients-section__item">
                    <!-- <div class="clients__img"> -->
                      <?php the_post_thumbnail(); ?>
                    <!-- </div> -->
                  </div>
                <?php } ?>  

              <?php }
              wp_reset_postdata();
              ?>
            </div>
            <div class="clients-section__link">
              <a href="<?php echo home_url('/o-kompanii#clients') ?>">Показать всех партнеров</a>
            </div>
          </section>
        </div>
        <div class="col-xs-12 col-lg-6">
          <!-- Reviews section-->
          <section class="reviews-section">
            <h2 class="reviews-section__title">Отзывы</h2>
            <div class="reviews-section__gallery">
              <?php echo do_shortcode('[mcc-comments perpage=10 show_form=0 count_words=99999]'); ?>
            </div>
            <div class="reviews-section__link">
              <a href="<?php echo home_url('/otzyvy') ?>">Показать все отзывы</a>
            </div>
          </section>
        </div>
      </div>
    </div>