 <?php
    $serveurname = "localhost";
    $username = "root";
    $passwoord= "" ;
    dbname= "nourtransport" ;

    try{
        $conn= new POD("mysql:host=$serverame;dbname=$dbname",$username,$password);
      $conn->setAttribute(POD::ATTR_ERRMODE, POD::ATTR_ERRMODE_EXCEPTION);
        echo "envoyer avec succes";
  }
    catch(PODException $e){
        echo"echec:" . $e->getMessage();
    }
 
    if (isset($_POST['je m abonne']))
 {
    $nom=$_POST['nom'];
    $email=$_POST['email'];

    $sql

 }
  ?