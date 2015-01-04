<?php
$hote = '';
$dbname = '';
$dbpseudo = '';
$dbpassword = '';

try
{
	$bdd = new PDO('mysql:host=$hote; dbname=$dbname', '$dbpseudo', '$dbpassword');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>