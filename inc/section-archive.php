<section class="row">


    <div class="col-lg-3">


        <?php if( is_active_sidebar('page-sidebar') ):?>

        <?php dynamic_sidebar('page-sidebar');?>

        <?php endif;?>


    </div>


    

    <div class="col-lg-9">
      
    
    <?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-center align-items-center">
       
        
                <!-- <?php if(has_post_thumbnail()):?> 

<img src="<?php the_post_thumbnail_url('post-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

<?php endif;?> -->

                <div class="blog-content">
                    <h3><?php the_title();?></h3>


                    <?php the_excerpt();?>

                    <a href="<?php the_permalink();?>">Read more</a>
                </div>
            </div>
        </div>
  

<?php endwhile; else: endif;?>
</section>