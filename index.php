<?php

Plugin::setInfos(array(
	'id'			=> 'gravatar',
	'title'			=> 'Gravatar', 
	'description'	=> 'Allows you to put your Gravatar picture anywhere on your site', 
	'version'		=> '0.3.0',
	'update_url'	=> 'http://www.band-x.org/update.xml',
	'author'		=> 'Andrew Waters',
	'website'		=> 'http://www.band-x.org'
));

Plugin::addController('gravatar', 'Gravatar', 'administrator,developer,editor', TRUE);

// Include Functions
include('functions/gravatar.php');