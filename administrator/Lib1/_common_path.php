<?php
$Path = array();
$cf = array();

unset($Path);
unset($cf);

$Path['Abs_Path'] = "..";
$Path['Rel_Path'] = "/";

$Path['Path'] = "/";
$Path['Url'] = "";
$Path['Http'] = $Path['Url'];

$Path['Lib'] = "Lib1";
$Path['Function'] = "{$Path['Lib']}/function";
$Path['FileData'] = "{$Path['Path']}/FileData";
$Path['Class'] = "{$Path['Lib']}/class";
$Path['Folder'] = str_replace($_SERVER['DOCUMENT_ROOT'], "", $Path['FileData']);

//########################## USER ########################################//
$Path['Js'] = "{$Path['Rel_Path']}/js";


//########################## ADMIN ########################################//
$Path['Admin'] = "{$Path['Abs_Path']}";
$Path['Admin_Cate'] = "{$Path['Admin']}/cate";
$Path['Admin_Post'] = "{$Path['Admin']}/post";

//$Path['Admin_Image'] = "{$Path['Admin']}/img";
//$Path['Admin_Image'] = "{$Path['Admin']}/css";

?>

