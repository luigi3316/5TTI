<?php
    $biens = getBiens($dbh);
?>

<div class="l1"></div>

<h1 class="title" >📍 accueil</h1>

<div class="l2"></div>

<h2 class="sous-title" >Filtrer les biens : </h2>

<div class="container-input-filtre">
    <p class="defNom" > Surface : </p>
    <input type="number" placeholder="↘ Surface minimum (m²)">
    <input type="number" placeholder="↗ Surface maximum (m²)"><br>
    <p class="defNom" > Prix : </p>
    <input type="number" placeholder="↘ Prix minimum (€)">
    <input type="number" placeholder="↗ Prix maximum (€)"><br>
</div>

<button class="button">Rechercher</button>

<div class="l3"></div>

<p class="defNom"> Biens Disponible : </p>

<?php foreach ($biens as $bien) : ?>
    <div class="container-mid" >
        <h2 class="name" > - <?= $bien->nom ?></h2>
        <p class="city" > la ville : <?= $bien->ville ?></p>
        <p class="meters" > La taille(m²) : <?= $bien->taille ?></p>
        <p class="bedroom" > Nombre chambre : <?= $bien->chambres ?></p>
        <p class="money" > Le prix : <?= $bien->prix= number_format($bien->prix, 0, ',', ' ')?>€</p>
        <a class="linkBiens" href="index.php?bienId=<?=$bien->bienId?>"><i>voir le bien</i></a>
    </div>
<?php endforeach ?>

<div class="l4"></div>