<?php get_header(); ?>
    <div class="home-content">
        <div class="home-content__left">
            <div class="home-content__title" onClick="document.location.href='home'">Antiquaire V1</div>
            <div class="home-content__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </div>
            <div class="home-content__cta-wrapper">
                <div class="home-content__cta"> <span class="home-content__cta-text">JE SOUHAITE FAIRE ESTIMER UNE ANTIQUITÉ</span></div>
            </div>
        </div>
        <div class="home-content__right">
            <img class="home-illustration" src="<?php echo get_stylesheet_directory_uri().'/images/home_illustration.jpg'; ?>" alt="Apercu de l'intérieur de la boutique">
        </div>
    </div>
</div>
<?php get_footer(); ?>