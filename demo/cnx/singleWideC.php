<?php
/*
Single Post Template: [Lorenz]
Description: Wider Photo Blog template - Canvas Element
*/
?>
<?php $option = get_option('refraction-options'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="generator" content="Wordpress" />
		
		<title><?php bloginfo('name'); ?></title>
		
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
                <link  href="http://fonts.googleapis.com/css?family=Cardo" rel="stylesheet" type="text/css" >
		
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mootools.js"></script>
		

		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/template.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/typography.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/rokmoomenu.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wp.css" type="text/css" />

		<style type="text/css">
			
			div.wrapper { margin: 0 auto; width: <?php echo $option['site_width']; ?>px;padding:0;}
			#inset-block-left { width:0px;padding:0;}
			#inset-block-right { width:0px;padding:0;}
			#maincontent-block { margin-right:0px;margin-left:0px;}
			#main-body ul.menu li a:hover, ul.roknewspager-numbers li.active, .feature-block .feature-desc, #horiz-menu li.active .link span, #horiz-menu li:hover .link span, #horiz-menu li.sfHover .link span, #horiz-menu li:hover li:hover .link span, #horiz-menu li:hover li:hover li:hover .link span, #horiz-menu li.sfHover li.sfHover .link span, #horiz-menu li.sfHover li.sfHover li.sfHover .link span, #showcase-section, .side-mod h3, #searchmod-surround h3, #main-body ul.menu li a:hover, ul.roknewspager-numbers li.active, a:hover, #featuremodules {color: <?php echo $option['showcase_text']; ?>;}
			#showcase-section .feature-block .feature-title {color:<?php echo $option['showcase_title']; ?>;}
			#showcase-section a {color: <?php echo $option['showcase_link']; ?>;}
			.variation-chooser input, #mainbody-overlay, #searchmod-surround .inputbox, form.search_result input.button, form.poll input.button, form.form-login .inputbox, form.form-login input.button, form.log input.button, #bottom, form#emailForm input.button, #copyright, #top-button a, input#search_searchword.inputbox, form.search_result legend, .contact_email .inputbox, .readon-wrap1 input.button, input#email.required, .logo-module, .footer-mod {color: <?php echo $option['body_text']; ?>;}
			#roktwittie .status .header .nick, .search-results-full span.highlight, #main-background div.articleListingImage img, #main-background div.sbArticleImage img  {background:<?php echo $option['body_link']; ?>;}
			a, .contentheading, #horiz-menu li:hover li .link span, #horiz-menu li:hover li:hover li .link span, #horiz-menu li.sfHover li .link span, #horiz-menu li.sfHover li.sfHover li .link span, .componentheading span, .roktabs-links li.active, .side-mod h3 span, .showcase-panel h3 span, #featuremodules h3, #commentform .readon-wrap1 input.button {color: <?php echo $option['body_link']; ?>;}
    		
    		/* s-c-s (sidebar-content-sidebar) */
			.s-c-s .colmid {float:left;position:relative;left:200px;width:200%;}
			.s-c-s .colright {float:left;left:50%;margin-left:-400px;position:relative;width:100%;background-position: 0 0;background-repeat: repeat-y;}
			.s-c-s .col1wrap {float:right;position:relative;right:100%;width:50%;padding-bottom:1em;}
			.s-c-s .col1pad {margin:0 0 0 400px;overflow:hidden;}
			.s-c-s .col1 {overflow:hidden;width:100%;}
			.s-c-s .col2 {float:left;position:relative;overflow:hidden;left:200px;margin-left:-50%;width:200px;}
			.s-c-s .col3 {float:left;position:relative;overflow:hidden;left:0;width:200px}
			.s-c-s .maincol2-padding {padding: 0 15px;}

			/* s-c-x (sidebar-content) */
			.s-c-x .colright {float:left;left:<?php echo $option['sidebar_left_width']; ?>px;position:relative;width:200%;}
			.s-c-x .col1wrap {float:right;padding-bottom:1em;position:relative;right:<?php echo $option['sidebar_left_width']; ?>px;width:50%;}
			.s-c-x .col1 {margin:0 0 0 <?php echo $option['sidebar_left_width']; ?>px;overflow:hidden;position:relative;right:100%;}
			.s-c-x .col2 {float:left;position:relative;right:<?php echo $option['sidebar_left_width']; ?>px;width:<?php echo $option['sidebar_left_width']; ?>px;}
			.s-c-x .maincol2-padding {padding: 0;}
			.s-c-x #leftcol-padding {padding-right: 15px;} 

			/* x-c-s (content-sidebar) */
			.x-c-s .colright {float:left;margin-left:-<?php echo $option['sidebar_right_width']; ?>px;position:relative;right:100%;width:200%;background-position: 0 0;background-repeat: repeat-y;}
			.x-c-s .col1wrap {float:left;left:50%;padding-bottom:1em;position:relative;width:50%;}
			.x-c-s .col1 {margin:0 0 0 <?php echo $option['sidebar_right_width']; ?>px;overflow:hidden;}
			.x-c-s .col3 {float:right;position:relative;left:<?php echo $option['sidebar_right_width']; ?>px;width:<?php echo $option['sidebar_right_width']; ?>px;}
			.x-c-s .maincol2-padding {padding: 0;}
			.x-c-s #rightcol-padding {padding-left: 15px;} 
    		
  		</style>
  		
  		<?php if (rok_isIe()) :?>
			<!--[if IE 7]>
				<link href="<?php bloginfo('template_directory'); ?>/css/template_ie7.css" rel="stylesheet" type="text/css" />	
			<![endif]-->	
		<?php endif; ?>
		<?php if (rok_isIe(6)) :?>
			<!--[if lte IE 6]>
				<link href="<?php bloginfo('template_directory'); ?>/css/template_ie6.css" rel="stylesheet" type="text/css" />
				<script src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG.js"></script>
				<script type="text/javascript">
					var pngClasses = ['.png', '.menutop li.active a', '.readon1-l', '.readon1-m', '.readon1-r', '#roktwittie .status .header', '.blog .roknewspager-div', '.control-prev', '.control-next', '.control-prev-hover', '#main-body ul.menu li', '.roknewspager-div', '#main-body ul.menu li a', '.roknewspager-pages', '.roknewspager-prev-disabled', '.roknewspager-prev', '.roknewspager-next-disabled', '.roknewspager-numbers', '.roknewspager-next', '#roktwittie .roktwittie-surround', 'a.sbDisqusCounter', 'div.superBloggerTop', 'div.sbRating', 'div.sbAuthorBlock', '#disqus_thread', 'div.superBloggerTop a', 'div.superBloggerTop img', '.sbAuthorLatestTweets ul li', '.sbAuthorLatest ul li', 'span.ob_commentOut', '#roksearch_results .roksearch_row_btm', '#roksearch_results .roksearch_header', '#roksearch_results', '#roksearch_results .roksearch_odd', '#roksearch_results .roksearch_even', '#roksearch_results .roksearch_even-hover', '#roksearch_results .roksearch_odd-hover', 'pre', 'blockquote', 'th.sectiontableheader', '.roktabs-links ul li span', '.roktabs-links ul li.active', '.roktabs-wrapper .arrow-next', '.roktabs-wrapper .arrow-prev', '.active-arrows'];
	
					pngClasses.each(function(fixMePlease) {
						DD_belatedPNG.fix(fixMePlease);
					});
	
				</script>
			<![endif]-->
		<?php endif; ?>
  		

  		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mootools.bgiframe.js"></script>
  		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/roknewsflash-packed.js"></script>
  		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokstories.js"></script>
  		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/roktabs/roktabs.js"></script>

		<script type="text/javascript">

			window.templatePath = '<?php bloginfo('template_directory'); ?>';
			window.uri = '<?php bloginfo('wpurl'); ?>';
			window.currentStyle = '<?php echo $option['style_preset']; ?>';
	
			window.addEvent('domready', function() {
				var modules = ['side-mod', 'showcase-panel'];
				var header = ['h3','h1'];
				RokBuildSpans(modules, header);
			});
			InputsExclusion.push('.content_vote','#login-module')
			window.addEvent('domready', function() {
				var featured = $('featuremodules'), featOpacity = <?php if(rok_isIe()) { ?>1<?php } else { ?>0.7<?php } ?>;
				if (featured) {
					var featChildren = featured.getChildren();
					if (featChildren.length > 1) {
						featChildren.each(function(feat, i) {
							var color = feat.getStyle('color');
							var lnks = feat.getElements('a');
							var h3s = feat.getElements('h3');
					
							var fxColors = [];
							if (lnks.length > 0) {
								var lnkColor = feat.getElement('a').getStyle('color');
								lnks.each(function(lnk, i) { fxColors.push(new Fx.Style(lnk, 'color', {wait: false}).set(color)); });
							}
					
							var fxH3s = [];
							if (h3s.length > 0) {
								var h3Color = feat.getElement('h3').getStyle('color');
								h3s.each(function(h3, i) { fxH3s.push(new Fx.Style(h3, 'color', {wait: false}).set(color));	});
							}
					
							var fx = new Fx.Style(feat, 'opacity', {duration: 300, wait: false}).set(featOpacity);
					
							feat.addEvents({
								'mouseenter': function() {
									fx.start(1);
									if (fxColors.length) { fxColors.each(function(fxC) { fxC.start(lnkColor); }); }
									if (fxH3s.length) { fxH3s.each(function(fxH) { fxH.start(h3Color); }); }
								},
								'mouseleave': function() {
									fx.start(featOpacity);
									if (fxColors.length) { fxColors.each(function(fxC) { fxC.start(color); }); }
									if (fxH3s.length) {	fxH3s.each(function(fxH) { fxH.start(color); }); }
								}
							})
						});
					}
				}	
			});
			window.addEvent('domready', function() {
    			new Rokmoomenu($E('ul.menutop '), {
    				bgiframe: false,
    				delay: 500,
    				verhor: true,
    				animate: {
    					props: ['height'],
    					opts: {
    						duration: 500,
    						fps: 100,
    						transition: Fx.Transitions.Quad.easeOut
    					}
    				},
    				bg: {
    					enabled: true,
    					overEffect: {
    						duration: 500,
    						transition: Fx.Transitions.Sine.easeOut
    					},
    					outEffect: {
    						duration: 600,
   			 				transition: Fx.Transitions.Sine.easeOut
   			 			}
    				},
    				submenus: {
    					enabled: true,
   			 			opacity: 0.9,
    					overEffect: {
    						duration: 50,
    						transition: Fx.Transitions.Expo.easeOut
    					},
    					outEffect: {
    						duration: 600,
    						transition: Fx.Transitions.Sine.easeIn
    					},
    					offsets: {
    						top: 3,
    						right: 1,
    						bottom: 0,
    						left: 1
    					}
    				}
    			});
  		  });
  		</script>
  		
  		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		
		<?php wp_head(); ?>

	</head>
	
	<body id="<?php echo $option['font_face']; ?>" class="wide <?php echo $option['font_size']; ?> <?php echo $option['style_preset']; ?> <?php echo $option['bg_style']; ?> <?php echo $option['body_overlay']; ?> iehandle">
    <canvas id="c"></canvas>
		<div id="main-backgroundWide">
		
				<!--Begin Header-->
		
				<div id="header-overlay" class="png">
					<div class="wrapper">
		
						<?php if ($option['logo_enabled'] == 'true') { ?>
		
							<!--Begin Logo-->

							<a href="<?php bloginfo('wpurl'); ?>/" id="logo" class="png"></a><div id="blinking"><img src="http://www.leighhowells.com/wp-content/themes/leigh/images/blinking.gif" /></div>
				
							<!--End Logo-->
						
						<?php } ?>
					
						<!--Begin Horizontal Menu-->
						
						<?php if ($option['menutop_enabled'] == 'true') { ?>
						
						<div id="horiz-menu-surround">
							<div id="horiz-menu" class="moomenu png">
							
								<ul class="menutop" >
								
									<?php if ($option['menutop_home_enabled'] == 'true') { ?>
			
									<li class="home png<?php if ( is_front_page() ) echo ' active';?>" <?php if ( is_front_page() ) echo 'id="current"';?>><a href="<?php bloginfo('home'); ?>/" class="link"><span><?php _e('Home'); ?></span></a></li>
									
									<?php } ?>
									
									<?php
									$my_pages = wp_list_pages('echo=0&title_li=&link_before=<span>&link_after=</span>&sort_column='.$option['menutop_sorting'].'&depth='.$option['menutop_depth']);
									$lines = explode("\n", $my_pages);

									$output = "";
									foreach($lines as $line) {
										$line = trim($line);
										if (substr($line, 0, 4) == "<li ") {
											if (preg_match("/current_page_item/", $line)) $line = str_replace('<li class="', '<li id="current" class="png ', str_replace("current_page_item", "active", $line));
				
											if (substr($line, -5, 5) != "</li>") {
												preg_match("#class=(?<!\\\)\"(.*)(?<!\\\)\"#U", $line, $klass);
												if (count($klass)) {
													$klass = $klass[0];
													$new_klass = substr($klass, 0, -1);
													$line = str_replace($klass, $new_klass.' parent"', $line);
												}
											}
										}
	
										else if (substr($line, 0, 4) == "<ul>") $line = str_replace("<ul>", '<div class="drop-wrap columns-1 png"><div class="png drop1"></div><ul class="png columns-1">', $line);
										else if (substr($line, 0, 5) == "</ul>") $line = str_replace("</ul>", '</ul></div>', $line);
	
										$output .= $line."\n";
									}
	
									$output = str_replace("<a", '<a class="link"', $output);
									$output = str_replace('<li class="', '<li class="png ', $output);

									echo $output;
									?>
			
								</ul>
							</div>
						</div>
						
						<?php } ?>
						
						<!--End Horizontal Menu-->
				
					</div>
				</div>
				
				<!--End Header-->

				<?php $option = get_option('refraction-options'); ?>
			
				<!--Begin Main Body-->
			
				<div id="mainbody-overlay" class="png">
					<div id="mainbody-overlay2" class="png">
						<div class="wrapper">
							<div id="main-body">
								<div id="main-body-surround">
							
									<!--Begin Main Content Block-->
									
									<div id="main-content" class="<?php echo $option['layout_subpage']; ?>">
										<div class="colmask leftmenu">
							    		    <div class="colmid">
	    					    	 		   <div class="colright">
	        						 		
	        										<!--Begin col1wrap -->    
	            						    
	            						    		<div class="col1wrap wide">
	            										<div class="col1pad">
	            						            		<div class="col1">
	                    						        		<div id="maincol2">
	                    											<div class="maincol2-padding">
		                    											<div id="maincontent-tm" class="png">
		                    												<div id="maincontent-tl" class="png">
		                    													<div id="maincontent-tr" class="png"></div>
		                    												</div>
		                    											</div>
																		<div id="maincontent-m" class="png">
																			<div id="maincontent-l" class="png">
																				<div id="maincontent-r" class="png">
																					<div id="maincontent-surround" class="png">
																					
																					                    															
																		            	<div class="bodycontent">
		                    												            	<div id="maincontent-block">
		                																		<div class="">
																									<div id="page" class="full-article">
																										<div class="">
																											
																											<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
																											
																											<!-- Begin Page -->
																											
																											<div <?php post_class(); ?>>
																											
	    																										<div class="article-rel-wrapper">
	    																											<h2 class="contentheading"><?php the_title(); ?></h2>
	    																										</div>
	    																									
	    																										<?php if($option['single_info'] == 'true') { ?>
	    																									
	    																										<?php if($option['single_info_avatar'] == 'true') { ?>
	    																									
	    																										<div class="author_grav">
	    																									
	    																											<?php echo get_avatar( get_the_author_email(), 50 ); ?>
	    																									
	    																										</div>
	    																									
	    																										<?php } ?>
	    																									
	    																										<div class="post-info">
	    																									
	    																										<?php _re('Last Updated on'); ?> <?php the_modified_date('l, j F o h:i'); ?><br />
	    																									
	    																										<?php _re('Written by'); ?> <b><?php the_author(); ?></b><br />
	    																									
	    																										<?php the_time('l, j F o h:i'); ?><br />
	    																										
	    																										</div>
	    																										<div class="clr"></div>
	    																										
	    																										<hr />
	    																									
	    																										<?php } ?>
	    																									
	    	
	    																										
																												<?php the_content(); ?>
																											
																												<div class="clr"></div>
																											
																												<?php wp_link_pages('before=<div class="pagination"><span class="pagination-name">'._r('Pages:').'</span><span class="pagination-numbers">&after=</span></div>'); ?>
																											
																												<?php if ( has_tag() ) : ?>
																															
																												<div class="single-tags">
																													<?php the_tags(_r('Tags: '), ', ', ''); ?>
																												</div><br />
										
																												<?php endif; ?>
																											
																												<?php if ($option['single_entry_footer'] == 'true') { ?>
																											
																												<div class="entry_post_footer">
																													<small>
																			
																														<?php _re('This entry was posted'); ?>
																														<?php /* This is commented, because it requires a little adjusting sometimes.
																														You'll need to download this plugin, and follow the instructions:
																														http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
																														/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
																														<?php _re('on'); ?> <?php the_time('l, F jS, Y') ?> <?php _re('at'); ?> <?php the_time() ?>
																														<?php _re('and is filed under'); ?> <?php the_category(', ') ?>.
																														<?php _re('You can follow any responses to this entry through the'); ?> <?php post_comments_feed_link('RSS 2.0'); ?> <?php _re('feed'); ?>.

																														<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
																														// Both Comments and Pings are open ?>
																														<?php _re('You can'); ?> <a href="#respond"><?php _re('leave a response'); ?></a>, <?php _re('or'); ?> <a href="<?php trackback_url(); ?>" rel="trackback"><?php _re('trackback'); ?></a> <?php _re('from your own site.'); ?>

																														<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
																														// Only Pings are Open ?>
																														<?php _re('Responses are currently closed, but you can'); ?> <a href="<?php trackback_url(); ?> " rel="trackback"><?php _re('trackback'); ?></a> <?php _re('from your own site.'); ?>

																														<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
																														// Comments are open, Pings are not ?>
																														<?php _re('You can skip to the end and leave a response. Pinging is currently not allowed.'); ?>
	
																														<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
																														// Neither Comments, nor Pings are open ?>
																														<?php _re('Both comments and pings are currently closed.'); ?>

																														<?php } edit_post_link(_r('Edit this entry'),'','.'); ?>

																													</small>
																												</div>
																											
																												<?php } ?>
																				
																												<a name="comments"></a>
																												
																												<?php comments_template(); ?>
																											
																											</div>
																											
																											<!-- End Page -->
																											
																											<?php endwhile; else: ?>
														
																											<span class="alert"><?php _re('Sorry, no posts matched your criteria.'); ?></span>
														
																											<?php endif; ?>
	
																										</div>
																									</div>
																								</div>
								                    										</div>
							                    										</div>
		            					        										<div class="clr"></div>
		                        													</div>
		                        												</div>
		                        											</div>
		                        										</div>
																		<div id="maincontent-bm" class="png">
																			<div id="maincontent-bl" class="png">
																				<div id="maincontent-br" class="png"></div>
																			</div>
																		</div>
			                    									</div>
	        		            								</div>    
															</div> 
														</div> 
													</div> 
												</div>
	    									</div>				
									<!--End Main Content Block-->		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!--End Main Body-->

<?php get_footer(); ?>