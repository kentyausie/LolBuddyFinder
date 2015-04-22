<?php
$url = "https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/wretchedthrawn?api_key=01edb1d0-a26b-4f78-afbb-3eeb9de5b0f9";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo "My token: ". $json_data["wretchedthrawn"];
?>