<form method="post" action="">
<p class="upadmin-highlight"><?php _e('The variables in {CURLY BRACKETS} are used to present data and info in email. You can use them to customize your email template.','userpro'); 
$res = '';
$array = array(
		'{USERPRO_ADMIN_EMAIL}' => __('Displays the admin email that users can contact you at. You can configure it under Mail settings.','userpro'),
		'{USERPRO_BLOGNAME}' => __('Displays blog name','userpro'),
		'{USERPRO_BLOG_URL}' => __('Displays blog URL','userpro'),
		'{USERPRO_BLOG_ADMIN}' => __('Displays blog WP-admin URL','userpro'),
		'{USERPRO_TO_USERNAME}' => __('Displays the Username of receiver','userpro'),
		'{USERPRO_TO_FIRST_NAME}' => __('Displays the first name of receiver','userpro'),
		'{USERPRO_TO_LAST_NAME}' => __('Displays the last name of receiver','userpro'),
		'{USERPRO_TO_NAME}' => __('Displays the display name or public name of receiver','userpro'),
		'{USERPRO_TO_EMAIL}' => __('Displays the E-mail address of receiver','userpro'),
		'{USERPRO_TO_PROFILE_LINK}' => __('Displays the Profile address of receiver','userpro'),
		'{USERPRO_FROM_USERNAME}' => __('Displays the Username of sender','userpro'),
		'{USERPRO_FROM_FIRST_NAME}' => __('Displays the first name of sender','userpro'),
		'{USERPRO_FROM_LAST_NAME}' => __('Displays the last name of sender','userpro'),
		'{USERPRO_FROM_NAME}' => __('Displays the display name or public name of sender','userpro'),
		'{USERPRO_FROM_EMAIL}' => __('Displays the E-mail address of sender','userpro'),
		'{USERPRO_FROM_PROFILE_LINK}' => __('Displays the Profile address of sender','userpro'),
		);
foreach($array as $key => $val) {
	$res .= '<br /><code>'.$key.'</code> '. $val;
}

echo $res;
 ?></p>
<h3><?php _e('Customize new message mail ','userpro-msg'); ?></h3>
<table class="form-table">

	<tr valign="top">
		<th scope="row"><label for="mail_new_msg_s"><?php _e('Subject','userpro'); ?></label></th>
		<td><input type="text" name="mail_new_msg_s" id="mail_new_msg_s" value="<?php echo userpro_msg_get_option('mail_new_msg_s'); ?>" class="regular-text" /></td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="mail_new_msg"><?php _e('Email Content','userpro'); ?></label></th>
		<td><textarea name="mail_new_msg" id="mail_new_msg" class="large-text code" rows="10"><?php echo userpro_msg_get_option('mail_new_msg'); ?></textarea></td>
	</tr>
	</table>
	<h3><?php _e('Customize Broadcast message mail ','userpro-msg'); ?></h3>
	
	<table class="form-table">
	<tr valign="top">
		<th scope="row"><label for="mail_broadcast_msg_s"><?php _e('Subject','userpro'); ?></label></th>
		<td><input type="text" name="mail_broadcast_msg_s" id="mail_broadcast_msg_s" value="<?php echo userpro_msg_get_option('mail_broadcast_msg_s'); ?>" class="regular-text" /></td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="mail_broadcast_msg"><?php _e('Email Content','userpro'); ?></label></th>
		<td><textarea name="mail_broadcast_msg" id="mail_broadcast_msg" class="large-text code" rows="10"><?php echo userpro_msg_get_option('mail_broadcast_msg'); ?></textarea></td>
	</tr>
	
	
</table>
<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','userpro'); ?>"  />
	<input type="submit" name="reset-options" id="reset-options" class="button" value="<?php _e('Reset Options','userpro'); ?>"  />
</p>

</form>


