<!-- src/Acme/FrontBundle/Resources/views/Default/index.html.php -->
<?php $view->extend('::frontbase.html.php') ?>

<div id="wrapperTop">
    <?php echo $view->render('AcmeFrontBundle:Default:top.html.php',
                    array('newsletterForm' => $newsletterForm)) ?>

</div>

<div id="wrapperContent">

    <div id="wrapper">

        <div id="reference" class="item">
            <?php echo $view->render('AcmeFrontBundle:Default:reference.html.php') ?>
        </div>

        <div id="projekty" class="item">
            <?php echo $view->render('AcmeFrontBundle:Default:projekty.html.php') ?>
        </div>
        <div id="o_me" class="item">
            <?php echo $view->render('AcmeFrontBundle:Default:ome.html.php') ?>
        </div>
        <div id="kontakt" class="item" style="margin-bottom: 0px;">
<?php foreach ($view['session']->getFlash('notice') as $message): ?>
    <div class="flash-notice">
        <?php echo "<div class='flash-error'>$message</div>" ?>
    </div>
<?php endforeach; ?>
            <?php echo $view->render('AcmeFrontBundle:Default:kontakt.html.php', 
                    array('messagesWebForm' => $messagesWebForm)) ?>
            
        </div>

    </div>
    
</div>
