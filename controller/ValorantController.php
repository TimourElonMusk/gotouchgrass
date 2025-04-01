<?php 
require_once('model/ValorantData.php');

class ValorantController {
    public function showAgents() {
        $agentsList = new ValorantData("agents");
        $agents = $agentsList->getAgents();
        require_once('view/indexView.php');
    }
}
?>
