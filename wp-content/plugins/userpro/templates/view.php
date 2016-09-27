<?php
$current_user = wp_get_current_user();
?>



<style>
	
	@media only screen and (max-width: 981px)  {
		
			.black_overlay
			{
			height: 700px !important;
			width: 900px !important;
			}	
			.white_content
			{
			height: 700px !important;
			width: 900px !important;	
			}
			
			.col-sm-8{
			width: 107.667% !important;
			}
			.ui-chatbox{
			padding: 42px 0 0 !important;
			right: 0 !important;
			width: 65% !important;
			}
	}
	
	
	
	
	
	#wpchat{
		display: none;
	}
	#talkbubblesub {
   width: 250px;
   height: 80px;
   color: black;
   background: #e8e8e8;
   position: relative;
   -moz-border-radius:    0px;
   -webkit-border-radius: 0px;
   border-radius:         0px;
}
#talkbubblesub:before {
  content: '';
 position: absolute;
 left: 160px; top: 70px;
 width: 0;
 height: 0;
 border: 50px solid transparent;
 border-top: 70px solid #e8e8e8;
 border-width: 20px;
 border-radius:15px 24px 14px !important
}       
#talkbubblesub > b{display: none;}       
.ui-chatbox-msg-sub {   
    margin-top: 10px;
    float: right;
    width:50%;
    height:auto;
    background-color: black;
    clear: both;
    border-radius: 5px;
    color: white;
    /* Source: http://snipplr.com/view/10979/css-cross-browser-word-wrap */
    white-space: pre-wrap;      /* CSS3 */
    white-space: -moz-pre-wrap; /* Firefox */
    white-space: -pre-wrap;     /* Opera <7 */
    white-space: -o-pre-wrap;   /* Opera 7 */
    word-wrap: break-word;      /* IE */
}       
#talkbubble {
   width: 250px;
   height: 80px;
   background: #384652;
   position: relative;
   -moz-border-radius:    0px;
   -webkit-border-radius: 0px;
   border-radius:         0px;
}
#talkbubble:before {
  content: '';
 position: absolute;
 left: 160px; top: 70px;
 width: 0;
 height: 0;
 border: 50px solid transparent;
 border-top: 70px solid #384652;
 border-width: 20px;
 border-radius:23px 10px 27px !important;
}       
#talkbubble > b
{display: none;} 
</style>

<script type="text/javascript">
jQuery( document ).ready(function()
{	
	jQuery( ".chat" ).click(function()
		{
		var abcclasses = jQuery(this).attr('rel');
		
		var str2 = jQuery(this).attr('class');
		var str1 = 'offline';
		//if(str2.indexOf(str1) != -1){
		//	alert('123');
		//}
		//else { alert('456'); }
		
		jQuery('.username_current').html(abcclasses);
		
		
		if (jQuery('.box'+abcclasses).css('display') === 'none') {
			jQuery('.box'+abcclasses).show();
		}
			 jQuery('.ui-chatbox').not('.box'+abcclasses).hide(); 
		});

});
	
</script>



<style>
.black_overlay{
	display: none;
	position: absolute;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 115%;
	background-color: black;
	z-index:1001;
	-moz-opacity: 0.8;
	opacity:.80;
	filter: alpha(opacity=80);
}

.white_content {
	background-color: white;
	display: none;
	height: 100%;
	left: 5%;
	overflow: auto;
	padding: 16px;
	position: absolute;
	top: 8%;
	width: 87%;
	z-index: 1002;
}

</style>


<div class="userpro userpro-<?php echo $i; ?> userpro-id-<?php echo $user_id; ?> userpro-<?php echo $layout; ?>" <?php userpro_args_to_data( $args ); ?>>

	<a href="#" class="userpro-close-popup"><?php _e('Close','userpro'); ?></a>
	
	<div class="userpro-centered <?php if (isset($header_only)) { echo 'userpro-centered-header-only'; } ?>">
	
		<?php if ( userpro_get_option('lightbox') && userpro_get_option('profile_lightbox') ) { ?>
		<div class="userpro-profile-img" data-key="profilepicture"><a href="<?php echo $userpro->profile_photo_url($user_id); ?>" class="userpro-tip-fade lightview" data-lightview-caption="<?php echo $userpro->profile_photo_title( $user_id ); ?>" title="<?php _e('View member photo','userpro'); ?>"><?php echo get_avatar( $user_id, $profile_thumb_size ); ?></a></div>
		<?php } else { ?>
		<div class="userpro-profile-img" data-key="profilepicture"><a href="<?php echo $userpro->permalink($user_id); ?>" title="<?php _e('View Profile','userpro'); ?>"><?php echo get_avatar( $user_id, $profile_thumb_size ); ?></a></div>
		<?php } ?>

		<div class="userpro-profile-img-after">
			<div class="userpro-profile-name">
				<a href="<?php echo $userpro->permalink($user_id); ?>"><?php echo userpro_profile_data('display_name', $user_id); ?></a><?php echo userpro_show_badges( $user_id ); ?>
			</div>
			<?php if ( userpro_can_edit_user( $user_id ) ) { ?>
			<div class="userpro-profile-img-btn">
				<?php if (isset($header_only)){ ?>
				<a href="<?php echo $userpro->permalink($user_id, 'edit'); ?>" class="userpro-button secondary"><?php _e('Edit Profile','userpro') ?></a>
				<?php } else { ?>
				<a href="#" data-up_username="<?php echo $userpro->id_to_member($user_id); ?>" data-template="edit" class="userpro-button secondary"><?php _e('Edit Profile','userpro'); ?></a>
				<?php } ?>
				<img src="<?php echo $userpro->skin_url(); ?>loading.gif" alt="" class="userpro-loading" />
			</div>
			<?php } ?>
		</div>
		
		<div class="userpro-profile-icons top">
		
		
	

			<?php if (isset($args['permalink'])) {
				userpro_logout_link( $user_id, $args['permalink'], $args['logout_redirect'] );
			} else {
				userpro_logout_link( $user_id );
			} ?>
	<p>
		<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">
			Chat Now
		</a> 	
		<!-- 	<a href = "javascript:void(0)"  id="cct">
			Chat Now
		</a>	 -->	
	</p>				
				

			
			
			
			
		</div>
			
		<?php echo $userpro->show_social_bar( $args, $user_id, 'userpro-centered-icons' ); ?>

		<div class="userpro-clear"></div>
		
	</div>
	
	<?php if (!isset($header_only)) { ?>
	
	<?php
	// action hook after user header
	if (!isset($args['disable_head_hooks'])){
		if (!isset($user_id)) $user_id = 0;
		$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
		do_action('userpro_after_profile_head', $hook_args);
	}
	?>
	
	<div class="userpro-body">
	    
		<?php do_action('userpro_pre_form_message'); ?>

		<form action="" method="post" data-action="<?php echo $template; ?>">
		
			<input type="hidden" name="user_id-<?php echo $i; ?>" id="user_id-<?php echo $i; ?>" value="<?php echo $user_id; ?>" />
			
			<?php // Hook into fields $args, $user_id
			if (!isset($user_id)) $user_id = 0;
			$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
			do_action('userpro_before_fields', $hook_args);
			?>
			
			<?php foreach( userpro_fields_group_by_template( $template, $args["{$template}_group"] ) as $key => $array ) { ?>
				
				<?php  if ($array) echo userpro_show_field( $key, $array, $i, $args, $user_id ) ?>
				
			<?php } ?>
			
			<?php // Hook into fields $args, $user_id
			if (!isset($user_id)) $user_id = 0;
			$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
			do_action('userpro_after_fields', $hook_args);
			?>
			
			<?php // Hook into fields $args, $user_id
			if (!isset($user_id)) $user_id = 0;
			$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
			do_action('userpro_before_form_submit', $hook_args);
			?>
			
			<?php if ( userpro_can_delete_user($user_id) || $userpro->request_verification($user_id) || isset( $args["{$template}_button_primary"] ) || isset( $args["{$template}_button_secondary"] ) ) { ?>
			<div class="userpro-field userpro-submit userpro-column">
				
				<?php if ( $userpro->request_verification($user_id) ) { ?>
				<input type="button" value="<?php _e('Request Verification','userpro'); ?>" class="popup-request_verify userpro-button secondary" data-up_username="<?php echo $userpro->id_to_member($user_id); ?>" />
				<?php } ?>
				
				<?php if ( userpro_can_delete_user($user_id) ) { ?>
				<input type="button" value="<?php _e('Delete Profile','userpro'); ?>" class="userpro-button red" data-template="delete" data-up_username="<?php echo $userpro->id_to_member($user_id); ?>" />
				<?php } ?>
				
				<?php if (isset($args["{$template}_button_primary"]) ) { ?>
				<input type="submit" value="<?php echo $args["{$template}_button_primary"]; ?>" class="userpro-button" />
				<?php } ?>
				
				<?php if (isset( $args["{$template}_button_secondary"] )) { ?>
				<input type="button" value="<?php echo $args["{$template}_button_secondary"]; ?>" class="userpro-button secondary" data-template="<?php echo $args["{$template}_button_action"]; ?>" />
          
				<?php } ?>

				<img src="<?php echo $userpro->skin_url(); ?>loading.gif" alt="" class="userpro-loading" />
				<div class="userpro-clear"></div>
				
			</div>
			<?php } ?>
		
		</form>
	
	</div>
	
	<?php } ?>

</div>
 <div id="light" class="white_content">
	
		<?php //if (function_exists('simple_ajax_chat')) simple_ajax_chat();
echo do_shortcode( '[userpro_message_list]' );
		 ?>
	
	</div>
        <div id="fade" class="black_overlay"></div>