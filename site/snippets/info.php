<div class="scroll">
  <section class="info" id="info">
    <div class="info-separator">
    </div>
    <div class="info-content">
      <div class="info-left">
        <span class="info-title">
          <?= $data->title()?>
        </span>
        <p class="info-text">
          <?= $data->text()?>
        </p>
      </div>
      <div class="info-images">
        <img class="info-image" src="<?= $data->image()->url()?>" alt="Left image">
        <img class="info-image" src="<?= $data->images()->last()->url()?>" alt="Right image">
      </div>
    </div>

  </section>
</div>