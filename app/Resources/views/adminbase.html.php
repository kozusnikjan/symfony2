<!-- app/Resources/views/adminbase.html.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', 'Administrace') ?></title>
        <link href="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/css/style.css') ?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/images/favicon.ico') ?>" />
    
        <!-- Load JQuery -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        
        <!-- Open Sans font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />        <!-- konec Open Sans font-->
        
        <!-- font awesome -->
        <link href="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/plugins/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/acmefrontbundle/plugins/font-awesome/css/font-awesome.min.css') ?>">
        
        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/plugins/font-awesome/css/font-awesome-ie7.min.css') ?>">
        <![endif]-->
        <!-- end font awesome-->


        <!-- navgoco menu -->
        <!-- Add JQuery cookie plugin (optional) -->
	<script src="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/plugins/navgoco/jquery.cookie.min.js') ?>"></script>
	<!-- Add navgoco main js and css files  -->
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/plugins/navgoco/jquery.navgoco.min.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/acmeadminbundle/plugins/navgoco/jquery.navgoco.css') ?>" media="screen" />
    
        <script type="text/javascript" id="nav-javascript">
                        $(document).ready(function() {
                        $(".nav").navgoco({accordion: true});
                        });
        </script>
        <!-- end navgoco menu -->
                
    </head>
    <body>
        <div id="bundle">
            <div id="wrapperTop">
                <div id="header">
                        <?php echo $view->render('AcmeAdminBundle:Components:header.html.php')?>
                </div>
            </div>
            
            <div id="wrapperCenter">
                
                
                
                <div class="sideBar left">
                    
                <div id="nav">
        <?php echo $view->render('AcmeAdminBundle:Components:menu.html.php')?>
                </div>
                    
                </div>  
                 
                    
                <div class="sideBar right">
                    SOME REALLY IMPORTANT INFO
                </div>
                    
                <div id="center">
  
                
                <div id="content" class="">
        <?php $view['slots']->output('_content') ?>
                </div>
                    
                <div class="clear"></div>
                
            </div>
            </div>
            <div id="wrapperFooter">
                <div id="footer">
        <?php echo $view->render('AcmeAdminBundle:Components:footer.html.php')?>
                </div>
            </div> 
    
        
    </body>
</html>