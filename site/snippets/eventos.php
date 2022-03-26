<section id="eventos">
  <div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge"><?= $data->stat1() ?></span><br>
      <?= $data->statTitle1() ?>
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge"><?= $data->stat2() ?></span><br>
      <?= $data->statTitle2() ?>
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge"><?= $data->stat3() ?></span><br>
      <?= $data->statTitle3() ?>
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge"><?= $data->stat4() ?></span><br>
      <?= $data->statTitle4() ?>
    </div>
  </div>
  <div class="bgimg-2 w3-display-container w3-opacity-min" style="background-image: url(<?= $data->image()->url() ?>);">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide"><?= $data->title() ?></span>
    </div>
  </div>
  <div class="w3-content w3-container w3-padding-64" id="portfolio">
    <p class="w3-center" style="font-size:24px"><em>
        <?= $data->texto() ?>
      </em></p><br>
  </div>
  </div>

</section>