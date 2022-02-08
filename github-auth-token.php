<?php

/**
 * Plugin Name:     github-auth-token
 * Plugin URI:      https://www.planetnine.tech/
 * Description:     Adds a Github Auth Token to all requests to the API. Can be used to install plugins or themes from private GitHub repositories.
 * Author:          Brian Penner
 * Author URI:      https://www.planetnine.tech/
 * Text Domain:     github-auth-token
 * Domain Path:     /languages
 * Version:          0.1.0
 *
 * @package github-auth-token
 */

class githubAuthToken
{
    public function hooks()
    {
    }
    /* 
 * 
 */

}

/**
* Plugin Name:     github-auth-token
* Plugin URI:      https://www.planetnine.tech/
* Description:     
* Author:          Brian Penner
* Author URI:      https://www.planetnine.tech/
* Text Domain:     github-auth-token
* Domain Path:     /languages
* Version:          0.1.0
*
* @package github-auth-token
*/

function addGithubToken($args, $url)
{
    if ( defined(GITHUB_AUTH_TOKEN) && strpos($url, 'github')) {
        $args['headers']['Authorization'] = GITHUB_AUTH_TOKEN;
    }
    return $args;
}

add_filter('http_request_args', 'addGithubToken', 1, 2);