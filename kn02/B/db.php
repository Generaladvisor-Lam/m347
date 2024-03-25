<?php
      $servername = "kn02b-db";
      $username = "root";
      $password = "1234";
      //$dbname = "mysql";
      // Create connection
      $conn = new mysqli($servername, $username, $password);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT Host, User FROM mysql.user;";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo ($row["Host"] . " / " . $row["User"] . "<br />");
      }
?>