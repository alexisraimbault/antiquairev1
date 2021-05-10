<?php get_header(); 
/**
Template name: item
 */
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />

    <div class="gallery-page-content">
        <div class="home-content__title stickier" onClick="document.location.href='home'">Antiquaire V1</div>
        <?php
            $id = $_GET['id'];
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 1,
                'post__in'=> array($id),
            );
            $loop = new WP_Query( $args ); if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
            $images_ids = $product-> get_gallery_image_ids();?>
            <div class = "annonce-item-container" >
                <div class = "annonce-item-gallery-wrap">
                <?php $featured_image = wp_get_attachment_image_url( get_post_thumbnail_id($loop->post->ID)); ?>
                    <?php if($featured_image) { ?>
                        <a data-fancybox="gallery" href="<?php echo $featured_image;?>" class="annonce-item-main-image-container">
                            <img class="annonce-item-main-image" src="<?php echo $featured_image; ?>" class="annonce_img">
                        </a>
                    <?php } ?>
                    <div class = "annonce-item-gallery-container">
                        <?php for($i = 0, $j = count($images_ids); $i < $j;$i++ ){
                        ?>
                        <a data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url($images_ids[$i], 'full');?>" class="annonce-item-image-container">
                            <img class="annonce-item-image" src="<?php echo wp_get_attachment_image_url($images_ids[$i], 'full');?>" class = "slide_img">
                        </a>
                        <?php } ?>
                        <!-- <div class = "preview_container">
                        <?php for($i = 0, $j = count($images_ids); $i < $j;$i++ ){
                            ?>
                            <div class="slide_preview_wrapper" ></div>
                        <?php } ?>
                        </div> -->
                    </div>
                </div>
                
                <div class = "annonce-item-right-container" >
                    <div class="small-faded-line"></div>
                    <div class = "annonce-item-title"><?php the_title(); ?></div>
                    <div class = "annonce-item-description"><?php the_excerpt(); ?></div>
                    <div class="annonce-item-price"><?php echo $product->get_price_html(); ?></div>
                    <div class="small-faded-line"></div>
                </div>
            </div>
        <?php endwhile;
        } else {
            echo __( "Aucun produit correspondant à votre recherche n'est disponible actuellement" );
        }
        wp_reset_postdata();
        ?>
    </div>
<?php get_footer(); ?>