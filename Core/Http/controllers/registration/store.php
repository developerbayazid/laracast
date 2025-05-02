<?php

use Core\Validator;
use Core\Database;
use Core\App;
use Core\Authenticator;

$email    = $_POST['email'];
$password = $_POST['password'];

// Validate the form input

$errors = [];

if( ! Validator::email( $email ) ) {
    $errors['email'] = 'Please provide a valid email address.';
}

if ( ! Validator::string( $password, 7, 255 ) ) {
    $errors['password'] = 'Please provide a password at least seven characters.';
}

if ( ! empty( $errors ) ) {
    return view( '/registration/create.view.php', [
        'errors' => $errors
    ] );
}

$db =  App::resolve( Database::class );

$user = $db->query( 'SELECT * FROM users WHERE email = :email', [
    'email' => $email
] )->find();


if ( $user ) {
    // The user already has registered.
    return view( '/registration/create.view.php', [
        'errors' => [
            'email' => 'The user has been exists.'
        ]
    ] );


} else {
    $db->query( 'INSERT INTO users (email, password) VALUES(:email, :password)', [
        'email'    => $email,
        'password' => password_hash( $password, PASSWORD_BCRYPT )
    ] );

    // Mark that user logged in
    Authenticator::login( $user );

    header( 'location: /' );

    exit();
}