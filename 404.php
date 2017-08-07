<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--404">
    <!-- Not found-->
    <section class="not-found">
      <div class="container">
        <div class="not-found__img">
          <img src="img/404.png" alt="page-404" title="page-404">
        </div>
        <h1 class="not-found__title">Запрашиваемая вами страница не найдена</h1>
        <div class="not-found__text">Попробуйте найти необходмую вам услугу через каталог услуг или свяжитесь с нашими специалистами по телефону
          <a href="tel:+78124413792" target="_blank">+7 (812) 441-37-92</a>
          <a href="tel:+78129216001" target="_blank">+7 (812) 921-60-01</a>
        </div>
        <div class="not-found__btn">
          <a class="btn" href="<?php echo home_url('/uslugi') ?>">Перейти в услуги</a>
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
