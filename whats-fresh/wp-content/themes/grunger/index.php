<?php get_header();?>
    <div style="clear:both"></div>
    <div id="bulleteinholder" class="flt">
        <div class="LeftMesageHolder flt">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        	<div class="Messageshadowbox flt">
        		<h3>
        			<a href="<?php the_permalink();?>"><?php the_title();?></a>
        		</h3>
				<?php the_content("<br/>Read More");?>
				<div class="message_cr">
					<img src="<?php bloginfo("url");?>/wp-content/themes/images/message_cr_bt.png">
				</div>
            </div> <!-- end of article class-->
			<div class="clear"></div>
			<div class="messagedate flt"><?php the_time("j MS, Y g:i A");?></div>
			<div class="nochat frt mright10"><a href="<?php comments_link(); ?>"><?php echo get_comments_number(); ?></a></div>
			<?php endwhile;?>
			<?php else:?>
			<?php endif;?>     
			<div style="text-align:center;">
				<?php posts_nav_link(' &#183; ', 'previous page', 'next page'); ?>
			</div>
        </div> <!-- end of right side-->
    <?php get_sidebar();?>
    </div> <!-- end of CONTENT-->
<div style="clear:both"></div>
<?php get_footer();?>