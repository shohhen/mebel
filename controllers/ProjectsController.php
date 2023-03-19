<?php 
include_once 'models/Mebel.php';
class ProjectsController{
public function actionList(){
    $projectList = Mebel::getProjectList();
    include_once 'views/projects.php';

    return true;
}

/* public function actionView() {

        $test = Mebel::test();
  
    include_once 'views/single.php';

    return true;
} */
}
?>