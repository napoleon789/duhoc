<!DOCTYPE html>
<html>
    <head>
	
	<?php 
	drupal_goto("http://tinhta.com");
	die;
	     global $user;
	   if($user -> uid < 1){
    drupal_goto("http://tinhta.com");
	die;
	}
	$node = node_load(arg(1));$image = file_create_url($node -> field_image['und'][0]['uri']);$style_uri = $node -> field_image['und'][0]['uri'];
	$time = $node -> created;
	$timnow = time() - 43200;
	$timelimit = time() - 604800;
    global $user;
	if($user -> uid ==1)
	   echo '<div><a href ="/node/'.$node ->nid.'/edit">Edit</a></div>';
	?>
 <?php
  $hoten = $node -> field_hoten['und'][0]['value'];
  if($node -> field_sex['und'][0]['value'] == 1)
    $gt = 'anh ';
  else
    $gt = 'chị ';
   $hoten = $gt.$hoten;
 if($node -> field_bandang['und'][0]['value'] == 1)
   $bandang = 'học tại ';
 else
   $bandang = 'công tác tại ';
 $cty = $node -> field_congtac['und'][0]['value'];
 $cty = $bandang.$cty;
 $quehuong = $node -> field_quequan['und'][0]['value'];

?>
 
      <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-37904496-1']);
        _gaq.push(['_trackPageview']);
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      </script>
      <style> #page{position: inherit !important;}</style>
<title>Tiếp viên hàng không xinh đẹp Trung Quốc đính hôn với chàng trai Việt - VnExpress</title>
<meta charset="utf-8" />
<meta property="og:image" content="<?php echo $image;?>" />
<meta property="fb:admins" content="100001246808416" />
<meta name="copyright" content="Copyright 2012 -2013 tinhta.com" />
<link rel="shortcut icon" href="http://tinhta.com/sites/all/themes/framework/favicon.ico" type="image/vnd.microsoft.icon" />
      <link rel="canonical" href="<?php echo drupal_get_path_alias('node/'.$node->nid) ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="
Gần đây, cư dân mạng Trung Quốc đang xôn xao chuyện tình cảm của nữ tiếp viên hàng không xinh đẹp Zhao Yalu . Người bạn trai đã khiến các fan của Zhao Yalu hết sức bất ngờ.
" />
<link rel="shortlink" href="/node/5673" />
<meta name="description" content=" Gần đây, cư dân mạng Trung Quốc đang xôn xao chuyện tình cảm của nữ tiếp viên hàng không xinh đẹp Zhao Yalu . Người bạn trai đã khiến các fan của Zhao Yalu hết sức bất ngờ." />
<meta name="news_keywords" content="xinh đẹp, bí quyết, giữ chàng, phụ nữ" />
<meta name="robots" content="follow, index" />
<meta property="og:title" content="Tiếp viên hàng không xinh đẹp Trung Quốc đính hôn với chàng trai Việt - VnExpress" />
<meta name="alexaVerifyID" content="xb9b4tMOTq5SBER0aTS_4n9Ik6g" />

 
  <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="http://st.f3.vnecdn.net/responsive/c/v9/general.css" media="all" />
        <link rel="stylesheet" href="http://st.f2.giaitri.vnexpress.net/c/v4/giaitri.css" media="all" />
                <link href="http://st.f2.giaitri.vnexpress.net/c/v4/jquery.fancybox.css" media="screen" rel="stylesheet" type="text/css" />
                        <script language="javascript" type="text/javascript">
            var interactions_url    = 'http://interactions.vnexpress.net';
            var base_url            = 'http://giaitri.vnexpress.net';
            var css_url             = 'http://st.f2.giaitri.vnexpress.net/c/v4';
            var img_url             = 'http://st.f1.giaitri.vnexpress.net/i/v1';
            var SITE_ID             = 1002691;
            var vne_url             = 'http://vnexpress.net';
            var device_env          = 4;
            var domain_giaitri      = 'http://giaitri.vnexpress.net';
            document.domain         = 'vnexpress.net';
        </script>
        <!-- JavaScript -->

		<script type="text/javascript" src="http://st.f2.vnecdn.net/responsive/libs/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="http://st.f2.vnecdn.net/responsive/j/v10/utils/utils.js"></script>
                <script language="javascript" type="text/javascript" src="http://st.f3.giaitri.vnexpress.net/j/v2/jquery.fancybox.js"></script>
                <script language="javascript" type="text/javascript" src="http://st.f3.giaitri.vnexpress.net/j/v2/gt.utility.js"></script>
        <script language="javascript" type="text/javascript" src="http://st.f2.vnecdn.net/responsive/j/v10/interactions/parser_v2.js"></script>
        <script language="javascript" type="text/javascript" src="http://st.polyad.net/library/2014/GiaiTriShowAds.js"></script>

    </head>
    <body>
        <!--Check is switch-->
                <div class="block_more_info" id="box_col_left">
            <div class="box_width_common">
                <div class="btn_control_col_left"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_left_panel.gif" alt="" /></div>
                <div class="block_scoll_menu">
					<div class="block_search">
						<form action="http://timkiem.vnexpress.net/giaitri" method="get" target="_blank" id="search">
							<input type="text" name="q" maxlength="80" class="input_search" value="Tìm kiếm" onfocus="if (this.value == this.defaultValue) this.value = '';" onblur="if (this.value == '') this.value = this.defaultValue;" />
							<input type="submit" value="" class="icon_menu_phone btn_search" />
						</form>
						<div class="clear">&nbsp;</div>
					</div>
                    <ul class="list_item_panel">
                        <li><a href="http://vnexpress.net/" class="bg_666"><span class="icon_menu_phone ico_menu_01">&nbsp;</span>Trang chủ</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/thoi-su/"><span class="icon_menu_phone ico_menu_04">&nbsp;</span>Thời sự</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/goc-nhin/"><span class="icon_menu_phone ico_menu_03">&nbsp;</span>Góc nhìn</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/the-gioi/"><span class="icon_menu_phone ico_menu_05">&nbsp;</span>Thế giới</a></li>
                        <li><a href="http://kinhdoanh.vnexpress.net/"><span class="icon_menu_phone ico_menu_06">&nbsp;</span>Kinh doanh</a></li>
                        <li class="active"><a href="http://giaitri.vnexpress.net/"><span class="icon_menu_phone ico_menu_07">&nbsp;</span>Giải trí</a></li>
                        <li><a href="http://thethao.vnexpress.net/"><span class="icon_menu_phone ico_menu_08">&nbsp;</span>Thể thao</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/phap-luat/"><span class="icon_menu_phone ico_menu_09">&nbsp;</span>Pháp luật</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/giao-duc/"><span class="icon_menu_phone ico_menu_25">&nbsp;</span>Giáo dục</a></li>
                        <li><a href="http://doisong.vnexpress.net/"><span class="icon_menu_phone ico_menu_10">&nbsp;</span>Đời sống</a></li>
                        <li><a href="http://dulich.vnexpress.net/"><span class="icon_menu_phone ico_menu_23">&nbsp;</span>Du lịch</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/khoa-hoc"><span class="icon_menu_phone ico_menu_11">&nbsp;</span>Khoa học</a></li>
                        <li><a href="http://sohoa.vnexpress.net/"><span class="icon_menu_phone ico_menu_12">&nbsp;</span>Số hóa</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/oto-xe-may/"><span class="icon_menu_phone ico_menu_13">&nbsp;</span>Xe</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/cong-dong/"><span class="icon_menu_phone ico_menu_14">&nbsp;</span>Cộng đồng</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/tam-su/"><span class="icon_menu_phone ico_menu_15">&nbsp;</span>Tâm sự</a></li>
                        <li><a href="http://video.vnexpress.net/"><span class="icon_menu_phone ico_menu_17">&nbsp;</span>Video</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/cuoi/"><span class="icon_menu_phone ico_menu_19">&nbsp;</span>Cười</a></li>
                        <li><a href="http://raovat.vnexpress.net/"><span class="icon_menu_phone ico_menu_16">&nbsp;</span>Rao vặt</a></li>
                        <li><a class="bg_666" href="http://vnexpress.net/24h-qua/"><span class="icon_menu_phone ico_menu_24">&nbsp;</span>24h qua</a></li>
                                                <li><a class="bg_666" href="http://vnexpress.net/contactus?p=giaitri"><span class="icon_menu_phone ico_menu_21">&nbsp;</span>Liên hệ Tòa soạn</a></li>
                        <li class="end"><a class="bg_666" href="http://vnexpress.net/contact.htm"><span class="icon_menu_phone ico_menu_22">&nbsp;</span>Thông tin Tòa soạn</a></li>
                    </ul>
                    <div class="coppy_right_left width_common">
                        <div class="txt_coppy_right">
                            <p>&copy; Copyright 1997 - VnExpress.net, All rights reserved.</p>
                            <p>&reg; VnExpress giữ bản quyền nội dung trên website này.</p>
                        </div>
                        <div class="txt_lienhe"> Hotline:<br />
                            <a href="tel:012388801238">0123.888.0123 (Hà Nội)</a><br />
                            <a href="tel:01292333555">0129.233.3555 (TP HCM) </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear">&nbsp;</div>
        </div>
        <div id="page">
            <div id="wrapper_header">
                <div id="header">
                    <div class="width_common">
                        <div class="logovne">
                            <a href="http://vnexpress.net" title="vnexpress.net"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/logo.png" alt="vnexpress.net" class="img_logo" /></a>
                            <div class="right ipad_header">
                                <div class="block_icon_menu_header right">
                                    <div class="left block_location_tt">
                                        <a class="txt_location_topbar" href="javascript:;" onclick="thoitiet.lightbox();"></a>
                                        <img src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif" class="icon_thoitiet_small" alt="" id="icon_thoitiet_small" />
                                        <span class="txt_doC_den"></span>
                                   </div>
                                   <a href="http://video.vnexpress.net/"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/icons/icon_videomenu.gif" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear">&nbsp;</div>
                </div>
            </div>
            <!-- InstanceBeginEditable name="header web" -->
            <div id="header_web" class="width_common">
                <div id="header_main">
                    <div class="header_logo width_common">
                        <a href="http://vnexpress.net"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_logo_vne_web.gif" alt=""  class="left logo_web"/></a>
                        <div class="banner_728x90 right">
                                <style>
          .tinhta1 { width: 320px; height: 50px; }
          @media(min-width: 500px) { .tinhta1 { width: 468px; height: 60px; } }
          @media(min-width: 800px) { .tinhta1 { width: 728px; height: 90px; } }
        </style>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Tinhta#1 -->
        <ins class="adsbygoogle tinhta1"
             style="display:inline-block"
             data-ad-client="ca-pub-5490129588548111"
             data-ad-slot="9735660289"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
                        </div>
                    </div>
                    <ul id="menu_web" class="width_common">
                        <li><a href="http://vnexpress.net"><img class="logo_icon_home" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif" alt="" /></a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/thoi-su" class="mnu_thoisu">Thời sự</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/goc-nhin" class="mnu_gocnhin">Góc nhìn</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/the-gioi" class="mnu_thegioi">Thế giới</a></li>
                        <li><a href="http://kinhdoanh.vnexpress.net" class="mnu_kinhdoanh">Kinh doanh</a></li>
                        <li class="active"><a href="http://giaitri.vnexpress.net" class="mnu_giaitri">Giải trí</a></li>
                        <li><a href="http://thethao.vnexpress.net" class="mnu_thethao">Thể thao</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/phap-luat" class="mnu_phapluat">Pháp luật</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/giao-duc" class="mnu_giaoduc">Giáo dục</a></li>
                        <li><a href="http://doisong.vnexpress.net" class="mnu_doisong">Đời sống</a></li>
                        <li><a href="http://dulich.vnexpress.net" class="mnu_dulich">Du lịch</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/khoa-hoc" class="mnu_khoahoc">Khoa học</a></li>
                        <li><a href="http://sohoa.vnexpress.net" class="mnu_sohoa">Số hóa</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/oto-xe-may" class="mnu_xe">Xe</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/cong-dong" class="mnu_bandoc">Cộng đồng</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/tam-su" class="mnu_tamsu">Tâm sự</a></li>
                        <li><a href="http://video.vnexpress.net/" class="mnu_video">Video</a></li>
                        <li class="end"><a href="http://vnexpress.net/tin-tuc/cuoi" class="mnu_cuoi">Cười</a></li>
                        <li class="item_have_more_menu">
                            <a class="end" href="javascript:;"><img class="arrow_lastest_menu" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif" /></a>
                            <div class="sub_main_menu_item" style="display: none;">
                                <a href="http://raovat.vnexpress.net">Rao vặt</a>
                            </div>
                        </li>
                    </ul>
                    <div class="mid_header width_common">
                        <ul id="breakumb_web">
                                                        <li ><a href="http://giaitri.vnexpress.net/tin-tuc/gioi-sao">Giới sao</a></li>
                                                        <li ><a href="http://giaitri.vnexpress.net/tin-tuc/thoi-trang">Thời trang</a></li>
                                                        <li ><a href="http://giaitri.vnexpress.net/tin-tuc/lam-dep">Làm đẹp</a></li>
                                                        <li ><a href="http://giaitri.vnexpress.net/tin-tuc/phim">Phim</a></li>
                                                        <li ><a href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh">Truyền hình</a></li>
                                                        <li ><a href="http://giaitri.vnexpress.net/tin-tuc/sach">Sách</a></li>
                                                        <li ><a href="http://giaitri.vnexpress.net/tin-tuc/nhac">Nhạc</a></li>
                                                        <li class="active"><a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat">Sân khấu - Mỹ thuật</a></li>
                                                        <li ><a href="http://giaitri.vnexpress.net/tin-tuc/cong-dong">Cộng đồng</a></li>
                                                        <li ><a href="http://video.vnexpress.net/giai-tri">Video</a></li>
                                                        <li ><a href="http://giaitri.vnexpress.net/thu-vien">Thư viện</a></li>
                                                    </ul>
                        <div class="right">
                                                            <a href="http://vnexpress.net/24h-qua/" class="txt_24h">24h qua</a>
                                                        <a href="http://vnexpress.net/rss" class="img_rss left"><img src="http://st.f2.giaitri.vnexpress.net/c/v4/images/graphics/img_rss_2.gif" alt="" /></a>
                                                        <div class="block_search_web left">
                                <form id="search" target="_blank" method="get" action="http://timkiem.vnexpress.net/giaitri">
                                    <input type="text" class="txt_input" maxlength="80" value="" name="q"/>
                                    <input type="submit" class="icon_seach_web" value=""/>
                                </form>
                            </div>
                        </div>

                                                    <div class="block_breakumb_left" style="width: 670px;">
                                <ul class="list_arrow_breakumb">
                                    <li class="start have_cap2"><a href="http://giaitri.vnexpress.net/">Giải trí</a><span class="arrow_breakumb">&nbsp;</span></li>
                                    <li class="cap2"><a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat">Sân khấu - Mỹ thuật</a><span class="arrow_breakumb">&nbsp;</span></li>                                </ul>
                                                                    <ul class="sub_breakumn">
                                                                                    <li class="active end"><a href="/tin-tuc/san-khau-my-thuat/my-thuat">Mỹ thuật</a></li>
                                                                            </ul>
                                                            </div>
                                            </div>
                </div>
            </div>
            <!-- InstanceEndEditable -->

            <!--Body Content-->
            <div id="wrapper_container">
                <div id="container">
                    <div class="width_common">
                        <div class="breakumb_timer width_common">
                            <div class="timer_header">
                                <ul>
                                                                        <li class="start have_cap2"><a href="http://giaitri.vnexpress.net">Giải trí</a><span class="arrow_breakumb">&nbsp;</span></li>
                                                                        <li class="cap2"><a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat">Mỹ thuật</a><span class="arrow_breakumb">&nbsp;</span></li>
                                                                    </ul>
                            </div>
                            <div class="rss right">
                                                                <div class="block_timer left" id="clockDiv1"></div>
                                                                <a href="javascript:;" class="img_arrow_timer">&nbsp;</a>
                            </div>
                            <div class="block_show_breakumb" style="display: none;">
                                <ul>
                                                                            <li><a href="http://giaitri.vnexpress.net/tin-tuc/gioi-sao/">Giới sao</a></li>
                                                                            <li><a href="http://giaitri.vnexpress.net/tin-tuc/thoi-trang/">Thời trang</a></li>
                                                                            <li><a href="http://giaitri.vnexpress.net/tin-tuc/lam-dep/">Làm đẹp</a></li>
                                                                            <li><a href="http://giaitri.vnexpress.net/tin-tuc/phim/">Phim</a></li>
                                                                            <li><a href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/">Truyền hình</a></li>
                                                                            <li><a href="http://giaitri.vnexpress.net/tin-tuc/sach/">Sách</a></li>
                                                                            <li><a href="http://giaitri.vnexpress.net/tin-tuc/nhac/">Nhạc</a></li>
                                                                            <li><a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/">Sân khấu - Mỹ thuật</a></li>
                                                                            <li><a href="http://giaitri.vnexpress.net/tin-tuc/cong-dong/">Cộng đồng</a></li>
                                                                            <li><a href="http://video.vnexpress.net/giai-tri/">Video</a></li>
                                                                            <li><a href="http://giaitri.vnexpress.net/thu-vien/">Thư viện</a></li>
                                                                    </ul>
                           </div>
                        </div>
                        <div class="width_common line_col" id="detail_page">
    <div class="left" id="col_660">
        <div id="box_details_news" class="box_width_common">
            <div class="w670 left">
                <div class="main_content_detail width_common">
                    <div class="width_common line_col_480 space_bottom_20">
                        <!--Col 480 left: render detail/box/block_col_480_left.phtml-->
                        <div class="block_col_480">
                            <div id="left_calculator">
                                <div class="block_timer_share">
                                    <div class="block_timer left txt_666">
                                        Thứ bảy, 20/9/2014<span class="drash"> | </span>07:54 GMT+7                                    </div>
                                    <div class="block_share right">
                                        <a class="btn_facebook" rel="nofollow" href="javascript:;" title="Chia sẻ bài viết lên facebook"><img alt="Chia sẻ bài viết lên facebook" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/icon_fb.gif" /></a>
<a class="btn_twitter" rel="nofollow" href="javascript:;" id="twitter" data-url="#" title="Chia sẻ bài viết lên twitter"><img alt="Chia sẻ bài viết lên twitter" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/icon_tw.gif" /></a>
<a class="btn_google" rel="nofollow" href="javascript:;" title="Chia sẻ bài viết lên google+"><img alt="Chia sẻ bài viết lên google+" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/icon_google.gif" /></a>
<span class="drash_share">|</span>
<a rel="nofollow" href="javascript:;" onclick="GT_VNE.printPopup();" id="print_content" title="Print"><img alt="Print" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/icon_print.gif" alt="" /></a>
<a rel="nofollow" href="javascript:;" id="email_content" title="Email" class="login_5"><img alt="Email" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/icon_letter.gif" alt="" /></a>                                    </div>
                                </div>
                                <div class="div-fbook width_common title_div_fbook">
                                    <div class="block_timer left txt_666">Thứ bảy, 20/9/2014<span class="drash"> | </span>07:54 GMT+7</div>
                                </div>
                                <div class="title_news">
                                    <h1>Tiếp viên hàng không xinh đẹp Trung Quốc đính hôn với chàng trai Việt</h1>
                                </div>
                                <div class="short_intro txt_666">
Gần đây, cư dân mạng Trung Quốc đang xôn xao chuyện tình cảm của nữ tiếp viên hàng không xinh đẹp Zhao Yalu . Người bạn trai đã khiến các fan của Zhao Yalu hết sức bất ngờ.
.</div>
                                <!--Tin lien quan-->
                                                                <div class="relative_new">
                                    <ul class="list_news_dot_3x3_300">
                                        <li>
                                        <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-3035328.html" title="Cuộc thi Ảnh Nghệ thuật VnExpress 2014">Cuộc thi Ảnh Nghệ thuật VnExpress 2014</a>                                        </li>
                                    </ul>
                                </div>
								  <div class="anh_nv" style="text-align: center">
          <img src="<?php print image_style_url('node_top_detail', $style_uri) ?>">
          <div style="text-align: center;font-style: italic;font-size: 11px;">Ảnh bạn trai của  Zhao Yalu - Ảnh do nhân vật cung cấp</div>
        </div><br />
								<div style="font-size: 13px;line-height: 18px;">
								<p>Zhao Yalu là 1 nữ tiếp viên xinh đẹp của hãng hàng không Sơn Đông. Cô nhanh chóng trở nên nổi tiếng sau khi cô tham gia giải bóng đá nữ vào đợt World Cup 2010. Nụ cười tỏa nắng của cô được đánh giá là có thể làm ấm thêm mùa đông lạnh giá. Cô là 1 trong 10 nữ tiếp viên sáng giá nhất từng xuất hiện trên bìa lịch hàng không 2011 .</p><p>Các fan của Zhao Yalu luôn nghĩ rằng bạn trai của cô phải là một hot boy trong giới Showbiz hay một doanh nhân giàu có nào đó.</p><p>&nbsp;</p><p>Nhưng thật bất ngờ, trên chương trình “Trò chuyện cùng sao” &nbsp;gần đây, Zhao Yalu đã công khai chuyện tình của của cô với 1 chàng trai Việt Nam. &nbsp;Cô chia sẻ, trong 1 lần du lịch tới Việt Nam, cô đã vô tình gặp <?php echo $hoten;?> và tình cảm đã nảy nở. Họ đã bí mật liên lạc với nhau cho tới ngày hôm qua. Cô cho biết ngày kia cô và <?php echo $hoten;?> sẽ làm đám cưới nên không cần phải bí mật nữa.</p><p>Zhao Yalu bật mí, người yêu cô &nbsp;<?php echo $cty;?> Quê ở <?php echo $quehuong;?> &nbsp;Và anh ấy đang chuẩn bị lên đường sang Sơn Đông để họ tiến hành lễ cưới. Ngoài ra cô không chia sẻ gì thêm nữa.</p><br />
                                  <div style="text-align: center">
                                  <img src="http://www.dulichvietnam.com.vn/data/M%E1%BB%99t%20n%E1%BB%AF%20ti%E1%BA%BFp%20vi%C3%AAn%20h%C3%A0ng%20kh%C3%B4ng%20c%E1%BB%A7a%20h%C3%A3ng%20Sichuan%20Airlines%20(Trung%20Qu%E1%BB%91c).jpg" style="width: 450px;height: auto;"></div>
                                  <div style="text-align: center;font-style: italic;font-size: 11px;">Nữ tiếp viên xinh đẹp trung quốc Zhao Yalu</div>
                                  <p>&nbsp;</p><p>Nhận được tin này chúng tôi đã ngay lập tức liên lạc với <?php echo $hoten;?> , nhưng số điện thoại của anh hiện thời không liên lạc được. Chúng tôi cũng liên lạc với bạn bè và người thân của anh . Nhưng cũng không ai liên lạc được với anh từ ngày hôm qua. &nbsp;</p><p>Hiện chúng tôi đang trên đường về quê <?php echo $hoten; ?> ở <?php echo $quehuong;?>&nbsp; để tìm hiểu sự &nbsp;việc. Thông tin chi tiết về chàng trai Việt may mắn sẽ được chúng tôi cập nhật sớm nhất</p><p>&nbsp;</p>
                                </div>
								
								<?php if($time < $timnow):?> 
									
								<div style ="color:red ;font-style:italic;font-size:14px;line-height:20px;"> Bài viết chỉ là 1 ứng dụng giải trí. Bất kỳ ai cũng có thể tạo ra được bài báo như vậy cho chính mình bằng cách click <a style ="background:yellow;font-size:24px;" href ="http://tinhta.com/node/add/thao-luan"> vào đây</a>. Sau 8h, kể từ lúc bắt đầu tạo bài, dòng cảnh báo này sẽ xuất hiện</div><br />
								<?php endif;?>
								<?php if($time < $timelimit) {
								  drupal_goto("http://tinhta.com/node/add/thao-luan");
								  die;
								  }
								?>
                                <!-- Javascript Parser -->
                                <script type="text/javascript">
                                    if ( typeof(Parser) != "undefined" ) {
                                        Parser.SITE_URL     = "http://vnexpress.net";
                                        Parser.URL          = "http://st.f2.vnecdn.net/responsive/j/v10";
                                        Parser.FLASH_URL    = "http://st.f4.giaitri.vnexpress.net/f/v1";
                                        Parser.SITE_ID      = 1002691;
                                        Parser.AUTO_PLAY    = 1;
                                        Parser.parseAll();
                                    }
                                    //parse video vne old
                                    if ( typeof(parserOldVideo) != 'undefined' ) {
                                        parserOldVideo();
                                    }
                                    //ads
                                    if ( typeof(common.parserAdsFullScreen) != 'undefined' ) {
                                        common.parserAdsFullScreen();
                                    }
                                    //resize images
                                    if ( typeof(common.resizeImageDetail) != 'undefined' ) {
                                        common.resizeImageDetail();
                                        $(window).resize(function() {
                                            common.delayFireOnce(1000).done(function() {
                                                common.resizeImageDetail();
                                            });
                                        });
                                    }
                                </script>
                                <div class="social_share width_common" id="social_like">
								   
   </div>
<div class="div-fbook width_common">
    <div class="block_btn_like left term_ga" id ="term_ga"></div>
    <div class="block_share_icon right">
        <a class="btn_facebook" rel="nofollow" href="javascript:;" title="Chia sẻ bài viết lên facebook"><img alt="Chia sẻ bài viết lên facebook" src="http://st.f1.giaitri.vnexpress.net/i/v1/icons/social_fb.gif" /></a>
        <a class="btn_twitter" rel="nofollow" href="javascript:;" id="twitter" data-url="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-vnexpress-thu-hut-hon-6-500-tac-pham-sau-nua-thang-3077670.html" title="Chia sẻ bài viết lên twitter"><img alt="Chia sẻ bài viết lên twitter" src="http://st.f1.giaitri.vnexpress.net/i/v1/icons/social_tweet.gif" /></a>
        <a class="btn_google" rel="nofollow" href="javascript:;" title="Chia sẻ bài viết lên google+"><img alt="Chia sẻ bài viết lên google+" src="http://st.f1.giaitri.vnexpress.net/i/v1/icons/social_google.gif" /></a>
        <a rel="nofollow" href="mailto:?Subject=Cuộc thi Ảnh VnExpress thu hút hơn 6.500 tác phẩm sau nửa tháng&body=Chỉ trong hai tuần kể từ ngày phát động, Ban tổ chức đã nhận được hơn 6.500 tác phẩm của gần 2.000 tác giả. Cuộc thi tiếp tục nhận ảnh tham dự cho tới 12h ngày 27/10.%0D%0ALink bài viết: http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-vnexpress-thu-hut-hon-6-500-tac-pham-sau-nua-thang-3077670.html" title="Email cho bạn bè"><img alt="Email cho bạn bè" src="http://st.f1.giaitri.vnexpress.net/i/v1/icons/social_letter.gif" /></a>
    </div>
</div>                   

<div id = "wrapper_header">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Tinhta@320x50mobi -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:50px"
     data-ad-client="ca-pub-5490129588548111"
     data-ad-slot="8919905081"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
             <div class="width_common mg_bottom_20" id="box_tinlienquan">
                                    <div class="title_box_category style_02">
                                        <div class="txt_main_category"><a href="http://giaitri.vnexpress.net/cuoc-thi-anh-nghe-thuat-vnexpress-2014/topic-18047.html">Tin liên quan</a></div>
                                    </div>
                                    <div class="content_box_category width_common">
                                                                                <ul class="list_news_dot_3x3">
                                                                                        <li>
                                                <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-ra-mat-website-3076105.html" title="'Cuộc thi Ảnh Nghệ thuật VnExpress 2014' ra mắt website">'Cuộc thi Ảnh Nghệ thuật VnExpress 2014' ra mắt website</a> <span class="txt_666">(8/9)</span>
                                                <span class="no_wrap">
                                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-ra-mat-website-3076105.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3076105"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                                </span>
                                            </li>
                                                                                        <li>
                                                <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/phong-canh-va-khoanh-khac-nguon-de-tai-vo-tan-trong-nhiep-anh-3037523.html" title="Phong cảnh và Khoảnh khắc - nguồn đề tài vô tận trong nhiếp ảnh">Phong cảnh và Khoảnh khắc - nguồn đề tài vô tận trong nhiếp ảnh</a> <span class="txt_666">(5/9)</span>
                                                <span class="no_wrap">
                                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/phong-canh-va-khoanh-khac-nguon-de-tai-vo-tan-trong-nhiep-anh-3037523.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3037523"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                                </span>
                                            </li>
                                                                                    </ul>
                                        <div class="block_view_more">
                                            <a class="txt_view_more" href="http://giaitri.vnexpress.net/cuoc-thi-anh-nghe-thuat-vnexpress-2014/topic-18047.html" title="Xem thêm">Xem thêm</a>
                                        </div>
                                                                            </div>
                                </div>
                                                                <div class="clear">&nbsp;</div>
                            </div>
                                                        <!-- Article Banner 468x90-->
                            <div class="banner_468 banner_common">
                                <div class="banner_468x90" style="text-align: center;">
                                   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Tinhte#300x250 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5490129588548111"
     data-ad-slot="5966438688"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                                </div>
                            </div>
                                                    </div>

                        <!--Col 160 right: render detail/box/block_col_160_right.phtml-->
                        <div class="block_col_160 right">
                            <div id="right_calculator">
                                                            <div class="box_category width_common style_03" id="box_xemnhieunhat">
                                    <div class="title_box_category width_common">
                                        <div class="txt_main_category"><a href="javascript:;">Xem nhiều nhất</a></div>
                                    </div>
                                    <div class="content_box_category width_common">
                                        <ul class="list_new_160">
                                            <li>
                                                                                                <div class="thumb_160 width_common">
                                                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-ra-mat-website-3076105.html" title="'Cuộc thi Ảnh Nghệ thuật VnExpress 2014' ra mắt website">
                                                        <img alt="'Cuộc thi Ảnh Nghệ thuật VnExpress 2014' ra mắt website" src="http://s.f9.img.vnexpress.net/2014/09/08/anh-top-3076-1410167732_180x108.jpg">
                                                    </a>
                                                                                                    </div>
                                                                                                <strong>
                                                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-ra-mat-website-3076105.html" title="'Cuộc thi Ảnh Nghệ thuật VnExpress 2014' ra mắt website">
                                                        'Cuộc thi Ảnh Nghệ thuật VnExpress 2014' ra mắt website                                                    </a>
                                                    <span class="no_wrap">
                                                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-ra-mat-website-3076105.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3076105"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                                    </span>
                                                </strong>
                                            </li>
                                                                                                <li >
                                                        <strong>
                                                            <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/ai-nhu-khoc-khi-ra-mat-dia-diem-moi-cua-hoang-thai-thanh-3075914.html" title="Ái Như khóc khi ra mắt địa điểm mới của Hoàng Thái Thanh">Ái Như khóc khi ra mắt địa điểm mới của Hoàng Thái Thanh</a>
                                                            <span class="no_wrap">
                                                                <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                                                <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/ai-nhu-khoc-khi-ra-mat-dia-diem-moi-cua-hoang-thai-thanh-3075914.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3075914"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                                            </span>
                                                        </strong>
                                                    </li>
                                                                                                <li >
                                                        <strong>
                                                            <a href="http://giaitri.vnexpress.net/photo/my-thuat/nhung-tac-pham-3d-ve-chi-song-dong-3077136.html" title="Những tác phẩm 3D vẽ chì sống động">Những tác phẩm 3D vẽ chì sống động</a>
                                                            <span class="no_wrap">
                                                                <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                                                <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/nhung-tac-pham-3d-ve-chi-song-dong-3077136.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3077136"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                                            </span>
                                                        </strong>
                                                    </li>
                                                                                                <li >
                                                        <strong>
                                                            <a href="http://giaitri.vnexpress.net/photo/my-thuat/anh-sieu-thuc-lay-cam-hung-tu-nghe-thuat-ballet-3075680.html" title="Ảnh siêu thực lấy cảm hứng từ nghệ thuật ballet">Ảnh siêu thực lấy cảm hứng từ nghệ thuật ballet</a>
                                                            <span class="no_wrap">
                                                                <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                                                <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/anh-sieu-thuc-lay-cam-hung-tu-nghe-thuat-ballet-3075680.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3075680"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                                            </span>
                                                        </strong>
                                                    </li>
                                                                                                <li class="end">
                                                        <strong>
                                                            <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/dao-dien-duc-tu-tin-mang-phong-cach-kich-moi-den-viet-nam-3076430.html" title="Đạo diễn Đức tự tin mang phong cách kịch mới đến Việt Nam">Đạo diễn Đức tự tin mang phong cách kịch mới đến Việt Nam</a>
                                                            <span class="no_wrap">
                                                                <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                                                <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/dao-dien-duc-tu-tin-mang-phong-cach-kich-moi-den-viet-nam-3076430.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3076430"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                                            </span>
                                                        </strong>
                                                    </li>
                                                                                    </ul>
                                    </div>
                                </div>
                            
                            <!--Xuat material-->
                                                            <div class="clear">&nbsp;</div>
                            <!--Banner Big 1-->
                                                            <div id="banner_detail_right_160" class="banner_160x600 box_category left">
                                    <script type="text/javascript">try{Poly_SpecialRight();}catch(e){}</script>
                                </div>
                                <div class="clear">&nbsp;</div>
                                                        </div>
                        </div>
                        <div class="clear">&nbsp;</div>
                    </div>
                    <!-- START COMMENT -->
<script type="text/javascript" src="http://st.f2.vnecdn.net/responsive/j/v10/interactions/comment.js"></script>
<div class="width_common space_bottom_20" id="box_comment">
    <div class="block_show_commen width_common">
      
   
    </div>
</div>

<!-- END COMMENT -->                        <div class="block_tag width_common space_bottom_20">
                            <div class="txt_tag">Tags</div>
                                                            <a href="http://vnexpress.net/cuoc-thi-anh-nghe-thuat-vnexpress-2014/tag-507635-1.html" title="Cuộc thi Ảnh Nghệ thuật VnExpress 2014" class="tag_item">Cuộc thi Ảnh Nghệ thuật VnExpress 2014</a>
                                                    </div>
                                        <div class="box_category width_common">
                        <div>
                            <script type="text/javascript">
                                try{Poly_PushContent();}catch(e){}
                            </script>
                        </div>
                    </div>
                                        <div class="box_category width_common style_03" id="box_tinkhac_detail">
                        <div class="title_box_category width_common">
    <div class="txt_main_category"><a href="javascript:;">Tin khác</a></div>
    <div class="right control_pagination">
        <input type="hidden" name="article_id" id="article_id" value="3077670"/>
        <input type="hidden" name="limit_other_news" id="limit_other_news" value="14"/>
                    <a data-page="1" data-flagexc="1"  data-cateid="1003521" data-offset="15" href="javascript:;" class="link_xemtiep icon_responsive ico_respone_05">&nbsp;</a>
                </div>
    <script id="image_load_ajax" type="text/x-handlebars-template">
        <div style="text-align: center;"><p style="padding: 25px 0;"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/icon-loading.gif"></p></div>;
    </script>
</div>
<div class="content_box_category width_common">
        <ul class="list_news">
            <li>
                            <div class="thumb_160 width_common">
                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/nhung-tac-pham-3d-ve-chi-song-dong-3077136.html" title="Những tác phẩm 3D vẽ chì sống động">
                        <img alt="http://giaitri.vnexpress.net/photo/my-thuat/nhung-tac-pham-3d-ve-chi-song-dong-3077136.html" src="http://s.f12.img.vnexpress.net/2014/09/09/nhung-tac-pham-3d-ve-chi-song-dong-1410256085_180x108.jpg">
                    </a>
                    <a class="icon_thumb_videophoto icon_photo" href="http://giaitri.vnexpress.net/photo/my-thuat/nhung-tac-pham-3d-ve-chi-song-dong-3077136.html">&nbsp;</a>                </div>
                <strong>
                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/nhung-tac-pham-3d-ve-chi-song-dong-3077136.html" title="Những tác phẩm 3D vẽ chì sống động">Những tác phẩm 3D vẽ chì sống động</a>
                    <span class="no_wrap">
                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                        <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/nhung-tac-pham-3d-ve-chi-song-dong-3077136.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3077136"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                    </span>
                </strong>
                    </li>
                <li>
                            <div class="thumb_160 width_common">
                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-ra-mat-website-3076105.html" title="'Cuộc thi Ảnh Nghệ thuật VnExpress 2014' ra mắt website">
                        <img alt="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-ra-mat-website-3076105.html" src="http://s.f9.img.vnexpress.net/2014/09/08/anh-top-3076-1410167732_180x108.jpg">
                    </a>
                                    </div>
                <strong>
                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-ra-mat-website-3076105.html" title="'Cuộc thi Ảnh Nghệ thuật VnExpress 2014' ra mắt website">'Cuộc thi Ảnh Nghệ thuật VnExpress 2014' ra mắt website</a>
                    <span class="no_wrap">
                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                        <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-nghe-thuat-vnexpress-2014-ra-mat-website-3076105.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3076105"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                    </span>
                </strong>
                    </li>
                </ul>
        <ul class="list_news">
            <li>
                            <div class="thumb_160 width_common">
                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/anh-sieu-thuc-lay-cam-hung-tu-nghe-thuat-ballet-3075680.html" title="Ảnh siêu thực lấy cảm hứng từ nghệ thuật ballet">
                        <img alt="http://giaitri.vnexpress.net/photo/my-thuat/anh-sieu-thuc-lay-cam-hung-tu-nghe-thuat-ballet-3075680.html" src="http://s.f11.img.vnexpress.net/2014/09/06/anh-sieu-thuc-lay-cam-hung-tu-nghe-thuat-ballet-1410002214_180x108.jpg">
                    </a>
                    <a class="icon_thumb_videophoto icon_photo" href="http://giaitri.vnexpress.net/photo/my-thuat/anh-sieu-thuc-lay-cam-hung-tu-nghe-thuat-ballet-3075680.html">&nbsp;</a>                </div>
                <strong>
                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/anh-sieu-thuc-lay-cam-hung-tu-nghe-thuat-ballet-3075680.html" title="Ảnh siêu thực lấy cảm hứng từ nghệ thuật ballet">Ảnh siêu thực lấy cảm hứng từ nghệ thuật ballet</a>
                    <span class="no_wrap">
                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                        <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/anh-sieu-thuc-lay-cam-hung-tu-nghe-thuat-ballet-3075680.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3075680"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                    </span>
                </strong>
                    </li>
                <li>
                            <div class="thumb_160 width_common">
                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/hoi-hoa-that-the-o-festival-my-thuat-tre-3075439.html" title="Hội họa thất thế ở Festival Mỹ thuật trẻ">
                        <img alt="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/hoi-hoa-that-the-o-festival-my-thuat-tre-3075439.html" src="http://s.f10.img.vnexpress.net/2014/09/06/top-1409972348_180x108.jpg">
                    </a>
                                    </div>
                <strong>
                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/hoi-hoa-that-the-o-festival-my-thuat-tre-3075439.html" title="Hội họa thất thế ở Festival Mỹ thuật trẻ">Hội họa thất thế ở Festival Mỹ thuật trẻ</a>
                    <span class="no_wrap">
                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                        <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/hoi-hoa-that-the-o-festival-my-thuat-tre-3075439.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3075439"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                    </span>
                </strong>
                    </li>
                </ul>
    
    <div class="width_common list_10tinkhac">
                        <div class="left w320">
                    <ul class="list_news_dot_3x3_300">
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/tranh-nguyen-trong-khoi-gui-gam-khao-khat-tim-ve-thien-nhien-3074655.html" title="Tranh Nguyễn Trọng Khôi gửi gắm khao khát tìm về thiên nhiên">Tranh Nguyễn Trọng Khôi gửi gắm khao khát tìm về thiên nhiên</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_4" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/tranh-nguyen-trong-khoi-gui-gam-khao-khat-tim-ve-thien-nhien-3074655.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3074655"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/phong-canh-va-khoanh-khac-nguon-de-tai-vo-tan-trong-nhiep-anh-3037523.html" title="Phong cảnh và Khoảnh khắc - nguồn đề tài vô tận trong nhiếp ảnh">Phong cảnh và Khoảnh khắc - nguồn đề tài vô tận trong nhiếp ảnh</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/phong-canh-va-khoanh-khac-nguon-de-tai-vo-tan-trong-nhiep-anh-3037523.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3037523"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/anh-dep-the-loai-khoanh-khac-cuoc-song-cua-national-geographic-3073368.html" title="Ảnh đẹp thể loại Khoảnh khắc Cuộc sống của National Geographic">Ảnh đẹp thể loại Khoảnh khắc Cuộc sống của National Geographic</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_4" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/anh-dep-the-loai-khoanh-khac-cuoc-song-cua-national-geographic-3073368.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3073368"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/anh-dep-the-loai-phong-canh-cua-tap-chi-national-geographic-3073377.html" title="Ảnh đẹp thể loại Phong cảnh của tạp chí National Geographic">Ảnh đẹp thể loại Phong cảnh của tạp chí National Geographic</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/anh-dep-the-loai-phong-canh-cua-tap-chi-national-geographic-3073377.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3073377"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/mua-xuan-ha-noi-tranh-gom-cao-nhat-viet-nam-3073880.html" title="'Mùa xuân Hà Nội' - tranh gốm cao nhất Việt Nam">'Mùa xuân Hà Nội' - tranh gốm cao nhất Việt Nam</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/mua-xuan-ha-noi-tranh-gom-cao-nhat-viet-nam-3073880.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3073880"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                            </ul>
                </div>
                        <div class="right w320">
                    <ul class="list_news_dot_3x3_300">
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/nhom-nghe-thuat-nha-san-collective-tro-lai-3074084.html" title="Nhóm nghệ thuật Nhà Sàn Collective trở lại">Nhóm nghệ thuật Nhà Sàn Collective trở lại</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/nhom-nghe-thuat-nha-san-collective-tro-lai-3074084.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3074084"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/tranh-ve-tren-long-vu-3072951.html" title="Tranh vẽ trên lông vũ">Tranh vẽ trên lông vũ</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/tranh-ve-tren-long-vu-3072951.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3072951"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/tranh-mau-nuoc-ve-cac-thanh-pho-lon-tren-the-gioi-3072968.html" title="Tranh màu nước vẽ các thành phố lớn trên thế giới">Tranh màu nước vẽ các thành phố lớn trên thế giới</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/tranh-mau-nuoc-ve-cac-thanh-pho-lon-tren-the-gioi-3072968.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3072968"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/photo/my-thuat/suc-song-manh-liet-cua-thuc-vat-3060037.html" title="Sức sống mãnh liệt của thực vật">Sức sống mãnh liệt của thực vật</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/photo/my-thuat/suc-song-manh-liet-cua-thuc-vat-3060037.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="3" data-objectid="3060037"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                                    <li>
                                <strong>
                                    <a href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cac-hoa-si-tai-nang-gop-tranh-lam-trien-lam-3072937.html" title="Các họa sĩ tài năng góp tranh làm triển lãm">Các họa sĩ tài năng góp tranh làm triển lãm</a>
                                    <span class="no_wrap">
                                        <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                        <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cac-hoa-si-tai-nang-gop-tranh-lam-trien-lam-3072937.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3072937"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                    </span>
                                </strong>
                            </li>
                                            </ul>
                </div>
            </div>
</div>                    </div>
                                    </div>
            </div>
        </div>
    </div>
    <!-- Area Right: Box 300px -->
    <div id="col_300" class="right">
     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Tinhta#300x600 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:600px"
     data-ad-client="ca-pub-5490129588548111"
     data-ad-slot="7443171883"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <div class="title_box_category width_common">
        <div class="txt_main_category">
            <a  href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/" title="Sân khấu">Sân khấu</a>
        </div>
        <div class="block_category_child">
                    </div>
        <a  class="block_arrow_title" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/" title="Sân khấu">&nbsp;</a>
    </div>
    <div class="content_box_category width_common">
        <div class="title_news">
            <a  href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/dao-dien-duc-tu-tin-mang-phong-cach-kich-moi-den-viet-nam-3076430.html" class="txt_link" title="Đạo diễn Đức tự tin mang phong cách kịch mới đến Việt Nam">Đạo diễn Đức tự tin mang phong cách kịch mới đến Việt Nam</a>
            <span class="no_wrap">
                <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/dao-dien-duc-tu-tin-mang-phong-cach-kich-moi-den-viet-nam-3076430.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3076430"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>            </span>
        </div>
        <div class="block_image_news width_common">
                            <div class="thumb">
                    <a  href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/dao-dien-duc-tu-tin-mang-phong-cach-kich-moi-den-viet-nam-3076430.html" title="Đạo diễn Đức tự tin mang phong cách kịch mới đến Việt Nam">
                        <img src="http://s.f10.img.vnexpress.net/2014/09/08/topvongphan-1410178270_180x108.jpg" alt="Đạo diễn Đức tự tin mang phong cách kịch mới đến Việt Nam" />
                    </a>
                                    </div>
                        <div class="news_lead" data-mobile-href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/dao-dien-duc-tu-tin-mang-phong-cach-kich-moi-den-viet-nam-3076430.html">Được Viện Goethe Hà Nội và Nhà hát Tuổi Trẻ mời đến Việt Nam dựng vở "Vòng phấn Kavkaz", đạo diễn Dominik Gunther</div>
                        <ul class="list_news_dot_3x3_300">
                                    <li>
                        <p>
                            <strong>
                                <a  href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/ai-nhu-khoc-khi-ra-mat-dia-diem-moi-cua-hoang-thai-thanh-3075914.html" title="Ái Như khóc khi ra mắt địa điểm mới của Hoàng Thái Thanh">Ái Như khóc khi ra mắt địa điểm mới của Hoàng Thái Thanh</a>
                                <span class="no_wrap">
                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/ai-nhu-khoc-khi-ra-mat-dia-diem-moi-cua-hoang-thai-thanh-3075914.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3075914"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                </span>
                            </strong>
                        </p>
                    </li>
                                    <li>
                        <p>
                            <strong>
                                <a  href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/thi-sinh-hat-cai-luong-voi-giong-bac-gay-an-tuong-cho-giam-khao-3074859.html" title="Thí sinh hát cải lương với giọng Bắc gây ấn tượng cho giám khảo">Thí sinh hát cải lương với giọng Bắc gây ấn tượng cho giám khảo</a>
                                <span class="no_wrap">
                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/thi-sinh-hat-cai-luong-voi-giong-bac-gay-an-tuong-cho-giam-khao-3074859.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3074859"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                </span>
                            </strong>
                        </p>
                    </li>
                                    <li>
                        <p>
                            <strong>
                                <a  href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/ky-uc-ve-nhung-lan-kiem-duyet-kich-luu-quang-vu-3044211.html" title="Ký ức về những lần kiểm duyệt kịch Lưu Quang Vũ">Ký ức về những lần kiểm duyệt kịch Lưu Quang Vũ</a>
                                <span class="no_wrap">
                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/san-khau/ky-uc-ve-nhung-lan-kiem-duyet-kich-luu-quang-vu-3044211.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3044211"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                </span>
                            </strong>
                        </p>
                    </li>
                            </ul>
                    </div>
    </div>

<div id="cate_sach" class="box_category width_common">
    <div class="title_box_category width_common">
        <div class="txt_main_category">
            <a  href="http://giaitri.vnexpress.net/tin-tuc/sach/" title="Sách">Sách</a>
        </div>
        <div class="block_category_child">
                    </div>
        <a  class="block_arrow_title" href="http://giaitri.vnexpress.net/tin-tuc/sach/" title="Sách">&nbsp;</a>
    </div>
    <div class="content_box_category width_common">
        <div class="title_news">
            <a  href="http://giaitri.vnexpress.net/tin-tuc/sach/lang-van/bai-hoc-ve-ban-chat-cua-tinh-yeu-hon-nhan-3077388.html" class="txt_link" title="Bài học về bản chất của tình yêu, hôn nhân">Bài học về bản chất của tình yêu, hôn nhân</a>
            <span class="no_wrap">
                <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/sach/lang-van/bai-hoc-ve-ban-chat-cua-tinh-yeu-hon-nhan-3077388.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3077388"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>            </span>
        </div>
        <div class="block_image_news width_common">
                            <div class="thumb">
                    <a  href="http://giaitri.vnexpress.net/tin-tuc/sach/lang-van/bai-hoc-ve-ban-chat-cua-tinh-yeu-hon-nhan-3077388.html" title="Bài học về bản chất của tình yêu, hôn nhân">
                        <img src="http://s.f11.img.vnexpress.net/2014/09/10/topemkomun-1410318926_180x108.jpg" alt="Bài học về bản chất của tình yêu, hôn nhân" />
                    </a>
                                    </div>
                        <div class="news_lead" data-mobile-href="http://giaitri.vnexpress.net/tin-tuc/sach/lang-van/bai-hoc-ve-ban-chat-cua-tinh-yeu-hon-nhan-3077388.html">Dựng tình huống phải lựa chọn giữa việc sinh con hoặc mất chồng, tác phẩm "Em không muốn có baby" đưa ra cách nhìn về bản chất hôn nhân và tình yêu.</div>
                        <ul class="list_news_dot_3x3_300">
                                    <li>
                        <p>
                            <strong>
                                <a  href="http://giaitri.vnexpress.net/tin-tuc/sach/lang-van/nguoi-phu-nu-dam-yeu-va-hanh-phuc-tren-dat-my-3076697.html" title="Người phụ nữ dám yêu và hạnh phúc trên đất Mỹ">Người phụ nữ dám yêu và hạnh phúc trên đất Mỹ</a>
                                <span class="no_wrap">
                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/sach/lang-van/nguoi-phu-nu-dam-yeu-va-hanh-phuc-tren-dat-my-3076697.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3076697"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                </span>
                            </strong>
                        </p>
                    </li>
                                    <li>
                        <p>
                            <strong>
                                <a  href="http://giaitri.vnexpress.net/tin-tuc/sach/lang-van/nhieu-sach-hay-cua-thieu-nhi-the-gioi-den-viet-nam-3076351.html" title="Nhiều sách hay của thiếu nhi thế giới đến Việt Nam">Nhiều sách hay của thiếu nhi thế giới đến Việt Nam</a>
                                <span class="no_wrap">
                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/sach/lang-van/nhieu-sach-hay-cua-thieu-nhi-the-gioi-den-viet-nam-3076351.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3076351"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                </span>
                            </strong>
                        </p>
                    </li>
                                    <li>
                        <p>
                            <strong>
                                <a  href="http://giaitri.vnexpress.net/tin-tuc/sach/tac-pham/ha-noi-co-don-chong-chenh-thang-ngay-3075681.html" title="Hà Nội cô đơn chông chênh tháng ngày...">Hà Nội cô đơn chông chênh tháng ngày...</a>
                                <span class="no_wrap">
                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/sach/tac-pham/ha-noi-co-don-chong-chenh-thang-ngay-3075681.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3075681"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                </span>
                            </strong>
                        </p>
                    </li>
                            </ul>
                    </div>
    </div>
</div>
<div class="box_category width_common hidden320"><div class="banner_300x250"><script type="text/javascript">try{Poly_Large(4);}catch(e){}</script></div></div><div id="cate_truyen-hinh" class="box_category width_common">
    <div class="title_box_category width_common">
        <div class="txt_main_category">
            <a  href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/" title="Truyền hình">Truyền hình</a>
        </div>
        <div class="block_category_child">
                    </div>
        <a  class="block_arrow_title" href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/" title="Truyền hình">&nbsp;</a>
    </div>
    <div class="content_box_category width_common">
        <div class="title_news">
            <a  href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/viet-huong-hoa-trang-nua-trai-nua-gai-3077050.html" class="txt_link" title="Việt Hương hóa trang nửa trai nửa gái">Việt Hương hóa trang nửa trai nửa gái</a>
            <span class="no_wrap">
                <img class="icon_content icon_title_2" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/viet-huong-hoa-trang-nua-trai-nua-gai-3077050.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3077050"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>            </span>
        </div>
        <div class="block_image_news width_common">
                            <div class="thumb">
                    <a  href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/viet-huong-hoa-trang-nua-trai-nua-gai-3077050.html" title="Việt Hương hóa trang nửa trai nửa gái">
                        <img src="http://s.f11.img.vnexpress.net/2014/09/09/huong-5813-1410251769_180x108.jpg" alt="Việt Hương hóa trang nửa trai nửa gái" />
                    </a>
                                    </div>
                        <div class="news_lead" data-mobile-href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/viet-huong-hoa-trang-nua-trai-nua-gai-3077050.html">Danh hài một bên mặc váy, một bên mặc vest để thể hiện hoạt cảnh trong chương trình "Ơn giời, cậu đây rồi!".</div>
                        <ul class="list_news_dot_3x3_300">
                                    <li>
                        <p>
                            <strong>
                                <a  href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/vo-chong-cam-van-cam-ly-di-tim-cac-cap-ban-doi-hat-hay-3076387.html" title="Vợ chồng Cẩm Vân, Cẩm Ly đi tìm các cặp bạn đời hát hay">Vợ chồng Cẩm Vân, Cẩm Ly đi tìm các cặp bạn đời hát hay</a>
                                <span class="no_wrap">
                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/vo-chong-cam-van-cam-ly-di-tim-cac-cap-ban-doi-hat-hay-3076387.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3076387"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                </span>
                            </strong>
                        </p>
                    </li>
                                    <li>
                        <p>
                            <strong>
                                <a  href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/hoai-linh-nhan-thi-sinh-mac-trong-benh-lam-con-nuoi-3076191.html" title="Hoài Linh nhận thí sinh mắc trọng bệnh làm con nuôi">Hoài Linh nhận thí sinh mắc trọng bệnh làm con nuôi</a>
                                <span class="no_wrap">
                                    <img class="icon_content icon_title_2" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/hoai-linh-nhan-thi-sinh-mac-trong-benh-lam-con-nuoi-3076191.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3076191"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                </span>
                            </strong>
                        </p>
                    </li>
                                    <li>
                        <p>
                            <strong>
                                <a  href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/giam-khao-do-re-mi-hoa-thanh-chi-hang-va-chu-cuoi-3075965.html" title="Giám khảo Đồ Rê Mí hóa thành chị Hằng và chú Cuội">Giám khảo Đồ Rê Mí hóa thành chị Hằng và chú Cuội</a>
                                <span class="no_wrap">
                                    <img class="icon_content icon_title_0" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">
                                    <a class="icon_commend" href="http://giaitri.vnexpress.net/tin-tuc/truyen-hinh/giam-khao-do-re-mi-hoa-thanh-chi-hang-va-chu-cuoi-3075965.html#box_comment" style="white-space: nowrap; cursor: pointer; display: none;"><span class="txt_num_comment" data-type="comment" data-objecttype="1" data-objectid="3075965"><img class="icon_content icon_title_coment" alt="" src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_blank.gif">&nbsp;</span></a>                                </span>
                            </strong>
                        </p>
                    </li>
                            </ul>
                    </div>
    </div>
</div>
<div class="box_category width_common hidden320"><div class="banner_300x250"><script type="text/javascript">try{Poly_Large(5);}catch(e){}</script></div></div><link href="http://st.f2.giaitri.vnexpress.net/c/v4/styles-widget-vne.css" media="screen" rel="stylesheet" type="text/css" />
<div id="widget-sendo" class="widget-sendo-vne">
    <div class="title"><a target="_blank" title="Mua sắm Sendo.vn" href="http://www.sendo.vn/"><h3>Mua sắm <span>Sendo.vn</span></h3></a></div>
    <div class="content-widget">
        <div class="slider-widget" id="slider-widget-sendo-vne">
            <ul class="bjqs">
                <li class="slider">
                
                    <a class="box-item" title="Đầm bầu giá rẻ" href="http://www.sendo.vn/me-va-be/do-dung-cho-me-truoc-khi-sinh/dam-bau/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/dambaure_2jbs9jqn5jjf2_simg_c22bae_115x115_maxb.jpg" alt="Đầm bầu giá rẻ" title="Đầm bầu giá rẻ" width="115" height="115"/>
                        <span>Đầm bầu giá rẻ</span>
                    </a>
                
                    <a class="box-item" title="đầm ôm" href="http://www.sendo.vn/thoi-trang-nu/dam/dam-om/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/damom_2jbscjktd9ko2_simg_c22bae_115x115_maxb.jpg" alt="đầm ôm" title="đầm ôm" width="115" height="115"/>
                        <span>đầm ôm</span>
                    </a>
                
                    <a class="box-item" title="Áo sơ mi công sở" href="http://www.sendo.vn/thoi-trang-nu/ao-nu/ao-so-mi-cong-so/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/sominu_2jbs9ggsjnrqo_simg_c22bae_115x115_maxb.jpg" alt="Áo sơ mi công sở" title="Áo sơ mi công sở" width="115" height="115"/>
                        <span>Áo sơ mi công sở</span>
                    </a>
                
                    <a class="box-item" title="Bikini nữ đẹp 2014" href="http://www.sendo.vn/thoi-trang-nu/do-boi/bikini/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/bikini_2jbs9hqn0c9ot_simg_c22bae_115x115_maxb.jpg" alt="Bikini nữ đẹp 2014" title="Bikini nữ đẹp 2014" width="115" height="115"/>
                        <span>Bikini nữ đẹp 2014</span>
                    </a>
                </li><li class="slider">
                    <a class="box-item" title="quần áo sơ sinh" href="http://www.sendo.vn/me-va-be/thoi-trang-cho-be/quan-ao-so-sinh/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/qasosinh_2jbsco1ekjdfa_simg_c22bae_115x115_maxb.jpg" alt="quần áo sơ sinh" title="quần áo sơ sinh" width="115" height="115"/>
                        <span>quần áo sơ sinh</span>
                    </a>
                
                    <a class="box-item" title="mẹ và bé" href="http://www.sendo.vn/me-va-be/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/mebe_2jbscmjgsb4g7_simg_c22bae_115x115_maxb.jpg" alt="mẹ và bé" title="mẹ và bé" width="115" height="115"/>
                        <span>mẹ và bé</span>
                    </a>
                
                    <a class="box-item" title="Áo kiểu nữ" href="http://www.sendo.vn/thoi-trang-nu/ao-nu/ao-kieu/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/aokieunu_2jbs9er2ip0hk_simg_c22bae_115x115_maxb.jpg" alt="Áo kiểu nữ" title="Áo kiểu nữ" width="115" height="115"/>
                        <span>Áo kiểu nữ</span>
                    </a>
                
                    <a class="box-item" title="đầm maxi" href="http://www.sendo.vn/thoi-trang-nu/dam/dam-maxi/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/dammaxi_2jbsccn33msj7_simg_c22bae_115x115_maxb.jpg" alt="đầm maxi" title="đầm maxi" width="115" height="115"/>
                        <span>đầm maxi</span>
                    </a>
                </li><li class="slider">
                    <a class="box-item" title="đầm dạ hội" href="http://www.sendo.vn/thoi-trang-nu/dam/dam-da-hoi/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/damdahoi_2jbscah23fr08_simg_c22bae_115x115_maxb.jpg" alt="đầm dạ hội" title="đầm dạ hội" width="115" height="115"/>
                        <span>đầm dạ hội</span>
                    </a>
                
                    <a class="box-item" title="Sơ Mi Nữ" href="http://www.sendo.vn/thoi-trang-nu/ao-nu/ao-so-mi-cong-so/">
                        <img src="http://media3.sendo.vn/img/2014/6_12/aosomicongso_2j57mc3ohp5ng_simg_c22bae_115x115_maxb.jpg" alt="Sơ Mi Nữ" title="Sơ Mi Nữ" width="115" height="115"/>
                        <span>Sơ Mi Nữ</span>
                    </a>
                
                    <a class="box-item" title="váy trẻ em" href="http://www.sendo.vn/me-va-be/thoi-trang-be-gai/chan-vay/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/vaytreem_2jbsh0nr6ec4p_simg_c22bae_115x115_maxb.jpg" alt="váy trẻ em" title="váy trẻ em" width="115" height="115"/>
                        <span>váy trẻ em</span>
                    </a>
                
                    <a class="box-item" title="Đầm Bầu Đẹp" href="http://www.sendo.vn/me-va-be/do-dung-cho-me-truoc-khi-sinh/dam-bau/">
                        <img src="http://media3.sendo.vn/img/2014/6_12/dambau_2j57mb5j3s2hf_simg_c22bae_115x115_maxb.jpg" alt="Đầm Bầu Đẹp" title="Đầm Bầu Đẹp" width="115" height="115"/>
                        <span>Đầm Bầu Đẹp</span>
                    </a>
                </li><li class="slider">
                    <a class="box-item" title="áo khoác nữ" href="http://www.sendo.vn/thoi-trang-nu/ao-khoac/">
                        <img src="http://media3.sendo.vn/img/2014/7_28/aokhoacnu_2jbs9d8i7616b_simg_c22bae_115x115_maxb.jpg" alt="áo khoác nữ" title="áo khoác nữ" width="115" height="115"/>
                        <span>áo khoác nữ</span>
                    </a>
                                </li>
            </ul>
        </div>
        <div class="logo-sendo">
            <a href="http://www.sendo.vn/" title="Sendo.vn" class="logo" target="_blank">&nbsp;</a>
        </div>
    </div>
</div>
<script src="http://st.f3.giaitri.vnexpress.net/j/v2/bjqs-1.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#slider-widget-sendo-vne').bjqs({
            animtype      : 'slide',
            height        : 320,
            width         : 300,
            showcontrols   : false
        });
    });
</script>
    </div>
</div>

<!--Chia se bai viet qua email-->
<script type="text/javascript">
var w_captcha   = 60;
var h_captcha   = 40;
var html_alert  = '<div id="login-vne4" class="login-form">\
                        <div class="ttOline">\
                            Thông báo\
                         </div>\
                        <div class="complete-form">\
                            <div class="content_form">\
                                {err_msg}\
                            </div>\
                        </div>\
                        <div class="close-lb"></div>\
                        <div class="clear"></div>\
                    </div>';
var html_login_5 ='<div id="login-vne5" class="login-form">\
                    <form action="" name="send_mai" method="post">\
                        <input type="hidden" id="url" name="url" value="http://giaitri.vnexpress.net/tin-tuc/san-khau-my-thuat/my-thuat/cuoc-thi-anh-vnexpress-thu-hut-hon-6-500-tac-pham-sau-nua-thang-3077670.html">\
                        <div class="ttOline">\
                            Chia sẻ bài viết qua Email\
                        </div>\
                        <div class="share_email_des">\
                            <div class="share_email_left">\
                                <a href="#" title="">Bài viết</a>\
                            </div>\
                            <div class="share_email_right">\
                                <div>Cuộc thi Ảnh VnExpress thu hút hơn 6.500 tác phẩm sau nửa tháng</div>\
                                <ul>\
                                    <li class="active"><a href="http://giaitri.vnexpress.net" title="Giải trí">Giải trí</a></li>\
                                    \
                                    <li class="txt_underline">&nbsp;&gt;&nbsp;<a href="/tin-tuc/san-khau-my-thuat" title="Sân khấu - Mỹ thuật" alt="Sân khấu - Mỹ thuật">Sân khấu - Mỹ thuật</a></li>\
                                    \
                                </ul>\
                            </div>\
                        </div>\
                        <div class="complete-form">\
                            <p class="login-txt"><input type="text" class="txt-login" onblur="if(this.value==\'\') this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue) this.value=\'\'"  value="Email người gửi" name="sender_email" id="sender_email" /></p>\
                            <p class="login-desc" id="errorEmail"></p>\
                            <p class="login-txt"><input type="text" class="txt-login" onblur="if(this.value==\'\') this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue) this.value=\'\'"  value="Họ tên người gửi"  name="sender_name" id="sender_name" /></p>\
                            <p class="login-desc" id="errorName"></p>\
                            <p class="login-txt"><input type="text" class="txt-login" onblur="if(this.value==\'\') this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue) this.value=\'\'"  value="Email người nhận" name="receiver_mail" id="receiver_mail" /></p>\
                            <p class="login-desc" id="errorReceiver"></p>\
                            <p class="login-txt"><textarea name="message_mail" id="message_mail" class="txt-login" name="thongdiep" onblur="if(this.value==\'\') this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue) this.value=\'\'"  value="Thông điệp gửi kèm">Thông điệp gửi kèm</textarea></p>\
                            <div class="sercurity">\
                                <p class="share_email_label">Nhập mã xác nhận</p>\n\
                                <p class="login-txt">\
                                    <input name="txtCode" id="txtCode" type="text" class="txt-capcha" maxlength="4" />\
                                    <span class="txt_huongdan" id="showCaptcha"></span>\
                                    <a onclick="GT_VNE.loadCaptcha();" href="javascript:;" title="Tạo mã khác"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/refesh.gif" /></a>\
                                    <input type="button" onclick="DGT_VNE.submitForm();" class="btt-complete" value="Hoàn tất" />\
                                </p>\
                                <p class="login-desc" id="errorCode"></p>\
                            </div>\
                        </div>\
                        <div class="close-lb"></div>\
                    </form>\
                   </div>';
$('.login_5').click(function(){
    Sexy.notice(html_login_5);
    GT_VNE.loadCaptcha();
});
</script><!--End chia se bai viet qua email-->
<script type="text/javascript">
    var article_title       = 'Cu%E1%BB%99c+thi+%E1%BA%A2nh+VnExpress+thu+h%C3%BAt+h%C6%A1n+6.500+t%C3%A1c+ph%E1%BA%A9m+sau+n%E1%BB%ADa+th%C3%A1ng+-+VnExpress+Gi%E1%BA%A3i+Tr%C3%AD';
    var article_description = 'Ch%E1%BB%89+trong+hai+tu%E1%BA%A7n+k%E1%BB%83+t%E1%BB%AB+ng%C3%A0y+ph%C3%A1t+%C4%91%E1%BB%99ng%2C+Ban+t%E1%BB%95+ch%E1%BB%A9c+%C4%91%C3%A3+nh%E1%BA%ADn+%C4%91%C6%B0%E1%BB%A3c+h%C6%A1n+6.500+t%C3%A1c+ph%E1%BA%A9m+c%E1%BB%A7a+g%E1%BA%A7n+2.000+t%C3%A1c+gi%E1%BA%A3.+Cu%E1%BB%99c+thi+ti%E1%BA%BFp+t%E1%BB%A5c+nh%E1%BA%ADn+%E1%BA%A3nh+tham+d%E1%BB%B1+cho+t%E1%BB%9Bi+12h+ng%C3%A0y+27%2F10.+-+VnExpress+Gi%E1%BA%A3i+Tr%C3%AD';
    var article_image       = 'http://l.f10.img.vnexpress.net/2014/09/10/chieu-ve-3726-1410345985_490x294.jpg';
</script>                        <div class="banner_980x60">
                            <div class="box_category width_common hidden320">
                                                             
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div id="wrapper_footer">
                <div class="go_head">
                    <div class="right">
                                                <a href="javascript:;" id="aSetHomePage" class="fancybox.iframe" style="display: none;"><span class="icon_responsive ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
                        <a href="javascript:;" id="aSetHomePageIE" onclick="GT_VNE.setHomepage();"><span class="icon_responsive ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
                                                <a href="javascript:;" id="back-top" onclick="try{return common.scrollToTop();}catch(e){}"><span class="icon_responsive ico_respone_02">&nbsp;</span>Về đầu trang</a>
                    </div>
                    <div class="clear">&nbsp;</div>
                </div>
                <div id="footer">
                    <div class="footerMenu">
                        <div class="lineFmenu">
                            <ul class="ulBlockMenu">
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/" class="mnu_thoisu">Trang chủ</a>
                                    </h2>
                                </li>
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/thoi-su" class="mnu_thoisu">Thời sự</a>
                                    </h2>
                                </li>
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/goc-nhin" class="mnu_gocnhin">Góc nhìn</a>
                                    </h2>
                                </li>
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://video.vnexpress.net/">Video</a>
                                    </h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu">
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/giao-duc/" class="mnu_giaoduc">Giáo dục</a>
                                    </h2>
                                </li>
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/the-gioi/" class="mnu_thegioi">Thế giới</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/the-gioi/tu-lieu/">Tư liệu</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/the-gioi/phan-tich/">Phân tích</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/the-gioi/nguoi-viet-5-chau/">Người Việt 5 châu</a></h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu">
                                <li class="liFirst business">
                                    <h2>
                                        <a href="http://kinhdoanh.vnexpress.net" class="mnu_kinhdoanh">Kinh doanh</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://kinhdoanh.vnexpress.net/tin-tuc/hang-hoa/">Hàng hóa</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://kinhdoanh.vnexpress.net/tin-tuc/doanh-nghiep/">Doanh nghiệp</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://kinhdoanh.vnexpress.net/tin-tuc/ebank/">Ebank</a></h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu">
                                <li class="liFirst entertainment">
                                    <h2>
                                        <a href="http://giaitri.vnexpress.net" class="mnu_giaitri">Giải trí</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://giaitri.vnexpress.net/tin-tuc/gioi-sao/">Giới sao</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://giaitri.vnexpress.net/tin-tuc/thoi-trang/">Thời trang</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://giaitri.vnexpress.net/tin-tuc/phim/">Phim</a></h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu">
                                <li class="liFirst sporting">
                                    <h2>
                                        <a href="http://thethao.vnexpress.net" class="mnu_thethao">Thể thao</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://thethao.vnexpress.net/tin-tuc/bong-da/">Bóng đá</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://thethao.vnexpress.net/tin-tuc/tennis/">Tennis</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://thethao.vnexpress.net/tin-tuc/">Các môn khác</a></h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu">
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/phap-luat/" class="mnu_phapluat">Pháp luật</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/phap-luat/ho-so-pha-an/">Hồ sơ phá án</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/phap-luat/tu-van/">Tư vấn</a></h2>
                                </li>
                            </ul>
                        </div>
                        <div class="lineFmenu">
                            <ul class="ulBlockMenu">
                                <li class="liFirst family">
                                    <h2>
                                        <a href="http://doisong.vnexpress.net" class="mnu_doisong">Đời sống</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://doisong.vnexpress.net/tin-tuc/nhip-song/">Nhịp sống</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://doisong.vnexpress.net/tin-tuc/suc-khoe/">Sức khỏe</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://doisong.vnexpress.net/tin-tuc/gia-dinh/">Gia đình</a></h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu">
                                <li class="liFirst dulich">
                                    <h2>
                                        <a href="http://dulich.vnexpress.net" class="mnu_dulich">Du lịch</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://dulich.vnexpress.net/tin-tuc/viet-nam/">Việt Nam</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://dulich.vnexpress.net/tin-tuc/quoc-te/">Quốc tế</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://dulich.vnexpress.net/tin-tuc/cong-dong/">Cộng đồng</a></h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu">
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/khoa-hoc/" class="mnu_khoahoc">Khoa học</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/khoa-hoc/moi-truong/">Môi trường</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/khoa-hoc/ky-thuat-moi/">Công nghệ mới</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/khoa-hoc/hoi-dap/">Hỏi - đáp</a></h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu">
                                <li class="liFirst digitizing">
                                    <h2>
                                        <a href="http://sohoa.vnexpress.net" class="mnu_sohoa">Số hóa</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://sohoa.vnexpress.net/tin-tuc/san-pham/">Sản phẩm</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://sohoa.vnexpress.net/danh-gia/">Đánh giá</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://sohoa.vnexpress.net/tin-tuc/doi-song-so/">Đời sống số</a></h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu">
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/oto-xe-may/" class="mnu_xe">Xe</a>
                                    </h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/oto-xe-may/tu-van/">Tư vấn</a></h2>
                                </li>
                                <li class="liFollow">
                                    <h2><a href="http://vnexpress.net/tin-tuc/oto-xe-may/thi-truong/">Thị trường</a></h2>
                                </li>
                            </ul>
                            <ul class="ulBlockMenu ulMainMenu">
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/cong-dong/" class="mnu_bandoc">Cộng đồng</a>
                                    </h2>
                                </li>
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/tam-su/" class="mnu_tamsu">Tâm sự</a>
                                    </h2>
                                </li>
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://vnexpress.net/tin-tuc/cuoi/" class="mnu_cuoi">Cười</a>
                                    </h2>
                                </li>
                                <li class="liFirst">
                                    <h2>
                                        <a href="http://raovat.vnexpress.net/" class="mnu_raovat">Rao vặt</a>
                                    </h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <ul class="list_menu_small">
                        <li><a href="http://vnexpress.net/" class="mnu_thoisu">Trang chủ</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/thoi-su/" class="mnu_thoisu">Thời sự</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/goc-nhin/" class="mnu_gocnhin">Góc nhìn</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/the-gioi/" class="mnu_thegioi">Thế giới</a></li>
                        <li><a href="http://kinhdoanh.vnexpress.net" class="mnu_kinhdoanh">Kinh doanh</a></li>
                        <li><a href="http://giaitri.vnexpress.net" class="mnu_giaitri">Giải trí</a></li>
                        <li><a href="http://thethao.vnexpress.net" class="mnu_thethao">Thể thao</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/phap-luat/" class="mnu_phapluat">Pháp luật</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/giao-duc/" class="mnu_giaoduc">Giáo dục</a></li>
                        <li><a href="http://doisong.vnexpress.net" class="mnu_doisong">Đời sống</a></li>
                        <li><a href="http://dulich.vnexpress.net" class="mnu_dulich">Du lịch</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/khoa-hoc/" class="mnu_khoahoc">Khoa học</a></li>
                        <li><a href="http://sohoa.vnexpress.net" class="mnu_sohoa">Số hóa</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/oto-xe-may/" class="mnu_xe">Xe</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/cong-dong/" class="mnu_bandoc">Cộng đồng</a></li>
                        <li><a href="http://vnexpress.net/tin-tuc/tam-su/" class="mnu_tamsu">Tâm sự</a></li>
                        <li class="end"><a href="http://video.vnexpress.net/" class="mnu_video">Video</a></li>
                        <li class="end"><a href="http://vnexpress.net/tin-tuc/cuoi/" class="mnu_cuoi">Cười</a></li>
                        <li class="end"><a href="http://raovat.vnexpress.net" class="mnu_raovat">Rao vặt</a></li>
                    </ul>

                    <div class="ft-bot">
                        <div class="ft-botl"><a href="http://vnexpress.net"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/graphics/img_logo_vne.jpg" alt="" /></a></div>
                        <div class="ft-botm txt_666">
                            <p>&copy; <span>Trò chơi muốn trở thành người nổi tiếng,</span> Nếu bạn muốn chơi click vào đây.</p>
                            <p>&reg; Mọi chi tiết xin vui lòng liên hệ duyanh.bka@gmail.com.</p>
                        </div>
                        <div class="ft-botr">
                            <p><a href="http://fptad.net/qc/V/vnexpress/2014/07/">VnExpress tuyển dụng</a>   <a href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a> / <a href="http://vnexpress.net/contactus?p=giaitri">Liên hệ Tòa soạn</a></p>
                            <p><a href="http://vnexpress.net/contact.htm" target="_blank" style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa soạn: </a><span>0123.888.0123</span> (HN) - <span>0129.233.3555</span> (TP HCM)</p>
                        </div>
                        <div class="coppy_right_small">
                            <div class="tttoasoan">
                                <div class="txt_up width_common">
                                    <div class="width_50"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/icons/hotline.gif" alt="" /><a href="http://vnexpress.net/contactus/?p=giaitri" target="_blank">Liên hệ Tòa soạn</a></div>
                                    <div class="width_50"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/icons/icon_thongtintoasoan.gif" alt="" /><a href="http://vnexpress.net/contact.htm" target="_blank">Thông tin Tòa soạn</a></div>
                                </div>
                                <div class="txt_down width_common">
                                    <div class="width_50"><b><a href="tel:01238880123">0123.888.0123</a></b> (HN) </div>
                                    <div class="width_50"><b><a href="tel:01292333555">0129.233.3555</a></b> (TP HCM)</div>
                                </div>
                            </div>
                            <div class="coppy_right">
                              <p>&copy; <span>Trò chơi trở thành người nổi tiếng,</span>  Nếu bạn muốn chơi click <a style="color: red" href="http://tinhta.com/node/add/thao-luan">vào đây</a> </p>
                              <p>&reg;Mọi chi tiết xin vui lòng liên hệ duyanh.bka@gmail.com.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear">&nbsp;</div>
                </div>
            </div>
            <div class="block_close_menu">&nbsp;</div>
        </div>
        <a href="javascript:;" id="to_top"><img src="http://st.f1.giaitri.vnexpress.net/i/v1/icons/icon_gototop.png" alt=""/></a>
        <!-- InstanceBeginEditable name="javascript footer" -->
        <!-- InstanceEndEditable --><!-- /page -->
        <script language="javascript" type="text/javascript" src="http://st.f2.vnecdn.net/responsive/j/v10/interactions/cmt.widget.js"></script>
                <script type="text/javascript" src="http://st.polyad.net/library/2014/GiaiTriAds.js"></script>
                <script src="http://st.polyad.net/Vals/36/0/3521/Val.js" type="text/javascript"></script>
        <script src="http://st.polyad.net/Vals/51/0/1003521/Val.js" type="text/javascript"></script>
                <script type="text/javascript">
            var PAGE_FOLDER = 1003521;
            var PAGE_DETAIL = 1;
            var PageHot     = 0;

            //document ready
            $(function(){
                //Show parser
                if ( typeof(Parser) != "undefined" ) {
                    Parser.SITE_URL     = "http://vnexpress.net";
                    Parser.URL          = "http://st.f2.vnecdn.net/responsive/j/v10";
                    Parser.FLASH_URL    = "http://st.f4.giaitri.vnexpress.net/f/v1";
                    Parser.SITE_ID      = 1002691;
                    Parser.AUTO_PLAY    = 1;
                    Parser.parseAll();
                }

                

                            });

            //Show polyads
            try{Poly_showads();}catch(e){}
        </script>
        <div class="clear">&nbsp;</div>
        <div id="show_popup_idm"></div>
        <div id="fb-root"></div>
    </body>
    <!-- InstanceEnd -->
</html>