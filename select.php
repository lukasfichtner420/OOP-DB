<?php
require "db.php";

$sql = "SELECT jmeno, druh, rasa, zvuky_idzvuky.zvuky FROM zvirata, zvuky";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo " Id: " . $row["id"]. " | " . " Jmeno: " . $row["jmeno"]. " | " . " Druh: " . $row["druh"] . " | " . " Rasa: " . $row["rasa"] . " | " . " Zvuk: " . $row["zvuk"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();