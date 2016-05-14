 <section id="footer" class="footerSection">
            <div class="parentWrap">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2">                         
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <p>Copyrigh @ InstantProp.com. All rights reserved.</p>
                            </div>
                        </div>                     
                    </div>    
                </div>
            </div>    
        </section>



        <!-- jQuery --> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script SRC="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 

        <!-- FlexSlider --> 
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script> 
        <script type="text/javascript">
            $(function(){
                SyntaxHighlighter.all();
            });
            $(window).load(function(){
                $('#carousel').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: 110,
                    itemMargin: 10,
                    move: 0,

                    asNavFor: '#slider'
                });

                $('#slider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: true,
                    slideshow: true,
                    sync: "#carousel",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
	
            $(".dr-icon.dr-icon-menu").click(function () {
                $(".nav.navbar-nav.navbar-right").toggle();
            });
        </script> 

        <!-- Syntax Highlighter --> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/shCore.js"></script> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/shBrushXml.js"></script> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/shBrushJScript.js"></script> 

        <!-- Optional FlexSlider Additions --> 
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.singlePageNav.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.js"></script> 
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script> 
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/demo.js"></script> 
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/ytmenu.js"></script>
        <script>
          

            // Prevent console.log from generating errors in IE for the purposes of the demo

            $('.dr-menu').singlePageNav({
                offset: $('.navbar').outerHeight(),
                filter: ':not(.external)',
              
                beforeStart: function () {
                    $('span.dr-icon-menu').trigger('click');

                },
                onComplete: function () {

                }
            });

            $(document).ready(function () {
                
            });
           

            $(".dr-icon.dr-icon-menu").click(function () {
                $(".nav.navbar-nav.navbar-right").toggle();
            });

           
           


            $(window).bind('resize', function (e) {
                var windowWidth = $(window).width();
                if (windowWidth < 1200) {
                    $('.dr-menu.dr-menu-open').removeClass('dr-menu-open');
                } 
				
                else {
                    $('.dr-menu').addClass('dr-menu-open');

                }

            }).trigger('resize');

        </script>
         <?php wp_footer();?>
    </body>
</html>