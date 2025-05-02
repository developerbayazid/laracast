<?php

namespace Core;

class ValidationException extends \Exception {

    public readonly array $errors;
    public readonly array $old;

    public static function throw( $errors, $old ) {

        $instance = new static;

        $instance->old = $old;

        $instance->errors = $errors;

        throw $instance;
    }

}