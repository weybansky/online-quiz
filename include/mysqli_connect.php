<?php

  $servername = "localhost";
  $dbUser   = "root";
  $dbPassword   = "";
  $dbName     = "online_quiz";

  $conn = mysqli_connect($servername, $dbUser, $dbPassword, $dbName);

  // checking connnection
  if ($conn){
    // Ater Successful connnection, remove the message on next line
    echo "Connection Sucessful<br>";
  }else {
    die("Something went wrong: ". mysqli_connect_error() ."<br>");
  }

  // Creating Database
  // $sqldb = "CREATE DATABASE online_quiz";
  // if (mysqli_query($conn, $sqldb)){
  //   echo "Connection Sucessful => Database successfully created <br>";
  // }else {
  //   echo "Something went wrong => ". mysqli_error($conn) . "<br>";
  // }


  // Creating DB Tables

  // Users Table
  // $sqltable = "CREATE TABLE users(
  //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //   firstName VARCHAR(70) NOT NULL,
  //   lastName VARCHAR(70) NOT NULL,
  //   email VARCHAR(70) UNIQUE NOT NULL,
  //   sex ENUM('M', 'F', 'OTHERS'),
  //   username VARCHAR(70) UNIQUE NOT NULL,
  //   password VARCHAR(70) NOT NULL,
  //   reg_date TIMESTAMP
  // )";
  // if (mysqli_query($conn, $sqltable)) {
  //   echo "Database Table Created sucessfully.<br>";
  // }else {
  //   echo "Something went wrong => ". mysqli_error($conn)."<br>";
  // }


  // Inserting Values
  // $sqlInsertNewUser = "INSERT INTO users(firstName, lastName, email, sex, username, password) VALUES('John', 'Doe', 'johndoe@weybanskytech.com.ng', 'M', 'johnny', 'qwerty1234') ";
  // if (mysqli_query($conn, $sqlInsertNewUser)){
  //   echo "Data added to table";
  // }else{
  //   echo "Something went wrong". mysqli_error($conn)."<br>";
  // }


 ?>
