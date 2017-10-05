<div id="produits">
<form action="index.php?uc=gererPanier&action=passerCommande" method="POST">
<?php
	
foreach( $lesProduits as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$prix=$unProduit['prix'];
	$image = $unProduit['image'];
	?>	
	<ul>
            <li><img src="<?php echo $image ?>" alt=image /></li>
            <li><?php echo $description ?></li>
            <li><?php echo " : ".$prix." Euros" ?>
            <li><a href=index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ?>&action=ajouterAuPanier> 
            <img src="images/mettrepanier.png" TITLE="Ajouter au panier" </li></a>
            <select name="quantite">
            <?php
                for($i=1; $i<=10; $i++)
                {
                    echo "<option value=".$i.">".$i."</option>";
                }
            ?>
            </select>
		<li><a href="index.php?uc=administrer&produit=<?php echo $id?>&action=modifier"> Modifier
		<li><a href="index.php?uc=administrer&produit=<?php echo $id?>&action=supprimer"> Supprimer
</form>
	</ul>
        			
<?php			
}
?>
</div>