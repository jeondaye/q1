<?php
	error_reporting( E_ALL & ~E_NOTICE ); 	 ini_set("display_errors", 1);
	include_once('./_common.php');

	$sms_receive_tel = $_POST['sms_receive_tel'];

	$write_table = $g5['write_prefix'] . $bo_table;

	$wr_num = get_next_num($write_table);
	$wr_password = get_encrypt_string('a1111');

	for($i = 1; $i<=10; $i++){

		if($_POST["wr_".$i] && $_POST["wr_".$i."_su"] ){

			$wr_etc[] =  "<tr><th  style=\"border:1px solid #ddd; background-color:#f7f7f7; height:35px; \">".clean_xss_tags($_POST["wr_".$i."_su"])."</td><td style=\"border:1px solid #ddd; padding-left:10px;\">".clean_xss_tags($_POST["wr_".$i])."</td>";

		}

	}

	if(@count($wr_etc) != 0){

		$wr_text = "<table width=100% cellpadding=0 cellspacing=0 >";
		$wr_text .= @implode("\\n",$wr_etc);
		$wr_text .= "</table><br><br>";

	}

	$wr_content = addslashes($wr_text.clean_xss_tags($wr_content));
	$wr_subject = addslashes(clean_xss_tags($wr_subject));
	$wr_name = addslashes(clean_xss_tags($wr_name));


	  $sql = " insert into $write_table
                set wr_num = '$wr_num',
                     wr_reply = '',
                     wr_comment = 0,
                     ca_name = '$ca_name',
                     wr_option = '$html,$secret,$mail',
                     wr_subject = '$wr_subject',
                     wr_content = '$wr_content',
                     wr_link1 = '$wr_link1',
                     wr_link2 = '$wr_link2',
                     wr_link1_hit = 0,
                     wr_link2_hit = 0,
                     wr_hit = 0,
                     wr_good = 0,
                     wr_nogood = 0,
                     mb_id = '',
                     wr_password = '$wr_password',
                     wr_name = '$wr_name',
                     wr_email = '$wr_email',
                     wr_homepage = '$wr_homepage',
                     wr_datetime = '".G5_TIME_YMDHIS."',
                     wr_last = '".G5_TIME_YMDHIS."',
                     wr_ip = '{$_SERVER['REMOTE_ADDR']}',
                     wr_1 = '$wr_1',
                     wr_2 = '$wr_2',
                     wr_3 = '$wr_3',
                     wr_4 = '$wr_4',
                     wr_5 = '$wr_5',
                     wr_6 = '$wr_6',
                     wr_7 = '$wr_7',
                     wr_8 = '$wr_8',
                     wr_9 = '$wr_9',
                     wr_10 = '$wr_10' ";


		//echo $sql;		exit;

		sql_query($sql);

		$wr_id = sql_insert_id();
		sql_query(" update $write_table set wr_parent = '$wr_id' where wr_id = '$wr_id' ");
		sql_query(" insert into {$g5['board_new_table']} ( bo_table, wr_id, wr_parent, bn_datetime, mb_id ) values ( '{$bo_table}', '{$wr_id}', '{$wr_id}', '".G5_TIME_YMDHIS."', '{$member['mb_id']}' ) ");
		sql_query("update {$g5['board_table']} set bo_count_write = bo_count_write + 1 where bo_table = '{$bo_table}'");



		if($_POST['smsin'] && $sms_receive_tel){


			if($w == '' && !$is_admin){ //관리자글이 아니고 글등록시에만 전송

				if($config['cf_sms_use'] == 'icode' && trim($sms_receive_tel)) {
					if($config['cf_sms_type'] == 'LMS') {
						include_once(G5_LIB_PATH.'/icode.lms.lib.php');

						$port_setting = get_icode_port_type($config['cf_icode_id'], $config['cf_icode_pw']);

						// SMS 모듈 클래스 생성
						if($port_setting !== false) {

							// 문의글 등록시 관리자에게 전송
							if(($w == '') && trim($sms_receive_tel)) {
								$sms_content = $config['cf_title'].' 빠른상담이 신청되었습니다. 관리자모드에서 확인하세요.';
								$send_number = preg_replace('/[^0-9]/', '', $sms5['cf_phone']);
								$recv_number = preg_replace('/[^0-9]/', '', $sms_receive_tel);

								if($recv_number) {
									$strDest     = array();
									$strDest[]   = $recv_number;
									$strCallBack = $send_number;
									$strCaller   = iconv_euckr(trim($config['cf_title']));;
									$strSubject  = '';
									$strURL      = '';
									$strData     = iconv_euckr($sms_content);
									$strDate     = '';
									$nCount      = count($strDest);

									$SMS = new LMS;
									$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $port_setting);
									$res = $SMS->Add($strDest, $strCallBack, $strCaller, $strSubject, $strURL, $strData, $strDate, $nCount);

									if($res) {
										$SMS->Send();
									}

									$SMS->Init(); // 보관하고 있던 결과값을 지웁니다.
								}
							}
						}
					} else {
						include_once(G5_LIB_PATH.'/icode.sms.lib.php');

						// 문의글 등록시 관리자에게 전송
						if(($w == '') && trim($sms_receive_tel)) {
							$sms_content = $config['cf_title'].' 빠른상담이 신청되었습니다. 관리자모드에서 확인하세요.';
							$send_number = preg_replace('/[^0-9]/', '', $sms5['cf_phone']);
							$recv_number = preg_replace('/[^0-9]/', '', $sms_receive_tel);

							if($recv_number) {
								$SMS = new SMS; // SMS 연결
								$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $config['cf_icode_server_port']);
								$SMS->Add($recv_number, $send_number, $config['cf_icode_id'], iconv("utf-8", "euc-kr", stripslashes($sms_content)), "");
								$SMS->Send();
							}
						}
					}
				}

			}


		}

		echo "<script>alert('상담 신청이 완료되었습니다.\\n감사합니다.'); parent.document.on_form.reset(); window.parent.$('#online_daon_bt').trigger('click'); </script>";

?>
