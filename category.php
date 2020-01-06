<?php get_header(); ?>
<!-- Top Description section -->
<section class="fix_nav_mar ctg_page_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 page_ctg_pad">
                <div class="page_title_ctg">
                    <h3><?php  $catID = get_the_category(); echo esc_html( $catID[0]->name ); ?></h3>
                    <p><?php	
                        $catID = get_the_category();
                        echo category_description( $catID[0] ); 
                           
                        ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== Category Post-2  ================ -->
<section class="ctg_2_section">
    <div class="container">
        <div class="ctg_1_heading col-md-8">
            <a href="#">  <h3 class="d-inline"><?php echo esc_html( $catID[0]->name ); ?></h3></a>
        </div>
        <div class="row">
            <div class="col-md-8 mt-25">
                <!-- ------------ -->
            <div class="container">
                <div class="row">
                    <?php while(have_posts(  )):the_post(  ); ?>
                            <div class="col-md-6">
                                <?php include get_template_directory()."/template/category-widget.php" ?>
                            </div>
                    <?php endwhile;?>  
                </div>
            </div>
            </div>
            <!-- ======================= ===================== -->

                <!-- =================================== -->
                <?php include get_template_directory()."/template/recent-5.php" ?>
                </div>
        </div>
    </div>
</section>

<?php get_footer() ?>