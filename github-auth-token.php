<?php

/**
* Plugin Name:     github-auth-token
* Plugin URI:      https://www.planetnine.tech/
* Description:     
* Author:          Brian Penner
* Author URI:      https://www.planetnine.tech/
* Text Domain:     github-auth-token
* Domain Path:     /languages
* Version:          0.2.0
*
* @package github-auth-token
*/

function addGithubToken($args, $url)
{
    if ( defined('GITHUB_AUTH_TOKEN') && strpos($url, 'github.com')) {
        $args['headers']['Authorization'] = 'token ' . GITHUB_AUTH_TOKEN;
    }
    return $args;
}

add_filter('http_request_args', 'addGithubToken', 1, 2);