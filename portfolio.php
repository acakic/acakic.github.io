<?php include 'header.php';	?> 
</head>
<body>
	<div id="wrapper" class="portfolio">
		<div class="wrapper-holder">
			<header id="header">
				<a class="menu_trigger" href="#">menu</a>
					<?php include 'navigation.php';	?> 
			</header>
		</div>
		<div class="wrapper-holder grey">
			<section id="main">
				<h2>All works that I made</h2>
				<ul id="filters" class="sub_nav">
					<li class="active" data-filter="*">All works</li>
					<li data-filter=".web">Web design</li>
					<li data-filter=".illustration">Illustration</li>
					<li data-filter=".dtp">Projects</li>
					<li data-filter=".key">gimp/photoshop</li>
					<li data-filter=".identity">Identity</li>
				</ul>
				<ul id="container" class="item-list">
					<li class="item web key" >
						<div class="image ">
							<img src="images/pic_01.png"  alt="" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_1">
									<div class="item-content">
										<h4>Avatar</h4>
										<p>This picture (avatar) was made for steam. Like a nickname</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item illustration identity">
						<div class="image">
							<img src="images/pic_1_1.png"  alt="" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_2">
									<div class="item-content">
										<h4>voluptas assumenda</h4>
										<p>Sepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
									</div>
									</a>
							</div>
						</div>
					</li>
					<li class="item web dtp">
						<div class="image">
							<img src="images/pic_02.png"  alt="" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_3">
									<div class="item-content">
										<h4>PHP project from scratch</h4>
										<p>This is my first project I've worked on completely alone. It's an online shop. Made in MVC architecture.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item illustration key">
						<div class="image">
							<img src="images/pic_03.png"  alt="" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_4">
									<div class="item-content">
										<h4>Logo</h4>
										<p>Created logo for ManSistem hidraulic company. </p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item web identity">
						<div class="image">
							<img src="images/pic_04.png"  alt="" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_5">
									<div class="item-content">
										<h4>voluptas assumenda</h4>
										<p>Sepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item dtp identity">
						<div class="image">
							<img src="images/pic_05.png"  alt="" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_6">
									<div class="item-content">
										<h4>WordPress project</h4>
										<p>I worked on this site at an archisolar company. It has helped me a lot to learn what it is like to work in WordPress</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item dtp key">
						<div class="image">
							<img src="images/pic_06.png"  alt="" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_7">
									<div class="item-content">
										<h4>voluptas assumenda</h4>
										<p>Sepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item web identity">
						<div class="image">
							<img src="images/pic_07.png"  alt="" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_8">
									<div class="item-content">
										<h4>voluptas assumenda</h4>
										<p>Sepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
									</div>
								</a>
							</div>
						</div>
					</li>
				</ul>
			</section>
		</div>
		<?php include 'footer.php';	?>
		<!-- <footer id="footer">
			<div class="footer-content">
				<ul class="social">
					<li class="email"><a href="#">Email</a></li>
					<li class="facebook"><a href="#">Facebook</a></li>
					<li class="google"><a href="#">Google+</a></li>
					<li class="twitter"><a href="#">Twitter</a></li>
					<li class="pinterest"><a href="#">Pinterest</a></li>
				</ul>
				<p class="copy">Copyright 2014 John Markowitz. All rights reserved.</p>
			</div>
		</footer>	
	</div>-->
	<div style="display:none;">
		<div id="portfolio_1" class="popup_portfolio">
			<img src="images/img_pf02.jpg"  alt="" />
			<h3>Title of the work</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div id="portfolio_2" class="popup_portfolio">
			<img src="images/img_pf02.jpg"  alt="" />
			<h3>Title of the work</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div id="portfolio_3" class="popup_portfolio">
			<img src="images/img_pf02.jpg"  alt="" />
			<h3>Title of the work 3</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div id="portfolio_4" class="popup_portfolio">
			<img src="images/img_pf02.jpg"  alt="" />
			<h3>Title of the work 4</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div id="portfolio_5" class="popup_portfolio">
			<img src="images/img_pf02.jpg"  alt="" />
			<h3>Title of the work 5</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div id="portfolio_6" class="popup_portfolio">
			<img src="images/img_pf02.jpg"  alt="" />
			<h3>Title of the work 6</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div id="portfolio_7" class="popup_portfolio">
			<img src="images/img_pf02.jpg"  alt="" />
			<h3>Title of the work 7</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div id="portfolio_8" class="popup_portfolio">
			<img src="images/img_pf02.jpg"  alt="" />
			<h3>Title of the work 8</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/cells-by-row.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html> -->