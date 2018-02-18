
<html>
<title>affichage</title>
<body>
<form method="post" action="../controlleur/ajouteControlleur.php">
    Nom:<input type="text" name="nom"><br/>
    Prix:<input type="text" name="prix"><br/>
    Quantité:<input type="text" name="quantite"><br/>
    <input type='hidden' name='admin' value='ajou'>
    <input type="submit" value="ajouter">
</form>
<form method="get" action="../controlleur/listeControlleur.php">
    <input type="submit" value="liste des produits">
</form>
</body>
</html>
