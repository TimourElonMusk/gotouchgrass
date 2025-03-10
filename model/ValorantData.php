<?php 
class ValorantData {
    private $category;

    public function __construct(string $category) {
        $this->category = $category;
    }

    public function getData() : array {
        $url = "https://valorant-api.com/v1/$this->category";
        $response = file_get_contents($url);

        $data = json_decode($response, true);

        usort($data['data'], function($a, $b) {
            return strcmp($a['displayName'], $b['displayName']);
        });
        return $data;
    }

    public function getCategory() : string {
        return $this->category;
    }
}
?>
