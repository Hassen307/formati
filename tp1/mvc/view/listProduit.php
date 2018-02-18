<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Liste des produits</title>
</head>

<body>
<h1>Liste des produits</h1>


<?php
while ($donnees = $req->fetch())
{
    ?>
    <div class="news">
        <h3>
            <?php echo htmlspecialchars($donnees['nom']); ?>
            <?php echo htmlspecialchars($donnees['prix']); ?>
            <?php echo htmlspecialchars($donnees['quantite']); ?>
            <form action="../controlleur/supprimerControlleur.php" method="post">
                <input type="hidden" name="del" value="supp">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($donnees['id']);?>">
                <button type="submit" value="supprimer">Supprimer</button>
            </form>
            <form action="../controlleur/supprimerControlleur.php" method="post">
                <input type="hidden" name="edi" value="mod">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($donnees['id']);?>">
                <button type="submit" value="modifier">Modifier</button>
            </form>
        </h3>


    </div>

    <?php

}
$req->closeCursor();
?>
</body>
</html>