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
	<?php get_template_part('template/header'); ?>

	<?php if (is_page('contact')) : ?>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<?php $img = get_eyecatch_with_default() ;?>
					<li style="background-image: url('<?php echo get_the_post_thumbnail_url( ) ;?>'); background-size:cover;">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner desc">
									<h2 class="heading-section"><?php the_title() ?></h2>
									<p class="fh5co-lead">about new animation project, collabortion and so on</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>
		<div id="fh5co-contact-section">
			<div class="container">
				<div class="col-md-8">
					<?php the_content( ); ?>
				</div>
			</div>
		</div>

	<?php else : ?>
		<p>No contents yet.</p>
	<?php endif; ?>

	<?php get_template_part('template/footer'); ?>

	<?php get_footer(); ?>
</body>

</html>