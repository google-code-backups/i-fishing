<?php
	include ('profil.html');
	$search_term_esc = AddSlashes(['search']);
	$sql = "SELECT * FROM akun_pengguna WHERE NAMA_DEPAN LIKE '%$search_term_esc%'";
	
	$terms = search_split_terms($terms);
	$terms_db = search_db_escape_terms($terms);

	$parts = array();
	foreach($terms_db as $term_db){
		$parts[] = "NAMA_DEPAN RLIKE '$term_db'";
	}
	$parts = implode(' AND ', $parts);

	$sql = "SELECT * FROM akun_pengguna WHERE $parts";
	
	SELECT * FROM akun_pengguna WHERE NAMA_DEPAN RLIKE '[[:<:]]foo[[:>:]]'
		AND NAMA_DEPAN RLIKE '[[:<:]]bar[[:>:]]';
		
		
		
	$terms_rx = search_rx_escape_terms($terms);

	$rows = array();

	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)){

		$row[score] = 0;

		foreach($terms_rx as $term_rx){
			$row[score] += preg_match_all("/$term_rx/i", $row[content_body], $null);
		}

		$rows[] = $row;
	}

	uasort($rows, 'search_sort_results');


	function search_rx_escape_terms($terms){
		$out = array();
		foreach($terms as $term){
			$out[] = '\b'.preg_quote($term, '/').'\b';
		}
		return $out;
	}


	function search_sort_results($a, $b){

		$ax = $a[score];
		$bx = $b[score];

		if ($ax == $bx){ return 0; }
		return ($ax > $bx) ? -1 : 1;
	}	
		
	$terms = preg_replace("/\"(.*?)\"/e", "search_transform_term('\$1')", $terms);

	function search_transform_term($term){
		$term = preg_replace("/(\s)/e", "'{WHITESPACE-'.ord('\$1').'}'", $term);
		$term = preg_replace("/,/", "{COMMA}", $term);
		return $term;
	}
	$terms = preg_split("/\s+|,/", $terms);
	
	$term = preg_replace("/\{WHITESPACE-([0-9]+)\}/e", "chr(\$1)", $term);
	$term = preg_replace("/\{COMMA\}/", ",", $term);
	
	function search_split_terms($terms){

		$terms = preg_replace("/\"(.*?)\"/e", "search_transform_term('\$1')", $terms);
		$terms = preg_split("/\s+|,/", $terms);

		$out = array();

		foreach($terms as $term){

			$term = preg_replace("/\{WHITESPACE-([0-9]+)\}/e", "chr(\$1)", $term);
			$term = preg_replace("/\{COMMA\}/", ",", $term);

			$out[] = $term;
		}

		return $out;
	}

	function search_transform_term($term){
		$term = preg_replace("/(\s)/e", "'{WHITESPACE-'.ord('\$1').'}'", $term);
		$term = preg_replace("/,/", "{COMMA}", $term);
		return $term;
	}
	
	function search_escape_rlike($string){
		return preg_replace("/([.\[\]*^\$])/", '\\\$1', $string);
	}
	
		function search_db_escape_terms($terms){
		$out = array();
		foreach($terms as $term){
			$out[] = '[[:<:]]'.AddSlashes(search_escape_rlike($term)).'[[:>:]]';
		}
		return $out;
	}
	
	
?>