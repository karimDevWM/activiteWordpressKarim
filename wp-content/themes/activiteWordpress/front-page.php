<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/main.css'?>"/>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Future Imperfect</a></h1>
						<nav class="links">
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Feugiat</a></li>
								<li><a href="#">Tempus</a></li>
								<li><a href="#">Adipiscing</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Log In</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							
							<?php 
								if(have_posts()):
									while(have_posts()):
										the_post();
							?>
											<article class="post">
								<header>
									<div class="title">
										<h2><a href="<?= the_permalink() ?>"><?= get_the_title() ?></a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"><?= get_the_date() ?></time>
										<a href="#" class="author"><span class="name"><?php the_author() ?></span><img src="http://localhost/messaoud/activiteWordpress/wp-content/uploads/2022/03/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="single.html" class="featured"><?= the_post_thumbnail('custom-size') ?></a>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
								<footer>
									<ul class="actions">
										<li><a href="<?= the_permalink()?>" class="button large">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							<?php
									endwhile;
								endif;
								echo '<h3>pagination</h3>';
								posts_nav_link(); // Après la boucle
							?>

						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button large previous">Previous Page</a></li>
								<li><a href="#" class="button large next">Next Page</a></li>
							</ul>

					</div>
				<!-- Sidebar -->
					<section id="sidebar">
						
						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
								<header>
									<h2>Future Imperfect</h2>
									<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<?php 
											if(have_posts()):
												while(have_posts()):
													the_post();
										?>
											<article class="mini-post">
												<header>
													<div><?= the_post_thumbnail('custom-size') ?></div>
													<h3><a href="<?=the_permalink()?>"><?=the_title()?></a><img src="http://localhost/messaoud/activiteWordpress/wp-content/uploads/2022/03/avatar.jpg"/></h3>
													<time class="published" datetime="2015-10-20"><?= get_the_date() ?></time>
												</header>
											</article>
										<?php 
												endwhile;
											endif;
										?>
								</div>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
									<!-- latest articles  -->
									<h3>latest 5 best articles</h3>
									<?php 
										$args = array
												(
													'numberposts'=> 5,
												);
										
										$latestPosts = get_posts($args);
										
										if(!empty($latestPosts))
										{
											foreach($latestPosts as $ltPsts)
											{
									?>
												<li class="">
													<article>
														<div><?= get_the_post_thumbnail($ltPsts, 'custom-size') ?></div>
														<header>
															<h3><a href="<?= get_the_permalink($ltPsts) ?>"><?= get_the_title($ltPsts) ?></a></h3>
															<time class="published" datetime="2015-10-20"><?= get_the_date('',$ltPsts) ?></time>
														</header>
														<a href="single.html" class="image"><img src="images/pic08.jpg" alt="" /></a>
													</article>
												</li>
									<?php
											}
										}

									?>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section>
							<?php
		get_template_part('contact');
		?>
						<!-- Footer -->
							<section id="footer">
								<?php get_template_part('social-icons') ?>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>
					</section>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
	</body>
</html>