<?php

//Class to operate database connection, register and login
class UserManager {
    private PDO $pdo;

    public function __construct() {
        // Connect to the database
        require_once "includes/dbInfo.php";

        if (isset($serverName) && isset($dbname) && isset($userName) && isset($password)) {
            try {
                $this->pdo = new PDO("mysql:host=$serverName;dbname=$dbname",$userName, $password);
                $this->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connect failed: " . $e -> getMessage();
            }
        } else {
            echo "Please set up database";
        }
    }

    /**
     * @throws Exception
     */
    public function register($username, $password, $email): void
    {
        $stmt = $this->pdo->prepare("SELECT * FROM Users WHERE user_name = ?");
        $stmt->execute([$username]);
        if ($stmt->rowCount() > 0) {
            throw new Exception("Username is already taken");
        }

        // Hash the password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the new user into the database
        $stmt = $this->pdo->prepare("INSERT INTO `Users`(`user_name`, `password`, `email`) VALUES (?, ?, ?)");
        $stmt->execute([$username, $password, $email]);
    }

    /**
     * @throws Exception
     */
    public function login($username, $password): User
    {
        // Get the user from the database
        $stmt = $this->pdo->prepare("SELECT * FROM Users WHERE user_name = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        // Check if the password is correct
        if ($user) {
            if (password_verify($password, $user["password"])) {
                return new User($user["user_name"], $user["password"], $user["email"]);
            } else {
                throw new Exception("Invalid username or password");
            }
        } else {
            throw new Exception("Invalid username or password");
        }
    }
}