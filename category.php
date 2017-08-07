<?php
/**
 * The template for any category
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--category">
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
    <!-- Services-->
    <section class="services">
      <div class="container">
        <h1 class="services__title"><?php single_cat_title(); ?></h1>
        <div class="services__content">
          <div class="services-type">
            <ul class="services-type__list">
              <?php
              $args = array( 
                'cat' => $cat,
                'posts_per_page' => -1,
                // 'orderby'   => 'title',
                // 'order'     => 'ASC'
              );
              $the_query = new WP_Query( $args );
              while ( $the_query->have_posts() ) {
                $the_query->the_post(); 
              ?>
                <li class="menu-item">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
              <?php }
              wp_reset_postdata();
              ?>
            </ul>
          </div>
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


