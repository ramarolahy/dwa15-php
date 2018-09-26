<?php

class User {

    private $password;

    public function __construct() {
        # Generate a random string for the password
        $this->password = substr(md5(rand()), 0, 7);
    }

    public function getPassword() {
        return hash('sha256', $this->password);
    }
}


# Example usage:
$user = new User();
echo $user->getPassword();
