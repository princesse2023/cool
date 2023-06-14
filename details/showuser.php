<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste_apprenant</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../boostrap/js/bootstrap.min.js">
    <link rel="shortcut icon" href="../imge/icone-de-nouvelles-vert.png" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary navig">
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
                <a class="nav-link active" aria-current="page" href="../index.php">INSCRIPTION</a>
              </li> 
              <li class="nav-item liste">
                <a class="nav-link" href="details/showuser.php">LISTER</a>
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
            <form action="recherche.php" class="d-flex" role="search" method="$_POST">
              <input class="form-control me-2 recherche" type="search" name="search" placeholder="Search" aria-label="Search">
               <input type="submit" value="Rechercher">
              <!--button class="btn btn-outline-success" type="submit">Search</button-->
            </form>
        </div>
          </div>
        </div>
      </nav><br>
    <main>
<div class="link_container">
<a class="link" href="showuser.php">ajouter un utilisateur</a>
</div>
<br>
<table class="papa">
      <thead style="gap: 50px;" >
        <?php
        include_once "connect_db.php";
        // LISTE DES UTILISATEURS
        $result = mysqli_query($conn, "SELECT * FROM apprenant");
         if (mysqli_num_rows($result) > 0){
        //  afficher les utilisateurs
         ?>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>date_de_naissance</th>
            <th>ville</th>
            <th>formation</th>
            <th>modifier</th>
            <th>supprimer</th>
        </tr>
      </thead>
       <tbody>
       <?php
        while($row = mysqli_fetch_assoc($result)){
       ?>
        <tr>
            <!-- <td>text</td> -->
            <td><?=$row['id']?></td>
            <td><?=$row['nom']?></td>
            <td><?=$row['prenom']?></td>
            <td><?=$row['date_de_naissance']?></td>
            <td><?=$row['ville']?></td>
            <td><?=$row['formation']?></td>
            <td ><a href="modifyuser.php?id=<?=$row['id']?>"><img class="image" src="../imge/Edit_icon-icons.com_55921.png"></a>
            <td ><a href="deleteuser.php?id=<?=$row['id']?>"><img class="image" src="../imge/6467134.png"></a>
            </td>
        </tr>
        <?php
         }

         } 
             
     else  
         echo" <p class ='message'> zero utilisateur present!</P>";
     ?>
       </tbody>
</table>
    </main>
</body>
</html>