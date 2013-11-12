<!-- src/Acme/HelloBundle/Resources/views/Hello/index.html.php -->
<?php $view->extend('::frontbase.html.php') ?>

Show all texts
<table>
    <tr>
        <td>ID</td><td>Name</td><td>Text</td><td>Author ID</td>
    </tr>
    <?
    foreach ($texts as $text){
        ?>
    <tr>
        <td><?= $text->getId() ?></td>
        <td><?= $text->getName() ?></td>
        <td><?= $text->getText() ?></td>
        <td><?= $text->getAuthor() ?></td>
    </tr>
    <?
    }
    ?>
</table>