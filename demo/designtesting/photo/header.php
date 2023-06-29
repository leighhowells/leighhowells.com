<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
     <meta name="viewport" content="initial-scale=1, maximum-scale=1 width=device-width">
		<title>
			<?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?>
		</title>

	    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
      
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style_<?php echo date('w'); ?>.css" media="screen" /> 
        
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" media="screen" />
        <![endif]-->
         <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" media="screen" />
        <![endif]-->
		<!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie8.css" media="screen" />
        <![endif]-->
		<!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie9.css" media="screen" />
        <![endif]-->
		
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/waypoints.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/main.js"></script>
		
		<!-- begin Reedge code--><script type="text/javascript">/*rvidheader#1.5.0*/var REED_host = (("https:" == document.location.protocol) ? "https://s"+"3.ama"+"zonaw"+"s.com/statics"+".reedge.com" : "http://statics"+".reedge.com");var REED_s = 'REED_100154_100130';var REED_f;if((typeof(jQuery) != "undefined")) REED_f="REED_main_no_jquery.js";else REED_f="REED_main.js" ;document.write(unescape("%3Cscript src='" + REED_host + "/js/"+REED_f+"' type='text/javascript'%3E%3C/script%3E"));</script><!-- end Reedge code -->	
        
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
        
        <?php global $tpl_body_id;  if (!$tpl_body_id) { $tpl_body_id = 'default'; }  ?>
				
	</head>
    
	<body <?php if(is_home()){echo('class="home"');}?>  id="<?php echo $tpl_body_id; ?>"  class="<?php echo $post->post_name; ?> <?php $category = get_the_category(); echo $category[0]->cat_name;
?>" >
    <div id="top">
    	<div class="innerTop">
        <a href="#"><div id="lightSwitchOn"></div></a>
        <a href="#"><div id="lightSwitchOff"></div></a>
		<h1 class="logo"><a href="<?php echo get_option('home'); ?>/"></a></h1>
	
        <div class="strapLine"><strong>Leigh Howells</strong>&nbsp;&#8226;&nbsp;<a href="http://www.leighhowells.com/category/portfolio/">Designerist</a>&nbsp;&#8226;&nbsp;<a href="http://www.leighhowells.com/category/music/">Tune maker</a>&nbsp;&#8226;&nbsp;<a href="http://www.leighhowells.com/category/blog/">Writer of words</a></div>

        				 
		<ul id="nav" >
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
		</ul>
        
        </div>
     </div>
        
        
	<div id="wrapper">
		<div id="staticfoot"></div>
	<div id="page-wrap">

        		
    <div class="clear"></div>