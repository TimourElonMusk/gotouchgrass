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

    //public function showAgents(): void {
        //$agents = $this->data->getAgents();
        //require_once('view/homeView.php');
    //}
}
?>
