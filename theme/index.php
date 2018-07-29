<?php get_header(); ?>
    <div class="wrapper">
    	<?php 
            global $numposts;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    		global $query_string;
    		query_posts($query_string); //excludes news articles
    	?>
    	<?php if ( $wp_query->have_posts() ) { ?>
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

	            <div class="article intro">
	                <?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
	                	</a>
	                <?php } ?>
					<div class="article-content">
	                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                    <p><?php the_excerpt(); ?></p>
	                    <a href="<?php the_permalink(); ?>">Read More</a>
	                </div>
	            </div>

            <?php endwhile; ?>
        <?php } ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
        <div class="pagination">
            <div class="wrapper">
	            <span><?php echo 'Page '.$paged.' of '. $wp_query->max_num_pages; ?></span>
                <?php previous_posts_link('Prev') ?>
                <?php next_posts_link('Next') ?>
            </div>
        </div>
    <?php } ?>
<?php get_footer(); ?>