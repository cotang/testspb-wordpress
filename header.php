<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package testspb2017
 */


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCbFBllrMkXPOoe1YbN3aXTYV0cesewVhc"></script>
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" type="image/png">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php/* script for the facebook widget */?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!-- Header-->
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__logo">
          <!-- Logo-->
          <a class="logo" href="<?php echo home_url() ?>" itemscope="itemscope" itemtype="http://schema.org/Brand">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="Логотип Тест Петербург" title="Тест Петербург Сертификация" itemprop="logo">
          </a>
        </div>
        <div class="header__nav">
          <!-- Nav-->
          <nav class="nav">
            <?php wp_nav_menu(array(
                'container' => false,
                'theme_location'  => 'main-menu',
                'menu_class' => 'nav__list',
                'menu_id' => 'nav__list'
            )); ?>
            <div class="nav__hamburger">
              <a class="hamburger" href="javascript:void(0);">
                <span></span>
              </a>
            </div>
          </nav>
        </div>
        <div class="header__btn">
          <a class="btn" href="javascript:void(0);" data-form="application">Узнать стоимость</a>
        </div>
        <div class="header__contacts">
          <div class="header-contacts" itemscope itemtype="http://schema.org/ContactPoint">
            <div class="header-contacts__tel-wrapper">
              <a class="header-contacts__tel" href="tel:+78124413792" target="_blank" itemprop="telephone">+7 (812) 441-37-92</a>
              <a class="header-contacts__tel" href="tel:+78129216001" target="_blank" itemprop="telephone">+7 (812) 921-60-01</a>
            </div>
            <div class="header-contacts__email-wrapper">
              <a class="header-contacts__email" href="mailto:info@testspb.ru" target="_blank" itemprop="email">info@testspb.ru</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>



