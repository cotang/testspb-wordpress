<?php
/**
 * The template for displaying single posts of "sertifikaciia" category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--single">
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

          <?php                   
          $my_field3 = get_post_meta($post->ID, 'my_field_required-docs', true);
          if($my_field3) { ?>
            <div class="content__required-docs">
              <div class="content-docs">
                <h3 class="content-docs__title">Необходимые документы</h3>
                <?php echo $my_field3; ?>
                <div class="content-docs__btn">
                  <a class="btn" href="#" data-form="application">Заказать</a>
                </div>
              </div>
            </div>
          <?php } ?>

          <div class="content__text" itemprop="articleBody">
            <?php the_content(); ?>
          </div>
        </div>
      </section>
      <!-- Content-additional-->
      <section class="content-additional">
        <?php                   
        $my_field1 = get_post_meta($post->ID, 'my_field_complications', true);
        $my_field2 = get_post_meta($post->ID, 'my_field_our-help', true);       
        ?>
        <div class="container">
          <div class="row">
            <?php if($my_field1) { ?> 
              <div class="content-additional__complications col-xs-12 col-lg-6">
                <h3 class="content-additional__title">В чем сложность</h3>
                <div class="content-additional__text">
                  <?php echo $my_field1; ?>
                </div>
              </div>
            <?php } 
            if($my_field2) { ?> 
              <div class="content-additional__our-help col-xs-12 col-lg-6">
                <h3 class="content-additional__title">Чем мы можем помочь</h3>
                <div class="content-additional__text">
                  <?php echo $my_field2; ?>
                </div>
              </div>
            <?php } ?>
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
