<?php if( have_posts() ): while( have_posts() ): the_post();?>

<!-- To display Date -->

<p><?php echo get_the_date();?></p>
<br>

<!-- To display tags -->

<?php
	$tags = get_the_tags();
	if($tags):
	foreach($tags as $tag):?>

<a href="<?php echo get_tag_link($tag->term_id);?>">
    <?php echo $tag->name;?>
</a>

<?php endforeach; endif;?>
<br>
<br>

<!-- To display Content -->

<?php the_content();?>
<br>

<!--  Comments -->

<?php comments_template();?>


<?php endwhile; else: endif;?>