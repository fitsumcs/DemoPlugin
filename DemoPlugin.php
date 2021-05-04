<?php

/**
* Plugin Name: Demo Plugin 
* Plugin URI: http://demoplugin.com
* Description: This is a demo plugin developed for teaching purpose 
* Version: 1.0.0
* Author: Fitsum A.
* Author URI: http://fitsum.com
* License: GPL2
*/



if ( ! defined( 'ABSPATH' ) ) {
	die( 'Hey , you can not access  this file silly human ' );
}

// other way 
// defined( 'ABSPATH' ) or 	die( 'Hey , you can not access  this file dud ' );

//other way ...
// if (function_exists('add_action')){ echo "You can not access this file";}

// The Plugin class 
class DemoPlugin{

function activate()
{

}
function deactivate()
{

}
function uninstall()
{

}

     

 



}
if(class_exists('DemoPlugin'))
{
    $demoplugin = new DemoPlugin();
}

// Registering Activation 
register_activation_hook(__FILE__, array( $demoplugin,'activate'));

// Registering De Activation 
register_deactivation_hook(__FILE__, array( $demoplugin,'deactivate'));





















?>