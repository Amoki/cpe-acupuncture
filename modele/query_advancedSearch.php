<?php
function advancedSearch($meridien, $pathoType, $caract ,$sympt ,$motsCles)
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
	$rawquery = 'SELECT DISTINCT p.desc
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
	
	if($caract!="default") {
		$andVal=0;
		foreach ($caract as $c) {
			if (!$andVal) {
				$rawquery.= 'AND p.type LIKE "%'.$c.'%"';
				$andVal=1;
			}
			else
			{
				$rawquery.= ' OR p.type LIKE "%'.$c.'%"';
			}
		}
	}

	/*************************************************************************/
	$orVal=0; //0 si pas besoin OR
	if($sympt!="default") {
		foreach ($sympt as $s) {
			if (!$andVal) {
				$rawquery.= ' s.desc LIKE "%'.$s.'%"';
				$andVal=1;
				$orVal=1;
			}
			else{
				if (!$orVal) {
					$rawquery.= ' AND s.desc LIKE "%'.$s.'%"';
					$orVal=1;
				}
				else{
					$rawquery.= ' OR s.desc LIKE "%'.$s.'%"';
				}
			}
		}
	}

	/*************************************************************************/
	$orVal=0; //0 si pas besoin OR
	if($motsCles!="default") {
		foreach ($motsCles as $m) {
			if (!$andVal) {
				$rawquery.= ' k.name LIKE "%'.$m.'%"';
				$andVal=1;
				$orVal=1;
			}
			else{
				if (!$orVal) {
					$rawquery.= ' AND k.name LIKE "%'.$m.'%"';
					$orVal=1;
				}
				else{
					$rawquery.= ' OR k.name LIKE "%'.$m.'%"';
				}
			}
		}
	}

	/*************************************************************************/
	$rawquery.=' ORDER BY p.desc ASC';
	/*****************************************************/
	//RUN QUERY

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

?>
