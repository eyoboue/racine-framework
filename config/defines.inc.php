<?php

define('_ROOT_DIR_', realpath(__DIR__.'/..'));
define('_APP_DIR_', _ROOT_DIR_.DIRECTORY_SEPARATOR.'app');
define('_CONFIG_DIR_', _ROOT_DIR_.DIRECTORY_SEPARATOR.'config');

define('_STORAGE_DIR_', _ROOT_DIR_.DIRECTORY_SEPARATOR.'storage');

define('_PUBLIC_DIRNAME_', 'public');
define('_PUBLIC_DIR_', _ROOT_DIR_.DIRECTORY_SEPARATOR._PUBLIC_DIRNAME_);

define('_RESOURCES_DIR_', _ROOT_DIR_.DIRECTORY_SEPARATOR.'resources');
define('_VIEWS_DIR_', _RESOURCES_DIR_.DIRECTORY_SEPARATOR.'views');

define('_PAGE_DIR_', _ROOT_DIR_);


// Controller action query string
define('_CONTROLLER_REQUEST_ACTION_', '_a');