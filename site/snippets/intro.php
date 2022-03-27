<div class="fixed">
  <section id="intro" class="intro">
    <img src="<?=$site->image()->url() ?>" alt="Logo" class="intro-logo">
    <div class="intro-content">
      <h1 class="intro-title"><?= $data->title() ?></h1>
      <h2 class="intro-subtitle"><?= $data->subtitle() ?></h2>
      <span class="intro-text"><?= $data->text() ?></span>
      <a class="intro-button">
        <?= $data->button() ?>
      </a>
    </div>
  </section>
</div>


<style>

</style>