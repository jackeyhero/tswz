<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/8
 * Time: 14:40
 */
?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!--  HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/baguetteBox.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>


<!--<div class="navbar-wrapper">-->
<!--    <div class="container">-->
<!--        <nav class="navbar navbar-static navbar-fixed-top ts-nav">-->
<!--            <div class="container">-->
<!--                <div class="navbar-header">-->
<!--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
<!--                        <span class="sr-only"></span>-->
<!--                        <span class="icon-bar"></span>-->
<!--                        <span class="icon-bar"></span>-->
<!--                        <span class="icon-bar"></span>-->
<!--                    </button>-->
<!--                    <a class="navbar-brand ts-logo" href="--><?php //echo site_url(); ?><!--"><img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/assets/images/logo.png" alt="logo" ></a>-->
<!--                </div>-->
<!--                <div id="navbar" class="navbar-collapse collapse ts-menu">-->
<!--                    <ul class="nav navbar-nav ts-menu-nav">-->
<!--	                    --><?php //wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
<!--                        <li class="active"><a href="#">Home</a></li>-->
<!--                        <li><a href="#about">About</a></li>-->
<!--                        <li><a href="#contact">Contact</a></li>-->
<!--                        <li class="dropdown">-->
<!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">Action</a></li>-->
<!--                                <li><a href="#">Another action</a></li>-->
<!--                                <li><a href="#">Something else here</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </nav>-->
<!--    </div>-->
<!--</div>-->

<div id="wrapper" class="home-page">
    <header class="top header-v1 desktops-section default-top"><!-- S top-main -->
        <div class="top-main">
            <div class="page-width clearfix">
                <div class="logo float-left" skinobjectzone="HtmlLogo_395"><a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="logo" "></a></div>

                <div class="top-main-content float-right"><!-- S nav -->
                    <nav class="nav">
                        <div class="main-nav clearfix" skinobjectzone="menu_661">
                            <ul class="sf-menu sf-js-enabled">
                                <li class="current"><a class="first-level" href="/" target=""><strong>首页</strong></a><i></i></li>
                                <li class=""><a class="first-level sf-with-ul" href="/html/about/" target=""><strong>关于我们</strong><span class="sf-sub-indicator"> »</span></a><i></i>
                                    <ul class="" style="display: none; visibility: hidden;">

                                        <li class=""><a class="" href="/html/about/jianjie/" target=""><strong>关于我们</strong></a></li>

                                        <li class=""><a class="" href="/html/about/wenhua/" target=""><strong>公司文化</strong></a></li>

                                        <li class=""><a class="" href="/html/about/rongyu/" target=""><strong>荣誉</strong></a></li>

                                    </ul>
                                </li><li class=""><a class="first-level sf-with-ul" href="/html/products/" target=""><strong>产品</strong><span class="sf-sub-indicator"> »</span></a><i></i>
                                    <ul class="" style="display: none; visibility: hidden;">

                                        <li class=""><a class="" href="/html/products/p1/" target=""><strong>产品1</strong></a></li>

                                        <li class=""><a class="" href="/html/products/p2/" target=""><strong>产品2</strong></a></li>

                                    </ul>
                                </li><li class=""><a class="first-level sf-with-ul" href="/html/case/" target=""><strong>Case</strong><span class="sf-sub-indicator"> »</span></a><i></i>
                                    <ul class="" style="display: none; visibility: hidden;">

                                        <li class=""><a class="" href="/html/case/case1/" target=""><strong>Commercial space</strong></a></li>

                                        <li class=""><a class="" href="/html/case/case2/" target=""><strong>Apartment</strong></a></li>

                                        <li class=""><a class="" href="/html/case/case4/" target=""><strong>Architecture Garden</strong></a></li>

                                    </ul>
                                </li><li class=""><a class="first-level sf-with-ul" href="/html/join/" target=""><strong>加入我们</strong><span class="sf-sub-indicator"> »</span></a><i></i>
                                    <ul class="" style="display: none; visibility: hidden;">

                                        <li class=""><a class="" href="/html/join/youshi/" target=""><strong>Advantage</strong></a></li>

                                        <li class=""><a class="" href="/html/join/tiaojian/" target=""><strong>Condition</strong></a></li>

                                    </ul>
                                </li><li class=""><a class="first-level sf-with-ul" href="/html/news/" target=""><strong>新闻</strong><span class="sf-sub-indicator"> »</span></a><i></i>
                                    <ul class="" style="display: none; visibility: hidden;">

                                        <li class=""><a class="" href="/html/news/gongsi/" target=""><strong>新闻</strong></a></li>

                                        <li class=""><a class="" href="/html/news/hangye/" target=""><strong>新闻</strong></a></li>

                                    </ul>
                                </li><li class="last"><a class="first-level sf-with-ul" href="/html/contact/" target=""><strong>联系我们</strong><span class="sf-sub-indicator"> »</span></a><i></i>
                                    <ul class="" style="display: none; visibility: hidden;">

                                        <li class=""><a class="" href="/html/contact/job/" target=""><strong>招聘</strong></a></li>

                                        <li class=""><a class="" href="/html/contact/lianxi/" target=""><strong>联系我们</strong></a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>
                    <!-- E nav--></div>
            </div>
        </div>
        <!-- E top-main -->
        <div class="clear"></div>
    </header>
    <!-- S touch-top-wrapper -->
    <div class="touch-top mobile-section clearfix">
        <div class="touch-top-wrapper clearfix">
            <div class="touch-logo" skinobjectzone="HtmlLogo_1514"><a class="" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="logo"></a></div>
            <!-- S touch-navigation -->
            <div class="touch-navigation">
                <div class="touch-toggle">
                    <ul>
                        <li class="touch-toggle-item-last"><a href="javascript:;" class="drawer-menu" data-drawer="drawer-section-menu"><i class="touch-icon-menu"></i><span>Navigation</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- E touch-navigation --></div>
        <!-- S touch-top -->
        <div class="touch-toggle-content touch-top-home">

            <div class="drawer-section drawer-section-menu" style="display: block;">
                <div class="touch-menu" skinobjectzone="menu_2005">
                    <ul>
                        <li><a href="/"><span>Home</span></a></li>
                        <li><a href="javascript:;"><span>About us</span><i class="touch-arrow-down"></i></a>
                            <ul>

                                <li><a href="/html/about/jianjie/"><span>About us</span></a></li>

                                <li><a href="/html/about/wenhua/"><span>Culture</span></a></li>

                                <li><a href="/html/about/rongyu/"><span>Honor</span></a></li>

                            </ul>
                        </li><li><a href="javascript:;"><span>Products</span><i class="touch-arrow-down"></i></a>
                            <ul>

                                <li><a href="/html/products/p1/"><span>Stone quartz brick</span></a></li>

                                <li><a href="/html/products/p2/"><span>The original stone - quartz br</span></a></li>

                                <li><a href="/html/products/p3/"><span>Cement and quartz brick</span></a></li>

                                <li><a href="/html/products/p4/"><span>Wood - quartz brick</span></a></li>

                                <li><a href="/html/products/p5/"><span>2CM quartz brick</span></a></li>

                            </ul>
                        </li><li><a href="javascript:;"><span>Case</span><i class="touch-arrow-down"></i></a>
                            <ul>

                                <li><a href="/html/case/case1/"><span>Commercial space</span></a></li>

                                <li><a href="/html/case/case2/"><span>Apartment</span></a></li>

                                <li><a href="/html/case/case4/"><span>Architecture Garden</span></a></li>

                            </ul>
                        </li><li><a href="javascript:;"><span>Join us</span><i class="touch-arrow-down"></i></a>
                            <ul>

                                <li><a href="/html/join/youshi/"><span>Advantage</span></a></li>

                                <li><a href="/html/join/tiaojian/"><span>Condition</span></a></li>

                            </ul>
                        </li><li><a href="javascript:;"><span>News</span><i class="touch-arrow-down"></i></a>
                            <ul>

                                <li><a href="/html/news/gongsi/"><span>News</span></a></li>

                                <li><a href="/html/news/hangye/"><span>News</span></a></li>

                            </ul>
                        </li><li><a href="javascript:;"><span>Contact us</span><i class="touch-arrow-down"></i></a>
                            <ul>

                                <li><a href="/html/contact/job/"><span>Jobs</span></a></li>

                                <li><a href="/html/contact/lianxi/"><span>Contact us</span></a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">

                $(document).ready(function(){



                    $(".touch-toggle a").click(function(event){

                        var className = $(this).attr("data-drawer");



                        if( $("."+className).css('display') == 'none' ){

                            $("."+className).slideDown().siblings(".drawer-section").slideUp();

                        }else{

                            $(".drawer-section").slideUp();

                        }

                        event.stopPropagation();

                    });



                    /*$(document).click(function(){

                     $(".drawer-section").slideUp();

                    })*/



                    $('.touch-menu a').click(function(){

                        if( $(this).next().is('ul') ){

                            if( $(this).next('ul').css('display') == 'none' ){

                                $(this).next('ul').slideDown();

                                $(this).find('i').attr("class","touch-arrow-up");

                            }else{

                                $(this).next('ul').slideUp();

                                $(this).next('ul').find('ul').slideUp();

                                $(this).find('i').attr("class","touch-arrow-down");

                            }

                        }

                    });

                });

            </script></div>
        <!-- E touch-top --></div>



<div>

