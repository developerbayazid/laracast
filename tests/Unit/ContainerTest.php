<?php

use Core\Container;
use Tests\TestCase;

test('It can be resolve something out of the container', function () {
    
    //arrange

    $container = new Container();

    $container->bind( 'foo', fn() => 'bar' );

    //act

    $result = $container->resolve( 'foo' );

    //assort/expect

    expect( $result )->toEqual( 'bar' );


});
