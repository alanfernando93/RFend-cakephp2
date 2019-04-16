<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | Corlate</title>

        <!-- core CSS -->
        <link href="ViewCorlate/css/bootstrap.min.css" rel="stylesheet">
        <link href="ViewCorlate/css/font-awesome.min.css" rel="stylesheet">
        <link href="ViewCorlate/css/animate.min.css" rel="stylesheet">
        <link href="ViewCorlate/css/prettyPhoto.css" rel="stylesheet">
        <link href="ViewCorlate/css/main.css" rel="stylesheet">
        <link href="ViewCorlate/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="ViewCorlate/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ViewCorlate/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ViewCorlate/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ViewCorlate/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ViewCorlate/images/ico/apple-touch-icon-57-precomposed.png">
        <?= $this->Html->script(array('http://code.jquery.com/jquery-1.11.0.min.js')); ?>

        <?= $this->fetch('script'); ?>
    </head><!--/head-->

    <body class="homepage">

        <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <pre><?= $setting->tittle; ?></pre>
            <?= $this->fetch('content') ?>
        </div>

        <script src="ViewCorlate/js/jquery.js"></script>
        <script src="ViewCorlate/js/bootstrap.min.js"></script>
        <script src="ViewCorlate/js/jquery.prettyPhoto.js"></script>
        <script src="ViewCorlate/js/jquery.isotope.min.js"></script>
        <script src="ViewCorlate/js/main.js"></script>
        <script src="ViewCorlate/js/wow.min.js"></script>
    </body>
</html>