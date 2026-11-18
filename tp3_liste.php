<!--
  TP 3 – LISTER LES JEUX DANS UN TABLEAU HTML

  Afficher tous les jeux dans le tableau ci-dessous, une ligne par jeu.
  La note s'affiche sur 20 : 18/20
-->


<?php
require 'connexion.php';

$reponse = $base->query(
'SELECT  titre, genre, annee, note FROM jeu'
);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TP 3 - Liste des jeux</title>
</head>
<body>
    <h1>Liste des jeux</h1>

    <table border="1">
  <tr><th>Titre</th><th>Genre</th><th>Année</th><th>Note</th></tr>

<?php
while ($jeu = $reponse->fetch(PDO::FETCH_ASSOC)) {
?>

<tr>
<td><?= htmlspecialchars($jeu['titre']) ?></td>
<td><?= htmlspecialchars($jeu['genre']) ?></td>
<td><?= htmlspecialchars((string)$jeu['annee']) ?></td>
<td><?= htmlspecialchars((string)$jeu['note']) ?>/20</td>
</tr>

<?php
}
?>

</table>

</body>
</html>