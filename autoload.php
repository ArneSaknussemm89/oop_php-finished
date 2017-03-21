<?php
spl_autoload_register('exampleAutoLoader');

function exampleAutoLoader($class) {
  $path = str_replace('\\', '/', $class);
  include $path . '.php';
}