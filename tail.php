<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
<?php if(!$index){ ?>
</div> <!-- container end -->
</div> <!-- sub_content end -->
<?php } ?>
<?php if(!$index){ ?>
<div class="footer">
    <div class="container">
    <div class="footer-menu">
            <ul class="list-inline breadcrumb">
                <li class="hidden-sm hidden-xs"><a href="<?php echo G5_URL?>">처음으로</a></li>
                <li><a href="<?php echo G5_THEME_URL?>/company/company_01.php">회사소개</a></li>
                <li><a href="#popup1" class="text-yellow-600">개인정보호정책</a></li>
                <li><a href="#popup2">이용약관</a></li>
                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">고객센터</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <p class="logo"><a href="http://dreamit.dreamitbiz.com/"><img src="<?php echo G5_THEME_URL?>/img/ylol_lo4.png"></a></p> <address>
            <strong>YLOL PROJECT</strong>
                <br/>
            <strong>김범진 박도영 손병민 전다예 조여진 최원준 </strong> <br/>
            <p class="copyright">Copyright &copy; 2022 <strong>YLOL</strong> All Rights Reserved.</p>
        </address> </div>
</div>
<?php } ?>
<div class="sidebar-offcanvas" id="sidebar">
    <div class="js-offcanvas">
        <div class="title_wrap">
        <a href="http://dreamit.dreamitbiz.com/"><h3 style="width:100px;height:50px;border:0px solid red;background:url(<?php echo G5_THEME_URL?>/img/ylol_lo4.png)no-repeat;background-size:contain;"></h3></a><p class="close-btn js-close-btn"><i class="fas fa-times "></i></p>
        </div>
        <div off-canvas="slidebar-1 left reveal">
            <ul class="sidebar-menu">
                <li>
                    <a href="#">  <span>게임 정보</span> <i class="fa fa-angle-right pull-right"></i> </a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_THEME_URL?>/company/company_01.php">LOL 소개</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo G5_THEME_URL?>/gukbi/sub01.php"> <span>새소식</span> <i class="fa fa-angle-right pull-right"></i> </a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_THEME_URL?>/gukbi/sub01.php">패치노트</a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/gukbi/sub02.php">e-sport</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online"> <span>챔피언</span> <i class="fa fa-angle-right pull-right"></i></a>
                   <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_THEME_URL?>/class/sub01.php">챔피언 소개</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo G5_THEME_URL?>/cert/sub01.php"> <span>유니버스</span> <i class="fa fa-angle-right pull-right"></i></a>
                   <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_THEME_URL?>/cert/sub01.php">시네마틱 영상</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online"> <span>고객지원</span> <i class="fa fa-angle-right pull-right"></i></a>
                   <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">공지사항</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">문의하기</a></li>
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qna">자주묻는 질문</a></li>
                    </ul>
                </li>
                <li> <a href="<?php echo G5_THEME_URL?>/int/int1.php"><span>프로젝트 멤버</span> <i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="<?php echo G5_THEME_URL?>/int/int1.php">멤버 소개</a></li>
                                     <!-- <li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">모드 소개</a> </li>
                                    <li><a href="<?php echo G5_THEME_URL?>/company/company_03.php">학원연혁</a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/company/company_04.php">찾아오시는 길</a></li>-->
                                </ul>
                            </li>
            </ul>
<!--
            <div class="btn_wrap">
                <a href="<?php echo G5_URL?>/bbs/login.php" class="btn btn-pack">login</a>
                <a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online" class="btn btn-pack blue">온라인 문의</a>
            </div>
-->
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <?php if($is_member){ ?>
                <a href="<?php echo G5_URL?>/bbs/logout.php" class="btn btn btn-pack">logout</a>
                <?php }else{ ?>
                <a href="<?php echo G5_URL?>/bbs/login.php" class="btn btn btn-pack">login</a>
                <?php } ?>

              <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qna" class="btn btn btn-pack">FAQ</a>
                <div class="copy">RIOT GAMES copyright@ 2022 </div>
            </div>

        </div>

    </div>
</div>
</div><!-- mobile container end -->

<button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
<script type="text/javascript">
    $("a[href^='#']").click(function(event) {
    event.preventDefault();
    var target = $(this.hash);
    $('html, body').animate({scrollTop: target.offset().top}, 500);
});
</script>

<!-- 레이어 팝업 -->
<div id="popup1" class="overlay-popup">
	<div class="popup-content">
		<h2>개인정보보호정책</h2>
		<a class="close" href="#0">&times;</a>
		<div class="content">
			내용이 나옵니다.
		</div>
	</div>
</div>
<div id="popup2" class="overlay-popup">
	<div class="popup-content">
		<h2>이용안내</h2>
		<a class="close" href="#0">&times;</a>
		<div class="content">
			내용이 나옵니다.
		</div>
	</div>
</div>
<!-- mobile container end -->



    <script>
    var swiperAnimation = new SwiperAnimation();
    var swiper = new Swiper('.swiper-container', {
        /*
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect : 'fade',
        */

        mousewheelControl: true,
        mousewheel: true,
        mousewheelForceToAxis: true,
        autoHeight: true,
        direction: 'vertical',
        loop: false,
        speed: 1000,
        autoplay: false,

        pagination: {
        el: '.swiper-pagination',
            clickable: true, // 클릭온
//        type: 'fraction', //숫자로
      },
        on: {
                init: function () {
                    swiperAnimation.init(this).animate();
                }
                , slideChange: function () {
                    swiperAnimation.init(this).animate();
                }


            },
    });
    </script>
<script type="text/javascript">
new GambitSmoothScroll();
</script>
<script>
var topDepth = '<?php echo $pageNum ;?>';
var subDepth = '<?php echo $subNum ;?>';
</script>
<?php if($index){ ?>
<!--[if lt IE 10]-->
<script type="text/javascript" src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/load/placeholders.js"></script>
<!--[endif]-->
<?php } ?>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/scrolla/scrolla.jquery.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/bootstrap/js/bootstrap.min.js"></script>
<script src='<?php echo G5_THEME_URL?>/wzd_lib/plugin/mobile-menu/hiraku.js'></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/mobile-menu/index.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/mobile-menu/sidebar-menu.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/js/wiz.js"></script>

<script>
    $.sidebarMenu($('.sidebar-menu'))
</script>
<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php include "online_form.php";?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
