<?php 
class ValorantData {
    public function getAgents() : array {
        $url = "https://valorant-api.com/v1/agents";
        $response = file_get_contents($url);

        $agents = json_decode($response, true);

        usort($agents['data'], function($a, $b) {
            return strcmp($a['displayName'], $b['displayName']);
        });
        return $agents;
    }
}
?>
