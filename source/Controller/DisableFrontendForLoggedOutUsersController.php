<?php

namespace JustLoggedInUsers\Controller;

/**
 * Responsible for disabling the frontend and returning a 403 forbidden header for logged out users.
 * 
 * @package JustLoggedInUsers\Controller
 */
class DisableFrontendForLoggedOutUsersController {

    public function __construct() {
       
        add_action( 'init', [ $this, 'maybe_disable' ] );

    }

    public function maybe_disable() {

        if ( \is_user_logged_in() ) {
            return;
        }

        header( 'HTTP/1.0 403 Forbidden' );
        exit;

    }

}
