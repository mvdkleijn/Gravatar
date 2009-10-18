<?php


Plugin::setInfos(array(
    'id'          => 'gravatar',
    'title'       => 'Gravatar', 
    'description' => 'Allows you to put your Gravatar picture anywhere on your site', 
    'version'     => '0.2',
    'author'      => 'Andrew Waters',
    'website'     => 'mailto:andrew@band-x.org')
);


Plugin::addController('gravatar', 'Gravatar', 'administrator,developer', TRUE);


// Include Functions
include('functions/gravatar.php');