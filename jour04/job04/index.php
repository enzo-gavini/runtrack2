<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire Post</title>
</head>
<body>
  <h2>Formulaire (méthode Post)</h2>
  <form method="post" action="">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom"><br><br>

    <label for="email">Email :</label>
    <input type="text" name="email" id="email"><br><br>

    <label for="ville">Ville :</label>
    <input type="text" name="ville" id="ville"><br><br>

    <input type="submit" value="Envoyer">
  </form>
</body>
</html>
<?php
if (isset($_POST) && !empty($_POST)) {
  // Ouvre le tableau HTML
  echo "<h3>Résultats du formulaire :</h3>";
  echo "<table border='1'>";
  echo "<tr><th>Argument</th><th>Valeur</th></tr>";

  foreach ($_POST as $argument => $valeur) {
    echo "<tr>";
    echo "<td>" . $argument . "</td>";
    echo "<td>" . $valeur . "</td>";
    echo "</tr>";
  }

  echo "</table>";
}
?>
