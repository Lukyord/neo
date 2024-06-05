s<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main" class="about-main">
    <section class="sc-about">
        <div class="prev-button" data-style="polygon"><span class="polygon-button prev"></span></div>

        <div class="about">
            <h1 class="about-heading size-h1 weight-medium c-theme">เกี่ยวกับนีโอ</h1>
            <div class="tabs">
                <?php $years = range(2545, 2575);
                foreach ($years as $year) { ?>
                    <a class="tab" data-year="<?php echo $year; ?>">
                        <?php echo $year; ?>
                    </a>
                <?php }
                ?>
            </div>
            <div class="content">
                <div class="text"></div>
                <div class="image"></div>
            </div>
        </div>

        <div class="next-button" data-style="polygon"><span class="polygon-button next"></span></div>
    </section>
</main>

<?php include($root . "footer.php"); ?>