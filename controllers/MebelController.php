<?php
include_once ROOT.'/models/Mebel.php';
class MebelController{
    public function actionIndex(){
        $projectList = Mebel::getShortProject();
        $category = Mebel::getCategory();
        $text = Mebel::text();
        include_once ROOT.'/views/index.php';

         return true;

    }
    /* public function actionView($categoriya,$id){
        echo'to`liq yangiliklar chiqishi';
        echo'<br>'.$categoriya;
        echo'<br>'.$id;
        return true;
    } */
}
?>