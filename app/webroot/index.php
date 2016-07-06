<?php
/**
 * deltaPHP Framework -- a simple lightweight framework.
 * @Author FLY.YUAN
 * @Date 16-7-6
 * @Time 上午11:21
 */
/**
 * Use the DS to separate the directories in other defines
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
/**
 * The full path to the directory which holds "app", WITHOUT a trailing DS.
 *
 */
define('ROOT', dirname(dirname(dirname(__FILE__))));
/**
 * The actual directory name for the "app".
 *
 */
define('APP_DIR', basename(dirname(dirname(__FILE__))));

define('WWW_ROOT', dirname(__FILE__) . DS);

define('WEBROOT_DIR', basename(dirname(__FILE__)));