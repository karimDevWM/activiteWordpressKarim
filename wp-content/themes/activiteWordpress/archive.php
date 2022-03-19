<?php
/**
* Template Name: articles
*
*/
?>
<?php

								if(have_posts()):
									while(have_posts()):
										the_post();
							?>
											<article class="post">
								<header>
									<div class="title">
										<h2><a href="<?= the_permalink() ?>"><?= get_the_title() ?></a></h2>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"><?= get_the_date() ?></time>
									<a href="#" class="author"><span class="name"><?php the_author() ?></span>
                                        <img src="http://localhost/messaoud/activiteWordpress/wp-content/uploads/2022/03/avatar.jpg" alt="" />
                                    </a>
									</div>
								</header>
								<?= the_post_thumbnail('custom-size') ?>
								<footer>
									<ul class="actions">
										<li><a href="<?= the_permalink()?>" class="button large">Continue Reading</a></li>
									</ul>
                                    
								</footer>
							</article>
							<?php
									endwhile;
								endif;
                            ?>
                                <div class="pagination">
<div class="pagination_prev">
<button><?php previous_posts_link("Page précédente");?>precedent</button>
    </div>
    <div class="pagination_next">
        <button><?php next_posts_link("Page suivante"); ?>suivant</button>
    </div>
</div>
                     
                            
