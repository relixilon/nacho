<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);"
      onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <?php foreach($pages->listed() as $item): ?>
    <a href="#" class="w3-bar-item w3-button w3-hide-small"> <?=$item->title()?></a>
    <?php endforeach ?>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <?php foreach($pages->listed() as $item): ?>
    <a href="#" class="w3-bar-item w3-button w3-hide-small"> <?=$item->title()?></a>
    <?php endforeach ?>
  </div>
</div>