<html>
<title>formulaire</title>
<body>
<form method="get" action="formulaire.php">
    <input type="text" name="name">
    <input type="text" name="password">
    <input type="submit" value="save">
</form>
</body>
</html>
<?php
$bdd= new PDO('mysql:host=localhost;dbname=has1','root','');
$req=$bdd->prepare('INSERT INTO user(name, password) VALUES(?,?)');


if (isset($_GET['name'])&& isset($_GET['password'])){
    $req->execute(array($_GET['name'],$_GET['password']));
}
   echo 'Lutilisateur a été bien ajouté';

?>

