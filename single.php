<!DOCTYPE html>
<html class="no-js">

<head>
  <?php get_header(); ?>
</head>

<body>
  <div id="fh5co-wrapper">
    <div id="fh5co-page">
      <?php get_template_part('template/header'); ?>
      <!-- Page Header -->

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php $img = get_eyecatch_with_default(); ?>
          <header class="masthead" style="background-image: url('<?php echo get_the_post_thumbnail_url( ); ?>'); height:500px; background-size:cover;">
            <div class="overlay"></div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto py-5">
                  <div class="page-heading py-5">
                    <h1 class="fw-bold bg-img"><?php the_title() ?></h1>
                  </div>
                </div>
              </div>
            </div>
          </header>



          <div class="container">
            <span class="meta d-flex justify-content-end">
              Posted by <a href="<?php the_permalink() ;?>"><?php the_author(); ?></a> on <?php the_date(); ?>
            </span>
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <p><?php the_content() ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p>記事はありません</p>
      <?php endif; ?>
      <?php get_template_part('template/footer'); ?>
    </div>
    <!-- END fh5co-page -->
  </div>
  <!-- END fh5co-wrapper -->
  <?php get_footer(); ?>
</body>

</html>