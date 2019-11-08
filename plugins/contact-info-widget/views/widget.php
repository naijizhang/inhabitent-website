<!-- This file is used to markup the public-facing widget. -->
<?php if (strlen(trim($phone)) > 0): ?>
<p>
    <span class="contact-phone"><i class="fas fa-phone"></i></span>
    <a href="<?php echo $phone ?>">
        <?php echo $phone ?></a>
</p>
<?php endif ?>

<?php if (strlen(trim($email)) > 0): ?>
<p>
    <span class="contact-email"><i class="fas fa-envelope-square"></i></span>
    <a href="<?php echo $email ?>">
        <?php echo $email ?></a>
</p>
<?php endif ?>
<?php if (strlen(trim($address)) > 0): ?>
<div class="contact-address-container">
    <i id="location-mark" class="fas fa-map-marker-alt"></i>
    <div class="address-text-inner-container">
        <p><?php echo $address ?></p>
    </div>
</div>
<?php endif ?> 