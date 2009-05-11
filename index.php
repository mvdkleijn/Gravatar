<?php


Plugin::setInfos(array(
    'id'          => 'gravatar',
    'title'       => 'Gravatar', 
    'description' => 'Allows you to put your Gravatar picture anywhere on your site', 
    'version'     => '0.1',
    'author'      => 'Andrew Waters',
    'website'     => 'mailto:andrew@band-x.org')
);


Plugin::addController('gravatar', 'Gravatar');


// Include Functions
include('functions/gravatar.php');