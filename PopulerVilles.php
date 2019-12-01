<?php
  $sql = "SELECT Nom FROM ville";
  $result = $db->query($sql);
  if ($result->num_rows > 0) {

      while ($row = mysqli_fetch_array($result)){
        echo "<option value='". $row['Nom'] ."'>" .$row['Nom'] ."</option>" ;
        }
  } else {
      echo "0 results";
  }

  ?>