<!-- Voila le chemin de connexion vers la base de données PhpMyAdmin, user:root & mdp:root -->
<?php
	$bdd = mysqli_connect("localhost","root","root","db_prideon");
	$bdd->set_charset("utf8");
?>
