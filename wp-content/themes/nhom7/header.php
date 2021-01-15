<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>
    <?php wp_head();?>
</head>
<body>
<div id="topbar">
<!-- Phần 1 -->
    <!-- <div class="row">
        <div class="col topbar text-right">
            <div class="container">
                <div class="dropdown-2">
                    <a href="">Chăm sóc khác hàng
                    <img class="dropdown"
                        src="<?=get_template_directory_uri()?>/assets/images/dropdown-icon.png"
                        alt="dropdown"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                Thanh toán
                            </li>
                            <li>
                                Giao hàng và đặt hàng
                            </li>
                            <li>
                                Bảo hành
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="">Kiểm tra đơn hàng
        <img class="dropdown"
            src="<?=get_template_directory_uri()?>/assets/images/dropdown-icon.png"
            alt="dropdown"></a>
    <a href="">Đăng nhập và đăng kí
        <img class="dropdown"
            src="<?=get_template_directory_uri()?>/assets/images/dropdown-icon.png"
            alt="dropdown">
    </a> -->
</div>
<!--  -->
<!-- phần 2 -->
    <nav class="navbar navbar-expand-md navbar-light phan2" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php echo get_custom_logo(); ?>
                </div>
                <div class="col-md-6">
                    <!-- Search form -->
                    <div class="btn-group mt-4" role="group" aria-label="Basic example">
                    <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field form-control input-lg" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s"  class="form-control input-lg">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search"></i>Tìm kiếm</button>
                </form>
                    </div>
                </div>
                <div class="col-md-2">
                <a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ Hàng' ); ?>">
                <img class="logocart" src="<?=get_template_directory_uri()?>/assets/images/logo-xe-day-28-removebg-preview.png" alt="Logo" style="width:70px;">
                <br>
                <?php echo sprintf (_n( '<i style="font-size:40px" class="fas fa-cart-arrow-down"></i> (%d  Sản Phẩm)', '<i style="font-size:40px" class="fas fa-cart-arrow-down"></i> (%d Sản Phẩm)', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>
                </a>
                                    </div>
                <div class="col-md-12">
                    <?php
                     wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'main-menu',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ]);
                    ?>
                </div>
                </div>

            </div>
            <div class="menu">
                
            </div>
            </div>
      </nav>