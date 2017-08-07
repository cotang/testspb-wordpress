<?php
/**
 * The template for displaying single news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--single-news">
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
      <!-- Content-->
      <section class="content-news" itemscope itemtype="http://schema.org/Article">
        <div class="container">
          <h1 class="content-news__title" itemprop="headline"><?php the_title(); ?></h1>
          <div class="content-news__date" itemprop="datePublished">Опубликовано <?php the_time('d.m.Y'); ?></div>
          <div class="content-news__text" itemprop="articleBody">
            <?php the_content(); ?>
          </div>
        </div>
      </section>
    <?php endwhile; ?>

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
