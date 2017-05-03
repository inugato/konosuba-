<?php

$host = "localhost";
$user = "root";
$pw   = "";
$db   = "midterm";

$conn = @ mysqli_connect($host, $user, $pw, $db);
if(mysqli_connect_errno()) {
  die("couldnt connect");
}




function getdaily() {
  global $conn;
  $query = "SELECT * FROM daily";
  $results = mysqli_query($conn, $query);
  while($row = mysqli_fetch_array($results)) {
    echo "<tr><td class='table-edit'><input type='checkbox' name='delete-classmate-" . $row['id'] . "' value='" . $row['id'] . "'></input></td>" .
         "<td>". $row['day'] . "</td>" .
         "<td>". $row['rate'] . "</td>" .;

  }
}

function postdaily($day, $rate) {
 global $conn;
 $query = "INSERT INTO daily (day , rate ) VALUES ('$day', $rate)";
 if (mysqli_query($conn, $query)) {
     echo "New record created successfully";
 } else {
     echo "<div class='alert alert-warning' role='alert'>
 ". "<br>" . mysqli_error($conn) . "</div>";
 }
}
