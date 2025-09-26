<?php
// Vérifier si les cookies existent
if (isset($_COOKIE['pseudo']) && isset($_COOKIE['pays']) && isset($_COOKIE['genre'])) {
    $pseudo = $_COOKIE['pseudo'];
    $pays = $_COOKIE['pays'];
    $genre = $_COOKIE['genre'];
} else {
    // Rediriger l'utilisateur vers la page1.php s'il manque des cookies
    header('Location: page1.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 3</title>
</head>
<body>
    <h1>Page 3</h1>
    <ul>
       <li><a href="page1.php">Page 1</a></li>
       <li><a href="page2.php">Page 2</a></li>
       <li><a href="page3.php">Page 3</a></li>
    </ul>
    <p>Pseudo: <?php echo $pseudo; ?></p>
    <p>Pays: <?php echo $pays; ?></p>
    <p>Genre: <?php echo $genre; ?></p>
    <br>
    
</body>
</html>
