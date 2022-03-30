<link rel="shortcut icon" href="img/pabicon.png"/>
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_THEME_PATH.'/switch.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
?>


            <div id="header_wrap" class="top_menu_06 sub">
                
                    <h1><a href="/"></a></h1>
                    <button type="button" class="navbar-toggle collapsed js-offcanvas-btn"> <span class="sr-only">Toggle navigation</span> <span class="hiraku-open-btn-line white"></span> </button>
                    <div class="container">
					<div class="menu_wrap">
                        <ul id="gnb" class="container gnb">
						
                            <li class="depth1"> <a href="<?php echo G5_THEME_URL?>/company/company_01.php">게임 정보</a>
                                <ul class="depth2">
                                    <li><a href="<?php echo G5_THEME_URL?>/company/company_01.php">LOL 소개</a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">모드 소개</a> </li>
                                    <!--<li><a href="<?php echo G5_THEME_URL?>/company/company_03.php">학원연혁</a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/company/company_04.php">찾아오시는 길</a></li>-->
                                </ul>
                            </li>
                            <li class="depth1"> <a href="<?php echo G5_THEME_URL?>/gukbi/sub01.php">새소식</a>
                                <ul class="depth2">
                                    <li><a href="<?php echo G5_THEME_URL?>/gukbi/sub01.php">패치노트</a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/gukbi/sub02.php">e스포츠</a></li>
			
                                </ul>
                            </li>
                            <li class="depth1"> <a href="<?php echo G5_THEME_URL?>/class/sub01.php">챔피언</a>
                                <ul class="depth2">
										<li><a href="<?php echo G5_THEME_URL?>/class/sub01.php">챔피언 소개</a></li>
                                       
                                </ul>
                            </li>
							<li class="depth1"> <a href="<?php echo G5_THEME_URL?>/cert/sub01.php">유니버스</a>
                                <ul class="depth2">
                                <li><a href="<?php echo G5_THEME_URL?>/cert/sub01.php">시네마틱 영상</a></li>
                                      
                                       
                                </ul>
                            </li>

                            <li class="depth1"> <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">고객지원</a>
                                <ul class="depth2">
                                    <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">공지사항</a></li>
                                    <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">문의하기</a></li>
									<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qna">자주묻는질문</a></li>
                                    <!--<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=free">온라인문의</a></li>                      
                                    <?php if($member['mb_level'] > 9){ ?><li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=applicant">지원서 관리</a></li> <? } ?>-->
                                </ul>
                            </li>
							<li class="depth1" style="margin-right:20px"> <a href="<?php echo G5_THEME_URL?>/int/int1.php">프로젝트 멤버</a>
                                <ul class="depth2">
                                    <li><a href="<?php echo G5_THEME_URL?>/int/int1.php">멤버 소개</a></li>
                                  
                                </ul>
                            </li>
                        </ul>
                        <div class="top_right_menu">
                            <?php if($is_member){ ?>
                                <button type="button" class="btn btn-white" onclick="location.href='<?php echo G5_URL?>/bbs/logout.php'"> <span>로그아웃</span></button>
								<button type="button" class="btn btn-white" onclick="location.href='http://dreamit.dreamitbiz.com/adm'" style="margin-left:10px"> <span>내 정보</span></button>
                                <?php }else{ ?>
                                    <button type="button" class="btn btn-white" onclick="location.href='<?php echo G5_URL?>/bbs/login.php'"> <span>로그인</span></button>
									<button type="button" class="btn btn-white" onclick="location.href='<?php echo G5_URL?>/bbs/register.php'" style="margin-left:10px"> <span>회원가입</span></button>
                                    <?php } ?>
									
                        </div>
                    </div>
                </div>
            </div>
			
<style>
.issue_all{color:orange}
.issue_all:hover{color:white}
.btn-1 p{width:100%;height:100%;}
.btn-1:before,
.btn-1:after {
  position: absolute;
  content: "";
  right: 0;
  top: 0;
   background:#EBDA93;
  transition: all 0.3s ease;
}
.btn-2:before,
.btn-2:after {
  position: absolute;
  content: "";
  right: 0;
  top: 0;
   background:#8FDAE6;
  transition: all 0.3s ease;
}
.btn-1:before {
  height: 0%;
  width: 2px;
}
.btn-1:after {
  width: 0%;
  height: 2px;
}
.btn-1:hover{
  background: transparent;
  box-shadow: none;
}
.btn-1:hover:before {
  height: 100%;
}
.btn-1:hover:after {
  width: 100%;
}
.btn-1 span:hover{
   color: #EBDA93;
}
.btn-2 span:hover{
   color: #F0F0F0;
}
.btn-1 span:before,
.btn-1 span:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
   background:#EBDA93;
  transition: all 0.3s ease;
}
.btn-2 span:before,
.btn-2 span:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
   background:#8FDAE6;
  transition: all 0.3s ease;
}
.btn-1 span:before {
  width: 2px;
  height: 0%;
}
.btn-1 span:after {
  width: 0%;
  height: 2px;
}
.btn-1 span:hover:before {
  height: 100%;
}
.btn-1 span:hover:after {
  width: 100%;
}
.btn-1 i{opacity:0;margin-left:3px;transition:all 0.8s}
.btn-1:hover i{opacity:1;margin-left:17px}
.main_bottom_c-box{padding-right: 15px; padding-left: 15px;margin:0 auto;display:flex;justify-content:center;}
</style>
<script src="<?php echo G5_THEME_URL?>/jquery-2.2.0.min.js" ></script>
  <script src="<?php echo G5_THEME_URL?>/slick/slick.js" ></script>
 


            <!-- header -->
            <div class="row-offcanvas row-offcanvas-right">
                <!-- mobile container 모바일 메뉴는 tail.php -->
                <?php if($index){ ?>
                    <div id="index_swiper" class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-content">
                                    <div class="container">
                                        <div class="content text-left">
                                            <h1 class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.2" data-swiper-out-animation="0s" data-out-duration="1.2s">LEAGUE of LEGEND<br></h1>
                                           
                                            <div style="margin:30px auto;text-align:center;"><a href="#" class="btn btn-default animated btn_fir" data-swiper-animation="fadeInUp" data-duration="1.2s"  data-delay="0.8s" data-swiper-out-animation="0" data-out-duration="1.2s">무료로 플레이하기</a> </div> </div>
                                    </div>
                                </div>
                                <div class="overlay data-overlay" data-overlay="0,0,0,0.5"></div>
                                <div class="bg-dot  data-opacity" data-opacity="0"></div>
								
                                <div class="swiper-img slide-1 data-image"><video autoplay muted loop style="width:100%;height:100%;position:absolute;top:0px;object-fit:cover;z-index:10"><source src="<?php echo G5_THEME_URL?>/img/main/ylol_main_video.webm"></video></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-content v-content v-content02">
                                    <div class="container">
                                        <div class="content text-center">
                                            <h2 class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay=".2s" data-swiper-out-animation="0s" data-out-duration="1.2s">개발중인 내용</h2>
                                            <p class="animated h_scale" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay=".6s" data-swiper-out-animation="0s" data-out-duration="1.2s"></p>
                                            <div class="box_wrap animated rounded-lg" data-swiper-animation="fadeInUp" data-duration="1.8s" data-delay="0.2s" data-swiper-out-animation="0s" data-out-duration="1.2s">
                                                <div class="row">
                                                    <div class="col-md-7 col-sm-7 co-xs-12"><img src="<?php echo G5_THEME_URL?>/img/main/ylol_ind.jpg" class="img-responsive hidden-xs ylol_champ" style="object-fit:cover;border:0" ></div>
                                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                                        <div class="content">
                                                            <dl> <dt>GLASC · INDUSTRIES</dt>
                                                                <dd><img src="<?php echo G5_THEME_URL?>/img/main/ylol_main1.jpg" class="img-responsive hidden-lg hidden-md hidden-sm">글라스크 산업은 누구나 구매하고 접할 수 있는 아름다운 화학공학을 만들기위한 꿈을 가지고 시작했습니다.</dd> <a href="https://youtu.be/_1XgYqeEz3M" class="btn btn-default box-btn">자세히 보기</a>
                                                                <!--                   
                            <a href="#"  class="btn btn-default box-btn" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s">자세히 보기</a>--></dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay data-overlay" data-overlay="0,0,0,0.2"></div>
                                <div class="bg-dot  data-opacity" data-opacity="0"></div>
                                <div class=" swiper-img slide-2  data-image" data-background="<?php echo G5_THEME_URL?>/img/main/ylol_main1.jpg"></div>
                            </div>


                            <div class="swiper-slide">
                                <div class="swiper-content v-content v-content03">
                                    <div class="container">
                                        <div class="content text-center">
                                            <h2  class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay=".2s" data-swiper-out-animation="0s" data-out-duration="1.2s">패치노트</h2>
                                            <p  class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay=".6s" data-swiper-out-animation="0s" data-out-duration="1.2s"><a href="<?php echo G5_THEME_URL?>/gukbi/sub01.php" class="issue_all">모두보기<i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                            <div class="box_wrap">
                                                <div class="gall_box ">
                                                    <div class="col-3 animated" data-swiper-animation="fadeIn" data-duration="1s" data-delay=".6s" data-swiper-out-animation="0s" data-out-duration="1.2s">
                                                        <div class="img-box vertical-align">
                                                            <div class="imgs">
                                                                <div class="thumb_wrap">
                                                                    <div class="scale"><a href="<?php echo G5_THEME_URL?>/gukbi/sub03.php"><img src="<?php echo G5_THEME_URL?>/img/P1.jpg"></a> </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-box">
                                                                <h4>12.3 패치 노트</h4>
                                                                <p>2021년 12월 21일</p> <a href="<?php echo G5_THEME_URL?>/gukbi/sub03.php" class="btn btn-default box-btn2">자세히 보기 <i class="fas fa-plus"></i></a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 c-box animated" data-swiper-animation="fadeIn" data-duration="1.8s" data-delay=".7s" data-swiper-out-animation="0s" data-out-duration="1.2s">
                                                        <div class="img-box vertical-align">
                                                            <div class="imgs">
                                                                <div class="thumb_wrap">
                                                                    <div class="scale"><a href="<?php echo G5_THEME_URL?>/gukbi/sub03_1.php"><img src="<?php echo G5_THEME_URL?>/img/P2.jpg"></a> </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-box">
                                                                <h4>12.2 패치 노트</h4>
                                                                <p>2021년 12월 15일</p> <a href="<?php echo G5_THEME_URL?>/gukbi/sub03_1.php" class="btn btn-default box-btn2">자세히 보기 <i class="fas fa-plus"></i></a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 animated" data-swiper-animation="fadeIn" data-duration="2.2s" data-delay=".8s" data-swiper-out-animation="0s" data-out-duration="1.2s">
                                                        <div class="img-box vertical-align">
                                                            <div class="imgs">
                                                                <div class="thumb_wrap">
                                                                    <div class="scale"><a href="<?php echo G5_THEME_URL?>/gukbi/sub03_2.php"><img src="<?php echo G5_THEME_URL?>/img/P3.jpg"></a> </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-box">
                                                                <h4>12.1 패치 노트</h4>
                                                                <p>2021년 12월 7일</p> <a href="<?php echo G5_THEME_URL?>/gukbi/sub03_2.php" class="btn btn-default box-btn2">자세히 보기 <i class="fas fa-plus"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay data-overlay" data-overlay="0,0,0,0.5"></div>
                                <div class="bg-dot  data-opacity" data-opacity="0"></div>
                                <div class="swiper-img slide-2 data-image" data-background="<?php echo G5_THEME_URL?>/img/main/ylol_main_patch.jpg"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-content v-content v-content04">
                                    <div class="main_bottom_c-box">
										   <div class="box_wrap animated" data-swiper-animation="fadeInUp" data-duration="1.8s" data-delay="0.2s" data-swiper-out-animation="0s" data-out-duration="1.2s">
												<video autoplay muted loop style="border:0px solid #f0f0f0;width:70%;font-size:1.6em;border-radius:50%;box-shadow:5px 5px 5px black"><source src="<?php echo G5_THEME_URL?>/img/main/ylol_main_bottom.mp4"></video>
           
											</div>
											
                                        <div class="content text-center" style="height:auto;align-self:center;">
                                            <h2 class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay=".2s" data-swiper-out-animation="0s" data-out-duration="1.2s">전설의 시작</h2>
                                            <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay=".6s" data-swiper-out-animation="0s" data-out-duration="1.2s"><i>리그 오브 레전드가 처음이신가요?<br> 가장 인기 있는 게임 모드를 간략히 배워보세요.</i></p>
											<div style="text-align:center;"><a href="#" style="background:#D0A85C" class="btn btn-bottomp btn-default animated btn-1 box-btnb" data-swiper-animation="fadeInUp" data-duration="1.2s"  data-delay="0.8s" data-swiper-out-animation="0" data-out-duration="1.2s"><span>지금 시작하기</span><i class="fas fa-angle-double-right"></i></a><a href="#" class="btn btn-default btn-bottomf animated btn-1 btn-2 box-btnb" data-swiper-animation="fadeInUp" data-duration="1.2s"  data-delay="0.8s" data-swiper-out-animation="0" data-out-duration="1.2s"><span>무료 플레이하기</span><i class="fas fa-angle-double-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay data-overlay" data-overlay="0,0,0,0.3"></div>
                                <div class="bg-dot  data-opacity" data-opacity="0"></div>
                                <div class="swiper-img slide-2 data-image" data-background="<?php echo G5_THEME_URL?>/img/main/ylol_main_bottombg.jpg"></div>
                            </div>
                        </div>
                        <!-- pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <!--
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
--></div>
                
                    <?php }else{ ?>
                        <div class="s_visual_wrap">
                            <div class="slide">
                                <?php if($pageNum == 0){  //회사소개 일반페이지 일때 company.php 에서 pageNum 값이 0일때.. ?>
                                    <div class="content">
                                        <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">게임 정보</h1>
                                        <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100"></p>
                                    </div>
                                    <ul>
                                        <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/m1.jpg"> </li>
                                    </ul>
                                    <div class="overlay data-overlay" data-overlay="0, 0, 0, 0.1"></div>
                                    <?php }else if($pageNum == 1){ // 게시판형일시 switch.php 에서 pageNum 값이 2일때..  ?>
                                        <div class="content" >
                                            <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">새소식</h1>
                                            <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100"></p>
                                        </div>
                                        <ul>
                                            <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/banner4.jpg"> </li>
                                        </ul>
                                        <div class="overlay data-overlay" data-overlay="0, 0, 0, 0.1"></div>
                                        <?php }else if($pageNum == 2){ // 게시판형일시 switch.php 에서 pageNum 값이 3일때..  ?>
                                            <div class="content">
                                                <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">챔피언</h1>
                                                <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100"></p>
                                            </div>
                                            <ul style="border:1px solid red;">
                                                <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/banner1.jpg"></li>
                                            </ul>
                                            <div class="overlay data-overlay" data-overlay="0, 0, 0, 0.1"></div>
                                            <?php }else if($pageNum == 3){ // 게시판형일시 switch.php 에서 pageNum 값이 4일때..  ?>
                                                <div class="content">
                                                    <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">유니버스</h1>
                                                    <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100"></p>
                                                </div>
                                                <ul>
                                                    <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/banner2.jpg"></li>
                                                </ul>
                                                <div class="overlay data-overlay" data-overlay="0, 0, 0, 0.2"></div>
                                                <?php }else if($pageNum == 4){ // 게시판형일시 switch.php 에서 pageNum 값이 5일때..  ?>
                                                    <div class="content">
                                                        <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">고객지원</h1>
                                                        <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100"></p>
                                                    </div>
                                                    <ul>
                                                        <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/banner3.jpg"> </li>
                                                    </ul>
                                                    <div class="overlay data-overlay" data-overlay="0, 0, 0, 0.2"></div>
                                                    <?php }else{ ?>
                                                        <div class="content">
                                                            <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">프로젝트 멤버</h1>
                                                            <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100"></p>
                                                        </div>
                                                        <ul>
                                                            <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/main/svisual06.jpg"></li>
                                                        </ul>
                                                        <div class="overlay data-overlay" data-overlay="0, 0, 0, 0.2"></div>
                                                        <?php } ?>
                            </div>
                        </div>
                        <!-- 자동 서브메뉴 -->
                        <div id="breadcrumbs" class="sub_three_map_wrap">
                            <div class="container" style="padding:0;">
                                <div class="sub_three_map">
                                    <div class="row" style="padding: 0; margin: 0;">
                                        <div class="hidden-xs hidden-sm col-md-4 home"> 처음으로 </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6 sub_three_nav menus">
                                            <!-- 테스트 시작-->
                                            <ul>
                                                <li class="depth1 clickSlide">
                                                    <a href="javascript:;"></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6 sub_three_nav last">
                                            <ul>
                                                <li class="depth2 clickSlide">
                                                    <a href="javascript:;"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 자동 서브메뉴 마감  -->
                        <?php } ?>
                            <?php if(!$index){ ?>
                                <div id="sub_content">
                                    <div class="container_01">
                                        <div class="page-header">
                                           <div class="left_line-header"> </div><h1><?php if($bo_table){ echo $board['bo_subject'], $sca_name;}else if($depth1) { echo $depth1; }else{ echo "회원가입"; }?> </h1><div class="left_line-header"></div> </div>
                                        <?php } ?>