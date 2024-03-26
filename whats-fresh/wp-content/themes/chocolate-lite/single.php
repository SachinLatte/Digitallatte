<?php get_header(); ?>
<div style="clear:both"></div>
 <div id="bulleteinholder" class="flt">
 <div class="LeftMesageHolder flt">
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<div class="Messageshadowbox flt" id="post-<?php the_ID(); ?>">
		<h3 class="title"><?php the_title(); ?></h3>
		<br />
		<?php the_content(); ?>
		<div class="message_cr">
			<img src="<?php bloginfo("url");?>/wp-content/themes/images/message_cr_bt.png">
		</div>
		<div class="post_info">
<!--			<span class="p_comment p_comment_single"><a href="#comments" rel="bookmark"><?php _e('Leave a comment','chocolate'); ?></a> <?php comments_number('(0)', '(1)', '(%)'); ?></span>-->
		</div>
		<div class="clear"></div>
		<div class="entry">
			
			<?php wp_link_pages( array( 'before' => '<div class="page_link"><strong>' . __( 'Pages:', 'chocolate' ) . '</strong>' , 'after' => '</div>' ) ); ?>
		</div><!-- END entry -->
	</div><!-- END post -->
	<div class="messagedate flt"><?php the_time("F jS, Y g:i A");?></div>
	<div class="nochat frt mright10"><a href="<?php comments_link(); ?>"><?php echo get_comments_number(); ?></a></div>
	<div class="clear"></div>
	<?php comments_template( 'comments.php', true ); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
	</div>
<?php get_sidebar();?>
</div><!--content-->
<div style="clear:both"></div>
<?php get_footer(); ?>