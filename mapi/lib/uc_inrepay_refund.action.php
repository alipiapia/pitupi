<?php

class uc_inrepay_refund
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

			$status = getUcInrepayRefund($id);
			if ($status['status'] == 1){
				//$deal = $status['deal'];
				$root['deal'] = $status['deal'];
				$root['true_all_manage_money'] = $status['true_all_manage_money'];					
				$root['impose_money'] = $status['impose_money'];
				$root['total_repay_money'] = $status['total_repay_money'];			
				$root['true_total_repay_money'] = $status['true_total_repay_money'];
					
				$root['true_all_manage_money_format'] = $status['true_all_manage_money_format'];
				$root['impose_money_format'] = $status['impose_money_format'];
				$root['total_repay_money_format'] = $status['total_repay_money_format'];
				$root['true_total_repay_money_format'] = $status['true_total_repay_money_format'];
			}else{				
				$root['show_err'] = $status['show_err'];
				$root['response_code'] = 0;
			}
			
			
		}else{
			$root['response_code'] = 0;
			$root['show_err'] ="未登录";
			$root['user_login_status'] = 0;
		}
		$root['program_title'] = "提前还款";
		output($root);		
	}
}
?>
