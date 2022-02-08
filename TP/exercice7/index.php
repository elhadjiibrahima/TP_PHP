<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice7</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <form action="controleur.php" method="post">
     <label for="j">Entrez un jour</label>
     <input type="text" id="jour" name="jour"> <br>

     <label for="m">Entrez un mois</label>
     <input type="text" name="mois" id="mois"> <br>

     <label for="a">Entrez une annee</label>
     <input type="text" name="annee" id="annee"><br>

     <input type="submit" name="valide" value="OK">
    </form>
</body>
</html>