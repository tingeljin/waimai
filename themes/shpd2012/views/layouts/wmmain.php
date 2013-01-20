<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Bootstrap 101 Template</title>
<!-- Bootstrap -->


<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/shpdmain.css" rel="stylesheet" media="screen">
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
<!-- <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script> -->
</head>
<body>
<!-- header start -->
	<div class="hearder_css">
		<div class="row-fluid header_toper"></div>
		<div class="row-fluid header_logor">
			<div class="span3"><h1>Logo</h1></div>
			<div class="span4 offset1"><h1>Search</h1></div>
			<div class="span3 offset1"><h1>Other</h1></div>
		</div>
	</div>
<!-- header end -->
<!-- main start -->
<?php echo $content; ?>
<!-- main end -->
<!-- footer start -->
<div>
</div>
<!-- footer end -->
</body>
</html>
