<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bootstrap 101 Template</title>
<!-- Bootstrap -->


<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" media="screen">
<!--  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet" media="screen">-->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/shpdmain.css" rel="stylesheet" media="screen">
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
<!-- <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script> -->
</head>
<body>
<!-- header start -->
	<div class="hearder_css">
		<div class="row-fluid header_toper"></div>
		<div class="container header_logor">
			<div class="span11"><h1>Logo</h1></div>
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



