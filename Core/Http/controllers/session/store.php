<?php

use Core\Authenticator;
use Core\Http\Forms\LoginForm;


$loginForm = LoginForm::validate( $attributes = [
    'email'    => $_POST['email'],
    'password' => $_POST['password'],
] );

$signedIn = (new Authenticator)->attempt( 
    $attributes['email'], $attributes['password'] 
);

if ( ! $signedIn ) {
    $loginForm->error( 
        'email', 'No matching account found for this email address and password'
    )->throw();
}

redirect( '/' );