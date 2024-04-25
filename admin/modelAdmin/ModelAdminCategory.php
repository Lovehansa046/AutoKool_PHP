<?php
class ModelAdminCategory
{
    // List
    public static function getCategoryList()
    {
        $sql = "SELECT * FROM category ORDER BY category.category_name_est ASC";
        $db = new Database();
        // $rows = массив данных
        $rows = $db->getAll($sql);
        // ---------------------------------
        return $rows;
    }
}  // class
