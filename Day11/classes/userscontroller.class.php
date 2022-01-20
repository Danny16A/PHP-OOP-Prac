<?php

class UsersController extends Users {
    public function createUser($username, $password, $email) {
        $this->setUser($username, $password, $email);
    }
}