<?php get_header(); ?>
<!-- Top Description section -->
<section class="ctg_page_section">
    <div class="container">
        <div class="row">
        <?php while( have_posts() ): the_post(); ?>
            <div class="col-sm-12 page_ctg_pad">
                <div class="page_title_ctg">
                    <h3> <?php the_title(); ?> </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== Category Post-2  ================ -->
<section class="ctg_2_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-25">
                <!-- ------------ -->

                <div class="ctg_2_wrapper">
                    <div class="ctg_2_contener">
                        <div class="ctg_2_sub_containar">
                        <?php the_post_thumbnail( null, array(
                        'class' => 'img_fluid_ak'
                        ) ); ?>
                         <a class="ctg_link_ele" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?> "> <?php the_author() ?></a>
                            <a class="ctg_link_ele ctg_date_calender" href="#"><?php echo ash_relative_time(); ?></a>
                            <div class="containt_text">
         
                            <?php the_content() ?>
                        <?php endwhile; ?>
                         </div>

                        </div>
                    </div>  
                </div>


                <!-- ------------ -->
                <!-- ------------ -->
                <!-- ------------ -->
                
            </div>
            <!-- ======================= ===================== -->

              <?php include get_template_directory()."/template/recent-5.php" ?>

        </div>
    </div>
</section>

<section class="comment-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <?php while( have_posts() ): the_post();
            if(comments_open() || is_single()){
                     comments_template();
                } ?><?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

            
<?php get_footer(); ?>