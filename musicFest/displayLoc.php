<?php
    echo "time to crunch";
$searchLoc = "Gainesville, FL";
	$searchLoc = preg_replace("/\s/", "", $searchLoc);
	if(!preg_match("/,..$/", $searchLoc)) {
		$searchLoc = substr_replace($searchLoc, ",", -2, 0);
	}

echo $searchLoc;

if(isset($_GET["location"])) {
	$searchLoc = $_GET["location"];
	$searchLoc = preg_replace("/\s/", "", $searchLoc);
	if(!preg_match("/,..$/", $searchLoc)) {
		$searchLoc = substr_replace($searchLoc, ",", -2, 0);
	}


	$loc = "http://api.songkick.com/api/3.0/search/locations.json?query=" . $searchLoc . "&apikey=I8P4WAkVadRwPnI2";

	$response = file_get_contents($loc);
	$location = json_decode($response, true);

	if(isset($location["resultsPage"]["results"]["location"])) {
		foreach($location["resultsPage"]["results"]["location"] as $key => $title) {
			$placeId = $location["resultsPage"]["results"]["location"][$key]["metroArea"]["id"];
			$placesArray[] = $placeId;
		}
	}

	if(empty($placesArray)) {
		echo
			("<div class='grid'>
					<div class='col_12'>
						This is not a valid destination/location. Please enter another value and try again.
					<!-- HR.alt1 -->
					<hr class='alt1' />
					</div>
			</div>");	
	} else {
		$newPlacesArray = array_unique($placesArray);
		//print_r($newPlacesArray);

		foreach($newPlacesArray as $key => $id) {
			$placeId = $newPlacesArray[$key];
			//echo $placeId . " ";
			$searchUrl = "http://api.songkick.com/api/3.0/metro_areas/" . $placeId . "/calendar.json?apikey=I8P4WAkVadRwPnI2";
			//echo $searchUrl . "<br />";
			$response = file_get_contents($searchUrl);
		 	$events = json_decode($response, true);
		 	//echo "<pre>";
		 	//print_r($events);
		 	//echo "</pre>";
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
		 	}
		}
	}
} 

?>

<script>console.log('i need to figure this out and I will');</script>