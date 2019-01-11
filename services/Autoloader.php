<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 10.01.2019
 * Time: 23:06
 */

namespace app\services;

class Autoloader
{
  public function loadClass($className)
  {
    $className = str_replace(["app\\", "\\"],[$_SERVER['DOCUMENT_ROOT'] . "/../" , "/"], $className);
    $className .= ".php";

    if (file_exists($className)) {
      include $className;
    }
  }
}