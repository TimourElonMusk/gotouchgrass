<?php 
require_once('model/ValorantData.php');

class ValorantController {
    public function showAgents() {
        $agentsList = new ValorantData("agents");
        $data = $agentsList->getData();
        $category = $agentsList->getCategory();
        require_once('view/agentsView.php');
    }
}
?>
