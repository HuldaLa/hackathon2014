<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Event-Timeliner</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?php echo $this->url('/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo $this->url('/css/bootstrap-theme.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo $this->url('/css/app.css'); ?>" />
    <link rel="stylesheet" href="<?php echo $this->url('/css/sidebar.css'); ?>" />
</head>
<body>
    <div id="wrapper" class="active">
        <?php require 'sidebar.php' ?>
        
        <div id="page-content-wrapper">
            <?php echo $this->content ?>
        </div>
    </div>
    <?php require 'modal.html' ?>

    <script src="<?php echo $this->url('/js/jquery-2.1.1.min.js'); ?>"></script>
    <script src="<?php echo $this->url('/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo $this->url('/js/masonry.pkgd.min.js'); ?>"></script>
    <script src="<?php echo $this->url('/js/handlebars-v1.3.0.js'); ?>"></script>
    <script type="text/javascript">
        var timelineTemplateBaseUrl = '<?php echo $this->url('/templates/get/'); ?>';
    </script>
    <script charset="utf-8" src="<?php echo $this->url('/js/app.js'); ?>"></script>
</body>
</html>