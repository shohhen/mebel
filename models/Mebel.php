<?php 

class Mebel{
   public static function getCategory() {
    $db = Db::getConnection();
    $category = [];
    $result = $db->query('SELECT id, name, img FROM category');
    $i = 0;
    while ($row = $result->fetch()) {
        $category[$i]['id'] = $row['id'];
        $category[$i]['name'] = $row['name'];
        $category[$i]['img'] = $row['img'];
        $i++;
    }
    return $category;
   }
   public static function getProjectList() {
    $db = Db::getConnection();
    $projectList = [];
    $result = $db->query('SELECT `projects`.id as id, projects.name as name, category.name as catname, `desciption`, projects.img FROM `projects`, `category` where cat_id=category.id;');
    $i = 0;
    while ($row = $result->fetch()) {
        $projectList[$i]['id'] = $row['id'];
        $projectList[$i]['name'] = $row['name'];
        $projectList[$i]['desciption'] = $row['desciption'];
        $projectList[$i]['img'] = $row['img'];
        $projectList[$i]['catname'] = $row['catname'];
        $i++;
    }

    
    return $projectList;
   }

   public static function getShortProject() {
    $db = Db::getConnection();
    $projectListShort = [];
    $result = $db->query('SELECT `projects`.id as id, projects.name as name, category.name as catname, `desciption`, projects.img FROM `projects`, `category` where cat_id=category.id LIMIT 2 ');
    $i = 0;
    while ($row = $result->fetch()) {
        $projectListShort[$i]['id'] = $row['id'];
        $projectListShort[$i]['name'] = $row['name'];
        $projectListShort[$i]['desciption'] = $row['desciption'];
        $projectListShort[$i]['img'] = $row['img'];
        $projectListShort[$i]['catname'] = $row['catname'];
        $i++;
    }

    
    return $projectListShort;
}
public static function text(){
    $db = Db::getConnection();
    $text = [];
    $result = $db->query('SELECT name FROM projects WHERE id=3 ');
    $i = 0;
    while ($row = $result->fetch()) {
        $text[$i]['name'] = $row['name'];
        $i++;
    }

    
    return $text;
}

public static function createProduct($name, $sortOrder, $status)
    {
        
        $db = Db::getConnection();

        $sql = 'INSERT INTO projects (name, sort_order, status) '
                . 'VALUES (:name, :sort_order, :status)';

    
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }

public static function vailed_id($id){
    $db = Db::getConnection();
    $new_query = $db->query("SELECT * FROM content WHERE id = ".$id);
    $result = $new_query->fetchAll();
    if(count($result) != 0){
      return true;
    }else{
      return false;
    }
  }
  public static function delete_new($id){
    $db = Db::getConnection();
    $db->query("DELETE FROM content WHERE id = ".$id);
  }

    /* public static function test(){
        $db = Db::getConnection();
    $test = [];
        $employeeid = trim(mysqli_real_escape_string($_GET['id']));
        $result = $db->query('SELECT `projects`.id as id, projects.name as name, `desciption`, img FROM `projects` where  projects.id ='.$employeeid.'');
        $i = 0;
        while ($row = $result->fetch()) {
        $test[$i]['id'] = $row['id'];
        $test[$i]['name'] = $row['name'];
        $test[$i]['desciption'] = $row['desciption'];
        $test[$i]['img'] = $row['img'];
        }

    
    
return $test;
    } */
}
?>