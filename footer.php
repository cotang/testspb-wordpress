<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package testspb2017
 */

?>

<!-- Footer-->
<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="footer__nav">
        <!-- Nav-->
        <nav class="nav-footer">
          <?php wp_nav_menu(array(
              'container' => false,
              'theme_location'  => 'footer-menu',
              'menu_class' => 'nav-footer__list',
              'menu_id' => 'nav-footer__list'
          )); ?>
        </nav>
      </div>
      <div class="footer__widget">
        <h3 class="footer__title">Мы в Instagram</h3>
        <?php echo do_shortcode('[enjoyinstagram_mb_grid]'); ?>          
      </div>
      <div class="footer__widget">
        <div class="fb-page" data-href="https://www.facebook.com/%D0%A2%D0%B5%D1%81%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3-%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F-236131690124648/" data-show-posts="false" data-show-facepile="true" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/%D0%A2%D0%B5%D1%81%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3-%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F-236131690124648/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/%D0%A2%D0%B5%D1%81%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3-%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F-236131690124648/">Тест Петербург Сертификация</a></blockquote></div>          
      </div>
      <div class="footer__info">
        <div class="footer__copyright">
          <p>© 2016</p>
          <p>Тест Петербург Сертификация</p>
          <p>Мы работаем с 9:30 до 18:00 <br>
            по местному времени</p>
        </div>
        <div class="footer-contacts" itemscope itemtype="http://schema.org/ContactPoint">
          <?php $mcc_contacts = mcc_get_contacts(); ?>
          <div class="footer-contacts__tel-wrapper">
            <a class="footer-contacts__tel" href="tel:<?php echo $mcc_contacts[0]['telfax'][0] ?>" target="_blank" itemprop="telephone"><?php echo $mcc_contacts[0]['telfax'][0] ?></a>
            <a class="footer-contacts__tel" href="tel:<?php echo $mcc_contacts[0]['tel'][0] ?>" target="_blank" itemprop="telephone"><?php echo $mcc_contacts[0]['tel'][0] ?></a>
          </div>
          <div class="footer-contacts__email-wrapper">
            <a class="footer-contacts__email" href="mailto:<?php echo $mcc_contacts[0]['email'] ?>" target="_blank" itemprop="email"><?php echo $mcc_contacts[0]['email'] ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Overlay-->
<div class="overlay">
  <div class="overlay__bg"></div>
  <div class="overlay__form">
    <a class="overlay__close" href="/"></a>
    <!-- Form application-->
    <section class="form form--application">
      <h2 class="form__title">Рассчитать стоимость</h2>
      <!-- MCC form cert-->
      <?php echo do_shortcode('[mcc-form-order]'); ?>
    </section>
    <!-- Form question-->
    <section class="form form--question">
      <h2 class="form__title">Задать вопрос</h2>
      <!-- MCC form question-->
      <?php  echo do_shortcode('[mcc-questions-onlyform]'); ?>
    </section>
    <!-- Form call-->
    <section class="form form--call">
      <h2 class="form__title">Заказать звонок</h2>
      <!-- MCC form call-->
      <?php echo do_shortcode('[mcc-form-call]'); ?>
    </section>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>



