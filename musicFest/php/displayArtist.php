<?php
if(isset($_GET["artist"])) {
	$searchArtist = $_GET["artist"];
	$searchArtist = preg_replace("/\s/", "", $searchArtist);

	$art = "http://api.songkick.com/api/3.0/search/artists.json?query=" . $searchArtist . "&apikey=I8P4WAkVadRwPnI2";

	$response = file_get_contents($art);
	$artists = json_decode($response, true);

	if(isset($artists["resultsPage"]["results"]["artist"])) {
		foreach($artists["resultsPage"]["results"]["artist"] as $key => $title) {
			$artistsId = $artists["resultsPage"]["results"]["artist"][$key]["id"];
			$artistsArray[] = $artistsId;
		}
	}

	if(empty($artistsArray)) {
		echo
			("<div class='grid'>
					<div class='col_12'>
						This is not a valid artist. Please enter another value and try again.
					<!-- HR.alt1 -->
					<hr class='alt1' />
					</div>
			</div>");
	} else {
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
			//echo "<pre>";
			//print_r($artists);
			//echo "</pre>";
			if(isset($artists["resultsPage"]["results"]["event"])) {
				foreach($artists["resultsPage"]["results"]["event"] as $key => $title) {
					if(isset($artists["resultsPage"]["results"]["event"][$key]["displayName"])) {
								$eventName = $artists["resultsPage"]["results"]["event"][$key]["displayName"];
						} else {
							$eventName = "Event Name is not set.";
					}

					if(isset($artists["resultsPage"]["results"]["event"][$key]["start"]["date"])) {
							$eventDate = $artists["resultsPage"]["results"]["event"][$key]["start"]["date"];
						} else {
							$eventDate = "Event ID is not set.";
						}

					if(isset($artists["resultsPage"]["results"]["event"][$key]["uri"])) {
						$venueUrl = $artists["resultsPage"]["results"]["event"][$key]["uri"];
					} else {
						$venueUrl = "Venue Url is not set.";
					}

					if(isset($artists["resultsPage"]["results"]["event"][$key]["location"]["city"])) {	
						$location = $artists["resultsPage"]["results"]["event"][$key]["location"]["city"];
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

		
}

?>