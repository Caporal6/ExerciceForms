<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<?php

$nom = $avatar = $mdp = $mdpc = $email = $naissance = $transport = $sex =   "";
$nomErreur = $mdpErreur = $avatarErreur = $emailErreur =  "Erreur";
$erreur = false;

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //CAS #2
    //On vient de recevoir le formulaire
    echo "<h1>POST == TRUE </h1>";
    
    if(empty($_POST["nom"])){
        $nomErreur = "Le nom ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $nom = trojan($_POST["nom"]);
    }

    if(empty($_POST["mdp"])){
        $nomErreur = "Le nom ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $mdp = trojan($_POST["mdp"]);
    }

    if(empty($_POST["mdpc"])){
        $nomErreur = "Le nom ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $mdpc = trojan($_POST["mdpc"]);
    }

    if(empty($_POST["email"])){
        $nomErreur = "Le nom ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $email = trojan($_POST["email"]);
    }

    if(empty($_POST["avatar"])){
        $nomErreur = "Le nom ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $avatar = trojan($_POST["avatar"]);
    }

    if(empty($_POST["sex"])){
        $nomErreur = "Le nom ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $sex = trojan($_POST["sex"]);
    }

    if(empty($_POST["naissance"])){
        $nomErreur = "Le nom ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $naissance = trojan($_POST["naissance"]);
    }

    if(empty($_POST["transport"])){
        $nomErreur = "Le nom ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $transport = trojan($_POST["transport"]);
    }
}
?>

    <h1>COURS 2</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form.control" placeholder="name" value="<?php echo $nom ?>" >   
                    </div>

                    <div class="form-group">
                        <label for="">MDP</label>
                        <input type="password" name="mdp" class="form.control" placeholder="name" value="<?php echo $mdp ?>" >   
                    </div>

                    <div class="form-group">
                        <label for="">Mdp Confirmation</label>
                        <input type="password" name="mdpc" class="form.control" placeholder="name" value="<?php echo $mdpc ?>" >   
                    </div>

                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <input type="email" name="email" class="form.control" placeholder="name" value="<?php echo $email ?>" >   
                    </div>

                    <div class="form-group">
                        <label for="">Avatar</label>
                        <input type="text" name="avatar" class="form.control" placeholder="name" value="<?php echo $avatar ?>" >   
                    </div>

                    <div class="form-group">
                        <label for="">Homme</label>
                        <input type="radio" name="sex" class="form-check-input" placeholder="Sexe" value="homme" id="bouton" require>   
                        <label for="">Femme</label>
                        <input type="radio" name="sex" class="form-check-input" placeholder="Sexe" value="Femme" id="bouton" require> 
                        <label for="">Autre</label>
                        <input type="radio" name="sex" class="form-check-input" placeholder="Sexe" value="Autre" id="bouton" require> 
                    </div>

                    <div class="form-group">
                        <label for="">Naissance</label>
                        <input type="date" name="naissance" class="form.control" placeholder="name" >   
                    </div>

                    <div class="form-group">
                    <select class="custom-select" name="transport">
                        <option >Moyen de transport</option>
                        <option value="Auto">Auto</option>
                        <option value="Autobus">Autobus</option>
                        <option value="Marche">Marche</option>
                        <option value="Velo">Velo</option>
                    </select>
                    </div>

                    

                    <div class="form-group">
                        <input type="submit">   
                    </div>

                </form>
            </div>
        </div>
    </div>








        <?php
                    //AFFICHER LE RÉSULTAT DE MON FORM
                
                if ($_SERVER['REQUEST_METHOD'] != "POST" || $erreur == true){
                    // Cas #1 On veut afficher le formulaire
                    echo "<h1>On affiche le formulaire </h1>";
                }
                echo $nom;
                echo "</br>";
                echo $mdp;
                echo "</br>";
                echo $mdpc;
                echo "</br>";
                echo $email;
                echo "</br>";
                echo $avatar;
                echo "</br>";
                echo $sex;
                echo "</br>";
                echo $naissance;
                echo "</br>";
                echo $transport;
                echo "</br>";

        function trojan($data){
            $data = trim($data); //Enleve les caractères invisibles
            $data = addslashes($data); //Mets des backslashs devant les ' et les  "
            $data = htmlspecialchars($data); // Remplace les caractères spéciaux par leurs symboles comme ­< devient &lt;
            
            return $data;
        }

    ?>

    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>