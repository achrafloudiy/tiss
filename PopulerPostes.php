<?php
  $sql = "SELECT emploi.*, metier.Nom, domaine.UrlImg, domaine.Description FROM emploi INNER JOIN metier ON emploi.ID_Metier=metier.ID INNER JOIN domaine ON emploi.ID_Domaine=domaine.ID";
  $result = $db->query($sql);
  if ($result->num_rows > 0) {
      while ($row = mysqli_fetch_array($result)){
        echo '
        <tr>
        <td><img src="'.$row['UrlImg'].'"></img></td><td><a href="job-single.php?id='.$row['ID'].'"><h2>'.$row['Nom'].'</h2></a><strong>Domaine: </strong>'.$row['Description'].'</td>
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