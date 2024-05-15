<?php $titre = 'Actualite'; ?>

<?php include("entete.php") ?>

<?php include 'menu.php'; ?>

<?php


$id = $_GET['id'];

$req = $bdd->prepare('SELECT Article.titre, Article.contenu FROM Article
		 JOIN Categorie ON Article.categorie = Categorie.id WHERE Article.categorie = :id');
$req->execute(array(
	'id' => $id
));
$articlesPourCategorie = $req->fetchAll(PDO::FETCH_ASSOC);
?>

<div>
	<?php
	if (count($articlesPourCategorie) > 0) {
		foreach ($articlesPourCategorie as $articlePourCategorie) { ?>
			<div class="articles">
				<h3><?= $articlePourCategorie['titre'] ?></h3>
				<p><?= $articlePourCategorie['contenu'] ?></p>
			</div>
		<?php }
	} else { ?>
		<p id="message">Pas d'article disponible la categorie selectionnée</p>
	<?php } ?>
</div>
