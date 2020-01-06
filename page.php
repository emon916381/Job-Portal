<?php get_header();

while ( have_posts() ) :
            the_post();?>
            
         <section class="page_file" >
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="page_title">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <div class="page_content">
                           <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


         </section>











      <?php  endwhile;
 get_footer();
?>