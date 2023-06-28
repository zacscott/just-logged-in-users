<?php
/**
 * Plugin Name: Just Logged In Users
 * Version:     1.0
 * Author:      Zac Scott
 * Author URI:  https://zacscott.net
 * Description: Disable the site for non-logged in users.
 * Text Domain: just-logged-in-users
 */

require dirname( __FILE__ ) . '/vendor/autoload.php';

define( 'JUST_LOGGED_IN_USERS_PLUGIN_ABSPATH', dirname( __FILE__ ) );
define( 'JUST_LOGGED_IN_USERS_PLUGIN_ABSURL', plugin_dir_url( __FILE__ )  );

// Boot each of the plugin logic controllers.
new \JustLoggedInUsers\Controller\DisableFrontendForLoggedOutUsersController();
