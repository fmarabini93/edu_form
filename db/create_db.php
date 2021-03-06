<?php
      $server_name = "localhost";
      $username = "root";
      $password = "W,5--hjQ";
      $conn = new mysqli($server_name, $username, $password); 

      if ($conn->connect_error) {
            die("<h1>Connection failed: </h1>" . $conn->connect_error);
      }

      $sql = "CREATE DATABASE IF NOT EXISTS form_test";
      if ($conn->query($sql) === FALSE) {
            echo "<h1>Error creating database: </h1>" . $conn->error;
      }

      include "db/db_connection.php";

      $table1 = "CREATE TABLE IF NOT EXISTS users (
            id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            surname VARCHAR(100) NOT NULL,
            email VARCHAR(255) NOT NULL,
            number VARCHAR(50) NOT NULL,
            region VARCHAR(100) NULL,
            province VARCHAR(100) NULL,
            municipality VARCHAR(100) NULL,
            school VARCHAR(100) NOT NULL,
            school_year SMALLINT NOT NULL,
            avg_vote SMALLINT NOT NULL,
            passions VARCHAR(255) NOT NULL,
            parent_mail VARCHAR(255) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

            if ($conn->query($table1) === FALSE) {
                  echo "<h1>Error creating table: </h1>" . $conn->error;
            }

      $table2 = "CREATE TABLE IF NOT EXISTS regions (
            id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) UNIQUE NOT NULL)";

            if ($conn->query($table2) === FALSE) {
                  echo "<h1>Error creating table: </h1>" . $conn->error;
            }

      $upload_csv = "LOAD DATA INFILE '/srv/http/edu_form/db/regions.csv' IGNORE INTO TABLE regions
                  FIELDS TERMINATED BY ','
                  LINES TERMINATED BY '\n'
                  (name)";

      $upload_regions = mysqli_query($conn, $upload_csv);