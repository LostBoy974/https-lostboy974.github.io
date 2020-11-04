<!-- PHP -->


<!-- HTML -->

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    "publishConfig": { "registry": "https://npm.pkg.github.com/" }
    npm login --registry=https://npm.pkg.github.com/
    npm publish

    <title>CV PAYET Matthias</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href ="assets/css/index.css">

    <!-- Icônes Font Awesome 5 -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159836913-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-159836913-1');
    </script>


</head>


<body>

    <header>

    

    </header>
    
    <div class="mainbloc">
        <div class= "blocprofil">

            <?php include "assets/php/profil.php";?>

            <?php include "assets/php/metier.php";?>

        </div>

        <?php include "assets/php/coor.php";?>

        <?php include "assets/php/exp.php";?>

        <?php include "assets/php/formation.php";?>

        <?php include "assets/php/compet.php" ?>

        <?php include "assets/php/langue.php" ?>

        <?php include "assets/php/passion.php" ?>

        <?php include "assets/php/realisation.php" ?>

    </div>
    <footer>
    
        <?php include "assets/php/footer.php";?>
    
    </footer>
    

</body>
</html>
