<?php global $wooe_options; ?>

<?php $payment_icons = $wooe_options['wooe-payment-icons']['wooe-payment-icon']; ?>
<div class="wooe-footer-payment-icons">
    <ul>
        <?php foreach( $payment_icons as $payment_icon) {
            
            $alt_text = get_post_meta( $payment_icon["id"] , '_wp_attachment_image_alt', true );
            ?>

            <li>
                <img src="<?php echo esc_url( $payment_icon['url'] ); ?>" alt="<?php echo esc_attr_e( $alt_text, 'woo-easy' ); ?>">
            </li>

        <?php } ?>
    </ul>
</div>