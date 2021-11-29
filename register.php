<?php

class Register
{
    private $username;
    private $email;
    private $password;
    private $cpassword;

    public function __construct($username, $email, $password, $cpassword)
    {
        echo "BR";
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->cpassword = $cpassword;
    }

    public function signUp()
    {
        echo "BRU";
        $userModel = new Users();
        if (!$this->emptyInputs()) {
            header("Location: ../index.php");
            die();
        }

        if (!$this->validateEmail()) {
            header("Location: ../index.php");
            die();
        }

        if (!$this->passwordMatch()) {
            header("Location: ../index.php");
            die();
        }

        if (!$userModel->checkUserExists($this->username, $this->email)) {
            header("Location: ../index.php");
            die();
        }
        $userModel->createUser($this->username, $this->email, $this->password);
    }

    private function emptyInputs()
    {
        if (empty($this->username) || empty($this->email) || empty($this->password) || empty($this->cpassword)) {
            return false;
        } else {
            return true;
        }
    }

    private function validateEmail()
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    private function passwordMatch()
    {
        if ($this->password === $this->cpassword) {
            return true;
        } else {
            return false;
        }
    }
}
