<?php
require_once("config.php");
require_once("Application/Model/Entity/User.php");

/**
 * DAO service for users
 */
class UserDAO{
    /**
     * @return array A list of all users contained in the database
     */
    public function getAll(){
        $users = [];

        // Create connection
        $conn = new mysqli(DBHOST, DBUSER, DBPWD, DBNAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT *  FROM users";  //(name, id)
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            array_push($users, new User($row["id"], $row["name"]));
        }

        return $users;
    }
}
