<?php echo $this->fetch('./inc/header.html'); ?>
<?php
	$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/login.css";		
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['pagecss'],
);
echo $k['name']($k['v']);
?>" />

<div class="login">
    <div id="mb_re_pwd">
		<input class="logininput mainborder" 				id="mobile" name="mobile" type="text" placeholder="输入手机号">
		<input class="logininput_getcode mainborder" 		id="mobile_code" name="mobile_code" type="text" placeholder="输入验证码">
		<input class="ui-button_getcode specialbackground"  id="get_code" type="button" value="获取验证码">
		<input class="logininput mainborder" 				id="user_pwd" name="user_pwd" type="password" placeholder="输入新密码">
		<input class="logininput mainborder"				id="user_pwd_confirm" name="user_pwd_confirm" type="password" placeholder="再次输入密码">
		<div class="blank"></div> 
		<input class="ui-button_login Headerbackground_dark" type="submit" name="commit" id="signup-submit" value="提交">
    </div>
</div>
<?php echo $this->fetch('./inc/footer.html'); ?>

<script type="text/javascript">
$(document).ready(function(){
	$("#get_code").click(function(){
		var ajaxurl = '<?php
echo parse_url_tag("u:index|send_reset_pwd_code|"."".""); 
?>';
		var query = new Object();
		query.mobile =  $.trim($("#mobile").val());
		query.post_type='json';
		$.ajax({ 
			url: ajaxurl,
			data:query,
			type: "POST",
			dataType: "json",
			success: function(result){
				if(result.response_code)
				{
					alert(result.show_err);
				}
				else
				{	
					alert("发送失败");
				}
			}
		});	
	});
	

	$("#signup-submit").click(function(){
		var name;
		name=$.trim($("#user_pwd").val())
		var reg=/^[a-zA-z0-9]{6,}$/;  
		var regs=/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,16}$/;
		if(reg.test(name)){	
			if(regs.test(name)){	
			}
			else{
				alert("安全等级低，请用数字+字母");
				return false;
			}
		}
		else{
			alert("长度在6~16之间，只能包含字符、数字和下划线。");
			return false;
		}
		var ajaxurl = '<?php
echo parse_url_tag("u:index|save_reset_pwd|"."".""); 
?>';
		var query = new Object();
		query.mobile = $.trim($("#mobile").val());
		query.mobile_code = $.trim($("#mobile_code").val());
		query.user_pwd = $.trim($("#user_pwd").val());
		query.user_pwd_confirm = $.trim($("#user_pwd_confirm").val());
		query.post_type = "json";
		$.ajax({
			url:ajaxurl,
			data:query,
			type:"Post",
			dataType:"json",
			success:function(data){
				alert(data.show_err);
				if(data.response_code){
					window.location.href = '<?php
echo parse_url_tag("u:index|login|"."".""); 
?>';
				}else{}
			}
		});
	});
});


</script>










