<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Bootstrap 101 Template</title>

<!-- Bootstrap -->

<link rel="stylesheet" href="<?php echo base_url().CSS_BOOTS_CORE;?>" />
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<!-- Custom styles for this template -->
<link href="<?php echo base_url().CSS_DASHBOARD;?>" rel="stylesheet">
<link href="<?php echo base_url().CSS_DATETIMEPICKER;?>" rel="stylesheet">

<!--css for gallery-->
<link href="<?php echo base_url().CSS_THIRDPARTY;?>" rel="stylesheet" media="screen">
<!-- Add Button helper (this is optional) -->
<link
	href="../thirdparty/gallery/source/helpers/jquery.fancybox-buttons.css?v=1.0.5"
	rel="stylesheet">

<!-- Add Thumbnail helper (this is optional) -->
<link
	href="../thirdparty/gallery/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7"
	rel="stylesheet">
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<?php $this->load->view ( 'admin/admin_navmenu_view',isset($data['navmenuData'])?$data['navmenuData']:'');?>
	{body}
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script>
		window.jQuery
				|| document
						.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
	</script>
	<script src="<?php echo base_url().JS_BOOTS_CORE;?>" type="text/javascript"></script>
	<script src="<?php echo base_url().DATETIMEPICKER;?>" type="text/javascript"></script>
	<script src="<?php echo base_url().TINYMCE;?>" type="text/javascript"></script>
	<script src="<?php echo base_url().MENUSELECTOR;?>" type="text/javascript"></script>

	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
</body>
</html>