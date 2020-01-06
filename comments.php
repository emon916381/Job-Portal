<?php
/**========== Post password protected or not =========== */
if(post_password_required()){
    return;
}
?>

<!-- ====== Comment List ========== -->
<div class="comment_from_option">
    <?php if( have_comments() ): ?>
      <p class="comment-co">  <a href="#comment-respond">মন্তব্য ( <?php echo get_comments_number(); ?>) </a>  </p>
      

        <ol>
        <!-- ======= wp_comment_list() all details in @https://developer.wordpress.org/reference/functions/wp_list_comments/ -->
            <?php
            $args =array(
                'walker'    =>  null,
                'max_depth' =>  2,
                'style'     => 'li',
                'type'      =>  'all',
                'per_page'  => 4,
                'avatar_size'   => 64,
                'reverse_top_level' => 1,
                'reverse_children' => 1,
                'formate   '    => 'html5',
                'reply_text'   => ' ',
                'short_ping'    => true,
                'echo'          =>true,

            );
                wp_list_comments( $args );
            ?>
        </ol>

    <?php endif ?>
</div>
<?php
$filds  = array(
    
    'author'  => '<div class="form-group row">
    <label for="author" class="col-sm-2 col-form-label">' . __('Name *' ).'</label>
    <div class="col-sm-10">
    <input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ).'"/>
    </div>
  </div>',          
    'email'  => '<div class="form-group row">
    <label for="author" class="col-sm-2 col-form-label">' . __( 'Email *' ) . ' </label>
    <div class="col-sm-10">
    <input class="form-control" id="email" name="email" type="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />
    </div>
  </div>',          
    'url'  => ' ',          


);

$args = array(

    'comment_notes_before' => ' ',
    'title_reply' => '<p class="comment-text"> মন্তব্য করুন </p>',

    'comment_field' => '<div class="form-group row">
    <label for="author" class="col-sm-2 col-form-label">'  . _x( 'Comment', 'noun' ) . ' </label>
    <div class="col-sm-10">
   <textarea class="form-control" name="comment" rows="3" aria-required="true"></textarea>
    </div>
  </div>',  

  'fields'    => apply_filters( 'comment_form_default_fields', $filds ),
    

);

?>
<div class="container">
    <div class="row">
            <?php comment_form( $args ); ?>
    </div>
</div>



