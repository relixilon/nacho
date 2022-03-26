<section class="intro">
  <div class="bgimg-1 w3-display-container w3-opacity-min" style="background-image: url(<?= $data->image()->url() ?>);">
    <div class="w3-display-middle w3-white" style="white-space:nowrap;">
      <span class="w3-padding-large w3-white w3-animate-opacity">
        <img src="<?= $data->images()->last()->url() ?>" alt="Nacho Fenollar">
      </span>
    </div>
  </div>


  <style>
  .bgimg-1 {
    min-height: 100vh;
  }
  </style>
</section>