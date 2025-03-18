<?php

include("connexion.php");

function liste_fruit($conn){
	$sql="SELECT * FROM `fruit`"; 
	 
	$res=mysqli_query($conn, $sql) ; 
	return rs_to_tab($res) ;
}

function origine_fruit($conn, $id){
	$sql="SELECT p.* FROM fruit_pays AS fp INNER JOIN fruit as f on fp.id_fruit = f.id_fruit INNER JOIN pays as p on fp.id_pays = p.id_pays WHERE f.id_fruit = $id "; 
	 
	$res=mysqli_query($conn, $sql) ; 
	return rs_to_tab($res) ;
}
/**
 * Fonction auxiliaire pour transformer un rs en tableau
 */
function rs_to_tab($rs){
	$tab=[] ; 
	while($row=mysqli_fetch_assoc($rs)){
		$tab[]=$row ;	
	}
	return $tab;
}

echo json_encode(liste_fruit($conn));


?>