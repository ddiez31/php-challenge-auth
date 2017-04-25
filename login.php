
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Semantic-ui CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

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
        <button type="submit" name="button">Se connecter</button>
      </div>
    </form>

      <?php
      if (isset($_POST['button'])) {
          $username = $_POST['username'];
          $password = SHA1($_POST['password']);

          $check = ORM::for_table('user')->where(array(
                                      'username' => $username,
                                      'password' => $password
                                    ))->find_many();

          if ($check) {
              $_SESSION['username'] = $username;
              $_SESSION['password'] = $password;
              // $_SESSION['page'] = "index.php";
              header("location:check_login.php");
          } else {
              echo 'Utilisateur non reconnu';
          }
      };
  
      ?>

  </body>
</html>
