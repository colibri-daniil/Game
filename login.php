<?php

require "vendor/autoload.php";
require "connection.php";
session_start();

$app = new \atk4\ui\App("Sirup4ik");
$app->initLayout("Centered");

$form = $app->add(["Form"]);
$form->addField("nickname");
$form->addField("password");
$form->buttonSave->set("log in");

$model = new User($db);

$form->onSubmit(function($form)use($model){
  $model->tryLoadBy("nickname",$form->model["nickname"]);
  if (isset($model->id)) {
    if ($model["password"] == $form->model["password"]) {
      $_SESSION["user_id"] = $model->id;
      return new \atk4\ui\jsExpression('document.location = "main.php"');
  } else {
      return new \atk4\ui\jsNotify(["content" => "Wrong inpunt","color" => "red"]);
    }
  } else {
    return new \atk4\ui\jsNotify(["content" => "Wrong inpunt","color" => "red"]);
  }
});
