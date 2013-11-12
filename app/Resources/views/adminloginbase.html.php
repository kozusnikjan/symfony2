<!-- app/Resources/views/adminloginbase.html.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', 'Administrace přihlášení') ?></title>
        <link href="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/css/login.css') ?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/images/favicon.ico') ?>" />
        
        <!-- Open Sans font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />        <!-- konec Open Sans font-->
        
        <!-- font awesome -->
        <link href="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/plugins/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/plugins/font-awesome/css/font-awesome.min.css') ?>">
        
        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/plugins/font-awesome/css/font-awesome-ie7.min.css') ?>">
        <![endif]-->
        <!-- end font awesome-->

    
    </head>
    <body>
        
       <div id="loginFormWrapper"> 
                    <?php $view['slots']->output('_content') ?>
       </div>
    </body>
    
</html>    