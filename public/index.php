<?php

use Core\Session;
use Core\ValidationException;


session_start();

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . 'core/functions.php';

require base_path( 'bootstrap.php' );

$router = new \Core\Router();

$uri = parse_url( $_SERVER['REQUEST_URI'] )['path'];
$routes = require base_path( 'routes.php' );

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route( $uri, $method );

} catch ( ValidationException $exception ) {
    Session::flash( 'errors', $exception->errors );
    Session::flash( 'old', $exception->old);

    redirect( $router->previousUrl() );
}


Session::unFlash();
