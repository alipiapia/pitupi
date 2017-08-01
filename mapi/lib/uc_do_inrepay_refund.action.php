<?php

//执行提前还款
class uc_do_inrepay_refund
{
	public function index(){
		
		$root = array();
		
		$id = intval($GLOBALS['request']['id']);
			
		$user =  $GLOBALS['user_info'];
		$root['session_id'] = es_session::id();
		$user_id  = intval($user['id']);
		if ($user_id >0){
			require APP_ROOT_PATH.'app/Lib/deal.php';
			
			$root['user_login_status'] = 1;
									
			$result = getUCInrepayRepayBorrowMoney($id);
			$root['status'] = $result['status'];
			if($result['status'] == 2){
				$root['response_code'] = 1;
				$root['app_url'] = $result['jump'];
			}else{
				$root['response_code'] = $result['status'];
				$root['show_err'] = $result['show_err'];
			}
		}else{
			$root['response_code'] = 0;
			$root['show_err'] ="未登录";
			$root['user_login_status'] = 0;
		}
		output($root);		
	}
}
?>
