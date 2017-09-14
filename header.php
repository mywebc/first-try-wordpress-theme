<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- 引用提醒 -->
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<? bloginfo('stylesheet_url'); ?>" type="text/css" />
    <title><?php if (is_home()||is_search()) { bloginfo('name'); } else { wp_title(''); print " - "; bloginfo('name'); } ?> </title>
    <!--<?php wp_head(); ?> -->
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/unslider.min.js"></script>
</head>
<body>
<!--顶部固定导航栏-->
<div class="nav_header">
    <nav class="container">
        <a href=" <?php echo get_option('home'); ?> "> <img src="<?php bloginfo('template_url'); ?>/images/boy.jpeg" alt="图片"></a>
        <ul>
            <!--<li><a href="<?php echo get_option('home'); ?> ">首页</a></li>-->
        
         
           <!--<?php wp_list_categories('title_li=0&orderby=name&show_count=0&depth=2'); ?>-->
           
     
            <?php 
                // 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
                wp_nav_menu( array( 'menu' => 'mymenu', 'depth' => 2) );
             ?>
       
       
    
        </ul>
         <?php include (TEMPLATEPATH . '/searchform.php'); ?>
       
    </nav>
</div>
<!--这是一个空的div-->
<div class="index_empty"></div>