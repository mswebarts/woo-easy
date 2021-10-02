<?php

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: Post title. */
				printf( _x( 'One comment', 'comments title', 'woo-easy' ) );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Comments',
						$comments_number,
                        'number of comments',
						'woo-easy'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'callback'    => 'wooe_comment_layout',
						'avatar_size' => 100,
						'style'       => 'ol',
						'short_ping'  => true,
						'max_depth'   => 2,
						//'page'        => get_the_ID(),
						//'per_page'    => 1,
						'reply_text'  => '<i class="far fa-reply"></i>' . __( 'Reply', 'woo-easy' ),
					)
				);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => '<i class="far fa-arrow-left"></i>' . '<span class="screen-reader-text">' . __( 'Previous', 'woo-easy' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'woo-easy' ) . '</span>' . '<i class="far fa-arrow-right"></i>',
			)
		);

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'woo-easy' ); ?></p>
		<?php
	endif;

	$comments_args = array(
		'title_reply_to' => '<span>' . __( 'Replying to %s', 'woo-easy' ) . '</span>',
		'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title d-flex justify-content-between">',
	);

	comment_form( $comments_args );
	?>

</div><!-- #comments -->

<?php
function wooe_comment_layout($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo esc_attr( $tag ); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-author vcard media"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
            ?>
            <div class="media-body">
            	<?php
            	printf( __( '<cite class="fn">%s</cite>', 'woo-easy' ), get_comment_author_link() );

            	if ( $comment->comment_approved == '0' ) { ?>
		            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'woo-easy' ); ?></em><br/><?php 
		        } ?>
		        <div class="comment-meta commentmetadata">
		            <span><?php
		                /* translators: 1: date, 2: time */
		                printf( 
		                    __('%1$s at %2$s', 'woo-easy'), 
		                    get_comment_date(),  
		                    get_comment_time() 
		                ); ?>
		            </span><?php 
		            edit_comment_link( __( '(Edit)', 'woo-easy' ), '  ', '' ); ?>
		        </div>
		 
		        <?php comment_text();

            	?>
            </div>
            <div class="wooe-comment-reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        	</div>
        </div>
 
        <?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}