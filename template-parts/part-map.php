    <section class="map">
      <div class="map__text">
        <div class="container">
          <div class="map__block">
            <div class="map-contacts" itemscope itemtype="http://schema.org/ContactPoint">
              <h2 class="map-contacts__title">Контакты</h2>
              <div class="map-contacts__info">
                <?php 
                $mcc_contacts = mcc_get_contacts(); 
                $coords = explode(',', $mcc_contacts[0]['coords']);
                ?>
                <div class="map-contacts__address"><?php echo $mcc_contacts[0]['address'] ?></div>
                <div class="map-contacts__time">9:30- 18:00 пн-пт</div>
                <div class="map-contacts__tel-wrapper">
                  <a href="tel:<?php echo $mcc_contacts[0]['tel'][0] ?>" target="_blank" itemprop="telephone"><?php echo $mcc_contacts[0]['tel'][0] ?></a>
                </div>
                <div class="map-contacts__email-wrapper">
                  <a href="mailto:<?php echo $mcc_contacts[0]['email'] ?>" target="_blank" itemprop="email"><?php echo $mcc_contacts[0]['email'] ?></a>
                </div>
                <div class="map-contacts__btn">
                  <a class="btn" href="#" data-form="call">Обратный звонок</a>
                </div>
                <a class="map-contacts__more" href="<?php echo home_url('/contacts') ?>">+ еще другие офисы в России</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="map__inner" data-lat="<?php echo $coords[0]; ?>" data-lng="<?php echo $coords[1]; ?>"></div>
    </section>