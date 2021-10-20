<?php
global $wooe_options;
$payment_icons = $wooe_options['wooe-payment-icons']['wooe-payment-icon'];
?>
<div class="wooe-footer-payment-icons">
    <ul>
        <?php foreach( $payment_icons as $payment_icon) {
            
            $alt_text = get_post_meta( $payment_icon["id"] , '_wp_attachment_image_alt', true );
            ?>

            <li>
                <img src="<?php echo esc_url( $payment_icon['url'] ); ?>" alt="<?php echo sprintf( __( '%1$s', 'woo-easy' ), $alt_text ); ?>">
            </li>

        <?php } ?>
    </ul>
</div>