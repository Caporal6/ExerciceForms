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
    <h1>COURS 2</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form.control" placeholder="name" value="<?php echo $nom;?>" required>   
                    </div>

                    <div class="form-group">
                        <label for="">MDP</label>
                        <input type="password" name="mdp" class="form.control" placeholder="name" value="" required>   
                    </div>

                    <div class="form-group">
                        <label for="">Mdp Confirmation</label>
                        <input type="password" name="mdpc" class="form.control" placeholder="name" required>   
                    </div>

                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <input type="email" name="email" class="form.control" placeholder="name" required>   
                    </div>

                    <div class="form-group">
                        <label for="">Avatar</label>
                        <input type="text" name="avatar" class="form.control" placeholder="name" value="<?php echo $avatar;?>" required>   
                    </div>

                    <div class="form-group">
                        <label for="">Homme</label>
                        <input type="radio" name="homme" class="form-check-input" placeholder="Sexe" value="homme" id="bouton" required>   
                        <label for="">Femme</label>
                        <input type="radio" name="femme" class="form-check-input" placeholder="Sexe" value="Femme" id="bouton" required> 
                        <label for="">Autre</label>
                        <input type="radio" name="autre" class="form-check-input" placeholder="Sexe" value="Autre" id="bouton" required> 
                    </div>

                    <div class="form-group">
                        <label for="">Naissance</label>
                        <input type="date" name="naissance" class="form.control" placeholder="name" required>   
                    </div>

                    <div class="form-group">
                    <select class="custom-select">
                        <option selected name="transport">Moyen de transport</option>
                        <option value="1">Auto</option>
                        <option value="2">Autobus</option>
                        <option value="3">Marche</option>
                        <option value="4">Velo</option>
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




        $nom = $avatar = $mdp = $mdpc = $email =  "";
        $nomErreur = $prenomErreur = $avatarErreur = "";
        $erreur = false;

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            //CAS #2
            //On vient de recevoir le formulaire
            echo "<h1>POST == TRUE </h1>";
            
            if(empty($nom)){
                $nomErreur = "Le nom ne peut pas être vide";
                $erreur  = true;
            }
            else{
                $nom = trojan($_POST['nom']);
            }
            

            $prenom = trojan($_POST['prenom']);
            $avatar = trojan($_POST['avatar']);

            //AFFICHER LE RÉSULTAT DE MON FORM
        }
        if ($_SERVER['REQUEST_METHOD'] != "POST" || $erreur == true){
            // Cas #1 On veut afficher le formulaire
            echo "<h1>On affiche le formulaire </h1>";
        ?>
        <!--
            <form action="" method="post">
                Nom : <input type="text" name="nom" maxLength="15" value=""><br>


                Avatar : <input type="text" name="avatar" value="">

                <input type="submit">
            </form>
        -->
        <?php
        }

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