<section class="scroll_block">

    <?php
    require "temp/main_page/gallery_popular_product/choice_popular_product.html";
    ?>

    <div class="gallery">
        <div class="swiper gallery_products">
            <div class="swiper-wrapper">

                <?php
                for ($j = 0; $j <= 5; $j++) {
                    require "temp/main_page/gallery_popular_product/gallery_popular_product.html";
                }
                ?>

            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</section>

