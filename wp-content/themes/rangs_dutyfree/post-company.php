  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	  <?php $R_posts=   query_posts( array( 'category_name' => 'company', 'posts_per_page' => -1 ) );?>
	  <?php
			foreach($R_posts AS $post){
			//$content = get_the_content();
		?>
      
        <h2><?php the_title(); ?></h2>
        <p><?php $postwithbreaks = wpautop( $post->post_content,true/false );
					echo $postwithbreaks;
			?></p>
		  <?php
		  }
		  ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
	  	<?php	
			$R_posts=   query_posts( array( 'category_name' => 'starratedhotels', 'posts_per_page' => -1 ) ); 
			foreach($R_posts AS $post){
			$url2 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
        <div class="comImgWrap"> <img src="<?php echo $url2;?>" alt="Star Rated Hotels" class="img-responsive" />
          <button type="button" class="companyBtn btn btn-default" data-toggle="modal" data-target="#star-rated"><?php the_title(); ?></button>
        </div>
		<?php
		}
		?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<?php  
		$R_posts=   query_posts( array( 'category_name' => 'localinthubs', 'posts_per_page' => -1 ) ); 
		foreach($R_posts AS $post){
		$url3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
        <div class="comImgWrap"> <img src="<?php echo $url3;?>" alt="Local/Int. Hubs" class="img-responsive" />
          <button type="button" class="companyBtn btn btn-default" data-toggle="modal" data-target="#local"><?php the_title(); ?></button>
        </div>
		<?php
		}
		?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
	  <?php  
		$R_posts=   query_posts( array( 'category_name' => 'alcohol-bars', 'posts_per_page' => -1 ) ); 
		foreach($R_posts AS $post){
		$url4 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
        
        <div class="comImgWrap"> <img src="<?php echo $url4;?>" alt="Alcohol Bars" class="img-responsive" />
          <button type="button" class="companyBtn btn btn-default" data-toggle="modal" data-target="#alcohol"><?php the_title(); ?></button>
        </div>
		<?php
		}
		?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
	  <?php  
		$R_posts=   query_posts( array( 'category_name' => 'bonded-warehouse', 'posts_per_page' => -1 ) ); 
		foreach($R_posts AS $post){
		$url5 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>

        <div class="comImgWrap"> <img src="<?php echo $url5;?>" alt="Bonded Warehouse" class="img-responsive" />
          <button type="button" class="companyBtn btn btn-default" data-toggle="modal" data-target="#warehouse"><?php the_title(); ?></button>
        </div>
		<?php
		}
		?>
      </div>
    </div>
    <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="owl-demo" class="owl-carousel">

                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-1.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-15.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-16.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-4.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-5.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-6.png" alt="patnar logo"  class="img-responsive"/></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-7.png" alt="patnar logo"  class="img-responsive"/></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-8.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-9.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-10.png" alt="patnar logo"  class="img-responsive"/></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-11.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-12.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-13.png" alt="patnar logo"  class="img-responsive"/></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-14.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-3.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-17.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-18.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-19.png" alt="patnar logo" class="img-responsive" /></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-20.png" alt="patnar logo" class="img-responsive" /></div>

                    </div>
                    <div class="customNavigation">
                        <a class="btn prev"></a>
                        <a class="btn next"></a>
                    </div>
                </div>
            </div>
  </div>