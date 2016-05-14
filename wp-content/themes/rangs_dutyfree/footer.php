<!-- Footer
    ================================================== -->
<footer class="footer">
  <div class="container-fluid">Copyright &copy; 2014. All rights reserved by Rangs Duty Free.  <a href="#" data-toggle="modal" data-target="#privacy-policy">Privacy Policy</a>  -  <a href="#" data-toggle="modal" data-target="#terms">Terms & Conditions</a></div>
</footer>
</div>
<!-- Modal -->
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
   
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" width="24" height="24" alt="Icon close"/></span><span class="sr-only">Close</span></button>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
<?php $bangladesh_posts=   query_posts( array( 'category_name' => 'learnmore', 'posts_per_page' => -1 ) );?>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php
	//print_r($post);
	foreach($bangladesh_posts AS $post){
	?>
	
    <div class="item active">
		<?php if (class_exists('MultiPostThumbnails')
		&& MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
		MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image'); endif; ?>  
    </div>
	<div class="item">
      <?php if (class_exists('MultiPostThumbnails')
		&& MultiPostThumbnails::has_post_thumbnail('post', 'tertiary-image')) :
		MultiPostThumbnails::the_post_thumbnail('post', 'tertiary-image'); endif; ?>
    </div>
 <div class="item">
      <?php if (class_exists('MultiPostThumbnails')
		&& MultiPostThumbnails::has_post_thumbnail('post', 'quaternary-image')) :
		MultiPostThumbnails::the_post_thumbnail('post', 'quaternary-image'); endif; ?>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php echo $post->post_content ?>

	<?php	
	}
	?>

      </div> 
    </div>
  </div>
</div>

<!-- Modal Bangladesh-->
<div class="modal fade" id="bangladesh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<?php $bangladesh_posts=   query_posts( array( 'category_name' => 'bangladesh', 'posts_per_page' => -1 ) );?>

	
	
    <div class="modal-body">
	  
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" width="24" height="24" alt="Icon close"/></span><span class="sr-only">Close</span></button>
	
	<!--<img class="img-responsive" src="<?php?>" alt="about">-->
	<?php
	//print_r($post);
	foreach($bangladesh_posts AS $post){
	?>
	<?php //the_post_thumbnail('post', 'secondary-image');?>
	<?php if (class_exists('MultiPostThumbnails')
    && MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
    MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image'); endif; ?>
		<h2><?php the_title();?></h2>
	<p><?php echo $post->post_content ?></p>
	<?php 
	
	?>
	
	<?php
	}
	?>
	</div>
      
    </div>
  </div>
</div>

<!-- Modal Bhutan-->
<div class="modal fade" id="bhutan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<?php $bangladesh_posts=   query_posts( array( 'category_name' => 'bhutan', 'posts_per_page' => -1 ) );?>
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" width="24" height="24" alt="Icon close"/></span><span class="sr-only">Close</span></button>
   
	<?php
	//print_r($post);
	foreach($bangladesh_posts AS $post){
	?>
	<?php if (class_exists('MultiPostThumbnails')
    && MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
    MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image'); endif; ?>
	<h2><?php the_title();?></h2>
	<p><?php echo $post->post_content ?></p>
	<?php
	}
	?>

      </div>
      
    </div>
  </div>
</div>


<!-- Modal Star Rated Hotels-->
<div class="modal fade" id="star-rated" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<?php $bangladesh_posts=   query_posts( array( 'category_name' => 'starratedhotels', 'posts_per_page' => -1 ) );?>
<div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" width="24" height="24" alt="Icon close"/></span><span class="sr-only">Close</span></button>
			<?php
			//print_r($post);
		foreach($bangladesh_posts AS $post){
		?>
		<?php if (class_exists('MultiPostThumbnails')
		&& MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
		MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image'); endif; ?>
		<h2><?php the_title();?></h2>
		<p><?php echo $post->post_content ?></p>
		<?php
		}
		?>
      </div>
      
    </div>
  </div>
</div>


<!-- Modal Local/int Hotels-->
<div class="modal fade" id="local" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
   <?php $bangladesh_posts=   query_posts( array( 'category_name' => 'localinthubs', 'posts_per_page' => -1 ) );?>
<div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" width="24" height="24" alt="Icon close"/></span><span class="sr-only">Close</span></button>
   <?php
			//print_r($post);
		foreach($bangladesh_posts AS $post){
		?>
		<?php if (class_exists('MultiPostThumbnails')
		&& MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
		MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image'); endif; ?>
		<h2><?php the_title();?></h2>
		<p><?php echo $post->post_content ?></p>
		<?php
		}
		?>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal Alcohol Bars-->
<div class="modal fade" id="alcohol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <?php $bangladesh_posts=   query_posts( array( 'category_name' => 'alcohol-bars', 'posts_per_page' => -1 ) );?>
<div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" width="24" height="24" alt="Icon close"/></span><span class="sr-only">Close</span></button>
   <?php
			//print_r($post);
		foreach($bangladesh_posts AS $post){
		?>
		<?php if (class_exists('MultiPostThumbnails')
		&& MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
		MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image'); endif; ?>
		<h2><?php the_title();?></h2>
		<p><?php echo $post->post_content ?></p>
		<?php
		}
		?>
   
      </div>
      
    </div>
  </div>
</div>

<!-- Modal Bonded Warehouse-->
<div class="modal fade" id="warehouse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <?php $bangladesh_posts=   query_posts( array( 'category_name' => 'bonded-warehouse', 'posts_per_page' => -1 ) );?>
<div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" width="24" height="24" alt="Icon close"/></span><span class="sr-only">Close</span></button>
		<?php
			
		foreach($bangladesh_posts AS $post){
		?>
		<?php if (class_exists('MultiPostThumbnails')
		&& MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
		MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image'); endif; ?>
		<h2><?php the_title();?></h2>
		<p><?php echo $post->post_content ?></p>
		<?php
		}
		?>
   
      </div>
      
    </div>
  </div>
</div>

<!-- Modal Privacy Policy-->
<div class="modal fade" id="privacy-policy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
   
<div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" width="24" height="24" alt="Icon close"/></span><span class="sr-only">Close</span></button>
  
<h2><?php $id=86; $post = get_page($id); echo $post->post_title; ?></h2>
	<?php 
		$id=86; $post = get_page($id); echo $post->post_content; 
	?>

      </div>
      
    </div>
  </div>
</div>

<!-- Modal Terms & Conditions-->
<div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
   
<div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-close.png" width="24" height="24" alt="Icon close"/></span><span class="sr-only">Close</span></button>
   
<h2><?php $id=89; $post = get_page($id); echo $post->post_title; ?></h2>
	<?php 
			$id=89; $post = get_page($id); echo $post->post_content; 
	?>
      </div>
      
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.singlePageNav.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>

    
     <script>
        $(document).ready(function() {
			
			$('header.navbar').on('click', 'nav.navbar-collapse ul a', function(){
				$('header.navbar button.navbar-toggle').trigger('click');
				
				});
 // Prevent console.log from generating errors in IE for the purposes of the demo
        if ( ! window.console ) console = { log: function(){} };

        // The actual plugin
        $('.single-page-nav').singlePageNav({
            offset: $('.single-page-nav').outerHeight(),
            filter: ':not(.external)',
            updateHash: true
        });
            var owl = $("#owl-demo");

            owl.owlCarousel({

                items : 7, //10 items above 1000px browser width
                itemsDesktop : [1000,5], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
                itemsTablet: [600,2], //2 items between 600 and 0;
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
            });

            // Custom Navigation Events
            $(".next").click(function(){
                owl.trigger('owl.next');
            })
            $(".prev").click(function(){
                owl.trigger('owl.prev');
            })
            $(".play").click(function(){
                owl.trigger('owl.play',1000);
            })
            $(".stop").click(function(){
                owl.trigger('owl.stop');
            })


        });
    </script>
	<?php wp_footer();?>
</body>
</html>