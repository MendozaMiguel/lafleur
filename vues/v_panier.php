<img src="images/panier.gif"	alt="Panier" title="panier"/>
<form action="index.php?uc=gererPanier&action=passerCommande" method="POST">
<?php

foreach( $lesProduitsDuPanier as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$image = $unProduit['image'];
	$prix = $unProduit['prix'];
	
	?>
	<p>
	<img src="<?php echo $image ?>" alt=image width=100	height=100 />
	<?php
		echo	$description."($prix Euros)";
	?>	
      <select name="quantite">
            <?php
                for($i=1;$i<=10;$i++)
                {
                    echo "<option value=".$i.">".$i."</option>";
                }
            ?>
        </select>
	<a href="index.php?uc=gererPanier&produit=<?php echo $id ?>&action=supprimerUnProduit" onclick="return confirm('Voulez-vous vraiment retirer cet article frais?');">
	<img src="images/retirerpanier.png" TITLE="Retirer du panier" ></a>
	
	
	</p>
	<?php
}
?>
<a href=index.php?uc=gererPanier&action=passerCommande><img src="images/commander.jpg" TITLE="Passer commande" ></a>
</form>
