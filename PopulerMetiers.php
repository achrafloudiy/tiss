<?php
function GetDomaine($data){
  $serveur = "localhost";
  $login = "aloudiy";
  $pass="rapist666";
  try
  {
    $db = mysqli_connect($serveur, $login, $pass, "tiss") or die("Failed to 
    connect to MySQL: " .mysqli_error());
    $db->set_charset("utf8");
    $sql1 = "SELECT ID FROM domaine where Description = '{$data}'" ;
    $result = $db->query($sql1);
    $idDomaine = '';
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)){
          $idDomaine = $row['ID'];
          }
    } 
    
    $sql = "SELECT Nom FROM metier WHERE ID_Domaine = '{$idDomaine}'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
      echo "<option value='Sélectionnez un emploi'>Sélectionnez un emploi</option>";
        while ($row = mysqli_fetch_array($result)){
          echo "<option value='".$row['Nom']."'>" .$row['Nom']."</option>" ;
          }
    } else {
      echo "<option value='Sélectionnez un emploi'>Sélectionnez un emploi</option>";
    }   
  }
  catch(PDOException $e)
  {
    echo 'Echec de la connexion : ' .$e->getMessage();
  }
}

if (isset($_POST['Domaine'])) {
  echo GetDomaine($_POST['Domaine']);
}
?>