<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--front-page">
    <!-- Form cert index-->
    <section class="form-cert form-cert--index">
      <div class="container">
        <h1 class="form-cert__title">Комплексное решение таможенных и сертификационных вопросов</h1>
        <div class="form-cert__text">Заполните форму заявки - мы ответим в течение часа!</div>
        <!-- MCC form cert-->
        <?php echo do_shortcode('[mcc-form-order]');?>
      </div>
    </section>
    <!-- Services-->
    <section class="services">
      <div class="container">
        <h2 class="services__title">Услуги</h2>
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
    <!-- Glossary-->
    <section class="glossary">
      <div class="container">
        <h2 class="glossary__title">Продукция по алфавиту</h2>
        <div class="glossary__letters">
          <?php if (function_exists('m_snap')) { 
            m_snap(array('cat_id'=>1)); 
          }?>
        </div>
        <ul class="glossary__list">

          <?php
          $args = array( 
            'cat' => 1,
            'posts_per_page' => 12,
            'orderby'   => 'title',
            'order'     => 'ASC'
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
    </section>
    <!-- Form question-->
    <?php get_template_part( 'template-parts/part-form-question' ); ?>
    <!-- About index-->
    <section class="about-index">
      <div class="container">
        <h2 class="about-index__title">О компании</h2>
        <div class="about-index__text">
          <p>"Тест Петербург Сертификация" - центр сертификации, уже более 10 лет работает на рынке сертификации продукции и услуг. Наши специалисты сопровождают на всех этапах работ - от сбора документации и до
            выдачи сертификата. </p>
          <p>Мы не оставляем своих клиентов! После получения необходимого документа, вы в любой момент можете обратиться за бесплатной консультацией!</p>
        </div>
        <div class="about-index__download">
          <?php $upload_dir = wp_upload_dir(); ?>
          <a href="<?php echo $upload_dir['baseurl']; ?>/selection.pdf">Скачать презентацию</a>
        </div>
      </div>
    </section>
    <!-- News + faq-->
    <?php get_template_part( 'template-parts/part-news-faq' ); ?>
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
