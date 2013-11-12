<!-- src/Acme/AdminBundle/Resources/views/Task/add.html.php -->
<?php $view->extend('::adminbase.html.php') ?>
<div class="item">
    <div class="header"><h2>Úkoly</h2></div>
    <div class="content">

<table>
    <tr>
        <td>ID</td><td>Název</td><td>Text</td><td>Do</td><td>Autor</td>
    </tr>
    <?php
    foreach($tasks as $task){
        ?>
    <tr>
        <td><?= $task->getId() ?></td>
        <td><?= $task->getName() ?></td>
        <td><?= $task->getText() ?></td>
        <td><?= $task->getDueDate()->format('Y-m-d H:i:s'); ?></td>
        <td><?= $task->getAuthor() ?></td>
    </tr>
    <?php
    }
    ?>
</table>
        
    </div>
</div>