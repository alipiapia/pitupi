<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title><?php echo app_conf("SHOP_TITLE");?> - <?php echo l("SYSTEM_LOGIN");?></title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="__TMPL__Aryee/css/bootstrap.css" />
	<link rel="stylesheet" href="__TMPL__Aryee/css/font-awesome.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="__TMPL__Aryee/css/ace-fonts.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="__TMPL__Aryee/css/ace.css" />
	<link rel="stylesheet" href="__TMPL__Aryee/css/xiejun.css" />
	<!--[if lte IE 9]>
	<link rel="stylesheet" href="__TMPL__Aryee/css/ace-part2.css" />
	<![endif]-->
	<link rel="stylesheet" href="__TMPL__Aryee/css/ace-rtl.css" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="__TMPL__Aryee/css/ace-ie.css" />
	<![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>
	<script src="__TMPL__Aryee/js/html5shiv.js"></script>
	<script src="__TMPL__Aryee/js/respond.js"></script>
	<![endif]-->
</head>
<script type="text/javascript">
	//定义JS语言
	var ADM_NAME_EMPTY = '<?php echo l("ADM_NAME_EMPTY");?>';
	var ADM_PASSWORD_EMPTY = '<?php echo l("ADM_PASSWORD_EMPTY");?>';
	var ADM_VERIFY_EMPTY = '<?php echo l("ADM_VERIFY_EMPTY");?>';
	var L_jumpUrl = '<?php echo U("Index/index");?>';
	function resetwindow()
	{
		if(top.location != self.location)
		{
			top.location.href = self.location.href;
			return
		}
	}
	resetwindow();

</script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.timer.js"></script>
<!--<script type="text/javascript" src="__TMPL__Common/js/des.js"></script>-->
<script type="text/javascript" src="__TMPL__Common/js/login.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/check_dog.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/IA300ClientJavascript.js"></script>
<script type="text/javascript">
	var __LOGIN_KEY = "<?php echo LOGIN_DES_KEY();?>";
</script>
<body class="login-layout" onLoad="javascript:DogPageLoad();">
<div class="main-container">
	<div class="main-content">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="login-container">
					<div class="center">
						<div class="h100"></div>
						<img src="__TMPL__Common/images/login/logo.png" alt="">
						<div class="h20"></div>
					</div>

					<div class="space-6"></div>

					<div class="position-relative">
						<div id="login-box" class="login-box visible widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header blue lighter bigger">
										<i class="ace-icon fa fa-coffee green"></i>
										请输入帐户和密码
									</h4>

									<div class="space-6"></div>

									<form action="<?php echo u("Public/do_login");?>">
										<fieldset>
											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<div id="login_msg" style="color: #ff7b00;">&nbsp;</div>
														</span>
											</label>
											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control adm_name" name="adm_name" placeholder="帐户" />
															<i class="ace-icon fa fa-user"></i>
														</span>
											</label>

											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control adm_password" name="adm_password" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
											</label>
											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<img src="__ROOT__/verify.php?w=89&h=33&rand={function name="rand"}"  id="verify" align="absmiddle" />
														</span>
											</label>
											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control login_input adm_verify" name="adm_verify" placeholder="输入验证码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
											</label>
											<div class="space"></div>

											<div class="clearfix">
												<button type="button" id="login_btn" class="width-35 pull-right btn btn-sm btn-primary login_button submit">
													<i class="ace-icon fa fa-key"></i>
													<span class="bigger-110">&nbsp;&nbsp;登&nbsp;&nbsp;陆</span>
												</button>
											</div>

											<div class="space-4"></div>
										</fieldset>
									</form>

									<div class="social-or-login center">
										<span class="bigger-110">Welcome Login</span>
									</div>
									<div class="space-6"></div>
								</div><!-- /.widget-main -->
							</div><!-- /.widget-body -->
						</div><!-- /.login-box -->

					</div><!-- /.position-relative -->
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.main-content -->
</div><!-- /.main-container -->
<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
	window.jQuery || document.write("<script src='__TMPL__Aryee/js/jquery.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
	window.jQuery || document.write("<script src='__TMPL__Aryee/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='__TMPL__Aryee/js/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->

</body>
</html>