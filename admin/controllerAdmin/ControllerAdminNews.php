<?php
class ControllerAdminNews
{
    // list News
    public static function newsListAdmin()
    {
        $arr = ModelAdminNews::getNewsList();
        include_once 'viewAdmin/newsListAdmin.php';
    }

    public static function newsList()
    {
        $arr = ModelAdminNews::getNewsList();
        include_once 'viewAdmin/newsList.php';
    }

    // add
    public static function newsAddForm()
    {
        $arr = ModelAdminCategory::getCategoryList();
        include_once('viewAdmin/newsAddForm.php');
    }

    public static function newsAddResult()
    {
        $test = ModelAdminNews::getNewsAdd();
        include_once('viewAdmin/newsAddForm.php');
    }

    // edit
    public static function newsEditForm($id)
    {
        $arr = ModelAdminCategory::getCategoryList();
        $detail = ModelAdminNews::getNewsDetail($id);
        include_once('viewAdmin/newsEditForm.php');
    }

    public static function newsEditResult($id)
    {
        $test = ModelAdminNews::getNewsEdit($id);
        include_once('viewAdmin/newsEditForm.php');
    }

    // delete
    public static function newsDeleteForm($application_id)
    {
        $arr = ModelAdminCategory::getCategoryList();
        $detail = ModelAdminNews::getNewsDetail($application_id);
        include_once('viewAdmin/newsDeleteForm.php');
    }

    public static function newsDeleteResult($application_id)
    {
        $test = ModelAdminNews::getNewsDelete($application_id);
        include_once('viewAdmin/newsDeleteForm.php');
    }
}  // class
