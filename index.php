<?php
get_header();
?>

	<?php


while (have_posts()){
the_post(); ?>
<h1><a href=" <?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h1>
<p> <?php the_content(); ?> </p>

<?php

}

?>

<span class="myclass">
	<p> I am hero </p>
</span>
<?php get_footer();