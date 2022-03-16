<html>
	<header>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()."assets/css/main.css"?>">
	</header>
</html>
<!-- Sidebar -->
<section id="sidebar">
						
						<!-- Intro -->
							<!-- <section id="intro">
								<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
								<header>
									<h2>Future Imperfect</h2>
									<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
								</header>
							</section> -->

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">
									<!-- Mini Post -->
									<?php 
										$args = array(
											'numberposts' => 3,
											'category' => the_category_ID(false),
											'exclude' => get_the_ID()
										);

										$presentation_posts = get_posts($args);

										if(!empty($presentation_posts))
										{

										
											foreach($presentation_posts as $pst)
											{
									?>
											<article class="mini-post">
												<header>
													<div class=""><?= get_the_post_thumbnail($pst, 'custom-size') ?></div>
													<h3><a href="<?= get_the_permalink($pst); ?>"><?= get_the_title($pst)?></a></h3>
													<time class="published" datetime="2015-10-20"><?= get_the_date('',$pst) ?></time>
												</header>
											</article>
											<hr>
									<?php
											} 
										}
									?>
								</div>
							</section>

						<!-- Posts List -->
							<!-- <section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="images/pic08.jpg" alt="" /></a>
										</article>
									</li>
								</ul>
							</section> -->
							<?php
		//get_template_part('contact');
		?>
</section>