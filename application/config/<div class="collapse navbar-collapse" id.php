<div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0"> 
              <?php foreach ($header_data['pricings'] as $pricing) : ?> <li
                    class="nav-item"> <a class="nav-link Cakeheader-size" data-bs-toggle="collapse"
                        href="#pricing<?= $pricing->id ?>"> <?= $pricing->menu_name ?> </a>
                    <div class="collapse" id="pricing<?= $pricing->id ?>">
                        <ul class="nav flex-column"> <?php foreach ($header_data['pricing_featuress'] as $pricing_features) : ?>
                            <?php if ($pricing_features->menu_id == $pricing->id) : ?> <li class="nav-item"> <a
                                    class="nav-link Cakeheader-size"> <?= $pricing_features->features ?> </a> </li>
                            <?php endif; ?> <?php endforeach; ?> </ul>
                    </div>
                </li> <?php endforeach; ?> </ul>
        </div>


      <div class="row pricing_row_two">
      <?php foreach ($header_data['pricings'] as $pricing) : ?>

        <div class="col-md-4">
          <div class="pricing">
            <div class="plans">
              <div class="plan">
                <div class="frame-group">
                  <div class="mt4-limited-parent">
                    <div class="mt4-limited" href="#pricing<?= $pricing->id ?>"><?=$pricing->name?></div>
                    <div class="pricing_para"><?=$pricing->description?>
                    </div>
                  </div>
                  <div class="frame-container">
                    <div class="parent">
                      <div class="get-started-price">$<?=$pricing->price?></div>
                      <div class="month">Minimum Deposit</div>
                    </div>

                    <a href="request-demo.php" class="get-started">
                      <div class="button btton">
                        Get started
                        <img class="arrow-icon" alt="" src="<?=base_url()?>public/web/images/arrow.svg">
                      </div>
                    </a>
                  </div>
                </div>
                <div class="frame-parent1"id="pricing<?= $pricing->id ?>">
                <?php foreach ($header_data['pricing_featuress'] as $pricing_features) : ?>
                            <?php if ($pricing_features->pricing_id == $pricing->id) : ?> 
                                <?php if ($pricing_features->features_available == 'Yes'):?>
                            
                  <div class="tick-parent">
                    

                    <div class="one-time-setup-container">
                    <span><?= $pricing_features->features_available ?></span> 
                      <span><?= $pricing_features->features ?></span>
                      
                    </div>
                  </div>
                  <?php endif;?>
                  <?php endif; ?> <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach;?>