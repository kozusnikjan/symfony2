<!-- src/Acme/FrontBundle/Resources/views/Registration/register.html.php -->
<?php $view->extend('::frontbase.html.php') ?>

<div id="wrapperContent">
    
    <div id="wrapper">
        <div class="item" style="background: #010101">
                           <?php echo $view['form']->form($registrationForm) ?>
        </div>
    </div>
    
</div>