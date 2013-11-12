<!-- src/Acme/AdminBundle/Resources/views/Messages/showAll.html.php -->
<?php $view->extend('::adminbase.html.php') ?>
<div class="item">
    <div class="header"><h2>Výpis zpráv</h2></div>
    <div class="content">

<table>
    <tr>
        <td>ID</td><td>Name</td><td>Content</td><td>Author ID</td>
    </tr>
    <?php
    foreach ($messagesWeb as $messageWeb){
        ?>
    <tr>
        <td><?= $messageWeb->getId() ?></td>
        <td><?= $messageWeb->getSubject() ?></td>
        <td><?= $messageWeb->getContent() ?></td>
        <td><?= $messageWeb->getSender() ?></td>
        <td><?= $messageWeb->getDate()->format('Y-m-d H:i:s') ?></td>
    </tr>
    <?php
    }
    ?>
</table>
        
</div>
</div>