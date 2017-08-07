<?php
/**
 * Template Name: Page about
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--about">
    <!-- Breadcrumbs-->
    <section class="breadcrumbs">
      <div class="container">
        <div class="breadcrumbs__inner">
          <?php if(function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
    </section>
    <?php while ( have_posts() ) : the_post(); ?>
      <!-- About -->
      <section class="about" itemscope itemtype="http://schema.org/Article">
        <div class="container">
          <h1 class="about__title" itemprop="headline"><?php the_title(); ?></h1>
          <div class="about__text" itemprop="articleBody">
            <?php the_content(); ?>
          </div>
          <div class="about__images row">
            <div class="col-xs-12 col-lg-6">
              <img src="<?php bloginfo('template_directory'); ?>/img/about1.jpg" alt="about-company" title="about-company">
            </div>
            <div class="col-xs-12 col-lg-6">
              <img src="<?php bloginfo('template_directory'); ?>/img/about2.jpg" alt="about-company" title="about-company">
            </div>
          </div>
          <div class="ready-to-help">
            <h2 class="ready-to-help__title">Мы всегда готовы прийти вам на помощь</h2>
            <div class="ready-to-help__blocks">
              <div class="ready-to-help__item">Оперативные сроки оформления документов – от 1 рабочего дня!</div>
              <div class="ready-to-help__item">Аккредитация во всех областях сертификации товаров и услуг! </div>
              <div class="ready-to-help__item">Грамотные специалисты – залог успешной и качественной работы</div>
              <div class="ready-to-help__item">Выгодные предложения для любых клиентов</div>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
    <!-- Team-->
    <section class="team">
      <div class="container">
        <h2 class="team__title">С вами будут работать наши сотрудники</h2>
        <div class="row">
          <?php
          $args = array( 
            'post_type' => 'manager',
            'posts_per_page' => -1,
            'orderby'   => 'date',
            'order'     => 'ASC'
          );
          $the_query = new WP_Query( $args );
          while ( $the_query->have_posts() ) {
            $the_query->the_post(); 
          ?>
            <div class="team__manager col-xs-12 col-lg-3">
              <div class="manager" itemscope itemtype="http://schema.org/Person">
                <div class="manager__name-wrapper">
                  <div class="manager__img">
                    <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                    <!-- <img src="img/manager-avatar.jpg" alt="manager" title="manager"> -->
                  </div>
                  <div class="manager__person">
                    <div class="manager__name" itemprop="name"><?php the_title(); ?></div>
                    <?php                   
                    $position = get_post_meta($post->ID, 'manager_position', true); ?>
                    <div class="manager__position" itemprop="jobTitle">
                      <?php if($position) { 
                        echo $position;
                      } else {
                        echo 'менеджер';
                      } ?>
                    </div>
                  </div>
                </div>
                <div class="manager__info">
                  <?php                   
                  $icq = get_post_meta($post->ID, 'manager_icq', true); 
                  $skype = get_post_meta($post->ID, 'manager_skype', true);

                  if($skype) { ?> 
                    <a class="manager__link manager__link--skype" href="skype:<?php echo $skype; ?>"><?php the_title(); ?></a>
                  <?php } else { ?>
                    <a class="manager__link manager__link--email" href="mailto:info@testspb.ru">info@testspb.ru</a>
                  <?php }
                  if($icq) { ?> 
                    <span class="manager__link manager__link--icq"><?php echo $icq; ?></span>
                  <?php } else { ?> 
                    <span class="manager__link manager__link--hidden"></span>
                  <?php } ?>
                </div>
                <?php if($skype) { ?> 
                  <div class="manager__btn">
                    <a class="btn" href="#" data-form="question">Задать вопрос</a>
                  </div>
                <?php } else { ?>
                  <div class="manager__btn" style="visibility:hidden">
                    <a class="btn" href="#" data-form="question">Задать вопрос</a>
                  </div>
                <?php } ?>
              </div>
            </div>
          <?php }
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>
    <!-- Reviews-->
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">Отзывы</h2>
          <div class="reviews__items">
            <?php echo do_shortcode('[mcc-comments perpage=100 show_form=0 count_words=99999]'); ?>
          </div>
        <a class="reviews__link" href="<?php echo home_url('/otzyvy') ?>">Все отзывы</a>
      </div>
    </section>
    <!-- Clients-->
    <section class="clients" id="clients">
      <div class="container">
        <div class="clients__inner">
          <h2 class="clients__title">С нами работают</h2>
          <div class="clients__row">
            <?php
            global $post;
            $args = array( 
              'post_type' => 'logoshowcase',
              'numberposts'=> -1,
              // 'category_name' => 'partners',
              // 'category' => 36,
              'orderby' => 'menu_order',
              'order' => 'ASC');
            $posts = get_posts( $args );

            foreach($posts as $post){ setup_postdata($post); ?>
              <?php if( has_post_thumbnail() ) { ?>
                <div class="clients__item">
                  <div class="clients__img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
              <?php } ?>  

            <?php }
            wp_reset_postdata();
            ?>
          </div>
          <a class="clients__link" href="#">Показать всех партнеров</a>
        </div>
      </div>
    </section>

    <!-- Form question-->
    <?php get_template_part( 'template-parts/part-form-question' ); ?>
    <!-- News section-->
    <?php get_template_part( 'template-parts/part-news' ); ?>
    <!-- Map-->
    <?php get_template_part( 'template-parts/part-map' ); ?>
  </section>
</main>

<?php
get_footer();
