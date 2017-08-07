<?php
/**
 * The template for displaying category "faq"
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--faq">
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
    <!-- Faq section-->
    <section class="faq">
      <div class="container">
        <?php
          $args = array(
            'cat'                 => $cat,
            'order'               => 'ASC',
            'posts_per_page'      => -1,
              // 'paged'               => $paged
          );
        query_posts( $args );
        while ( have_posts() ) : the_post(); ?>
          <div class="faq-item">
            <div class="faq-item__wrapper">
              <h3 class="faq-item__title"><?php the_title(); ?></h3>
              <div class="faq-item__text">
                <?php the_content(); ?>
              </div>
              <div class="faq-item__expert">Эксперт по сертификации</div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php
        wp_reset_query(); 
        ?> 
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
