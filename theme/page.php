<?php get_header(); ?>
<?php the_post(); ?>
<div class="article section content wrapper">
	<div class="main">
	    <?php the_content(); ?>
    </div>
	<div class="side-bar">
        <div class="mod">
            <h2>More Articles</h2>
            <?php wp_list_pages(array(title_li => '')); ?>
        </div>
	</div>
</div>
<?php get_footer(); ?>