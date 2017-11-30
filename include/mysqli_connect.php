<?php

/**
* Making the msqli_connect.php file into a classes and objects
*/
class OnlineQuizDatabase{
    private $servername = "localhost";
    private $dbUser     = "root";
    private $dbPassword = "";
    private $dbName     = "online_quiz";

    // Check Database Connection
    public function connectDB(){
      $testValue = "Hello World";
        $conn = mysqli_connect($this->servername, $this->dbUser, $this->dbPassword, $this->dbName);
        if ($conn){
            return "Connection Sucessful<br>";
        }else{
            return die("Something went wrong: ". mysqli_connect_error() ."<br>");
        }
    }

    // Create the Database
    public function createDB($dbName){
        $conn = mysqli_connect($this->servername, $this->dbUser, $this->dbPassword, $dbName);
        $sqldb = "CREATE DATABASE $dbName";
        if (mysqli_query($conn, $sqldb)){
            return "Connection Sucessful => Database successfully created <br>";
        }else {
            return "Something went wrong => ". mysqli_error($conn) . "<br>";
        }
    }

    // Create Database Tables
    public function createTable(){
        $conn = mysqli_connect($this->servername, $this->dbUser, $this->dbPassword, $this->dbName);
        $sqltable = "CREATE TABLE users(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstName VARCHAR(70) NOT NULL,
            lastName VARCHAR(70) NOT NULL,
            email VARCHAR(70) UNIQUE NOT NULL,
            sex ENUM('M', 'F', 'OTHERS'),
            username VARCHAR(70) UNIQUE NOT NULL,
            password VARCHAR(70) NOT NULL,
            reg_date TIMESTAMP
        )";
        if (mysqli_query($conn, $sqltable)) {
            return "Database Table Created sucessfully.<br>";
        }else {
            return "Something went wrong => ". mysqli_error($conn)."<br>";
        }
    }

    // Inserting Values
    public function insertValuestoTable(){
        $conn = mysqli_connect($this->servername, $this->dbUser, $this->dbPassword, $this->dbName);
        $sqlInsertNewUser = "INSERT INTO users(firstName, lastName, email, sex, username, password) VALUES('John', 'Doe', 'johndoe@weybanskytech.com.ng', 'M', 'johnny', 'qwerty1234') ";
        if (mysqli_query($conn, $sqlInsertNewUser)){
            return "Data added to table";
        }else{
            return "Something went wrong ". mysqli_error($conn)."<br>";
        }
    }

}

    $DBconnect = new OnlineQuizDatabase();
    echo $DBconnect->connectDB()->$testValue;
?>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
<?php
                // Echo out to see the output
                $DBconnect->connectDB();

                // At Start of application
                // echo $DBconnect->createDB("online_quiz");
                // echo $DBconnect->createTable();
                // echo $DBconnect->insertValuestoTable();

?>
            </div>
        </div>
    </div>
