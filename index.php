<?php
  require_once("Config/config.php");
  $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home' ;
  $arrUrl = explode("/",$url);
  $controller = $arrUrl[0];
  $method = $arrUrl[0];
  $params = "";

  if (!empty($arrUrl[1])) {

    if($arrUrl[1] != ""){
      $method = $arrUrl[1];
    }
  }

  spl_autoload_register(function($class ){
    //echo-LIBS.'core/.$class".php";
    if(file_exists(LIBS,'core/'.$class.".php")){
        required_once(LIBS.'core/'.$class.".php");
    }
  });

 ?>
