<?php
      $servername = "m347-kn04a-db";
      $username = "root";
      $password = "yes";
      $conn = new mysqli($servername, $username, $password);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT Host, User FROM mysql.user;";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo ($row["Host"] . " / " . $row["User"] . "<br />");
      }
?>