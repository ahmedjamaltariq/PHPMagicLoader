<?php
//first of all extract the PHPMagicLoader.zip in the root directory of your project and then require it in your index.php class
require 'PHPMagicLoader/autoload.php';

$libraries = new MagicLoad('employees.php|company.php');
foreach ($libraries->paths as $library) { require($library);}

//now the all the libraries have been loaded in your project, you can use them.
$newEmp = new Karigar\App\Employees();


  ?>
