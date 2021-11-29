<?php require_once("database.php"); ?>
<?php

class Users extends Database
{
    // public $errors = [];

    public function createUser($username, $email, $password)
    {
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        try {
            $stmt = $this->connect()->prepare("INSERT INTO users(username, email, password) VALUES(:username, :email, :password);");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->execute();
        } catch (PDOException $e) {
            $stmt = null;
            die("Query failed: " . $e->getMessage());
        }
    }

    public function checkUserExists($username, $email)
    {
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE username=:username OR email=:email ");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            $stmt = null;
            die("Query failed: " . $e->getMessage());
        }
    }
}
