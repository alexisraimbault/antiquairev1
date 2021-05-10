<?php get_header(); 
/**
Template name: gallery
 */
?>
    <div class="gallery-page-content">
        <div class="home-content__title stickier" onClick="document.location.href='home'">Antiquaire V1</div>
        <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' =>30,
            );
            $loop = new WP_Query( $args ); if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <div class = "annonce" onClick="document.location.href='item?id=<?php echo get_the_ID(); ?>'">
                <?php $featured_image = wp_get_attachment_image_url( get_post_thumbnail_id($loop->post->ID)); ?>
                <?php if($featured_image) { ?>
                <div class = "annonce_img_wrapper">
                <img src="<?php echo $featured_image; ?>" class="annonce_img">
                <!-- <?php $exclu = get_post_meta(get_the_ID(), '_exclu', true);
                if( $exclu ){
                    if ($exclu == "yes"){ ?>
                    <div class = "annonce_exclu">exclusivité</div>
                <?php }} ?> -->
                </div>
                <?php } ?>
                <div class = "annonce_details">
                <div class = "annonce_title"><?php the_title(); ?></div>
                <div class="faded-line">
                    <div class="annonce-cta">voir plus</div>
                </div>
                <div class="annonce_price"><?php echo $product->get_price_html(); ?></div>
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