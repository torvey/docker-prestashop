<?php 

error_reporting(E_ALL);

include('../config/config.inc.php');
include('../init.php');
include('./functions.php');

$data = json_decode(file_get_contents("data.json"), true);
$counter = 10;

// print_r($data[0]['attributes']);

if ( !defined( '_PS_ADMIN_DIR_' ) ) {
    define( '_PS_ADMIN_DIR_', getcwd() );
}
include( _PS_ADMIN_DIR_ . '/../config/config.inc.php' );

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
        $dataItem['title'],                              
        5,                                       
        $dataItem['description'],
        $dataItem['attributes'],
        $dataItem['price'],                                
        $dataItem['image'],      
        $subId,                                      
        array(Configuration::get('PS_HOME_CATEGORY'), $id, $subId)                              
    );

}
// array(                                   // Product features (array)
//     array( "name" => "Color", "value" => "Red" ),
//     array( "name" => "Height", "value" => "200cm" ),
// ),

// $id = getCategoryIdByName($dataItem['category']);
// $subId = getCategoryIdByName($dataItem['subcategory']);




?>