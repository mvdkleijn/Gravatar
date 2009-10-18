<?php

class GravatarController extends PluginController {

	var $path;
	var $fullpath;
	
	public function __construct()
	{
		$this->setLayout('backend');
		$this->assignToLayout('sidebar', new View('../../plugins/gravatar/views/sidebar'));
	}
	
	public function index()
	{
		$this->display('gravatar/views/index');
	}

}