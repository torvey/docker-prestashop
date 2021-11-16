<?php 

error_reporting(E_ALL);

if (!defined('_PS_ADMIN_DIR_')) {
    define('_PS_ADMIN_DIR_', getcwd());
}
include(_PS_ADMIN_DIR_.'/../config/config.inc.php');

include('../init.php');
include('./functions.php');

$data = json_decode(file_get_contents("data.json"), true);
$counter = 10;

foreach($data as $dataItem) {
    
    $categories = Category::getCategories( (int)($cookie->id_lang), true, false);

    $isCategoryInArray = findExisiting($categories, $dataItem['category']);
    $isSubCategoryinArray = findExisiting($categories, $dataItem['subcategory']);


    if(!$isCategoryInArray) {

        $object = new Category();
        
        $object->force_id = true;
        
        $object->id = $counter;

        $object->name = array((int)Configuration::get('PS_LANG_DEFAULT') => $dataItem['category']);

        $object->id_parent = Configuration::get('PS_HOME_CATEGORY');

        $object->link_rewrite = array((int)Configuration::get('PS_LANG_DEFAULT') =>  getCategoryLink($dataItem['category']));

        $object->add();

        $counter++;
    }

    if(!$isSubCategoryinArray) {

        $id = getCategoryIdByName($dataItem['category']);

        $object = new Category();
        
        $object->force_id = true;
        
        $object->id = $counter;

        $object->name = array((int)Configuration::get('PS_LANG_DEFAULT') => $dataItem['subcategory']);

        $object->id_parent = $id;

        $object->link_rewrite = array((int)Configuration::get('PS_LANG_DEFAULT') =>  getCategoryLink($dataItem['subcategory']));

        $object->add();

        $counter++;

    }

    $id = getCategoryIdByName($dataItem['category']);
    $subId = getCategoryIdByName($dataItem['subcategory']);

    addProduct(
        '1234567891234',                         
        $dataItem['reference'],                                           
        $dataItem['title'],                              
        50,                                       
        $dataItem['description'],
        $dataItem['attributes'],
        $dataItem['price'] * 100 / 123,                                
        $dataItem['image'],      
        $subId,                                      
        array(Configuration::get('PS_HOME_CATEGORY'), $id, $subId)                              
    );

}





?>