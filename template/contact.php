<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main">
    <section id="contact" class="contact">
        <h1 class="contact-heading size-h1 weight-medium c-theme">ติดต่อเรา</h1>
        <div class="swiper auto news-swiper insufficient centered centered-m loop">
            <div class="swiper-wrapper">
                <?php
                $contact_arr = array(
                    array(
                        'image' => "./assets/img/design/contact1.png",
                        'address' => "888 ซอยสุขุมวิท 54 แขวงพระโขนงใต้ เขตพระโขนง กรุงเทพมหานคร 10260",
                        "tel" => "+66 2017 8900",
                        "email" => "customerservices@neo-corporate.com",
                        "operating_time" => "เวลาทำการ จันทร์ – ศุกร์ (08:00 – 17:00 น.)",
                        "facebook_link" => "#",
                        "youtube_link" => "#",
                        "google_map_link" => "#",
                    ),
                    array(
                        'address' => "168 หมู่ที่ 5 ตำบลบึงคอไห อำเภอลำลูกกา จังหวัดปทุมธานี 12150",
                        "tel" => "+66 2014 9999",
                        "email" => "customerservices@neo-corporate.com",
                        "operating_time" => "เวลาทำการ จันทร์ – ศุกร์ (08:30 – 17:30)",
                        "facebook_link" => "#",
                        "youtube_link" => "#",
                        "google_map_link" => "#",
                    ),
                );
                foreach ($contact_arr as $contact) {
                    include($root . 'include/element-contact-card.php');
                } ?>

            </div>
            <div class="swiper-button-prev spacing-x" data-style="polygon"><span class="polygon-button prev"></span></div>
            <div class="swiper-button-next spacing-x" data-style="polygon"><span class="polygon-button next"></span></div>
        </div>


    </section>
</main>

<?php include($root . "footer.php"); ?>