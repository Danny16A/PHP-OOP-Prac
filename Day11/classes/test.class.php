<?php

class Test extends Dbh
{

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
           echo $row['username'] . '<br>';
        }
    }

    public function getUsersStmt($username, $email)
    {
        $sql = "SELECT * FROM users WHERE username = ? AND email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $email]);
        $name = $stmt->fetchAll();

        foreach ($name as $name) {
           echo $name['username'] . '<br>';
        }
    }

    public function setUsersStmt($username, $password, $email)
    {
        $sql = "INSERT INTO users(username, password, email) VALUES (?, ? , ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $password, $email]);
    }
}
