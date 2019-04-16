<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $setting->tittle; ?> | <?= $this->fetch('title') ?></title>
        <?php
        $css = array(
            "/ViewCoreBusiness/css/animate.css",
            "/ViewCoreBusiness/css/bootstrap.min.css",
            "/ViewCoreBusiness/css/flexslider.css",
            "/ViewCoreBusiness/css/style.css",
            "/ViewCoreBusiness/css/fancybox/jquery.fancybox.css",
        );
        echo $this->Html->css($css);
        $this->fetch("css");
        $this->fetch("meta");
        ?>
    </head>
    <body>
        <div id="wrapper">
            <?= $this->element('navigation') ?>
            <?= $this->fetch('content'); ?>            
            <?= $this->element('footer'); ?>
        </div>
        <!-- /#wrapper -->
        <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
            <?php
            $script = array(
                "/ViewCoreBusiness/js/animate.js",
                "/ViewCoreBusiness/js/bootstrap.min.js",
                "/ViewCoreBusiness/js/custom.js",
                "/ViewCoreBusiness/js/jquery.js",
                "/ViewCoreBusiness/js/validate.js",
                "/ViewCoreBusiness/js/portfolio/jquery.quicksand.js",
                "/ViewCoreBusiness/js/portfolio/setting.js",
                "/ViewCoreBusiness/js/flexslider/jquery.flexslider.js",
                "/ViewCoreBusiness/js/flexslider/setting.js",
                "/ViewCoreBusiness/js/jquery.flexslider.js",
                "/ViewCoreBusiness/js/jquery.fancybox-media.js",
                "/ViewCoreBusiness/js/jquery.fancybox.pack.js",
                "/ViewCoreBusiness/js/jquery.easing.1.3.js",
            );
            echo $this->Html->script($script);
            $this->fetch('script');
            ?>
    </body>
</html>