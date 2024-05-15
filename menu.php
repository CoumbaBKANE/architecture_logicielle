<h1 id="titre">ACTUALITES POLYTECHNICIENNES</h1>
<?php
include 'base_donnee.php';
$categories = $bdd->query('SELECT * FROM Categorie');
?>
<div id="menu">
	<ul>
		<li><a href="index.php">Accueil</a></li>
		<?php foreach ($categories as $categorie) { ?>
			<li><a href="show_by_categorie.php?id=<?= $categorie['id'] ?>"><?= $categorie['libelle'] ?></a></li>
		<?php }
		?>
	</ul>
</div>