<?php

require 'vendor/autoload.php';
// require 'rest/routes/middleware_routes.php';
require 'rest/routes/reservation_routes.php';
require 'rest/routes/profile_routes.php';


function allow_preflight() {
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Headers: Request, Origin, Content-Type');
        header('Access-Control-Allow-Origin: *');
        die();
    } else {
        header('Access-Control-Allow-Origin: *');
    }
}
allow_preflight();

/*Flight::route('/', function() {
    echo 'hello world';
});*/

Flight::start();