
                <div class="ctg_2_wrapper">
                    <div class="ctg_2_contener">
                        <div class="ctg_2_sub_containar">
                            <div class="ctg_2_image">
                                  <a href="<?php echo esc_url(get_permalink()) ; ?>">
                                  <?php the_post_thumbnail( null, array(
                                'class' => 'img-fluid'
                                ) ); ?>
                            </a>
                            </div>
                          
                            <h6 class="font-weight-bold"><a href="<?php echo esc_url(get_permalink()) ; ?>"> <?php echo wp_trim_words( get_the_title(), 12,' ' ) ?></a></h6>
                         <a class="ctg_link_ele" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?> "> <?php the_author() ?></a>
                            <a class="ctg_link_ele ctg_date_calender" href="#"><?php echo ash_relative_time(); ?></a>
                        </div>
                    </div>  
                </div>