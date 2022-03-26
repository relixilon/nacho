<section class="paragraph w3-container " id="info">
  <h3 class="w3-center paragraph-title"><?= $data->title() ?></h3>
  <div class="paragraph-container">
    <img src="<?= $data->image()->url() ?>" class="w3-image paragraph-image" alt="Photo of Me" width="500" height="333">
    <p class="paragraph-text"><?= $data->text() ?></p>
  </div>
</section>