<?php $titre = 'ACTUALITES POLYTECHNICIENNES'; ?>

<?php include("entete.php"); ?>

<?php include 'menu.php'; ?>


<div id="all">
	<?php
	// include 'bd.php';
	$articles = $bdd->query('SELECT * FROM Article');
	?>

	<div>
		<?php foreach ($articles as $article) { ?>
			<div class="articles">
				<h3><?= $article['titre'] ?></h3>
				<p><?= $article['contenu'] ?></p>
			</div>
		<?php } ?>
	</div>

</div>

<?php include 'pied_page.php'; ?>