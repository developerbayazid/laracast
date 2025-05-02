<?php

namespace Core;

use Core\Response;
use Core\Middleware\Middleware;

class Router {

    protected $routes = [];

    public function add( $method, $uri, $controller ) {
        $this->routes[] = [
            'method'     => $method,
            'uri'        => $uri,
            'controller' => $controller,
            'middleware' => null
        ];

        return $this;
    }

    public function get( $uri, $controller ) {
        return $this->add( 'GET', $uri, $controller );
    }

    public function post( $uri, $controller ) {
        return $this->add( 'POST', $uri, $controller );
    }

    public function patch( $uri, $controller ) {
        return $this->add( 'PATCH', $uri, $controller );
    }

    public function delete( $uri, $controller ) {
        return $this->add( 'DELETE', $uri, $controller );
    }

    public function only( $key ) {
        $this->routes[array_key_last( $this->routes )]['middleware'] = $key;

        return $this;
    }

    public function route( $uri, $method ) {
       foreach ($this->routes as $route) {
            if ( $route['uri'] === $uri && $route['method'] === strtoupper( $method ) ) {

                if ( $route['middleware'] ) {
                    Middleware::resolve( $route['middleware'] );
                }

                return require base_path( 'Core/Http/controllers/' . $route['controller'] );
            }
       }

       $this->abort();

    }

    protected function abort( $code = Response::NOT_FOUND ) {
       abort( $code );
    }

    public function previousUrl() {
        return $_SERVER['HTTP_REFERER'];
    }


}
