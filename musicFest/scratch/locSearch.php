<?php
if(isset($_GET["location"])) {
	$searchLoc = $_GET["location"];
	$searchLoc = preg_replace("/\s/", "", $searchLoc);
}

if(isset($searchArtist)) {
	$_GET["artist"] = "";
	$loc = "http://api.songkick.com/api/3.0/search/locations.json?query=" . $searchLoc . "&apikey=I8P4WAkVadRwPnI2";

	$response = file_get_contents($loc);
	$location = json_decode($response, true);

	foreach($location["resultsPage"]["results"]["location"] as $key => $title) {
		$placeId = $location["resultsPage"]["results"]["location"][$key]["metroArea"]["id"];
		$placesArray[] = $placeId;
	}

	$newPlacesArray = array_unique($placesArray);
	//print_r($newPlacesArray);
}

?>