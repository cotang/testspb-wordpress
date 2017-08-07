    <section class="news-section">
      <div class="container">
        <h2 class="news-section__title">Новости</h2>
        <div class="row">
          <?php
          $args = array( 
            'cat' => 23,
            'posts_per_page' => 2,
            'orderby'   => 'date',
            'order'     => 'DESC'
          );
          $the_query = new WP_Query( $args );
          while ( $the_query->have_posts() ) {
            $the_query->the_post(); 
          ?>
            <div class="col-xs-12 col-lg-6">
              <div class="news-item">
                <div class="news-item__wrapper">
                  <h3 class="news-item__title"><?php the_title(); ?></h3>
                  <div class="news-item__text">
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="news-item__date">Опубликовано <?php the_time('d.m.Y'); ?></div>
                </div>
                <a class="news-item__link" href="<?php the_permalink(); ?>">Читать полностью</a>
              </div>
            </div>
          <?php }
          wp_reset_postdata();
          ?>
        </div>
        <div class="news-section__btn">
          <a class="btn btn--blue" href="<?php echo home_url('/news') ?>">Читать все новости</a>
        </div>
      </div>
    </section>

