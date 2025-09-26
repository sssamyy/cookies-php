<?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer les valeurs du formulaire
    $pseudo = $_POST['pseudo'];
    $pays = $_POST['pays'];
    $genre = $_POST['genre'];

    // Définir les cookies avec les informations fournies
    setcookie('pseudo', $pseudo, time() + 86400); // Expire après 1 jour (86400 secondes)
    setcookie('pays', $pays, time() + 86400);
    setcookie('genre', $genre, time() + 86400);

    // Rediriger l'utilisateur vers la page2.php
    header('Location: page2.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 1</title>
</head>
<body>
    <h1>Page 1</h1>
    <ul>
       <li><a href="page1.php">Page 1</a></li>
       <li><a href="page2.php">Page 2</a></li>
       <li><a href="page3.php">Page 3</a></li>
    </ul>
    <form method="post" action="">
        <label for="pseudo">Pseudo:</label>
        <input type="text" name="pseudo" id="pseudo" required><br><br>
        
        <label for="pays">Pays:</label>
        <input type="text" name="pays" id="pays" required><br><br>
        
        <label for="genre">Genre:</label>
        <select name="genre" id="genre" required>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Valider">
    </form>
</body>
</html>
