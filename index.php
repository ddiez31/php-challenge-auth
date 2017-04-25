<?php

include 'norefresh.php';
include 'load.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Training mySQL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Semantic-ui CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">

</head>
<body>

<?php

include 'login.php';
echo '<hr>';
include 'read.php';
echo '<hr>';

if (isset($_SESSION["username"]) && isset($_SESSION['password'])) {
include 'create.php';
echo '<hr>';
}

?>

</body>
</html>