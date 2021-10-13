<?php
      session_start();
      include "db_connection.php";

      $name = $_REQUEST['name'];
      $surname = $_REQUEST['surname'];
      $email = $_REQUEST['email'];

      $sql = "INSERT INTO users (name, surname, email, number, school, school_year, avg_vote, passions, parent_mail) VALUES ('$name','$surname','$email','$number','$school','$school_year','$avg_vote','$passions','$parent_mail')";

      if (mysqli_query($conn, $sql)) {
            echo "<h3>Data correctly registered</h3>";
      } else {
            echo "ERROR: Hush! Sorry $sql. " 
                  . mysqli_error($conn);
      }