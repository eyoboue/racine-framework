<?php
$application = require_once __DIR__.'/bootstrap/app.php';

$application->run(function ($app){
   return new \Racine\Http\Response('Hello World !');
});

?>