<?php get_header(); ?>


<!-- ====================   Latest Post section ================= -->

<section class="fix_nav_mar latest_job_section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
            <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1
            );
            $query = new WP_query ( $args );
            if($query -> have_posts(  )): 
                while( $query-> have_posts(  ) ): $query-> the_post(  );
            ?>
                <div class="banner">
                <?php the_post_thumbnail( null, array(
		        'class' => 'img-fluid'
	            ) ); ?>
                    <h3 class="position-absolute title_post text-center"><a href="<?php echo esc_url(get_permalink()) ; ?>"><?php echo wp_trim_words( get_the_title(), 12,' ' ) ?> </a></h3>
                </div>  
            <?php endwhile; endif; ?>              
            </div>

            <div class="col-md-5">
                    <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'offset'=> 1
                    );
                    $query = new WP_query ( $args );
                         if( $query-> have_posts(  ) ): 
                            while( $query-> have_posts(  ) ): $query-> the_post(  );
                    ?>

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
            </div>
        </div>
    </div>
</section>

<!-- ==================== category post showin--1 ================ -->
<section class="ctg_1_section">
    <div class="container">
        <div class="ctg_1_heading">
            <a href="<?php $catObj = get_category_by_slug('job-circular');  echo get_category_link($catObj);?>">  <h3 class="d-inline"><?php echo $catName = $catObj->name; ?></h3></a>
        </div>
        <div class="row">
            <div class="col-md-6">
<!-- ===================start ====================== -->
                    <?php
                          $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category_name'  => 'job-circular'   
                        );
                    $query  =   new WP_Query( $args );
                    if( $query->have_posts() ): while( $query -> have_posts() ): $query -> the_post();
                    
                    ?>

                <div class="wrapper_latest_post ctg_1_wrapper">
                    <div class="latest_side_post_img">
                        <a href="<?php echo esc_url(get_permalink()) ; ?>"">
                        <?php the_post_thumbnail( null, array(
                                'class' => 'img-fluid'
                                ) ); ?>
                        </a>
                    </div>  
                    <div class="latest_site_h6">
                        <h6 class="font-weight-bold"><a href=" <?php echo esc_url(get_permalink()) ; ?> "> <?php echo wp_trim_words( get_the_title(), 12,' ' ) ?> </a></h6>
                        <a class="ctg_link_ele" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?> "><?php the_author() ?></a>
                        <a class="ctg_link_ele ctg_date_calender" href="#"><?php echo ash_relative_time(); ?></a>
                    </div>
                </div>

                        <?php
                        endwhile; endif;
                        ?>
                <!-- ===========end ============ -->
     
    
                
            </div>
            <!-- ======================= ===================== -->
            <div class="col-md-6">
                <?php
                          $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'offset'    => 4,
                            'category_name'  => 'job-circular'   
                        );
                    $query  =   new WP_Query( $args );
                    if( $query->have_posts() ): while( $query -> have_posts() ): $query -> the_post();
                    
                    ?>

                <div class="wrapper_latest_post ctg_1_wrapper">
                    <div class="latest_side_post_img">
                        <a href="<?php echo esc_url(get_permalink()) ; ?>">
                        <?php the_post_thumbnail( null, array(
                                'class' => 'img-fluid'
                                ) ); ?>
                        </a>
                    </div>  
                    <div class="latest_site_h6">
                        <h6 class="font-weight-bold"><a href=" <?php echo esc_url(get_permalink()) ; ?> "> <?php echo wp_trim_words( get_the_title(), 12,' ' ) ?> </a></h6>
                        <a class="ctg_link_ele" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?> "><?php the_author() ?></a>
                        <a class="ctg_link_ele ctg_date_calender" href="#"><?php echo ash_relative_time(); ?></a>
                    </div>
                </div>

                        <?php
                        endwhile; endif;
                        ?>

                

            </div>
        </div>
    </div>
</section>
<!-- ==================== Category Post-2  ================ -->
<section class="ctg_2_section">
    <div class="container">
        <div class="ctg_1_heading">
            <a href="<?php $catObj = get_category_by_slug('sports');  echo get_category_link($catObj);?>">  <h3 class="d-inline"><?php echo $catName = $catObj->name; ?></h3></a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!-- ------------ -->
                <?php
                          $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'category_name'  => 'sports'   
                        );
                    $query  =   new WP_Query( $args );
                    if( $query->have_posts() ): while( $query -> have_posts() ): $query -> the_post();
                    
                    ?>
          <?php include get_template_directory()."/template/category-widget.php" ?>
                <!-- ------------ -->
                <!-- ------------ -->
                    <?php endwhile; endif; ?>
                
            </div>
            <!-- ======================= ===================== -->
            <div class="col-md-4">
            <?php
                          $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'offset'    =>2,
                            'category_name'  => 'sports'   
                        );
                    $query  =   new WP_Query( $args );
                    if( $query->have_posts() ): while( $query -> have_posts() ): $query -> the_post();
                    ?>
                    <?php include get_template_directory()."/template/category-widget.php" ?>
                <!-- ------------ -->
                    <?php endwhile; endif; ?>
               
                </div>

                <!-- =================================== -->
                <div class="col-md-4">
                      <!-- ------------ -->
                      <?php
                          $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'offset'    => 4,
                            'category_name'  => 'sports'   
                        );
                    $query  =   new WP_Query( $args );
                    if( $query->have_posts() ): while( $query -> have_posts() ): $query -> the_post();
                    ?>
                    <!-- File Include  -->
                    <?php include get_template_directory()."/template/category-widget.php" ?>
               
                    <?php endwhile; endif; ?>
                <!-- ------------ -->
                </div>
        </div>
    </div>
</section>
<!-- ctg 2 End -->
<!-- ==================== Category Post-3 ================ -->
<section class="ctg_2_section">
    <div class="container">
        <div class="ctg_1_heading">
            <a href="<?php $catObj = get_category_by_slug('freelancing');  echo get_category_link($catObj);?>">  <h3 class="d-inline"><?php echo $catName = $catObj->name; ?></h3></a>
        </div>
        <div class="row">

        <?php
                          $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category_name'  => 'freelancing'   
                        );
                    $query  =   new WP_Query( $args );
                    if( $query->have_posts() ): while( $query -> have_posts() ): $query -> the_post();
                    ?>
                    <!-- File Include  -->
                    <?php include get_template_directory()."/template/category-widget-2.php" ?>
               
                    <?php endwhile; endif; ?>

            



  
        </div>
    </div>
    </section>

    <!-- Footer -->
    <?php get_footer(); ?>