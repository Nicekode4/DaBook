<?php
class Song {
    public $id;
    public $title;
    public $content;
    public $artist_id;
    public $created_at;
    public $updated_at;

    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    // Functions herunder
}
?>