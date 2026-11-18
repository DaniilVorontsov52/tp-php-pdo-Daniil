<?php
/*
  TP 1 – SE CONNECTER À LA BASE DE DONNÉES

  1. Se connecter à la base ludotheque avec PDO
     (serveur : localhost, utilisateur : root, mot de passe : root avec MAMP, vide avec WAMP/XAMPP).
  2. Activer l'affichage des erreurs SQL.
  3. Afficher « Connexion réussie ! » si tout va bien.
  4. En cas d'erreur, afficher le message d'erreur et arrêter le script.

  Expérience : remplacer "ludotheque" par "ludotek". Quel message obtenez-vous ?
*/
  try {
$base = new PDO('mysql:host=127.0.0.1;dbname=ludotheque', 'root', '');
 var_dump("COnnection etablie");
 

}
catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}

echo "Connexion réussie !";
?>