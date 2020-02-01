<?php

require "vendor/autoload.php";

$app = new \atk4\ui\App("Sirup4ik");
$app->initLayout("Centered");

$clicker_name = $app->add(["Header","Colibri Clicker","centered"]);

$Log_in = $app->add(["Button","Log in","huge circular icon blue","icon"=>"power off"]);

$Log_in->on('click', function() {
     return new \atk4\ui\jsExpression("document.location = 'login.php'");
     });

$button_reg = $app->add(["Button","Registration","huge green","iconRight"=>"arrow circle left"]);
$button_reg->link('reg.php');
