<div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	  <?php $R_posts=   query_posts( array( 'category_name' => 'oparations', 'posts_per_page' => -1 ) );?>
	  <?php
			foreach($R_posts AS $post){
		?>
        <h2><?php the_title();?></h2>
		<?php echo $post->post_content ?>
		</p>
        <div class="learnMoreNfaq single-page-nav"><a href="" class="btn btn-danger" data-toggle="modal" data-target="#about">Learn More</a></div>
		<?php
		}
		?>
      </div>
    </div>
  </div>