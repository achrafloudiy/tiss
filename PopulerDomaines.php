<?php
  $sql = "SELECT Description FROM domaine";
  $result = $db->query($sql);
  if ($result->num_rows > 0) {

      while ($row = mysqli_fetch_array($result)){
        echo "<option value='". $row['Description'] ."'>" .$row['Description'] ."</option>" ;
        }
  } else {
      echo "0 results";
  }

  ?>