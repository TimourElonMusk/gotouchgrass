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
    
        return $gamemodes['data'];
    }

    public function getMaps(): array {
        $maps = json_decode(file_get_contents("https://valorant-api.com/v1/maps"), true);
    
        if (!isset($maps['data']) || !is_array($maps['data'])) {
            return [];
        }
    
        $uniqueNames = [];
        $filteredMaps = [];
    
        foreach ($maps['data'] as $map) {
            if (!in_array($map['displayName'], $uniqueNames)) {
                $uniqueNames[] = $map['displayName'];
                $filteredMaps[] = $map;
            }
        }
    
        usort($filteredMaps, function($a, $b) {
            return strcmp($a['displayName'], $b['displayName']);
        });
    
        return $filteredMaps;
    }

    public function getWeapons(): array {
        $weapons = json_decode(file_get_contents("https://valorant-api.com/v1/weapons"), true);
    
        if (!isset($weapons['data']) || !is_array($weapons['data'])) {
            return [];
        }
    
        $categoryOrder = [
            "Sidearms",
            "SMGs",
            "Shotguns",
            "Assault Rifles",
            "Sniper Rifles",
            "Heavy Weapons",
        ];
    
        usort($weapons['data'], function ($a, $b) use ($categoryOrder) {
            $catA = $a['shopData']['categoryText'] ?? ($a['category'] === 'EEquippableCategory::Melee' ? 'Melee' : '');
            $catB = $b['shopData']['categoryText'] ?? ($b['category'] === 'EEquippableCategory::Melee' ? 'Melee' : '');
    
            $posA = array_search($catA, $categoryOrder);
            $posB = array_search($catB, $categoryOrder);
    
            if ($posA === false) $posA = count($categoryOrder);
            if ($posB === false) $posB = count($categoryOrder);
    
            if ($posA === $posB) {
                $costA = $a['shopData']['cost'] ?? 0;
                $costB = $b['shopData']['cost'] ?? 0;
    
                if ($costA === $costB) {
                    return strcmp($a['displayName'], $b['displayName']);
                }
                return $costA - $costB;
            }
    
            return $posA - $posB;
        });
        array_pop($weapons['data']);
    
        return $weapons['data'];
    }
}
?>
