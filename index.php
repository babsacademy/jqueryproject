<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="src\bootstrap\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src\fileinput\css\fileinput.min.css">
</head>
<style type="text/css">
	.entete{
		height: 80px;
	}
</style>
<body>
	
<div class="container">
	
	<fieldset>
			<legend class="font-weight-bolder">Enregistrement des produits</legend>
			<div id="messages">
				
			</div>
			<div class="col-md-5 col-sm-5 col-md-offset-4 col-sm-offset-4">
			<form method="POST" action="pages\envoi_image.php" enctype="multipart/form-data" id="image-form">
				<div class="form-group">
				    <label>Nom du produit</label>
				    <input type="text" class="form-control" name="nomimage" placeholder="Nom du produit">
				</div>
				<div class="form-group">
				    <label>Prix</label>
				    <input type="number" class="form-control" name="prix" placeholder="prix du produit">
				</div>
				<div class="form-group">
				    <label>Quantité</label>
				    <input type="number" class="form-control" name="qte" placeholder="Quantité de stock">
				</div>  
				<div class="form-group">
					    <label>Photo du produit</label>
						<input type="file" name="prodimage">
				 </div>
				 <div class="form-group">
						<label>SOUS-CATEGORIE</label>
						<select name="idsouscat" class="form-control">
							 <?php 
								 	$bdd = new PDO('mysql:host=127.0.0.1;dbname=upload_image','root','') or die('Erreur');
								 	$rec = $bdd->query('SELECT * FROM souscategorie');
										 while ($recup = $rec->fetch()) {
							 		?>
							 		<option><?php echo $recup['libsouscat']; ?></option>
							 		<?php
							 	}
							  ?>
							
						</select>
				</div>
						  <button type="submit" class="btn btn-primary">Save</button>
					
					</form>
		</div>
		</div>
	</fieldset>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="src\js\bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/purify.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(".formulaire").submit(function(){
		var nomimage = $('#nomimage').val();
		var prix = $('#prix').val();
		var qte = $('#qte').val();
		var prodimage = $('#prodimage').val();
		var idsouscat = $('#idsouscat').val();

		$.post('envoi_image.php',{nomimage:nomimage,prix:prix,qte:qte,pr},function(donnee){
				$('.return').html(donnee).slideDown();
		});
		return false;
	});
</script>
</body>
</html>