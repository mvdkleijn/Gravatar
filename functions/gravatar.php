<?php

function gravatar($email,$size) {

	$default = URL_PUBLIC.'wolf/plugins/gravatar/images/default.png';
	$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email)."&amp;default=".urlencode($default)."&amp;size=".$size;
	echo "<img src=\"$grav_url\" style=\"float: left;\" />";

}
