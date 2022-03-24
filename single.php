<?php get_header();?>

<section class="page-wrap">
<div class="container">
    
<!-- adding sidebar to the page -->
<section class="row">

		
<div class="col-lg-3">
    

            <?php if( is_active_sidebar('page-sidebar') ):?>
        
                    <?php dynamic_sidebar('page-sidebar');?>

            <?php endif;?>


</div>


<div class="col-lg-9">

<?php if(has_post_thumbnail()):?>

<img src="<?php the_post_thumbnail_url('post_large');?>">

    <?php endif;?>

    <h1><?php the_title();?></h1>

	<?php get_template_part('inc/section','postcontent');?>
    

</div>
</section>



    <?php get_footer();?>