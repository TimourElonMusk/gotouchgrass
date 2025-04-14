<?php 
class ValorantData {
    public function getAgents(): array {
        $agents = json_decode(file_get_contents("https://valorant-api.com/v1/agents"), true);
    
        if (!isset($agents['data']) || !is_array($agents['data'])) {
            return [];
        }
    
        usort($agents['data'], function($a, $b) {
            return strcmp($a['displayName'], $b['displayName']);
        });
    
        return $agents['data'];
    }

    public function getGamemodes(): array {
        $gamemodes = json_decode(file_get_contents("https://valorant-api.com/v1/gamemodes"), true);
    
        if (!isset($gamemodes['data']) || !is_array($gamemodes['data'])) {
            return [];
        }
    
        usort($gamemodes['data'], function($a, $b) {
            return strcmp($a['displayName'], $b['displayName']);
        });
    
        return $gamemodes['data'];
    }
}
?>
