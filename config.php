<?php

if(isset($_POST['email'])  && isset($_POST['mdp'])){
// variables
$email = $_POST['email'];
$mdp = $_POST['mdp'];
// verifier les infos
// connexion à la base de donnés
$nom_serveur = "localhost";
$utilisateur ="root";
$mot_de_passe ="";
$nom_base_de_données ="mio";
$conn = mysqli_connect($nom_serveur ,$utilisateur ,$mot_de_passe ,$nom_base_de_données);
// requette pour selectionner l'utilisateur qui a pour email et mot de passe les identifiants entres
$req = mysqli_query($conn , "SELECT *FROM utilisateurs WHERE email='$email' AND mdp='$mdp'");
$num_ligne = mysqli_num_rows($req) ; 
if($num_ligne > 0){
    header("location:bienvenu.php");

}else {
    echo "Adresse Mail ou Mot de passe incorrectes!";
}
}

?>