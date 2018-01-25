<?php 
	if ($_POST) {
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=upload_image','root','') or die('Erreur');
		extract($_POST);
		$valid = array('success' => false,'messages' => array());
		$type = explode('.', $_FILES['prodimage']['name']);
		$type =$type[count($type)-1];
		$url = '../images/' . uniqid(rand()) . '.' . $type;
		if (in_array($type, array('jpg','jpeg','png'))) {
			if (is_uploaded_file($_FILES['prodimage']['tmp_name'])) {
				if (move_uploaded_file($_FILES['prodimage']['tmp_name'],$url)) {
					$sql = "INSERT INTO produits(nomproduit,prix,qte,image) VALUES('$nomimage',$prix,$qte,'$url')";
					if ($bdd->query($sql) == TRUE) {
						$valid['success'] = true;
						$valid['messages'] = "Insertion réussie!";
						
					}
					else
					{
						$valid['success'] = false;
						$valid['messages'] = "echec de l'insertion!";
					}

				}
				else
				{
					$valid['success'] = false;
					$valid['messages'] = "Echec!";
				}
			}
		}
		
	}
 ?>
