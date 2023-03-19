<?php 

class AboutController {
    public function actionIndex() {

        include_once 'views/about.php';
    }

    public function actionContact(){
        include_once 'views/contact.php';
    }
}   

?>
