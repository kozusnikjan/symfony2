<!-- src/Acme/AdminBundle/Resources/views/Newsletter/showAllTexts.html.php -->
<?php $view->extend('::adminbase.html.php') ?>
<div class="item">
    <div class="header"><h2>Výpis zpráv</h2></div>
    <div class="content">

<table>
    <tr>
        <td>ID</td><td>Name</td><td>Email</td><td>Registrace</td>
    </tr>
    <?php
    foreach ($newsletterUsers as $user){
        ?>
    <tr>
        <td><?= $user->getId() ?></td>
        <td><?= $user->getName() ?></td>
        <td><?= $user->getEmail() ?></td>
        <td><?= $user->getDate()->format('Y-m-d H:i:s') ?></td>
    </tr>
    <?php
    }
    ?>
</table>
        
</div>
</div>