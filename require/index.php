<?php 

$route=null;

if (isset($_GET["route"]) && !empty($_GET["route"]))
{
    $route = $_GET["route"];
}

else 
{
   $_GET["route"]=null;
}

require 'layout.phtml';

?>