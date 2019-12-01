<?php
  $sql = "SELECT * FROM employe";
  $result = $db->query($sql);
  if ($result->num_rows > 0) {
    $i=0;
    while ($row = mysqli_fetch_array($result)){
        $i++;
        }
        echo strval($i) ;
  } else {
      echo "0";
  }

  ?>