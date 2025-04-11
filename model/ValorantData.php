<?php 
class ValorantData {
    private $db

    public function __construct() {
        $this->db = require "config/database.php";
    }

    public function getAgents(): array {
        if ($this->emptyMySQLDatabase()) {
            $this->saveAgents(json_decode(file_get_contents("https://valorant-api.com/v1/agents"), true))
        }
        try {
            return !$this->db->query("SELECT * FROM Agents ORDER BY displayName ASC")->fetchColumn() > 0;
        }
        catch (PDOException $e) {
            die("SQL REQUEST ERROR : " . $e->getMessage());
        }
    }

    protected function emptyMySQLDatabase() {
        try {
            return !$this->db->query("SELECT COUNT(*) FROM Agents") > 0;
        }
        catch (PDOException $e) {
            die("SQL REQUEST ERROR : " . $e->getMessage());
        }
    }

    public function saveAgents($agents) {
        foreach ($agents['data'] as $agent) {
            switch ($agent['role']['displayName']) {
                case 'Duellist':
                    $roleId = 2;
                    break;
                case 'Controller':
                    $roleId = 3;
                    break;
                case 'Sentinel':
                    $roleId = 4;
                    break;
                default:
                    $roleId = 1
                    break;
            }
            
            try {
                $this->db->prepare("INSERT INTO Agents (isPlayableCharacter, displayName, roleId, description, abilities) VALUES :isPlayableCharacter, :displayName, :roleId")->execute([
                    'isPlayableCharacter' => $agent['isPlayableCharacter'],
                    'displayName' => $agent['displayName'],
                    'roleId' => $roleId,
                    'description' => $agent['description'],
                    'abilities' => $agent['abilities']
                ]);
            }
        }
    }
        
    
        if (!isset($agents['data']) || !is_array($agents['data'])) {
            return [];
        }
    
        usort($agents['data'], function($a, $b) {
            return strcmp($a['displayName'], $b['displayName']);
        });
    
        return $agents['data'];
    }
}
?>
