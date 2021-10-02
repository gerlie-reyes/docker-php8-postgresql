<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM users");
    }
}
