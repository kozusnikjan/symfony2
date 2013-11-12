<!-- src/Acme/FrontBundle/Resources/views/Email/email.html.php -->
<?php $view->extend('::emailbase.html.php') ?>

<h1>Kontaktní email z webu</h1>
Autor: <?php echo $sender; ?><br>
Text: <?php echo $text; ?>