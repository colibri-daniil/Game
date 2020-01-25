<?php
session_start();
require "vendor/autoload.php";
$n = 90;
$app = new \atk4\ui\App("Sirup4ik");
$app->initLayout("Centered");

// $image = $app->add(["Image","https://bosend.ru/wp-content/uploads/2017/11/%D0%B8%CC%86%D0%B8%CC%86shutterstock_638418505.jpg","centered"]);

$columns = $app->add("Columns");
$col_1 = $columns->addColumn(2);
$col_2 = $columns->addColumn(12);
$col_3 = $columns->addColumn(2);

$clicker = $col_2->add(["Button","6","blue fluid big"]);
$label = $col_2->add(["Label",$_SESSION["user_id"]]);

$save = $col_2->add(["Button","Save","green big"]);

$clicker->on("click",function($clicker){
  $clicker->set("Test");
  $clicker->js()->reload();
});
