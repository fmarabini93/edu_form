<?php
      session_start();
      include "db_connection.php";

      $name = $_SESSION['name'];
      $surname = $_SESSION['surname'];
      $email = $_SESSION['email'];
      $number = $_REQUEST['phone'];
      $school = $_REQUEST['school'];
      $school_year = $_REQUEST['Numberoptions'];
      $avg_vote = $_REQUEST['avg_vote'];
      $passions = $_REQUEST['passions'];
      $parent_mail = $_REQUEST['parent_mail'];

      $sql = "INSERT INTO users (name, surname, email, number, school, school_year, avg_vote, passions, parent_mail) VALUES ('$name','$surname','$email','$number','$school','$school_year','$avg_vote','$passions','$parent_mail')";

      if (mysqli_query($conn, $sql)) {
            echo "<h3>Data correctly registered</h3>";
      } else {
            echo "ERROR: Hush! Sorry $sql. " 
                  . mysqli_error($conn);
      }