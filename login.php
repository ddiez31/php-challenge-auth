<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

  <?php

$user = 'root';
$pass = '070401';

// liste user
try {
    $bdd = new PDO('mysql:host=localhost;dbname=reunion_island',$user,$pass);
    // foreach($bdd->query('SELECT * FROM user') as $row) {
    //     echo('Utilisateur: '.$row['username'].'<br>');
    //     echo('Mot de passe: '.$row['password'].'<br>');
    //     echo '<br>';
    // }
    // $bdd = null;
} catch(PDOException$e) {
    print "Erreur!:".$e->getMessage().'<br>';
    die();
}


  ?>

    <form action="" method="post">
      <div>
        <label for="username">Identifiant</label>
        <input type="text" name="username">
      </div>
      <div>
        <label for="password">Mot de passe </label>
        <input type="password" name="password">
      </div>
      <div>
        <button type="button" name="button">Se connecter</button>
      </div>
    </form>

    <?php
    $req = $bdd->prepare('SELECT id FROM user WHERE username = :username AND password = :password');
    $req->execute(array(
        'username' => $username,
        'password' => $password
    ));
    $result = $req->fetch();
if (isset($_POST['button'])) {
if(isset($_POST['username']) && isset($_POST['password'])) {
  // if($_POST['username'] == usernamne && $_POST['password'] == password) {
    session_start();
    $_SESSION['username'] = $_POST['usernamne'];
    $_SESSION['password'] = $_POST['password'];
    header('location:check_login.php');
  }
  }
// }




    // if(!$result) {
    //     echo 'Mauvais identifiant ou mot de passe!';
    // } else {
    //     session_start();
    //     $_SESSION['id'] = $result['id'];
    //     $_SESSION['username'] = $username;
    //     echo 'Vous êtes connecté!';
    // }

    // if(isset($_SESSION['id']) AND isset($_SESSION['username'])) {
    //     echo 'Bienvenue '.$_SESSION['username'];
    // }

    ?>




   <?php
//$displayForm = true;
// if (isset($_POST['submit'])) {
//     $displayForm = false;
//     echo($_POST['civilite'].' '.$_POST['nom'].' '.$_POST['prenom'].' '.$_POST['file']);
//     $path_ext = pathinfo($_POST['file']);
//     $ext = $path_ext['extension'];
//     echo '<br>';
//     if ($ext !== "pdf"){
//         try {
//             throw new Exception("Ce n'est pas un fichier PDF");
//         } catch(Exception $e) {
//             echo $e->getMessage();
//         }
//     } else {
//         echo "C'est un fichier PDF";
//     }
// }
// if ($displayForm) {
?>
    <!--<h1>Formulaire d'inscription</h1>
    <form method="POST" action="/user.php">
    <select name="civilite">
        <option value="Mlle">Mlle</option>
        <option value="Mme">Mme</option>
        <option value="Mr">Mr</option>
    </select>
            <label for="name">Nom:</label>
            <input type="text" name="nom" />
            <label for="name">Prénom:</label>
            <input type="text" name="prenom" />
            <label for="file">Fichier:</label>
            <input type="file" name="file" />
            <button type="submit" name="submit">Inscription</button>
    </form>-->
<?php
// }
?>

  </body>
</html>
