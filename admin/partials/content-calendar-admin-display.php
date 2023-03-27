<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://mahesh-d.wisdmlabs.net
 * @since      1.0.0
 *
 * @package    Content_Calendar
 * @subpackage Content_Calendar/admin/partials
 */


// This file should primarily consist of HTML with a little bit of PHP. 

function my_form()
{

?> <h1 class="heading">Content Calender</h1>
	<form action="" method="POST">

		<div>
			<label for="date">Date :</label>
			<input type="date" name="date" id="name" required />
		</div>

		<div>
			<label for="occasion">Occasion :</label>
			<input type="text" name="occasion" id="occasion" required />
		</div>

		<div>
			<label for="post-title">Post Title :</label>
			<input type="text" name="post-title" id="post-title" required />
		</div>

		<div>
			<label for="author">Author :</label>

			<select id="author" name="author">
				<?php
				$users = get_users();
				foreach ($users as $user) {
					echo '<option value="' . $user->ID . '">' . $user->display_name . '</option>';
				}
				?>
			</select>

		</div>

		<div>
			<label for="reviewer">Reviewer :</label>
			<select id="reviewer" name="reviewer">
				<?php
				$users = get_users(array('role__not_in' => array('administrator')));
				foreach ($users as $user) {
					echo '<option value="' . $user->ID . '">' . $user->display_name . '</option>';
				}
				?>
			</select>

		</div>

		<div>
			<?php submit_button('Submit'); ?>

		</div>


	</form>
<?php


}



