<?php get_header(); ?>

<!-- Page content of course! -->
<main class="" id="content" role="main">
  <div class="container-fluid"> </div>
</main>
<section id="home">
 </section>

<section id="stores" class="section">
<?php get_template_part('post-store'); ?>
</section>

<section id="operations" class="section">
  <?php get_template_part('post-oparation'); ?>
</section>

<section id="company" class="section">
<?php get_template_part('post-company'); ?>
</section>

<section id="faqs" class="section">
  <?php get_template_part('post-faqs'); ?>
  
</section>

<section id="contact" class="section">
	<?php get_template_part('post-contact'); ?>
</section>


<?php get_footer();?>
 
