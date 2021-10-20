<?php 
global $wooe_options;
$general_info = $wooe_options['wooe-general-info'];
$total_info = sizeof( $general_info );
$allowed_html = array(
    'b'      => array(),
    'span'   => array(),
    'u'      => array(),
    'del'    => array(),
    'i'      => array(),
);
?>
<div class="wooe-general-info">
    <?php 
        for ( $i=0; $i < $total_info; $i++ ) { 
            ?>
            <div class="wooe-general-info-item">
                <i class="<?php echo sprintf( __( '%s', 'woo-easy' ), $general_info['wooe-general-info-icon'][$i] ); ?>"></i>
                <?php echo wp_kses( __( $general_info['wooe-general-info-text'][$i], 'woo-easy' ), $allowed_html ); ?>
            </div>
            <?php
        }
    ?>
</div>