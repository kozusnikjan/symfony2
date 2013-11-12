<!-- src/Acme/AdminBundle/Resources/views/Text/showAll.html.php -->
<?php $view->extend('::adminbase.html.php') ?>
<div class="item">
    <div class="header"><h2>Výpis textů</h2></div>
    <div class="content">

<table>
    <tr>
        <td>ID</td><td>Name</td><td>Content</td><td>Author ID</td>
    </tr>
    <?php
    foreach ($texts as $text){
        ?>
    <tr>
        <td><?= $text->getId() ?></td>
        <td><?= $text->getTitle() ?></td>
        <td><?= $text->getContent() ?></td>
        <td><?= $text->getAuthor() ?></td>
    </tr>
    <?php
    }
    ?>
</table>
        
</div>
</div>