<?php get_header(); ?>


<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="titlemeta">
		<span class="author"> Posted by <?php the_author(); ?></span> 
		<span class="clock"> On <?php the_time('F - j - Y'); ?></span> 
	</div>	
<div class="clear"></div>
</div>

<div class="cover">
<a href="<?php the_permalink() ?>"><?php uran_postim_image();?></a>
<div class="entry">
<?php the_excerpt(); ?> 
</div>
<div class='clear'></div>

</div>
<div class="postmeta">
<a class="rmore" href="<?php the_permalink() ?>">Read More</a>
	<span class=" comm"><?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?></span>	
</div>

</div>

<?php endwhile; ?>

<div class="clear"></div>

<?php getpagenavi(); ?> 

<?php else : ?>
	<h1 class="title"><?php _e('Not Found.', 'web2feel'); ?></h1>
	<p><?php _e('Sorry, no posts matched your criteria.', 'web2feel'); ?></p>
<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
