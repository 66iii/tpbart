<div class=tableau>
<?php
$ligne_a_ecrire = $_POST["count"];
$phrase = $_POST["sentence"];
for ($ecrite = 0; $ecrite <= $ligne_a_ecrire; $ecrite++){
    echo $phrase,"<br>";
}

?>
<img id="bart"src="ressources/images/bart.png" alt="imgbart">
</div>
<a href="index.php"><button class="btn btn-danger ma-auto">Retour</button></a><br>
