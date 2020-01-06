
<button class="btn btn-primary position-fixed btn-ak" onclick="topFunction()">Back To Top  </button>
<script>
function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }


</script>

<section class="footer_section">
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>All right reserve by <?php bloginfo( 'name' )?> &copy <?php echo date('Y'); ?> </p>
                </div>
                <div class="col-md-8">
                    <!-- <ul class="footer_menu float-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">term and condition</a></li>
                        <li><a href="#">Privecy</a></li>
                        <li><a href="#">about</a></li>
                    </ul> -->
                    <div class="float-right">
                        <?php
                        wp_nav_menu( array(
                                                    'theme_location' => 'footer',
                                                    'container'       => ' ',
                                                    'menu_class'	=>	'footer_menu float-righ',
                                                ) );
                    ?>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
</section>







<?php wp_footer(); ?>
</body>
</html>