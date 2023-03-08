<?php snippet('header') ?>

 <p><?= $page->text() ?></p>

 <ul class="projets">
    <?php foreach ($page->children()->listed() as $projet): ?>
    <li> 
    <a href="<?= $projet->url() ?>">
        <?= $projet->image()->crop(500) ?>
    </a>
    
    </li>
    <?php endforeach ?>
 </ul>
 
 <?php snippet('footer') ?>