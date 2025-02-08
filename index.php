<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>Title</title>
    <!--<link rel="icon" type="image/png" href="favicons/favicon_v.2.png">-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="favicons/apple_template.png" rel="icon" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet" type="text/css">


</head>
<body>

<div class="js-backdrop"></div>

<?php require "temp/menu.html"; ?>

<section class="search-wrap">
    <form class="form-search-mobile">
        <input class="search-input-mobile" type="search">
        <button class="js-search-close" type="submit">Отмена</button>
    </form>
</section>

<?php require "temp/header/header-desktop.html"; ?>
<?php require "temp/header/header-mobile.html"; ?>


<section class="main-wrapper">
    <main>

        <h3 class="popular_items">Новинки в каталоге</h3>
        <?php
        require "temp/main_page/new_in_catalog.html";
        ?>

        <h3 class="popular_items">Популярные категории семян</h3>

        <!--BEGIN Slider popular gallery_category -->
        <div class="gallery">
            <div class="swiper gallery_products">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 0; $i <= 10; $i++) {
                        require "temp/main_page/gallery/gallery_popular_category.html";
                    }
                    ?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!--END Slider popular gallery_category-->

        <h3 class="popular_items">Популярные семена</h3>
        <?php
        for ($i = 0; $i < 4; $i++) {
            require "temp/main_page/gallery_popular_product/section_popular_product.php";
        }
        ?>

    </main>

    <?php
    require "BEM/production/core.blocks/footer/footer.html";
    ?>

</section>


<?php
require "temp/main_page/nav_bottom.html";
?>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="js/libs/swiper_settings.js"></script>
<script src="js/btn_catalog_actions.js"></script>
<script src="js/btn_search_mobile.js"></script>
<script src="js/scroll_block.js"></script>


</body>
</html>