<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db =  App::resolve( Database::class );

$errors = [];

$user_id = 7;

if ( ! Validator::string( $_POST['body'], 1, 500 ) ) {
    $errors['body'] = 'A field is no more than 500 characters and is required!';
}

if ( ! empty( $errors ) ) {
   return view( "notes/create.view.php", [
        'heading' => 'Create Note',
        'errors'  => $errors
    ] );
}

$db->query( 'INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [

    'body'    => $_POST['body'],
    'user_id' => $user_id,

]);

header( 'location: /notes' );
die();