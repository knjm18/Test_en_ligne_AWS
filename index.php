<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulaire</title>
</head>
<body>
    <?php
        //vérifier si le bouton enregistrer a bien été cliqué
        if (isset($_POST['button'])) {
            //extraction des informations envoyés dans des variables par la methode post
            extract($_POST);
            //Vérifier si les champs sont remplis
            if (isset($nom) && isset($prenom) && isset($numero) && isset($email)) {
                # connexion à la base de donnée
                include_once "./coToDb/connexion.php";
                //requête d'ajout
            $req = mysqli_query($con, "INSERT INTO participants VALUES(NULL,'$nom', '$prenom','$numero','$email')");
            $message = "Enregistrement bien éffectué";
            echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Success!</strong> ' . $message . " 
                </div> ";
            }
        }
    ?>
    <div id="page" class="site">
        <div class="container">
            <div class="wrapper">
                <div class="login">
                    <div class="content-heading">
                        <div class="y-style">
                            <div class="logo"><a href="#">.knjm<span>Design</span></a></div>
                            <div class="welcome">
                                <h2>Welcome<br>Back !</h2>
                                <p>let's go for the registration of participants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-form">
                        <div class="y-style">
                            <form action="" method="POST">
                                <p>
                                    <label for="nom">Nom</label>
                                    <input type="text" spellcheck="false" name="nom" id="nom" placeholder="Entrer le nom" required>
                                </p>
                                <p>
                                    <label for="prenom">Prénom</label>
                                    <input type="text" spellcheck="false" name="prenom" id="prenom"  placeholder="Entrer le prénom" required>
                                </p>
                                <p>
                                    <label for="numero">Numéro de téléphone</label>
                                    <input type="tel" spellcheck="false" name="numero" id="numero" placeholder="Entrer le numéro de tel" required>
                                    
                                </p>
                                <p>
                                    <label for="email">Adresse Email</label>
                                    <input type="email" spellcheck="false" name="email" id="email" placeholder="Entrer l'email" required>
                                </p>
                                <p>
                                    <input type="submit" value="Enregistrer" name="button">
                                </p>
                            </form>
                            <div class="afterform">
                                <p>Pour consulter la table des participants</p>
                                <a href="pages/tableView.php" id="t-table">click ici</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                              
    <script src="./js/script.js"></script>
</body>
</html>