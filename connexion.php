<!DOCTYPE html>
<html lang ="fr">

<head>

    <title>Portfolio</title>

    <!-- lien css-->
    <link rel="stylesheet" href="css/styles.css">

    <!-- lien Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/906a7b1c5d.js" crossorigin="anonymous"></script>

    <!-- jquery -->

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>


    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fasthand&family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
    

    <!--meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

    <body>

        <section id="connexion" class="container">

            <?php include_once "php/loginScript.php" ?>

            <form action="" method="post">

                <div class="form connexionForm">

                    <ul>
                        <li><h3> Connexion à l'Espace Administrateur</h3></li>
                        <li><?php if(isset($erreur)){echo $erreur;} ?></li>
                        <li><input class="writtenInput" type="text" class="username" type="text" name="username" placeholder="identifiant"></li>
                        <li><input class="writtenInput" type="password" class="password" type="password" name="password" placeholder="Mot de Passe"></li>
                        <li class="boutons"><input type="submit" label="Connexion" class="btn btn-success" name="submit">
                        <a class="btn btn-secondary connectionCancel" href="index.php"> Retour </a></li>
                    </ul>

                </div>

            </form>

        </section>
</html>
