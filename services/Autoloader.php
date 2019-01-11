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
    $fileRoute = substr($className, 4);
    $fullFileRoute = $_SERVER['DOCUMENT_ROOT'] . "/../" . "{$fileRoute}.php";

    if (file_exists($fullFileRoute)) {
      include $fullFileRoute;
    }
  }
}