<?php 

class Users extends Dbh{

    protected function getUser($name) {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($username, $password, $email) {
        $sql = "INSERT INTO users(username, password, email) VALUES (?, ? , ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $password, $email]);
    }
}