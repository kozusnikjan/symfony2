<!-- app/Resources/views/frontbase.html.php -->
<!DOCTYPE html>
<html lang="cs" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Osobní webové stránky Jana Kožušníka">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', 'Vítejte') ?></title>
        <link href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/css/style.css') ?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/images/favicon.ico') ?>" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"></script> 
        
        <!-- Open Sans font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />        <!-- konec Open Sans font-->
        
        <!-- font awesome -->
        <link href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/plugins/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/plugins/font-awesome/css/font-awesome.min.css') ?>">
        
        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/plugins/font-awesome/css/font-awesome-ie7.min.css') ?>">
        <![endif]-->
        <!-- end font awesome-->


        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-44225893-1', 'kozusnikjan.com');
            ga('send', 'pageview');

        </script>

    </head>
    <body>

        <div id="bundle">


                <?php $view['slots']->output('_content') ?>



            <div id="wrapperFooter">
                <?php echo $view->render('AcmeFrontBundle:Components:footer.html.php') ?>
            </div>

        </div>

    </body>
</html>