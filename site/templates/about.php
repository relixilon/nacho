<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/index.css')?>
</head>
<body>
    <header>
    <a href="<?= $site->url() ?>">LOGO</a>
    <?php foreach ($site->children()->listed()as $item):?>
        <li>
            <a href="<?= $item->url()?>"><?=$item->title()?></a>
        </li>
        <?php endforeach?>
    </header>
    <main>
        <h1>
            <?= $page->title() ?>
        </h1>
        lorem lorem me comen el pollem
    </main>
    <footer>
        <a href="">Follow us on twitter</a>
    </footer>
    
</body>
</html>
