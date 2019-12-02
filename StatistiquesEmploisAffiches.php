<?php
  $sql = "SELECT nombreDePoste, nombrePosteComble FROM emploi";
  $result = $db->query($sql);
  if ($result->num_rows > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($result)){
      $i = $i + ($row['nombreDePoste']-$row['nombrePosteComble']) ;
      }
        echo strval($i) ;
  } else {
      echo "0";
  }

  ?>