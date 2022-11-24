<?php
    $biens = myBien($dbh);
?>

<div class="l1"></div>

<h1 class="title" >📍 Mes biens</h1>

<div class="l2"></div>

<?php foreach ($biens as $bien) : ?>
    <div>
        <h3><?= $bien->nom ?></h2>
        <p><?= $bien->ville ?></p>
        <p><?= $bien->taille ?></p>
        <p><?= $bien->chambres ?></p>
        <p><?= $bien->prix= number_format($bien->prix, 0, ',', ' ')?>€</p>
    </div>

    <div class="button-containers">
        <button class="button">Modifier</button>
        <button class="button">Supprimer</button>
    </div>
<?php endforeach ?>

<div class="l3"></div>