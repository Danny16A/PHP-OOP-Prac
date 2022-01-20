<?php

class UsersView extends Users {
    public function showUsers($name) {
        $results = $this->getUser($name);
        echo "Full name: " . $results[0]['username'];
        echo "email: " . $results[0]['email'];
    }
}