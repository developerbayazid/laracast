<?php

// logout the user

use Core\Authenticator;

(new Authenticator)->logout();
header( 'location: /' );

exit();