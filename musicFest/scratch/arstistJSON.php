<?php
//this is the json call for the artist
if(isset($_GET['artist'])) {
	$searchArtist = $_GET['artist'];
	$searchArtist = preg_replace('/\s/', '', $searchArtist);
} else $searchArtist = "pink";

$art = "http://api.songkick.com/api/3.0/search/artists.json?query=" . $searchArtist . "&apikey=I8P4WAkVadRwPnI2";

$response = file_get_contents($art);
$artists = json_decode($response, true);

foreach($artists['resultsPage']['results']['artist'] as $key => $title) {
	$artistsId = $artists['resultsPage']['results']['artist'][$key]['id'];
	$artistsArray[] = $artistsId;
}

$newArtistsArray = array_unique($artistsArray);
//print_r($newArtistsArray);

foreach($newArtistsArray as $key => $id) {
	$artistId = $newArtistsArray[$key];
	//echo $artistId . "<br/>";
	//http://api.songkick.com/api/3.0/artists/53846/calendar.json?apikey=I8P4WAkVadRwPnI2
	$artistsURL = "http://api.songkick.com/api/3.0/artists/" . $artistId . "/calendar.json?apikey=I8P4WAkVadRwPnI2";
	
	//echo $artistsURL;
	//echo "<br />";
	$response = file_get_contents($artistsURL);
	$artists = json_decode($response, true);
	echo "<pre>";
	print_r($artists);
	echo "</pre>";
	/*if(isset($artists["resultsPage"]["results"]["event"])) {
		foreach($artists["resultsPage"]["results"]["event"] as $key => $title) {
			if(isset($artists["resultsPage"]["results"]["event"][$key]["displayName"])) {
						$eventName = $artists["resultsPage"]["results"]["event"][$key]["displayName"];
						echo $eventName;
						echo "<br />";
				} else {
					$eventName = "Event Name is not set.";
			}

			if(isset($events["resultsPage"]["results"]["event"][$key]["start"]["date"])) {
					$eventDate = $events["resultsPage"]["results"]["event"][$key]["start"]["date"];
				} else {
					$eventDate = "Event Date is not set.";
					echo $eventDate;
					echo "<br />";
				}
			echo "<br />";
		}
	}*/
}
	

?>