<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<?php get_header(); ?>

</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<?php get_template_part('template/header'); ?>

			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
						<?php $img = get_eyecatch_with_default(); ?>
						<?php $posts = get_posts(array(
							'category' => '3' // カテゴリIDもしくはスラッグ名
						));
						?>
						<?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
								<li style="background-image: url('<?php echo $img[0]; ?>');">
									<div class="overlay-gradient"></div>
									<div class="container">
										<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
											<div class="slider-text-inner">
												<h2><?php the_title(); ?></h2>
												<p><a href="<?php echo get_permalink(); ?>" class="btn btn-primary btn-lg">記事を見る</a></p>
											</div>
										</div>
									</div>
								</li>
						<?php endforeach;
						endif; ?>
					</ul>
				</div>
			</aside>

			<div class="">
				<h2 class="text-center py-5">New Release</h2>
				<?php
				$posts = get_posts(array(
					'category' => '4' // カテゴリIDもしくはスラッグ名
				));
				?>
				<?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
						<div class="row d-flex fade">
							<div class="col-3">
								<img src="<?php echo $img[0]; ?>" class="w-100">
							</div>
							<div class="desc col-9 p-3 pt-5 align-middle d-inline-block">
								<h2 class=""><?php the_title() ?></h2>
								<p class="float-end"><?php the_date() ?> <?php the_time() ?></p>
							</div>
						</div>
				<?php endforeach;
				endif; ?>
			</div>

			<div id="fh5co-portfolio-section">
				<div class="portfolio-row-half">
					<div class="portfolio-grid-item-color">
						<div class="desc fade">
							<h2>Our Works</h2>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<p><a href="#" class="btn btn-primary btn-outline with-arrow">View All Projects <i class="icon-arrow-right22"></i></a></p>
						</div>
					</div>
					<a href="#" class="fade portfolio-grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/mv028.jpg);">
						<div class="desc2">
							<h3>劇場版ツルネ －はじまりの一射－</h3>

							<i class="sl-icon-heart"></i>
						</div>
					</a>
					<a href="#" class="fade portfolio-grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/mv028.jpg);">
						<div class="desc2">
							<h3>『劇場版 Free!-the Final Stroke-』後編</h3>
							<i class="sl-icon-heart"></i>
						</div>
					</a>
					<a href="#" class="fade portfolio-grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/mv028.jpg);">
						<div class="desc2">
							<h3>『劇場版 Free!-the Final Stroke-』前編</h3>
							<i class="sl-icon-heart"></i>
						</div>
					</a>
					<a href="#" class="fade portfolio-grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/mv028.jpg);">
						<div class="desc2 ">
							<h3>小林さんちのメイドラゴンＳ</h3>
							<i class="sl-icon-heart"></i>
						</div>
					</a>
					<a href="#" class="fade portfolio-grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/mv028.jpg);">
						<div class="desc2">
							<h3>劇場版 ヴァイオレット・エヴァーガーデン</h3>
							<i class="sl-icon-heart"></i>
						</div>
					</a>
					<a href="#" class="fade portfolio-grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/mv028.jpg);">
						<div class="desc2">
							<h3>バジャのスタジオ ～バジャのみた海～</h3>
							<i class="sl-icon-heart"></i>
						</div>
					</a>
				</div>
			</div>

			<div id="fh5co-section">
				<div class="col-half col-half-color">
					<div class="row-half">
						<div class="col-half-inner col-half-inner-bg">
							<div class="desc fade">
								<h3>About Us</h3>
								<p>Since inauguration, our principles are "Make a challenge", "Do the best", "Produce required works" and "Keep our corporate as a humanitarian one". We value people. Promoting the growth of people is equal to creating the brightness of works. We sincerely keep moving forward to be an Entertainment Corporation which based on Animation.</p>
								<p><a href="#" class="btn btn-primary btn-outline with-arrow">Read More <i class="icon-arrow-right22"></i></a></p>
							</div>
						</div>
						<a href="#" class="col-half-inner grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/sh.jpg);">
							<div class="desc2 fade">
								<h3>涼宮ハルヒの消失</h3>
							</div>
						</a>
					</div>
					<div class="row-half">
						<a href="#" class="col-half-inner grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/sh.jpg);">
							<div class="desc2 fade">
								<h3>ヴァイオレット・エヴァーガーデン</h3>
							</div>
						</a>
						<div class="col-half-inner col-half-inner-bg2">
							<div class="desc fade">
								<h3>Client Says <i class="icon-quotes-right"></i> </h3>
								<blockquote>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<span><a class="client" href="#">&mdash; John Doe</a></span>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-services-section">
				<div class="container">
					<div class="row fade">
						<div class="col-md-12 col-md-offset-3 text-center fh5co-heading">
							<i class="sl-icon-paper-plane"></i>
							<h2 class="heading text-align-center">School</h2>
							<p class="pb-5">京都アニメーション・アニメーションドゥウプロ養成塾 </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 text-center">
							<div class="services fade">
								<span><i class="sl-icon-graph"></i></span>
								<h3>Dashboard</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="services fade">
								<span><i class="sl-icon-camera"></i></span>
								<h3>Photography</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="services fade">
								<span><i class="sl-icon-support"></i></span>
								<h3>Help &amp; Support</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fh5co-parallax fh5co-parallax2" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<h2 style="color:white; padding:0 0 50px 0" class=" text-center">message from teacher</h2>
					<div class="row">
						<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
							<div class="fh5co-intro animate-box">
								<div class="row">
									<div class="col-md-6 text-center">
										<div class="testimony fade">
											<span class="quote"><i class="icon-quotes-right"></i></span>
											<blockquote>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												<span>Athan Smith, via <a href="#" class="icon-twitter3 twitter-color"></a></span>
											</blockquote>
										</div>
									</div>
									<div class="col-md-6 text-center">
										<div class="testimony fade">
											<span class="quote"><i class="icon-quotes-right"></i></span>
											<blockquote>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												<span>Athan Smith, via <a href="#" class="icon-google-plus googleplus-color"></a></span>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-section">
				<div class="col-half col-half-color">
					<div class="row-half">
						<div class="col-half-inner col-half-inner-bg">
							<div class="desc fade">
								<h3>Shop</h3>
								<p>Since inauguration, our principles are "Make a challenge", "Do the best", "Produce required works" and "Keep our corporate as a humanitarian one". We value people. Promoting the growth of people is equal to creating the brightness of works. We sincerely keep moving forward to be an Entertainment Corporation which based on Animation.</p>
								<p><a href="#" class="btn btn-primary btn-outline with-arrow">Read More <i class="icon-arrow-right22"></i></a></p>
							</div>
						</div>
						<a href="#" class="col-half-inner grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/hyoka.jpg);">
							<div class="desc2 fade">
								<h3>Bag</h3>
								<span>Travel</span>
							</div>
						</a>
					</div>
					<div class="row-half">
						<a href="#" class="col-half-inner grid-item" style="background-image: url(<?php get_template_directory_uri() ?>/wp-content/themes/kyo-ani/images/hyoka.jpg);">
							<div class="desc2 fade">
								<h3>Tapestry</h3>
								<span>Travel</span>
							</div>
						</a>
						<div class="col-half-inner col-half-inner-bg2">
							<div class="desc fade">
								<h3>Client Says <i class="icon-quotes-right"></i> </h3>
								<blockquote>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<span><a class="client" href="#">&mdash; John Doe</a></span>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-blog-section" class="grey-bg">
				<div class="container">
					<div class="row fade">
						<div class="col-md-6 text-center fh5co-heading">
							<i class="sl-icon-note"></i>
							<h2>Recent Blog</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>

					<?php
					$posts = get_posts(array(
						'category' => '5' // カテゴリIDもしくはスラッグ名
					));
					?>
					<?php if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
							<div class="row fade">
								<div class="feature-full-1col col-md-6">
									<div class="image" style="background-image: url('<?php echo $img[0]; ?>');">
									</div>
									<div class="desc">
										<h3 class="fw-bold"><?php the_title() ?></h3>
										<p><?php the_excerpt() ?></p>
										<p><a href="<?php the_permalink() ?>" class="btn btn-primary btn-luxe-primary">Read More</a></p>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>

			<div id="fh5co-counter-section" class="fh5co-counters">
				<div class="container">
					<div class="row fade">
						<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
							<i class="sl-icon-badge"></i>
							<h2>Achievements</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
					<div class="row fade">
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="1985" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">established</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="75" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">amout of works</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="141" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">the number of workers</span>
						</div>

					</div>
				</div>
			</div>

			<div class="fh5co-parallax" style="background-image: url(images/hero2.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row fade">
						<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
							<div class="fh5co-intro fh5co-table-cell animate-box">
								<h1 class="text-center">We Create Masterpiece.</h1>
								<p>Made with love by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></p>
								<p><a href="/contact" class="btn btn-primary btn-lg">Get started</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part('template/footer'); ?>

		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<?php get_footer(); ?>
</body>

</html>