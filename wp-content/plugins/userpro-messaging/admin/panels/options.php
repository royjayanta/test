<form method="post" action="">

<h3><?php _e('Appearance','userpro-msg'); ?></h3>
<table class="form-table">
	<tr valign="top">
		<th scope="row"><label for="msg_notification"><?php _e('New Message Notification','userpro'); ?></label></th>
		<td>
			<select name="msg_notification" id="msg_notification" class="chosen-select" style="width:300px">
				<option value="r" <?php selected('r', userpro_msg_get_option('msg_notification')); ?>><?php _e('Show at bottom right','userpro-msg'); ?></option>
				<option value="l" <?php selected('l', userpro_msg_get_option('msg_notification')); ?>><?php _e('Show at bottom left','userpro-msg'); ?></option>
			</select>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><label for="msg_conversation"><?php _e('Message Conversation','userpro'); ?></label></th>
		<td>
			<select name="msg_conversation" id="msg_conversation" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('msg_conversation')); ?>><?php _e('Display recent message on top','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('msg_conversation')); ?>><?php _e('Display recent message on bottom','userpro-msg'); ?></option>
			</select>
		</td>
	</tr>
	

</table>

<h3><?php _e('Messaging Options','userpro-msg'); ?></h3>
<table class="form-table">
	
	<tr valign="top">
		<th scope="row"><label for="userpro_msg_envato_code"><?php _e('Envato purchase code','userpro-msg'); ?></label></th>
		<td>
			<input type="text" name="userpro_msg_envato_code" id="userpro_msg_envato_code" value="<?php echo userpro_msg_get_option('userpro_msg_envato_code'); ?>" class="regular-text" />
			<span class="description"><?php _e('Enter your envato purchase code.','userpro-msg'); ?></span>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><label for="msg_privacy"><?php _e('Global Messaging Privacy','userpro'); ?></label></th>
		<td>
			<select name="msg_privacy" id="msg_privacy" class="chosen-select" style="width:300px">
				<option value="public" <?php selected('public', userpro_msg_get_option('msg_privacy')); ?>><?php _e('Open to all','userpro-msg'); ?></option>
				<option value="mutual" <?php selected('mutual', userpro_msg_get_option('msg_privacy')); ?>><?php _e('Mutual Followers','userpro-msg'); ?></option>
				<option value="none" <?php selected('none', userpro_msg_get_option('msg_privacy')); ?>><?php _e('Disable Messaging','userpro-msg'); ?></option>
			</select>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="block_user"><?php _e('Block user from messaging','userpro'); ?></label></th>
		<td>
			<select name="block_user" id="block_user" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('block_user')); ?>><?php _e('Yes','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('block_user')); ?>><?php _e('No','userpro-msg'); ?></option>
			</select>
			
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><label for="following_user"><?php _e('Users will send message to those users whom they follow','userpro'); ?></label></th>
		<td>
			<select name="following_user" id="following_user" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('following_user')); ?>><?php _e('Yes','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('following_user')); ?>><?php _e('No','userpro-msg'); ?></option>
			</select>

		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><label for="user_followers"><?php _e('Users will send message to their followers','userpro'); ?></label></th>
		<td>
			<select name="user_followers" id="user_followers" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('user_followers')); ?>><?php _e('Yes','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('user_followers')); ?>><?php _e('No','userpro-msg'); ?></option>
			</select>

		</td>
	</tr>	
		
	<tr valign="top">
		<th scope="row"><label for="email_notifications"><?php _e('Turn on e-mail notifications','userpro'); ?></label></th>
		<td>
			<select name="email_notifications" id="msg_privacy" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('email_notifications')); ?>><?php _e('Enabled','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('email_notifications')); ?>><?php _e('Disabled','userpro-msg'); ?></option>
			</select>
			<span class="description"><?php _e('Send an e-mail notification when someone receives a new message. This is a global option, so be careful. Privacy settings are still under development.','userpro-msg'); ?></span>
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><label for="autorefresh"><?php _e('Auto Refresh','userpro'); ?></label></th>
		<td>
			<select name="autorefresh" id="autorefresh" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('autorefresh')); ?>><?php _e('Yes','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('autorefresh')); ?>><?php _e('No','userpro-msg'); ?></option>
			</select>
			<span class="description"><?php _e('If auto refresh is set to yes , then message notification will be refreshed after every 30 seconds.','userpro-msg'); ?></span>
		</td>
	</tr>
	
<tr valign="top">
		<th scope="row"><label for="roles_that_can_send"><?php _e('Allow these roles to send messages','userpro-msg'); ?></label></th>
		<td>
<?php $roles_that_can_send = get_option('roles_that_can_send'); ?>
			<input type="text" name="roles_that_can_send" id="roles_that_can_send" value="<?php if(isset($roles_that_can_send)){echo get_option('roles_that_can_send');}else echo '' ; ?>" class="regular-text" />

	

			<span class="description"><?php _e('The users belonging to above roles will be able to send messages to all other users on the site. By default evrey one can send message. You can specify multiple roles by comma seperated.','userpro-msg'); ?></span>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><label for="enterforsend"><?php _e('Hit Enter For Send Message','userpro'); ?></label></th>
		<td>
			<select name="enterforsend" id="enterforsend" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('enterforsend')); ?>><?php _e('Yes','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('enterforsend')); ?>><?php _e('No','userpro-msg'); ?></option>
			</select>
		</td>
	</tr>


</table>
<h3><?php _e('Message Footer','userpro-msg'); ?></h3>
<table class="form-table">
	
	<tr valign="top">
		<th scope="row"><label><?php _e('Important Note','userpro'); ?></label></th>
		<td><span class="description"><?php _e('If you would like to ensure all private messages exchanged by users via your website, have a default note appear in the footer of all messages, you can mention it here.','userpro-media');?></span></td>
	</tr>

	<tr valign="top">
		<th scope="row"><label for="default_msg"><?php _e('Append Message Footer','userpro'); ?></label></th>
		<td>
			<select name="default_msg" id="default_msg" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('default_msg')); ?>><?php _e('Enabled','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('default_msg')); ?>><?php _e('Disabled','userpro-msg'); ?></option>
			</select>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="default_msg_text"><?php _e('Message Body','userpro'); ?></label></th>
		<td><textarea name="default_msg_text" id="default_msg_text" class="large-text code" rows="3"><?php echo stripslashes( esc_attr(userpro_msg_get_option('default_msg_text')) ); ?></textarea></td>
	</tr>


</table>
<h3><?php _e('Automated Welcome Message','userpro-msg'); ?></h3>
<table class="form-table">
	
	<tr valign="top">
		<th scope="row"><label for="msg_auto_welcome"><?php _e('Send an automated message to new users','userpro'); ?></label></th>
		<td>
			<select name="msg_auto_welcome" id="msg_auto_welcome" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('msg_auto_welcome')); ?>><?php _e('Enabled','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('msg_auto_welcome')); ?>><?php _e('Disabled','userpro-msg'); ?></option>
			</select>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="msg_auto_welcome_id"><?php _e('Admin User ID','userpro-msg'); ?></label></th>
		<td>
			<input type="text" name="msg_auto_welcome_id" id="msg_auto_welcome_id" value="<?php echo userpro_msg_get_option('msg_auto_welcome_id'); ?>" class="regular-text" />
			<span class="description"><?php _e('This is used to tell the user who has sent them the message. e.g. Enter user ID for the account who welcome users, like your own (admin) user ID.','userpro-msg'); ?></span>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="msg_auto_welcome_text"><?php _e('Message Body','userpro'); ?></label></th>
		<td><textarea name="msg_auto_welcome_text" id="msg_auto_welcome_text" class="large-text code" rows="3"><?php echo stripslashes( esc_attr(userpro_msg_get_option('msg_auto_welcome_text')) ); ?></textarea></td>
	</tr>
	
</table>
<!--Code for broadcast message-->
<h3><?php _e('Broadcast Message','userpro-msg'); ?></h3>
<table class="form-table">
	
	<tr valign="top">
		<th scope="row"><label for="broadcast_enabled"><?php _e('Broadcast Message Settings','userpro-msg'); ?></label></th>
		<td>
			<select name="broadcast_enabled" id="broadcast_enabled" class="chosen-select" style="width:300px">
				<option value="1" <?php selected('1', userpro_msg_get_option('broadcast_enabled')); ?>><?php _e('Enabled','userpro-msg'); ?></option>
				<option value="0" <?php selected('0', userpro_msg_get_option('broadcast_enabled')); ?>><?php _e('Disabled','userpro-msg'); ?></option>
			</select>
			<span class="description"><?php _e('This will enable the feature of broadcasting message to all the users.','userpro-msg'); ?></span>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><label for="roles_that_can_broadcast"><?php _e('Allow these roles to broadcast messages','userpro-msg'); ?></label></th>
		<td>
			<input type="text" name="roles_that_can_broadcast" id="roles_that_can_broadcast" value="<?php echo userpro_msg_get_option('roles_that_can_broadcast'); ?>" class="regular-text" />
			<span class="description"><?php _e('The users belonging to above roles will be able to broadcast messages to all other users on the site. By default no one can broadcast message.','userpro-msg'); ?></span>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="roles_that_can_recieve_broadcast"><?php _e('These roles can recieve broadcast messages','userpro-msg'); ?></label></th>
		<td>
			<input type="text" name="roles_that_can_recieve_broadcast" id="roles_that_can_recieve_broadcast" value="<?php echo userpro_msg_get_option('roles_that_can_recieve_broadcast'); ?>" class="regular-text" />
			<span class="description"><?php _e('The users belonging to above roles will be able to recieve broadcast messages. By default all users will recieve broadcast message.','userpro-msg'); ?></span>
		</td>
	</tr>
	
</table>
<!--Code end-->

<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','userpro-msg'); ?>"  />
	<input type="submit" name="reset-options" id="reset-options" class="button" value="<?php _e('Reset Options','userpro-msg'); ?>"  />
</p>

</form>

