<?php
 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
 $url = "https://";   
  else  
  $url = "http://";   
  // Append the host(domain name, ip) to the URL.   
  $url.= $_SERVER['HTTP_HOST'];   

  // Append the requested resource location to the URL   
  $url.= $_SERVER['REQUEST_URI'];    
  $parts = parse_url($url);
  parse_str($parts['query'], $query);
  //$sql = "SELECT emploi.*, metier.Nom FROM emploi INNER JOIN metier ON emploi.ID_Metier=metier.ID WHERE emploi.ID=".$query['id']; //." INNER JOIN domaine ON emploi.ID_Domaine=domaine.ID";
  $sql = "SELECT emploi.*, metier.Nom, domaine.UrlImg FROM emploi INNER JOIN metier ON emploi.ID_Metier=metier.ID INNER JOIN domaine ON emploi.ID_Domaine=domaine.ID WHERE emploi.ID=".$query['id'];
  $result = $db->query($sql);
  if ($result->num_rows > 0) {
      while ($row = mysqli_fetch_array($result)){
        $ID = $row['ID'];
        $Nom = $row['Nom'];
        $Description=$row['Description'];
        $Lieu = $row['Lieu'];
        $Statut = $row['Statut'];
        $Salaire = $row['Salaire'];
        $Publiele = $row['PublieLe'];
        $NombreAnneeExp = $row['NombreAnneeExp'];
        $NombreDePoste = $row['NombreDePoste']-$row['NombrePosteComble'];
        $DateLimiteApplication = $row['DateLimiteApplication'];
        $UrlImg = $row['UrlImg'];
    }
  }
  else {
      echo "Un problème s'est produit...le poste est introuvable.";
  }

  ?>