<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db =  App::resolve( Database::class );

$currentUserId = 7;

$note = $db->query( 'SELECT * FROM notes WHERE id = :id', [

    'id' => $_POST['id']

] )->findOrFail();

authorize( $currentUserId === $note['user_id'] );

$errors = [];

if ( ! Validator::string( $_POST['body'], 1, 500 ) ) {
    $errors['body'] = 'A field is no more than 500 characters and is required!';
}

if ( ! empty( $errors ) ) {
    return view( "notes/edit.view.php", [
         'heading' => 'Edit Note',
         'errors'  => $errors,
         'note'    => $note
     ] );
 }


$db->query( 'UPDATE notes SET body = :body WHERE id = :id', [
    'body' => $_POST['body'],
    'id'   => $_POST['id']
] );

header( 'location: /notes' );
die();