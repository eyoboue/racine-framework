<?php

$defaultTimezone = ini_get("date.timezone");
if(empty($defaultTimezone)){
    date_default_timezone_set("UTC");
}


require __DIR__.'/autoload.php';

$application = \Racine\Application::getInstance();

return $application;