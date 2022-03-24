<?php
/*
Template Name: Contact Us
*/
?>


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
    <h1><?php the_title();?></h1>


    <div class="row">


        <div class="col-lg-6">

            This is where the contact form goes

        </div>

        <div class="col-lg-6">

            <?php get_template_part('inc/section','content');?>

        </div>
    </div>
</section>
    <?php get_footer();?>