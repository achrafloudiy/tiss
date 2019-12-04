<?php
  $sql = "SELECT emploi.*, metier.Nom FROM emploi INNER JOIN metier ON emploi.ID_Metier=metier.ID";
  $result = $db->query($sql);
  if ($result->num_rows > 0) {
      while ($row = mysqli_fetch_array($result)){
        echo '
        <tr>
          <td><a href="job-single.php?id='.$row['ID'].'"><h2>'.$row['Nom'].'</h2></a><strong>Domaine: </strong>'.$row['ID_Domaine'].'</td>
          <td>'.$row['Lieu'].'</td>
          <td>'.$row['Statut'].'</td>
          <td><strong>'.$row['Salaire'].'</strong></td>
          <td>'.$row['PublieLe'].'</td>
          <td>'.$row['NombreAnneeExp'].'</td>
        </tr>';
        }
  } 
  else {
      echo "0 results";
  }

  ?>