<div id="fh5co-header">
  <header id="fh5co-header-section">
    <div class="container">
      <div class="nav-header align-middle">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <h1 id="fh5co-logo"><a href="<?php esc_url( home_url('/') ); ?>"><img src="<?php get_template_directory_uri(  ) ?>/wp-content/themes/kyo-ani/images/logo.png" class="logo"></a></h1>
        <!-- START #fh5co-menu-wrap -->
        <nav id="fh5co-menu-wrap" role="navigation">
          <ul class="sf-menu" id="fh5co-primary-menu">
            <?php
              // メニューIDを取得
              $menu_name = 'global_nav';
              $locations = get_nav_menu_locations();
              $menu = wp_get_nav_menu_object($locations[$menu_name]);
              $menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>
            <?php foreach ($menu_items as $item) : ?>
            <li><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</div>