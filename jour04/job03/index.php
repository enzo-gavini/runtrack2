<?php
$count = 0;
foreach ($_POST as $cle => $valeur) {
    if (isset($_POST[$cle])) {
        $count = $count + 1;
    }
}
echo "Le nombre est : " . $count
?>
<form method="post" action="">
  <table border="1" cellpadding="5">
    <tr>
      <th>Champ</th>
      <th>Valeur</th>
    </tr>
    <tr>
      <td>Nom</td>
      <td><input type="text" name="nom" /></td>
    </tr>
    <tr>
      <td>Prénom</td>
      <td><input type="text" name="prenom" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="email" /></td>
    </tr>
    <tr>
      <td>Ville</td>
      <td><input type="text" name="ville" /></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;">
        <input type="submit" value="Envoyer" />
      </td>
    </tr>
  </table>
</form>
