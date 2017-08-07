<?php
/**
 * Template Name: Page reviews
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--reviews">
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
    <!-- Reviews-->
    <section class="reviews">
      <div class="container">
        <div class="reviews__content">
          <?php/* <h2 class="reviews__title reviews__title--grey">Отзывы</h2> */?>
          <h2 class="reviews__title">Оставьте свой отзыв</h2>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
          <div class="reviews__pics">
            <?php
            global $post;
            $args = array( 
              'post_parent' => $post->ID,
              'post_type' => 'attachment',
              'posts_per_page' => -1,
              'orderby' => 'menu_order',
              'order' => 'ASC');
            $attachments = get_children( $args );
            foreach( $attachments as $post ){ setup_postdata($post);
            ?>
              <div class="reviews__pic">
                <a class="reviews__img" href="javascript:void(0);">
                  <?php echo wp_get_attachment_image($post->ID, 'medium', true); ?>
                </a>
                <div class="reviews__modal">
                  <?php echo wp_get_attachment_image($post->ID, 'full', true); ?>
                </div>
              </div>
            <?php }
            wp_reset_postdata();
            ?>
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
