<?php 
return
array(
'projects'=>'projects/list',
'view'=>'projects/view',
'mebel'=>'mebel/index',
'about'=>'about/index',
'contact'=>'about/contact',
'projects/([0-9]+)' => 'mebel/view/$1',
'home'=>'mebel/index',
'user/register'=>'user/register',
'user/login'=>'user/login',
'user/logout'=>'user/logout',
'cabinet/edit/([0-9]+)'=>'cabinet/edit/$1',
'cabinet/delete/([0-9]+)'=>'cabinet/delete/$1',
'cabinet/create'=>'cabinet/create',
'cabinet'=>'cabinet/index',

)

?>