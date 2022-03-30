<style>
	#overlay_daon{display:none; position: fixed; top: 0px; left: 0px; background: rgba(0, 0, 0, 0.8); width: 100%; height:100%; z-index:999999999;}
	#quick_form{display:block; position:fixed; bottom:80px; left:-600px; z-index:9999999999; background-color:#fff;}
	#online_daon_bt{position:fixed; left:10px; bottom:10px; z-index:9999999999; display: block; width:70px; height:70px; text-align:center; background:#e5ad4e; border-radius:5px; color:#fff; font-weight:bold;}
	#online_daon_bt i{font-size:1.2em;}
	.daon_q_form {width:100%; max-height:475px; max-width: 410px;  padding:30px; padding-top:20px; overflow:auto;}
	.daon_q_form h1{width:100%; font-size:1.6em; margin-bottom:10px; text-align:center;}
	.daon_q_form form {position: relative;}
	.daon_q_form .btn_submit {width:100%; height: 43px;  color: #fff; font-weight: 700; font-size: 1.3em; cursor: pointer; background-color:#e5ad4e;}
	.daon_q_form .btn_submit:hover {background-color:#000;}
	.daon_q_form input[type="text"], .daon_q_form select, .daon_q_form textarea {width: 100%; font-size: 1em; border: 1px solid #cccccc; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; padding: 8px 10px;}
	.daon_q_form table {width: 100%; border-collapse: collapse;font-size: 1em; font-weight: 700; color: #000;}
	.daon_q_form th {width: 70px; text-align: left;}
	.daon_q_form td {padding: 2px 0;}
	.daon_q_agree p {margin: 5px 0; text-transform:uppercase; letter-spacing: -0.04em;}
	.daon_q_agree label {display: inline-block; margin: 0 5px; font-weight: 600; vertical-align: baseline;}
	.daon_q_agree a {display: inline-block; padding: 3px 14px; background: #403a3a; color: #fff; font-size:0.9em;}

</style>

<iframe name="bnk_ifr_aa" id="bnk_ifr_aa" style="display:none;"></iframe>
<div id="quick_form" <?php echo $onform_daon?>>
	<div class="daon_q_form">
		<form name="on_form" method="post" action="<?php echo G5_THEME_URL;?>/online_form_update.php" enctype="multipart/form-data" target="bnk_ifr_aa"> <?php  //폼 이름 on_form 을 절대 변경하지 마십시오.?>
		<input type="hidden" name="bo_table" class="bo_table" value="smscall"> <?php  // quick_inquiry 대신 관리자에서 생성한 게시판 테이블명을 넣습니다. 게시판을 생성하실 때 권한은 글쓰기만 1, 나머지는 모두 10으로 생성하셔야 합니다. ?>
		<input type="hidden" name="w" value="">
		<input type="hidden" value="html1" name="html">
		<input type="hidden" value="상담접수" name="ca_name"> <?php  // 게시판을 생성하실때 분류 사용에 체크하시고  상담접수|처리완료  로 입력하십시오.  ?>
		<input type="hidden" name="sms_receive_tel" value="01012345678"> <?php  // sms알림 받을 휴대폰번호 숫자만입력!    관리자모드 SMS 기본설정에 설정하신 회신번호와 같으면 전송이 안됩니다.?>
			<h1>고객문의신청</h1>
			<table>
				<tbody>
					<tr>
						<th><label>이름</label></th>
						<td><input type="text" name="wr_name" placeholder="성명" required></td>
					</tr>
					<tr>
						<th><label>연락처</label></th>
						<td>
						<input type="hidden" name="wr_1_su" value="연락처">
						<input type="text" name="wr_1" placeholder="010-1234-5678" required></td>
					</tr>
					<tr>
						<th><label>문의지역</label></th>
						<td>
							<input type="hidden" name="wr_2_su" value="상담지역">
							<select name="wr_2" required>
								<option value="">선택하세요</option>
								<option value="서울특별시">서울특별시</option>
								<option value="인천광역시">인천광역시</option>
								<option value="대전광역시">대전광역시</option>
								<option value="대구광역시">대구광역시</option>
								<option value="부산광역시">부산광역시</option>
								<option value="광주광역시">광주광역시</option>
								<option value="울산광역시">울산광역시</option>
								<option value="세종자치시">세종자치시</option>
								<option value="경기도">경기도</option>
								<option value="강원도">강원도</option>
								<option value="충청북도">충청북도</option>
								<option value="충청남도">충청남도</option>
								<option value="경상북도">경상북도</option>
								<option value="경상남도">경상남도</option>
								<option value="전라북도">전라북도</option>
								<option value="전라남도">전라남도</option>
								<option value="제주특별자치도">제주특별자치도</option>
							</select>
						</td>
					</tr>
					<tr>
						<th><label>제목</label></th>
						<td>
							<input type="text" name="wr_subject" placeholder="제목" required>
						</td>
					</tr>
					<tr>
						<th><label>내용</label></th>
						<td>
							<textarea name="wr_content" type="text" name="wr_content" placeholder="내용" required></textarea>
						</td>
					</tr>

				</tbody>
			</table>
			<div class="daon_q_agree">
				<p>
					<input type="checkbox" required><label>개인정보 수집 및 이용에 동의</label>
					<a href="#개인정보취급방침링크주소를넣으세요.">자세히보기</a>
				</p>
				<p>
					<input type="checkbox" required name="smsin" value="1"><label>sms 수신동의</label>
				</p>
			</div>
			<br>
			<input type="submit" value="고객문의 신청하기" class="btn_submit" style="cursor:pointer;">

		</form>
	</div>
</div>


<div id="overlay_daon" <?php echo $onform_overlay?>></div>
<button type="button" id="online_daon_bt"><i class="fa fa-paper-plane" aria-hidden="true"></i><br><span>고객문의</span></button>



<script language="javascript">

	$(function(){

		$("#online_daon_bt, #overlay_daon").click(function () {

			var rq = $("#quick_form").css("left");

			if(rq == "-600px"){
				$('#quick_form').stop().animate({'left':'10px'},500);
				$("#overlay_daon").show();
				$("#online_daon_bt span").html("닫기");
			}else{
				$('#quick_form').stop().animate({'left':'-600px'},500);
				$("#overlay_daon").hide();
				$("#online_daon_bt span").html("고객문의");
			}

		});

		$("#overlay_daon").css("height",document.body.scrollHeight+"px");

	});

</script>
