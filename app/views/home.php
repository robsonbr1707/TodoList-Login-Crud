<?php include_once ('layouts/header.php'); ?>
<h1><?= $title ?></h1>
<ul>
    <?php foreach ($lists as $list): ?>
        <li><?= $list['title'] ?></li>
    <?php endforeach ?>
</ul>
<?php include_once ('layouts/footer.php'); ?>