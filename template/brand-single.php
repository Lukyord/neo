<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main">
    <section>
        <div class="sc-container container a-center">
            <img class="" src="./assets/img/design/brand-eversense.png" alt="brand-logo">

            <div class="sc-brands alignfull overflow-hidden">
                <div class="swiper auto mousewheel-control insufficient centered-m">
                    <div class="swiper-wrapper">
                        <?php
                        $product_arr = array(
                            array(
                                'image-bg' => './assets/img/design/eversense-packshot1-bg.png',
                                'image-packshot' => './assets/img/design/eversense-packshot1.png',
                                'title' => 'ผลิตภัณฑ์ระงับกลิ่นกาย',
                            ),
                            array(
                                'image-bg' => './assets/img/design/eversense-packshot2-bg.png',
                                'image-packshot' => './assets/img/design/eversense-packshot2.png',
                                'title' => 'น้ำหอมและโคโลญจน์',
                            ),
                            array(
                                'image-bg' => './assets/img/design/eversense-packshot3-bg.png',
                                'image-packshot' => './assets/img/design/eversense-packshot3.png',
                                'title' => 'แป้งทาผิว',
                            )
                        );
                        foreach ($product_arr as $product) :
                            include($root . 'include/element-brand-single-product-card.php');
                        endforeach;

                        ?>
                    </div>
                    <div class="swiper-button-prev spacing-x" data-style="polygon"><span class="polygon-button prev"></span></div>
                    <div class="swiper-button-next spacing-x" data-style="polygon"><span class="polygon-button next"></span></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>