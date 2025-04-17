<?php 
require_once('model/ValorantData.php');

class ValorantController {
    private ValorantData $data;

    public function __construct(ValorantData $data) {
        $this->data = $data;
    }

    public function showHome(): void {
        require_once('view/homeView.php');
    }

    public function showAgents(): void {
        $agents = $this->data->getAgents();
        require_once('view/agentsView.php');
    }

    public function showGamemodes(): void {
        $gamemodes = $this->data->getGamemodes();
        require_once('view/gamemodesView.php');
    }

    public function showMaps(): void {
        $maps = $this->data->getMaps();
        require_once('view/mapsView.php');
    }

    public function showWeapons(): void {
        $weapons = $this->data->getWeapons();
        require_once('view/weaponsView.php');
    }
}
?>
