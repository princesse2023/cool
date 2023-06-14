<?php
$id = $_GET['id'];
          if(isset($_POST['send'])){
            if(isset($_POST['nom']) && 
            isset($_POST['prenom']) && 
            isset($_POST['date_de_naissance']) && 
            isset($_POST['ville']) && 
            isset($_POST['formation']) &&
            $_POST['nom'] != "" &&
            $_POST['prenom'] != "" &&
            $_POST['date_de_naissance'] != "" &&
            $_POST['ville'] != "" &&
            $_POST['formation'] != ""
            ){
              include_once "connect_db.php";
               extract($_POST);
                $req = mysqli_query($conn, "UPDATE apprenant SET nom = '$nom' , prenom = '$prenom' , date_de_naissance = '$date_de_naissance' ,ville = 'ville' ,formation = '$formation' WHERE id = $id");
                if($req){
                    header("location:showuser.php");
                }else {
                    $message = "Employé non modifié";
                }

           }else {
               
               $message = "Veuillez remplir tous les champs !";
           }
       }
         
    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../boostrap/js/bootstrap.min.js">
</head>
<body>
<?php
 include_once "connect_db.php";
 $sql = "SELECT * FROM apprenant WHERE id = $id";
$result = mysqli_query($conn, $sql);
while ($row =mysqli_fetch_assoc($result)) {
    # code...


?>




    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        
          <div>
            <img class="photo" src="../imge/téléchargement (5).png" alt="photo">
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item info">
                <a class="nav-link active" aria-current="page" href="../index.php">INFORMATIONS</a>
              </li> 
              <li class="nav-item liste">
                <a class="nav-link" href="showuser.php">LISTER</a>
              </li>
            
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul> -->
            <!-- <div class="col-4"> -->
            <form class="d-flex" role="search">
              <input class="form-control me-2 recherche" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
          </div>
        </div>
      </nav>
      <main>
        <div class="carre"><br>
       <div><h2 class="form">MODIFIER</h2></div> <br>
       <div>
       <form action="" method="post">
        <input class="laire" type="text" placeholder="votre nom" name="nom" value ="<?=$row['nom']?>" required><br>
        <input  class="laire"type="text" placeholder="votre prenom" name="prenom" value ="<?=$row['prenom']?>"    required><br>
        <input class="laire" type="date" placeholder="date_de_naissance" name="date_de_naissance"  value ="<?=$row['date_de_naissance']?>" required><br>
        <input class="laire" type="text" placeholder="ville" name="ville"  value ="<?=$row['ville']?>" required><br>
        <input class="laire" type="text" placeholder="formation" name="formation"  value ="<?=$row['formation']?>" required> <br>
        <input class="bouton" type="submit" value="valider" name="send"><br>
        <!-- <br>
        <a class="link back ann"   href="#"> Annuler</a> -->

       </form>

       <?php
       }
       ?>


        </div>
       </div>
        </div>

      </main>






    <script src="js/script.js"></script>
</body>
</html>