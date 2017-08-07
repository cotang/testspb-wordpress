<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--default">
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
      <section class="content" itemscope itemtype="http://schema.org/Article">
        <div class="container">
          <h1 class="content__title" itemprop="headline"><?php the_title(); ?></h1>
          <?php if( has_post_thumbnail() ) { ?>
            <div class="content__img">
              <?php echo the_post_thumbnail(); ?>
              <div class="content__btn">
                <a class="btn btn--blue" href="#" data-form="call">Получить бесплатную консультацию специалиста</a>
              </div>
            </div>
          <?php } ?>
          <div class="content__text" itemprop="articleBody">
            <?php the_content(); ?>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
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
?>

