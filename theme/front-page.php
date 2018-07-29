<?php get_header(); ?>
<?php the_post(); ?>
<div class="section content wrapper">
	<div class="full">
	    <?php the_content(); ?>
	    <div class="mod">
	        <h2>Articles</h2>
	        <?php wp_list_pages(array(title_li => '', exclude => '8')); ?>
	    </div>
    </div>
</div>
<?php get_footer(); ?>