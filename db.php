<?php
require_once 'config.php';

class Database extends Config
{
    // Insert User Into Database
    public function insert($username, $email, $department)
    {
        $sql = 'INSERT INTO users(username, email, department) VALUES (:username, :email, :department)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'department' => $department
        ]);
        return true;
    }

    //Fetch all users from database

    public function read()
    {
        $sql = 'SELECT * FROM users ORDER BY id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    //Fetch single User From Database
    public function readOne($id)
    {
        $sql = 'SELECT * FROM users WHERE id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result;
    }

    //Update Single User 
    public function update($id, $username, $email, $department)
    {
        $sql = 'UPDATE users SET username = :username, email=:email, department=:department WHERE id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'department' => $department
        ]);
        return true;
    }

    //Delete User From DATABASe
    public function delete($id)
    {
        $sql = 'DELETE FROM users WHERE id = :id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return true;
    }
}
?>