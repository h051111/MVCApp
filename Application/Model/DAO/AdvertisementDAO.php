<?php
require_once("config.php");
require_once("Application/Model/Entity/Advertisement.php");

/**
 * DAO service for advertisements
 */
class AdvertisementDAO{
    /**
     * @return array A list of all advertisements contained in the database
     */
    public function getAll(){
        $advertisements = [];

        // Create connection
        $conn = new mysqli(DBHOST, DBUSER, DBPWD, DBNAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT *  FROM advertisements";  //(id, userid, title)
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            $nameFetchSql = "SELECT name FROM users WHERE id = " . $row["userid"];  //Search for the user associated with this advertisement
            $userName = $conn->query($nameFetchSql)->fetch_assoc()["name"];  //Grab first id found, there at most can be one

            array_push($advertisements, new Advertisement($row["id"], $userName, $row["title"]));
        }

        return $advertisements;
    }
}
