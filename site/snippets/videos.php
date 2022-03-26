<section class="w3-center" id="videos">
  <h1 class="title"><?= $data->title() ?></h1>
  <div class="video-container">
    <iframe width="560" height="315" src="<?= $data->video1() ?>" title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
    <iframe width="560" height="315" src="<?= $data->video2() ?>" title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </div>
</section>