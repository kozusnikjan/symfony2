<!-- src/Acme/AdminBundle/Resources/views/Task/add.html.php -->
<?php $view->extend('::adminbase.html.php') ?>
<div class="item">
    <div class="header"><h2>Přidej úkol</h2></div>
<div class="content">
<?php echo $view['form']->form($form) ?>
</div>
</div>