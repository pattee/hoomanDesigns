<?php
$searchLoc = $_GET['state'];
$loc = "http://api.songkick.com/api/3.0/search/locations.json?query=" . $searchLoc . "&apikey=I8P4WAkVadRwPnI2";

$response = file_get_contents($loc);
$location = json_decode($response, true);

foreach($location['resultsPage']['results']['location'] as $key => $title) {
	$placeId = $location['resultsPage']['results']['location'][$key]['metroArea']['id'];
	$placeArray[] = $placeId;
}

$newArray = array_unique($placeArray);

foreach($newArray as $key => $id) {
	$placeId = $newArray[$key];
	$searchUrl = "http://api.songkick.com/api/3.0/metro_areas/" . $placeId . "/calendar.json?apikey=I8P4WAkVadRwPnI2";
	echo $searchUrl . "<br />";
	$response = file_get_contents($searchUrl);
 	$events = json_decode($response, true);
 	//echo "<pre>";
 	//print_r($events);
 	//echo "</pre>";
}

foreach($events["resultsPage"]["results"]["event"] as $key => $title) {
				if(isset($events["resultsPage"]["results"]["event"][$key]["displayName"])) {
					$eventName = $events["resultsPage"]["results"]["event"][$key]["displayName"];
				} else {
					$eventName = "Event Name is not set.";
				}
					
				if(isset($events["resultsPage"]["results"]["event"][$key]["start"]["date"])) {
					$eventDate = $events["resultsPage"]["results"]["event"][$key]["start"]["date"];
				} else {
					$eventDate = "Event ID is not set.";
				}
					
				if(isset($events["resultsPage"]["results"]["event"][$key]["uri"])) {
					$venueUrl = $events["resultsPage"]["results"]["event"][$key]["uri"];
				} else {
					$venueUrl = "Venue Url is not set.";
				}
						
				if(isset($events["resultsPage"]["results"]["event"][$key]["location"]["city"])) {	
					$location = $events["resultsPage"]["results"]["event"][$key]["location"]["city"];
				} else {
					$location = "City is not set.";
				}


				echo
					("<div class='grid'>
							<div class='col_12'>
								<div class='col_8'>
								<h4>" . $eventName . "</h4><p>" . $location ."</p><p>From: " . $eventDate . "</p>
								<p>Website: <a href='" . $venueUrl . "' target='_blank'>" . $venueUrl . "</a></p>
								</div>
							<!-- HR.alt1 -->
							<hr class='alt1' />
							</div>
					</div>");

	} //end foreach

?>