<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="../css/tableView.css">
    <title>TableView</title>
</head>

<body>
    <div class="container">
        <h2>Liste des participants</h2>
        <div class="head">
        <div class="logo"><a href="#">.knjm<span>Design</span></a></div>
            <a href="../index.php" class="Btn_add"><img src="../images/icons8_add_90px.png">Ajouter</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Numéro</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //inclure la page de connexion
                include_once "../coToDb/connexion.php";
                //requête pour afficher la liste des participants
                $req = mysqli_query($con, "SELECT * FROM participants");
                if (mysqli_num_rows($req) == 0) {
                    # s'il n'y a pas de participant dans la bd
                    ?>
                    <p class="etat">
                        <?php echo "Il n'y a pas encore de participant enregistré."; ?>
                    </p>
                    <?php

                } else {
                    # si non affichons la liste
                    while ($row = mysqli_fetch_assoc($req)) {
                        ?>
                        <tr>
                            <td data-label="Nom">
                                <?= $row['nom'] ?>
                            </td>
                            <td data-label="Prénom">
                                <?= $row['prenom'] ?>
                            </td>
                            <td data-label="Numéro">
                                <?= $row['numero'] ?>
                            </td>
                            <td data-label="Email">
                                <?= $row['email'] ?>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>