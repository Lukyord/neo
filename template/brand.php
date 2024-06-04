<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-main">
    <section>
        <div class="sc-inner padding-bottom-0">
            <div class="sc-container container sm a-center">

                <div class="sc-headline">
                    <h1 class="sc-heading size-h1 weight-medium c-theme">แบรนด์ของเรา</h1>
                </div>

                <div class="sc-brands alignfull overflow-hidden">
                    <div class="swiper auto loop">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="sc-banner">
                                    <a class="sc-link-overlay" href="./brand-single.php">&nbsp;</a>
                                    <!-- NOTE : FUNCTION GROUP(include/function-group.php) -->
                                    <picture class="object-fit">
                                        <source media="(min-width:992px)" srcset="./assets/img/design/brand1-cover.jpg">
                                        <source media="(min-width:0px)" srcset="./assets/img/design/brand1-cover-m.jpg">
                                        <img src="./assets/img/design/brand1-cover.jpg" alt="">
                                    </picture>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="sc-banner product-content-wrapper">
                                    <div class="product-content">
                                        <img src="./assets/img/design/brand1-products.png" alt="brand1-products" class="product-content-image">
                                        <div class="product-content-text">
                                            <h2 class="font-heading size-h1 product-content-heading strong">Eversense</h2>
                                            <p class="size-h6">
                                                เสน่ห์ความสดใสและน่าดึงดูดใจของสาว ๆ คือความหอมมมมม.....
                                                แค่เพียงได้สัมผัสกลิ่นก็ตกหลุมรักได้ในทันที Eversense (เอเวอร์เซ้นส์)
                                                จึงเริ่มต้นส่งต่อเสน่ห์ผ่านผลิตภัณฑ์ความหอมด้วยโคโลญในปีพ.ศ. 2532
                                                ซึ่งได้การตอบรับเป็นอย่างดีจากสาว ๆ ติดใจจนขึ้นเป็นอันดับ 1 ในตลาด
                                                ผลิตภัณฑ์ความหอม
                                            </p>
                                            <button>
                                                <p>ดูผลิตภัณฑ์</p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="sc-banner">
                                    <a class="sc-link-overlay" href="./brand-single.php">&nbsp;</a>
                                    <!-- NOTE : FUNCTION GROUP(include/function-group.php) -->
                                    <picture class="object-fit">
                                        <source media="(min-width:992px)" srcset="./assets/img/design/brand2-cover.jpg">
                                        <source media="(min-width:0px)" srcset="./assets/img/design/brand2-cover-m.jpg">
                                        <img src="./assets/img/design/brand2-cover.jpg" alt="">
                                    </picture>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="sc-banner">
                                    <picture class="object-fit">
                                        <source media="(min-width:992px)" srcset="./assets/img/design/brand2-cover.jpg">
                                        <source media="(min-width:0px)" srcset="./assets/img/design/brand2-cover-m.jpg">
                                        <img src="./assets/img/design/brand2-cover.jpg" alt="">
                                    </picture>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="sc-banner">
                                    <a class="sc-link-overlay" href="./brand-single.php">&nbsp;</a>
                                    <!-- NOTE : FUNCTION GROUP(include/function-group.php) -->
                                    <picture class="object-fit">
                                        <source media="(min-width:992px)" srcset="./assets/img/design/brand3-cover.jpg">
                                        <source media="(min-width:0px)" srcset="./assets/img/design/brand3-cover-m.jpg">
                                        <img src="./assets/img/design/brand3-cover.jpg" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev spacing-x" data-style="polygon"><span class="polygon-button prev"></span></div>
                        <div class="swiper-button-next spacing-x" data-style="polygon"><span class="polygon-button next"></span></div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>