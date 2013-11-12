<!-- src/Acme/SecurityBundle/Resources/views/Security/login.html.php -->
<?php $view->extend('::adminloginbase.html.php') ?>

<?php if ($error): ?>
    <div><?php echo $error->getMessage() ?></div>
<?php endif; ?>

<div id="loginForm">
    <h1 style="text-align: left; margin-left: 20px;"><i class="fa fa-shield" style="color: #cacaca"></i> Přihlášení</h1>   
<form action="<?php echo $view['router']->generate('login_check') ?>" method="post">
    <label for="username">Přihlašovací jméno:</label>
    <input type="text" id="username" name="_username" value="<?php echo $last_username ?>" />

    <label for="password">Heslo:</label>
    <input type="password" id="password" name="_password" />
    
    <button type="submit">Přihlásit</button>
</form>
    <div id="info">
    <?php echo $view->render('AcmeAdminBundle:Components:footer.html.php') ?>
    </div>
    <div class="clear"></div>
</div>