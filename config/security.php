<?php

/**
 * Example
 *
 * [
 *      'providers' => [
 *          'dao' => [
 *              'class' => '\\Racine\\Security\\Authentication\\Provider\\DaoAuthenticationProvider',
 *              'entity' => [
 *                  'class' => '\\App\\Model\\User',
 *                  'property' => 'username'
 *              ],
 *          ]
 *      ],
 *
 *      'firewall' => [
 *          'provider' => 'dao',
 *          'pattern' => '^\/',
 *          'form_login' => [
 *              'check_path' => '/login.php',
 *              'login_path' => '/login.php',
 *          ]
 *      ],
 *
 *      'access_control' => [
 *          ['path' => '^/users.php', 'can' => 'manage']
 *      ]
 * ]
 *
 */

return [

];