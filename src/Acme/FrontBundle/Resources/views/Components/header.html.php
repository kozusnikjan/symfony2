header
<?php if ($view['security']->isGranted('ROLE_ADMIN')): ?>
    <a href="<?php echo $view['router']->generate('logout') ?>">Logout</a>
<?php endif; ?>
Login in as: <?= $app->getUser()->getUsername() ?>