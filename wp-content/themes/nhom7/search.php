<?php
get_header();
global $wp_query;
?>

<div class="container">
    <div class="col-md-12">
    <h2 class="mb-4"><?php echo $wp_query->found_posts; ?>
        <?php _e( 'kết quả tìm được với từ khóa', 'locale' ); ?>: "<?php the_search_query(); ?>"</h2>
    </div>

    <div class="row">
    
        <?php if ( have_posts() ) { ?>
            <?php while ( have_posts() ) { the_post(); ?>
                <div class="col-md-3 mb-4 products">
                    <?php  the_post_thumbnail('medium') ?>
                    <p data-name="product_name" class="product-name"><a href="<?php echo get_permalink(); ?>" title=""><?php the_title();  ?></a></p>
                    <span class="price"><span class="amount"><span class="currencySymbol"></span><s><?php echo get_post_meta( get_the_ID(), '_regular_price', true ); ?> đ</s></span>
                    <span class="price" style="color:red"><span class="amount"><span class="currencySymbol"></span><?php echo get_post_meta( get_the_ID(), '_sale_price', true ); ?> đ</span>                                              
                    <a href="?add-to-cart-<?php echo get_the_ID() ?>" style="margin-bottom: -2px!important;" class="btn bg-info form-control"><i class="fas fa-cart-plus"></i> Mua Ngay</a>
                </div>
            <?php }; ?>
    
            <?php echo paginate_links(); ?>
            <?php } ?>
<?php get_footer(); ?>