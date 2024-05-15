<?php

class Personal
{
    static function getAllPersonal()
    {
        $query = "SELECT * FROM staff ORDER BY staff_id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
}