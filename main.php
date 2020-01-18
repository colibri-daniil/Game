<?php

require "vendor/autoload.php";

$app = new \atk4\ui\App("Sirup4ik");
$app->initLayout("Centered");

// $image = $app->add(["Image","https://bosend.ru/wp-content/uploads/2017/11/%D0%B8%CC%86%D0%B8%CC%86shutterstock_638418505.jpg","centered"]);

$columns = $app->add("Columns");
$col_1 = $columns->addColumn(2);
$col_2 = $columns->addColumn(12);
$col_3 = $columns->addColumn(2);

$clicker = $col_2->add(["Button","7657856876578678767867867568569","blue fluid big"]);
$clicker->on("click",function($clicker){
  $clicker->set("Test");
  $clicker->js()->reload();
});
