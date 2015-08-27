<?php
if(isset($_GET["artist"])) {
	$searchArtist = $_GET["artist"];
	$searchArtist = preg_replace("/\s/", "", $searchArtist);
}

if(isset($searchArtist)) {
	$_GET["location"] = "";
	$art = "http://api.songkick.com/api/3.0/search/artists.json?query=" . $searchArtist . "&apikey=I8P4WAkVadRwPnI2";

	$response = file_get_contents($art);
	$artists = json_decode($response, true);

	foreach($artists["resultsPage"]["results"]["artist"] as $key => $title) {
		$artistsId = $artists["resultsPage"]["results"]["artist"][$key]["id"];
		$artistsArray[] = $artistsId;
	}

	$newArtistsArray = array_unique($artistsArray);
	//print_r($newArtistsArray);
}
	
?>