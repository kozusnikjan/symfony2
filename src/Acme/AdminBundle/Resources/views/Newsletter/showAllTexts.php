<!-- src/Acme/AdminBundle/Resources/views/Newsletter/showAllTexts.html.php -->
<?php $view->extend('::adminbase.html.php') ?>
<div class="item">
    <div class="header"><h2>Výpis newsletter textů</h2></div>
    <div class="content">

<table>
    <tr>
        <td>ID</td><td>Name</td><td>Content</td><td>Datum</td><td>Autor</td>
    </tr>
    <?php
    foreach ($newsletterTexts as $text){
        ?>
    <tr>
        <td><?= $text->getId() ?></td>
        <td><?= $text->getName() ?></td>
        <td><?= $text->getContent() ?></td>
        <td><?= $text->getDate()->format('Y-m-d H:i:s') ?></td>
        <td><?= $text->getAuthor() ?></td>
    </tr>
    <?php
    }
    ?>
</table>
        
</div>
</div>