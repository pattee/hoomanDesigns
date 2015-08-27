<?php

$url = "http://api.songkick.com/api/3.0/metro_areas/24578-us-jacksonville/calendar.json?apikey=I8P4WAkVadRwPnI2";

$response = file_get_contents($url);
$events = json_decode($response, true);

if(count($events)) {
	foreach($events['resultsPage']['results']['event'] as $key => $title) {
		echo 'Event Title: ' . $events['resultsPage']['results']['event'][$key]['displayName'];
		echo '<br/>';
		echo 'Date: ' . $events['resultsPage']['results']['event'][$key]['start']['date'];
		echo '<br/>';
		echo 'Location: ' . $events['resultsPage']['results']['event'][$key]['location']['city'];
		echo '<br/>';
		echo 'Website for event: ' . $events['resultsPage']['results']['event'][$key]['uri'];
		echo '<br/>';
		echo '<br/>';
	}
}

echo "<pre>";
print_r($events);
echo "<pre>";



?>