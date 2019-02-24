<!-- This file is used to markup the public-facing widget. -->
<?php if (strlen(trim($phone))>0):?>
<p>
    <span class="contact-phone">phone: </span><?php echo $phone?>
</p>
<?php endif?>

<?php if (strlen(trim($email))>0):?>
<p>
    <span class="contact-email">email: </span><?php echo $email?>
</p>
<?php endif?>
<?php if (strlen(trim($address))>0):?>
<p>
    <span class="contact-address">address: </span><?php echo $address?>
</p>
<?php endif?>