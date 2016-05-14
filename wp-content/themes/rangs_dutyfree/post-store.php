 <div class="container-fluid">
    <div class="storesWrapper">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php $R_posts=   query_posts( array( 'category_name' => 'stores', 'posts_per_page' => -1 ) );?>
			<?php
			foreach($R_posts AS $post){
			//$content = get_the_content();
			?>
			<h1><?php the_title();?></h1>
			
			<?php //echo $post->post_content; ?>
			<?php $postwithbreaks = wpautop( $post->post_content,true/false );
					echo $postwithbreaks;
			?>
			<?Php
			}
			?>
			
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		  <?php 
		  ?>
		<?php	
		$bangladesh_posts=  query_posts( array( 'category_name' => 'bangladesh', 'posts_per_page' => -1 ) );
		foreach($bangladesh_posts AS $post){
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	 
		?>
		<?php //print_r($post); ?>
          <div class="storeImgLeft"> <img src="<?php echo $url;?>" alt="" class="img-responsive" />
            <button  type="button" class="bangladesh btn btn-default" data-toggle="modal" data-target="#bangladesh"><?php the_title() ?></button>
          </div>
		<?php
		}
		?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<?php	
			$bangladesh_posts=   query_posts( array( 'category_name' => 'bhutan', 'posts_per_page' => -1 ) ); 
			foreach($bangladesh_posts AS $post){
			$url1 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
			?>
		  <div class="storeImgRight"> <img src="<?php echo $url1;?>" alt="store" class="img-responsive" />
			<button  type="button" class="bhutan btn btn-default" data-toggle="modal" data-target="#bhutan"><?php the_title() ?></button>
		  </div>
		  <?php
		}
		?>
        </div>
      </div>
    </div>
  </div>
  </div>
