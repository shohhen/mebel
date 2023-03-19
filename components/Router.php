<?php 
class Router{
private $routes;
public function __construct()
{
    $routesPath = ROOT.'/config/routes.php';
    $this->routes = include($routesPath);    
}

public function getUrl(){
    if (!empty($_SERVER['REQUEST_URI'])) {
        return trim($_SERVER['PATH_INFO'],'/');
    }
}
public function run(){
    
 $uri = $this->getUrl(); 
// echo $uri;
// routes bilan ishlash
foreach ($this->routes as $uriPattern => $path) {
    if(preg_match("~$uriPattern~",$uri)){
        // 1111111
        $tashqi = preg_replace("~$uriPattern~",$path,$uri);
        // echo '<br>put-'.$tashqi.'<br>';
        //   $qiymat = explode('/',$path);
        $qiymat = explode('/',$tashqi);

           
//         //   
        $controlllernomi = array_shift($qiymat).'Controller';
        $controlllernomi = ucfirst($controlllernomi);
       
        // echo $controlllernomi;
        $metodnomi = 'action'.ucfirst(array_shift($qiymat));
        // echo'<br>'.$metodnomi;
         $parametr = $qiymat;
        // //         //Controller papkaga ulanish
        $controllerFayli = ROOT.'/controllers/'.$controlllernomi.'.php';
        if (file_exists($controllerFayli)) {
            include_once($controllerFayli);
        }
//         // obyekt hosil qilamiz
        $controllerObyekt = new $controlllernomi;
        $result = $controllerObyekt->$metodnomi();
        $result = call_user_func_array(array($controllerObyekt,$metodnomi),$parametr);
        if($result != null){
            break;
        }}}
        
    }
}
// echo $uri;
 


?>