<?php 
class ValorantModel {
    // Return an associative table sorted in alphabetical order describing all the valorant agents in the json format
    public function getAgent() {
        $url = "https://valorant-api.com/v1/agents";
        $response = file_get_contents($url);

        $agents == json_decode($response, true);

        //sorting in alphabetical order
        usort($agents['displayName'], function($a, $b) {
            return strcmp($a['displayName'], $b['displayName']);
        });
        return $agents;
    }
}
?>
