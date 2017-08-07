<?php
/**
 * The template for displaying category "news"
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--news">
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
    <!-- News-->
    <section class="news">
      <div class="container">
        <div class="row">
          <?php
            $args = array(
              'cat'                 => $cat,
              'posts_per_page'      => 6,
              'paged' => get_query_var('paged'), 
                // 'paged'               => $paged
            );
          query_posts( $args );
          while ( have_posts() ) : the_post(); ?>
            <div class="news-item">
              <div class="news-item__wrapper">
                <h3 class="news-item__title"><?php the_title(); ?></h3>
                <div class="news-item__text">
                  <?php the_content(); ?>
                </div>
                <div class="news-item__more">
                  <a class="news-item__link" href="<?php the_permalink(); ?>">Читать полностью</a>
                  <div class="news-item__date">Опубликовано <?php the_time('d.m.Y'); ?></div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <div class="page-pagination">
            <?php 
              the_posts_pagination( array(
                'prev_text'    => __('←'),
                'next_text'    => __('→'),
                'end_size'     => 0,
                'mid_size' => 2
              ) ); 
            ?>
          </div>
          <?php
          wp_reset_query(); 
          ?>          
        </div>
      </div>
    </section>
    <!-- Form question-->
    <?php get_template_part( 'template-parts/part-form-question' ); ?>
    <!-- News section-->
    <?php get_template_part( 'template-parts/part-news' ); ?>
    <!-- Form cert-->
    <?php get_template_part( 'template-parts/part-form-cert' ); ?>
    <!-- Clients + reviews-->
    <?php get_template_part( 'template-parts/part-clients-reviews' ); ?>
    <!-- Map-->
    <?php get_template_part( 'template-parts/part-map' ); ?>
  </section>
</main>

<?php
get_footer();
