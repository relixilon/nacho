<section class="videos" id="videos">
  <span class="videos-title">
    <?= $data->title() ?>
  </span>
  <div class="videos-container">
    <iframe class="videos-youtube" src="<?= $data->video1() ?>" title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
    <iframe class="videos-youtube" src="<?= $data->video2() ?>" title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </div>
</section>