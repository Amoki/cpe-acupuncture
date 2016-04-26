<?php
function advancedSearch($meridien,$pathoType,$caract,$sympt,$motsCles)
{
	//$meridien = "Du Mai"
	//$pathoType = "mv";
	//$caract = ["p","v"];
	//$sympt = ["2ème orteil",.....]
	//$motsCles = ["....","...."];

	global $bdd;
	
	/*****************************************************/
	//MERIDIEN

	/* Requête SELECT */
	$rawquery = 'SELECT p.desc
	FROM patho p
	INNER JOIN meridien m ON m.code=p.mer
	INNER JOIN symptpatho sp ON p.idP=sp.idP
	INNER JOIN symptome s ON sp.idS=s.idS
	INNER JOIN keysympt ks ON s.idS=ks.idS
	INNER JOIN keywords k ON ks.idK=k.idk
	WHERE ';

	//Si 0 ne pas mettre AND 
	$andVal=0;

/*************************************************************************/
	if ($meridien!="default") {
		foreach ($meridien as $merid) {
			if (!$andVal) {
				$rawquery.= 'm.code ="'.$merid.'"';
				$andVal=1;
			}
			else
			{
				$rawquery.= ' OR m.code ="'.$merid.'"';
			}
		}
	}

/*************************************************************************/
	if(!$andVal){
		if($pathoType!="default") {
			$rawquery.=' p.type LIKE "'.$pathoType.'%"';
			$andVal=1;
		}
	}
	elseif($pathoType!="default") {
		$rawquery.=' AND p.type LIKE "'.$pathoType.'%"';
	}

	//cas particulier "m"
	if($pathoType=="m"){
		$rawquery.=' AND p.type NOT LIKE "mv"';
	}

/*************************************************************************/
	if(!$andVal){
		if($caract!="default") {
			$n = count($caract);
			echo $n;
			foreach ($caract as $value) {
				$rawquery.=' p.type ="'.$value.'"';
			}
			$andVal=1;
		}
	}
	elseif($caract!="default"){
		$n = count($caract);
		echo $n;
		foreach ($caract as $value) {
			$rawquery.=' AND p.type ="'.$value.'"';
		}
	}

/*************************************************************************/
	
	/*****************************************************/
	//RUN QUERY

	echo $rawquery;
	$query = $bdd ->prepare($rawquery);
	
	$query->execute();

	$liste_patho = array();

	$i = 0;
	while($donnees = $query->fetch()){
		$liste_patho[$i]['desc'] = $donnees['desc'];

	$i++;
	}
	
	return $liste_patho;
}

/*function checkVal($val){
	if($val==1){
		return 1;
	}
	else{
		return 0;
	}
}*/

/*$caract = array();
$caract = ["v","p"];

$sympt = array();
$sympt = ["toux"];

$motsCles = array();
$motsCles = ["orteil"];

advancedSearch("Du Mai","mv",$caract,$sympt,$motsCles);*/
?>
