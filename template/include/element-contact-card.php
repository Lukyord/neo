<div class="contact-card">
    <img alt="contact-image" src="<?php echo $contact["image"] ?>" class="contact-image">

    <ul class="contact-info-lists">
        <?php if (!$contact["address"]) { ?>
            <li class="contact-info-list">
                <i></i>
                <p class="contact-info-list-text"></p>
            </li>
        <?php } ?>
    </ul>
</div>