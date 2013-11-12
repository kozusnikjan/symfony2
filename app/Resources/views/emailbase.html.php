<!-- app/Resources/views/emailbase.html.php -->
<!DOCTYPE html>
<html lang="cs" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Email">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', 'Email') ?></title>
        <link href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/css/style.css') ?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/images/favicon.ico') ?>" />

        
        <!-- Open Sans font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />        <!-- konec Open Sans font-->
        
        <!-- font awesome -->
        <link href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/plugins/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/plugins/font-awesome/css/font-awesome.min.css') ?>">
        
        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/plugins/font-awesome/css/font-awesome-ie7.min.css') ?>">
        <![endif]-->
        <!-- end font awesome-->


    </head>
    <body>


                <?php $view['slots']->output('_content') ?>



    </body>
</html>