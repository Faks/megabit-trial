<?php
/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks *
 * PHP version 7.3
 *
 * @category PHP
 * @package  Megabit_Trial
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 * Date: 2019.02.19.
 * Time: 9:19
 */

ini_set('log_errors', 'On');
ini_set('display_errors', '1');

use Pecee\SimpleRouter\SimpleRouter;

/**
 * Init Session
 **/
session_start();

/**
 * Autoload Registered Files
 **/
require_once '../vendor/autoload.php';

/**
 * Load Routes
 */
// Start the routing
SimpleRouter::start();