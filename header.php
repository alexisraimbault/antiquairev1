<html>
<head>
<title>Tutorial theme</title>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

<div class="home-page-container">
    <script type="text/javascript">
        window.addEventListener("scroll", () => {
            const title = document.querySelector(".home-content__title");
            const headercontainer = document.querySelector(".header-container");
            headercontainer.classList.toggle("sticky", window.scrollY > 0);
            title.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
    <div class="header-container">
        <div class="phone-group-container">
            <div class="fake-title"></div>
            <div>0621100951</div>  
        </div>
        <div class="nav-header__wrapper">
            <a class="nav-header__item" onClick="document.location.href='home'">
                <span>
                    Accueil
                </span>
            </a>
            <a class="nav-header__item">
                <span>
                    Nous rachetons
                </span>
            </a>
            <a class="nav-header__item" onClick="document.location.href='gallery'">
                <span>
                    Galerie
                </span>
            </a>
            <a class="nav-header__item" onClick="document.location.href='contact'">
                <span>
                    Contact
                </span>
            </a>
        </div>
    </div>