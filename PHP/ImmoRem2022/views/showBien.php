<?php
    $bien = bienShow($dbh);
    //var_dump($bien);
    $options = optionsBien($dbh);
    //var_dump($options);
?>
<div class="l1"></div>

    <div>
        <h2 class="title" >📍 <?= $bien->nom ?></h2>
        <div class="l2"></div>
        <img class="picture" src="images\maison.jpg" alt="Grapefruit slice atop a pile of other slices">
        <p class="sousTitre" >Description : </p>
        <p><?= $bien->description ?></p>
        <p class="sousTitre" >Ville : </p>
        <p><?= $bien->ville ?></p>
        <p class="sousTitre" >Taille : </p>
        <p><?= $bien->taille ?> m²</p>
        <p class="sousTitre" >Chambres : </p>
        <p><?= $bien->chambres ?></p>
        <p class="sousTitre" >Prix : </p>
        <p><?= $bien->prix= number_format($bien->prix, 0, ',', ' ')?>€</p>
    </div>

<p class="sousTitre" >Options : </p>
<?php foreach ($options as $option): ?>
    <div>
        <p>- <?= $option->optionNom ?></p>
    </div>
<?php endforeach ?>

<div class="l3"></div>