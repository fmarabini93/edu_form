<?php
      include "db_connection.php";

      session_start();

      if(isset($_POST['submit'])){
            //collect form data
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['surname'] = $_POST['surname'];
            $_SESSION['email'] = $_POST['email'];
      }

      echo $_SESSION['name'];
      echo $_SESSION['surname'];
      echo $_SESSION['email'];