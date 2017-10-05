
<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'demandeconnexion':
	{
		$login="";
		$mdp="";
		include("vues/v_admin.php");
  		break;
	}
	
case 'voirCategories':
	{
		
		$login=$_REQUEST['login'];
		$mdp=$_REQUEST['mdp'];
  		$lesCategories = $pdo->getLesCategories();
		include("vues/v_categories.php");
  		break;
	}
case 'voirProduits' :
	{
		$lesCategories = $pdo->getLesCategories();
		include("vues/v_categories.php");
  		$categorie = $_REQUEST['categorie'];
		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		include("vues/v_produitsadmin.php");
		break;
	}
	
	
case 'modifier' :
	{
		//En cours
	}
	
	
case 'supprimer' : 
	{
		//En cours
	}
}

	
	?>
