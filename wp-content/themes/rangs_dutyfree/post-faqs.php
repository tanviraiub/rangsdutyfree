<div class="container">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h2>confused? we&#8217;ve answers</h2>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <?php $bangladesh_posts=   query_posts( array( 'category_name' => 'faqs', 'posts_per_page' => -1 ) );
	//print_r($post);
	foreach($bangladesh_posts AS $post){
	//$content = get_the_content();
	?>
	<p><strong><?php the_title();?></strong><?php echo $post->post_content ?></p>
	<?php
	}
	?>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<?php $bangladesh_posts=   query_posts( array( 'category_name' => 'faqs', 'posts_per_page' => -1 ) );
	//print_r($post);
	foreach($bangladesh_posts AS $post){
	//$content = get_the_content();
	?>
	<p><strong><?php the_title();?></strong><?php echo $post->post_content ?></p>
	<?php
	}
	?>
  </div>
</div>
</div>
