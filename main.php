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

$slicer = $col_2->add(['View','template' => new \atk4\ui\Template('
<div id="{$_id}" class="ui statistic">
 <input type="button" id="clicke" value=0 onclick=Clicker() style="width:500px;height:100px;background-color:green;color:white;font-size:35px;">
</div>
<script>
 function Clicker() {
   var click = document.getElementById("clicke");
   click.value = parseInt(click.value) + 1;
 }
</script>')]);

$slicer = $col_2->add(['View','template' => new \atk4\ui\Template('
<div id="{$_id}" class="ui statistic">
 <input type="button" value="Save" onclick=Save() style="width:500px;height:100px;background-color:green;color:white;font-size:35px;">
</div>
<script>
function Save() {
  var click = document.getElementById("clicke");
  var link = \"save.php?val=\"+click.value;
  window.open(link);
}
</script>')]);

//$val = $col_2->add(["FormField/Line", "45"]);

//$clicker = $col_2->add(["Button",$_SESSION["i"],"blue fluid big"]);
//$save = $col_2->add(["Button","Save","green big"]);
//$clicker->js("click", new \atk4\ui\jsReload($val, ["val" => $val->jsInput()->val(new \atk4\ui\jsExpression("parseInt([])+1", [$val->jsInput()->val()]), $val->jsInput()->focus())]));

$exit = $app->add(["Button","Exit","red"]);
$exit->link(["exit"]);

$x2 = $col_3->add(["Button","click x2","inverted mediun yellow"]);

$pus = $col_3->add(["Button","+0.5 cli/sek","inverted mediun purple"]);
