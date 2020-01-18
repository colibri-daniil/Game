<?php

require "vendor/autoload.php";
require "connection.php";

$app = new \atk4\ui\App("Sirup4ik");
$app->initLayout("Centered");

$form = $app->layout->add("form");
$form->setModel(new User($db));
$form->buttonSave->set("Create account");

$form->onSubmit(function($form) {
  return new \atk4\ui\jsExpression('document.location = "main.php"');
});
