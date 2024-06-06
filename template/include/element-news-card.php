<a href="./news-single.php" class="swiper-slide news">
    <div class="news-card">
        <div class="news-image-wrapper">
            <img src="<?php echo $news['main_image'] ?>" alt="news main image" class="news-main-image">
        </div>
        <div class="news-header">

            <span class="news-date size-lg c-theme"><?php echo $news["date"] ?></span>
            <h2 class="news-title c-theme weight-bold"><?php echo $news["title"] ?></h2>
            <p class="news-description c-gray"><?php echo $news["short_description"] ?></p>

        </div>
        <div class="explore"><span class="polygon"><span class="arrow"></span></span>อ่านต่อ</div>


    </div>
</a>