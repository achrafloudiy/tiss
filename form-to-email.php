<?php
    $nom = $_POST['fnom'];
    $prenom = $_POST['fprenom'];
    $email = $_POST['femail'];
    $telephone = $_POST['ftelephone'];
    $adresse = $_POST['fadresse'];
    $pays = $_POST['fpays'];
    $message = $_POST['fmessage'];
function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}
else{
  $email_from = 'achrafloudiy@gmail.com';
  $email_subject = "New Form submission";
  $email_body = "You have received a new message from the user $nom.\n".
                              "Here is the message:\n $message".
  
                              $to = "yourname@yourwebsite.com";

  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email \r\n";
  mail($to,$email_subject,$email_body,$headers);
}
?>
