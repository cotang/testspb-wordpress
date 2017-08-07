<?php
/**
 * Template Name: Page contacts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package testspb2017
 */

get_header(); ?>

<main>
  <section class="page page--contacts">
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
    <!-- Contacts-->
    <section class="contacts">
      <div class="contacts__offices">
        <div class="container">
          <div class="row">
            <?php 
              $mcc_contacts = mcc_get_contacts();              
              foreach( $mcc_contacts as $k => $v ){  ?>
                <div class="contacts__office col-xs-12 col-lg-4">
                  <div class="office" itemscope itemtype="http://schema.org/ContactPoint">
                    <h3 class="office__title"><?php echo $v['city'] ?></h3>
                    <div class="office__info">
                      <?php  if( $v['virtual'] ) {  ?>
                        <div class="office__warning">Если Вы планируете визит в наш офис, пожалуйста, предварительно свяжитесь с нашими специалистами: <?php echo $v['tel'][0] ?></div>
                      <?php } ?>
                      <div class="office__address">
                      <?php  if( !empty( $v['metro'][0] )) {  ?>
                        <p>Станция метро: "<?php echo $v['metro'][0] ?>"</p> 
                      <?php } ?>
                        <p><?php echo $v['address'] ?></p>
                      </div>
                      <div class="office__email-wrapper">
                        <a href="mailto:<?php echo $v['email'] ?>" target="_blank" itemprop="email">E-mail: <?php echo $v['email'] ?></a>
                      </div>
                      <div class="office__tel-wrapper">
                        <?php  if( !empty( $v['telfax'][0] )) {  ?>
                          <a href="tel:<?php echo $v['telfax'][0] ?>" target="_blank" itemprop="telephone">Тел/факс: <?php echo $v['telfax'][0] ?></a>
                        <?php } ?>
                        <a href="tel:<?php echo $v['tel'][0] ?>" target="_blank" itemprop="telephone">Телефон: <?php echo $v['tel'][0] ?></a>
                      </div>
                      <div class="office__time">с 9:30 до 18:00 по местному времени</div>
                      <div class="office__map">
                        <?php $coords = explode( ',', $_contact[ 'coords' ] ); ?>
                        <a href="#" data-lat="<?php echo $coords[ 0 ]; ?>" data-lng="<?php echo $coords[ 1 ]; ?>">на карте</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
          </div>
        </div>
      </div>
      <?php $coords = explode(',', $mcc_contacts[0]['coords']);
      /* print_r($mcc_contacts); */?>
      <div class="contacts__map" data-lat="<?php echo $coords[0]; ?>" data-lng="<?php echo $coords[1]; ?>"></div>
      <!-- [mcc-form-contacts-hcard] -->
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
