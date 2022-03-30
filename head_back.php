<div class="navbar-wrapper">
    <div class="container-fluid">
        <!-- <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="100"> 인덱스 BG안나오게-->
        <!-- <nav class="navbar navbar-default navbar-static-top"> 상단 메뉴 고정 안하기 -->
        <!-- <nav class="navbar navbar-default navbar-fixed-top"> 상단 메뉴 BG 바로 나오게 -->
        <!--  상단메뉴 affix적용 -->
         <nav class="navbar navbar-default navbar-fixed-top"> 
        <nav class="navbar navbar-default <?php if(!$index){ echo " navbar-sub "; }else{ echo "navbar-fixed-top "; } ?> js-fixed-header " <?php if(!$index){ echo "role='navigation' data-spy='affix' data-offset-top='100'";} ?>>
            <div class="container">
<!--                <div class="btn-group right-eng" role="group" aria-label="...">-->
                <div class="right-eng hidden-md">
                    <?php if (!$is_member) { ?>
                    <button type="button" class="btn btn-white" onclick="location.href='<?php echo G5_URL?>/bbs/login.php'"> Login</button>
                    <?php }else{ ?>  
                    <button type="button" class="btn btn-red" onclick="location.href='<?php echo G5_URL?>/bbs/logout.php'"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</button>
                    <?php } ?>
<!--                    <button type="button" class="btn btn-gray"><i class="fa fa-refresh" aria-hidden="true"></i> Search</button>-->
                </div>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed js-offcanvas-btn"> <span class="sr-only">Toggle navigation</span> <span class="hiraku-open-btn-line"></span> </button>
                    <a class="navbar-brand" href="<?php echo G5_URL?>"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="navbar-right">
                        <!-- 메인메뉴 -->
                        <!-- 모바일메뉴는 tail.php에 있습니다. -->
                        <nav id="nav_wrap">
                            <ul class="lnb <?php if(!$index){ echo " sub "; } ?>">
<!--                            <ul class="lnb">-->
                                <li> <a href="<?php echo G5_THEME_URL?>/company/company_01.php">회사소개</a>
                                    <ul class="subnav">
                                        <li><a href="<?php echo G5_THEME_URL?>/company/company_01.php">CEO인사말</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">회사소개</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/company/company_03.php">회사연혁</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/company/company_04.php">찾아오시는 길</a></li>
                                    </ul>
                                </li>
                                <li> <a href="<?php echo G5_THEME_URL?>/gukbi/sub01.php">국비안내</a>
                                    <ul class="subnav">
                                        <li><a href="<?php echo G5_THEME_URL?>/gukbi/sub01.php">국민내일배움카드</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/gukbi/sub02.php">취업성공패키지</a></li>
                                    </ul>
                                </li>
                                <li> <a href="<?php echo G5_THEME_URL?>/class/sub01.php">교육과정</a>
                                    <ul class="subnav">
                                        <li><a href="<?php echo G5_THEME_URL?>/class/sub01.php">전문가교육</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/class/sub02.php">레벨업과정(요일별)</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/class/sub03.php">미용사 일반 자격</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/class/sub04.php">뷰티네이션 마스터</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/class/sub05.php">과정평가형 NCS교육</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/class/sub06.php">소상공인교육</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/class/sub07.php">대학입시반교육</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/class/sub08.php">이용장,미용장 과정</a></li>
                                    </ul>
                                </li>
                                <li> <a href="<?php echo G5_THEME_URL?>/cert/sub01.php">자격증안내</a>
                                    <ul class="subnav">
                                        <li><a href="<?php echo G5_THEME_URL?>/cert/sub01.php">헤어미용</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/cert/sub02.php">피부미용</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/cert/sub03.php">메이크업</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/cert/sub04.php">네일</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/cert/sub05.php">이용장(기능장)</a></li>
                                        <li><a href="<?php echo G5_THEME_URL?>/cert/sub06.php">미용장(기능장)</a></li>
                                    </ul>
                                </li>
                                <li> <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">커뮤니티</a>
                                    <ul class="subnav">
                                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">공지사항</a></li>
                                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">자주묻는 질문</a></li>
                                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery">갤러리</a></li>
                                    </ul>
                                </li>
                                <li> <a href="<?php echo G5_URL?>/bbs/write.php?bo_table=free">온라인문의</a>
                                    <ul class="subnav">
                                        <li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=free">온라인문의</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="subnav-bg"></div>
                            <button class="btnOpenMenu"> <span class="bar-top"></span> <span class="bar-mid"></span> <span class="bar-btm"></span> </button>
                        </nav>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>