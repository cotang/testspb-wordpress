<?php
/**
 * Template Name: Page services
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--services">
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
        <h1 class="services__title">Услуги</h1>
        <div class="services__switcher">
          <a class="services__link services__link--production services__link--active" href="#services-production">по продукции</a>
          <a class="services__link services__link--docs" href="#services-docs">по документам</a>
        </div>
        <div class="services__content">
          <div class="services-type services-type--production" id="services-production">
            <?php wp_nav_menu(array(
                'container' => false,
                'theme_location'  => 'services-menu-production',
                'menu_class' => 'services-type__list',
                'menu_id' => 'services-type__list'
            )); ?>
          </div>
          <div class="services-type services-type--docs" id="services-docs">
            <?php wp_nav_menu(array(
                'container' => false,
                'theme_location'  => 'services-menu-docs',
                'menu_class' => 'services-type__list',
                'menu_id' => 'services-type__list'
            )); ?>
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
