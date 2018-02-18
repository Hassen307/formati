<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 21/01/2018
 * Time: 09:28
 */
try{
$bdd=new PDO('mysql:host=localhost;dbname=has','root','');
}
catch (Exception $e){
die('Erreur:'.$e->getMessage());
}
$response=$bdd->query('Select * From user');
while ($donnees=$response->fetch()){
    ?>
    <p>
        <strong>id:</strong><?php echo $donnees['id'];?> <br/>
        <strong>name</strong><?php echo $donnees['name'];?>
    </p>
    <?php
}

$response->closeCursor();
$response=$bdd->exec('Insert into user(id,name,password)VALUES (\'\',\'hassen\',\'123\')');


