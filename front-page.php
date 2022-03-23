<?php get_header();?>

<div class="card mb-3">



<div class="card-body">

<!-- To display the posts in homepage -->
<?php
$query = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 4,
  
]);

if($query->have_posts()){
  while($query->have_posts()) {
    $query->the_post();

    echo '<h1>' . get_the_title() . '</h1>';
   
    echo '<a href="'.get_the_permalink().'">Read More</a>';
    echo '<hr>';

  }
}

?>


</div>

</div>
<!-- To display the products in homepage -->
<div class="card mb-3">



<div class="card-body">


<?php
$query = new WP_Query([
  'post_type' => 'products',
  'posts_per_page' => 2,
  
]);

if($query->have_posts()){
  while($query->have_posts()) {
    $query->the_post();

    echo '<h1>' . get_the_title() . '</h1>';
    echo '<a href="'.get_the_permalink().'">Show more</a>';
    echo '<hr>';

  }
}

?>


</div>

</div>



<?php get_footer();?>