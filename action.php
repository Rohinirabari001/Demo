<?php
  require_once 'connection.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = "SELECT country,city FROM auto_comp WHERE country LIKE '%$inpText%' or city LIKE '%$inpText%'";
    $result= mysqli_query($conn, $sql);
    //$stmt = $conn->query($sql);
    //$stmt->execute(['country' => '%' . $inpText . '%']);
    if (mysqli_num_rows($result)>0) {
      while ($row=$result->fetch_assoc()) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['country']. '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>