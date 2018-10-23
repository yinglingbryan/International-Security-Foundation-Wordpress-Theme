<?php
// helper function for generating HTML

function generateHTML($h1,$h2,$p) {

	$returnHTML = "";

	$h1 = trim($h1);
	$h2 = trim($h2);
	$p = trim($p);


	if ($h1 != "") $returnHTML = $returnHTML."<h1>".$h1."</h1>";
	if ($h2 != "") $returnHTML = $returnHTML."<h3>".$h2."</h3>";
	if ($p != "") $returnHTML = $returnHTML."<p>".$p."</p>";


	return $returnHTML;

	}

// end helper functio for generating HTML
?>