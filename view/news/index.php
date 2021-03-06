<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<!-- This template was created by Mantis-a [http://www.mantisa.cz/]. For more templates visit Free website templates [http://www.mantisatemplates.com/]. -->

<meta name="Description" content="..." />
<meta name="Keywords" content="..." />
<meta name="robots" content="all,follow" />
<meta name="author" content="..." />
<meta name="copyright" content="Mantis-a [http://www.mantisa.cz/]" />

<meta http-equiv="Content-Script-Type" content="text/javascript" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- CSS -->
<link rel="stylesheet" href="/template/css/style.css" type="text/css" media="screen, projection, tv" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="/template/css/style-ie.css" media="screen, projection, tv" /><![endif]-->
<link rel="stylesheet" href="/template/css/style-print.css" type="text/css" media="print" />

<title>Blog | Homepage</title>
</head>

<body>
<p><a name="top"></a></p>

	<div id="wrapper">
	
		<!-- Header -->
		<div id="header">

			<!-- Your website name  -->
			<h1><a href="#">THIS IS A BLOG</a></h1>
			<!-- Your website name end -->
		
			<!-- Slogan for your blog -->
			<h2>Lorem ipsum dolor sit amet, consectetuer&hellip;</h2>
			<!-- Slogan for your blog end -->
		
			<!-- Search form -->	
			<form class="searching" action="">
			<fieldset>
				<label></label>
					<div id="picture-input">
						<input type="text" class="search" onfocus="if(this.value==this.defaultValue)this.value=''" 
						onblur="if(this.value=='')this.value=this.defaultValue" value="Search&hellip;" />
					</div>
						<input class="hledat" type="image" src="/template/images/search-button.gif" name="" value="Search" alt="Search" />
			</fieldset>
			</form>
			<!-- Search form end -->	
	
<a href="#skip-menu" class="hidden">Skip menu</a>
		
			<!-- Menu -->
            <ul id="menu">
                <li id="active"><a href="#">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="#">Author<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="#" class="kuk">Photos<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="#">Contact<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="#" class="kuk">Links<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>
			<!-- Menu end -->
				
		</div>
		<!-- Header end -->

	
<hr class="noscreen" />

<div id="skip-menu"></div>
	
	<!-- Content  -->
	<div id="content">
	
		<!-- Content box -->
		<div id="content-box">
		
			<!-- Content box left -->
			<div id="content-box-left">
				<div id="rss-box">
					<p>RSS <a href="#">Articles</a>/<a href="#">Comments</a></p>
				</div>
					
				<div id="content-box-left-in">
					
					<!-- Content box with light blue background -->
					<div class="box">
					<div class="box-top">
					<div class="box-bottom">
						<div id="box-in">
							<div class="article">
								<div class="date">
									<p class="day"><span>18th</span></p>
									<p>02/08</p>
								</div>

                                <?php foreach ($newsList as $newsItem):?>
                                <div class="post">
								<h3 class="title"><a href="/news/<?php echo $newsItem['id'];?>"><?php echo $newsItem['title'];?></a></h3>
								<p class="byline"><?php echo $newsItem['date'];?></p>
									<p><img class="float" src="/template/images/flower.jpg" alt="flower" width="128" height="96" /><a href="#"><?php echo $newsItem['short_content'];?>
									</p>
                            </div>
                            <div class="meta">
									<p class="continue"><a href="/news/<?php echo $newsItem['id'];?>">Continue&hellip;</a>]</p>

							<? endforeach ; ?>

					</div>
					</div>
					</div>
                    </div>
                    </div>
                </div>
					<!-- Content box with light blue background end -->
						
					<div class="paging" title="">
					</div>
						
				</div>
			</div>
			<!-- Content box left end -->
			
			<!-- Content box right -->	
			<div id="content-box-right">
				<div class="content-box-right-in">
					<h4>About me</h4>
						<img class="me" src="/template/images/me.jpg" alt="Me" width="65" height="70" />
						<p>Hi, my name is Petr. I'm intersted in science, computers and swimming. For more information visit <a href="#">Author</a>.</p>
						<div class="cleaner">&nbsp;</div>
				</div>
					
					<!-- Darker background in the right column -->
					<div class="darker-bg">
						<div class="content-box-right-in" style="margin: 0;">
						<h4>Categories</h4>
							<ul class="categories">
								<li><a href="#">Category1</a> <span>(5)</span></li>
								<li><a href="#">Category2</a> <span>(12)</span></li>
								<li><a href="#">Category3</a> <span>(23)</span></li>
								<li><a href="#">Category4</a> <span>(6)</span></li>
								<li><a href="#">Category5</a> <span>(2)</span></li>
								<li><a href="#">Category6</a> <span>(18)</span></li>
							</ul>
						</div>
					</div>
					<!-- Darker background in the right column -->
						
						<div class="content-box-right-in">
						<h4>Archive</h4>
							<ul>
								<li><a href="#">February 2008</a></li>
								<li><a href="#">January 2008</a></li>
								<li><a href="#">December 2007</a></li>
								<li><a href="#">November 2007</a></li>
								<li><a href="#">October 2007</a></li>
								<li><a href="#">Semptember 2007</a></li>
								<li><a href="#">August 2007</a></li>
								<li><a href="#">July 2007</a></li>
								<li><a href="#">June 2007</a></li>
								<li><a href="#">May 2007</a></li>
								<li><a href="#">April 2007</a></li>
								<li><a href="#">March 2007</a></li>
							</ul>
							
						<h4>Contact information</h4>
							<address>
								<span>E-mail:</span> nick&#64;<!---->name.cz<br />
								<span><abbr title="Windows Live Messenger">WLM</abbr>:</span> nick&#64;<!---->name.cz<br />
								<span>Jabber:</span> nick&#64;<!---->name.cz
							</address>

					</div>
				</div>
				<!-- Content box right end -->
				<div class="cleaner">&nbsp;</div>
				
			</div>
			<!-- Content box end -->
			
		</div>
		<!-- Content end -->

<hr class="noscreen" />
	
	<!-- Footer -->
	<div id="footer">
		<div id="footer-in">
			<p>&copy; <a href="#">My blog</a>, 2008. | Powered by&hellip; | <a href="http://www.mantisatemplates.com/">Free web templates</a> 
			by <a href="http://www.mantisa.cz/">Mantis-a</a> | <span>&uarr;</span> <a href="#top"><span>Top</span></a></p>
		</div>
	</div>
	<!-- Footer end -->

</div>
</body>
</html>