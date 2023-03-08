<?php snippet('header') ?>

 <p><?= $page->text() ?></p>

 <ul class="projets">
    <?php foreach ($page->images() as $image): ?>
    <li> 
    <a href="<?= $image->url() ?>">
        <?= $image ?>
        
    </a>
    <?= $page->text() ?>
    </li>
    <?php endforeach ?>
 </ul>
 
 <?php snippet('footer') ?>