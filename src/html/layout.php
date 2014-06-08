<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Event-Timeliner</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?php echo $this->url('/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo $this->url('/css/bootstrap-theme.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo $this->url('/css/app.css'); ?>" />
</head>
<body>
    <!-- <a href="<?php # echo  ?>" class="btn btn-default">Add Event</a> -->

    <?php require 'modal.html' ?>

    <div id="content">
        <?php echo $this->content ?>
    </div>

    <script src="<?php echo $this->url('/js/jquery-2.1.1.min.js'); ?>"></script>
    <script src="<?php echo $this->url('/js/bootstrap.min.js'); ?>"></script>
    <script charset="utf-8" src="<?php echo $this->url('/js/app.js'); ?>"></script>
</body>
</html>