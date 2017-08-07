    <div class="page__inner container">
      <div class="row">
        <div class="col-xs-12 col-lg-6">
          <!-- News section-->
          <section class="news-section">
            <h2 class="news-section__title">Новости</h2>

            <?php
            $args = array( 
              'cat' => 23,
              'posts_per_page' => 1,
              'orderby'   => 'date',
              'order'     => 'DESC'
            );
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ) {
              $the_query->the_post(); 
            ?>
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
            <?php }
            wp_reset_postdata();
            ?>
            <a class="btn btn--blue" href="<?php echo home_url('/news') ?>">Читать все новости</a>
          </section>
        </div>
        <div class="col-xs-12 col-lg-6">
          <!-- Faq section-->
          <section class="faq-section">
            <h2 class="faq-section__title">Часто задаваемые вопросы</h2>

            <?php
            $args = array( 
              'cat' => 34,
              'posts_per_page' => 1,
              'orderby'   => 'date',
              'order'     => 'ASC'
            );
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ) {
              $the_query->the_post(); 
            ?>

              <div class="faq-item">
                <div class="faq-item__wrapper">
                  <h3 class="faq-item__title"><?php the_title(); ?></h3>
                  <div class="faq-item__text">
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="faq-item__expert">Эксперт по сертификации</div>
                </div>
                <a class="faq-item__link" href="<?php the_permalink(); ?>">Читать полностью</a>
              </div>

            <?php }
            wp_reset_postdata();
            ?>

            <a class="btn btn--blue" href="<?php echo home_url('/chasto-zadavaemyie-voprosyi') ?>">Читать все вопросы</a>
          </section>
        </div>
      </div>
    </div>