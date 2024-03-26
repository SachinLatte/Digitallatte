<div id="sidebar" class="RightArchiveHolder frt">
	<h2 class="fsize27 mbot8">
		<span><?php _e('Archive<span class="browntxt">Bulletin</span>', 'chocolate'); ?><span class="s_title_l"></span><span class="s_title_r"></span></span>
	</h2>
	<div class="widget archiveshadowbox">
		<?php $rand_posts = get_posts('numberposts=5&orderby=desc');
			foreach($rand_posts as $post){ ?>
				<p class="archive_txt">
					<span>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</span>
					<br /><br />
					<?php echo mb_strimwidth(strip_tags($post->post_content),0,150,'...'); ?>
				</p>
				<div class="arcdate">
					<p class="adate flt"><?php the_time("F jS, Y g:i A");?></p>
					<div class="archno frt"><?php echo (get_comments_number()<10)?'0'.get_comments_number():get_comments_number(); ?></div>
				</div>
		<?php } ?>
	</div>
</div>