  <!-- =================================== -->
  <div class="col-md-4">
                    <div class="title_ctg_pag_recent mt-25">
                        <h5>Recent Jobs</h5>
                    </div>

                    <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5
            );
            $query = new WP_query ( $args );
            if($query -> have_posts(  )): 
                while( $query-> have_posts(  ) ): $query-> the_post(  );
            ?>

                      <!-- ------------ -->
                      <div class="wrapper_latest_post">
                        <div class="latest_side_post_img">
                            <a href="<?php echo esc_url(get_permalink()) ; ?>">
                            <?php the_post_thumbnail( null, array(
                        'class' => 'img-fluid'
                        ) ); ?>
                            </a>
                        </div>  
                        <div class="latest_site_h6">
                            <h6 class="font-weight-bold"><a href="<?php echo esc_url(get_permalink()) ; ?>"> <?php echo wp_trim_words( get_the_title(), 12,' ' ) ?> </a></h6>
                            <?php foreach((get_the_category()) as $category): ?>
                            <a class="ctg_link_ele" href="<?php echo esc_url( get_category_link(  $category->cat_ID ) )  ?>  ">  <?php echo $category->cat_name . ' ';  ?> </a>
                        </div>
                    </div>    
                    
                            <?php endforeach; endwhile; endif; ?>   
                      <!-- =============== -->
                </div>
